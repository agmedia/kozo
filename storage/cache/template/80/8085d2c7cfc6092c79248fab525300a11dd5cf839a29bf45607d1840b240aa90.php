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

/* basel/template/extension/quickcheckout/shipping_address.twig */
class __TwigTemplate_886d9adc0d98a9fc503df41bc2d7a3ee718bec869c142454340c47e1b97e03f6 extends \Twig\Template
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
            // line 4
            echo "<div style=\"padding:0 10px\">
<div class=\"radio\">
  <label><input type=\"radio\" name=\"shipping_address\" value=\"existing\" id=\"shipping-address-existing\" checked=\"checked\" />
  ";
            // line 7
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
</div>
<div id=\"shipping-existing\">
  <select name=\"address_id\" class=\"form-control\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                echo " 
    ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12) == ($context["address_id"] ?? null))) {
                    echo " 
    <option value=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 13);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 13);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 13);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 13);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 13);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 13);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 13);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 13);
                    echo "</option>
    ";
                } else {
                    // line 14
                    echo "   
    <option value=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 15);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 15);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 15);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 15);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 15);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 15);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 15);
                    echo "</option>
    ";
                }
                // line 16
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  </select>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" />
  ";
            // line 22
            echo ($context["text_address_new"] ?? null);
            echo "</label>
</div>
</div>
";
        } else {
            // line 25
            echo "   
<input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" class=\"hide\" checked=\"checked\" />
";
        }
        // line 28
        echo "<div id=\"shipping-new\" style=\"display: ";
        echo ((($context["addresses"] ?? null)) ? ("none") : ("block"));
        echo ";\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 30
            if (($context["field"] == "country")) {
                echo " 
    ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 31), "display", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 32), "required", [], "any", false, false, false, 32)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 33
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-shipping-country\">
\t  ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 36
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 36) == ($context["country_id"] ?? null))) {
                            echo " 
\t\t<option value=\"";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 37);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 37);
                            echo "</option>
\t\t";
                        } else {
                            // line 38
                            echo "   
\t\t<option value=\"";
                            // line 39
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 39);
                            echo "</option>
\t\t";
                        }
                        // line 41
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 44
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 47
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 47) == ($context["country_id"] ?? null))) {
                            echo " 
\t  <option value=\"";
                            // line 48
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 48);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 48);
                            echo "</option>
\t  ";
                        } else {
                            // line 49
                            echo "   
\t  <option value=\"";
                            // line 50
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 50);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 50);
                            echo "</option>
\t  ";
                        }
                        // line 52
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "\t</select>
\t";
                }
                // line 55
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                // line 56
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 56), "display", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 57), "required", [], "any", false, false, false, 57)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 58
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-shipping-zone\"></select>
\t</div>
\t";
                } else {
                    // line 61
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 64
                echo "  ";
            } else {
                echo "   
    ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 65), "display", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "\t<div";
                    echo ((($context["field"] == "postcode")) ? (" id=\"shipping-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 66), "required", [], "any", false, false, false, 66)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-";
                    // line 67
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 67);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 68
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 68), "placeholder", [], "any", false, false, false, 68);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 68), "default", [], "any", false, false, false, 68);
                    echo "\" class=\"form-control\"  id=\"input-shipping-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 70
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 71
                    echo $context["field"];
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 71), "default", [], "any", false, false, false, 71);
                    echo "\" class=\"hide\" />
\t";
                }
                // line 72
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-shipping\">
  ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 78) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 79);
                echo "\" id=\"shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-custom-field";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 80);
                echo "</label>
\t  ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 82);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 83
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 85
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 85), "custom_field_id", [], "any", false, false, false, 85) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 85), "custom_field_id", [], "any", false, false, false, 85)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 86
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 87
                            echo "   
\t\t  <option value=\"";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                            echo "</option>
\t\t  ";
                        }
                        // line 90
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "\t\t</select>
\t  ";
                }
                // line 93
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "radio")) {
                    echo " 
\t\t";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 96
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 96), "custom_field_id", [], "any", false, false, false, 96) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 96), "custom_field_id", [], "any", false, false, false, 96)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 98
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 98);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 99
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 100
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 102
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                            echo "\" />
\t\t\t  ";
                            // line 103
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                            echo "</label>
\t\t\t";
                        }
                        // line 105
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "\t  ";
                }
                // line 108
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "checkbox")) {
                    echo " 
\t\t";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 111
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 111), "custom_field_id", [], "any", false, false, false, 111) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 111), "custom_field_id", [], "any", false, false, false, 111)))) {
                            // line 112
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 113
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 114
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 115
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 117
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 117);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 117);
                            echo "\" />
\t\t\t  ";
                            // line 118
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 118);
                            echo "</label>
\t\t\t";
                        }
                        // line 119
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "\t  ";
                }
                // line 123
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 124);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 124)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 125
                echo " 
\t  ";
                // line 126
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 127);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 127);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 127)));
                    echo "</textarea>
\t  ";
                }
                // line 128
                echo " 
\t  ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 132);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 133
                echo " 
\t  ";
                // line 134
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 134) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 135)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 136
                echo " 
\t  ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 138);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "]\" value=\"";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 138)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 139
                echo " 
\t  ";
                // line 140
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 142
                echo " 
    </div>
  ";
            }
            // line 145
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</div>
</div>
</div><!-- CLOSE WRAPPING BOX -->
<script type=\"text/javascript\"><!--
// Shipping address form functions
\$(document).ready(function() {
\t\$('#shipping-address input[name=\\'shipping_address\\']').on('change', function() {
\t\tif (this.value == 'new') {
\t\t\t\$('#shipping-existing').slideUp();
\t\t\t\$('#shipping-new').slideDown();
\t\t\t
\t\t\tsetTimeout(function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').trigger('change');
\t\t\t}, 200);
\t\t} else {
\t\t\t\$('#shipping-existing').slideDown();
\t\t\t\$('#shipping-new').slideUp();

\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
\t
\t\$('#shipping-address input[name=\\'shipping_address\\']:checked').trigger('change');

\t// Sort the custom fields
\t\$('#custom-field-shipping .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
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

\t\$('#shipping-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadShippingMethod('shipping');
\t});

\t\$('#shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#shipping-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#shipping-postcode-required').removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '';

\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 261
        echo ($context["zone_id"] ?? null);
        echo " ') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 268
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#shipping-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 273
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 277
        echo " 
\t\t});
\t});

\t\$('#shipping-address select[name=\\'address_id\\']').on('change', function() {
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\treloadShippingMethod('shipping');
\t\t} else {
\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 277,  773 => 273,  765 => 268,  755 => 261,  638 => 146,  632 => 145,  627 => 142,  614 => 141,  610 => 140,  607 => 139,  594 => 138,  590 => 137,  587 => 136,  574 => 135,  570 => 134,  567 => 133,  558 => 132,  550 => 131,  545 => 129,  542 => 128,  529 => 127,  525 => 126,  522 => 125,  509 => 124,  504 => 123,  501 => 122,  493 => 119,  488 => 118,  480 => 117,  476 => 115,  471 => 114,  463 => 113,  460 => 112,  458 => 111,  451 => 109,  446 => 108,  443 => 107,  436 => 105,  431 => 103,  423 => 102,  419 => 100,  414 => 99,  406 => 98,  401 => 96,  394 => 94,  389 => 93,  385 => 91,  379 => 90,  372 => 88,  369 => 87,  362 => 86,  358 => 85,  352 => 84,  348 => 83,  340 => 82,  336 => 81,  330 => 80,  324 => 79,  320 => 78,  314 => 77,  310 => 75,  302 => 72,  295 => 71,  292 => 70,  280 => 68,  274 => 67,  267 => 66,  265 => 65,  260 => 64,  255 => 61,  248 => 58,  243 => 57,  240 => 56,  237 => 55,  233 => 53,  227 => 52,  220 => 50,  217 => 49,  210 => 48,  206 => 47,  200 => 46,  196 => 44,  191 => 42,  185 => 41,  178 => 39,  175 => 38,  168 => 37,  164 => 36,  158 => 35,  153 => 33,  148 => 32,  146 => 31,  142 => 30,  136 => 29,  131 => 28,  126 => 25,  119 => 22,  113 => 18,  106 => 16,  87 => 15,  84 => 14,  65 => 13,  61 => 12,  55 => 11,  48 => 7,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/shipping_address.twig", "");
    }
}
