<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a6a31272debe58f423308ac57c0bb350e83169423a3b3c61ae04de197e4346 extends Twig_Template
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
        $__internal_a8bfb11cdb92143331818ba913994f7c1aa532caa45182d65ecb6c937502606c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bfb11cdb92143331818ba913994f7c1aa532caa45182d65ecb6c937502606c->enter($__internal_a8bfb11cdb92143331818ba913994f7c1aa532caa45182d65ecb6c937502606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0d4e9576d94190d45b9cee6c10070015eacf80a9e1e8fe0bdb37a27574f76357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4e9576d94190d45b9cee6c10070015eacf80a9e1e8fe0bdb37a27574f76357->enter($__internal_0d4e9576d94190d45b9cee6c10070015eacf80a9e1e8fe0bdb37a27574f76357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8bfb11cdb92143331818ba913994f7c1aa532caa45182d65ecb6c937502606c->leave($__internal_a8bfb11cdb92143331818ba913994f7c1aa532caa45182d65ecb6c937502606c_prof);

        
        $__internal_0d4e9576d94190d45b9cee6c10070015eacf80a9e1e8fe0bdb37a27574f76357->leave($__internal_0d4e9576d94190d45b9cee6c10070015eacf80a9e1e8fe0bdb37a27574f76357_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b95c71194a2804ca74c42cee9ca548060698798f146d9018c196170fb56db0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95c71194a2804ca74c42cee9ca548060698798f146d9018c196170fb56db0f5->enter($__internal_b95c71194a2804ca74c42cee9ca548060698798f146d9018c196170fb56db0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_271e70154f5e9e0556909219586388ae9254b6a5dad5b6dd75a71235f8146b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271e70154f5e9e0556909219586388ae9254b6a5dad5b6dd75a71235f8146b80->enter($__internal_271e70154f5e9e0556909219586388ae9254b6a5dad5b6dd75a71235f8146b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_271e70154f5e9e0556909219586388ae9254b6a5dad5b6dd75a71235f8146b80->leave($__internal_271e70154f5e9e0556909219586388ae9254b6a5dad5b6dd75a71235f8146b80_prof);

        
        $__internal_b95c71194a2804ca74c42cee9ca548060698798f146d9018c196170fb56db0f5->leave($__internal_b95c71194a2804ca74c42cee9ca548060698798f146d9018c196170fb56db0f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_960e9f1444ab7d32219f76808a4f904caa290c6ef3a109beeff26436a6fdd73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960e9f1444ab7d32219f76808a4f904caa290c6ef3a109beeff26436a6fdd73e->enter($__internal_960e9f1444ab7d32219f76808a4f904caa290c6ef3a109beeff26436a6fdd73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1f454c0fb072c86e0ecae6f87b6479a709bd55d09b0609df2c0f5631619f96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f454c0fb072c86e0ecae6f87b6479a709bd55d09b0609df2c0f5631619f96e->enter($__internal_b1f454c0fb072c86e0ecae6f87b6479a709bd55d09b0609df2c0f5631619f96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b1f454c0fb072c86e0ecae6f87b6479a709bd55d09b0609df2c0f5631619f96e->leave($__internal_b1f454c0fb072c86e0ecae6f87b6479a709bd55d09b0609df2c0f5631619f96e_prof);

        
        $__internal_960e9f1444ab7d32219f76808a4f904caa290c6ef3a109beeff26436a6fdd73e->leave($__internal_960e9f1444ab7d32219f76808a4f904caa290c6ef3a109beeff26436a6fdd73e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea2254a2f99668925a49db00862a11f75d03af51384e9384d23c1cbea81aebcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2254a2f99668925a49db00862a11f75d03af51384e9384d23c1cbea81aebcd->enter($__internal_ea2254a2f99668925a49db00862a11f75d03af51384e9384d23c1cbea81aebcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bae2fb8f19457ef90dc4d9ba490c90535a8c8e7e335d4c48f6d7cfcd332bf64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae2fb8f19457ef90dc4d9ba490c90535a8c8e7e335d4c48f6d7cfcd332bf64c->enter($__internal_bae2fb8f19457ef90dc4d9ba490c90535a8c8e7e335d4c48f6d7cfcd332bf64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bae2fb8f19457ef90dc4d9ba490c90535a8c8e7e335d4c48f6d7cfcd332bf64c->leave($__internal_bae2fb8f19457ef90dc4d9ba490c90535a8c8e7e335d4c48f6d7cfcd332bf64c_prof);

        
        $__internal_ea2254a2f99668925a49db00862a11f75d03af51384e9384d23c1cbea81aebcd->leave($__internal_ea2254a2f99668925a49db00862a11f75d03af51384e9384d23c1cbea81aebcd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
