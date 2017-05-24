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
        $__internal_89b7ad56d9b46c7f8a5fb20725140e88e6cac57f77fd76aa6967aa7848e02d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b7ad56d9b46c7f8a5fb20725140e88e6cac57f77fd76aa6967aa7848e02d61->enter($__internal_89b7ad56d9b46c7f8a5fb20725140e88e6cac57f77fd76aa6967aa7848e02d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $__internal_db1a1bbe39180b01ca76a600bcd5cdd34843df1b70e33ae21f8e467dda3812bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1a1bbe39180b01ca76a600bcd5cdd34843df1b70e33ae21f8e467dda3812bd->enter($__internal_db1a1bbe39180b01ca76a600bcd5cdd34843df1b70e33ae21f8e467dda3812bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b7ad56d9b46c7f8a5fb20725140e88e6cac57f77fd76aa6967aa7848e02d61->leave($__internal_89b7ad56d9b46c7f8a5fb20725140e88e6cac57f77fd76aa6967aa7848e02d61_prof);

        
        $__internal_db1a1bbe39180b01ca76a600bcd5cdd34843df1b70e33ae21f8e467dda3812bd->leave($__internal_db1a1bbe39180b01ca76a600bcd5cdd34843df1b70e33ae21f8e467dda3812bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55ac7a69ed8d16a90c5b95511970e015f1536de347e69b7af27287127d9bf4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ac7a69ed8d16a90c5b95511970e015f1536de347e69b7af27287127d9bf4d5->enter($__internal_55ac7a69ed8d16a90c5b95511970e015f1536de347e69b7af27287127d9bf4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_deefdb062bf0e44394d8cbf39d964af46bc8ddee30165514b2ec52dedba6b8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deefdb062bf0e44394d8cbf39d964af46bc8ddee30165514b2ec52dedba6b8b3->enter($__internal_deefdb062bf0e44394d8cbf39d964af46bc8ddee30165514b2ec52dedba6b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique";
        
        $__internal_deefdb062bf0e44394d8cbf39d964af46bc8ddee30165514b2ec52dedba6b8b3->leave($__internal_deefdb062bf0e44394d8cbf39d964af46bc8ddee30165514b2ec52dedba6b8b3_prof);

        
        $__internal_55ac7a69ed8d16a90c5b95511970e015f1536de347e69b7af27287127d9bf4d5->leave($__internal_55ac7a69ed8d16a90c5b95511970e015f1536de347e69b7af27287127d9bf4d5_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_34436880b2f56e55befb4b213fa570a09647ae5d7fc432ee8318429ea1f8834f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34436880b2f56e55befb4b213fa570a09647ae5d7fc432ee8318429ea1f8834f->enter($__internal_34436880b2f56e55befb4b213fa570a09647ae5d7fc432ee8318429ea1f8834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_06cd09d79142fd96ca88ef42583dd7fcb702d9d2be032f02ea4c19a4ff9fcff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cd09d79142fd96ca88ef42583dd7fcb702d9d2be032f02ea4c19a4ff9fcff8->enter($__internal_06cd09d79142fd96ca88ef42583dd7fcb702d9d2be032f02ea4c19a4ff9fcff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_06cd09d79142fd96ca88ef42583dd7fcb702d9d2be032f02ea4c19a4ff9fcff8->leave($__internal_06cd09d79142fd96ca88ef42583dd7fcb702d9d2be032f02ea4c19a4ff9fcff8_prof);

        
        $__internal_34436880b2f56e55befb4b213fa570a09647ae5d7fc432ee8318429ea1f8834f->leave($__internal_34436880b2f56e55befb4b213fa570a09647ae5d7fc432ee8318429ea1f8834f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6dd2f83c4d4483682f5aae325a7bbd4b5b73dddf94e62a3db05fd6f962a1682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6dd2f83c4d4483682f5aae325a7bbd4b5b73dddf94e62a3db05fd6f962a1682->enter($__internal_a6dd2f83c4d4483682f5aae325a7bbd4b5b73dddf94e62a3db05fd6f962a1682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edcec61f6483b28deac6bd2193dd2a9621f50b04d84232ac24b3a762ae2e21af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcec61f6483b28deac6bd2193dd2a9621f50b04d84232ac24b3a762ae2e21af->enter($__internal_edcec61f6483b28deac6bd2193dd2a9621f50b04d84232ac24b3a762ae2e21af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div class=\"container blank\">
\t\t<div class=\"col-md-12 barShop\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<form action=\"\" method=\"post\">\t
\t\t\t\t\t<input type=\"input\" name=\"srch\" placeholder=\"Rechercher un produit\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"srchProd\" id=\"srchProd\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 3)) {
            echo ".
\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addProd");
            echo "\">
\t\t\t\t\t\t<button class=\"inscription\">
\t\t\t\t\t\t\tCréer un produit
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 cart\">
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">
\t\t\t        <i class=\"fa fa-cart-arrow-down\"></i>
\t\t\t        <p>Panier : ";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method")), "html", null, true);
        echo "</p>
\t\t\t    </a>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 35
            echo "\t\t\t  \t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">
\t\t\t    \t<div class=\"thumbnail imgProduit\">
\t\t\t    \t\t";
            // line 37
            $context["src"] = "";
            // line 38
            echo "\t\t\t    \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["prod"], "imgProd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 39
                    echo "\t\t\t    \t\t\t";
                    $context["src"] = $this->getAttribute($context["img"], "chemin", array());
                    // line 40
                    echo "\t\t\t    \t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t      \t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
            echo "\" alt=\"image produit\">
\t\t\t      \t\t<div class=\"caption\">
\t\t\t        \t\t<h4>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "nomProduit", array()), "html", null, true);
            echo "</h4>
\t\t\t        \t\t<span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prixProduit", array()), "html", null, true);
            echo "€</span>
\t\t\t        \t\t<a href=";
            // line 45
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
        // line 50
        echo "\t\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>

";
        
        $__internal_edcec61f6483b28deac6bd2193dd2a9621f50b04d84232ac24b3a762ae2e21af->leave($__internal_edcec61f6483b28deac6bd2193dd2a9621f50b04d84232ac24b3a762ae2e21af_prof);

        
        $__internal_a6dd2f83c4d4483682f5aae325a7bbd4b5b73dddf94e62a3db05fd6f962a1682->leave($__internal_a6dd2f83c4d4483682f5aae325a7bbd4b5b73dddf94e62a3db05fd6f962a1682_prof);

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
        return array (  181 => 50,  170 => 45,  166 => 44,  162 => 43,  155 => 41,  148 => 40,  145 => 39,  139 => 38,  137 => 37,  133 => 35,  129 => 34,  121 => 29,  116 => 27,  112 => 25,  103 => 19,  99 => 18,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
    <div class=\"container blank\">
\t\t<div class=\"col-md-12 barShop\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<form action=\"\" method=\"post\">\t
\t\t\t\t\t<input type=\"input\" name=\"srch\" placeholder=\"Rechercher un produit\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"srchProd\" id=\"srchProd\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t\t{% if app.session.get('roleUser') == 3 %}.
\t\t\t\t\t<a href=\"{{path('addProd')}}\">
\t\t\t\t\t\t<button class=\"inscription\">
\t\t\t\t\t\t\tCréer un produit
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-md-6 cart\">
\t\t\t\t<a href=\"{{path('cart')}}\">
\t\t\t        <i class=\"fa fa-cart-arrow-down\"></i>
\t\t\t        <p>Panier : {{app.session.get('cart')|length}}</p>
\t\t\t    </a>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t{% for prod in list %}
\t\t\t  \t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">
\t\t\t    \t<div class=\"thumbnail imgProduit\">
\t\t\t    \t\t{% set src = \"\" %}
\t\t\t    \t\t{% for img in prod.imgProd if img.typeImg.idType == 1 %}
\t\t\t    \t\t\t{% set src = img.chemin %}
\t\t\t    \t\t{% endfor %}
\t\t\t      \t\t<img src=\"{{asset('img/')}}{{src}}\" alt=\"image produit\">
\t\t\t      \t\t<div class=\"caption\">
\t\t\t        \t\t<h4>{{prod.nomProduit}}</h4>
\t\t\t        \t\t<span>{{prod.prixProduit}}€</span>
\t\t\t        \t\t<a href={{path('produit', {'id':prod.idProduit})}} class=\"btn btn-defualt\" role=\"button\">Voir le produit</a>
\t\t\t      \t\t</div>
\t\t\t    \t</div>
\t\t\t  \t</div>
\t\t\t  {% endfor %}
\t\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>

{% endblock %}", "MainBundle:Boutique:index.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/index.html.twig");
    }
}
