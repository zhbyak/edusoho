<?php

/* courseset-manage/base-info/info.html.twig */
class __TwigTemplate_ce565747d7cdfbf9b827bccec054e38095c9f97979d97e77636095bc0e5f1299 extends Twig_Template
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
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label courseset-manage-body__lable\">
    <label class=\"control-label-required\" for=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.title"), "html", null, true);
        echo "</label>
  </div>
  <div class=\"col-md-8\">
    <input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control js-courseset-title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"subtitle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.sub_title"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8\">
    <textarea id=\"subtitle\" name=\"subtitle\" class=\"form-control js-courseset-subtitle\">";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"tags\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <input type=\"text\" id=\"tags\" name=\"tags\" class=\"width-full select2-offscreen\"tabindex=\"-1\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tags", $context)) ? (_twig_default_filter(($context["tags"] ?? null), "")) : ("")), ","), "html", null, true);
        echo "\"
      data-url=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match");
        echo "\"
      data-explain=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "\">
    <div class=\"help-block courseset-manage-body__tip\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.tag_tips"), "html", null, true);
        echo "</div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"categoryId\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <select id=\"categoryId\" name=\"categoryId\" class=\"form-control width-input width-input-large\">
      ";
        // line 33
        $context["course_category_choices"] = (array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.category")) + $this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"));
        // line 34
        echo "      ";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(($context["course_category_choices"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "categoryId", array()));
        echo "
    </select>
    <div class=\"help-block\" style=\"display:none;\"></div>
  </div>
</div>
";
        // line 39
        $this->loadTemplate("org/org-tree-select-webpack.html.twig", "courseset-manage/base-info/info.html.twig", 39)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 40
        echo "
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 cd-radio-group\">
    ";
        // line 44
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->cdRadios("serializeMode", array("none" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.none"), "serialized" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.serialized"), "finished" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.base.serialize_mode.finished")), (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()), "none")) : ("none")));
        echo "
  </div>
</div>

<!-- 封面图片 -->
<div class=\"form-group\">
  <label class=\"col-md-2 control-label\" for=\"cover\"><b>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.content_title"), "html", null, true);
        echo "</b></label>
  <div class=\"col-md-8 controls\">
    ";
        // line 52
        $this->loadTemplate("common/upload-image.html.twig", "courseset-manage/base-info/info.html.twig", 52)->display(array_merge($context, array("saveUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_cover_crop", array("id" => $this->getAttribute(        // line 53
($context["courseSet"] ?? null), "id", array()))), "targetImg" => "course-cover", "cropWidth" => "480", "cropHeight" => "270", "uploadToken" => "tmp", "imageClass" => "course-manage-cover", "imageText" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover.change"), "imageSrc" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(        // line 60
($context["courseSet"] ?? null), "large"), "courseSet.png"))));
        // line 63
        echo "    <div class=\"courseset-manage-body__tip\">
      ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.cover_image.upload_tips");
        echo "
    </div>
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-2 control-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.detail.summary"), "html", null, true);
        echo "</label>
  <div class=\"col-md-8 controls\">
    <textarea name=\"summary\" rows=\"10\" data-form=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["form"] ?? null), "html", null, true);
        echo "\" data-button=\"";
        echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
        echo "\" id=\"courseset-summary-field\" class=\"form-control\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->fieldValue(($context["courseSet"] ?? null), "summary");
        echo "</textarea>
    <div class=\"help-block\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("editor.iframe_tips"), "html", null, true);
        echo "</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "courseset-manage/base-info/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 73,  140 => 72,  135 => 70,  126 => 64,  123 => 63,  121 => 60,  120 => 53,  119 => 52,  114 => 50,  105 => 44,  100 => 42,  96 => 40,  94 => 39,  85 => 34,  83 => 33,  77 => 30,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  52 => 20,  43 => 14,  38 => 12,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/base-info/info.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/courseset-manage/base-info/info.html.twig");
    }
}
