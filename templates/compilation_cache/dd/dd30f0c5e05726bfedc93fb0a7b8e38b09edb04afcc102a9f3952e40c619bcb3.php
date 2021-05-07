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

/* parts/slide-right.html.twig */
class __TwigTemplate_03cd6da973cbc22acfd9efbb318de54fa69ab93aa4dd400911265f58248763b0 extends Template
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
        echo "<div class=\"row center-xs\" >
  <div class=\"col-xs\" style=\"padding-top:22px;\" >
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>


<div class=\"dropdown\">
  <a href=\"#\" class=\"btn btn-link dropdown-toggle\" tabindex=\"0\">
    ";
        // line 8
        if ((0 === twig_compare(($context["lang"] ?? null), "es"))) {
            // line 9
            echo "    <img style=\"width:24px;\" src=\"es.svg\" />&nbsp;Español<i class=\"icon icon-caret\"></i>
    ";
        } elseif ((0 === twig_compare(        // line 10
($context["lang"] ?? null), "en"))) {
            // line 11
            echo "    <img style=\"width:24px;\" src=\"en.svg\" />&nbsp;English<i class=\"icon icon-caret\"></i>
    ";
        }
        // line 13
        echo "  </a>
  <!-- menu component -->
  <ul class=\"menu\">
    <li class=\"menu-item\">
    ";
        // line 17
        if ((0 === twig_compare(($context["lang"] ?? null), "es"))) {
            // line 18
            echo "      <a href=\"en.html\" style=\"float:left;width:100%;text-align:left;\">
        <img src=\"en.svg\" style=\"width:24px;\" />&nbsp;Ingles
      </a>
    ";
        } elseif ((0 === twig_compare(        // line 21
($context["lang"] ?? null), "en"))) {
            // line 22
            echo "    <a href=\"index.html\" style=\"float:left;width:100%;text-align:left;\">
      <img src=\"es.svg\" style=\"width:24px;\" />&nbsp;Spanish
    </a>
    ";
        }
        // line 26
        echo "  </li>
  </ul>
</div>


  </div>
</div>
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), "title_right1", [], "any", false, false, false, 36), "html", null, true);
        echo "</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employments"] ?? null));
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
            echo "  <div class=\"timeline-item\" >

    ";
            // line 46
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), 1))) {
                // line 47
                echo "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 49
                echo "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 55
            echo "
    <div class=\"timeline-content\">
      <!--Descripción de trabajo-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "date", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), "title_right4", [], "any", false, false, false, 60), "html", null, true);
            echo "</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "company", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), "title_right5", [], "any", false, false, false, 62), "html", null, true);
            echo "</strong>:</p>
      <p class=\"tile-subtitle\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "job", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), "title_right6", [], "any", false, false, false, 64), "html", null, true);
            echo "</strong>:</p>
      <p class=\"tile-subtitle col-xs-10\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
      <!--Descripción de trabajo-->
    </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["titles"] ?? null), "title_right2", [], "any", false, false, false, 78), "html", null, true);
        echo "</h3></div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">
  ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["education"] ?? null));
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
            echo "  <div class=\"timeline-item\">

    ";
            // line 88
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), 1))) {
                // line 89
                echo "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 91
                echo "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 97
            echo "
    <div class=\"timeline-content\">
      <!--Descripción-->
      <div class=\"divider\"></div>
      <p class=\"tile-subtitle\" >";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "date", [], "any", false, false, false, 101), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\" ><strong>Institución Acádemica</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\" ><strong>Carrera</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "job", [], "any", false, false, false, 105), "html", null, true);
            echo "</p>
      <!--Descripción-->
    </div>
  </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['institute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
";
    }

    public function getTemplateName()
    {
        return "parts/slide-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 110,  258 => 105,  253 => 103,  248 => 101,  242 => 97,  234 => 91,  230 => 89,  228 => 88,  224 => 86,  207 => 85,  197 => 78,  187 => 70,  168 => 65,  164 => 64,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  138 => 55,  130 => 49,  126 => 47,  124 => 46,  120 => 44,  103 => 43,  93 => 36,  81 => 26,  75 => 22,  73 => 21,  68 => 18,  66 => 17,  60 => 13,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row center-xs\" >
  <div class=\"col-xs\" style=\"padding-top:22px;\" >
    <h1>{{ profile.name }}</h1>


<div class=\"dropdown\">
  <a href=\"#\" class=\"btn btn-link dropdown-toggle\" tabindex=\"0\">
    {% if lang == 'es' %}
    <img style=\"width:24px;\" src=\"es.svg\" />&nbsp;Español<i class=\"icon icon-caret\"></i>
    {% elseif lang == 'en' %}
    <img style=\"width:24px;\" src=\"en.svg\" />&nbsp;English<i class=\"icon icon-caret\"></i>
    {% endif %}
  </a>
  <!-- menu component -->
  <ul class=\"menu\">
    <li class=\"menu-item\">
    {% if lang == 'es' %}
      <a href=\"en.html\" style=\"float:left;width:100%;text-align:left;\">
        <img src=\"en.svg\" style=\"width:24px;\" />&nbsp;Ingles
      </a>
    {% elseif lang == 'en' %}
    <a href=\"index.html\" style=\"float:left;width:100%;text-align:left;\">
      <img src=\"es.svg\" style=\"width:24px;\" />&nbsp;Spanish
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
      <p class=\"tile-subtitle\" ><strong>Institución Acádemica</strong>:</p>
      <p class=\"tile-subtitle\" >{{ institute.name }}</p>
      <p class=\"tile-subtitle\" ><strong>Carrera</strong>:</p>
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
", "parts/slide-right.html.twig", "/var/www/html/carlos-sweb-cv/templates/parts/slide-right.html.twig");
    }
}
