<?php

/* powered-by.html.twig */
class __TwigTemplate_a9a898f16dbb958768cc29477e4b5347b3078064a24d6c7f72841f2879867e39 extends Twig_Template
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
        if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned") && (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 2)) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.licenseDomains")) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), twig_split_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.licenseDomains"), ";")))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\AppBundle\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2014-";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, null, "Y"), "html", null, true);
            echo " ";
            if (( !_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2)) {
                echo "<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.power_by"), "html", null, true);
                echo "</a>";
            }
        }
    }

    public function getTemplateName()
    {
        return "powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "powered-by.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/powered-by.html.twig");
    }
}
