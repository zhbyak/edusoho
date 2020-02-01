<?php

/* layout.html.twig */
class __TwigTemplate_fb595f87f502f1b5bc593543a162e21028c3e05a03dcb5fbf1c0aae4d8f8b937 extends Twig_Template
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
        $__internal_d43538f318c7be8fb36b761eff7154ff6f02e722896e9e0c3a34651ff803c5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43538f318c7be8fb36b761eff7154ff6f02e722896e9e0c3a34651ff803c5d3->enter($__internal_d43538f318c7be8fb36b761eff7154ff6f02e722896e9e0c3a34651ff803c5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method");
        // line 13
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 14
        echo "
";
        // line 15
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 16
        $context["themeConfig"] = (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "themeEditing"), "method"), false)) : (false))) ? ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 17
        $context["maincolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "maincolor", array()), "default")) : ("default"));
        // line 18
        $context["navigationcolor"] = (($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["themeConfig"] ?? null), "navigationcolor", array()), "default")) : ("default"));
        // line 19
        echo "
<html lang=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["lang"] ?? $this->getContext($context, "lang")), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? $this->getContext($context, "lang")) == "en")) {
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
        if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile") && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false))) && twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifiedMobile", array())))) {
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
        
        $__internal_d43538f318c7be8fb36b761eff7154ff6f02e722896e9e0c3a34651ff803c5d3->leave($__internal_d43538f318c7be8fb36b761eff7154ff6f02e722896e9e0c3a34651ff803c5d3_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5379663ace50ac6dd11636cbaed44fcb1b7e5ff581a0a1c98e96d8f030b4922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5379663ace50ac6dd11636cbaed44fcb1b7e5ff581a0a1c98e96d8f030b4922->enter($__internal_b5379663ace50ac6dd11636cbaed44fcb1b7e5ff581a0a1c98e96d8f030b4922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_b5379663ace50ac6dd11636cbaed44fcb1b7e5ff581a0a1c98e96d8f030b4922->leave($__internal_b5379663ace50ac6dd11636cbaed44fcb1b7e5ff581a0a1c98e96d8f030b4922_prof);

    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        $__internal_545e4255a425f97dc4a2aa07e00121e23cb78888be41bc572512fcf2da6d6649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545e4255a425f97dc4a2aa07e00121e23cb78888be41bc572512fcf2da6d6649->enter($__internal_545e4255a425f97dc4a2aa07e00121e23cb78888be41bc572512fcf2da6d6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

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
        
        $__internal_545e4255a425f97dc4a2aa07e00121e23cb78888be41bc572512fcf2da6d6649->leave($__internal_545e4255a425f97dc4a2aa07e00121e23cb78888be41bc572512fcf2da6d6649_prof);

    }

    // line 35
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_fa8007c0db0ca35457f3c520673b86d2df9aab198ef24bc29c028dfa070374ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8007c0db0ca35457f3c520673b86d2df9aab198ef24bc29c028dfa070374ea->enter($__internal_fa8007c0db0ca35457f3c520673b86d2df9aab198ef24bc29c028dfa070374ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_fa8007c0db0ca35457f3c520673b86d2df9aab198ef24bc29c028dfa070374ea->leave($__internal_fa8007c0db0ca35457f3c520673b86d2df9aab198ef24bc29c028dfa070374ea_prof);

    }

    // line 37
    public function block_description($context, array $blocks = array())
    {
        $__internal_49ddc069e8d1abf3bd8f916c759020268789eeb465c13c430900931cd0d13a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ddc069e8d1abf3bd8f916c759020268789eeb465c13c430900931cd0d13a47->enter($__internal_49ddc069e8d1abf3bd8f916c759020268789eeb465c13c430900931cd0d13a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_49ddc069e8d1abf3bd8f916c759020268789eeb465c13c430900931cd0d13a47->leave($__internal_49ddc069e8d1abf3bd8f916c759020268789eeb465c13c430900931cd0d13a47_prof);

    }

    // line 39
    public function block_format_detection($context, array $blocks = array())
    {
        $__internal_f8038d4137ab4d3d343f8988b8b912e853f75055ec603e0b2d41b5fc9677ed5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8038d4137ab4d3d343f8988b8b912e853f75055ec603e0b2d41b5fc9677ed5e->enter($__internal_f8038d4137ab4d3d343f8988b8b912e853f75055ec603e0b2d41b5fc9677ed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "format_detection"));

        
        $__internal_f8038d4137ab4d3d343f8988b8b912e853f75055ec603e0b2d41b5fc9677ed5e->leave($__internal_f8038d4137ab4d3d343f8988b8b912e853f75055ec603e0b2d41b5fc9677ed5e_prof);

    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d1e798843e2a6d780c8dfde85c890e9640cba2058b012abaa4cda0662006a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1e798843e2a6d780c8dfde85c890e9640cba2058b012abaa4cda0662006a7b->enter($__internal_4d1e798843e2a6d780c8dfde85c890e9640cba2058b012abaa4cda0662006a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        echo "    ";
        $this->loadTemplate("css_loader.html.twig", "layout.html.twig", 59)->display($context);
        // line 60
        echo "    ";
        $this->loadTemplate("default/stylesheet-webpack.html.twig", "layout.html.twig", 60)->display($context);
        // line 61
        echo "  ";
        
        $__internal_4d1e798843e2a6d780c8dfde85c890e9640cba2058b012abaa4cda0662006a7b->leave($__internal_4d1e798843e2a6d780c8dfde85c890e9640cba2058b012abaa4cda0662006a7b_prof);

    }

    // line 63
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_00eee06c7619c13efa92f44cbe4628a738c6ad03fe1837ab84f36a4b57975b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00eee06c7619c13efa92f44cbe4628a738c6ad03fe1837ab84f36a4b57975b49->enter($__internal_00eee06c7619c13efa92f44cbe4628a738c6ad03fe1837ab84f36a4b57975b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_00eee06c7619c13efa92f44cbe4628a738c6ad03fe1837ab84f36a4b57975b49->leave($__internal_00eee06c7619c13efa92f44cbe4628a738c6ad03fe1837ab84f36a4b57975b49_prof);

    }

    // line 65
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_48f78b1fa30179b928b2fa9ee1555ad2fadee04f5780a7499a81c42eddefc4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f78b1fa30179b928b2fa9ee1555ad2fadee04f5780a7499a81c42eddefc4c2->enter($__internal_48f78b1fa30179b928b2fa9ee1555ad2fadee04f5780a7499a81c42eddefc4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo twig_escape_filter($this->env, ("es-main-" . ($context["maincolor"] ?? $this->getContext($context, "maincolor"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ("es-nav-" . ($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))), "html", null, true);
        echo " ";
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "html", null, true);
        }
        
        $__internal_48f78b1fa30179b928b2fa9ee1555ad2fadee04f5780a7499a81c42eddefc4c2->leave($__internal_48f78b1fa30179b928b2fa9ee1555ad2fadee04f5780a7499a81c42eddefc4c2_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bc0cb349e2af43e09fca0ea0b4eaea723d89ff3c0df6df1875676f3c50197db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc0cb349e2af43e09fca0ea0b4eaea723d89ff3c0df6df1875676f3c50197db->enter($__internal_1bc0cb349e2af43e09fca0ea0b4eaea723d89ff3c0df6df1875676f3c50197db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if (($context["reward_notify"] ?? $this->getContext($context, "reward_notify"))) {
            // line 133
            echo "    <div class=\"hidden\" id=\"rewardPointNotify\">
      ";
            // line 134
            echo twig_escape_filter($this->env, ($context["reward_notify"] ?? $this->getContext($context, "reward_notify")), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 137
        echo "
";
        
        $__internal_1bc0cb349e2af43e09fca0ea0b4eaea723d89ff3c0df6df1875676f3c50197db->leave($__internal_1bc0cb349e2af43e09fca0ea0b4eaea723d89ff3c0df6df1875676f3c50197db_prof);

    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        $__internal_84bcfbf9038a34a9752c937ce99cc82399784d89dfdf9a73bb4025a06d8ceda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bcfbf9038a34a9752c937ce99cc82399784d89dfdf9a73bb4025a06d8ceda4->enter($__internal_84bcfbf9038a34a9752c937ce99cc82399784d89dfdf9a73bb4025a06d8ceda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_84bcfbf9038a34a9752c937ce99cc82399784d89dfdf9a73bb4025a06d8ceda4->leave($__internal_84bcfbf9038a34a9752c937ce99cc82399784d89dfdf9a73bb4025a06d8ceda4_prof);

    }

    // line 79
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_4ed720d01fb9677334a4878a08b831ceef71a9d9dd54500e147dc561262f89f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed720d01fb9677334a4878a08b831ceef71a9d9dd54500e147dc561262f89f7->enter($__internal_4ed720d01fb9677334a4878a08b831ceef71a9d9dd54500e147dc561262f89f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

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
        
        $__internal_4ed720d01fb9677334a4878a08b831ceef71a9d9dd54500e147dc561262f89f7->leave($__internal_4ed720d01fb9677334a4878a08b831ceef71a9d9dd54500e147dc561262f89f7_prof);

    }

    // line 80
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_13d0e1ff2b7d57764da2a1c9745e70e1e4bc9fcfb38ac45fa0033da8b0c43176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d0e1ff2b7d57764da2a1c9745e70e1e4bc9fcfb38ac45fa0033da8b0c43176->enter($__internal_13d0e1ff2b7d57764da2a1c9745e70e1e4bc9fcfb38ac45fa0033da8b0c43176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_13d0e1ff2b7d57764da2a1c9745e70e1e4bc9fcfb38ac45fa0033da8b0c43176->leave($__internal_13d0e1ff2b7d57764da2a1c9745e70e1e4bc9fcfb38ac45fa0033da8b0c43176_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_9433d5584390f9ab31af863b74a13c6e354baab33cc1cdb5d51dbfb231bc54f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9433d5584390f9ab31af863b74a13c6e354baab33cc1cdb5d51dbfb231bc54f2->enter($__internal_9433d5584390f9ab31af863b74a13c6e354baab33cc1cdb5d51dbfb231bc54f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9433d5584390f9ab31af863b74a13c6e354baab33cc1cdb5d51dbfb231bc54f2->leave($__internal_9433d5584390f9ab31af863b74a13c6e354baab33cc1cdb5d51dbfb231bc54f2_prof);

    }

    // line 86
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_dfc808a6d2e6d4e113a51ab894e70a41c41a742c5155e6a311d22e3954749653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc808a6d2e6d4e113a51ab894e70a41c41a742c5155e6a311d22e3954749653->enter($__internal_dfc808a6d2e6d4e113a51ab894e70a41c41a742c5155e6a311d22e3954749653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_dfc808a6d2e6d4e113a51ab894e70a41c41a742c5155e6a311d22e3954749653->leave($__internal_dfc808a6d2e6d4e113a51ab894e70a41c41a742c5155e6a311d22e3954749653_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        $__internal_75565705d026b96c69823fb96cd4271f6308ee3383f71524b81d7213dbe2ffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75565705d026b96c69823fb96cd4271f6308ee3383f71524b81d7213dbe2ffd8->enter($__internal_75565705d026b96c69823fb96cd4271f6308ee3383f71524b81d7213dbe2ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 90
        echo "      ";
        $this->loadTemplate("default/footer.html.twig", "layout.html.twig", 90)->display($context);
        // line 91
        echo "    ";
        
        $__internal_75565705d026b96c69823fb96cd4271f6308ee3383f71524b81d7213dbe2ffd8->leave($__internal_75565705d026b96c69823fb96cd4271f6308ee3383f71524b81d7213dbe2ffd8_prof);

    }

    // line 93
    public function block_footer_mobile($context, array $blocks = array())
    {
        $__internal_4196ace8e3334f95336585ea7c734ce8d432ca40c7346fc37f8b6201d19c75ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4196ace8e3334f95336585ea7c734ce8d432ca40c7346fc37f8b6201d19c75ff->enter($__internal_4196ace8e3334f95336585ea7c734ce8d432ca40c7346fc37f8b6201d19c75ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_mobile"));

        // line 94
        echo "    ";
        
        $__internal_4196ace8e3334f95336585ea7c734ce8d432ca40c7346fc37f8b6201d19c75ff->leave($__internal_4196ace8e3334f95336585ea7c734ce8d432ca40c7346fc37f8b6201d19c75ff_prof);

    }

    // line 96
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_2a50a9a6433159578e60802c8cefdba6e96bf8afa4ff22be9c9b40cba8e427f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a50a9a6433159578e60802c8cefdba6e96bf8afa4ff22be9c9b40cba8e427f6->enter($__internal_2a50a9a6433159578e60802c8cefdba6e96bf8afa4ff22be9c9b40cba8e427f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_2a50a9a6433159578e60802c8cefdba6e96bf8afa4ff22be9c9b40cba8e427f6->leave($__internal_2a50a9a6433159578e60802c8cefdba6e96bf8afa4ff22be9c9b40cba8e427f6_prof);

    }

    // line 99
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_62ad193a77dcd976b42d4f5802f97ac2bb7238a64637982605b71668ca334644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ad193a77dcd976b42d4f5802f97ac2bb7238a64637982605b71668ca334644->enter($__internal_62ad193a77dcd976b42d4f5802f97ac2bb7238a64637982605b71668ca334644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

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
        
        $__internal_62ad193a77dcd976b42d4f5802f97ac2bb7238a64637982605b71668ca334644->leave($__internal_62ad193a77dcd976b42d4f5802f97ac2bb7238a64637982605b71668ca334644_prof);

    }

    // line 105
    public function block_wechatInform($context, array $blocks = array())
    {
        $__internal_c7940a5e4f557f38fab0db2ce73aa2737890359be72235c83c0cfbc1178b5c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7940a5e4f557f38fab0db2ce73aa2737890359be72235c83c0cfbc1178b5c36->enter($__internal_c7940a5e4f557f38fab0db2ce73aa2737890359be72235c83c0cfbc1178b5c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wechatInform"));

        // line 106
        echo "    ";
        if ((((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")))) : ("")) == "/")) {
            // line 107
            echo "      ";
            if (((($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() == false) || ($this->env->getExtension('AppBundle\Twig\WebExtension')->isMobileClient() && preg_match("/MicroMessenger/", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "User-Agent"), "method")))) && (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "isLogin", array(), "method"), false)) : (false)))) {
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
        
        $__internal_c7940a5e4f557f38fab0db2ce73aa2737890359be72235c83c0cfbc1178b5c36->leave($__internal_c7940a5e4f557f38fab0db2ce73aa2737890359be72235c83c0cfbc1178b5c36_prof);

    }

    // line 113
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_a4aa9e7bac25e22cc9631324a74ab95a6dfd92a67956aec7e3fe9d4d27773c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aa9e7bac25e22cc9631324a74ab95a6dfd92a67956aec7e3fe9d4d27773c8e->enter($__internal_a4aa9e7bac25e22cc9631324a74ab95a6dfd92a67956aec7e3fe9d4d27773c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 114
        echo "  
    ";
        // line 115
        $context["cloudConsultPath"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getCloudConsultPath();
        // line 116
        echo "    ";
        if (((array_key_exists("cloudConsultPath", $context)) ? (_twig_default_filter(($context["cloudConsultPath"] ?? $this->getContext($context, "cloudConsultPath")))) : (""))) {
            // line 117
            echo "      ";
            echo ($context["cloudConsultPath"] ?? $this->getContext($context, "cloudConsultPath"));
            echo "
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter(($context["consultDisplay"] ?? $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
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
        
        $__internal_a4aa9e7bac25e22cc9631324a74ab95a6dfd92a67956aec7e3fe9d4d27773c8e->leave($__internal_a4aa9e7bac25e22cc9631324a74ab95a6dfd92a67956aec7e3fe9d4d27773c8e_prof);

    }

    // line 140
    public function block_footer_script($context, array $blocks = array())
    {
        $__internal_1b404f147038b2785678fcdfe9ad4d647f9d379223aad37aec820f95430e19a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b404f147038b2785678fcdfe9ad4d647f9d379223aad37aec820f95430e19a0->enter($__internal_1b404f147038b2785678fcdfe9ad4d647f9d379223aad37aec820f95430e19a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        // line 141
        echo "  ";
        $this->loadTemplate("default/script-webpack.html.twig", "layout.html.twig", 141)->display($context);
        // line 142
        echo "  ";
        $this->loadTemplate("script_boot.html.twig", "layout.html.twig", 142)->display($context);
        
        $__internal_1b404f147038b2785678fcdfe9ad4d647f9d379223aad37aec820f95430e19a0->leave($__internal_1b404f147038b2785678fcdfe9ad4d647f9d379223aad37aec820f95430e19a0_prof);

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
        return array (  644 => 142,  641 => 141,  635 => 140,  628 => 125,  625 => 124,  622 => 123,  619 => 122,  616 => 121,  614 => 120,  611 => 119,  605 => 117,  602 => 116,  600 => 115,  597 => 114,  591 => 113,  584 => 111,  581 => 110,  578 => 109,  575 => 108,  572 => 107,  569 => 106,  563 => 105,  556 => 103,  553 => 102,  550 => 101,  547 => 100,  541 => 99,  530 => 96,  523 => 94,  517 => 93,  510 => 91,  507 => 90,  501 => 89,  490 => 86,  479 => 83,  468 => 80,  461 => 87,  459 => 86,  455 => 84,  453 => 83,  449 => 81,  446 => 80,  440 => 79,  433 => 77,  430 => 76,  427 => 75,  424 => 74,  418 => 73,  410 => 137,  404 => 134,  401 => 133,  398 => 132,  396 => 131,  389 => 127,  386 => 126,  384 => 113,  381 => 112,  379 => 105,  376 => 104,  374 => 99,  370 => 97,  368 => 96,  365 => 95,  363 => 93,  360 => 92,  358 => 89,  355 => 88,  353 => 79,  350 => 78,  348 => 73,  345 => 72,  339 => 71,  321 => 65,  310 => 63,  303 => 61,  300 => 60,  297 => 59,  291 => 58,  280 => 39,  268 => 37,  256 => 35,  247 => 42,  243 => 41,  239 => 40,  233 => 39,  226 => 37,  219 => 35,  215 => 33,  209 => 32,  195 => 29,  189 => 28,  180 => 150,  176 => 148,  174 => 147,  171 => 146,  169 => 145,  166 => 144,  164 => 140,  161 => 139,  159 => 71,  155 => 69,  153 => 68,  149 => 67,  144 => 65,  141 => 64,  139 => 63,  136 => 62,  134 => 58,  128 => 55,  124 => 54,  120 => 53,  116 => 51,  111 => 49,  106 => 48,  104 => 47,  100 => 46,  96 => 44,  94 => 32,  91 => 31,  89 => 28,  75 => 20,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  57 => 12,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>
<html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>
<html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->

{% set lang = app.request.getLocale() %}
{% set mobile = is_show_mobile_page() %}

{% set currentTheme = current_theme() %}
{% set themeConfig = app.request.get('themeEditing')|default(false) ? currentTheme.config  : currentTheme.confirmConfig %}
{% set maincolor = themeConfig.maincolor|default('default') %}
{% set navigationcolor = themeConfig.navigationcolor|default('default') %}

<html lang=\"{{ lang }}\" class=\"{% if lang == 'en' %}es-en{% endif %}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\"
    content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  {% block meta %}
    <meta name=\"keywords\"
          content=\"
{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"description\"
          content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\"/>
    <meta name=\"format-detection\"
          content=\"{% spaceless %}{% block format_detection %}{% endblock %}{% endspaceless %}\"/>
    <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\"/>
    <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\"/>
    <meta content=\"{{ wechat_login_bind_enabled()|default(0) }}\" name=\"wechat_login_bind\"/>
  {% endblock %}


  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  <!--[if lt IE 9]>
  <script src=\"{{ asset('static-dist/libs/html5shiv.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-shim.js') }}\"></script>
  <script src=\"{{ asset('static-dist/es5-shim/es5-sham.js') }}\"></script>
  <![endif]-->

  {% block stylesheets %}
    {% include 'css_loader.html.twig' %}
    {% include 'default/stylesheet-webpack.html.twig' %}
  {% endblock %}

  {% block head_scripts %}{% endblock %}
</head>
<body class=\"{% block bodyClass %}{{ 'es-main-' ~ maincolor }} {{ 'es-nav-' ~ navigationcolor }} {% if bodyClass|default('') %}{{ bodyClass }}{% endif %}{% endblock %}\">
<!--[if lt IE 9]>
<script src=\"{{ asset('static-dist/libs/fix-ie.js') }}\"></script>
{% include 'default/ie8-alert.html.twig' %}
<![endif]-->

{% block body %}
  <div class=\"es-wrap\">
    {% block header %}
      {% include 'site-hint.html.twig' %}
      {% include 'default/header.html.twig' %}
      {% include 'default/exception.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}

    {% block footer %}
      {% include 'default/footer.html.twig' %}
    {% endblock %}

    {% block footer_mobile %}
    {% endblock %}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) and app.user.isLogin()|default(false) %}
      {% include 'es-bar/index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block wechatInform %}
    {% if (siteNav|default() == '/') %}
      {% if (is_mobile_client() == false or (is_mobile_client() and (app.request.headers.get('User-Agent') matches '/MicroMessenger/'))) and app.user.isLogin()|default(false) %}
        {% include 'wechat-inform.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}
  
    {% set cloudConsultPath = cloudConsultPath() %}
    {% if cloudConsultPath|default() %}
      {{ cloudConsultPath | raw }}
    {% endif %}

    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>

  {% set reward_notify = pop_reward_point_notify() %}
  {% if reward_notify %}
    <div class=\"hidden\" id=\"rewardPointNotify\">
      {{ reward_notify }}
    </div>
  {% endif %}

{% endblock %}

{% block footer_script %}
  {% include 'default/script-webpack.html.twig' %}
  {% include 'script_boot.html.twig' %}
{% endblock %}

{% if setting('auth.register_mode') == 'mobile' and app.user.isLogin()|default(false) and app.user.verifiedMobile is empty  %}
  <div id=\"mobile-bind-modal\" class=\"modal\" >
    {% include 'mobile-bind-modal.html.twig' %}
  </div>
{% endif %}

</body>
</html>", "layout.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/layout.html.twig");
    }
}
