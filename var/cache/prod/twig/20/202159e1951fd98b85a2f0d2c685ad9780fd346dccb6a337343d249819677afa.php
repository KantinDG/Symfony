<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_e963eb86954befdac21c41a05d14e8cb4fba6d35182927f5075805b6848b1377 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "flashes", array(), "method"));
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
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t\t";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "\t\t";
        // line 69
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
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
        return array (  181 => 69,  179 => 68,  176 => 67,  172 => 56,  169 => 55,  165 => 41,  162 => 40,  157 => 13,  155 => 12,  152 => 11,  146 => 9,  139 => 72,  137 => 67,  130 => 63,  122 => 57,  120 => 55,  117 => 54,  111 => 53,  102 => 50,  97 => 49,  92 => 48,  87 => 47,  81 => 43,  78 => 42,  76 => 40,  71 => 38,  67 => 37,  63 => 36,  40 => 15,  38 => 11,  33 => 9,  24 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCCoreBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
