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

/* head.html.twig */
class __TwigTemplate_fb5de1df4140cda53b212e12180d262d8c0bcf94250b48cc3ae15cb434a28b84 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" style=\"height:100%;\">
  <head>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\" />
    <meta charset=\"utf-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0' />
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 8
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</title>
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" style=\"height:100%;\">
  <head>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\" />
    <meta charset=\"utf-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0' />
{% for link in links %}
    <link rel=\"stylesheet\" href=\"{{ link }}\">
{% endfor %}
    <title>{{ profile.title }}</title>
</head>
<body>", "head.html.twig", "/var/www/html/carlos-sweb-cv/templates/head.html.twig");
    }
}
