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

/* basel/template/extension/quickcheckout/guest.twig */
class __TwigTemplate_75b2a877f5a0203bb188fe52684bb9bf38a0d0ce9a2881f667979f12f5644217 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 3
            if (($context["field"] == "country")) {
                // line 4
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 4), "display", [], "any", false, false, false, 4)) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 5
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 5), "required", [], "any", false, false, false, 5)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 6
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-payment-country\">
\t  ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 9
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 9) == ($context["country_id"] ?? null))) {
                            echo " 
\t\t<option value=\"";
                            // line 10
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 10);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 10);
                            echo "</option>
\t\t";
                        } else {
                            // line 11
                            echo "   
\t\t<option value=\"";
                            // line 12
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 12);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 12);
                            echo "</option>
\t\t";
                        }
                        // line 14
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 17
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 20
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 20) == ($context["country_id"] ?? null))) {
                            echo " 
\t  <option value=\"";
                            // line 21
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 21);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 21);
                            echo "</option>
\t  ";
                        } else {
                            // line 22
                            echo "   
\t  <option value=\"";
                            // line 23
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 23);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 23);
                            echo "</option>
\t  ";
                        }
                        // line 25
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t</select>
\t";
                }
                // line 28
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                echo " 
    ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 29), "display", [], "any", false, false, false, 29)) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 30
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 30), "required", [], "any", false, false, false, 30)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 31
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-payment-zone\"></select>
\t</div>
\t";
                } else {
                    // line 34
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 36
                echo " 
  ";
            } elseif ((            // line 37
$context["field"] == "customer_group")) {
                echo " 
    ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 38), "display", [], "any", false, false, false, 38)) {
                    echo "  
\t<div class=\"col-sm-6 required\"";
                    // line 39
                    echo (((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) ? (" style=\"display:none !important\"") : (""));
                    echo ">
\t  <label class=\"control-label\">";
                    // line 40
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</label>
\t  <select name=\"customer_group_id\" class=\"form-control\" id=\"input-payment-customer-group\">
\t\t";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43) == ($context["customer_group_id"] ?? null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 43);
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo " 
\t  </select>
\t</div>
\t";
                } else {
                    // line 47
                    echo "   
\t  <select name=\"customer_group_id\" class=\"hide\">
\t\t";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50) == ($context["customer_group_id"] ?? null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 50);
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo " 
\t  </select>
\t";
                }
                // line 54
                echo "  ";
            } else {
                echo "   
    ";
                // line 55
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 55), "display", [], "any", false, false, false, 55)) {
                    echo "  
\t<div";
                    // line 56
                    echo ((($context["field"] == "postcode")) ? (" id=\"payment-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 56), "required", [], "any", false, false, false, 56)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-payment-";
                    // line 57
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 57);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 58
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 58), "placeholder", [], "any", false, false, false, 58);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 58)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 58)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 58), "default", [], "any", false, false, false, 58)));
                    echo "\" class=\"form-control\"  id=\"input-payment-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 60
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 61
                    echo $context["field"];
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 61)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 61)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 61), "default", [], "any", false, false, false, 61)));
                    echo "\" class=\"hide\" />
\t";
                }
                // line 63
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-payment\">
  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 68
            if (((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 68) == "account") || (twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 68) == "address"))) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 69);
                echo "\" id=\"payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                echo "\">
\t  <label class=\"control-label\" for=\"input-payment-custom-field";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 70);
                echo "</label>
\t  ";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 71) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 72);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 73
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 75
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 75), "custom_field_id", [], "any", false, false, false, 75) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 75) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 75), "custom_field_id", [], "any", false, false, false, 75)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 76
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 76);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 76);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 77
                            echo "   
\t\t  <option value=\"";
                            // line 78
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 78);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 78);
                            echo "</option>
\t\t  ";
                        }
                        // line 80
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "\t\t</select>
\t  ";
                }
                // line 83
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 83) == "radio")) {
                    echo " 
\t\t";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 86
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 86), "custom_field_id", [], "any", false, false, false, 86) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 86), "custom_field_id", [], "any", false, false, false, 86)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 88);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 89);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 90
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 92
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 92);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                            echo "\" />
\t\t\t  ";
                            // line 93
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 93);
                            echo "</label>
\t\t\t";
                        }
                        // line 95
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "\t  ";
                }
                // line 98
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 98) == "checkbox")) {
                    echo " 
\t\t";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["custom_field"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 101
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 101), "custom_field_id", [], "any", false, false, false, 101) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest_custom_field"] ?? null), "custom_field", [], "any", false, false, false, 101), "custom_field_id", [], "any", false, false, false, 101)))) {
                            // line 102
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 103
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 104
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 105
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 107
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 107);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107);
                            echo "\" />
\t\t\t  ";
                            // line 108
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 108);
                            echo "</label>
\t\t\t";
                        }
                        // line 109
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "\t  ";
                }
                // line 113
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "]\" value=\"";
                    echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 114)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 115
                echo " 
\t  ";
                // line 116
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 116) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 117);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 117)));
                    echo "</textarea>
\t  ";
                }
                // line 118
                echo " 
\t  ";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 122);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "]\" value=\"";
                    echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 123
                echo " 
\t  ";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 125);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 125)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 126
                echo " 
\t  ";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 128);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "]\" value=\"";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 128)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 129
                echo " 
\t  ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 132
                echo " 
    </div>
  ";
            }
            // line 135
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "</div>
<div style=\"clear:both;\"></div>
<div class=\"labels-holder\">
  ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "display", [], "any", false, false, false, 139)) {
            echo " 
\t";
            // line 140
            if (( !($context["guest_checkout"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "required", [], "any", false, false, false, 140))) {
                echo " 
\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" checked=\"checked\" />
\t";
            } else {
                // line 143
                echo "\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\"";
                echo ((($context["create_account"] ?? null)) ? (" checked=\"checked\"") : (""));
                echo " />
\t  <label for=\"create\">";
                // line 144
                echo ($context["text_create_account"] ?? null);
                echo "</label><br />
\t";
            }
            // line 145
            echo " 
\t<div id=\"create_account\">";
            // line 146
            echo ($context["register"] ?? null);
            echo "</div>
  ";
        } else {
            // line 148
            echo "    <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" />
  ";
        }
        // line 150
        echo "  ";
        if (($context["shipping_required"] ?? null)) {
            echo " 
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\"";
            // line 151
            echo ((($context["shipping_address"] ?? null)) ? (" checked=\"checked\"") : (""));
            echo " />
    <label for=\"shipping\">";
            // line 152
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
  ";
        } else {
            // line 153
            echo "   
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\" checked=\"checked\" class=\"hide\" />
  ";
        }
        // line 156
        echo "</div>

</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t// Sort the custom fields
\t\$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#payment-address .custom-field').hide();
\t\t\t\t\$('#payment-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
        // line 197
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t\t\$('#shipping-address .custom-field').hide();
\t\t\t\t\$('#shipping-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
        }
        // line 212
        echo " 
\t\t\t},
\t\t\t";
        // line 214
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 218
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').trigger('change');

\t\$('#payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t
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
\t\t\t},\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#payment-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-postcode-required').removeClass('required');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar html = '';
\t\t\t\t
\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 296
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 303
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#payment-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 308
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 312
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'country_id\\']').trigger('change');

\t";
        // line 318
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t// Guest Shipping Form
\t\t\$('#payment-address input[name=\\'shipping_address\\']').on('change', function() {
\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\$('#shipping-address').slideUp('slow');

\t\t\t\t";
            // line 324
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\treloadShippingMethod('payment');
\t\t\t\t";
            }
            // line 326
            echo " 
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping&customer_group_id=' + \$('#payment-address select[name=\\'customer_group_id\\']').val(),
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcache: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t// Nothing at the moment
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#shipping-address .quickcheckout-content').html(html);
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#shipping-address').slideDown('slow');
\t\t\t\t\t},
\t\t\t\t\t";
            // line 340
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t\t";
            }
            // line 344
            echo " 
\t\t\t\t});
\t\t\t}
\t\t});
\t\t
\t\t";
            // line 349
            if (($context["shipping_address"] ?? null)) {
                echo " 
\t\t\$('#shipping-address').hide();
\t\t";
            } else {
                // line 351
                echo "   
\t\t\$('#payment-address input[name=\\'shipping_address\\']').trigger('change');
\t\t";
            }
            // line 353
            echo " 
\t";
        }
        // line 355
        echo "
\t\$('#payment-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadPaymentMethod();
\t\t
\t\t";
        // line 359
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\treloadShippingMethod('payment');
\t\t}
\t\t";
        }
        // line 363
        echo " 
\t});

\t// Create account
\t\$('#payment-address input[name=\\'create_account\\']').on('change', function() {
\t\tif (\$('#payment-address input[name=\\'create_account\\']:checked').val()) {
\t\t\t\$('#create_account').slideDown('slow');
\t\t} else {
\t\t\t\$('#create_account').slideUp('slow');
\t\t}
\t});

\t";
        // line 375
        if (((($context["create_account"] ?? null) ||  !($context["guest_checkout"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "required", [], "any", false, false, false, 375))) {
            echo " 
\t\$('#create_account').show();
\t";
        } else {
            // line 377
            echo "   
\t\$('#create_account').hide();
\t";
        }
        // line 380
        echo "});
//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  959 => 380,  954 => 377,  948 => 375,  934 => 363,  926 => 359,  920 => 355,  916 => 353,  911 => 351,  905 => 349,  898 => 344,  890 => 340,  874 => 326,  868 => 324,  859 => 318,  851 => 312,  843 => 308,  835 => 303,  825 => 296,  745 => 218,  737 => 214,  733 => 212,  714 => 197,  671 => 156,  666 => 153,  661 => 152,  657 => 151,  652 => 150,  648 => 148,  643 => 146,  640 => 145,  635 => 144,  630 => 143,  624 => 140,  620 => 139,  615 => 136,  609 => 135,  604 => 132,  591 => 131,  587 => 130,  584 => 129,  571 => 128,  567 => 127,  564 => 126,  551 => 125,  547 => 124,  544 => 123,  535 => 122,  527 => 121,  522 => 119,  519 => 118,  506 => 117,  502 => 116,  499 => 115,  486 => 114,  481 => 113,  478 => 112,  470 => 109,  465 => 108,  457 => 107,  453 => 105,  448 => 104,  440 => 103,  437 => 102,  435 => 101,  428 => 99,  423 => 98,  420 => 97,  413 => 95,  408 => 93,  400 => 92,  396 => 90,  391 => 89,  383 => 88,  378 => 86,  371 => 84,  366 => 83,  362 => 81,  356 => 80,  349 => 78,  346 => 77,  339 => 76,  335 => 75,  329 => 74,  325 => 73,  317 => 72,  313 => 71,  307 => 70,  301 => 69,  297 => 68,  291 => 67,  287 => 65,  280 => 63,  273 => 61,  270 => 60,  258 => 58,  252 => 57,  246 => 56,  242 => 55,  237 => 54,  232 => 51,  220 => 50,  214 => 49,  210 => 47,  204 => 44,  192 => 43,  186 => 42,  181 => 40,  177 => 39,  173 => 38,  169 => 37,  166 => 36,  161 => 34,  154 => 31,  150 => 30,  146 => 29,  141 => 28,  137 => 26,  131 => 25,  124 => 23,  121 => 22,  114 => 21,  110 => 20,  104 => 19,  100 => 17,  95 => 15,  89 => 14,  82 => 12,  79 => 11,  72 => 10,  68 => 9,  62 => 8,  57 => 6,  53 => 5,  48 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/guest.twig", "");
    }
}
