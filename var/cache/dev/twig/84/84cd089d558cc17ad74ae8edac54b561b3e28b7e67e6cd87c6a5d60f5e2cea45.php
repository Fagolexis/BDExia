<?php

/* MainBundle:Gestion:profil.html.twig */
class __TwigTemplate_6bdea5ef491fcd51aa19e32108159d398f4465fc5f99873758129e966bb362b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Gestion:profil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navProfil' => array($this, 'block_navProfil'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca0c40ecc13880e13c16d6bda521b10c765d2321e0ea6be72dbf58271c567a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0c40ecc13880e13c16d6bda521b10c765d2321e0ea6be72dbf58271c567a60->enter($__internal_ca0c40ecc13880e13c16d6bda521b10c765d2321e0ea6be72dbf58271c567a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $__internal_6fc55bb8f0c9f1400bc9c58fe46a286542b8e2a026d88155278b3e2ed235fb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc55bb8f0c9f1400bc9c58fe46a286542b8e2a026d88155278b3e2ed235fb05->enter($__internal_6fc55bb8f0c9f1400bc9c58fe46a286542b8e2a026d88155278b3e2ed235fb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca0c40ecc13880e13c16d6bda521b10c765d2321e0ea6be72dbf58271c567a60->leave($__internal_ca0c40ecc13880e13c16d6bda521b10c765d2321e0ea6be72dbf58271c567a60_prof);

        
        $__internal_6fc55bb8f0c9f1400bc9c58fe46a286542b8e2a026d88155278b3e2ed235fb05->leave($__internal_6fc55bb8f0c9f1400bc9c58fe46a286542b8e2a026d88155278b3e2ed235fb05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97ec708eb6e42bf8bc5ae11fd0e19d2aec5dc402529b210ac44664ac6356a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ec708eb6e42bf8bc5ae11fd0e19d2aec5dc402529b210ac44664ac6356a6ce->enter($__internal_97ec708eb6e42bf8bc5ae11fd0e19d2aec5dc402529b210ac44664ac6356a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0f136412074c9103d386bf8775f8aa0aae8c7ee1811b1148f3a35032581a0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f136412074c9103d386bf8775f8aa0aae8c7ee1811b1148f3a35032581a0b1->enter($__internal_d0f136412074c9103d386bf8775f8aa0aae8c7ee1811b1148f3a35032581a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        
        $__internal_d0f136412074c9103d386bf8775f8aa0aae8c7ee1811b1148f3a35032581a0b1->leave($__internal_d0f136412074c9103d386bf8775f8aa0aae8c7ee1811b1148f3a35032581a0b1_prof);

        
        $__internal_97ec708eb6e42bf8bc5ae11fd0e19d2aec5dc402529b210ac44664ac6356a6ce->leave($__internal_97ec708eb6e42bf8bc5ae11fd0e19d2aec5dc402529b210ac44664ac6356a6ce_prof);

    }

    // line 5
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_66896c6f46f49b82439ff1b34870cadab8c85581cdc78f737624a6d94fb6a28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66896c6f46f49b82439ff1b34870cadab8c85581cdc78f737624a6d94fb6a28c->enter($__internal_66896c6f46f49b82439ff1b34870cadab8c85581cdc78f737624a6d94fb6a28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_23292be3bb5dbbc3fa82eb2e74f226c7d574ee9f33b23912d9fa85a2d37db2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23292be3bb5dbbc3fa82eb2e74f226c7d574ee9f33b23912d9fa85a2d37db2a9->enter($__internal_23292be3bb5dbbc3fa82eb2e74f226c7d574ee9f33b23912d9fa85a2d37db2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        echo "class=\"active\"";
        
        $__internal_23292be3bb5dbbc3fa82eb2e74f226c7d574ee9f33b23912d9fa85a2d37db2a9->leave($__internal_23292be3bb5dbbc3fa82eb2e74f226c7d574ee9f33b23912d9fa85a2d37db2a9_prof);

        
        $__internal_66896c6f46f49b82439ff1b34870cadab8c85581cdc78f737624a6d94fb6a28c->leave($__internal_66896c6f46f49b82439ff1b34870cadab8c85581cdc78f737624a6d94fb6a28c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f3742188be9c2082430b5906af434f417e5fe9c88257475791f67cefa28c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f3742188be9c2082430b5906af434f417e5fe9c88257475791f67cefa28c67->enter($__internal_18f3742188be9c2082430b5906af434f417e5fe9c88257475791f67cefa28c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cf52ef5964b87503717994b8769f5452abd3c53a41679a1b425882d92cc18e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf52ef5964b87503717994b8769f5452abd3c53a41679a1b425882d92cc18e2->enter($__internal_5cf52ef5964b87503717994b8769f5452abd3c53a41679a1b425882d92cc18e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"header-title container-fluid text-center\">
\t\t<h2>Profil de :</h2>
\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</h1>
    </div>
\t<div class=\"container\">
\t\t";
        // line 14
        if ((array_key_exists("err", $context) && ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) != ""))) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\"
\t\t\t\t\t\t\t";
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nom", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\"
\t\t\t\t\t\t\t";
        // line 28
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenom", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"Naissance\"
\t\t\t\t\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "naissance", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "naissance", array()), "Y-m-d"), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"Promo\" ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["attr2"]) ? $context["attr2"] : $this->getContext($context, "attr2")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 1))) {
            echo "selected";
        }
        echo ">A1</option>
\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 2))) {
            echo "selected";
        }
        echo ">A2</option>
\t\t\t\t\t\t\t\t<option value=\"3\"";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 3))) {
            echo "selected";
        }
        echo ">A3</option>
\t\t\t\t\t\t\t\t<option value=\"4\"";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 4))) {
            echo "selected";
        }
        echo ">A4</option>
\t\t\t\t\t\t\t\t<option value=\"5\"";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 5))) {
            echo "selected";
        }
        echo ">A5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatarUser", array(), "any", true, true) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatarUser", array()) != null))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatarUser", array()), "chemin", array()), "html", null, true);
        } else {
            echo "avatar.jpg";
        }
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t<input type=\"file\" accept=\".png, .jpg\" name=\"Avatar\" required>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\"
\t\t\t\t\t\t\t";
        // line 45
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "telephone", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attr2"]) ? $context["attr2"] : $this->getContext($context, "attr2")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\"
\t\t\t\t\t\t\t";
        // line 48
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mail", array(), "any", true, true)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mail", array()), "html", null, true);
            echo "\"";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe : </label><p>(Laissez vide si vous ne voulez pas changer)</p>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"Mdp\" placeholder=\"Entrer votre mot de passe\" ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["attr2"]) ? $context["attr2"] : $this->getContext($context, "attr2")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"saveProfil\" value=\"Enregistrer\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"discard\" value=\"Annuler\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
  <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_5cf52ef5964b87503717994b8769f5452abd3c53a41679a1b425882d92cc18e2->leave($__internal_5cf52ef5964b87503717994b8769f5452abd3c53a41679a1b425882d92cc18e2_prof);

        
        $__internal_18f3742188be9c2082430b5906af434f417e5fe9c88257475791f67cefa28c67->leave($__internal_18f3742188be9c2082430b5906af434f417e5fe9c88257475791f67cefa28c67_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Gestion:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 50,  216 => 48,  204 => 45,  192 => 41,  184 => 38,  178 => 37,  172 => 36,  166 => 35,  160 => 34,  156 => 33,  145 => 31,  133 => 28,  121 => 25,  113 => 19,  107 => 16,  104 => 15,  102 => 14,  94 => 11,  89 => 8,  80 => 7,  62 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{{user.prenom}} {{user.nom}}{% endblock %}

{% block navProfil %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"header-title container-fluid text-center\">
\t\t<h2>Profil de :</h2>
\t\t<h1>{{user.prenom}} {{user.nom}}</h1>
    </div>
\t<div class=\"container\">
\t\t{% if err is defined and err != \"\" %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{err}}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\"
\t\t\t\t\t\t\t{% if user.nom is defined %}value=\"{{user.nom}}\"{% endif %} {{attr}}>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\"
\t\t\t\t\t\t\t{% if user.prenom is defined %}value=\"{{user.prenom}}\"{% endif %} {{attr}}>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"Naissance\"
\t\t\t\t\t\t\t{% if user.naissance is defined %}value=\"{{user.naissance|date('Y-m-d')}}\"{% endif %} {{attr}}>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"Promo\" {{attr2}}>
\t\t\t\t\t\t\t\t<option value=\"1\"{% if user.promoUser.idPromo is defined and user.promoUser.idPromo == 1 %}selected{% endif %}>A1</option>
\t\t\t\t\t\t\t\t<option value=\"2\"{% if user.promoUser.idPromo is defined and user.promoUser.idPromo == 2 %}selected{% endif %}>A2</option>
\t\t\t\t\t\t\t\t<option value=\"3\"{% if user.promoUser.idPromo is defined and user.promoUser.idPromo == 3 %}selected{% endif %}>A3</option>
\t\t\t\t\t\t\t\t<option value=\"4\"{% if user.promoUser.idPromo is defined and user.promoUser.idPromo == 4 %}selected{% endif %}>A4</option>
\t\t\t\t\t\t\t\t<option value=\"5\"{% if user.promoUser.idPromo is defined and user.promoUser.idPromo == 5 %}selected{% endif %}>A5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t<img src=\"{{asset('img/')}}{% if user.avatarUser is defined and user.avatarUser != NULL %}{{user.avatarUser.chemin}}{% else %}avatar.jpg{% endif %}\" alt=\"\" />
\t\t\t\t\t\t\t<input type=\"file\" accept=\".png, .jpg\" name=\"Avatar\" required>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\"
\t\t\t\t\t\t\t{% if user.telephone is defined %}value=\"{{user.telephone}}\"{% endif %} {{attr2}}>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\"
\t\t\t\t\t\t\t{% if user.mail is defined %}value=\"{{user.mail}}\"{% endif %} {{attr}}>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe : </label><p>(Laissez vide si vous ne voulez pas changer)</p>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"Mdp\" placeholder=\"Entrer votre mot de passe\" {{attr2}}>
\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"saveProfil\" value=\"Enregistrer\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"discard\" value=\"Annuler\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
  <div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Gestion:profil.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Gestion/profil.html.twig");
    }
}
