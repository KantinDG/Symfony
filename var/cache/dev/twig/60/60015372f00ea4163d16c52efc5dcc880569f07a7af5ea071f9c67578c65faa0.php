<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08cb262f401b86e992d1004fbf010831700bf01c8a8e8de713bcccee294436cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62fbd2df840ad525fb93fe217bdfe9210d382eef67c99b2a78b24a5e9ad398f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fbd2df840ad525fb93fe217bdfe9210d382eef67c99b2a78b24a5e9ad398f7->enter($__internal_62fbd2df840ad525fb93fe217bdfe9210d382eef67c99b2a78b24a5e9ad398f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f5499cdf7dff49d82b2c0d4a31b1ee10fd0b811211625f6728528dc63651e700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5499cdf7dff49d82b2c0d4a31b1ee10fd0b811211625f6728528dc63651e700->enter($__internal_f5499cdf7dff49d82b2c0d4a31b1ee10fd0b811211625f6728528dc63651e700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62fbd2df840ad525fb93fe217bdfe9210d382eef67c99b2a78b24a5e9ad398f7->leave($__internal_62fbd2df840ad525fb93fe217bdfe9210d382eef67c99b2a78b24a5e9ad398f7_prof);

        
        $__internal_f5499cdf7dff49d82b2c0d4a31b1ee10fd0b811211625f6728528dc63651e700->leave($__internal_f5499cdf7dff49d82b2c0d4a31b1ee10fd0b811211625f6728528dc63651e700_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc352aad0002e83c897ec259ce9493f0073e33e1336ce5dcf77af4be2b3798bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc352aad0002e83c897ec259ce9493f0073e33e1336ce5dcf77af4be2b3798bb->enter($__internal_cc352aad0002e83c897ec259ce9493f0073e33e1336ce5dcf77af4be2b3798bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a82fb232945f4250561df10171dc9b5881132ae55d17fccfa4da686da9d0552a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82fb232945f4250561df10171dc9b5881132ae55d17fccfa4da686da9d0552a->enter($__internal_a82fb232945f4250561df10171dc9b5881132ae55d17fccfa4da686da9d0552a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a82fb232945f4250561df10171dc9b5881132ae55d17fccfa4da686da9d0552a->leave($__internal_a82fb232945f4250561df10171dc9b5881132ae55d17fccfa4da686da9d0552a_prof);

        
        $__internal_cc352aad0002e83c897ec259ce9493f0073e33e1336ce5dcf77af4be2b3798bb->leave($__internal_cc352aad0002e83c897ec259ce9493f0073e33e1336ce5dcf77af4be2b3798bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3b79349c262480de08bc4c1aa7b22f796a3b8333e90016a71bb770546e1f613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b79349c262480de08bc4c1aa7b22f796a3b8333e90016a71bb770546e1f613->enter($__internal_e3b79349c262480de08bc4c1aa7b22f796a3b8333e90016a71bb770546e1f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0272a6c388cbd4e1d18da2c9091bb767d07d7cd31c96505fe406e1cac009c57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0272a6c388cbd4e1d18da2c9091bb767d07d7cd31c96505fe406e1cac009c57a->enter($__internal_0272a6c388cbd4e1d18da2c9091bb767d07d7cd31c96505fe406e1cac009c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0272a6c388cbd4e1d18da2c9091bb767d07d7cd31c96505fe406e1cac009c57a->leave($__internal_0272a6c388cbd4e1d18da2c9091bb767d07d7cd31c96505fe406e1cac009c57a_prof);

        
        $__internal_e3b79349c262480de08bc4c1aa7b22f796a3b8333e90016a71bb770546e1f613->leave($__internal_e3b79349c262480de08bc4c1aa7b22f796a3b8333e90016a71bb770546e1f613_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e48aa7bb75e998a2bfb9baaf1118cb7a9d0dc1de54675678803526dedc9eb919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48aa7bb75e998a2bfb9baaf1118cb7a9d0dc1de54675678803526dedc9eb919->enter($__internal_e48aa7bb75e998a2bfb9baaf1118cb7a9d0dc1de54675678803526dedc9eb919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2465e0b3d9f180958ea13b46af88e306675adbe5d97d09a476521c64b3cf964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2465e0b3d9f180958ea13b46af88e306675adbe5d97d09a476521c64b3cf964->enter($__internal_a2465e0b3d9f180958ea13b46af88e306675adbe5d97d09a476521c64b3cf964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a2465e0b3d9f180958ea13b46af88e306675adbe5d97d09a476521c64b3cf964->leave($__internal_a2465e0b3d9f180958ea13b46af88e306675adbe5d97d09a476521c64b3cf964_prof);

        
        $__internal_e48aa7bb75e998a2bfb9baaf1118cb7a9d0dc1de54675678803526dedc9eb919->leave($__internal_e48aa7bb75e998a2bfb9baaf1118cb7a9d0dc1de54675678803526dedc9eb919_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
