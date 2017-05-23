<?php

/* MainBundle:Activites:inscrits.html.twig */
class __TwigTemplate_e030a353c27047b3227c61a21128c099e1fbd786a55700b0ea19a6467a5d90df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:inscrits.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navActivites' => array($this, 'block_navActivites'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f12f479a40b9737c25f532cebf70903fc129c6a74c7c56e9147fd32ee8d73ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12f479a40b9737c25f532cebf70903fc129c6a74c7c56e9147fd32ee8d73ae0->enter($__internal_f12f479a40b9737c25f532cebf70903fc129c6a74c7c56e9147fd32ee8d73ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $__internal_2b49ef76c85966161d923398405163b8363d35a851339122c30c090b2c907732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b49ef76c85966161d923398405163b8363d35a851339122c30c090b2c907732->enter($__internal_2b49ef76c85966161d923398405163b8363d35a851339122c30c090b2c907732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12f479a40b9737c25f532cebf70903fc129c6a74c7c56e9147fd32ee8d73ae0->leave($__internal_f12f479a40b9737c25f532cebf70903fc129c6a74c7c56e9147fd32ee8d73ae0_prof);

        
        $__internal_2b49ef76c85966161d923398405163b8363d35a851339122c30c090b2c907732->leave($__internal_2b49ef76c85966161d923398405163b8363d35a851339122c30c090b2c907732_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8686349df7128288460cdaaf18e8931dff5dbf272bac5535668b929c87e1e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8686349df7128288460cdaaf18e8931dff5dbf272bac5535668b929c87e1e09->enter($__internal_b8686349df7128288460cdaaf18e8931dff5dbf272bac5535668b929c87e1e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fed33fbc10ec83136f9a9025bb690700462fcb70c8cd5ca7c0202fe902ca8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fed33fbc10ec83136f9a9025bb690700462fcb70c8cd5ca7c0202fe902ca8fb->enter($__internal_2fed33fbc10ec83136f9a9025bb690700462fcb70c8cd5ca7c0202fe902ca8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des inscrits";
        
        $__internal_2fed33fbc10ec83136f9a9025bb690700462fcb70c8cd5ca7c0202fe902ca8fb->leave($__internal_2fed33fbc10ec83136f9a9025bb690700462fcb70c8cd5ca7c0202fe902ca8fb_prof);

        
        $__internal_b8686349df7128288460cdaaf18e8931dff5dbf272bac5535668b929c87e1e09->leave($__internal_b8686349df7128288460cdaaf18e8931dff5dbf272bac5535668b929c87e1e09_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_1ee9a3a2a69404ab2d0efead458c29793377ea696b749ec3eb63e8711204714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee9a3a2a69404ab2d0efead458c29793377ea696b749ec3eb63e8711204714f->enter($__internal_1ee9a3a2a69404ab2d0efead458c29793377ea696b749ec3eb63e8711204714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_278fbbe355b23ddc869f9c333ccf6edd23febd6da345e25436f7fccdb5e0fe13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278fbbe355b23ddc869f9c333ccf6edd23febd6da345e25436f7fccdb5e0fe13->enter($__internal_278fbbe355b23ddc869f9c333ccf6edd23febd6da345e25436f7fccdb5e0fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_278fbbe355b23ddc869f9c333ccf6edd23febd6da345e25436f7fccdb5e0fe13->leave($__internal_278fbbe355b23ddc869f9c333ccf6edd23febd6da345e25436f7fccdb5e0fe13_prof);

        
        $__internal_1ee9a3a2a69404ab2d0efead458c29793377ea696b749ec3eb63e8711204714f->leave($__internal_1ee9a3a2a69404ab2d0efead458c29793377ea696b749ec3eb63e8711204714f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_95032995f470bdb276ec391ddb893d3108d7272adfa20ee76a793a5ca68041fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95032995f470bdb276ec391ddb893d3108d7272adfa20ee76a793a5ca68041fd->enter($__internal_95032995f470bdb276ec391ddb893d3108d7272adfa20ee76a793a5ca68041fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44d33753d3cb26a3525823e746222efe94549dea2173b7dd00787d6e1b3fae8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d33753d3cb26a3525823e746222efe94549dea2173b7dd00787d6e1b3fae8e->enter($__internal_44d33753d3cb26a3525823e746222efe94549dea2173b7dd00787d6e1b3fae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t";
        // line 10
        $context["i"] = 0;
        // line 11
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 12
            echo "\t\t<div class=\"subs blank\">
\t\t\t<h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "nom", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "informations", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t\t";
            // line 16
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < (twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))) - 1))) {
                // line 17
                echo "\t\t<hr>
\t\t";
            }
            // line 19
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 20
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</div>
</main>
";
        
        $__internal_44d33753d3cb26a3525823e746222efe94549dea2173b7dd00787d6e1b3fae8e->leave($__internal_44d33753d3cb26a3525823e746222efe94549dea2173b7dd00787d6e1b3fae8e_prof);

        
        $__internal_95032995f470bdb276ec391ddb893d3108d7272adfa20ee76a793a5ca68041fd->leave($__internal_95032995f470bdb276ec391ddb893d3108d7272adfa20ee76a793a5ca68041fd_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 21,  121 => 20,  118 => 19,  114 => 17,  112 => 16,  107 => 14,  101 => 13,  98 => 12,  93 => 11,  91 => 10,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle::base.html.twig\" %}

{% block title %}Liste des inscrits{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t{% set i = 0 %}
\t\t{% for sub in list %}
\t\t<div class=\"subs blank\">
\t\t\t<h3>{{sub.idInscrit.prenom}} {{sub.idInscrit.nom}}</h3>
\t\t\t<p>{{sub.informations}}</p>
\t\t</div>
\t\t{% if i < list|length -1 %}
\t\t<hr>
\t\t{% endif %}
\t\t{% set i = i + 1 %}
\t\t{% endfor %}
\t</div>
</main>
{% endblock %}
", "MainBundle:Activites:inscrits.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/inscrits.html.twig");
    }
}
