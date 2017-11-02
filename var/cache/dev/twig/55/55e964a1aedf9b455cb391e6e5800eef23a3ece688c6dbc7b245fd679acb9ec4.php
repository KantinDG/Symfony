<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_fdaae0f8d38313f21dcf359ac7caae1f5e38c5d31ab1d1ed19f1a18315b56675 extends Twig_Template
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
        $__internal_73d7bf0195ee8e988cf5d6c819535bf083ca2de31ce7902227d921bf25d134f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d7bf0195ee8e988cf5d6c819535bf083ca2de31ce7902227d921bf25d134f5->enter($__internal_73d7bf0195ee8e988cf5d6c819535bf083ca2de31ce7902227d921bf25d134f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_ccba482a6afcacef4934f65df75705629cb6ce14514bdc499cbdeea6972c3760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccba482a6afcacef4934f65df75705629cb6ce14514bdc499cbdeea6972c3760->enter($__internal_ccba482a6afcacef4934f65df75705629cb6ce14514bdc499cbdeea6972c3760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_73d7bf0195ee8e988cf5d6c819535bf083ca2de31ce7902227d921bf25d134f5->leave($__internal_73d7bf0195ee8e988cf5d6c819535bf083ca2de31ce7902227d921bf25d134f5_prof);

        
        $__internal_ccba482a6afcacef4934f65df75705629cb6ce14514bdc499cbdeea6972c3760->leave($__internal_ccba482a6afcacef4934f65df75705629cb6ce14514bdc499cbdeea6972c3760_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_0298da1a46d1d31ef4246ae371ce72c2d5bacfdbfa98b9af02e312a3bcd016f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0298da1a46d1d31ef4246ae371ce72c2d5bacfdbfa98b9af02e312a3bcd016f5->enter($__internal_0298da1a46d1d31ef4246ae371ce72c2d5bacfdbfa98b9af02e312a3bcd016f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_346b8e9be8ed413d755eccb5070a3ff3bb4387aa700232170e0b258f6b367624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346b8e9be8ed413d755eccb5070a3ff3bb4387aa700232170e0b258f6b367624->enter($__internal_346b8e9be8ed413d755eccb5070a3ff3bb4387aa700232170e0b258f6b367624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_346b8e9be8ed413d755eccb5070a3ff3bb4387aa700232170e0b258f6b367624->leave($__internal_346b8e9be8ed413d755eccb5070a3ff3bb4387aa700232170e0b258f6b367624_prof);

        
        $__internal_0298da1a46d1d31ef4246ae371ce72c2d5bacfdbfa98b9af02e312a3bcd016f5->leave($__internal_0298da1a46d1d31ef4246ae371ce72c2d5bacfdbfa98b9af02e312a3bcd016f5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e9b09908ef427a33ca04aee7009c51c6d8ab6e6716edbc222ccdd5e9f37947a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9b09908ef427a33ca04aee7009c51c6d8ab6e6716edbc222ccdd5e9f37947a->enter($__internal_7e9b09908ef427a33ca04aee7009c51c6d8ab6e6716edbc222ccdd5e9f37947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8751d56cefa2f729cc92b7eff13d31bb5f9f62bea3635327f007f547a687f506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8751d56cefa2f729cc92b7eff13d31bb5f9f62bea3635327f007f547a687f506->enter($__internal_8751d56cefa2f729cc92b7eff13d31bb5f9f62bea3635327f007f547a687f506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_8751d56cefa2f729cc92b7eff13d31bb5f9f62bea3635327f007f547a687f506->leave($__internal_8751d56cefa2f729cc92b7eff13d31bb5f9f62bea3635327f007f547a687f506_prof);

        
        $__internal_7e9b09908ef427a33ca04aee7009c51c6d8ab6e6716edbc222ccdd5e9f37947a->leave($__internal_7e9b09908ef427a33ca04aee7009c51c6d8ab6e6716edbc222ccdd5e9f37947a_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_200bee866938bd029fe9b0013243c6016ba812a46fe9ae24c197af893d027114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200bee866938bd029fe9b0013243c6016ba812a46fe9ae24c197af893d027114->enter($__internal_200bee866938bd029fe9b0013243c6016ba812a46fe9ae24c197af893d027114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4b2d385e6f87d6350b51957920ea4ad1b0ac2c365ccd12e72a18af16bc031f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b2d385e6f87d6350b51957920ea4ad1b0ac2c365ccd12e72a18af16bc031f7->enter($__internal_a4b2d385e6f87d6350b51957920ea4ad1b0ac2c365ccd12e72a18af16bc031f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "\t\t\t\t";
        
        $__internal_a4b2d385e6f87d6350b51957920ea4ad1b0ac2c365ccd12e72a18af16bc031f7->leave($__internal_a4b2d385e6f87d6350b51957920ea4ad1b0ac2c365ccd12e72a18af16bc031f7_prof);

        
        $__internal_200bee866938bd029fe9b0013243c6016ba812a46fe9ae24c197af893d027114->leave($__internal_200bee866938bd029fe9b0013243c6016ba812a46fe9ae24c197af893d027114_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e57473b1f48c21fe6664a4bcc7ac757c434eab8fa4e6ad50408a60bd63c84613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57473b1f48c21fe6664a4bcc7ac757c434eab8fa4e6ad50408a60bd63c84613->enter($__internal_e57473b1f48c21fe6664a4bcc7ac757c434eab8fa4e6ad50408a60bd63c84613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_01dbccd9eb373d22d863d8080281ba5c49feab26581016937cc507390d0da3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dbccd9eb373d22d863d8080281ba5c49feab26581016937cc507390d0da3c8->enter($__internal_01dbccd9eb373d22d863d8080281ba5c49feab26581016937cc507390d0da3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_01dbccd9eb373d22d863d8080281ba5c49feab26581016937cc507390d0da3c8->leave($__internal_01dbccd9eb373d22d863d8080281ba5c49feab26581016937cc507390d0da3c8_prof);

        
        $__internal_e57473b1f48c21fe6664a4bcc7ac757c434eab8fa4e6ad50408a60bd63c84613->leave($__internal_e57473b1f48c21fe6664a4bcc7ac757c434eab8fa4e6ad50408a60bd63c84613_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 58,  185 => 57,  176 => 56,  166 => 45,  157 => 44,  146 => 13,  144 => 12,  135 => 11,  117 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# OC/CoreBundle/Resources/views/layout.html.twig #}

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
", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
