<?php

/* OCCoreBundle:Core:home.html.twig */
class __TwigTemplate_89af0d118ec5f96e6f2b7e84a23b56e64ad8cd74b53e8a629988ac66e48b900a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:home.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25999c770b65ffd6c56b6702b96d9a460796fed9f30a605bebfa09540e53e232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25999c770b65ffd6c56b6702b96d9a460796fed9f30a605bebfa09540e53e232->enter($__internal_25999c770b65ffd6c56b6702b96d9a460796fed9f30a605bebfa09540e53e232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:home.html.twig"));

        $__internal_b1a028f0acd9ffd13e792668b04815e8735722a4d31383682179d694a440aec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a028f0acd9ffd13e792668b04815e8735722a4d31383682179d694a440aec6->enter($__internal_b1a028f0acd9ffd13e792668b04815e8735722a4d31383682179d694a440aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25999c770b65ffd6c56b6702b96d9a460796fed9f30a605bebfa09540e53e232->leave($__internal_25999c770b65ffd6c56b6702b96d9a460796fed9f30a605bebfa09540e53e232_prof);

        
        $__internal_b1a028f0acd9ffd13e792668b04815e8735722a4d31383682179d694a440aec6->leave($__internal_b1a028f0acd9ffd13e792668b04815e8735722a4d31383682179d694a440aec6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80de462b47fb1d4db5dd5c4006005884dd9dbdd3df0bb3337b64b1880472b662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80de462b47fb1d4db5dd5c4006005884dd9dbdd3df0bb3337b64b1880472b662->enter($__internal_80de462b47fb1d4db5dd5c4006005884dd9dbdd3df0bb3337b64b1880472b662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a82867db30d8a736100a946b22c05c3ca4a9fdac77a522d5b304de145b14624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82867db30d8a736100a946b22c05c3ca4a9fdac77a522d5b304de145b14624d->enter($__internal_a82867db30d8a736100a946b22c05c3ca4a9fdac77a522d5b304de145b14624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a82867db30d8a736100a946b22c05c3ca4a9fdac77a522d5b304de145b14624d->leave($__internal_a82867db30d8a736100a946b22c05c3ca4a9fdac77a522d5b304de145b14624d_prof);

        
        $__internal_80de462b47fb1d4db5dd5c4006005884dd9dbdd3df0bb3337b64b1880472b662->leave($__internal_80de462b47fb1d4db5dd5c4006005884dd9dbdd3df0bb3337b64b1880472b662_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e313d51fe01c136a28c57709c0ad10f46eb3c07f94705eec2c6494942da583fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e313d51fe01c136a28c57709c0ad10f46eb3c07f94705eec2c6494942da583fe->enter($__internal_e313d51fe01c136a28c57709c0ad10f46eb3c07f94705eec2c6494942da583fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51842b256e071dd636d8b82cc3c26193bfed59661c3862df852413269b1f5e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51842b256e071dd636d8b82cc3c26193bfed59661c3862df852413269b1f5e4f->enter($__internal_51842b256e071dd636d8b82cc3c26193bfed59661c3862df852413269b1f5e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t<h1> Accueil </h1>
\t<hr>
\t<h2>Dernières annonces</h2>
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

";
        
        $__internal_51842b256e071dd636d8b82cc3c26193bfed59661c3862df852413269b1f5e4f->leave($__internal_51842b256e071dd636d8b82cc3c26193bfed59661c3862df852413269b1f5e4f_prof);

        
        $__internal_e313d51fe01c136a28c57709c0ad10f46eb3c07f94705eec2c6494942da583fe->leave($__internal_e313d51fe01c136a28c57709c0ad10f46eb3c07f94705eec2c6494942da583fe_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/Core/Ressources/view/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}

\t<h1> Accueil </h1>
\t<hr>
\t<h2>Dernières annonces</h2>
\t{{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}

{% endblock %}
", "OCCoreBundle:Core:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/Core/home.html.twig");
    }
}
