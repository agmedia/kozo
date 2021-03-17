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

/* basel/template/account/wishlist.twig */
class __TwigTemplate_faaa004aae89dd4dffdd54fabfb9a0bf086c33c1cc37d69f1893b8a747b8248a extends \Twig\Template
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
        echo "  <div class=\"row\">";
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
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      ";
        // line 24
        if (($context["products"] ?? null)) {
            // line 25
            echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"remove-cell\"></td>
              <td></td>
              <td>";
            // line 30
            echo ($context["column_name"] ?? null);
            echo "</td>
              <td class=\"hidden-xs hidden-sm\">";
            // line 31
            echo ($context["column_model"] ?? null);
            echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
            // line 32
            echo ($context["column_stock"] ?? null);
            echo "</td>
              <td class=\"text-right price-cell hidden-xs hidden-sm\">";
            // line 33
            echo ($context["column_price"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "            <tr>
            <td class=\"remove-cell text-center\"><a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 40);
                echo "\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"product-remove\"><i class=\"fa fa-times\"></i></a></td>
              <td class=\"image\">
              ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" /></a>
                ";
                }
                // line 45
                echo "                </td>
              <td>
              <a class=\"hover_uline\" href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "</a>
              <span class=\"display-block hidden-md hidden-lg\">
                ";
                // line 49
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    echo "
                  ";
                } else {
                    // line 52
                    echo "                  <span class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52);
                    echo " </span><span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                    echo "</span>
                  ";
                }
                // line 54
                echo "                  </span>
                  <span class=\"display-block hidden-md hidden-lg\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 55);
                echo "</span>
                </span>
                </td>
              <td class=\"hidden-xs hidden-sm\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 58);
                echo "</td>
              <td class=\"text-right hidden-xs hidden-sm\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 59);
                echo "</td>
              <td class=\"text-right price-cell hidden-xs hidden-sm\">
              ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                  ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62)) {
                        // line 63
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                        echo "
                  ";
                    } else {
                        // line 65
                        echo "                  <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 65);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 65);
                        echo "</span>
                  ";
                    }
                    // line 67
                    echo "              ";
                }
                echo "</td>
              <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                echo "');\" class=\"btn btn-sm btn-primary\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "          </tbody>
        </table>

      ";
        } else {
            // line 76
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 78
        echo "      
      ";
        // line 79
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 80
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 82
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 82,  265 => 80,  261 => 79,  258 => 78,  252 => 76,  246 => 72,  234 => 68,  229 => 67,  221 => 65,  215 => 63,  212 => 62,  210 => 61,  205 => 59,  201 => 58,  195 => 55,  192 => 54,  184 => 52,  178 => 50,  176 => 49,  169 => 47,  165 => 45,  153 => 43,  151 => 42,  144 => 40,  141 => 39,  137 => 38,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  110 => 25,  108 => 24,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/account/wishlist.twig", "");
    }
}
