<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
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
        $__internal_cea3a3883835a985067a22ef5c63065f23f11d2366a4082e707f10c141df7069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea3a3883835a985067a22ef5c63065f23f11d2366a4082e707f10c141df7069->enter($__internal_cea3a3883835a985067a22ef5c63065f23f11d2366a4082e707f10c141df7069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ee175d645b7973036f4c9c51e7fa87cea3cf76e4980994497474c38c299f84cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee175d645b7973036f4c9c51e7fa87cea3cf76e4980994497474c38c299f84cb->enter($__internal_ee175d645b7973036f4c9c51e7fa87cea3cf76e4980994497474c38c299f84cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_cea3a3883835a985067a22ef5c63065f23f11d2366a4082e707f10c141df7069->leave($__internal_cea3a3883835a985067a22ef5c63065f23f11d2366a4082e707f10c141df7069_prof);

        
        $__internal_ee175d645b7973036f4c9c51e7fa87cea3cf76e4980994497474c38c299f84cb->leave($__internal_ee175d645b7973036f4c9c51e7fa87cea3cf76e4980994497474c38c299f84cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f9ef0f94817575b988dc44b1d4eb6b87af460962560b2d318b1f42569e2e071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9ef0f94817575b988dc44b1d4eb6b87af460962560b2d318b1f42569e2e071->enter($__internal_9f9ef0f94817575b988dc44b1d4eb6b87af460962560b2d318b1f42569e2e071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02628b020ab52b6274bc44bc4632a15981bdd9f33c50a4cd571d23e98e37c0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02628b020ab52b6274bc44bc4632a15981bdd9f33c50a4cd571d23e98e37c0b1->enter($__internal_02628b020ab52b6274bc44bc4632a15981bdd9f33c50a4cd571d23e98e37c0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_02628b020ab52b6274bc44bc4632a15981bdd9f33c50a4cd571d23e98e37c0b1->leave($__internal_02628b020ab52b6274bc44bc4632a15981bdd9f33c50a4cd571d23e98e37c0b1_prof);

        
        $__internal_9f9ef0f94817575b988dc44b1d4eb6b87af460962560b2d318b1f42569e2e071->leave($__internal_9f9ef0f94817575b988dc44b1d4eb6b87af460962560b2d318b1f42569e2e071_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1fa27e5d4fba397a344d59aa6b80dfdb29d1be32bb14a1301678581154c727b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fa27e5d4fba397a344d59aa6b80dfdb29d1be32bb14a1301678581154c727b->enter($__internal_e1fa27e5d4fba397a344d59aa6b80dfdb29d1be32bb14a1301678581154c727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e476c2facc9f3f76ac51db7ba4e87e0681d95e2203fa213888f6ecaa7e42cb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e476c2facc9f3f76ac51db7ba4e87e0681d95e2203fa213888f6ecaa7e42cb98->enter($__internal_e476c2facc9f3f76ac51db7ba4e87e0681d95e2203fa213888f6ecaa7e42cb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e476c2facc9f3f76ac51db7ba4e87e0681d95e2203fa213888f6ecaa7e42cb98->leave($__internal_e476c2facc9f3f76ac51db7ba4e87e0681d95e2203fa213888f6ecaa7e42cb98_prof);

        
        $__internal_e1fa27e5d4fba397a344d59aa6b80dfdb29d1be32bb14a1301678581154c727b->leave($__internal_e1fa27e5d4fba397a344d59aa6b80dfdb29d1be32bb14a1301678581154c727b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e086ab4d0fd8a97b84389a1457107c41445389bd56d2e0518b4bbcc8a2519ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e086ab4d0fd8a97b84389a1457107c41445389bd56d2e0518b4bbcc8a2519ae->enter($__internal_6e086ab4d0fd8a97b84389a1457107c41445389bd56d2e0518b4bbcc8a2519ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abec53a110154ce39490914df030c68617147dd41c303af676208a31a352ca22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abec53a110154ce39490914df030c68617147dd41c303af676208a31a352ca22->enter($__internal_abec53a110154ce39490914df030c68617147dd41c303af676208a31a352ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abec53a110154ce39490914df030c68617147dd41c303af676208a31a352ca22->leave($__internal_abec53a110154ce39490914df030c68617147dd41c303af676208a31a352ca22_prof);

        
        $__internal_6e086ab4d0fd8a97b84389a1457107c41445389bd56d2e0518b4bbcc8a2519ae->leave($__internal_6e086ab4d0fd8a97b84389a1457107c41445389bd56d2e0518b4bbcc8a2519ae_prof);

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
