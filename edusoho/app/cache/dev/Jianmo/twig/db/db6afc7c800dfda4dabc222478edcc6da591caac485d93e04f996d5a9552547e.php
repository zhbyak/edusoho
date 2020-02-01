<?php

/* default/middle-banner.html.twig */
class __TwigTemplate_611387ca098a833145e462d1ff7937341efb256fc67d5403ffe8a7418fa61f42 extends Twig_Template
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
        $__internal_d4958624de5244b5b3f22c783967435a8be546d7280a0ce4c7c3c90f0da498a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4958624de5244b5b3f22c783967435a8be546d7280a0ce4c7c3c90f0da498a5->enter($__internal_d4958624de5244b5b3f22c783967435a8be546d7280a0ce4c7c3c90f0da498a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/middle-banner.html.twig"));

        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:middle_banner");
        
        $__internal_d4958624de5244b5b3f22c783967435a8be546d7280a0ce4c7c3c90f0da498a5->leave($__internal_d4958624de5244b5b3f22c783967435a8be546d7280a0ce4c7c3c90f0da498a5_prof);

    }

    public function getTemplateName()
    {
        return "default/middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <!-- 特性 --> 
  {{ block_show('jianmo:middle_banner') }}", "default/middle-banner.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/middle-banner.html.twig");
    }
}
