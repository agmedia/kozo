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

/* basel/template/extension/quickcheckout/login.twig */
class __TwigTemplate_af5cf684926b62fd49af0951d82599d772019933901154af16790ac154d3e9b0 extends \Twig\Template
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
        echo "<div class=\"totals-slip\">
<div id=\"login\">

  <div class=\"col-sm-6 text-left\">
\t<label class=\"control-label\" for=\"input-login-email\">";
        // line 5
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t  <input type=\"text\" name=\"email\" value=\"\" class=\"form-control\" id=\"input-login-email\" />
  </div>
  <div class=\"col-sm-6 text-left\">
\t<label class=\"control-label\" for=\"input-login-password\">";
        // line 9
        echo ($context["entry_password"] ?? null);
        echo " <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\" title=\"";
        echo ($context["text_forgotten"] ?? null);
        echo "\" data-toggle=\"tooltip\"><i class=\"fa fa-question-circle\"></i></a></label>
\t  <div class=\"input-group\">
\t\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
\t\t<span class=\"input-group-btn\">
\t\t  <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 13
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t</span>
\t  </div>
  </div>
</div>
</div>

<script type=\"text/javascript\"><!--
\$('#login input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-login').click();
\t}
});
//--></script>   ";
    }

    public function getTemplateName()
    {
        return "basel/template/extension/quickcheckout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basel/template/extension/quickcheckout/login.twig", "");
    }
}
