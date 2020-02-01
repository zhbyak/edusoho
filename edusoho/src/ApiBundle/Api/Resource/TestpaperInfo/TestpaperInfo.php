<?php

namespace ApiBundle\Api\Resource\TestpaperInfo;

use ApiBundle\Api\ApiRequest;
use ApiBundle\Api\Resource\AbstractResource;
use Biz\Activity\Service\ActivityService;
use Biz\Common\CommonException;
use Biz\Task\Service\TaskService;
use Biz\Task\TaskException;
use Biz\Testpaper\Service\TestpaperService;
use Biz\Testpaper\TestpaperException;
use Biz\User\UserException;

class TestpaperInfo extends AbstractResource
{
    public function get(ApiRequest $request, $testId)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw UserException::UN_LOGIN();
        }

        $testpaper = $this->getTestpaperService()->getTestpaper($testId);

        if (empty($testpaper)) {
            throw TestpaperException::NOTFOUND_TESTPAPER();
        }

        $items = $this->getTestpaperService()->showTestpaperItems($testId);
        $testpaper['metas']['question_type_seq'] = array_keys($items);
        $results = array(
            'testpaper' => $testpaper,
            'items' => $this->filterTestpaperItems($items),
        );

        $targetType = $request->query->get('targetType');
        $targetId = $request->query->get('targetId');
        if (empty($targetType) || empty($targetId)) {
            throw CommonException::ERROR_PARAMETER();
        }
        $method = 'handle'.$targetType;
        if (!method_exists($this, $method)) {
            throw CommonException::NOTFOUND_METHOD();
        }
        $this->$method($user, $testpaper, $targetId, $results);

        return $results;
    }

    protected function handleTask($user, $testpaper, $taskId, &$results)
    {
        $task = $this->getTaskService()->tryTakeTask($taskId);
        if (empty($task)) {
            throw TaskException::NOTFOUND_TASK();
        }
        $activity = $this->getActivityService()->getActivity($task['activityId'], true);
        if ('testpaper' != $activity['mediaType'] || $activity['ext']['mediaId'] != $testpaper['id']) {
            throw TestpaperException::NOT_TESTPAPER_TASK();
        }

        $testpaperResult = $this->getTestpaperService()->getUserLatelyResultByTestId(
            $user['id'],
            $testpaper['id'],
            $activity['fromCourseId'],
            $activity['id'],
            $testpaper['type']
        );

        if (!empty($testpaperResult)) {
            $results['testpaperResult'] = $testpaperResult;
        }

        $task['activity'] = $activity;
        $results['task'] = $task;
    }

    private function filterTestpaperItems($items)
    {
        $itemArray = array();

        foreach ($items as $questionType => $item) {
            $itemArray[$questionType] = count($item);
        }

        return $itemArray;
    }

    /**
     * @return TestpaperService
     */
    protected function getTestpaperService()
    {
        return $this->getBiz()->service('Testpaper:TestpaperService');
    }

    /**
     * @return TaskService
     */
    protected function getTaskService()
    {
        return $this->service('Task:TaskService');
    }

    /**
     * @return ActivityService
     */
    protected function getActivityService()
    {
        return $this->service('Activity:ActivityService');
    }
}
