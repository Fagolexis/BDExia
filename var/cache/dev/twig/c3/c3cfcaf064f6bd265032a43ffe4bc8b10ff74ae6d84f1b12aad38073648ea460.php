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
        $__internal_fec4f0e1b342456aca68bb4d2d05b50977470b003bb9acf282622f7843d56c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec4f0e1b342456aca68bb4d2d05b50977470b003bb9acf282622f7843d56c47->enter($__internal_fec4f0e1b342456aca68bb4d2d05b50977470b003bb9acf282622f7843d56c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $__internal_51a5ce9c059d0d43fdd0eca3c05dccb3eae8e0b95318d78551a4907219d3d479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a5ce9c059d0d43fdd0eca3c05dccb3eae8e0b95318d78551a4907219d3d479->enter($__internal_51a5ce9c059d0d43fdd0eca3c05dccb3eae8e0b95318d78551a4907219d3d479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec4f0e1b342456aca68bb4d2d05b50977470b003bb9acf282622f7843d56c47->leave($__internal_fec4f0e1b342456aca68bb4d2d05b50977470b003bb9acf282622f7843d56c47_prof);

        
        $__internal_51a5ce9c059d0d43fdd0eca3c05dccb3eae8e0b95318d78551a4907219d3d479->leave($__internal_51a5ce9c059d0d43fdd0eca3c05dccb3eae8e0b95318d78551a4907219d3d479_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d24023600b25edf1031568be1b6ea16af6b5cd6c58a0bcdad67a8451ca1a343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d24023600b25edf1031568be1b6ea16af6b5cd6c58a0bcdad67a8451ca1a343->enter($__internal_3d24023600b25edf1031568be1b6ea16af6b5cd6c58a0bcdad67a8451ca1a343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30a3a64d2b9e2e8fe35a0ae8c4e28ad5ad670a068f4aee1f3595ab2e2ee1766c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a3a64d2b9e2e8fe35a0ae8c4e28ad5ad670a068f4aee1f3595ab2e2ee1766c->enter($__internal_30a3a64d2b9e2e8fe35a0ae8c4e28ad5ad670a068f4aee1f3595ab2e2ee1766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_30a3a64d2b9e2e8fe35a0ae8c4e28ad5ad670a068f4aee1f3595ab2e2ee1766c->leave($__internal_30a3a64d2b9e2e8fe35a0ae8c4e28ad5ad670a068f4aee1f3595ab2e2ee1766c_prof);

        
        $__internal_3d24023600b25edf1031568be1b6ea16af6b5cd6c58a0bcdad67a8451ca1a343->leave($__internal_3d24023600b25edf1031568be1b6ea16af6b5cd6c58a0bcdad67a8451ca1a343_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_3a4a5a4e7d67f590d7336a780c25d030d00aa6902e72b59569d1dc259cb08013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4a5a4e7d67f590d7336a780c25d030d00aa6902e72b59569d1dc259cb08013->enter($__internal_3a4a5a4e7d67f590d7336a780c25d030d00aa6902e72b59569d1dc259cb08013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_3116134f3d86c495f4b18937906a0384fa79e5659d420c0d26e6404fc4a80c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3116134f3d86c495f4b18937906a0384fa79e5659d420c0d26e6404fc4a80c5f->enter($__internal_3116134f3d86c495f4b18937906a0384fa79e5659d420c0d26e6404fc4a80c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_3116134f3d86c495f4b18937906a0384fa79e5659d420c0d26e6404fc4a80c5f->leave($__internal_3116134f3d86c495f4b18937906a0384fa79e5659d420c0d26e6404fc4a80c5f_prof);

        
        $__internal_3a4a5a4e7d67f590d7336a780c25d030d00aa6902e72b59569d1dc259cb08013->leave($__internal_3a4a5a4e7d67f590d7336a780c25d030d00aa6902e72b59569d1dc259cb08013_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd65926b19ee5318e5a6b7709aba20d34998d1d39366884d8245d1366beeee61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd65926b19ee5318e5a6b7709aba20d34998d1d39366884d8245d1366beeee61->enter($__internal_fd65926b19ee5318e5a6b7709aba20d34998d1d39366884d8245d1366beeee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dff0c481e2d46331ab3467cd07c7f1c6d57855c426cbd3a05463a9fe039028a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff0c481e2d46331ab3467cd07c7f1c6d57855c426cbd3a05463a9fe039028a7->enter($__internal_dff0c481e2d46331ab3467cd07c7f1c6d57855c426cbd3a05463a9fe039028a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t<div class=\"col-md-2 col-md-offset-10 cart\">
\t\t    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart");
        echo "\">
\t\t        <i class=\"fa fa-cart-arrow-down\"></i>
\t\t        <p>Panier : ";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method")), "html", null, true);
        echo "</p>
\t\t    </a>
\t\t</div>
\t\t<div class=\"blank\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 imgProduit\">
\t\t\t      \t<img src=\"
\t\t\t      \t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "imgProd", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                // line 21
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
        // line 23
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
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "idProduit", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "nomProduit", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "prixProduit", array()), "html", null, true);
        echo "&nbsp;€</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t\t\t\t<div class=\"col-md-6 description\">
\t\t\t\t\t<!-- texte de description du produit -->
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "descriptionProduit", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-md-offset-10\">
\t\t\t\t\t<form id=\"buyForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"number\" name=\"Quantite\" min=\"1\" value=\"1\" size=\"4\" required>
\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "idProduit", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"buyProd\" value=\"Acheter\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_dff0c481e2d46331ab3467cd07c7f1c6d57855c426cbd3a05463a9fe039028a7->leave($__internal_dff0c481e2d46331ab3467cd07c7f1c6d57855c426cbd3a05463a9fe039028a7_prof);

        
        $__internal_fd65926b19ee5318e5a6b7709aba20d34998d1d39366884d8245d1366beeee61->leave($__internal_fd65926b19ee5318e5a6b7709aba20d34998d1d39366884d8245d1366beeee61_prof);

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
        return array (  164 => 48,  153 => 40,  144 => 34,  140 => 33,  136 => 32,  123 => 23,  112 => 21,  107 => 20,  97 => 13,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Produit{% endblock %}

{% block navBoutique %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t<div class=\"col-md-2 col-md-offset-10 cart\">
\t\t    <a href=\"{{path('cart')}}\">
\t\t        <i class=\"fa fa-cart-arrow-down\"></i>
\t\t        <p>Panier : {{app.session.get('cart')|length}}</p>
\t\t    </a>
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
\t\t\t\t<div class=\"col-md-2 col-md-offset-10\">
\t\t\t\t\t<form id=\"buyForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"number\" name=\"Quantite\" min=\"1\" value=\"1\" size=\"4\" required>
\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{prod.idProduit}}\">
\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"buyProd\" value=\"Acheter\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:show.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/show.html.twig");
    }
}
