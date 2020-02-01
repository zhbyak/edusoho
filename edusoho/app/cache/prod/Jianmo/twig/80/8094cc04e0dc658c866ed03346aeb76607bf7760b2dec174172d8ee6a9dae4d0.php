<?php

/* user/fill-userinfo-fields-block.html.twig */
class __TwigTemplate_287a2e02114953b10fa8e5d643a6385f5823d588b8f8b7ddc494515c8f5a44d5 extends Twig_Template
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
        if (((array_key_exists("isBuyFillUserinfo", $context)) ? (_twig_default_filter(($context["isBuyFillUserinfo"] ?? null), false)) : (false))) {
            // line 2
            echo "  ";
            if (($context["userinfoFieldsSetting"] ?? null)) {
                // line 3
                echo "    ";
                if (((array_key_exists("showNavTip", $context)) ? (_twig_default_filter(($context["showNavTip"] ?? null), true)) : (true))) {
                    // line 4
                    echo "      <div class=\"help-block\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.approve_tips"), "html", null, true);
                    echo "</div>
      <hr>
    ";
                }
                // line 7
                echo "
    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["userinfoFieldsSetting"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 9
                    echo "      ";
                    $context["defaultFields"] = $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userInfoFields");
                    // line 10
                    echo "      ";
                    if (($context["field"] == "truename")) {
                        // line 11
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"truename\">";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "truename", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 14
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute(($context["user"] ?? null), "truename", array()))) {
                            // line 15
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 16
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.approved"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 18
($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute(($context["user"] ?? null), "truename", array()))) {
                            // line 19
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "
                <small class=\"text-warning\">(";
                            // line 20
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.approving"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 23
                            echo "              <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "truename", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 25
                        echo "          </div>
        </div>
      ";
                    }
                    // line 28
                    echo "
      ";
                    // line 29
                    if (($context["field"] == "email")) {
                        // line 30
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"email\">";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "email", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 33
                        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->isSystemGeneratedEmail($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))) {
                            // line 34
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()), "html", null, true);
                            echo "</div>
            ";
                        } else {
                            // line 36
                            echo "              <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" value=\"\"
                     data-url=\"";
                            // line 37
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                            echo "\"/>
            ";
                        }
                        // line 39
                        echo "          </div>
        </div>
      ";
                    }
                    // line 42
                    echo "
      ";
                    // line 43
                    if (($context["field"] == "mobile")) {
                        // line 44
                        echo "        <div class=\"form-group ";
                        if (((twig_test_empty((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.mobileSmsValidate"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.fill_userinfo_after_login"), 0))) {
                            echo "mbm";
                        }
                        echo "\">
          <label class=\"col-sm-3 control-label\" for=\"mobile\">";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "mobile", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 47
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) {
                            // line 48
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_phone_number($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "verifiedMobile", array())), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.mobile_bind"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 52
                            echo "              <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "mobile", array()), "html", null, true);
                            echo "\" data-url=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                            echo "\">
            ";
                        }
                        // line 54
                        echo "          </div>
        </div>
        ";
                        // line 56
                        if (((twig_test_empty((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "verifiedMobile", array()), "")) : (""))) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.fill_userinfo_after_login"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.mobileSmsValidate"), 0))) {
                            // line 57
                            echo "          <div class=\"form-group mbs js-captch-num\">
            <label class=\"col-sm-3 control-label\"></label>
            <div class=\"col-sm-3 controls\">
              <input type=\"text\" class=\"form-control input-md\" id=\"captcha_num\" name=\"captcha_num\" maxlength=\"5\" placeholder=\"";
                            // line 60
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_sms_code_label"), "html", null, true);
                            echo "\" required=\"required\"  data-url=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_check");
                            echo "\" >
              <div class=\"help-block\"></div>
            </div>
            <div class=\"col-sm-2 controls\">
              <img src=\"";
                            // line 64
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                            echo "\" data-url=\"";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                            echo "\" id=\"getcode_num\" title=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.change_captcha_code"), "html", null, true);
                            echo "\" style=\"cursor:pointer;height:34px;width:100%\">
            </div>
          </div>
          <div class=\"form-group js-sms-code\">
            <label class=\"col-sm-3 control-label\"></label>
            <div class=\"col-sm-3 controls\">
              <input type=\"text\" id=\"sms-code\" name=\"sms_code\" class=\"form-control\" value=\"\" data-url=\"";
                            // line 70
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_bind"));
                            echo "\">
            </div>
            <div class=\"col-sm-3 controls\">
              <a class=\"btn btn-default btn-sm js-sms-send disabled\" data-sms-url=\"";
                            // line 73
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send");
                            echo "\">
                <span id=\"js-time-left\"></span>
                <span id=\"js-fetch-btn-text\">";
                            // line 75
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.get_sms_code_btn"), "html", null, true);
                            echo "</span>
              </a>
            </div>
          </div>
        ";
                        }
                        // line 80
                        echo "      ";
                    }
                    // line 81
                    echo "
      ";
                    // line 82
                    if (($context["field"] == "qq")) {
                        // line 83
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"qq\">";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "qq", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "qq", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 90
                    echo "
      ";
                    // line 91
                    if (($context["field"] == "company")) {
                        // line 92
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"company\">";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "company", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "company", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 99
                    echo "
      ";
                    // line 100
                    if (($context["field"] == "job")) {
                        // line 101
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\" for=\"job\">";
                        // line 102
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "job", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "job", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 108
                    echo "
      ";
                    // line 109
                    if (($context["field"] == "idcard")) {
                        // line 110
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"idcard\">";
                        // line 111
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "idcard", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            ";
                        // line 113
                        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approved") && $this->getAttribute(($context["user"] ?? null), "idcard", array()))) {
                            // line 114
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_idcard_number($this->getAttribute(($context["user"] ?? null), "idcard", array())), "html", null, true);
                            echo "
                <small class=\"color-success\">(";
                            // line 115
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.approved"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } elseif ((($this->getAttribute($this->getAttribute(                        // line 117
($context["app"] ?? null), "user", array()), "approvalStatus", array()) == "approving") && $this->getAttribute(($context["user"] ?? null), "idcard", array()))) {
                            // line 118
                            echo "              <div class=\"form-control-static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->blur_idcard_number($this->getAttribute(($context["user"] ?? null), "idcard", array())), "html", null, true);
                            echo "
                <small class=\"text-warning\">(";
                            // line 119
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.approving"), "html", null, true);
                            echo ")</small>
              </div>
            ";
                        } else {
                            // line 122
                            echo "              <input type=\"text\" id=\"idcard\" name=\"";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "\" class=\"form-control\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "idcard", array()), "html", null, true);
                            echo "\">
            ";
                        }
                        // line 124
                        echo "          </div>
        </div>
      ";
                    }
                    // line 127
                    echo "
      ";
                    // line 128
                    if (($context["field"] == "gender")) {
                        // line 129
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"gender\">";
                        // line 130
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "gender", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6\">
            <div class=\"checkbox-inline\" style=\"padding-left: 0\">
              <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
                     ";
                        // line 134
                        if (($this->getAttribute(($context["user"] ?? null), "gender", array()) == "male")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_0\" class=\"required mrl\">";
                        // line 135
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.male"), "html", null, true);
                        echo "</span>
              <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
                     ";
                        // line 137
                        if (($this->getAttribute(($context["user"] ?? null), "gender", array()) == "female")) {
                            echo "checked=true";
                        }
                        echo ">
              <span for=\"profile_gender_1\" class=\"required\">";
                        // line 138
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.gender.female"), "html", null, true);
                        echo "</span>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 143
                    echo "
      ";
                    // line 144
                    if (($context["field"] == "weixin")) {
                        // line 145
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weixin\">";
                        // line 146
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "weixin", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weixin\" name=\"";
                        // line 148
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\" class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "weixin", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 152
                    echo "
      ";
                    // line 153
                    if (($context["field"] == "weibo")) {
                        // line 154
                        echo "        <div class=\"form-group\">
          <label class=\"col-sm-3 control-label required\" for=\"weibo\">";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultFields"] ?? null), "weibo", array()), "html", null, true);
                        echo "</label>
          <div class=\"col-sm-6 controls\">
            <input type=\"text\" id=\"weibo\" name=\"";
                        // line 157
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\" class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "weibo", array()), "html", null, true);
                        echo "\">
          </div>
        </div>
      ";
                    }
                    // line 161
                    echo "
      ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["userFields"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 163
                        echo "        ";
                        if (($context["field"] == $this->getAttribute($context["userField"], "fieldName", array()))) {
                            // line 164
                            echo "          ";
                            if (($this->getAttribute($context["userField"], "type", array()) == "text")) {
                                // line 165
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 166
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label \">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6 controls\">
                  <textarea id=\"";
                                // line 168
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\"
                            class=\"field-";
                                // line 169
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\"
                            data-image-upload-url=\"";
                                // line 170
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUpoadToken("user"))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 175
$context["userField"], "type", array()) == "int")) {
                                // line 176
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 177
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 179
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.max_int"), "html", null, true);
                                echo "\"
                       name=\"";
                                // line 180
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 181
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 186
$context["userField"], "type", array()) == "float")) {
                                // line 187
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 188
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\" col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 190
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" placeholder=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.validate_rules.two_decimal_places"), "html", null, true);
                                echo "\"
                       name=\"";
                                // line 191
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo " form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 192
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 197
$context["userField"], "type", array()) == "date")) {
                                // line 198
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 199
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\" col-sm-6 controls\">
                <input type=\"text\" id=\"";
                                // line 201
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\"
                       class=\"";
                                // line 202
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "type", array()), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\"
                       value=\"";
                                // line 203
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>

          ";
                            } elseif (($this->getAttribute(                            // line 208
$context["userField"], "type", array()) == "varchar")) {
                                // line 209
                                echo "            <div class=\"form-group\">
              <label for=\"";
                                // line 210
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"col-sm-3 control-label\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                                echo "</label>
              <div class=\"col-sm-6  controls\">
                <input type=\"text\" id=\"";
                                // line 212
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" name=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "fieldName", array()), "html", null, true);
                                echo "\" class=\"form-control\"
                       data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                // line 213
                                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            </div>
          ";
                            }
                            // line 218
                            echo "
        ";
                        }
                        // line 220
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "user/fill-userinfo-fields-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 222,  586 => 221,  580 => 220,  576 => 218,  568 => 213,  562 => 212,  555 => 210,  552 => 209,  550 => 208,  542 => 203,  538 => 202,  532 => 201,  525 => 199,  522 => 198,  520 => 197,  512 => 192,  506 => 191,  500 => 190,  493 => 188,  490 => 187,  488 => 186,  480 => 181,  474 => 180,  468 => 179,  461 => 177,  458 => 176,  456 => 175,  446 => 170,  442 => 169,  436 => 168,  429 => 166,  426 => 165,  423 => 164,  420 => 163,  416 => 162,  413 => 161,  404 => 157,  399 => 155,  396 => 154,  394 => 153,  391 => 152,  382 => 148,  377 => 146,  374 => 145,  372 => 144,  369 => 143,  361 => 138,  355 => 137,  350 => 135,  344 => 134,  337 => 130,  334 => 129,  332 => 128,  329 => 127,  324 => 124,  316 => 122,  310 => 119,  305 => 118,  303 => 117,  298 => 115,  293 => 114,  291 => 113,  286 => 111,  283 => 110,  281 => 109,  278 => 108,  271 => 104,  266 => 102,  263 => 101,  261 => 100,  258 => 99,  251 => 95,  246 => 93,  243 => 92,  241 => 91,  238 => 90,  231 => 86,  226 => 84,  223 => 83,  221 => 82,  218 => 81,  215 => 80,  207 => 75,  202 => 73,  196 => 70,  183 => 64,  174 => 60,  169 => 57,  167 => 56,  163 => 54,  155 => 52,  149 => 49,  144 => 48,  142 => 47,  137 => 45,  130 => 44,  128 => 43,  125 => 42,  120 => 39,  115 => 37,  112 => 36,  106 => 34,  104 => 33,  99 => 31,  96 => 30,  94 => 29,  91 => 28,  86 => 25,  80 => 23,  74 => 20,  69 => 19,  67 => 18,  62 => 16,  57 => 15,  55 => 14,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  37 => 8,  34 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/fill-userinfo-fields-block.html.twig", "/Users/zhbyak/Apache/edusoho/app/Resources/views/user/fill-userinfo-fields-block.html.twig");
    }
}
