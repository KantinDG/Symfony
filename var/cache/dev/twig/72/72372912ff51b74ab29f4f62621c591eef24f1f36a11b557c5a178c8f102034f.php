<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_fd75da2d122d63b1440f58133d47e47fc83b6c391a5317dbc2385c0ffe92be5c extends Twig_Template
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
        $__internal_d2e0b1bac406ca166c8ca6e88314bfba4f4858ebb69676a9196c955f974e1419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e0b1bac406ca166c8ca6e88314bfba4f4858ebb69676a9196c955f974e1419->enter($__internal_d2e0b1bac406ca166c8ca6e88314bfba4f4858ebb69676a9196c955f974e1419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_a7f7751519edf0e3b400a0d25f92b5351adbfa4fb783e8b6df609247e7eb3104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f7751519edf0e3b400a0d25f92b5351adbfa4fb783e8b6df609247e7eb3104->enter($__internal_a7f7751519edf0e3b400a0d25f92b5351adbfa4fb783e8b6df609247e7eb3104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e0b1bac406ca166c8ca6e88314bfba4f4858ebb69676a9196c955f974e1419->leave($__internal_d2e0b1bac406ca166c8ca6e88314bfba4f4858ebb69676a9196c955f974e1419_prof);

        
        $__internal_a7f7751519edf0e3b400a0d25f92b5351adbfa4fb783e8b6df609247e7eb3104->leave($__internal_a7f7751519edf0e3b400a0d25f92b5351adbfa4fb783e8b6df609247e7eb3104_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4781612c576b0270db5e2f9f708caf216b803b19cea17c3585ff443bc2fc4b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4781612c576b0270db5e2f9f708caf216b803b19cea17c3585ff443bc2fc4b16->enter($__internal_4781612c576b0270db5e2f9f708caf216b803b19cea17c3585ff443bc2fc4b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2913c0df3b0c92bd7157077d964fffc8ca3f54892c9c894a175486802f81eb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2913c0df3b0c92bd7157077d964fffc8ca3f54892c9c894a175486802f81eb82->enter($__internal_2913c0df3b0c92bd7157077d964fffc8ca3f54892c9c894a175486802f81eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2913c0df3b0c92bd7157077d964fffc8ca3f54892c9c894a175486802f81eb82->leave($__internal_2913c0df3b0c92bd7157077d964fffc8ca3f54892c9c894a175486802f81eb82_prof);

        
        $__internal_4781612c576b0270db5e2f9f708caf216b803b19cea17c3585ff443bc2fc4b16->leave($__internal_4781612c576b0270db5e2f9f708caf216b803b19cea17c3585ff443bc2fc4b16_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35d4dd9fc6c987cd54d4a39dd602aa432471bfb3b1fbcc17372fa4474c66f098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d4dd9fc6c987cd54d4a39dd602aa432471bfb3b1fbcc17372fa4474c66f098->enter($__internal_35d4dd9fc6c987cd54d4a39dd602aa432471bfb3b1fbcc17372fa4474c66f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5755338001f40806ddabbd49633530915e5b921a40dc1ee152c6ff2814b07741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5755338001f40806ddabbd49633530915e5b921a40dc1ee152c6ff2814b07741->enter($__internal_5755338001f40806ddabbd49633530915e5b921a40dc1ee152c6ff2814b07741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5755338001f40806ddabbd49633530915e5b921a40dc1ee152c6ff2814b07741->leave($__internal_5755338001f40806ddabbd49633530915e5b921a40dc1ee152c6ff2814b07741_prof);

        
        $__internal_35d4dd9fc6c987cd54d4a39dd602aa432471bfb3b1fbcc17372fa4474c66f098->leave($__internal_35d4dd9fc6c987cd54d4a39dd602aa432471bfb3b1fbcc17372fa4474c66f098_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_49f45d47166fa2c2bc53cc21cd5a1ba6b937d83993601efa3c205e828f515ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f45d47166fa2c2bc53cc21cd5a1ba6b937d83993601efa3c205e828f515ae2->enter($__internal_49f45d47166fa2c2bc53cc21cd5a1ba6b937d83993601efa3c205e828f515ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c552872bce61058fec0bcc4e1875c10fd251bb9f182a471b5e370efc0e4b777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c552872bce61058fec0bcc4e1875c10fd251bb9f182a471b5e370efc0e4b777->enter($__internal_5c552872bce61058fec0bcc4e1875c10fd251bb9f182a471b5e370efc0e4b777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c552872bce61058fec0bcc4e1875c10fd251bb9f182a471b5e370efc0e4b777->leave($__internal_5c552872bce61058fec0bcc4e1875c10fd251bb9f182a471b5e370efc0e4b777_prof);

        
        $__internal_49f45d47166fa2c2bc53cc21cd5a1ba6b937d83993601efa3c205e828f515ae2->leave($__internal_49f45d47166fa2c2bc53cc21cd5a1ba6b937d83993601efa3c205e828f515ae2_prof);

    }

    // line 26
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e389d4bfd35a91a30dd4fab4e6c0d3146a29604c25343bb92cc86616f5684f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e389d4bfd35a91a30dd4fab4e6c0d3146a29604c25343bb92cc86616f5684f3e->enter($__internal_e389d4bfd35a91a30dd4fab4e6c0d3146a29604c25343bb92cc86616f5684f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_54b525135ced7b63afc1878002e658eb6baa762beff70eb1e6db6a476f5ecfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b525135ced7b63afc1878002e658eb6baa762beff70eb1e6db6a476f5ecfb8->enter($__internal_54b525135ced7b63afc1878002e658eb6baa762beff70eb1e6db6a476f5ecfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 27
        echo "\t";
        
        $__internal_54b525135ced7b63afc1878002e658eb6baa762beff70eb1e6db6a476f5ecfb8->leave($__internal_54b525135ced7b63afc1878002e658eb6baa762beff70eb1e6db6a476f5ecfb8_prof);

        
        $__internal_e389d4bfd35a91a30dd4fab4e6c0d3146a29604c25343bb92cc86616f5684f3e->leave($__internal_e389d4bfd35a91a30dd4fab4e6c0d3146a29604c25343bb92cc86616f5684f3e_prof);

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
        return array (  136 => 27,  127 => 26,  116 => 28,  113 => 26,  107 => 21,  104 => 19,  95 => 18,  82 => 14,  78 => 13,  74 => 11,  65 => 10,  52 => 6,  43 => 5,  11 => 3,);
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
