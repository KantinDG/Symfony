<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_ae89466d1ffccca6d5b7ade5eadc52458eaac993c1ae5a8990ae29cdffb1b3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8effdf122c6e4bbc4757296ff2dd2582a764cba1437e8934a7e86e9ca6cce456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8effdf122c6e4bbc4757296ff2dd2582a764cba1437e8934a7e86e9ca6cce456->enter($__internal_8effdf122c6e4bbc4757296ff2dd2582a764cba1437e8934a7e86e9ca6cce456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_4c36a6fb9bd9d71f092f9678905a60768583c4f1406909247f8e246213f5fc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c36a6fb9bd9d71f092f9678905a60768583c4f1406909247f8e246213f5fc5d->enter($__internal_4c36a6fb9bd9d71f092f9678905a60768583c4f1406909247f8e246213f5fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8effdf122c6e4bbc4757296ff2dd2582a764cba1437e8934a7e86e9ca6cce456->leave($__internal_8effdf122c6e4bbc4757296ff2dd2582a764cba1437e8934a7e86e9ca6cce456_prof);

        
        $__internal_4c36a6fb9bd9d71f092f9678905a60768583c4f1406909247f8e246213f5fc5d->leave($__internal_4c36a6fb9bd9d71f092f9678905a60768583c4f1406909247f8e246213f5fc5d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ea5fdad5f036725eb66be6f0cb40d249967118ad1d0d74acd58acf102e2c0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea5fdad5f036725eb66be6f0cb40d249967118ad1d0d74acd58acf102e2c0fb->enter($__internal_0ea5fdad5f036725eb66be6f0cb40d249967118ad1d0d74acd58acf102e2c0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5ba70b751336174e4300ea18c9be03e3d5de929d31bea9aee79d337594332bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ba70b751336174e4300ea18c9be03e3d5de929d31bea9aee79d337594332bd->enter($__internal_c5ba70b751336174e4300ea18c9be03e3d5de929d31bea9aee79d337594332bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c5ba70b751336174e4300ea18c9be03e3d5de929d31bea9aee79d337594332bd->leave($__internal_c5ba70b751336174e4300ea18c9be03e3d5de929d31bea9aee79d337594332bd_prof);

        
        $__internal_0ea5fdad5f036725eb66be6f0cb40d249967118ad1d0d74acd58acf102e2c0fb->leave($__internal_0ea5fdad5f036725eb66be6f0cb40d249967118ad1d0d74acd58acf102e2c0fb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d9cb0cffd547ad9d6a424f015b909c3d5328dc000a6a6ae90e8e7961dcd2efdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cb0cffd547ad9d6a424f015b909c3d5328dc000a6a6ae90e8e7961dcd2efdc->enter($__internal_d9cb0cffd547ad9d6a424f015b909c3d5328dc000a6a6ae90e8e7961dcd2efdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_4d2fdc460a2d68ffdd51f55c5bd0e8b5d6e797ef24c703ec82b4f1b51d36bbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2fdc460a2d68ffdd51f55c5bd0e8b5d6e797ef24c703ec82b4f1b51d36bbbf->enter($__internal_4d2fdc460a2d68ffdd51f55c5bd0e8b5d6e797ef24c703ec82b4f1b51d36bbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>Ajouter une annonce</h2>

\t";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tAttention : cette annonce sera ajoutée directement
\t\tsur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil
\t\t</a>
\t</p>

";
        
        $__internal_4d2fdc460a2d68ffdd51f55c5bd0e8b5d6e797ef24c703ec82b4f1b51d36bbbf->leave($__internal_4d2fdc460a2d68ffdd51f55c5bd0e8b5d6e797ef24c703ec82b4f1b51d36bbbf_prof);

        
        $__internal_d9cb0cffd547ad9d6a424f015b909c3d5328dc000a6a6ae90e8e7961dcd2efdc->leave($__internal_d9cb0cffd547ad9d6a424f015b909c3d5328dc000a6a6ae90e8e7961dcd2efdc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
\tAjouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

\t<h2>Ajouter une annonce</h2>

\t{{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

\t<p>
\t\tAttention : cette annonce sera ajoutée directement
\t\tsur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil
\t\t</a>
\t</p>

{% endblock %}

", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
