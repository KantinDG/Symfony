<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f0fe9d0dcad1b83e1b7977aeb4004060a578ea9af53b3f1c1c411a3f6d2fe80e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70f30e724f73f72efecdb3a93719ca384f7bddd9fb075b7a3542e7eecaec273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70f30e724f73f72efecdb3a93719ca384f7bddd9fb075b7a3542e7eecaec273->enter($__internal_d70f30e724f73f72efecdb3a93719ca384f7bddd9fb075b7a3542e7eecaec273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e75734fbd3df7a6abb85502906a404d6b895f5ff4551f5b697f0de15bda740b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75734fbd3df7a6abb85502906a404d6b895f5ff4551f5b697f0de15bda740b5->enter($__internal_e75734fbd3df7a6abb85502906a404d6b895f5ff4551f5b697f0de15bda740b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d70f30e724f73f72efecdb3a93719ca384f7bddd9fb075b7a3542e7eecaec273->leave($__internal_d70f30e724f73f72efecdb3a93719ca384f7bddd9fb075b7a3542e7eecaec273_prof);

        
        $__internal_e75734fbd3df7a6abb85502906a404d6b895f5ff4551f5b697f0de15bda740b5->leave($__internal_e75734fbd3df7a6abb85502906a404d6b895f5ff4551f5b697f0de15bda740b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fbd7cf1b95cd1ec62619a8aac6d5b8ca7a4b0fb7bc6fe477fab62b187fa6781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbd7cf1b95cd1ec62619a8aac6d5b8ca7a4b0fb7bc6fe477fab62b187fa6781->enter($__internal_2fbd7cf1b95cd1ec62619a8aac6d5b8ca7a4b0fb7bc6fe477fab62b187fa6781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d34675ae9483e07217426a82018eae3f3c7c60c2e698605f11c7d36eac81f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34675ae9483e07217426a82018eae3f3c7c60c2e698605f11c7d36eac81f81b->enter($__internal_d34675ae9483e07217426a82018eae3f3c7c60c2e698605f11c7d36eac81f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d34675ae9483e07217426a82018eae3f3c7c60c2e698605f11c7d36eac81f81b->leave($__internal_d34675ae9483e07217426a82018eae3f3c7c60c2e698605f11c7d36eac81f81b_prof);

        
        $__internal_2fbd7cf1b95cd1ec62619a8aac6d5b8ca7a4b0fb7bc6fe477fab62b187fa6781->leave($__internal_2fbd7cf1b95cd1ec62619a8aac6d5b8ca7a4b0fb7bc6fe477fab62b187fa6781_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_061e7bcfdd93cc10e05ed1e557c5655dfd05a5216fae02e60df8809478965aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061e7bcfdd93cc10e05ed1e557c5655dfd05a5216fae02e60df8809478965aae->enter($__internal_061e7bcfdd93cc10e05ed1e557c5655dfd05a5216fae02e60df8809478965aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e1bda40a52717878f5c91a0ac6c702efc59c0bc3c61d722edcb36c778cc39c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1bda40a52717878f5c91a0ac6c702efc59c0bc3c61d722edcb36c778cc39c5->enter($__internal_5e1bda40a52717878f5c91a0ac6c702efc59c0bc3c61d722edcb36c778cc39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5e1bda40a52717878f5c91a0ac6c702efc59c0bc3c61d722edcb36c778cc39c5->leave($__internal_5e1bda40a52717878f5c91a0ac6c702efc59c0bc3c61d722edcb36c778cc39c5_prof);

        
        $__internal_061e7bcfdd93cc10e05ed1e557c5655dfd05a5216fae02e60df8809478965aae->leave($__internal_061e7bcfdd93cc10e05ed1e557c5655dfd05a5216fae02e60df8809478965aae_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d3e1cb045c3b5a4c71422262e9f16d7a5fda0e31d686829d06874db5136803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d3e1cb045c3b5a4c71422262e9f16d7a5fda0e31d686829d06874db5136803->enter($__internal_50d3e1cb045c3b5a4c71422262e9f16d7a5fda0e31d686829d06874db5136803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7b69bef2912cc39e3b6902952370b6b893e13d71bab3ad828bcb671144f6e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b69bef2912cc39e3b6902952370b6b893e13d71bab3ad828bcb671144f6e3f->enter($__internal_d7b69bef2912cc39e3b6902952370b6b893e13d71bab3ad828bcb671144f6e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7b69bef2912cc39e3b6902952370b6b893e13d71bab3ad828bcb671144f6e3f->leave($__internal_d7b69bef2912cc39e3b6902952370b6b893e13d71bab3ad828bcb671144f6e3f_prof);

        
        $__internal_50d3e1cb045c3b5a4c71422262e9f16d7a5fda0e31d686829d06874db5136803->leave($__internal_50d3e1cb045c3b5a4c71422262e9f16d7a5fda0e31d686829d06874db5136803_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
