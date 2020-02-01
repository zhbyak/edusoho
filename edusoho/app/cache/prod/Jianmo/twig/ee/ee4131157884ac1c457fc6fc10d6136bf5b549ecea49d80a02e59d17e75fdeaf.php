<?php

/* admin/widget/tooltip-widget.html.twig */
class __TwigTemplate_c665b42b02f3a9aee89b884b3565b8f3959cb32d626398bffbe440644ebcf447 extends Twig_Template
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
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\" data-placement=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? null), "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
  </div>
</div>

";
        // line 9
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("widget/tooltip-widget");
    }

    public function getTemplateName()
    {
        return "admin/widget/tooltip-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/widget/tooltip-widget.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/widget/tooltip-widget.html.twig");
    }
}
