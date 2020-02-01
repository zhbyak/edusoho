<?php

/* teacher/teacher-item.html.twig */
class __TwigTemplate_a371800f1f612458b7604cffc1cb771162b96c9c1a2844069df597e088a793be extends Twig_Template
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
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["teacher"] ?? null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute(($context["teacher"] ?? null), "title", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? null), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.no_title"), "html", null, true);
            echo "
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute(($context["profile"] ?? null), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["profile"] ?? null), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.no_introduction"), "html", null, true);
            echo "
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute(($context["app"] ?? null), "user", array()) || ($this->getAttribute(($context["teacher"] ?? null), "id", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())))) {
            // line 27
            echo "        ";
            $context["messageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("message");
            // line 28
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
            if (($context["isFollowed"] ?? null)) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.following"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !($context["isFollowed"] ?? null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.followed"), "html", null, true);
            echo "</a>
        ";
            // line 30
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->canSendMessage($this->getAttribute(($context["teacher"] ?? null), "id", array())) && ((($this->getAttribute(($context["messageSetting"] ?? null), "showable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", array()), "1")) : ("1")) != 0))) {
                // line 31
                echo "          <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute(($context["teacher"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
                echo "</a>
        ";
            }
            // line 33
            echo "      ";
        }
        // line 34
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "teacher/teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  121 => 33,  113 => 31,  111 => 30,  101 => 29,  84 => 28,  81 => 27,  79 => 26,  75 => 24,  69 => 22,  63 => 20,  61 => 19,  55 => 15,  49 => 13,  43 => 11,  41 => 10,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "teacher/teacher-item.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/teacher/teacher-item.html.twig");
    }
}
