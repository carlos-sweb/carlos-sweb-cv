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

/* parts/es/slide-left.html.twig */
class __TwigTemplate_8340579dddd25ba0fafe3ed0813145879edf65ff60d62d383ca0f847745885ec extends Template
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
        echo "<div class=\"row center-xs middle-xs\">
    <div class=\"box\" >
      <figure class=\"avatar avatar-cv bluegray600\">
    <img draggable=\"false\" ondragstart=\"return false;\" src=\"carlos-sweb-profile.jpeg\" class=\"mdc-elevation--z1\" >
    </figure>
    </div>
</div>

 <div class=\"row\">
              <div class=\"col-xs-12 \">
                 <h3>Sobre mí</h3>
              </div>
              <div class=\"col-xs-12 \">
                <p class=\"taj\" style=\"padding-left:25px;padding-right:25px;\" >
                  <!--Here my description-->
                </p>
              </div>
          </div>
          <!--close seccion title about-->
          <!--open seccion title contact-->
          <div class=\"row\" style=\"padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                  <h3>Datos de Contacto</h3>
              </div>
          </div>
          <!--close seccion title contact-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">phone</i>
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "phone", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">email</i>
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\" style=\"padding-top:20px;padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                    <h3>Habilidades</h3>
              </div>
          </div>
          <!--close-->
          <!--open-->
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 64
            echo "          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">label</i><!--brightness_1-->
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">";
            // line 72
            echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
            echo "</span>
                  </div>
              </div>
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "parts/es/slide-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 72,  111 => 64,  107 => 63,  91 => 50,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row center-xs middle-xs\">
    <div class=\"box\" >
      <figure class=\"avatar avatar-cv bluegray600\">
    <img draggable=\"false\" ondragstart=\"return false;\" src=\"carlos-sweb-profile.jpeg\" class=\"mdc-elevation--z1\" >
    </figure>
    </div>
</div>

 <div class=\"row\">
              <div class=\"col-xs-12 \">
                 <h3>Sobre mí</h3>
              </div>
              <div class=\"col-xs-12 \">
                <p class=\"taj\" style=\"padding-left:25px;padding-right:25px;\" >
                  <!--Here my description-->
                </p>
              </div>
          </div>
          <!--close seccion title about-->
          <!--open seccion title contact-->
          <div class=\"row\" style=\"padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                  <h3>Datos de Contacto</h3>
              </div>
          </div>
          <!--close seccion title contact-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">phone</i>
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">{{ profile.phone }}</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">email</i>
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">{{ profile.email }}</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\" style=\"padding-top:20px;padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                    <h3>Habilidades</h3>
              </div>
          </div>
          <!--close-->
          <!--open-->
          {% for skill in skills %}
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <i class=\"material-icons\">label</i><!--brightness_1-->
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">{{ skill }}</span>
                  </div>
              </div>
          </div>
      {% endfor %}
", "parts/es/slide-left.html.twig", "/var/www/html/carlos-sweb-cv/templates/parts/es/slide-left.html.twig");
    }
}
