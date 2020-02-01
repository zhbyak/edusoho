<?php

/* layout.html.twig */
class __TwigTemplate_841cf4e7d90050b6918b340bd1f00a13962f236474f2b057d471b7012f0aad29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'format_detection' => array($this, 'block_format_detection'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'wechatInform' => array($this, 'block_wechatInform'),
            'floatConsult' => array($this, 'block_floatConsult'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

";
        // line 12
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? null), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? null), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? null) == "en")) {
            echo "es-en";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "</title>
  ";
        // line 32
        $this->displayBlock('meta', $context, $blocks);
        // line 44
        echo "

  ";
        // line 46
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 47
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 48
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 51
        echo "
  <!--[if lt IE 9]>
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-shim.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/es5-shim/es5-sham.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 58
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "
  ";
        // line 63
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 64
        echo "</head>
<body class=\"";
        // line 65
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
<!--[if lt IE 9]>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/fix-ie.js"), "html", null, true);
        echo "\"></script>
";
        // line 68
        $this->loadTemplate("default/ie8-alert.html.twig", "layout.html.twig", 68)->display($context);
        // line 69
        echo "<![endif]-->

";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('footer_script', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile") && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false))) && twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "verifiedMobile", array())))) {
            // line 146
            echo "  <div id=\"mobile-bind-modal\" class=\"modal\" >
    ";
            // line 147
            $this->loadTemplate("mobile-bind-modal.html.twig", "layout.html.twig", 147)->display($context);
            // line 148
            echo "  </div>
";
        }
        // line 150
        echo "
</body>
</html>";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        // line 33
        echo "    <meta name=\"keywords\"
          content=\"
";
        // line 35
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"description\"
          content=\"";
        // line 37
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta name=\"format-detection\"
          content=\"";
        // line 39
        ob_start();
        $this->displayBlock('format_detection', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"/>
    <meta content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\"/>
    <meta content=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\"/>
    <meta content=\"";
        // line 42
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->isWechatLoginBind(), 0), "html", null, true);
        echo "\" name=\"wechat_login_bind\"/>
  ";
    }

    // line 35
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 37
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 39
    public function block_format_detection($context, array $blocks = array())
    {
    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "  ";
    }

    // line 63
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 65
    public function block_bodyClass($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? null)), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? null), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? null), "html", null, true);
        }
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "  <div class=\"es-wrap\">
    ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        $this->displayBlock('full_content', $context, $blocks);
        // line 88
        echo "
    ";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "
    ";
        // line 93
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('bottom', $context, $blocks);
        // line 97
        echo "  </div>

  ";
        // line 99
        $this->displayBlock('esBar', $context, $blocks);
        // line 104
        echo "
  ";
        // line 105
        $this->displayBlock('wechatInform', $context, $blocks);
        // line 112
        echo "
  ";
        // line 113
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 126
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  ";
        // line 131
        $context["reward_notify"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->popRewardPointNotify();
        // line 132
        echo "  ";
        if (($context["reward_notify"] ?? null)) {
            // line 133
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 134
            echo twig_escape_filter($this->env, ($context["reward_notify"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 137
        echo "
";
    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        // line 74
        echo "      ";
        $this->loadTemplate("site-hint.html.twig", "layout.html.twig", 74)->display($context);
        // line 75
        echo "      ";
        $this->loadTemplate("default/header.html.twig", "layout.html.twig", 75)->display($context);
        // line 76
        echo "      ";
        $this->loadTemplate("default/exception.html.twig", "layout.html.twig", 76)->display($context);
        // line 77
        echo "    ";
    }

    // line 79
    public function block_full_content($context, array $blocks = array())
    {
        // line 80
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 81
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "      </div>

      ";
        // line 86
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 87
        echo "    ";
    }

    // line 80
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 86
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        // line 90
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 90)->display($context);
        // line 91
        echo "    ";
    }

    // line 93
    public function block_footer_mobile($context, array $blocks = array())
    {
        // line 94
        echo "    ";
    }

    // line 96
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 99
    public function block_esBar($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false)))) {
            // line 101
            echo "      ";
            $this->loadTemplate("es-bar/index.html.twig", "layout.html.twig", 101)->display($context);
            // line 102
            echo "    ";
        }
        // line 103
        echo "  ";
    }

    // line 105
    public function block_wechatInform($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        if ((((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null))) : ("")) == "/")) {
            // line 107
            echo "      ";
            if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() == false) || ($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() && preg_match("/MicroMessenger/", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "headers", array()), "get", array(0 => "User-Agent"), "method")))) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false)))) {
                // line 108
                echo "        ";
                $this->loadTemplate("wechat-inform.html.twig", "layout.html.twig", 108)->display($context);
                // line 109
                echo "      ";
            }
            // line 110
            echo "    ";
        }
        // line 111
        echo "  ";
    }

    // line 113
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 114
        echo "  
    ";
        // line 115
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 116
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter(($context["cloudConsultPath"] ?? null))) : (""))) {
            // line 117
            echo "      ";
            echo ($context["cloudConsultPath"] ?? null);
            echo "
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? null))) : ("")) == "/")))) {
            // line 121
            echo "      ";
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 122
                echo "        ";
                $this->loadTemplate("float-consult.html.twig", "layout.html.twig", 122)->display($context);
                // line 123
                echo "      ";
            }
            // line 124
            echo "    ";
        }
        // line 125
        echo "  ";
    }

    // line 140
    public function block_footer_script($context, array $blocks = array())
    {
        // line 141
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 141)->display($context);
        // line 142
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 142)->display($context);
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 142,  512 => 141,  509 => 140,  505 => 125,  502 => 124,  499 => 123,  496 => 122,  493 => 121,  491 => 120,  488 => 119,  482 => 117,  479 => 116,  477 => 115,  474 => 114,  471 => 113,  467 => 111,  464 => 110,  461 => 109,  458 => 108,  455 => 107,  452 => 106,  449 => 105,  445 => 103,  442 => 102,  439 => 101,  436 => 100,  433 => 99,  428 => 96,  424 => 94,  421 => 93,  417 => 91,  414 => 90,  411 => 89,  406 => 86,  401 => 83,  396 => 80,  392 => 87,  390 => 86,  386 => 84,  384 => 83,  380 => 81,  377 => 80,  374 => 79,  370 => 77,  367 => 76,  364 => 75,  361 => 74,  358 => 73,  353 => 137,  347 => 134,  344 => 133,  341 => 132,  339 => 131,  332 => 127,  329 => 126,  327 => 113,  324 => 112,  322 => 105,  319 => 104,  317 => 99,  313 => 97,  311 => 96,  308 => 95,  306 => 93,  303 => 92,  301 => 89,  298 => 88,  296 => 79,  293 => 78,  291 => 73,  288 => 72,  285 => 71,  273 => 65,  268 => 63,  264 => 61,  261 => 60,  258 => 59,  255 => 58,  250 => 39,  244 => 37,  238 => 35,  232 => 42,  228 => 41,  224 => 40,  218 => 39,  211 => 37,  204 => 35,  200 => 33,  197 => 32,  186 => 29,  183 => 28,  177 => 150,  173 => 148,  171 => 147,  168 => 146,  166 => 145,  163 => 144,  161 => 140,  158 => 139,  156 => 71,  152 => 69,  150 => 68,  146 => 67,  141 => 65,  138 => 64,  136 => 63,  133 => 62,  131 => 58,  125 => 55,  121 => 54,  117 => 53,  113 => 51,  108 => 49,  103 => 48,  101 => 47,  97 => 46,  93 => 44,  91 => 32,  88 => 31,  86 => 28,  72 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  54 => 12,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/layout.html.twig");
    }
}
