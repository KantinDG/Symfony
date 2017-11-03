<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_5a5890dfb00bc240e89bafe2c7bfe18d8b3f3dec1f4c120cba79084ede27febe extends Twig_Template
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
        $__internal_5c9e00790417b931e80ffe6615d51eb9dc91e7424e714cdfc87f149b55c1e379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9e00790417b931e80ffe6615d51eb9dc91e7424e714cdfc87f149b55c1e379->enter($__internal_5c9e00790417b931e80ffe6615d51eb9dc91e7424e714cdfc87f149b55c1e379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9e00790417b931e80ffe6615d51eb9dc91e7424e714cdfc87f149b55c1e379->leave($__internal_5c9e00790417b931e80ffe6615d51eb9dc91e7424e714cdfc87f149b55c1e379_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e3fea76827ece49417be5af1f8a6db1a1915ecd033b3f894f948b40e654a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e3fea76827ece49417be5af1f8a6db1a1915ecd033b3f894f948b40e654a39->enter($__internal_f3e3fea76827ece49417be5af1f8a6db1a1915ecd033b3f894f948b40e654a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f3e3fea76827ece49417be5af1f8a6db1a1915ecd033b3f894f948b40e654a39->leave($__internal_f3e3fea76827ece49417be5af1f8a6db1a1915ecd033b3f894f948b40e654a39_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8f8dde5e70abc585194b0c3ed7fcb2c1dcfc792e3477689df4f6f057459ec6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8dde5e70abc585194b0c3ed7fcb2c1dcfc792e3477689df4f6f057459ec6bc->enter($__internal_8f8dde5e70abc585194b0c3ed7fcb2c1dcfc792e3477689df4f6f057459ec6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_8f8dde5e70abc585194b0c3ed7fcb2c1dcfc792e3477689df4f6f057459ec6bc->leave($__internal_8f8dde5e70abc585194b0c3ed7fcb2c1dcfc792e3477689df4f6f057459ec6bc_prof);

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
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
