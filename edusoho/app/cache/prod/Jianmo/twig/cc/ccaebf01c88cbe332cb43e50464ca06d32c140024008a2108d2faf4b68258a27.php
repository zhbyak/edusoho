<?php

/* @activity/text/resources/views/show.html */
class __TwigTemplate_899c9b760c6fa6e68c23aed37e14a3bd4f3227204bb0bbc7eaa5e4b6b98095ed extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"utf-8\" />
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <title>Picture and text task display page</title>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link href=\"/activities/text/static-dist/css/text.css\" rel=\"stylesheet\" />
      <base target=\"_blank\">
  </head>
  <style>
    pre {
      white-space: pre-wrap;
      word-wrap: break-word;
    }
    .iframe-scroll {
      -webkit-overflow-scrolling: touch;
      overflow-y: scroll;
      z-index: 1;
    }
    .text-iframe-wrap {
      padding-top: 0;
      padding-bottom: 0;
      height: 100%;
      overflow: scroll;
    }
  </style>
  <body>
    <script src=\"/static-dist/libs/ltc-sdk-client.js\"></script>
    
    <div class=\"iframe-parent-content iframe-parent-full\" id=\"text-activity\" data-finish-time=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "ext", array()), "finishDetail", array()), "html", null, true);
        echo "\" data-disable-copy=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled"), "html", null, true);
        echo "\">
      <div class=\"text-activity-content cke_editable cke_contents_ltr js-text-activity-content\">
      </div>
    </div>
    <script>document.write(\"<script type='text/javascript' src='/activities/text/static-dist/js/show/index.js?v=\" + Math.round(Date.now()/3600000) + \"'><\\/script>\");</script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@activity/text/resources/views/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/text/resources/views/show.html", "/Users/zhbyak/Apache/edusoho/web/activities/text/resources/views/show.html");
    }
}
