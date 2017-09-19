<?php

/* OCPlatformBundle:Advert:exit.html.twig */
class __TwigTemplate_752be700808a5455b3b0027a18bc940630780de9f977bac5bb3b5c1e914d39a2 extends Twig_Template
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
        $__internal_a1cf7511ae16b7fa57cf190251dc3a3e49bf0a3bccccec6357c0f469dc8169fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1cf7511ae16b7fa57cf190251dc3a3e49bf0a3bccccec6357c0f469dc8169fb->enter($__internal_a1cf7511ae16b7fa57cf190251dc3a3e49bf0a3bccccec6357c0f469dc8169fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:exit.html.twig"));

        $__internal_50499ccf513d238614d984ca2561657dfdd314408071de820d3e3817dae3c49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50499ccf513d238614d984ca2561657dfdd314408071de820d3e3817dae3c49f->enter($__internal_50499ccf513d238614d984ca2561657dfdd314408071de820d3e3817dae3c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:exit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Au revoir et a bientot !</title>
  </head>
  <body>
    <h1>A tres vite ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " !</h1>

    <p>
      Ceci est un texte lambda histoire de faire un peu de remplisssage
    </p>
  </body>
</html>";
        
        $__internal_a1cf7511ae16b7fa57cf190251dc3a3e49bf0a3bccccec6357c0f469dc8169fb->leave($__internal_a1cf7511ae16b7fa57cf190251dc3a3e49bf0a3bccccec6357c0f469dc8169fb_prof);

        
        $__internal_50499ccf513d238614d984ca2561657dfdd314408071de820d3e3817dae3c49f->leave($__internal_50499ccf513d238614d984ca2561657dfdd314408071de820d3e3817dae3c49f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:exit.html.twig";
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
    <title>Au revoir et a bientot !</title>
  </head>
  <body>
    <h1>A tres vite {{ name }} !</h1>

    <p>
      Ceci est un texte lambda histoire de faire un peu de remplisssage
    </p>
  </body>
</html>", "OCPlatformBundle:Advert:exit.html.twig", "D:\\xampp\\htdocs\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/exit.html.twig");
    }
}
