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

/* basel/template/information/information.twig */
class __TwigTemplate_eb92032e295a125d30292c3079957609d37e12a21d4862be929d6d5d499e7567 extends \Twig\Template
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
<!-- Glami piXel for KOZO.hr -->
<script>
(function(f, a, s, h, i, o, n) {f['GlamiTrackerObject'] = i; 
    f[i]=f[i]||function(){(f[i].q=f[i].q||[]).push(arguments)};o=a.createElement(s), 
    n=a.getElementsByTagName(s)[0];o.async=1;o.src=h;n.parentNode.insertBefore(o,n) 
})(window, document, 'script', '//www.glami.hr/js/compiled/pt.js', 'glami');
glami('create', '78FEF97D04F20D6F870D45C4534F59BF', 'hr', 'HEADER'); glami('HEADER.track', 'PageView');
</script>
<!-- End Glami piXel -->
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
  <div class=\"row\">";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-md-9 col-sm-8";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    ";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
      <h1 id=\"page-title\">";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 28
        echo ($context["description"] ?? null);
        echo "
      ";
        // line 29
        echo ($context["content_bottom"] ?? null);
        echo "
     </div>
    ";
        // line 31
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 34
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "basel/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  116 => 31,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  70 => 17,  67 => 16,  56 => 14,  52 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/information/information.twig", "");
    }
}
