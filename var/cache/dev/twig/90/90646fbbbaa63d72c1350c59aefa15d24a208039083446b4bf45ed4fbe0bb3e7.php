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
        $__internal_a27cf9273e65e446e6c1cb6c02ee37d5d95386e6eb0bfd5f1558db5f280b53c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27cf9273e65e446e6c1cb6c02ee37d5d95386e6eb0bfd5f1558db5f280b53c5->enter($__internal_a27cf9273e65e446e6c1cb6c02ee37d5d95386e6eb0bfd5f1558db5f280b53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $__internal_115ff36e41400acbf607b80a81059c2ad0a4d3d3660f9f3876d95a0586d187d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ff36e41400acbf607b80a81059c2ad0a4d3d3660f9f3876d95a0586d187d5->enter($__internal_115ff36e41400acbf607b80a81059c2ad0a4d3d3660f9f3876d95a0586d187d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27cf9273e65e446e6c1cb6c02ee37d5d95386e6eb0bfd5f1558db5f280b53c5->leave($__internal_a27cf9273e65e446e6c1cb6c02ee37d5d95386e6eb0bfd5f1558db5f280b53c5_prof);

        
        $__internal_115ff36e41400acbf607b80a81059c2ad0a4d3d3660f9f3876d95a0586d187d5->leave($__internal_115ff36e41400acbf607b80a81059c2ad0a4d3d3660f9f3876d95a0586d187d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_031b4c5f9a75ada6cb02ff7d0fe5caa7a8c6072dab99c37ab143e029eb91a512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031b4c5f9a75ada6cb02ff7d0fe5caa7a8c6072dab99c37ab143e029eb91a512->enter($__internal_031b4c5f9a75ada6cb02ff7d0fe5caa7a8c6072dab99c37ab143e029eb91a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2e73c28b2a500cc5f55975a9e8b9a7b20bfe3423433fe04008c3da196c84baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e73c28b2a500cc5f55975a9e8b9a7b20bfe3423433fe04008c3da196c84baa->enter($__internal_f2e73c28b2a500cc5f55975a9e8b9a7b20bfe3423433fe04008c3da196c84baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_f2e73c28b2a500cc5f55975a9e8b9a7b20bfe3423433fe04008c3da196c84baa->leave($__internal_f2e73c28b2a500cc5f55975a9e8b9a7b20bfe3423433fe04008c3da196c84baa_prof);

        
        $__internal_031b4c5f9a75ada6cb02ff7d0fe5caa7a8c6072dab99c37ab143e029eb91a512->leave($__internal_031b4c5f9a75ada6cb02ff7d0fe5caa7a8c6072dab99c37ab143e029eb91a512_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_69e3f10da341ce65568b58631143595269707adb81084e2035380068b357cab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e3f10da341ce65568b58631143595269707adb81084e2035380068b357cab2->enter($__internal_69e3f10da341ce65568b58631143595269707adb81084e2035380068b357cab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_59cc9b61b280152a5ef22100a350181a3b997ecde12f7e329c71985e57e6306f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cc9b61b280152a5ef22100a350181a3b997ecde12f7e329c71985e57e6306f->enter($__internal_59cc9b61b280152a5ef22100a350181a3b997ecde12f7e329c71985e57e6306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_59cc9b61b280152a5ef22100a350181a3b997ecde12f7e329c71985e57e6306f->leave($__internal_59cc9b61b280152a5ef22100a350181a3b997ecde12f7e329c71985e57e6306f_prof);

        
        $__internal_69e3f10da341ce65568b58631143595269707adb81084e2035380068b357cab2->leave($__internal_69e3f10da341ce65568b58631143595269707adb81084e2035380068b357cab2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2d58cb60f8fd159ca1abfbb51326b0045283ea3d7fd8f8c4f6f5f42008f27fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d58cb60f8fd159ca1abfbb51326b0045283ea3d7fd8f8c4f6f5f42008f27fe->enter($__internal_b2d58cb60f8fd159ca1abfbb51326b0045283ea3d7fd8f8c4f6f5f42008f27fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aee4c88c3d0d64e6197d969c0711b2fbebdca4f082095ee8dc56b6ae164631b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee4c88c3d0d64e6197d969c0711b2fbebdca4f082095ee8dc56b6ae164631b5->enter($__internal_aee4c88c3d0d64e6197d969c0711b2fbebdca4f082095ee8dc56b6ae164631b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container blank formulaire\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form id=\"prodForm\" class=\"usefulForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nomProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Description\">Description :</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"desc\" placeholder=\"Entrer un description de produit\" required>";
        // line 17
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "descriptionProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionProduit", array()), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t<label class=\"control-label\" for=\"Prix\">Prix (€) :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" step=\"0,01\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t\t";
        // line 20
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Stock\">Stock :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "stock", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" class=\"control-label\" for=\"imgProd\">Image d'affiche :</label>
\t\t\t\t\t";
        // line 25
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "imgProd", array(), "any", true, true)) {
            // line 26
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "imgProd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 27
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
            // line 29
            echo "\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\" required>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 35
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Supprimer\">
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t";
        }
        // line 39
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_aee4c88c3d0d64e6197d969c0711b2fbebdca4f082095ee8dc56b6ae164631b5->leave($__internal_aee4c88c3d0d64e6197d969c0711b2fbebdca4f082095ee8dc56b6ae164631b5_prof);

        
        $__internal_b2d58cb60f8fd159ca1abfbb51326b0045283ea3d7fd8f8c4f6f5f42008f27fe->leave($__internal_b2d58cb60f8fd159ca1abfbb51326b0045283ea3d7fd8f8c4f6f5f42008f27fe_prof);

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
        return array (  173 => 39,  169 => 38,  164 => 35,  162 => 34,  156 => 30,  153 => 29,  140 => 27,  134 => 26,  132 => 25,  123 => 23,  113 => 20,  105 => 17,  96 => 15,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
