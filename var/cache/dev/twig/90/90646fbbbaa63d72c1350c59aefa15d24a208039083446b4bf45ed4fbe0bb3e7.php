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
        $__internal_d2507fca0dbe504337e170f56685b28e62c4cd0dae98a501d651bcbe3206f79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2507fca0dbe504337e170f56685b28e62c4cd0dae98a501d651bcbe3206f79e->enter($__internal_d2507fca0dbe504337e170f56685b28e62c4cd0dae98a501d651bcbe3206f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $__internal_f99dd640752aa582957fa7e339eb27a141b56b13654ab6f059f467c4c9fb9c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99dd640752aa582957fa7e339eb27a141b56b13654ab6f059f467c4c9fb9c6e->enter($__internal_f99dd640752aa582957fa7e339eb27a141b56b13654ab6f059f467c4c9fb9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:modif_produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2507fca0dbe504337e170f56685b28e62c4cd0dae98a501d651bcbe3206f79e->leave($__internal_d2507fca0dbe504337e170f56685b28e62c4cd0dae98a501d651bcbe3206f79e_prof);

        
        $__internal_f99dd640752aa582957fa7e339eb27a141b56b13654ab6f059f467c4c9fb9c6e->leave($__internal_f99dd640752aa582957fa7e339eb27a141b56b13654ab6f059f467c4c9fb9c6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa6acbfd64f23f0287200d2ebef4edaca3774369314cd831e1374d4e7278628a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6acbfd64f23f0287200d2ebef4edaca3774369314cd831e1374d4e7278628a->enter($__internal_fa6acbfd64f23f0287200d2ebef4edaca3774369314cd831e1374d4e7278628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12d0c4afdf217cfcb4138ba41442bcae912c1d4d828a270edbf73ebfbd9220f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d0c4afdf217cfcb4138ba41442bcae912c1d4d828a270edbf73ebfbd9220f5->enter($__internal_12d0c4afdf217cfcb4138ba41442bcae912c1d4d828a270edbf73ebfbd9220f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_12d0c4afdf217cfcb4138ba41442bcae912c1d4d828a270edbf73ebfbd9220f5->leave($__internal_12d0c4afdf217cfcb4138ba41442bcae912c1d4d828a270edbf73ebfbd9220f5_prof);

        
        $__internal_fa6acbfd64f23f0287200d2ebef4edaca3774369314cd831e1374d4e7278628a->leave($__internal_fa6acbfd64f23f0287200d2ebef4edaca3774369314cd831e1374d4e7278628a_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_9db7a1d113163fb982d80834e7242fc6d224259a1c1b4c9baff0ee5cbd24affd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db7a1d113163fb982d80834e7242fc6d224259a1c1b4c9baff0ee5cbd24affd->enter($__internal_9db7a1d113163fb982d80834e7242fc6d224259a1c1b4c9baff0ee5cbd24affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_e903c9a86fa62878e240c77228581eb305ac26adb837224e21eed93933e9cbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e903c9a86fa62878e240c77228581eb305ac26adb837224e21eed93933e9cbbd->enter($__internal_e903c9a86fa62878e240c77228581eb305ac26adb837224e21eed93933e9cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_e903c9a86fa62878e240c77228581eb305ac26adb837224e21eed93933e9cbbd->leave($__internal_e903c9a86fa62878e240c77228581eb305ac26adb837224e21eed93933e9cbbd_prof);

        
        $__internal_9db7a1d113163fb982d80834e7242fc6d224259a1c1b4c9baff0ee5cbd24affd->leave($__internal_9db7a1d113163fb982d80834e7242fc6d224259a1c1b4c9baff0ee5cbd24affd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_deb61641036f06d8fd9d0d828a4c1ea42d05845b531508ed15d6e97440c1ae3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb61641036f06d8fd9d0d828a4c1ea42d05845b531508ed15d6e97440c1ae3e->enter($__internal_deb61641036f06d8fd9d0d828a4c1ea42d05845b531508ed15d6e97440c1ae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af906c642f52015e9be057146c5e412192235be7646e398eae6a603b366b435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af906c642f52015e9be057146c5e412192235be7646e398eae6a603b366b435f->enter($__internal_af906c642f52015e9be057146c5e412192235be7646e398eae6a603b366b435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container blank formulaire\">
\t\t<div class=\"col-md-8 col-md-offset-4\">
\t\t\t<form class=\"cnxForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\" id=\"modifProduit\">
\t\t\t\t<label for=\"Nom\">Nom :</label>
\t\t\t\t<input type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t";
        // line 14
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nomProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t<label for=\"Description\">Description :</label>
\t\t\t\t<textarea name=\"desc\" placeholder=\"Entrer un description de produit\" required>";
        // line 16
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "descriptionProduit", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionProduit", array()), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t<label for=\"Prix\">Prix (€) :</label>
\t\t\t\t<input type=\"number\" step=\"0,01\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t";
        // line 19
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixProduit", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixProduit", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t<label for=\"Stock\">Stock :</label>
\t\t\t\t<input type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t";
        // line 22
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "stock", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock", array()), "html", null, true);
            echo "\"";
        }
        echo " required>
\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "imgProd", array(), "any", true, true)) {
            // line 24
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "imgProd", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 25
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
                    echo "\" alt=\"image produit\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomProduit", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t<input type=\"file\" name=\"prodImg\" required>
\t\t\t\t";
        // line 29
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 30
            echo "\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</form>
\t\t\t";
        // line 35
        if ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "idProduit", array(), "any", true, true)) {
            // line 36
            echo "\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"delProd\" value=\"Supprimer\">
\t\t\t\t</form>
\t\t\t";
        }
        // line 39
        echo "\t
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_af906c642f52015e9be057146c5e412192235be7646e398eae6a603b366b435f->leave($__internal_af906c642f52015e9be057146c5e412192235be7646e398eae6a603b366b435f_prof);

        
        $__internal_deb61641036f06d8fd9d0d828a4c1ea42d05845b531508ed15d6e97440c1ae3e->leave($__internal_deb61641036f06d8fd9d0d828a4c1ea42d05845b531508ed15d6e97440c1ae3e_prof);

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
        return array (  178 => 39,  172 => 36,  170 => 35,  167 => 34,  163 => 32,  159 => 30,  157 => 29,  154 => 28,  151 => 27,  138 => 25,  132 => 24,  130 => 23,  122 => 22,  112 => 19,  104 => 16,  95 => 14,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t<div class=\"col-md-8 col-md-offset-4\">
\t\t\t<form class=\"cnxForm\" enctype=\"multipart/form-data\" method=\"post\" action=\"\" id=\"modifProduit\">
\t\t\t\t<label for=\"Nom\">Nom :</label>
\t\t\t\t<input type=\"text\" name=\"nom\" placeholder=\"Entrer un nom de produit\" size=\"30\"
\t\t\t\t{% if produit.nomProduit is defined %}value=\"{{produit.nomProduit}}\"{% endif %} required>
\t\t\t\t<label for=\"Description\">Description :</label>
\t\t\t\t<textarea name=\"desc\" placeholder=\"Entrer un description de produit\" required>{% if produit.descriptionProduit is defined %}{{produit.descriptionProduit}}{% endif %}</textarea>
\t\t\t\t<label for=\"Prix\">Prix (€) :</label>
\t\t\t\t<input type=\"number\" step=\"0,01\" name=\"prix\" placeholder=\"Entrer un prix\" size=\"5\"
\t\t\t\t{% if produit.prixProduit is defined %}value=\"{{produit.prixProduit}}\"{% endif %} required>
\t\t\t\t<label for=\"Stock\">Stock :</label>
\t\t\t\t<input type=\"number\" name=\"stock\" placeholder=\"Entrer un stock\" size=\"5\"
\t\t\t\t{% if produit.stock is defined %}value=\"{{produit.stock}}\"{% endif %} required>
\t\t\t\t{% if produit.imgProd is defined %}
\t\t\t\t\t{% for img in produit.imgProd if img.typeImg.idType == 1 %}
\t\t\t\t\t\t<img src=\"{{asset('img/')}}{{img.chemin}}\" alt=\"image produit\" title=\"{{produit.nomProduit}}\">
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t\t<input type=\"file\" name=\"prodImg\" required>
\t\t\t\t{% if produit.idProduit is defined %}
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"modProd\" value=\"Modifier\">
\t\t\t\t{% else %}
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"addProd\" value=\"Enregistrer\">
\t\t\t\t{% endif %}
\t\t\t</form>
\t\t\t{% if produit.idProduit is defined %}
\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-default\" name=\"delProd\" value=\"Supprimer\">
\t\t\t\t</form>
\t\t\t{% endif %}\t
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:modif_produit.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/modif_produit.html.twig");
    }
}
