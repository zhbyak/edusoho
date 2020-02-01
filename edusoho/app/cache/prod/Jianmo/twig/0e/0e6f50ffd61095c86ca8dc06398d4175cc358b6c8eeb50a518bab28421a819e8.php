<?php

/* course/header/header-for-guest.html.twig */
class __TwigTemplate_9714494672cb3a2f5a78d64e307a53cd9fd57db43ce8c75c1004c09226b69cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("course/header/header-layout.html.twig", "course/header/header-for-guest.html.twig", 1);
        $this->blocks = array(
            'course_header_subtitle' => array($this, 'block_course_header_subtitle'),
            'course_header_people_num' => array($this, 'block_course_header_people_num'),
            'course_member_count' => array($this, 'block_course_member_count'),
            'course_heard_content' => array($this, 'block_course_heard_content'),
            'course_member_exit' => array($this, 'block_course_member_exit'),
            'course_header_top' => array($this, 'block_course_header_top'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "course/header/header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((($context["previewAs"] ?? null) == "guest")) {
            // line 4
            $context["member"] = null;
            // line 5
            $context["courses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("CoursesByCourseSetId", array("courseSetId" => $this->getAttribute(($context["courseSet"] ?? null), "id", array())));
        }
        // line 8
        $context["page_type"] = "guest";
        // line 11
        $context["showCourses"] = ((array_key_exists("showCourses", $context)) ? (_twig_default_filter(($context["showCourses"] ?? null), 1)) : (1));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_course_header_subtitle($context, array $blocks = array())
    {
    }

    // line 14
    public function block_course_header_people_num($context, array $blocks = array())
    {
    }

    // line 16
    public function block_course_member_count($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.course_member_count", array("%studentsNum%" => $this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()))), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_course_heard_content($context, array $blocks = array())
    {
        // line 21
        echo "  <div class=\"course-detail-bottom\">
    <div class=\"course-detail-img\">
      <span class=\"tags mrm\">
        ";
        // line 24
        if (($this->getAttribute(($context["courseSet"] ?? null), "serializeMode", array()) == "serialized")) {
            // line 25
            echo "          <span class=\"tag-serialing\"></span>
        ";
        } elseif (($this->getAttribute(        // line 26
($context["courseSet"] ?? null), "serializeMode", array()) == "finished")) {
            // line 27
            echo "          <span class=\"tag-finished\"></span>
        ";
        }
        // line 29
        echo "      </span>
      ";
        // line 30
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("drp.product_tags.extension", array("type" => "course", "targetId" => $this->getAttribute(($context["course"] ?? null), "id", array())));
        echo "
      <img class=\"img-responsive\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->env->getExtension('AppBundle\Twig\AppExtension')->courseSetCover(($context["courseSet"] ?? null), "large"), "courseSet.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
        echo " \">
      <div class=\"image-overlay\"></div>
      ";
        // line 33
        if (((array_key_exists("previewTask", $context)) ? (_twig_default_filter(($context["previewTask"] ?? null), null)) : (null))) {
            // line 34
            echo "        <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_task_preview", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "id" => $this->getAttribute(($context["previewTask"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"course-img-cover\">
          <i class=\"es-icon es-icon-playcircleoutline\"></i>
        </a>
      ";
        }
        // line 38
        echo "      
      <div class=\"course-detail-remask\">
        ";
        // line 40
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 41
            echo "          ";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_cover_num_mode") == "studentNum")) {
                // line 42
                echo "            <i class=\"es-icon es-icon-people\"></i>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_count", array("%studentsNum%" => (($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "studentNum", array()), 0)) : (0))));
                echo "
          ";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_cover_num_mode") == "hitNum")) {
                // line 44
                echo "            <i class=\"es-icon es-icon-view\"></i>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.students_count", array("%studentsNum%" => (($this->getAttribute(($context["course"] ?? null), "hitNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "hitNum", array()), 0)) : (0))));
                echo "
          ";
            }
            // line 46
            echo "        ";
        }
        // line 47
        echo "        ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.show_review", "1") == 1)) {
            // line 48
            echo "          <div class=\"score pull-right mb0\">
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "star", array(0 => (($this->getAttribute(($context["courseSet"] ?? null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "rating", array()), 0)) : (0))), "method"), "html", null, true);
            echo "
            <span class=\"vertical-middle\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.mask.rating_num", array("%ratingNum%" => (($this->getAttribute(($context["courseSet"] ?? null), "ratingNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courseSet"] ?? null), "ratingNum", array()), 0)) : (0)))), "html", null, true);
            echo "</span>
          </div>
        ";
        }
        // line 53
        echo "      </div>
    </div>
    <div class=\"course-detail-info\">
      <div class=\"course-detail-info__text js-course-detail-info\">
        ";
        // line 57
        $context["onDiscount"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->isDiscount(($context["course"] ?? null));
        // line 58
        echo "        <div class=\"course-detail-info__title\">
          ";
        // line 59
        if (($context["marketingPage"] ?? null)) {
            // line 60
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        } else {
            // line 62
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 64
        echo "        </div>
        ";
        // line 65
        $context["canManage"] = (((($this->getAttribute(($context["member"] ?? null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["member"] ?? null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_course_content_manage"));
        // line 66
        echo "        ";
        if (($context["canManage"] ?? null)) {
            // line 67
            echo "          <a class=\"btn btn-default btn-xs course-detail-info__manage\" href=\"";
            if ((((array_key_exists("page_type", $context)) ? (_twig_default_filter(($context["page_type"] ?? null), "guest")) : ("guest")) == "member")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_course_tasks", array("courseSetId" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()), "courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_base", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            }
            echo "\">
            <i class=\"es-icon es-icon-setting\"></i>&nbsp;";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.manage"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 71
        echo "        ";
        if ($this->getAttribute(($context["courseSet"] ?? null), "subtitle", array())) {
            // line 72
            echo "          <p class=\"course-detail-info__subtitle text-overflow subtitle cd-text-sm cd-mb16\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\"
            data-trigger=\"hover\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "html", null, true);
            echo "\">
            <span >";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "subtitle", array()), "html", null, true);
            echo "</span>
          </p>
        ";
        }
        // line 77
        echo "        <div class=\"";
        if (($context["onDiscount"] ?? null)) {
            echo " mb10  ";
        } else {
            echo " cd-mb16 ";
        }
        echo "\">
          ";
        // line 78
        $this->loadTemplate("course/header/header-for-price.html.twig", "course/header/header-for-guest.html.twig", 78)->display($context);
        // line 79
        echo "        </div>
        
        ";
        // line 81
        if (($context["onDiscount"] ?? null)) {
            // line 82
            echo "          <div class=\"cd-mb8\">
            <span class=\"course-detail__label\">";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.acitivity"), "html", null, true);
            echo "</span>
            <span class=\"text-12 color-warning\">
              <b class=\"hidden-xs course-detail-activity-title\">";
            // line 85
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($this->getAttribute(($context["course"] ?? null), "discount", array()), "name", array()), 10);
            echo "</b><span class=\"cd-text-medium cd-ml16\" id=\"discount-endtime-countdown\" data-remaintime=";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["course"] ?? null), "discount", array()), "endTime", array()) - $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()), "html", null, true);
            echo "></span><i class=\"es-icon es-icon-accesstime text-14 mls cd-text-medium\"></i>
            <span>
          </div>
        ";
        }
        // line 89
        echo "        <div class=\"course-detail-gray course-detail-gray--market ";
        if ( !($context["onDiscount"] ?? null)) {
            echo " not-activity ";
        }
        echo "\">
          ";
        // line 90
        if (($context["previewAs"] ?? null)) {
            // line 91
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()));
            // line 92
            echo "          ";
        } else {
            // line 93
            echo "            ";
            $context["hasMulCoursePlans"] = $this->env->getExtension('AppBundle\Twig\CourseExtension')->hasMulCourses($this->getAttribute(($context["courseSet"] ?? null), "id", array()), 1);
            // line 94
            echo "          ";
        }
        // line 95
        echo "          ";
        if ((($context["showCourses"] ?? null) && ($context["hasMulCoursePlans"] ?? null))) {
            // line 96
            echo "            <div class=\"course-detail-content\">
              <span class=\"course-detail-title vertical-middle\">";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.teaching_plan"), "html", null, true);
            echo "</span>
              <ul class=\"nav nav-pills nav-pills-sm nav-pills-transparent course-detail-nav\">
                ";
            // line 99
            $context["current_course"] = ($context["course"] ?? null);
            // line 100
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((($this->getAttribute($context["course"], "status", array()) == "published") || ($context["previewAs"] ?? null))) {
                    // line 101
                    echo "                  <li class=\"mb5 mrs ";
                    if (($this->getAttribute(($context["current_course"] ?? null), "id", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        echo " active ";
                    }
                    echo "\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" data-container=\"body\" title=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "\"
                  data-trigger=\"hover\" href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()), "previewAs" => ($context["previewAs"] ?? null))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["course"], "title", array()), 10), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.unname_title")), "html", null, true);
                    echo "
                    </a>
                    <i class=\"es-icon es-icon-done done-icon\"></i>
                  </li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "              </ul>
            </div>
          ";
        }
        // line 111
        echo "
          <div class=\"hidden-xs common-line-height\">
            <span class=\"course-detail-title\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date"), "html", null, true);
        echo "</span>
            ";
        // line 114
        if (($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "days")) {
            // line 115
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.days_mode", array("%expiryDays%" => $this->getAttribute(($context["course"] ?? null), "expiryDays", array())));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 118
($context["course"] ?? null), "expiryMode", array()) == "end_date")) {
            // line 119
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.end_date_mode", array("%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 122
($context["course"] ?? null), "expiryMode", array()) == "date")) {
            // line 123
            echo "              <span class=\"gray-dark course-detail-expiry\">
                ";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.date_mode", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), "Y-m-d "), "%expiryEndDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryEndDate", array()), "Y-m-d ")));
            echo "
              </span>
            ";
        } elseif (($this->getAttribute(        // line 126
($context["course"] ?? null), "expiryMode", array()) == "forever")) {
            // line 127
            echo "              <span class=\"gray-dark course-detail-expiry mrl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.forever_mode"), "html", null, true);
            echo "</span>
            ";
        }
        // line 129
        echo "          </div>
          
          ";
        // line 131
        if ((($this->getAttribute(($context["course"] ?? null), "buyable", array()) != 0) && ($this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()) != 0))) {
            // line 132
            echo "            <div class=\"mtl hidden-xs common-line-height\">
              ";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.buy_expiry_date.buy_expiry_time", array("%buyExpiryTime%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "buyExpiryTime", array()), "Y-m-d ")));
            echo "
            </div>
          ";
        }
        // line 136
        echo "          
          ";
        // line 137
        if ((($this->getAttribute(($context["course"] ?? null), "showServices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "showServices", array()), 1)) : (1))) {
            // line 138
            echo "            <div class=\"course-detail-service cd-mt16\">
              ";
            // line 139
            $context["serviceTags"] = $this->env->getExtension('AppBundle\Twig\AppExtension')->buildServiceTags((($this->getAttribute(($context["course"] ?? null), "services", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "services", array()), array())) : (array())));
            // line 140
            echo "              <span class=\"course-detail-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.showServices"), "html", null, true);
            echo "</span>
              ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["serviceTags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 142
                echo "                ";
                if ($this->getAttribute($context["tag"], "active", array())) {
                    // line 143
                    echo "                  <span
                      class=\"lump-sm color-lump bg-primary mr5 hidden-xs\"
                      data-container=\"body\"
                      data-trigger=\"hover\"
                      data-placement=\"top\"
                      data-toggle=\"tooltip\"
                      title=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fullName", array()), "html", null, true);
                    echo "\"
                      data-content=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "summary", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "shortName", array()), "html", null, true);
                    echo "
                  </span>
                ";
                }
                // line 154
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "            </div>
          ";
        }
        // line 157
        echo "          
          ";
        // line 158
        if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled"), false) && $this->env->getExtension('AppBundle\Twig\CourseExtension')->isSupportEnableAudio((($this->getAttribute(($context["course"] ?? null), "enableAudio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "enableAudio", array()), 0)) : (0)))) && ($this->getAttribute(($context["course"] ?? null), "type", array()) == "normal"))) {
            // line 159
            echo "            <div class=\"course-detail-listening\">
              <span class=\"course-detail-title\">";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.info.video.convert.audio.enable_label"), "html", null, true);
            echo "</span>
              ";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.click.listen"), "html", null, true);
            echo "
              <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"__blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.video.convert.client.try"), "html", null, true);
            echo "</a>
            </div>
          ";
        }
        // line 165
        echo "        </div>

        <div class=\"course-detail-section-responsive visible-xs visible-sm clearfix\">
          <ul class=\"clearfix\">
            <!--营销页显示-->
            ";
        // line 170
        if (($context["marketingPage"] ?? null)) {
            // line 171
            echo "              <li class=\"js-unfavorite-btn ";
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"color-primary\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favorite color-primary\"></i>
                  <br/>
                  ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"js-favorite-btn ";
            // line 179
            if (($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
                <a class=\"\" href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "\"
                  data-trigger=\"hover\">
                  <i class=\"es-icon es-icon-favoriteoutline\"></i>
                  <br/>
                  ";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "
                </a>
              </li>
            ";
        }
        // line 188
        echo "            
            <li class=\"es-share top\">
              <a class=\" dropdown-toggle\" href=\"\" data-toggle=\"dropdown\" title=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "\">
                <i class=\"es-icon es-icon-share\"></i>
                <br/>
                ";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "
              </a>
              ";
        // line 195
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 195)->display(array_merge($context, array("type" => "courseSet")));
        // line 196
        echo "            </li>

            ";
        // line 198
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null), "mobile" => true));
        echo "

          </ul>
        </div>
      </div>

      <div class=\"course-detail-info__btn js-course-header-operation\">
        <ul class=\"course-operation course-operation--market hidden-xs hidden-sm clearfix mb0\">
          <li class=\"es-qrcode top hidden-xs mrl\" data-url=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_qrcode", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
        echo "\">
            <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-saoyisao course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.qrcode_tips"), "html", null, true);
        echo "</span></a>
            <span class=\"qrcode-popover\">
              <img class=\"mb0\" src=\"\" alt=\"\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.tips.scan_qrcode_tips"), "html", null, true);
        echo "
            </span>
          </li>

          ";
        // line 214
        echo "          <li class=\"es-share es-share-item top mrl\">
            <a class=\"dropdown-toggle cd-link-assist\" href=\"javascript:;\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.share"), "html", null, true);
        echo "</span>
            </a>
            ";
        // line 218
        $this->loadTemplate("common/share-dropdown.html.twig", "course/header/header-for-guest.html.twig", 218)->display(array_merge($context, array("type" => "courseSet")));
        // line 219
        echo "          </li>
          <!--营销页显示-->
          ";
        // line 222
        echo "          ";
        if (($context["marketingPage"] ?? null)) {
            // line 223
            echo "            <li class=\"js-unfavorite-btn mrl ";
            if ( !($context["isUserFavorite"] ?? null)) {
                echo "hidden ";
            }
            echo "\" id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_unfavorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favorite color-danger course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.followed"), "html", null, true);
            echo "</span>
              </a>
            </li>
            <li class=\"js-favorite-btn mrl ";
            // line 227
            if (($context["isUserFavorite"] ?? null)) {
                echo "hidden";
            }
            echo "\" id=\"favorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_favorite", array("id" => $this->getAttribute(($context["course"] ?? null), "courseSetId", array()))), "html", null, true);
            echo "\">
              <a class=\"cd-link-assist\" href=\"javascript:;\"><i class=\"es-icon es-icon-favoriteoutline course-operation__icon\"></i><span class=\"cd-text-sm cd-text-medium\">";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.status.follow"), "html", null, true);
            echo "</span>
              </a>
            </li>
          ";
        }
        // line 232
        echo "

          ";
        // line 234
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("course.header-marketing-btn.extension", array("course" => ($context["course"] ?? null)));
        echo "
          ";
        // line 236
        echo "         
          ";
        // line 237
        $this->displayBlock('course_member_exit', $context, $blocks);
        // line 238
        echo "        </ul>
        <div class=\"text-right buy-btn-group course-operation-btn ";
        // line 239
        if (((array_key_exists("classroom", $context)) ? (_twig_default_filter(($context["classroom"] ?? null), null)) : (null))) {
            echo " course-classroom-tip";
        }
        echo "\">
          ";
        // line 240
        if (((array_key_exists("member", $context)) ? (_twig_default_filter(($context["member"] ?? null), false)) : (false))) {
            // line 241
            echo "            ";
            if ((($this->getAttribute(($context["course"] ?? null), "expiryMode", array()) == "date") && ($this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()) >= $this->env->getExtension('AppBundle\Twig\WebExtension')->timestamp()))) {
                // line 242
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.expiry_date.expiryStartDate", array("%expiryStartDate%" => twig_date_format_filter($this->env, $this->getAttribute(($context["course"] ?? null), "expiryStartDate", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date.format"))));
                echo "
            ";
            } else {
                // line 244
                echo "              <a class=\"cd-btn cd-btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_course_show", array("id" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.learn"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 248
            echo "          ";
        } else {
            // line 249
            echo "            ";
            if (((array_key_exists("classroom", $context)) ? (_twig_default_filter(($context["classroom"] ?? null), null)) : (null))) {
                // line 250
                echo "              ";
                $this->loadTemplate("course/header/header-for-classroom-info.html.twig", "course/header/header-for-guest.html.twig", 250)->display($context);
                // line 251
                echo "            ";
            } else {
                // line 252
                echo "              ";
                $this->loadTemplate("course/header/header-for-guest-buy-btn.html.twig", "course/header/header-for-guest.html.twig", 252)->display($context);
                // line 253
                echo "            ";
            }
            // line 254
            echo "          ";
        }
        // line 255
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    // line 237
    public function block_course_member_exit($context, array $blocks = array())
    {
    }

    // line 261
    public function block_course_header_top($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "course/header/header-for-guest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 261,  679 => 237,  671 => 255,  668 => 254,  665 => 253,  662 => 252,  659 => 251,  656 => 250,  653 => 249,  650 => 248,  644 => 245,  639 => 244,  633 => 242,  630 => 241,  628 => 240,  622 => 239,  619 => 238,  617 => 237,  614 => 236,  610 => 234,  606 => 232,  599 => 228,  591 => 227,  585 => 224,  576 => 223,  573 => 222,  569 => 219,  567 => 218,  562 => 216,  558 => 214,  551 => 209,  546 => 207,  542 => 206,  531 => 198,  527 => 196,  525 => 195,  520 => 193,  514 => 190,  510 => 188,  503 => 184,  496 => 180,  488 => 179,  482 => 176,  475 => 172,  466 => 171,  464 => 170,  457 => 165,  449 => 162,  445 => 161,  441 => 160,  438 => 159,  436 => 158,  433 => 157,  429 => 155,  423 => 154,  417 => 151,  413 => 150,  409 => 149,  401 => 143,  398 => 142,  394 => 141,  389 => 140,  387 => 139,  384 => 138,  382 => 137,  379 => 136,  373 => 133,  370 => 132,  368 => 131,  364 => 129,  358 => 127,  356 => 126,  351 => 124,  348 => 123,  346 => 122,  341 => 120,  338 => 119,  336 => 118,  331 => 116,  328 => 115,  326 => 114,  322 => 113,  318 => 111,  313 => 108,  297 => 103,  293 => 102,  286 => 101,  280 => 100,  278 => 99,  273 => 97,  270 => 96,  267 => 95,  264 => 94,  261 => 93,  258 => 92,  255 => 91,  253 => 90,  246 => 89,  237 => 85,  232 => 83,  229 => 82,  227 => 81,  223 => 79,  221 => 78,  212 => 77,  206 => 74,  202 => 73,  199 => 72,  196 => 71,  190 => 68,  181 => 67,  178 => 66,  176 => 65,  173 => 64,  167 => 62,  161 => 60,  159 => 59,  156 => 58,  154 => 57,  148 => 53,  142 => 50,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  123 => 44,  117 => 42,  114 => 41,  112 => 40,  108 => 38,  100 => 34,  98 => 33,  91 => 31,  87 => 30,  84 => 29,  80 => 27,  78 => 26,  75 => 25,  73 => 24,  68 => 21,  65 => 20,  58 => 17,  55 => 16,  50 => 14,  45 => 12,  41 => 1,  39 => 11,  37 => 8,  34 => 5,  32 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/header/header-for-guest.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/course/header/header-for-guest.html.twig");
    }
}
