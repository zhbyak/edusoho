<?php

/* admin/default/system-status.html.twig */
class __TwigTemplate_deda45bffb3453790a0ee5d40f26604b47adea1dfbbc5c07b360729ba03820a9 extends Twig_Template
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
        echo "<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.system_version_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 5
        if (($context["mainAppUpgrade"] ?? null)) {
            // line 6
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["mainAppUpgrade"] ?? null), "package", array()), "fromVersion", array()), "html", null, true);
            echo "</span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.system_version_status.have_update"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 10
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 11
            echo twig_escape_filter($this->env, twig_constant("AppBundle\\System::VERSION"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 18
        if ((($context["upgradeAppCount"] ?? null) == 0)) {
            // line 19
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_status.updated"), "html", null, true);
            echo "</span>
      ";
        } else {
            // line 22
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> ";
            echo twig_escape_filter($this->env, ($context["upgradeAppCount"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.school_app_status.several_are_not_updated"), "html", null, true);
            echo "</a>
      ";
        }
        // line 25
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        ";
        // line 32
        if ((($context["disabledCloudServiceCount"] ?? null) > 0)) {
            // line 33
            echo "          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
            echo "\">";
            echo twig_escape_filter($this->env, ($context["disabledCloudServiceCount"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.several_are_not_open"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 36
            echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
        ";
        }
        // line 39
        echo "        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_video_title"), "html", null, true);
        echo "</span>
              ";
        // line 43
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 44
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 48
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_document_title"), "html", null, true);
        echo "</span>
              ";
        // line 51
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 52
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 56
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_live_title"), "html", null, true);
        echo "</span>
              ";
        // line 59
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 60
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 62
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_edulive_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 64
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_sms_title"), "html", null, true);
        echo "</span>
              ";
        // line 67
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_sms.sms_enabled"), "0") == "1")) {
            // line 68
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 70
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 72
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_search_title"), "html", null, true);
        echo "</span>
              ";
        // line 75
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 76
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 78
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 80
        echo "            </li>
            <li>
              <span class=\"key\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_question_title"), "html", null, true);
        echo "</span>
              ";
        // line 83
        $context["cloud_consult"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("cloud_consult", "");
        // line 84
        echo "              ";
        if ((($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["cloud_consult"] ?? null), "cloud_consult_setting_enabled", array()), 0)) : (0))) {
            // line 85
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.open"), "html", null, true);
            echo "</span>
              ";
        } else {
            // line 87
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_consult_setting");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.cloud_service_status.not_open"), "html", null, true);
            echo "</a>
              ";
        }
        // line 89
        echo "            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_title"), "html", null, true);
        echo "</div>
    <div class=\"info\">
      ";
        // line 98
        if ((($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 99
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_status.open"), "html", null, true);
            echo "</span>
      ";
        } else {
            // line 102
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\" class=\"text-lg link-underline text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.status_bar.mobile_app_status.not_open"), "html", null, true);
            echo "</a>
      ";
        }
        // line 105
        echo "    </div>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "admin/default/system-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 105,  292 => 103,  289 => 102,  284 => 100,  281 => 99,  279 => 98,  274 => 96,  265 => 89,  257 => 87,  251 => 85,  248 => 84,  246 => 83,  242 => 82,  238 => 80,  230 => 78,  224 => 76,  222 => 75,  218 => 74,  214 => 72,  206 => 70,  200 => 68,  198 => 67,  194 => 66,  190 => 64,  182 => 62,  176 => 60,  174 => 59,  170 => 58,  166 => 56,  158 => 54,  152 => 52,  150 => 51,  146 => 50,  142 => 48,  134 => 46,  128 => 44,  126 => 43,  122 => 42,  117 => 39,  112 => 37,  109 => 36,  101 => 34,  98 => 33,  96 => 32,  89 => 28,  84 => 25,  75 => 23,  72 => 22,  67 => 20,  64 => 19,  62 => 18,  57 => 16,  52 => 13,  47 => 11,  44 => 10,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/system-status.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/default/system-status.html.twig");
    }
}
