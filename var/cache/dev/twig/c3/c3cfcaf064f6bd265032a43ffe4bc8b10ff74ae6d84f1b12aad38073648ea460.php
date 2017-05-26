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
        $__internal_6121a44af5c4858aca7646618a18da050496fbac96fc94f142b2ab8be03844b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6121a44af5c4858aca7646618a18da050496fbac96fc94f142b2ab8be03844b3->enter($__internal_6121a44af5c4858aca7646618a18da050496fbac96fc94f142b2ab8be03844b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $__internal_2a41ea90e5533ee2133d7b2c565d8bdd6cb8461cffbdc7e4396bbccc356f98ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a41ea90e5533ee2133d7b2c565d8bdd6cb8461cffbdc7e4396bbccc356f98ed->enter($__internal_2a41ea90e5533ee2133d7b2c565d8bdd6cb8461cffbdc7e4396bbccc356f98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6121a44af5c4858aca7646618a18da050496fbac96fc94f142b2ab8be03844b3->leave($__internal_6121a44af5c4858aca7646618a18da050496fbac96fc94f142b2ab8be03844b3_prof);

        
        $__internal_2a41ea90e5533ee2133d7b2c565d8bdd6cb8461cffbdc7e4396bbccc356f98ed->leave($__internal_2a41ea90e5533ee2133d7b2c565d8bdd6cb8461cffbdc7e4396bbccc356f98ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6e03c6c63164664743a4558fa0f8e5bb4bf0387abcf149cbbcc156c1c8f74ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e03c6c63164664743a4558fa0f8e5bb4bf0387abcf149cbbcc156c1c8f74ea->enter($__internal_c6e03c6c63164664743a4558fa0f8e5bb4bf0387abcf149cbbcc156c1c8f74ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cb764892725308f5370978354c9ac8951981535cd91277648fbef719d5b7c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb764892725308f5370978354c9ac8951981535cd91277648fbef719d5b7c03->enter($__internal_3cb764892725308f5370978354c9ac8951981535cd91277648fbef719d5b7c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomProduit", array()), "html", null, true);
        
        $__internal_3cb764892725308f5370978354c9ac8951981535cd91277648fbef719d5b7c03->leave($__internal_3cb764892725308f5370978354c9ac8951981535cd91277648fbef719d5b7c03_prof);

        
        $__internal_c6e03c6c63164664743a4558fa0f8e5bb4bf0387abcf149cbbcc156c1c8f74ea->leave($__internal_c6e03c6c63164664743a4558fa0f8e5bb4bf0387abcf149cbbcc156c1c8f74ea_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_05447eb1090558b5f5adb8e38ee7985fa3f09ddb144f0cc49e5d1a29fad95f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05447eb1090558b5f5adb8e38ee7985fa3f09ddb144f0cc49e5d1a29fad95f0c->enter($__internal_05447eb1090558b5f5adb8e38ee7985fa3f09ddb144f0cc49e5d1a29fad95f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_ebf6d0b24fc8fa99be04c8f9b2f9627f33a33eab15fed75c3f2b6918d3cfc8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf6d0b24fc8fa99be04c8f9b2f9627f33a33eab15fed75c3f2b6918d3cfc8c7->enter($__internal_ebf6d0b24fc8fa99be04c8f9b2f9627f33a33eab15fed75c3f2b6918d3cfc8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_ebf6d0b24fc8fa99be04c8f9b2f9627f33a33eab15fed75c3f2b6918d3cfc8c7->leave($__internal_ebf6d0b24fc8fa99be04c8f9b2f9627f33a33eab15fed75c3f2b6918d3cfc8c7_prof);

        
        $__internal_05447eb1090558b5f5adb8e38ee7985fa3f09ddb144f0cc49e5d1a29fad95f0c->leave($__internal_05447eb1090558b5f5adb8e38ee7985fa3f09ddb144f0cc49e5d1a29fad95f0c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f74194e5de694f41d15338867975885f314444366a35341195658f013e29dc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74194e5de694f41d15338867975885f314444366a35341195658f013e29dc09->enter($__internal_f74194e5de694f41d15338867975885f314444366a35341195658f013e29dc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5df716f832e1c7b46d9cb48856f3216b68c92042d4b828bf8422289950768af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df716f832e1c7b46d9cb48856f3216b68c92042d4b828bf8422289950768af6->enter($__internal_5df716f832e1c7b46d9cb48856f3216b68c92042d4b828bf8422289950768af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5df716f832e1c7b46d9cb48856f3216b68c92042d4b828bf8422289950768af6->leave($__internal_5df716f832e1c7b46d9cb48856f3216b68c92042d4b828bf8422289950768af6_prof);

        
        $__internal_f74194e5de694f41d15338867975885f314444366a35341195658f013e29dc09->leave($__internal_f74194e5de694f41d15338867975885f314444366a35341195658f013e29dc09_prof);

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
        return array (  180 => 57,  174 => 55,  172 => 54,  161 => 46,  151 => 39,  142 => 33,  138 => 32,  134 => 31,  121 => 22,  110 => 20,  105 => 19,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{{prod.nomProduit}}{% endblock %}

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
