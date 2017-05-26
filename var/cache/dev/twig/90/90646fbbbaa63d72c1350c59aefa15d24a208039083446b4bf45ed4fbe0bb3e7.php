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
        $__internal_ed64a5d7edb275e98aefa6ce47b7bf2b23a0d1343c4639fe4c8b2b4e8c14aba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed64a5d7edb275e98aefa6ce47b7bf2b23a0d1343c4639fe4c8b2b4e8c14aba9->enter($__internal_ed64a5d7edb275e98aefa6ce47b7bf2b23a0d1343c4639fe4c8b2b4e8c14aba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $__internal_1954cdf76fce62ae8e127507bd9fdca4751113da4023448303513dd05ef75297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1954cdf76fce62ae8e127507bd9fdca4751113da4023448303513dd05ef75297->enter($__internal_1954cdf76fce62ae8e127507bd9fdca4751113da4023448303513dd05ef75297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed64a5d7edb275e98aefa6ce47b7bf2b23a0d1343c4639fe4c8b2b4e8c14aba9->leave($__internal_ed64a5d7edb275e98aefa6ce47b7bf2b23a0d1343c4639fe4c8b2b4e8c14aba9_prof);

        
        $__internal_1954cdf76fce62ae8e127507bd9fdca4751113da4023448303513dd05ef75297->leave($__internal_1954cdf76fce62ae8e127507bd9fdca4751113da4023448303513dd05ef75297_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d688412579282f8a300c8b196cf66a2cf9a806f2f3f0799c751f4faf2c5b01a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d688412579282f8a300c8b196cf66a2cf9a806f2f3f0799c751f4faf2c5b01a7->enter($__internal_d688412579282f8a300c8b196cf66a2cf9a806f2f3f0799c751f4faf2c5b01a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83c4a40879fb115af1ee285458f7fe72339740f528d6275a569102733065bcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c4a40879fb115af1ee285458f7fe72339740f528d6275a569102733065bcb6->enter($__internal_83c4a40879fb115af1ee285458f7fe72339740f528d6275a569102733065bcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
        
        $__internal_83c4a40879fb115af1ee285458f7fe72339740f528d6275a569102733065bcb6->leave($__internal_83c4a40879fb115af1ee285458f7fe72339740f528d6275a569102733065bcb6_prof);

        
        $__internal_d688412579282f8a300c8b196cf66a2cf9a806f2f3f0799c751f4faf2c5b01a7->leave($__internal_d688412579282f8a300c8b196cf66a2cf9a806f2f3f0799c751f4faf2c5b01a7_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_c23af4e3809b66554ed9dcfbfb55ad8359e050b27c905715a5685e826c064eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23af4e3809b66554ed9dcfbfb55ad8359e050b27c905715a5685e826c064eee->enter($__internal_c23af4e3809b66554ed9dcfbfb55ad8359e050b27c905715a5685e826c064eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_d5c4092e111e2827597fff0cb5915717c34e6d321cdbf9c24d4801bec5bdcc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c4092e111e2827597fff0cb5915717c34e6d321cdbf9c24d4801bec5bdcc98->enter($__internal_d5c4092e111e2827597fff0cb5915717c34e6d321cdbf9c24d4801bec5bdcc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_d5c4092e111e2827597fff0cb5915717c34e6d321cdbf9c24d4801bec5bdcc98->leave($__internal_d5c4092e111e2827597fff0cb5915717c34e6d321cdbf9c24d4801bec5bdcc98_prof);

        
        $__internal_c23af4e3809b66554ed9dcfbfb55ad8359e050b27c905715a5685e826c064eee->leave($__internal_c23af4e3809b66554ed9dcfbfb55ad8359e050b27c905715a5685e826c064eee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc98d519c70831d3fc670adf148e7eb642b5963501421f32baf42509e0d88ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc98d519c70831d3fc670adf148e7eb642b5963501421f32baf42509e0d88ab0->enter($__internal_cc98d519c70831d3fc670adf148e7eb642b5963501421f32baf42509e0d88ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60af0939bbcfedede38b5224ab9c8b6af83b5779da38e9ad10908de841851a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60af0939bbcfedede38b5224ab9c8b6af83b5779da38e9ad10908de841851a7a->enter($__internal_60af0939bbcfedede38b5224ab9c8b6af83b5779da38e9ad10908de841851a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container-fluid text-center header-title\">
\t\t";
        // line 10
        if (array_key_exists("produit", $context)) {
            // line 11
            echo "\t\t\t<h2>Modification de</h2>
\t\t\t<h1>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
            echo "</h1>
\t\t";
        } else {
            // line 14
            echo "\t\t<h1>Création d'un produit</h1>
\t\t";
        }
        // line 16
        echo "    </div>
\t<div class=\"container blank formulaire\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form id=\"prodForm\" class=\"usefulForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nomProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Description\">Description :</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"desc\" placeholder=\"Entrer un description de produit\" required>";
        // line 25
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "descriptionProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionProduit", array()), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t<label class=\"control-label\" for=\"Prix\">Prix (€) :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" step=\"0,01\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t\t";
        // line 28
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Stock\">Stock :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "stock", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" class=\"control-label\" for=\"imgProd\">Image d'affiche :</label>
\t\t\t\t\t";
        // line 33
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "imgProd", array(), "any", true, true)) {
            // line 34
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "imgProd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
                    echo "\" alt=\"image produit\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\" required>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 43
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Supprimer\">
\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_60af0939bbcfedede38b5224ab9c8b6af83b5779da38e9ad10908de841851a7a->leave($__internal_60af0939bbcfedede38b5224ab9c8b6af83b5779da38e9ad10908de841851a7a_prof);

        
        $__internal_cc98d519c70831d3fc670adf148e7eb642b5963501421f32baf42509e0d88ab0->leave($__internal_cc98d519c70831d3fc670adf148e7eb642b5963501421f32baf42509e0d88ab0_prof);

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
        return array (  191 => 47,  187 => 46,  182 => 43,  180 => 42,  174 => 38,  171 => 37,  158 => 35,  152 => 34,  150 => 33,  141 => 31,  131 => 28,  123 => 25,  114 => 23,  105 => 16,  101 => 14,  96 => 12,  93 => 11,  91 => 10,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{{produit.nomProduit}}{% endblock %}

{% block navBoutique %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container-fluid text-center header-title\">
\t\t{% if produit is defined %}
\t\t\t<h2>Modification de</h2>
\t\t\t<h1>{{produit.nomProduit}}</h1>
\t\t{% else %}
\t\t<h1>Création d'un produit</h1>
\t\t{% endif %}
    </div>
\t<div class=\"container blank formulaire\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form id=\"prodForm\" class=\"usefulForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t\t{% if produit.nomProduit is defined %}value=\"{{produit.nomProduit}}\"{% endif %} required>
\t\t\t\t\t<label class=\"control-label\" for=\"Description\">Description :</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"desc\" placeholder=\"Entrer un description de produit\" required>{% if produit.descriptionProduit is defined %}{{produit.descriptionProduit}}{% endif %}</textarea>
\t\t\t\t\t<label class=\"control-label\" for=\"Prix\">Prix (€) :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" step=\"0,01\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t\t{% if produit.prixProduit is defined %}value=\"{{produit.prixProduit}}\"{% endif %} required>
\t\t\t\t\t<label class=\"control-label\" for=\"Stock\">Stock :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t\t{% if produit.stock is defined %}value=\"{{produit.stock}}\"{% endif %} required>
\t\t\t\t\t<label class=\"control-label\" class=\"control-label\" for=\"imgProd\">Image d'affiche :</label>
\t\t\t\t\t{% if produit.imgProd is defined %}
\t\t\t\t\t\t{% for img in produit.imgProd if img.typeImg.idType == 1 %}
\t\t\t\t\t\t\t<img src=\"{{asset('img/')}}{{img.chemin}}\" alt=\"image produit\" title=\"{{produit.nomProduit}}\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\" required>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t{% if produit.idProduit is defined %}
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Supprimer\">
\t\t\t{% else %}
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t{% endif %}\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:modif_produit.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/modif_produit.html.twig");
    }
}
