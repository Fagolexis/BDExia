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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82f68cd205ec066fb4a3f327665ecd52e3293dc6e3a03917b66e5bb18ef81170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f68cd205ec066fb4a3f327665ecd52e3293dc6e3a03917b66e5bb18ef81170->enter($__internal_82f68cd205ec066fb4a3f327665ecd52e3293dc6e3a03917b66e5bb18ef81170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $__internal_c67c06377bd68e81ec707cd50713b2825ae72e0c16c2dc7e682d300220326d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67c06377bd68e81ec707cd50713b2825ae72e0c16c2dc7e682d300220326d85->enter($__internal_c67c06377bd68e81ec707cd50713b2825ae72e0c16c2dc7e682d300220326d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f68cd205ec066fb4a3f327665ecd52e3293dc6e3a03917b66e5bb18ef81170->leave($__internal_82f68cd205ec066fb4a3f327665ecd52e3293dc6e3a03917b66e5bb18ef81170_prof);

        
        $__internal_c67c06377bd68e81ec707cd50713b2825ae72e0c16c2dc7e682d300220326d85->leave($__internal_c67c06377bd68e81ec707cd50713b2825ae72e0c16c2dc7e682d300220326d85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49da6f29c8439805400c887a11a5c3bcd23f28401c29ec79ff0722fc2e19e545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49da6f29c8439805400c887a11a5c3bcd23f28401c29ec79ff0722fc2e19e545->enter($__internal_49da6f29c8439805400c887a11a5c3bcd23f28401c29ec79ff0722fc2e19e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd4607200c296351ae3c36253af010714e17bf6fa5997939f56d87f982c24303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4607200c296351ae3c36253af010714e17bf6fa5997939f56d87f982c24303->enter($__internal_fd4607200c296351ae3c36253af010714e17bf6fa5997939f56d87f982c24303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique";
        
        $__internal_fd4607200c296351ae3c36253af010714e17bf6fa5997939f56d87f982c24303->leave($__internal_fd4607200c296351ae3c36253af010714e17bf6fa5997939f56d87f982c24303_prof);

        
        $__internal_49da6f29c8439805400c887a11a5c3bcd23f28401c29ec79ff0722fc2e19e545->leave($__internal_49da6f29c8439805400c887a11a5c3bcd23f28401c29ec79ff0722fc2e19e545_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_710819ed4b553e0bb41abf8a83fc52d478b65f1a9fc29c5fe4c71a9d470061f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710819ed4b553e0bb41abf8a83fc52d478b65f1a9fc29c5fe4c71a9d470061f5->enter($__internal_710819ed4b553e0bb41abf8a83fc52d478b65f1a9fc29c5fe4c71a9d470061f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19c2db4ce3c84481e2dcceeae24935a3df677fb420b88ce2504cbeeefcf2a943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c2db4ce3c84481e2dcceeae24935a3df677fb420b88ce2504cbeeefcf2a943->enter($__internal_19c2db4ce3c84481e2dcceeae24935a3df677fb420b88ce2504cbeeefcf2a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 18
            echo "\t\t\t  \t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">
\t\t\t    \t<div class=\"thumbnail imgProduit\">
\t\t\t      \t\t<img src=\"img/lunettes_150x130.png\" alt=\"image produit\">
\t\t\t      \t\t<div class=\"caption\">
\t\t\t        \t\t<h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "nomProduit", array()), "html", null, true);
            echo "</h4>
\t\t\t        \t\t<span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prixProduit", array()), "html", null, true);
            echo "€</span>
\t\t\t        \t\t<a href=";
            // line 24
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
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>

";
        
        $__internal_19c2db4ce3c84481e2dcceeae24935a3df677fb420b88ce2504cbeeefcf2a943->leave($__internal_19c2db4ce3c84481e2dcceeae24935a3df677fb420b88ce2504cbeeefcf2a943_prof);

        
        $__internal_710819ed4b553e0bb41abf8a83fc52d478b65f1a9fc29c5fe4c71a9d470061f5->leave($__internal_710819ed4b553e0bb41abf8a83fc52d478b65f1a9fc29c5fe4c71a9d470061f5_prof);

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
        return array (  110 => 29,  99 => 24,  95 => 23,  91 => 22,  85 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
