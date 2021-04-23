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

/* home.html.twig */
class __TwigTemplate_2d1e753bdde3b55b649d8a1ae9cec28d43bc848e963c8820c9de5fa24c951c67 extends Template
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
        $this->loadTemplate("head.html.twig", "home.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("content.html.twig", "home.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("footer.html.twig", "home.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('head.html.twig') %}
{% include('content.html.twig') %}
{% include('footer.html.twig') %}", "home.html.twig", "/var/www/html/carlos-sweb-cv/templates/home.html.twig");
    }
}
