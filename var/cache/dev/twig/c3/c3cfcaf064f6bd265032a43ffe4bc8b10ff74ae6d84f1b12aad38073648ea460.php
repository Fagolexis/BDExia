<?php

/* MainBundle:Boutique:show.html.twig */
class __TwigTemplate_e60e4bda6d381807643f63c59188ec764ba1a9a091dd17881704521f046b0c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Boutique:show.html.twig", 1);
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
        $__internal_6cdef6cc57e497a622303da6ed6d6168ab044b536300d7171c3576b501e5ef12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdef6cc57e497a622303da6ed6d6168ab044b536300d7171c3576b501e5ef12->enter($__internal_6cdef6cc57e497a622303da6ed6d6168ab044b536300d7171c3576b501e5ef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $__internal_9117da1214058d7c6f22f482b23a4430286732878ebf4db118c5f76ff902e703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9117da1214058d7c6f22f482b23a4430286732878ebf4db118c5f76ff902e703->enter($__internal_9117da1214058d7c6f22f482b23a4430286732878ebf4db118c5f76ff902e703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdef6cc57e497a622303da6ed6d6168ab044b536300d7171c3576b501e5ef12->leave($__internal_6cdef6cc57e497a622303da6ed6d6168ab044b536300d7171c3576b501e5ef12_prof);

        
        $__internal_9117da1214058d7c6f22f482b23a4430286732878ebf4db118c5f76ff902e703->leave($__internal_9117da1214058d7c6f22f482b23a4430286732878ebf4db118c5f76ff902e703_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0759230cd9b07c11ca723101893f803ce8f4a768bbcfff1c3cfbb8f22f870102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0759230cd9b07c11ca723101893f803ce8f4a768bbcfff1c3cfbb8f22f870102->enter($__internal_0759230cd9b07c11ca723101893f803ce8f4a768bbcfff1c3cfbb8f22f870102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4077fe30f4dc08f788a276d310b64ca4241c502e7be5d59c49409673040204db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4077fe30f4dc08f788a276d310b64ca4241c502e7be5d59c49409673040204db->enter($__internal_4077fe30f4dc08f788a276d310b64ca4241c502e7be5d59c49409673040204db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if (array_key_exists("produit", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
        } else {
            echo "Création d'un produit";
        }
        
        $__internal_4077fe30f4dc08f788a276d310b64ca4241c502e7be5d59c49409673040204db->leave($__internal_4077fe30f4dc08f788a276d310b64ca4241c502e7be5d59c49409673040204db_prof);

        
        $__internal_0759230cd9b07c11ca723101893f803ce8f4a768bbcfff1c3cfbb8f22f870102->leave($__internal_0759230cd9b07c11ca723101893f803ce8f4a768bbcfff1c3cfbb8f22f870102_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_f1ac7dd7f8d5320e41693f1dc6c180cb45e645ccd60dc66523449d59a6f20360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ac7dd7f8d5320e41693f1dc6c180cb45e645ccd60dc66523449d59a6f20360->enter($__internal_f1ac7dd7f8d5320e41693f1dc6c180cb45e645ccd60dc66523449d59a6f20360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_cfea17e0f94dca65542d39f82a3d36e19d1f88ae1f8f64177aab7e20eb848079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfea17e0f94dca65542d39f82a3d36e19d1f88ae1f8f64177aab7e20eb848079->enter($__internal_cfea17e0f94dca65542d39f82a3d36e19d1f88ae1f8f64177aab7e20eb848079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_cfea17e0f94dca65542d39f82a3d36e19d1f88ae1f8f64177aab7e20eb848079->leave($__internal_cfea17e0f94dca65542d39f82a3d36e19d1f88ae1f8f64177aab7e20eb848079_prof);

        
        $__internal_f1ac7dd7f8d5320e41693f1dc6c180cb45e645ccd60dc66523449d59a6f20360->leave($__internal_f1ac7dd7f8d5320e41693f1dc6c180cb45e645ccd60dc66523449d59a6f20360_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ecc48f9867204c15783d73bb6a221c531183b3e08bcef1ef3bdb5ed98fe46ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecc48f9867204c15783d73bb6a221c531183b3e08bcef1ef3bdb5ed98fe46ba->enter($__internal_3ecc48f9867204c15783d73bb6a221c531183b3e08bcef1ef3bdb5ed98fe46ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0babf7447bac36064c421699d7f88b635120948463adb6369a6fcfd1f2dddcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0babf7447bac36064c421699d7f88b635120948463adb6369a6fcfd1f2dddcc6->enter($__internal_0babf7447bac36064c421699d7f88b635120948463adb6369a6fcfd1f2dddcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t<div class=\"row barShop\">
\t\t\t<div class=\"col-md-4 col-md-offset-8 cart\">
\t\t\t    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\"><button class=\"btn btn-default\">Voir mon panier <span>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method")), "html", null, true);
        echo "</span> <i class=\"fa fa-cart-arrow-down\"></i></button></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"blank\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 imgProduit\">
\t\t\t      \t<img src=\"
\t\t\t      \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "imgProd", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                // line 20
                echo "\t\t\t    \t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
                echo "
\t\t\t    \t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t    \t\" alt=\"image produit\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomProduit", array()), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"infoProd\">
\t\t\t\t\t\t<p>Référence</p>
\t\t\t\t\t\t<p>Nom</p>
\t\t\t\t\t\t<p>Prix</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"caracProd\">
\t\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "idProduit", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomProduit", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "prixProduit", array()), "html", null, true);
        echo "&nbsp;€</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t\t\t\t<div class=\"col-md-6 description\">
\t\t\t\t\t<!-- texte de description du produit -->
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "descriptionProduit", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-8\">
\t\t\t\t\t<form id=\"buyForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "idProduit", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"Quantite\" placeholder=\"Quantité\" min=\"1\" value=\"1\" required>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"buyProd\" value=\"Acheter\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 3)) {
            // line 55
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modProd", array("id" => $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "idProduit", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Modifier le produit <i class=\"fa fa-plus\"></i></button></a>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_0babf7447bac36064c421699d7f88b635120948463adb6369a6fcfd1f2dddcc6->leave($__internal_0babf7447bac36064c421699d7f88b635120948463adb6369a6fcfd1f2dddcc6_prof);

        
        $__internal_3ecc48f9867204c15783d73bb6a221c531183b3e08bcef1ef3bdb5ed98fe46ba->leave($__internal_3ecc48f9867204c15783d73bb6a221c531183b3e08bcef1ef3bdb5ed98fe46ba_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 57,  178 => 55,  176 => 54,  165 => 46,  155 => 39,  146 => 33,  142 => 32,  138 => 31,  125 => 22,  114 => 20,  109 => 19,  97 => 12,  91 => 8,  82 => 7,  64 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{% if produit is defined %}{{produit.nomProduit}}{% else %}Création d'un produit{% endif %}{% endblock %}

{% block navBoutique %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t<div class=\"row barShop\">
\t\t\t<div class=\"col-md-4 col-md-offset-8 cart\">
\t\t\t    <a href=\"{{path('cart')}}\"><button class=\"btn btn-default\">Voir mon panier <span>{{app.session.get('cart')|length}}</span> <i class=\"fa fa-cart-arrow-down\"></i></button></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"blank\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 imgProduit\">
\t\t\t      \t<img src=\"
\t\t\t      \t{% for img in prod.imgProd if img.typeImg.idType == 1 %}
\t\t\t    \t\t{{asset('img/')}}{{img.chemin}}
\t\t\t    \t{% endfor %}
\t\t\t    \t\" alt=\"image produit\" title=\"{{prod.nomProduit}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"infoProd\">
\t\t\t\t\t\t<p>Référence</p>
\t\t\t\t\t\t<p>Nom</p>
\t\t\t\t\t\t<p>Prix</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"caracProd\">
\t\t\t\t\t\t<p>{{prod.idProduit}}</p>
\t\t\t\t\t\t<p>{{prod.nomProduit}}</p>
\t\t\t\t\t\t<p>{{prod.prixProduit}}&nbsp;€</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t\t\t\t<div class=\"col-md-6 description\">
\t\t\t\t\t<!-- texte de description du produit -->
\t\t\t\t\t<p>
\t\t\t\t\t\t{{prod.descriptionProduit}}
\t\t\t\t\t</p>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-8\">
\t\t\t\t\t<form id=\"buyForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{prod.idProduit}}\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"Quantite\" placeholder=\"Quantité\" min=\"1\" value=\"1\" required>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"buyProd\" value=\"Acheter\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t{% if app.session.get('roleUser') == 3 %}
\t\t\t\t\t\t<a href=\"{{path('modProd', {'id': prod.idProduit})}}\"><button class=\"btn btn-primary\">Modifier le produit <i class=\"fa fa-plus\"></i></button></a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:show.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/show.html.twig");
    }
}
