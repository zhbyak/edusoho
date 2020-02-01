<?php

/* task/plugin/note.html.twig */
class __TwigTemplate_9f95703d76634c204ac8b8da556bf05b5233ff0c369b75721d05a88ef03baf83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("task/plugin/base.html.twig", "task/plugin/note.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "task/plugin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/task/plugin/note/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"task-note-plugin-form\" method=\"post\"
        action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_note_save", array("courseId" => $this->getAttribute(($context["task"] ?? null), "courseId", array()), "taskId" => $this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\">
    <div class=\"form-group note-content\">
      <div class=\"controls\">
        <textarea class=\"form-control type-hidden\" id=\"note-content-field\" name=\"content\"
          data-image-upload-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">
          ";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["note"] ?? null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["note"] ?? null), "content", array()), "")) : ("")), "html", null, true);
        echo "
        </textarea>
      </div>
    </div>

    <input type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["note"] ?? null), "taskId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["note"] ?? null), "taskId", array()), $this->getAttribute(($context["task"] ?? null), "id", array()))) : ($this->getAttribute(($context["task"] ?? null), "id", array()))), "html", null, true);
        echo "\" name=\"taskId\">
    <input type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["note"] ?? null), "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["note"] ?? null), "courseId", array()), $this->getAttribute(($context["task"] ?? null), "courseId", array()))) : ($this->getAttribute(($context["task"] ?? null), "courseId", array()))), "html", null, true);
        echo "\" name=\"courseId\">

    <div class=\"form-group note-actions\">
      <div class=\"controls clearfix\">
        <button id=\"note-save-btn\" class=\"btn btn-primary pull-right\" type=\"submit\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.note.save_btn"), "html", null, true);
        echo "</button>
        <label class=\"color-gray mts\">
          <input type=\"checkbox\" name=\"status\" ";
        // line 24
        if ((($this->getAttribute(($context["note"] ?? null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["note"] ?? null), "status", array()), 1)) : (1))) {
            echo "checked ";
        }
        echo ">
          ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.note.share_btn"), "html", null, true);
        echo "
        </label>
        <p class=\"color-gray mt10 text-right\" data-role=\"saved-message\"></p>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "task/plugin/note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  80 => 25,  74 => 24,  69 => 22,  62 => 18,  58 => 17,  50 => 12,  44 => 11,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/note.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/plugin/note.html.twig");
    }
}
