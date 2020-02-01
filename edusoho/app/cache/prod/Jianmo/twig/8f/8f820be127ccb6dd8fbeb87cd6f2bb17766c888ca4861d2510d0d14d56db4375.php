<?php

/* admin/course-set/tr.html.twig */
class __TwigTemplate_d44b3f5cfb815f4f88213088fd4fe0aa0632fc47c85cb592ed6f934dc6f1e8dd extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/course-set/tr.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["dict_macro"] = $this->loadTemplate("common/data-dict-macro.html.twig", "admin/course-set/tr.html.twig", 3);
        // line 4
        $context["target"] = (("" . ($context["filter"] ?? null)) . "_index");
        // line 5
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 6
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/course-set/tr.html.twig", 6)->display($context);
        // line 7
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_show", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
        echo "\"
       target=\"_blank\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "</strong></a>
    ";
        // line 11
        if ((($context["filter"] ?? null) == "classroom")) {
            // line 12
            echo "      ";
            $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
            // line 13
            echo "      ";
            if ( !($context["classroom"] ?? null)) {
                // line 14
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.classroom_course_removed"), "html", null, true);
                echo "</span>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["courseSet"] ?? null), "type", array()) == "live")) {
            // line 18
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.live_course"), "html", null, true);
            echo "</span>
    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.category"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["category"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["category"] ?? null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute(($context["courseSet"] ?? null), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.recommend", array("%recommendedTime%" => twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "recommendedTime", array()), "Y-m-d"), "%recommendedSeq%" => $this->getAttribute(($context["courseSet"] ?? null), "recommendedSeq", array()))), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "  </td>
  <td>
    ";
        // line 27
        if ((((($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)) == 0) || ((($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)) == (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()), 0)) : (0))))) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()), 0)) : (0)), "html", null, true);
            echo "
    ";
        } else {
            // line 30
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "minCoursePrice", array()))) : ("")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "maxCoursePrice", array()))) : ("")), "html", null, true);
            echo "
    ";
        }
        // line 32
        echo "  </td>

  ";
        // line 34
        if ((($context["filter"] ?? null) == "normal")) {
            // line 35
            echo "    <td><a class=\"pvs phs\" href=\"javascript:void(0);\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_list", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["coursesCount"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", false, true), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["coursesCount"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", false, true), "courseNum", array()), 0)) : (0)), "html", null, true);
            echo "</a></td>
  ";
        }
        // line 37
        echo "  <td>
    ";
        // line 38
        if ((((array_key_exists("tag", $context)) ? (_twig_default_filter(($context["tag"] ?? null))) : ("")) && (($this->getAttribute(($context["courseSet"] ?? null), "displayTag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "displayTag", array()), "")) : ("")))) {
            // line 39
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? null), "name", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 41
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "displayTag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "displayTag", array()), "--")) : ("--")), "html", null, true);
            echo "
    ";
        }
        // line 43
        echo "    ";
        if (($this->env->getExtension('AppBundle\Twig\AppExtension')->count($this->getAttribute(($context["courseSet"] ?? null), "tags", array())) > 1)) {
            // line 44
            echo "      <i class=\"es-icon es-icon-more ft-xsm\" data-toggle=\"popover\" data-container=\"body\" data-trigger=\"hover\"
         data-placement=\"top\" data-content=\"";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["courseSet"] ?? null), "displayTagNames", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "displayTagNames", array()))) : ("")), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 47
        echo "  </td>
  ";
        // line 48
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/course-set/tr.html.twig", 48)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["courseSet"] ?? null), "orgCode", array()))));
        // line 49
        echo "  ";
        if (((($context["filter"] ?? null) != "open") && (($context["filter"] ?? null) != "liveOpen"))) {
            // line 50
            echo "    ";
            if ((($context["filter"] ?? null) == "classroom")) {
                // line 51
                echo "      <td>
        ";
                // line 52
                $context["classroom"] = (($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["classrooms"] ?? null), $this->getAttribute(($context["courseSet"] ?? null), "id", array()), array(), "array"), null)) : (null));
                // line 53
                echo "        ";
                if (($context["classroom"] ?? null)) {
                    // line 54
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute(($context["classroom"] ?? null), "classroomId", array()))), "html", null, true);
                    echo "\"
             target=\"_blank\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["classroom"] ?? null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 57
                echo "      </td>
    ";
            } else {
                // line 59
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 61
            echo "    ";
            if ((($context["filter"] ?? null) == "vip")) {
                // line 62
                echo "      ";
                $context["levels"] = $this->getAttribute(($context["courseSet"] ?? null), "levels", array(), "array");
                // line 63
                echo "      ";
                $context["length"] = twig_length_filter($this->env, ($context["levels"] ?? null));
                // line 64
                echo "      ";
                if ((($context["length"] ?? null) == 0)) {
                    // line 65
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_removed"), "html", null, true);
                    echo "</td>
      ";
                } else {
                    // line 67
                    echo "        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["levels"] ?? null)), "name", array()), "html", null, true);
                    echo "
          ";
                    // line 68
                    if ((($context["length"] ?? null) > 1)) {
                        // line 69
                        echo "            <br>
            <span class=\"text-muted text-sm\">";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.vip_grade_count", array("%count%" => ($context["length"] ?? null))), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 72
                    echo "        </td>
      ";
                }
                // line 74
                echo "    ";
            }
            // line 75
            echo "  ";
        }
        // line 76
        echo "  
  <td>
    ";
        // line 78
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>";
        // line 82
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute(($context["courseSet"] ?? null), "status", array()));
        echo "<br>
    ";
        // line 83
        if (((($context["filter"] ?? null) != "open") && (($context["filter"] ?? null) != "liveOpen"))) {
            // line 84
            echo "      <span class=\"text-muted text-sm\">";
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("courseSerializeMode", $this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()));
            echo "</span>
    ";
        }
        // line 86
        echo "  </td>
  <td>
    <div class=\"btn-group\">

      ";
        // line 90
        if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage")) {
            // line 91
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["courseSet"] ?? null), "id", array()))), "html", null, true);
            echo "\"
           target=\"_blank\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.course_manage.manage.manage_btn"), "html", null, true);
            echo "</a>
      ";
        }
        // line 94
        echo "      ";
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/course-set/tr.html.twig", 94)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "courseSet" => ($context["courseSet"] ?? null))));
        // line 95
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "admin/course-set/tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 95,  280 => 94,  275 => 92,  270 => 91,  268 => 90,  262 => 86,  256 => 84,  254 => 83,  250 => 82,  245 => 80,  240 => 78,  236 => 76,  233 => 75,  230 => 74,  226 => 72,  221 => 70,  218 => 69,  216 => 68,  211 => 67,  205 => 65,  202 => 64,  199 => 63,  196 => 62,  193 => 61,  187 => 59,  183 => 57,  178 => 55,  173 => 54,  170 => 53,  168 => 52,  165 => 51,  162 => 50,  159 => 49,  157 => 48,  154 => 47,  149 => 45,  146 => 44,  143 => 43,  137 => 41,  131 => 39,  129 => 38,  126 => 37,  118 => 35,  116 => 34,  112 => 32,  104 => 30,  98 => 28,  96 => 27,  92 => 25,  86 => 23,  84 => 22,  78 => 21,  75 => 20,  69 => 18,  66 => 17,  63 => 16,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/course-set/tr.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/course-set/tr.html.twig");
    }
}
