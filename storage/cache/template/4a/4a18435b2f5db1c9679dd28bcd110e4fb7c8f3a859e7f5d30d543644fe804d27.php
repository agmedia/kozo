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

/* default/template/extension/module/tieredgifts_listing.twig */
class __TwigTemplate_fdc9cbe0f37e95e3c8b64ae36ae9ec0170f9e8ba3077ee48d83064244fda92d5 extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
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
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
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
            $context["class"] = "col-sm-9";
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
      <h2>
        ";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "
        
            <span class=\"pull-right\"><a href=\"";
        // line 25
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">Nastavi na plaćanje</a></span>
      
      </h2>

      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["giftCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Gift"]) {
            // line 30
            echo "      <h3>";
            echo (((twig_get_attribute($this->env, $this->source, $context["Gift"], "spendMore", [], "any", false, false, false, 30) != false)) ? (twig_get_attribute($this->env, $this->source, $context["Gift"], "NotSuitable", [], "any", false, false, false, 30)) : (twig_get_attribute($this->env, $this->source, $context["Gift"], "Suitable", [], "any", false, false, false, 30)));
            echo "</h3>
      <div class=\"row\" style=\"margin:0px -15px 50px -15px\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Gift"], "GiftProducts", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "        <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 ";
                echo (((twig_get_attribute($this->env, $this->source, $context["Gift"], "spendMore", [], "any", false, false, false, 33) || (twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, ($context["giftAlreadyAdded"] ?? null), "product_id", [], "any", false, false, false, 33)))) ? ("faded") : (""));
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 35);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "</a></h4>
          
              ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "              <div class=\"rating\">
                ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(5);
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 42
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42) < $context["i"])) {
                            // line 43
                            echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                        } else {
                            // line 45
                            echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                        }
                        // line 47
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "              </div>
              ";
                }
                // line 50
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "              <p class=\"price\">
                ";
                    // line 52
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "                <strong><span style=\"text-decoration: line-through;\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                        echo "</span> ";
                        echo ($context["free_text"] ?? null);
                        echo "</strong>
                ";
                    } else {
                        // line 55
                        echo "                <strong><span style=\"text-decoration: line-through;\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55);
                        echo "</span> ";
                        echo ($context["free_text"] ?? null);
                        echo "</strong>
                ";
                    }
                    // line 57
                    echo "              </p>
              ";
                }
                // line 59
                echo "            </div>
            <input type=\"hidden\" name=\"productOptions\" value=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "productOptions", [], "any", false, false, false, 60);
                echo "\">
            <div class=\"button-group\">
              <button style=\"width:100%;\" data-product-id=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
                echo "\" type=\"button\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["Gift"], "spendMore", [], "any", false, false, false, 62)) ? ("disabled") : (""));
                echo " class=\"gift_button btn btn-default\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_gift"] ?? null);
                echo "</span></button>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
      ";
        // line 70
        if (($context["buttons"] ?? null)) {
            // line 71
            echo "      <div class=\"buttons\">
        <div class=\"pull-left\"><a href=\"";
            // line 72
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_shopping"] ?? null);
            echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
            // line 73
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_checkout"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 76
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

<script type=\"text/javascript\">

    function setGiftsToUnavailable(){
            \$('.faded').each(function() {
                \$(this).find('a').attr('href', 'javascript:void(0)')
                \$(this).fadeTo(500,0.4);
                \$(this).find('button').prop('disabled', true);
            });
    }

    \$(document).ready(function() {
        \$('.gift_button').click(function () {
            ";
        // line 92
        if (($context["giftAlreadyAdded"] ?? null)) {
            // line 93
            echo "                var has_options = \$(this).parent().parent().find('input[name=\"productOptions\"]').val();
                if(has_options == '1') {
                     \$.fancybox.open({
                        href : 'index.php?route=";
            // line 96
            echo ($context["modulePath"] ?? null);
            echo "/getOptions&change=1&product_id=' + \$(this).data('product-id'),
                            type : 'ajax',
                            padding : 50,
                            openEffect : 'elastic',
                            openSpeed  : 150,
                            fitToView   : true,
                     });
                } else {
                    \$.ajax({
                        url: '";
            // line 105
            echo ($context["changeGiftLink"] ?? null);
            echo "',
                        type: 'post',
                        data: { product_id: \$(this).data('product-id') },
                        success: function(json) {
                            location.reload();
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
             ";
        } else {
            // line 117
            echo "                var has_options = \$(this).parent().parent().find('input[name=\"productOptions\"]').val();
                if(has_options == '1') {
                    \$.fancybox.open({
                    href : 'index.php?route=";
            // line 120
            echo ($context["modulePath"] ?? null);
            echo "/getOptions&product_id=' + \$(this).data('product-id'),
                        type : 'ajax',
                        padding : 50,
                        openEffect : 'elastic',
                        openSpeed  : 150,
                        fitToView   : true,
                    });
                } else {
                    cart.add(\$(this).data('product-id'));

                    \$('.product-layout').addClass('faded');
                    setGiftsToUnavailable();

                     setTimeout(function(){
                      location.reload();
                    }, 1200);
                }
             ";
        }
        // line 138
        echo "        });
        setGiftsToUnavailable();
    });
</script>


";
        // line 144
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/tieredgifts_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 144,  347 => 138,  326 => 120,  321 => 117,  306 => 105,  294 => 96,  289 => 93,  287 => 92,  269 => 77,  264 => 76,  256 => 73,  250 => 72,  247 => 71,  245 => 70,  242 => 69,  235 => 67,  220 => 62,  215 => 60,  212 => 59,  208 => 57,  200 => 55,  192 => 53,  190 => 52,  187 => 51,  184 => 50,  180 => 48,  174 => 47,  170 => 45,  166 => 43,  163 => 42,  159 => 41,  156 => 40,  154 => 39,  147 => 37,  136 => 35,  130 => 33,  126 => 32,  120 => 30,  116 => 29,  109 => 25,  104 => 23,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/tieredgifts_listing.twig", "");
    }
}
