<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac70412cb578cc990317238b49f300cbe2ee4255555ef9a62a007576c0dcd969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac70412cb578cc990317238b49f300cbe2ee4255555ef9a62a007576c0dcd969->enter($__internal_ac70412cb578cc990317238b49f300cbe2ee4255555ef9a62a007576c0dcd969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fd4f5ce3b261a4f17a476aecc5ac5848c93244f4052e93d6ea932dbeb992936e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4f5ce3b261a4f17a476aecc5ac5848c93244f4052e93d6ea932dbeb992936e->enter($__internal_fd4f5ce3b261a4f17a476aecc5ac5848c93244f4052e93d6ea932dbeb992936e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac70412cb578cc990317238b49f300cbe2ee4255555ef9a62a007576c0dcd969->leave($__internal_ac70412cb578cc990317238b49f300cbe2ee4255555ef9a62a007576c0dcd969_prof);

        
        $__internal_fd4f5ce3b261a4f17a476aecc5ac5848c93244f4052e93d6ea932dbeb992936e->leave($__internal_fd4f5ce3b261a4f17a476aecc5ac5848c93244f4052e93d6ea932dbeb992936e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b1230551ad20b61ff62d471fc95c95c9f4d2cd4514521678c6fc4b66a879e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1230551ad20b61ff62d471fc95c95c9f4d2cd4514521678c6fc4b66a879e85->enter($__internal_2b1230551ad20b61ff62d471fc95c95c9f4d2cd4514521678c6fc4b66a879e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ec0be7a49f8ffb74ed2b4136a99312d2595560ff52a9b46aa710efb99a2a1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec0be7a49f8ffb74ed2b4136a99312d2595560ff52a9b46aa710efb99a2a1bc->enter($__internal_5ec0be7a49f8ffb74ed2b4136a99312d2595560ff52a9b46aa710efb99a2a1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5ec0be7a49f8ffb74ed2b4136a99312d2595560ff52a9b46aa710efb99a2a1bc->leave($__internal_5ec0be7a49f8ffb74ed2b4136a99312d2595560ff52a9b46aa710efb99a2a1bc_prof);

        
        $__internal_2b1230551ad20b61ff62d471fc95c95c9f4d2cd4514521678c6fc4b66a879e85->leave($__internal_2b1230551ad20b61ff62d471fc95c95c9f4d2cd4514521678c6fc4b66a879e85_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
