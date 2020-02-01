<?php

/* admin/default/unsolved-questions-block.html.twig */
class __TwigTemplate_b2dee947f0daf3919f7e78f6439cffe1eeb4071bd3fb06cde56b04726ff9a6e1 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/default/unsolved-questions-block.html.twig", 1);
        // line 2
        echo "  \t";
        if (($context["questions"] ?? null)) {
            // line 3
            echo "      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"58%\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.question_th"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.view_count_th"), "html", null, true);
            echo "</th>
            <th width=\"22%\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.tr.operation_th"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 13
                echo "            ";
                if (($this->getAttribute($context["question"], "title", array()) == "")) {
                    // line 14
                    echo "              ";
                    if (($this->getAttribute($context["question"], "questionType", array()) == "video")) {
                        // line 15
                        echo "                ";
                        $context["questionType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.video");
                        // line 16
                        echo "              ";
                    } elseif (($this->getAttribute($context["question"], "questionType", array()) == "image")) {
                        // line 17
                        echo "                ";
                        $context["questionType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.image");
                        // line 18
                        echo "              ";
                    } elseif (($this->getAttribute($context["question"], "questionType", array()) == "audio")) {
                        // line 19
                        echo "                ";
                        $context["questionType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.audio");
                        // line 20
                        echo "              ";
                    } elseif (($this->getAttribute($context["question"], "questionType", array()) == "content")) {
                        // line 21
                        echo "                ";
                        $context["questionType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.content");
                        // line 22
                        echo "              ";
                    }
                    // line 23
                    echo "            ";
                }
                // line 24
                echo "            ";
                $context["course"] = (($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["courses"] ?? null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 25
                echo "  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 28
                echo twig_escape_filter($this->env, (($this->getAttribute($context["question"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "title", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question.title", array("%questionType%" => ((array_key_exists("questionType", $context)) ? (_twig_default_filter(($context["questionType"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.content"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.content"))))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question.title", array("%questionType%" => ((array_key_exists("questionType", $context)) ? (_twig_default_filter(($context["questionType"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.content"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.thread.question_type.content"))))))), "html", null, true);
                echo "
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
              </td>
  \t          <td>
  \t          \t";
                // line 35
                if (($context["course"] ?? null)) {
                    // line 36
                    echo "  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.remind_teacher_btn"), "html", null, true);
                    echo "</button>
  \t\t          ";
                }
                // line 38
                echo "  \t\t        </td>
  \t        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </tbody>
        </table>
    ";
        } else {
            // line 44
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.latest_question.empty"), "html", null, true);
            echo "</div>
    ";
        }
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/default/unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  128 => 44,  123 => 41,  115 => 38,  107 => 36,  105 => 35,  99 => 32,  92 => 28,  88 => 27,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/unsolved-questions-block.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/default/unsolved-questions-block.html.twig");
    }
}
