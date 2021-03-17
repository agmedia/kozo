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

/* sale/order_info.twig */
class __TwigTemplate_7153c11db2808137b9daeb5ff3138839eb85fc791b54774783b45c54a449e53c extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["invoice"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        echo ($context["shipping"] ?? null);
        echo "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        echo ($context["edit"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 19
        echo ($context["text_order_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 24
        echo ($context["text_store"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 25
        echo ($context["store_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["store_name"] ?? null);
        echo "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["text_date_added"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 29
        echo ($context["date_added"] ?? null);
        echo "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["text_payment_method"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>
                    ";
        // line 34
        echo ($context["payment_method"] ?? null);
        echo "
                    ";
        // line 35
        if ((($context["payment_method"] ?? null) == "Plaćanje pouzećem")) {
            // line 36
            echo "                        <input type=\"checkbox\" name=\"cod_paid\" value=\"1\" id=\"input-paid\" ";
            if (($context["paid_order"] ?? null)) {
                echo " checked ";
            }
            echo "style=\"margin-left: 12px; vertical-align: text-bottom;\" />
                    ";
        }
        // line 38
        echo "                </td>
              </tr>
              ";
        // line 40
        if (($context["shipping_method"] ?? null)) {
            // line 41
            echo "                <tr>
                  <td><button data-toggle=\"tooltip\" title=\"";
            // line 42
            echo ($context["text_shipping_method"] ?? null);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 43
            echo ($context["shipping_method"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 46
        echo "            </tbody>

          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 54
        echo ($context["text_customer_detail"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["text_customer"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 59
        if (($context["customer"] ?? null)) {
            echo " <a href=\"";
            echo ($context["customer"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "</a> ";
        } else {
            // line 60
            echo "                  ";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "
                ";
        }
        // line 61
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 64
        echo ($context["text_customer_group"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 65
        echo ($context["customer_group"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 68
        echo ($context["text_email"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 69
        echo ($context["email"] ?? null);
        echo "\">";
        echo ($context["email"] ?? null);
        echo "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["text_telephone"] ?? null);
        echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 73
        echo ($context["telephone"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 81
        echo ($context["text_option"] ?? null);
        echo "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 86
        echo ($context["text_invoice"] ?? null);
        echo "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 87
        echo ($context["invoice_no"] ?? null);
        echo "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 88
        if ( !($context["invoice_no"] ?? null)) {
            // line 89
            echo "                    <button id=\"button-invoice\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 91
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 92
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 95
        echo ($context["text_reward"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 96
        echo ($context["reward"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 97
        if ((($context["customer"] ?? null) && ($context["reward"] ?? null))) {
            // line 98
            echo "                    ";
            if ( !($context["reward_total"] ?? null)) {
                // line 99
                echo "                      <button id=\"button-reward-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 101
                echo "                      <button id=\"button-reward-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reward_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 103
            echo "                  ";
        } else {
            // line 104
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 105
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 108
        echo ($context["text_affiliate"] ?? null);
        echo "
                  ";
        // line 109
        if (($context["affiliate"] ?? null)) {
            // line 110
            echo "                    (<a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["affiliate_firstname"] ?? null);
            echo " ";
            echo ($context["affiliate_lastname"] ?? null);
            echo "</a>)
                  ";
        }
        // line 111
        echo "</td>
                <td class=\"text-right\">";
        // line 112
        echo ($context["commission"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 113
        if (($context["affiliate"] ?? null)) {
            // line 114
            echo "                    ";
            if ( !($context["commission_total"] ?? null)) {
                // line 115
                echo "                      <button id=\"button-commission-add\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_add"] ?? null);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 117
                echo "                      <button id=\"button-commission-remove\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_commission_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 119
            echo "                  ";
        } else {
            // line 120
            echo "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 121
        echo "</td>
              </tr>
              <tr>
                  ";
        // line 124
        if ( !($context["order_service"] ?? null)) {
            // line 125
            echo "                      <td id=\"erp_msg\">Pošaljite račun u ERP-u</td>
                      <td id=\"erp\" class=\"text-right\"></td>
                      <td style=\"width: 1%;\" class=\"text-center\">
                          <button id=\"button-erp\" data-loading-text=\"";
            // line 128
            echo ($context["text_loading"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_generate"] ?? null);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-send\"></i></button>
                      </td>
                  ";
        } else {
            // line 131
            echo "                      <td>Račun je poslan u ERP</td>
                      <td id=\"erp\" class=\"text-right\">";
            // line 132
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["order_service"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["response"] ?? null) : null);
            echo "</td>
                      <td style=\"width: 1%;\" class=\"text-center\">
                          <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                      </td>
                  ";
        }
        // line 137
        echo "              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 145
        echo ($context["text_order"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 151
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
              ";
        // line 152
        if (($context["shipping_method"] ?? null)) {
            // line 153
            echo "                <td style=\"width: 50%;\" class=\"text-left\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 154
        echo " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 158
        echo ($context["payment_address"] ?? null);
        echo "</td>
              ";
        // line 159
        if (($context["shipping_method"] ?? null)) {
            // line 160
            echo "                <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
              ";
        }
        // line 161
        echo " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 167
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 168
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 169
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 170
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 171
        echo ($context["column_total"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 177
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 178
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 178);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 178);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 179
                echo "                    <br/>
                    ";
                // line 180
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) != "file")) {
                    // line 181
                    echo "                      &nbsp;
                      <small> - ";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 182);
                    echo "</small> ";
                } else {
                    // line 183
                    echo "                      &nbsp;
                      <small> - ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo ": <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 184);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 184);
                    echo "</a></small> ";
                }
                // line 185
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\">";
            // line 186
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 186);
            echo "</td>
                <td class=\"text-right\">";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 187);
            echo "</td>
                <td class=\"text-right\">";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 188);
            echo "</td>
                <td class=\"text-right\">";
            // line 189
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 189);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 193
            echo "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 194
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 194);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 194);
            echo "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 197
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 197);
            echo "</td>
                <td class=\"text-right\">";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 198);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 202
            echo "              <tr>
                <td colspan=\"4\" class=\"text-right\">";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 203);
            echo "</td>
                <td class=\"text-right\">";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 204);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "          </tbody>

        </table>
        ";
        // line 210
        if (($context["comment"] ?? null)) {
            // line 211
            echo "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 214
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 219
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 223
        echo " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 227
        echo ($context["text_history"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 231
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 232
        echo ($context["tab_additional"] ?? null);
        echo "</a></li>
          ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 234
            echo "            <li><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 234);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 234);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 242
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 245
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">


                      ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 251
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 251) == ($context["order_status_id"] ?? null))) {
                // line 252
                echo "

                          <option value=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 254);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 254);
                echo "</option>


                        ";
            } else {
                // line 258
                echo "

                          <option value=\"";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 260);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 260);
                echo "</option>


                        ";
            }
            // line 264
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "

                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 271
        echo ($context["help_override"] ?? null);
        echo "\">";
        echo ($context["entry_override"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 279
        echo ($context["entry_notify"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 287
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 295
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_history_add"] ?? null);
        echo "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 298
        if (($context["account_custom_fields"] ?? null)) {
            // line 299
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 303
            echo ($context["text_account_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 309
                echo "                      <tr>
                        <td>";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 310);
                echo "</td>
                        <td>";
                // line 311
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 311);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 319
        echo "            ";
        if (($context["payment_custom_fields"] ?? null)) {
            // line 320
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 324
            echo ($context["text_payment_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 330
                echo "                      <tr>
                        <td>";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 331);
                echo "</td>
                        <td>";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 332);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 340
        echo "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 341
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 345
            echo ($context["text_shipping_custom_field"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 351
                echo "                      <tr>
                        <td>";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 352);
                echo "</td>
                        <td>";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 353);
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 361
        echo "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 365
        echo ($context["text_browser"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 370
        echo ($context["text_ip"] ?? null);
        echo "</td>
                    <td>";
        // line 371
        echo ($context["ip"] ?? null);
        echo "</td>
                  </tr>
                  ";
        // line 373
        if (($context["forwarded_ip"] ?? null)) {
            // line 374
            echo "                    <tr>
                      <td>";
            // line 375
            echo ($context["text_forwarded_ip"] ?? null);
            echo "</td>
                      <td>";
            // line 376
            echo ($context["forwarded_ip"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 379
        echo "                  <tr>
                    <td>";
        // line 380
        echo ($context["text_user_agent"] ?? null);
        echo "</td>
                    <td>";
        // line 381
        echo ($context["user_agent"] ?? null);
        echo "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 384
        echo ($context["text_accept_language"] ?? null);
        echo "</td>
                    <td>";
        // line 385
        echo ($context["accept_language"] ?? null);
        echo "</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 393
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 393);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 393);
            echo "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    \$(document).delegate('#input-paid', 'click', function(e) {
      console.log(e.target.checked)
      \$.ajax({
        url: 'index.php?route=sale/order/orderPaid&user_token=";
        // line 402
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "&checked=' + e.target.checked,
        dataType: 'json',
        success: function(json) {
          alert('Narudžba označena!');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$(document).delegate('#button-erp', 'click', function() {
      \$.ajax({
        url: 'index.php?route=sale/order/sendToErp&user_token=";
        // line 415
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function() {
          \$('#button-erp').button('loading');
        },
        complete: function() {
          \$('#button-erp').button('reset');
        },
        success: function(json) {
          \$('.alert-dismissible').remove();

          if (json['error']) {
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
          }

          if (json['invoice_no']) {
            \$('#erp').html(json['invoice_no']['ZAPIS']['BROJDOK']);
            \$('#erp_msg').html('Račun je poslan u ERP');

            \$('#button-erp').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });


  \$(document).delegate('#button-invoice', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 446
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-invoice').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-invoice').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['invoice_no']) {
\t\t\t\t  \$('#invoice').html(json['invoice_no']);

\t\t\t\t  \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addreward&user_token=";
        // line 475
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 494
        echo ($context["button_reward_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removereward&user_token=";
        // line 505
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 524
        echo ($context["button_reward_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addcommission&user_token=";
        // line 535
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 554
        echo ($context["button_commission_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removecommission&user_token=";
        // line 565
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 584
        echo ($context["button_commission_add"] ?? null);
        echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  var api_token = '';

  \$.ajax({
\t  url: '";
        // line 596
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/login',
\t  type: 'post',
\t  dataType: 'json',
\t  data: 'key=";
        // line 599
        echo ($context["api_key"] ?? null);
        echo "',
\t  crossDomain: true,
\t  success: function(json) {
\t\t  \$('.alert').remove();
\t\t  if (json['error']) {
\t\t\t  if (json['error']['key']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }
\t\t\t  if (json['error']['ip']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 608
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        echo ($context["button_ip_add"] ?? null);
        echo "</button></div>');
\t\t\t  }
\t\t  }
\t\t  if (json['token']) {
\t\t\t  api_token = json['token'];
\t\t  }
\t  },
\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t  }
  });

  \$('#history').delegate('.pagination a', 'click', function(e) {
\t  e.preventDefault();

\t  \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 626
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function() {
\t  \$.ajax({
\t\t  url: '";
        // line 630
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  data: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\t  beforeSend: function() {
\t\t\t  \$('#button-history').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-history').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 648
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

\t\t\t\t  \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t  \$('textarea[name=\\'comment\\']').val('');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });
  //--></script>
</div>
";
        // line 662
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1334 => 662,  1315 => 648,  1288 => 630,  1279 => 626,  1256 => 608,  1244 => 599,  1238 => 596,  1223 => 584,  1199 => 565,  1185 => 554,  1161 => 535,  1147 => 524,  1123 => 505,  1109 => 494,  1085 => 475,  1051 => 446,  1015 => 415,  997 => 402,  987 => 394,  976 => 393,  972 => 392,  962 => 385,  958 => 384,  952 => 381,  948 => 380,  945 => 379,  939 => 376,  935 => 375,  932 => 374,  930 => 373,  925 => 371,  921 => 370,  913 => 365,  907 => 361,  900 => 356,  891 => 353,  887 => 352,  884 => 351,  880 => 350,  872 => 345,  866 => 341,  863 => 340,  856 => 335,  847 => 332,  843 => 331,  840 => 330,  836 => 329,  828 => 324,  822 => 320,  819 => 319,  812 => 314,  803 => 311,  799 => 310,  796 => 309,  792 => 308,  784 => 303,  778 => 299,  776 => 298,  768 => 295,  757 => 287,  746 => 279,  733 => 271,  725 => 265,  719 => 264,  710 => 260,  706 => 258,  697 => 254,  693 => 252,  690 => 251,  686 => 250,  678 => 245,  672 => 242,  664 => 236,  653 => 234,  649 => 233,  645 => 232,  641 => 231,  634 => 227,  628 => 223,  620 => 219,  612 => 214,  607 => 211,  605 => 210,  600 => 207,  591 => 204,  587 => 203,  584 => 202,  579 => 201,  570 => 198,  566 => 197,  558 => 194,  555 => 193,  550 => 192,  541 => 189,  537 => 188,  533 => 187,  529 => 186,  521 => 185,  513 => 184,  510 => 183,  504 => 182,  501 => 181,  499 => 180,  496 => 179,  488 => 178,  485 => 177,  481 => 176,  473 => 171,  469 => 170,  465 => 169,  461 => 168,  457 => 167,  449 => 161,  443 => 160,  441 => 159,  437 => 158,  431 => 154,  425 => 153,  423 => 152,  419 => 151,  410 => 145,  400 => 137,  392 => 132,  389 => 131,  381 => 128,  376 => 125,  374 => 124,  369 => 121,  365 => 120,  362 => 119,  354 => 117,  346 => 115,  343 => 114,  341 => 113,  337 => 112,  334 => 111,  324 => 110,  322 => 109,  318 => 108,  313 => 105,  309 => 104,  306 => 103,  298 => 101,  290 => 99,  287 => 98,  285 => 97,  281 => 96,  277 => 95,  272 => 92,  268 => 91,  260 => 89,  258 => 88,  254 => 87,  250 => 86,  242 => 81,  231 => 73,  227 => 72,  219 => 69,  215 => 68,  209 => 65,  205 => 64,  200 => 61,  192 => 60,  182 => 59,  178 => 58,  171 => 54,  161 => 46,  155 => 43,  151 => 42,  148 => 41,  146 => 40,  142 => 38,  134 => 36,  132 => 35,  128 => 34,  123 => 32,  117 => 29,  113 => 28,  105 => 25,  101 => 24,  93 => 19,  83 => 11,  72 => 9,  68 => 8,  63 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
