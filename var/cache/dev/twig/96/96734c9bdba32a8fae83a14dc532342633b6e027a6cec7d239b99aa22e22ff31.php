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
        $__internal_bf13dd1674493f9170c116ac219f6234ab68c1851100ac4b66cbddc48690b0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf13dd1674493f9170c116ac219f6234ab68c1851100ac4b66cbddc48690b0c9->enter($__internal_bf13dd1674493f9170c116ac219f6234ab68c1851100ac4b66cbddc48690b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $__internal_e1f339d42bbb3b3923fc9f8191a978b679344430cac2039c362fe7a084f6ba95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f339d42bbb3b3923fc9f8191a978b679344430cac2039c362fe7a084f6ba95->enter($__internal_e1f339d42bbb3b3923fc9f8191a978b679344430cac2039c362fe7a084f6ba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf13dd1674493f9170c116ac219f6234ab68c1851100ac4b66cbddc48690b0c9->leave($__internal_bf13dd1674493f9170c116ac219f6234ab68c1851100ac4b66cbddc48690b0c9_prof);

        
        $__internal_e1f339d42bbb3b3923fc9f8191a978b679344430cac2039c362fe7a084f6ba95->leave($__internal_e1f339d42bbb3b3923fc9f8191a978b679344430cac2039c362fe7a084f6ba95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1481114964e4b80dac4137a5f2498b29bcb0a8a5f5c7f73e02e3d985db80fb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1481114964e4b80dac4137a5f2498b29bcb0a8a5f5c7f73e02e3d985db80fb8f->enter($__internal_1481114964e4b80dac4137a5f2498b29bcb0a8a5f5c7f73e02e3d985db80fb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e2808e17bc8fab6ef737938e68c212561f1ca1128f62f6eacbb33a31821f173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2808e17bc8fab6ef737938e68c212561f1ca1128f62f6eacbb33a31821f173->enter($__internal_3e2808e17bc8fab6ef737938e68c212561f1ca1128f62f6eacbb33a31821f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique";
        
        $__internal_3e2808e17bc8fab6ef737938e68c212561f1ca1128f62f6eacbb33a31821f173->leave($__internal_3e2808e17bc8fab6ef737938e68c212561f1ca1128f62f6eacbb33a31821f173_prof);

        
        $__internal_1481114964e4b80dac4137a5f2498b29bcb0a8a5f5c7f73e02e3d985db80fb8f->leave($__internal_1481114964e4b80dac4137a5f2498b29bcb0a8a5f5c7f73e02e3d985db80fb8f_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_b13ea723887e09e872db5b0ed6759e1fbca6ea24e54823a0efafca213a9f2178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13ea723887e09e872db5b0ed6759e1fbca6ea24e54823a0efafca213a9f2178->enter($__internal_b13ea723887e09e872db5b0ed6759e1fbca6ea24e54823a0efafca213a9f2178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_8384915b7c1051f8af32cb28328687a6474c77e84c01dc853d8ba00a7dbc4176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8384915b7c1051f8af32cb28328687a6474c77e84c01dc853d8ba00a7dbc4176->enter($__internal_8384915b7c1051f8af32cb28328687a6474c77e84c01dc853d8ba00a7dbc4176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_8384915b7c1051f8af32cb28328687a6474c77e84c01dc853d8ba00a7dbc4176->leave($__internal_8384915b7c1051f8af32cb28328687a6474c77e84c01dc853d8ba00a7dbc4176_prof);

        
        $__internal_b13ea723887e09e872db5b0ed6759e1fbca6ea24e54823a0efafca213a9f2178->leave($__internal_b13ea723887e09e872db5b0ed6759e1fbca6ea24e54823a0efafca213a9f2178_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f380381cf4bb525adc35b1e728068891f77cb48fedff42cd0dcef9a170df6334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f380381cf4bb525adc35b1e728068891f77cb48fedff42cd0dcef9a170df6334->enter($__internal_f380381cf4bb525adc35b1e728068891f77cb48fedff42cd0dcef9a170df6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f715001b1f3cb583765d3b7a2ac0fe9a6b8e7374c45c4cb81bf0535cd7ffedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f715001b1f3cb583765d3b7a2ac0fe9a6b8e7374c45c4cb81bf0535cd7ffedf->enter($__internal_5f715001b1f3cb583765d3b7a2ac0fe9a6b8e7374c45c4cb81bf0535cd7ffedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div class=\"container-fluid text-center header-title\">
        <h1>Liste des produits</h1>
    </div>
    <div class=\"container blank\">
\t\t<div class=\"row barShop\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"srch\" placeholder=\"Rechercher un produit\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"srchProd\" id=\"srchProd\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 3)) {
            echo ".
\t\t\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addProd");
            echo "\"><button class=\"btn btn-primary\">Créer un produit <i class=\"fa fa-plus\"></i></button></a>
\t\t\t";
        }
        // line 28
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-4 cart\">
\t\t\t    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\"><button class=\"btn btn-default\">Voir mon panier <span>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method")), "html", null, true);
        echo "</span> <i class=\"fa fa-cart-arrow-down\"></i></button></a>
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
        
        $__internal_5f715001b1f3cb583765d3b7a2ac0fe9a6b8e7374c45c4cb81bf0535cd7ffedf->leave($__internal_5f715001b1f3cb583765d3b7a2ac0fe9a6b8e7374c45c4cb81bf0535cd7ffedf_prof);

        
        $__internal_f380381cf4bb525adc35b1e728068891f77cb48fedff42cd0dcef9a170df6334->leave($__internal_f380381cf4bb525adc35b1e728068891f77cb48fedff42cd0dcef9a170df6334_prof);

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
        return array (  180 => 50,  169 => 45,  165 => 44,  161 => 43,  154 => 41,  147 => 40,  144 => 39,  138 => 38,  136 => 37,  132 => 35,  128 => 34,  119 => 30,  115 => 28,  110 => 26,  106 => 25,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
    <div class=\"container-fluid text-center header-title\">
        <h1>Liste des produits</h1>
    </div>
    <div class=\"container blank\">
\t\t<div class=\"row barShop\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"srch\" placeholder=\"Rechercher un produit\">
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"submit\" name=\"srchProd\" id=\"srchProd\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t{% if app.session.get('roleUser') == 3 %}.
\t\t\t\t<a href=\"{{path('addProd')}}\"><button class=\"btn btn-primary\">Créer un produit <i class=\"fa fa-plus\"></i></button></a>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-md-4 cart\">
\t\t\t    <a href=\"{{path('cart')}}\"><button class=\"btn btn-default\">Voir mon panier <span>{{app.session.get('cart')|length}}</span> <i class=\"fa fa-cart-arrow-down\"></i></button></a>
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
