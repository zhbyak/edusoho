<?php

/* default/recommend-classroom.html.twig */
class __TwigTemplate_adb18c52b2598ebbf8106eb16239a5a7b60717b721f99e45435c511e74203d24 extends Twig_Template
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
        $__internal_ed404643e3b16d0974cf3ff5eb406771d62448ecb93a86a803bb5dafe80446f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed404643e3b16d0974cf3ff5eb406771d62448ecb93a86a803bb5dafe80446f9->enter($__internal_ed404643e3b16d0974cf3ff5eb406771d62448ecb93a86a803bb5dafe80446f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/recommend-classroom.html.twig"));

        // line 1
        echo "
<!-- 推荐班级 -->
";
        // line 3
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendClassrooms", array("count" => (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 4)) : (4))));
        // line 4
        if (($context["classrooms"] ?? $this->getContext($context, "classrooms"))) {
            // line 5
            echo "  <section class=\"class-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))), "html", null, true);
            echo "</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"recommend-class-list row\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? $this->getContext($context, "classrooms")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 16
                echo "          <div class=\"col-md-3 col-xs-6\">
             ";
                // line 17
                $this->loadTemplate("classroom/class-grid.html.twig", "default/recommend-classroom.html.twig", 17)->display($context);
                // line 18
                echo "          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.more", array("%moreClassrooms%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
        
        $__internal_ed404643e3b16d0974cf3ff5eb406771d62448ecb93a86a803bb5dafe80446f9->leave($__internal_ed404643e3b16d0974cf3ff5eb406771d62448ecb93a86a803bb5dafe80446f9_prof);

    }

    public function getTemplateName()
    {
        return "default/recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  91 => 22,  87 => 20,  72 => 18,  70 => 17,  67 => 16,  50 => 15,  44 => 12,  38 => 9,  30 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- 推荐班级 -->
{% set classrooms = data('RecommendClassrooms',{'count':config.count|default(4)})%}
{% if classrooms %}
  <section class=\"class-section {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>{{config.title|default(\"homepage.recommend_classroom.content_title\"|trans)}}</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"recommend-class-list row\">
        {% for classroom in classrooms %}
          <div class=\"col-md-3 col-xs-6\">
             {% include 'classroom/class-grid.html.twig' %}
          </div>
        {% endfor %}
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{ path('classroom_explore') }}\" class=\"btn btn-default btn-lg\">
          {{ 'homepage.recommend_classroom.more'|trans({'%moreClassrooms%':setting('classroom.name')|default('site.default.classroom'|trans)}) }} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
", "default/recommend-classroom.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/recommend-classroom.html.twig");
    }
}
