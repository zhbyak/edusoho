<?php

/* courseset-manage/create.html.twig */
class __TwigTemplate_75f806ba8e8b57648827b8f7c1c5cc2d846066da4fb4c397ac24e0610dc5e27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "courseset-manage/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/courseset/create/index.js"));
        // line 7
        $context["liveAccount"] = $this->env->getExtension('AppBundle\Twig\LiveExtension')->getLiveAccount();
        // line 8
        if (((($context["defaultType"] ?? null) == "live") && (($this->getAttribute(($context["liveAccount"] ?? null), "error", array(), "any", true, true) ||  !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("live-course.live_course_enabled")) || $this->getAttribute(($context["liveAccount"] ?? null), "isExpired", array())))) {
            // line 9
            $context["defaultType"] = "normal";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"row\">
    <div class=\"panel panel-default panel-page panel-create-course\">
      <div class=\"panel-heading\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.create_btn"), "html", null, true);
        echo "</h2>
      </div>
      ";
        // line 18
        if ((( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "title", array())) ||  !$this->getAttribute(($context["userProfile"] ?? null), "about", array()))) {
            // line 19
            echo "        ";
            $this->loadTemplate("settings/user-profile.html.twig", "courseset-manage/create.html.twig", 19)->display($context);
            // line 20
            echo "      ";
        } else {
            // line 21
            echo "        <form id=\"courseset-create-form\" class=\"form-horizontal\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_manage_create");
            echo "\"
              method=\"post\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
            echo "
          <div class=\"course-piece\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type"), "html", null, true);
            echo "</div>
          <div class=\"form-group cd-row mb0\">
            ";
            // line 26
            $context["typeCount"] = twig_length_filter($this->env, ($context["courseTypes"] ?? null));
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseTypes"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                // line 28
                echo "              <div class=\"";
                if ((($context["typeCount"] ?? null) <= 4)) {
                    echo "col-md-3 ";
                } else {
                    echo "col-md-2 course-five-types ";
                }
                echo "\">
                ";
                // line 29
                $this->loadTemplate($this->getAttribute($context["type"], "template", array()), "courseset-manage/create.html.twig", 29)->display(array_merge($context, array("type" => $context["key"], "defaultType" => ($context["defaultType"] ?? null))));
                // line 30
                echo "              </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          </div>
          
            ";
            // line 34
            $this->loadTemplate("org/course-create-org-tree-select.html.twig", "courseset-manage/create.html.twig", 34)->display($context);
            // line 35
            echo "            <div class=\"course-title form-group\">
              <div class=\"mlm pull-left controls-label text-lg\">
                <div class=\"course-piece title\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.course_title"), "html", null, true);
            echo "</div>
              </div>
              <div class=\"col-md-10 controls course-title-input\">
                <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                       data-widget-cid=\"widget-1\" data-explain=\"\">
              </div>
            </div>
            <div class=\"text-center\">
              ";
            // line 45
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
                // line 46
                echo "                <span class=\"mrm\">
              <a href=\"http://www.qiqiuyu.com/course/22\" class=\"color-gray\" target=\"_blank\">";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my.teaching.course_set.select_type.how_do_create"), "html", null, true);
                echo "</a>
            </span>
              ";
            }
            // line 50
            echo "              <button id=\"courseset-create-btn\" data-loading-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create.submiting"), "html", null, true);
            echo "\"
                     class=\"cd-btn cd-btn-primary\" type=\"submit\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.create"), "html", null, true);
            echo "</button>
              <a class=\"btn btn-fat btn-link link-gray course-cancel-btn\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "Referer"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
            echo "</a>
            </div>
            <input type=\"hidden\" name=\"type\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["defaultType"] ?? null), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\"></div>
        </div>
      </form>
      ";
        }
        // line 59
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "courseset-manage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 59,  181 => 55,  177 => 54,  170 => 52,  166 => 51,  161 => 50,  155 => 47,  152 => 46,  150 => 45,  139 => 37,  135 => 35,  133 => 34,  129 => 32,  114 => 30,  112 => 29,  103 => 28,  85 => 27,  83 => 26,  78 => 24,  74 => 23,  68 => 21,  65 => 20,  62 => 19,  60 => 18,  55 => 16,  50 => 13,  47 => 12,  39 => 3,  35 => 1,  32 => 9,  30 => 8,  28 => 7,  26 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseset-manage/create.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/courseset-manage/create.html.twig");
    }
}
