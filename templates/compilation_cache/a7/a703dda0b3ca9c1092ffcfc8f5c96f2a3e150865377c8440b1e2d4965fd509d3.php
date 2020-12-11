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
class __TwigTemplate_b833f736b53c171af028db586facc5e6091f579cbadd362ca56c0165c581fcc8 extends Template
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
  </div>
</div>
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">Experiencia Laboral</h3></div>    
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">  
  ";
        // line 16
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
            echo "\t\t
  <div class=\"timeline-item\" >
    
    ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), 1))) {
                // line 20
                echo "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 22
                echo "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 28
            echo "
    <div class=\"timeline-content\">    
      <!--Descripción de trabajo-->  
      <div class=\"divider\"></div>  
      <p class=\"tile-subtitle\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "date", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>Empresa</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "company", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>Cargo</strong>:</p>
      <p class=\"tile-subtitle\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "job", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\"><strong>Descripción</strong>:</p>
      <p class=\"tile-subtitle col-xs-10\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employment"], "description", [], "any", false, false, false, 38), "html", null, true);
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
        // line 43
        echo "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">Educación Académica</h3></div>    
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">  
  ";
        // line 58
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
            echo "   
  <div class=\"timeline-item\">
    
    ";
            // line 61
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), 1))) {
                // line 62
                echo "    <div class=\"timeline-left\"><a class=\"timeline-icon\"></a></div>
    ";
            } else {
                // line 64
                echo "    <div class=\"timeline-left\">
      <a class=\"timeline-icon icon-lg\" href=\"#timeline-example-2\">
        <i class=\"icon icon-check\"></i>
      </a>
    </div>
    ";
            }
            // line 70
            echo "
    <div class=\"timeline-content\">    
      <!--Descripción--> 
      <div class=\"divider\"></div>   
      <p class=\"tile-subtitle\" >";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "date", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\" ><strong>Institución Acádemica</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
      <p class=\"tile-subtitle\" ><strong>Carrera</strong>:</p>
      <p class=\"tile-subtitle\" >";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["institute"], "job", [], "any", false, false, false, 78), "html", null, true);
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
        // line 83
        echo "</div>
<!--timeline-->
</div><!--row-->
</div><!--column-->
<!--time line end-->";
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
        return array (  219 => 83,  200 => 78,  195 => 76,  190 => 74,  184 => 70,  176 => 64,  172 => 62,  170 => 61,  149 => 58,  132 => 43,  113 => 38,  108 => 36,  103 => 34,  98 => 32,  92 => 28,  84 => 22,  80 => 20,  78 => 19,  57 => 16,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row center-xs\" >
  <div class=\"col-xs\" style=\"padding-top:22px;\" >
    <h1>{{ profile.name }}</h1>
  </div>
</div>
<div class=\"divider\"></div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">Experiencia Laboral</h3></div>    
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-xs-offset-1\">
<!--time line-->
<div class=\"timeline\">  
  {% for employment in employments %}\t\t
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
      <p class=\"tile-subtitle\"><strong>Empresa</strong>:</p>
      <p class=\"tile-subtitle\" >{{ employment.company }}</p>
      <p class=\"tile-subtitle\"><strong>Cargo</strong>:</p>
      <p class=\"tile-subtitle\">{{ employment.job }}</p>
      <p class=\"tile-subtitle\"><strong>Descripción</strong>:</p>
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
      <div class=\"box\"><h3 style=\"text-decoration:underline;\">Educación Académica</h3></div>    
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
<!--time line end-->", "parts/slide-right.html.twig", "/var/www/html/carlos-sweb-cv/templates/parts/slide-right.html.twig");
    }
}
