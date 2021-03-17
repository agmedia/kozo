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

/* sale/order_list.twig */
class __TwigTemplate_81f30f30154c8f3f7177b39475cd39bc8da3f4d360efb237b3c1bd1a79d54249 extends \Twig\Template
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
            <div class=\"pull-right\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
                <button type=\"submit\" id=\"button-shipping-intereuropa\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping_intereuropa_excel"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"Ispis excel tablice za Intereuropu\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i> Intereuropa</button>
                <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
                <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 9
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
                <a href=\"";
        // line 10
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
            <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"row\">
            <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-order-id\">";
        // line 37
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 38
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-customer\">";
        // line 41
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 42
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-order-status\">";
        // line 45
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                                <option value=\"\"></option>

                                ";
        // line 49
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 50
            echo "
                                    <option value=\"0\" selected=\"selected\">";
            // line 51
            echo ($context["text_missing"] ?? null);
            echo "</option>

                                ";
        } else {
            // line 54
            echo "
                                    <option value=\"0\">";
            // line 55
            echo ($context["text_missing"] ?? null);
            echo "</option>

                                ";
        }
        // line 58
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 59
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 59) == ($context["filter_order_status_id"] ?? null))) {
                // line 60
                echo "
                                        <option value=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 61);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 61);
                echo "</option>

                                    ";
            } else {
                // line 64
                echo "
                                        <option value=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 65);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 65);
                echo "</option>

                                    ";
            }
            // line 68
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-total\">";
        // line 73
        echo ($context["entry_total"] ?? null);
        echo "</label>
                            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 74
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-date-added\">";
        // line 77
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                            <div class=\"input-group date\">
                                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 79
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 85
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
                            <div class=\"input-group date\">
                                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 87
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
                        </div>
                        <div class=\"form-group text-right\">

\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"input-payment_method\">Payment method</label>
\t\t<input type=\"text\" name=\"filter_payment_method\" id=\"input-payment_method\" class=\"form-control\" value=\"";
        // line 96
        echo ($context["filter_payment_method"] ?? null);
        echo "\"/>
\t </div>
\t
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 99
        echo ($context["button_filter"] ?? null);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 107
        echo ($context["text_list"] ?? null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        <td class=\"text-right\">";
        // line 116
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>

\t<td class=\"text-right\">Payment Method</td>
\t
                                        <td class=\"text-left\">";
        // line 120
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 121
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 122
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 123
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 124
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                                        <td class=\"text-center\"><i class=\"fa fa-truck\"></i></td>
                                        <td class=\"text-center\">ERP</td>
                                        <td class=\"text-right\">";
        // line 127
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 132
        if (($context["orders"] ?? null)) {
            // line 133
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 134
                echo "                                            <tr>
                                                <td class=\"text-center\"> ";
                // line 135
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 135), ($context["selected"] ?? null))) {
                    // line 136
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 136);
                    echo "\" checked=\"checked\" />
                                                    ";
                } else {
                    // line 138
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 138);
                    echo "\" />
                                                    ";
                }
                // line 140
                echo "                                                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 140);
                echo "\" /></td>
                                                <td class=\"text-right\">";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 141);
                echo "</td>

\t<td class=\"text-left\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 143);
                echo "</td>
\t
                                                <td class=\"text-left\">";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 145);
                echo "</td>
                                                <td class=\"text-left\" ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["order"], "paid_order", [], "any", false, false, false, 146)) {
                    echo " style=\"background-color:#e5fbc3\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 146);
                echo "</td>
                                                <td class=\"text-right\">";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 147);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 148);
                echo "</td>
                                                <td class=\"text-left\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 149);
                echo "</td>
                                                ";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "shipping", [], "any", false, false, false, 151) == "intereuropa")) {
                        // line 152
                        echo "                                                        <td class=\"text-center\" style=\"background-color:#e5fbc3\">IE</td>
                                                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 153
$context["order"], "shipping", [], "any", false, false, false, 153) == "dhl")) {
                        // line 154
                        echo "                                                        <td class=\"text-center\" style=\"background-color:#fbe0c3\">DHL</td>
                                                    ";
                    } else {
                        // line 156
                        echo "                                                        <td class=\"text-center\"></td>
                                                    ";
                    }
                    // line 158
                    echo "                                                ";
                } else {
                    // line 159
                    echo "                                                    <td class=\"text-center\"></td>
                                                ";
                }
                // line 161
                echo "                                                <td class=\"text-center\" ";
                if (twig_get_attribute($this->env, $this->source, $context["order"], "order_service", [], "any", false, false, false, 161)) {
                    echo " style=\"background-color:#f3fbbf\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_service", [], "any", false, false, false, 161);
                echo "</td>
                                                <td class=\"text-right\"><div style=\"min-width: 120px;\">
                                                        <div class=\"btn-group\"> <a href=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 163);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                                            <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                                                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                <li><a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 166);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                                                                <li><a href=\"";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 167);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                                                            </ul>
                                                        </div>
                                                    </div></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                    ";
        } else {
            // line 174
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"9\">";
            // line 175
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 178
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 184
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 185
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\"><!--
          \$('#button-filter').on('click', function() {
            url = '';

            var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

            if (filter_order_id) {
              url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
            }


\tvar filter_payment_method = \$('input[name=\\'filter_payment_method\\']').val();

\tif (filter_payment_method != '') {
\t\turl += '&filter_payment_method=' + encodeURIComponent(filter_payment_method);
\t}
\t
            var filter_customer = \$('input[name=\\'filter_customer\\']').val();

            if (filter_customer) {
              url += '&filter_customer=' + encodeURIComponent(filter_customer);
            }

            var filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

            if (filter_order_status_id !== '') {
              url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
            }

            var filter_total = \$('input[name=\\'filter_total\\']').val();

            if (filter_total) {
              url += '&filter_total=' + encodeURIComponent(filter_total);
            }

            var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

            if (filter_date_added) {
              url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
            }

            var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

            if (filter_date_modified) {
              url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
            }

            location = 'index.php?route=sale/order&user_token=";
        // line 238
        echo ($context["user_token"] ?? null);
        echo "' + url;
          });
          //--></script>
        <script type=\"text/javascript\"><!--
          \$('input[name=\\'filter_customer\\']').autocomplete({
            'source': function(request, response) {
              \$.ajax({
                url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 245
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                  response(\$.map(json, function(item) {
                    return {
                      label: item['name'],
                      value: item['customer_id']
                    }
                  }));
                }
              });
            },
            'select': function(item) {
              \$('input[name=\\'filter_customer\\']').val(item['label']);
            }
          });
          //--></script>
        <script type=\"text/javascript\"><!--
          \$('input[name^=\\'selected\\']').on('change', function() {
            \$('#button-shipping, #button-invoice, #button-shipping-intereuropa').prop('disabled', true);

            var selected = \$('input[name^=\\'selected\\']:checked');

            if (selected.length) {
              \$('#button-invoice, #button-shipping-intereuropa').prop('disabled', false);
            }

            for (i = 0; i < selected.length; i++) {
              if (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
                \$('#button-shipping').prop('disabled', false);

                break;
              }
            }
          });

          \$('#button-shipping, #button-invoice, #button-shipping-intereuropa').prop('disabled', true);

          \$('input[name^=\\'selected\\']:first').trigger('change');

          // IE and Edge fix!
          \$('#button-shipping, #button-invoice, #button-shipping-intereuropa').on('click', function(e) {
            \$('#form-order').attr('action', this.getAttribute('formAction'));
          });

          \$('#form-order li:last-child a').on('click', function(e) {
            e.preventDefault();

            var element = this;

            if (confirm('";
        // line 295
        echo ($context["text_confirm"] ?? null);
        echo "')) {
              \$.ajax({
                url: '";
        // line 297
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
                dataType: 'json',
                beforeSend: function() {
                  \$(element).parent().parent().parent().find('button').button('loading');
                },
                complete: function() {
                  \$(element).parent().parent().parent().find('button').button('reset');
                },
                success: function(json) {
                  \$('.alert-dismissible').remove();

                  if (json['error']) {
                    \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

                  if (json['success']) {
                    location = '";
        // line 313
        echo ($context["delete"] ?? null);
        echo "';
                  }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
              });
            }
          });
          //--></script>
        <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
        <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <script type=\"text/javascript\"><!--
          \$('.date').datetimepicker({
            language: '";
        // line 327
        echo ($context["datepicker"] ?? null);
        echo "',
            pickTime: false
          });
          //--></script></div>
    ";
        // line 331
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 331,  735 => 327,  718 => 313,  695 => 297,  690 => 295,  637 => 245,  627 => 238,  571 => 185,  567 => 184,  559 => 178,  553 => 175,  550 => 174,  547 => 173,  533 => 167,  527 => 166,  519 => 163,  509 => 161,  505 => 159,  502 => 158,  498 => 156,  494 => 154,  492 => 153,  489 => 152,  486 => 151,  484 => 150,  480 => 149,  476 => 148,  472 => 147,  464 => 146,  460 => 145,  455 => 143,  450 => 141,  445 => 140,  439 => 138,  433 => 136,  431 => 135,  428 => 134,  423 => 133,  421 => 132,  413 => 127,  393 => 124,  375 => 123,  357 => 122,  339 => 121,  321 => 120,  300 => 116,  288 => 107,  277 => 99,  271 => 96,  257 => 87,  252 => 85,  241 => 79,  236 => 77,  228 => 74,  224 => 73,  218 => 69,  212 => 68,  204 => 65,  201 => 64,  193 => 61,  190 => 60,  187 => 59,  182 => 58,  176 => 55,  173 => 54,  167 => 51,  164 => 50,  162 => 49,  155 => 45,  147 => 42,  143 => 41,  135 => 38,  131 => 37,  124 => 33,  118 => 29,  110 => 25,  107 => 24,  99 => 20,  97 => 19,  92 => 16,  81 => 14,  77 => 13,  72 => 11,  66 => 10,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
