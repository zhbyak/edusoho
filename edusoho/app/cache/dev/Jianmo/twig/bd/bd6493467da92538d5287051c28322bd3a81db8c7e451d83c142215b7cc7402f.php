<?php

/* css_loader.html.twig */
class __TwigTemplate_c09ba4ef5fcc4911a579026fb7b5a0e68ede9e1e8a81a44addf84933a51455ee extends Twig_Template
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
        $__internal_77bf3f9116211890ec6518172c509422af0ac82d07f5a6378fe32650c47404ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bf3f9116211890ec6518172c509422af0ac82d07f5a6378fe32650c47404ec->enter($__internal_77bf3f9116211890ec6518172c509422af0ac82d07f5a6378fe32650c47404ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css_loader.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 2
            echo "  ";
            if ((is_string($__internal_df4223b3835f98d7a33d631f46d6fcadc1ded3a34268df042365e2b37f3a24e2 = $context["path"]) && is_string($__internal_1cec43ca5c08f9fadcc9aa5da4d76587e55b9021fbf8934bae2396e0b4e292f1 = "http://") && ('' === $__internal_1cec43ca5c08f9fadcc9aa5da4d76587e55b9021fbf8934bae2396e0b4e292f1 || 0 === strpos($__internal_df4223b3835f98d7a33d631f46d6fcadc1ded3a34268df042365e2b37f3a24e2, $__internal_1cec43ca5c08f9fadcc9aa5da4d76587e55b9021fbf8934bae2396e0b4e292f1)))) {
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
        
        $__internal_77bf3f9116211890ec6518172c509422af0ac82d07f5a6378fe32650c47404ec->leave($__internal_77bf3f9116211890ec6518172c509422af0ac82d07f5a6378fe32650c47404ec_prof);

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
        return array (  35 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for path in css() %}
  {% if path starts with 'http://' %}
    <link href=\"{{ path }}\" rel=\"stylesheet\" />
  {% else %}
    <link href=\"{{ asset('static-dist/' ~ path) }}\" rel=\"stylesheet\" />
  {% endif %}
{% endfor %}", "css_loader.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/css_loader.html.twig");
    }
}
