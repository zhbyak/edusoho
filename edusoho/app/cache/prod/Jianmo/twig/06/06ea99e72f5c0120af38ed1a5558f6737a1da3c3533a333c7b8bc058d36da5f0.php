<?php

/* old-script_boot.html.twig */
class __TwigTemplate_e1736764dfba2c6c3a88c650d7a669f55310740198377704c67e3e4f746a184f extends Twig_Template
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
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if ($this->getAttribute(($context["app"] ?? null), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCdn(), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 8
        echo twig_jsonencode_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getJsPaths());
        echo ";

  ";
        // line 10
        $context["crontabNextExecutedTime"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getNextExecutedTime();
        // line 11
        echo "  ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.disable_web_crontab", 0) && (($context["crontabNextExecutedTime"] ?? null) > 0))) {
            // line 12
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, ($context["crontabNextExecutedTime"] ?? null), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 13
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crontab_web");
                echo "';
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  window.CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  window.CLOUD_FILE_SERVER = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 20
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.renren_key", ""))), "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")));
        // line 30
        echo ";

  app.arguments = {};
  ";
        // line 33
        if (array_key_exists("script_controller", $context)) {
            // line 34
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, ($context["script_controller"] ?? null), "html", null, true);
            echo "';
  ";
        }
        // line 36
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 37
            echo "    app.arguments = ";
            echo twig_jsonencode_filter(($context["script_arguments"] ?? null));
            echo ";
  ";
        }
        // line 39
        echo "  
  app.scripts = ";
        // line 40
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkBaseUri = '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn", ""), "html", null, true);
        echo "';
  app.cloudDisableLogReport = ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.disable_log_report", 0), "html", null, true);
        echo ";
  app.cloudPlayerSdkUrl = '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("player"), "html", null, true);
        echo "';
  app.cloudPlayServer = '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_play_server", ""), "html", null, true);
        echo "';
  app.cloudVideoPlayerSdkUrl = '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("video"), "html", null, true);
        echo "';
  app.cloudUploaderSdkUrl = '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("uploader"), "html", null, true);
        echo "';
  app.cloudOldUploaderSdkUrl = '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_uploader"), "html", null, true);
        echo "';
  app.cloudOldDocumentSdkUrl = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_document"), "html", null, true);
        echo "';
  app.mainScript = '";
        // line 53
        echo twig_escape_filter($this->env, ($context["script_main"] ?? null), "html", null, true);
        echo "';
  app.lang = '";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>
";
        // line 56
        $this->loadTemplate("script/translation.html.twig", "old-script_boot.html.twig", 56)->display($context);
        // line 57
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
    }

    public function getTemplateName()
    {
        return "old-script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  174 => 59,  170 => 58,  165 => 57,  163 => 56,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  105 => 40,  102 => 39,  96 => 37,  93 => 36,  87 => 34,  85 => 33,  80 => 30,  78 => 20,  73 => 18,  69 => 16,  66 => 15,  60 => 13,  57 => 12,  54 => 11,  52 => 10,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "old-script_boot.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/old-script_boot.html.twig");
    }
}
