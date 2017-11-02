<?php

/* ::layout.html.twig */
class __TwigTemplate_988b94c98060be1bc09803f21f764c0f29011c89e002f9ec97af9dd328feaf25 extends Twig_Template
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
        $__internal_852dcddc5bbcf42f8f465ad251446cc8d493c0d1f5a895c7e2d9e79c0acef600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852dcddc5bbcf42f8f465ad251446cc8d493c0d1f5a895c7e2d9e79c0acef600->enter($__internal_852dcddc5bbcf42f8f465ad251446cc8d493c0d1f5a895c7e2d9e79c0acef600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_c75e19b3d04180f884cc2ced638e554ead872e20fefd3f46a5e801ee9c6a409d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75e19b3d04180f884cc2ced638e554ead872e20fefd3f46a5e801ee9c6a409d->enter($__internal_c75e19b3d04180f884cc2ced638e554ead872e20fefd3f46a5e801ee9c6a409d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_852dcddc5bbcf42f8f465ad251446cc8d493c0d1f5a895c7e2d9e79c0acef600->leave($__internal_852dcddc5bbcf42f8f465ad251446cc8d493c0d1f5a895c7e2d9e79c0acef600_prof);

        
        $__internal_c75e19b3d04180f884cc2ced638e554ead872e20fefd3f46a5e801ee9c6a409d->leave($__internal_c75e19b3d04180f884cc2ced638e554ead872e20fefd3f46a5e801ee9c6a409d_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_300f75fa1c018794bef34b7bcfbbd17c68aac5daad7e25f50e29848e5e1b0d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300f75fa1c018794bef34b7bcfbbd17c68aac5daad7e25f50e29848e5e1b0d9a->enter($__internal_300f75fa1c018794bef34b7bcfbbd17c68aac5daad7e25f50e29848e5e1b0d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1fc7a4a57af15dc6cd6f7bbe80f54d88af18c95a7a10f96b11c11ec7538aacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fc7a4a57af15dc6cd6f7bbe80f54d88af18c95a7a10f96b11c11ec7538aacb->enter($__internal_a1fc7a4a57af15dc6cd6f7bbe80f54d88af18c95a7a10f96b11c11ec7538aacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_a1fc7a4a57af15dc6cd6f7bbe80f54d88af18c95a7a10f96b11c11ec7538aacb->leave($__internal_a1fc7a4a57af15dc6cd6f7bbe80f54d88af18c95a7a10f96b11c11ec7538aacb_prof);

        
        $__internal_300f75fa1c018794bef34b7bcfbbd17c68aac5daad7e25f50e29848e5e1b0d9a->leave($__internal_300f75fa1c018794bef34b7bcfbbd17c68aac5daad7e25f50e29848e5e1b0d9a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac2996fc620cc56a299878d583811eea02be276a863d0f154bff1a746b6d7224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2996fc620cc56a299878d583811eea02be276a863d0f154bff1a746b6d7224->enter($__internal_ac2996fc620cc56a299878d583811eea02be276a863d0f154bff1a746b6d7224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a52bb14249cef92476191c68c990d862cbb1f59018ab7cf9faa7b92e2b71586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a52bb14249cef92476191c68c990d862cbb1f59018ab7cf9faa7b92e2b71586->enter($__internal_2a52bb14249cef92476191c68c990d862cbb1f59018ab7cf9faa7b92e2b71586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_2a52bb14249cef92476191c68c990d862cbb1f59018ab7cf9faa7b92e2b71586->leave($__internal_2a52bb14249cef92476191c68c990d862cbb1f59018ab7cf9faa7b92e2b71586_prof);

        
        $__internal_ac2996fc620cc56a299878d583811eea02be276a863d0f154bff1a746b6d7224->leave($__internal_ac2996fc620cc56a299878d583811eea02be276a863d0f154bff1a746b6d7224_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_9201f6b8768b00fc009225552bdc8523d5d6c744c3f0e3b930851a6ebc751823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9201f6b8768b00fc009225552bdc8523d5d6c744c3f0e3b930851a6ebc751823->enter($__internal_9201f6b8768b00fc009225552bdc8523d5d6c744c3f0e3b930851a6ebc751823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f55ab665d2500c6508ce36549dbd68a58e942ea6ee3ebee4b54e2d8506498d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f55ab665d2500c6508ce36549dbd68a58e942ea6ee3ebee4b54e2d8506498d->enter($__internal_d5f55ab665d2500c6508ce36549dbd68a58e942ea6ee3ebee4b54e2d8506498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "\t\t\t\t";
        
        $__internal_d5f55ab665d2500c6508ce36549dbd68a58e942ea6ee3ebee4b54e2d8506498d->leave($__internal_d5f55ab665d2500c6508ce36549dbd68a58e942ea6ee3ebee4b54e2d8506498d_prof);

        
        $__internal_9201f6b8768b00fc009225552bdc8523d5d6c744c3f0e3b930851a6ebc751823->leave($__internal_9201f6b8768b00fc009225552bdc8523d5d6c744c3f0e3b930851a6ebc751823_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c16c30d7c832df734e8c71cde7890335b46bb41d479f3f968eea7553e959e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c16c30d7c832df734e8c71cde7890335b46bb41d479f3f968eea7553e959e40->enter($__internal_0c16c30d7c832df734e8c71cde7890335b46bb41d479f3f968eea7553e959e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ed116eac5e7b63f30abc978d36415a67408b0859b746ac6382a3ef033d94cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed116eac5e7b63f30abc978d36415a67408b0859b746ac6382a3ef033d94cff->enter($__internal_3ed116eac5e7b63f30abc978d36415a67408b0859b746ac6382a3ef033d94cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_3ed116eac5e7b63f30abc978d36415a67408b0859b746ac6382a3ef033d94cff->leave($__internal_3ed116eac5e7b63f30abc978d36415a67408b0859b746ac6382a3ef033d94cff_prof);

        
        $__internal_0c16c30d7c832df734e8c71cde7890335b46bb41d479f3f968eea7553e959e40->leave($__internal_0c16c30d7c832df734e8c71cde7890335b46bb41d479f3f968eea7553e959e40_prof);

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
