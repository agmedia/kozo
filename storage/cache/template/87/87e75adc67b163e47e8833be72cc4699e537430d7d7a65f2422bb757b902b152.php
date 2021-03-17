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

/* basel/template/common/footer.twig */
class __TwigTemplate_1089ba99d14ddae5bb85ff46822f6c80fac72cf247456807d87e454a9cfa20fe extends \Twig\Template
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
        echo "<div class=\"container\">
";
        // line 2
        echo ($context["position_bottom_half"] ?? null);
        echo "
</div>
<div class=\"container\">
";
        // line 5
        echo ($context["position_bottom"] ?? null);
        echo "
</div>
<div id=\"footer\">
<div class=\"container\">
";
        // line 9
        if ((($context["footer_block_1"] ?? null) && (($context["footer_block_1"] ?? null) != "<p><br></p>"))) {
            // line 10
            echo "<div class=\"footer-top-block\">
";
            // line 11
            echo ($context["footer_block_1"] ?? null);
            echo "
</div>
";
        }
        // line 14
        echo "<div class=\"row links-holder\">
<div class=\"col-xs-12 col-sm-12\">
  <div class=\"row\">
  ";
        // line 17
        if (($context["custom_links"] ?? null)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["basel_footer_columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 19
                echo "    <div class=\"footer-column col-xs-12 col-sm-3 eq_height\">
      ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "        <h5>
          <a  role=\"button\" data-toggle=\"collapse\" href=\"#collapse";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 22);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 22);
                    echo "\">
            ";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 23);
                    echo "  <b class=\"pull-right visible-xs\">+</b>
          </a>
        </h5>
      ";
                }
                // line 27
                echo "



      <div class=\"collapse in\" id=\"collapse";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 31);
                echo "\">
        ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["column"], "links", [], "any", true, true, false, 32)) {
                    // line 33
                    echo "          <ul class=\"list-unstyled\">
            ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "links", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 35
                        echo "              <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 35);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 35);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "          </ul>
        ";
                }
                // line 39
                echo "
      </div>

      <script>
        \$(document).ready(function(){
          if (\$(window).width() <= 768) {
            \$(\"#collapse1\").removeClass(\"in\");
            \$(\"#collapse4\").removeClass(\"in\");
            \$(\"#collapse3\").removeClass(\"in\");
          }
        });
      </script>



    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "  ";
        } else {
            // line 57
            echo "      ";
            if (($context["informations"] ?? null)) {
                // line 58
                echo "      <div class=\"footer-column col-xs-6 col-sm-3 eq_height\">
        <h5>";
                // line 59
                echo ($context["text_information"] ?? null);
                echo "</h5>
        <ul class=\"list-unstyled\">
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 62
                    echo "          <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 62);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 62);
                    echo "</a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "          <li><a href=\"";
                echo ($context["contact"] ?? null);
                echo "\">";
                echo ($context["text_contact"] ?? null);
                echo "</a></li>
        </ul>
      </div>
      ";
            }
            // line 68
            echo "      <div class=\"footer-column col-xs-6 col-sm-3 eq_height\">
        <h5>";
            // line 69
            echo ($context["text_extra"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 71
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 72
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 73
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 74
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 75
            echo ($context["sitemap"] ?? null);
            echo "\">";
            echo ($context["text_sitemap"] ?? null);
            echo "</a></li>
        </ul>
      </div>
      <div class=\"footer-column col-xs-6 col-sm-3 eq_height\">
        <h5>";
            // line 79
            echo ($context["text_account"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
            // line 81
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 82
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 83
            echo ($context["return"] ?? null);
            echo "\">";
            echo ($context["text_return"] ?? null);
            echo "</a></li>
          <li class=\"is_wishlist\"><a href=\"";
            // line 84
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 85
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>
        </ul>
      </div>
 ";
        }
        // line 89
        echo "       <div class=\"footer-column col-xs-6 col-sm-3 eq_height\">
             <div class=\"footer-custom-wrapper\">
            ";
        // line 91
        if ((isset($context["footer_block_title"]) || array_key_exists("footer_block_title", $context))) {
            // line 92
            echo "            <h5>";
            echo ($context["footer_block_title"] ?? null);
            echo "</h5>
            ";
        }
        // line 94
        echo "            ";
        if ((($context["footer_block_2"] ?? null) && (($context["footer_block_2"] ?? null) != "<p><br></p>"))) {
            // line 95
            echo "            <div class=\"custom_block\">";
            echo ($context["footer_block_2"] ?? null);
            echo "</div>
            ";
        }
        // line 97
        echo "            ";
        if ((isset($context["footer_infoline_1"]) || array_key_exists("footer_infoline_1", $context))) {
            // line 98
            echo "            <p class=\"infoline\">";
            echo ($context["footer_infoline_1"] ?? null);
            echo "</p>
            ";
        }
        // line 100
        echo "            ";
        if ((isset($context["footer_infoline_2"]) || array_key_exists("footer_infoline_2", $context))) {
            // line 101
            echo "            <p class=\"infoline\">";
            echo ($context["footer_infoline_2"] ?? null);
            echo "</p>
            ";
        }
        // line 103
        echo "            ";
        if ((isset($context["footer_infoline_3"]) || array_key_exists("footer_infoline_3", $context))) {
            // line 104
            echo "            <p class=\"infoline\">";
            echo ($context["footer_infoline_3"] ?? null);
            echo "</p>
            ";
        }
        // line 106
        echo "            ";
        if (($context["payment_img"] ?? null)) {
            // line 107
            echo "            <img class=\"payment_img\" src=\"";
            echo ($context["payment_img"] ?? null);
            echo "\" alt=\"\" />
            ";
        }
        // line 109
        echo "            </div>
      </div>
</div><!-- .row ends -->
</div><!-- .col-md-8 ends -->

</div><!-- .row ends -->
<div class=\"col-xs-12 text-center\" style=\"margin-top:0px;display:block\">
 <a href=\"https://www.corvuspay.com/\" title=\"CorvusPay - internet Payment Gateway\" target=\"_blank\"><img src=\"image/CorvusPAYw.svg\" style=\"max-width:180px\" alt=\"Corvus Payment\"></a>

  </div> 

<div class=\"col-xs-12 text-center\" style=\"margin-top:15px;margin-bottom:15px\">
 <a href=\"http://www.visa.com.hr/\" target=\"_blank\"><img style=\"width: 55px;margin-right:3px\" src=\"image/catalog/credit-cards/visa.svg\"></a>
 <a href=\"https://www.mastercard.hr/hr-hr/consumers/find-card-products/debit-cards/maestro-debit.html\" target=\"_blank\"><img style=\"width: 55px;;margin-right:3px\" src=\"image/catalog/credit-cards/maestro.svg\"></a>
 <a href=\"http://www.mastercard.com/\" target=\"_blank\"><img style=\"width: 55px;;margin-right:3px\" src=\"image/catalog/credit-cards/mastercard.svg\"></a>
 <a href=\"https://www.diners.com.hr/Pogodnosti-i-usluge/MasterCard-SecureCode.html?Ym5cMzQsY2FyZFR5cGVcMSxwXDc3\" target=\"_blank\"><img style=\"width: 55px;;margin-right:3px\" src=\"image/catalog/credit-cards/diners.svg\"></a>

</div>
<div class=\"clearfix\"></div>
";
        // line 128
        if (($context["basel_copyright"] ?? null)) {
            // line 129
            echo "<div class=\"footer-copyright\">";
            echo ($context["basel_copyright"] ?? null);
            echo "</div>
";
        }
        // line 131
        echo "</div>
</div>
<link  href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/basel/js/lightgallery/css/lightgallery.css\" rel=\"stylesheet\" />
<script src=\"catalog/view/theme/basel/js/jquery.matchHeight.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/countdown.js\"></script>
<script src=\"catalog/view/theme/basel/js/live_search.js\"></script>
<script src=\"catalog/view/theme/basel/js/featherlight.js\"></script>
";
        // line 139
        if (($context["view_popup"] ?? null)) {
            // line 140
            echo "<!-- Popup -->
<script>
\$(document).ready(function() {
if (\$(window).width() > ";
            // line 143
            echo ($context["popup_width_limit"] ?? null);
            echo ") {
setTimeout(function() {
\$.featherlight({ajax: 'index.php?route=extension/basel/basel_features/basel_popup', variant:'popup-wrapper'});
}, ";
            // line 146
            echo ($context["popup_delay"] ?? null);
            echo ");
}
});
</script>
";
        }
        // line 151
        if (($context["sticky_columns"] ?? null)) {
            // line 152
            echo "<!-- Sticky columns -->
<script>
if (\$(window).width() > 767) {
\$('#column-left, #column-right').theiaStickySidebar({containerSelector:\$(this).closest('.row'),additionalMarginTop:";
            // line 155
            echo ($context["sticky_columns_offset"] ?? null);
            echo "});
}
</script>
";
        }
        // line 159
        if (($context["view_cookie_bar"] ?? null)) {
            // line 160
            echo "<!-- Cookie bar -->
<div class=\"basel_cookie_bar\">
<div class=\"table\">
<div class=\"table-cell w100\">";
            // line 163
            echo ($context["basel_cookie_info"] ?? null);
            echo "</div>
<div class=\"table-cell button-cell\">
<a class=\"btn btn-tiny btn-light-outline\" onclick=\"\$(this).parent().parent().parent().fadeOut(400);\">";
            // line 165
            echo ($context["basel_cookie_btn_close"] ?? null);
            echo "</a>
";
            // line 166
            if ((isset($context["href_more_info"]) || array_key_exists("href_more_info", $context))) {
                // line 167
                echo "<a class=\"more-info anim-underline light\" href=\"";
                echo ($context["href_more_info"] ?? null);
                echo "\">";
                echo ($context["basel_cookie_btn_more_info"] ?? null);
                echo "</a>
";
            }
            // line 169
            echo "</div>
</div>
</div>
";
        }
        // line 173
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
BASEL VERSION ";
        // line 176
        echo ($context["basel_version"] ?? null);
        echo " - OPENCART VERSION 3 (";
        echo ($context["VERSION"] ?? null);
        echo ") 
//-->
</div><!-- .outer-container ends -->
<a class=\"scroll-to-top primary-bg-color hidden-sm hidden-xs\" onclick=\"\$('html, body').animate({scrollTop:0});\"><i class=\"icon-arrow-right\"></i></a>
<div id=\"featherlight-holder\"></div>
";
        // line 181
        echo ($context["mailchimp_integration"] ?? null);
        echo "
</body></html>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 181,  439 => 176,  434 => 173,  428 => 169,  420 => 167,  418 => 166,  414 => 165,  409 => 163,  404 => 160,  402 => 159,  395 => 155,  390 => 152,  388 => 151,  380 => 146,  374 => 143,  369 => 140,  367 => 139,  357 => 131,  351 => 129,  349 => 128,  328 => 109,  322 => 107,  319 => 106,  313 => 104,  310 => 103,  304 => 101,  301 => 100,  295 => 98,  292 => 97,  286 => 95,  283 => 94,  277 => 92,  275 => 91,  271 => 89,  262 => 85,  256 => 84,  250 => 83,  244 => 82,  238 => 81,  233 => 79,  224 => 75,  218 => 74,  212 => 73,  206 => 72,  200 => 71,  195 => 69,  192 => 68,  182 => 64,  171 => 62,  167 => 61,  162 => 59,  159 => 58,  156 => 57,  153 => 56,  131 => 39,  127 => 37,  116 => 35,  112 => 34,  109 => 33,  107 => 32,  103 => 31,  97 => 27,  90 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  71 => 18,  69 => 17,  64 => 14,  58 => 11,  55 => 10,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/footer.twig", "");
    }
}
