<?php

/* default/index.html.twig */
class __TwigTemplate_947cfdf957ea9a5463a16e65edb8751b361e6ab6c56d1381fa171d419060785c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/base-index.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/base-index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6d1558fb10dafa5173f1dd35766ae353746f4329ca01a522b450eb498340b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d1558fb10dafa5173f1dd35766ae353746f4329ca01a522b450eb498340b29->enter($__internal_d6d1558fb10dafa5173f1dd35766ae353746f4329ca01a522b450eb498340b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/index/index.js"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d1558fb10dafa5173f1dd35766ae353746f4329ca01a522b450eb498340b29->leave($__internal_d6d1558fb10dafa5173f1dd35766ae353746f4329ca01a522b450eb498340b29_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_61c6efb49422d2962fa6da420ff53b498ed0b3595d07cb3833df164784137b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c6efb49422d2962fa6da420ff53b498ed0b3595d07cb3833df164784137b60->enter($__internal_61c6efb49422d2962fa6da420ff53b498ed0b3595d07cb3833df164784137b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 6
                echo "    ";
                echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 9
            echo "        ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 10
            echo "        ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && (($context["code"] ?? $this->getContext($context, "code")) == "category-course"))) {
                // line 11
                echo "            ";
                $context["code"] = "recommend-course";
                // line 12
                echo "        ";
            }
            // line 13
            echo "        ";
            $context["isPlugin"] = (($this->getAttribute($context["config"], "isPlugin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "isPlugin", array()), 0)) : (0));
            // line 14
            echo "
        ";
            // line 15
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 16
            echo "
        ";
            // line 17
            if ((($context["isPlugin"] ?? $this->getContext($context, "isPlugin")) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled($this->getAttribute($context["config"], "pluginName", array())))) {
                // line 18
                echo "          ";
                $this->loadTemplate($this->getAttribute($context["config"], "show", array()), "default/index.html.twig", 18)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category")))));
                // line 19
                echo "        ";
            } elseif ( !($context["isPlugin"] ?? $this->getContext($context, "isPlugin"))) {
                // line 20
                echo "          ";
                if ((($context["code"] ?? $this->getContext($context, "code")) == "friend-link")) {
                    // line 21
                    echo "              ";
                    $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 21)->display(array_merge($context, array("friendlyLinks" => ($context["friendlyLinks"] ?? $this->getContext($context, "friendlyLinks")))));
                    // line 22
                    echo "          ";
                } elseif ((($context["code"] ?? $this->getContext($context, "code")) != "footer-link")) {
                    // line 23
                    echo "              ";
                    if ((($context["code"] ?? $this->getContext($context, "code")) != "course-grid-with-condition-index")) {
                        // line 24
                        echo "                  ";
                        $asm89CacheStrategy2 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
                        $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . ($context["code"] ?? $this->getContext($context, "code"))), 600                        );
                        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                        if ($asm89CacheBody2 === false) {
                            ob_start();
                                // line 25
                                echo "                  ";
                                $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 25)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category")))));
                                // line 26
                                echo "                  ";
                            
                            $asm89CacheBody2 = ob_get_clean();
                            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                        }
                        echo $asm89CacheBody2;
                        // line 27
                        echo "              ";
                    } else {
                        // line 28
                        echo "                  ";
                        $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 28)->display(array_merge($context, array("config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category")))));
                        // line 29
                        echo "              ";
                    }
                    // line 30
                    echo "          ";
                }
                // line 31
                echo "        ";
            }
            // line 32
            echo "        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_61c6efb49422d2962fa6da420ff53b498ed0b3595d07cb3833df164784137b60->leave($__internal_61c6efb49422d2962fa6da420ff53b498ed0b3595d07cb3833df164784137b60_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 32,  150 => 31,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  131 => 26,  128 => 25,  121 => 24,  118 => 23,  115 => 22,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  101 => 17,  98 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  81 => 10,  78 => 9,  60 => 8,  50 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/base-index.html.twig' %}
{% do script(['app/js/index/index.js']) %}

{% block content %}
    {% cache 'jianmo/home/top/banner' 600 %}
    {{ block_show('jianmo:home_top_banner') }}
    {% endcache %}
    {% for config in themeConfig.blocks.left|default([]) %}
        {% set code = config.code %}
        {% if config.sortName|default('') == 'recommended' and code == 'category-course' %}
            {% set code = 'recommend-course' %}
        {% endif %}
        {% set isPlugin = config.isPlugin|default(0) %}

        {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}

        {% if isPlugin and is_plugin_installed(config.pluginName) %}
          {% include config.show with {config:config, category: category} %}
        {% elseif not isPlugin %}
          {% if code == 'friend-link' %}
              {% include 'default/' ~ code ~ '.html.twig' with {friendlyLinks:friendlyLinks} %}
          {% elseif code != 'footer-link' %}
              {% if code != 'course-grid-with-condition-index' %}
                  {% cache 'jianmo/default/' ~ code 600 %}
                  {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
                  {% endcache %}
              {% else %}
                  {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
              {% endif %}
          {% endif %}
        {% endif %}
        
    {% endfor %}
{% endblock %}", "default/index.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/index.html.twig");
    }
}
