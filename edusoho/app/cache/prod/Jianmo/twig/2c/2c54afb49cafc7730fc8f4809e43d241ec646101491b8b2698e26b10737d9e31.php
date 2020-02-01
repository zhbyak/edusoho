<?php

/* file-chooser/widget/choose-table.html.twig */
class __TwigTemplate_4ab50d35681a76f7c4d2ba5dadbda30d19e61585e373713892c38ab640638d94 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "file-chooser/widget/choose-table.html.twig", 1);
        // line 2
        if (($context["files"] ?? null)) {
            // line 3
            echo "  ";
            if (($context["batch"] ?? null)) {
                // line 4
                echo "    <div class=\"js-table-list\">
      <div>
        <label class=\"checkbox-inline mlm mbm mtm\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.btn.all_select"), "html", null, true);
                echo "</label>
      </div>
      <div class=\"chooser-list\"><table class=\"table table-striped table-hover\">
          <tbody>
          ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 11
                    echo "            <tr id=\"material-table-tr-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\" class=\"file-browser-item\"
                data-id=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\"
                data-name=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "\"
                data-status=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "convertStatus", array()), "html", null, true);
                    echo "\"
                data-source=\"self\"
                data-length=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "length", array()), "html", null, true);
                    echo "\"
                data-size=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "fileSize", array()), "html", null, true);
                    echo "\">
              <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
              <td> ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "</td>
              <td> ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->fileSizeFilter($this->getAttribute($context["file"], "fileSize", array())), "html", null, true);
                    echo "</td>
              <td> ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "createdTime", array()), "Y-m-d"), "html", null, true);
                    echo "</td>
            </tr>
          ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 24
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "          </tbody>
        </table>
      </div>
    </div>
    ";
            } else {
                // line 31
                echo "      <div class=\"chooser-list\"><table class=\"table table-striped table-hover\">
          <tbody>
          ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 34
                    echo "            <tr id=\"material-table-tr-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\" class=\"file-browser-item\"
                data-id=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\"
                data-name=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "\"
                data-status=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "convertStatus", array()), "html", null, true);
                    echo "\"
                data-source=\"self\"
                data-length=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "length", array()), "html", null, true);
                    echo "\"
                data-size=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "fileSize", array()), "html", null, true);
                    echo "\">
              <td class=\"mlm\"> ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "</td>
              <td> ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->fileSizeFilter($this->getAttribute($context["file"], "fileSize", array())), "html", null, true);
                    echo "</td>
              <td> ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "createdTime", array()), "Y-m-d"), "html", null, true);
                    echo "</td>
            </tr>
          ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 46
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "          </tbody>
        </table>
      </div>
  ";
            }
        } else {
            // line 53
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file_chooser.empty"), "html", null, true);
            echo "</div>
";
        }
        // line 55
        echo "
";
        // line 56
        echo $context["web_macro"]->getpaginator(($context["paginator"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "file-chooser/widget/choose-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  170 => 55,  164 => 53,  157 => 48,  150 => 46,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 39,  121 => 37,  117 => 36,  113 => 35,  108 => 34,  103 => 33,  99 => 31,  92 => 26,  85 => 24,  77 => 21,  73 => 20,  69 => 19,  64 => 17,  60 => 16,  55 => 14,  51 => 13,  47 => 12,  42 => 11,  37 => 10,  30 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file-chooser/widget/choose-table.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/file-chooser/widget/choose-table.html.twig");
    }
}
