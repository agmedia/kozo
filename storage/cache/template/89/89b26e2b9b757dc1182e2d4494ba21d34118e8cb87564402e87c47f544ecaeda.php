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

/* basel/template/extension/module/content_widgets/unsubscribe_btn.twig */
class __TwigTemplate_83a976072335d0c54484e449341e64a45cea8018891c6570dda474937e1e039e extends \Twig\Template
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
        echo "<span class=\"unsubscribe\"><a onclick=\"unsubscribe(";
        echo ($context["module"] ?? null);
        echo ");\">";
        echo ($context["basel_unsubscribe_btn"] ?? null);
        echo "</a></span>";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/module/content_widgets/unsubscribe_btn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/module/content_widgets/unsubscribe_btn.twig", "");
    }
}
