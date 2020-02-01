<?php

/* @activity/video/resources/views/show/index.html.twig */
class __TwigTemplate_99cf62ef2ff42baeac9984aeb43c7caf6619d01b4b560e66c1ad43939d7e02a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "videoactivity/js/show/index.js"));
        // line 2
        $context["video"] = $this->env->getExtension('AppBundle\Twig\ActivityExtension')->prepareVideoMediaUri($this->getAttribute(($context["activity"] ?? null), "ext", array()));
        // line 3
        echo "
";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "watchStatus", array()), "status", array()) == "error")) {
            // line 5
            echo "  <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\">
    <div class=\"alert alert-danger mv20 mh20\">
      <i class=\"es-icon es-icon-info\"></i>
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.activity.video.beyond_watch_limit_tip", array("%watchedTime%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->durationTextFilter($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "watchStatus", array()), "watchLimitTime", array())), "%watchLimit%" => twig_round(($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "watchStatus", array()), "watchLimitTime", array()) / $this->getAttribute(($context["activity"] ?? null), "length", array()))))), "html", null, true);
            echo "
    </div>
  </div>
";
        } elseif (((($this->getAttribute(        // line 11
($context["video"] ?? null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "self")) : ("self")) == "self")) {
            // line 12
            echo "  ";
            if ((($this->getAttribute(($context["video"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "file", array()), null)) : (null))) {
                // line 13
                echo "    <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\"
         data-role=\"lesson-content\"
         data-watch-url=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_acitvity_watch", array("courseId" => $this->getAttribute(($context["activity"] ?? null), "fromCourseId", array()), "id" => $this->getAttribute(($context["activity"] ?? null), "id", array()))), "html", null, true);
                echo "\"
         data-id=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
                echo "\"
    data-watch-time-sec=\"";
                // line 17
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.watch_time_sec"), 120), "html", null, true);
                echo "\">
    ";
                // line 19
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Player:show", array("id" => $this->getAttribute(($context["video"] ?? null), "mediaId", array()), "isPart" => true)));
                echo "
  </div>
  ";
            } else {
                // line 22
                echo "  <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\">
    ";
                // line 23
                $this->loadTemplate("activity/file-not-found.html.twig", "@activity/video/resources/views/show/index.html.twig", 23)->display(array_merge($context, array("type" => "video")));
                // line 24
                echo "  </div>
  ";
            }
        } elseif (((($this->getAttribute(        // line 26
($context["video"] ?? null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "self")) : ("self")) == "iframe")) {
            // line 27
            echo "  <div id=\"task-preview-iframe\" class=\"iframe-parent-content iframe-parent-full\">
    <iframe src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["video"] ?? null), "mediaUri", array()), "html", null, true);
            echo "\" style=\"height:100%; width:100%; border:0px; overflow: hidden\"
            scrolling=\"no\"></iframe>
  </div>
";
        } else {
            // line 32
            echo "  <div class=\"dashboard-body\">
    <div class=\"iframe-parent-content iframe-parent-full\" id=\"video-content\" data-role=\"lesson-content\"
         data-media-source=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["video"] ?? null), "mediaSource", array()), "html", null, true);
            echo "\" style=\"position:absolute;top:0;bottom:0;left:0;right:0;text-align:center;\">
      ";
            // line 35
            if ((($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaSource", array()) == "NeteaseOpenCourse") &&  !twig_test_empty($this->getAttribute(($context["activity"] ?? null), "content", array())))) {
                // line 36
                echo "        <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;\" id=\"local-video-player\">
          <div id=\"lesson-video-content\" data-url=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaUri", array()), "html", null, true);
                echo "\" class=\"local-video-player \" style=\"height: 100%\"></div>
        </div>

      ";
            } else {
                // line 41
                echo "        <div id=\"swf-player\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "mediaUri", array()), "html", null, true);
                echo "\"></div>
      ";
            }
            // line 43
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@activity/video/resources/views/show/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  108 => 41,  101 => 37,  98 => 36,  96 => 35,  92 => 34,  88 => 32,  81 => 28,  78 => 27,  76 => 26,  72 => 24,  70 => 23,  67 => 22,  60 => 19,  56 => 17,  52 => 16,  48 => 15,  44 => 13,  41 => 12,  39 => 11,  33 => 8,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/video/resources/views/show/index.html.twig", "/Users/zhbyak/Apache/edusoho/web/activities/video/resources/views/show/index.html.twig");
    }
}
