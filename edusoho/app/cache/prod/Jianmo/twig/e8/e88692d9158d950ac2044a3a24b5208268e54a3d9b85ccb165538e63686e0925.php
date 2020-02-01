<?php

/* admin/role/templates/group-button.html.twig */
class __TwigTemplate_1a4b15db77dc443e3aa317cc1324a2936d103d68be9849d6d9a56f9b19c499ee extends Twig_Template
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
        $context["self_macro"] = $this->loadTemplate("admin/role/templates/macro.html.twig", "admin/role/templates/group-button.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions(($context["parentCode"] ?? null), ((array_key_exists("group", $context)) ? (_twig_default_filter(($context["group"] ?? null), null)) : (null)));
        // line 4
        echo "
";
        // line 5
        $context["dropdownMenusShow"] = false;
        // line 6
        echo "
";
        // line 8
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert(($context["permissions"] ?? null), "visable", "visible");
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 12
            echo "    ";
            if ($this->getAttribute($context["permission"], "visible", array(), "any", true, true)) {
                // line 13
                echo "      ";
                if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visible", array()))) {
                    // line 14
                    echo "        ";
                    $context["dropdownMenusShow"] = true;
                    // line 15
                    echo "      ";
                }
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "      ";
                $context["dropdownMenusShow"] = true;
                // line 18
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        if ((($context["dropdownMenusShow"] ?? null) && ((array_key_exists("permissions", $context)) ? (_twig_default_filter(($context["permissions"] ?? null), null)) : (null)))) {
            // line 22
            echo "<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 27
                echo "    <li>
      ";
                // line 28
                if ($this->getAttribute($context["permission"], "visible", array(), "any", true, true)) {
                    // line 29
                    echo "        ";
                    if ($this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visible", array()))) {
                        // line 30
                        echo "          ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                        echo "
        ";
                    }
                    // line 32
                    echo "      ";
                } else {
                    // line 33
                    echo "        ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                    echo "
      ";
                }
                // line 35
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/role/templates/group-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  106 => 35,  100 => 33,  97 => 32,  91 => 30,  88 => 29,  86 => 28,  83 => 27,  79 => 26,  73 => 22,  71 => 21,  68 => 20,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  39 => 11,  36 => 10,  34 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/group-button.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/role/templates/group-button.html.twig");
    }
}
