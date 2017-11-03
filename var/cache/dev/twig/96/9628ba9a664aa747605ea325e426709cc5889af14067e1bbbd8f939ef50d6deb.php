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
        $__internal_ec938c3b5fc8f39480040c6ee1cd65b6c5cac1a6ec32ed64a3a828d23eda659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec938c3b5fc8f39480040c6ee1cd65b6c5cac1a6ec32ed64a3a828d23eda659c->enter($__internal_ec938c3b5fc8f39480040c6ee1cd65b6c5cac1a6ec32ed64a3a828d23eda659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_758ea5e42f8c4bcf386e45d48a935524ea69648027ff66e8372d2fb6f5bf055f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758ea5e42f8c4bcf386e45d48a935524ea69648027ff66e8372d2fb6f5bf055f->enter($__internal_758ea5e42f8c4bcf386e45d48a935524ea69648027ff66e8372d2fb6f5bf055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec938c3b5fc8f39480040c6ee1cd65b6c5cac1a6ec32ed64a3a828d23eda659c->leave($__internal_ec938c3b5fc8f39480040c6ee1cd65b6c5cac1a6ec32ed64a3a828d23eda659c_prof);

        
        $__internal_758ea5e42f8c4bcf386e45d48a935524ea69648027ff66e8372d2fb6f5bf055f->leave($__internal_758ea5e42f8c4bcf386e45d48a935524ea69648027ff66e8372d2fb6f5bf055f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b29c9572c550fae907d6098b66bcfdf1da9fdfbf3a2c3ec332df056f607f2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b29c9572c550fae907d6098b66bcfdf1da9fdfbf3a2c3ec332df056f607f2fd->enter($__internal_1b29c9572c550fae907d6098b66bcfdf1da9fdfbf3a2c3ec332df056f607f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ed5df02914ee3b0c264f4c9ef3b301a61e1174b2661076295b5238eeb39d8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed5df02914ee3b0c264f4c9ef3b301a61e1174b2661076295b5238eeb39d8b4->enter($__internal_0ed5df02914ee3b0c264f4c9ef3b301a61e1174b2661076295b5238eeb39d8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ed5df02914ee3b0c264f4c9ef3b301a61e1174b2661076295b5238eeb39d8b4->leave($__internal_0ed5df02914ee3b0c264f4c9ef3b301a61e1174b2661076295b5238eeb39d8b4_prof);

        
        $__internal_1b29c9572c550fae907d6098b66bcfdf1da9fdfbf3a2c3ec332df056f607f2fd->leave($__internal_1b29c9572c550fae907d6098b66bcfdf1da9fdfbf3a2c3ec332df056f607f2fd_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9c0ea15c62200512424254921fa24b1d4222dabfd8a31817348e866e1695658d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0ea15c62200512424254921fa24b1d4222dabfd8a31817348e866e1695658d->enter($__internal_9c0ea15c62200512424254921fa24b1d4222dabfd8a31817348e866e1695658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_aebf4ddd37ddc4020635fda284eec543cb585888b220eadd143710a55219c7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebf4ddd37ddc4020635fda284eec543cb585888b220eadd143710a55219c7d1->enter($__internal_aebf4ddd37ddc4020635fda284eec543cb585888b220eadd143710a55219c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
\t";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "image", array()))) {
            // line 13
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
\t";
        }
        // line 15
        echo "\t<i>Par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<p>
\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 26, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_aebf4ddd37ddc4020635fda284eec543cb585888b220eadd143710a55219c7d1->leave($__internal_aebf4ddd37ddc4020635fda284eec543cb585888b220eadd143710a55219c7d1_prof);

        
        $__internal_9c0ea15c62200512424254921fa24b1d4222dabfd8a31817348e866e1695658d->leave($__internal_9c0ea15c62200512424254921fa24b1d4222dabfd8a31817348e866e1695658d_prof);

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
        return array (  119 => 30,  112 => 26,  105 => 22,  98 => 18,  89 => 15,  81 => 13,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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
\t{% if advert.image is not null %}
\t\t<img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
\t{% endif %}
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
