<?php

/* course/order/buy-modal.html.twig */
class __TwigTemplate_fdbfd39365b1e27f4cfe6f895243edae70d4adcdba6ec97955761dddb1e96bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "course/order/buy-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/course/buy-modal/index.js"));
        // line 4
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip")) {
            // line 5
            $context["vipStatus"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("VipStatus", array("userId" => $this->getAttribute(($context["user"] ?? null), "id", array()), "levelId" => $this->getAttribute(($context["course"] ?? null), "vipLevelId", array())));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        if ($this->getAttribute(($context["course"] ?? null), "isFree", array())) {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.join"), "html", null, true);
            echo "
  ";
        } else {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.buy"), "html", null, true);
            echo "
  ";
        }
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\"
  action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_info_fill", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\"
  >
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("courseId", $context)) ? (_twig_default_filter(($context["courseId"] ?? null), 0)) : (0)), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.name"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 form-control-static \">
      \t<span class=\"form-control-static color-gray\">《";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSet"] ?? null), "title", array()), "html", null, true);
        echo "》 ";
        if ( !twig_test_empty($this->getAttribute(($context["course"] ?? null), "title", array()))) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "title", array()), "html", null, true);
            echo " ";
        }
        echo "</span>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price"), "html", null, true);
        echo "</div>
      <div class=\"col-sm-9 form-control-static color-warning\">
        <span>
          ";
        // line 33
        if (($this->getAttribute(($context["course"] ?? null), "isFree", array()) || ((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0)))) {
            // line 34
            echo "            <strong class=\"money\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.price.free"), "html", null, true);
            echo "</strong>
          ";
        } else {
            // line 36
            echo "            ";
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                // line 37
                echo "              <strong class=\"money\">";
                echo twig_escape_filter($this->env, ($this->getAttribute(($context["course"] ?? null), "price", array()) * $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                echo "</strong>
              <span class=\"color-gray\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 40
                echo "              <strong class=\"money\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? null), "price", array()), "html", null, true);
                echo "</strong>
              <span class=\"color-gray\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.currency.CNY"), "html", null, true);
                echo "</span>
            ";
            }
            // line 43
            echo "          ";
        }
        // line 44
        echo "      \t</span>
      </div>
    </div>
    <input type=\"hidden\" name=\"targetUrl\" value=
      ";
        // line 48
        if (((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0))) {
            // line 49
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip_course_join", array("courseId" => $this->getAttribute(($context["course"] ?? null), "id", array()))), "html", null, true);
            echo "
      ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("targetId" => $this->getAttribute(($context["course"] ?? null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "
      ";
        }
        // line 53
        echo "    />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 56
        $context["isBuyFillUserinfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.buy_fill_userinfo"), false);
        // line 57
        echo "    ";
        $context["userinfoFieldsSetting"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.userinfoFields"), array());
        // line 58
        echo "    ";
        $this->loadTemplate("user/fill-userinfo-fields-block.html.twig", "course/order/buy-modal.html.twig", 58)->display(array_merge($context, array("isBuyFillUserinfo" => ($context["isBuyFillUserinfo"] ?? null), "userinfoFieldsSetting" => ($context["userinfoFieldsSetting"] ?? null), "userFields" => ($context["userFields"] ?? null), "user" => ($context["user"] ?? null), "showNavTip" => 1)));
        // line 59
        echo "
  </form>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "  <button id=\"form-submit-btn\" class=\"btn btn-primary\" type=\"button\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.pay_tips"), "html", null, true);
        echo "\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">
    ";
        // line 65
        if (($this->getAttribute(($context["course"] ?? null), "isFree", array()) || ((array_key_exists("vipStatus", $context)) ? (_twig_default_filter(($context["vipStatus"] ?? null), 0)) : (0)))) {
            // line 66
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.free_join"), "html", null, true);
            echo "
    ";
        } else {
            // line 68
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.btn.pay"), "html", null, true);
            echo "
    ";
        }
        // line 70
        echo "  </button>
";
    }

    public function getTemplateName()
    {
        return "course/order/buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 70,  192 => 68,  186 => 66,  184 => 65,  179 => 64,  176 => 63,  170 => 59,  167 => 58,  164 => 57,  162 => 56,  157 => 54,  154 => 53,  148 => 51,  142 => 49,  140 => 48,  134 => 44,  131 => 43,  126 => 41,  121 => 40,  116 => 38,  111 => 37,  108 => 36,  102 => 34,  100 => 33,  94 => 30,  80 => 25,  75 => 23,  69 => 20,  64 => 18,  61 => 17,  58 => 16,  50 => 12,  44 => 10,  41 => 9,  38 => 8,  34 => 1,  31 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course/order/buy-modal.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/course/order/buy-modal.html.twig");
    }
}
