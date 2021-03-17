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

/* basel/template/extension/quickcheckout/payment_address.twig */
class __TwigTemplate_0cb785194f6960b83fff195939990b544207964d997c46b2812e5e135baef9ce extends \Twig\Template
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
        // line 3
        if (($context["addresses"] ?? null)) {
            echo " 
<div >
\t
\t<div class=\"radio\">
\t  <label><input type=\"radio\" name=\"payment_address\" value=\"existing\" id=\"payment-address-existing\" checked=\"checked\" />
\t  ";
            // line 8
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
\t</div>
\t<div id=\"payment-existing\">
\t  <select name=\"address_id\" class=\"form-control\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                echo " 
\t\t";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 13) == ($context["address_id"] ?? null))) {
                    echo " 
\t\t<option value=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 14);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    echo "</option>
\t\t";
                } else {
                    // line 15
                    echo "   
\t\t<option value=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 16);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 16);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 16);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 16);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 16);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 16);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 16);
                    echo "</option>
\t\t";
                }
                // line 17
                echo " 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t  </select>
\t</div>
\t<div class=\"radio\">
\t  <label><input type=\"radio\" name=\"payment_address\" value=\"new\" id=\"payment-address-new\" />
\t  ";
            // line 23
            echo ($context["text_address_new"] ?? null);
            echo "</label>
\t</div>
</div>
";
        } else {
            // line 26
            echo "   
  <input type=\"radio\" name=\"payment_address\" value=\"new\" id=\"payment-address-new\" class=\"hide\" checked=\"checked\" />
";
        }
        // line 29
        echo "<div id=\"payment-new\" style=\"display: ";
        echo ((($context["addresses"] ?? null)) ? ("none") : ("block"));
        echo ";\">
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 31
            if (($context["field"] == "country")) {
                echo " 
    ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 32), "display", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 33), "required", [], "any", false, false, false, 33)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 34
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-payment-country\">
\t  ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 37
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 37) == ($context["country_id"] ?? null))) {
                            echo " 
\t\t<option value=\"";
                            // line 38
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 38);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 38);
                            echo "</option>
\t\t";
                        } else {
                            // line 39
                            echo "   
\t\t<option value=\"";
                            // line 40
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 40);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 40);
                            echo "</option>
\t\t";
                        }
                        // line 42
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 45
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 48
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 48) == ($context["country_id"] ?? null))) {
                            echo " 
\t  <option value=\"";
                            // line 49
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 49);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 49);
                            echo "</option>
\t  ";
                        } else {
                            // line 50
                            echo "   
\t  <option value=\"";
                            // line 51
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 51);
                            echo "</option>
\t  ";
                        }
                        // line 53
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t</select>
\t";
                }
                // line 56
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                // line 57
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 57), "display", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 58), "required", [], "any", false, false, false, 58)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 59
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-payment-zone\"></select>
\t</div>
\t";
                } else {
                    // line 62
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 65
                echo "  ";
            } else {
                echo "   
    ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 66), "display", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "\t<div";
                    echo ((($context["field"] == "postcode")) ? (" id=\"payment-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 67), "required", [], "any", false, false, false, 67)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-payment-";
                    // line 68
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 68);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 69
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 69), "placeholder", [], "any", false, false, false, 69);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 69), "default", [], "any", false, false, false, 69);
                    echo "\" class=\"form-control\"  id=\"input-payment-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 71
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 72
                    echo $context["field"];
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 72), "default", [], "any", false, false, false, 72);
                    echo "\" class=\"hide\" />
\t";
                }
                // line 73
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-payment\">
  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 79) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 80);
                echo "\" id=\"payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                echo "\">
\t  <label class=\"control-label\" for=\"input-payment-custom-field";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                echo "</label>
\t  ";
                // line 82
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 82) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 83);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 84
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 86
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 86), "custom_field_id", [], "any", false, false, false, 86) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 86), "custom_field_id", [], "any", false, false, false, 86)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 87
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 87);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 88
                            echo "   
\t\t  <option value=\"";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 89);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 89);
                            echo "</option>
\t\t  ";
                        }
                        // line 91
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "\t\t</select>
\t  ";
                }
                // line 94
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "radio")) {
                    echo " 
\t\t";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 97
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 97), "custom_field_id", [], "any", false, false, false, 97) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 97), "custom_field_id", [], "any", false, false, false, 97)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 99
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 99);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 100
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 101
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 103
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                            echo "\" />
\t\t\t  ";
                            // line 104
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                            echo "</label>
\t\t\t";
                        }
                        // line 106
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "\t  ";
                }
                // line 109
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "checkbox")) {
                    echo " 
\t\t";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 112
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 112), "custom_field_id", [], "any", false, false, false, 112) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 112), "custom_field_id", [], "any", false, false, false, 112)))) {
                            // line 113
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 114
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 115
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 116
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 118
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 118);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 118);
                            echo "\" />
\t\t\t  ";
                            // line 119
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 119);
                            echo "</label>
\t\t\t";
                        }
                        // line 120
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "\t  ";
                }
                // line 124
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 125);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 125)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 126
                echo " 
\t  ";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 128);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 128)));
                    echo "</textarea>
\t  ";
                }
                // line 129
                echo " 
\t  ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 134
                echo " 
\t  ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 135) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 136);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 136)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 137
                echo " 
\t  ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "]\" value=\"";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 139)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 140
                echo " 
\t  ";
                // line 141
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 143
                echo " 
    </div>
  ";
            }
            // line 146
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "</div>
</div>
</div>
<script type=\"text/javascript\"><!--
// Payment address form function
\$(document).ready(function() {
\t\$('#payment-address input[name=\\'payment_address\\']').on('change', function() {
\t\tif (this.value == 'new') {
\t\t\t\$('#payment-existing').slideUp();
\t\t\t\$('#payment-new').slideDown();

\t\t\tsetTimeout(function() {
\t\t\t\t\$('#payment-address select[name=\\'country_id\\']').trigger('change');
\t\t\t}, 200);
\t\t} else {
\t\t\t\$('#payment-existing').slideDown();
\t\t\t\$('#payment-new').slideUp();
\t\t\t
\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t}
\t});
\t
\t\$('#payment-address input[name=\\'payment_address\\']:checked').trigger('change');

\t// Sort the custom fields
\t\$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#payment-new .col-sm-6').length) {
\t\t\t\$('#payment-new .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);
\t\t
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('#payment-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadPaymentMethod();
\t});

\t\$('#payment-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#payment-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#payment-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-postcode-required').removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '';

\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 262
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 269
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#payment-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 274
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 278
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'address_id\\']').on('change', function() {
\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\treloadPaymentMethod();
\t\t} else {
\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 278,  774 => 274,  766 => 269,  756 => 262,  639 => 147,  633 => 146,  628 => 143,  615 => 142,  611 => 141,  608 => 140,  595 => 139,  591 => 138,  588 => 137,  575 => 136,  571 => 135,  568 => 134,  559 => 133,  551 => 132,  546 => 130,  543 => 129,  530 => 128,  526 => 127,  523 => 126,  510 => 125,  505 => 124,  502 => 123,  494 => 120,  489 => 119,  481 => 118,  477 => 116,  472 => 115,  464 => 114,  461 => 113,  459 => 112,  452 => 110,  447 => 109,  444 => 108,  437 => 106,  432 => 104,  424 => 103,  420 => 101,  415 => 100,  407 => 99,  402 => 97,  395 => 95,  390 => 94,  386 => 92,  380 => 91,  373 => 89,  370 => 88,  363 => 87,  359 => 86,  353 => 85,  349 => 84,  341 => 83,  337 => 82,  331 => 81,  325 => 80,  321 => 79,  315 => 78,  311 => 76,  303 => 73,  296 => 72,  293 => 71,  281 => 69,  275 => 68,  268 => 67,  266 => 66,  261 => 65,  256 => 62,  249 => 59,  244 => 58,  241 => 57,  238 => 56,  234 => 54,  228 => 53,  221 => 51,  218 => 50,  211 => 49,  207 => 48,  201 => 47,  197 => 45,  192 => 43,  186 => 42,  179 => 40,  176 => 39,  169 => 38,  165 => 37,  159 => 36,  154 => 34,  149 => 33,  147 => 32,  143 => 31,  137 => 30,  132 => 29,  127 => 26,  120 => 23,  114 => 19,  107 => 17,  88 => 16,  85 => 15,  66 => 14,  62 => 13,  56 => 12,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/payment_address.twig", "");
    }
}
