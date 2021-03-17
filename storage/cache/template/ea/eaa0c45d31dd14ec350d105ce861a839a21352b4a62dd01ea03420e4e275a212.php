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

/* extension/basel/panel_tabs/status.twig */
class __TwigTemplate_5d5f041359b19a7638403d07b7f903b0226c608ada502ee4309f8788764f43bc extends \Twig\Template
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
        echo "<legend>Status</legend>
<div class=\"form-group\">
<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Main setting to Enable/Disable Basel theme.\">Theme Status</span></label>
    <div class=\"col-sm-10 toggle-btn\">
    <label><input type=\"radio\" name=\"settings[theme_default][theme_default_directory]\" value=\"default\" ";
        // line 5
        if ((($context["theme_default_directory"] ?? null) == "default")) {
            echo "checked=\"checked\"";
        }
        echo " /><span>Disabled</span></label>
    <label><input type=\"radio\" name=\"settings[theme_default][theme_default_directory]\" value=\"basel\" ";
        // line 6
        if ((($context["theme_default_directory"] ?? null) == "basel")) {
            echo "checked=\"checked\"";
        }
        echo " /><span>Enabled</span></label>
    </div>                   
<input type=\"hidden\" name=\"settings[config][config_theme]\" value=\"default\" />
<input type=\"hidden\" name=\"settings[basel_version][basel_theme_version]\" value=\"1.3.1.0\" />
</div>";
    }

    public function getTemplateName()
    {
        return "extension/basel/panel_tabs/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/basel/panel_tabs/status.twig", "/Applications/MAMP/htdocs/kozo/upload/admin/view/template/extension/basel/panel_tabs/status.twig");
    }
}
