<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f38ff2aa5d1a62de58752e7b569ebca4c87723f000fee69ffd859251eb9e017 extends Twig_Template
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
        $__internal_392198d2c0eea8ad00c402b12dae8818cf154a4e25936afe91ad505cc9585f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392198d2c0eea8ad00c402b12dae8818cf154a4e25936afe91ad505cc9585f2c->enter($__internal_392198d2c0eea8ad00c402b12dae8818cf154a4e25936afe91ad505cc9585f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fb08dc8f58c014808d4ff55144df77bcb34af26e564773507d068712952c9b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb08dc8f58c014808d4ff55144df77bcb34af26e564773507d068712952c9b2d->enter($__internal_fb08dc8f58c014808d4ff55144df77bcb34af26e564773507d068712952c9b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392198d2c0eea8ad00c402b12dae8818cf154a4e25936afe91ad505cc9585f2c->leave($__internal_392198d2c0eea8ad00c402b12dae8818cf154a4e25936afe91ad505cc9585f2c_prof);

        
        $__internal_fb08dc8f58c014808d4ff55144df77bcb34af26e564773507d068712952c9b2d->leave($__internal_fb08dc8f58c014808d4ff55144df77bcb34af26e564773507d068712952c9b2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cda8ae70bd95568661ffead12a335a94d33a2e2b2de8a217dde42bdbdd1e78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cda8ae70bd95568661ffead12a335a94d33a2e2b2de8a217dde42bdbdd1e78b->enter($__internal_4cda8ae70bd95568661ffead12a335a94d33a2e2b2de8a217dde42bdbdd1e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db41f544feb3c629352c489028aab5d74f52eeb2477a47edfe0e5c1fb87209fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db41f544feb3c629352c489028aab5d74f52eeb2477a47edfe0e5c1fb87209fc->enter($__internal_db41f544feb3c629352c489028aab5d74f52eeb2477a47edfe0e5c1fb87209fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_db41f544feb3c629352c489028aab5d74f52eeb2477a47edfe0e5c1fb87209fc->leave($__internal_db41f544feb3c629352c489028aab5d74f52eeb2477a47edfe0e5c1fb87209fc_prof);

        
        $__internal_4cda8ae70bd95568661ffead12a335a94d33a2e2b2de8a217dde42bdbdd1e78b->leave($__internal_4cda8ae70bd95568661ffead12a335a94d33a2e2b2de8a217dde42bdbdd1e78b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeb62de8d2373e3ab87006b436a9a0f1dee065ad650380817d599e505291b44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb62de8d2373e3ab87006b436a9a0f1dee065ad650380817d599e505291b44d->enter($__internal_aeb62de8d2373e3ab87006b436a9a0f1dee065ad650380817d599e505291b44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4728e58553bbe2d58b53c30dec04f77d52c6447a17ad2f2a7e1e54c0ecbaab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4728e58553bbe2d58b53c30dec04f77d52c6447a17ad2f2a7e1e54c0ecbaab2->enter($__internal_f4728e58553bbe2d58b53c30dec04f77d52c6447a17ad2f2a7e1e54c0ecbaab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4728e58553bbe2d58b53c30dec04f77d52c6447a17ad2f2a7e1e54c0ecbaab2->leave($__internal_f4728e58553bbe2d58b53c30dec04f77d52c6447a17ad2f2a7e1e54c0ecbaab2_prof);

        
        $__internal_aeb62de8d2373e3ab87006b436a9a0f1dee065ad650380817d599e505291b44d->leave($__internal_aeb62de8d2373e3ab87006b436a9a0f1dee065ad650380817d599e505291b44d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_299439e3adf98ce805b6d1475be987826cf42e6d9e89b8f6cba8c5b3e5bd7182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299439e3adf98ce805b6d1475be987826cf42e6d9e89b8f6cba8c5b3e5bd7182->enter($__internal_299439e3adf98ce805b6d1475be987826cf42e6d9e89b8f6cba8c5b3e5bd7182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_682e4011f3dde616da2d53a334b97d7b9d4c171ab06a58371bd3e8ab2f5ab953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682e4011f3dde616da2d53a334b97d7b9d4c171ab06a58371bd3e8ab2f5ab953->enter($__internal_682e4011f3dde616da2d53a334b97d7b9d4c171ab06a58371bd3e8ab2f5ab953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_682e4011f3dde616da2d53a334b97d7b9d4c171ab06a58371bd3e8ab2f5ab953->leave($__internal_682e4011f3dde616da2d53a334b97d7b9d4c171ab06a58371bd3e8ab2f5ab953_prof);

        
        $__internal_299439e3adf98ce805b6d1475be987826cf42e6d9e89b8f6cba8c5b3e5bd7182->leave($__internal_299439e3adf98ce805b6d1475be987826cf42e6d9e89b8f6cba8c5b3e5bd7182_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
