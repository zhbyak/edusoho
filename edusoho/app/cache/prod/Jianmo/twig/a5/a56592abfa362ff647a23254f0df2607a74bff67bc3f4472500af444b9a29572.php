<?php

/* task/plugin/question/form.html.twig */
class __TwigTemplate_67b722e4552df8d293d2dff8aafc2f2463fd28c8b4e9ebef375af6e226d57709 extends Twig_Template
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
        echo "<form class=\"task-question-plugin-form\" id=\"task-question-plugin-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_plugin_thread_create", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
  <div class=\"form-group mb0\">
    <div class=\"controls\">
      ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control expand-form-trigger", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.question_placeholder"), "data-display" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.question_title"))));
        echo "
    </div>
  </div>

  <div class=\"form-group js-detail-form-group mtm  hide\">
    <div class=\"controls\">
      ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5, "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.question_describe"), "data-image-upload-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))))));
        echo "
    </div>
  </div>

  <div class=\"form-group js-detail-form-group mtm hide\">
    <div class=\"controls clearfix\">
      <button class=\"btn btn-primary btn-sm pull-right\" type=\"submit\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.plan_task.put_question"), "html", null, true);
        echo "</button>
      <button class=\"btn btn-link btn-sm collapse-form-btn pull-right\" type=\"button\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</button>
    </div>
  </div>
  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "task/plugin/question/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  54 => 20,  48 => 17,  44 => 16,  35 => 10,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/question/form.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/plugin/question/form.html.twig");
    }
}
