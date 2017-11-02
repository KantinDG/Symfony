<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_86b628c2408a7e19b555c184047927c1cf6022bab7f09bd1790c7c3d822a38b9 extends Twig_Template
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
        $__internal_2245c4dea6ef3b13fc4dd382f79a6e5b4db0f2a416fcda7f036e8fd104481a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2245c4dea6ef3b13fc4dd382f79a6e5b4db0f2a416fcda7f036e8fd104481a5d->enter($__internal_2245c4dea6ef3b13fc4dd382f79a6e5b4db0f2a416fcda7f036e8fd104481a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e8035e7325b9cab383e1486ca1a5ce4313dc5199420d578ed7b27b4d28e0c90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8035e7325b9cab383e1486ca1a5ce4313dc5199420d578ed7b27b4d28e0c90c->enter($__internal_e8035e7325b9cab383e1486ca1a5ce4313dc5199420d578ed7b27b4d28e0c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2245c4dea6ef3b13fc4dd382f79a6e5b4db0f2a416fcda7f036e8fd104481a5d->leave($__internal_2245c4dea6ef3b13fc4dd382f79a6e5b4db0f2a416fcda7f036e8fd104481a5d_prof);

        
        $__internal_e8035e7325b9cab383e1486ca1a5ce4313dc5199420d578ed7b27b4d28e0c90c->leave($__internal_e8035e7325b9cab383e1486ca1a5ce4313dc5199420d578ed7b27b4d28e0c90c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
