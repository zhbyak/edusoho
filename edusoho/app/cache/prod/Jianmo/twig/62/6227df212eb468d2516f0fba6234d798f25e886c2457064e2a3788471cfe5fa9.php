<?php

/* task/plugin/list/content.html.twig */
class __TwigTemplate_0b70b9aa733476f4974ce1e83588cddc6b90094a0d9a749cd9eabc86ac9133e6 extends Twig_Template
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
        echo "<div>

  <div class=\"js-infinite-item-template hidden\">
    <li display-if=\"{isChapter}\" class=\"task-item bg-gray-lighter js-task-chapter infinite-item\">
      <i class=\"es-icon es-icon-menu left-menu\"></i>
      <span class=\"title\">{getChapterName}</span>
      <i class=\"right-menu es-icon es-icon-remove js-remove-icon\"></i>
    </li>

    <li display-if=\"{isUnit}\" class=\"task-item color-gray bg-gray-lighter infinite-item\">
      <span class=\"title\">{getUnitName}</span>
    </li>

    <li class=\"task-item infinite-item {lessonContainerClass}\"
      display-if=\"{isLesson}\">
      <span class=\"title\">
        <tmp display-if=\"{isOptional}\">
          <span class=\"label label-info mrm\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.is_optional_task"), "html", null, true);
        echo "</span>
        </tmp>
        {getLessonName}

        <tmp display-if=\"{isItemDisplayedAsUnpublished}\">
          <span class=\"right-menu \">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
        echo "</span>
        </tmp>
      </span>
    </li>

    <li display-if=\"{isTask}\" class=\"task-item task-content {highlightTaskClass} {lessonContainerClass} mouse-control infinite-item\">
      <i class=\"{taskClass}\"></i>
      <a display-if=\"{isPublishedTaskUnlocked}\" class=\"title\"
          href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => "{taskId}", "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        <tmp display-if=\"{isItemDisplayedAsOptional}\">
          <span class=\"label label-info mrm\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.is_optional_task"), "html", null, true);
        echo "</span>
        </tmp>
        
        <tmp hide-if=\"{isItemDisplayedAsOptional}\">
          {getTaskName}
        </tmp>

        <tmp display-if=\"{isItemDisplayedAsOptional}\">
          {title}
        </tmp>
      </a>

      <div hide-if=\"{isPublishedTaskUnlocked}\" class=\"title\"
            data-url=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_show", array("id" => "{taskId}", "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        <tmp display-if=\"{isItemDisplayedAsOptional}\">
          <span class=\"label label-info mrm\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.is_optional_task"), "html", null, true);
        echo "</span>
        </tmp>

        <tmp hide-if=\"{isItemDisplayedAsOptional}\">
          {getTaskName}
        </tmp>
        <tmp display-if=\"{isItemDisplayedAsOptional}\">
          {title}
        </tmp>
      </div>

      <tmp display-if=\"{isItemDisplayedAsUnpublished}\">
        <span class=\"right-menu \">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.catalogue.task_status.looking_forward"), "html", null, true);
        echo "</span>
      </tmp>
      
      <tmp display-if=\"{isPublished}\">
        <tmp display-if=\"{isTaskLocked}\">
          <span class=\"right-menu mouse-leave\">{activityLength}
            <i class=\"es-icon {getMetaIcon} ml5\"></i>
          </span>
          <span class=\"right-menu mouse-enter color-warning\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.locked.task_locked", array("%taskName%" => "{title}")), "html", null, true);
        echo "</span>
        </tmp>

        <tmp hide-if=\"{isTaskLocked}\">
          <span class=\"right-menu\">{activityLength}
            <i class=\"es-icon {getMetaIcon} ml5\" data-toggle=\"tooltip\"
                data-placement=\"top\" title=\"{getMetaName}";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.task"), "html", null, true);
        echo "\">
            </i>
          </span>
        </tmp>
      </tmp>
    </li>
  </div>

  <ul class=\"task-list task-show infinite-container\"></ul>

  <div class=\"infinite-more-link js-down-loading-more\" style=\"min-height: 1px\"></div>
</div>

";
        // line 87
        $this->loadTemplate("course/task-list/parts/task-course-data.html.twig", "task/plugin/list/content.html.twig", 87)->display(array_merge($context, array("showOptional" => true)));
    }

    public function getTemplateName()
    {
        return "task/plugin/list/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 87,  118 => 74,  109 => 68,  98 => 60,  83 => 48,  78 => 46,  62 => 33,  57 => 31,  46 => 23,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/list/content.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/plugin/list/content.html.twig");
    }
}
