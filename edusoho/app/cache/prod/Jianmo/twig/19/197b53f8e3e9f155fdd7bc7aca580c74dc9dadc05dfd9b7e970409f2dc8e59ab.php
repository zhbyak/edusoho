<?php

/* expression.twig */
class __TwigTemplate_c5066c9c190637f749329385650a8aaf8f8eedb5bc1143e6ebf4e8b8e9f6ef02 extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudStatus() && (($this->getAttribute($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudInfo(), "ai.face", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudInfo(), "ai.face", array(), "array"), 0)) : (0))) && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "expression.twig", "");
    }
}
