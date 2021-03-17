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

/* catalog/product_form.twig */
class __TwigTemplate_76d5004ecf2107d748e9b5b3a1bae641ad97ab556ec5e80b418633bb9a809f47 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "name", [], "any", false, false, false, 53)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" class=\"form-control\"/>
                        ";
            // line 54
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 56
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "description", [], "any", false, false, false, 61)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null), "meta_title", [], "any", false, false, false, 67)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"form-control\"/>
                        ";
            // line 68
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) {
                // line 69
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 70
            echo " </div>
                    </div>
                    <div class=\"form-group\">
<label class=\"col-sm-2 control-label\" for=\"input-custom-alt";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\"><span data-toggle=\"tooltip\" title=\"Leave empty if you want the default alt tag to be displayed\">";
            echo ($context["entry_custom_alt"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][custom_alt]\" placeholder=\"";
            echo ($context["entry_custom_alt"] ?? null);
            echo "\" id=\"input-custom-alt";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\" value=\"";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "custom_alt", [], "any", false, false, false, 75)) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t
<label class=\"col-sm-2 control-label\" for=\"input-custom-h1";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\"><span data-toggle=\"tooltip\" title=\"Leave empty if you want the default header to be displayed\">";
            echo ($context["entry_custom_h1"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
            echo "][custom_h1]\" placeholder=\"";
            echo ($context["entry_custom_h1"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
            echo "\" class=\"form-control\" value=\"";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82)] ?? null) : null), "custom_h1", [], "any", false, false, false, 82)) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t
<label class=\"col-sm-2 control-label\" for=\"input-custom-h2";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\"><span data-toggle=\"tooltip\" title=\"Leave empty if you want the default header to be displayed\">";
            echo ($context["entry_custom_h2"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "][custom_h2]\" placeholder=\"";
            echo ($context["entry_custom_h2"] ?? null);
            echo "\" id=\"input-custom-h2";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-control\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "custom_h2", [], "any", false, false, false, 89)) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t
<label class=\"col-sm-2 control-label\" for=\"input-custom-imgtitle";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            echo "\"><span data-toggle=\"tooltip\" title=\"Leave empty if you want the default title tag to be displayed\">";
            echo ($context["entry_custom_imgtitle"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "][custom_imgtitle]\" placeholder=\"";
            echo ($context["entry_custom_imgtitle"] ?? null);
            echo "\" id=\"input-custom-imgtitle";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "\" class=\"form-control\" value=\"";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["product_description"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["product_description"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null), "custom_imgtitle", [], "any", false, false, false, 96)) : (""));
            echo "\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
\t\t\t
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "\" class=\"form-control\">";
            echo (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["product_description"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product_description"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "meta_description", [], "any", false, false, false, 103)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            echo "\" class=\"form-control\">";
            echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product_description"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["product_description"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 109)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "][tag]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_description"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_description"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115)] ?? null) : null), "tag", [], "any", false, false, false, 115)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 123
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 125
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 126
        if (($context["error_model"] ?? null)) {
            // line 127
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 128
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 131
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 133
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 139
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 145
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 149
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 151
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 157
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 163
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 167
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 169
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 173
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 175
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 179
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 182
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 186
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 186) == ($context["tax_class_id"] ?? null))) {
                // line 187
                echo "

                        <option value=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 189);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 189);
                echo "</option>


                      ";
            } else {
                // line 193
                echo "

                        <option value=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 195);
                echo "</option>


                      ";
            }
            // line 199
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 206
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 208
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 212
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 214
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 218
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 223
        if (($context["subtract"] ?? null)) {
            // line 224
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 226
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 227
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 231
            echo "

                      <option value=\"1\">";
            // line 233
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 234
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 238
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 244
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 250
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 250) == ($context["stock_status_id"] ?? null))) {
                // line 251
                echo "

                        <option value=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 253);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 253);
                echo "</option>


                      ";
            } else {
                // line 257
                echo "

                        <option value=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 259);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 259);
                echo "</option>


                      ";
            }
            // line 263
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 270
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 272
        if (($context["shipping"] ?? null)) {
            // line 273
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 274
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 276
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 277
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 278
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 279
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 280
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 282
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 283
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 284
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 288
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 291
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 297
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 301
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 304
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 307
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 313
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 319
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 319) == ($context["length_class_id"] ?? null))) {
                // line 320
                echo "

                        <option value=\"";
                // line 322
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 322);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 322);
                echo "</option>


                      ";
            } else {
                // line 326
                echo "

                        <option value=\"";
                // line 328
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 328);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 328);
                echo "</option>


                      ";
            }
            // line 332
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 339
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 341
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 345
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 351
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 351) == ($context["weight_class_id"] ?? null))) {
                // line 352
                echo "

                        <option value=\"";
                // line 354
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 354);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 354);
                echo "</option>


                      ";
            } else {
                // line 358
                echo "

                        <option value=\"";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 360);
                echo "</option>


                      ";
            }
            // line 364
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 371
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 376
        if (($context["status"] ?? null)) {
            // line 377
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 379
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 380
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 384
            echo "

                      <option value=\"1\">";
            // line 386
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 387
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 391
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 397
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 399
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 405
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 407
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 413
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 415
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 415);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 415);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 416
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 416);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 422
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 424
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 426
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 426);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 426);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 427
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 427);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 433
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 436
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 437
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 437), ($context["product_store"] ?? null))) {
                // line 438
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 438);
                echo "\" checked=\"checked\"/>
                            ";
                // line 439
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 439);
                echo "
                          ";
            } else {
                // line 441
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 441);
                echo "\"/>
                            ";
                // line 442
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 442);
                echo "
                          ";
            }
            // line 443
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 449
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 451
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 453
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 453);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 453);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 454
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 454);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">

\t\t\t";
        // line 461
        if (($context["product_variant_status"] ?? null)) {
            echo "\t\t\t\t
\t\t\t\t";
            // line 462
            if ((twig_get_attribute($this->env, $this->source, ($context["variant_setting"] ?? null), "type", [], "any", false, false, false, 462) == "custom")) {
                echo "\t\t\t\t
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_variant\"><span data-toggle=\"tooltip\" title=\"";
                // line 463
                echo ($context["help_autocomplete"] ?? null);
                echo "\">";
                echo ($context["entry_product_variant"] ?? null);
                echo "</span></label>\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  <input type=\"text\" name=\"variant\" value=\"\" placeholder=\"";
                // line 465
                echo ($context["entry_product_variant"] ?? null);
                echo "\" id=\"input-product_variant\" class=\"form-control\" />\t\t\t\t\t  
\t\t\t\t\t  <div id=\"product_variant\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t  ";
                // line 467
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["product_variant"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 468
                    echo "\t\t\t\t\t\t<div id=\"product_variant";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 468);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 468);
                    echo "
\t\t\t\t\t\t  <input type=\"hidden\" name=\"product_variant[]\" value=\"";
                    // line 469
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 469);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 472
                echo "\t\t\t\t\t  </div>
\t\t\t\t\t  <em>";
                // line 473
                echo ($context["help_variant_note"] ?? null);
                echo "</em></td>
\t\t\t\t\t</div>
              </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  ";
            }
            // line 478
            echo "                <label class=\"col-sm-2 control-label\" for=\"input-variant_image\">";
            echo ($context["entry_variant_image"] ?? null);
            echo "</label>
                <div class=\"col-sm-10\">
                  <a href=\"\" id=\"thumb-variant_image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 480
            echo ($context["variant_thumb"] ?? null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                  <input type=\"hidden\" name=\"product_variant_image\" value=\"";
            // line 481
            echo ($context["product_variant_image"] ?? null);
            echo "\" id=\"input-variant_image\" />
                </div>
              </div>  
\t\t\t<div class=\"form-group\">
\t\t\t";
        }
        // line 486
        echo "\t\t\t\t
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 487
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 489
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 491
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 491);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 491);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 492
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 492);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
\t\t
\t\t\t";
        // line 500
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 501
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<select name=\"attemplate\" id=\"attemplate\" class=\"form-control\" onchange=\"if (\$(this).find(':selected').val()<0) {\$('#attemmplate_button_add').prop('disabled','disabled');\$('#attemmplate_button_replace').prop('disabled','disabled');} else {\$('#attemmplate_button_add').removeAttr('disabled');\$('#attemmplate_button_replace').removeAttr('disabled');}\">
\t\t\t\t\t<option value=\"-1\"></option>\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attemplates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attemplate"]) {
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"";
                // line 506
                echo twig_get_attribute($this->env, $this->source, $context["attemplate"], "attemplate_id", [], "any", false, false, false, 506);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attemplate"], "name", [], "any", false, false, false, 506);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "\t\t\t\t  </select>
\t\t\t\t\t<script>

\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<button id=\"attemmplate_button_add\" disabled=\"disabled\" data-loading-text=\"";
            // line 514
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),1);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_add"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_add"] ?? null);
            echo "</button>
\t\t\t\t\t<button id=\"attemmplate_button_replace\" disabled=\"disabled\" data-loading-text=\"";
            // line 515
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),2);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_replace"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_replace"] ?? null);
            echo "</button>
\t\t\t\t\t<button id=\"attemmplate_button_default\" data-loading-text=\"";
            // line 516
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"update_attributes(\$('#attemplate').val(),0);\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_attemplate_default"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_attemplate_default"] ?? null);
            echo "</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<select name=\"attribute_group_id\" id=\"attgroup\" class=\"form-control\" onchange=\"if (\$(this).find(':selected').val()>0) {update_attributes(\$('#attgroup').val(),3);}\">
\t\t\t\t\t<option value=\"-1\">";
            // line 520
            echo ($context["text_add_group"] ?? null);
            echo "</option>\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attgroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attgroup"]) {
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"";
                // line 522
                echo twig_get_attribute($this->env, $this->source, $context["attgroup"], "attribute_group_id", [], "any", false, false, false, 522);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attgroup"], "name", [], "any", false, false, false, 522);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "\t\t\t\t  </select>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t<div class=\"col-sm-2\" id=\"new_attemplate_name\">
\t\t\t\t\t<input type=\"text\" name=\"new_attemplate_name\" value=\"\" placeholder=\"";
            // line 527
            echo ($context["text_new_attemplate_name"] ?? null);
            echo "\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<button id=\"attemmplate_button_save\" data-loading-text=\"";
            // line 530
            echo ($context["text_loading"] ?? null);
            echo "\" type=\"button\" onclick=\"save_attemplate();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["help_save_attemplate"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_save_attemplate"] ?? null);
            echo "</button>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
        }
        // line 534
        echo "\t\t\t
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 539
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 540
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 546
        $context["attribute_row"] = 0;
        // line 547
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 548
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        
\t\t\t\t\t<td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 550
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 550);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> 
\t\t\t\t\t\t<input type=\"hidden\" name=\"product_attribute[";
            // line 551
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 551);
            echo "\" />\t\t\t
\t\t\t\t\t\t";
            // line 552
            if ((($context["module_atpresets_installed"] ?? null) == 1)) {
                // line 553
                echo "\t\t\t\t\t\t\t";
                if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                    // line 554
                    echo "\t\t\t\t\t\t\t\t<br><div class=\"test\"><input type=\"text\" name=\"product_attribute[";
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_esc", [], "any", false, false, false, 554);
                    echo "\" placeholder=\"";
                    echo ($context["text_preset_value"] ?? null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_attribute[";
                    // line 555
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset_id][]\" value=\"";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 555)) == 1)) {
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 555), 0, [], "any", false, false, false, 555);
                    }
                    echo "\" /></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                } else {
                    // line 558
                    echo "\t\t\t\t\t\t\t\t<br><div>
\t\t\t\t\t\t\t\t\t";
                    // line 559
                    if ((($context["module_atpresets_allow_multiple"] ?? null) == 1)) {
                        // line 560
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"allow_multiple";
                        // line 561
                        echo ($context["attribute_row"] ?? null);
                        echo "\" name=\"product_attribute[";
                        echo ($context["attribute_row"] ?? null);
                        echo "][allow_multiple]\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 562
                        if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product_attribute"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["allow_multiple"] ?? null) : null)) {
                            echo "checked=\"checked\"";
                        }
                        // line 563
                        echo "\t\t\t\t\t\t\t\t\t\t\tonchange=\"changeSelectionMode(";
                        echo ($context["attribute_row"] ?? null);
                        echo ");\"/>
\t\t\t\t\t\t\t\t\t\t<label for=\"allow_multiple";
                        // line 564
                        echo ($context["attribute_row"] ?? null);
                        echo "\">";
                        echo ($context["text_allow_multiple"] ?? null);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 567
                    echo "\t\t\t\t\t\t\t\t\t<select ";
                    if (twig_get_attribute($this->env, $this->source, $context["product_attribute"], "allow_multiple", [], "any", false, false, false, 567)) {
                        echo "multiple style=\"height:200px\"";
                    }
                    echo " alt=\"";
                    echo ($context["attribute_row"] ?? null);
                    echo "\" name=\"product_attribute[";
                    echo ($context["attribute_row"] ?? null);
                    echo "][preset_id][]\" id=\"input-preset";
                    echo ($context["attribute_row"] ?? null);
                    echo "\" class=\"form-control\" onchange=\"select_preset(this);\" onfocus=\"check_attribute(this);\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option value=\"-1\"></option>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 569
                    $context["current_att"] = 0;
                    // line 570
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["all_presets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 571
                        if ((($context["current_att"] ?? null) != twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 571))) {
                            $context["current_att"] = twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 571);
                            // line 572
                            echo "\t\t\t\t\t\t\t\t\t\t<option color=\"red\" class=\"att";
                            echo ($context["attribute_row"] ?? null);
                            echo " att";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["preset"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["attribute_id"] ?? null) : null);
                            echo "\" value=\"0\" disabled=\"disabled\" style=\"color:red\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_name", [], "any", false, false, false, 572);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 573
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        // line 574
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 574), twig_get_attribute($this->env, $this->source, $context["product_attribute"], "preset_id", [], "any", false, false, false, 574))) {
                            // line 575
                            echo "\t\t\t\t\t\t\t\t\t\t<option alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 575);
                            echo "\" class=\"pre";
                            echo ($context["attribute_row"] ?? null);
                            echo " pre";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 575);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 575);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc", [], "any", false, false, false, 575);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 577
                            echo "\t\t\t\t\t\t\t\t\t\t<option alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 577);
                            echo "\" class=\"pre";
                            echo ($context["attribute_row"] ?? null);
                            echo " pre";
                            echo ($context["attribute_row"] ?? null);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 577);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "preset_id", [], "any", false, false, false, 577);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc", [], "any", false, false, false, 577);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 579
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 580
                    echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t<script>

\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('.att";
                    // line 584
                    echo ($context["attribute_row"] ?? null);
                    echo "').hide();
\t\t\t\t\t\t\t\t\t\$('.pre";
                    // line 585
                    echo ($context["attribute_row"] ?? null);
                    echo "').hide();
\t\t\t\t\t\t\t\t\t\$('.pre";
                    // line 586
                    echo ($context["attribute_row"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 586);
                    echo "').show();
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 589
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 590
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t
                        <td class=\"text-left\">";
            // line 594
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 595
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 595);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 595);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 595);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 595);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 595)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 595)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 595)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 595)] ?? null) : null), "text", [], "any", false, false, false, 595)) : (""));
                echo "</textarea>

\t\t\t\t";
                // line 597
                if (((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1) && (($context["module_atpresets_installed"] ?? null) == 1))) {
                    // line 598
                    echo "\t\t\t\t<span onclick=\"copy_values(";
                    echo ($context["attribute_row"] ?? null);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 598);
                    echo ");\" class=\"input-group-addon\" style=\"cursor:pointer;cursor:hand;\" title=\"";
                    echo ($context["text_copy_value"] ?? null);
                    echo "\">
\t\t\t\t\t\t<i class=\"fa fa-ellipsis-v\" style=\"font-size: large;\"></i>
\t\t\t\t</span>
\t\t\t\t";
                }
                // line 602
                echo "\t\t\t
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 604
            echo "</td>
                        
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#attribute-row";
            // line 607
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button><br>
\t\t\t\t\t\t\t";
            // line 608
            if ((($context["module_atpresets_installed"] ?? null) == 1)) {
                // line 609
                echo "\t\t\t\t\t\t\t<button type=\"button\" onclick=\"add_preset(";
                echo ($context["attribute_row"] ?? null);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_new_preset"] ?? null);
                echo "\" class=\"btn btn-primary\" style=\"margin-top:20px;\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t";
            }
            // line 611
            echo "\t\t\t\t\t\t</td>
\t\t\t
                      </tr>
                      ";
            // line 614
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 615
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 621
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 631
        $context["option_row"] = 0;
        // line 632
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 633
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 633);
            echo "</a></li>
                      ";
            // line 634
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 635
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 637
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 642
        $context["option_row"] = 0;
        // line 643
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 644
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 645
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 646
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 646);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 646);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 646);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 646);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 648
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 650
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 653
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 653)) {
                // line 654
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 656
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 657
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 661
                echo "

                                <option value=\"1\">";
                // line 663
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 664
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 668
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 673
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 673) == "text")) {
                // line 674
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 675
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 677
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 677);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 681
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 681) == "textarea")) {
                // line 682
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 683
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 685
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 685);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 689
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 689) == "file")) {
                // line 690
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 691
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 693
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 693);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 697
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 697) == "date")) {
                // line 698
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 699
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 702
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 702);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 708
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 708) == "time")) {
                // line 709
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 710
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 713
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 713);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 719
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 719) == "datetime")) {
                // line 720
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 721
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 724
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 724);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 730
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 730) == "image"))) {
                // line 731
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 732
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 735
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 736
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 737
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 738
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 739
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 740
                echo ($context["entry_weight"] ?? null);
                echo "</td></td><td class=\"text-right\">SKU</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 746
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 746));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 747
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 748
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 751
                    if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["option_values"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 751)] ?? null) : null)) {
                        // line 752
                        echo "
                                          ";
                        // line 753
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["option_values"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 753)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 754
                            echo "
                                            ";
                            // line 755
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 755) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 755))) {
                                // line 756
                                echo "

                                              <option value=\"";
                                // line 758
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 758);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 758);
                                echo "</option>


                                            ";
                            } else {
                                // line 762
                                echo "

                                              <option value=\"";
                                // line 764
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 764);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 764);
                                echo "</option>


                                            ";
                            }
                            // line 768
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 769
                        echo "                                        ";
                    }
                    // line 770
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 772
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 772);
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 773
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 773);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 774
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 777
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 777)) {
                        // line 778
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 780
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 781
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 785
                        echo "

                                          <option value=\"1\">";
                        // line 787
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 788
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 792
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 795
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 798
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 798) == "+")) {
                        // line 799
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 805
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 811
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 811) == "-")) {
                        // line 812
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 818
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 824
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 826
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 826);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 827
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 830
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 830) == "+")) {
                        // line 831
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 837
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 843
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 843) == "-")) {
                        // line 844
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 850
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 856
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 858
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 858);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 859
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 862
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 862) == "+")) {
                        // line 863
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 869
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 875
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 875) == "-")) {
                        // line 876
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 882
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 888
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 890
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 890);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
<td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 891
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][sku]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "sku", [], "any", false, false, false, 891);
                    echo "\" placeholder=\"SKU\" class=\"form-control\" /></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 892
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 894
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 895
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 896
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"7\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 901
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 906
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 909
                if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["option_values"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 909)] ?? null) : null)) {
                    // line 910
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["option_values"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 910)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 911
                        echo "

                                <option value=\"";
                        // line 913
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 913);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 913);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 917
                    echo "                            ";
                }
                // line 918
                echo "

                          </select>
                        ";
            }
            // line 921
            echo " </div>
                      ";
            // line 922
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 923
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 932
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 933
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 939
        $context["recurring_row"] = 0;
        // line 940
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 941
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 942
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 945
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 946
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 946) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 946))) {
                    // line 947
                    echo "

                                <option value=\"";
                    // line 949
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 949);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 949);
                    echo "</option>


                              ";
                } else {
                    // line 953
                    echo "

                                <option value=\"";
                    // line 955
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 955);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 955);
                    echo "</option>


                              ";
                }
                // line 959
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 960
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 963
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 966
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 967
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 967) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 967))) {
                    // line 968
                    echo "

                                <option value=\"";
                    // line 970
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 970);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 970);
                    echo "</option>


                              ";
                } else {
                    // line 974
                    echo "

                                <option value=\"";
                    // line 976
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 976);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 976);
                    echo "</option>


                              ";
                }
                // line 980
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 981
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 984
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 986
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 987
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 988
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 993
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1004
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1005
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1006
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1007
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1008
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1009
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1015
        $context["discount_row"] = 0;
        // line 1016
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1017
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 1018
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1019
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1020
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1020) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1020))) {
                    // line 1021
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1021);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1021);
                    echo "</option>
                              ";
                } else {
                    // line 1023
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1023);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1023);
                    echo "</option>
                              ";
                }
                // line 1025
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1026
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1027
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1027);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1028
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1028);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1029
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1029);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1032
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1032);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1038
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1038);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1042
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1044
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1045
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1046
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"7\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1051
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1062
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1063
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1064
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1065
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1066
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1072
        $context["special_row"] = 0;
        // line 1073
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1074
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1075
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1078
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1079
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1079) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1079))) {
                    // line 1080
                    echo "

                                <option value=\"";
                    // line 1082
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1082);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1082);
                    echo "</option>


                              ";
                } else {
                    // line 1086
                    echo "

                                <option value=\"";
                    // line 1088
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1088);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1088);
                    echo "</option>


                              ";
                }
                // line 1092
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1093
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1096
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1096);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1097
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1097);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1100
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1100);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1106
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1106);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1110
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1112
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1113
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1114
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1119
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
                <div class=\"table-responsive\">
                <!--SF PRODUCTS IMAGE MANAGER-->
                  <!-- Drop zone -->
                  <div id=\"drop-files\" >
                    <p style=\"\">";
        // line 1130
        echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["pim_data"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["lang"] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["dad_an_image"] ?? null) : null);
        echo "</p>
                    <i>";
        // line 1131
        echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["pim_data"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["lang"] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["select_below"] ?? null) : null);
        echo "</i>
                    <div id=\"frm\" >
                      <input type=\"file\" id=\"file-input\" multiple=\"multiple\" accept=\"image/jpeg,image/png,image/gif,image/bmp\">
                      <label id=\"byPc\" for=\"file-input\" style=\"\">
                        <i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i><br>
                        ";
        // line 1136
        echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["pim_data"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["lang"] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["upload"] ?? null) : null);
        echo "
                      </label><button type=\"button\" id=\"bySer\">
                        <label>
                          <i class=\"fa fa-cloud\" aria-hidden=\"true\"></i><br>
                          ";
        // line 1140
        echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["pim_data"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["lang"] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["server"] ?? null) : null);
        echo "
                        </label>
                      </button><label id=\"byUrl\" for=\"url-input\" >
                        <i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i><br>
                        ";
        // line 1144
        echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["pim_data"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["lang"] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["link"] ?? null) : null);
        echo "
                      </label>
                      <div id=\"url-input\">
                        <span>
                          <input type=\"text\" placeholder =\"http://sonfil.com/image.jpg\">
                          <button class=\"btn btn-info\" type=\"button\"  >Ok</button>
                        </span>
                      </div>
                    </div>
                    ";
        // line 1153
        if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["pim_data"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["permission"] ?? null) : null)) {
            // line 1154
            echo "                    <!-- settings button -->
                    <button id=\"pim_settings\" type=\"button\" class=\"pim-settings btn btn-default\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i></button>
                    ";
        }
        // line 1157
        echo "                  </div>
                  <!-- View zone -->
                  <div id=\"images\" >
                    <div  id=\"list-view\">
                      ";
        // line 1161
        $context["image_row"] = 0;
        // line 1162
        echo "                      ";
        $context["product_images"] = twig_array_merge([0 => ["image" => ($context["image"] ?? null), "thumb" => ($context["thumb"] ?? null), "sort_order" => 0]], ($context["product_images"] ?? null));
        // line 1163
        echo "                      ";
        if (($context["image"] ?? null)) {
            // line 1164
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["product_image"]) {
                // line 1165
                echo "                      <div class=\"image old\" ";
                if (((($context["poip_installed"]) ?? (false)) && ((((twig_get_attribute($this->env, $this->source, ($context["poip_global_settings"] ?? null), "options_images_edit", [], "array", true, true, false, 1165) &&  !(null === (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["poip_global_settings"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["options_images_edit"] ?? null) : null)))) ? ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["poip_global_settings"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["options_images_edit"] ?? null) : null)) : (0)) == 1))) {
                    echo " data-poip = ";
                    echo json_encode($context["product_image"]);
                    echo " ";
                }
                echo " >
                        <span class='previewImg'><img src ='";
                // line 1166
                echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1166);
                echo "' /></span>
                        <span class=\"btm_img\">
                          <i class=\"fa fa-search-plus\" data-toggle=\"tooltip\" title=\"";
                // line 1168
                echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["pim_data"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["lang"] ?? null) : null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["zoom"] ?? null) : null);
                echo "\" aria-hidden=\"true\"></i><i class=\"fa fa-times\" data-toggle=\"tooltip\" title=\"";
                echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["pim_data"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["lang"] ?? null) : null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["delete"] ?? null) : null);
                echo "\" aria-hidden=\"true\" ></i>
                          <i class=\"fa fa-del-all fa-flip-horizontal\" data-toggle=\"tooltip\" data-original-title=\"";
                // line 1169
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["pim_data"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["lang"] ?? null) : null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["delete_all"] ?? null) : null);
                echo "\" aria-hidden=\"true\" ></i>
                        </span>
                        <input  ";
                // line 1171
                if ((($context["image_row"] ?? null) == 0)) {
                    echo " id=\"input-image\" ";
                }
                echo " class = \"img-input\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1171);
                echo "\"  type=\"hidden\" >
                      </div>
                      ";
                // line 1173
                $context["image_row"] = ($context["key"] + 1);
                // line 1174
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['product_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1175
            echo "                      ";
        }
        // line 1176
        echo "                    </div >
                  </div>
                <!--/SF PRODUCTS IMAGE MANAGER-->
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1183
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1185
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1192
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1193
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1199
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1200
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1200);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1201
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1201);
            echo "][points]\" value=\"";
            echo (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["product_reward"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1201)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["product_reward"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1201)] ?? null) : null), "points", [], "any", false, false, false, 1201)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1204
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1210
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1215
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1216
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1221
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1222
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1222);
            echo "</td>
                        <td class=\"text-left\">";
            // line 1223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1224
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1224);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1224);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1224);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1224);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1224);
                echo "]\" value=\"";
                if ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["product_seo_url"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1224)] ?? null) : null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1224)] ?? null) : null)) {
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["product_seo_url"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1224)] ?? null) : null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1224)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1226
                if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["error_keyword"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1226)] ?? null) : null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1226)] ?? null) : null)) {
                    // line 1227
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["error_keyword"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1227)] ?? null) : null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1227)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1229
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1232
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1242
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1243
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1248
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1249
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1249);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1250
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1250);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1255
                echo "                              ";
                if (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["product_layout"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1255)] ?? null) : null) && ((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["product_layout"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1255)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1255)))) {
                    // line 1256
                    echo "

                                <option value=\"";
                    // line 1258
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1258);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1258);
                    echo "</option>


                              ";
                } else {
                    // line 1262
                    echo "

                                <option value=\"";
                    // line 1264
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1264);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1264);
                    echo "</option>


                              ";
                }
                // line 1268
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1269
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1274
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1297
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1302
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1324
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1353
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1382
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1411
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>

";
        // line 1437
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 1438
            echo "<script type=\"text/javascript\"><!--
function addPresetField(attribute_row) {

\t";
            // line 1441
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1442
                echo "\t\thtml  = '<br><div class=\"test\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][preset]\" value=\"\" placeholder=\"";
                echo ($context["text_preset_value"] ?? null);
                echo "\" class=\"form-control\" />';
\t\thtml += '<input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][preset_id][]\" value=\"\" /></div>';
\t";
            } else {
                // line 1445
                echo "\t\thtml = '<br><div>';
\t\t";
                // line 1446
                if ((($context["module_atpresets_allow_multiple"] ?? null) == 1)) {
                    // line 1447
                    echo "\t\t
\t\thtml += '\t<input type=\"checkbox\" id=\"allow_multiple' + attribute_row + '\" name=\"product_attribute[' + attribute_row + '][allow_multiple]\"';
\t\thtml += '\t\tonchange=\"changeSelectionMode('+attribute_row+')\"/>';
\t\thtml += '\t<label for=\"allow_multiple' + attribute_row + '\">";
                    // line 1450
                    echo ($context["text_allow_multiple"] ?? null);
                    echo "</label>'; 
\t\t\t
\t\t";
                }
                // line 1452
                echo "\t
\t\thtml += '<br><select alt=\"' + attribute_row + '\" name=\"product_attribute[' + attribute_row + '][preset_id][]\" id=\"input-preset' + attribute_row + '\" class=\"form-control\" onchange=\"select_preset(this);\"  onfocus=\"check_attribute(this);\">';
\t\thtml += '<option value=\"-1\"></option>';
\t\t\t";
                // line 1455
                $context["current_att"] = 0;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["all_presets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                    // line 1456
                    echo "\t\t\t\t
\t\t\t\t";
                    // line 1457
                    if ((($context["current_att"] ?? null) != twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1457))) {
                        $context["current_att"] = twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1457);
                        // line 1458
                        echo "\t\t\t\thtml += '<option class=\"att' + attribute_row + ' att' + attribute_row + '-";
                        echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1458);
                        echo "\" value=\"0\" disabled=\"disabled\" style=\"color:red\">";
                        echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_name_esc", [], "any", false, false, false, 1458);
                        echo "</option>';
\t\t\t\t";
                    }
                    // line 1460
                    echo "\t\t\t\thtml += '<option alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1460);
                    echo "\" class=\"pre' + attribute_row + ' pre' + attribute_row + '-";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "attribute_id", [], "any", false, false, false, 1460);
                    echo "\" value=\"";
                    echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["preset"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["preset_id"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["preset"], "text_esc2", [], "any", false, false, false, 1460);
                    echo "</option>';
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1462
                echo "\t\thtml  += '  </select></div>';
\t\t\t\t\t\t\t\t
\t";
            }
            // line 1464
            echo "\t
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').parent().append(html);

\t";
            // line 1467
            if ((($context["module_atpresets_allow_multiple"] ?? null) == 1)) {
                echo "\t
\t\taddMultiSelectFunctionality(attribute_row);
\t";
            }
            // line 1470
            echo "\t
\t";
            // line 1471
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 1472
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1473
                    echo "\t\thtml  = '\t<span onclick=\"copy_values(' + attribute_row + ',";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1473);
                    echo ")\" class=\"input-group-addon\" style=\"cursor:pointer;cursor:hand;\" title=\"";
                    echo ($context["text_copy_value"] ?? null);
                    echo "\">';
\t\thtml += '\t\t<i class=\"fa fa-ellipsis-v\" style=\"font-size: large;\"></i>';
\t\thtml += '\t</span>';
\t\t
\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 1477
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1477);
                    echo "][text]\\']').before(html);
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1479
                echo "\t";
            }
            // line 1480
            echo "\t
\t";
            // line 1481
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1482
                echo "\t\tpresetautocomplete(attribute_row);
\t";
            }
            // line 1484
            echo "}
//--></script>
<script type=\"text/javascript\"><!--
function update_attributes(attemplate_id, option) {

\t\$.ajax({ 
\t\turl: 'index.php?route=extension/module/attemplate/update_attributes&user_token=";
            // line 1490
            echo ($context["user_token"] ?? null);
            echo "&attemplate_id=' + attemplate_id + '&option=' + option + '&product_id=' + ";
            echo ($context["product_id"] ?? null);
            echo ",
\t\ttype: 'post',
\t\tdata: \$('#tab-attribute select, #tab-attribute input, #tab-attribute textarea').serialize(),\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\tif (option == 1)
\t\t\t\t\$('#attemmplate_button_add').button('loading');
\t\t\telse if (option == 2)
\t\t\t\t\$('#attemmplate_button_replace').button('loading');
\t\t\telse if (option == 0)
\t\t\t\t\$('#attemmplate_button_default').button('loading');
\t\t\telse {
\t\t\t\t\$('#attgroup option[value=\"-1\"]').prop('selected', true);
\t\t\t\t\$('#attgroup option[value=\"-1\"]').text('";
            // line 1503
            echo ($context["text_loading"] ?? null);
            echo "');
\t\t\t}
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#attemmplate_button_add').button('reset');
\t\t\t\$('#attemmplate_button_replace').button('reset');
\t\t\t\$('#attemmplate_button_default').button('reset');\t\t

\t\t},\t\t\t\t
\t\tsuccess: function(json) {
\t\t\t\$('tr[id^=\\'attribute-row\\']').remove();
\t\t\tif (option == 3) {
\t\t\t\t\$('#attgroup option[value=\"-1\"]').html('";
            // line 1515
            echo ($context["text_add_group"] ?? null);
            echo "');
\t\t\t}\t\t\t\t
\t\t\tattribute_row = 0;
\t\t\tfor (var key in json['product_attributes']) {
\t\t\t\taddAttribute();
\t\t\t\tattribute_row = attribute_row -1;
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(json['product_attributes'][key]['name']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(json['product_attributes'][key]['attribute_id']);
\t\t\t\t
\t\t\t\t";
            // line 1524
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1525
                echo "\t\t\t\t\tif (json['product_attributes'][key]['product_attribute_description'][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1525);
                echo "] !== undefined) {
\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                // line 1526
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1526);
                echo "][text]\\']').val(json['product_attributes'][key]['product_attribute_description'][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1526);
                echo "]['text']);
\t\t\t\t\t}
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1529
            echo "\t\t\t\t
\t\t\t\tif (json['product_attributes'][key]['allow_multiple']) {
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][allow_multiple]\\']').prop('checked','checked');
\t\t\t\t\tchangeSelectionMode(attribute_row);
\t\t\t\t}
\t\t\t\tif ('1' in json['product_attributes'][key]['preset_id']) {
\t\t\t\t\tfor (var preset_key in json['product_attributes'][key]['preset_id']) {
\t\t\t\t\t\tif (json['product_attributes'][key]['preset_id'][preset_key] > 0)
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"'+json['product_attributes'][key]['preset_id'][preset_key]+'\"]').prop('selected', true);
\t\t\t\t\t}\t\t\t
\t\t\t\t} else {\t
\t\t\t\t\tif (json['product_attributes'][key]['preset_id'][0] >0) {
\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"'+json['product_attributes'][key]['preset_id'][0]+'\"]').prop('selected', true);
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['product_attributes'][key]['preset_id'][0]);\t\t
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row + '-' + json['product_attributes'][key]['attribute_id']).show();\t\t\t\t\t\t

\t\t\t\t";
            // line 1549
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1550
                echo "\t\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(json['product_attributes'][key]['preset']);
\t\t\t\t";
            }
            // line 1552
            echo "\t\t\t\t
\t\t\t\t

\t\t\t\tattribute_row = attribute_row +1;
\t\t\t}
\t\t}\t\t\t\t\t\t
\t});\t
}


function save_attemplate() {

\t\$.ajax({ 
\t\turl: 'index.php?route=extension/module/attemplate/save_attemplate&user_token=";
            // line 1565
            echo ($context["user_token"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdata: \$('#tab-attribute select, #tab-attribute input, #tab-attribute textarea, input[name=\"new_attemplate_name\"]').serialize(),\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#attemmplate_button_save').button('loading');
\t\t\t\$('.alert').remove();
\t\t\t\$('#new_attemplate_name .text-danger').remove();\t\t\t
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#attemmplate_button_save').button('reset');
\t\t},\t\t
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\tvar html = '<div class=\"text-danger\">' + json['error'] + '</div>';
\t\t\t\t\$('input[name=\"new_attemplate_name\"]').after(html);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}\t\t\t\t\t\t
\t});\t
}
//--></script>
<script type=\"text/javascript\"><!--
function copy_values(attribute_row, language_id){
\tvar new_value = \$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + language_id + '][text]\\']').val();
\t\$('textarea[name^=\\'product_attribute[' + attribute_row + '][product_attribute_description]\\']').val(new_value);
}

function add_preset(attribute_row) {
\tvar attribute_id = \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val();
\tvar texts = {
\t\t";
            // line 1599
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1600
                echo "\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1600);
                echo ":\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1600);
                echo "][text]\\']').val(),
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1601
            echo "\t
\t};
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/atpresets/insert&user_token=";
            // line 1604
            echo ($context["user_token"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdata: {attribute_id,texts},
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['preset_id']!=0) {
\t\t\t\t";
            // line 1610
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1611
                echo "\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['preset_id']);
\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(json['preset_decoded']);
\t\t\t\t";
            } else {
                // line 1614
                echo "\t\t\t\t\tif (json['new_added']==1) {
\t\t\t\t\t\tif (!\$('.att' + attribute_row + '-' + attribute_id).length)
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').append('<option color=\"red\" class=\"att' + attribute_row + ' att' + attribute_row + '-' + attribute_id + '\" value=\"0\" disabled=\"disabled\" style=\"color:red;display:none;\">'+\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val()+'</option>');
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.att' + attribute_row + '-' + attribute_id).after('<option alt=\"'+attribute_id+'\" class=\"pre' + attribute_row + ' pre' + attribute_row + '-' + attribute_id + '\" value=\"'+json['preset_id']+'\">'+json['preset']+'</option>');
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(json['preset_id']);
\t\t\t\t\t";
                // line 1621
                if ((($context["module_atpresets_allow_multiple"] ?? null) == 1)) {
                    echo "\t
\t\t\t\t\t\taddMultiSelectFunctionality(attribute_row);
\t\t\t\t\t";
                }
                // line 1623
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            // line 1625
            echo "\t\t\t}\t\t
\t\t\talert(json['message']);
\t\t},
\t\terror: function(json) {
\t\t\talert('";
            // line 1629
            echo ($context["text_new_preset_error"] ?? null);
            echo "');
\t\t}
\t});
}
//--></script>
<script type=\"text/javascript\"><!--
";
            // line 1635
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1636
                echo "function presetautocomplete(attribute_row) {

\tvar attribute_id = \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val();
\t\$('#attribute-row'+attribute_row+' .test ul').remove();
\tif (attribute_id != '') {
\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/atpresets/autocomplete&user_token=";
                // line 1644
                echo ($context["user_token"] ?? null);
                echo "&filter_name=' +  encodeURIComponent(request) + '&attribute_id=' + attribute_id,
\t\t\t\t\tdataType: 'json',\t\t\t
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item.not_decoded_text,
\t\t\t\t\t\t\t\tlabel_decoded: item.text,\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvalues: item.texts,
\t\t\t\t\t\t\t\tvalue: item.preset_id\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(item['label_decoded']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(item['value']);
\t\t\t\tvar key;
\t\t\t\tfor (key in item['values']) {
\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + key + '][text]\\']').val(item['values'][key]); 
\t\t\t\t}
\t\t\t}
\t\t});
\t
\t} else {
\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/atpresets/autocomplete&user_token=";
                // line 1672
                echo ($context["user_token"] ?? null);
                echo "&filter_name=' +  encodeURIComponent(request) + '&attribute_id=' + attribute_id,
\t\t\t\t\tdataType: 'json',\t\t\t
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tcategory: item.attribute_name,
\t\t\t\t\t\t\t\tattribute_id: item.attribute_id,
\t\t\t\t\t\t\t\tlabel: item.not_decoded_text,
\t\t\t\t\t\t\t\tlabel_decoded: item.text,
\t\t\t\t\t\t\t\tvalues: item.texts,
\t\t\t\t\t\t\t\tvalue: item.preset_id\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val(item['label_decoded']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(item['value']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['category']);
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['attribute_id']);\t\t\t\t
\t\t\t\tvar key;
\t\t\t\tfor (key in item['values']) {
\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][' + key + '][text]\\']').val(item['values'][key]); 
\t\t\t\t}
\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t}
\t\t});\t
\t}
}

\$('#attribute tbody tr').each(function(index, element) {
\tpresetautocomplete(index);
});
";
            } else {
                // line 1708
                echo "function select_preset(select_node) {
\tvar att_row = \$(select_node).attr('alt');
\tvar preset_id = \$(select_node).find(\":selected\").val();
\tvar attribute_id = \$(select_node).find(\":selected\").attr('alt');
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/atpresets/getPresetTexts&user_token=";
                // line 1714
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + preset_id,
\t\tdataType: 'json',\t\t\t
\t\tsuccess: function(json) {
\t\t\t\$('input[name=\\'product_attribute[' + att_row + '][name]\\']').val(\$('.att' + att_row + '-' + attribute_id).text());
\t\t\t\$('input[name=\\'product_attribute[' + att_row + '][attribute_id]\\']').val(attribute_id);\t
\t\t\t\t
\t\t\t";
                // line 1720
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1721
                    echo "\t\t\t\t\$('textarea[name=\\'product_attribute[' + att_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1721);
                    echo "][text]\\']').val(json['texts'][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1721);
                    echo "]); 
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1723
                echo "\t\t\tif (preset_id != -1) {
\t\t\t\t\$('.att' + att_row).hide();
\t\t\t\t\$('.pre' + att_row).hide();
\t\t\t\t\$('.pre' + att_row + '-' + attribute_id).show();\t\t\t
\t\t\t} else {
\t\t\t\t\$('.att' + att_row).show();
\t\t\t\t\$('.pre' + att_row).show();\t\t\t
\t\t\t}
\t\t\t\t
\t\t}
\t});\t

}

function check_attribute(select_node) {
\tvar att_row = \$(select_node).attr('alt');
\tvar att_text = \$('input[name=\\'product_attribute[' + att_row + '][name]\\']').val();
\t
\tif (att_text=='') {
\t\t\$('.att' + att_row).show();
\t\t\$('.pre' + att_row).show();\t
\t\t\$('input[name=\\'product_attribute[' + att_row + '][attribute_id]\\']').val('');
\t\t\$('select[name=\\'product_attribute[' + att_row + '][preset_id][]\\']').val(-1);
\t}
}

function changeSelectionMode(attribute_row) {
\tif (!\$('#allow_multiple' + attribute_row ).is(':checked')) {
\t\t\$('#input-preset' + attribute_row).css('height','auto');
\t\t\$('#input-preset' + attribute_row).removeAttr('multiple');
\t\t\$('#attribute-row'+attribute_row+' textarea').attr('readonly', false);\t\t
\t\t
\t\t";
                // line 1755
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1756
                    echo "\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1756);
                    echo "][text]\\']').val(''); 
\t\t\tvar new_value";
                    // line 1757
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1757);
                    echo " = ''; 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1759
                echo "\t\t
\t\tvar ids = '';
\t\t\$('#input-preset' + attribute_row + ' option').each(function(index) {
\t\t\tif (\$(this).prop('selected')) {
\t\t\t\tids += '_'+\$(this).val();\t\t
\t\t\t}
\t\t\tif (\$(this).val() == -1) {
\t\t\t\t\$(this).prop('selected', false);\t\t
\t\t\t}\t\t\t
\t\t});
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/atpresets/getManyPresetsTexts&user_token=";
                // line 1770
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + ids,
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json) {
\t\t\t\t\t";
                // line 1774
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1775
                    echo "
\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 1776
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1776);
                    echo "][text]\\']').val(json[";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1776);
                    echo "]);
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1777
                echo "\t
\t\t\t\t} else {
\t\t\t\t\t";
                // line 1779
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1780
                    echo "\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1780);
                    echo "][text]\\']').val('');
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1781
                echo "\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});\t\t\t
\t} else  {
\t\t\$('#input-preset' + attribute_row).attr('multiple','multiple');
\t\t\$('#input-preset' + attribute_row).css('height','200px');
\t\t\$('#attribute-row'+attribute_row+' textarea').attr('readonly', true);
\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\'] option[value=\"-1\"]').prop('selected', false);
\t}
}

function addMultiSelectFunctionality(attribute_row) {
\$('#input-preset' + attribute_row + ' option').unbind( \"mousedown\");
\$('#input-preset' + attribute_row + ' option').mousedown(function(e) {
if (\$('input[name=\"product_attribute[' + attribute_row + '][allow_multiple]\"]').is(':checked')) {
    e.preventDefault();
\tif (\$(this).val() != -1) {
\t\t\$(this).prop('selected', !\$(this).prop('selected'));

\t\tif (\$(this).prop('selected')) {
\t\t\tvar attribute_id = \$(this).attr('alt');
\t\t\tif (\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val() != attribute_id) {
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(\$('.att' + attribute_row + '-' + attribute_id).text());
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(attribute_id);\t
\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\$('.pre' + attribute_row + '-' + attribute_id).show();\t\t\t\t\t
\t\t\t}
\t\t}
\t\t";
                // line 1811
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1812
                    echo "\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1812);
                    echo "][text]\\']').val(''); 
\t\t\tvar new_value";
                    // line 1813
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1813);
                    echo " = ''; 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1814
                echo "\t\t\t
\t\tvar ids = '';
\t\t\$('#input-preset' + attribute_row + ' option').each(function(index) {
\t\t\tif (\$(this).prop('selected')) {
\t\t\t\tids += '_'+\$(this).val();\t\t
\t\t\t}
\t\t});
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/atpresets/getManyPresetsTexts&user_token=";
                // line 1822
                echo ($context["user_token"] ?? null);
                echo "&preset_id=' + ids,
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json) {
\t\t\t\t\t";
                // line 1826
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1827
                    echo "
\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    // line 1828
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1828);
                    echo "][text]\\']').val(json[";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1828);
                    echo "]);
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1829
                echo "\t
\t\t\t\t} else {
\t\t\t\t\t";
                // line 1831
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1832
                    echo "\t\t\t\t\t\t\$('textarea[name=\\'product_attribute[' + attribute_row + '][product_attribute_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1832);
                    echo "][text]\\']').val('');
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1833
                echo "\t\t\t
\t\t\t\t}
\t\t\t}
\t\t});\t\t\t\t
\t} else {
\t\t\$(this).prop('selected', false);
\t}
}
\treturn false;
});\t
}

";
                // line 1845
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (($context["attribute_row"] ?? null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 1846
                    echo "addMultiSelectFunctionality(";
                    echo $context["i"];
                    echo ");
if (\$('#allow_multiple";
                    // line 1847
                    echo $context["i"];
                    echo "').attr(\"checked\"))
\t\$('#attribute-row";
                    // line 1848
                    echo $context["i"];
                    echo " textarea').attr('readonly', true);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 1851
            echo "//--></script>
";
        }
        // line 1853
        echo "
\t\t\t
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1856
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1860
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1862
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1863
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1863);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1863);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1863);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1863);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1865
        echo "\t  html += '  </td>';
\t  
\t\t\t";
        // line 1867
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 1868
            echo "\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button><br><button type=\"button\" onclick=\"add_preset(' + attribute_row + ')\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_new_preset"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"margin-top:20px;\"><i class=\"fa fa-save\"></i></button></td>';
\t\t\t";
        } else {
            // line 1870
            echo "\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t";
        }
        // line 1872
        echo "\t\t\t
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);


\t\t\t\t";
        // line 1878
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 1879
            echo "\t\t\t\t\taddPresetField(attribute_row);
\t\t\t\t";
        }
        // line 1881
        echo "\t\t\t
\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1891
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {

\t\t\t\t";
        // line 1895
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 1896
            echo "\t\t\t\t\t";
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1897
                echo "\t\t\t\t\t\tif (encodeURIComponent(request)=='') {
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val('');
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"blur\");
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"focus\");
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"keydown\");\t\t\t\t\t
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val('');
\t\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(0);\t\t\t
\t\t\t\t\t\t\tpresetautocomplete(attribute_row);\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t";
            } else {
                // line 1907
                echo "\t\t\t\t\t\tif (encodeURIComponent(request)=='') {
\t\t\t\t\t\t\t\$('.att' + attribute_row).show();
\t\t\t\t\t\t\t\$('.pre' + attribute_row).show();
\t\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(-1);\t\t\t\t\t\t\t
\t\t\t\t\t\t}\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 1913
            echo "\t\t\t\t";
        }
        // line 1914
        echo "\t\t\t
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \t\t\t
\t\t\tif (item['value'] != \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val()) {\t\t\t\t
\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);\t\t\t
\t\t\t\t";
        // line 1930
        if ((($context["module_atpresets_installed"] ?? null) == 1)) {
            // line 1931
            echo "\t\t\t\t\t";
            if ((($context["module_atpresets_selecttype"] ?? null) == 0)) {
                // line 1932
                echo "\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"blur\");
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"focus\");
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').unbind(\"keydown\");\t\t\t\t\t
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset]\\']').val('');
\t\t\t\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][preset_id]\\']').val(0);\t\t\t
\t\t\t\t\t\tpresetautocomplete(attribute_row);
\t\t\t\t\t";
            } else {
                // line 1939
                echo "\t\t\t\t\t\t\$('.att' + attribute_row).hide();
\t\t\t\t\t\t\$('.pre' + attribute_row).hide();
\t\t\t\t\t\t\$('.pre' + attribute_row + '-' + item['value']).show();\t
\t\t\t\t\t\t\$('select[name=\\'product_attribute[' + attribute_row + '][preset_id][]\\']').val(-1);\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 1944
            echo "\t\t\t\t";
        }
        // line 1945
        echo "\t\t\t}
\t\t\t
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1956
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1961
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1984
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1986
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1987
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1993
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1994
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2000
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 2001
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2007
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2008
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2014
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2015
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2021
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2022
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 2028
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 2029
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 2038
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2039
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 2040
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2041
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2042
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 2043
        echo ($context["entry_weight"] ?? null);
        echo "</td></td><td class=\"text-right\">SKU</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"7\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 2052
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 2080
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 2085
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 2090
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 2100
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2107
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 2109
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 2110
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 2116
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 2121
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 2126
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
html += ' <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" placeholder=\"SKU\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 2128
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 2139
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 2144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2145
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2145);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2145), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2147
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2148
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2149
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2150
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2151
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2152
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2153
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 2167
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 2172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2173
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2173);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2173), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2175
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2176
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2177
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2178
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2179
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2180
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 2186
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 2195
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2199
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2200
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2201
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 2211
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 2217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2218
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 2218);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 2218);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2220
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 2224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2225
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 2225);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 2225);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2227
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2230
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 2242
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 2247
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 2252
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>

\t\t\t";
        // line 2263
        if ((($context["product_variant_status"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["variant_setting"] ?? null), "type", [], "any", false, false, false, 2263) == "custom"))) {
            // line 2264
            echo "\t\t\t  <script type=\"text/javascript\"><!--
\t\t\t\t// Product Variant
\t\t\t\t\t\$('input[name=\\'variant\\']').autocomplete({
\t\t\t\t\t\t'source': function(request, response) {
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
            // line 2269
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\t\t\t\tdataType: 'json',\t\t\t
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
\t\t\t\t\t\t'select': function(item) {
\t\t\t\t\t\t\t\$('input[name=\\'variant\\']').val('');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#product_variant' + item['value']).remove();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#product_variant').append('<div id=\"product_variant' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_variant[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t\t\t\t\t}\t
\t\t\t\t\t});

\t\t\t\t\t\$('#product_variant').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\t});
\t\t\t//--></script>
\t\t\t";
        }
        // line 2295
        echo "\t\t\t\t

   <!--SF PRODUCTS IMAGE MANAGER-->
  ";
        // line 2298
        if ((($context["poip_global_settings"] ?? null) && (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["poip_global_settings"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["options_images_edit"] ?? null) : null))) {
            // line 2299
            echo "  \t<script type=\"text/javascript\" src=\"view/template/extension/sf_products_image_manager/js/poip-support.js\"></script>
  ";
        }
        // line 2301
        echo "  <script type=\"text/javascript\">pimJson = ";
        echo json_encode(($context["pim_data"] ?? null));
        echo "</script>
  <script type=\"text/javascript\" src=\"view/template/extension/sf_products_image_manager/js/jquery-ui.js\"></script>
  <script type=\"text/javascript\" src=\"view/template/extension/sf_products_image_manager/js/pim.js?v=3.0.7\"></script>
   <!--/SF PRODUCTS IMAGE MANAGER-->
  
";
        // line 2306
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5001 => 2306,  4992 => 2301,  4988 => 2299,  4986 => 2298,  4981 => 2295,  4952 => 2269,  4945 => 2264,  4943 => 2263,  4929 => 2252,  4921 => 2247,  4913 => 2242,  4898 => 2230,  4893 => 2227,  4882 => 2225,  4878 => 2224,  4872 => 2220,  4861 => 2218,  4857 => 2217,  4848 => 2211,  4835 => 2201,  4831 => 2200,  4825 => 2199,  4818 => 2195,  4806 => 2186,  4797 => 2180,  4793 => 2179,  4789 => 2178,  4785 => 2177,  4781 => 2176,  4778 => 2175,  4767 => 2173,  4763 => 2172,  4755 => 2167,  4738 => 2153,  4734 => 2152,  4730 => 2151,  4726 => 2150,  4722 => 2149,  4718 => 2148,  4715 => 2147,  4704 => 2145,  4700 => 2144,  4692 => 2139,  4678 => 2128,  4673 => 2126,  4665 => 2121,  4657 => 2116,  4648 => 2110,  4644 => 2109,  4639 => 2107,  4629 => 2100,  4616 => 2090,  4608 => 2085,  4600 => 2080,  4569 => 2052,  4557 => 2043,  4553 => 2042,  4549 => 2041,  4545 => 2040,  4541 => 2039,  4537 => 2038,  4525 => 2029,  4521 => 2028,  4512 => 2022,  4508 => 2021,  4499 => 2015,  4495 => 2014,  4486 => 2008,  4482 => 2007,  4473 => 2001,  4469 => 2000,  4460 => 1994,  4456 => 1993,  4447 => 1987,  4443 => 1986,  4438 => 1984,  4412 => 1961,  4404 => 1956,  4391 => 1945,  4388 => 1944,  4381 => 1939,  4372 => 1932,  4369 => 1931,  4367 => 1930,  4349 => 1914,  4346 => 1913,  4338 => 1907,  4326 => 1897,  4323 => 1896,  4321 => 1895,  4314 => 1891,  4302 => 1881,  4298 => 1879,  4296 => 1878,  4288 => 1872,  4282 => 1870,  4274 => 1868,  4272 => 1867,  4268 => 1865,  4251 => 1863,  4247 => 1862,  4242 => 1860,  4235 => 1856,  4230 => 1853,  4226 => 1851,  4217 => 1848,  4213 => 1847,  4208 => 1846,  4204 => 1845,  4190 => 1833,  4181 => 1832,  4177 => 1831,  4173 => 1829,  4163 => 1828,  4160 => 1827,  4156 => 1826,  4149 => 1822,  4139 => 1814,  4131 => 1813,  4126 => 1812,  4122 => 1811,  4090 => 1781,  4081 => 1780,  4077 => 1779,  4073 => 1777,  4063 => 1776,  4060 => 1775,  4056 => 1774,  4049 => 1770,  4036 => 1759,  4028 => 1757,  4023 => 1756,  4019 => 1755,  3985 => 1723,  3974 => 1721,  3970 => 1720,  3961 => 1714,  3953 => 1708,  3914 => 1672,  3883 => 1644,  3873 => 1636,  3871 => 1635,  3862 => 1629,  3856 => 1625,  3852 => 1623,  3846 => 1621,  3837 => 1614,  3832 => 1611,  3830 => 1610,  3821 => 1604,  3816 => 1601,  3805 => 1600,  3801 => 1599,  3764 => 1565,  3749 => 1552,  3744 => 1550,  3742 => 1549,  3720 => 1529,  3709 => 1526,  3704 => 1525,  3700 => 1524,  3688 => 1515,  3673 => 1503,  3655 => 1490,  3647 => 1484,  3643 => 1482,  3641 => 1481,  3638 => 1480,  3635 => 1479,  3627 => 1477,  3617 => 1473,  3612 => 1472,  3610 => 1471,  3607 => 1470,  3601 => 1467,  3596 => 1464,  3591 => 1462,  3576 => 1460,  3568 => 1458,  3565 => 1457,  3562 => 1456,  3557 => 1455,  3552 => 1452,  3546 => 1450,  3541 => 1447,  3539 => 1446,  3536 => 1445,  3529 => 1442,  3527 => 1441,  3522 => 1438,  3520 => 1437,  3491 => 1411,  3459 => 1382,  3427 => 1353,  3395 => 1324,  3370 => 1302,  3362 => 1297,  3337 => 1274,  3327 => 1269,  3321 => 1268,  3312 => 1264,  3308 => 1262,  3299 => 1258,  3295 => 1256,  3292 => 1255,  3288 => 1254,  3281 => 1250,  3277 => 1249,  3274 => 1248,  3270 => 1247,  3263 => 1243,  3259 => 1242,  3247 => 1232,  3234 => 1229,  3228 => 1227,  3226 => 1226,  3206 => 1224,  3202 => 1223,  3198 => 1222,  3195 => 1221,  3191 => 1220,  3184 => 1216,  3180 => 1215,  3172 => 1210,  3164 => 1204,  3153 => 1201,  3149 => 1200,  3146 => 1199,  3142 => 1198,  3134 => 1193,  3130 => 1192,  3118 => 1185,  3111 => 1183,  3102 => 1176,  3099 => 1175,  3093 => 1174,  3091 => 1173,  3082 => 1171,  3077 => 1169,  3071 => 1168,  3066 => 1166,  3057 => 1165,  3052 => 1164,  3049 => 1163,  3046 => 1162,  3044 => 1161,  3038 => 1157,  3033 => 1154,  3031 => 1153,  3019 => 1144,  3012 => 1140,  3005 => 1136,  2997 => 1131,  2993 => 1130,  2979 => 1119,  2972 => 1114,  2966 => 1113,  2964 => 1112,  2957 => 1110,  2946 => 1106,  2933 => 1100,  2923 => 1097,  2915 => 1096,  2910 => 1093,  2904 => 1092,  2895 => 1088,  2891 => 1086,  2882 => 1082,  2878 => 1080,  2875 => 1079,  2871 => 1078,  2865 => 1075,  2860 => 1074,  2855 => 1073,  2853 => 1072,  2844 => 1066,  2840 => 1065,  2836 => 1064,  2832 => 1063,  2828 => 1062,  2814 => 1051,  2807 => 1046,  2801 => 1045,  2799 => 1044,  2792 => 1042,  2781 => 1038,  2768 => 1032,  2758 => 1029,  2750 => 1028,  2742 => 1027,  2739 => 1026,  2733 => 1025,  2725 => 1023,  2717 => 1021,  2714 => 1020,  2710 => 1019,  2706 => 1018,  2701 => 1017,  2696 => 1016,  2694 => 1015,  2685 => 1009,  2681 => 1008,  2677 => 1007,  2673 => 1006,  2669 => 1005,  2665 => 1004,  2651 => 993,  2644 => 988,  2638 => 987,  2636 => 986,  2629 => 984,  2624 => 981,  2618 => 980,  2609 => 976,  2605 => 974,  2596 => 970,  2592 => 968,  2589 => 967,  2585 => 966,  2579 => 963,  2574 => 960,  2568 => 959,  2559 => 955,  2555 => 953,  2546 => 949,  2542 => 947,  2539 => 946,  2535 => 945,  2529 => 942,  2524 => 941,  2519 => 940,  2517 => 939,  2508 => 933,  2504 => 932,  2488 => 923,  2486 => 922,  2483 => 921,  2477 => 918,  2474 => 917,  2462 => 913,  2458 => 911,  2453 => 910,  2451 => 909,  2445 => 906,  2435 => 901,  2428 => 896,  2422 => 895,  2420 => 894,  2413 => 892,  2405 => 891,  2395 => 890,  2391 => 888,  2383 => 882,  2375 => 876,  2372 => 875,  2364 => 869,  2356 => 863,  2354 => 862,  2346 => 859,  2336 => 858,  2332 => 856,  2324 => 850,  2316 => 844,  2313 => 843,  2305 => 837,  2297 => 831,  2295 => 830,  2287 => 827,  2277 => 826,  2273 => 824,  2265 => 818,  2257 => 812,  2254 => 811,  2246 => 805,  2238 => 799,  2236 => 798,  2228 => 795,  2223 => 792,  2216 => 788,  2212 => 787,  2208 => 785,  2201 => 781,  2197 => 780,  2193 => 778,  2191 => 777,  2183 => 774,  2173 => 773,  2165 => 772,  2161 => 770,  2158 => 769,  2152 => 768,  2143 => 764,  2139 => 762,  2130 => 758,  2126 => 756,  2124 => 755,  2121 => 754,  2117 => 753,  2114 => 752,  2112 => 751,  2104 => 748,  2099 => 747,  2095 => 746,  2086 => 740,  2082 => 739,  2078 => 738,  2074 => 737,  2070 => 736,  2066 => 735,  2060 => 732,  2057 => 731,  2054 => 730,  2039 => 724,  2031 => 721,  2028 => 720,  2025 => 719,  2010 => 713,  2002 => 710,  1999 => 709,  1996 => 708,  1981 => 702,  1973 => 699,  1970 => 698,  1967 => 697,  1954 => 693,  1947 => 691,  1944 => 690,  1941 => 689,  1928 => 685,  1921 => 683,  1918 => 682,  1915 => 681,  1902 => 677,  1895 => 675,  1892 => 674,  1890 => 673,  1883 => 668,  1876 => 664,  1872 => 663,  1868 => 661,  1861 => 657,  1857 => 656,  1853 => 654,  1851 => 653,  1843 => 650,  1836 => 648,  1817 => 646,  1812 => 645,  1807 => 644,  1804 => 643,  1802 => 642,  1794 => 637,  1791 => 636,  1785 => 635,  1783 => 634,  1772 => 633,  1767 => 632,  1765 => 631,  1752 => 621,  1745 => 616,  1739 => 615,  1737 => 614,  1732 => 611,  1724 => 609,  1722 => 608,  1716 => 607,  1711 => 604,  1703 => 602,  1691 => 598,  1689 => 597,  1671 => 595,  1667 => 594,  1661 => 590,  1657 => 589,  1648 => 586,  1644 => 585,  1640 => 584,  1634 => 580,  1628 => 579,  1612 => 577,  1596 => 575,  1594 => 574,  1591 => 573,  1579 => 572,  1576 => 571,  1569 => 570,  1567 => 569,  1553 => 567,  1545 => 564,  1540 => 563,  1536 => 562,  1530 => 561,  1527 => 560,  1525 => 559,  1522 => 558,  1512 => 555,  1503 => 554,  1500 => 553,  1498 => 552,  1492 => 551,  1484 => 550,  1478 => 548,  1473 => 547,  1471 => 546,  1462 => 540,  1458 => 539,  1451 => 534,  1440 => 530,  1434 => 527,  1429 => 524,  1419 => 522,  1413 => 521,  1409 => 520,  1398 => 516,  1390 => 515,  1382 => 514,  1374 => 508,  1364 => 506,  1358 => 505,  1352 => 501,  1350 => 500,  1342 => 494,  1333 => 492,  1326 => 491,  1322 => 490,  1318 => 489,  1311 => 487,  1308 => 486,  1300 => 481,  1294 => 480,  1288 => 478,  1280 => 473,  1277 => 472,  1268 => 469,  1261 => 468,  1257 => 467,  1252 => 465,  1245 => 463,  1241 => 462,  1237 => 461,  1230 => 456,  1221 => 454,  1214 => 453,  1210 => 452,  1206 => 451,  1199 => 449,  1193 => 445,  1185 => 443,  1180 => 442,  1175 => 441,  1170 => 439,  1165 => 438,  1163 => 437,  1160 => 436,  1156 => 435,  1151 => 433,  1145 => 429,  1136 => 427,  1129 => 426,  1125 => 425,  1121 => 424,  1114 => 422,  1108 => 418,  1099 => 416,  1092 => 415,  1088 => 414,  1084 => 413,  1077 => 411,  1066 => 407,  1059 => 405,  1048 => 399,  1043 => 397,  1035 => 391,  1028 => 387,  1024 => 386,  1020 => 384,  1013 => 380,  1009 => 379,  1005 => 377,  1003 => 376,  995 => 371,  987 => 365,  981 => 364,  972 => 360,  968 => 358,  959 => 354,  955 => 352,  952 => 351,  948 => 350,  940 => 345,  931 => 341,  926 => 339,  918 => 333,  912 => 332,  903 => 328,  899 => 326,  890 => 322,  886 => 320,  883 => 319,  879 => 318,  871 => 313,  860 => 307,  852 => 304,  844 => 301,  837 => 297,  826 => 291,  820 => 288,  814 => 284,  809 => 283,  806 => 282,  801 => 280,  798 => 279,  795 => 278,  790 => 277,  787 => 276,  782 => 274,  779 => 273,  777 => 272,  772 => 270,  764 => 264,  758 => 263,  749 => 259,  745 => 257,  736 => 253,  732 => 251,  729 => 250,  725 => 249,  715 => 244,  707 => 238,  700 => 234,  696 => 233,  692 => 231,  685 => 227,  681 => 226,  677 => 224,  675 => 223,  667 => 218,  658 => 214,  651 => 212,  642 => 208,  637 => 206,  629 => 200,  623 => 199,  614 => 195,  610 => 193,  601 => 189,  597 => 187,  594 => 186,  590 => 185,  584 => 182,  578 => 179,  569 => 175,  564 => 173,  555 => 169,  550 => 167,  541 => 163,  534 => 161,  525 => 157,  518 => 155,  509 => 151,  502 => 149,  493 => 145,  486 => 143,  477 => 139,  470 => 137,  461 => 133,  454 => 131,  449 => 128,  443 => 127,  441 => 126,  435 => 125,  430 => 123,  424 => 119,  407 => 115,  398 => 113,  385 => 109,  378 => 107,  365 => 103,  358 => 101,  344 => 96,  337 => 94,  323 => 89,  316 => 87,  302 => 82,  295 => 80,  281 => 75,  274 => 73,  269 => 70,  263 => 69,  261 => 68,  251 => 67,  244 => 65,  229 => 61,  222 => 59,  217 => 56,  211 => 55,  209 => 54,  199 => 53,  192 => 51,  186 => 49,  182 => 48,  179 => 47,  162 => 45,  158 => 44,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
