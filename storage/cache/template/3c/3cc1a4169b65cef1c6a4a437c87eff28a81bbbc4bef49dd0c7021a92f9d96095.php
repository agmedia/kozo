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

/* basel/template/common/header.twig */
class __TwigTemplate_4b642430790ba59ef05174dd1f152bf9af2c43f528ee4e9153f7b8cf03f9eae3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["alternate"] ?? null)) {
            echo ($context["alternate"] ?? null);
        }
        echo " \t
\t\t\t

";
        // line 17
        if (($context["canonical_link"] ?? null)) {
            echo (("<link href=\"" . ($context["canonical_link"] ?? null)) . "\" rel=\"canonical\" />");
        }
        echo " 
";
        // line 18
        if (($context["robots"] ?? null)) {
            echo ($context["robots"] ?? null);
        }
        echo " 
\t\t\t
";
        // line 20
        if (($context["description"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />";
        }
        // line 21
        if (($context["keywords"] ?? null)) {
            echo "<meta name=\"keywords\" content= \"";
            echo ($context["keywords"] ?? null);
            echo "\" />";
        }
        // line 22
        echo "<!-- Load essential resources -->
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/slick.min.js\"></script>
<script src=\"catalog/view/theme/basel/js/basel_common.js\"></script>
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
<link rel=\"manifest\" href=\"/site.webmanifest\">
<meta name=\"msapplication-TileColor\" content=\"#000000\">
<meta name=\"theme-color\" content=\"#ffffff\">
<meta name=\"google-site-verification\" content=\"c9LFDn8M2cdfdmxt40-zuVrzPyE_UGsQYMZhwT6gcfA\" />
<!-- Main stylesheet -->
<link href=\"catalog/view/theme/basel/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<!-- Mandatory Theme Settings CSS -->
<style id=\"basel-mandatory-css\">";
        // line 38
        echo ($context["basel_mandatory_css"] ?? null);
        echo "</style>
<!-- Plugin Stylesheet(s) -->
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<link href=\"https://fonts.googleapis.com/css2?family=GFS+Didot&family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap\" rel=\"stylesheet\"> 
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=598321b191494f0011899e0f&product=inline-share-buttons' async='async'></script>
";
        // line 45
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 46
            echo "<link href=\"catalog/view/theme/basel/stylesheet/rtl.css\" rel=\"stylesheet\">
";
        }
        // line 48
        echo "<!-- Pluing scripts(s) -->
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<!-- Page specific meta information -->
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 54) == "image")) {
                // line 55
                echo "<meta property=\"og:image\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 55);
                echo "\" />
";
            } else {
                // line 57
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 57);
                echo "\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 57);
                echo "\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "<!-- Analytic tools -->
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 62
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        if (($context["basel_styles_status"] ?? null)) {
            // line 65
            echo "<!-- Custom Color Scheme -->
<style id=\"basel-color-scheme\">";
            // line 66
            echo ($context["basel_styles_cache"] ?? null);
            echo ";</style>
";
        }
        // line 68
        if (($context["basel_typo_status"] ?? null)) {
            // line 69
            echo "<!-- Custom Fonts -->
<style id=\"basel-fonts\">";
            // line 70
            echo ($context["basel_fonts_cache"] ?? null);
            echo "</style>
";
        }
        // line 72
        if (($context["basel_custom_css_status"] ?? null)) {
            // line 73
            echo "<!-- Custom CSS -->
<style id=\"basel-custom-css\">
";
            // line 75
            echo ($context["basel_custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 78
        if (($context["basel_custom_js_status"] ?? null)) {
            // line 79
            echo "<!-- Custom Javascript -->
<script>
";
            // line 81
            echo ($context["basel_custom_js"] ?? null);
            echo "
</script>
";
        }
        // line 84
        echo "

<style>
\t\t\t.product-thumb .image{
\t\t\t\tposition: relative;
\t\t\t}
\t\t\t.text-variant {
\t\t\t\tposition: absolute;
\t\t\t\tpadding: 5px 15px;
\t\t\t\tbottom: 0;
\t\t\t\tright: 0;
\t\t\t\tbackground: #000;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-transform: uppercase;
\t\t\t\tz-index: 1;
\t\t\t}
\t\t\t.swatch-variant {
\t\t\t    display: inline-block;
\t\t\t\tlist-style: none;
\t\t\t\tpadding: 0;
\t\t\t\tmargin-top: 5px;
\t\t\t\tmargin-bottom: -5px;
\t\t\t}
\t\t\t.swatch-variant li {
\t\t\t\tfloat: left;

\t\t\t\t
\t\t\t\t
\t\t\t}
\t\t\t.swatch-variant li img{
\t\t\t\tfloat: left;
\t\t\t\tmax-width: 15px;
\t\t\t\tmax-height: 15px;
\t\t\t\tborder: 1px solid #ddd;
\t\t\t\tmargin: 2px;
\t\t\t\tborder-radius: 50%;
\t\t\t}


\t\t\t.swatch-variant li a{
\t\t\t\tdisplay: inline-block;
\t\t\t}
\t\t\t.swatch-variant li img{
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t</style>
";
        // line 130
        echo ($context["fbecommevnt_trackcode"] ?? null);
        echo "

\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/jquery.cluetip.css\" type=\"text/css\" />
\t\t\t<script src=\"catalog/view/javascript/jquery.cluetip.js\" type=\"text/javascript\"></script>
\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\$('a.title').cluetip({splitTitle: '|'});
\t\t\t\t  \$('ol.rounded a:eq(0)').cluetip({splitTitle: '|', dropShadow: false, cluetipClass: 'rounded', showtitle: false});
\t\t\t\t  \$('ol.rounded a:eq(1)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'mouse'});
\t\t\t\t  \$('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'bottomTop', topOffset: 70});
\t\t\t\t  \$('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false, arrows: true});
\t\t\t\t  \$('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});  
\t\t\t\t});
\t\t\t</script>
\t\t\t

\t\t\t\t";
        // line 147
        if (($context["socialseo"] ?? null)) {
            echo ($context["socialseo"] ?? null);
        }
        echo " 
\t\t\t\t
\t\t\t\t";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["richsnippets"] ?? null), "store", [], "any", false, false, false, 149)) {
            echo " 
<script type=\"application/ld+json\">
\t\t\t\t{ \"@context\" : \"http://schema.org\",
\t\t\t\t  \"@type\" : \"Organization\",
\t\t\t\t  \"name\" : \"";
            // line 153
            echo ($context["name"] ?? null);
            echo "\",
\t\t\t\t  \"url\" : \"";
            // line 154
            echo ($context["home"] ?? null);
            echo "\",
\t\t\t\t  \"logo\" : \"";
            // line 155
            echo ($context["logo"] ?? null);
            echo "\",
\t\t\t\t  \"contactPoint\" : [
\t\t\t\t\t{ \"@type\" : \"ContactPoint\",
\t\t\t\t\t  \"telephone\" : \"";
            // line 158
            echo ($context["telephone"] ?? null);
            echo "\",
\t\t\t\t\t  \"contactType\" : \"customer service\"
\t\t\t\t\t} ] }
\t\t\t\t</script>
\t\t\t\t";
        }
        // line 162
        echo " \t\t\t\t
\t\t\t
</head>
<body class=\"";
        // line 165
        echo ($context["class"] ?? null);
        echo ($context["basel_body_class"] ?? null);
        echo "\">
";
        // line 166
        $this->loadTemplate("basel/template/common/mobile-nav.twig", "basel/template/common/header.twig", 166)->display($context);
        // line 167
        echo "<div class=\"outer-container main-wrapper\">
";
        // line 168
        if (($context["notification_status"] ?? null)) {
            // line 169
            echo "<div class=\"top_notificaiton\">
  <div class=\"container";
            // line 170
            if (($context["top_promo_close"] ?? null)) {
                echo " has-close";
            }
            echo " ";
            echo ($context["top_promo_width"] ?? null);
            echo " ";
            echo ($context["top_promo_align"] ?? null);
            echo "\">
    <div class=\"table\">
    <div class=\"table-cell w100\"><div class=\"ellipsis-wrap\">";
            // line 172
            echo ($context["top_promo_text"] ?? null);
            echo "</div></div>
    ";
            // line 173
            if (($context["top_promo_close"] ?? null)) {
                // line 174
                echo "    <div class=\"table-cell text-right\">
    <a onClick=\"addCookie('basel_top_promo', 1, 30);\$(this).closest('.top_notificaiton').slideUp();\" class=\"top_promo_close\">&times;</a>
    </div>
    ";
            }
            // line 178
            echo "    </div>
  </div>
</div>
";
        }
        // line 182
        $this->loadTemplate((("basel/template/common/headers/" . ($context["basel_header"] ?? null)) . ".twig"), "basel/template/common/header.twig", 182)->display($context);
        // line 183
        echo "<!-- breadcrumb -->
<div class=\"breadcrumb-holder\">
<div class=\"container\">
<span id=\"title-holder\">&nbsp;</span>
<div class=\"links-holder\">
<a class=\"basel-back-btn\" onClick=\"history.go(-1); return false;\"><i></i></a><span>&nbsp;</span>
</div>
</div>
</div>
<div class=\"container\">
";
        // line 193
        echo ($context["position_top"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 193,  413 => 183,  411 => 182,  405 => 178,  399 => 174,  397 => 173,  393 => 172,  382 => 170,  379 => 169,  377 => 168,  374 => 167,  372 => 166,  367 => 165,  362 => 162,  354 => 158,  348 => 155,  344 => 154,  340 => 153,  333 => 149,  326 => 147,  306 => 130,  258 => 84,  252 => 81,  248 => 79,  246 => 78,  240 => 75,  236 => 73,  234 => 72,  229 => 70,  226 => 69,  224 => 68,  219 => 66,  216 => 65,  214 => 64,  206 => 62,  202 => 61,  199 => 60,  187 => 57,  181 => 55,  179 => 54,  175 => 53,  172 => 52,  163 => 50,  159 => 49,  156 => 48,  152 => 46,  150 => 45,  146 => 43,  133 => 41,  129 => 40,  124 => 38,  106 => 22,  100 => 21,  94 => 20,  87 => 18,  81 => 17,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/header.twig", "");
    }
}
