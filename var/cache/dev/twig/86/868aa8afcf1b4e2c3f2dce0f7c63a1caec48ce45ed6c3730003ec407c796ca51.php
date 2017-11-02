<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_4eae2a27b940eccb964ed73d99b2908a8ddb5296232f540eb4049d6c250c5135 extends Twig_Template
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
        $__internal_aec431376650b3dc7835f5b2278e65a94b6eb596ac81759054257450f8c7ba69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec431376650b3dc7835f5b2278e65a94b6eb596ac81759054257450f8c7ba69->enter($__internal_aec431376650b3dc7835f5b2278e65a94b6eb596ac81759054257450f8c7ba69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_cde365f234c986c9d1232845e021f90902d466bc031f60b03af9e6671ad2cb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde365f234c986c9d1232845e021f90902d466bc031f60b03af9e6671ad2cb6b->enter($__internal_cde365f234c986c9d1232845e021f90902d466bc031f60b03af9e6671ad2cb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec431376650b3dc7835f5b2278e65a94b6eb596ac81759054257450f8c7ba69->leave($__internal_aec431376650b3dc7835f5b2278e65a94b6eb596ac81759054257450f8c7ba69_prof);

        
        $__internal_cde365f234c986c9d1232845e021f90902d466bc031f60b03af9e6671ad2cb6b->leave($__internal_cde365f234c986c9d1232845e021f90902d466bc031f60b03af9e6671ad2cb6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf2513cb138e4f6f90098c8d43f4f68ea11c6438b590f6902f71292226bd9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf2513cb138e4f6f90098c8d43f4f68ea11c6438b590f6902f71292226bd9bc->enter($__internal_7cf2513cb138e4f6f90098c8d43f4f68ea11c6438b590f6902f71292226bd9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87fc47ca77259c00924fdc912d24e05c74942461580ecb63cc322252ba1df758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fc47ca77259c00924fdc912d24e05c74942461580ecb63cc322252ba1df758->enter($__internal_87fc47ca77259c00924fdc912d24e05c74942461580ecb63cc322252ba1df758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tModifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_87fc47ca77259c00924fdc912d24e05c74942461580ecb63cc322252ba1df758->leave($__internal_87fc47ca77259c00924fdc912d24e05c74942461580ecb63cc322252ba1df758_prof);

        
        $__internal_7cf2513cb138e4f6f90098c8d43f4f68ea11c6438b590f6902f71292226bd9bc->leave($__internal_7cf2513cb138e4f6f90098c8d43f4f68ea11c6438b590f6902f71292226bd9bc_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_24d614cda87b425f7b2ec54f81e9c2833191e2330076e769914e378fccc9b4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d614cda87b425f7b2ec54f81e9c2833191e2330076e769914e378fccc9b4e7->enter($__internal_24d614cda87b425f7b2ec54f81e9c2833191e2330076e769914e378fccc9b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6ff93377008b1b364ebc9dc54c256c95798b5536df352ec72b30deeabc6fb545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff93377008b1b364ebc9dc54c256c95798b5536df352ec72b30deeabc6fb545->enter($__internal_6ff93377008b1b364ebc9dc54c256c95798b5536df352ec72b30deeabc6fb545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_6ff93377008b1b364ebc9dc54c256c95798b5536df352ec72b30deeabc6fb545->leave($__internal_6ff93377008b1b364ebc9dc54c256c95798b5536df352ec72b30deeabc6fb545_prof);

        
        $__internal_24d614cda87b425f7b2ec54f81e9c2833191e2330076e769914e378fccc9b4e7->leave($__internal_24d614cda87b425f7b2ec54f81e9c2833191e2330076e769914e378fccc9b4e7_prof);

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
