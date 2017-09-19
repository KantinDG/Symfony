<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_a5e2ee7b821ec7918edaab31a814956ad399925f2bf9a4e9c28c8737402403db extends Twig_Template
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
        $__internal_fcdfca5b4d20c8cbc28d241ff697ed4c741e1b857afbd3677534f48f1a424748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdfca5b4d20c8cbc28d241ff697ed4c741e1b857afbd3677534f48f1a424748->enter($__internal_fcdfca5b4d20c8cbc28d241ff697ed4c741e1b857afbd3677534f48f1a424748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_9b097e4a7568e8315085ea3ca0cb795dbe681f4110db46d544c9a78af1eb954c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b097e4a7568e8315085ea3ca0cb795dbe681f4110db46d544c9a78af1eb954c->enter($__internal_9b097e4a7568e8315085ea3ca0cb795dbe681f4110db46d544c9a78af1eb954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>
";
        
        $__internal_fcdfca5b4d20c8cbc28d241ff697ed4c741e1b857afbd3677534f48f1a424748->leave($__internal_fcdfca5b4d20c8cbc28d241ff697ed4c741e1b857afbd3677534f48f1a424748_prof);

        
        $__internal_9b097e4a7568e8315085ea3ca0cb795dbe681f4110db46d544c9a78af1eb954c->leave($__internal_9b097e4a7568e8315085ea3ca0cb795dbe681f4110db46d544c9a78af1eb954c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}

<html>
  <body>
    Hello World!
  </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
