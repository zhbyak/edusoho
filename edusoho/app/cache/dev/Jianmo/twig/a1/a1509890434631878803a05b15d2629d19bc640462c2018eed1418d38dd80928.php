<?php

/* default/live-course.html.twig */
class __TwigTemplate_b12a2c85031ad1a5117a8e121358f28ee17c0d229bfc7db18aec0fa1447c99b2 extends Twig_Template
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
        $__internal_219ae8f581101a3780d0169c5c71c516ff079260062ada2e1c606345e4e9673d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219ae8f581101a3780d0169c5c71c516ff079260062ada2e1c606345e4e9673d->enter($__internal_219ae8f581101a3780d0169c5c71c516ff079260062ada2e1c606345e4e9673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/live-course.html.twig"));

        // line 1
        $context["RecentLiveCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveCourseSets", array("count" => 4));
        // line 2
        if (($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets"))) {
            // line 3
            echo "  <section class=\"live-course-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"course-list\">
        <div class=\"row\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets")));
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
                // line 12
                echo "            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              ";
                // line 13
                $this->loadTemplate("course/widgets/course-grid.html.twig", "default/live-course.html.twig", 13)->display(array_merge($context, array("courseSet" => $context["courseSet"])));
                // line 14
                echo "              ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", array(), "array"), null)) : (null));
                // line 15
                echo "              ";
                if (((($context["task"] ?? $this->getContext($context, "task")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "endTime", array())))) {
                    // line 16
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.living"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                } else {
                    // line 25
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "startTime", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date_format")), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 34
                echo "
            </div>
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
            // line 37
            echo "
          ";
            // line 38
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, ($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets"))));
            // line 39
            echo "          ";
            if ((($context["emptyCourseNum"] ?? $this->getContext($context, "emptyCourseNum")) > 0)) {
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyCourseNum"] ?? $this->getContext($context, "emptyCourseNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.expect"), "html", null, true);
                    echo "
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
            }
            // line 55
            echo "        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_set_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.more"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
        
        $__internal_219ae8f581101a3780d0169c5c71c516ff079260062ada2e1c606345e4e9673d->leave($__internal_219ae8f581101a3780d0169c5c71c516ff079260062ada2e1c606345e4e9673d_prof);

    }

    public function getTemplateName()
    {
        return "default/live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  158 => 58,  153 => 55,  150 => 54,  135 => 45,  129 => 41,  124 => 40,  121 => 39,  119 => 38,  116 => 37,  100 => 34,  93 => 30,  86 => 25,  79 => 21,  72 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  44 => 11,  37 => 7,  33 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set RecentLiveCourseSets = data('RecentLiveCourseSets',{ 'count':4}) %}
{% if RecentLiveCourseSets %}
  <section class=\"live-course-section {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"course-list\">
        <div class=\"row\">
          {% for courseSet in RecentLiveCourseSets %}
            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              {% include 'course/widgets/course-grid.html.twig' with {courseSet: courseSet} %}
              {% set task = courseSet['task']|default(null) %}
              {% if task and \"now\"|date(\"U\") >= task.startTime and \"now\"|date(\"U\") <= task.endTime %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{'homepage.live_course.living'|trans}}
                  </div>
                </div>
              {% else %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{ task.startTime|date('site.date_format'|trans) }}
                  </div>
                </div>
              {% endif %}

            </div>
          {% endfor %}

          {% set emptyCourseNum = 4 - RecentLiveCourseSets|length %}
          {% if emptyCourseNum > 0 %}
            {% for i in range(1, emptyCourseNum) %}
              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  {{'homepage.live_course.expect'|trans}}
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{  path('live_course_set_explore') }}\" class=\"btn btn-default btn-lg\">
          {{'homepage.live_course.more'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
", "default/live-course.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/live-course.html.twig");
    }
}
