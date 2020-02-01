<?php

/* admin/course-set/index.html.twig */
class __TwigTemplate_b1c5572f12380d62b4a77785c0980108a57d0a44f3118ef9b48730155e2d0b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/course-set/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("admin/course-set/tab.html.twig", "admin/course-set/index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"mbm\">
        ";
        // line 13
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/course-set/index.html.twig", 13)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 14
        echo "
        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
            ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.category_placeholder"));
        echo "
          </select>
        </div>
        <div class=\"form-group \">
          <div class=\"controls\">
            <input class=\"form-control\" style=\"width: 200px\" id=\"tag\" type=\"text\" data-tag-value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("tag", $context)) ? (_twig_default_filter(($context["tag"] ?? null), "")) : (""))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["tag"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tag"] ?? null), "name", array()), "")) : ("")), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_tag_match");
        echo "\">
            <input class=\"form-control hidden\" name=\"tagId\" type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["tag"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tag"] ?? null), "id", array()), "")) : ("")), "html", null, true);
        echo "\">
          </div>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"status\">
            ";
        // line 28
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status_placeholder"));
        echo "
          </select>
        </div>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            ";
        // line 33
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("nonOpenCourseCateogry"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type"));
        echo "
          </select>
        </div>

        <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.title_placeholder"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.creator_placeholer"), "html", null, true);
        echo "\" name=\"creatorName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "creatorName"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>

      ";
        // line 46
        $this->loadTemplate("admin/widget/tooltip-widget.html.twig", "admin/course-set/index.html.twig", 46)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_tips"), "placement" => "left")));
        // line 47
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.count", array("%courseNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "total", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.published_count", array("%publishedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "published", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.closed_count", array("%closedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "closed", array())));
        echo "</span>
    <span class=\"mrl\">";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.unpublish_count", array("%unPublishedNum%" => $this->getAttribute(($context["courseSetStatusNum"] ?? null), "draft", array())));
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      ";
        // line 60
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 61
            echo "        <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
      ";
        }
        // line 63
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_set_manage.manage.number"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.name"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.price"), "html", null, true);
        echo "</th>
      ";
        // line 66
        if ((($context["filter"] ?? null) == "normal")) {
            // line 67
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.course_num"), "html", null, true);
            echo "</th>
      ";
        }
        // line 69
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.tags"), "html", null, true);
        echo "</th>
      ";
        // line 70
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/course-set/index.html.twig", 70)->display($context);
        // line 71
        echo "      
      ";
        // line 72
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 73
            echo "        <th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_location", array("%classroom%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classroom")))), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 75
            echo "        <th>
          ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.student_number"), "html", null, true);
            echo "
        </th>
      ";
        }
        // line 79
        echo "
      ";
        // line 80
        if ((($context["filter"] ?? null) == "course")) {
            // line 81
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.income_RMB"), "html", null, true);
            echo "</th>
      ";
        }
        // line 83
        echo "
      ";
        // line 84
        if ((($context["filter"] ?? null) == "vip")) {
            // line 85
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade"), "html", null, true);
            echo "</th>
      ";
        }
        // line 87
        echo "
      
      <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.creator"), "html", null, true);
        echo "</th>
      <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.status"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.operater"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
            // line 96
            echo "      ";
            $context["user"] = (($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), $this->getAttribute($context["courseSet"], "creator", array()), array(), "array"), null)) : (null));
            // line 97
            echo "      ";
            $context["category"] = (($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["categories"] ?? null), $this->getAttribute($context["courseSet"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 98
            echo "      ";
            $this->loadTemplate("admin/course-set/tr.html.twig", "admin/course-set/index.html.twig", 98)->display($context);
            // line 99
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 100
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.empty"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "    </tbody>
  </table>
  ";
        // line 108
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/course-set/index.html.twig", 108)->display(array_merge($context, array("module" => "courseSet", "formId" => "course-table")));
        // line 109
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/course-set/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 109,  295 => 108,  291 => 106,  281 => 102,  277 => 100,  264 => 99,  261 => 98,  258 => 97,  255 => 96,  237 => 95,  230 => 91,  226 => 90,  222 => 89,  218 => 87,  212 => 85,  210 => 84,  207 => 83,  201 => 81,  199 => 80,  196 => 79,  190 => 76,  187 => 75,  181 => 73,  179 => 72,  176 => 71,  174 => 70,  169 => 69,  163 => 67,  161 => 66,  157 => 65,  153 => 64,  148 => 63,  144 => 61,  142 => 60,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  115 => 47,  113 => 46,  108 => 44,  101 => 42,  92 => 38,  84 => 33,  76 => 28,  68 => 23,  60 => 22,  52 => 17,  47 => 14,  45 => 13,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/index.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/course-set/index.html.twig");
    }
}
