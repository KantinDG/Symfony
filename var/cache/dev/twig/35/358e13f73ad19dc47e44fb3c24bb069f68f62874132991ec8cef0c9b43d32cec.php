<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f7ad63b0731424fc0ba17613456e681debf6761d21ebe40ad682683c94bb51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e156188825d7e7daba9efcb2a2c83a29e669b42e3a4667c8a4f54540780e7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e156188825d7e7daba9efcb2a2c83a29e669b42e3a4667c8a4f54540780e7e5->enter($__internal_4e156188825d7e7daba9efcb2a2c83a29e669b42e3a4667c8a4f54540780e7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b8ae6bca1c71ae4dfd42bfefae09b5e32d46eb60a76392ef8bbb4a498e05d124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ae6bca1c71ae4dfd42bfefae09b5e32d46eb60a76392ef8bbb4a498e05d124->enter($__internal_b8ae6bca1c71ae4dfd42bfefae09b5e32d46eb60a76392ef8bbb4a498e05d124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e156188825d7e7daba9efcb2a2c83a29e669b42e3a4667c8a4f54540780e7e5->leave($__internal_4e156188825d7e7daba9efcb2a2c83a29e669b42e3a4667c8a4f54540780e7e5_prof);

        
        $__internal_b8ae6bca1c71ae4dfd42bfefae09b5e32d46eb60a76392ef8bbb4a498e05d124->leave($__internal_b8ae6bca1c71ae4dfd42bfefae09b5e32d46eb60a76392ef8bbb4a498e05d124_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39fbc7d42d22e8dc4a356e30696b95a389cf345b92ad35061196168d63788474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fbc7d42d22e8dc4a356e30696b95a389cf345b92ad35061196168d63788474->enter($__internal_39fbc7d42d22e8dc4a356e30696b95a389cf345b92ad35061196168d63788474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90396cd0b5535115c1b4036363af8764e0e6473204e772fc2d8553bbaa98d6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90396cd0b5535115c1b4036363af8764e0e6473204e772fc2d8553bbaa98d6ce->enter($__internal_90396cd0b5535115c1b4036363af8764e0e6473204e772fc2d8553bbaa98d6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90396cd0b5535115c1b4036363af8764e0e6473204e772fc2d8553bbaa98d6ce->leave($__internal_90396cd0b5535115c1b4036363af8764e0e6473204e772fc2d8553bbaa98d6ce_prof);

        
        $__internal_39fbc7d42d22e8dc4a356e30696b95a389cf345b92ad35061196168d63788474->leave($__internal_39fbc7d42d22e8dc4a356e30696b95a389cf345b92ad35061196168d63788474_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5acc09d37ddf610fae60074eeb4273e6b9a3cfd13f158f0d17709bef5debe34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5acc09d37ddf610fae60074eeb4273e6b9a3cfd13f158f0d17709bef5debe34->enter($__internal_b5acc09d37ddf610fae60074eeb4273e6b9a3cfd13f158f0d17709bef5debe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ceb7f98c05ad6c0a39254140d2ca413fa69d3f2396ac76fef3ec986cbccfb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceb7f98c05ad6c0a39254140d2ca413fa69d3f2396ac76fef3ec986cbccfb0e->enter($__internal_1ceb7f98c05ad6c0a39254140d2ca413fa69d3f2396ac76fef3ec986cbccfb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ceb7f98c05ad6c0a39254140d2ca413fa69d3f2396ac76fef3ec986cbccfb0e->leave($__internal_1ceb7f98c05ad6c0a39254140d2ca413fa69d3f2396ac76fef3ec986cbccfb0e_prof);

        
        $__internal_b5acc09d37ddf610fae60074eeb4273e6b9a3cfd13f158f0d17709bef5debe34->leave($__internal_b5acc09d37ddf610fae60074eeb4273e6b9a3cfd13f158f0d17709bef5debe34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e986ffab48a40d14e1ad9899b3aa1e48286e72a672679e5224950fc598cc742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e986ffab48a40d14e1ad9899b3aa1e48286e72a672679e5224950fc598cc742->enter($__internal_1e986ffab48a40d14e1ad9899b3aa1e48286e72a672679e5224950fc598cc742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68782272ab86ffd8c7de053b4d7481f35c5deb105d897ad4fb1da56b7fea7c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68782272ab86ffd8c7de053b4d7481f35c5deb105d897ad4fb1da56b7fea7c96->enter($__internal_68782272ab86ffd8c7de053b4d7481f35c5deb105d897ad4fb1da56b7fea7c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68782272ab86ffd8c7de053b4d7481f35c5deb105d897ad4fb1da56b7fea7c96->leave($__internal_68782272ab86ffd8c7de053b4d7481f35c5deb105d897ad4fb1da56b7fea7c96_prof);

        
        $__internal_1e986ffab48a40d14e1ad9899b3aa1e48286e72a672679e5224950fc598cc742->leave($__internal_1e986ffab48a40d14e1ad9899b3aa1e48286e72a672679e5224950fc598cc742_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
