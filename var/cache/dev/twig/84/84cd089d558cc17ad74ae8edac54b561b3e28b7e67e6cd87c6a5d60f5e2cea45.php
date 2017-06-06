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
        $__internal_c34be6501472c4bcb38aafffd70ba4f2538ff5a811609feeabb94f8c3c428937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34be6501472c4bcb38aafffd70ba4f2538ff5a811609feeabb94f8c3c428937->enter($__internal_c34be6501472c4bcb38aafffd70ba4f2538ff5a811609feeabb94f8c3c428937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $__internal_cfb45a54745acc03ffbed136999c1df1b8a7a060f66c6d3cee11dfd10ec27acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb45a54745acc03ffbed136999c1df1b8a7a060f66c6d3cee11dfd10ec27acc->enter($__internal_cfb45a54745acc03ffbed136999c1df1b8a7a060f66c6d3cee11dfd10ec27acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34be6501472c4bcb38aafffd70ba4f2538ff5a811609feeabb94f8c3c428937->leave($__internal_c34be6501472c4bcb38aafffd70ba4f2538ff5a811609feeabb94f8c3c428937_prof);

        
        $__internal_cfb45a54745acc03ffbed136999c1df1b8a7a060f66c6d3cee11dfd10ec27acc->leave($__internal_cfb45a54745acc03ffbed136999c1df1b8a7a060f66c6d3cee11dfd10ec27acc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78732920356060f310ae5178c9cee1c6258e7760f1cba06b346d5d216e60c769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78732920356060f310ae5178c9cee1c6258e7760f1cba06b346d5d216e60c769->enter($__internal_78732920356060f310ae5178c9cee1c6258e7760f1cba06b346d5d216e60c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7247064eca6be6aa15db7a944393505fcfc5a0c8bdff73153be8a1eaaad7a8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7247064eca6be6aa15db7a944393505fcfc5a0c8bdff73153be8a1eaaad7a8be->enter($__internal_7247064eca6be6aa15db7a944393505fcfc5a0c8bdff73153be8a1eaaad7a8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        
        $__internal_7247064eca6be6aa15db7a944393505fcfc5a0c8bdff73153be8a1eaaad7a8be->leave($__internal_7247064eca6be6aa15db7a944393505fcfc5a0c8bdff73153be8a1eaaad7a8be_prof);

        
        $__internal_78732920356060f310ae5178c9cee1c6258e7760f1cba06b346d5d216e60c769->leave($__internal_78732920356060f310ae5178c9cee1c6258e7760f1cba06b346d5d216e60c769_prof);

    }

    // line 5
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_7d6620304cf133f2a8142d694b57645f6c7310ed45219c2c3b64700ad89cb6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6620304cf133f2a8142d694b57645f6c7310ed45219c2c3b64700ad89cb6ce->enter($__internal_7d6620304cf133f2a8142d694b57645f6c7310ed45219c2c3b64700ad89cb6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_a065b9ff09e5dcdf1d8f2c980616ffb7fb1065015e2932e7b3756de12f33c458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a065b9ff09e5dcdf1d8f2c980616ffb7fb1065015e2932e7b3756de12f33c458->enter($__internal_a065b9ff09e5dcdf1d8f2c980616ffb7fb1065015e2932e7b3756de12f33c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        echo "class=\"active\"";
        
        $__internal_a065b9ff09e5dcdf1d8f2c980616ffb7fb1065015e2932e7b3756de12f33c458->leave($__internal_a065b9ff09e5dcdf1d8f2c980616ffb7fb1065015e2932e7b3756de12f33c458_prof);

        
        $__internal_7d6620304cf133f2a8142d694b57645f6c7310ed45219c2c3b64700ad89cb6ce->leave($__internal_7d6620304cf133f2a8142d694b57645f6c7310ed45219c2c3b64700ad89cb6ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c0a6c373a81a95a80fed2e754a3919493c11f5cfc7f0902e4a5bed519286cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0a6c373a81a95a80fed2e754a3919493c11f5cfc7f0902e4a5bed519286cfe->enter($__internal_3c0a6c373a81a95a80fed2e754a3919493c11f5cfc7f0902e4a5bed519286cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c2752fcd9a6ed83f078d1d95c64f72b5474544863db3fe411fb36ce3c816df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2752fcd9a6ed83f078d1d95c64f72b5474544863db3fe411fb36ce3c816df1->enter($__internal_3c2752fcd9a6ed83f078d1d95c64f72b5474544863db3fe411fb36ce3c816df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c2752fcd9a6ed83f078d1d95c64f72b5474544863db3fe411fb36ce3c816df1->leave($__internal_3c2752fcd9a6ed83f078d1d95c64f72b5474544863db3fe411fb36ce3c816df1_prof);

        
        $__internal_3c0a6c373a81a95a80fed2e754a3919493c11f5cfc7f0902e4a5bed519286cfe->leave($__internal_3c0a6c373a81a95a80fed2e754a3919493c11f5cfc7f0902e4a5bed519286cfe_prof);

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
