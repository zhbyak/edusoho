<?php

/* admin/user/index.html.twig */
class __TwigTemplate_0b06ca47cffd1f24924e34c74e614261bb29dcf4318e14c75bc6df9ca086997b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_user_manage";
        // line 5
        $context["script_controller"] = "user/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">



      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        ";
        // line 17
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions(array("longinDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.form.time_option.login"), "registerDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.form.time_option.register")), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "datePicker"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.form.time_option.default"));
        echo "
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.input_placeholder.startDate"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.input_placeholder.endDate"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      ";
        // line 29
        $this->loadTemplate("org/org-tree-select.html.twig", "admin/user/index.html.twig", 29)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 30
        echo "    </div>

    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        ";
        // line 35
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('AppBundle\Twig\WebExtension')->arrayMerge($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userRole"), ($context["allRoles"] ?? null)), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "roles"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.form.role_option.default"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        ";
        // line 42
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.form.user_type_option.default"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        ";
        // line 48
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.input_placeholder.keyword"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.btn.search_submit_btn"), "html", null, true);
        echo "</button>

    ";
        // line 59
        if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_user_export") && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled("UserImporter"))) {
            // line 60
            echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_export");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.admin.user.manage.form.user_export_btn"), "html", null, true);
            echo "</a>
    ";
        }
        // line 63
        echo "
  </form>

  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
        ";
        // line 69
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 70
            echo "          <th><input type=\"checkbox\"  data-role=\"batch-select\"></th>
        ";
        }
        // line 72
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.username_label"), "html", null, true);
        echo "</th>
        ";
        // line 73
        $this->loadTemplate("org/parts/table-thead-tr.html.twig", "admin/user/index.html.twig", 73)->display($context);
        // line 74
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.fields.mobile_label"), "html", null, true);
        echo "</th>
      <th>Email</th>
      <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.fields.register_date_label"), "html", null, true);
        echo "</th>
      <th>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.fields.recent_login_label"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.fields.operation_label"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.manage.fields.user_total_num_label"), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, ($context["userCount"] ?? null), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 86
            echo "        ";
            $this->loadTemplate("admin/user/user-table-tr.html.twig", "admin/user/index.html.twig", 86)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute(($context["profiles"] ?? null), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 87
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </tbody>
  </table>

  ";
        // line 91
        $this->loadTemplate("org/batch-update-org-btn.html.twig", "admin/user/index.html.twig", 91)->display(array_merge($context, array("module" => "user", "formId" => "user-search-form")));
        // line 92
        echo "
  ";
        // line 94
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? null), "paginator", array(0 => ($context["paginator"] ?? null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 94,  229 => 92,  227 => 91,  222 => 88,  208 => 87,  205 => 86,  188 => 85,  181 => 83,  173 => 78,  169 => 77,  165 => 76,  159 => 74,  157 => 73,  152 => 72,  148 => 70,  146 => 69,  138 => 63,  131 => 61,  128 => 60,  126 => 59,  121 => 57,  115 => 54,  111 => 53,  103 => 48,  94 => 42,  84 => 35,  77 => 30,  75 => 29,  65 => 24,  57 => 21,  50 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/user/index.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/admin/user/index.html.twig");
    }
}
