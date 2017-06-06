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
        $__internal_91528a315ce0097a3e766e1d88adcf48751ff352dc139a2f912eb44105560977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91528a315ce0097a3e766e1d88adcf48751ff352dc139a2f912eb44105560977->enter($__internal_91528a315ce0097a3e766e1d88adcf48751ff352dc139a2f912eb44105560977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $__internal_3be61f66f56aee8aecf35a72bd8bf5e825014e0a7f3b7da8e818e5ca461daf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be61f66f56aee8aecf35a72bd8bf5e825014e0a7f3b7da8e818e5ca461daf98->enter($__internal_3be61f66f56aee8aecf35a72bd8bf5e825014e0a7f3b7da8e818e5ca461daf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91528a315ce0097a3e766e1d88adcf48751ff352dc139a2f912eb44105560977->leave($__internal_91528a315ce0097a3e766e1d88adcf48751ff352dc139a2f912eb44105560977_prof);

        
        $__internal_3be61f66f56aee8aecf35a72bd8bf5e825014e0a7f3b7da8e818e5ca461daf98->leave($__internal_3be61f66f56aee8aecf35a72bd8bf5e825014e0a7f3b7da8e818e5ca461daf98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15d07e5deb45cf91ba0d0f4e2e6d919fc42e7ae6515c2d557846b431969e8d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d07e5deb45cf91ba0d0f4e2e6d919fc42e7ae6515c2d557846b431969e8d69->enter($__internal_15d07e5deb45cf91ba0d0f4e2e6d919fc42e7ae6515c2d557846b431969e8d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09c42708822c16f32628e3eaf67c7623cd60aee9833e97dc9b54aef3e3c6f648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c42708822c16f32628e3eaf67c7623cd60aee9833e97dc9b54aef3e3c6f648->enter($__internal_09c42708822c16f32628e3eaf67c7623cd60aee9833e97dc9b54aef3e3c6f648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if (array_key_exists("produit", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
        } else {
            echo "Création d'un produit";
        }
        
        $__internal_09c42708822c16f32628e3eaf67c7623cd60aee9833e97dc9b54aef3e3c6f648->leave($__internal_09c42708822c16f32628e3eaf67c7623cd60aee9833e97dc9b54aef3e3c6f648_prof);

        
        $__internal_15d07e5deb45cf91ba0d0f4e2e6d919fc42e7ae6515c2d557846b431969e8d69->leave($__internal_15d07e5deb45cf91ba0d0f4e2e6d919fc42e7ae6515c2d557846b431969e8d69_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_d5b13eb0bd27a226f28fa8e1c72b04a18c2bdbaa98624ecd52ba3ab6d2f2dea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b13eb0bd27a226f28fa8e1c72b04a18c2bdbaa98624ecd52ba3ab6d2f2dea6->enter($__internal_d5b13eb0bd27a226f28fa8e1c72b04a18c2bdbaa98624ecd52ba3ab6d2f2dea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_caf57a3d643a21983096611f065e1d6e62f929635d0e73b1ef7c996d4a98459c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf57a3d643a21983096611f065e1d6e62f929635d0e73b1ef7c996d4a98459c->enter($__internal_caf57a3d643a21983096611f065e1d6e62f929635d0e73b1ef7c996d4a98459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_caf57a3d643a21983096611f065e1d6e62f929635d0e73b1ef7c996d4a98459c->leave($__internal_caf57a3d643a21983096611f065e1d6e62f929635d0e73b1ef7c996d4a98459c_prof);

        
        $__internal_d5b13eb0bd27a226f28fa8e1c72b04a18c2bdbaa98624ecd52ba3ab6d2f2dea6->leave($__internal_d5b13eb0bd27a226f28fa8e1c72b04a18c2bdbaa98624ecd52ba3ab6d2f2dea6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0726af70ca0c05b5a41373484352b4daa4e9d7b1238a029847cb4a66262541c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0726af70ca0c05b5a41373484352b4daa4e9d7b1238a029847cb4a66262541c0->enter($__internal_0726af70ca0c05b5a41373484352b4daa4e9d7b1238a029847cb4a66262541c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1caa183f07f6275b8b39d995ef44d599ecd969d50b30d1e8847f3bdf6c0c3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1caa183f07f6275b8b39d995ef44d599ecd969d50b30d1e8847f3bdf6c0c3bd->enter($__internal_d1caa183f07f6275b8b39d995ef44d599ecd969d50b30d1e8847f3bdf6c0c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 17
        if ((array_key_exists("err", $context) && ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) != ""))) {
            // line 18
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 22
        echo "\t<div class=\"container blank formulaire\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form id=\"prodForm\" class=\"usefulForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t\t";
        // line 28
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nomProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Description\">Description :</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"desc\" placeholder=\"Entrer un description de produit\" required>";
        // line 30
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "descriptionProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionProduit", array()), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t<label class=\"control-label\" for=\"Prix\">Prix (€) :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" step=\"any\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t\t";
        // line 33
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" for=\"Stock\">Stock :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t\t";
        // line 36
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "stock", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t\t<label class=\"control-label\" class=\"control-label\" for=\"imgProd\">Image d'affiche :</label>
\t\t\t\t\t";
        // line 38
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "imgProd", array(), "any", true, true)) {
            // line 39
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "imgProd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 40
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
            // line 42
            echo "\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\">
\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\" required>
\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t";
        // line 49
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 50
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"delProd\" value=\"Supprimer\">
\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t";
        }
        // line 54
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_d1caa183f07f6275b8b39d995ef44d599ecd969d50b30d1e8847f3bdf6c0c3bd->leave($__internal_d1caa183f07f6275b8b39d995ef44d599ecd969d50b30d1e8847f3bdf6c0c3bd_prof);

        
        $__internal_0726af70ca0c05b5a41373484352b4daa4e9d7b1238a029847cb4a66262541c0->leave($__internal_0726af70ca0c05b5a41373484352b4daa4e9d7b1238a029847cb4a66262541c0_prof);

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
        return array (  212 => 54,  208 => 53,  203 => 50,  201 => 49,  196 => 46,  192 => 44,  188 => 42,  175 => 40,  169 => 39,  167 => 38,  158 => 36,  148 => 33,  140 => 30,  131 => 28,  123 => 22,  117 => 19,  114 => 18,  112 => 17,  109 => 16,  105 => 14,  100 => 12,  97 => 11,  95 => 10,  91 => 8,  82 => 7,  64 => 5,  42 => 3,  11 => 1,);
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
\t<div class=\"container-fluid text-center header-title\">
\t\t{% if produit is defined %}
\t\t\t<h2>Modification de</h2>
\t\t\t<h1>{{produit.nomProduit}}</h1>
\t\t{% else %}
\t\t<h1>Création d'un produit</h1>
\t\t{% endif %}
    </div>
        {% if err is defined and err != \"\" %}
            <div class=\"alert alert-danger\">
                {{err}}
            </div>
        {% endif %}
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
\t\t\t\t\t<input class=\"form-control\" type=\"number\" step=\"any\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t\t{% if produit.prixProduit is defined %}value=\"{{produit.prixProduit}}\"{% endif %} required>
\t\t\t\t\t<label class=\"control-label\" for=\"Stock\">Stock :</label>
\t\t\t\t\t<input class=\"form-control\" type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t\t{% if produit.stock is defined %}value=\"{{produit.stock}}\"{% endif %} required>
\t\t\t\t\t<label class=\"control-label\" class=\"control-label\" for=\"imgProd\">Image d'affiche :</label>
\t\t\t\t\t{% if produit.imgProd is defined %}
\t\t\t\t\t\t{% for img in produit.imgProd if img.typeImg.idType == 1 %}
\t\t\t\t\t\t\t<img src=\"{{asset('img/')}}{{img.chemin}}\" alt=\"image produit\" title=\"{{produit.nomProduit}}\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"prodImg\" required>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t{% if produit.idProduit is defined %}
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t<input form=\"prodForm\" type=\"submit\" class=\"btn btn-primary\" name=\"delProd\" value=\"Supprimer\">
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
