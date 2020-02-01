<?php

/* css_loader.html.twig */
class __TwigTemplate_e308bedca8cf57ebb54c0618725f90cfe8a499400b0789e7683accf197f09aaf extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_80240d2560e0ba777bdf9215c1c373284e54e11b15a0473febff3af63fac0055 = $context["path"]) && is_string($__internal_b44f63ef5ad4c9f195854566b9b1a762ba35e0454293d2c0c1a6f044e98dc3ae = "http://") && ('' === $__internal_b44f63ef5ad4c9f195854566b9b1a762ba35e0454293d2c0c1a6f044e98dc3ae || 0 === strpos($__internal_80240d2560e0ba777bdf9215c1c373284e54e11b15a0473febff3af63fac0055, $__internal_b44f63ef5ad4c9f195854566b9b1a762ba35e0454293d2c0c1a6f044e98dc3ae)))) {
                // line 3
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 5
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("static-dist/" . $context["path"])), "html", null, true);
                echo "\" rel=\"stylesheet\" />
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "css_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "css_loader.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/css_loader.html.twig");
    }
}
