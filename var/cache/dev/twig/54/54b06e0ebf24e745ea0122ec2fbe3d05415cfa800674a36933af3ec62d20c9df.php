<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_0dca29a564970e3387430907d4a8b442b8f76bf5afe8fc8e159c152048b437f2 extends Twig_Template
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
        $__internal_a8201d058cfd07be34575a502475aa8a970ca2408c6d39e4ddeebbcb503712fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8201d058cfd07be34575a502475aa8a970ca2408c6d39e4ddeebbcb503712fa->enter($__internal_a8201d058cfd07be34575a502475aa8a970ca2408c6d39e4ddeebbcb503712fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_42801f3f892851f36b5d4bfe8115b7e879df0335430b99f13e25e0e0ea35c46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42801f3f892851f36b5d4bfe8115b7e879df0335430b99f13e25e0e0ea35c46d->enter($__internal_42801f3f892851f36b5d4bfe8115b7e879df0335430b99f13e25e0e0ea35c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8201d058cfd07be34575a502475aa8a970ca2408c6d39e4ddeebbcb503712fa->leave($__internal_a8201d058cfd07be34575a502475aa8a970ca2408c6d39e4ddeebbcb503712fa_prof);

        
        $__internal_42801f3f892851f36b5d4bfe8115b7e879df0335430b99f13e25e0e0ea35c46d->leave($__internal_42801f3f892851f36b5d4bfe8115b7e879df0335430b99f13e25e0e0ea35c46d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ae1a62146c7d2e120ecace8d11e288d66d5204c612034f5e29ea6233decb0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae1a62146c7d2e120ecace8d11e288d66d5204c612034f5e29ea6233decb0b6->enter($__internal_4ae1a62146c7d2e120ecace8d11e288d66d5204c612034f5e29ea6233decb0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5342fc9721c0b87d89087a39510094b4e53dde1ffbb346fdd46fbd416432bd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5342fc9721c0b87d89087a39510094b4e53dde1ffbb346fdd46fbd416432bd3f->enter($__internal_5342fc9721c0b87d89087a39510094b4e53dde1ffbb346fdd46fbd416432bd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5342fc9721c0b87d89087a39510094b4e53dde1ffbb346fdd46fbd416432bd3f->leave($__internal_5342fc9721c0b87d89087a39510094b4e53dde1ffbb346fdd46fbd416432bd3f_prof);

        
        $__internal_4ae1a62146c7d2e120ecace8d11e288d66d5204c612034f5e29ea6233decb0b6->leave($__internal_4ae1a62146c7d2e120ecace8d11e288d66d5204c612034f5e29ea6233decb0b6_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_72cab72417eb9fb417391a6dad72092fc74b42c3d87e61479d4121dd94e6eade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72cab72417eb9fb417391a6dad72092fc74b42c3d87e61479d4121dd94e6eade->enter($__internal_72cab72417eb9fb417391a6dad72092fc74b42c3d87e61479d4121dd94e6eade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_bf4f27c9b7b15f85a6fd1e4efe3f9647495659c469c3fb4a806d9779bcf51d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4f27c9b7b15f85a6fd1e4efe3f9647495659c469c3fb4a806d9779bcf51d4d->enter($__internal_bf4f27c9b7b15f85a6fd1e4efe3f9647495659c469c3fb4a806d9779bcf51d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_bf4f27c9b7b15f85a6fd1e4efe3f9647495659c469c3fb4a806d9779bcf51d4d->leave($__internal_bf4f27c9b7b15f85a6fd1e4efe3f9647495659c469c3fb4a806d9779bcf51d4d_prof);

        
        $__internal_72cab72417eb9fb417391a6dad72092fc74b42c3d87e61479d4121dd94e6eade->leave($__internal_72cab72417eb9fb417391a6dad72092fc74b42c3d87e61479d4121dd94e6eade_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
