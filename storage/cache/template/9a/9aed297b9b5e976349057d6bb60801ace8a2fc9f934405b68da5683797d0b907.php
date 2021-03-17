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

/* extension/dashboard/map_info.twig */
class __TwigTemplate_b80660a5a1cb6fe0f086a3e25eef79c32565f5c4ec3ab680afc68247bdfe6ebe extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.js\"></script> 
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js\"></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/dashboard/map/map&user_token=";
        // line 15
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tdata = [];
\t\t\t\t\t\t
\t\t\tfor (i in json) {
\t\t\t\tdata[i] = json[i]['total'];
\t\t\t}
\t\t\t\t\t
\t\t\t\$('#vmap').vectorMap({
\t\t\t\tmap: 'world_en',
\t\t\t\t hoverColor: '#333333',
      selectedColor: '#999999',
      scaleColors: ['#666666', '#333333'],
\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\tborderColor: '#FFFFFF',
\t\t\t\tcolor: '#000000',
\t\t\t\thoverOpacity: 0.7,
\t\t\t\tselectedColor: '#F9D00B',
\t\t\t\tenableZoom: true,
\t\t\t\tshowTooltip: true,
\t\t\t\tvalues: data,
\t\t\t\tnormalizeFunction: 'polynomial',
\t\t\t\tonLabelShow: function(event, label, code) {
\t\t\t\t\tif (json[code]) {
\t\t\t\t\t\tlabel.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 40
        echo ($context["text_order"] ?? null);
        echo " ' + json[code]['total'] + '<br />' + '";
        echo ($context["text_sale"] ?? null);
        echo " ' + json[code]['amount']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});\t\t\t
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});\t\t\t
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/map_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  56 => 15,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/dashboard/map_info.twig", "");
    }
}
