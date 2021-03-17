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

/* basel/template/common/basel_search.twig */
class __TwigTemplate_ca3805b1962f13b7a438df07b5c6b86fd3d0e46e04eea7204655915be897b3ce extends \Twig\Template
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
        echo "<div class=\"search-field\">
<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["basel_text_search"] ?? null);
        echo "\" class=\"form-control main-search-input\" />
<span class=\"btn btn-contrast do-search main\">Traži</span>
</div>
<script>
\$(document).ready(function() {
\$('.search-holder-mobile input[name=\\'search-mobile\\']').attr(\"placeholder\", \"";
        // line 7
        echo ($context["basel_text_search"] ?? null);
        echo "\").attr(\"value\", \"";
        echo ($context["search"] ?? null);
        echo "\");
});
</script>";
    }

    public function getTemplateName()
    {
        return "basel/template/common/basel_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/common/basel_search.twig", "");
    }
}
