<?php

/* MainBundle:Activites:details_activites.html.twig */
class __TwigTemplate_531f23aa82e35bce6caa36b93d086819979cd2a4d1f0b7ac566eb20a6633773d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:details_activites.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2a34d092582445c448da2d4a4aaa683f9985493ad9584314edc1c94f1d6aa78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a34d092582445c448da2d4a4aaa683f9985493ad9584314edc1c94f1d6aa78->enter($__internal_f2a34d092582445c448da2d4a4aaa683f9985493ad9584314edc1c94f1d6aa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activites.html.twig"));

        $__internal_9116ea0c8398fb3916d924a7c3f93782ef64170d7bf20749e785059b00c505af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9116ea0c8398fb3916d924a7c3f93782ef64170d7bf20749e785059b00c505af->enter($__internal_9116ea0c8398fb3916d924a7c3f93782ef64170d7bf20749e785059b00c505af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2a34d092582445c448da2d4a4aaa683f9985493ad9584314edc1c94f1d6aa78->leave($__internal_f2a34d092582445c448da2d4a4aaa683f9985493ad9584314edc1c94f1d6aa78_prof);

        
        $__internal_9116ea0c8398fb3916d924a7c3f93782ef64170d7bf20749e785059b00c505af->leave($__internal_9116ea0c8398fb3916d924a7c3f93782ef64170d7bf20749e785059b00c505af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b06c259a0f7d83077972a42722562ae6bca9e6bfef8a43ed49ca4e36252164bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06c259a0f7d83077972a42722562ae6bca9e6bfef8a43ed49ca4e36252164bc->enter($__internal_b06c259a0f7d83077972a42722562ae6bca9e6bfef8a43ed49ca4e36252164bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb8330c1dc3c7ff9faff8a4e07b5abcdd563a96cc75296942e584c62e61fcbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8330c1dc3c7ff9faff8a4e07b5abcdd563a96cc75296942e584c62e61fcbb7->enter($__internal_cb8330c1dc3c7ff9faff8a4e07b5abcdd563a96cc75296942e584c62e61fcbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:detailsActivites";
        
        $__internal_cb8330c1dc3c7ff9faff8a4e07b5abcdd563a96cc75296942e584c62e61fcbb7->leave($__internal_cb8330c1dc3c7ff9faff8a4e07b5abcdd563a96cc75296942e584c62e61fcbb7_prof);

        
        $__internal_b06c259a0f7d83077972a42722562ae6bca9e6bfef8a43ed49ca4e36252164bc->leave($__internal_b06c259a0f7d83077972a42722562ae6bca9e6bfef8a43ed49ca4e36252164bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09d6ffcbe82fc0df4f7880a625510b7ed663049f68f0e38d96fec7156cc0a903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d6ffcbe82fc0df4f7880a625510b7ed663049f68f0e38d96fec7156cc0a903->enter($__internal_09d6ffcbe82fc0df4f7880a625510b7ed663049f68f0e38d96fec7156cc0a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_969d1e82098486cac0c14a475db916cf6912ccbb4078bc07b08577bbb08e9ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969d1e82098486cac0c14a475db916cf6912ccbb4078bc07b08577bbb08e9ba4->enter($__internal_969d1e82098486cac0c14a475db916cf6912ccbb4078bc07b08577bbb08e9ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
        echo "</dd>
<dt>NOM</dt>
<dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</dd>
<dt>Etat</dt>
<dd>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "etat", array()), "html", null, true);
        echo "</dd>
";
        
        $__internal_969d1e82098486cac0c14a475db916cf6912ccbb4078bc07b08577bbb08e9ba4->leave($__internal_969d1e82098486cac0c14a475db916cf6912ccbb4078bc07b08577bbb08e9ba4_prof);

        
        $__internal_09d6ffcbe82fc0df4f7880a625510b7ed663049f68f0e38d96fec7156cc0a903->leave($__internal_09d6ffcbe82fc0df4f7880a625510b7ed663049f68f0e38d96fec7156cc0a903_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:details_activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  77 => 10,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MainBundle:Activites:detailsActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>{{act.idActivite}}</dd>
<dt>NOM</dt>
<dd>{{act.nomActivite}}</dd>
<dt>Etat</dt>
<dd>{{act.etatAct.etat}}</dd>
{% endblock %}
", "MainBundle:Activites:details_activites.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details_activites.html.twig");
    }
}
