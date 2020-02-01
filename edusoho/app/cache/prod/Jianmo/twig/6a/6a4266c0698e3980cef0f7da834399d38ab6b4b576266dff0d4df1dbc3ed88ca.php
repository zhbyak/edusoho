<?php

/* wechat-inform.html.twig */
class __TwigTemplate_f05dfe3d37e12d25e3a8e722620c7bed0eb9dafeadc31b3d5f14456ed4056cec extends Twig_Template
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
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.wechat_notification_enabled"), false)) {
            // line 2
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script(array(0 => "app/js/wechat-inform/index.js"));
            // line 3
            echo "  ";
            $context["switchLanguage"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.show_switch_locale"), 0);
            // line 4
            echo "  ";
            $context["weChatUser"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("WeChatUser", array("userId" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), null)) : (null))));
            // line 5
            echo "
  ";
            // line 6
            if ( !(($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", array()), false)) : (false))) {
                // line 7
                echo "    <div class=\"js-wechat-inform hidden ";
                if ((($context["switchLanguage"] ?? null) == 1)) {
                    echo "js-switch-language";
                }
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_binds");
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array()), null)) : (null)), "html", null, true);
                echo "\">
      <div class=\"wechat-pendant js-wechat-pendant\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-container=\".wechat-pendant\" title=\"开启课程通知\"
           ";
                // line 9
                if ( !($context["weChatUser"] ?? null)) {
                    echo "data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_wechat_qrcode");
                    echo "\"";
                }
                echo ">
        <div class=\"wechat-pendant__outer\">
          <div class=\"wechat-pendant__inner\">
            <i class=\"es-icon es-icon-qr-code\"></i>
          </div>
        </div>
        <i class=\"cd-icon cd-icon-close wechat-pendant__close js-wechat-close-btn\"></i>
      </div>

      <div class=\"wechat-inform-qrcode js-wechat-qrcode hidden\">
        <div class=\"wechat-inform-qrcode__close js-wechat-close-btn\"><i class=\"cd-icon cd-icon-close\"></i></div>
        ";
                // line 20
                if ((($context["weChatUser"] ?? null) && ($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", array()) != 1))) {
                    // line 21
                    echo "          <div class=\"wechat-inform-qrcode__tip\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wechat.notification.open_notification_tip"), "html", null, true);
                    echo "</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.account_code"), "html", null, true);
                    echo "\">
        ";
                } elseif ( !                // line 23
($context["weChatUser"] ?? null)) {
                    // line 24
                    echo "          <div class=\"wechat-inform-qrcode__tip text-left\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wechat.notification.scan_and_bind"), "html", null, true);
                    echo "</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"\">
        ";
                }
                // line 27
                echo "      </div>
      <div class=\"wechat-inform-qrcode-mask js-wechat-mask\"></div>
    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "wechat-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  78 => 24,  76 => 23,  72 => 22,  67 => 21,  65 => 20,  47 => 9,  35 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "wechat-inform.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/wechat-inform.html.twig");
    }
}
