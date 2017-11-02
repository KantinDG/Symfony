<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_fd75da2d122d63b1440f58133d47e47fc83b6c391a5317dbc2385c0ffe92be5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0309c1c54a470fa0e0bfd5fb7ae95813ef1d02cd26221a447768543e8ccf33fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0309c1c54a470fa0e0bfd5fb7ae95813ef1d02cd26221a447768543e8ccf33fc->enter($__internal_0309c1c54a470fa0e0bfd5fb7ae95813ef1d02cd26221a447768543e8ccf33fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_0f95c1f5e90b1d9513746b927e20a0c80e6dc495f33f149b8533dd34d0e0b072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f95c1f5e90b1d9513746b927e20a0c80e6dc495f33f149b8533dd34d0e0b072->enter($__internal_0f95c1f5e90b1d9513746b927e20a0c80e6dc495f33f149b8533dd34d0e0b072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0309c1c54a470fa0e0bfd5fb7ae95813ef1d02cd26221a447768543e8ccf33fc->leave($__internal_0309c1c54a470fa0e0bfd5fb7ae95813ef1d02cd26221a447768543e8ccf33fc_prof);

        
        $__internal_0f95c1f5e90b1d9513746b927e20a0c80e6dc495f33f149b8533dd34d0e0b072->leave($__internal_0f95c1f5e90b1d9513746b927e20a0c80e6dc495f33f149b8533dd34d0e0b072_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de69625d9a0fb52324735f57a08246c8041d27929e409249c0516370548b4599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de69625d9a0fb52324735f57a08246c8041d27929e409249c0516370548b4599->enter($__internal_de69625d9a0fb52324735f57a08246c8041d27929e409249c0516370548b4599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2c65db90e257f766f30576dc156def9fd49712a1705c35a21d04af3bf32984f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c65db90e257f766f30576dc156def9fd49712a1705c35a21d04af3bf32984f->enter($__internal_a2c65db90e257f766f30576dc156def9fd49712a1705c35a21d04af3bf32984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2c65db90e257f766f30576dc156def9fd49712a1705c35a21d04af3bf32984f->leave($__internal_a2c65db90e257f766f30576dc156def9fd49712a1705c35a21d04af3bf32984f_prof);

        
        $__internal_de69625d9a0fb52324735f57a08246c8041d27929e409249c0516370548b4599->leave($__internal_de69625d9a0fb52324735f57a08246c8041d27929e409249c0516370548b4599_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_50416045f829730dd274679847ada0a555b1f0b14eb45ecaebc014d8dca598c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50416045f829730dd274679847ada0a555b1f0b14eb45ecaebc014d8dca598c2->enter($__internal_50416045f829730dd274679847ada0a555b1f0b14eb45ecaebc014d8dca598c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2746ed8e357fb33f8346ed390c87280f02a686f9d2cca8f95bd0f7163a019e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2746ed8e357fb33f8346ed390c87280f02a686f9d2cca8f95bd0f7163a019e94->enter($__internal_2746ed8e357fb33f8346ed390c87280f02a686f9d2cca8f95bd0f7163a019e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t";
        // line 12
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 17
        echo "\t";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_2746ed8e357fb33f8346ed390c87280f02a686f9d2cca8f95bd0f7163a019e94->leave($__internal_2746ed8e357fb33f8346ed390c87280f02a686f9d2cca8f95bd0f7163a019e94_prof);

        
        $__internal_50416045f829730dd274679847ada0a555b1f0b14eb45ecaebc014d8dca598c2->leave($__internal_50416045f829730dd274679847ada0a555b1f0b14eb45ecaebc014d8dca598c2_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_196eada4540bc13f6a2cf110318706e4379853852357d6b4066215a6d2897183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196eada4540bc13f6a2cf110318706e4379853852357d6b4066215a6d2897183->enter($__internal_196eada4540bc13f6a2cf110318706e4379853852357d6b4066215a6d2897183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6e9686e3f4822d242fcdd766892c2d96b782bc240a34442a16f84c24476a2964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9686e3f4822d242fcdd766892c2d96b782bc240a34442a16f84c24476a2964->enter($__internal_6e9686e3f4822d242fcdd766892c2d96b782bc240a34442a16f84c24476a2964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t";
        
        $__internal_6e9686e3f4822d242fcdd766892c2d96b782bc240a34442a16f84c24476a2964->leave($__internal_6e9686e3f4822d242fcdd766892c2d96b782bc240a34442a16f84c24476a2964_prof);

        
        $__internal_196eada4540bc13f6a2cf110318706e4379853852357d6b4066215a6d2897183->leave($__internal_196eada4540bc13f6a2cf110318706e4379853852357d6b4066215a6d2897183_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}

\t{# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
\t<h1>Annonces</h1>

\t<hr>

\t{# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
\t{% block ocplatform_body %}
\t{% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
