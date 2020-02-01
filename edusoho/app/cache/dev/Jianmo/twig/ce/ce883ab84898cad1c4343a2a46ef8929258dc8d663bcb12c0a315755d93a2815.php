<?php

/* default/course-grid-with-condition-index.html.twig */
class __TwigTemplate_9bac5e2203dc67a444ac9a54276ed9be866c78077ca2b7b767139c2213d853cc extends Twig_Template
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
        $__internal_2dae935aed0ff47534261786c11a737b1c722a30c624aef5f132d2fdf6c44a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae935aed0ff47534261786c11a737b1c722a30c624aef5f132d2fdf6c44a97->enter($__internal_2dae935aed0ff47534261786c11a737b1c722a30c624aef5f132d2fdf6c44a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/course-grid-with-condition-index.html.twig"));

        // line 1
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute(($context["config"] ?? null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute(($context["config"] ?? null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "latest")) {
            // line 7
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))));
            // line 8
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))));
            // line 10
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId")), "type" => "studentNum"));
            // line 12
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "hotSeq")) {
            // line 13
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", array("count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId")), "type" => "hotSeq"));
            // line 14
            echo "  ";
        }
        // line 15
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Categories", array("group" => "course", "parentId" => 0));
        // line 16
        echo "  ";
        $context["moreCategories"] = twig_slice($this->env, ($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")), (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)), null);
        // line 17
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 26
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\"
            data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
              href=\"javascript:;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
        ";
        // line 29
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 30
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "            ";
                if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                    // line 32
                    echo "              <li role=\"presentation\"
                  class=\"";
                    // line 33
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                  data-url=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                  data-type=\"course\"><a href=\"javascript:;\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 37
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 39
                echo "            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["moreCategories"] ?? $this->getContext($context, "moreCategories")));
                foreach ($context['_seq'] as $context["_key"] => $context["moreCategory"]) {
                    // line 45
                    echo "                  <li role=\"presentation\"
                      class=\"";
                    // line 46
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["moreCategory"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                      data-url=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["moreCategory"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\"
                      data-type=\"course\"><a href=\"javascript:;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moreCategory"], "name", array()), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moreCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "              </ul>
            </li>
          ";
            }
            // line 53
            echo "        ";
        }
        // line 54
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 59
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\"
              data-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a
                href=\"javascript:;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
          ";
        // line 62
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 64
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", array()), 4)) : (4)))) {
                        // line 65
                        echo "                <li role=\"presentation\"
                    class=\"js-course-filter ";
                        // line 66
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\"
                    data-url=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\"
                    data-type=\"course\"><a href=\"javascript:;\">";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 70
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 72
                echo "              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.category_more"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 75
            echo "          ";
        }
        // line 76
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 80
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 86
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "hotSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "hotSeq")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 92
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? $this->getContext($context, "courseSets")));
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
            // line 102
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 103
            $this->loadTemplate("course/widgets/course-grid.html.twig", "default/course-grid-with-condition-index.html.twig", 103)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
            // line 104
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.course_more"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
";
        
        $__internal_2dae935aed0ff47534261786c11a737b1c722a30c624aef5f132d2fdf6c44a97->leave($__internal_2dae935aed0ff47534261786c11a737b1c722a30c624aef5f132d2fdf6c44a97_prof);

    }

    public function getTemplateName()
    {
        return "default/course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 110,  385 => 109,  380 => 106,  365 => 104,  363 => 103,  360 => 102,  343 => 101,  334 => 95,  329 => 93,  323 => 92,  317 => 89,  312 => 87,  306 => 86,  300 => 83,  295 => 81,  289 => 80,  283 => 76,  280 => 75,  273 => 73,  270 => 72,  267 => 71,  257 => 70,  252 => 68,  248 => 67,  242 => 66,  239 => 65,  236 => 64,  224 => 63,  222 => 62,  218 => 61,  214 => 60,  208 => 59,  203 => 57,  198 => 54,  195 => 53,  190 => 50,  182 => 48,  178 => 47,  172 => 46,  169 => 45,  165 => 44,  158 => 39,  155 => 38,  141 => 37,  136 => 35,  132 => 34,  126 => 33,  123 => 32,  120 => 31,  102 => 30,  100 => 29,  96 => 28,  92 => 27,  86 => 26,  79 => 22,  73 => 19,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"course-list-section {{ config.background|default(\"\") }}\" id=\"course-list-section\">

  {% set count = config.count|default(12) %}
  {% set categoryId = config.categoryId|default(0) %}
  {% set orderBy = config.orderBy|default('latest') %}
  {% if orderBy == 'latest' %}
    {% set courseSets = data('LatestCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'recommendedSeq' %}
    {% set courseSets = data('RecommendCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'studentNum' %}
    {% set courseSets = data('PopularCourseSets',{'count':count, 'categoryId':categoryId,'type':'studentNum'}) %}
  {% elseif orderBy == 'hotSeq' %}
    {% set courseSets = data('PopularCourseSets',{'count':count, 'categoryId':categoryId,'type':'hotSeq'}) %}
  {% endif %}
  {% set categoriesFirst = data('Categories',{'group':'course', 'parentId':0}) %}
  {% set moreCategories =  categoriesFirst[config.categoryCount|default(4):] %}
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"{% if (categoryId|default(0) == 0) %}active {% endif %} js-course-filter\"
            data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
              href=\"javascript:;\">{{ 'site.datagrid.filter.all_course'|trans }}</a></li>
        {% if categoriesFirst %}
          {% for category in categoriesFirst %}
            {% if ( loop.index0 < config.categoryCount|default(4) ) %}
              <li role=\"presentation\"
                  class=\"{% if (categoryId|default(0) == category.id) %}active {% endif %} js-course-filter\"
                  data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                  data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
          {% if  moreCategories %}
            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                {% for moreCategory in moreCategories %}
                  <li role=\"presentation\"
                      class=\"{% if (categoryId|default(0) == moreCategory.id) %}active {% endif %} js-course-filter\"
                      data-url=\"{{ path('homepage_category',{categoryId : moreCategory.id, orderBy : orderBy|default('latest')}) }}\"
                      data-type=\"course\"><a href=\"javascript:;\">{{ moreCategory.name }}</a></li>
                {% endfor %}
              </ul>
            </li>
          {% endif %}
        {% endif %}
      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">{{ 'site.datagrid.filter.all_course'|trans }} <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter {% if (categoryId|default(0) == 0) %}active {% endif %}\"
              data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
                href=\"javascript:;\">{{ 'site.datagrid.filter.all_course'|trans }}</a></li>
          {% if categoriesFirst %}
            {% for category in categoriesFirst  if (category.parentId == 0) %}
              {% if ( loop.index0 < config.categoryCount|default(4) ) %}
                <li role=\"presentation\"
                    class=\"js-course-filter {% if (categoryId|default(0) == category.id) %}active {% endif %}\"
                    data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                    data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
              {% endif %}
            {% endfor %}
            {% if  moreCategories %}
              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"{{ path('course_set_explore') }}\">{{ 'site.datagrid.filter.category_more'|trans }}</a></li>
            {% endif %}
          {% endif %}
        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'latest') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'latest'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.latest'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'hotSeq') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'hotSeq'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.hotest'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'recommendedSeq') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'recommendedSeq'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.recommended'|trans }}
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        {% for courseSet in courseSets %}
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            {% include 'course/widgets/course-grid.html.twig' with {courseSet: courseSet} %}
          </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"{{ path('course_set_explore') }}\" class=\"btn btn-default btn-lg\">
        {{ 'site.datagrid.filter.course_more'|trans }} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
", "default/course-grid-with-condition-index.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/course-grid-with-condition-index.html.twig");
    }
}
