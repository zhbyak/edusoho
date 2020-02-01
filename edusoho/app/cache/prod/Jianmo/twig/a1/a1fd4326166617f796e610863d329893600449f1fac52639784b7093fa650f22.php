<?php

/* default/header/part/user-inform.html.twig */
class __TwigTemplate_7e4624f2ffc8ba9cdde2e14d243ab5d9ed3a0d04c4ecbef4ae55868d761747f0 extends Twig_Template
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
        $context["messageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("message");
        // line 2
        $context["newMessageNum"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newMessageNum", array());
        // line 3
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", array()), "1")) : ("1")) == 0)) {
            // line 4
            echo "  ";
            $context["newMessageNum"] = 0;
        }
        // line 6
        echo "<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>";
        // line 7
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0) || (($context["newMessageNum"] ?? null) > 0))) {
            echo "<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger ";
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) + ($context["newMessageNum"] ?? null)) > 9)) {
                echo " inform-dropdown-toggle__num--big ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) + ($context["newMessageNum"] ?? null)), "html", null, true);
            echo "</span>";
        }
        echo "</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"";
        // line 10
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", array()), "1")) : ("1")) != 0)) {
            echo "inform-dropdown-head__tab active";
        } else {
            echo "inform-dropdown-head__one_tab";
        }
        echo " js-inform-tab\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.user_notification"), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
      ";
        // line 11
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", array()), "1")) : ("1")) != 0)) {
            // line 12
            echo "        <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
            if ((($context["newMessageNum"] ?? null) > 0)) {
                echo "<span class=\"inform-dropdown-dot\"></span>";
            }
            echo "</a>
      ";
        }
        // line 14
        echo "    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "newNotificationNum", array()) > 0)) {
            // line 19
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          ";
        } else {
            // line 22
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo "\"
            srcset=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_notifications"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 28
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_notifications"), "html", null, true);
        echo "</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 35
        if ((($context["newMessageNum"] ?? null) > 0)) {
            // line 36
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          ";
        } else {
            // line 39
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo "\"
          srcset=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_messages"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 45
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_messages"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "default/header/part/user-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 45,  136 => 42,  130 => 41,  126 => 40,  123 => 39,  118 => 36,  116 => 35,  106 => 30,  102 => 28,  96 => 25,  90 => 24,  86 => 23,  83 => 22,  78 => 19,  76 => 18,  70 => 14,  61 => 12,  59 => 11,  46 => 10,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/header/part/user-inform.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/header/part/user-inform.html.twig");
    }
}
