<?php

/* admin/default/operation-analysis-dashbord.html.twig */
class __TwigTemplate_329eca3c1acffb495feed9159835090648124c932d685c836ad0851f67031fce extends Twig_Template
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
        echo "<ul class=\"subfield-list
";
        // line 2
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 3
            echo "six-subfield
";
        } else {
            // line 5
            echo "five-subfield
";
        }
        // line 7
        echo "clearfix\">
  <li>
    <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.login_users"), "html", null, true);
        echo "</div>
    <span class=\"number\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_online", array("type" => "logined"));
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ((array_key_exists("loginCount", $context)) ? (_twig_default_filter(($context["loginCount"] ?? null), "0")) : ("0")), "html", null, true);
        echo "</a></span>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.login_users.online_total"), "html", null, true);
        echo ": <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_online", array("type" => "online"));
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["onlineCount"] ?? null), "html", null, true);
        echo "</a></p>
  </li>
  <li>
    <div class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_registration"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["todayRegisterNum"] ?? null), "html", null, true);
        echo "</span>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalRegisterNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_course_members"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 20
        echo twig_escape_filter($this->env, ($context["todayCourseMemberNum"] ?? null), "html", null, true);
        echo "</span>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total_number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalCourseMemberNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_classroom_members"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 25
        echo twig_escape_filter($this->env, ($context["todayClassroomMemberNum"] ?? null), "html", null, true);
        echo "</span>
    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total_number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalClassroomMemberNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
  ";
        // line 28
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("vip.enabled"))) {
            // line 29
            echo "    <li>
      <div class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.new_vip_members"), "html", null, true);
            echo "</div>
      <span class=\"number\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["todayVipNum"] ?? null), "html", null, true);
            echo "</span>
      <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["totalVipNum"] ?? null), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 35
        echo "  ";
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("Invoice") && $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invoice.enabled"))) {
            // line 36
            echo "    <li>
      <div class=\"title\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.invoice_import.to_invoice_num"), "html", null, true);
            echo "</div>
      <span class=\"number\"><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invoice_manage");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, ($context["toInvoiceNum"] ?? null), "html", null, true);
            echo "</a></span>
      <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.invoice_import.total_invoice_num"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["totalInvoiceNum"] ?? null), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 42
        echo "  <li>
    <div class=\"title\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.thread_un_answer"), "html", null, true);
        echo "</div>
    <span class=\"number\">
      ";
        // line 45
        echo twig_escape_filter($this->env, ($context["todayThreadUnAnswerNum"] ?? null), "html", null, true);
        echo "
    </span>
    <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.homepage.todays_data.total"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["totalThreadNum"] ?? null), "html", null, true);
        echo "</p>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "admin/default/operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  156 => 45,  151 => 43,  148 => 42,  140 => 39,  134 => 38,  130 => 37,  127 => 36,  124 => 35,  116 => 32,  112 => 31,  108 => 30,  105 => 29,  103 => 28,  96 => 26,  92 => 25,  88 => 24,  80 => 21,  76 => 20,  72 => 19,  64 => 16,  60 => 15,  56 => 14,  46 => 11,  40 => 10,  36 => 9,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/default/operation-analysis-dashbord.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/default/operation-analysis-dashbord.html.twig");
    }
}
