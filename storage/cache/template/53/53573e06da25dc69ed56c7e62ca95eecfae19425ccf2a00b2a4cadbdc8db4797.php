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

/* basel/template/common/cart.twig */
class __TwigTemplate_5f9b38f3624219a92522d17be93fff8f9d7578fc82730867de642375ad03a07a extends \Twig\Template
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
        echo " 


  <ul id=\"cart-content\">
    ";
        // line 5
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 6
            echo "

    <script>
(function(f, a, s, h, i, o, n) {f['GlamiTrackerObject'] = i; f[i]=f[i]||function(){(f[i].q=f[i].q||[]).push(arguments)};o=a.createElement(s), n=a.getElementsByTagName(s)[0];o.async=1;o.src=h;n.parentNode.insertBefore(o,n) })(window, document, 'script', '//www.glami.hr/js/compiled/pt.js', 'glami');

 ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "glami('create', '78FEF97D04F20D6F870D45C4534F59BF', 'hr', 'PRODUCT";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 12);
                echo "');



glami('PRODUCT";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 16);
                echo ".track', 'AddToCart', {
item_ids: [";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo "'";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 17);
                        echo ".";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 17);
                        echo "',";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo "] 
value: ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18);
                echo ", // product price
currency: 'HRK' // product price currency
});


 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
</script>


   


    <li>
      <table class=\"table products\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "        <tr>
          <td class=\"image\">
          ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 37);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                    echo "\" /></a>
            ";
                }
                // line 39
                echo "            </td>
          <td class=\"main\"><a class=\"product-name main-font\" href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                echo "</a>
            ";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                echo " x <span class=\"price\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
                echo "</span>
            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 44
                        echo "            <br />
            - <small>";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 45);
                        echo "</small>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "            ";
                }
                // line 48
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "            <br />
            - <small>";
                    // line 50
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50);
                    echo "</small>
            ";
                }
                // line 52
                echo "          </td>
          <td class=\"remove\"><a onclick=\"cart.remove('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 53);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"remove\">&times;</a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 57
                echo "        <tr>
          <td colspan=\"2\" class=\"text-left\"><span class=\"product-name main-font\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 58);
                echo "</span>
          1 x <span class=\"price\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 59);
                echo "</span></td>
          <td class=\"text-right\"><a onclick=\"voucher.remove('";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 60);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"remove\">&times;</a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table totals\">
          ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 69
                echo "          <tr>
            <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 70);
                echo "</td>
            <td class=\"text-right\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 71);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </table>
        <a class=\"btn btn-default btn-block\" href=\"";
            // line 75
            echo ($context["cart"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>
        <a class=\"btn btn-contrast btn-block\" href=\"";
            // line 76
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
      </div>
    </li>
    ";
        } else {
            // line 80
            echo "    <li>
      <div class=\"table empty\">
      <div class=\"table-cell\"><i class=\"global-cart\"></i></div>
      <div class=\"table-cell\">";
            // line 83
            echo ($context["text_empty"] ?? null);
            echo "</div>
      </div>
    </li>
    ";
        }
        // line 87
        echo "  </ul>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 87,  272 => 83,  267 => 80,  258 => 76,  252 => 75,  249 => 74,  240 => 71,  236 => 70,  233 => 69,  229 => 68,  222 => 63,  211 => 60,  207 => 59,  203 => 58,  200 => 57,  195 => 56,  184 => 53,  181 => 52,  174 => 50,  171 => 49,  168 => 48,  165 => 47,  155 => 45,  152 => 44,  147 => 43,  145 => 42,  139 => 41,  133 => 40,  130 => 39,  118 => 37,  116 => 36,  112 => 34,  108 => 33,  97 => 24,  85 => 18,  68 => 17,  64 => 16,  56 => 12,  52 => 11,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/cart.twig", "");
    }
}
