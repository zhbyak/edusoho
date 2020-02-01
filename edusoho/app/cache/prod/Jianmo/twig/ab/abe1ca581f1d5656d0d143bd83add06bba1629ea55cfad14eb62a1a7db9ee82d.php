<?php

/* default/recommend-classroom.html.twig */
class __TwigTemplate_c931028eeb4613c53c48e7f47bd9db9406a3784c8d0f3f6a4f851f4cb4052a46 extends Twig_Template
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
        echo "
<!-- 推荐班级 -->
";
        // line 3
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendClassrooms", array("count" => (($this->getAttribute(($context["config"] ?? null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", array()), 4)) : (4))));
        // line 4
        if (($context["classrooms"] ?? null)) {
            // line 5
            echo "  <section class=\"class-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))), "html", null, true);
            echo "</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", array()), $this->getAttribute(($context["config"] ?? null), "defaultSubTitle", array()))) : ($this->getAttribute(($context["config"] ?? null), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"recommend-class-list row\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 16
                echo "          <div class=\"col-md-3 col-xs-6\">
             ";
                // line 17
                $this->loadTemplate("classroom/class-grid.html.twig", "default/recommend-classroom.html.twig", 17)->display($context);
                // line 18
                echo "          </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.more", array("%moreClassrooms%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom")))), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  88 => 22,  84 => 20,  69 => 18,  67 => 17,  64 => 16,  47 => 15,  41 => 12,  35 => 9,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/recommend-classroom.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/default/recommend-classroom.html.twig");
    }
}
