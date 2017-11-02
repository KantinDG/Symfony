<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_b56b591733669a4e4e2743871e039d82f52547dd44a6e2d8570c2cf64f559521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_f8c1105c9c02423c50232424050ba5d24babc3b05da70d4aeb6452a38a390acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c1105c9c02423c50232424050ba5d24babc3b05da70d4aeb6452a38a390acb->enter($__internal_f8c1105c9c02423c50232424050ba5d24babc3b05da70d4aeb6452a38a390acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_cd366ae64333859e9df671376bd0e520150221bd26f42d8e9a2205506b8706b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd366ae64333859e9df671376bd0e520150221bd26f42d8e9a2205506b8706b7->enter($__internal_cd366ae64333859e9df671376bd0e520150221bd26f42d8e9a2205506b8706b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c1105c9c02423c50232424050ba5d24babc3b05da70d4aeb6452a38a390acb->leave($__internal_f8c1105c9c02423c50232424050ba5d24babc3b05da70d4aeb6452a38a390acb_prof);

        
        $__internal_cd366ae64333859e9df671376bd0e520150221bd26f42d8e9a2205506b8706b7->leave($__internal_cd366ae64333859e9df671376bd0e520150221bd26f42d8e9a2205506b8706b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f7c8d15fc936044c79c35242c2e20b8e72c6869d3eb1f09baf2114441966aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7c8d15fc936044c79c35242c2e20b8e72c6869d3eb1f09baf2114441966aaa->enter($__internal_5f7c8d15fc936044c79c35242c2e20b8e72c6869d3eb1f09baf2114441966aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56258000ba26fffa796ef2463d4749f6affad7fc80c17fb210025b7cc7633556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56258000ba26fffa796ef2463d4749f6affad7fc80c17fb210025b7cc7633556->enter($__internal_56258000ba26fffa796ef2463d4749f6affad7fc80c17fb210025b7cc7633556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56258000ba26fffa796ef2463d4749f6affad7fc80c17fb210025b7cc7633556->leave($__internal_56258000ba26fffa796ef2463d4749f6affad7fc80c17fb210025b7cc7633556_prof);

        
        $__internal_5f7c8d15fc936044c79c35242c2e20b8e72c6869d3eb1f09baf2114441966aaa->leave($__internal_5f7c8d15fc936044c79c35242c2e20b8e72c6869d3eb1f09baf2114441966aaa_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a49b24efcc4de21901bc853f9de260b30614574b752e510d6e5a422db6e7077f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49b24efcc4de21901bc853f9de260b30614574b752e510d6e5a422db6e7077f->enter($__internal_a49b24efcc4de21901bc853f9de260b30614574b752e510d6e5a422db6e7077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_abb8eff45944670a378f823396218018416ff7c5788064a13b54341261e3769c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb8eff45944670a378f823396218018416ff7c5788064a13b54341261e3769c->enter($__internal_abb8eff45944670a378f823396218018416ff7c5788064a13b54341261e3769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<p>
\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 23, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_abb8eff45944670a378f823396218018416ff7c5788064a13b54341261e3769c->leave($__internal_abb8eff45944670a378f823396218018416ff7c5788064a13b54341261e3769c_prof);

        
        $__internal_a49b24efcc4de21901bc853f9de260b30614574b752e510d6e5a422db6e7077f->leave($__internal_a49b24efcc4de21901bc853f9de260b30614574b752e510d6e5a422db6e7077f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  101 => 23,  94 => 19,  87 => 15,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
\tLecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

\t<h2>{{ advert.title }}</h2>
\t<i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

\t<div class=\"well\">
\t\t{{ advert.content }}
\t</div>

\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
