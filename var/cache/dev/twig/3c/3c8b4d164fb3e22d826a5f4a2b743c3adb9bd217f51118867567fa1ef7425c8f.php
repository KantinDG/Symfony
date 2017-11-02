<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_2205bdcf0e995366b552352e4b359e4ed44a06befe33d643b5b9e586a40df2b9 extends Twig_Template
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
        $__internal_27191d054cd3bd1563da2c56d71ed99fb97b99eed5e8c08b8488204cc99343b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27191d054cd3bd1563da2c56d71ed99fb97b99eed5e8c08b8488204cc99343b9->enter($__internal_27191d054cd3bd1563da2c56d71ed99fb97b99eed5e8c08b8488204cc99343b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        $__internal_964d3a9d80eb8e0bb63d8d09b74d27586e6ad1dce5e9def5de2e1c5b4b030be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964d3a9d80eb8e0bb63d8d09b74d27586e6ad1dce5e9def5de2e1c5b4b030be8->enter($__internal_964d3a9d80eb8e0bb63d8d09b74d27586e6ad1dce5e9def5de2e1c5b4b030be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        
        $__internal_27191d054cd3bd1563da2c56d71ed99fb97b99eed5e8c08b8488204cc99343b9->leave($__internal_27191d054cd3bd1563da2c56d71ed99fb97b99eed5e8c08b8488204cc99343b9_prof);

        
        $__internal_964d3a9d80eb8e0bb63d8d09b74d27586e6ad1dce5e9def5de2e1c5b4b030be8->leave($__internal_964d3a9d80eb8e0bb63d8d09b74d27586e6ad1dce5e9def5de2e1c5b4b030be8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  28 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>
", "OCPlatformBundle:Advert:menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
