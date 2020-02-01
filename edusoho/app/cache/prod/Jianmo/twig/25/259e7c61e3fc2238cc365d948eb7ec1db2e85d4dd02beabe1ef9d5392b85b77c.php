<?php

/* task/plugin/questions.html.twig */
class __TwigTemplate_933da562b6dce14770ec683394225a17e88ebf08329687a00bbcbac5fbb3372d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("task/plugin/base.html.twig", "task/plugin/questions.html.twig", 1);
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/es-ckeditor/ckeditor.js", 1 => "libs/jquery-validation.js", 2 => "app/js/task/plugin/question/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"question-list-block\">
    ";
        // line 7
        $this->loadTemplate("task/plugin/question/form.html.twig", "task/plugin/questions.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("task/plugin/question/list.html.twig", "task/plugin/questions.html.twig", 8)->display($context);
        // line 9
        echo "  </div>

  <div class=\"question-detail-block\" style=\"display: none\">
  </div>

";
    }

    public function getTemplateName()
    {
        return "task/plugin/questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "task/plugin/questions.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/task/plugin/questions.html.twig");
    }
}
