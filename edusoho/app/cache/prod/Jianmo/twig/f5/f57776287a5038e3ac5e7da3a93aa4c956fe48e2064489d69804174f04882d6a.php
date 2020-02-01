<?php

/* activity/ltc-server/js-loader.html.twig */
class __TwigTemplate_4f427867729baddee250767c056b6025a59cbad36e99b4ab025b28a856a5b2f7 extends Twig_Template
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
        echo "<div id=\"ltc-source-list\" class=\"hide\">
  ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\ActivityExtension')->findLtcSource(($context["courseId"] ?? null), ($context["taskId"] ?? null)), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "activity/ltc-server/js-loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "activity/ltc-server/js-loader.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/activity/ltc-server/js-loader.html.twig");
    }
}
