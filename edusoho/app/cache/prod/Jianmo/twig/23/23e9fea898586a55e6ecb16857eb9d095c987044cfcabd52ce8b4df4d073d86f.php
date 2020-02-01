<?php

/* org/org-tree-select.html.twig */
class __TwigTemplate_9c59603a77d6e6b94a5ce3a1ed84543d20a464dad9bcc87a4b7de8a7dad8baa7 extends Twig_Template
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
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "  ";
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter(($context["modal"] ?? null), null)) : (null));
            // line 3
            echo "
  ";
            // line 4
            if ((($context["modal"] ?? null) == "modal")) {
                // line 5
                echo "    <script>app.load('topxiaadminbundle/controller/widget/category-select')</script>
  ";
            } else {
                // line 7
                echo "    ";
                $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/widget/category-select");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <style>
    .tree-select {
      min-width: 120px;
    }
  </style>

  ";
            // line 16
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter(($context["colmd"] ?? null), 8)) : (8));
            // line 17
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter(($context["lablecolmd"] ?? null), 2)) : (2));
            // line 18
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter(($context["nocolmd"] ?? null), false)) : (false));
            // line 19
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter(($context["inputClass"] ?? null), "")) : (""));
            // line 20
            echo "
  ";
            // line 21
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter(($context["orgCode"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "orgCode", array())));
            // line 22
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()))) ? (null) : (($context["currentOrgCode"] ?? null)))));
            // line 23
            echo "
    <div class=\"form-group ";
            // line 24
            if ((($context["modal"] ?? null) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 25
            if ((($context["modal"] ?? null) != "list")) {
                // line 26
                echo "      <label class=\"";
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["lablecolmd"] ?? null), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.org"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 27
                if ( !($context["nocolmd"] ?? null)) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 29
            echo "
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 30
            echo twig_escape_filter($this->env, ($context["inputClass"] ?? null), "html", null, true);
            echo "\">
        <option value=";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "orgCode", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentOrgTree"] ?? null), 0, array()), "name", array()), "html", null, true);
            echo "</option>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentOrgTree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 33
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == ($context["currentOrgCode"] ?? null))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "      </select>

      ";
            // line 37
            if ((($context["modal"] ?? null) != "list")) {
                // line 38
                echo "      </div>
      ";
            }
            // line 40
            echo "    </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "org/org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  145 => 38,  143 => 37,  139 => 35,  114 => 33,  110 => 32,  104 => 31,  100 => 30,  97 => 29,  88 => 27,  78 => 26,  76 => 25,  70 => 24,  67 => 23,  64 => 22,  62 => 21,  59 => 20,  56 => 19,  53 => 18,  50 => 17,  48 => 16,  39 => 9,  36 => 8,  33 => 7,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "org/org-tree-select.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/org/org-tree-select.html.twig");
    }
}
