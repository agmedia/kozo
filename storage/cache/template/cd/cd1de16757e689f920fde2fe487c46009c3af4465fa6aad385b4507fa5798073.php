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

/* basel/template/extension/module/content_widgets/subscribe_field.twig */
class __TwigTemplate_7083279fa92d9a82684dc8991f300e049d3e4b9282bc62081e5f777363be957f extends \Twig\Template
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
        echo "<div class=\"newsletter-wrap\">
<div class=\"input-group sign-up-field\">
<span class=\"sign-up-respond\" id=\"subscribe-respond";
        // line 3
        echo ($context["module"] ?? null);
        echo "\"></span>
<input type=\"text\" id=\"subscribe-module";
        // line 4
        echo ($context["module"] ?? null);
        echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
        echo ($context["basel_subscribe_email"] ?? null);
        echo "\" />
<span class=\"input-group-btn\">
<a class=\"btn btn-neutral nowrap\" onclick=\"subscribe(";
        // line 6
        echo ($context["module"] ?? null);
        echo ");\"><span class=\"nowrap\">";
        echo ($context["basel_subscribe_btn"] ?? null);
        echo "</span></a>
</span>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/content_widgets/subscribe_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/content_widgets/subscribe_field.twig", "");
    }
}
