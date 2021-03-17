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

/* basel/template/account/order_info.twig */
class __TwigTemplate_b71767e2cad56d11183400fe4b35a4e624936d5a5328c3d1c94f4a926c7aa9c6 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 31
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">
            ";
        // line 37
        if (($context["invoice_no"] ?? null)) {
            // line 38
            echo "              <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br />
              ";
        }
        // line 40
        echo "              <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br />
              <b>";
        // line 41
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">
            ";
        // line 43
        if (($context["payment_method"] ?? null)) {
            // line 44
            echo "              <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br />
              ";
        }
        // line 46
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            // line 47
            echo "              <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
              ";
        }
        // line 48
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 55
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 56
        if (($context["shipping_address"] ?? null)) {
            // line 57
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 59
        echo "          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 63
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 64
        if (($context["shipping_address"] ?? null)) {
            // line 65
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 67
        echo "          </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered margin-b0\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 74
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left hidden-xs hidden-sm\">";
        // line 75
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
        // line 76
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
        // line 77
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 78
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 82
        echo "            </tr>
          </thead>
          <tbody>
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            echo "            <tr>
              <td class=\"text-left\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
            echo "
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 89
                echo "                <br />
                &nbsp;<small> - ";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 90);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 90);
                echo "</small>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "</td>
              <td class=\"text-left hidden-xs hidden-sm\">";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 92);
            echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 93);
            echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
            echo "</td>
              <td class=\"text-right\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 95);
            echo "</td>
              <td class=\"text-right\" style=\"white-space: nowrap;\">&nbsp;
              ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 97)) {
                // line 98
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 98);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"button-circle\"><i class=\"icon-refresh\"></i></a>
                ";
            }
            // line 100
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 100);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"button-circle\"><i class=\"icon-action-undo\"></i></a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 105
            echo "            <tr>
              <td class=\"text-left\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 106);
            echo "</td>
              <td class=\"text-left hidden-xs hidden-sm\"></td>
              <td class=\"text-right hidden-xs hidden-sm\">1</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 109);
            echo "</td>
              <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 110);
            echo "</td>
              ";
            // line 111
            if (($context["products"] ?? null)) {
                // line 112
                echo "              <td></td>
              ";
            }
            // line 114
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "          </tbody>
        </table>
        
        <table class=\"table totals table-bordered\">
        <tbody>
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 122
            echo "            <tr>
              <td><b>";
            // line 123
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 123);
            echo "</b></td>
              <td class=\"text-right\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 124);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "         </tbody>
         </table>
      </div>
      
      ";
        // line 131
        if (($context["comment"] ?? null)) {
            // line 132
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 135
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 140
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 145
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 146
            echo "      <br /><h2 class=\"margin-b10\">";
            echo ($context["text_history"] ?? null);
            echo "</h2>
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 150
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 151
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 152
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
            // line 156
            if (($context["histories"] ?? null)) {
                // line 157
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 158
                    echo "          <tr>
            <td class=\"text-left\">";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 159);
                    echo "</td>
            <td class=\"text-left\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 160);
                    echo "</td>
            <td class=\"text-left\">";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 161);
                    echo "</td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "          ";
            } else {
                // line 165
                echo "          <tr>
            <td colspan=\"3\" class=\"text-center\">";
                // line 166
                echo ($context["text_no_results"] ?? null);
                echo "</td>
          </tr>
          ";
            }
            // line 169
            echo "        </tbody>
      </table>
      ";
        }
        // line 172
        echo "      
      ";
        // line 173
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 174
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 176
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 176,  493 => 174,  489 => 173,  486 => 172,  481 => 169,  475 => 166,  472 => 165,  469 => 164,  460 => 161,  456 => 160,  452 => 159,  449 => 158,  444 => 157,  442 => 156,  435 => 152,  431 => 151,  427 => 150,  419 => 146,  416 => 145,  408 => 140,  400 => 135,  395 => 132,  393 => 131,  387 => 127,  378 => 124,  374 => 123,  371 => 122,  367 => 121,  360 => 116,  353 => 114,  349 => 112,  347 => 111,  343 => 110,  339 => 109,  333 => 106,  330 => 105,  325 => 104,  312 => 100,  304 => 98,  302 => 97,  297 => 95,  293 => 94,  289 => 93,  285 => 92,  282 => 91,  272 => 90,  269 => 89,  265 => 88,  261 => 87,  258 => 86,  254 => 85,  249 => 82,  245 => 80,  243 => 79,  239 => 78,  235 => 77,  231 => 76,  227 => 75,  223 => 74,  214 => 67,  208 => 65,  206 => 64,  202 => 63,  196 => 59,  190 => 57,  188 => 56,  184 => 55,  175 => 48,  167 => 47,  164 => 46,  156 => 44,  154 => 43,  147 => 41,  140 => 40,  132 => 38,  130 => 37,  121 => 31,  114 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/account/order_info.twig", "");
    }
}
