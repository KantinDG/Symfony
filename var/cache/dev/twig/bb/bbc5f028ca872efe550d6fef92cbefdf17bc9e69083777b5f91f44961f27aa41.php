<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_bfa9d3e7304aa6df247f1767ad1ab12cf82e9bc49f811feaf85980e1c9860405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_655b0aa28d6d30294c2267cb10fc397d8bcae2a1bfb508baf81762967bad3ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655b0aa28d6d30294c2267cb10fc397d8bcae2a1bfb508baf81762967bad3ddf->enter($__internal_655b0aa28d6d30294c2267cb10fc397d8bcae2a1bfb508baf81762967bad3ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_a0524671c0753b73cf1c26b8cf51f2a75ced180662d8c20f379d683c9229e97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0524671c0753b73cf1c26b8cf51f2a75ced180662d8c20f379d683c9229e97c->enter($__internal_a0524671c0753b73cf1c26b8cf51f2a75ced180662d8c20f379d683c9229e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>affichage de l'qnnonce ";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</title>
</head>
<body>
\t<h1> Hello Annonce n°";
        // line 7
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>
\t<div>
\t\t";
        // line 10
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>
\t<p>Tag éventuel : ";
        // line 14
        echo twig_escape_filter($this->env, ($context["tag"] ?? $this->getContext($context, "tag")), "html", null, true);
        echo "</p>
\t<p>Méthode utilisée : ";
        // line 15
        echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
        echo " .</p>
</body>
</html>
";
        
        $__internal_655b0aa28d6d30294c2267cb10fc397d8bcae2a1bfb508baf81762967bad3ddf->leave($__internal_655b0aa28d6d30294c2267cb10fc397d8bcae2a1bfb508baf81762967bad3ddf_prof);

        
        $__internal_a0524671c0753b73cf1c26b8cf51f2a75ced180662d8c20f379d683c9229e97c->leave($__internal_a0524671c0753b73cf1c26b8cf51f2a75ced180662d8c20f379d683c9229e97c_prof);

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
        return array (  62 => 15,  58 => 14,  55 => 13,  46 => 11,  41 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>affichage de l'qnnonce {{ id }}</title>
</head>
<body>
\t<h1> Hello Annonce n°{{ id }} !</h1>
\t<div>
\t\t{# On affiche tous les messages flash dont le nom est \"info\" #}
\t\t{% for message in app.session.flashbag.get('info') %}
\t\t<p>Message flash : {{ message }}</p>
\t\t{% endfor %}
\t</div>
\t<p>Tag éventuel : {{ tag }}</p>
\t<p>Méthode utilisée : {{ method }} .</p>
</body>
</html>
", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
