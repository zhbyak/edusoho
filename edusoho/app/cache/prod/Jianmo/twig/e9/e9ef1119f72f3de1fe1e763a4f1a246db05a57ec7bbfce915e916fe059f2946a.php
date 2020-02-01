<?php

/* script/script-custom.html.twig */
class __TwigTemplate_d27637d070be2d46a4e4ff8dbe224db0eeefce730641fa5d185320383beec787 extends Twig_Template
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
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "jianmotheme/js/main.js"), 999);
    }

    public function getTemplateName()
    {
        return "script/script-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "script/script-custom.html.twig", "/Users/zhbyak/Apache/edusoho/web/themes/jianmo/views/script/script-custom.html.twig");
    }
}
