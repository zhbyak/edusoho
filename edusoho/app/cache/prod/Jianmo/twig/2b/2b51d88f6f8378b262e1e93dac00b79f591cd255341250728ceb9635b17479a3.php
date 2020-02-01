<?php

/* task/plugin/question/item.html.twig */
class __TwigTemplate_dbdb1a4399aaa6dbf17aceec656cc59263209ce5f4838c8195a61482e51e6556 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "task/plugin/question/item.html.twig", 1);
        // line 2
        echo "<li class=\"media thread-item\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"media-body thread-item-body\">
    <div class=\"mbm\">
      <a href=\"javascript:;\" class=\"js-redirect-question-detail\" data-url=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_plugin_thread_show", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()), "threadId" => $this->getAttribute(($context["thread"] ?? null), "id", array()))), "html", null, true);
        echo "\">
        <span class=\"title-icon\"><i class=\"es-icon es-icon-help mrm\"></i></span>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? null), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas\">
      ";
        // line 11
        echo $context["web_macro"]->getuser_link(($context["user"] ?? null), "link-dark mll");
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.post_time", array("%createdTime%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute(($context["thread"] ?? null), "createdTime", array())))), "html", null, true);
        echo "
      <span class=\"bullet\">•</span>
      <a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.post_num", array("%postNum%" => $this->getAttribute(($context["thread"] ?? null), "postNum", array()))), "html", null, true);
        echo "</a>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "task/plugin/question/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 11,  33 => 7,  28 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/question/item.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/plugin/question/item.html.twig");
    }
}
