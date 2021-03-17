<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basel/template/extension/quickcheckout/shipping_method.twig */
class __TwigTemplate_f786058d71dfe77968b81a2e1bf2ea8f8d4507f15d1702a83c1eeee689bbdd88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"totals-slip\">
";
        // line 2
        if (($context["error_warning"] ?? null)) {
            echo " 
<div class=\"alert alert-danger\">";
            // line 3
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 4
        echo " 
";
        // line 5
        if (($context["shipping_methods"] ?? null)) {
            // line 6
            echo "<p>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
";
            // line 7
            if (($context["shipping"] ?? null)) {
                // line 8
                echo "<table class=\"table\">
  ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["shipping_method"]) {
                    // line 10
                    echo "  ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 10)) {
                        echo " 
  ";
                        // line 11
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 11));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
  <tr>
    <td>";
                            // line 13
                            if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13) == ($context["code"] ?? null))) {
                                echo " 
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 14
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 14);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 14);
                                echo "\" checked=\"checked\" />
      ";
                            } else {
                                // line 15
                                echo "   
      <input type=\"radio\" name=\"shipping_method\" value=\"";
                                // line 16
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 16);
                                echo "\" id=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 16);
                                echo "\" />
      ";
                            }
                            // line 17
                            echo "</td>
    <td style=\"width:100%;padding-left:10px;\">
\t<label for=\"";
                            // line 19
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 19);
                            echo "\">
\t";
                            // line 20
                            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["shipping_logo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                                echo " 
\t<img src=\"";
                                // line 21
                                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["shipping_logo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 21);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 21);
                                echo "\" />
\t";
                            }
                            // line 23
                            echo "\t";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 23);
                            echo "</label></td>
    <td style=\"text-align: right;\"><label for=\"";
                            // line 24
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 24);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 24);
                            echo "</label></td>
  </tr>
  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "  ";
                    } else {
                        echo "   
  <tr>
    <td colspan=\"3\"><div class=\"error\">";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 29);
                        echo "</div></td>
  </tr>
  ";
                    }
                    // line 32
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "</table>
";
            } else {
                // line 34
                echo "   
  <select class=\"form-control\" name=\"shipping_method\">
    ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    echo " 
      ";
                    // line 37
                    if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 37)) {
                        echo " 
\t\t";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            echo " 
\t\t  ";
                            // line 39
                            if ((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 39) == ($context["code"] ?? null))) {
                                echo " 
\t\t    ";
                                // line 40
                                $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 40);
                                // line 41
                                echo "\t\t\t";
                                $context["exists"] = true;
                                echo " 
\t\t\t<option value=\"";
                                // line 42
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 42);
                                echo "\" selected=\"selected\">
\t\t  ";
                            } else {
                                // line 43
                                echo "   
\t\t\t<option value=\"";
                                // line 44
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 44);
                                echo "\">
\t\t  ";
                            }
                            // line 45
                            echo " 
\t\t  ";
                            // line 46
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 46);
                            echo "&nbsp;&nbsp;(";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 46);
                            echo ")</option>
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "\t  ";
                    }
                    // line 49
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "  </select><br />
";
            }
            // line 52
            echo "<br />
";
        }
        // line 54
        if ((($context["delivery"] ?? null) && (( !($context["delivery_delivery_time"] ?? null) || (($context["delivery_delivery_time"] ?? null) == "1")) || (($context["delivery_delivery_time"] ?? null) == "3")))) {
            echo " 
<div";
            // line 55
            echo ((($context["delivery_required"] ?? null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\"><strong>";
            // line 56
            echo ($context["text_delivery"] ?? null);
            echo "</strong></label>
  ";
            // line 57
            if ((($context["delivery_delivery_time"] ?? null) == "1")) {
                echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 58
                echo ($context["delivery_date"] ?? null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            } else {
                // line 59
                echo "  
  <input type=\"text\" name=\"delivery_date\" value=\"";
                // line 60
                echo ($context["delivery_date"] ?? null);
                echo "\" class=\"form-control date\" readonly=\"true\" style=\"background:#ffffff;\" />
  ";
            }
            // line 61
            echo " 
  ";
            // line 62
            if ((($context["delivery_delivery_time"] ?? null) == "3")) {
                echo "<br />
    <select name=\"delivery_time\" class=\"form-control\">";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["delivery_times"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["quickcheckout_delivery_time"]) {
                    // line 64
                    echo "    ";
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["quickcheckout_delivery_time"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null)) {
                        echo " 
      ";
                        // line 65
                        if ((($context["delivery_time"] ?? null) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["quickcheckout_delivery_time"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null))) {
                            echo " 
\t  <option value=\"";
                            // line 66
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["quickcheckout_delivery_time"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["quickcheckout_delivery_time"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
\t  ";
                        } else {
                            // line 67
                            echo "   
\t  <option value=\"";
                            // line 68
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["quickcheckout_delivery_time"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\">";
                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["quickcheckout_delivery_time"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        }
                        // line 69
                        echo " 
\t";
                    }
                    // line 70
                    echo " 
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickcheckout_delivery_time'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "</select>
  ";
            }
            // line 73
            echo "</div>
";
        } elseif ((        // line 74
($context["delivery_delivery_time"] ?? null) && (($context["delivery_delivery_time"] ?? null) == "2"))) {
            echo " 
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
  <strong>";
            // line 77
            echo ($context["text_estimated_delivery"] ?? null);
            echo "</strong><br />
  ";
            // line 78
            echo ($context["estimated_delivery"] ?? null);
            echo "<br />
  ";
            // line 79
            echo ($context["estimated_delivery_time"] ?? null);
            echo " 
";
        } else {
            // line 80
            echo "   
  <input type=\"text\" name=\"delivery_date\" value=\"\" class=\"hide\" />
  <select name=\"delivery_time\" class=\"hide\"><option value=\"\"></option></select>
";
        }
        // line 84
        echo "</div>

<script type=\"text/javascript\"><!--
\$('#shipping-method input[name=\\'shipping_method\\'], #shipping-method select[name=\\'shipping_method\\']').on('change', function() {
\t";
        // line 88
        if ( !($context["logged"] ?? null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}

\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/set',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 102
            if (($context["cart"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 104
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 106
            if (($context["shipping_reload"] ?? null)) {
                echo " 
\t\t\t\treloadPaymentMethod();
\t\t\t\t";
            }
            // line 108
            echo " 
\t\t\t},
\t\t\t";
            // line 110
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 114
            echo " 
\t\t});
\t";
        } else {
            // line 116
            echo "   
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set';
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/shipping_method/set&address_id=' + \$('#shipping-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 132
            if (($context["cart"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 134
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 136
            if (($context["shipping_reload"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
            }
            // line 142
            echo " 
\t\t\t},
\t\t\t";
            // line 144
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 148
            echo " 
\t\t});
\t";
        }
        // line 151
        echo "});

\$(document).ready(function() {
\t\$('#shipping-method input[name=\\'shipping_method\\']:checked, #shipping-method select[name=\\'shipping_method\\']').trigger('change');
});

";
        // line 157
        if ((($context["delivery"] ?? null) && (($context["delivery_delivery_time"] ?? null) == "1"))) {
            echo " 
\$(document).ready(function() {
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'YYYY-MM-DD HH:mm',
\t\tminDate: '";
            // line 161
            echo ($context["delivery_min"] ?? null);
            echo "',
\t\tmaxDate: '";
            // line 162
            echo ($context["delivery_max"] ?? null);
            echo "',
\t\tdisabledDates: [";
            // line 163
            echo ($context["delivery_unavailable"] ?? null);
            echo "],
\t\tenabledHours: [";
            // line 164
            echo ($context["hours"] ?? null);
            echo "],
\t\tignoreReadonly: true,
\t\t";
            // line 166
            if ((($context["delivery_days_of_week"] ?? null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 167
                echo ($context["delivery_days_of_week"] ?? null);
                echo "]
\t\t";
            }
            // line 168
            echo " 
\t});
});
";
        } elseif ((        // line 171
($context["delivery"] ?? null) && ((($context["delivery_delivery_time"] ?? null) == "3") || (($context["delivery_delivery_time"] ?? null) == "0")))) {
            echo " 
\t\$('input[name=\\'delivery_date\\']').datetimepicker({
\t\tformat: 'YYYY-MM-DD',
\t\tminDate: '";
            // line 174
            echo ($context["delivery_min"] ?? null);
            echo "',
\t\tmaxDate: '";
            // line 175
            echo ($context["delivery_max"] ?? null);
            echo "',
\t\tdisabledDates: [";
            // line 176
            echo ($context["delivery_unavailable"] ?? null);
            echo "],
\t\tignoreReadonly: true,
\t\t";
            // line 178
            if ((($context["delivery_days_of_week"] ?? null) != "")) {
                echo " 
\t\tdaysOfWeekDisabled: [";
                // line 179
                echo ($context["delivery_days_of_week"] ?? null);
                echo "]
\t\t";
            }
            // line 180
            echo " 
\t});
";
        }
        // line 183
        echo "//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 183,  528 => 180,  523 => 179,  519 => 178,  514 => 176,  510 => 175,  506 => 174,  500 => 171,  495 => 168,  490 => 167,  486 => 166,  481 => 164,  477 => 163,  473 => 162,  469 => 161,  462 => 157,  454 => 151,  449 => 148,  441 => 144,  437 => 142,  427 => 136,  423 => 134,  417 => 132,  399 => 116,  394 => 114,  386 => 110,  382 => 108,  376 => 106,  372 => 104,  366 => 102,  349 => 88,  343 => 84,  337 => 80,  332 => 79,  328 => 78,  324 => 77,  318 => 74,  315 => 73,  311 => 71,  304 => 70,  300 => 69,  293 => 68,  290 => 67,  283 => 66,  279 => 65,  274 => 64,  270 => 63,  266 => 62,  263 => 61,  258 => 60,  255 => 59,  250 => 58,  246 => 57,  242 => 56,  238 => 55,  234 => 54,  230 => 52,  226 => 50,  220 => 49,  217 => 48,  207 => 46,  204 => 45,  199 => 44,  196 => 43,  191 => 42,  186 => 41,  184 => 40,  180 => 39,  174 => 38,  170 => 37,  164 => 36,  160 => 34,  156 => 33,  150 => 32,  144 => 29,  138 => 27,  127 => 24,  122 => 23,  113 => 21,  109 => 20,  105 => 19,  101 => 17,  94 => 16,  91 => 15,  84 => 14,  80 => 13,  73 => 11,  68 => 10,  64 => 9,  61 => 8,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/shipping_method.twig", "");
    }
}
