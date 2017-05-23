<?php

/* MainBundle:Boutique:index.html.twig */
class __TwigTemplate_6376024799bf1b3a7fd474b09be3fe6d3a6bc8a635c54d9026f11f017538ae8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Boutique:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navBoutique' => array($this, 'block_navBoutique'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47902052d7b694d7f81937828742caee5970c82121b3be5617122577ca81f58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47902052d7b694d7f81937828742caee5970c82121b3be5617122577ca81f58e->enter($__internal_47902052d7b694d7f81937828742caee5970c82121b3be5617122577ca81f58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $__internal_2ac40dbc465ec94e358c2479146483ddde72c9ef9fe2f28e730871cfd4e165d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac40dbc465ec94e358c2479146483ddde72c9ef9fe2f28e730871cfd4e165d8->enter($__internal_2ac40dbc465ec94e358c2479146483ddde72c9ef9fe2f28e730871cfd4e165d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47902052d7b694d7f81937828742caee5970c82121b3be5617122577ca81f58e->leave($__internal_47902052d7b694d7f81937828742caee5970c82121b3be5617122577ca81f58e_prof);

        
        $__internal_2ac40dbc465ec94e358c2479146483ddde72c9ef9fe2f28e730871cfd4e165d8->leave($__internal_2ac40dbc465ec94e358c2479146483ddde72c9ef9fe2f28e730871cfd4e165d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_259052c9cc84d8cf3b4d12ef797e511d32d56568772d8b982f9024e18803a0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259052c9cc84d8cf3b4d12ef797e511d32d56568772d8b982f9024e18803a0fc->enter($__internal_259052c9cc84d8cf3b4d12ef797e511d32d56568772d8b982f9024e18803a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65090bde007d425e47efc08b3e9c7673dbc11d423f28f0919f536f4fc75d4ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65090bde007d425e47efc08b3e9c7673dbc11d423f28f0919f536f4fc75d4ccb->enter($__internal_65090bde007d425e47efc08b3e9c7673dbc11d423f28f0919f536f4fc75d4ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique";
        
        $__internal_65090bde007d425e47efc08b3e9c7673dbc11d423f28f0919f536f4fc75d4ccb->leave($__internal_65090bde007d425e47efc08b3e9c7673dbc11d423f28f0919f536f4fc75d4ccb_prof);

        
        $__internal_259052c9cc84d8cf3b4d12ef797e511d32d56568772d8b982f9024e18803a0fc->leave($__internal_259052c9cc84d8cf3b4d12ef797e511d32d56568772d8b982f9024e18803a0fc_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_f68972eb4bd851ae904c45d8b27f96df397dae1a04280b35f8ce929e0791c415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68972eb4bd851ae904c45d8b27f96df397dae1a04280b35f8ce929e0791c415->enter($__internal_f68972eb4bd851ae904c45d8b27f96df397dae1a04280b35f8ce929e0791c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_1d9fa0227e6ce2ff6a88c804df09e64ee242c13b01fed13bf01f774400e9d5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9fa0227e6ce2ff6a88c804df09e64ee242c13b01fed13bf01f774400e9d5f0->enter($__internal_1d9fa0227e6ce2ff6a88c804df09e64ee242c13b01fed13bf01f774400e9d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_1d9fa0227e6ce2ff6a88c804df09e64ee242c13b01fed13bf01f774400e9d5f0->leave($__internal_1d9fa0227e6ce2ff6a88c804df09e64ee242c13b01fed13bf01f774400e9d5f0_prof);

        
        $__internal_f68972eb4bd851ae904c45d8b27f96df397dae1a04280b35f8ce929e0791c415->leave($__internal_f68972eb4bd851ae904c45d8b27f96df397dae1a04280b35f8ce929e0791c415_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b114f52c497060c7d1e3648cdf766988ae2c85fd47b2bb2f5a27b23f7f3d20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b114f52c497060c7d1e3648cdf766988ae2c85fd47b2bb2f5a27b23f7f3d20e->enter($__internal_1b114f52c497060c7d1e3648cdf766988ae2c85fd47b2bb2f5a27b23f7f3d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46098d820ab00976d51c7664930271f3df0fedc94800b7c44e4a7a57a29e7217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46098d820ab00976d51c7664930271f3df0fedc94800b7c44e4a7a57a29e7217->enter($__internal_46098d820ab00976d51c7664930271f3df0fedc94800b7c44e4a7a57a29e7217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t<input type=\"input\" name=\"recherche\" placeholder=\"recherche\">
\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t<i class=\"fa fa-cart-arrow-down col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-7\" aria-hidden=\"true\"></i>&nbsp;
\t\t\t\t<a href=\"#\">Votre panier</a>&nbsp;
\t\t\t\t<span>0</span><!-- nombre de produits dans le panier -->
\t\t</div>
\t\t<div class=\"col-sm-10 col-md-8 col-lg-8 col-sm-offset-1 col-md-offset-2 col-lg-offset-2 contenuCorps\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 20
            echo "\t\t\t  \t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">
\t\t\t    \t<div class=\"thumbnail imgProduit\">
\t\t\t      \t\t<img src=\"img/lunettes_150x130.png\" alt=\"image produit\">
\t\t\t      \t\t<div class=\"caption\">
\t\t\t        \t\t<h4>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "nomProduit", array()), "html", null, true);
            echo "</h4>
\t\t\t        \t\t<span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prixProduit", array()), "html", null, true);
            echo "€</span>
\t\t\t        \t\t<a href=";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["prod"], "idProduit", array()))), "html", null, true);
            echo " class=\"btn btn-defualt\" role=\"button\">Voir le produit</a>
\t\t\t      \t\t</div>
\t\t\t    \t</div>
\t\t\t  \t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>

";
        
        $__internal_46098d820ab00976d51c7664930271f3df0fedc94800b7c44e4a7a57a29e7217->leave($__internal_46098d820ab00976d51c7664930271f3df0fedc94800b7c44e4a7a57a29e7217_prof);

        
        $__internal_1b114f52c497060c7d1e3648cdf766988ae2c85fd47b2bb2f5a27b23f7f3d20e->leave($__internal_1b114f52c497060c7d1e3648cdf766988ae2c85fd47b2bb2f5a27b23f7f3d20e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  118 => 26,  114 => 25,  110 => 24,  104 => 20,  100 => 19,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Boutique{% endblock %}

{% block navBoutique %}class=\"active\"{% endblock %}

{% block body %}
<main>
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t<input type=\"input\" name=\"recherche\" placeholder=\"recherche\">
\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t<i class=\"fa fa-cart-arrow-down col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-7\" aria-hidden=\"true\"></i>&nbsp;
\t\t\t\t<a href=\"#\">Votre panier</a>&nbsp;
\t\t\t\t<span>0</span><!-- nombre de produits dans le panier -->
\t\t</div>
\t\t<div class=\"col-sm-10 col-md-8 col-lg-8 col-sm-offset-1 col-md-offset-2 col-lg-offset-2 contenuCorps\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for prod in list %}
\t\t\t  \t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">
\t\t\t    \t<div class=\"thumbnail imgProduit\">
\t\t\t      \t\t<img src=\"img/lunettes_150x130.png\" alt=\"image produit\">
\t\t\t      \t\t<div class=\"caption\">
\t\t\t        \t\t<h4>{{prod.nomProduit}}</h4>
\t\t\t        \t\t<span>{{prod.prixProduit}}€</span>
\t\t\t        \t\t<a href={{path('produit', {'id':prod.idProduit})}} class=\"btn btn-defualt\" role=\"button\">Voir le produit</a>
\t\t\t      \t\t</div>
\t\t\t    \t</div>
\t\t\t  \t</div>
\t\t\t  {% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>

{% endblock %}", "MainBundle:Boutique:index.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/index.html.twig");
    }
}
