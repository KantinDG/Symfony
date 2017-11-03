<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_9517a3b8ebc4f06f97de84c56575ee9c62d2d5c4f082427e77766aeaf345a0b6 extends Twig_Template
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
        $__internal_624a43ae09cfe7550a43d5a6016eb1e355c200eed5aff15ba32b846369053eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624a43ae09cfe7550a43d5a6016eb1e355c200eed5aff15ba32b846369053eb4->enter($__internal_624a43ae09cfe7550a43d5a6016eb1e355c200eed5aff15ba32b846369053eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_624a43ae09cfe7550a43d5a6016eb1e355c200eed5aff15ba32b846369053eb4->leave($__internal_624a43ae09cfe7550a43d5a6016eb1e355c200eed5aff15ba32b846369053eb4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb13e51b8372ac60c76d655cb699b69d4e6b09ec2b7acb11801de59f96cbf6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb13e51b8372ac60c76d655cb699b69d4e6b09ec2b7acb11801de59f96cbf6bb->enter($__internal_eb13e51b8372ac60c76d655cb699b69d4e6b09ec2b7acb11801de59f96cbf6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_eb13e51b8372ac60c76d655cb699b69d4e6b09ec2b7acb11801de59f96cbf6bb->leave($__internal_eb13e51b8372ac60c76d655cb699b69d4e6b09ec2b7acb11801de59f96cbf6bb_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30c35c368966cb43cde257a5ce4f6a3f763834341e75c1685ff3be72c7329a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c35c368966cb43cde257a5ce4f6a3f763834341e75c1685ff3be72c7329a1e->enter($__internal_30c35c368966cb43cde257a5ce4f6a3f763834341e75c1685ff3be72c7329a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_30c35c368966cb43cde257a5ce4f6a3f763834341e75c1685ff3be72c7329a1e->leave($__internal_30c35c368966cb43cde257a5ce4f6a3f763834341e75c1685ff3be72c7329a1e_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eff6ac0d94138bb0beb9fcbd22de09272dbec26aecb036ccd6b50d9502488501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff6ac0d94138bb0beb9fcbd22de09272dbec26aecb036ccd6b50d9502488501->enter($__internal_eff6ac0d94138bb0beb9fcbd22de09272dbec26aecb036ccd6b50d9502488501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 41
        echo "\t\t\t\t";
        
        $__internal_eff6ac0d94138bb0beb9fcbd22de09272dbec26aecb036ccd6b50d9502488501->leave($__internal_eff6ac0d94138bb0beb9fcbd22de09272dbec26aecb036ccd6b50d9502488501_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0afae8f5ed9ba95f788d5327474740cf41f7f6d41534bdb89aae79faadb2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0afae8f5ed9ba95f788d5327474740cf41f7f6d41534bdb89aae79faadb2bb->enter($__internal_eb0afae8f5ed9ba95f788d5327474740cf41f7f6d41534bdb89aae79faadb2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "\t\t\t\t";
        
        $__internal_eb0afae8f5ed9ba95f788d5327474740cf41f7f6d41534bdb89aae79faadb2bb->leave($__internal_eb0afae8f5ed9ba95f788d5327474740cf41f7f6d41534bdb89aae79faadb2bb_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b67c0f0514dc0ace3ff0540b27384a3e4d4ff636b5b39baeec6e3ba86850760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b67c0f0514dc0ace3ff0540b27384a3e4d4ff636b5b39baeec6e3ba86850760->enter($__internal_2b67c0f0514dc0ace3ff0540b27384a3e4d4ff636b5b39baeec6e3ba86850760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t\t";
        // line 69
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_2b67c0f0514dc0ace3ff0540b27384a3e4d4ff636b5b39baeec6e3ba86850760->leave($__internal_2b67c0f0514dc0ace3ff0540b27384a3e4d4ff636b5b39baeec6e3ba86850760_prof);

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
        return array (  214 => 69,  212 => 68,  206 => 67,  199 => 56,  193 => 55,  186 => 41,  180 => 40,  172 => 13,  170 => 12,  164 => 11,  152 => 9,  142 => 72,  140 => 67,  133 => 63,  125 => 57,  123 => 55,  120 => 54,  114 => 53,  105 => 50,  100 => 49,  95 => 48,  90 => 47,  84 => 43,  81 => 42,  79 => 40,  74 => 38,  70 => 37,  66 => 36,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
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
