<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_c208736283a87affaddef1a75fe17d29cddc8722bc0cbe8047fe5a6b5f84a499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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
        $__internal_2b2b8ef848b4a67fe680dc39c90318f9c2ae9a358386e8e8499a36420c559f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2b8ef848b4a67fe680dc39c90318f9c2ae9a358386e8e8499a36420c559f89->enter($__internal_2b2b8ef848b4a67fe680dc39c90318f9c2ae9a358386e8e8499a36420c559f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2b8ef848b4a67fe680dc39c90318f9c2ae9a358386e8e8499a36420c559f89->leave($__internal_2b2b8ef848b4a67fe680dc39c90318f9c2ae9a358386e8e8499a36420c559f89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f9fde6bf8db761a70fcd9a613f2f00adfaf2c49acb35265f58d8d5fc3f5485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9fde6bf8db761a70fcd9a613f2f00adfaf2c49acb35265f58d8d5fc3f5485b->enter($__internal_4f9fde6bf8db761a70fcd9a613f2f00adfaf2c49acb35265f58d8d5fc3f5485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f9fde6bf8db761a70fcd9a613f2f00adfaf2c49acb35265f58d8d5fc3f5485b->leave($__internal_4f9fde6bf8db761a70fcd9a613f2f00adfaf2c49acb35265f58d8d5fc3f5485b_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48a87eb8698170973f3a07e34cbf598e57378dd313222d5339099de40ee81a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a87eb8698170973f3a07e34cbf598e57378dd313222d5339099de40ee81a7d->enter($__internal_48a87eb8698170973f3a07e34cbf598e57378dd313222d5339099de40ee81a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "\t<h3>Les annonces</h3>
\t<ul class=\"nav nav-pills nav-stacked\">
\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t</ul>
";
        
        $__internal_48a87eb8698170973f3a07e34cbf598e57378dd313222d5339099de40ee81a7d->leave($__internal_48a87eb8698170973f3a07e34cbf598e57378dd313222d5339099de40ee81a7d_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_3232358d9ab9aa1259f2e3f32eecbac9d991b31577516d3309e7989d4471caf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3232358d9ab9aa1259f2e3f32eecbac9d991b31577516d3309e7989d4471caf7->enter($__internal_3232358d9ab9aa1259f2e3f32eecbac9d991b31577516d3309e7989d4471caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
\t";
        // line 21
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 26
        echo "\t";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 28
        echo "
";
        
        $__internal_3232358d9ab9aa1259f2e3f32eecbac9d991b31577516d3309e7989d4471caf7->leave($__internal_3232358d9ab9aa1259f2e3f32eecbac9d991b31577516d3309e7989d4471caf7_prof);

    }

    // line 26
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3afec05a336ca57d22fcbb08deec9dd64b37172c9bcca1ab8b3b409a06371b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afec05a336ca57d22fcbb08deec9dd64b37172c9bcca1ab8b3b409a06371b9b->enter($__internal_3afec05a336ca57d22fcbb08deec9dd64b37172c9bcca1ab8b3b409a06371b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 27
        echo "\t";
        
        $__internal_3afec05a336ca57d22fcbb08deec9dd64b37172c9bcca1ab8b3b409a06371b9b->leave($__internal_3afec05a336ca57d22fcbb08deec9dd64b37172c9bcca1ab8b3b409a06371b9b_prof);

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
        return array (  109 => 27,  103 => 26,  95 => 28,  92 => 26,  86 => 21,  83 => 19,  77 => 18,  67 => 14,  63 => 13,  59 => 11,  53 => 10,  43 => 6,  37 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}


{% block menu %}
\t<h3>Les annonces</h3>
\t<ul class=\"nav nav-pills nav-stacked\">
\t\t<li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
\t\t<li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
\t</ul>
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
