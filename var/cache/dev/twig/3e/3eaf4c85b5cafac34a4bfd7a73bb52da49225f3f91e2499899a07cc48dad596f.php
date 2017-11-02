<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_baa7cbb9e21bc8ef3aeaa5a420b6d5fc8519a6d1f99543ad7a4203e6cca920d4 extends Twig_Template
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
        $__internal_f740bf5482900d7acc055436489871b423ef8507c452c44d364567ce71775090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f740bf5482900d7acc055436489871b423ef8507c452c44d364567ce71775090->enter($__internal_f740bf5482900d7acc055436489871b423ef8507c452c44d364567ce71775090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_86afdc69d3e66ec1a1bb395ef7b15fe2bd2446bbf300e3bee800b8ebc415756e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86afdc69d3e66ec1a1bb395ef7b15fe2bd2446bbf300e3bee800b8ebc415756e->enter($__internal_86afdc69d3e66ec1a1bb395ef7b15fe2bd2446bbf300e3bee800b8ebc415756e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_f740bf5482900d7acc055436489871b423ef8507c452c44d364567ce71775090->leave($__internal_f740bf5482900d7acc055436489871b423ef8507c452c44d364567ce71775090_prof);

        
        $__internal_86afdc69d3e66ec1a1bb395ef7b15fe2bd2446bbf300e3bee800b8ebc415756e->leave($__internal_86afdc69d3e66ec1a1bb395ef7b15fe2bd2446bbf300e3bee800b8ebc415756e_prof);

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
</html>", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
