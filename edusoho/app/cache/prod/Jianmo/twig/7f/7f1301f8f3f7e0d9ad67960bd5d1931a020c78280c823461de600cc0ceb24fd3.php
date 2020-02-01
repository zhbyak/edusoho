<?php

/* open-course-manage/open/create-show.html.twig */
class __TwigTemplate_5cf39bc76f3c28c0c90acd621c052eb45d7c6e4a3b4b45224dca82379a5afd0f extends Twig_Template
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
        echo "<div class=\"course-select js-courseSetType ";
        if ((((array_key_exists("defaultType", $context)) ? (_twig_default_filter(($context["defaultType"] ?? null), "normal")) : ("normal")) == ($context["type"] ?? null))) {
            echo "active";
        }
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
  <i class=\"es-icon es-icon-lubogongkaike\"></i>
  <div class=\"course-type\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course"), "html", null, true);
        echo "</div>
  <div class=\"course-intro\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.record_open_course.tips"), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "open-course-manage/open/create-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "open-course-manage/open/create-show.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/open-course-manage/open/create-show.html.twig");
    }
}
