<?php

/* login/ajax.html.twig */
class __TwigTemplate_9ba4c688981e495e76269b35367da4f9618a008556bc89afed3b98502da906e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap-modal-layout.html.twig", "login/ajax.html.twig", 1);
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
        // line 3
        $context["modal_class"] = "login-modal js-login-modal";
        // line 4
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "libs/jquery-validation.js", 1 => "app/js/auth/login-ajax/index.js"));
        // line 6
        $context["ai_face_enabled"] = ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled"), 0) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.enabled"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.pc_enabled"), 0));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name"), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small js-login-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_type_label"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"text\" id=\"ajax-username\" name=\"_username\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_placeholder"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_label"), "html", null, true);
        echo "</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"password\" id=\"ajax-password\" name=\"_password\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_placeholder"), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"form-group mbl color-gray\">
    <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.remember_me"), "html", null, true);
        echo "
  </div>

  <div class=\"form-group\">
    <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-submit-login-ajax\" data-loading-text=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.login.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.submit_button"), "html", null, true);
        echo "</button>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

  ";
        // line 37
        if (($context["ai_face_enabled"] ?? null)) {
            // line 38
            echo "    ";
            $context["type"] = "modal";
            // line 39
            echo "    ";
            $this->loadTemplate("login/sts-logins-block.htm.twig", "login/ajax.html.twig", 39)->display(array_merge($context, array("type" => ($context["type"] ?? null), "goto" => ($context["_target_path"] ?? null))));
            // line 40
            echo "  ";
        }
        // line 41
        echo "
";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "<div class=\"text-left text-sm\">
  <a class=\"link-primary\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.find_password"), "html", null, true);
        echo "</a>
  <span class=\"color-gray mhs\">|</span>
  <span class=\"color-gray\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.ask_register"), "html", null, true);
        echo "</span>
  <a class=\"link-primary\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ($context["_target_path"] ?? null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.go_register"), "html", null, true);
        echo "</a>
</div>

";
        // line 52
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled") || ($context["ai_face_enabled"] ?? null))) {
            // line 53
            echo "  <div class=\"social-login\">
    <span>
      ";
            // line 55
            if (($context["ai_face_enabled"] ?? null)) {
                // line 56
                echo "        <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
          <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo "\"
            srcset=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo " 1x\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.sts_discovery"), "html", null, true);
                echo "\"/>
        </a>
      ";
            }
            // line 61
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Login:oauth2LoginsBlock", array("targetPath" => ($context["_target_path"] ?? null))));
            echo "
    </span>
    <div class=\"line\"></div>
  </div>
";
        }
        // line 66
        echo "

";
    }

    public function getTemplateName()
    {
        return "login/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 66,  167 => 61,  159 => 58,  155 => 57,  152 => 56,  150 => 55,  146 => 53,  144 => 52,  136 => 49,  132 => 48,  125 => 46,  122 => 45,  119 => 44,  114 => 41,  111 => 40,  108 => 39,  105 => 38,  103 => 37,  97 => 34,  89 => 31,  82 => 27,  74 => 22,  69 => 20,  61 => 15,  56 => 13,  47 => 8,  44 => 7,  37 => 2,  33 => 1,  31 => 6,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/ajax.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/login/ajax.html.twig");
    }
}
