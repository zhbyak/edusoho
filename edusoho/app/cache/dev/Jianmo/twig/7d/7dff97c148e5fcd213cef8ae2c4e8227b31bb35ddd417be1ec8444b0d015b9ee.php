<?php

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_a9b9a2d8eec4ef761502094970db70d9084bcfaf08e169c774f69bbc77f5409e extends Twig_Template
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
        $__internal_96084bb675e05721b6d63088ae3bff2d860068f41099a5062eecfc4d7da830db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96084bb675e05721b6d63088ae3bff2d860068f41099a5062eecfc4d7da830db->enter($__internal_96084bb675e05721b6d63088ae3bff2d860068f41099a5062eecfc4d7da830db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/stylesheet-webpack.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main-v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 5
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/mobile.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 8
        if (((($context["maincolor"] ?? $this->getContext($context, "maincolor")) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 9
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/main-" . ($context["maincolor"] ?? $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 11
        if (((($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor")) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 12
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/header-" . ($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("stylesheet.webpack.extension", array("maincolor" => ($context["maincolor"] ?? $this->getContext($context, "maincolor"))));
        echo "

";
        // line 16
        $this->loadTemplate("stylesheet/stylesheet-custom.html.twig", "default/stylesheet-webpack.html.twig", 16)->display(array_merge($context, array("config" =>         // line 17
($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "mobile" =>         // line 18
($context["mobile"] ?? $this->getContext($context, "mobile")), "maincolor" =>         // line 19
($context["maincolor"] ?? $this->getContext($context, "maincolor")), "navigationcolor" =>         // line 20
($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor")))));
        
        $__internal_96084bb675e05721b6d63088ae3bff2d860068f41099a5062eecfc4d7da830db->leave($__internal_96084bb675e05721b6d63088ae3bff2d860068f41099a5062eecfc4d7da830db_prof);

    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  68 => 19,  67 => 18,  66 => 17,  65 => 16,  60 => 14,  54 => 12,  52 => 11,  46 => 9,  44 => 8,  38 => 6,  36 => 5,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset('static-dist/app/css/bootstrap.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main-v2.css') }}\" rel=\"stylesheet\" />

{% if mobile %}
  <link href=\"{{ asset('static-dist/app/css/mobile.css') }}\" rel=\"stylesheet\" />
{% endif %}
{% if maincolor != 'default' and setting('theme.code', 'jianmo') == 'jianmo' %}
  <link href=\"{{ asset('static-dist/app/css/main-' ~ maincolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}
{% if navigationcolor != 'default' and setting('theme.code', 'jianmo') == 'jianmo' %}
  <link href=\"{{ asset('static-dist/app/css/header-' ~ navigationcolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}
{{ slot('stylesheet.webpack.extension', {maincolor: maincolor}) }}

{% include 'stylesheet/stylesheet-custom.html.twig' with {
    config: currentTheme,
    mobile: mobile,
    maincolor: maincolor,
    navigationcolor: navigationcolor,
    } 
  %}
", "default/stylesheet-webpack.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/stylesheet-webpack.html.twig");
    }
}
