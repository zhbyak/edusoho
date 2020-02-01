<?php

/* task/show.html.twig */
class __TwigTemplate_0c068ae4a1e92c9baa681b681c36486d64663dc9033214c3028c1638806590b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "task/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "";
        // line 6
        $context["weChatUser"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("WeChatUser", array("userId" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()),  -1)) : ( -1))));
        // line 7
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-server.js", 1 => "libs/perfect-scrollbar.js", 2 => "libs/es-ckeditor/ckeditor.js", 3 => "app/js/task/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $context["preview"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "preview"), "method");
        // line 11
        echo "
  ";
        // line 12
        if (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) != "student")) {
            // line 13
            echo "    ";
            $context["preview"] = true;
            // line 14
            echo "  ";
        }
        // line 15
        echo "
  <div id=\"js-hidden-data\">
    <input type=\"hidden\" name=\"course-id\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "courseId", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"task-result-status\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taskResult"] ?? null), "status", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"mode\" value=\"";
        // line 20
        if (($context["preview"] ?? null)) {
            echo "preview";
        } else {
            echo "learn";
        }
        echo "\">
    <input type=\"hidden\" name=\"plugins_url\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show_plugins", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
  </div>

  <div class=\"task-dashboard-page js-task-dashboard-page\">
    <div class=\"dashboard-content\" id=\"dashboard-content\">
      <div class=\"dashboard-header\">
        <a class=\"back-link js-back-link\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"es-icon es-icon-chevronleft\"></i>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.back_course_btn"), "html", null, true);
        echo "
        </a>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "number", array()), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? null), "title", array()), "html", null, true);
        echo "
        ";
        // line 31
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.wechat_notification_enabled"), false) &&  !(($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", array()), false)) : (false)))) {
            // line 32
            echo "          <span class=\"pull-right cd-text-lg js-wechat-qrcode-btn wechat-inform-task hidden-xs\" data-img=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.account_code"), "html", null, true);
            echo "\" ";
            if ( !($context["weChatUser"] ?? null)) {
                echo "data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_wechat_qrcode");
                echo "\"";
            }
            echo "><span class=\"wechat-inform-task__tip cd-mr8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wechat.notification.course_notification_open"), "html", null, true);
            echo "</span><i class=\"es-icon es-icon-qr-code\"></i></span>
        ";
        }
        // line 34
        echo "      </div>
      <div class=\"dashboard-body\">
        <div class=\"";
        // line 36
        if (twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "exercise", 1 => "homework", 2 => "testpaper"))) {
            echo " mobile-scroll-wrapper ";
        }
        echo " all-wrapper ";
        if (twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video"))) {
            echo " js-video-wrapper ";
        }
        echo "\">
          <iframe id=\"task-content-iframe\" class=\"task-content-iframe js-task-content-iframe\" name=\"task-content-iframe\"
            data-next-task-url=\"";
        // line 38
        if (($context["nextTask"] ?? null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["nextTask"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
        }
        echo "\"
            data-event-enable=\"";
        // line 39
        if (($context["allowEventAutoTrigger"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
            data-event-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_trigger", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\"
            data-last-time=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "html", null, true);
        echo "\"
            data-learn-time-sec=\"";
        // line 42
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.learn_time_sec"), 60), "html", null, true);
        echo "\"
            data-last-learn-time=\"";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["taskResult"] ?? null), "lastLearnTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taskResult"] ?? null), "lastLearnTime", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-user-id=\"";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["taskResult"] ?? null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["taskResult"] ?? null), "userId", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-file-id=\"";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["media"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["media"] ?? null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\"
            data-url=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_activity_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "preview" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "preview"), "method"))), "html", null, true);
        echo "\"
            src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_activity_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()), "preview" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "preview"), "method"), "blank" => true)), "html", null, true);
        echo "\"
            style=\"width:100%;height:100%;border:0px\"
            allowfullscreen webkitallowfullscreen>
          </iframe>
        </div>
      </div>
      <div class=\"dashboard-footer js-dashboard-footer ";
        // line 53
        if (((((((( !twig_test_empty(($context["media"] ?? null)) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal")) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false)) && ($this->getAttribute(($context["media"] ?? null), "type", array()) == "video")) && ($this->getAttribute(($context["media"] ?? null), "storage", array()) == "cloud")) && ($this->getAttribute(($context["media"] ?? null), "audioConvertStatus", array()) == "success")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close-convert-audio-ad", 1 => false), "method"))) {
            echo " dashboard-footer--audio";
        }
        echo "\">
        <div class=\"pull-left js-audio-convert-box audio-convert-tip\">
          ";
        // line 55
        if (((((((( !twig_test_empty(($context["media"] ?? null)) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal")) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false)) && ($this->getAttribute(($context["media"] ?? null), "type", array()) == "video")) && ($this->getAttribute(($context["media"] ?? null), "storage", array()) == "cloud")) && ($this->getAttribute(($context["media"] ?? null), "audioConvertStatus", array()) == "success")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "close-convert-audio-ad", 1 => false), "method"))) {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.show.video.convert.client.try"), "html", null, true);
            echo "
            <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
            <a class=\"js-audio-convert-ad\" href=\"javascript:;\" data-cookie=\"close-convert-audio-ad\"><i class=\"es-icon es-icon-icon_close_circle text-xlg\"></i><span class=\"hidden-xs\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.show.video.convert.client.notify"), "html", null, true);
            echo "</span></a>
          ";
        }
        // line 60
        echo "        </div>
        <div class=\"btn-group pull-left visible-xs js-mobile-btn\" role=\"group\">
          <a class=\"btn btn-default  ";
        // line 62
        if ( !((array_key_exists("previousTask", $context)) ? (_twig_default_filter(($context["previousTask"] ?? null), null)) : (null))) {
            echo " disabled ";
        }
        echo "\"
             ";
        // line 63
        if (((array_key_exists("previousTask", $context)) ? (_twig_default_filter(($context["previousTask"] ?? null), null)) : (null))) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["previousTask"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
        }
        echo "><strong class=\"es-icon es-icon-chevronleft text-xlg\"></strong></a>
         ";
        // line 64
        $context["task_disable"] = (($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "lockMode") && ($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish"));
        // line 65
        echo "          <a class=\"btn btn-default js-next-mobile-btn  ";
        if ( !((array_key_exists("nextTask", $context)) ? (_twig_default_filter(($context["nextTask"] ?? null), null)) : (null))) {
            echo " disabled  ";
        }
        echo "\"
             ";
        // line 66
        if (($context["task_disable"] ?? null)) {
            // line 67
            echo "               data-toggle=\"popover\"
               data-trigger=\"hover\"
               data-placement=\"top\"
               data-content=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.learning_hint"), "html", null, true);
            echo "\"
             ";
        }
        // line 72
        echo "              ";
        if (((array_key_exists("nextTask", $context)) ? (_twig_default_filter(($context["nextTask"] ?? null), null)) : (null))) {
            // line 73
            echo "                ";
            if ((($this->getAttribute(($context["course"] ?? null), "learnMode", array()) == "lockMode") && ($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish"))) {
                // line 74
                echo "                  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                ";
            } else {
                // line 76
                echo "                  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["nextTask"] ?? null), "id", array()))), "html", null, true);
                echo "\"
                ";
            }
            // line 78
            echo "              ";
        }
        echo "><strong class=\"es-icon es-icon-chevronright text-xlg\"></strong></a>
        </div>
        <div class=\"state-opration js-state-opration\" data-learnmode=\"";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["course"] ?? null), "learnMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "learnMode", array()), "freeMode")) : ("freeMode")), "html", null, true);
        echo "\">
          <a class=\"btn btn-gray text-sm js-learn-prompt ";
        // line 81
        if (twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video"))) {
            echo "js-learn-video-prompt";
        }
        echo " ";
        if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish")) {
            echo "open";
        }
        echo "\"
            href=\"javascript:;\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"top\"
            ";
        // line 86
        if (((twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video")) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient()) &&  !$this->env->getExtension('AppBundle\Twig\WebExtension')->isIOSClient())) {
            echo "data-container=\"body\"";
        }
        // line 87
        echo "            data-content='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_manage.finish_tips"), "html", null, true);
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Task:finishCondition", array("task" => ($context["task"] ?? null))));
        echo "'>
            <i class=\"es-icon es-icon-help mrs text-md\"></i>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.finish_condition", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
          </a>
          <span class=\"btn text-sm js-learned-prompt color-primary ";
        // line 90
        if (twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video"))) {
            echo " js-learned-video-prompt ";
        }
        if ((twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video")) && ($context["nextTask"] ?? null))) {
            echo " js-next-task";
        }
        echo " ";
        if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) == "finish")) {
            echo "open";
        }
        echo "\"
              href=\"javascript:;\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"top\"
              ";
        // line 95
        if (((twig_in_filter($this->getAttribute(($context["task"] ?? null), "type", array()), array(0 => "video")) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient()) &&  !$this->env->getExtension('AppBundle\Twig\WebExtension')->isIOSClient())) {
            echo "data-container=\"body\"";
        } else {
            echo "data-container=\".js-learned-prompt\"";
        }
        // line 96
        echo "              data-content='";
        $this->loadTemplate("task/task-finished-prompt.html.twig", "task/show.html.twig", 96)->display($context);
        echo "'
              data-url=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finished_prompt", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-iccheckcircleblack24px mrs text-md\"></i>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.finish_btn", array("%taskName%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.task_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting_course.task")))), "html", null, true);
        echo "
          </span>
        </div>
        ";
        // line 101
        if (((($this->getAttribute(($context["course"] ?? null), "enableFinish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableFinish", array()), 0)) : (0)) == 1)) {
            // line 102
            echo "          <a type=\"button\" href=\"javascript:;\"
            ";
            // line 103
            if (($this->getAttribute(($context["taskResult"] ?? null), "status", array()) != "finish")) {
                // line 104
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn\"
              id='learn-btn'
              data-url='";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_finish", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "id" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
                echo "'
            ";
            } else {
                // line 108
                echo "              class=\"btn btn-transparent btn-learn js-btn-learn active\"
            ";
            }
            // line 109
            echo ">
              <i class=\"es-icon es-icon--check-circle done\"></i>
              <i class=\"es-icon es-icon-undone-check doing\"></i>
            ";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.task.learning.learned_btn"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 115
        echo "
      </div>
    </div>
    <div class=\"dashboard-sidebar hidden-xs\" id=\"dashboard-sidebar\">

    </div>
  </div>

  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
    ";
        // line 126
        $this->loadTemplate("event_report.html.twig", "task/show.html.twig", 126)->display(array_merge($context, array("eventName" => "task.view", "subjectType" => "courseMember", "subjectId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "eventReportParams" => array())));
        // line 127
        echo "    ";
        $this->loadTemplate("activity/ltc-server/js-loader.html.twig", "task/show.html.twig", 127)->display(array_merge($context, array("taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()), "courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()))));
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 128,  400 => 127,  398 => 126,  392 => 123,  382 => 115,  376 => 112,  371 => 109,  367 => 108,  362 => 106,  358 => 104,  356 => 103,  353 => 102,  351 => 101,  345 => 98,  341 => 97,  336 => 96,  330 => 95,  313 => 90,  308 => 88,  302 => 87,  298 => 86,  284 => 81,  280 => 80,  274 => 78,  268 => 76,  262 => 74,  259 => 73,  256 => 72,  251 => 70,  246 => 67,  244 => 66,  237 => 65,  235 => 64,  227 => 63,  221 => 62,  217 => 60,  212 => 58,  206 => 57,  201 => 56,  199 => 55,  192 => 53,  183 => 47,  179 => 46,  175 => 45,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  147 => 39,  141 => 38,  130 => 36,  126 => 34,  112 => 32,  110 => 31,  103 => 30,  98 => 28,  94 => 27,  85 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  36 => 3,  32 => 1,  30 => 7,  28 => 6,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/show.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/show.html.twig");
    }
}
