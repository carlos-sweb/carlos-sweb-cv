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
class __TwigTemplate_c3f21d4aee11c5f78525f16b95b127fdc818128729bf5829f68865917b823553 extends Template
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
\t
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn bluegray600\" style=\"padding-bottom:56px\" >
\t\t";
        // line 4
        $this->loadTemplate("parts/slide-left.html.twig", "content.html.twig", 4)->display($context);
        echo "\t\t
\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t";
        // line 8
        $this->loadTemplate("parts/slide-right.html.twig", "content.html.twig", 8)->display($context);
        echo "\t
\t</div>
\t
</div>";
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
        return array (  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"height:100%!important;min-height:100%\" >
\t
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn bluegray600\" style=\"padding-bottom:56px\" >
\t\t{% include('parts/slide-left.html.twig') %}\t\t
\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t{% include('parts/slide-right.html.twig') %}\t
\t</div>
\t
</div>", "content.html.twig", "/var/www/html/carlos-sweb-cv/templates/content.html.twig");
    }
}
