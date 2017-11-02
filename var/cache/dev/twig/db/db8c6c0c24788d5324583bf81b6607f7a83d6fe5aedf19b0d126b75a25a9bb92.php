<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5544c4b532c80ec31e341431ee4776b3d27fcfff955ffe815489b243dbbb6af extends Twig_Template
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
        $__internal_d95cfac42e7cd29ae60709174411a129ea893a6f01c8d8093eb08e920e3c94d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95cfac42e7cd29ae60709174411a129ea893a6f01c8d8093eb08e920e3c94d3->enter($__internal_d95cfac42e7cd29ae60709174411a129ea893a6f01c8d8093eb08e920e3c94d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef4b29e363cfd32ea106b0a9ec2cf64b839537479e98d163b828a4b065ef2b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4b29e363cfd32ea106b0a9ec2cf64b839537479e98d163b828a4b065ef2b85->enter($__internal_ef4b29e363cfd32ea106b0a9ec2cf64b839537479e98d163b828a4b065ef2b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95cfac42e7cd29ae60709174411a129ea893a6f01c8d8093eb08e920e3c94d3->leave($__internal_d95cfac42e7cd29ae60709174411a129ea893a6f01c8d8093eb08e920e3c94d3_prof);

        
        $__internal_ef4b29e363cfd32ea106b0a9ec2cf64b839537479e98d163b828a4b065ef2b85->leave($__internal_ef4b29e363cfd32ea106b0a9ec2cf64b839537479e98d163b828a4b065ef2b85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dff831b66ef6475f63302d924942658ace9d56d27657f63f49cb32c281fb13f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff831b66ef6475f63302d924942658ace9d56d27657f63f49cb32c281fb13f4->enter($__internal_dff831b66ef6475f63302d924942658ace9d56d27657f63f49cb32c281fb13f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_494df5c0db66baccf31784df004225883afc4b8872c5c6c41853aa2896a59a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494df5c0db66baccf31784df004225883afc4b8872c5c6c41853aa2896a59a40->enter($__internal_494df5c0db66baccf31784df004225883afc4b8872c5c6c41853aa2896a59a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_494df5c0db66baccf31784df004225883afc4b8872c5c6c41853aa2896a59a40->leave($__internal_494df5c0db66baccf31784df004225883afc4b8872c5c6c41853aa2896a59a40_prof);

        
        $__internal_dff831b66ef6475f63302d924942658ace9d56d27657f63f49cb32c281fb13f4->leave($__internal_dff831b66ef6475f63302d924942658ace9d56d27657f63f49cb32c281fb13f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de675fcbee6f0d9faff713cc88c49eb454ac8ce228302f56f45a5b737dddacb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de675fcbee6f0d9faff713cc88c49eb454ac8ce228302f56f45a5b737dddacb8->enter($__internal_de675fcbee6f0d9faff713cc88c49eb454ac8ce228302f56f45a5b737dddacb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38062e49f2a4167fcb3baa5a5b22aa9cebb6b87b8a5016a27738f5208d76e45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38062e49f2a4167fcb3baa5a5b22aa9cebb6b87b8a5016a27738f5208d76e45a->enter($__internal_38062e49f2a4167fcb3baa5a5b22aa9cebb6b87b8a5016a27738f5208d76e45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38062e49f2a4167fcb3baa5a5b22aa9cebb6b87b8a5016a27738f5208d76e45a->leave($__internal_38062e49f2a4167fcb3baa5a5b22aa9cebb6b87b8a5016a27738f5208d76e45a_prof);

        
        $__internal_de675fcbee6f0d9faff713cc88c49eb454ac8ce228302f56f45a5b737dddacb8->leave($__internal_de675fcbee6f0d9faff713cc88c49eb454ac8ce228302f56f45a5b737dddacb8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22fb4b0e79e86ca0080fa1c468fdb229647540cce4e6e9fb2f13818e5636e2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fb4b0e79e86ca0080fa1c468fdb229647540cce4e6e9fb2f13818e5636e2bc->enter($__internal_22fb4b0e79e86ca0080fa1c468fdb229647540cce4e6e9fb2f13818e5636e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4582f104cbbefda7b881b7d5eeb2a9bd9a5d07e02cebccf41911aaf83d922f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4582f104cbbefda7b881b7d5eeb2a9bd9a5d07e02cebccf41911aaf83d922f4e->enter($__internal_4582f104cbbefda7b881b7d5eeb2a9bd9a5d07e02cebccf41911aaf83d922f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4582f104cbbefda7b881b7d5eeb2a9bd9a5d07e02cebccf41911aaf83d922f4e->leave($__internal_4582f104cbbefda7b881b7d5eeb2a9bd9a5d07e02cebccf41911aaf83d922f4e_prof);

        
        $__internal_22fb4b0e79e86ca0080fa1c468fdb229647540cce4e6e9fb2f13818e5636e2bc->leave($__internal_22fb4b0e79e86ca0080fa1c468fdb229647540cce4e6e9fb2f13818e5636e2bc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
