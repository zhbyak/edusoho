<?php

/* @root/src/AppBundle/Extensions/StatusTemplate/become_student.tpl.html.twig */
class __TwigTemplate_bff8c375461237586ec493d28665118d18230c89a3cfa403ec0e5e50fe66a9aa extends Twig_Template
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
        $context["props"] = $this->getAttribute(($context["status"] ?? null), "properties", array());
        // line 2
        echo "
";
        // line 3
        if ((($context["mode"] ?? null) == "simple")) {
            // line 4
            echo "\t";
            if (($this->getAttribute(($context["status"] ?? null), "objectType", array()) == "course")) {
                // line 5
                echo "\t    ";
                $context["courseSet"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CourseSetByCourse", array("courseId" => $this->getAttribute($this->getAttribute(($context["props"] ?? null), "course", array()), "id", array())));
                // line 6
                echo "\t    ";
                if (($context["courseSet"] ?? null)) {
                    // line 7
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("status.become_student.course.simple"), "html", null, true);
                    echo "
\t\t";
                }
                // line 9
                echo "\t";
            } else {
                // line 10
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("status.become_student.classroom.simple"), "html", null, true);
                echo "
\t";
            }
            // line 12
            echo "  
";
        } elseif ((        // line 13
($context["mode"] ?? null) == "full")) {
            // line 14
            echo "\t";
            if (($this->getAttribute(($context["status"] ?? null), "objectType", array()) == "course")) {
                // line 15
                echo "\t\t
\t";
            } else {
                // line 17
                echo "\t\t
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@root/src/AppBundle/Extensions/StatusTemplate/become_student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 10,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@root/src/AppBundle/Extensions/StatusTemplate/become_student.tpl.html.twig", "/Users/zhbyak/Apache/edusoho/src/AppBundle/Extensions/StatusTemplate/become_student.tpl.html.twig");
    }
}
