<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_bfa9d3e7304aa6df247f1767ad1ab12cf82e9bc49f811feaf85980e1c9860405 extends Twig_Template
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
        $__internal_be30de28fddc93b54409ce5ccada487d07904a151a36ad5862ad03e9517f313f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be30de28fddc93b54409ce5ccada487d07904a151a36ad5862ad03e9517f313f->enter($__internal_be30de28fddc93b54409ce5ccada487d07904a151a36ad5862ad03e9517f313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_a278c6651bfff364ac50f44d85147b124faa7c166fed049b51d31b2a59e38c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a278c6651bfff364ac50f44d85147b124faa7c166fed049b51d31b2a59e38c2b->enter($__internal_a278c6651bfff364ac50f44d85147b124faa7c166fed049b51d31b2a59e38c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be30de28fddc93b54409ce5ccada487d07904a151a36ad5862ad03e9517f313f->leave($__internal_be30de28fddc93b54409ce5ccada487d07904a151a36ad5862ad03e9517f313f_prof);

        
        $__internal_a278c6651bfff364ac50f44d85147b124faa7c166fed049b51d31b2a59e38c2b->leave($__internal_a278c6651bfff364ac50f44d85147b124faa7c166fed049b51d31b2a59e38c2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23b1bd3deea8f840226e8d2d64109a768c28d993ceb3a5f20cced16c6b710e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b1bd3deea8f840226e8d2d64109a768c28d993ceb3a5f20cced16c6b710e11->enter($__internal_23b1bd3deea8f840226e8d2d64109a768c28d993ceb3a5f20cced16c6b710e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86fbca79a2104499a506fe173c6d59712fa549e5fdaaf228150f5e1354f53666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fbca79a2104499a506fe173c6d59712fa549e5fdaaf228150f5e1354f53666->enter($__internal_86fbca79a2104499a506fe173c6d59712fa549e5fdaaf228150f5e1354f53666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_86fbca79a2104499a506fe173c6d59712fa549e5fdaaf228150f5e1354f53666->leave($__internal_86fbca79a2104499a506fe173c6d59712fa549e5fdaaf228150f5e1354f53666_prof);

        
        $__internal_23b1bd3deea8f840226e8d2d64109a768c28d993ceb3a5f20cced16c6b710e11->leave($__internal_23b1bd3deea8f840226e8d2d64109a768c28d993ceb3a5f20cced16c6b710e11_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_957b2e7af3e454119d8cfb503f9e51c9b473ba155861d70b6d6a32ff0346e730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957b2e7af3e454119d8cfb503f9e51c9b473ba155861d70b6d6a32ff0346e730->enter($__internal_957b2e7af3e454119d8cfb503f9e51c9b473ba155861d70b6d6a32ff0346e730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e11ff68048e2c366ee67975da4cb633e3c8ef57a5907617409ef00ec79c15193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11ff68048e2c366ee67975da4cb633e3c8ef57a5907617409ef00ec79c15193->enter($__internal_e11ff68048e2c366ee67975da4cb633e3c8ef57a5907617409ef00ec79c15193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_e11ff68048e2c366ee67975da4cb633e3c8ef57a5907617409ef00ec79c15193->leave($__internal_e11ff68048e2c366ee67975da4cb633e3c8ef57a5907617409ef00ec79c15193_prof);

        
        $__internal_957b2e7af3e454119d8cfb503f9e51c9b473ba155861d70b6d6a32ff0346e730->leave($__internal_957b2e7af3e454119d8cfb503f9e51c9b473ba155861d70b6d6a32ff0346e730_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
