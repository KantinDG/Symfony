<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_3c39694eda35806c9aad01cc1baf1d20929b3c59e4a95fc46d4d21f97b46b4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "\t<h3>Les annonces</h3>
\t<ul class=\"nav nav-pills nav-stacked\">
\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t</ul>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
\t";
        // line 21
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 26
        echo "\t";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 26
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 27
        echo "\t";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  79 => 26,  74 => 28,  71 => 26,  65 => 21,  62 => 19,  59 => 18,  52 => 14,  48 => 13,  44 => 11,  41 => 10,  34 => 6,  31 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
