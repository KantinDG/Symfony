<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b29e3d43fd43f588738104651b85de657cc4007bd80aec3a0cb61e74dca26891 extends Twig_Template
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
        $__internal_1d87275411e679184d1e0713bc46abbe06745dbf920d01dbca1faf0c890dc2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d87275411e679184d1e0713bc46abbe06745dbf920d01dbca1faf0c890dc2b1->enter($__internal_1d87275411e679184d1e0713bc46abbe06745dbf920d01dbca1faf0c890dc2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b547fa108a3cb814f4e56d9427fb3ee100bfa92aafeb71027e965dcb698a9be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b547fa108a3cb814f4e56d9427fb3ee100bfa92aafeb71027e965dcb698a9be1->enter($__internal_b547fa108a3cb814f4e56d9427fb3ee100bfa92aafeb71027e965dcb698a9be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1d87275411e679184d1e0713bc46abbe06745dbf920d01dbca1faf0c890dc2b1->leave($__internal_1d87275411e679184d1e0713bc46abbe06745dbf920d01dbca1faf0c890dc2b1_prof);

        
        $__internal_b547fa108a3cb814f4e56d9427fb3ee100bfa92aafeb71027e965dcb698a9be1->leave($__internal_b547fa108a3cb814f4e56d9427fb3ee100bfa92aafeb71027e965dcb698a9be1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
