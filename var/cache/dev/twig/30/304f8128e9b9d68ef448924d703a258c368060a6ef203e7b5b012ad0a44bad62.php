<?php

/* MainBundle:Activites:liste_inscrits.html.twig */
class __TwigTemplate_ef33f637e5f6e027a283ab85564ca77b12b3157218473a4d28b50cea640a17e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:liste_inscrits.html.twig", 1);
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
        $__internal_c2437eb85fe384622a474707bba6f20cb8f1531a136d0ad497889d603fa67064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2437eb85fe384622a474707bba6f20cb8f1531a136d0ad497889d603fa67064->enter($__internal_c2437eb85fe384622a474707bba6f20cb8f1531a136d0ad497889d603fa67064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_inscrits.html.twig"));

        $__internal_750d94274f0d2b34d861a11fae882dee1a14019dafe8a4ea98a5ecb93932c921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750d94274f0d2b34d861a11fae882dee1a14019dafe8a4ea98a5ecb93932c921->enter($__internal_750d94274f0d2b34d861a11fae882dee1a14019dafe8a4ea98a5ecb93932c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2437eb85fe384622a474707bba6f20cb8f1531a136d0ad497889d603fa67064->leave($__internal_c2437eb85fe384622a474707bba6f20cb8f1531a136d0ad497889d603fa67064_prof);

        
        $__internal_750d94274f0d2b34d861a11fae882dee1a14019dafe8a4ea98a5ecb93932c921->leave($__internal_750d94274f0d2b34d861a11fae882dee1a14019dafe8a4ea98a5ecb93932c921_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97221097be0a78ecc3bae1a30a990ef4cd7e34c5b0bc746ed9afdc2422f21ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97221097be0a78ecc3bae1a30a990ef4cd7e34c5b0bc746ed9afdc2422f21ba2->enter($__internal_97221097be0a78ecc3bae1a30a990ef4cd7e34c5b0bc746ed9afdc2422f21ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fa0054dce9073c16966c38dec78bc00a1301f29adfff9ff8bc7a4d49e882a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa0054dce9073c16966c38dec78bc00a1301f29adfff9ff8bc7a4d49e882a72->enter($__internal_0fa0054dce9073c16966c38dec78bc00a1301f29adfff9ff8bc7a4d49e882a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:listeInscrits";
        
        $__internal_0fa0054dce9073c16966c38dec78bc00a1301f29adfff9ff8bc7a4d49e882a72->leave($__internal_0fa0054dce9073c16966c38dec78bc00a1301f29adfff9ff8bc7a4d49e882a72_prof);

        
        $__internal_97221097be0a78ecc3bae1a30a990ef4cd7e34c5b0bc746ed9afdc2422f21ba2->leave($__internal_97221097be0a78ecc3bae1a30a990ef4cd7e34c5b0bc746ed9afdc2422f21ba2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c203a3aa14c044b5a79077340686bf28e954fb100e17e9bb32422262bb09052d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c203a3aa14c044b5a79077340686bf28e954fb100e17e9bb32422262bb09052d->enter($__internal_c203a3aa14c044b5a79077340686bf28e954fb100e17e9bb32422262bb09052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9baf2ad819400969153eafbe75244a19d07a39c481e8e440b4d9a8e636508e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9baf2ad819400969153eafbe75244a19d07a39c481e8e440b4d9a8e636508e1->enter($__internal_c9baf2ad819400969153eafbe75244a19d07a39c481e8e440b4d9a8e636508e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:listeInscrits page</h1>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>USER</th>
\t\t<th>CHOIX</th>
\t\t<th>COMMENTAIRE</th>
\t</thead>
\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrits"]) ? $context["inscrits"] : $this->getContext($context, "inscrits")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 15
            echo "\t\t<tr>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "inscritChoix", array()), "choix", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "informations", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
";
        
        $__internal_c9baf2ad819400969153eafbe75244a19d07a39c481e8e440b4d9a8e636508e1->leave($__internal_c9baf2ad819400969153eafbe75244a19d07a39c481e8e440b4d9a8e636508e1_prof);

        
        $__internal_c203a3aa14c044b5a79077340686bf28e954fb100e17e9bb32422262bb09052d->leave($__internal_c203a3aa14c044b5a79077340686bf28e954fb100e17e9bb32422262bb09052d_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste_inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  82 => 15,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:listeInscrits{% endblock %}

{% block body %}
<h1>Welcome to the Activites:listeInscrits page</h1>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>USER</th>
\t\t<th>CHOIX</th>
\t\t<th>COMMENTAIRE</th>
\t</thead>
\t{% for sub in inscrits %}
\t\t<tr>
\t\t\t<td>{{sub.idInscrit.idUser}}</td>
\t\t\t<td>{{sub.idInscrit.nom}}</td>
\t\t\t<td>{{sub.inscritChoix.choix}}</td>
\t\t\t<td>{{sub.informations}}</td>
\t\t</tr>
\t{% endfor %}
</table>
{% endblock %}
", "MainBundle:Activites:liste_inscrits.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste_inscrits.html.twig");
    }
}
