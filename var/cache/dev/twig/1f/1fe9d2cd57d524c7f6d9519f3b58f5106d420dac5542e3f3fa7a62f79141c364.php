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
        $__internal_29ddd104ccdf18a3dc14edc4310d5df6e3670a82dfce5451fecf399a0dc574f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ddd104ccdf18a3dc14edc4310d5df6e3670a82dfce5451fecf399a0dc574f8->enter($__internal_29ddd104ccdf18a3dc14edc4310d5df6e3670a82dfce5451fecf399a0dc574f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:home.html.twig"));

        $__internal_709ed6e4cf0fbed9d1495a66001c023b24e8f8a375ed3b54d698b83cc62fb7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709ed6e4cf0fbed9d1495a66001c023b24e8f8a375ed3b54d698b83cc62fb7a8->enter($__internal_709ed6e4cf0fbed9d1495a66001c023b24e8f8a375ed3b54d698b83cc62fb7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ddd104ccdf18a3dc14edc4310d5df6e3670a82dfce5451fecf399a0dc574f8->leave($__internal_29ddd104ccdf18a3dc14edc4310d5df6e3670a82dfce5451fecf399a0dc574f8_prof);

        
        $__internal_709ed6e4cf0fbed9d1495a66001c023b24e8f8a375ed3b54d698b83cc62fb7a8->leave($__internal_709ed6e4cf0fbed9d1495a66001c023b24e8f8a375ed3b54d698b83cc62fb7a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a59eca627a082f73277d9599589799800b193e0475e7a1dcfef329ac106dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a59eca627a082f73277d9599589799800b193e0475e7a1dcfef329ac106dbe5->enter($__internal_8a59eca627a082f73277d9599589799800b193e0475e7a1dcfef329ac106dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfc7316fb06e4684a90e92184b7e07a110c901b8299e33383e22523850743498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc7316fb06e4684a90e92184b7e07a110c901b8299e33383e22523850743498->enter($__internal_dfc7316fb06e4684a90e92184b7e07a110c901b8299e33383e22523850743498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dfc7316fb06e4684a90e92184b7e07a110c901b8299e33383e22523850743498->leave($__internal_dfc7316fb06e4684a90e92184b7e07a110c901b8299e33383e22523850743498_prof);

        
        $__internal_8a59eca627a082f73277d9599589799800b193e0475e7a1dcfef329ac106dbe5->leave($__internal_8a59eca627a082f73277d9599589799800b193e0475e7a1dcfef329ac106dbe5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c4f3de131194a91ce0ee08eca326ff5e79121e3c0242aa9527c3bcbbba280b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4f3de131194a91ce0ee08eca326ff5e79121e3c0242aa9527c3bcbbba280b0->enter($__internal_7c4f3de131194a91ce0ee08eca326ff5e79121e3c0242aa9527c3bcbbba280b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b94d58bf69c6aec78f4568fdedc331ccc522e3126158c80b2d19675fabeff014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94d58bf69c6aec78f4568fdedc331ccc522e3126158c80b2d19675fabeff014->enter($__internal_b94d58bf69c6aec78f4568fdedc331ccc522e3126158c80b2d19675fabeff014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t<h1> Accueil </h1>
\t<hr>
\t<h2>Dernières annonces</h2>
\t<ul>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 15, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 16
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t<li>Pas (encore) d'annonces ! </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</ul>

";
        
        $__internal_b94d58bf69c6aec78f4568fdedc331ccc522e3126158c80b2d19675fabeff014->leave($__internal_b94d58bf69c6aec78f4568fdedc331ccc522e3126158c80b2d19675fabeff014_prof);

        
        $__internal_7c4f3de131194a91ce0ee08eca326ff5e79121e3c0242aa9527c3bcbbba280b0->leave($__internal_7c4f3de131194a91ce0ee08eca326ff5e79121e3c0242aa9527c3bcbbba280b0_prof);

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
        return array (  115 => 26,  108 => 24,  100 => 21,  96 => 20,  91 => 18,  87 => 17,  84 => 16,  79 => 15,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
\t<ul>
\t\t{% for advert in listAdverts %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
\t\t\t\t\t{{ advert.title }}
\t\t\t\t</a>
\t\t\t\tpar {{ advert.author }},
\t\t\t\tle {{ advert.date|date('d/m/Y')}}
\t\t\t</li>
\t\t{% else %}
\t\t\t<li>Pas (encore) d'annonces ! </li>
\t\t{% endfor %}
\t</ul>

{% endblock %}
", "OCCoreBundle:Core:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/Core/home.html.twig");
    }
}
