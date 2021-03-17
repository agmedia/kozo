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

/* basel/template/extension/captcha/google.twig */
class __TwigTemplate_c5d7c310002f4b3b70fdfc789d75e691ce57ff034734f7dcd84e1d5ef007e4cb extends \Twig\Template
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
        echo "<script src=\"//www.google.com/recaptcha/api.js\"></script>

";
        // line 3
        if ((twig_slice($this->env, ($context["route"] ?? null), 0, 9) == "checkout/")) {
            // line 4
            echo "
<fieldset>
<legend>";
            // line 6
            echo ($context["text_captcha"] ?? null);
            echo "</legend>
<div class=\"form-group required\">
<label class=\"control-label\" for=\"input-payment-captcha\">";
            // line 8
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
<div id=\"input-payment-captcha\" class=\"g-recaptcha\" data-sitekey=\"";
            // line 9
            echo ($context["site_key"] ?? null);
            echo "\"></div>
";
            // line 10
            if (($context["error_captcha"] ?? null)) {
                // line 11
                echo "<div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
";
            }
            // line 13
            echo "</div>
</fieldset>

";
        } elseif (((twig_slice($this->env,         // line 16
($context["route"] ?? null), 0, 12) == "information/") || (twig_slice($this->env, ($context["route"] ?? null), 0, 8) == "product/"))) {
            // line 17
            echo "
<div class=\"required\">
<label class=\"control-label\">";
            // line 19
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
<div class=\"g-recaptcha margin-b10\" data-sitekey=\"";
            // line 20
            echo ($context["site_key"] ?? null);
            echo "\"></div>
";
            // line 21
            if (($context["error_captcha"] ?? null)) {
                // line 22
                echo "<div class=\"text-danger margin-b10\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
";
            }
            // line 24
            echo "</div>

";
        } else {
            // line 27
            echo "
<fieldset>
<legend>";
            // line 29
            echo ($context["text_captcha"] ?? null);
            echo "</legend>
<div class=\"form-group required\">
<label class=\"col-sm-2 control-label\">";
            // line 31
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
<div class=\"col-sm-10\">
<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 33
            echo ($context["site_key"] ?? null);
            echo "\"></div>
";
            // line 34
            if (($context["error_captcha"] ?? null)) {
                // line 35
                echo "<div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
";
            }
            // line 37
            echo "</div>
</div>
</fieldset>

";
        }
    }

    public function getTemplateName()
    {
        return "basel/template/extension/captcha/google.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  120 => 35,  118 => 34,  114 => 33,  109 => 31,  104 => 29,  100 => 27,  95 => 24,  89 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 17,  73 => 16,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  52 => 8,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/captcha/google.twig", "");
    }
}
