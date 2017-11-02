<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_baa7cbb9e21bc8ef3aeaa5a420b6d5fc8519a6d1f99543ad7a4203e6cca920d4 extends Twig_Template
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
        $__internal_98ca006387ca965204e4a99ccdb9edcd99239c3b71b688614ec0d055eb668ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ca006387ca965204e4a99ccdb9edcd99239c3b71b688614ec0d055eb668ca2->enter($__internal_98ca006387ca965204e4a99ccdb9edcd99239c3b71b688614ec0d055eb668ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_8dc95979bf5192a4bf44d34d7acb99e36c5de485807f9cd819d1512a7da46ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc95979bf5192a4bf44d34d7acb99e36c5de485807f9cd819d1512a7da46ff2->enter($__internal_8dc95979bf5192a4bf44d34d7acb99e36c5de485807f9cd819d1512a7da46ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98ca006387ca965204e4a99ccdb9edcd99239c3b71b688614ec0d055eb668ca2->leave($__internal_98ca006387ca965204e4a99ccdb9edcd99239c3b71b688614ec0d055eb668ca2_prof);

        
        $__internal_8dc95979bf5192a4bf44d34d7acb99e36c5de485807f9cd819d1512a7da46ff2->leave($__internal_8dc95979bf5192a4bf44d34d7acb99e36c5de485807f9cd819d1512a7da46ff2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ef666cbc7e08b575d459855ae63a6f3eb4ed301618acaf18259e9e3d659e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ef666cbc7e08b575d459855ae63a6f3eb4ed301618acaf18259e9e3d659e1c->enter($__internal_10ef666cbc7e08b575d459855ae63a6f3eb4ed301618acaf18259e9e3d659e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c51dac2adf7b82bcb6ed7a3e6dd20ddcea508af45b0751187e50d7aca4a9a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c51dac2adf7b82bcb6ed7a3e6dd20ddcea508af45b0751187e50d7aca4a9a23->enter($__internal_4c51dac2adf7b82bcb6ed7a3e6dd20ddcea508af45b0751187e50d7aca4a9a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c51dac2adf7b82bcb6ed7a3e6dd20ddcea508af45b0751187e50d7aca4a9a23->leave($__internal_4c51dac2adf7b82bcb6ed7a3e6dd20ddcea508af45b0751187e50d7aca4a9a23_prof);

        
        $__internal_10ef666cbc7e08b575d459855ae63a6f3eb4ed301618acaf18259e9e3d659e1c->leave($__internal_10ef666cbc7e08b575d459855ae63a6f3eb4ed301618acaf18259e9e3d659e1c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7daae9573248b2d4d39834e3807ab4f46779de8a087856d4795879327d02b083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daae9573248b2d4d39834e3807ab4f46779de8a087856d4795879327d02b083->enter($__internal_7daae9573248b2d4d39834e3807ab4f46779de8a087856d4795879327d02b083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_b9f742badd67f10c6a0477c768d9d26dac2cf92362015beb4548ad25f7e2284a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f742badd67f10c6a0477c768d9d26dac2cf92362015beb4548ad25f7e2284a->enter($__internal_b9f742badd67f10c6a0477c768d9d26dac2cf92362015beb4548ad25f7e2284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>Liste des annonces</h2>

\t<ul>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
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
        
        $__internal_b9f742badd67f10c6a0477c768d9d26dac2cf92362015beb4548ad25f7e2284a->leave($__internal_b9f742badd67f10c6a0477c768d9d26dac2cf92362015beb4548ad25f7e2284a_prof);

        
        $__internal_7daae9573248b2d4d39834e3807ab4f46779de8a087856d4795879327d02b083->leave($__internal_7daae9573248b2d4d39834e3807ab4f46779de8a087856d4795879327d02b083_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
