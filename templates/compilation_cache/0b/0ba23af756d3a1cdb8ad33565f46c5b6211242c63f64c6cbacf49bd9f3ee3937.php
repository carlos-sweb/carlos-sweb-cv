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

/* head.html */
class __TwigTemplate_81b04775c6cde9c15a49644ee2525f6f4870be57c172ad5fcadff08c905f9496 extends Template
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
    <link rel=\"stylesheet\" href=\"node_modules/normalize.css/normalize.css\">
    <link rel=\"stylesheet\" href=\"node_modules/animate.css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/flexboxgrid/dist/flexboxgrid.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre-exp.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre-icons.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/@material/elevation/dist/mdc.elevation.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/typeface-ubuntu/index.css\">
    <link rel=\"stylesheet\" href=\"css/css-utility/css-dist/cp-color.min.css\">
    <link rel=\"stylesheet\" href=\"css/css-utility/css-dist/text-align.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/material-icons-font/material-icons-font.css\">
    <title>Carlos Illesca - Developer</title>
    <link rel=\"stylesheet\" href=\"css/style-cv.css\">
  </head>
  <body>";
    }

    public function getTemplateName()
    {
        return "head.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" style=\"height:100%;\">
  <head>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.png\" />
    <meta charset=\"utf-8\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no,maximum-scale=1.0, user-scalable=0' />      
    <link rel=\"stylesheet\" href=\"node_modules/normalize.css/normalize.css\">
    <link rel=\"stylesheet\" href=\"node_modules/animate.css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/flexboxgrid/dist/flexboxgrid.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre-exp.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/spectre.css/dist/spectre-icons.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/@material/elevation/dist/mdc.elevation.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/typeface-ubuntu/index.css\">
    <link rel=\"stylesheet\" href=\"css/css-utility/css-dist/cp-color.min.css\">
    <link rel=\"stylesheet\" href=\"css/css-utility/css-dist/text-align.min.css\">
    <link rel=\"stylesheet\" href=\"node_modules/material-icons-font/material-icons-font.css\">
    <title>Carlos Illesca - Developer</title>
    <link rel=\"stylesheet\" href=\"css/style-cv.css\">
  </head>
  <body>", "head.html", "/var/www/html/carlos-sweb-cv/templates/head.html");
    }
}
