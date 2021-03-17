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

/* basel/template/common/success.twig */
class __TwigTemplate_3c61e0f645afb7b4c69f7c618f76bbf7002f7663664b1e64b501683beeedc282 extends \Twig\Template
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

<!-- Glami piXel for KOZO.hr -->
<script>
(function(f, a, s, h, i, o, n) {f['GlamiTrackerObject'] = i; f[i]=f[i]||function(){(f[i].q=f[i].q||[]).push(arguments)};o=a.createElement(s), n=a.getElementsByTagName(s)[0];o.async=1;o.src=h;n.parentNode.insertBefore(o,n) })(window, document, 'script', '//www.glami.hr/js/compiled/pt.js', 'glami');
glami('create', '78FEF97D04F20D6F870D45C4534F59BF', 'hr');
glami('track', 'PageView');
glami('track', 'Purchase', {
item_ids: [";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            echo "'";
            echo twig_get_attribute($this->env, $this->source, $context["prod"], "model", [], "any", false, false, false, 9);
            if (twig_get_attribute($this->env, $this->source, $context["prod"], "value", [], "any", false, false, false, 9)) {
                echo ".";
                echo twig_get_attribute($this->env, $this->source, $context["prod"], "value", [], "any", false, false, false, 9);
            }
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "], // bought product IDs. Use the same IDs as you use in the feed 
value: ";
        // line 10
        echo ($context["total"] ?? null);
        echo ", // order value (sum of product values)
currency: 'HRK', // order value currency
transaction_id: '";
        // line 12
        echo ($context["order_id"] ?? null);
        echo "' // order ID
});
</script>
<!-- End Glami piXel -->
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </ul>
  <div class=\"row\">";
        // line 22
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 23
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 25
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 29
            echo "    ";
        }
        // line 30
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"inline-link\">";
        // line 32
        echo ($context["text_message"] ?? null);
        echo "</div>
      ";
        // line 33
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 34
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 37
        if (($context["gtag_event"] ?? null)) {
            echo ($context["gtag_event"] ?? null);
        }
        // line 38
        echo "      
";
        // line 39
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 39,  150 => 38,  146 => 37,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  121 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  97 => 22,  94 => 21,  83 => 19,  79 => 18,  70 => 12,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/success.twig", "");
    }
}
