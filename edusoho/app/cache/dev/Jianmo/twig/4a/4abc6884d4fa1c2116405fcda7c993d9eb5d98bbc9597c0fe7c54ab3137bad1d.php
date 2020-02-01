<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af03d07992b42ebfb9ea89c47de923528acb264bd02df36d3eedfcae7318fc77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_339b53ec4648ee4db372d04af305a5b938b35d9ee4fac7ae1a70afcaffff8b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339b53ec4648ee4db372d04af305a5b938b35d9ee4fac7ae1a70afcaffff8b07->enter($__internal_339b53ec4648ee4db372d04af305a5b938b35d9ee4fac7ae1a70afcaffff8b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339b53ec4648ee4db372d04af305a5b938b35d9ee4fac7ae1a70afcaffff8b07->leave($__internal_339b53ec4648ee4db372d04af305a5b938b35d9ee4fac7ae1a70afcaffff8b07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdfe8a30001ebf792944add17dc30c9138d65156c4f3e1442f94d77940a05fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfe8a30001ebf792944add17dc30c9138d65156c4f3e1442f94d77940a05fd6->enter($__internal_bdfe8a30001ebf792944add17dc30c9138d65156c4f3e1442f94d77940a05fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdfe8a30001ebf792944add17dc30c9138d65156c4f3e1442f94d77940a05fd6->leave($__internal_bdfe8a30001ebf792944add17dc30c9138d65156c4f3e1442f94d77940a05fd6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6320a4167fa5f9f5036c609484792cf220e786ae1bec441a6ce6969be3310fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6320a4167fa5f9f5036c609484792cf220e786ae1bec441a6ce6969be3310fe->enter($__internal_c6320a4167fa5f9f5036c609484792cf220e786ae1bec441a6ce6969be3310fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6320a4167fa5f9f5036c609484792cf220e786ae1bec441a6ce6969be3310fe->leave($__internal_c6320a4167fa5f9f5036c609484792cf220e786ae1bec441a6ce6969be3310fe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7febd5805b6d1a6c64ec4f6356bc32484f49b6bfcdcefa9d502b70c8ab0c72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7febd5805b6d1a6c64ec4f6356bc32484f49b6bfcdcefa9d502b70c8ab0c72d->enter($__internal_b7febd5805b6d1a6c64ec4f6356bc32484f49b6bfcdcefa9d502b70c8ab0c72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b7febd5805b6d1a6c64ec4f6356bc32484f49b6bfcdcefa9d502b70c8ab0c72d->leave($__internal_b7febd5805b6d1a6c64ec4f6356bc32484f49b6bfcdcefa9d502b70c8ab0c72d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/zhbyak/Apache/edusoho/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
