<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_95d97a06ec04c9fbfbe4d8d0108604005ab49d04f400acd2b90bcea96bcb9050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d97a06ec04c9fbfbe4d8d0108604005ab49d04f400acd2b90bcea96bcb9050->enter($__internal_95d97a06ec04c9fbfbe4d8d0108604005ab49d04f400acd2b90bcea96bcb9050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2cc12df780483b51abe0046b2a8f2422a310cce0a674a5c8486788e561138f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc12df780483b51abe0046b2a8f2422a310cce0a674a5c8486788e561138f24->enter($__internal_2cc12df780483b51abe0046b2a8f2422a310cce0a674a5c8486788e561138f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d97a06ec04c9fbfbe4d8d0108604005ab49d04f400acd2b90bcea96bcb9050->leave($__internal_95d97a06ec04c9fbfbe4d8d0108604005ab49d04f400acd2b90bcea96bcb9050_prof);

        
        $__internal_2cc12df780483b51abe0046b2a8f2422a310cce0a674a5c8486788e561138f24->leave($__internal_2cc12df780483b51abe0046b2a8f2422a310cce0a674a5c8486788e561138f24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_faf2c39df0081edd649bf2fcb72c1103b115bf49b0c425e844daa2fd54e6bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf2c39df0081edd649bf2fcb72c1103b115bf49b0c425e844daa2fd54e6bbb5->enter($__internal_faf2c39df0081edd649bf2fcb72c1103b115bf49b0c425e844daa2fd54e6bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb1606c5f5f6976dbb34f17cc4c24d557db7b3e9ce947618398a57314ec26622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1606c5f5f6976dbb34f17cc4c24d557db7b3e9ce947618398a57314ec26622->enter($__internal_bb1606c5f5f6976dbb34f17cc4c24d557db7b3e9ce947618398a57314ec26622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb1606c5f5f6976dbb34f17cc4c24d557db7b3e9ce947618398a57314ec26622->leave($__internal_bb1606c5f5f6976dbb34f17cc4c24d557db7b3e9ce947618398a57314ec26622_prof);

        
        $__internal_faf2c39df0081edd649bf2fcb72c1103b115bf49b0c425e844daa2fd54e6bbb5->leave($__internal_faf2c39df0081edd649bf2fcb72c1103b115bf49b0c425e844daa2fd54e6bbb5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6abf536d5fe0c64d5691d159734d1c0a2bfa460b96be530deb369444984fed70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abf536d5fe0c64d5691d159734d1c0a2bfa460b96be530deb369444984fed70->enter($__internal_6abf536d5fe0c64d5691d159734d1c0a2bfa460b96be530deb369444984fed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f6e95228043594c65ff36669130d32de36869940fd8980ddd4c25f4cf1eb87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6e95228043594c65ff36669130d32de36869940fd8980ddd4c25f4cf1eb87c->enter($__internal_0f6e95228043594c65ff36669130d32de36869940fd8980ddd4c25f4cf1eb87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f6e95228043594c65ff36669130d32de36869940fd8980ddd4c25f4cf1eb87c->leave($__internal_0f6e95228043594c65ff36669130d32de36869940fd8980ddd4c25f4cf1eb87c_prof);

        
        $__internal_6abf536d5fe0c64d5691d159734d1c0a2bfa460b96be530deb369444984fed70->leave($__internal_6abf536d5fe0c64d5691d159734d1c0a2bfa460b96be530deb369444984fed70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b05685ecaf00e738fcf2e32b4bf99dd7712f220561334247ab40705b75ea46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b05685ecaf00e738fcf2e32b4bf99dd7712f220561334247ab40705b75ea46d->enter($__internal_8b05685ecaf00e738fcf2e32b4bf99dd7712f220561334247ab40705b75ea46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7325a16db74689af7d64abebad8505dcc496f0d10ded458866d242c4df7ec5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7325a16db74689af7d64abebad8505dcc496f0d10ded458866d242c4df7ec5e5->enter($__internal_7325a16db74689af7d64abebad8505dcc496f0d10ded458866d242c4df7ec5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7325a16db74689af7d64abebad8505dcc496f0d10ded458866d242c4df7ec5e5->leave($__internal_7325a16db74689af7d64abebad8505dcc496f0d10ded458866d242c4df7ec5e5_prof);

        
        $__internal_8b05685ecaf00e738fcf2e32b4bf99dd7712f220561334247ab40705b75ea46d->leave($__internal_8b05685ecaf00e738fcf2e32b4bf99dd7712f220561334247ab40705b75ea46d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
