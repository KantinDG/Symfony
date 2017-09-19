<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2597dd7842eb456661b51c15ac1d13ab5b7a6fc2bf181f871826828962a0bf0b extends Twig_Template
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
        $__internal_bbcb480db65534bb675a737cfa77865d0aa78fe031c6c8cdf84a76c579420c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcb480db65534bb675a737cfa77865d0aa78fe031c6c8cdf84a76c579420c91->enter($__internal_bbcb480db65534bb675a737cfa77865d0aa78fe031c6c8cdf84a76c579420c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_faa72efaf7e0d067fff99bda7a87c4ebac571a496f9518fc6fcf45c12e4619d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa72efaf7e0d067fff99bda7a87c4ebac571a496f9518fc6fcf45c12e4619d8->enter($__internal_faa72efaf7e0d067fff99bda7a87c4ebac571a496f9518fc6fcf45c12e4619d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbcb480db65534bb675a737cfa77865d0aa78fe031c6c8cdf84a76c579420c91->leave($__internal_bbcb480db65534bb675a737cfa77865d0aa78fe031c6c8cdf84a76c579420c91_prof);

        
        $__internal_faa72efaf7e0d067fff99bda7a87c4ebac571a496f9518fc6fcf45c12e4619d8->leave($__internal_faa72efaf7e0d067fff99bda7a87c4ebac571a496f9518fc6fcf45c12e4619d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c15f42dab41ff0e9d03f7b797649a903c156f55d25737ed55d96df3e48f66a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c15f42dab41ff0e9d03f7b797649a903c156f55d25737ed55d96df3e48f66a8->enter($__internal_6c15f42dab41ff0e9d03f7b797649a903c156f55d25737ed55d96df3e48f66a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07ddeed85903f09dc688d3c4021127bc02246419d2d207a731963919be7725f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ddeed85903f09dc688d3c4021127bc02246419d2d207a731963919be7725f3->enter($__internal_07ddeed85903f09dc688d3c4021127bc02246419d2d207a731963919be7725f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_07ddeed85903f09dc688d3c4021127bc02246419d2d207a731963919be7725f3->leave($__internal_07ddeed85903f09dc688d3c4021127bc02246419d2d207a731963919be7725f3_prof);

        
        $__internal_6c15f42dab41ff0e9d03f7b797649a903c156f55d25737ed55d96df3e48f66a8->leave($__internal_6c15f42dab41ff0e9d03f7b797649a903c156f55d25737ed55d96df3e48f66a8_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
