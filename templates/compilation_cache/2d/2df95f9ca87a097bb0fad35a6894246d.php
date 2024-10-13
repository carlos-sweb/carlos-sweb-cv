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

/* head.html.twig */
class __TwigTemplate_3a179fbc51d57848892ea27ef6f6d752 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\" style=\"height:100%;\">
  <head>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\" />
    <meta charset=\"utf-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0' />
    <meta name=\"description\" content=\"Carlos Illesca Monsalve's Curriculum Vitae describe all work I had as developer and other\"  >
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 9
            yield "    <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["link"], "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "    <title>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</title>
</head>
<body>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "head.html.twig";
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
        return array (  64 => 11,  55 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" style=\"height:100%;\">
  <head>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\" />
    <meta charset=\"utf-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0' />
    <meta name=\"description\" content=\"Carlos Illesca Monsalve's Curriculum Vitae describe all work I had as developer and other\"  >
    {% for link in links %}
    <link rel=\"stylesheet\" href=\"{{ link }}\">
    {% endfor %}
    <title>{{ profile.title }}</title>
</head>
<body>
", "head.html.twig", "/home/sweb/github-project/carlos-sweb-cv/templates/head.html.twig");
    }
}
