<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_6f32e713303379bc8057f9528090fb36f025b407757c99595ee0ca2d39aff11e extends Twig_Template
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
        $__internal_2f78eedc6f83df853856d82cb88d5a0dbadad26b0a25224e225f04eebc213128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f78eedc6f83df853856d82cb88d5a0dbadad26b0a25224e225f04eebc213128->enter($__internal_2f78eedc6f83df853856d82cb88d5a0dbadad26b0a25224e225f04eebc213128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_d9d934548898363d3f795a2bb21ade06aa0c71db2b51713f1daa76de544cce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d934548898363d3f795a2bb21ade06aa0c71db2b51713f1daa76de544cce5b->enter($__internal_d9d934548898363d3f795a2bb21ade06aa0c71db2b51713f1daa76de544cce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
\tIci se trouvera le formulaire.
</div>
";
        
        $__internal_2f78eedc6f83df853856d82cb88d5a0dbadad26b0a25224e225f04eebc213128->leave($__internal_2f78eedc6f83df853856d82cb88d5a0dbadad26b0a25224e225f04eebc213128_prof);

        
        $__internal_d9d934548898363d3f795a2bb21ade06aa0c71db2b51713f1daa76de544cce5b->leave($__internal_d9d934548898363d3f795a2bb21ade06aa0c71db2b51713f1daa76de544cce5b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  28 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
\t elles, hériteront probablement du layout. Je dis « probablement » car,
\t ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
\t lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
\tIci se trouvera le formulaire.
</div>
", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
