<?php

/* default/base-index.html.twig */
class __TwigTemplate_30099cd79711f7e94296a906998c309d62d2616d2b5d9db2c0397f64a76f99d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/base-index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3afb4812304d555e410bc0dd865304a42a6d3cfcc2e7602bd84c4d667d722738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afb4812304d555e410bc0dd865304a42a6d3cfcc2e7602bd84c4d667d722738->enter($__internal_3afb4812304d555e410bc0dd865304a42a6d3cfcc2e7602bd84c4d667d722738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/base-index.html.twig"));

        // line 6
        $context["appDownload"] = (($this->env->getExtension('AppBundle\Twig\WebExtension')->isESCopyright() && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", null)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage());
        // line 7
        $context["bodyClass"] = ((($context["appDownload"] ?? $this->getContext($context, "appDownload"))) ? ("homepage has-app") : ("homepage"));
        // line 8
        $context["siteNav"] = "/";
        // line 10
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 12
        $context["isIndex"] = true;
        // line 13
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afb4812304d555e410bc0dd865304a42a6d3cfcc2e7602bd84c4d667d722738->leave($__internal_3afb4812304d555e410bc0dd865304a42a6d3cfcc2e7602bd84c4d667d722738_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_bf5b858e8c8c18e06d5aa4caeaed0705182c10daaeb62d83c9ad6b7786e667d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5b858e8c8c18e06d5aa4caeaed0705182c10daaeb62d83c9ad6b7786e667d7->enter($__internal_bf5b858e8c8c18e06d5aa4caeaed0705182c10daaeb62d83c9ad6b7786e667d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_bf5b858e8c8c18e06d5aa4caeaed0705182c10daaeb62d83c9ad6b7786e667d7->leave($__internal_bf5b858e8c8c18e06d5aa4caeaed0705182c10daaeb62d83c9ad6b7786e667d7_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_0bc9f826dc015e3912626ff08507a2eb1d539cea26d445ac6a257ccaca80b064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc9f826dc015e3912626ff08507a2eb1d539cea26d445ac6a257ccaca80b064->enter($__internal_0bc9f826dc015e3912626ff08507a2eb1d539cea26d445ac6a257ccaca80b064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_0bc9f826dc015e3912626ff08507a2eb1d539cea26d445ac6a257ccaca80b064->leave($__internal_0bc9f826dc015e3912626ff08507a2eb1d539cea26d445ac6a257ccaca80b064_prof);

    }

    // line 15
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_3d6508433fa94111ed0a45235b4f77aaf30e1a3240f17042dbf6a07b304657e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6508433fa94111ed0a45235b4f77aaf30e1a3240f17042dbf6a07b304657e5->enter($__internal_3d6508433fa94111ed0a45235b4f77aaf30e1a3240f17042dbf6a07b304657e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 16
        echo "  ";
        if (($context["appDownload"] ?? $this->getContext($context, "appDownload"))) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "default/base-index.html.twig", 20)->display(array_merge($context, array("mobile_tool_bar" => "index")));
        
        $__internal_3d6508433fa94111ed0a45235b4f77aaf30e1a3240f17042dbf6a07b304657e5->leave($__internal_3d6508433fa94111ed0a45235b4f77aaf30e1a3240f17042dbf6a07b304657e5_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_b56cce920fa56f037d23db7fb430364dfd14cd963766118f41580a2ba6c85cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56cce920fa56f037d23db7fb430364dfd14cd963766118f41580a2ba6c85cdd->enter($__internal_b56cce920fa56f037d23db7fb430364dfd14cd963766118f41580a2ba6c85cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b56cce920fa56f037d23db7fb430364dfd14cd963766118f41580a2ba6c85cdd->leave($__internal_b56cce920fa56f037d23db7fb430364dfd14cd963766118f41580a2ba6c85cdd_prof);

    }

    public function getTemplateName()
    {
        return "default/base-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  74 => 15,  62 => 4,  50 => 3,  43 => 1,  41 => 13,  39 => 12,  37 => 10,  35 => 8,  33 => 7,  31 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set appDownload = is_ES_copyright() and setting('mobile.enabled', null) and is_show_mobile_page() %}
{% set bodyClass = appDownload ? 'homepage has-app' : 'homepage' %}
{% set siteNav = '/' %}

{% set _target_path = path('homepage') %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
  {% if appDownload  %}
    {{ render(controller('AppBundle:Default:appDownload')) }}
  {% endif %}
  {% block content %}{% endblock %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'index' } %}
{% endblock %}
", "default/base-index.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/base-index.html.twig");
    }
}
