<?php

/* @activity/video/resources/views/create_or_update_body.html.twig */
class __TwigTemplate_c612073d5f123145acd79d9ca2a662b55414b12a8cb5db7615111bea1b11d0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("activity/activity-layout.html.twig", "@activity/video/resources/views/create_or_update_body.html.twig", 1);
        $this->blocks = array(
            'activity_step' => array($this, 'block_activity_step'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "activity/activity-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/ltc-sdk-client.js", 1 => $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("uploader"), 2 => "libs/perfect-scrollbar.js", 3 => "videoactivity/js/create/index.js"));
        // line 3
        $context["length"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->convertMinuteAndSecond((($this->getAttribute(($context["activity"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "length", array()), 0)) : (0)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_activity_step($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"tab-pane js-course-tasks-pane active js-step2-view\">
    <form class=\"form-horizontal\" id=\"step2-form\" data-media-id=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "mediaId", array()), null)) : (null)), "html", null, true);
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"title\" class=\"control-label-required\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.title_name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <input id=\"title\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" >
          <div class=\"help-block\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.help_block"), "html", null, true);
        echo "</div>
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-2 control-label\">
          <label for=\"media\" class=\"style control-label-required\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          ";
        // line 21
        if (((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)) && ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaSource", array()) != "self"))) {
            // line 22
            echo "            ";
            $context["selectedFile"] = array("status" => "none", "source" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaSource", array()), "uri" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaUri", array()));
            // line 23
            echo "          ";
        }
        // line 24
        echo "          ";
        $this->loadTemplate("file-chooser/file-choose.html.twig", "@activity/video/resources/views/create_or_update_body.html.twig", 24)->display(array_merge($context, array("mediaType" => "video", "courseId" => $this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), "fileType" => "video", "file" => (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "file", array()), null)) : (null)), "link" => (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), null)) : (null)), "selectedFile" => ((array_key_exists("selectedFile", $context)) ? (_twig_default_filter(($context["selectedFile"] ?? null), null)) : (null)))));
        // line 25
        echo "        </div>
      </div>
      <div class=\"form-group for-video-type\" id=\"lesson-length-form-group\">
        <div class=\"col-sm-2 control-label for-video-type\">
          <label class=\"control-label-required\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.time"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-sm-10\">
          <!-- todo:mediaId 和 ext_mediaId的字段整改 -->
          <input class=\"form-control width-150 js-length\" id=\"minute\" type=\"text\" name=\"minute\"
                 value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["length"] ?? null), "minute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["length"] ?? null), "minute", array()), null)) : (null)), "html", null, true);
        echo "\"><span class=\"mhs\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.minute"), "html", null, true);
        echo "</span><input
            class=\"form-control width-150 js-length\" id=\"second\" type=\"text\" name=\"second\"
            value=\"";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["length"] ?? null), "second", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["length"] ?? null), "second", array()), null)) : (null)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date.second"), "html", null, true);
        echo "
          <input type=\"hidden\" id=\"length\" name=\"length\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["activity"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["activity"] ?? null), "length", array()), 0)) : (0)), "html", null, true);
        echo "\">
        </div>
      </div>

      ";
        // line 41
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud") && ((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaSource", array()), "self")) : ("self")) == "self"))) {
            // line 42
            echo "        <div class=\"form-group for-video-subtitle\" id=\"video-subtitle-form-group\">
          <div class=\"col-sm-2 control-label for-video-subtitle\">
            <label class=\"control-label\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.subtitle"), "html", null, true);
            echo "</label>
          </div>

          <div class=\"col-sm-10 controls js-subtitle-list\" data-dialog-url=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage_dialog");
            echo "\">
            <p style=\"margin-top:6px;color:#a1a1a1\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.add_subtitle_tips"), "html", null, true);
            echo "</p>
          </div>
          <div class=\"col-sm-offset-2 help-block\">
            <p style=\"margin-left:10px;\">
              ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.activity_manage.video.code_convert_tips");
            echo "
            </p>
          </div>

          <input id=\"ext_mediaId_for_subtitle\" class=\"form-control\" type=\"hidden\" value=";
            // line 56
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array(), "any", false, true), "mediaId", array()), null)) : (null)), "html", null, true);
            echo ">
        </div>
      ";
        }
        // line 59
        echo "    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@activity/video/resources/views/create_or_update_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  144 => 56,  137 => 52,  130 => 48,  126 => 47,  120 => 44,  116 => 42,  114 => 41,  107 => 37,  101 => 36,  94 => 34,  86 => 29,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  69 => 21,  63 => 18,  55 => 13,  51 => 12,  45 => 9,  39 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/video/resources/views/create_or_update_body.html.twig", "/Users/zhbyak/Apache/edusoho/web/activities/video/resources/views/create_or_update_body.html.twig");
    }
}
