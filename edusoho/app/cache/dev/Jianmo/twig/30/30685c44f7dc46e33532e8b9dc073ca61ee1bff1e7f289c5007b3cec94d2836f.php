<?php

/* course/widgets/course-set-price.html.twig */
class __TwigTemplate_6893813de059a98e822ba8156981b4947eef5381568d0d9dc8790971e1fcab61 extends Twig_Template
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
        $__internal_8ca5bd5f0bbe650dfd97130d854f93dcc55c9035875316008270de956e016c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca5bd5f0bbe650dfd97130d854f93dcc55c9035875316008270de956e016c44->enter($__internal_8ca5bd5f0bbe650dfd97130d854f93dcc55c9035875316008270de956e016c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/widgets/course-set-price.html.twig"));

        // line 1
        $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->wrap(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "courseSet.price");
        // line 2
        echo "
<span class=\"course-price-widget\">
      <span class=\"
            ";
        // line 5
        if (($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "maxCoursePrice", array()) == 0)) {
            // line 6
            echo "                  free
            ";
        } else {
            // line 8
            echo "                  price
            ";
        }
        // line 9
        echo "\">
          ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["courseSet"] ?? $this->getContext($context, "courseSet")), "priceWrapper", array()), "priceText", array()), "html", null, true);
        echo "
      </span>
</span>";
        
        $__internal_8ca5bd5f0bbe650dfd97130d854f93dcc55c9035875316008270de956e016c44->leave($__internal_8ca5bd5f0bbe650dfd97130d854f93dcc55c9035875316008270de956e016c44_prof);

    }

    public function getTemplateName()
    {
        return "course/widgets/course-set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  35 => 8,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set courseSet = courseSet|wrap('courseSet.price') %}

<span class=\"course-price-widget\">
      <span class=\"
            {% if courseSet.maxCoursePrice == 0 %}
                  free
            {% else %}
                  price
            {% endif %}\">
          {{ courseSet.priceWrapper.priceText }}
      </span>
</span>", "course/widgets/course-set-price.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/course/widgets/course-set-price.html.twig");
    }
}
