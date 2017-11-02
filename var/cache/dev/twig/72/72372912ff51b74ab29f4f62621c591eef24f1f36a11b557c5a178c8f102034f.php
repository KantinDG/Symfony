<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_fd75da2d122d63b1440f58133d47e47fc83b6c391a5317dbc2385c0ffe92be5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a200bb96167c61f45d6e5f682bce81e0920dc3d0554dbd980748cefd47dc5d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a200bb96167c61f45d6e5f682bce81e0920dc3d0554dbd980748cefd47dc5d25->enter($__internal_a200bb96167c61f45d6e5f682bce81e0920dc3d0554dbd980748cefd47dc5d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_59b6c8b2e7476e0aec0406ce3fe177382fab64fbd31ba4e7588e1762e89be5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b6c8b2e7476e0aec0406ce3fe177382fab64fbd31ba4e7588e1762e89be5ee->enter($__internal_59b6c8b2e7476e0aec0406ce3fe177382fab64fbd31ba4e7588e1762e89be5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a200bb96167c61f45d6e5f682bce81e0920dc3d0554dbd980748cefd47dc5d25->leave($__internal_a200bb96167c61f45d6e5f682bce81e0920dc3d0554dbd980748cefd47dc5d25_prof);

        
        $__internal_59b6c8b2e7476e0aec0406ce3fe177382fab64fbd31ba4e7588e1762e89be5ee->leave($__internal_59b6c8b2e7476e0aec0406ce3fe177382fab64fbd31ba4e7588e1762e89be5ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98611afea8bad34aede04cc94cdd3f82629659e24de36ab33511db138d3ae6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98611afea8bad34aede04cc94cdd3f82629659e24de36ab33511db138d3ae6c7->enter($__internal_98611afea8bad34aede04cc94cdd3f82629659e24de36ab33511db138d3ae6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b012199ba8ebabde9dce158dfd4a6e5d6bda32b2573b50e3ae4fe4aaf7943b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b012199ba8ebabde9dce158dfd4a6e5d6bda32b2573b50e3ae4fe4aaf7943b67->enter($__internal_b012199ba8ebabde9dce158dfd4a6e5d6bda32b2573b50e3ae4fe4aaf7943b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b012199ba8ebabde9dce158dfd4a6e5d6bda32b2573b50e3ae4fe4aaf7943b67->leave($__internal_b012199ba8ebabde9dce158dfd4a6e5d6bda32b2573b50e3ae4fe4aaf7943b67_prof);

        
        $__internal_98611afea8bad34aede04cc94cdd3f82629659e24de36ab33511db138d3ae6c7->leave($__internal_98611afea8bad34aede04cc94cdd3f82629659e24de36ab33511db138d3ae6c7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fde3513df815b0fb744870024d0c9ab8d7bfb8e0b525768e5cdbeda79675ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde3513df815b0fb744870024d0c9ab8d7bfb8e0b525768e5cdbeda79675ddc->enter($__internal_2fde3513df815b0fb744870024d0c9ab8d7bfb8e0b525768e5cdbeda79675ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95c8ea439242d3d455ec037d397d788b90d57c81691b84fddd800a458bf9eaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c8ea439242d3d455ec037d397d788b90d57c81691b84fddd800a458bf9eaf2->enter($__internal_95c8ea439242d3d455ec037d397d788b90d57c81691b84fddd800a458bf9eaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95c8ea439242d3d455ec037d397d788b90d57c81691b84fddd800a458bf9eaf2->leave($__internal_95c8ea439242d3d455ec037d397d788b90d57c81691b84fddd800a458bf9eaf2_prof);

        
        $__internal_2fde3513df815b0fb744870024d0c9ab8d7bfb8e0b525768e5cdbeda79675ddc->leave($__internal_2fde3513df815b0fb744870024d0c9ab8d7bfb8e0b525768e5cdbeda79675ddc_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_da46e45b8e0236dd536fc29cd60cca801d6dc80a787059d931ada49219ebc632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da46e45b8e0236dd536fc29cd60cca801d6dc80a787059d931ada49219ebc632->enter($__internal_da46e45b8e0236dd536fc29cd60cca801d6dc80a787059d931ada49219ebc632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1c103f329a7883cd423a5e14b3c9e7b6825dd32e92dc2e2a16a09e5bef74fbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c103f329a7883cd423a5e14b3c9e7b6825dd32e92dc2e2a16a09e5bef74fbcf->enter($__internal_1c103f329a7883cd423a5e14b3c9e7b6825dd32e92dc2e2a16a09e5bef74fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t";
        
        $__internal_1c103f329a7883cd423a5e14b3c9e7b6825dd32e92dc2e2a16a09e5bef74fbcf->leave($__internal_1c103f329a7883cd423a5e14b3c9e7b6825dd32e92dc2e2a16a09e5bef74fbcf_prof);

        
        $__internal_da46e45b8e0236dd536fc29cd60cca801d6dc80a787059d931ada49219ebc632->leave($__internal_da46e45b8e0236dd536fc29cd60cca801d6dc80a787059d931ada49219ebc632_prof);

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

{% extends \"::layout.html.twig\" %}

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
