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

/* parts/slide-left.html.twig */
class __TwigTemplate_c84b6b4a75a3831f4387322c13d18847 extends Template
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
        yield "<div class=\"row center-xs middle-xs\" style=\"padding-top:50px;\">
    <div class=\"box\" >
      <figure class=\"avatar avatar-cv bluegray50\">
    <img alt=\"profile\" draggable=\"false\" ondragstart=\"return false;\" src=\"images/carlos-sweb-profile.jpeg\" >
    </figure>
    </div>
</div>

 <div class=\"row\">
              <div class=\"col-xs-12 \">
                 <h3 class=\"title-left\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_left1", [], "any", false, false, false, 11), "html", null, true);
        yield "</h3>
              </div>
              <div class=\"col-xs-12 \">                
                <p class=\"taj\" style=\"padding-left:25px;padding-right:25px;\" >
                  <!--Here my description-->
                </p>
              </div>
          </div>      
          <div class=\"row\" style=\"padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                  <h3 class=\"title-left\" >";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_left2", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
              </div>
          </div>
          <!--close seccion title contact-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                    <img alt=\"id-telegram\" src=\"images/telegram-svgrepo-com.svg\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">                      
                      <span class=\"text-right-icon\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "telegram_id", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                    <!--<i data-lucide=\"mail\"></i>-->
                    <img alt=\"protonmail\" src=\"images/mail.svg\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\"><a href=\"mailto:";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "</a></span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\" style=\"padding-top:20px;padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                    <h3 class=\"title-left\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_left3", [], "any", false, false, false, 57), "html", null, true);
        yield "</h3>
              </div>
          </div>
          <!--close-->
          <!--open-->
          ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["skills"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 63
            yield "          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <img alt=\"image-skill-";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield " \" src=\"images/devicons/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "icon", [], "any", false, false, false, 66), "html", null, true);
            yield "\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 71), "html", null, true);
            yield "</span>
                  </div>
              </div>
          </div>
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "items", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                yield "            <div class=\"row\" style=\"padding-left:20px;\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                      ";
                // line 79
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 79)) {
                    yield "  
                     <img alt=\"image-skill-";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 80), "html", null, true);
                    yield "\" src=\"images/devicons/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 80), "html", null, true);
                    yield "\" width=\"24px\">
                      ";
                }
                // line 82
                yield "                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 86), "html", null, true);
                yield "</span>
                  </div>
              </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "          <br>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['skill'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/slide-left.html.twig";
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
        return array (  185 => 91,  174 => 86,  168 => 82,  161 => 80,  157 => 79,  152 => 76,  148 => 75,  141 => 71,  131 => 66,  126 => 63,  122 => 62,  114 => 57,  101 => 49,  83 => 34,  67 => 21,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row center-xs middle-xs\" style=\"padding-top:50px;\">
    <div class=\"box\" >
      <figure class=\"avatar avatar-cv bluegray50\">
    <img alt=\"profile\" draggable=\"false\" ondragstart=\"return false;\" src=\"images/carlos-sweb-profile.jpeg\" >
    </figure>
    </div>
</div>

 <div class=\"row\">
              <div class=\"col-xs-12 \">
                 <h3 class=\"title-left\">{{titles.title_left1}}</h3>
              </div>
              <div class=\"col-xs-12 \">                
                <p class=\"taj\" style=\"padding-left:25px;padding-right:25px;\" >
                  <!--Here my description-->
                </p>
              </div>
          </div>      
          <div class=\"row\" style=\"padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                  <h3 class=\"title-left\" >{{ titles.title_left2 }}</h3>
              </div>
          </div>
          <!--close seccion title contact-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                    <img alt=\"id-telegram\" src=\"images/telegram-svgrepo-com.svg\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">                      
                      <span class=\"text-right-icon\">{{ profile.telegram_id }}</span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                    <!--<i data-lucide=\"mail\"></i>-->
                    <img alt=\"protonmail\" src=\"images/mail.svg\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\"><a href=\"mailto:{{ profile.email }}\">{{ profile.email }}</a></span>
                  </div>
              </div>
          </div>
          <!--close-->
          <!--open-->
          <div class=\"row\" style=\"padding-top:20px;padding-bottom:20px;\">
              <div class=\"col-xs-12 \">
                    <h3 class=\"title-left\">{{titles.title_left3}}</h3>
              </div>
          </div>
          <!--close-->
          <!--open-->
          {% for skill in skills %}
          <div class=\"row\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                     <img alt=\"image-skill-{{ skill.name }} \" src=\"images/devicons/{{ skill.icon }}\" width=\"24px\">
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">{{ skill.name }}</span>
                  </div>
              </div>
          </div>
          {% for item in skill.items %}
            <div class=\"row\" style=\"padding-left:20px;\">
              <div class=\"col-xs-offset-1 col-xs-2 end-xs \">
                  <div class=\"box\">
                      {% if item.icon %}  
                     <img alt=\"image-skill-{{ item.name }}\" src=\"images/devicons/{{ item.icon }}\" width=\"24px\">
                      {% endif %}
                  </div>
              </div>
              <div class=\"col-xs start-xs\">
                  <div class=\"box\">
                      <span class=\"text-right-icon\">{{ item.name }}</span>
                  </div>
              </div>
          </div>
          {% endfor %}
          <br>
      {% endfor %}
", "parts/slide-left.html.twig", "/home/sweb/github-project/carlos-sweb-cv/templates/parts/slide-left.html.twig");
    }
}
