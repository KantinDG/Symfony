<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc205c14ac5baa76e5b25924c050e963cc4f8350a5f4538daca241f69eff97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc205c14ac5baa76e5b25924c050e963cc4f8350a5f4538daca241f69eff97b->enter($__internal_7cc205c14ac5baa76e5b25924c050e963cc4f8350a5f4538daca241f69eff97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7325433c28dbd692336eb11619d4b596d1234e9fd200784380e2bee966e87870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7325433c28dbd692336eb11619d4b596d1234e9fd200784380e2bee966e87870->enter($__internal_7325433c28dbd692336eb11619d4b596d1234e9fd200784380e2bee966e87870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc205c14ac5baa76e5b25924c050e963cc4f8350a5f4538daca241f69eff97b->leave($__internal_7cc205c14ac5baa76e5b25924c050e963cc4f8350a5f4538daca241f69eff97b_prof);

        
        $__internal_7325433c28dbd692336eb11619d4b596d1234e9fd200784380e2bee966e87870->leave($__internal_7325433c28dbd692336eb11619d4b596d1234e9fd200784380e2bee966e87870_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c83667c70a0ac4d9bc053c71d60f95904f8230277f5ffcd2813c54005633971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c83667c70a0ac4d9bc053c71d60f95904f8230277f5ffcd2813c54005633971->enter($__internal_6c83667c70a0ac4d9bc053c71d60f95904f8230277f5ffcd2813c54005633971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_417c3cede5c40a3dbcc71102f0b949f23e319105364bcec88ad8c80a9f68c078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417c3cede5c40a3dbcc71102f0b949f23e319105364bcec88ad8c80a9f68c078->enter($__internal_417c3cede5c40a3dbcc71102f0b949f23e319105364bcec88ad8c80a9f68c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_417c3cede5c40a3dbcc71102f0b949f23e319105364bcec88ad8c80a9f68c078->leave($__internal_417c3cede5c40a3dbcc71102f0b949f23e319105364bcec88ad8c80a9f68c078_prof);

        
        $__internal_6c83667c70a0ac4d9bc053c71d60f95904f8230277f5ffcd2813c54005633971->leave($__internal_6c83667c70a0ac4d9bc053c71d60f95904f8230277f5ffcd2813c54005633971_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_711234b17e4230f3e89a75d0654113d39473d5caa0359f8d55841cc7cd50c60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711234b17e4230f3e89a75d0654113d39473d5caa0359f8d55841cc7cd50c60f->enter($__internal_711234b17e4230f3e89a75d0654113d39473d5caa0359f8d55841cc7cd50c60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30bb77ef46105677a450bc2d4679354fffe61372297bb0609662285ca111b018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bb77ef46105677a450bc2d4679354fffe61372297bb0609662285ca111b018->enter($__internal_30bb77ef46105677a450bc2d4679354fffe61372297bb0609662285ca111b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30bb77ef46105677a450bc2d4679354fffe61372297bb0609662285ca111b018->leave($__internal_30bb77ef46105677a450bc2d4679354fffe61372297bb0609662285ca111b018_prof);

        
        $__internal_711234b17e4230f3e89a75d0654113d39473d5caa0359f8d55841cc7cd50c60f->leave($__internal_711234b17e4230f3e89a75d0654113d39473d5caa0359f8d55841cc7cd50c60f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c20add4bf5b63f3753fe16c7fd27cc0d6de47f5d4e4c44100b790d02eff13ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20add4bf5b63f3753fe16c7fd27cc0d6de47f5d4e4c44100b790d02eff13ebd->enter($__internal_c20add4bf5b63f3753fe16c7fd27cc0d6de47f5d4e4c44100b790d02eff13ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5112e12b0696250987cd808169105e96f65b32da24f88e0c3d24e7ed6486af99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5112e12b0696250987cd808169105e96f65b32da24f88e0c3d24e7ed6486af99->enter($__internal_5112e12b0696250987cd808169105e96f65b32da24f88e0c3d24e7ed6486af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5112e12b0696250987cd808169105e96f65b32da24f88e0c3d24e7ed6486af99->leave($__internal_5112e12b0696250987cd808169105e96f65b32da24f88e0c3d24e7ed6486af99_prof);

        
        $__internal_c20add4bf5b63f3753fe16c7fd27cc0d6de47f5d4e4c44100b790d02eff13ebd->leave($__internal_c20add4bf5b63f3753fe16c7fd27cc0d6de47f5d4e4c44100b790d02eff13ebd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
