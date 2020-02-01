<?php

/* @theme/jianmo/block/carousel.template.html.twig */
class __TwigTemplate_63c973ce05f098760422492dfd0dd5514f2f18d06692e456e43189435286f9f1 extends Twig_Template
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
        $__internal_7ab5e6d6a338e29440c5177e4c94bae4026d4ee3448f507b0f60cd83fb88dbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab5e6d6a338e29440c5177e4c94bae4026d4ee3448f507b0f60cd83fb88dbbd->enter($__internal_7ab5e6d6a338e29440c5177e4c94bae4026d4ee3448f507b0f60cd83fb88dbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@theme/jianmo/block/carousel.template.html.twig"));

        // line 1
        echo "<section class=\"es-poster swiper-container\">
  <div class=\"swiper-wrapper\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 4
            echo "      ";
            if (($this->getAttribute($context["poster"], "status", array()) == 1)) {
                // line 5
                echo "        ";
                if (($this->getAttribute($context["poster"], "mode", array()) == "img")) {
                    // line 6
                    echo "          <div class=\"swiper-slide swiper-hidden\" style=\"background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["poster"], "background", array()), "html", null, true);
                    echo ";\">
            <div ";
                    // line 7
                    if (($this->getAttribute($context["poster"], "layout", array()) == "limitWide")) {
                        echo "class=\"container\"";
                    }
                    echo ">
              <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "href", array()), "")) : ("")), "html", null, true);
                    echo "\" target=\"_blank\" ><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "src", array()), "")) : ("")), "html", null, true);
                    echo "\">
              </a>
            </div>
          </div>
        ";
                } elseif (($this->getAttribute(                // line 12
$context["poster"], "mode", array()) == "html")) {
                    // line 13
                    echo "            ";
                    echo $this->getAttribute($context["poster"], "html", array());
                    echo "
        ";
                }
                // line 15
                echo "      ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <div class=\"swiper-pager\"></div>
</section>";
        
        $__internal_7ab5e6d6a338e29440c5177e4c94bae4026d4ee3448f507b0f60cd83fb88dbbd->leave($__internal_7ab5e6d6a338e29440c5177e4c94bae4026d4ee3448f507b0f60cd83fb88dbbd_prof);

    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/carousel.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  67 => 16,  64 => 15,  58 => 13,  56 => 12,  47 => 8,  41 => 7,  36 => 6,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"es-poster swiper-container\">
  <div class=\"swiper-wrapper\">
    {% for poster in posters %}
      {% if poster.status == 1 %}
        {% if poster.mode == \"img\" %}
          <div class=\"swiper-slide swiper-hidden\" style=\"background: {{poster.background}};\">
            <div {% if poster.layout == 'limitWide' %}class=\"container\"{% endif %}>
              <a href=\"{{ poster.href|default('') }}\" target=\"_blank\" ><img class=\"img-responsive\" src=\"{{ poster.src|default('') }}\">
              </a>
            </div>
          </div>
        {% elseif poster.mode == \"html\"%}
            {{ poster.html|raw }}
        {% endif %}
      {% endif %}
    {% endfor %}
  </div>
  <div class=\"swiper-pager\"></div>
</section>", "@theme/jianmo/block/carousel.template.html.twig", "/Users/zhbyak/Apache/edusoho/web/themes/jianmo/block/carousel.template.html.twig");
    }
}
