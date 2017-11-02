<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_6591290ee65607ef85bf549f8351a75c1c75457136ad3bcf0bbcd29fa32d2e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_6cef59809750dbc7bdda9b90373437727e20e425c4b8451875155288fb49d80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cef59809750dbc7bdda9b90373437727e20e425c4b8451875155288fb49d80f->enter($__internal_6cef59809750dbc7bdda9b90373437727e20e425c4b8451875155288fb49d80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_be084db7413b0a53d9bf79a3ad55eb6c8c8768dfcfd6bff05051fbcd0890cb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be084db7413b0a53d9bf79a3ad55eb6c8c8768dfcfd6bff05051fbcd0890cb9d->enter($__internal_be084db7413b0a53d9bf79a3ad55eb6c8c8768dfcfd6bff05051fbcd0890cb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cef59809750dbc7bdda9b90373437727e20e425c4b8451875155288fb49d80f->leave($__internal_6cef59809750dbc7bdda9b90373437727e20e425c4b8451875155288fb49d80f_prof);

        
        $__internal_be084db7413b0a53d9bf79a3ad55eb6c8c8768dfcfd6bff05051fbcd0890cb9d->leave($__internal_be084db7413b0a53d9bf79a3ad55eb6c8c8768dfcfd6bff05051fbcd0890cb9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_125cbec620cca7c35472e791f39f6ca3a8fdc81aaf288f85ca7ade544270c536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125cbec620cca7c35472e791f39f6ca3a8fdc81aaf288f85ca7ade544270c536->enter($__internal_125cbec620cca7c35472e791f39f6ca3a8fdc81aaf288f85ca7ade544270c536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6920f729ee8ac0d8295d684894a5d80a14eca11667a9aa56becebed0d92a125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6920f729ee8ac0d8295d684894a5d80a14eca11667a9aa56becebed0d92a125d->enter($__internal_6920f729ee8ac0d8295d684894a5d80a14eca11667a9aa56becebed0d92a125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6920f729ee8ac0d8295d684894a5d80a14eca11667a9aa56becebed0d92a125d->leave($__internal_6920f729ee8ac0d8295d684894a5d80a14eca11667a9aa56becebed0d92a125d_prof);

        
        $__internal_125cbec620cca7c35472e791f39f6ca3a8fdc81aaf288f85ca7ade544270c536->leave($__internal_125cbec620cca7c35472e791f39f6ca3a8fdc81aaf288f85ca7ade544270c536_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_68c0f9559d51dc35daf4b25696c983eaad3b94cb627b95f225dc76afe9a60e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c0f9559d51dc35daf4b25696c983eaad3b94cb627b95f225dc76afe9a60e93->enter($__internal_68c0f9559d51dc35daf4b25696c983eaad3b94cb627b95f225dc76afe9a60e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1044db5024bf71fe727e5c86d136a6cccca721b65f923036b28291148b90158b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1044db5024bf71fe727e5c86d136a6cccca721b65f923036b28291148b90158b->enter($__internal_1044db5024bf71fe727e5c86d136a6cccca721b65f923036b28291148b90158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>Modifier une annonce</h2>

\t";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit général de l'annonce déjà publiée.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_1044db5024bf71fe727e5c86d136a6cccca721b65f923036b28291148b90158b->leave($__internal_1044db5024bf71fe727e5c86d136a6cccca721b65f923036b28291148b90158b_prof);

        
        $__internal_68c0f9559d51dc35daf4b25696c983eaad3b94cb627b95f225dc76afe9a60e93->leave($__internal_68c0f9559d51dc35daf4b25696c983eaad3b94cb627b95f225dc76afe9a60e93_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
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
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
\tModifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

\t<h2>Modifier une annonce</h2>

\t{{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

\t<p>
\t\tVous éditez une annonce déjà existante, merci de ne pas changer
\t\tl'esprit général de l'annonce déjà publiée.
\t</p>

\t<p>
\t\t<a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
