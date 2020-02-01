<?php

namespace Biz\UpdateDatabaseStructure\Job;

use Codeages\Biz\Framework\Scheduler\AbstractJob;

class HandlingTimeConsumingUpdateStructuresJob extends AbstractJob
{
    /*
     * HandlingTimeConsumingUpdateStructuresJob使用范围：
     * 1.因为表过大导致执行时间不可控的加索引sql语句
     * 2.表量级很大，想要添加和业务代码没有强关联的添加字段或者修改字段属性的sql语句，字段的缺失会导致业务报错的语句，严禁在JOB执行
     *
     */
    public function execute()
    {
        $this->addTableIndex();
    }

    protected function addTableIndex()
    {
        /*
         *  Table  biz_pay_trade
         *  Index  user_id
         *  Column user_id
         */
        $this->createIndex('biz_pay_trade', 'user_id', 'user_id');

        /*
         *  Table  course_member
         *  Index  userid
         *  Column userId
         */
        $this->createIndex('course_member', 'userid', 'userId');

        /*
         *  Table  course_member
         *  Index  role_classroom_createdTime
         *  Column role, classroomId, createdTime
         */
        $this->createIndex('course_member', 'role_classroom_createdTime', 'role, classroomId, createdTime');

        /*
         *  Table  course_task_result
         *  Index  finishedTime
         *  Column finishedTime
         */
        $this->createIndex('course_task_result', 'finishedTime', 'finishedTime');

        /*
         *  Table  member_operation_record
         *  Index  operateType_operateTime
         *  Column operate_type, operate_time
         */
        $this->createIndex('member_operation_record', 'operateType_operateTime', 'operate_type, operate_time');

        /*
         *  Table  xapi_activity_watch_log
         *  Index  userId_activityId
         *  Column user_id, activity_id
         */
        $this->createIndex('xapi_activity_watch_log', 'userId_activityId', 'user_id, activity_id');

        /*
         *  Table  member_operation_record
         *  Index  operateType_targetType
         *  Column operate_type, target_type
         */
        $this->createIndex('member_operation_record', 'operateType_targetType', 'operate_type, target_type');

        /*
         *  Table  member_operation_record
         *  Index  operate_time
         *  Column operate_time
         */
        $this->createIndex('member_operation_record', 'operate_time', 'operate_time');

        /*
         *  Table  status
         *  Index  classroomId_createdTime
         *  Column classroomId, createdTime
         */
        $this->createIndex('status', 'classroomId_createdTime', 'classroomId, createdTime');

        /*
         *  Table  user
         *  Index  verifiedMobile
         *  Column verifiedMobile
         */
        $this->createIndex('user', 'verifiedMobile', 'verifiedMobile');

        /*
         *  Table  course_task_result
         *  UniqueIndex  courseTaskID_userId
         *  Column courseTaskId, userId
         */
        $this->createUniqueIndex('course_task_result', 'courseTaskId_userId', 'courseTaskId, userId');
    }

    protected function changeTableFiledType()
    {
        /*
         *  Table  course_set_v8
         *  Field  summary
         *  FieldType longtext
         */
        $this->changeFiledType('course_set_v8', 'summary', 'longtext');
    }

    protected function getConnection()
    {
        $biz = $this->getBiz();

        return $biz['db'];
    }

    protected function isIndexExist($table, $indexName)
    {
        $sql = "show index from `{$table}` where Key_name = '{$indexName}';";
        $result = $this->getConnection()->fetchAssoc($sql);

        return empty($result) ? false : true;
    }

    protected function createIndex($table, $index, $column)
    {
        if (!$this->isIndexExist($table, $index)) {
            $this->getConnection()->exec("ALTER TABLE {$table} ADD INDEX {$index} ({$column});");
        }
    }

    protected function createUniqueIndex($table, $index, $column)
    {
        if (!$this->isIndexExist($table, $index)) {
            $this->getConnection()->exec("ALTER TABLE {$table} ADD UNIQUE INDEX {$index} ({$column});");
        }
    }

    protected function changeFiledType($table, $fieldName, $fieldType, $length = '')
    {
        if ($this->shouldFiledTypeChanged($table, $fieldName, $fieldType)) {
            $this->getConnection()->exec("ALTER TABLE {$table} MODIFY COLUMN {$fieldName} {$fieldType}{$length};");
        }
    }

    protected function shouldFiledTypeChanged($table, $fieldName, $fieldType)
    {
        $sql = "show columns from `{$table}` where Field = '{$fieldName}';";
        $result = $this->getConnection()->fetchAssoc($sql);

        $shouldFiledTypeChanged = false;

        if (!empty($result) && array_key_exists('Type', $result)) {
            if ($result['Type'] != $fieldType) {
                $shouldFiledTypeChanged = true;
            }
        }

        return $shouldFiledTypeChanged;
    }

    protected function getBiz()
    {
        return $this->biz;
    }
}
