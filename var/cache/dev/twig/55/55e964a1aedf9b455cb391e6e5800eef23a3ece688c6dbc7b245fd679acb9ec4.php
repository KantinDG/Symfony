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
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dea9709dd98f513f71939922727ce5f8b1cf7a0016af71acc818e724fc53c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dea9709dd98f513f71939922727ce5f8b1cf7a0016af71acc818e724fc53c07->enter($__internal_9dea9709dd98f513f71939922727ce5f8b1cf7a0016af71acc818e724fc53c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_f02f75271a67169ef2c1b7b45bb3d20f931ac525698a9039c35433dde6d0120c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02f75271a67169ef2c1b7b45bb3d20f931ac525698a9039c35433dde6d0120c->enter($__internal_f02f75271a67169ef2c1b7b45bb3d20f931ac525698a9039c35433dde6d0120c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
\t\t\t\t<h3>Mon site</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Annonces</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_contact");
        echo "\">Contacts</a></li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 40
        $this->displayBlock('menu', $context, $blocks);
        // line 42
        echo "\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 47
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->getSourceContext()); })()), "flashes", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 48
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 49
                echo "\t\t\t\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
\t\t\t\t\t\t\t<p>Message flah : ";
                // line 50
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
\t\t\t\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t\t<p>Ceci est un pied de page avec l'année actuelle : ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
\t\t</footer>
\t</div>

\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
</body>
</html>
";
        
        $__internal_9dea9709dd98f513f71939922727ce5f8b1cf7a0016af71acc818e724fc53c07->leave($__internal_9dea9709dd98f513f71939922727ce5f8b1cf7a0016af71acc818e724fc53c07_prof);

        
        $__internal_f02f75271a67169ef2c1b7b45bb3d20f931ac525698a9039c35433dde6d0120c->leave($__internal_f02f75271a67169ef2c1b7b45bb3d20f931ac525698a9039c35433dde6d0120c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b752c4b5d0f21ec78df4d43ef02ff35f4ca996f17df5dd661fed5baa355f8d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b752c4b5d0f21ec78df4d43ef02ff35f4ca996f17df5dd661fed5baa355f8d9e->enter($__internal_b752c4b5d0f21ec78df4d43ef02ff35f4ca996f17df5dd661fed5baa355f8d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5be45f723f5397ef42fba1e4ca8e7823153bb6aef8cd8806093db733bb1e3d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be45f723f5397ef42fba1e4ca8e7823153bb6aef8cd8806093db733bb1e3d44->enter($__internal_5be45f723f5397ef42fba1e4ca8e7823153bb6aef8cd8806093db733bb1e3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_5be45f723f5397ef42fba1e4ca8e7823153bb6aef8cd8806093db733bb1e3d44->leave($__internal_5be45f723f5397ef42fba1e4ca8e7823153bb6aef8cd8806093db733bb1e3d44_prof);

        
        $__internal_b752c4b5d0f21ec78df4d43ef02ff35f4ca996f17df5dd661fed5baa355f8d9e->leave($__internal_b752c4b5d0f21ec78df4d43ef02ff35f4ca996f17df5dd661fed5baa355f8d9e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a28295ff2227bac580ec10ac04e70d936195ed1b0d00ff47b1912a66301f5c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28295ff2227bac580ec10ac04e70d936195ed1b0d00ff47b1912a66301f5c32->enter($__internal_a28295ff2227bac580ec10ac04e70d936195ed1b0d00ff47b1912a66301f5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_718d6db1358d1a679cbd1d721c91f4f4f25413fc9dc082799388ed33aba4c0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718d6db1358d1a679cbd1d721c91f4f4f25413fc9dc082799388ed33aba4c0af->enter($__internal_718d6db1358d1a679cbd1d721c91f4f4f25413fc9dc082799388ed33aba4c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_718d6db1358d1a679cbd1d721c91f4f4f25413fc9dc082799388ed33aba4c0af->leave($__internal_718d6db1358d1a679cbd1d721c91f4f4f25413fc9dc082799388ed33aba4c0af_prof);

        
        $__internal_a28295ff2227bac580ec10ac04e70d936195ed1b0d00ff47b1912a66301f5c32->leave($__internal_a28295ff2227bac580ec10ac04e70d936195ed1b0d00ff47b1912a66301f5c32_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71350581521bb992528233f23c9f1a10dda464f141520fafb5c307709ab7a213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71350581521bb992528233f23c9f1a10dda464f141520fafb5c307709ab7a213->enter($__internal_71350581521bb992528233f23c9f1a10dda464f141520fafb5c307709ab7a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f408406e805f03211664848d4c1dcc9c9f36860e9566eb551371c7699ca74f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f408406e805f03211664848d4c1dcc9c9f36860e9566eb551371c7699ca74f46->enter($__internal_f408406e805f03211664848d4c1dcc9c9f36860e9566eb551371c7699ca74f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 41
        echo "\t\t\t\t";
        
        $__internal_f408406e805f03211664848d4c1dcc9c9f36860e9566eb551371c7699ca74f46->leave($__internal_f408406e805f03211664848d4c1dcc9c9f36860e9566eb551371c7699ca74f46_prof);

        
        $__internal_71350581521bb992528233f23c9f1a10dda464f141520fafb5c307709ab7a213->leave($__internal_71350581521bb992528233f23c9f1a10dda464f141520fafb5c307709ab7a213_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_927e99ffd8f6c9ef49e5fe4f4c32f8ca5dbf014b06c3f4a6faf08a971e0932d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927e99ffd8f6c9ef49e5fe4f4c32f8ca5dbf014b06c3f4a6faf08a971e0932d0->enter($__internal_927e99ffd8f6c9ef49e5fe4f4c32f8ca5dbf014b06c3f4a6faf08a971e0932d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f31af0372f6c5ee2e98c1b15bbf59bd8b9163d9d7283b32dce2fa01aef1eaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f31af0372f6c5ee2e98c1b15bbf59bd8b9163d9d7283b32dce2fa01aef1eaf1->enter($__internal_0f31af0372f6c5ee2e98c1b15bbf59bd8b9163d9d7283b32dce2fa01aef1eaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "\t\t\t\t";
        
        $__internal_0f31af0372f6c5ee2e98c1b15bbf59bd8b9163d9d7283b32dce2fa01aef1eaf1->leave($__internal_0f31af0372f6c5ee2e98c1b15bbf59bd8b9163d9d7283b32dce2fa01aef1eaf1_prof);

        
        $__internal_927e99ffd8f6c9ef49e5fe4f4c32f8ca5dbf014b06c3f4a6faf08a971e0932d0->leave($__internal_927e99ffd8f6c9ef49e5fe4f4c32f8ca5dbf014b06c3f4a6faf08a971e0932d0_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d29e83e1d859e1fc1c04811147089d1ad451ec140a375bce075d7ae13ada7627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29e83e1d859e1fc1c04811147089d1ad451ec140a375bce075d7ae13ada7627->enter($__internal_d29e83e1d859e1fc1c04811147089d1ad451ec140a375bce075d7ae13ada7627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79977a431a4d3c3d310ec02d3c38b594e80526d0a034b4f981e852c2a346d0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79977a431a4d3c3d310ec02d3c38b594e80526d0a034b4f981e852c2a346d0c6->enter($__internal_79977a431a4d3c3d310ec02d3c38b594e80526d0a034b4f981e852c2a346d0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t";
        // line 69
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_79977a431a4d3c3d310ec02d3c38b594e80526d0a034b4f981e852c2a346d0c6->leave($__internal_79977a431a4d3c3d310ec02d3c38b594e80526d0a034b4f981e852c2a346d0c6_prof);

        
        $__internal_d29e83e1d859e1fc1c04811147089d1ad451ec140a375bce075d7ae13ada7627->leave($__internal_d29e83e1d859e1fc1c04811147089d1ad451ec140a375bce075d7ae13ada7627_prof);

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
        return array (  247 => 69,  245 => 68,  236 => 67,  226 => 56,  217 => 55,  207 => 41,  198 => 40,  187 => 13,  185 => 12,  176 => 11,  158 => 9,  145 => 72,  143 => 67,  136 => 63,  128 => 57,  126 => 55,  123 => 54,  117 => 53,  108 => 50,  103 => 49,  98 => 48,  93 => 47,  87 => 43,  84 => 42,  82 => 40,  77 => 38,  73 => 37,  69 => 36,  46 => 15,  44 => 11,  39 => 9,  30 => 2,);
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
\t\t\t\t<h3>Mon site</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"{{ path('oc_core_home') }}\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"{{ path('oc_platform_home') }}\">Annonces</a></li>
\t\t\t\t\t<li><a href=\"{{ path('oc_core_contact') }}\">Contacts</a></li>
\t\t\t\t</ul>
\t\t\t\t{% block menu %}
\t\t\t\t{% endblock %}
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t{{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t{# Affichage des flash messages #}
\t\t\t\t{% for type, messages in app.flashes() %}
\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t<div class=\"alert alert-{{ type }}\" role=\"alert\">
\t\t\t\t\t\t\t<p>Message flah : {{ message }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}

\t\t\t\t{% block body %}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t\t<p>Ceci est un pied de page avec l'année actuelle : {{ 'now'|date('Y') }}.</p>
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
