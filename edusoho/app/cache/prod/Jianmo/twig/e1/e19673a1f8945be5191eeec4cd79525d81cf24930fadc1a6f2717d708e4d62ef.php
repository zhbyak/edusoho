<?php

/* admin/user/user-table-tr.html.twig */
class __TwigTemplate_85215be56c24f88088af79960ae6dc02df52efe950c86f9af2d92cfae2d2c056 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("admin/macro.html.twig", "admin/user/user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("org/parts/table-body-checkbox.html.twig", "admin/user/user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        echo $context["admin_macro"]->getuser_link(($context["user"] ?? null));
        echo "</strong>
    ";
        // line 6
        if ($this->getAttribute(($context["user"] ?? null), "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.fields.forbid_label"), "html", null, true);
            echo "</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            $context["userRole"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Role", array("code" => $context["role"]));
            // line 14
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter(($context["userRole"] ?? null), false)) : (false))) {
                // line 15
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["userRole"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["userRole"] ?? null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "          ";
                echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 19
            echo "        ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " &nbsp ";
            }
            // line 20
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </span>
  </td>
 ";
        // line 23
        $this->loadTemplate("org/parts/table-body-td.html.twig", "admin/user/user-table-tr.html.twig", 23)->display(array_merge($context, array("orgCode" => $this->getAttribute(($context["user"] ?? null), "orgCode", array()))));
        // line 24
        echo "  <td>
    ";
        // line 25
        if ($this->getAttribute(($context["user"] ?? null), "verifiedMobile", array())) {
            // line 26
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.mobile_label.bind"), "html", null, true);
            echo ")</span>
    ";
        } elseif ($this->getAttribute(        // line 27
($context["profile"] ?? null), "mobile", array())) {
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.mobile_label.no_bind"), "html", null, true);
            echo ")</span>
    ";
        } else {
            // line 30
            echo "       -- 
    ";
        }
        // line 32
        echo "  </td>

  <td>
    ";
        // line 35
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->isSystemGeneratedEmail($this->getAttribute(($context["user"] ?? null), "email", array()))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 38
            echo "      --
    ";
        }
        // line 40
        echo "    
    <br>
    ";
        // line 42
        if ($this->getAttribute(($context["user"] ?? null), "emailVerified", array())) {
            // line 43
            echo "      <label class=\"label label-success\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.label.email_verified_hint"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.fields.verified_label"), "html", null, true);
            echo "</label>
    ";
        }
        // line 45
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? null), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 58
        if (($this->getAttribute(($context["user"] ?? null), "loginTime", array()) == 0)) {
            // line 59
            echo "       --
      ";
        } else {
            // line 61
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 63
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getConvertIP($this->getAttribute(($context["user"] ?? null), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.btn.show_btn"), "html", null, true);
        echo "</a>
      ";
        // line 73
        $this->loadTemplate("admin/role/templates/group-button.html.twig", "admin/user/user-table-tr.html.twig", 73)->display(array_merge($context, array("parentCode" => "admin_user_manage", "group" => "groupButton", "user" => ($context["user"] ?? null))));
        // line 74
        echo "    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "admin/user/user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 74,  228 => 73,  222 => 72,  214 => 67,  208 => 66,  203 => 63,  197 => 61,  193 => 59,  191 => 58,  182 => 52,  176 => 51,  170 => 48,  165 => 45,  157 => 43,  155 => 42,  151 => 40,  147 => 38,  141 => 36,  139 => 35,  134 => 32,  130 => 30,  122 => 28,  120 => 27,  113 => 26,  111 => 25,  108 => 24,  106 => 23,  102 => 21,  88 => 20,  83 => 19,  77 => 17,  71 => 15,  68 => 14,  65 => 13,  48 => 12,  43 => 9,  37 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/user/user-table-tr.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/user/user-table-tr.html.twig");
    }
}
