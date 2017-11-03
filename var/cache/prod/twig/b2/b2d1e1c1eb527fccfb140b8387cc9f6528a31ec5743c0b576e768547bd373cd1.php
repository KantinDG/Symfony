<?php

/* OCCoreBundle:Core:home.html.twig */
class __TwigTemplate_11cb4e512ef9b6968ab734d90ff0d80c3d105116e2c2c6c6f43d2ddece1bcdbe extends Twig_Template
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
        $__internal_6e39583bf86d4e8d4d7e56654793d4dae7432c771705b909853966a8d9dab98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e39583bf86d4e8d4d7e56654793d4dae7432c771705b909853966a8d9dab98d->enter($__internal_6e39583bf86d4e8d4d7e56654793d4dae7432c771705b909853966a8d9dab98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e39583bf86d4e8d4d7e56654793d4dae7432c771705b909853966a8d9dab98d->leave($__internal_6e39583bf86d4e8d4d7e56654793d4dae7432c771705b909853966a8d9dab98d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca58a07ac492b26863c3eca7202abf44f4b8ce34558c6cd684bc7c0676cb87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca58a07ac492b26863c3eca7202abf44f4b8ce34558c6cd684bc7c0676cb87d->enter($__internal_bca58a07ac492b26863c3eca7202abf44f4b8ce34558c6cd684bc7c0676cb87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bca58a07ac492b26863c3eca7202abf44f4b8ce34558c6cd684bc7c0676cb87d->leave($__internal_bca58a07ac492b26863c3eca7202abf44f4b8ce34558c6cd684bc7c0676cb87d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb116dbb549afaa2aa59fe211afb1fcc44ce479dea5220df19bff8214dddb81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb116dbb549afaa2aa59fe211afb1fcc44ce479dea5220df19bff8214dddb81f->enter($__internal_cb116dbb549afaa2aa59fe211afb1fcc44ce479dea5220df19bff8214dddb81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb116dbb549afaa2aa59fe211afb1fcc44ce479dea5220df19bff8214dddb81f->leave($__internal_cb116dbb549afaa2aa59fe211afb1fcc44ce479dea5220df19bff8214dddb81f_prof);

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
        return array (  100 => 26,  93 => 24,  85 => 21,  81 => 20,  76 => 18,  72 => 17,  69 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
