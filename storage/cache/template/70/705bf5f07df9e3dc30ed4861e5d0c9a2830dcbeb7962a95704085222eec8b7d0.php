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

/* basel/template/product/product.twig */
class __TwigTemplate_33e135444b8c4f812d6b904af4bba4deddb2602ea2e84b0cf363405dbbf5b2cd extends \Twig\Template
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

\t\t\t";
        // line 3
        if (($context["product_disabled"] ?? null)) {
            echo "<div class=\"container\"><div class=\"alert alert-warning\" role=\"alert\">";
            echo ($context["product_disabled"] ?? null);
            echo "</div></div>";
        }
        // line 4
        echo "\t\t\t
<script>
(function(f, a, s, h, i, o, n) {f['GlamiTrackerObject'] = i; f[i]=f[i]||function(){(f[i].q=f[i].q||[]).push(arguments)};o=a.createElement(s), n=a.getElementsByTagName(s)[0];o.async=1;o.src=h;n.parentNode.insertBefore(o,n) })(window, document, 'script', '//www.glami.hr/js/compiled/pt.js', 'glami');
glami('create', '78FEF97D04F20D6F870D45C4534F59BF', 'hr', 'PRODUCT');
glami('PRODUCT.track', 'PageView');
glami('PRODUCT.track', 'ViewContent', {
content_type: 'product',
item_ids: [";
        // line 11
        if (($context["options"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    echo "'";
                    echo ($context["model"] ?? null);
                    echo ".";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 11);
                    echo "',";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo "] 
});
</script>
<!-- End Glami piXel -->
";
        // line 15
        if ((($context["product_layout"] ?? null) != "full-width")) {
            // line 16
            echo "<style>
.product-page .image-area {
\t";
            // line 18
            if (((($context["product_layout"] ?? null) == "images-left") && ($context["images"] ?? null))) {
                echo " 
\t\twidth: ";
                // line 19
                echo ((($context["img_w"] ?? null) + ($context["img_a_w"] ?? null)) + 20);
                echo "px;
\t";
            } else {
                // line 21
                echo "\t\twidth: ";
                echo ($context["img_w"] ?? null);
                echo "px;
\t";
            }
            // line 23
            echo "}
.product-page .main-image {
\twidth:";
            // line 25
            echo ($context["img_w"] ?? null);
            echo "px;\t
}
.product-page .image-additional {
\t";
            // line 28
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 29
                echo ($context["img_a_w"] ?? null);
                echo "px;
\t\theight: ";
                // line 30
                echo ($context["img_h"] ?? null);
                echo "px;
\t";
            } else {
                // line 32
                echo "\t\twidth: ";
                echo ($context["img_w"] ?? null);
                echo "px;
\t";
            }
            // line 34
            echo "}
.product-page .image-additional.has-arrows {
\t";
            // line 36
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\theight: ";
                // line 37
                echo (($context["img_h"] ?? null) - 40);
                echo "px;
\t";
            }
            // line 39
            echo "}
@media (min-width: 992px) and (max-width: 1199px) {
.product-page .image-area {
\t";
            // line 42
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 43
                echo (((($context["img_w"] ?? null) + ($context["img_a_w"] ?? null)) / 1.25) + 20);
                echo "px;
\t";
            } else {
                // line 45
                echo "\t\twidth: ";
                echo (($context["img_w"] ?? null) / 1.25);
                echo "px;
\t";
            }
            // line 47
            echo "}
.product-page .main-image {
\twidth:";
            // line 49
            echo (($context["img_w"] ?? null) / 1.25);
            echo "px;\t
}
.product-page .image-additional {
\t";
            // line 52
            if ((($context["product_layout"] ?? null) == "images-left")) {
                echo " 
\t\twidth: ";
                // line 53
                echo (($context["img_a_w"] ?? null) / 1.25);
                echo "px;
\t\theight: ";
                // line 54
                echo (($context["img_h"] ?? null) / 1.25);
                echo "px;
\t";
            } else {
                // line 56
                echo "\t\twidth: ";
                echo (($context["img_w"] ?? null) / 1.25);
                echo "px;
\t";
            }
            // line 58
            echo "}
}
</style>
";
        }
        // line 62
        echo "
<div class=\"product-box\">
<ul class=\"breadcrumb\">
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 66
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 66);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 66);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "  </ul>

<div class=\"container product-layout ";
        // line 70
        echo ($context["product_layout"] ?? null);
        echo "\">
  
  <div class=\"row\">";
        // line 72
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 73
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 74
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 75
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 76
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 77
            echo "    ";
        } else {
            // line 78
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 79
            echo "    ";
        }
        // line 80
        echo "    <div id=\"content\" class=\"product-main no-min-height ";
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 81
        echo ($context["content_top"] ?? null);
        echo "
    
    <div class=\"table product-info product-page\">
     
     <div class=\"table-cell left\">
     
     ";
        // line 87
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 88
            echo "     <div class=\"image-area ";
            if ( !($context["hover_zoom"] ?? null)) {
                echo "hover-zoom-disabled";
            }
            echo "\" id=\"gallery\">
            
        ";
            // line 90
            if (($context["thumb"] ?? null)) {
                // line 91
                echo "        <div class=\"main-image\">
        
        ";
                // line 93
                if (((($context["price"] ?? null) && ($context["special"] ?? null)) && ($context["sale_badge"] ?? null))) {
                    // line 94
                    echo "        <span class=\"badge sale_badge\"><i>";
                    echo ($context["sale_badge"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 96
                echo "        
        ";
                // line 97
                if (($context["is_new"] ?? null)) {
                    // line 98
                    echo "        <span class=\"badge new_badge\"><i>";
                    echo ($context["basel_text_new"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 100
                echo "\t\t
\t\t";
                // line 101
                if (((($context["qty"] ?? null) < 1) && ($context["stock_badge_status"] ?? null))) {
                    // line 102
                    echo "        <span class=\"badge out_of_stock_badge\"><i>";
                    echo ($context["basel_text_out_of_stock"] ?? null);
                    echo "</i></span>
        ";
                }
                // line 104
                echo "
        <a class=\"";
                // line 105
                if ( !($context["images"] ?? null)) {
                    echo "link cloud-zoom";
                }
                echo " ";
                if ((($context["product_layout"] ?? null) == "full-width")) {
                    echo "link";
                } else {
                    echo "cloud-zoom";
                }
                echo "\" id=\"main-image\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" rel=\"position:'inside', showTitle: false\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ((($context["custom_imgtitle"] ?? null)) ? (($context["custom_imgtitle"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" alt=\"";
                echo ((($context["custom_alt"] ?? null)) ? (($context["custom_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                echo "\" /></a>
        </div>
        ";
            }
            // line 108
            echo "\t\t
        ";
            // line 109
            if (($context["images"] ?? null)) {
                // line 110
                echo "        <ul class=\"image-additional\">
        ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 112
                    echo "        <li>
        <a class=\"link ";
                    // line 113
                    if ((($context["product_layout"] ?? null) != "full-width")) {
                        echo "cloud-zoom-gallery locked";
                    }
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 113);
                    echo "\" rel=\"useZoom: 'main-image', smallImage: '";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb_lg", [], "any", false, false, false, 113);
                    echo "'\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 113);
                    echo "\" title=\"";
                    echo ((($context["custom_imgtitle"] ?? null)) ? (($context["custom_imgtitle"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" alt=\"";
                    echo ((($context["custom_alt"] ?? null)) ? (($context["custom_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" /></a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "            ";
                if ((($context["thumb"] ?? null) && (($context["product_layout"] ?? null) != "full-width"))) {
                    // line 117
                    echo "            <li><a class=\"link cloud-zoom-gallery locked active\" href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" rel=\"useZoom: 'main-image', smallImage: '";
                    echo ($context["thumb"] ?? null);
                    echo "'\"><img src=\"";
                    echo ($context["thumb_sm"] ?? null);
                    echo "\" title=\"";
                    echo ((($context["custom_imgtitle"] ?? null)) ? (($context["custom_imgtitle"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" alt=\"";
                    echo ((($context["custom_alt"] ?? null)) ? (($context["custom_alt"] ?? null)) : (($context["heading_title"] ?? null)));
                    echo "\" /></a></li>
            ";
                }
                // line 119
                echo "        </ul>
        ";
            }
            // line 121
            echo "            
     </div> <!-- .table-cell.left ends -->
      
     </div> <!-- .image-area ends -->
     ";
        }
        // line 126
        echo "     
    <div class=\"table-cell w100 right\">
\t<div class=\"inner\">
    
    <div class=\"product-h1\">

\t\t\t\t
\t\t\t\t";
        // line 133
        if (twig_get_attribute($this->env, $this->source, ($context["richsnippets"] ?? null), "breadcrumbs", [], "any", false, false, false, 133)) {
            echo " 
\t\t\t\t<span itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t\t";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mbreadcrumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mbreadcrumb"]) {
                echo " ";
                if (strip_tags(twig_get_attribute($this->env, $this->source, $context["mbreadcrumb"], "text", [], "any", false, false, false, 135))) {
                    // line 136
                    echo "\t\t\t\t<span itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
\t\t\t\t\t<a itemprop=\"item\" href=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["mbreadcrumb"], "href", [], "any", false, false, false, 137);
                    echo "\" alt=\"";
                    echo strip_tags(twig_get_attribute($this->env, $this->source, $context["mbreadcrumb"], "text", [], "any", false, false, false, 137));
                    echo "\"><meta itemprop=\"name\" content=\"";
                    echo strip_tags(twig_get_attribute($this->env, $this->source, $context["mbreadcrumb"], "text", [], "any", false, false, false, 137));
                    echo "\" ></a>
\t\t\t\t\t<meta itemprop=\"position\" content=\"";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 138);
                    echo "\" />
\t\t\t\t</span>
\t\t\t\t
\t\t\t\t";
                }
                // line 141
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mbreadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </span> ";
        }
        echo " \t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["richsnippets"] ?? null), "product", [], "any", false, false, false, 144)) {
            // line 145
            echo "\t\t\t\t
\t\t\t\t<span itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t";
            // line 147
            $context["mlink"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
            // line 148
            echo "\t\t\t\t<meta itemprop=\"url\" content=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["mlink"] ?? null), "href", [], "any", false, false, false, 148);
            echo "\" >
\t\t\t\t<meta itemprop=\"name\" content=\"";
            // line 149
            echo ($context["heading_title"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"model\" content=\"";
            // line 150
            echo ($context["model"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"manufacturer\" content=\"";
            // line 151
            echo ($context["manufacturer"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"brand\" content=\"";
            // line 152
            echo ($context["manufacturer"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"sku\" content=\"";
            // line 153
            echo ($context["sku"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"mpn\" content=\"";
            // line 154
            echo ($context["mpn"] ?? null);
            echo "\" >
\t\t\t\t<meta itemprop=\"description\" content=\"";
            // line 155
            echo ($context["meta_description"] ?? null);
            echo "\" >
\t\t\t\t
\t\t\t\t";
            // line 157
            if (($context["thumb"] ?? null)) {
                echo " 
\t\t\t\t<meta itemprop=\"image\" content=\"";
                // line 158
                echo ($context["thumb"] ?? null);
                echo "\" >
\t\t\t\t";
            }
            // line 159
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 161
            if (($context["images"] ?? null)) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 162
                    echo "\t\t\t\t<meta itemprop=\"image\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 162);
                    echo "\" >
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo " ";
            }
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["richsnippets"] ?? null), "offer", [], "any", false, false, false, 165)) {
                echo " 
\t\t\t\t<span itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 167
                echo ($context["rprice"] ?? null);
                echo "\" />
\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 168
                echo ($context["currency_code"] ?? null);
                echo "\" />
\t\t\t\t<meta itemprop=\"priceValidUntil\" content=\"2099-12-31\" />\t\t\t\t
\t\t\t\t<link itemprop=\"availability\" href=\"http://schema.org/";
                // line 170
                echo (((($context["quantity"] ?? null) > 0)) ? ("InStock") : ("OutOfStock"));
                echo "\" />
\t\t\t\t<meta itemprop=\"url\" content=\"";
                // line 171
                echo twig_get_attribute($this->env, $this->source, ($context["mlink"] ?? null), "href", [], "any", false, false, false, 171);
                echo "\" >
\t\t\t\t</span>
\t\t\t\t";
            }
            // line 173
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, ($context["richsnippets"] ?? null), "rating", [], "any", false, false, false, 175) && ($context["review_no"] ?? null))) {
                echo " 
\t\t\t\t<span itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 177
                echo ($context["review_no"] ?? null);
                echo "\">
\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                // line 178
                echo ($context["rating"] ?? null);
                echo "\">
\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t<meta itemprop=\"worstRating\" content=\"1\">
\t\t\t\t</span>
\t\t\t\t
\t\t\t\t\t";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["mreviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mreview"]) {
                    echo "\t\t\t
\t\t\t\t\t\t <span itemprop=\"review\" itemscope itemtype=\"http://schema.org/Review\">
\t\t\t\t\t\t 
\t\t\t\t\t\t <meta itemprop=\"author\" content=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["mreview"], "author", [], "any", false, false, false, 186);
                    echo "\">
\t\t\t\t\t\t <meta itemprop=\"description\" content=\"";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["mreview"], "text", [], "any", false, false, false, 187);
                    echo "\">
\t\t\t\t\t\t<meta itemprop=\"datePublished\" content=\"";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["mreview"], "date_added", [], "any", false, false, false, 188);
                    echo "\">
\t\t\t\t\t\t\t<span itemprop=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
\t\t\t\t\t\t\t  <meta itemprop=\"ratingValue\" content=\"";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["mreview"], "rating", [], "any", false, false, false, 190);
                    echo "\">
\t\t\t\t\t\t\t  <meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t\t\t\t  <meta itemprop=\"worstRating\" content=\"1\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</span>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mreview'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "\t\t\t\t
\t\t\t\t";
            }
            // line 198
            echo " 
\t\t\t\t
\t\t\t\t</span>
\t\t\t\t
\t\t\t\t";
        }
        // line 202
        echo " 
            
    <h1 id=\"page-title\">";
        // line 204
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
    
    ";
        // line 207
        if ((($context["review_status"] ?? null) && (($context["review_qty"] ?? null) > 0))) {
            // line 208
            echo "    <div class=\"rating\">
    <span class=\"rating_stars rating r";
            // line 209
            echo ($context["rating"] ?? null);
            echo "\">
    <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
    </span>
    </div>
    <span class=\"review_link\">(<a class=\"hover_uline to_tabs\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 213
            echo ($context["reviews"] ?? null);
            echo "</a>)</span>
\t";
        }
        // line 215
        echo "
    ";
        // line 216
        if (($context["price"] ?? null)) {
            // line 217
            echo "      <ul class=\"list-unstyled price\">
        ";
            // line 218
            if ( !($context["special"] ?? null)) {
                // line 219
                echo "        <li><span class=\"live-price\">";
                echo ($context["price"] ?? null);
                echo "<span></li>
        ";
            } else {
                // line 221
                echo "        <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span><span class=\"live-price-new\">";
                echo ($context["special"] ?? null);
                echo "<span></li>
        <span id=\"special_countdown\"></span>
        ";
            }
            // line 224
            echo "      </ul>
        
        ";
            // line 226
            if (($context["discounts"] ?? null)) {
                // line 227
                echo "        <p class=\"discount\">
        ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 229
                    echo "        <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 229);
                    echo ($context["text_discount"] ?? null);
                    echo "<i class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 229);
                    echo "</i></span>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                echo "        </p>
        ";
            }
            // line 233
            echo "      
      ";
        }
        // line 234
        echo " <!-- if price ends -->
      
      
      ";
        // line 237
        if ((($context["meta_description_status"] ?? null) && ($context["meta_description"] ?? null))) {
            // line 238
            echo "      <p class=\"meta_description\">";
            echo ($context["meta_description"] ?? null);
            echo "</p>
      ";
        }
        // line 240
        echo "            
      

\t\t\t";
        // line 243
        if ((($context["product_variant_status"] ?? null) && ($context["variant"] ?? null))) {
            // line 244
            echo "\t\t\t\t\t<style>\t\t\t\t\t
\t\t\t\t\t\t.product-info .variant {
\t\t\t\t\t\t\tborder-bottom: 1px solid #eaeaea;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tfont-weight: bold;
\t\t\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\t\t\toverflow: auto;
\t\t\t\t\t\t\tpadding: 0 0px 15px;
\t\t\t\t\t\t}
\t\t\t\t\t\t.variant {\t\t\t\t\t\t\t
\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\t\t}
.variant hr {\t\t\t\t\t\t\t
\t\t\t\t\t\t\tmargin-top:0px;
\t\t\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\t\t}
\t\t\t\t\t\t.variant > a {\t\t\t\t\t\t
\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\tmargin: 3px 5px 3px 0;
\t\t\t\t\t\t\tpadding: 0px;
\t\t\t\t\t\t\tborder:1px solid #eaeaea;
\t\t\t\t\t\t}
\t\t\t\t\t\t.variant .active {
\t\t\t\t\t\t\tborder:1px solid #fff;
\t\t\t\t\t\t}
\t\t\t\t\t\t.variant .soldout {
\t\t\t\t\t\t\tcursor: not-allowed;
\t\t\t\t\t\t\topacity: 0.5;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"variant\">
\t\t\t\t\t<hr>
\t\t\t\t\t\t";
            // line 278
            if (twig_get_attribute($this->env, $this->source, ($context["variant_setting"] ?? null), "variant_text", [], "any", true, true, false, 278)) {
                // line 279
                echo "\t\t\t\t\t\t\t<p>";
                echo twig_get_attribute($this->env, $this->source, ($context["variant_setting"] ?? null), "variant_text", [], "any", false, false, false, 279);
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 280
            echo "\t\t
\t\t\t\t\t\t";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["variant"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["variant_info"]) {
                // line 282
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["variant_info"], "href", [], "any", false, false, false, 282);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["variant_info"], "active", [], "any", false, false, false, 282) == 1)) {
                    echo "active";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["variant_info"], "stock", [], "any", false, false, false, 282) == 0)) {
                    echo " soldout";
                }
                echo "\" title=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["variant_info"], "stock", [], "any", false, false, false, 282) == 0)) {
                    echo "[";
                    echo ($context["text_soldout"] ?? null);
                    echo "] ";
                }
                echo twig_get_attribute($this->env, $this->source, $context["variant_info"], "name", [], "any", false, false, false, 282);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["variant_info"], "variant_image", [], "any", false, false, false, 282);
                echo "\"/></a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 287
        echo "\t
\t\t\t\t
      <div id=\"product\">
            
            ";
        // line 291
        if (($context["options"] ?? null)) {
            // line 292
            echo "            <div class=\"options\">
            ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 294
                echo "            
            ";
                // line 295
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 295) == "select")) {
                    // line 296
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 296)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 298);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <select name=\"option[";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 301);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 301);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 302
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 303
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 303));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 304
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 304);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 304);
                        echo "
                ";
                        // line 305
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 305)) {
                            // line 306
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 306);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 306);
                            echo ")
                ";
                        }
                        // line 308
                        echo "                </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 310
                    echo "              </select>
              </div>
            </div>
            ";
                }
                // line 314
                echo "            
            ";
                // line 315
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 315) == "radio")) {
                    // line 316
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 316)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell radio-cell name\">
              <label class=\"control-label\">";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 318);
                    echo "</label>
              </div>
              <div class=\"table-cell radio-cell\">
              <div id=\"input-option";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 321);
                    echo "\">
                ";
                    // line 322
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 322));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 323
                        echo "                <div class=\"radio";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 323)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 325
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 325);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 325);
                        echo "\" />
                    ";
                        // line 326
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 326)) {
                            // line 327
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 327);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 327);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 327)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 327);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 327);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 327);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 327)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 327);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 327);
                                echo ")";
                            }
                            echo "\" />
                    ";
                        }
                        // line 329
                        echo "                    <span class=\"name\">
                    ";
                        // line 330
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 330);
                        echo "
                    ";
                        // line 331
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 331)) {
                            // line 332
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 332);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 332);
                            echo ")
                    ";
                        }
                        // line 334
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 338
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 342
                echo "            
            ";
                // line 343
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 343) == "checkbox")) {
                    // line 344
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 344)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell checkbox-cell name\">
              <label class=\"control-label\">";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 346);
                    echo "</label>
              </div>
              <div class=\"table-cell checkbox-cell\">
              <div id=\"input-option";
                    // line 349
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 349);
                    echo "\">
                ";
                    // line 350
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 350));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 351
                        echo "                <div class=\"checkbox";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 351)) {
                            echo " has-image";
                        }
                        echo "\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 353
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 353);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 353);
                        echo "\" />
                    ";
                        // line 354
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 354)) {
                            // line 355
                            echo "                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 355);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 355);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355)) {
                                echo "(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 355);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355);
                                echo ")";
                            }
                            echo "\" data-toggle=\"tooltip\" data-title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 355);
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355)) {
                                echo " (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 355);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355);
                                echo ")";
                            }
                            echo "\" /> 
                    ";
                        }
                        // line 357
                        echo "                    <span class=\"name\">
                    ";
                        // line 358
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 358);
                        echo "
                    ";
                        // line 359
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 359)) {
                            // line 360
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 360);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 360);
                            echo ")
                    ";
                        }
                        // line 362
                        echo "                    </span>
                  </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 366
                    echo "              </div>
              </div>
            </div>
            ";
                }
                // line 370
                echo "            
            
            ";
                // line 372
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 372) == "text")) {
                    // line 373
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 373)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 375);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 375);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <input type=\"text\" name=\"option[";
                    // line 378
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 378);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 378);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 378);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 378);
                    echo "\" class=\"form-control\" />
              </div>
            </div>
            ";
                }
                // line 382
                echo "            
            ";
                // line 383
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 383) == "textarea")) {
                    // line 384
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 384)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 386
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 386);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <textarea name=\"option[";
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 389);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 389);
                    echo "</textarea>
              </div>
            </div>
            ";
                }
                // line 393
                echo "            
            ";
                // line 394
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 394) == "file")) {
                    // line 395
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 395)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\">";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 397);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <button type=\"button\" id=\"button-upload";
                    // line 400
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 400);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 401
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 401);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 401);
                    echo "\" />
              </div>
            </div>
            ";
                }
                // line 405
                echo "            
            ";
                // line 406
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 406) == "date")) {
                    // line 407
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 407)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 409
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 409);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 409);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 413
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 413);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 413);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 413);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 420
                echo "            
            ";
                // line 421
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 421) == "datetime")) {
                    // line 422
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 422)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 424);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 424);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 428
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 428);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 428);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 428);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 435
                echo "            
            ";
                // line 436
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 436) == "time")) {
                    // line 437
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 437)) {
                        echo " required";
                    }
                    echo " table-row\">
              <div class=\"table-cell name\">
              <label class=\"control-label\" for=\"input-option";
                    // line 439
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 439);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 439);
                    echo "</label>
              </div>
              <div class=\"table-cell\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 443);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                </div>
            </div>
            ";
                }
                // line 450
                echo "            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo " <!-- foreach option -->
            </div>


               <p> <a href=\"\" data-toggle=\"modal\" data-target=\"#modal-size\"> <img src=\"image/ruller.svg\"/> Vodič za veličine</A></p>


            ";
        }
        // line 459
        echo "            
            ";
        // line 460
        if (($context["recurrings"] ?? null)) {
            // line 461
            echo "            <hr>
            <h3>";
            // line 462
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 465
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 466
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 467
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 467);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 467);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 469
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 473
        echo "

            
            <div class=\"form-group buy catalog_hide\">

            <input type=\"number\" step=\"1\" min=\"";
        // line 478
        echo ($context["minimum"] ?? null);
        echo "\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control input-quantity\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 479
        echo ($context["product_id"] ?? null);
        echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 480
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i id=\"cart-icon\" class=\"global-cart icon\"></i> ";
        if (((($context["qty"] ?? null) < 1) && ($context["stock_badge_status"] ?? null))) {
            echo ($context["basel_text_out_of_stock"] ?? null);
        } else {
            echo ($context["button_cart"] ?? null);
        }
        echo "</button>
            </div>
            ";
        // line 482
        if ((($context["minimum"] ?? null) > 1)) {
            // line 483
            echo "            <div class=\"alert alert-sm alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 485
        echo "          
          </div> <!-- #product ends -->


\t<p class=\"info is_wishlist\"><a onclick=\"wishlist.add('";
        // line 489
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"icon-heart\"></i> ";
        echo ($context["button_wishlist"] ?? null);
        echo "</a></p>
\t<p class=\"info is_compare\"><a onclick=\"compare.add('";
        // line 490
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"icon-refresh\"></i> ";
        echo ($context["button_compare"] ?? null);
        echo "</a></p>
    ";
        // line 491
        if (($context["question_status"] ?? null)) {
            // line 492
            echo "    <p class=\"info is_ask\"><a class=\"to_tabs\" onclick=\"\$('a[href=\\'#tab-questions\\']').trigger('click'); return false;\"><i class=\"icon-question\"></i> ";
            echo ($context["basel_button_ask"] ?? null);
            echo "</a></p>
    ";
        }
        // line 494
        echo "    
    <div class=\"clearfix\"></div>
    
    <div class=\"info-holder\">
    
      ";
        // line 499
        if ((($context["price"] ?? null) && ($context["tax"] ?? null))) {
            // line 500
            echo "      <p class=\"info p-tax\"><b>";
            echo ($context["text_tax"] ?? null);
            echo "</b> <span class=\"live-price-tax\">";
            echo ($context["tax"] ?? null);
            echo "</span></p>
      ";
        }
        // line 502
        echo "      
      ";
        // line 503
        if ((($context["price"] ?? null) && ($context["points"] ?? null))) {
            // line 504
            echo "      <p class=\"info\"><b>";
            echo ($context["text_points"] ?? null);
            echo "</b> ";
            echo ($context["points"] ?? null);
            echo "</p>
      ";
        }
        // line 506
        echo "      
      <p class=\"info ";
        // line 507
        if ((($context["qty"] ?? null) > 0)) {
            echo "in_stock";
        }
        echo "\"><b>";
        echo ($context["text_stock"] ?? null);
        echo "</b> ";
        echo ($context["stock"] ?? null);
        echo "</p>
      
      ";
        // line 509
        if (($context["manufacturer"] ?? null)) {
            // line 510
            echo "      <p class=\"info\"><b>";
            echo ($context["text_manufacturer"] ?? null);
            echo "</b> <a class=\"hover_uline\" href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></p>
      ";
        }
        // line 512
        echo "      
      <p class=\"info\"><b>";
        // line 513
        echo ($context["text_model"] ?? null);
        echo "</b> ";
        echo ($context["model"] ?? null);
        echo "</p>
      
      ";
        // line 515
        if (($context["reward"] ?? null)) {
            // line 516
            echo "      <p class=\"info\"><b>";
            echo ($context["text_reward"] ?? null);
            echo "</b> ";
            echo ($context["reward"] ?? null);
            echo "</p>
      ";
        }
        // line 518
        echo "      
      ";
        // line 519
        if (($context["tags"] ?? null)) {
            // line 520
            echo "      <p class=\"info tags\"><b>";
            echo ($context["text_tags"] ?? null);
            echo "</b> &nbsp;<span>";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo "<a class=\"hover_uline\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 520);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 520);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</span></p>
      ";
        }
        // line 522
        echo "      
      ";
        // line 523
        if (($context["basel_share_btn"] ?? null)) {
            // line 524
            echo "\t\t";
            if ((($context["basel_sharing_style"] ?? null) == "large")) {
                // line 525
                echo "\t\t\t<div class=\"lg-share\">
\t\t  <hr>
    <!-- ShareThis BEGIN --><div class=\"sharethis-inline-share-buttons\"></div><!-- ShareThis END -->
\t\t\t</div>
\t\t";
            } else {
                // line 530
                echo "\t  <hr>
    <!-- ShareThis BEGIN --><div class=\"sharethis-inline-share-buttons\"></div><!-- ShareThis END -->
\t\t\t</p>
\t\t ";
            }
            // line 534
            echo "\t  ";
        }
        // line 535
        echo "     
     </div> <!-- .info-holder ends -->
     
\t </div> <!-- .inner ends -->
     </div> <!-- .table-cell.right ends -->
    
    </div> <!-- .product-info ends -->
    
";
        // line 543
        if (($context["full_width_tabs"] ?? null)) {
            // line 544
            echo "</div> <!-- main column ends -->
";
            // line 545
            echo ($context["column_right"] ?? null);
            echo "
</div>
</div> <!-- .row ends -->
</div> <!-- .container ends -->    
";
        }
        // line 550
        echo "
";
        // line 551
        if (($context["full_width_tabs"] ?? null)) {
            // line 552
            echo "<div class=\"outer-container product-tabs-wrapper\">
<div class=\"container\">   
";
        } else {
            // line 555
            echo "<div class=\"inline-tabs\"> 
";
        }
        // line 557
        echo "
<!-- Tabs area start -->
<div class=\"row\">
<div class=\"col-sm-12\">
  
  <ul class=\"nav nav-tabs ";
        // line 562
        echo ($context["product_tabs_style"] ?? null);
        echo " main_tabs\">
    <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 563
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
    ";
        // line 564
        if (($context["product_tabs"] ?? null)) {
            // line 565
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 566
                echo "        <li><a href=\"#custom-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 566);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 566);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "    ";
        }
        // line 569
        echo "    ";
        if (($context["attribute_groups"] ?? null)) {
            // line 570
            echo "    <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
    ";
        }
        // line 572
        echo "    ";
        if (($context["review_status"] ?? null)) {
            // line 573
            echo "    <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
    ";
        }
        // line 575
        echo "    ";
        if (($context["question_status"] ?? null)) {
            // line 576
            echo "    <li><a href=\"#tab-questions\" data-toggle=\"tab\">";
            echo ($context["basel_tab_questions"] ?? null);
            echo " (";
            echo ($context["questions_total"] ?? null);
            echo ")</a></li>
    ";
        }
        // line 578
        echo "  </ul>
  
  <div class=\"tab-content\">
    
    <div class=\"tab-pane active text-center\" id=\"tab-description\">
    ";
        // line 583
        echo ($context["description"] ?? null);
        echo "
    </div>
    
    ";
        // line 586
        if (($context["product_tabs"] ?? null)) {
            // line 587
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 588
                echo "    <div class=\"tab-pane\" id=\"custom-tab-";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "tab_id", [], "any", false, false, false, 588);
                echo "\">
    ";
                // line 589
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "description", [], "any", false, false, false, 589);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            echo "    ";
        }
        // line 593
        echo "    
    ";
        // line 594
        if (($context["attribute_groups"] ?? null)) {
            // line 595
            echo "    <div class=\"tab-pane\" id=\"tab-specification\">
      <table class=\"table specification\">
        ";
            // line 597
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 598
                echo "        <thead>
          <tr>
            <td colspan=\"2\">";
                // line 600
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 600);
                echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
                // line 604
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 604));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 605
                    echo "          <tr>
            <td class=\"text-left\"><b>";
                    // line 606
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 606);
                    echo "</b></td>
            <td class=\"text-right\">";
                    // line 607
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 607);
                    echo "</td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 610
                echo "        </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            echo "      </table>
    </div>
    ";
        }
        // line 615
        echo "    
    ";
        // line 616
        if (($context["question_status"] ?? null)) {
            // line 617
            echo "    <div class=\"tab-pane\" id=\"tab-questions\">
    ";
            // line 618
            echo ($context["product_questions"] ?? null);
            echo "
    </div>
    ";
        }
        // line 621
        echo "    
    ";
        // line 622
        if (($context["review_status"] ?? null)) {
            // line 623
            echo "    <div class=\"tab-pane\" id=\"tab-review\">
    <div class=\"row\">
    <div class=\"col-sm-6\">
    <h4><b>";
            // line 626
            echo ($context["button_reviews"] ?? null);
            echo "</b></h4>
        
\t\t<div id=\"review\">
\t\t";
            // line 629
            if (($context["seo_reviews"] ?? null)) {
                // line 630
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seo_reviews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 631
                    echo "\t\t<div class=\"table\">
\t\t<div class=\"table-cell\"><i class=\"fa fa-user\"></i></div>
\t\t<div class=\"table-cell right\">
\t\t<p class=\"author\"><b>";
                    // line 634
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 634);
                    echo "</b>  -  ";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 634);
                    echo "
\t\t<span class=\"rating\">
\t\t<span class=\"rating_stars rating r";
                    // line 636
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 636);
                    echo "\">
\t\t<i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>
\t\t</span>
\t\t</span>
\t\t</p>
\t\t";
                    // line 641
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 641);
                    echo "
\t\t</div>
\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 645
                echo "\t\t";
                if (($context["pagination"] ?? null)) {
                    // line 646
                    echo "\t\t<div class=\"pagination-holder\">";
                    echo ($context["pagination"] ?? null);
                    echo "</div>
\t\t";
                }
                // line 648
                echo "\t\t";
            } else {
                // line 649
                echo "\t\t<p>";
                echo ($context["text_no_reviews"] ?? null);
                echo "</p>
\t\t";
            }
            // line 651
            echo "\t\t</div>

    </div>
    <div class=\"col-sm-6 right\">
      <form class=\"form-horizontal\" id=\"form-review\">
        
        <h4 id=\"review-notification\"><b>";
            // line 657
            echo ($context["text_write"] ?? null);
            echo "</b></h4>
        ";
            // line 658
            if (($context["review_guest"] ?? null)) {
                // line 659
                echo "        
        <div class=\"form-group required\">
          <div class=\"col-sm-12 rating-stars\">
            <label class=\"control-label\">";
                // line 662
                echo ($context["entry_rating"] ?? null);
                echo "</label>
            
            <input type=\"radio\" value=\"1\" name=\"rating\" id=\"rating1\" />
        \t<label for=\"rating1\"><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"2\" name=\"rating\" id=\"rating2\" />
        \t<label for=\"rating2\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"3\" name=\"rating\" id=\"rating3\" />
        \t<label for=\"rating3\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"4\" name=\"rating\" id=\"rating4\" />
        \t<label for=\"rating4\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            
            <input type=\"radio\" value=\"5\" name=\"rating\" id=\"rating5\" />
        \t<label for=\"rating5\"><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i></label>
            </div>
        </div>
        
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-name\">";
                // line 683
                echo ($context["entry_name"] ?? null);
                echo "</label>
            <input type=\"text\" name=\"name\" value=\"";
                // line 684
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control grey\" />
          </div>
        </div>
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            <label class=\"control-label\" for=\"input-review\">";
                // line 689
                echo ($context["entry_review"] ?? null);
                echo "</label>
            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control grey\"></textarea>
            <small>";
                // line 691
                echo ($context["text_note"] ?? null);
                echo "</small>
          </div>
        </div>
        
        <div class=\"form-group required\">
          <div class=\"col-sm-12\">
            ";
                // line 697
                echo ($context["captcha"] ?? null);
                echo "
          </div>
        </div>
        
        <div class=\"buttons clearfix\">
          <div class=\"text-right\">
          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 703
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-outline\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
          </div>
        </div>
        ";
            } else {
                // line 707
                echo "        ";
                echo ($context["text_login"] ?? null);
                echo "
        ";
            }
            // line 709
            echo "      </form>
       </div>
      </div>
    </div>
    ";
        }
        // line 713
        echo "<!-- if review-status ends -->
    
  </div> <!-- .tab-content ends -->
</div> <!-- .col-sm-12 ends -->
</div> <!-- .row ends -->
<!-- Tabs area ends -->

";
        // line 720
        if (($context["full_width_tabs"] ?? null)) {
            // line 721
            echo "</div>
";
        }
        // line 723
        echo "</div>
      
      <!-- Related Products -->
      
    ";
        // line 727
        if (($context["full_width_tabs"] ?? null)) {
            // line 728
            echo "    <div class=\"container\">  
    ";
        }
        // line 730
        echo "      
        ";
        // line 731
        if (($context["products"] ?? null)) {
            // line 732
            echo "        <div class=\"widget widget-related\">
        
        <div class=\"widget-title\">
        <p class=\"main-title\"><span>";
            // line 735
            echo ($context["text_related"] ?? null);
            echo "</span></p>
        <p class=\"widget-title-separator\"><i class=\"icon-line-cross\"></i></p>
        </div>
        
        <div class=\"grid grid-holder related carousel grid";
            // line 739
            echo ($context["basel_rel_prod_grid"] ?? null);
            echo "\">
            ";
            // line 740
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
                // line 741
                echo "              ";
                $this->loadTemplate("basel/template/product/single_product.twig", "basel/template/product/product.twig", 741)->display($context);
                // line 742
                echo "            ";
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
            // line 743
            echo "        </div>
        </div>
        ";
        }
        // line 746
        echo "      
      ";
        // line 747
        echo ($context["content_bottom"] ?? null);
        echo "
      
    ";
        // line 749
        if (($context["full_width_tabs"] ?? null)) {
            // line 750
            echo "    </div>  
    ";
        }
        // line 752
        echo "

";
        // line 754
        if ( !($context["full_width_tabs"] ?? null)) {
            // line 755
            echo "</div> <!-- main column ends -->
";
            // line 756
            echo ($context["column_right"] ?? null);
            echo "
</div>
</div> <!-- .row ends -->
</div> <!-- .container ends -->
";
        }
        // line 761
        echo "
<script src=\"catalog/view/theme/basel/js/lightgallery/js/lightgallery.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/lightgallery/js/lg-zoom.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/cloudzoom/cloud-zoom.1.0.2.min.js\"></script>
";
        // line 765
        if (($context["basel_price_update"] ?? null)) {
            // line 766
            echo "<script src=\"index.php?route=extension/basel/live_options/js&product_id=";
            echo ($context["product_id"] ?? null);
            echo "\"></script>
";
        }
        // line 768
        echo "
";
        // line 769
        if (($context["products"] ?? null)) {
            // line 770
            echo "<script><!--
\$('.grid-holder.related').slick({
prevArrow: \"<a class=\\\"arrow-left icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"arrow-right icon-arrow-right\\\"></a>\",
dots:true,
";
            // line 775
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 776
                echo "rtl: true,
";
            }
            // line 778
            echo "respondTo:'min',
";
            // line 779
            if ((($context["basel_rel_prod_grid"] ?? null) == "5")) {
                // line 780
                echo "slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 781
($context["basel_rel_prod_grid"] ?? null) == "4")) {
                // line 782
                echo "slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 783
($context["basel_rel_prod_grid"] ?? null) == "3")) {
                // line 784
                echo "slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},
";
            } elseif ((            // line 785
($context["basel_rel_prod_grid"] ?? null) == "2")) {
                // line 786
                echo "slidesToShow:2,slidesToScroll:2,responsive:[
";
            }
            // line 788
            if (($context["items_mobile_fw"] ?? null)) {
                // line 789
                echo "{breakpoint:320,settings:{slidesToShow:1,slidesToScroll:1}}
";
            }
            // line 791
            echo "]
});
\$('.product-style2 .single-product .icon').attr('data-placement', 'top');
\$('[data-toggle=\\'tooltip\\']').tooltip({container: 'body'});
//--></script>
";
        }
        // line 797
        echo "
";
        // line 798
        if ((($context["sale_end_date"] ?? null) && ($context["product_page_countdown"] ?? null))) {
            // line 799
            echo " <script>
  \$(function() {
\t\$('#special_countdown').countdown('";
            // line 801
            echo ($context["sale_end_date"] ?? null);
            echo "').on('update.countdown', function(event) {
  var \$this = \$(this).html(event.strftime(''
    + '<div class=\\\"special_countdown\\\"></span><p><span class=\\\"icon-clock\\\"></span> ";
            // line 803
            echo ($context["basel_text_offer_ends"] ?? null);
            echo "</p><div>'
    + '%D<i>";
            // line 804
            echo ($context["basel_text_days"] ?? null);
            echo "</i></div><div>'
    + '%H <i>";
            // line 805
            echo ($context["basel_text_hours"] ?? null);
            echo "</i></div><div>'
    + '%M <i>";
            // line 806
            echo ($context["basel_text_mins"] ?? null);
            echo "</i></div><div>'
    + '%S <i>";
            // line 807
            echo ($context["basel_text_secs"] ?? null);
            echo "</i></div></div>'));
});
  });
</script>
";
        }
        // line 812
        echo "
<script><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>

<script><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/basel/basel_features/add_to_cart',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'number\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function(json) {
\t\t\t\$('body').append('<span class=\"basel-spinner ajax-call\"></span>');
\t\t},

\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.table-cell').removeClass('has-error');

\t\t\tif (json.error) {
\t\t\t\t\$('.basel-spinner.ajax-call').remove();
\t\t\t\tif (json.error.option) {
\t\t\t\t\tfor (i in json.error.option) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json.error.option[i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json.error.option[i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json.error.recurring) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\t\tif (json.success_redirect) {
\t\t\t\t\t
\t\t\t\t\tlocation = json.success_redirect;
\t\t\t\t
\t\t\t\t} else if (json.success) {
\t\t\t\t\t
\t\t\t\t\t\$('.table-cell').removeClass('has-error');
\t\t\t\t\t\$('.alert, .popup-note, .basel-spinner.ajax-call, .text-danger').remove();
\t\t\t\t 
\t\t\t\t\thtml = '<div class=\"popup-note\">';
\t\t\t\t\thtml += '<div class=\"inner\">';
\t\t\t\t\thtml += '<a class=\"popup-note-close\" onclick=\"\$(this).parent().parent().remove()\">&times;</a>';
\t\t\t\t\thtml += '<div class=\"table\">';
\t\t\t\t\thtml += '<div class=\"table-cell v-top img\"><img src=\"' + json.image + '\" /></div>';
\t\t\t\t\thtml += '<div class=\"table-cell v-top\">' + json.success + '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\$('body').append(html);
\t\t\t\t\tsetTimeout(function() {\$('.popup-note').hide();}, 8100);
\t\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('.cart-total-items').html( json.total_items );
\t\t\t\t\t\$('.cart-total-amount').html( json.total_amount );
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('#cart-content').load('index.php?route=common/cart/info #cart-content > *');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script>
<script><!--
\$('.date').datetimepicker({
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();
\t\$(\"html,body\").animate({scrollTop:((\$(\"#review\").offset().top)-50)},500);
    \$('#review').fadeOut(50);

    \$('#review').load(this.href);

    \$('#review').fadeIn(500);
\t
});


\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 987
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json.error) {
\t\t\t\t\$('#review-notification').after('<div class=\"alert alert-sm alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json.error + '</div>');
\t\t\t}

\t\t\tif (json.success) {
\t\t\t\t\$('#review-notification').after('<div class=\"alert alert-sm alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json.success + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
";
        // line 1016
        if ((($context["product_layout"] ?? null) == "full-width")) {
            // line 1017
            echo "// Sticky information
\$('.table-cell.right .inner').theiaStickySidebar({containerSelector:'.product-info'});
";
        }
        // line 1020
        echo "
// Reviews/Question scroll link
\$(\".to_tabs\").click(function() {
    \$('html, body').animate({
        scrollTop: (\$(\".main_tabs\").offset().top - 100)
    }, 1000);
});

// Sharing buttons
";
        // line 1029
        if (($context["basel_share_btn"] ?? null)) {
            // line 1030
            echo "var share_url = encodeURIComponent(window.location.href);
var page_title = '";
            // line 1031
            echo ($context["heading_title"] ?? null);
            echo "';
";
            // line 1032
            if (($context["thumb"] ?? null)) {
                // line 1033
                echo "var thumb = '";
                echo ($context["thumb"] ?? null);
                echo "';
";
            }
            // line 1035
            echo "\$('.fb_share').attr(\"href\", 'https://www.facebook.com/sharer/sharer.php?u=' + share_url + '');
\$('.twitter_share').attr(\"href\", 'https://twitter.com/intent/tweet?source=' + share_url + '&text=' + page_title + ': ' + share_url + '');
\$('.google_share').attr(\"href\", 'https://plus.google.com/share?url=' + share_url + '');
\$('.pinterest_share').attr(\"href\", 'http://pinterest.com/pin/create/button/?url=' + share_url + '&media=' + thumb + '&description=' + page_title + '');
\$('.vk_share').attr(\"href\", 'http://vkontakte.ru/share.php?url=' + share_url + '');
";
        }
        // line 1041
        echo "});
//--></script>

";
        // line 1044
        if ((($context["product_layout"] ?? null) != "full-width")) {
            // line 1045
            echo "<script>
\$(document).ready(function() {
\$('.image-additional a.link').click(function (e) {
\tif (\$(this).hasClass(\"locked\")) {
  \t\te.stopImmediatePropagation();
\t}
\t\$('.image-additional a.link.active').removeClass('active');
\t\$(this).addClass('active')
});

";
            // line 1055
            if (($context["images"] ?? null)) {
                // line 1056
                echo "\$('.cloud-zoom-wrap').click(function (e) {
\te.preventDefault();
\t\$('.image-additional a.link.active').removeClass('locked').trigger('click').addClass('locked');
});
";
            } else {
                // line 1061
                echo "\$('.cloud-zoom-wrap').click(function (e) {
\te.preventDefault();
\t\$('#main-image').trigger('click');
});
";
            }
            // line 1066
            echo "
\$('.image-additional').slick({
prevArrow: \"<a class=\\\"icon-arrow-left\\\"></a>\",
nextArrow: \"<a class=\\\"icon-arrow-right\\\"></a>\",
appendArrows: '.image-additional .slick-list',
arrows:true,
";
            // line 1072
            if ((($context["direction"] ?? null) == "rtl")) {
                // line 1073
                echo "rtl: true,
";
            }
            // line 1075
            echo "infinite:false,
";
            // line 1076
            if ((($context["product_layout"] ?? null) == "images-left")) {
                // line 1077
                echo "slidesToShow: ";
                echo twig_round((($context["img_h"] ?? null) / ($context["img_a_h"] ?? null)), 0, "floor");
                echo ",
vertical:true,
verticalSwiping:true,
";
            } else {
                // line 1081
                echo "slidesToShow: ";
                echo twig_round((($context["img_w"] ?? null) / ($context["img_a_w"] ?? null)));
                echo ",
";
            }
            // line 1083
            echo "responsive: [
{
breakpoint: 992,
settings: {
vertical:false,
verticalSwiping:false
}
}]
});\t

});
//--></script>
";
        }
        // line 1096
        echo "<script>
\$(document).ready(function() {
// Image Gallery
\$(\"#gallery\").lightGallery({
\tselector: '.link',
\tdownload:false,
\thideBarsDelay:99999
});
});
//--></script>
<script type=\"application/ld+json\">
{
\"@context\": \"http://schema.org\",
\"@type\": \"Product\",
\"image\": [
";
        // line 1111
        if (($context["thumb"] ?? null)) {
            // line 1112
            echo "\"";
            echo ($context["thumb"] ?? null);
            echo "\"
";
        }
        // line 1114
        echo "],
\"description\": \"";
        // line 1115
        echo ($context["meta_description"] ?? null);
        echo "\",
";
        // line 1116
        if (($context["review_qty"] ?? null)) {
            // line 1117
            echo "\"aggregateRating\": {
\"@type\": \"AggregateRating\",
\"ratingValue\": \"";
            // line 1119
            echo ($context["rating"] ?? null);
            echo "\",
\"reviewCount\": \"";
            // line 1120
            echo ($context["review_qty"] ?? null);
            echo "\"},
";
        }
        // line 1122
        echo "\"name\": \"";
        echo ($context["heading_title"] ?? null);
        echo "\",
\"sku\": \"";
        // line 1123
        echo ($context["model"] ?? null);
        echo "\",
";
        // line 1124
        if (($context["manufacturer"] ?? null)) {
            // line 1125
            echo "\"brand\": \"";
            echo ($context["manufacturer"] ?? null);
            echo "\",
";
        }
        // line 1127
        echo "\"offers\": {
\"@type\": \"Offer\",
";
        // line 1129
        if ((($context["qty"] ?? null) > 0)) {
            // line 1130
            echo "\"availability\": \"http://schema.org/InStock\",
";
        } else {
            // line 1132
            echo "\"availability\": \"http://schema.org/OutOfStock\",
";
        }
        // line 1134
        if (($context["price"] ?? null)) {
            // line 1135
            if (($context["special"] ?? null)) {
                // line 1136
                echo "\"price\": \"";
                echo ($context["special_snippet"] ?? null);
                echo "\",
";
            } else {
                // line 1138
                echo "\"price\": \"";
                echo ($context["price_snippet"] ?? null);
                echo "\",
";
            }
            // line 1140
            echo "\"priceCurrency\": \"";
            echo ($context["currency_code"] ?? null);
            echo "\"
";
        }
        // line 1142
        echo "}
}
</script>

<div id=\"modal-size\" class=\"modal fade\" >  
  <div class=\"modal-dialog\">    
    <div class=\"modal-content\">      
      <div class=\"modal-header\">        
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>        
        <h4 class=\"modal-title\">Vodič za veličine</h4>      
      </div>      
      <div class=\"modal-body\"><div class=\"table-responsive\">
<table class=\"table table-striped table-responsive\">
  <tbody>
    <tr>
      <th>Veličina (EUR)</th>
      <th>Veličina (EUR)</th>
      <th>Prsa (cm)</th>
      <th>Struk (cm)</th>
      <th>Bokovi (cm)</th>
    </tr>
    <tr>
      <td>XS</td>
      <td>46</td>
      <td>92-96</td>
      <td>74-78</td>
      <td>94-98</td>
    </tr>
    <tr>
      <td>S</td>
      <td>48</td>
      <td>96-100</td>
      <td>78-82</td>
      <td>98-102</td>
    </tr>
    <tr>
      <td>M</td>
      <td>50</td>
      <td>100-104</td>
      <td>82-86</td>
      <td>102-106</td>
    </tr>
    <tr>
      <td>L</td>
      <td>52</td>
      <td>104-108</td>
      <td>86-90</td>
      <td>106-110</td>
    </tr>
    <tr>
      <td>XL</td>
      <td>54</td>
      <td>108-114</td>
      <td>90-94</td>
      <td>110-114</td>
    </tr>
    <tr>
      <td>XXL</td>
      <td>56</td>
      <td>114-120</td>
      <td>94-96</td>
      <td>114-118</td>
    </tr>

     <tr>
      <td>XXXL</td>
      <td>58</td>
      <td>120-126</td>
      <td>98-102</td>
      <td>118-155</td>
    </tr>
  </tbody>
</table>
</div>

</div>   
 </div>
</div>
</div>

\t\t\t\t";
        // line 1222
        if ((((($context["product_variant_status"] ?? null) && ($context["variant"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["variant_setting"] ?? null), "ajax", [], "any", false, false, false, 1222) == 1)) && (($context["is_ajax"] ?? null) == 0))) {
            // line 1223
            echo "\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\$(document).on('click', '.variant a', function(e){
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\tif(\$(this).hasClass('soldout') === false) {
\t\t\t\t\t\t\t\tvar href = \$(this).attr('href');\t
\t\t\t\t\t\t\t\t\$.get(href, function(data){
\t\t\t\t\t\t\t\t\tif (typeof data != 'undefined' && data) {
\t\t\t\t\t\t\t\t\t\t\$('.product-box').replaceWith(\$(data).html());\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});\t
\t\t\t\t\t\t//--></script> 
\t\t\t\t\t";
        }
        // line 1236
        echo "\t
\t\t\t\t
";
        // line 1238
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2700 => 1238,  2696 => 1236,  2680 => 1223,  2678 => 1222,  2596 => 1142,  2590 => 1140,  2584 => 1138,  2578 => 1136,  2576 => 1135,  2574 => 1134,  2570 => 1132,  2566 => 1130,  2564 => 1129,  2560 => 1127,  2554 => 1125,  2552 => 1124,  2548 => 1123,  2543 => 1122,  2538 => 1120,  2534 => 1119,  2530 => 1117,  2528 => 1116,  2524 => 1115,  2521 => 1114,  2515 => 1112,  2513 => 1111,  2496 => 1096,  2481 => 1083,  2475 => 1081,  2467 => 1077,  2465 => 1076,  2462 => 1075,  2458 => 1073,  2456 => 1072,  2448 => 1066,  2441 => 1061,  2434 => 1056,  2432 => 1055,  2420 => 1045,  2418 => 1044,  2413 => 1041,  2405 => 1035,  2399 => 1033,  2397 => 1032,  2393 => 1031,  2390 => 1030,  2388 => 1029,  2377 => 1020,  2372 => 1017,  2370 => 1016,  2338 => 987,  2161 => 812,  2153 => 807,  2149 => 806,  2145 => 805,  2141 => 804,  2137 => 803,  2132 => 801,  2128 => 799,  2126 => 798,  2123 => 797,  2115 => 791,  2111 => 789,  2109 => 788,  2105 => 786,  2103 => 785,  2100 => 784,  2098 => 783,  2095 => 782,  2093 => 781,  2090 => 780,  2088 => 779,  2085 => 778,  2081 => 776,  2079 => 775,  2072 => 770,  2070 => 769,  2067 => 768,  2061 => 766,  2059 => 765,  2053 => 761,  2045 => 756,  2042 => 755,  2040 => 754,  2036 => 752,  2032 => 750,  2030 => 749,  2025 => 747,  2022 => 746,  2017 => 743,  2003 => 742,  2000 => 741,  1983 => 740,  1979 => 739,  1972 => 735,  1967 => 732,  1965 => 731,  1962 => 730,  1958 => 728,  1956 => 727,  1950 => 723,  1946 => 721,  1944 => 720,  1935 => 713,  1928 => 709,  1922 => 707,  1913 => 703,  1904 => 697,  1895 => 691,  1890 => 689,  1882 => 684,  1878 => 683,  1854 => 662,  1849 => 659,  1847 => 658,  1843 => 657,  1835 => 651,  1829 => 649,  1826 => 648,  1820 => 646,  1817 => 645,  1807 => 641,  1799 => 636,  1792 => 634,  1787 => 631,  1782 => 630,  1780 => 629,  1774 => 626,  1769 => 623,  1767 => 622,  1764 => 621,  1758 => 618,  1755 => 617,  1753 => 616,  1750 => 615,  1745 => 612,  1738 => 610,  1729 => 607,  1725 => 606,  1722 => 605,  1718 => 604,  1711 => 600,  1707 => 598,  1703 => 597,  1699 => 595,  1697 => 594,  1694 => 593,  1691 => 592,  1682 => 589,  1677 => 588,  1672 => 587,  1670 => 586,  1664 => 583,  1657 => 578,  1649 => 576,  1646 => 575,  1640 => 573,  1637 => 572,  1631 => 570,  1628 => 569,  1625 => 568,  1614 => 566,  1609 => 565,  1607 => 564,  1603 => 563,  1599 => 562,  1592 => 557,  1588 => 555,  1583 => 552,  1581 => 551,  1578 => 550,  1570 => 545,  1567 => 544,  1565 => 543,  1555 => 535,  1552 => 534,  1546 => 530,  1539 => 525,  1536 => 524,  1534 => 523,  1531 => 522,  1512 => 520,  1510 => 519,  1507 => 518,  1499 => 516,  1497 => 515,  1490 => 513,  1487 => 512,  1477 => 510,  1475 => 509,  1464 => 507,  1461 => 506,  1453 => 504,  1451 => 503,  1448 => 502,  1440 => 500,  1438 => 499,  1431 => 494,  1425 => 492,  1423 => 491,  1417 => 490,  1411 => 489,  1405 => 485,  1399 => 483,  1397 => 482,  1386 => 480,  1382 => 479,  1376 => 478,  1369 => 473,  1363 => 469,  1352 => 467,  1348 => 466,  1344 => 465,  1338 => 462,  1335 => 461,  1333 => 460,  1330 => 459,  1320 => 451,  1313 => 450,  1299 => 443,  1290 => 439,  1282 => 437,  1280 => 436,  1277 => 435,  1263 => 428,  1254 => 424,  1246 => 422,  1244 => 421,  1241 => 420,  1227 => 413,  1218 => 409,  1210 => 407,  1208 => 406,  1205 => 405,  1196 => 401,  1188 => 400,  1182 => 397,  1174 => 395,  1172 => 394,  1169 => 393,  1156 => 389,  1148 => 386,  1140 => 384,  1138 => 383,  1135 => 382,  1122 => 378,  1114 => 375,  1106 => 373,  1104 => 372,  1100 => 370,  1094 => 366,  1085 => 362,  1078 => 360,  1076 => 359,  1072 => 358,  1069 => 357,  1047 => 355,  1045 => 354,  1039 => 353,  1031 => 351,  1027 => 350,  1023 => 349,  1017 => 346,  1009 => 344,  1007 => 343,  1004 => 342,  998 => 338,  989 => 334,  982 => 332,  980 => 331,  976 => 330,  973 => 329,  951 => 327,  949 => 326,  943 => 325,  935 => 323,  931 => 322,  927 => 321,  921 => 318,  913 => 316,  911 => 315,  908 => 314,  902 => 310,  895 => 308,  888 => 306,  886 => 305,  879 => 304,  875 => 303,  871 => 302,  865 => 301,  857 => 298,  849 => 296,  847 => 295,  844 => 294,  840 => 293,  837 => 292,  835 => 291,  829 => 287,  822 => 283,  797 => 282,  793 => 281,  790 => 280,  784 => 279,  782 => 278,  746 => 244,  744 => 243,  739 => 240,  733 => 238,  731 => 237,  726 => 234,  722 => 233,  718 => 231,  706 => 229,  702 => 228,  699 => 227,  697 => 226,  693 => 224,  684 => 221,  678 => 219,  676 => 218,  673 => 217,  671 => 216,  668 => 215,  663 => 213,  656 => 209,  653 => 208,  651 => 207,  645 => 204,  641 => 202,  634 => 198,  630 => 197,  617 => 190,  612 => 188,  608 => 187,  604 => 186,  596 => 183,  588 => 178,  584 => 177,  579 => 175,  575 => 173,  569 => 171,  565 => 170,  560 => 168,  556 => 167,  551 => 165,  545 => 163,  536 => 162,  530 => 161,  526 => 159,  521 => 158,  517 => 157,  512 => 155,  508 => 154,  504 => 153,  500 => 152,  496 => 151,  492 => 150,  488 => 149,  483 => 148,  481 => 147,  477 => 145,  475 => 144,  455 => 141,  448 => 138,  440 => 137,  437 => 136,  418 => 135,  413 => 133,  404 => 126,  397 => 121,  393 => 119,  379 => 117,  376 => 116,  355 => 113,  352 => 112,  348 => 111,  345 => 110,  343 => 109,  340 => 108,  318 => 105,  315 => 104,  309 => 102,  307 => 101,  304 => 100,  298 => 98,  296 => 97,  293 => 96,  287 => 94,  285 => 93,  281 => 91,  279 => 90,  271 => 88,  269 => 87,  260 => 81,  255 => 80,  252 => 79,  249 => 78,  246 => 77,  243 => 76,  240 => 75,  237 => 74,  235 => 73,  231 => 72,  226 => 70,  222 => 68,  211 => 66,  207 => 65,  202 => 62,  196 => 58,  190 => 56,  185 => 54,  181 => 53,  177 => 52,  171 => 49,  167 => 47,  161 => 45,  156 => 43,  152 => 42,  147 => 39,  142 => 37,  138 => 36,  134 => 34,  128 => 32,  123 => 30,  119 => 29,  115 => 28,  109 => 25,  105 => 23,  99 => 21,  94 => 19,  90 => 18,  86 => 16,  84 => 15,  57 => 11,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/product/product.twig", "");
    }
}
