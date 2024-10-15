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

/* parts/slide-right.html.twig */
class __TwigTemplate_6a678642c527cfc51b9fe613c07054c5 extends Template
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
        yield "<div class=\"row center-xs\" >
  <div class=\"col-xs\" style=\"padding-top:22px;\" >
    <h1>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "</h1>


<div class=\"dropdown\">
  <a href=\"#\" class=\"btn btn-link dropdown-toggle\" tabindex=\"0\">
    ";
        // line 8
        if ((($context["lang"] ?? null) == "es")) {
            // line 9
            yield "    <img alt=\"\" style=\"width:24px;\" src=\"images/es.svg\" />&nbsp;Español<i class=\"icon icon-caret\"></i>
    ";
        } elseif ((        // line 10
($context["lang"] ?? null) == "en")) {
            // line 11
            yield "    <img alt=\"\" style=\"width:24px;\" src=\"images/en.svg\" />&nbsp;English<i class=\"icon icon-caret\"></i>
    ";
        }
        // line 13
        yield "  </a>
  <!-- menu component -->
  <ul class=\"menu\">
    <li class=\"menu-item\">
    ";
        // line 17
        if ((($context["lang"] ?? null) == "es")) {
            // line 18
            yield "      <a href=\"en.html\" style=\"float:left;width:100%;text-align:left;\">
        <img alt=\"\" src=\"images/en.svg\" style=\"width:24px;\" />&nbsp;Ingles
      </a>
    ";
        } elseif ((        // line 21
($context["lang"] ?? null) == "en")) {
            // line 22
            yield "    <a href=\"index.html\" style=\"float:left;width:100%;text-align:left;\">
      <img alt=\"\" src=\"images/es.svg\" style=\"width:24px;\" />&nbsp;Spanish
    </a>
    ";
        }
        // line 26
        yield "  </li>
  </ul>
</div>


  </div>
</div>
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right1", [], "any", false, false, false, 36), "html", null, true);
        yield "</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["employment"]) {
            // line 44
            yield "  <div class=\"timeline-item\" >

    ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46) == 1)) {
                // line 47
                yield "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 49
                yield "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 55
            yield "
    <div class=\"timeline-content\">
      <!--Descripción de trabajo-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employment"], "date", [], "any", false, false, false, 59), "html", null, true);
            yield "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right4", [], "any", false, false, false, 60), "html", null, true);
            yield "</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employment"], "company", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right5", [], "any", false, false, false, 62), "html", null, true);
            yield "</strong>:</p>
      <p class=\"tile-subtitle\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employment"], "job", [], "any", false, false, false, 63), "html", null, true);
            yield "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right6", [], "any", false, false, false, 64), "html", null, true);
            yield "</strong>:</p>
      <p class=\"tile-subtitle col-xs-10\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employment"], "description", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
      <!--Descripción de trabajo-->
    </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right2", [], "any", false, false, false, 78), "html", null, true);
        yield "</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["education"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["institute"]) {
            // line 86
            yield "  <div class=\"timeline-item\">

    ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88) == 1)) {
                // line 89
                yield "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 91
                yield "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 97
            yield "
    <div class=\"timeline-content\">
      <!--Descripción-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\" >";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institute"], "date", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
      <p class=\"tile-subtitle\" ><strong>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right7", [], "any", false, false, false, 102), "html", null, true);
            yield "</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institute"], "name", [], "any", false, false, false, 103), "html", null, true);
            yield "</p>
      <p class=\"tile-subtitle\" ><strong>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["titles"] ?? null), "title_right8", [], "any", false, false, false, 104), "html", null, true);
            yield "</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["institute"], "job", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>
      <!--Descripción-->
    </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['institute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/slide-right.html.twig";
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
        return array (  288 => 110,  269 => 105,  265 => 104,  261 => 103,  257 => 102,  253 => 101,  247 => 97,  239 => 91,  235 => 89,  233 => 88,  229 => 86,  212 => 85,  202 => 78,  192 => 70,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  143 => 55,  135 => 49,  131 => 47,  129 => 46,  125 => 44,  108 => 43,  98 => 36,  86 => 26,  80 => 22,  78 => 21,  73 => 18,  71 => 17,  65 => 13,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row center-xs\" >
  <div class=\"col-xs\" style=\"padding-top:22px;\" >
    <h1>{{ profile.name }}</h1>


<div class=\"dropdown\">
  <a href=\"#\" class=\"btn btn-link dropdown-toggle\" tabindex=\"0\">
    {% if lang == 'es' %}
    <img alt=\"\" style=\"width:24px;\" src=\"images/es.svg\" />&nbsp;Español<i class=\"icon icon-caret\"></i>
    {% elseif lang == 'en' %}
    <img alt=\"\" style=\"width:24px;\" src=\"images/en.svg\" />&nbsp;English<i class=\"icon icon-caret\"></i>
    {% endif %}
  </a>
  <!-- menu component -->
  <ul class=\"menu\">
    <li class=\"menu-item\">
    {% if lang == 'es' %}
      <a href=\"en.html\" style=\"float:left;width:100%;text-align:left;\">
        <img alt=\"\" src=\"images/en.svg\" style=\"width:24px;\" />&nbsp;Ingles
      </a>
    {% elseif lang == 'en' %}
    <a href=\"index.html\" style=\"float:left;width:100%;text-align:left;\">
      <img alt=\"\" src=\"images/es.svg\" style=\"width:24px;\" />&nbsp;Spanish
    </a>
    {% endif %}
  </li>
  </ul>
</div>


  </div>
</div>
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">{{titles.title_right1}}</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  {% for employment in employments %}
  <div class=\"timeline-item\" >

    {% if loop.index == 1 %}
    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    {% else %}
    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    {% endif %}

    <div class=\"timeline-content\">
      <!--Descripción de trabajo-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\">{{ employment.date }}</p>
      <p class=\"tile-subtitle\"><strong>{{titles.title_right4}}</strong>:</p>
      <p class=\"tile-subtitle\" >{{ employment.company }}</p>
      <p class=\"tile-subtitle\"><strong>{{titles.title_right5}}</strong>:</p>
      <p class=\"tile-subtitle\">{{ employment.job }}</p>
      <p class=\"tile-subtitle\"><strong>{{titles.title_right6}}</strong>:</p>
      <p class=\"tile-subtitle col-xs-10\">{{ employment.description }}</p>
      <!--Descripción de trabajo-->
    </div>
  </div>
{% endfor %}
</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">{{titles.title_right2}}</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  {% for institute in education %}
  <div class=\"timeline-item\">

    {% if loop.index == 1 %}
    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    {% else %}
    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    {% endif %}

    <div class=\"timeline-content\">
      <!--Descripción-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\" >{{ institute.date }}</p>
      <p class=\"tile-subtitle\" ><strong>{{titles.title_right7}}</strong>:</p>
      <p class=\"tile-subtitle\" >{{ institute.name }}</p>
      <p class=\"tile-subtitle\" ><strong>{{titles.title_right8}}</strong>:</p>
      <p class=\"tile-subtitle\" >{{ institute.job }}</p>
      <!--Descripción-->
    </div>
  </div>
{% endfor %}
</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
", "parts/slide-right.html.twig", "/home/sweb/github-project/carlos-sweb-cv/templates/parts/slide-right.html.twig");
    }
}
