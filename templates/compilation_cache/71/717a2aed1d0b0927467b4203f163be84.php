<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* content.html.twig */
class __TwigTemplate_7fa0604bf68d0adbc52957daa153622c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"row\" style=\"height:100%!important;min-height:100%\" >
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn\" style=\"padding-bottom:56px;  background-color: #ECEFF1;\" >
\t\t";
        // line 3
        yield from         $this->loadTemplate("parts/slide-left.html.twig", "content.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa;padding-bottom:150px;\" >
\t\t";
        // line 6
        yield from         $this->loadTemplate("parts/slide-right.html.twig", "content.html.twig", 6)->unwrap()->yield($context);
        yield "\t\t\t
\t</div>\t
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "content.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  52 => 6,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\" style=\"height:100%!important;min-height:100%\" >
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn\" style=\"padding-bottom:56px;  background-color: #ECEFF1;\" >
\t\t{% include('parts/slide-left.html.twig') %}
\t</div>
\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa;padding-bottom:150px;\" >
\t\t{% include('parts/slide-right.html.twig') %}\t\t\t
\t</div>\t
</div>", "content.html.twig", "/home/sweb/github-project/carlos-sweb-cv/templates/content.html.twig");
    }
}
