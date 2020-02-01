<?php

/* admin/role/templates/tabs.html.twig */
class __TwigTemplate_9510d53def75f72a206283a5bcf1c0e3ac796f743fd9d7002873d082215e3b0c extends Twig_Template
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
        $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? null)), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter(($context["tabMenus"] ?? null), null)) : (null)) && (twig_length_filter($this->env, ($context["tabMenus"] ?? null)) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 5
            echo "    ";
            $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert(($context["tabMenus"] ?? null), "visable", "visible");
            // line 6
            echo "    ";
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabMenus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", array(), "any", true, true) || ($this->getAttribute($context["m"], "visible", array(), "any", true, true) && $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", array()))))) {
                    // line 9
                    echo "
      ";
                    // line 10
                    if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                        // line 11
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                        // line 12
                        echo "      ";
                    } else {
                        // line 13
                        echo "        ";
                        $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                        // line 14
                        echo "      ";
                    }
                    // line 15
                    echo "
      <li ";
                    // line 16
                    if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter(($context["menu"] ?? null), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
        <a
            title=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "\"
            class=\"";
                    // line 19
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                    echo "\"
            href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\"
        >
          ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array()), array(), "menu"), "html", null, true);
                    echo "
        </a>
      </li>

    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/role/templates/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  79 => 22,  74 => 20,  70 => 19,  66 => 18,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  44 => 11,  42 => 10,  39 => 9,  34 => 8,  31 => 7,  29 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/role/templates/tabs.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/role/templates/tabs.html.twig");
    }
}
