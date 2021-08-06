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

/* content.html.twig */
class __TwigTemplate_9115c2bea96fc633c326e951176d41c70323192d784258a03700fcf3f5fcfdeb extends Template
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
        echo "<div class=\"row\" style=\"height:100%!important;min-height:100%\" >

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn bluegray600\" style=\"padding-bottom:56px\" >
\t\t";
        // line 4
        $this->loadTemplate("parts/slide-left.html.twig", "content.html.twig", 4)->display($context);
        // line 5
        echo "\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t";
        // line 8
        $this->loadTemplate("parts/slide-right.html.twig", "content.html.twig", 8)->display($context);
        // line 9
        echo "\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  49 => 8,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"height:100%!important;min-height:100%\" >

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn bluegray600\" style=\"padding-bottom:56px\" >
\t\t{% include('parts/slide-left.html.twig') %}
\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t{% include('parts/slide-right.html.twig') %}
\t</div>

</div>
", "content.html.twig", "/home/carlos-sweb/Escritorio/carlos-sweb-cv/templates/content.html.twig");
    }
}
