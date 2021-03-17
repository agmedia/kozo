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

/* basel/template/extension/quickcheckout/payment_method.twig */
class __TwigTemplate_82711d289aadffbd23897a4a8118e55a75952a6b85d388064738d92f67e3f418 extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            echo " 
<div class=\"alert alert-danger\">";
            // line 4
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 5
        echo " 
";
        // line 6
        if (($context["payment_methods"] ?? null)) {
            // line 7
            echo "<p>";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>
";
            // line 8
            if (($context["payment"] ?? null)) {
                // line 9
                echo "<table class=\"table\">
  ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
  <tr>
    <td>";
                    // line 12
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 12) == ($context["code"] ?? null))) {
                        echo " 
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 13
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                        echo "\" checked=\"checked\" />
      ";
                    } else {
                        // line 14
                        echo "   
      <input type=\"radio\" name=\"payment_method\" value=\"";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 15);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 15);
                        echo "\" />
      ";
                    }
                    // line 16
                    echo "</td>
    <td style=\"width:100%;padding-left:10px;\">
\t<label for=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 18);
                    echo "\">
\t";
                    // line 19
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment_logo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 19)] ?? null) : null)) {
                        echo " 
\t<img src=\"";
                        // line 20
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment_logo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 20)] ?? null) : null);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 20);
                        echo "\" />
\t";
                    }
                    // line 22
                    echo "\t";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 22);
                    echo "
\t</label>
\t</td>
\t 
  </tr>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "</table>
";
            } else {
                // line 29
                echo "   
  <select name=\"payment_method\" class=\"form-control\">
  ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    echo " 
\t";
                    // line 32
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 32) == ($context["code"] ?? null))) {
                        echo " 
      <option value=\"";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 33);
                        echo "\" selected=\"selected\">
      ";
                    } else {
                        // line 34
                        echo "   
      <option value=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 35);
                        echo "\">
      ";
                    }
                    // line 36
                    echo " 
    ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 37);
                    echo "</option>
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "  </select><br />
";
            }
            // line 41
            echo "<br />
";
        }
        // line 43
        if (($context["survey_survey"] ?? null)) {
            echo " 
<div";
            // line 44
            echo ((($context["survey_required"] ?? null)) ? (" class=\"required\"") : (""));
            echo ">
  <label class=\"control-label\">";
            // line 45
            echo ($context["text_survey"] ?? null);
            echo "</label>
  ";
            // line 46
            if (($context["survey_type"] ?? null)) {
                echo " 
  <select name=\"survey\" class=\"form-control\">
    <option value=\"\"></option>
    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["survey_answers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["survey_answer"]) {
                    echo " 
    ";
                    // line 50
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["survey_answer"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null)) {
                        echo " 
\t  ";
                        // line 51
                        if ((($context["survey"] ?? null) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["survey_answer"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null))) {
                            echo " 
      <option value=\"";
                            // line 52
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["survey_answer"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\" selected=\"selected\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["survey_answer"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        } else {
                            // line 53
                            echo "   
\t  <option value=\"";
                            // line 54
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["survey_answer"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null);
                            echo "\">";
                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["survey_answer"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
                            echo "</option>
      ";
                        }
                        // line 55
                        echo " 
\t";
                    }
                    // line 56
                    echo " 
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey_answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "</select><br />
  ";
            } else {
                // line 58
                echo "   
  <textarea name=\"survey\" class=\"form-control\" rows=\"1\">";
                // line 59
                echo ($context["survey"] ?? null);
                echo "</textarea><br /><br />
  ";
            }
            // line 61
            echo "</div>
";
        } else {
            // line 62
            echo "   
<textarea name=\"survey\" class=\"hide\">";
            // line 63
            echo ($context["survey"] ?? null);
            echo "</textarea>
";
        }
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "display", [], "any", false, false, false, 65)) {
            echo " 
";
            // line 66
            if (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "required", [], "any", false, false, false, 66)) {
                echo "<span class=\"required\">*</span> ";
            }
            echo ($context["text_comments"] ?? null);
            echo "
<textarea name=\"comment\" rows=\"4\" class=\"form-control\" placeholder=\"";
            // line 67
            echo ((twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "placeholder", [], "any", false, false, false, 67)) ? (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "placeholder", [], "any", false, false, false, 67)) : (""));
            echo "\">";
            echo ((($context["comment"] ?? null)) ? (($context["comment"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["field_comment"] ?? null), "default", [], "any", false, false, false, 67)));
            echo "</textarea>
";
        } else {
            // line 68
            echo "   
<textarea name=\"comment\" class=\"hide\"></textarea>
";
        }
        // line 71
        echo "</div>
<script type=\"text/javascript\"><!--
\$('#payment-method input[name=\\'payment_method\\'], #payment-method select[name=\\'payment_method\\']').on('change', function() {
\t";
        // line 74
        if ( !($context["logged"] ?? null)) {
            // line 75
            echo "\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/payment_method/set',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(html) {
\t\t\t\t";
            // line 82
            if ((($context["cart"] ?? null) && ($context["payment_reload"] ?? null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 84
            echo " 
\t\t\t},
\t\t\t";
            // line 86
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 90
            echo " 
\t\t});
\t";
        } else {
            // line 92
            echo "   
\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set';
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
\t\t} else {
\t\t\tvar url = 'index.php?route=extension/quickcheckout/payment_method/set&address_id=' + \$('#payment-address select[name=\\'address_id\\']').val();
\t\t\tvar post_data = \$('#payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea');
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
            // line 108
            if ((($context["cart"] ?? null) && ($context["payment_reload"] ?? null))) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 110
            echo " 
\t\t\t},
\t\t\t";
            // line 112
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 116
            echo " 
\t\t});
\t";
        }
        // line 119
        echo "});

";
        // line 121
        if (($context["payment_reload"] ?? null)) {
            echo " 
\$(document).ready(function() {
\t\$('#payment-method input[name=\\'payment_method\\']:checked, #payment-method select[name=\\'payment_method\\']').trigger('change');
});
";
        }
        // line 125
        echo " 
//--></script>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 125,  366 => 121,  362 => 119,  357 => 116,  349 => 112,  345 => 110,  339 => 108,  321 => 92,  316 => 90,  308 => 86,  304 => 84,  298 => 82,  289 => 75,  287 => 74,  282 => 71,  277 => 68,  270 => 67,  263 => 66,  259 => 65,  254 => 63,  251 => 62,  247 => 61,  242 => 59,  239 => 58,  235 => 57,  228 => 56,  224 => 55,  217 => 54,  214 => 53,  207 => 52,  203 => 51,  199 => 50,  193 => 49,  187 => 46,  183 => 45,  179 => 44,  175 => 43,  171 => 41,  167 => 39,  159 => 37,  156 => 36,  151 => 35,  148 => 34,  143 => 33,  139 => 32,  133 => 31,  129 => 29,  125 => 28,  112 => 22,  105 => 20,  101 => 19,  97 => 18,  93 => 16,  86 => 15,  83 => 14,  76 => 13,  72 => 12,  65 => 10,  62 => 9,  60 => 8,  55 => 7,  53 => 6,  50 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/payment_method.twig", "");
    }
}
