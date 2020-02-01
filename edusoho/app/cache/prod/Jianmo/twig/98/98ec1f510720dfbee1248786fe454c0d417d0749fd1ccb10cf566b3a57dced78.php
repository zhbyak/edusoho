<?php

/* file-chooser/parts/materiallib-choose.html.twig */
class __TwigTemplate_d4844de0b70e59c663c85e01af9ca85197e429428a70abd4c7480793458b7370 extends Twig_Template
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
        echo "<div class=\"chooser-content\">
\t<div class=\"row \">
\t\t<div class=\"col-sm-6 radios\">
\t\t\t<label class=\"js-material-type prm\" data-type=\"my\">
\t\t\t\t<input type=\"radio\" name=\"file-browser-video-source\" value=\"upload\" checked=\"\">
\t\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.materiallib_choose.from_upload"), "html", null, true);
        echo "
\t\t\t</label>
\t\t\t<label class=\"js-material-type prm\" data-type=\"sharing\"
\t\t\t       data-sharing-contacts-url=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_materiallib_contacts");
        echo "\">
\t\t\t\t<input type=\"radio\" name=\"file-browser-video-source\" value=\"shared\">
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.materiallib_choose.from_share"), "html", null, true);
        echo "
\t\t\t</label>
\t\t\t<label class=\"js-material-type prm\" data-type=\"public\">
\t\t\t\t<input type=\"radio\" name=\"file-browser-video-source\" value=\"public\">
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.materiallib_choose.from_public"), "html", null, true);
        echo "
\t\t\t</label>
\t\t</div>
\t\t<div class=\"col-sm-6 material-search-form hidden-xs\">
      <span class=\"input-group js-file-name-group\">
        <input name=\"file-filter-by-name\" class=\"form-control  js-file-name\" type=\"text\"
               placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.course_file.input_placeholder", array("%placeholder%" => ((array_key_exists("placeholder", $context)) ? (_twig_default_filter(($context["placeholder"] ?? null), null)) : (null)))), "html", null, true);
        echo "\">
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default js-browser-search\"
                  data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_materiallib_choose");
        echo "\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
        </span>
      </span>
\t\t</div>
\t\t<div class=\"col-sm-6 material-search-form visible-xs mtm\">
      <span class=\"input-group js-file-name-group\">
        <input name=\"file-filter-by-name\" class=\"form-control width-150 js-file-name\" type=\"text\"
               placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.course_file.input_placeholder", array("%placeholder%" => ((array_key_exists("placeholder", $context)) ? (_twig_default_filter(($context["placeholder"] ?? null), null)) : (null)))), "html", null, true);
        echo "\">
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default js-browser-search mbm\"
                  data-url=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_materiallib_choose");
        echo "\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
        </span>
      </span>
\t\t</div>
\t\t<div class=\"js-file-owner-group col-sm-offset-6 col-sm-6 mtm hidden \">
      <span class=\"file-filter-by-owner-container\" style=\"\">
        <select name=\"file-filter-by-owner\" class=\"js-file-owner form-control\">
          <option value=\"\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.materiallib_choose.choose_teacher"), "html", null, true);
        echo "</option>
        </select>
      </span>
\t\t</div>
\t</div>
</div>

<div class=\"js-material-lib-search-form\">
\t<input type=\"hidden\" name=\"sourceFrom\" value=\"my\">
\t<input type=\"hidden\" name=\"page\" value=\"1\">
\t<input type=\"hidden\" name=\"currentUserId\">
\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("fileType", $context)) ? (_twig_default_filter(($context["fileType"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
\t<input type=\"hidden\" name=\"keyword\">
  <input type=\"hidden\" name=\"batch\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("batch", $context)) ? (_twig_default_filter(($context["batch"] ?? null), 0)) : (0)), "html", null, true);
        echo "\">
</div>
<div class=\"js-material-list chooser-list-parent\">
\t<div class=\"empty\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.materiallib_choose.wating"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "file-chooser/parts/materiallib-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  112 => 54,  107 => 52,  93 => 41,  79 => 34,  73 => 31,  59 => 24,  53 => 21,  44 => 15,  37 => 11,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/parts/materiallib-choose.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/file-chooser/parts/materiallib-choose.html.twig");
    }
}
