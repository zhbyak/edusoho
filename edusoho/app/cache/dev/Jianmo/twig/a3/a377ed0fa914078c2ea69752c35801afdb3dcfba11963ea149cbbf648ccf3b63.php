<?php

/* site-hint.html.twig */
class __TwigTemplate_0874054976af42df420236630324878b4b1c986e684c181a732a7f533eb37cc0 extends Twig_Template
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
        $__internal_08ef50b3b2bba60a159568cb02ea1179bb0728c6cec7bf7ad24f061a4568356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ef50b3b2bba60a159568cb02ea1179bb0728c6cec7bf7ad24f061a4568356e->enter($__internal_08ef50b3b2bba60a159568cb02ea1179bb0728c6cec7bf7ad24f061a4568356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site-hint.html.twig"));

        // line 1
        $asm89CacheStrategy3 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key3 = $asm89CacheStrategy3->generateKey("layout/announcement", 600        );
        $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
        if ($asm89CacheBody3 === false) {
            ob_start();
                // line 2
                echo "  ";
                $this->loadTemplate("announcement/announcement.html.twig", "site-hint.html.twig", 2)->display($context);
            
            $asm89CacheBody3 = ob_get_clean();
            $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
        }
        echo $asm89CacheBody3;
        
        $__internal_08ef50b3b2bba60a159568cb02ea1179bb0728c6cec7bf7ad24f061a4568356e->leave($__internal_08ef50b3b2bba60a159568cb02ea1179bb0728c6cec7bf7ad24f061a4568356e_prof);

    }

    public function getTemplateName()
    {
        return "site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% cache 'layout/announcement' 600 %}
  {% include 'announcement/announcement.html.twig' %}
{% endcache %}", "site-hint.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/site-hint.html.twig");
    }
}
