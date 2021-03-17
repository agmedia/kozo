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

/* basel/template/product/category.twig */
class __TwigTemplate_a3048e8b9418dfb59349eca3d4712d126b6bba34e22c94e097838e97ee824537 extends \Twig\Template
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
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  
  <div class=\"row\">
  
  ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
 
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "
      
      <h1 id=\"page-title\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      ";
        // line 27
        if (((($context["thumb"] ?? null) && ($context["category_thumb_status"] ?? null)) || ($context["description"] ?? null))) {
            // line 28
            echo "        ";
            if ((($context["thumb"] ?? null) && ($context["category_thumb_status"] ?? null))) {
                // line 29
                echo "        <img class=\"category-main-thumb\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ((($context["custom_alt"] ?? null)) ? (($context["custom_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" title=\"";
                echo ((($context["custom_imgtitle"] ?? null)) ? (($context["custom_imgtitle"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" />
        ";
            }
            // line 31
            echo "        ";
            if ((($context["description"] ?? null) && (($context["description"] ?? null) != "<p><br></p>"))) {
                // line 32
                echo "        <div class=\"category-description\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 34
            echo "      ";
        }
        // line 35
        echo "      
      ";
        // line 36
        if ((($context["categories"] ?? null) && ($context["category_subs_status"] ?? null))) {
            // line 37
            echo "      <h3 class=\"lined-title\"><span>";
            echo ($context["text_refine"] ?? null);
            echo "</span></h3>
      \t<div class=\"grid-holder categories grid";
            // line 38
            echo ($context["basel_subs_grid"] ?? null);
            echo "\">
        \t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "            <div class=\"item\">
            <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 41);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "\" /></a>
            <a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                echo "</a></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </div>
     ";
        }
        // line 46
        echo "\t      
      ";
        // line 47
        if (($context["products"] ?? null)) {
            // line 48
            echo "      <div id=\"product-view\" class=\"grid\">
      
      <div class=\"table filter\">
      
      \t<div class=\"table-cell nowrap hidden-sm hidden-md hidden-lg\"><a class=\"filter-trigger-btn\"></a></div>
          
          <div class=\"table-cell nowrap hidden-xs\">
         <a id=\"grid-view\" class=\"view-icon grid\" ><span class=\"gridb\">4</span></a>
              <a id=\"grid-view-tri\" class=\"view-icon grid\" ><span class=\"gridb\">3</span></a>
          </div>
          
          <div class=\"table-cell w100\">
          <a href=\"";
            // line 60
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"hidden-xs\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
          </div>
          
          <div class=\"table-cell nowrap text-right\">
          <div class=\"sort-select\">
          <span class=\"hidden-xs\">";
            // line 65
            echo ($context["text_sort"] ?? null);
            echo "</span>
          <select id=\"input-sort\" class=\"form-control input-sm inline\" onchange=\"location = this.value;\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 68
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 68) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 69
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 69);
                    echo "\" selected=\"selected\"> ";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 69);
                    echo "</option>
            ";
                } else {
                    // line 71
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 71);
                    echo "\" >";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 71);
                    echo "</option>
            ";
                }
                // line 73
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "          </select>
          </div>
          </div>
          
          
      
      </div>
      
      <div class=\"grid-holder product-holder grid";
            // line 82
            echo ($context["basel_prod_grid"] ?? null);
            echo "\">
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "        ";
                $this->loadTemplate("basel/template/product/single_product.twig", "basel/template/product/category.twig", 84)->display($context);
                // line 85
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </div>
      </div> <!-- #product-view ends -->
      
      <div class=\"row pagination-holder\">
        <div class=\"col-sm-6 xs-text-center pagination-navigation\">";
            // line 90
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right xs-text-center\"><span class=\"pagination-text\">";
            // line 91
            echo ($context["results"] ?? null);
            echo "</span></div>
      </div>
      
      ";
        }
        // line 95
        echo "      
      ";
        // line 96
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 97
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 99
        echo "      
      ";
        // line 100
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 101
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "basel/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  325 => 101,  321 => 100,  318 => 99,  312 => 97,  310 => 96,  307 => 95,  300 => 91,  296 => 90,  290 => 86,  276 => 85,  273 => 84,  256 => 83,  252 => 82,  242 => 74,  236 => 73,  228 => 71,  220 => 69,  217 => 68,  213 => 67,  208 => 65,  198 => 60,  184 => 48,  182 => 47,  179 => 46,  175 => 44,  165 => 42,  155 => 41,  152 => 40,  148 => 39,  144 => 38,  139 => 37,  137 => 36,  134 => 35,  131 => 34,  125 => 32,  122 => 31,  112 => 29,  109 => 28,  107 => 27,  102 => 25,  97 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/category.twig", "");
    }
}
