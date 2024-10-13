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
class __TwigTemplate_b99ceabf726672613d67327d91e3e3da extends Template
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
        // line 4
        yield from         $this->loadTemplate("parts/slide-left.html.twig", "content.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t";
        // line 8
        yield from         $this->loadTemplate("parts/slide-right.html.twig", "content.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t</div>

</div>
";
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
        return array (  56 => 9,  54 => 8,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\" style=\"height:100%!important;min-height:100%\" >

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-3 center-xs mdc-elevation--z2 animated fadeIn\" style=\"padding-bottom:56px;  background-color: #ECEFF1;\" >
\t\t{% include('parts/slide-left.html.twig') %}
\t</div>

\t<div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-9 start-xs animated fadeIn\" style=\"background-color:#fafafa\">
\t\t{% include('parts/slide-right.html.twig') %}
\t</div>

</div>
", "content.html.twig", "/home/sweb/github-project/carlos-sweb-cv/templates/content.html.twig");
    }
}
