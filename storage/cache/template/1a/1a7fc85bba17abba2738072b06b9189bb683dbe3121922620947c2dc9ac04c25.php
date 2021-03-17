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

/* default/template/extension/payment/corvuspay.twig */
class __TwigTemplate_9b62d97d5b73d85dc56bb7b545bf11e512f86790d8590c2c30927e88cfd2e8f9 extends \Twig\Template
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
        echo "<form name=\"pay\" action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">

<input id=\"target\" name=\"target\" value=\"_top\" hidden=\"true\"/>

<input id=\"mode\" name=\"mode\" value=\"form\" hidden=\"true\"/>

 <input type=\"hidden\" name=\"store_id\" value=\"";
        // line 7
        echo ($context["merchant"] ?? null);
        echo "\">

 <input id=\"require_complete\"  name=\"require_complete\" value=\"true\" hidden=\"true\"/> 

<input type=\"hidden\" name=\"order_number\" value=\"";
        // line 11
        echo ($context["order_id"] ?? null);
        echo "\">

<input type=\"hidden\" name=\"amount\" value=\"";
        // line 13
        echo ($context["total"] ?? null);
        echo "\">

<input type=\"hidden\" name=\"hash\" value=\"";
        // line 15
        echo ($context["md5"] ?? null);
        echo "\">

<input id=\"currency\" name=\"currency\" value=\"";
        // line 17
        echo ($context["currency"] ?? null);
        echo "\" hidden=\"true\"/>

<input id=\"cart\"  name=\"cart\" value=\"Web shop kupnja - ";
        // line 19
        echo ($context["order_id"] ?? null);
        echo "\" hidden=\"true\"/>

<input id=\"language\" name=\"language\" value=\"";
        // line 21
        echo ($context["language"] ?? null);
        echo "\" hidden=\"true\"/>

<input type=\"hidden\" name=\"cardholder_name\" value=\"";
        // line 23
        echo ($context["firstname"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_surname\" value=\"";
        // line 24
        echo ($context["lastname"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_address\" value=\"";
        // line 25
        echo ($context["address"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_city\" value=\"";
        // line 26
        echo ($context["city"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_country\" value=\"";
        // line 27
        echo ($context["country"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_zip_code\" value=\"";
        // line 28
        echo ($context["postcode"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_phone\" value=\"";
        // line 29
        echo ($context["telephone"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"cardholder_email\" value=\"";
        // line 30
        echo ($context["email"] ?? null);
        echo "\">
<input type=\"hidden\" name=\"payment_all\" value=\"";
        // line 31
        echo ($context["number_of_installments"] ?? null);
        echo "\">



<div class=\"buttons pull-right\">
     <input type=\"submit\" value=\"";
        // line 36
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" />
        
        
    </div>
    <div class=\"clearfix\"></div>
    
</form>


";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/corvuspay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  79 => 21,  74 => 19,  69 => 17,  64 => 15,  59 => 13,  54 => 11,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/corvuspay.twig", "");
    }
}
