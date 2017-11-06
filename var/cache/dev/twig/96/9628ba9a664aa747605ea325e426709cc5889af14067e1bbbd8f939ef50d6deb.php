<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_b56b591733669a4e4e2743871e039d82f52547dd44a6e2d8570c2cf64f559521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82840c1300c99519a5d67efcf7e4dc6a7d23a024259af028619647bf15950af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82840c1300c99519a5d67efcf7e4dc6a7d23a024259af028619647bf15950af->enter($__internal_a82840c1300c99519a5d67efcf7e4dc6a7d23a024259af028619647bf15950af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_06a8c815cdb32871440c7410d92bd6de5bcfa7af0026da68f8984dd91a4c5b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a8c815cdb32871440c7410d92bd6de5bcfa7af0026da68f8984dd91a4c5b50->enter($__internal_06a8c815cdb32871440c7410d92bd6de5bcfa7af0026da68f8984dd91a4c5b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82840c1300c99519a5d67efcf7e4dc6a7d23a024259af028619647bf15950af->leave($__internal_a82840c1300c99519a5d67efcf7e4dc6a7d23a024259af028619647bf15950af_prof);

        
        $__internal_06a8c815cdb32871440c7410d92bd6de5bcfa7af0026da68f8984dd91a4c5b50->leave($__internal_06a8c815cdb32871440c7410d92bd6de5bcfa7af0026da68f8984dd91a4c5b50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_395a331b72735e65a83785743c22b60b7ab0e6b9ea71c98f14987872220a2744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395a331b72735e65a83785743c22b60b7ab0e6b9ea71c98f14987872220a2744->enter($__internal_395a331b72735e65a83785743c22b60b7ab0e6b9ea71c98f14987872220a2744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e6af9ec8ae71acf87cbf9f055688a3e9215edae80e362e943af1c5f37ff91a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6af9ec8ae71acf87cbf9f055688a3e9215edae80e362e943af1c5f37ff91a9->enter($__internal_0e6af9ec8ae71acf87cbf9f055688a3e9215edae80e362e943af1c5f37ff91a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0e6af9ec8ae71acf87cbf9f055688a3e9215edae80e362e943af1c5f37ff91a9->leave($__internal_0e6af9ec8ae71acf87cbf9f055688a3e9215edae80e362e943af1c5f37ff91a9_prof);

        
        $__internal_395a331b72735e65a83785743c22b60b7ab0e6b9ea71c98f14987872220a2744->leave($__internal_395a331b72735e65a83785743c22b60b7ab0e6b9ea71c98f14987872220a2744_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_aad7d5fc926ab95fc5aa5e7c65e2f8638b091ab65959fed602a37eff620e7393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad7d5fc926ab95fc5aa5e7c65e2f8638b091ab65959fed602a37eff620e7393->enter($__internal_aad7d5fc926ab95fc5aa5e7c65e2f8638b091ab65959fed602a37eff620e7393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a72084cfcecc42db4f1100bdb9f56accef66d52754ef627cf4c9e8dbf2733643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72084cfcecc42db4f1100bdb9f56accef66d52754ef627cf4c9e8dbf2733643->enter($__internal_a72084cfcecc42db4f1100bdb9f56accef66d52754ef627cf4c9e8dbf2733643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
\t";
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 12, $this->getSourceContext()); })()), "image", array()))) {
            // line 13
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 13, $this->getSourceContext()); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
\t";
        }
        // line 15
        echo "\t<i>Par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t";
        // line 21
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "categories", array()), "empty", array())) {
            // line 22
            echo "\t<p>
\t\tCette annonce est parue dans les catégories suivantes :
\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 24, $this->getSourceContext()); })()), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t</p>
\t";
        }
        // line 29
        echo "
\t";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 30, $this->getSourceContext()); })())) > 0)) {
            // line 31
            echo "\t<div>
\t\tCette annonce requiert les compétences suivantes :
\t\t<ul>
\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new Twig_Error_Runtime('Variable "listAdvertSkills" does not exist.', 34, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 35
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t</ul>
\t</div>
\t";
        }
        // line 40
        echo "
\t<ul class=\"nav nav-pills nav-stacked\">
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplication"]) || array_key_exists("listApplication", $context) ? $context["listApplication"] : (function () { throw new Twig_Error_Runtime('Variable "listApplication" does not exist.', 42, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 43
            echo "\t\t\t<li><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["application"], "author", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["application"], "content", array()), "html", null, true);
            echo " </span></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t</ul>

\t<p>
\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 52, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 56, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

";
        
        $__internal_a72084cfcecc42db4f1100bdb9f56accef66d52754ef627cf4c9e8dbf2733643->leave($__internal_a72084cfcecc42db4f1100bdb9f56accef66d52754ef627cf4c9e8dbf2733643_prof);

        
        $__internal_aad7d5fc926ab95fc5aa5e7c65e2f8638b091ab65959fed602a37eff620e7393->leave($__internal_aad7d5fc926ab95fc5aa5e7c65e2f8638b091ab65959fed602a37eff620e7393_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 56,  212 => 52,  205 => 48,  200 => 45,  189 => 43,  185 => 42,  181 => 40,  176 => 37,  165 => 35,  161 => 34,  156 => 31,  154 => 30,  151 => 29,  147 => 27,  133 => 26,  127 => 25,  110 => 24,  106 => 22,  104 => 21,  98 => 18,  89 => 15,  81 => 13,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
\tLecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

\t<h2>{{ advert.title }}</h2>
\t{% if advert.image is not null %}
\t\t<img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
\t{% endif %}
\t<i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

\t<div class=\"well\">
\t\t{{ advert.content }}
\t</div>

\t{% if not advert.categories.empty %}
\t<p>
\t\tCette annonce est parue dans les catégories suivantes :
\t\t{% for category in advert.categories %}
\t\t\t{{ category.name }}{% if not loop.last %}, {% endif %}
\t\t{% endfor %}
\t</p>
\t{% endif %}

\t{% if listAdvertSkills|length > 0 %}
\t<div>
\t\tCette annonce requiert les compétences suivantes :
\t\t<ul>
\t\t\t{% for advertSkill in listAdvertSkills %}
\t\t\t\t<li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
\t{% endif %}

\t<ul class=\"nav nav-pills nav-stacked\">
\t\t{% for application in listApplication %}
\t\t\t<li><span>{{ application.author }} : {{ application.content }} </span></li>
\t\t{% endfor %}
\t</ul>

\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>

{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
