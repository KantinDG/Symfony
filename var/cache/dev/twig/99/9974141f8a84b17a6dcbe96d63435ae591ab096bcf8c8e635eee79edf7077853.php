<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_31b2cfc546513b0312611267b9b0746bdaadb4ab2e097ecd0af8289c619a3c1c extends Twig_Template
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
        $__internal_08f09aba9b33a220880806df022e1a200eef1cc0d3d8df39ebd31d1f99701fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f09aba9b33a220880806df022e1a200eef1cc0d3d8df39ebd31d1f99701fc2->enter($__internal_08f09aba9b33a220880806df022e1a200eef1cc0d3d8df39ebd31d1f99701fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8a9c5d26dbc23bd9f9e53c67da60d88c60bd4d8cd9711cc04aa94fffcdadf481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9c5d26dbc23bd9f9e53c67da60d88c60bd4d8cd9711cc04aa94fffcdadf481->enter($__internal_8a9c5d26dbc23bd9f9e53c67da60d88c60bd4d8cd9711cc04aa94fffcdadf481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_08f09aba9b33a220880806df022e1a200eef1cc0d3d8df39ebd31d1f99701fc2->leave($__internal_08f09aba9b33a220880806df022e1a200eef1cc0d3d8df39ebd31d1f99701fc2_prof);

        
        $__internal_8a9c5d26dbc23bd9f9e53c67da60d88c60bd4d8cd9711cc04aa94fffcdadf481->leave($__internal_8a9c5d26dbc23bd9f9e53c67da60d88c60bd4d8cd9711cc04aa94fffcdadf481_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_726a07e55aee657ddd965124fb9142cf9e6dfed17dbce14978f8844a2ab6ba2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726a07e55aee657ddd965124fb9142cf9e6dfed17dbce14978f8844a2ab6ba2e->enter($__internal_726a07e55aee657ddd965124fb9142cf9e6dfed17dbce14978f8844a2ab6ba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ee09e40a0399fe4fe4a76282b8e2fb9a501ddf7b77d5cc7a1f7319e4ff28b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee09e40a0399fe4fe4a76282b8e2fb9a501ddf7b77d5cc7a1f7319e4ff28b78->enter($__internal_2ee09e40a0399fe4fe4a76282b8e2fb9a501ddf7b77d5cc7a1f7319e4ff28b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2ee09e40a0399fe4fe4a76282b8e2fb9a501ddf7b77d5cc7a1f7319e4ff28b78->leave($__internal_2ee09e40a0399fe4fe4a76282b8e2fb9a501ddf7b77d5cc7a1f7319e4ff28b78_prof);

        
        $__internal_726a07e55aee657ddd965124fb9142cf9e6dfed17dbce14978f8844a2ab6ba2e->leave($__internal_726a07e55aee657ddd965124fb9142cf9e6dfed17dbce14978f8844a2ab6ba2e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_92a5c9e86fa5dd4c8c322eb59a539f3b3db2482f128a35b3ed92f145b320a353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a5c9e86fa5dd4c8c322eb59a539f3b3db2482f128a35b3ed92f145b320a353->enter($__internal_92a5c9e86fa5dd4c8c322eb59a539f3b3db2482f128a35b3ed92f145b320a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3485891c53c1c9c74137e7891a314f63827df3dd73a006b9bb514c3ab224fa52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3485891c53c1c9c74137e7891a314f63827df3dd73a006b9bb514c3ab224fa52->enter($__internal_3485891c53c1c9c74137e7891a314f63827df3dd73a006b9bb514c3ab224fa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3485891c53c1c9c74137e7891a314f63827df3dd73a006b9bb514c3ab224fa52->leave($__internal_3485891c53c1c9c74137e7891a314f63827df3dd73a006b9bb514c3ab224fa52_prof);

        
        $__internal_92a5c9e86fa5dd4c8c322eb59a539f3b3db2482f128a35b3ed92f145b320a353->leave($__internal_92a5c9e86fa5dd4c8c322eb59a539f3b3db2482f128a35b3ed92f145b320a353_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fa6c502de0d80b7b9c2ff20ccbed6656a7acea0bee6db1c8d465603858eb9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa6c502de0d80b7b9c2ff20ccbed6656a7acea0bee6db1c8d465603858eb9d4->enter($__internal_2fa6c502de0d80b7b9c2ff20ccbed6656a7acea0bee6db1c8d465603858eb9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8047dbe94546614ea57a3639aa3e0b9d6126fc393bf0b5e0506db46a52822458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8047dbe94546614ea57a3639aa3e0b9d6126fc393bf0b5e0506db46a52822458->enter($__internal_8047dbe94546614ea57a3639aa3e0b9d6126fc393bf0b5e0506db46a52822458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8047dbe94546614ea57a3639aa3e0b9d6126fc393bf0b5e0506db46a52822458->leave($__internal_8047dbe94546614ea57a3639aa3e0b9d6126fc393bf0b5e0506db46a52822458_prof);

        
        $__internal_2fa6c502de0d80b7b9c2ff20ccbed6656a7acea0bee6db1c8d465603858eb9d4->leave($__internal_2fa6c502de0d80b7b9c2ff20ccbed6656a7acea0bee6db1c8d465603858eb9d4_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
