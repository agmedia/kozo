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

/* basel/template/product/single_product.twig */
class __TwigTemplate_10b1559ce1c5ecabf85f18184ca71f1a0105b088aae31768d18c3b04d7647770 extends \Twig\Template
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
        echo "<div class=\"item single-product\">
<div class=\"image\" ";
        // line 2
        if ((($context["columns"] ?? null) == "list")) {
            echo "style=\"width:";
            echo ($context["img_width"] ?? null);
            echo "px\"";
        }
        echo ">
    <a href=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 3);
        echo "\">
    <img src=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 4);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4);
        echo "\" loading=\"lazy\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4);
        echo "\" />
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2", [], "any", false, false, false, 5)) {
            // line 6
            echo "    <img class=\"thumb2\" src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb2", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
            echo "\" loading=\"lazy\" title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
            echo "\" />
    ";
        }
        // line 8
        echo "    </a>
";
        // line 9
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 9)) && ($context["salebadge_status"] ?? null))) {
            // line 10
            echo "   <!-- <div class=\"sale-counter id";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 10);
            echo "\"></div>-->
    <span class=\"badge sale_badge\"><i>";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_badge", [], "any", false, false, false, 11);
            echo "</i></span>
";
        }
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "new_label", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <span class=\"badge new_badge\"><i>";
            echo ($context["basel_text_new"] ?? null);
            echo "</i></span>
";
        }
        // line 16
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 16) < 1) && ($context["stock_badge_status"] ?? null))) {
            // line 17
            echo "    <span class=\"badge out_of_stock_badge\"><i>";
            echo ($context["basel_text_out_of_stock"] ?? null);
            echo "</i></span>
    ";
            // line 18
            $context["button_cart"] = ($context["basel_text_out_of_stock"] ?? null);
        } else {
            // line 20
            echo "\t";
            $context["button_cart"] = ($context["default_button_cart"] ?? null);
        }
        // line 22
        echo "<a class=\"img-overlay\" href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 22);
        echo "\"></a>
<div class=\"btn-center catalog_hide\"><a class=\"btn btn-light-outline btn-thin\" onclick=\"cart.add('";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 23);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 23);
        echo "');\">";
        echo ($context["button_cart"] ?? null);
        echo "</a></div>
<div class=\"icons-wrapper\">
<a class=\"icon is-cart catalog_hide\" data-toggle=\"tooltip\" data-placement=\"";
        // line 25
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" onclick=\"cart.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 25);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 25);
        echo "');\"><span class=\"global-cart\"></span></a>
<a class=\"icon is_wishlist\" data-toggle=\"tooltip\" data-placement=\"";
        // line 26
        echo ($context["tooltip_align"] ?? null);
        echo "\"  data-title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 26);
        echo "');\"><span class=\"icon-heart\"></span></a>
<a class=\"icon is_compare\" onclick=\"compare.add('";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 27);
        echo "');\" data-toggle=\"tooltip\" data-placement=\"";
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><span class=\"icon-refresh\"></span></a>
<a class=\"icon is_quickview hidden-xs\" onclick=\"quickview('";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 28);
        echo "');\" data-toggle=\"tooltip\" data-placement=\"";
        echo ($context["tooltip_align"] ?? null);
        echo "\" data-title=\"";
        echo ($context["basel_button_quickview"] ?? null);
        echo "\"><span class=\"icon-magnifier-add\"></span></a>
</div> <!-- .icons-wrapper -->
</div><!-- .image ends -->
<div class=\"caption\">
<a class=\"product-name\" href=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 32);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 32);
        echo "</a>

<span class=\"mat\">
";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attribute_groups", [], "any", false, false, false, 35)) {
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attribute_groups", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 38
                echo "
 
         
          ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 42
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 42) == "Materijal")) {
                        // line 43
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 43);
                        echo "

                ";
                    }
                    // line 46
                    echo "         
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    
";
        }
        // line 53
        echo " </span> 

  ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 55)) {
            // line 56
            echo "        
                <ul class=\"swatch-variant\">
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 59
                echo "                    <li>
                        <a href=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["variant"], "href", [], "any", false, false, false, 60);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 60);
                echo "\">
                            <img src=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["variant"], "variant_image", [], "any", false, false, false, 61);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 61);
                echo "\" />
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </ul>
               
            ";
        }
        // line 68
        echo "
";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 69)) {
            echo "      
    <div class=\"rating\">
    <span class=\"rating_stars rating r";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 71);
            echo "\">
    <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
    </span>
    </div>
";
        }
        // line 76
        echo "<div class=\"price-wrapper\">
";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 77)) {
            // line 78
            echo "<div class=\"price\">
    ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 79)) {
                // line 80
                echo "    <span class=\"price-old\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 80);
                echo "</span><span class=\"price-new\">";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 80);
                echo "</span>
    ";
            } else {
                // line 82
                echo "    <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 82);
                echo "</span>
    ";
            }
            // line 84
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 84)) {
                // line 85
                echo "    <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 85);
                echo "</span>
    ";
            }
            // line 87
            echo "</div><!-- .price -->
";
        }
        // line 89
        echo "<p class=\"description\">";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 89)) {
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 89);
        }
        echo "</p>
<a class=\"btn catalog_hide ";
        // line 90
        if ((($context["basel_list_style"] ?? null) == "6")) {
            echo "btn-contrast";
        } else {
            echo "btn-outline";
        }
        echo "\" onclick=\"cart.add('";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 90);
        echo "', '";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 90);
        echo "');\"><span class=\"global-cart\"></span>";
        echo ($context["button_cart"] ?? null);
        echo "</a>
</div><!-- .price-wrapper -->
<div class=\"plain-links\">
<a class=\"icon is_wishlist link-hover-color\" onclick=\"wishlist.add('";
        // line 93
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 93);
        echo "');\"><span class=\"icon-heart\"></span> ";
        echo ($context["button_wishlist"] ?? null);
        echo "</a>
<a class=\"icon is_compare link-hover-color\" onclick=\"compare.add('";
        // line 94
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 94);
        echo "');\"><span class=\"icon-refresh\"></span> ";
        echo ($context["button_compare"] ?? null);
        echo "</a>
<a class=\"icon is_quickview link-hover-color\" onclick=\"quickview('";
        // line 95
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 95);
        echo "');\"><span class=\"icon-magnifier-add\"></span> ";
        echo ($context["basel_button_quickview"] ?? null);
        echo "</a>
</div><!-- .plain-links-->
</div><!-- .caption-->
";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_end_date", [], "any", false, false, false, 98) && ($context["countdown_status"] ?? null))) {
            // line 99
            echo "<script>
  \$(function() {
\t\$(\".sale-counter.id";
            // line 101
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 101);
            echo "\").countdown(\"";
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sale_end_date", [], "any", false, false, false, 101);
            echo "\").on('update.countdown', function(event) {
  var \$this = \$(this).html(event.strftime(''
    + '<div>'
    + '%D<i>";
            // line 104
            echo ($context["basel_text_days"] ?? null);
            echo "</i></div><div>'
    + '%H <i>";
            // line 105
            echo ($context["basel_text_hours"] ?? null);
            echo "</i></div><div>'
    + '%M <i>";
            // line 106
            echo ($context["basel_text_mins"] ?? null);
            echo "</i></div><div>'
    + '%S <i>";
            // line 107
            echo ($context["basel_text_secs"] ?? null);
            echo "</i></div></div>'));
});
});
</script>
";
        }
        // line 112
        echo "</div><!-- .single-product ends -->";
    }

    public function getTemplateName()
    {
        return "basel/template/product/single_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 112,  379 => 107,  375 => 106,  371 => 105,  367 => 104,  359 => 101,  355 => 99,  353 => 98,  345 => 95,  339 => 94,  333 => 93,  317 => 90,  310 => 89,  306 => 87,  298 => 85,  295 => 84,  289 => 82,  281 => 80,  279 => 79,  276 => 78,  274 => 77,  271 => 76,  263 => 71,  258 => 69,  255 => 68,  250 => 65,  238 => 61,  232 => 60,  229 => 59,  225 => 58,  221 => 56,  219 => 55,  215 => 53,  211 => 51,  203 => 48,  196 => 46,  189 => 43,  186 => 42,  182 => 41,  177 => 38,  173 => 37,  170 => 36,  168 => 35,  160 => 32,  149 => 28,  141 => 27,  133 => 26,  123 => 25,  114 => 23,  109 => 22,  105 => 20,  102 => 18,  97 => 17,  95 => 16,  89 => 14,  87 => 13,  82 => 11,  77 => 10,  75 => 9,  72 => 8,  62 => 6,  60 => 5,  52 => 4,  48 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/single_product.twig", "/home/kozounderwearhr/public_html/upload/catalog/view/theme/basel/template/product/single_product.twig");
    }
}
