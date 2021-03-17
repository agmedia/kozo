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

/* basel/template/extension/module/basel_products.twig */
class __TwigTemplate_281869ff6f6e091ff717513856a054b02653277cbe7c6b51c20ef9a2c9e86cf7 extends \Twig\Template
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
        echo "<div class=\"widget module";
        echo ($context["module"] ?? null);
        echo " ";
        if ((($context["columns"] ?? null) != "list")) {
            echo " grid";
        }
        if (($context["contrast"] ?? null)) {
            echo " contrast-bg";
        }
        if ((($context["carousel"] ?? null) && (($context["rows"] ?? null) > 1))) {
            echo "  multiple-rows";
        }
        echo "\" ";
        if (($context["use_margin"] ?? null)) {
            echo "style=\"margin-bottom: ";
            echo ($context["margin"] ?? null);
            echo "\"";
        }
        echo "> 
";
        // line 2
        if (($context["block_title"] ?? null)) {
            // line 3
            echo "<!-- Block Title -->
<div class=\"widget-title\">
";
            // line 5
            if (($context["title_preline"] ?? null)) {
                echo "<p class=\"pre-line\">";
                echo ($context["title_preline"] ?? null);
                echo "</p>";
            }
            // line 6
            if (($context["title"] ?? null)) {
                echo " 
<p class=\"main-title\"><span>";
                // line 7
                echo ($context["title"] ?? null);
                echo "</span></p>
<p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
";
            }
            // line 10
            if (($context["title_subline"] ?? null)) {
                // line 11
                echo "<p class=\"sub-line\"><span>";
                echo ($context["title_subline"] ?? null);
                echo "</span></p>
";
            }
            // line 13
            echo "</div>
";
        }
        // line 15
        if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
            // line 16
            echo "<!-- Tabs -->
<ul id=\"tabs-";
            // line 17
            echo ($context["module"] ?? null);
            echo "\" class=\"nav nav-tabs ";
            echo ($context["tabstyle"] ?? null);
            echo "\" data-tabs=\"tabs\" style=\"\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["keyTab"] => $context["tab"]) {
                // line 19
                echo "        ";
                if (($context["keyTab"] == 0)) {
                    // line 20
                    echo "        <li class=\"active\"><a href=\"#tab";
                    echo ($context["module"] ?? null);
                    echo $context["keyTab"];
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 20);
                    echo "</a></li>
        ";
                } else {
                    // line 22
                    echo "        <li><a href=\"#tab";
                    echo ($context["module"] ?? null);
                    echo $context["keyTab"];
                    echo "\" data-toggle=\"tab\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 22);
                    echo "</a></li>
        ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyTab'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</ul>
";
        }
        // line 27
        echo "<div class=\"tab-content has-carousel ";
        if ( !($context["carousel"] ?? null)) {
            echo "overflow-hidden";
        }
        echo "\">
<!-- Product Group(s) -->
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 30
            echo "<div class=\"tab-pane";
            if (($context["key"] == 0)) {
                echo " active in";
            }
            echo " fade\" id=\"tab";
            echo ($context["module"] ?? null);
            echo $context["key"];
            echo "\">
    <div class=\"grid-holder grid";
            // line 31
            echo ($context["columns"] ?? null);
            echo " prod_module";
            echo ($context["module"] ?? null);
            if (($context["carousel"] ?? null)) {
                echo " carousel";
            }
            if ((($context["carousel_a"] ?? null) && (($context["rows"] ?? null) > 1))) {
                echo " sticky-arrows";
            }
            echo "\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "            <div class=\"item single-product\">
            <div class=\"image\"";
                // line 34
                if ((($context["columns"] ?? null) == "list")) {
                    echo " style=\"width:";
                    echo ($context["img_width"] ?? null);
                    echo "px\"";
                }
                echo ">
                <a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                echo "\">
                <img loading=\"lazy\" src=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36);
                echo "\" />
                ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                <img loading=\"lazy\" class=\"thumb2\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 38);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38);
                    echo "\" />
                ";
                }
                // line 40
                echo "                </a>
            ";
                // line 41
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41) && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41)) && twig_get_attribute($this->env, $this->source, $context["product"], "sale_badge", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "             
\t\t\t\t<span class=\"badge sale_badge\"><i>";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sale_badge", [], "any", false, false, false, 43);
                    echo "</i></span>
            ";
                }
                // line 45
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "new_label", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                <span class=\"badge new_badge\"><i>";
                    echo ($context["basel_text_new"] ?? null);
                    echo "</i></span>
            ";
                }
                // line 48
                echo "\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48) < 1) && ($context["stock_badge_status"] ?? null))) {
                    // line 49
                    echo "\t\t\t\t<span class=\"badge out_of_stock_badge\"><i>";
                    echo ($context["basel_text_out_of_stock"] ?? null);
                    echo "</i></span>
\t\t\t\t";
                    // line 50
                    $context["button_cart"] = ($context["basel_text_out_of_stock"] ?? null);
                    // line 51
                    echo "\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t";
                    $context["button_cart"] = ($context["default_button_cart"] ?? null);
                    // line 53
                    echo "\t\t\t";
                }
                // line 54
                echo "            <a class=\"img-overlay\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\"></a>
            <div class=\"btn-center catalog_hide\"><a class=\"btn btn-light-outline btn-thin\" onclick=\"cart.add('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 55);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</a></div>
            <div class=\"icons-wrapper\">
            <a class=\"icon is-cart catalog_hide\" data-toggle=\"tooltip\" data-placement=\"";
                // line 57
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 57);
                echo "');\"><span class=\"global-cart\"></span></a>
            <a class=\"icon is_wishlist\" data-toggle=\"tooltip\" data-placement=\"";
                // line 58
                echo ($context["tooltip_align"] ?? null);
                echo "\"  data-title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                echo "');\"><span class=\"icon-heart\"></span></a>
            <a class=\"icon is_compare\" onclick=\"compare.add('";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "');\" data-toggle=\"tooltip\" data-placement=\"";
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\"><span class=\"icon-refresh\"></span></a>
            <a class=\"icon is_quickview hidden-xs\" onclick=\"quickview('";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "');\" data-toggle=\"tooltip\" data-placement=\"";
                echo ($context["tooltip_align"] ?? null);
                echo "\" data-title=\"";
                echo ($context["basel_button_quickview"] ?? null);
                echo "\"><span class=\"icon-magnifier-add\"></span></a>
            </div> <!-- .icons-wrapper -->
            </div><!-- .image ends -->
            <div class=\"caption\">
            <a class=\"product-name\" href=\"";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                echo "</a>

            <span class=\"mat\">
";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "
        ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 70
                        echo "
 
         
          ";
                        // line 73
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 73));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 74
                            echo "                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 74) == "Materijal")) {
                                // line 75
                                echo "                        ";
                                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 75);
                                echo "

                ";
                            }
                            // line 78
                            echo "         
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "
        
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "    
";
                }
                // line 85
                echo " </span> 

  ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["product"], "variants", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "        
                <ul class=\"swatch-variant\">
                    ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "variants", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                        // line 91
                        echo "                    <li>
                        <a href=\"";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["variant"], "href", [], "any", false, false, false, 92);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 92);
                        echo "\">
                            <img src=\"";
                        // line 93
                        echo twig_get_attribute($this->env, $this->source, $context["variant"], "variant_image", [], "any", false, false, false, 93);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 93);
                        echo "\" />
                        </a>
                    </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                </ul>
               
            ";
                }
                // line 100
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100)) {
                    echo "      
                <div class=\"rating\">
                <span class=\"rating_stars rating r";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102);
                    echo "\">
                <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
                </span>
                </div>
            ";
                }
                // line 107
                echo "            <div class=\"price-wrapper\">
            ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "            <div class=\"price\">
                ";
                    // line 110
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 110)) {
                        // line 111
                        echo "                <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                        echo "</span>
                ";
                    } else {
                        // line 113
                        echo "                <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113);
                        echo "</span>
                ";
                    }
                    // line 115
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 115)) {
                        // line 116
                        echo "                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 116);
                        echo "</span>
                ";
                    }
                    // line 118
                    echo "            </div><!-- .price -->
            ";
                }
                // line 120
                echo "            <p class=\"description\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120)) {
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120);
                }
                echo "</p>
            <a class=\"btn catalog_hide ";
                // line 121
                if ((($context["basel_list_style"] ?? null) == "6")) {
                    echo "btn-contrast";
                } else {
                    echo "btn-outline";
                }
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 121);
                echo "');\"><span class=\"global-cart\"></span>";
                echo ($context["button_cart"] ?? null);
                echo "</a>
            </div><!-- .price-wrapper -->
            <div class=\"plain-links\">
            <a class=\"icon is_wishlist link-hover-color\" onclick=\"wishlist.add('";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"><span class=\"icon-heart\"></span> ";
                echo ($context["button_wishlist"] ?? null);
                echo "</a>
            <a class=\"icon is_compare link-hover-color\" onclick=\"compare.add('";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo "');\"><span class=\"icon-refresh\"></span> ";
                echo ($context["button_compare"] ?? null);
                echo "</a>
            <a class=\"icon is_quickview link-hover-color\" onclick=\"quickview('";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 126);
                echo "');\"><span class=\"icon-magnifier-add\"></span> ";
                echo ($context["basel_button_quickview"] ?? null);
                echo "</a>
            </div><!-- .plain-links-->
            </div><!-- .caption-->
            ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "sale_end_date", [], "any", false, false, false, 129) && ($context["countdown_status"] ?? null))) {
                    // line 130
                    echo "            <script>
\t\t\t  \$(function() {
\t\t\t\t\$(\".module";
                    // line 132
                    echo ($context["module"] ?? null);
                    echo " .sale-counter.id";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                    echo "\").countdown(\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sale_end_date", [], "any", false, false, false, 132);
                    echo "\").on('update.countdown', function(event) {
\t\t\t  var \$this = \$(this).html(event.strftime(''
\t\t\t\t+ '<div>'
\t\t\t\t+ '%D<i>";
                    // line 135
                    echo ($context["basel_text_days"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%H <i>";
                    // line 136
                    echo ($context["basel_text_hours"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%M <i>";
                    // line 137
                    echo ($context["basel_text_mins"] ?? null);
                    echo "</i></div><div>'
\t\t\t\t+ '%S <i>";
                    // line 138
                    echo ($context["basel_text_secs"] ?? null);
                    echo "</i></div></div>'));
\t\t\t});
\t\t\t  });
\t\t\t</script>
            ";
                }
                // line 143
                echo "            </div><!-- .single-product ends -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        if (($context["use_button"] ?? null)) {
            // line 149
            echo "<!-- Button -->
<div class=\"widget_bottom_btn ";
            // line 150
            if ((($context["carousel"] ?? null) && ($context["carousel_b"] ?? null))) {
                echo "has-dots";
            }
            echo "\">
<a class=\"btn btn-contrast\" href=\"";
            // line 151
            echo ((($context["link_href"] ?? null)) ? (($context["link_href"] ?? null)) : (""));
            echo "\">";
            echo ($context["link_title"] ?? null);
            echo "</a>
</div>
";
        }
        // line 154
        echo "</div>
<div class=\"clearfix\"></div>
</div>
";
        // line 157
        if (($context["carousel"] ?? null)) {
            // line 158
            echo "<script>
\$('.grid-holder.prod_module";
            // line 159
            echo ($context["module"] ?? null);
            echo "').slick({
";
            // line 160
            if (($context["carousel_a"] ?? null)) {
                // line 161
                echo "prevArrow: \"<a class=\\\"arrow-left icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right icon-arrow-right\\\"></a>\",
";
            } else {
                // line 164
                echo "arrows: false,
";
            }
            // line 166
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 167
                echo "rtl: true,
";
            }
            // line 169
            if (($context["carousel_b"] ?? null)) {
                // line 170
                echo "dots:true,
";
            }
            // line 172
            echo "respondTo:'min',
rows:";
            // line 173
            echo ($context["rows"] ?? null);
            echo ",
";
            // line 174
            if ((($context["columns"] ?? null) == "5")) {
                // line 175
                echo "slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 176
($context["columns"] ?? null) == "4")) {
                // line 177
                echo "slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 178
($context["columns"] ?? null) == "3")) {
                // line 179
                echo "slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 180
($context["columns"] ?? null) == "2")) {
                // line 181
                echo "slidesToShow:2,slidesToScroll:2,responsive:[
";
            } elseif (((            // line 182
($context["columns"] ?? null) == "1") || (($context["columns"] ?? null) == "list"))) {
                // line 183
                echo "adaptiveHeight:true,slidesToShow:1,slidesToScroll:1,responsive:[
";
            }
            // line 185
            if (($context["items_mobile_fw"] ?? null)) {
                // line 186
                echo "{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1}}
";
            }
            // line 188
            echo "]
});
\$('.product-style2 .single-product .icon').attr('data-placement', 'top');
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
";
            // line 192
            if ((($context["carousel_a"] ?? null) && (($context["rows"] ?? null) > 1))) {
                // line 193
                echo "\$(window).load(function() {
var p_c_o = \$('.prod_module";
                // line 194
                echo ($context["module"] ?? null);
                echo "').offset().top;
var p_c_o_b = \$('.prod_module";
                // line 195
                echo ($context["module"] ?? null);
                echo "').offset().top + \$('.prod_module";
                echo ($context["module"] ?? null);
                echo "').outerHeight(true) - 100;
var p_sticky_arrows = function(){
var p_m_o = \$(window).scrollTop() + (\$(window).height()/2);
if (p_m_o > p_c_o && p_m_o < p_c_o_b) {
\$('.prod_module";
                // line 199
                echo ($context["module"] ?? null);
                echo " .slick-arrow').addClass('visible').css('top', p_m_o - p_c_o + 'px');
} else {
\$('.prod_module";
                // line 201
                echo ($context["module"] ?? null);
                echo " .slick-arrow').removeClass('visible');
}
};
\$(window).scroll(function() {p_sticky_arrows();});
});
";
            }
            // line 207
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/basel_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 207,  669 => 201,  664 => 199,  655 => 195,  651 => 194,  648 => 193,  646 => 192,  640 => 188,  636 => 186,  634 => 185,  630 => 183,  628 => 182,  625 => 181,  623 => 180,  620 => 179,  618 => 178,  615 => 177,  613 => 176,  610 => 175,  608 => 174,  604 => 173,  601 => 172,  597 => 170,  595 => 169,  591 => 167,  589 => 166,  585 => 164,  580 => 161,  578 => 160,  574 => 159,  571 => 158,  569 => 157,  564 => 154,  556 => 151,  550 => 150,  547 => 149,  545 => 148,  537 => 145,  530 => 143,  522 => 138,  518 => 137,  514 => 136,  510 => 135,  500 => 132,  496 => 130,  494 => 129,  486 => 126,  480 => 125,  474 => 124,  458 => 121,  451 => 120,  447 => 118,  439 => 116,  436 => 115,  428 => 113,  422 => 111,  420 => 110,  417 => 109,  415 => 108,  412 => 107,  404 => 102,  398 => 100,  393 => 97,  381 => 93,  375 => 92,  372 => 91,  368 => 90,  364 => 88,  362 => 87,  358 => 85,  354 => 83,  346 => 80,  339 => 78,  332 => 75,  329 => 74,  325 => 73,  320 => 70,  316 => 69,  313 => 68,  311 => 67,  303 => 64,  292 => 60,  284 => 59,  276 => 58,  266 => 57,  257 => 55,  252 => 54,  249 => 53,  246 => 52,  243 => 51,  241 => 50,  236 => 49,  233 => 48,  227 => 46,  224 => 45,  219 => 43,  216 => 42,  214 => 41,  211 => 40,  201 => 38,  199 => 37,  191 => 36,  187 => 35,  179 => 34,  176 => 33,  172 => 32,  160 => 31,  150 => 30,  146 => 29,  138 => 27,  134 => 25,  128 => 24,  119 => 22,  110 => 20,  107 => 19,  103 => 18,  97 => 17,  94 => 16,  92 => 15,  88 => 13,  82 => 11,  80 => 10,  74 => 7,  70 => 6,  64 => 5,  60 => 3,  58 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/basel_products.twig", "");
    }
}
