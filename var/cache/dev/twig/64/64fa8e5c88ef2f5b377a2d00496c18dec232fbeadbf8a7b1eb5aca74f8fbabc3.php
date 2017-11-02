<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_1f91861169e29656895d896764a218d2e2c2e7ffec0c2324bddea3f718eefca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83068de59989aa4531452c9e76072807d701b2c4e63a37a9714151688a6313bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83068de59989aa4531452c9e76072807d701b2c4e63a37a9714151688a6313bd->enter($__internal_83068de59989aa4531452c9e76072807d701b2c4e63a37a9714151688a6313bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_1ff2cb8309f7a3aab83386167c9912e9ba0cd59085b9aa0eae9e6a2157d80835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff2cb8309f7a3aab83386167c9912e9ba0cd59085b9aa0eae9e6a2157d80835->enter($__internal_1ff2cb8309f7a3aab83386167c9912e9ba0cd59085b9aa0eae9e6a2157d80835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83068de59989aa4531452c9e76072807d701b2c4e63a37a9714151688a6313bd->leave($__internal_83068de59989aa4531452c9e76072807d701b2c4e63a37a9714151688a6313bd_prof);

        
        $__internal_1ff2cb8309f7a3aab83386167c9912e9ba0cd59085b9aa0eae9e6a2157d80835->leave($__internal_1ff2cb8309f7a3aab83386167c9912e9ba0cd59085b9aa0eae9e6a2157d80835_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8ad90a6907babc5f12e2a04bc3335d0b9d2d5070b4b3eb6f03d003c9201107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8ad90a6907babc5f12e2a04bc3335d0b9d2d5070b4b3eb6f03d003c9201107->enter($__internal_ee8ad90a6907babc5f12e2a04bc3335d0b9d2d5070b4b3eb6f03d003c9201107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef2cb99fafc671b5315ce032bbfd5cfb75075f17271b88663471e838bc8a8b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2cb99fafc671b5315ce032bbfd5cfb75075f17271b88663471e838bc8a8b5f->enter($__internal_ef2cb99fafc671b5315ce032bbfd5cfb75075f17271b88663471e838bc8a8b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef2cb99fafc671b5315ce032bbfd5cfb75075f17271b88663471e838bc8a8b5f->leave($__internal_ef2cb99fafc671b5315ce032bbfd5cfb75075f17271b88663471e838bc8a8b5f_prof);

        
        $__internal_ee8ad90a6907babc5f12e2a04bc3335d0b9d2d5070b4b3eb6f03d003c9201107->leave($__internal_ee8ad90a6907babc5f12e2a04bc3335d0b9d2d5070b4b3eb6f03d003c9201107_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c98ff3dbfb92f91423dfb5e8ebd57eafee688bbd76dc4379aea1b9e14caf1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c98ff3dbfb92f91423dfb5e8ebd57eafee688bbd76dc4379aea1b9e14caf1d->enter($__internal_52c98ff3dbfb92f91423dfb5e8ebd57eafee688bbd76dc4379aea1b9e14caf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0db71960fce19c9b194767def2276c4dec337cb2951b5a03a7241cded3bda492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db71960fce19c9b194767def2276c4dec337cb2951b5a03a7241cded3bda492->enter($__internal_0db71960fce19c9b194767def2276c4dec337cb2951b5a03a7241cded3bda492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t";
        // line 12
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 17
        echo "\t";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_0db71960fce19c9b194767def2276c4dec337cb2951b5a03a7241cded3bda492->leave($__internal_0db71960fce19c9b194767def2276c4dec337cb2951b5a03a7241cded3bda492_prof);

        
        $__internal_52c98ff3dbfb92f91423dfb5e8ebd57eafee688bbd76dc4379aea1b9e14caf1d->leave($__internal_52c98ff3dbfb92f91423dfb5e8ebd57eafee688bbd76dc4379aea1b9e14caf1d_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c3088f5258df63cd26ec0a1f7305a61af7dab97576275e3355920c3a9d0926e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3088f5258df63cd26ec0a1f7305a61af7dab97576275e3355920c3a9d0926e2->enter($__internal_c3088f5258df63cd26ec0a1f7305a61af7dab97576275e3355920c3a9d0926e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_78156b7e1bc9c2c565b2e6b82f7c8553a72e6a404055706ea3d45ceaf4d0fd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78156b7e1bc9c2c565b2e6b82f7c8553a72e6a404055706ea3d45ceaf4d0fd26->enter($__internal_78156b7e1bc9c2c565b2e6b82f7c8553a72e6a404055706ea3d45ceaf4d0fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "\t";
        
        $__internal_78156b7e1bc9c2c565b2e6b82f7c8553a72e6a404055706ea3d45ceaf4d0fd26->leave($__internal_78156b7e1bc9c2c565b2e6b82f7c8553a72e6a404055706ea3d45ceaf4d0fd26_prof);

        
        $__internal_c3088f5258df63cd26ec0a1f7305a61af7dab97576275e3355920c3a9d0926e2->leave($__internal_c3088f5258df63cd26ec0a1f7305a61af7dab97576275e3355920c3a9d0926e2_prof);

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
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}

\t{# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
\t<h1>Annonces</h1>

\t<hr>

\t{# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
\t{% block ocplatform_body %}
\t{% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
