<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_db10b92bddae864ac6d4687ef86bc0cb109a980a9954a65a5682b51c33e65fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_e8e0e583e257a8a6ec571a3b7cf431fb7d039e5924a07ffdc73ae5c7dd13a246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e0e583e257a8a6ec571a3b7cf431fb7d039e5924a07ffdc73ae5c7dd13a246->enter($__internal_e8e0e583e257a8a6ec571a3b7cf431fb7d039e5924a07ffdc73ae5c7dd13a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_a0ad3eb207692e3bc92d9233e48892614af8082fe4fe537e593987196b2440ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ad3eb207692e3bc92d9233e48892614af8082fe4fe537e593987196b2440ee->enter($__internal_a0ad3eb207692e3bc92d9233e48892614af8082fe4fe537e593987196b2440ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e0e583e257a8a6ec571a3b7cf431fb7d039e5924a07ffdc73ae5c7dd13a246->leave($__internal_e8e0e583e257a8a6ec571a3b7cf431fb7d039e5924a07ffdc73ae5c7dd13a246_prof);

        
        $__internal_a0ad3eb207692e3bc92d9233e48892614af8082fe4fe537e593987196b2440ee->leave($__internal_a0ad3eb207692e3bc92d9233e48892614af8082fe4fe537e593987196b2440ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_821909a9261eb67a70a2cc3358cf741c8d8a1789fe4a167fb3814d9046a260be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821909a9261eb67a70a2cc3358cf741c8d8a1789fe4a167fb3814d9046a260be->enter($__internal_821909a9261eb67a70a2cc3358cf741c8d8a1789fe4a167fb3814d9046a260be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05be552cf15bb96299291367dff6c6fcfae1b3d32314de01582a3ed3ba4d02e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05be552cf15bb96299291367dff6c6fcfae1b3d32314de01582a3ed3ba4d02e6->enter($__internal_05be552cf15bb96299291367dff6c6fcfae1b3d32314de01582a3ed3ba4d02e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05be552cf15bb96299291367dff6c6fcfae1b3d32314de01582a3ed3ba4d02e6->leave($__internal_05be552cf15bb96299291367dff6c6fcfae1b3d32314de01582a3ed3ba4d02e6_prof);

        
        $__internal_821909a9261eb67a70a2cc3358cf741c8d8a1789fe4a167fb3814d9046a260be->leave($__internal_821909a9261eb67a70a2cc3358cf741c8d8a1789fe4a167fb3814d9046a260be_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_53f04a520d8f2eeaae3697b0be86891bbc625d11fb51cf399b8a237bbace407c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f04a520d8f2eeaae3697b0be86891bbc625d11fb51cf399b8a237bbace407c->enter($__internal_53f04a520d8f2eeaae3697b0be86891bbc625d11fb51cf399b8a237bbace407c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_520d5eae527e2e25266d61bf1552703167c4e9902dbace1e282221c6ca5626ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520d5eae527e2e25266d61bf1552703167c4e9902dbace1e282221c6ca5626ab->enter($__internal_520d5eae527e2e25266d61bf1552703167c4e9902dbace1e282221c6ca5626ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>Liste des annonces</h2>

\t<ul>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 14, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<li>Pas (encore !) d'annonces</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</ul>

";
        
        $__internal_520d5eae527e2e25266d61bf1552703167c4e9902dbace1e282221c6ca5626ab->leave($__internal_520d5eae527e2e25266d61bf1552703167c4e9902dbace1e282221c6ca5626ab_prof);

        
        $__internal_53f04a520d8f2eeaae3697b0be86891bbc625d11fb51cf399b8a237bbace407c->leave($__internal_53f04a520d8f2eeaae3697b0be86891bbc625d11fb51cf399b8a237bbace407c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
\tAccueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

\t<h2>Liste des annonces</h2>

\t<ul>
\t\t{% for advert in listAdverts %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
\t\t\t\t\t{{ advert.title }}
\t\t\t\t</a>
\t\t\t\tpar {{ advert.author }},
\t\t\t\tle {{ advert.date|date('d/m/Y') }}
\t\t\t</li>
\t\t{% else %}
\t\t\t<li>Pas (encore !) d'annonces</li>
\t\t{% endfor %}
\t</ul>

{% endblock %}
", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
