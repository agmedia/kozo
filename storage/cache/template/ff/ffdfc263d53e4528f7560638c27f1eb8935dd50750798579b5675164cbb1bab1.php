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

/* extension/module/catalog/product_list.twig */
class __TwigTemplate_369b96e170a30d239f87ad313c4a206fded474392807baad2eb803301bd41f8b extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo ($context["header"] ?? null);
        echo "
<!-- display length configuration -->
<div class=\"modal fade\" id=\"displayLengthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"displayLengthModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"displayLengthModalLabel\">";
        // line 20
        echo ($context["text_items_per_page"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body bull5i-container\">
\t\t\t\t<div class=\"notice\">
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" action=\"";
        // line 25
        echo ($context["settings"] ?? null);
        echo "\" class=\"form-horizontal ajax-form\" role=\"form\" id=\"displayLengthForm\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"form-group\" data-bind=\"css: {'has-error': module_product_quick_edit_items_per_page.hasError}\">
\t\t\t\t\t\t\t<label for=\"displayLength\" class=\"col-sm-4 control-label\">";
        // line 28
        echo ($context["entry_products_per_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"module_product_quick_edit_items_per_page\" id=\"displayLength\" data-bind=\"value: module_product_quick_edit_items_per_page\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 error-container\" data-bind=\"visible: module_product_quick_edit_items_per_page.hasError && module_product_quick_edit_items_per_page.errorMsg\">
\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: module_product_quick_edit_items_per_page.errorMsg\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"help-block\">";
        // line 36
        echo ($context["help_items_per_page"] ?? null);
        echo "</span>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 41
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#displayLengthForm\" data-context=\"#displayLengthModal\" data-vm=\"displayLengthVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 42
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- confirm deletion -->
<div class=\"modal fade\" id=\"confirmDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"confirmDeleteLabel\">";
        // line 54
        echo ($context["text_confirm_delete"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>";
        // line 57
        echo ($context["text_are_you_sure"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-ban\"></i> ";
        // line 60
        echo ($context["button_cancel"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\"><i class=\"fa fa-trash-o\"></i> ";
        // line 61
        echo ($context["button_delete"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- column settings -->
<div class=\"modal fade\" id=\"pageColumnsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"pageColumnsModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"pageColumnsModalLabel\">";
        // line 73
        echo ($context["text_choose_columns"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body bull5i-container\">
\t\t\t\t<div class=\"bull5i-overlay fade\">
\t\t\t\t\t<div class=\"page-overlay-progress\"><i class=\"fa fa-refresh fa-spin fa-5x text-muted\"></i></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"notice\">
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" action=\"";
        // line 81
        echo ($context["settings"] ?? null);
        echo "\" class=\"form-horizontal ajax-form\" role=\"form\" id=\"pageColumnsModalForm\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<h4>";
        // line 83
        echo ($context["entry_columns"] ?? null);
        echo "</h4>
\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 88
        echo ($context["text_column"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 89
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 90
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!-- ko foreach: product_columns -->
\t\t\t\t\t\t\t\t<tr data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v\"></i></td>
\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[columns][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[columns][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><!-- ko if: editable -->";
        // line 99
        echo ($context["text_yes"] ?? null);
        echo "<!-- /ko --><!-- ko ifnot: editable -->";
        echo ($context["text_no"] ?? null);
        echo "<!-- /ko --></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<h4>";
        // line 104
        echo ($context["entry_actions"] ?? null);
        echo "</h4>
\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-actions sortable\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 109
        echo ($context["text_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 110
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<!-- ko foreach: product_actions -->
\t\t\t\t\t\t\t\t<tr data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v\"></i></td>
\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[actions][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[actions][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 127
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#pageColumnsModalForm\" data-context=\"#pageColumnsModal\" data-vm=\"pageColumnsVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 128
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- AGmedia import modal -->
<div class=\"modal modal-60p fade\" id=\"AgmediaImportModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AgmediaImportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"pageColumnsModalLabel\">Tablica dostupnih proizvoda</h4>
            </div>
            <div class=\"modal-body bull5i-container\">
                <div v-if=\"spinner\" class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <i class=\"fa fa-refresh fa-spin fa-3x text-muted\"></i>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8\"><h4>Ukupno novih proizvoda sa servera. [[ products_count ]]</h4></div>
                    <div class=\"col-md-4\"><button @click=\"Import\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-save\"></i> [[ btn_text ]]</button></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-1 text-center\" style=\"margin-bottom: 20px;\">
                        <input type=\"checkbox\" class=\"navbar-checkbox\" @change=\"Check()\" checked/>
                    </div>
                    <div class=\"col-md-11\">Unesi Sve Proizvode</div>
                </div>
                <table class=\"table table-hover table-condensed page-columns sortable\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th v-if=\"show_select_column\"></th>
                        <th class=\"text-left\">Proizvod</th>
                        <th class=\"text-center\">Grupa</th>
                        <th class=\"text-center\">Odjel</th>
                        <th class=\"text-center\">Sku</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for=\"(item, index) in products[0]\" :key=\"index\">
                        <td><i class=\"fa fa-arrow-left\"></i></td>
                        <td v-if=\"show_select_column\">
                            <input type=\"checkbox\" class=\"column-display\" @change=\"sortSelected(item[0].IDODJEL)\"/>
                        </td>
                        <td v-if=\"item[0].NAZIV_ODJELA != ''\">[[ item[0].NAZIV_ODJELA ]]</td>
                        <td v-else>[[ item[0].NAZIV ]]</td>
                        <td class=\"text-center\">[[ item[0].NAZIV_GRUPE ]]</td>
                        <td class=\"text-center\">[[ item[0].IDODJEL ]]</td>
                        <td class=\"text-center\">[[ item[0].IDROBA ]]</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 185
        echo ($context["button_close"] ?? null);
        echo "</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- other settings -->
<div class=\"modal fade\" id=\"otherSettingsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"otherSettingsModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"otherSettingsModalLabel\">";
        // line 197
        echo ($context["text_other_settings"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body bull5i-container\">
\t\t\t\t<div class=\"notice\">
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" action=\"";
        // line 202
        echo ($context["settings"] ?? null);
        echo "\" class=\"form-horizontal ajax-form\" role=\"form\" id=\"otherSettingsForm\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"module_product_quick_edit_list_view_image_width\" data-bind=\"css: {'has-error': module_product_quick_edit_list_view_image_width.hasError || module_product_quick_edit_list_view_image_height.hasError}\">";
        // line 205
        echo ($context["entry_list_view_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-right\" name=\"module_product_quick_edit_list_view_image_width\" id=\"module_product_quick_edit_list_view_image_width\" data-bind=\"value: module_product_quick_edit_list_view_image_width, css: {'has-error': module_product_quick_edit_list_view_image_width.hasError}\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"module_product_quick_edit_list_view_image_height\" id=\"module_product_quick_edit_list_view_image_height\" data-bind=\"value: module_product_quick_edit_list_view_image_height, css: {'has-error': module_product_quick_edit_list_view_image_height.hasError}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 error-container has-error\" data-bind=\"visible: module_product_quick_edit_list_view_image_width.hasError && module_product_quick_edit_list_view_image_width.errorMsg\">
\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: module_product_quick_edit_list_view_image_width.errorMsg\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 error-container has-error\" data-bind=\"visible: module_product_quick_edit_list_view_image_height.hasError && module_product_quick_edit_list_view_image_height.errorMsg\">
\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: module_product_quick_edit_list_view_image_height.errorMsg\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"quickEditOn\" class=\"col-sm-4 control-label\">";
        // line 221
        echo ($context["entry_quick_edit_on"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t<select name=\"module_product_quick_edit_quick_edit_on\" id=\"quickEditOn\" class=\"form-control\" data-bind=\"value: module_product_quick_edit_quick_edit_on\">
\t\t\t\t\t\t\t\t\t<option value=\"click\">";
        // line 224
        echo ($context["text_single_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"dblclick\">";
        // line 225
        echo ($context["text_double_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"priceRelativeTo\" class=\"col-sm-4 control-label\">";
        // line 230
        echo ($context["entry_price_relative_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t<select name=\"module_product_quick_edit_price_relative_to\" id=\"priceRelativeTo\" class=\"form-control\" data-bind=\"value: module_product_quick_edit_price_relative_to\">
\t\t\t\t\t\t\t\t\t<option value=\"previous\">";
        // line 233
        echo ($context["text_previous_value"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"product\">";
        // line 234
        echo ($context["text_product_price"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 238
        echo ($context["help_price_relative_to"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"serverSideCaching\" class=\"col-sm-4 control-label\">";
        // line 242
        echo ($context["entry_server_side_caching"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_server_side_caching\" id=\"serverSideCaching\" value=\"1\" data-bind=\"checked: module_product_quick_edit_server_side_caching\"> ";
        // line 245
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_server_side_caching\" id=\"serverSideCachingNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_server_side_caching\"> ";
        // line 248
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 252
        echo ($context["help_server_side_caching"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"clientSideCaching\" class=\"col-sm-4 control-label\">";
        // line 256
        echo ($context["entry_client_side_caching"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_client_side_caching\" id=\"clientSideCaching\" value=\"1\" data-bind=\"checked: module_product_quick_edit_client_side_caching\"> ";
        // line 259
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_client_side_caching\" id=\"clientSideCachingNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_client_side_caching\"> ";
        // line 262
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 266
        echo ($context["help_client_side_caching"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ko if: module_product_quick_edit_client_side_caching() == '1' -->
\t\t\t\t\t\t<div class=\"form-group\" data-bind=\"css: {'has-error': module_product_quick_edit_cache_size.hasError}\">
\t\t\t\t\t\t\t<label for=\"clientSideCacheSize\" class=\"col-sm-4 control-label\">";
        // line 271
        echo ($context["entry_client_side_cache_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-right\" name=\"module_product_quick_edit_cache_size\" id=\"clientSideCacheSize\" data-bind=\"value: module_product_quick_edit_cache_size\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 error-container\" data-bind=\"visible: module_product_quick_edit_cache_size.hasError && module_product_quick_edit_cache_size.errorMsg\">
\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: module_product_quick_edit_cache_size.errorMsg\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 279
        echo ($context["help_client_side_cache_size"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_product_quick_edit_cache_size\" data-bind=\"value: module_product_quick_edit_cache_size\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t<!-- ko if: module_product_quick_edit_client_side_caching() != '1' -->
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_product_quick_edit_cache_size\" data-bind=\"value: module_product_quick_edit_cache_size\">
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"alternateRowColour\" class=\"col-sm-4 control-label\">";
        // line 288
        echo ($context["entry_alternate_row_colour"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_alternate_row_colour\" id=\"alternateRowColour\" value=\"1\" data-bind=\"checked: module_product_quick_edit_alternate_row_colour\"> ";
        // line 291
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_alternate_row_colour\" id=\"alternateRowColourNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_alternate_row_colour\"> ";
        // line 294
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"rowHoverHighlighting\" class=\"col-sm-4 control-label\">";
        // line 299
        echo ($context["entry_row_hover_highlighting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_row_hover_highlighting\" id=\"rowHoverHighlighting\" value=\"1\" data-bind=\"checked: module_product_quick_edit_row_hover_highlighting\"> ";
        // line 302
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_row_hover_highlighting\" id=\"rowHoverHighlightingNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_row_hover_highlighting\"> ";
        // line 305
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 309
        echo ($context["help_row_hover_highlighting"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"highlightStatus\" class=\"col-sm-4 control-label\">";
        // line 313
        echo ($context["entry_highlight_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_status\" id=\"highlightStatus\" value=\"1\" data-bind=\"checked: module_product_quick_edit_highlight_status\"> ";
        // line 316
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_status\" id=\"highlightStatusNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_highlight_status\"> ";
        // line 319
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 323
        echo ($context["help_highlight_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"highlightFilteredColumns\" class=\"col-sm-4 control-label\">";
        // line 327
        echo ($context["entry_highlight_filtered_columns"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_filtered_columns\" id=\"highlightFilteredColumns\" value=\"1\" data-bind=\"checked: module_product_quick_edit_highlight_filtered_columns\"> ";
        // line 330
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_filtered_columns\" id=\"highlightFilteredColumnsNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_highlight_filtered_columns\"> ";
        // line 333
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 337
        echo ($context["help_highlight_filtered_columns"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"highlightActions\" class=\"col-sm-4 control-label\">";
        // line 341
        echo ($context["entry_highlight_actions"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_actions\" id=\"highlightActions\" value=\"1\" data-bind=\"checked: module_product_quick_edit_highlight_actions\"> ";
        // line 344
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_highlight_actions\" id=\"highlightActionsNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_highlight_actions\"> ";
        // line 347
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 351
        echo ($context["help_highlight_actions"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"filterSubCategory\" class=\"col-sm-4 control-label\">";
        // line 355
        echo ($context["entry_filter_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_filter_sub_category\" id=\"filterSubCategory\" value=\"1\" data-bind=\"checked: module_product_quick_edit_filter_sub_category\"> ";
        // line 358
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_filter_sub_category\" id=\"filterSubCategoryNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_filter_sub_category\"> ";
        // line 361
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 365
        echo ($context["help_filter_sub_category"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"searchBar\" class=\"col-sm-4 control-label\">";
        // line 369
        echo ($context["entry_search_bar"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_search_bar\" id=\"searchBar\" value=\"1\" data-bind=\"checked: module_product_quick_edit_search_bar\"> ";
        // line 372
        echo ($context["text_visible"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_search_bar\" id=\"searchBarNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_search_bar\"> ";
        // line 375
        echo ($context["text_hidden"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"batchEdit\" class=\"col-sm-4 control-label\">";
        // line 380
        echo ($context["entry_batch_edit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_batch_edit\" id=\"batchEdit\" value=\"1\" data-bind=\"checked: module_product_quick_edit_batch_edit\"> ";
        // line 383
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_batch_edit\" id=\"batchEditNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_batch_edit\"> ";
        // line 386
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8 help-container\">
\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 390
        echo ($context["help_batch_edit"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"defaultSort\" class=\"col-sm-4 control-label\">";
        // line 394
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t<select name=\"module_product_quick_edit_default_sort\" id=\"defaultSort\" class=\"form-control\" data-bind=\"value: module_product_quick_edit_default_sort\">
\t\t\t\t\t\t\t\t\t";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 398
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 398);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 398) == ($context["module_product_quick_edit_default_sort"] ?? null))) ? (" selected") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 398);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t<select name=\"module_product_quick_edit_default_order\" id=\"defaultOrder\" class=\"form-control\" data-bind=\"value: module_product_quick_edit_default_order\">
\t\t\t\t\t\t\t\t\t<option value=\"ASC\"";
        // line 404
        echo ((("asc" == twig_lower_filter($this->env, ($context["module_product_quick_edit_default_order"] ?? null)))) ? (" selected") : (""));
        echo ">";
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"DESC\"";
        // line 405
        echo ((("desc" == twig_lower_filter($this->env, ($context["module_product_quick_edit_default_order"] ?? null)))) ? (" selected") : (""));
        echo ">";
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ko if: module_product_quick_edit_debug_mode() == '1' -->
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"debugMode\" class=\"col-sm-4 control-label\">";
        // line 411
        echo ($context["entry_debug_mode"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_debug_mode\" id=\"debugMode\" value=\"1\" data-bind=\"checked: module_product_quick_edit_debug_mode\"> ";
        // line 414
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_product_quick_edit_debug_mode\" id=\"debugModeNo\" value=\"0\" data-bind=\"checked: module_product_quick_edit_debug_mode\"> ";
        // line 417
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t<!-- ko if: module_product_quick_edit_debug_mode() != '1' -->
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_product_quick_edit_debug_mode\" value=\"0\" data-bind=\"checked: module_product_quick_edit_debug_mode\">
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 429
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#otherSettingsForm\" data-context=\"#otherSettingsModal\" data-vm=\"otherSettingsVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 430
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
        // line 436
        if ((twig_in_filter("image", ($context["columns"] ?? null)) || twig_in_filter("images", ($context["actions"] ?? null)))) {
            // line 437
            echo "<!-- image manager -->
<div class=\"modal fade\" id=\"modal-image\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"imageManagerModalLabel\" aria-hidden=\"true\">
</div><!-- /.modal -->
";
        }
        // line 441
        echo "
<!-- action menu modal -->
<div class=\"modal fade modal-60p\" id=\"actionQuickEditModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"actionQuickEditModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"actionQuickEditModalLabel\"></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body bull5i-container\">
\t\t\t\t<div class=\"notice\">
\t\t\t\t</div>
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"actionQuickEditForm\" onsubmit=\"return false;\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 459
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger submit remove\" data-form=\"#actionQuickEditForm\" data-context=\"#actionQuickEditModal\" data-vm=\"actionQuickEditVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 460
        echo ($context["text_removing"] ?? null);
        echo "\"><i class=\"fa fa-minus-circle\"></i> ";
        echo ($context["button_remove"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success submit add\" data-form=\"#actionQuickEditForm\" data-context=\"#actionQuickEditModal\" data-vm=\"actionQuickEditVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 461
        echo ($context["text_adding"] ?? null);
        echo "\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_add"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#actionQuickEditForm\" data-context=\"#actionQuickEditModal\" data-vm=\"actionQuickEditVM\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 462
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
        // line 468
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
                <span id=\"update-kipos-results\"></span>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 474
        echo ($context["button_toggle_search_bar"] ?? null);
        echo "\" id=\"btn-search-bar\"><i class=\"fa fa-search-";
        echo ((($context["module_product_quick_edit_search_bar"] ?? null)) ? ("minus") : ("plus"));
        echo "\"></i></button>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-hover=\"tooltip\" title=\"";
        // line 476
        echo ($context["text_settings"] ?? null);
        echo "\" data-placement=\"left\" data-toggle=\"dropdown\" id=\"btn-settings\"><i class=\"fa fa-cog\"></i> <b class=\"caret\"></b></button>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#displayLengthModal\">";
        // line 478
        echo ($context["text_items_per_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#pageColumnsModal\">";
        // line 479
        echo ($context["text_choose_columns"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#otherSettingsModal\">";
        // line 481
        echo ($context["text_other_settings"] ?? null);
        echo "</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#AgmediaImportModal\"><span class=\"text-primary\">Import novih artikala</span></a></li>
                        <li><a href=\"javascript:void(0)\" id=\"update-kipos\"><span class=\"text-primary\">Update cijena i količina</span></a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 486
        echo ($context["clear_cache"] ?? null);
        echo "\" id=\"clearCache\">";
        echo ($context["text_clear_cache"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 489
        echo ($context["button_add"] ?? null);
        echo "\" data-url=\"";
        echo ($context["add"] ?? null);
        echo "\" id=\"btn-insert\" data-form=\"#pqe-list-form\" data-context=\"#content\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 490
        echo ($context["button_copy"] ?? null);
        echo "\" data-url=\"";
        echo ($context["copy"] ?? null);
        echo "\" id=\"btn-copy\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\" disabled><i class=\"fa fa-files-o\"></i></button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 491
        echo ($context["button_delete"] ?? null);
        echo "\" data-url=\"";
        echo ($context["delete"] ?? null);
        echo "\" id=\"btn-delete\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\" disabled><i class=\"fa fa-trash-o\"></i></button>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-cubes fa-fw ext-icon\"></i> ";
        // line 493
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 496
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 496);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 496);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t";
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["_alerts"]) {
            // line 505
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["_alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 506
                echo "\t\t\t\t\t";
                if ($context["alert"]) {
                    // line 507
                    echo "\t\t\t<div class=\"alert alert-";
                    if (($context["type"] == "error")) {
                        echo "danger";
                    } else {
                        echo $context["type"];
                    }
                    echo " fade in\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<i class=\"fa ";
                    // line 509
                    echo twig_call_macro($macros["_self"], "macro_alert_icon", [$context["type"]], 509, $context, $this->getSourceContext());
                    echo "\"></i>";
                    echo $context["alert"];
                    echo "
\t\t\t</div>
\t\t\t\t\t";
                }
                // line 512
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 513
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['_alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container";
        // line 517
        echo (( !($context["module_product_quick_edit_search_bar"] ?? null)) ? (" hide") : (""));
        echo "\" id=\"search-bar\">
\t\t<div class=\"row navbar-bull5i\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<div class=\"nav navbar-nav navbar-checkbox hidden\" id=\"batch-edit-container\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"batch-edit\"> ";
        // line 523
        echo ($context["text_batch_edit"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"nav navbar-nav navbar-form\" id=\"nav-search\">
\t\t\t\t\t<div class=\"form-group search-form\">
\t\t\t\t\t\t<label for=\"global-search\" class=\"sr-only\">";
        // line 529
        echo ($context["text_search"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"";
        // line 532
        echo ($context["text_search"] ?? null);
        echo "\" id=\"global-search\" value=\"";
        echo ($context["search"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 534
        echo ($context["text_search"] ?? null);
        echo "\" id=\"global-search-btn\"><i class=\"fa fa-search fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t<!-- ko if: value() != '' --><button type=\"button\" class=\"btn btn-default\" data-bind=\"tooltip: {container: 'body', placement: 'bottom'}\" title=\"";
        // line 535
        echo ($context["text_clear_search"] ?? null);
        echo "\" id=\"clear-global-search-btn\"><i class=\"fa fa-times fa-fw\"></i></button><!-- /ko -->
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container\">
\t\t<div id=\"dT_processing\" class=\"dataTables_processing fade\"><i class=\"fa fa-refresh fa-spin fa-5x\"></i></div>
\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"pqe-list-form\" class=\"form-horizontal\" role=\"form\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-bordered table-condensed";
        // line 550
        echo ((($context["module_product_quick_edit_row_hover_highlighting"] ?? null)) ? (" table-hover") : (""));
        echo ((($context["module_product_quick_edit_alternate_row_colour"] ?? null)) ? (" table-striped") : (""));
        echo "\" id=\"dT\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
        // line 553
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 554
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["col"] == "selector")) {
                // line 555
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["column_info"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 555);
                echo " col_";
                echo $context["col"];
                echo "\" width=\"1\"><input type=\"checkbox\" id=\"dT-selector\" /></th>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 556
$context["col"], [0 => "image", 1 => "id"])) {
                // line 557
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["column_info"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 557);
                echo " col_";
                echo $context["col"];
                echo "\" width=\"1\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["column_info"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 557);
                echo "</th>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 559
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["column_info"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 559);
                echo " col_";
                echo $context["col"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["column_info"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 559);
                echo "</th>
\t\t\t\t\t\t\t\t\t";
            }
            // line 561
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"filters\">
\t\t\t\t\t\t\t\t";
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 565
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_in_filter($context["col"], [0 => "selector", 1 => "view_in_store", 2 => "gross_price"])) {
                // line 566
                echo "\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 567
$context["col"] == "status")) {
                // line 568
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["column_info"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 568);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 569
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 571
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 572
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 575
$context["col"], [0 => "image", 1 => "subtract", 2 => "shipping"])) {
                // line 576
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["column_info"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 576);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 577
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 579
                echo ($context["text_yes"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 580
                echo ($context["text_no"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 583
$context["col"] == "action")) {
                // line 584
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["column_info"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 584);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 586
                echo ($context["text_filter"] ?? null);
                echo "\"><i class=\"fa fa-filter fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"clear-filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 587
                echo ($context["text_clear_filter"] ?? null);
                echo "\"><i class=\"fa fa-times fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 590
$context["col"] == "manufacturer")) {
                // line 591
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["col"], twig_get_array_keys_filter(($context["typeahead"] ?? null)))) {
                    // line 592
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["column_info"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 592);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm fltr ";
                    // line 593
                    echo $context["col"];
                    echo " typeahead id_based\" placeholder=\"";
                    echo ($context["text_autocomplete"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filter_";
                    // line 594
                    echo $context["col"];
                    echo "\" class=\"search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 597
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["column_info"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 597);
                    echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                    // line 598
                    echo $context["col"];
                    echo "\" class=\"form-control input-sm search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                    // line 600
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 601
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                        // line 602
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["m"], "manufacturer_id", [], "any", false, false, false, 602);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 602);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 604
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                }
                // line 607
                echo "\t\t\t\t\t\t\t\t\t";
            } elseif (($context["col"] == "category")) {
                // line 608
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["col"], twig_get_array_keys_filter(($context["typeahead"] ?? null)))) {
                    // line 609
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["column_info"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 609);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm fltr ";
                    // line 610
                    echo $context["col"];
                    echo " typeahead id_based\" placeholder=\"";
                    echo ($context["text_autocomplete"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filter_";
                    // line 611
                    echo $context["col"];
                    echo "\" class=\"search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 614
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["column_info"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 614);
                    echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                    // line 615
                    echo $context["col"];
                    echo "\" class=\"form-control input-sm search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                    // line 617
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 618
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 619
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["c"], "category_id", [], "any", false, false, false, 619);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 619);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 621
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                }
                // line 624
                echo "\t\t\t\t\t\t\t\t\t";
            } elseif (($context["col"] == "download")) {
                // line 625
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["col"], twig_get_array_keys_filter(($context["typeahead"] ?? null)))) {
                    // line 626
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["column_info"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 626);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm fltr ";
                    // line 627
                    echo $context["col"];
                    echo " typeahead id_based\" placeholder=\"";
                    echo ($context["text_autocomplete"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filter_";
                    // line 628
                    echo $context["col"];
                    echo "\" class=\"search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 631
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["column_info"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 631);
                    echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                    // line 632
                    echo $context["col"];
                    echo "\" class=\"form-control input-sm search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                    // line 634
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 635
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["dl"]) {
                        // line 636
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["dl"], "download_id", [], "any", false, false, false, 636);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["dl"], "name", [], "any", false, false, false, 636);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 638
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                }
                // line 641
                echo "\t\t\t\t\t\t\t\t\t";
            } elseif (($context["col"] == "filter")) {
                // line 642
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["col"], twig_get_array_keys_filter(($context["typeahead"] ?? null)))) {
                    // line 643
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["column_info"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 643);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-sm fltr ";
                    // line 644
                    echo $context["col"];
                    echo " typeahead id_based\" placeholder=\"";
                    echo ($context["text_autocomplete"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filter_";
                    // line 645
                    echo $context["col"];
                    echo "\" class=\"search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 648
                    echo "\t\t\t\t\t\t\t\t<th class=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["column_info"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 648);
                    echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                    // line 649
                    echo $context["col"];
                    echo "\" class=\"form-control input-sm search_init fltr ";
                    echo $context["col"];
                    echo "\" data-column=\"";
                    echo $context["col"];
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                    // line 651
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 652
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["fg"]) {
                        // line 653
                        echo "\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                        echo addslashes(twig_get_attribute($this->env, $this->source, $context["fg"], "name", [], "any", false, false, false, 653));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 654
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fg"], "filters", [], "any", false, false, false, 654));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            // line 655
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["f"], "filter_id", [], "any", false, false, false, 655);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 655);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 657
                        echo "\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fg'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 659
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                }
                // line 662
                echo "\t\t\t\t\t\t\t\t\t";
            } elseif (($context["col"] == "store")) {
                // line 663
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["column_info"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 663);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 664
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                // line 666
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 667
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 668
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s"], "store_id", [], "any", false, false, false, 668);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 668);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 672
$context["col"] == "length_class")) {
                // line 673
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["column_info"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 673);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 674
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t";
                // line 676
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lc"]) {
                    // line 677
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["lc"], "length_class_id", [], "any", false, false, false, 677);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["lc"], "title", [], "any", false, false, false, 677);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 679
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 681
$context["col"] == "weight_class")) {
                // line 682
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["column_info"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 682);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 683
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t";
                // line 685
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["wc"]) {
                    // line 686
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["wc"], "weight_class_id", [], "any", false, false, false, 686);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["wc"], "title", [], "any", false, false, false, 686);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 688
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 690
$context["col"] == "stock_status")) {
                // line 691
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["column_info"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 691);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 692
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t";
                // line 694
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ss"]) {
                    // line 695
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ss"], "stock_status_id", [], "any", false, false, false, 695);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["ss"], "name", [], "any", false, false, false, 695);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 697
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 699
$context["col"] == "tax_class")) {
                // line 700
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["column_info"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 700);
                echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 701
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected></option>
\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                // line 703
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 704
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                    // line 705
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tc"], "tax_class_id", [], "any", false, false, false, 705);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tc"], "title", [], "any", false, false, false, 705);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 707
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 709
$context["col"] == "price")) {
                // line 710
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["column_info"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 710);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_";
                // line 712
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" id=\"filter_price\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" id=\"filter_special_price\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
                // line 717
                echo ($context["text_toggle_dropdown"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu text-left pull-right price\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\" class=\"filter-special-price\" data-value=\"\" id=\"special-price-off\"><i class=\"fa fa-fw fa-check\"></i> ";
                // line 720
                echo ($context["text_special_off"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"filter-special-price\" data-value=\"na\"><i class=\"fa fa-fw\"></i> ";
                // line 721
                echo ($context["text_special_not_available"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"filter-special-price\" data-value=\"active\"><i class=\"fa fa-fw\"></i> ";
                // line 722
                echo ($context["text_special_active"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"filter-special-price\" data-value=\"expired\"><i class=\"fa fa-fw\"></i> ";
                // line 723
                echo ($context["text_special_expired"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"filter-special-price\" data-value=\"future\"><i class=\"fa fa-fw\"></i> ";
                // line 724
                echo ($context["text_special_future"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 729
$context["col"], [0 => "name", 1 => "model", 2 => "sku", 3 => "upc", 4 => "ean", 5 => "jan", 6 => "isbn", 7 => "mpn", 8 => "location"])) {
                // line 730
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["column_info"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 730);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo " typeahead\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\"></th>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 732
                echo "\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["column_info"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 732);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\"></th>
\t\t\t\t\t\t\t\t\t";
            }
            // line 734
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 735
        echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>

</div>
<div class=\"row-fluid\"><div class=\"col-xs-12 text-center\"><small class=\"text-muted\" id=\"ajax-request-container\"></small></div></div>
<div class=\"row-fluid\"><div class=\"col-xs-12 text-center\"><small class=\"text-muted\">";
        // line 747
        echo ($context["text_page_created"] ?? null);
        echo "</small></div></div>
<script type=\"text/javascript\"><!--
(function(bull5i,\$,undefined){var errors=";
        // line 749
        echo json_encode(($context["errors"] ?? null));
        echo ",related=";
        echo json_encode(($context["related"] ?? null));
        echo ",active_filters=";
        echo json_encode(($context["active_filters"] ?? null));
        echo ",values={displayLengthModal:{module_product_quick_edit_items_per_page:parseInt(\"";
        echo (($context["items_per_page"] ?? null) * 1);
        echo "\")},otherSettingsModal:{module_product_quick_edit_list_view_image_width:parseInt(\"";
        echo (($context["module_product_quick_edit_list_view_image_width"] ?? null) * 1);
        echo "\"),module_product_quick_edit_list_view_image_height:parseInt(\"";
        echo (($context["module_product_quick_edit_list_view_image_height"] ?? null) * 1);
        echo "\"),module_product_quick_edit_quick_edit_on:\"";
        echo addslashes(($context["module_product_quick_edit_quick_edit_on"] ?? null));
        echo "\",module_product_quick_edit_price_relative_to:\"";
        echo addslashes(($context["module_product_quick_edit_price_relative_to"] ?? null));
        echo "\",module_product_quick_edit_server_side_caching:\"";
        echo ($context["module_product_quick_edit_server_side_caching"] ?? null);
        echo "\",module_product_quick_edit_client_side_caching:\"";
        echo ($context["module_product_quick_edit_client_side_caching"] ?? null);
        echo "\",module_product_quick_edit_cache_size:parseInt(\"";
        echo ((($context["module_product_quick_edit_cache_size"] ?? null)) ? (($context["module_product_quick_edit_cache_size"] ?? null)) : ("1000"));
        echo "\"),module_product_quick_edit_alternate_row_colour:\"";
        echo ($context["module_product_quick_edit_alternate_row_colour"] ?? null);
        echo "\",module_product_quick_edit_row_hover_highlighting:\"";
        echo ($context["module_product_quick_edit_row_hover_highlighting"] ?? null);
        echo "\",module_product_quick_edit_highlight_status:\"";
        echo ($context["module_product_quick_edit_highlight_status"] ?? null);
        echo "\",module_product_quick_edit_highlight_filtered_columns:\"";
        echo ($context["module_product_quick_edit_highlight_filtered_columns"] ?? null);
        echo "\",module_product_quick_edit_highlight_actions:\"";
        echo ($context["module_product_quick_edit_highlight_actions"] ?? null);
        echo "\",module_product_quick_edit_filter_sub_category:\"";
        echo ($context["module_product_quick_edit_filter_sub_category"] ?? null);
        echo "\",module_product_quick_edit_debug_mode:\"";
        echo (($context["module_product_quick_edit_debug_mode"] ?? null) * 1);
        echo "\",module_product_quick_edit_search_bar:\"";
        echo (($context["module_product_quick_edit_search_bar"] ?? null) * 1);
        echo "\",module_product_quick_edit_batch_edit:\"";
        echo (($context["module_product_quick_edit_batch_edit"] ?? null) * 1);
        echo "\",module_product_quick_edit_default_sort:\"";
        echo ($context["module_product_quick_edit_default_sort"] ?? null);
        echo "\",module_product_quick_edit_default_order:\"";
        echo ($context["module_product_quick_edit_default_order"] ?? null);
        echo "\"},pageColumnsModal:{product_actions:";
        echo json_encode(($context["product_actions"] ?? null));
        echo ",product_columns:";
        echo json_encode(($context["product_columns"] ?? null));
        echo "},search:{value:\"";
        echo addslashes(($context["search"] ?? null));
        echo "\"}},ta_sources=[];bull5i.user_token=\"";
        echo ($context["user_token"] ?? null);
        echo "\",bull5i.debugging=!!parseInt(\"";
        echo (($context["module_product_quick_edit_debug_mode"] ?? null) * 1);
        echo "\"),bull5i.clearCache=parseInt(\"";
        echo (($context["clear_dt_cache"] ?? null) * 1);
        echo "\"),bull5i.highlight_filtered_columns=parseInt(values.otherSettingsModal.module_product_quick_edit_highlight_filtered_columns),bull5i.texts=\$.extend({},bull5i.texts,{text_request_handled:\"";
        echo addslashes(($context["text_request_handled"] ?? null));
        echo "\",error_ajax_request:\"";
        echo addslashes(($context["error_ajax_request"] ?? null));
        echo "\",error_items_per_page:\"";
        echo addslashes(($context["error_items_per_page"] ?? null));
        echo "\",error_image_width:\"";
        echo addslashes(($context["error_image_width"] ?? null));
        echo "\",error_image_height:\"";
        echo addslashes(($context["error_image_height"] ?? null));
        echo "\",error_cache_size:\"";
        echo addslashes(($context["error_cache_size"] ?? null));
        echo "\"});var Column=function(e,i,t,a,s){this.column=e,this.index=ko.observable(i),this.name=t,this.editable=ko.observable(s),this.visible=ko.observable(a)},displayLengthModalViewModel=function(){var e=this;validate_items_per_page=function(e){isNaN(parseInt(e))||0==parseInt(e)||parseInt(e)<-1?(this.target.hasError(!0),this.target.errorMsg(this.message)):(this.target.hasError(!1),this.target.errorMsg(\"\"))},this.module_product_quick_edit_items_per_page=ko.observable(0).extend({numeric:{precision:0,context:e},validate:{message:bull5i.texts.error_items_per_page,context:e,method:validate_items_per_page}}),this.module_product_quick_edit_items_per_page.subscribe(function(e){void 0!=bull5i.dtApi&&bull5i.dtApi.page.len(parseInt(e))})};displayLengthModalViewModel.prototype=new bull5i.observable_object_methods;var otherSettingsModalViewModel=function(){var e=this;validate_image_size=function(e){isNaN(parseInt(e))||parseInt(e)<1?(this.target.hasError(!0),this.target.errorMsg(this.message)):(this.target.hasError(!1),this.target.errorMsg(\"\"))},validate_cache_size=function(e){isNaN(parseInt(e))||parseInt(e)<1||bull5i.view_models&&bull5i.view_models.displayLengthVM&&bull5i.view_models.displayLengthVM.module_product_quick_edit_items_per_page()>0&&parseInt(e)<bull5i.view_models.displayLengthVM.module_product_quick_edit_items_per_page()?(this.target.hasError(!0),this.target.errorMsg(this.message)):(this.target.hasError(!1),this.target.errorMsg(\"\"))},this.module_product_quick_edit_list_view_image_width=ko.observable(40).extend({numeric:{precision:0,context:e},validate:{message:bull5i.texts.error_image_width,context:e,method:validate_image_size}}),this.module_product_quick_edit_list_view_image_height=ko.observable(40).extend({numeric:{precision:0,context:e},validate:{message:bull5i.texts.error_image_height,context:e,method:validate_image_size}}),this.module_product_quick_edit_quick_edit_on=ko.observable(\"click\"),this.module_product_quick_edit_price_relative_to=ko.observable(\"previous\"),this.module_product_quick_edit_server_side_caching=ko.observable(\"0\"),this.module_product_quick_edit_client_side_caching=ko.observable(\"0\"),this.module_product_quick_edit_cache_size=ko.observable(0).extend({numeric:{precision:0,context:e},validate:{message:bull5i.texts.error_cache_size,context:e,method:validate_cache_size}}),this.module_product_quick_edit_alternate_row_colour=ko.observable(\"0\"),this.module_product_quick_edit_row_hover_highlighting=ko.observable(\"0\"),this.module_product_quick_edit_highlight_status=ko.observable(\"0\"),this.module_product_quick_edit_highlight_filtered_columns=ko.observable(\"0\"),this.module_product_quick_edit_highlight_actions=ko.observable(\"0\"),this.module_product_quick_edit_filter_sub_category=ko.observable(\"0\"),this.module_product_quick_edit_debug_mode=ko.observable(0),this.module_product_quick_edit_search_bar=ko.observable(\"1\"),this.module_product_quick_edit_batch_edit=ko.observable(\"0\"),this.module_product_quick_edit_default_sort=ko.observable(\"pd.name\"),this.module_product_quick_edit_default_order=ko.observable(\"ASC\"),this.module_product_quick_edit_list_view_image_width.subscribe(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.clearPipeline()}),this.module_product_quick_edit_list_view_image_height.subscribe(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.clearPipeline()}),this.module_product_quick_edit_debug_mode.subscribe(function(e){bull5i.debugging=!!parseInt(e)}),this.module_product_quick_edit_alternate_row_colour.subscribe(function(e){var i=\$(\"#dT\");parseInt(e)?i.addClass(\"table-striped\"):i.removeClass(\"table-striped\")}),this.module_product_quick_edit_row_hover_highlighting.subscribe(function(e){var i=\$(\"#dT\");parseInt(e)?i.addClass(\"table-hover\"):i.removeClass(\"table-hover\")}),this.module_product_quick_edit_search_bar.subscribe(function(s){var a=\$(\"#search-bar\"),e=\$(\"#btn-search-bar i.fa\");parseInt(s)?(a.removeClass(\"hide\"),e.removeClass(\"fa-search-plus\").addClass(\"fa-search-minus\")):(a.addClass(\"hide\"),e.removeClass(\"fa-search-minus\").addClass(\"fa-search-plus\"))}),this.module_product_quick_edit_batch_edit.subscribe(function(t){\$(\"#batch-edit\").prop(\"checked\",!!parseInt(t))}),this.module_product_quick_edit_highlight_status.subscribe(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.clearPipeline()}),this.module_product_quick_edit_highlight_filtered_columns.subscribe(function(e){bull5i.highlight_filtered_columns=parseInt(e)}),this.module_product_quick_edit_highlight_actions.subscribe(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.clearPipeline()}),this.module_product_quick_edit_filter_sub_category.subscribe(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.clearPipeline()})};otherSettingsModalViewModel.prototype=new bull5i.observable_object_methods;var pageColumnsModalViewModel=function(){var e=this;this.product_actions=ko.observableArray([]),this.product_columns=ko.observableArray([]),e.updateValues=function(i){for(var t in e)ko.isWriteableObservable(e[t])&&i.hasOwnProperty(t)&&e[t](\$.map(i[t],function(e,i){return new Column(i,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)}))}},searchViewModel=function(){var e=this;this.value=ko.observable(\"\"),e.updateValues=function(i){for(var t in e)ko.isWriteableObservable(e[t])&&i.hasOwnProperty(t)&&(\"function\"==typeof e[t].updateValues?e[t].updateValues(i[t]):e[t](i[t]))},e.setSearch=function(i){e.value(i)}};bull5i.view_models=\$.extend({},bull5i.view_models,{displayLengthVM:new displayLengthModalViewModel,otherSettingsVM:new otherSettingsModalViewModel,pageColumnsVM:new pageColumnsModalViewModel,searchVM:new searchViewModel}),bull5i.view_models.displayLengthVM.updateValues(values.displayLengthModal),bull5i.view_models.displayLengthVM.applyErrors(errors),bull5i.view_models.otherSettingsVM.updateValues(values.otherSettingsModal),bull5i.view_models.otherSettingsVM.applyErrors(errors),bull5i.view_models.pageColumnsVM.updateValues(values.pageColumnsModal),bull5i.view_models.searchVM.updateValues(values.search),ko.applyBindings(bull5i.view_models.displayLengthVM,\$(\"#displayLengthModal\")[0]),ko.applyBindings(bull5i.view_models.otherSettingsVM,\$(\"#otherSettingsModal\")[0]),ko.applyBindings(bull5i.view_models.pageColumnsVM,\$(\"#pageColumnsModal\")[0]),ko.applyBindings(bull5i.view_models.searchVM,\$(\"#nav-search\")[0]),\$(\".sortable\").sortable({containerSelector:\"table\",itemPath:\"> tbody\",itemSelector:\"tr\",placeholder:'<tr class=\"placeholder\"/>',distance:5,onDragStart:function(e){e.children().each(function(){\$(this).width(\$(this).width())}),e.addClass(\"dragged\"),\$(\"body\").addClass(\"dragging\")},onDrag:function(e,i){i.left=0,e.css(i)},onDrop:function(e,i){e.children().each(function(){\$(this).removeAttr(\"style\")}),e.removeClass(\"dragged\").removeAttr(\"style\"),\$(\"body\").removeClass(\"dragging\"),\$(\"tbody tr\",\$(i.el[0])).each(function(e){var i=ko.dataFor(this);i.index(e)})}});
";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeahead"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["attr"]) {
            // line 751
            if (($context["column"] == "category")) {
                // line 752
                echo "ta_sources['";
                echo $context["column"];
                echo "']=new Bloodhound({ ";
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 752)) {
                    echo "prefetch:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 752);
                    echo "',";
                }
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 752)) {
                    echo "remote:{url:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 752);
                    echo "',wildcard:'%QUERY'},";
                }
                echo "datumTokenizer:Bloodhound.tokenizers.obj.whitespace('value'),queryTokenizer:Bloodhound.tokenizers.whitespace,identify:function(obj){return obj.id},sufficient:10});ta_sources[\"";
                echo $context["column"];
                echo "\"].initialize(),\$(\".";
                echo $context["column"];
                echo ".typeahead\").typeahead({hint:!0,highlight:!0},{name:\"";
                echo $context["column"];
                echo "\",limit:10,display:'value',source:ta_sources[\"";
                echo $context["column"];
                echo "\"],templates:{notFound:['<div class=\"tt-no-suggestion\">";
                echo addslashes(($context["text_no_records_found"] ?? null));
                echo "</div>'].join(\"\\n\"),pending:['<div class=\"tt-no-suggestion\"><i class=\"fa fa-spin fa-refresh\"></i> ";
                echo addslashes(($context["text_loading_records"] ?? null));
                echo "</div>'].join('\\n'),suggestion:Handlebars.compile('";
                echo "<p><span class=\"tt-nowrap\"><span class=\"tt-secondary\">{{path}}</span>{{value}}</span></p>";
                echo "')}});
";
            } elseif ((            // line 753
$context["column"] == "filter")) {
                // line 754
                echo "ta_sources['";
                echo $context["column"];
                echo "']=new Bloodhound({ ";
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 754)) {
                    echo "prefetch:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 754);
                    echo "',";
                }
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 754)) {
                    echo "remote:{url:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 754);
                    echo "',wildcard:'%QUERY'},";
                }
                echo "datumTokenizer:Bloodhound.tokenizers.obj.whitespace('value'),queryTokenizer:Bloodhound.tokenizers.whitespace,identify:function(obj){return obj.id},sufficient:10});ta_sources[\"";
                echo $context["column"];
                echo "\"].initialize(),\$(\".";
                echo $context["column"];
                echo ".typeahead\").typeahead({hint:!0,highlight:!0},{name:\"";
                echo $context["column"];
                echo "\",limit:10,display:'value',source:ta_sources[\"";
                echo $context["column"];
                echo "\"],templates:{notFound:['<div class=\"tt-no-suggestion\">";
                echo addslashes(($context["text_no_records_found"] ?? null));
                echo "</div>'].join(\"\\n\"),pending:['<div class=\"tt-no-suggestion\"><i class=\"fa fa-spin fa-refresh\"></i> ";
                echo addslashes(($context["text_loading_records"] ?? null));
                echo "</div>'].join('\\n'),suggestion:Handlebars.compile('";
                echo "<p><span class=\"tt-nowrap\"><span class=\"tt-secondary\">{{group}}</span>{{value}}</span></p>";
                echo "')}});
";
            } elseif (twig_in_filter(            // line 755
$context["column"], [0 => "name", 1 => "model", 2 => "sku", 3 => "upc", 4 => "ean", 5 => "jan", 6 => "isbn", 7 => "mpn", 8 => "location", 9 => "download", 10 => "manufacturer"])) {
                // line 756
                echo "ta_sources['";
                echo $context["column"];
                echo "']=new Bloodhound({ ";
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 756)) {
                    echo "prefetch:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "prefetch", [], "any", false, false, false, 756);
                    echo "',";
                }
                if (twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 756)) {
                    echo "remote:{url:'";
                    echo twig_get_attribute($this->env, $this->source, $context["attr"], "remote", [], "any", false, false, false, 756);
                    echo "',wildcard:'%QUERY'},";
                }
                echo "datumTokenizer:Bloodhound.tokenizers.obj.whitespace('value'),queryTokenizer:Bloodhound.tokenizers.whitespace,identify:function(obj){return obj.id},sufficient:10});ta_sources[\"";
                echo $context["column"];
                echo "\"].initialize(),\$(\".";
                echo $context["column"];
                echo ".typeahead\").typeahead({hint:!0,highlight:!0},{name:\"";
                echo $context["column"];
                echo "\",limit:10,display:'value',source:ta_sources[\"";
                echo $context["column"];
                echo "\"],templates:{notFound:['<div class=\"tt-no-suggestion\">";
                echo addslashes(($context["text_no_records_found"] ?? null));
                echo "</div>'].join(\"\\n\"),pending:['<div class=\"tt-no-suggestion\"><i class=\"fa fa-spin fa-refresh\"></i> ";
                echo addslashes(($context["text_loading_records"] ?? null));
                echo "</div>'].join('\\n'),suggestion:Handlebars.compile('";
                echo "<p><span class=\"tt-nowrap\">{{value}}</span></p>";
                echo "')}});
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['attr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        echo "function response_handler(r,e){var e=\"undefined\"==typeof e?!0:e;return bull5i.display_alerts(r.alerts,!0),r.success?!0:r.errors&&r.errors.error?r.errors.error:(e&&\$(this).editable(\"hide\"),!1)}
function setup_editables(table){var defaultParams={ajaxOptions:{type:\"POST\",dataType:\"json\",cache:!1},type:\"text\",url:\"";
        // line 760
        echo ($context["update"] ?? null);
        echo "\",toggle:\"";
        echo ($context["module_product_quick_edit_quick_edit_on"] ?? null);
        echo "\",highlight:!1,container:\"body\",title:\"\",emptytext:\"\",pk:bull5i.get_pk_params,value:function(){return table.cell(this).data()},params:function(e){var t=\$.extend({},bull5i.get_additional_params());return t.id=e.pk.id,t.column=e.pk.column,t.old=\$.isArray(e.pk.old)&&0==e.pk.old.length?null:e.pk.old,t.value=\$.isArray(e.value)&&0==e.value.length?null:e.value,\$(\"#batch-edit\").is(\":checked\")&&\$(\"input[name*='selected']:checked\").length&&(t.ids=\$(\"input[name*='selected']:checked\").serializeObject().selected),t},success:function(e,t){var a=response_handler.call(this,e);if(!0===a){var l=table.cell(this).index().column,n=table.column(l).dataSrc();return e.value&&(t=e.value),\$.isArray(e.results.done)&&(\$.each(e.results.done,function(a,l){var u=\$(\"#p_\"+l).get(0);if(u){var r=table.row(u).data();null!=e.values?(e.values.hasOwnProperty(\"*\")&&\$.extend(r,e.values[\"*\"]),e.values.hasOwnProperty(l)&&\$.extend(r,e.values[l])):r[n]=t,\"function\"==typeof table.updatePipeline&&table.updatePipeline(table.row(u).index(),r)}}),e.results.done.length&&!1===update_related(n,e.results.done)&&table.draw(!1)),{newValue:t}}return!1===a?{newValue:\$(this).html()}:a},display:function(e,t){return\"abrakadabra\"}}
";
        // line 761
        $context["result"] = false;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "status_qe", 1 => "yes_no_qe", 2 => "manufac_qe", 3 => "stock_qe", 4 => "tax_cls_qe", 5 => "length_qe", 6 => "weight_qe"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            $context["result"] = (($context["result"] ?? null) | twig_in_filter($context["type"], ($context["types"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["result"] ?? null)) {
            echo ",selectParams={type:'select',showbuttons:!0}";
        }
        // line 762
        $context["result"] = false;
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "cat_qe", 1 => "dl_qe", 2 => "filter_qe", 3 => "store_qe"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            $context["result"] = (($context["result"] ?? null) | twig_in_filter($context["type"], ($context["types"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["result"] ?? null)) {
            echo ",select2Params={type:\"select2\",select2:{multiple:!0,allowClear:!0,placeholder:\"";
            echo ($context["text_autocomplete"] ?? null);
            echo "\",searchInputPlaceholder:\"";
            echo ($context["text_autocomplete"] ?? null);
            echo "\"},viewseparator:\"<br/>\",buttons:'<button type=\"button\" class=\"btn btn-danger btn-sm editable-submit editable-remove editable-custom\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\"><i class=\"fa fa-minus\"></i></button><button type=\"button\" class=\"btn btn-success btn-sm editable-submit editable-add editable-custom\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add"] ?? null);
            echo "\"><i class=\"fa fa-plus\"></i></button><button type=\"button\" class=\"btn btn-primary btn-sm editable-submit editable-overwrite\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_save"] ?? null);
            echo "\"><i class=\"fa fa-check\"></i></button><button type=\"button\" class=\"btn btn-default btn-sm editable-cancel\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_cancel"] ?? null);
            echo "\"><i class=\"fa fa-remove\"></i></button>',savenochange:!0}";
        }
        echo ";
";
        // line 763
        if (twig_in_filter("qe", ($context["types"] ?? null))) {
            echo "\$(\"td.qe\").editable(defaultParams);";
        }
        // line 764
        if (twig_in_filter("date_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.date_qe\").editable(\$.extend(!0,{},defaultParams,{type:\"combodate\",format:\"YYYY-MM-DD\",template:\"D / MMMM / YYYY\",combodate:{smartDays:!0,maxYear:";
            echo (twig_date_format_filter($this->env, "now", "Y") + 5);
            echo "}}));";
        }
        // line 765
        if (twig_in_filter("datetime_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.datetime_qe\").editable(\$.extend(!0,{},defaultParams,{type:\"combodate\",format:\"YYYY-MM-DD HH:mm:ss\",template:\"D / MMM / YYYY  HH:mm:ss\",combodate:{smartDays:!0,maxYear:";
            echo (twig_date_format_filter($this->env, "now", "Y") + 5);
            echo ",minuteStep:1}}));";
        }
        // line 766
        if (twig_in_filter("status_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.status_qe\").editable(\$.extend({},defaultParams,selectParams,{source:[{value:0,text:\"";
            echo addslashes(($context["text_disabled"] ?? null));
            echo "\"},{value:1,text:\"";
            echo addslashes(($context["text_enabled"] ?? null));
            echo "\"}]}));";
        }
        // line 767
        $context["multilingual_text"] = [];
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "name_qe", 1 => "tag_qe"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            if (twig_in_filter($context["type"], ($context["types"] ?? null))) {
                $context["multilingual_text"] = twig_array_merge(($context["multilingual_text"] ?? null), [0 => ("td." . $context["type"])]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 768
        if (($context["multilingual_text"] ?? null)) {
            echo "\$(\"";
            echo twig_join_filter(($context["multilingual_text"] ?? null), ",");
            echo "\").editable(\$.extend({},defaultParams,{type:\"multilingual_text\",source:\"";
            echo ($context["load"] ?? null);
            echo "\",sourceOptions:function(){var e=table.cell(this).index().row,t=table.cell(this).index().column;return{type:\"POST\",dataType:\"json\",data:{id:table.row(e).data().id,column:table.column(t).dataSrc(),ids:\$(\"#batch-edit\").is(\":checked\")&&\$(\"input[name*='selected']:checked\").length?\$(\"input[name*='selected']:checked\").serializeObject().selected:[]}}},sourceLoaded:function(e){return bull5i.display_alerts(e.alerts,!0),e.success?e.data:e.errors&&e.errors.error?e.errors.error:null},showbuttons:\"bottom\",value:null,success:function(e,t){if(result=response_handler.call(this,e,!1),!0===result){var l=table.cell(this).index().column,a=table.column(l).dataSrc();return e.value&&(t=e.value),\$.isArray(e.results.done)&&(\$.each(e.results.done,function(l,r){var s=\$(\"#p_\"+r).get(0);if(s){var n=table.row(s).data();null!=e.values?(e.values.hasOwnProperty(\"*\")&&\$.extend(!0,n,e.values[\"*\"]),e.values.hasOwnProperty(r)&&\$.extend(!0,n,e.values[r])):n[a]=t,\"function\"==typeof table.updatePipeline&&table.updatePipeline(table.row(s).index(),n)}}),e.results.done.length&&!1===update_related(a,e.results.done)&&table.draw(!1)),{newValue:t}}var r=\$(this).data(\"editable\").input.\$tpl;return r&&(r.find(\".form-group\").removeClass(\"has-error\"),r.find(\".form-group .help-block\").remove()),!1===result?e.errors&&\$.isArray(e.errors.value)&&r?(\$.each(e.errors.value,function(e,t){var l=t.lang,a=t.text;r.find('.form-group[data-lang=\"'+l+'\"]').addClass(\"has-error\").append(\$(\"<span/>\",{class:\"help-block\"}).html(a))}),!1):{newValue:\$(this).html()}:result}}));";
        }
        // line 769
        if (twig_in_filter("yes_no_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.yes_no_qe\").editable(\$.extend({},defaultParams,selectParams,{source:[{value:0,text:\"";
            echo addslashes(($context["text_no"] ?? null));
            echo "\"},{value:1,text:\"";
            echo addslashes(($context["text_yes"] ?? null));
            echo "\"}]}));";
        }
        // line 770
        if (twig_in_filter("manufac_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.manufac_qe\").editable(\$.extend({},defaultParams,selectParams,{ ";
            if (($context["manufacturer_select"] ?? null)) {
                echo "source:";
                echo ($context["manufacturer_select"] ?? null);
                echo ",prepend:[{value:0,text:'";
                echo addslashes(($context["text_none"] ?? null));
                echo "'}]";
            } else {
                echo "type:\"typeaheadjs\",showbuttons:!0,typeahead:{options:{hint:!0,highlight:!0},dataset:{name:\"manufacturer\",limit:10,display:'value',source:ta_sources.manufacturer,templates:{empty:['<div class=\"tt-no-suggestion\">";
                echo addslashes(($context["text_no_records_found"] ?? null));
                echo "</div>'].join(\"\\n\"),suggestion:Handlebars.compile('";
                echo "<p><span class=\"tt-nowrap\">{{value}}</span></p>";
                echo "')}}},tpl:'<input type=\"text\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\">',value2input:function(t){var e=this.options.scope,a=bull5i.dtApi.cell(e).index().row,n=bull5i.dtApi.cell(e).index().column,i=bull5i.dtApi.row(a).data(),p=bull5i.dtApi.column(n).dataSrc(),l=\"\";return l=\"\"!=i[p+\"_text\"]?i[p+\"_text\"]:\"";
                echo ($context["text_none"] ?? null);
                echo "\",this.\$input.data(\"ta-selected\",{value:l,id:t}),l},input2value:function(){var t=this.\$input.data(\"ta-selected\");return\"undefined\"!=typeof t?\"*\"!=t.id?t.id:0:null}";
            }
            echo "}));";
        }
        // line 771
        if (twig_in_filter("cat_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.cat_qe\").editable(\$.extend(!0,{},defaultParams,select2Params,{ ";
            if (($context["category_select"] ?? null)) {
                echo "source:";
                echo ($context["category_select"] ?? null);
                echo ",";
            } else {
                echo "select2:{minimumInputLength:1,ajax:{type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",cache:!1,quietMillis:150,data:function(e){return{query:e,type:\"category\",user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}},results:function(e){var t=[];return \$.each(e,function(e,n){t.push({id:n.id,text:n.full_name})}),{results:t}}},initSelection:function(e,t){var n=[];\$(e.val().split(\",\")).each(function(){n.push(this)}),\$.ajax({type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",data:{query:n,type:\"category\",multiple:!0,user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}}).done(function(e){var n=[];\$.each(e,function(e,t){n.push({id:t.id,text:t.full_name})}),t(n)})}}";
            }
            echo "}));";
        }
        // line 772
        if (twig_in_filter("dl_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.dl_qe\").editable(\$.extend(!0,{},defaultParams,select2Params,{ ";
            if (($context["download_select"] ?? null)) {
                echo "source:";
                echo ($context["download_select"] ?? null);
                echo ",";
            } else {
                echo "select2:{minimumInputLength:1,ajax:{type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",cache:!1,quietMillis:150,data:function(e){return{query:e,type:\"download\",user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}},results:function(e){var t=[];return \$.each(e,function(e,n){t.push({id:n.id,text:n.value})}),{results:t}}},initSelection:function(e,t){var n=[];\$(e.val().split(\",\")).each(function(){n.push(this)}),\$.ajax({type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",data:{query:n,type:\"download\",multiple:!0,user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}}).done(function(e){var n=[];\$.each(e,function(e,t){n.push({id:t.id,text:t.value})}),t(n)})}}";
            }
            echo "}));";
        }
        // line 773
        if (twig_in_filter("filter_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.filter_qe\").editable(\$.extend(!0,{},defaultParams,select2Params,{ ";
            if (($context["filter_select"] ?? null)) {
                echo "source:";
                echo ($context["filter_select"] ?? null);
                echo ",";
            } else {
                echo "select2:{minimumInputLength:1,ajax:{type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",cache:!1,quietMillis:150,data:function(e){return{query:e,type:\"filter\",user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}},results:function(e){var t=[],n=[];return \$.each(e,function(e,u){var i=\$.inArray(u.group_name);-1==i&&(i=n.length,n.push(u.group_name),t[i]={text:u.group_name,children:[]}),t[i].children.push({id:u.id,text:u.value,group:u.group})}),{results:t}}},initSelection:function(e,t){var n=[];\$(e.val().split(\",\")).each(function(){n.push(this)}),\$.ajax({type:\"GET\",url:\"";
                echo ($context["filter"] ?? null);
                echo "\",dataType:\"json\",data:{query:n,type:\"filter\",multiple:!0,user_token:\"";
                echo ($context["user_token"] ?? null);
                echo "\"}}).done(function(e){var n=[];\$.each(e,function(e,t){n.push({id:t.id,text:t.full_name})}),t(n)})},formatSelection:function(e){return void 0!=e.group?e.group+e.text:e.text}}";
            }
            echo "}));";
        }
        // line 774
        if (twig_in_filter("store_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.store_qe\").editable(\$.extend({},defaultParams,select2Params,{source:";
            echo ($context["store_select"] ?? null);
            echo "}));";
        }
        // line 775
        if (twig_in_filter("stock_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.stock_qe\").editable(\$.extend({},defaultParams,selectParams,{source:";
            echo ($context["stock_status_select"] ?? null);
            echo "}));";
        }
        // line 776
        if (twig_in_filter("tax_cls_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.tax_cls_qe\").editable(\$.extend({},defaultParams,selectParams,{source:";
            echo ($context["tax_class_select"] ?? null);
            echo "}));";
        }
        // line 777
        if (twig_in_filter("length_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.length_qe\").editable(\$.extend({},defaultParams,selectParams,{source:";
            echo ($context["length_class_select"] ?? null);
            echo "}));";
        }
        // line 778
        if (twig_in_filter("weight_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.weight_qe\").editable(\$.extend({},defaultParams,selectParams,{source:";
            echo ($context["weight_class_select"] ?? null);
            echo "}));";
        }
        // line 779
        if (twig_in_filter("qty_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.qty_qe\").editable(\$.extend({},defaultParams));";
        }
        // line 780
        if (twig_in_filter("image_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.image_qe\").editable(\$.extend(!0,{},defaultParams,{type:\"image\",noImage:\"";
            echo ($context["no_image"] ?? null);
            echo "\",clearText:\"";
            echo ($context["text_clear"] ?? null);
            echo "\",browseText:\"";
            echo ($context["text_browse"] ?? null);
            echo "\",value:function(){var e={},a=bull5i.dtApi.cell(this).data(),t=bull5i.dtApi.cell(this).index().row,i=bull5i.dtApi.row(t).data();return e.image=a,e.thumbnail=i.image_thumb,e.alt=i.image_alt,e.title=i.image_title,e},params:function(e){var a={};return a.id=e.pk.id,a.column=e.pk.column,a.old=e.pk.old,a.value=e.value,\$(\"#batch-edit\").is(\":checked\")&&\$(\"input[name*='selected']:checked\").length&&(a.ids=\$(\"input[name*='selected']:checked\").serializeObject().selected),a},chooseImage:function(e,a){var t=\"quick-edit-image\",i=\"quick-edit-thumbnail\",o=\"\",l=\$.Deferred();return \$(\"#\"+t).val(\"\"),\$.ajax({url:\"index.php?route=common/filemanager&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&target=\"+encodeURIComponent(t),dataType:\"html\"}).done(function(l){\$(\"#modal-image\").append(l),\$(\"#modal-image\").modal(\"show\"),\$(\"#modal-image\").on(\"hide.bs.modal\",function(){var l=\$(\"#\"+i+\" .content-overlay\");\$(\"#\"+t).val()?(o=\$(\"#\"+t).val(),\$.ajax({url:\"index.php?route=extension/module/product_quick_edit/image&user_token=";
            echo ($context["user_token"] ?? null);
            echo "&image=\"+encodeURIComponent(o)+\"&width=";
            echo ($context["list_view_image_width"] ?? null);
            echo "&height=";
            echo ($context["list_view_image_height"] ?? null);
            echo "\",dataType:\"text\",beforeSend:function(){l&&l.addClass(\"in\")}}).done(function(t){e.image=o,e.thumbnail=t,a.call(null,e)}).always(function(){l&&l.removeClass(\"in\")})):\"function\"==typeof a&&a.call(null,null),\$(\"#modal-image\").off(\"hide.bs.modal\")}).on(\"hidden.bs.modal\",function(){\$(\"#modal-image\").empty(),\$(\"#modal-image\").off(\"hidden.bs.modal\")})}).always(function(){l.resolve()}),l.promise()}}));";
        }
        // line 781
        if (twig_in_filter("price_qe", ($context["types"] ?? null))) {
            echo "\$(\"td.price_qe\").editable(\$.extend({},defaultParams));";
        }
        // line 782
        echo "}
function show_quick_edit_modal(o,i,d){var t=\$.Deferred();\$(\"#actionQuickEditModal .modal-body form fieldset\").html(i.data),i.title&&\$(\"#actionQuickEditModal .modal-title\").html(i.title),-1!==\$.inArray(o,[\"seo_urls\",\"descriptions\"])?\$(\"#actionQuickEditModal\").find(\".modal-footer .submit.add,.modal-footer .submit.remove\").attr(\"disabled\",!0):\$(\"#actionQuickEditModal\").find(\".modal-footer .submit.add,.modal-footer .submit.remove\").attr(\"disabled\",!1),\$(\"#actionQuickEditModal\").modal(\"show\"),\$(\"#actionQuickEditModal\").on(\"click\",\".modal-footer .cancel\",function(o){t.resolve()}).on(\"click\",\".modal-footer .submit\",function(o){if(\"function\"==typeof d){\$(o.currentTarget).hasClass(\"add\")?bull5i.form_add():\$(o.currentTarget).hasClass(\"remove\")?bull5i.form_remove():bull5i.form_overwrite();\$(\"#actionQuickEditModal .modal-body form\").serializeObject();d.call(this,\$(\"#actionQuickEditModal .modal-body form\")).done(function(){t.resolve()})}else t.resolve()}),\$(\"#actionQuickEditModal\").on(\"hide.bs.modal\",function(){\$(\"#actionQuickEditModal\").off(\"hide.bs.modal\")}).on(\"hidden.bs.modal\",function(){\$(\"#actionQuickEditModal .modal-body form fieldset\").empty(),\$(\"#actionQuickEditModal .modal-body .notice\").empty(),\$(\"#actionQuickEditModal .modal-title\").empty(),\$(\"#actionQuickEditModal\").off(\"hidden.bs.modal\"),\$(\"#actionQuickEditModal\").off(\"click\",\".modal-footer .cancel\"),\$(\"#actionQuickEditModal\").off(\"click\",\".modal-footer .submit\")}),t.always(function(){\$(\"#actionQuickEditModal\").modal(\"hide\")})}function update_related(i,o){if(o&&related[i]&&related[i].length){var l={};return \$.each(related[i],function(i,t){l[t]=o}),bull5i.processing&&bull5i.processing(!0,\"related\"),\$.ajax({url:\"";
        // line 783
        echo ($context["reload"] ?? null);
        echo "\",type:\"POST\",cache:!1,dataType:\"json\",data:{data:l}}).done(function(i){i.values&&void 0!=bull5i.dtApi&&\$.each(i.values,function(i,o){var l=\$(\"#p_\"+i).get(0);if(l){var t=bull5i.dtApi.row(l).data();\$.extend(t,o),\"function\"==typeof bull5i.dtApi.updatePipeline&&bull5i.dtApi.updatePipeline(bull5i.dtApi.row(l).index(),t)}}),bull5i.display_alerts(i.alerts,!0,\$(\"#alerts\"))}).fail(\$.proxy(bull5i.ajax_fail,{alerts:\$(\"#alerts\")})).always(function(){void 0!=bull5i.dtApi&&bull5i.dtApi.draw(!1),bull5i.processing&&bull5i.processing(!1,\"related\")}),!0}return!1}
\$(function(){\$('#dT').DataTable({dom:\"t<'row-fluid'<'col-xs-6'i><'col-xs-6 text-right'p>>\",serverSide:!0,";
        // line 784
        if (($context["module_product_quick_edit_client_side_caching"] ?? null)) {
            echo "ajax:\$.fn.dataTable.pipeline({url:\"";
            echo ($context["source"] ?? null);
            echo "\",data:function(e){var a=\$(\"#filter_special_price\");e.user_token=\"";
            echo ($context["user_token"] ?? null);
            echo "\",a.length&&a.val()&&(e.filter_special_price=a.val())},pages:parseInt(\"";
            echo (((($context["module_product_quick_edit_cache_size"] ?? null) && (twig_round((($context["module_product_quick_edit_cache_size"] ?? null) / ($context["items_per_page"] ?? null)), 0, "ceil") > 0))) ? (twig_round((($context["module_product_quick_edit_cache_size"] ?? null) / ($context["items_per_page"] ?? null)), 0, "ceil")) : (1));
            echo "\")}),";
        } else {
            echo "ajax:{type:\"POST\",url:\"";
            echo ($context["source"] ?? null);
            echo "\",data:function(e){var a=\$(\"#filter_special_price\");e.user_token=\"";
            echo ($context["user_token"] ?? null);
            echo "\",a.length&&a.val()&&(e.filter_special_price=a.val())}},";
        }
        // line 785
        echo "initComplete:function(e){if(\"\"!=e.oPreviousSearch.sSearch){var a=ko.contextFor(\$(\"#global-search-btn\").get(0));\$(\"#global-search\").val(e.oPreviousSearch.sSearch),a&&a.\$root.setSearch(e.oPreviousSearch.sSearch)}for(i=0,len=e.aoColumns.length;len>i;i++)e.aoPreSearchCols[i].sSearch.length>0&&\$(\"tr.filters .fltr.\"+e.aoColumns[i].name+\":input\").not(\".typeahead\").val(e.aoPreSearchCols[i].sSearch);if(e.oLoadedState&&void 0!=e.oLoadedState.specialPrice&&\"\"!=e.oLoadedState.specialPrice&&(\$special=\$('ul.price .filter-special-price[data-value=\"'+e.oLoadedState.specialPrice+'\"]'),\$special.length&&bull5i.update_special_price_menu(\$special)),e.oLoadedState&&void 0!=e.oLoadedState.typeaheads&&void 0!=e.oLoadedState.typeaheads)for(key in e.oLoadedState.typeaheads)\$(\".fltr.typeahead.tt-input.\"+key).data(\"ta-selected\",{value:e.oLoadedState.typeaheads[key]}).data(\"ta-name\",key).typeahead(\"val\",e.oLoadedState.typeaheads[key])},stateSaveParams:function(e,a){a.specialPrice=\$(\"#filter_special_price\").length?\$(\"#filter_special_price\").val():\"\",a.typeaheads={},\$(\".fltr.typeahead.tt-input\").each(function(){var t=\$(this).typeahead(\"val\");name=e.aoColumns[\$(this).closest(\"th\").index()].name,a.typeaheads[name]=t})},stateLoadParams:function(e,a){if(\$.query.get(\"dTc\")){var t=\$.query.get(\"search\");if(void 0!=a.specialPrice&&\"\"!=a.specialPrice&&\$(\"#filter_special_price\").length&&\$(\"#filter_special_price\").val(a.specialPrice),void 0!=a.typeaheads)for(key in a.typeaheads)\$(\".fltr.typeahead.tt-input.\"+key).typeahead(\"val\",a.typeaheads[key]);t&&(a.search.search=t)}else{var s=\$.query,i=s.get(\"page\"),l=new \$.fn.dataTable.Api(e);a.search.search=s.get(\"search\"),a.start=i&&parseInt(i)?parseInt(i-1)*a.length:0;for(var o=0,d=a.columns.length;d>o;o++)try{var p=l.column(o).dataSrc(),r=s.get(\"filter_\"+p);input=\$(\"tr.filters [name=filter_\"+p+\"]:input\"),a.columns[o].search.search=r,input&&(input.hasClass(\"typeahead\")?input.typeahead(\"val\",r):input.val(r)),active_filters.hasOwnProperty(p)&&\$(\".fltr.typeahead.tt-input.\"+p).data(\"ta-selected\",{value:active_filters[p].value}).data(\"ta-name\",p).typeahead(\"val\",active_filters[p].value)}catch(h){}void 0!=a.typeaheads&&delete a.typeaheads,bull5i.clearCache=!0}},rowCallback:function(e,a){\$(e).data(\"id\",a.id)},drawCallback:function(e){var a=void 0!=bull5i.dtApi?bull5i.dtApi:new \$.fn.dataTable.Api(e);setup_editables(a),bull5i.update_nav_checkboxes(),bull5i.update_nav_controls()},language:{aria:{sortAscending:\"";
        echo addslashes(($context["text_sort_ascending"] ?? null));
        echo "\",sortDescending:\"";
        echo addslashes(($context["text_sort_descending"] ?? null));
        echo "\"},paginate:{first:\"";
        echo addslashes(($context["text_first_page"] ?? null));
        echo "\",last:\"";
        echo addslashes(($context["text_last_page"] ?? null));
        echo "\",next:\"";
        echo addslashes(($context["text_next_page"] ?? null));
        echo "\",previous:\"";
        echo addslashes(($context["text_previous_page"] ?? null));
        echo "\"},emptyTable:\"";
        echo addslashes(($context["text_empty_table"] ?? null));
        echo "\",info:\"";
        echo addslashes(($context["text_showing_info"] ?? null));
        echo "\",infoEmpty:\"";
        echo addslashes(($context["text_showing_info_empty"] ?? null));
        echo "\",infoFiltered:\"";
        echo addslashes(($context["text_showing_info_filtered"] ?? null));
        echo "\",infoPostFix:\"\",infoThousands:\" \",loadingRecords:\"";
        echo addslashes(($context["text_loading_records"] ?? null));
        echo "\",zeroRecords:\"";
        echo addslashes(($context["text_no_matching_records"] ?? null));
        echo "\"},deferRender:!0,processing:!1,stateSave:!0,autoWidth:!1,sortCellsTop:!0,pageLength:parseInt(\"";
        echo (($context["items_per_page"] ?? null) * 1);
        echo "\"),
columnDefs:[
";
        // line 787
        if (twig_in_filter("selector", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_selector\"],createdCell:function(e,t,c){\$(e).html(\$(\"<input/>\",{type:\"checkbox\",name:\"selected[]\",value:c.id}))}},";
        }
        // line 788
        if (twig_in_filter("view_in_store", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_view_in_store\"],createdCell:function(e,t){for(var l=\$(\"<select/>\",{\"class\":\"form-control view_in_store\"}).append(\$(\"<option/>\",{value:\"\"}).html(\"";
            echo addslashes(($context["text_select"] ?? null));
            echo "\")),o=0;o<t.length;o++)l.append(\$(\"<option/>\",{value:t[o].url}).html(t[o].name));\$(e).html(l)}},";
        }
        // line 789
        if (twig_in_filter("action", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_action\"],createdCell:function(t,n,a){for(var e=\$(\"<div/>\",{\"class\":\"btn-group btn-group-flex\"}),l=0;l<n.length;l++)\$btn=n[l].url?\$(\"<a/>\",{href:n[l].url,\"class\":\"btn btn-default btn-xs\",id:n[l].action+\"-\"+a.id,title:n[l].title}):\$(\"<button/>\",{type:\"button\",\"class\":\"btn btn-default btn-xs action\",id:n[l].action+\"-\"+a.id,title:n[l].title}).data(\"column\",n[l].action),n[l].type&&(\$btn.addClass(n[l].type),\"view\"==n[l].type&&\$btn.attr(\"target\",\"_blank\")),a[n[l].action+\"_exist\"]&&\$btn.addClass(\"btn-warning\"),n[l].class&&\$btn.addClass(n[l].class),n[l].name&&\$btn.html(n[l].name),n[l].ref&&\$btn.data(\"ref\",n[l].ref),n[l].icon&&\$btn.prepend(\$(\"<i/>\",{\"class\":\"fa fa-\"+n[l].icon})),e.append(\$btn);\$(t).html(e)}},";
        }
        // line 790
        if (twig_in_filter("image", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_image\"],createdCell:function(t,a,i){\$(t).html(\$(\"<img/>\",{src:i.image_thumb,alt:i.image_alt,title:i.image_title,\"class\":\"img-thumbnail\"}).data(\"id\",i.id))}},";
        }
        // line 791
        if (twig_in_filter("price", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_price\"],createdCell:function(e,l,t){t.special?\$(e).html(\$(\"<s/>\").html(l)).append(\$(\"<br/>\")).append(\$(\"<span/>\",{\"class\":\"text-danger\"}).html(t.special)):\$(e).html(l)}},";
        }
        // line 792
        if (twig_in_filter("gross_price", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_gross_price\"],createdCell:function(e,l,t){t.gross_special?\$(e).html(\$(\"<s/>\").html(l)).append(\$(\"<br/>\")).append(\$(\"<span/>\",{\"class\":\"text-danger\"}).html(t.gross_special)):\$(e).html(l)}},";
        }
        // line 793
        if (twig_in_filter("status", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_status\"],createdCell:function(t,s,a){\$(t).html(a.status_class?\$(\"<span/>\",{\"class\":\"label label-\"+a.status_class}).html(a.status_text):a.status_text)}},";
        }
        // line 794
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "category", 1 => "download", 2 => "filter", 3 => "store"]);
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            if (twig_in_filter($context["col"], ($context["columns"] ?? null))) {
                echo "{targets:[\"col_";
                echo $context["col"];
                echo "\"],createdCell:function(c,t,e){var o=[];\$.each(e.";
                echo $context["col"];
                echo "_data,function(c,t){o.push(t.text)}),\$(c).html(o.join(\"<br/>\"))}},";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "shipping", 1 => "subtract", 2 => "stock_status", 3 => "tax_class", 4 => "length_class", 5 => "weight_class", 6 => "manufacturer", 7 => "date_added", 8 => "date_modified", 9 => "date_available"]);
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            if (twig_in_filter($context["col"], ($context["columns"] ?? null))) {
                echo "{targets:[\"col_";
                echo $context["col"];
                echo "\"],createdCell:function(c,e,t){\$(c).html(t.";
                echo $context["col"];
                echo "_text)}},";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        if (twig_in_filter("quantity", ($context["columns"] ?? null))) {
            echo "{targets:[\"col_quantity\"],createdCell:function(t,a){var e=\$(\"<span/>\").html(a),a=parseInt(a);e.addClass(0>=a?\"label label-warning\":5>a?\"label label-danger\":\"label label-success\"),\$(t).html(e)}},";
        }
        // line 797
        echo "{orderable:!1,targets:";
        echo ($context["non_sortable_columns"] ?? null);
        echo "},{searchable:!1,targets:['col_selector','col_action']}
],order:[],columns:[";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_classes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["class"]) {
            if ($context["class"]) {
                echo "{data:\"";
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["columns"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[$context["idx"]] ?? null) : null);
                echo "\",name:\"";
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["columns"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[$context["idx"]] ?? null) : null);
                echo "\",className:\"";
                echo $context["class"];
                echo "\"},";
            } else {
                echo "{data:\"";
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["columns"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[$context["idx"]] ?? null) : null);
                echo "\",name:\"";
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["columns"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[$context["idx"]] ?? null) : null);
                echo "\"},";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
});
\$(\"body\").on(\"keydown\",\"#otherSettingsModal\",function(e){if(e.altKey&&e.shiftKey&&68==e.keyCode){var t=ko.dataFor(this);t.module_product_quick_edit_debug_mode(\"0\"==t.module_product_quick_edit_debug_mode()?\"1\":\"0\")}}).on(\"click\",\"td button.action\",function(e){if(null!=bull5i.dtApi){var t=\$(this).closest(\"td\").get(0),l=\$(this).data(\"column\"),a=bull5i.dtApi.cell(t).index().row,i=bull5i.dtApi.row(a).data().id;null!=i&&null!=l&&(bull5i.processing&&bull5i.processing(!0,\"action\"),\$.ajax({url:\"";
        // line 800
        echo ($context["load"] ?? null);
        echo "\",type:\"POST\",cache:!1,dataType:\"json\",data:{id:i,column:l,ids:\$(\"#batch-edit\").is(\":checked\")&&\$(\"input[name*='selected']:checked\").length?\$(\"input[name*='selected']:checked\").serializeObject().selected:[]}}).done(function(e){e.success&&show_quick_edit_modal(l,e,function(e){var t=\$.Deferred(),a=e.serializeObject(),o=\$.extend({id:i,column:l,value:\$.isEmptyObject(a)?null:a,old:\"\"},bull5i.get_additional_params()),n={self:this,dfd:t,btn:\$(this),form:e,vm:\$(this).data(\"vm\"),context:\$(\$(this).data(\"context\")),alerts:\$.merge(\$(\"#alerts\"),\$(\"div.notice\",\$(\$(this).data(\"context\"))))};return \$(\"#batch-edit\").is(\":checked\")&&\$(\"input[name*='selected']:checked\").length&&(o.ids=\$(\"input[name*='selected']:checked\").serializeObject().selected),\$.ajax({type:\"POST\",url:\"";
        echo ($context["update"] ?? null);
        echo "\",dataType:\"json\",data:o,beforeSend:function(){n.btn.button(\"loading\"),\$(\"fieldset\",n.form).attr(\"disabled\",!0)}}).done(function(e){n.vm&&e.values&&bull5i.view_models&&bull5i.view_models[n.vm]&&bull5i.view_models[n.vm].updateValues&&bull5i.view_models[n.vm].updateValues(e.values),n.vm&&bull5i.view_models&&bull5i.view_models[n.vm]&&bull5i.view_models[n.vm].applyErrors&&bull5i.view_models[n.vm].applyErrors(e.errors?e.errors:{}),e.success&&(null!=bull5i.dtApi&&null!=e.value&&e.results&&\$.isArray(e.results.done)&&(\$.each(e.results.done,function(t,a){var i=\$(\"#p_\"+a).get(0);if(i){var o=bull5i.dtApi.row(i).data();null!=e.values?(e.values.hasOwnProperty(\"*\")&&\$.extend(o,e.values[\"*\"]),e.values.hasOwnProperty(a)&&\$.extend(o,e.values[a])):o[l+\"_exist\"]=e.value,\"function\"==typeof bull5i.dtApi.updatePipeline&&bull5i.dtApi.updatePipeline(bull5i.dtApi.row(i).index(),o)}}),e.results.done.length&&!1===update_related(l,e.results.done)&&bull5i.dtApi.draw(!1)),t.resolve()),bull5i.display_alerts(e.alerts,!0,n.alerts)}).fail(\$.proxy(bull5i.ajax_fail,n)).always(function(e,t,l){n.btn.button(\"reset\"),\$(\"fieldset\",n.form).attr(\"disabled\",!1)}),t.promise()}),bull5i.display_alerts(e.alerts,!0)}).fail(\$.proxy(bull5i.ajax_fail,{alerts:\$(\"#alerts\")})).always(function(e,t,l){bull5i.processing&&bull5i.processing(!1,\"action\")}))}}),\$.extend(\$.fn.select2.defaults,{formatNoMatches:function(){return\"";
        echo addslashes(($context["text_no_matches_found"] ?? null));
        echo "\"},formatInputTooShort:function(e,t){var l=t-e.length;return\"";
        echo addslashes(($context["text_input_too_short"] ?? null));
        echo "\".replace(\"%d\",l)},formatInputTooLong:function(e,t){var l=e.length-t;return\"";
        echo addslashes(($context["text_input_too_long"] ?? null));
        echo "\".replace(\"%d\",l)},formatSelectionTooBig:function(e){return\"";
        echo addslashes(($context["text_selection_too_big"] ?? null));
        echo "\".replace(\"%d\",e)},formatLoadMore:function(e){return\"";
        echo addslashes(($context["text_loading_more_results"] ?? null));
        echo "\"},formatSearching:function(){return\"";
        echo addslashes(($context["text_searching"] ?? null));
        echo "\"}}),null!=moment&&moment.locale(\"";
        echo ($context["code"] ?? null);
        echo "\"),\$(document).on(\"click\",\"a[data-toggle='im']\",function(e){e.preventDefault(),\$(this).popover({html:!0,placement:\"right\",trigger:\"manual\",content:function(){return['<button type=\"button\" class=\"btn btn-primary btn-browse-image\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_browse"] ?? null);
        echo "\" data-loading-text=\"<i class=\\'fa fa-fw fa-spinner fa-spin\\'></i>\"><i class=\"fa fa-pencil\"></i></button>','<button type=\"button\" class=\"btn btn-danger btn-clear-image\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_clear"] ?? null);
        echo "\"><i class=\"fa fa-fw fa-ban\"></i></button>'].join(\" \")}}),\$(this).on(\"shown.bs.popover\",function(e){\$(\"[data-toggle='tooltip']\").tooltip({container:\"body\"})}).on(\"hidden.bs.popover\",function(e){\$(this).popover(\"destroy\")}),\$(this).popover(\"toggle\")});
});}(window.bull5i=window.bull5i||{},jQuery));
//--></script>
<script type=\"text/javascript\">
  \$(() => {
    \$('#update-kipos').on('click', e => {
      \$('#update-kipos-results').html(\"<i class='fa fa-spinner fa-spin'></i> Osvježavanje cijena i količina u tijeku!\");
      axios.get(location.origin + '/index.php?route=extension/feed/kipos/updatePrices&uuid=d825ca78-9c5a-4de6-b403-37e2508c8353')
        .then( function(response) {
          console.log(response)
          \$('#update-kipos-results').html('');
        });
    });
  });
</script>
<script>
  Vue.options.delimiters = ['[[', ']]'];

  new Vue({
    el: '#AgmediaImportModal',
    data: {
      products: [],
      products_count: 0,
      selected_products: [],
      show_select_column: false,
      basePath: 'index.php?route=extension/module/',
      btn_text: 'Napravi Import',
      spinner: true,
    },
    mounted() {
      this.getProducts()
    },
    methods: {
      getProducts: function() {
        let context = this
        axios.get(context.basePath + 'product_import_manager/getProducts&user_token=' + '";
        // line 835
        echo ($context["user_token"] ?? null);
        echo "')
          .then( function(response) {

            console.log(response)

            context.spinner = false
            context.btn_text = 'Napravi Import'
            context.products = JSON.parse('[' + response.data.products + ']')
            context.products_count = response.data.count

            context.Check()

            console.log('Products', context.products[0])

          }, function (err) {
            console.log(err);
          });
      },

      Import() {
        let context = this

        if (this.selected_products.length < 6) {
          context.spinner = true
          context.btn_text = 'U Postupku Importa'

          this.selected_products.forEach(item => {
            axios.get(context.basePath + 'product_import_manager/importProducts&user_token=' + '";
        // line 862
        echo ($context["user_token"] ?? null);
        echo "' + '&data=' + item)
              .then( function(response) {
                context.spinner = false
                context.btn_text = 'Napravi Import'
                context.products_count--

                console.log('Import Response', response.data)
                console.log('Import Response', JSON.parse(response.data))

                /*for (key in context.products[0]) {
                  if (key == response.data.id) {
                    delete context.products[0][key]
                  }
                }

                console.log('Import Response', response.data)*/
              }, function (err) {
                console.log(err)
              });
          })
        }
      },


      sortSelected(selected) {
        for (key in this.products[0]) {
          let index = this.selected_products.indexOf(selected)

          if (index > -1) {
            this.selected_products.splice(index, 1)
            break
          }

          this.selected_products.push(selected)
          break
        }

        console.log('sortSelected Products: ', this.selected_products)
      },


      Check() {
        let response = []

        if (this.selected_products.length != this.products_count) {
          for (key in this.products[0]) {
            response.push(key)
            this.show_select_column = false
          }
        } else {
          this.show_select_column = true
        }

        this.selected_products = response

        console.log('sortSelected Products: ', this.selected_products)
      }
    }
  })
</script>

";
        // line 923
        echo ($context["footer"] ?? null);
        echo "
";
    }

    // line 1
    public function macro_alert_icon($__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            ob_start(function () { return ''; });
            // line 2
            echo "\t\t";
            if ((($context["type"] ?? null) == "error")) {
                // line 3
                echo "\t\t\tfa-times-circle
\t\t";
            } elseif ((            // line 4
($context["type"] ?? null) == "warning")) {
                // line 5
                echo "\t\t\tfa-exclamation-triangle
\t\t";
            } elseif ((            // line 6
($context["type"] ?? null) == "success")) {
                // line 7
                echo "\t\t\tfa-check-circle
\t\t";
            } elseif ((            // line 8
($context["type"] ?? null) == "info")) {
                // line 9
                echo "\t\t\tfa-info-circle
\t\t";
            } else {
                // line 11
                echo "\t\t";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "extension/module/catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2434 => 11,  2430 => 9,  2428 => 8,  2425 => 7,  2423 => 6,  2420 => 5,  2418 => 4,  2415 => 3,  2412 => 2,  2398 => 1,  2392 => 923,  2328 => 862,  2298 => 835,  2240 => 800,  2214 => 798,  2209 => 797,  2205 => 796,  2190 => 795,  2175 => 794,  2171 => 793,  2167 => 792,  2163 => 791,  2159 => 790,  2155 => 789,  2149 => 788,  2145 => 787,  2115 => 785,  2099 => 784,  2095 => 783,  2092 => 782,  2088 => 781,  2070 => 780,  2066 => 779,  2060 => 778,  2054 => 777,  2048 => 776,  2042 => 775,  2036 => 774,  2016 => 773,  1996 => 772,  1976 => 771,  1954 => 770,  1946 => 769,  1938 => 768,  1926 => 767,  1918 => 766,  1912 => 765,  1906 => 764,  1902 => 763,  1875 => 762,  1862 => 761,  1856 => 760,  1853 => 759,  1818 => 756,  1816 => 755,  1786 => 754,  1784 => 753,  1754 => 752,  1752 => 751,  1748 => 750,  1678 => 749,  1673 => 747,  1659 => 735,  1653 => 734,  1641 => 732,  1627 => 730,  1625 => 729,  1617 => 724,  1613 => 723,  1609 => 722,  1605 => 721,  1601 => 720,  1595 => 717,  1583 => 712,  1577 => 710,  1575 => 709,  1571 => 707,  1560 => 705,  1556 => 704,  1552 => 703,  1543 => 701,  1538 => 700,  1536 => 699,  1532 => 697,  1521 => 695,  1517 => 694,  1508 => 692,  1503 => 691,  1501 => 690,  1497 => 688,  1486 => 686,  1482 => 685,  1473 => 683,  1468 => 682,  1466 => 681,  1462 => 679,  1451 => 677,  1447 => 676,  1438 => 674,  1433 => 673,  1431 => 672,  1427 => 670,  1416 => 668,  1412 => 667,  1408 => 666,  1399 => 664,  1394 => 663,  1391 => 662,  1386 => 659,  1379 => 657,  1368 => 655,  1364 => 654,  1359 => 653,  1355 => 652,  1351 => 651,  1342 => 649,  1337 => 648,  1327 => 645,  1321 => 644,  1316 => 643,  1313 => 642,  1310 => 641,  1305 => 638,  1294 => 636,  1290 => 635,  1286 => 634,  1277 => 632,  1272 => 631,  1262 => 628,  1256 => 627,  1251 => 626,  1248 => 625,  1245 => 624,  1240 => 621,  1229 => 619,  1225 => 618,  1221 => 617,  1212 => 615,  1207 => 614,  1197 => 611,  1191 => 610,  1186 => 609,  1183 => 608,  1180 => 607,  1175 => 604,  1164 => 602,  1160 => 601,  1156 => 600,  1147 => 598,  1142 => 597,  1132 => 594,  1126 => 593,  1121 => 592,  1118 => 591,  1116 => 590,  1110 => 587,  1106 => 586,  1100 => 584,  1098 => 583,  1092 => 580,  1088 => 579,  1079 => 577,  1074 => 576,  1072 => 575,  1066 => 572,  1062 => 571,  1053 => 569,  1048 => 568,  1046 => 567,  1043 => 566,  1040 => 565,  1036 => 564,  1032 => 562,  1026 => 561,  1016 => 559,  1006 => 557,  1004 => 556,  997 => 555,  994 => 554,  990 => 553,  983 => 550,  965 => 535,  961 => 534,  954 => 532,  948 => 529,  939 => 523,  930 => 517,  925 => 514,  919 => 513,  913 => 512,  905 => 509,  895 => 507,  892 => 506,  887 => 505,  883 => 504,  875 => 498,  864 => 496,  860 => 495,  855 => 493,  848 => 491,  842 => 490,  836 => 489,  828 => 486,  820 => 481,  815 => 479,  811 => 478,  806 => 476,  799 => 474,  790 => 468,  779 => 462,  773 => 461,  767 => 460,  763 => 459,  743 => 441,  737 => 437,  735 => 436,  724 => 430,  720 => 429,  705 => 417,  699 => 414,  693 => 411,  682 => 405,  676 => 404,  670 => 400,  657 => 398,  653 => 397,  647 => 394,  640 => 390,  633 => 386,  627 => 383,  621 => 380,  613 => 375,  607 => 372,  601 => 369,  594 => 365,  587 => 361,  581 => 358,  575 => 355,  568 => 351,  561 => 347,  555 => 344,  549 => 341,  542 => 337,  535 => 333,  529 => 330,  523 => 327,  516 => 323,  509 => 319,  503 => 316,  497 => 313,  490 => 309,  483 => 305,  477 => 302,  471 => 299,  463 => 294,  457 => 291,  451 => 288,  439 => 279,  428 => 271,  420 => 266,  413 => 262,  407 => 259,  401 => 256,  394 => 252,  387 => 248,  381 => 245,  375 => 242,  368 => 238,  361 => 234,  357 => 233,  351 => 230,  343 => 225,  339 => 224,  333 => 221,  314 => 205,  308 => 202,  300 => 197,  285 => 185,  223 => 128,  219 => 127,  199 => 110,  195 => 109,  187 => 104,  177 => 99,  165 => 90,  161 => 89,  157 => 88,  149 => 83,  144 => 81,  133 => 73,  118 => 61,  114 => 60,  108 => 57,  102 => 54,  85 => 42,  81 => 41,  73 => 36,  62 => 28,  56 => 25,  48 => 20,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/catalog/product_list.twig", "");
    }
}
