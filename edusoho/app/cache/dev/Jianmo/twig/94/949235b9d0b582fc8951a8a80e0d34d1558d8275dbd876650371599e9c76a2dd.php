<?php

/* default/header/user-operation.html.twig */
class __TwigTemplate_f4c4e522ae9323d7ba5c9741ad23602b536613abf5537ef4d7978e4803b2d114 extends Twig_Template
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
        $__internal_0a3eca12cd704bb9adab12f6f5f4791540db3ce898e2e1e0a5adb91b5e91f2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3eca12cd704bb9adab12f6f5f4791540db3ce898e2e1e0a5adb91b5e91f2bf->enter($__internal_0a3eca12cd704bb9adab12f6f5f4791540db3ce898e2e1e0a5adb91b5e91f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header/user-operation.html.twig"));

        // line 1
        echo "<div class=\"navbar-user ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
  <ul class=\"nav user-nav\">
    ";
        // line 3
        $context["show_switch_locale"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.show_switch_locale"), 0);
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "      ";
            $this->loadTemplate("default/header/part/user-role-manage.html.twig", "default/header/user-operation.html.twig", 5)->display($context);
            // line 6
            echo "      ";
            $this->loadTemplate("default/header/part/user-inform.html.twig", "default/header/user-operation.html.twig", 6)->display($context);
            // line 7
            echo "      ";
            $this->loadTemplate("default/header/part/user-avatar.html.twig", "default/header/user-operation.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $this->loadTemplate("default/header/part/visitor-login.html.twig", "default/header/user-operation.html.twig", 9)->display($context);
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ((($context["show_switch_locale"] ?? $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 13
            echo "      ";
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                $context["langClass"] = "visitor-li visible-lg";
            } else {
                $context["langClass"] = "visitor-li hidden-xs";
            }
            // line 14
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/user-operation.html.twig", 14)->display(array_merge($context, array("langClass" => ($context["langClass"] ?? $this->getContext($context, "langClass")))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "q"), "method"))) : ("")), "html", null, true);
        echo "\" name=\"q\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>";
        
        $__internal_0a3eca12cd704bb9adab12f6f5f4791540db3ce898e2e1e0a5adb91b5e91f2bf->leave($__internal_0a3eca12cd704bb9adab12f6f5f4791540db3ce898e2e1e0a5adb91b5e91f2bf_prof);

    }

    public function getTemplateName()
    {
        return "default/header/user-operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  30 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}\">
  <ul class=\"nav user-nav\">
    {% set show_switch_locale = setting('developer.show_switch_locale')|default(0) %}
    {% if app.user %}
      {% include 'default/header/part/user-role-manage.html.twig' %}
      {% include 'default/header/part/user-inform.html.twig' %}
      {% include 'default/header/part/user-avatar.html.twig' %}
    {% else %}
      {% include 'default/header/part/visitor-login.html.twig' %}
    {% endif %}

    {% if show_switch_locale == 1 %}
      {% if app.user %}{% set langClass = 'visitor-li visible-lg' %}{% else %}{% set langClass = 'visitor-li hidden-xs' %}{% endif %}
      {% include 'default/switch-language.html.twig' with {langClass: langClass} %}
    {% endif %}
  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"{{ path('search') }}\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"{{ app.request.get('q')|default() }}\" name=\"q\" placeholder=\"{{ 'homepage.header.search'|trans }}\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>", "default/header/user-operation.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/header/user-operation.html.twig");
    }
}
