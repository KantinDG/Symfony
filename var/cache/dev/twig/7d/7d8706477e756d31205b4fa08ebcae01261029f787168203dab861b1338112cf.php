<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_056189ed346ebb6e462f5f59bb676cf3e0fce8cfbee3f7dd8c82df71825f01de extends Twig_Template
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
        $__internal_2e547edcc728a04a1c2153f3985495b277453a340945e1ff7d09008364084806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e547edcc728a04a1c2153f3985495b277453a340945e1ff7d09008364084806->enter($__internal_2e547edcc728a04a1c2153f3985495b277453a340945e1ff7d09008364084806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fd363f32dd9b6078b9f4a4bba5e0c97d30fa6050db0988d4fab283417137e754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd363f32dd9b6078b9f4a4bba5e0c97d30fa6050db0988d4fab283417137e754->enter($__internal_fd363f32dd9b6078b9f4a4bba5e0c97d30fa6050db0988d4fab283417137e754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e547edcc728a04a1c2153f3985495b277453a340945e1ff7d09008364084806->leave($__internal_2e547edcc728a04a1c2153f3985495b277453a340945e1ff7d09008364084806_prof);

        
        $__internal_fd363f32dd9b6078b9f4a4bba5e0c97d30fa6050db0988d4fab283417137e754->leave($__internal_fd363f32dd9b6078b9f4a4bba5e0c97d30fa6050db0988d4fab283417137e754_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6acc5177b03cb5846ee94c3535ec9b1b065eb9a8c5a4786b0d32a194ba782bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6acc5177b03cb5846ee94c3535ec9b1b065eb9a8c5a4786b0d32a194ba782bc->enter($__internal_d6acc5177b03cb5846ee94c3535ec9b1b065eb9a8c5a4786b0d32a194ba782bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76b4dd9e67391932fb170a85e3d2b4dd41f9e69bef197cd7a0907187211808f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b4dd9e67391932fb170a85e3d2b4dd41f9e69bef197cd7a0907187211808f0->enter($__internal_76b4dd9e67391932fb170a85e3d2b4dd41f9e69bef197cd7a0907187211808f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_76b4dd9e67391932fb170a85e3d2b4dd41f9e69bef197cd7a0907187211808f0->leave($__internal_76b4dd9e67391932fb170a85e3d2b4dd41f9e69bef197cd7a0907187211808f0_prof);

        
        $__internal_d6acc5177b03cb5846ee94c3535ec9b1b065eb9a8c5a4786b0d32a194ba782bc->leave($__internal_d6acc5177b03cb5846ee94c3535ec9b1b065eb9a8c5a4786b0d32a194ba782bc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f45c72c763234a2fb0d8ff9efc0bd9629e35543cf4dc53497e788e936e875451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45c72c763234a2fb0d8ff9efc0bd9629e35543cf4dc53497e788e936e875451->enter($__internal_f45c72c763234a2fb0d8ff9efc0bd9629e35543cf4dc53497e788e936e875451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec402db2518f3b9560381cd1f7cf9f8d2675c85ba63f1e4421837bf79355e64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec402db2518f3b9560381cd1f7cf9f8d2675c85ba63f1e4421837bf79355e64b->enter($__internal_ec402db2518f3b9560381cd1f7cf9f8d2675c85ba63f1e4421837bf79355e64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ec402db2518f3b9560381cd1f7cf9f8d2675c85ba63f1e4421837bf79355e64b->leave($__internal_ec402db2518f3b9560381cd1f7cf9f8d2675c85ba63f1e4421837bf79355e64b_prof);

        
        $__internal_f45c72c763234a2fb0d8ff9efc0bd9629e35543cf4dc53497e788e936e875451->leave($__internal_f45c72c763234a2fb0d8ff9efc0bd9629e35543cf4dc53497e788e936e875451_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fbba37a21abc60fd1363197c5990966ac4295e6feb95e91d1b6265124d780f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbba37a21abc60fd1363197c5990966ac4295e6feb95e91d1b6265124d780f6->enter($__internal_4fbba37a21abc60fd1363197c5990966ac4295e6feb95e91d1b6265124d780f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48ddeaec30dba4d9337bd2c42b88645cc5bb341e993267a50da0909317b76c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ddeaec30dba4d9337bd2c42b88645cc5bb341e993267a50da0909317b76c50->enter($__internal_48ddeaec30dba4d9337bd2c42b88645cc5bb341e993267a50da0909317b76c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48ddeaec30dba4d9337bd2c42b88645cc5bb341e993267a50da0909317b76c50->leave($__internal_48ddeaec30dba4d9337bd2c42b88645cc5bb341e993267a50da0909317b76c50_prof);

        
        $__internal_4fbba37a21abc60fd1363197c5990966ac4295e6feb95e91d1b6265124d780f6->leave($__internal_4fbba37a21abc60fd1363197c5990966ac4295e6feb95e91d1b6265124d780f6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
