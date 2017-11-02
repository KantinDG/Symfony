<?php

/* ::layout.html.twig */
class __TwigTemplate_64a3db86abc3a9e32a7f6a2661d0022391f693780d0e2218894ca28f58aa97f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d8538dd7529d17c588537703183ed91208779681f4c56b219f96f836c1dbf29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8538dd7529d17c588537703183ed91208779681f4c56b219f96f836c1dbf29->enter($__internal_4d8538dd7529d17c588537703183ed91208779681f4c56b219f96f836c1dbf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b11386894f9ac164a37849ce1d12f2da620ed0b936347915c2c15a792050b7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11386894f9ac164a37849ce1d12f2da620ed0b936347915c2c15a792050b7f0->enter($__internal_b11386894f9ac164a37849ce1d12f2da620ed0b936347915c2c15a792050b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony,
\t\t\t\tet construit grâce au MOOC OpenClassrooms et SensioLabs.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t\t\tParticiper au MOOC »
\t\t\t\t</a>
\t\t\t</p>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t\t</ul>

\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t\t<p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
\t\t</footer>
\t</div>

\t";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>
";
        
        $__internal_4d8538dd7529d17c588537703183ed91208779681f4c56b219f96f836c1dbf29->leave($__internal_4d8538dd7529d17c588537703183ed91208779681f4c56b219f96f836c1dbf29_prof);

        
        $__internal_b11386894f9ac164a37849ce1d12f2da620ed0b936347915c2c15a792050b7f0->leave($__internal_b11386894f9ac164a37849ce1d12f2da620ed0b936347915c2c15a792050b7f0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_84f23c8a87444cf707575226e9d02043bf1360c7c7a5662f2a4f4f61df63f5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f23c8a87444cf707575226e9d02043bf1360c7c7a5662f2a4f4f61df63f5f2->enter($__internal_84f23c8a87444cf707575226e9d02043bf1360c7c7a5662f2a4f4f61df63f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01fdaf766849514fedfcafab339b79ec8dc9c493c5fb7d07805b4b5d5a852d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fdaf766849514fedfcafab339b79ec8dc9c493c5fb7d07805b4b5d5a852d86->enter($__internal_01fdaf766849514fedfcafab339b79ec8dc9c493c5fb7d07805b4b5d5a852d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_01fdaf766849514fedfcafab339b79ec8dc9c493c5fb7d07805b4b5d5a852d86->leave($__internal_01fdaf766849514fedfcafab339b79ec8dc9c493c5fb7d07805b4b5d5a852d86_prof);

        
        $__internal_84f23c8a87444cf707575226e9d02043bf1360c7c7a5662f2a4f4f61df63f5f2->leave($__internal_84f23c8a87444cf707575226e9d02043bf1360c7c7a5662f2a4f4f61df63f5f2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25ea3e8fbde9a192ec1d3fe1f8b04452a1db573ef31dde5e76903ec6189e2619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ea3e8fbde9a192ec1d3fe1f8b04452a1db573ef31dde5e76903ec6189e2619->enter($__internal_25ea3e8fbde9a192ec1d3fe1f8b04452a1db573ef31dde5e76903ec6189e2619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bccf6ff35c342908a6bd2a9e988ae90c0436eecf2c07fd8dafe01ae81288c457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccf6ff35c342908a6bd2a9e988ae90c0436eecf2c07fd8dafe01ae81288c457->enter($__internal_bccf6ff35c342908a6bd2a9e988ae90c0436eecf2c07fd8dafe01ae81288c457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_bccf6ff35c342908a6bd2a9e988ae90c0436eecf2c07fd8dafe01ae81288c457->leave($__internal_bccf6ff35c342908a6bd2a9e988ae90c0436eecf2c07fd8dafe01ae81288c457_prof);

        
        $__internal_25ea3e8fbde9a192ec1d3fe1f8b04452a1db573ef31dde5e76903ec6189e2619->leave($__internal_25ea3e8fbde9a192ec1d3fe1f8b04452a1db573ef31dde5e76903ec6189e2619_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_304f3cabdf03d86677b25ecb7bdf6e9072e62995dd3370273539359882d9affc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304f3cabdf03d86677b25ecb7bdf6e9072e62995dd3370273539359882d9affc->enter($__internal_304f3cabdf03d86677b25ecb7bdf6e9072e62995dd3370273539359882d9affc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7aa2a066ee5c490cb92fe82525c59545ca91764d16c722aa878f7c2548e282d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aa2a066ee5c490cb92fe82525c59545ca91764d16c722aa878f7c2548e282d->enter($__internal_d7aa2a066ee5c490cb92fe82525c59545ca91764d16c722aa878f7c2548e282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "\t\t\t\t";
        
        $__internal_d7aa2a066ee5c490cb92fe82525c59545ca91764d16c722aa878f7c2548e282d->leave($__internal_d7aa2a066ee5c490cb92fe82525c59545ca91764d16c722aa878f7c2548e282d_prof);

        
        $__internal_304f3cabdf03d86677b25ecb7bdf6e9072e62995dd3370273539359882d9affc->leave($__internal_304f3cabdf03d86677b25ecb7bdf6e9072e62995dd3370273539359882d9affc_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71add22a491e1cbfe54c991bfa97ed061d53f3556b932c35932d2d990e373c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71add22a491e1cbfe54c991bfa97ed061d53f3556b932c35932d2d990e373c5e->enter($__internal_71add22a491e1cbfe54c991bfa97ed061d53f3556b932c35932d2d990e373c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53f7f11aab190c8f79d2f5d7c5ef734d7bc86b09ee0fabf251c3877aae4996a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f7f11aab190c8f79d2f5d7c5ef734d7bc86b09ee0fabf251c3877aae4996a5->enter($__internal_53f7f11aab190c8f79d2f5d7c5ef734d7bc86b09ee0fabf251c3877aae4996a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_53f7f11aab190c8f79d2f5d7c5ef734d7bc86b09ee0fabf251c3877aae4996a5->leave($__internal_53f7f11aab190c8f79d2f5d7c5ef734d7bc86b09ee0fabf251c3877aae4996a5_prof);

        
        $__internal_71add22a491e1cbfe54c991bfa97ed061d53f3556b932c35932d2d990e373c5e->leave($__internal_71add22a491e1cbfe54c991bfa97ed061d53f3556b932c35932d2d990e373c5e_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 58,  185 => 57,  176 => 56,  166 => 45,  157 => 44,  146 => 13,  144 => 12,  135 => 11,  117 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>{% block title %}OC Plateforme{% endblock %}</title>

\t{% block stylesheets %}
\t\t{# On charge le CSS de bootstrap depuis le site directement #}
\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t{% endblock %}
</head>

<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony,
\t\t\t\tet construit grâce au MOOC OpenClassrooms et SensioLabs.
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t\t\tParticiper au MOOC »
\t\t\t\t</a>
\t\t\t</p>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
\t\t\t\t</ul>

\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t{{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t{% block body %}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t\t<p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
\t\t</footer>
\t</div>

\t{% block javascripts %}
\t\t{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t{% endblock %}

</body>
</html>
", "::layout.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
