<?php

/* MainBundle:Boutique:modif_produit.html.twig */
class __TwigTemplate_50b19d0b3b859650dfc03f8e983b1c015e25786e7a7f2024bbb4a26ff9b5e545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Boutique:modif_produit.html.twig", 1);
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
        $__internal_365ac8b0fcafaac5343a53aa035fac195b8f6a07136bce5b5d15575124143a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365ac8b0fcafaac5343a53aa035fac195b8f6a07136bce5b5d15575124143a55->enter($__internal_365ac8b0fcafaac5343a53aa035fac195b8f6a07136bce5b5d15575124143a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $__internal_7bf3b1a47e0ac8654c393856546fd01a492099292bd514c34565b588aafe5cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf3b1a47e0ac8654c393856546fd01a492099292bd514c34565b588aafe5cf0->enter($__internal_7bf3b1a47e0ac8654c393856546fd01a492099292bd514c34565b588aafe5cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365ac8b0fcafaac5343a53aa035fac195b8f6a07136bce5b5d15575124143a55->leave($__internal_365ac8b0fcafaac5343a53aa035fac195b8f6a07136bce5b5d15575124143a55_prof);

        
        $__internal_7bf3b1a47e0ac8654c393856546fd01a492099292bd514c34565b588aafe5cf0->leave($__internal_7bf3b1a47e0ac8654c393856546fd01a492099292bd514c34565b588aafe5cf0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_436aac2c187afd4ba242f94fb2e3577a0c91a10a9e051061daf503b65178ae00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436aac2c187afd4ba242f94fb2e3577a0c91a10a9e051061daf503b65178ae00->enter($__internal_436aac2c187afd4ba242f94fb2e3577a0c91a10a9e051061daf503b65178ae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87c9962702a6668453b18f7c0cda8f8405ffc792989b333acb7adbb1cd59c7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c9962702a6668453b18f7c0cda8f8405ffc792989b333acb7adbb1cd59c7e2->enter($__internal_87c9962702a6668453b18f7c0cda8f8405ffc792989b333acb7adbb1cd59c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_87c9962702a6668453b18f7c0cda8f8405ffc792989b333acb7adbb1cd59c7e2->leave($__internal_87c9962702a6668453b18f7c0cda8f8405ffc792989b333acb7adbb1cd59c7e2_prof);

        
        $__internal_436aac2c187afd4ba242f94fb2e3577a0c91a10a9e051061daf503b65178ae00->leave($__internal_436aac2c187afd4ba242f94fb2e3577a0c91a10a9e051061daf503b65178ae00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b178d098cf658225020230d5d8c58834c61584e9e8bdc7130107159274e060e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b178d098cf658225020230d5d8c58834c61584e9e8bdc7130107159274e060e3->enter($__internal_b178d098cf658225020230d5d8c58834c61584e9e8bdc7130107159274e060e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67393d38b8619a261c3c9b38c992b49cb260656e78d7f3ac65306a50abb79505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67393d38b8619a261c3c9b38c992b49cb260656e78d7f3ac65306a50abb79505->enter($__internal_67393d38b8619a261c3c9b38c992b49cb260656e78d7f3ac65306a50abb79505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>
\t<div class=\"col-md-8 col-md-offset-2\">
\t\t<h3>Modification de Produit</h3>
\t\t<div class=\"col-md-12 contenuCorps\">\t\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"modifProduit\">
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"col-md-12\" >
\t\t\t\t\t\t";
        // line 13
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            echo "<span class=\"col-xs-5 col-sm-5 col-md-4\">Référence</span>";
        }
        // line 14
        echo "\t\t\t\t\t\t<span class=\"col-xs-5 col-sm-5 col-md-4\">Nom</span>
\t\t\t\t\t\t<span class=\"col-xs-2 col-sm-2 col-md-2\">Prix</span>
\t\t\t\t\t\t<span class=\"col-xs-2 col-sm-2 col-md-2\">Stock</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 20
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            echo "<label class=\"col-xs-4 col-sm-4 col-md-4\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "idProduit", array()), "html", null, true);
            echo "</label>";
        }
        // line 21
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"nom\" placeholder=\"titre\"  class=\"col-xs-4 col-sm-4 col-md-4\" value=\"";
        // line 23
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nomProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"decimal\" step=\"0,01\" name=\"prix\" placeholder=\"prix\"  class=\"col-xs-2 col-sm-2 col-md-2 col-xs-offset-1 col-sm-offset-1 col-md-offset-1\" value=\"";
        // line 26
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
        }
        echo "\">

\t\t\t\t\t\t<input type=\"number\" name=\"prix\" placeholder=\"stock\"  class=\"col-xs-2 col-sm-2 col-md-2 col-xs-offset-1 col-sm-offset-1 col-md-offset-1\" value=\"";
        // line 28
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-5 panel\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<span>Description</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"desc\" id=\"textModif\" placeholder=\"texte de déscription\" rows=\"5\" class=\"col-xs-4 col-sm-4 col-md-10\">";
        // line 38
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "descriptionProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionProduit", array()), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 panel\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"";
        // line 44
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "Avatar", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "Avatar", array()), "html", null, true);
        }
        echo "\" alt=\"image produit\" title=\"nom du produit\" style=\"border: 1px solid #ddd;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"file\" name=\"prodImg\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-12 panel\">
\t\t\t\t\t";
        // line 51
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 52
            echo "\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"delProd\" value=\"Supprimer\">
\t\t\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_67393d38b8619a261c3c9b38c992b49cb260656e78d7f3ac65306a50abb79505->leave($__internal_67393d38b8619a261c3c9b38c992b49cb260656e78d7f3ac65306a50abb79505_prof);

        
        $__internal_b178d098cf658225020230d5d8c58834c61584e9e8bdc7130107159274e060e3->leave($__internal_b178d098cf658225020230d5d8c58834c61584e9e8bdc7130107159274e060e3_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:modif_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  159 => 55,  154 => 52,  152 => 51,  140 => 44,  129 => 38,  114 => 28,  107 => 26,  99 => 23,  95 => 21,  89 => 20,  81 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block body %}
<main>
\t<div class=\"col-md-8 col-md-offset-2\">
\t\t<h3>Modification de Produit</h3>
\t\t<div class=\"col-md-12 contenuCorps\">\t\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"modifProduit\">
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"col-md-12\" >
\t\t\t\t\t\t{% if produit.idProduit is defined %}<span class=\"col-xs-5 col-sm-5 col-md-4\">Référence</span>{% endif %}
\t\t\t\t\t\t<span class=\"col-xs-5 col-sm-5 col-md-4\">Nom</span>
\t\t\t\t\t\t<span class=\"col-xs-2 col-sm-2 col-md-2\">Prix</span>
\t\t\t\t\t\t<span class=\"col-xs-2 col-sm-2 col-md-2\">Stock</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if produit.idProduit is defined %}<label class=\"col-xs-4 col-sm-4 col-md-4\">{{produit.idProduit}}</label>{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"nom\" placeholder=\"titre\"  class=\"col-xs-4 col-sm-4 col-md-4\" value=\"{% if produit.nomProduit is defined %}{{produit.nomProduit}}{% endif %}\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"decimal\" step=\"0,01\" name=\"prix\" placeholder=\"prix\"  class=\"col-xs-2 col-sm-2 col-md-2 col-xs-offset-1 col-sm-offset-1 col-md-offset-1\" value=\"{% if produit.prixProduit is defined %}{{produit.prixProduit}}{% endif %}\">

\t\t\t\t\t\t<input type=\"number\" name=\"prix\" placeholder=\"stock\"  class=\"col-xs-2 col-sm-2 col-md-2 col-xs-offset-1 col-sm-offset-1 col-md-offset-1\" value=\"{% if produit.prixProduit is defined %}{{produit.prixProduit}}{% endif %}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-5 panel\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<span>Description</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"desc\" id=\"textModif\" placeholder=\"texte de déscription\" rows=\"5\" class=\"col-xs-4 col-sm-4 col-md-10\">{% if produit.descriptionProduit is defined %}{{produit.descriptionProduit}}{% endif %}</textarea>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6 panel\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<img src=\"{% if produit.Avatar is defined %}{{produit.Avatar}}{% endif %}\" alt=\"image produit\" title=\"nom du produit\" style=\"border: 1px solid #ddd;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"file\" name=\"prodImg\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-md-12 panel\">
\t\t\t\t\t{% if produit.idProduit is defined %}
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"delProd\" value=\"Supprimer\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:modif_produit.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/modif_produit.html.twig");
    }
}
