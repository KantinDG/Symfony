<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_c1452c4055cd448a0bc8adee5bc7cec849f34b653353e0c844ae5eb5f17d4d8b extends Twig_Template
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
        $__internal_fd4e69909b44b0e1e3f49a73debd282e8dcee45f327fefacb0d26a521a1f94e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4e69909b44b0e1e3f49a73debd282e8dcee45f327fefacb0d26a521a1f94e6->enter($__internal_fd4e69909b44b0e1e3f49a73debd282e8dcee45f327fefacb0d26a521a1f94e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_61e8a26788ed164fa4be732b686f4f82bc5da32c4172c5c6f26c37cafb59e930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e8a26788ed164fa4be732b686f4f82bc5da32c4172c5c6f26c37cafb59e930->enter($__internal_61e8a26788ed164fa4be732b686f4f82bc5da32c4172c5c6f26c37cafb59e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>";
        
        $__internal_fd4e69909b44b0e1e3f49a73debd282e8dcee45f327fefacb0d26a521a1f94e6->leave($__internal_fd4e69909b44b0e1e3f49a73debd282e8dcee45f327fefacb0d26a521a1f94e6_prof);

        
        $__internal_61e8a26788ed164fa4be732b686f4f82bc5da32c4172c5c6f26c37cafb59e930->leave($__internal_61e8a26788ed164fa4be732b686f4f82bc5da32c4172c5c6f26c37cafb59e930_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
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
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ nom }} !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>", "OCPlatformBundle:Advert:index.html.twig", "D:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
