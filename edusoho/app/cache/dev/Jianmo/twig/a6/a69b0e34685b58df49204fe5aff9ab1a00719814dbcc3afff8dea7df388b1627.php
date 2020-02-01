<?php

/* macro.html.twig */
class __TwigTemplate_78827ebbe4354d02cb50e7307075b9fad157b2948af82d095f15461957c17f3b extends Twig_Template
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
        $__internal_a1b4de15df80a4b7c6fea261d1bc66fb1344f38da1d49b1f1d950ed50c6c0080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b4de15df80a4b7c6fea261d1bc66fb1344f38da1d49b1f1d950ed50c6c0080->enter($__internal_a1b4de15df80a4b7c6fea261d1bc66fb1344f38da1d49b1f1d950ed50c6c0080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "macro.html.twig"));

        // line 79
        echo "
";
        // line 102
        echo "
";
        // line 123
        echo "
";
        // line 145
        echo "
";
        // line 168
        echo "
";
        // line 172
        echo "
";
        // line 189
        echo "
";
        
        $__internal_a1b4de15df80a4b7c6fea261d1bc66fb1344f38da1d49b1f1d950ed50c6c0080->leave($__internal_a1b4de15df80a4b7c6fea261d1bc66fb1344f38da1d49b1f1d950ed50c6c0080_prof);

    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6003082a5a52c10018d8a1c9ce81f9677c059d97300c6451a79e30ccc5ee0582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6003082a5a52c10018d8a1c9ce81f9677c059d97300c6451a79e30ccc5ee0582->enter($__internal_6003082a5a52c10018d8a1c9ce81f9677c059d97300c6451a79e30ccc5ee0582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar"));

            // line 3
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 4
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo " ";
                if (($context["card"] ?? $this->getContext($context, "card"))) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 5
                if ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-md")) {
                    // line 6
                    echo "        ";
                    $context["avatarType"] = "medium";
                    // line 7
                    echo "      ";
                } elseif ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-lg")) {
                    // line 8
                    echo "        ";
                    $context["avatarType"] = "large";
                    // line 9
                    echo "      ";
                } else {
                    // line 10
                    echo "        ";
                    $context["avatarType"] = "small";
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["avatarType"] ?? $this->getContext($context, "avatarType"))), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath("", "small"), "html", null, true);
                echo "\">
    </a>
  ";
            }
            
            $__internal_6003082a5a52c10018d8a1c9ce81f9677c059d97300c6451a79e30ccc5ee0582->leave($__internal_6003082a5a52c10018d8a1c9ce81f9677c059d97300c6451a79e30ccc5ee0582_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bb22b4ff7a8edba591737761a386a4e2a0c42f0d70e52efa4376c985b70e51f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bb22b4ff7a8edba591737761a386a4e2a0c42f0d70e52efa4376c985b70e51f0->enter($__internal_bb22b4ff7a8edba591737761a386a4e2a0c42f0d70e52efa4376c985b70e51f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar_link"));

            // line 24
            $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? $this->getContext($context, "size")), "small")) : ("small"));
            // line 25
            echo "  ";
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 26
                echo "    <a
      class=\"avatar-link-";
                // line 27
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo " ";
                if (twig_in_filter("card", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 28
                if (twig_in_filter("_blank", ($context["options"] ?? $this->getContext($context, "options")))) {
                    // line 29
                    echo "        target=\"_blank\"
      ";
                }
                // line 31
                echo "      href=\"";
                if (twig_in_filter("null_link", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 34
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            } else {
                // line 37
                echo "    <a class=\"avatar-link-";
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo "\" href=\"javascript:;\">
      ";
                // line 38
                echo $this->getAttribute($this, "user_avater_img", array(0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            }
            
            $__internal_bb22b4ff7a8edba591737761a386a4e2a0c42f0d70e52efa4376c985b70e51f0->leave($__internal_bb22b4ff7a8edba591737761a386a4e2a0c42f0d70e52efa4376c985b70e51f0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5033e36ca89d341c8ca3baacd13e0d1cb9bb631007db84cb606b0370173bf1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5033e36ca89d341c8ca3baacd13e0d1cb9bb631007db84cb606b0370173bf1c2->enter($__internal_5033e36ca89d341c8ca3baacd13e0d1cb9bb631007db84cb606b0370173bf1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avater_img"));

            // line 44
            echo "<img class=\"avatar-";
            echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
            echo "\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["size"] ?? $this->getContext($context, "size"))), "html", null, true);
            echo "\">";
            
            $__internal_5033e36ca89d341c8ca3baacd13e0d1cb9bb631007db84cb606b0370173bf1c2->leave($__internal_5033e36ca89d341c8ca3baacd13e0d1cb9bb631007db84cb606b0370173bf1c2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_397cb95b2e7fcfbeffd9be40a39e3eb23185ea137a8b203fd356de5e38e4094e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_397cb95b2e7fcfbeffd9be40a39e3eb23185ea137a8b203fd356de5e38e4094e->enter($__internal_397cb95b2e7fcfbeffd9be40a39e3eb23185ea137a8b203fd356de5e38e4094e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_link"));

            // line 59
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.not_exist"), "html", null, true);
                echo "</del></a>
  ";
            }
            
            $__internal_397cb95b2e7fcfbeffd9be40a39e3eb23185ea137a8b203fd356de5e38e4094e->leave($__internal_397cb95b2e7fcfbeffd9be40a39e3eb23185ea137a8b203fd356de5e38e4094e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages($__isUseNew__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "isUseNew" => $__isUseNew__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_01f601a80516389dc2c068e280b9fa8280a27a7a4a07f976360c7183eda28554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_01f601a80516389dc2c068e280b9fa8280a27a7a4a07f976360c7183eda28554->enter($__internal_01f601a80516389dc2c068e280b9fa8280a27a7a4a07f976360c7183eda28554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash_messages"));

            // line 67
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                if (("currentThrowedException" != $context["type"])) {
                    // line 69
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                        // line 70
                        echo "        ";
                        if (($context["isUseNew"] ?? $this->getContext($context, "isUseNew"))) {
                            // line 71
                            echo "          <div class=\"alert cd-alert cd-alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        } else {
                            // line 73
                            echo "          <div class=\"alert alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        }
                        // line 75
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "    ";
                }
                // line 77
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_01f601a80516389dc2c068e280b9fa8280a27a7a4a07f976360c7183eda28554->leave($__internal_01f601a80516389dc2c068e280b9fa8280a27a7a4a07f976360c7183eda28554_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_811c32d5f77cfe19165cc1efa75d166119be7a07f2f098a2ea0f2f031270b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_811c32d5f77cfe19165cc1efa75d166119be7a07f2f098a2ea0f2f031270b1ce->enter($__internal_811c32d5f77cfe19165cc1efa75d166119be7a07f2f098a2ea0f2f031270b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 81
            echo "  ";
            ob_start();
            // line 82
            echo "
      ";
            // line 83
            $context["kilobyte"] = 1024;
            // line 84
            echo "      ";
            $context["megabyte"] = (($context["kilobyte"] ?? $this->getContext($context, "kilobyte")) * 1024);
            // line 85
            echo "      ";
            $context["gigabyte"] = (($context["megabyte"] ?? $this->getContext($context, "megabyte")) * 1024);
            // line 86
            echo "      ";
            $context["terabyte"] = (($context["gigabyte"] ?? $this->getContext($context, "gigabyte")) * 1024);
            // line 87
            echo "
      ";
            // line 88
            if ((($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["kilobyte"] ?? $this->getContext($context, "kilobyte")))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 90
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["megabyte"] ?? $this->getContext($context, "megabyte")))) {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["kilobyte"] ?? $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 92
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["gigabyte"] ?? $this->getContext($context, "gigabyte")))) {
                // line 93
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["megabyte"] ?? $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 94
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["terabyte"] ?? $this->getContext($context, "terabyte")))) {
                // line 95
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["gigabyte"] ?? $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 97
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["terabyte"] ?? $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 99
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_811c32d5f77cfe19165cc1efa75d166119be7a07f2f098a2ea0f2f031270b1ce->leave($__internal_811c32d5f77cfe19165cc1efa75d166119be7a07f2f098a2ea0f2f031270b1ce_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 103
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a578f1be64ffd18ea483e5e6bd4fdcf47afa31711fb84f89061b83eaca00ab54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a578f1be64ffd18ea483e5e6bd4fdcf47afa31711fb84f89061b83eaca00ab54->enter($__internal_a578f1be64ffd18ea483e5e6bd4fdcf47afa31711fb84f89061b83eaca00ab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "paginator"));

            // line 104
            echo "  ";
            if ((((array_key_exists("paginator", $context)) ? (_twig_default_filter(($context["paginator"] ?? $this->getContext($context, "paginator")))) : ("")) && ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()) > 1))) {
                // line 105
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 107
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 108
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 111
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 112
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "
        ";
                // line 115
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 116
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 119
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_a578f1be64ffd18ea483e5e6bd4fdcf47afa31711fb84f89061b83eaca00ab54->leave($__internal_a578f1be64ffd18ea483e5e6bd4fdcf47afa31711fb84f89061b83eaca00ab54_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 124
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_91daedc2407b552749f241e2ed85f8cdc1c025124feb5afa9c8cae978b4bcd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_91daedc2407b552749f241e2ed85f8cdc1c025124feb5afa9c8cae978b4bcd12->enter($__internal_91daedc2407b552749f241e2ed85f8cdc1c025124feb5afa9c8cae978b4bcd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "star"));

            // line 125
            echo "  ";
            $context["floorScore"] = twig_round(($context["score"] ?? $this->getContext($context, "score")), 0, "floor");
            // line 126
            echo "  ";
            $context["emptyNum"] = (5 - ($context["floorScore"] ?? $this->getContext($context, "floorScore")));
            // line 127
            echo "
  ";
            // line 128
            if ((($context["floorScore"] ?? $this->getContext($context, "floorScore")) > 0)) {
                // line 129
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["floorScore"] ?? $this->getContext($context, "floorScore"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 130
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "  ";
            }
            // line 133
            echo "
  ";
            // line 134
            if (((($context["score"] ?? $this->getContext($context, "score")) - ($context["floorScore"] ?? $this->getContext($context, "floorScore"))) >= 0.5)) {
                // line 135
                echo "    ";
                $context["emptyNum"] = (($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) - 1);
                // line 136
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 138
            echo "
  ";
            // line 139
            if ((($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) > 0)) {
                // line 140
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyNum"] ?? $this->getContext($context, "emptyNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 141
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "  ";
            }
            
            $__internal_91daedc2407b552749f241e2ed85f8cdc1c025124feb5afa9c8cae978b4bcd12->leave($__internal_91daedc2407b552749f241e2ed85f8cdc1c025124feb5afa9c8cae978b4bcd12_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getajax_paginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d20c1a1da2477d3b1742c9f6809b3693eefe78ae69676f9e1e672210724ff6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d20c1a1da2477d3b1742c9f6809b3693eefe78ae69676f9e1e672210724ff6fa->enter($__internal_d20c1a1da2477d3b1742c9f6809b3693eefe78ae69676f9e1e672210724ff6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "ajax_paginator"));

            // line 147
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 149
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 150
                echo "    <nav class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 152
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 153
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", array()), "html", null, true);
                    echo "\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 156
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 157
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "
        ";
                // line 160
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 161
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", array())), "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", array()), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 164
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_d20c1a1da2477d3b1742c9f6809b3693eefe78ae69676f9e1e672210724ff6fa->leave($__internal_d20c1a1da2477d3b1742c9f6809b3693eefe78ae69676f9e1e672210724ff6fa_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getlink($__name__ = null, $__url__ = null, $__title__ = "", $__target__ = "_blnak", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "url" => $__url__,
            "title" => $__title__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a32f5fb2749ee53975e397ea8dec7a7768479a34400353b6f939570b355782a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a32f5fb2749ee53975e397ea8dec7a7768479a34400353b6f939570b355782a2->enter($__internal_a32f5fb2749ee53975e397ea8dec7a7768479a34400353b6f939570b355782a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 170
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" title= \"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? $this->getContext($context, "target")), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "</strong></a>
";
            
            $__internal_a32f5fb2749ee53975e397ea8dec7a7768479a34400353b6f939570b355782a2->leave($__internal_a32f5fb2749ee53975e397ea8dec7a7768479a34400353b6f939570b355782a2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function gettable_filter($__header__ = null, $__choices__ = null, $__key__ = null, $__dataTarget__ = null, $__selectedChoice__ = null, $__default__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "choices" => $__choices__,
            "key" => $__key__,
            "dataTarget" => $__dataTarget__,
            "selectedChoice" => $__selectedChoice__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0208bbd7d67b581c67f019be63031f2c46a72b6e4fbe85c10d72ece46495b1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0208bbd7d67b581c67f019be63031f2c46a72b6e4fbe85c10d72ece46495b1a7->enter($__internal_0208bbd7d67b581c67f019be63031f2c46a72b6e4fbe85c10d72ece46495b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_filter"));

            // line 174
            echo "  <div class=\"cd-dropdown cd-dropdown-filter\" data-toggle=\"cd-dropdown\">
    ";
            // line 175
            echo twig_escape_filter($this->env, ($context["header"] ?? $this->getContext($context, "header")), "html", null, true);
            echo "
    <a href=\"javascript:;\" class=\"";
            // line 176
            if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == "")) {
                echo "cd-link-assist";
            } else {
                echo "cd-link-primary";
            }
            echo "\">
      <i class=\"cd-icon cd-icon-filter cd-text-sm\"></i>
    </a>
    <ul class=\"dropdown-menu\">
      ";
            // line 180
            if (($context["default"] ?? $this->getContext($context, "default"))) {
                // line 181
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == "")) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\" data-filter-value=\"\">";
                echo twig_escape_filter($this->env, ($context["default"] ?? $this->getContext($context, "default")), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 183
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["choiceKey"] => $context["choice"]) {
                // line 184
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == $context["choiceKey"])) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\"  data-filter-value=\"";
                echo twig_escape_filter($this->env, $context["choiceKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceKey'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "    </ul>
  </div>
";
            
            $__internal_0208bbd7d67b581c67f019be63031f2c46a72b6e4fbe85c10d72ece46495b1a7->leave($__internal_0208bbd7d67b581c67f019be63031f2c46a72b6e4fbe85c10d72ece46495b1a7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 190
    public function getcd_select($__options__ = null, $__checkedOption__ = null, $__name__ = null, $__className__ = "", $__id__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "checkedOption" => $__checkedOption__,
            "name" => $__name__,
            "className" => $__className__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_31963f3eb7783dd55b3c266413e4c449b9cedba11df5f2ad8a9eb5fe8f866df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_31963f3eb7783dd55b3c266413e4c449b9cedba11df5f2ad8a9eb5fe8f866df9->enter($__internal_31963f3eb7783dd55b3c266413e4c449b9cedba11df5f2ad8a9eb5fe8f866df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "cd_select"));

            // line 191
            echo "  <div class=\"cd-select ";
            echo twig_escape_filter($this->env, ($context["className"] ?? $this->getContext($context, "className")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\">
    <input type=\"hidden\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" />
    <div class=\"select-value\">";
            // line 193
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), array(), "array"), "")) : ("")), "html", null, true);
            echo "</div>
    <ul class=\"select-options\">
      ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
            foreach ($context['_seq'] as $context["optionKey"] => $context["option"]) {
                // line 196
                echo "        <li class=\"";
                if (($context["optionKey"] == ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")))) {
                    echo "checked";
                }
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "    </ul>
  </div>
";
            
            $__internal_31963f3eb7783dd55b3c266413e4c449b9cedba11df5f2ad8a9eb5fe8f866df9->leave($__internal_31963f3eb7783dd55b3c266413e4c449b9cedba11df5f2ad8a9eb5fe8f866df9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  979 => 198,  964 => 196,  960 => 195,  955 => 193,  949 => 192,  942 => 191,  923 => 190,  903 => 186,  884 => 184,  879 => 183,  865 => 181,  863 => 180,  852 => 176,  848 => 175,  845 => 174,  825 => 173,  798 => 170,  780 => 169,  759 => 164,  752 => 162,  745 => 161,  743 => 160,  740 => 159,  723 => 157,  718 => 156,  711 => 154,  704 => 153,  702 => 152,  696 => 150,  694 => 149,  688 => 147,  672 => 146,  653 => 143,  646 => 141,  641 => 140,  639 => 139,  636 => 138,  632 => 136,  629 => 135,  627 => 134,  624 => 133,  621 => 132,  614 => 130,  609 => 129,  607 => 128,  604 => 127,  601 => 126,  598 => 125,  583 => 124,  562 => 119,  557 => 117,  552 => 116,  550 => 115,  547 => 114,  532 => 112,  527 => 111,  522 => 109,  517 => 108,  515 => 107,  509 => 105,  506 => 104,  490 => 103,  470 => 99,  464 => 97,  458 => 95,  456 => 94,  451 => 93,  449 => 92,  444 => 91,  442 => 90,  437 => 89,  435 => 88,  432 => 87,  429 => 86,  426 => 85,  423 => 84,  421 => 83,  418 => 82,  415 => 81,  400 => 80,  378 => 77,  375 => 76,  369 => 75,  361 => 73,  353 => 71,  350 => 70,  345 => 69,  342 => 68,  337 => 67,  322 => 66,  298 => 62,  288 => 60,  286 => 59,  269 => 58,  247 => 44,  231 => 43,  209 => 38,  204 => 37,  198 => 34,  194 => 33,  190 => 32,  181 => 31,  177 => 29,  175 => 28,  167 => 27,  164 => 26,  161 => 25,  159 => 24,  142 => 23,  118 => 17,  113 => 16,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  91 => 8,  88 => 7,  85 => 6,  83 => 5,  68 => 4,  66 => 3,  48 => 2,  40 => 189,  37 => 172,  34 => 168,  31 => 145,  28 => 123,  25 => 102,  22 => 79,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# user_avater 已废弃，请勿使用 #}
{%- macro user_avatar(user, class, imgClass, card = true) -%}
  {% if user %}
    <a class=\"{{ class }} {% if card %}js-user-card{% endif %}\" href=\"{{ path('user_show', {id:user.id}) }}\" data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\" data-user-id=\"{{ user.id }}\">
      {% if imgClass == 'avatar-md' %}
        {% set avatarType = 'medium' %}
      {% elseif imgClass == 'avatar-lg' %}
        {% set avatarType = 'large' %}
      {% else %}
        {% set avatarType = 'small' %}
      {% endif %}
    <img class=\"{{ imgClass|default('avatar-sm') }}\" src=\"{{ avatar_path(user, avatarType) }}\">

  </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\">
      <img class=\"{{ imgClass|default('avatar-sm') }}\"  src=\"{{ avatar_path('', 'small') }}\">
    </a>
  {% endif %}
{%- endmacro -%}

{# options 可以传card(显示卡片), _blank(新开窗口), null_link(空链接) #}
{%- macro user_avatar_link(user, size, options = []) -%}
  {% set size = size|default('small') %}
  {% if user %}
    <a
      class=\"avatar-link-{{ size }} {% if 'card' in options %}js-user-card{% endif %}\"
      {% if '_blank' in options %}
        target=\"_blank\"
      {% endif %}
      href=\"{% if 'null_link' in options %}javascript:;{% else %}{{ path('user_show', {id:user.id}) }}{% endif %}\"
      data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\"
      data-user-id=\"{{ user.id }}\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% else %}
    <a class=\"avatar-link-{{ size }}\" href=\"javascript:;\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% endif %}
{%- endmacro -%}

{%- macro user_avater_img(user, size) -%}
  <img class=\"avatar-{{ size }}\"  src=\"{{ avatar_path(user, size) }}\">
{%- endmacro -%}


{# {%- macro user_link(user, class, options = []) -%}
  {% if user %}
    <a
      class=\"{{ class }} {% if 'card' in options %}js-user-card{% endif %}\" {% if '_blank' in options %} target=\"_blank\" {% endif %}href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}
    </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\"><del>用户不存在</del></a>
  {% endif %}
{%- endmacro -%} #}

{%- macro user_link(user, class, card = true) -%}
  {% if user %}
    <a class=\"link-dark {{ class }}\" href=\"{{ path('user_show', {id:user.id}) }}\" target=\"_blank\">{{ user.nickname }}</a>
  {% else %}
    <a class=\"link-dark {{ class }}\" href=\"javascript:;\"><del>{{'user.not_exist'|trans}}</del></a>
  {% endif %}
{%- endmacro -%}

{% macro flash_messages(isUseNew = false) %}
  {% for type, flashMessages in app.session.flashbag.all() %}
    {% if 'currentThrowedException' != type %}
      {% for flashMessage in flashMessages %}
        {% if isUseNew %}
          <div class=\"alert cd-alert cd-alert-{{ type }}\">{{ flashMessage|trans|raw }}</div>
        {% else %}
          <div class=\"alert alert-{{ type }}\">{{ flashMessage|trans|raw }}</div>
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endfor %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
  {% spaceless %}

      {% set kilobyte = 1024 %}
      {% set megabyte = kilobyte * 1024 %}
      {% set gigabyte = megabyte * 1024 %}
      {% set terabyte = gigabyte * 1024 %}

      {% if bytes < kilobyte %}
          {{ bytes ~ ' B' }}
      {% elseif bytes < megabyte %}
          {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
      {% elseif bytes < gigabyte %}
          {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
      {% elseif bytes < terabyte %}
          {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
      {% else %}
          {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
      {% endif %}

  {% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator|default() and paginator.lastPage > 1 %}
    <nav class=\" {{ class|default('text-center') }}\">
      <ul class=\"pagination cd-pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro star(score) %}
  {% set floorScore = score|round(0, 'floor') %}
  {% set emptyNum = 5 - floorScore %}

  {% if floorScore > 0 %}
    {% for i in range(1, floorScore) %}
      <i class=\"es-icon es-icon-star color-warning\"></i>
    {% endfor %}
  {% endif %}

  {% if (score - floorScore) >= 0.5 %}
    {% set emptyNum = emptyNum - 1 %}
    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  {% endif %}

  {% if emptyNum > 0 %}
    {% for i in range(1, emptyNum) %}
      <i class=\"es-icon es-icon-staroutline\"></i>
    {% endfor %}
  {% endif %}
{% endmacro %}

{% macro ajax_paginator(paginator, class)  %}
  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"{{ paginator.currentPage|default(1) }}\">

  {% if paginator.lastPage > 1 %}
    <nav class=\"{{ class|default('text-center') }}\">
      <ul class=\"pagination cd-pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.firstPage) }}\" data-page=\"{{paginator.firstPage}}\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.previousPage) }}\" data-page=\"{{paginator.previousPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %} data-url=\"{{ paginator.getPageUrl(page) }}\" data-page=\"{{page}}\"><a href=\"javascript:;\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.nextPage) }}\" data-page=\"{{paginator.nextPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.getLastPage) }}\" data-page=\"{{paginator.getLastPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro link(name, url, title = '', target = '_blnak') %}
  <a href=\"{{ url }}\" title= \"{{ title }}\" target=\"{{ target }}\"><strong>{{ name }}</strong></a>
{% endmacro %}

{% macro table_filter(header, choices, key, dataTarget, selectedChoice, default = '') %}
  <div class=\"cd-dropdown cd-dropdown-filter\" data-toggle=\"cd-dropdown\">
    {{ header }}
    <a href=\"javascript:;\" class=\"{% if selectedChoice == '' %}cd-link-assist{% else %}cd-link-primary{% endif %}\">
      <i class=\"cd-icon cd-icon-filter cd-text-sm\"></i>
    </a>
    <ul class=\"dropdown-menu\">
      {% if default %}
        <li class=\"{% if selectedChoice == '' %}active{% endif %}\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"{{ dataTarget }}\" data-filter-key=\"{{ key }}\" data-filter-value=\"\">{{ default }}</a></li>
      {% endif %}
      {% for choiceKey,choice in choices %}
        <li class=\"{% if selectedChoice == choiceKey %}active{% endif %}\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"{{ dataTarget }}\" data-filter-key=\"{{ key }}\"  data-filter-value=\"{{ choiceKey }}\">{{ choice }}</a></li>
      {% endfor %}
    </ul>
  </div>
{% endmacro %}

{% macro cd_select(options, checkedOption, name, className = '', id = '') %}
  <div class=\"cd-select {{ className }}\" id=\"{{ id }}\">
    <input type=\"hidden\" value=\"{{ checkedOption }}\" name=\"{{name}}\" />
    <div class=\"select-value\">{{ options[checkedOption]|default('') }}</div>
    <ul class=\"select-options\">
      {% for optionKey, option in options %}
        <li class=\"{% if optionKey == checkedOption %}checked{% endif %}\" data-value=\"{{optionKey}}\">{{ option }}</li>
      {% endfor %}
    </ul>
  </div>
{% endmacro %}", "macro.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/macro.html.twig");
    }
}
