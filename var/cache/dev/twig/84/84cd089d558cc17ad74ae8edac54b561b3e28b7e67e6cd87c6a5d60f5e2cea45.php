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
        $__internal_fd4d1034f392223e9920cf4ad1d203aad0b246fd8b274c9ffbf45f4002a69f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4d1034f392223e9920cf4ad1d203aad0b246fd8b274c9ffbf45f4002a69f10->enter($__internal_fd4d1034f392223e9920cf4ad1d203aad0b246fd8b274c9ffbf45f4002a69f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $__internal_8373c81372ca8fc56ad9affc067d723a25e500344b78094d553b7d2e27a876d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8373c81372ca8fc56ad9affc067d723a25e500344b78094d553b7d2e27a876d7->enter($__internal_8373c81372ca8fc56ad9affc067d723a25e500344b78094d553b7d2e27a876d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4d1034f392223e9920cf4ad1d203aad0b246fd8b274c9ffbf45f4002a69f10->leave($__internal_fd4d1034f392223e9920cf4ad1d203aad0b246fd8b274c9ffbf45f4002a69f10_prof);

        
        $__internal_8373c81372ca8fc56ad9affc067d723a25e500344b78094d553b7d2e27a876d7->leave($__internal_8373c81372ca8fc56ad9affc067d723a25e500344b78094d553b7d2e27a876d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d43570d678bbc9b60d225faf6c53586e08343c47fe75a896a4e3e44343050b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43570d678bbc9b60d225faf6c53586e08343c47fe75a896a4e3e44343050b55->enter($__internal_d43570d678bbc9b60d225faf6c53586e08343c47fe75a896a4e3e44343050b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24ee488872e6550d56874a418958194d5d2714eb1d6679abb2c9b4104add015e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ee488872e6550d56874a418958194d5d2714eb1d6679abb2c9b4104add015e->enter($__internal_24ee488872e6550d56874a418958194d5d2714eb1d6679abb2c9b4104add015e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_24ee488872e6550d56874a418958194d5d2714eb1d6679abb2c9b4104add015e->leave($__internal_24ee488872e6550d56874a418958194d5d2714eb1d6679abb2c9b4104add015e_prof);

        
        $__internal_d43570d678bbc9b60d225faf6c53586e08343c47fe75a896a4e3e44343050b55->leave($__internal_d43570d678bbc9b60d225faf6c53586e08343c47fe75a896a4e3e44343050b55_prof);

    }

    // line 5
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_4d1839cc3897e87c672ba94aa2707478ae92922f1ce6ee13624dcdee2e4c3337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1839cc3897e87c672ba94aa2707478ae92922f1ce6ee13624dcdee2e4c3337->enter($__internal_4d1839cc3897e87c672ba94aa2707478ae92922f1ce6ee13624dcdee2e4c3337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_2a9c0e4a518b748fbc436e6927515a32a103d1420ebd8386f78160b87000d169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9c0e4a518b748fbc436e6927515a32a103d1420ebd8386f78160b87000d169->enter($__internal_2a9c0e4a518b748fbc436e6927515a32a103d1420ebd8386f78160b87000d169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        echo "class=\"active\"";
        
        $__internal_2a9c0e4a518b748fbc436e6927515a32a103d1420ebd8386f78160b87000d169->leave($__internal_2a9c0e4a518b748fbc436e6927515a32a103d1420ebd8386f78160b87000d169_prof);

        
        $__internal_4d1839cc3897e87c672ba94aa2707478ae92922f1ce6ee13624dcdee2e4c3337->leave($__internal_4d1839cc3897e87c672ba94aa2707478ae92922f1ce6ee13624dcdee2e4c3337_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_75f32a61e3113c9e64618baf9b957253fb65a0785d254aa742c3bdce7059935a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f32a61e3113c9e64618baf9b957253fb65a0785d254aa742c3bdce7059935a->enter($__internal_75f32a61e3113c9e64618baf9b957253fb65a0785d254aa742c3bdce7059935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbd0b28757b82ef15c646f6818f3c013740f43b664fab2143480dc6a55daf87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd0b28757b82ef15c646f6818f3c013740f43b664fab2143480dc6a55daf87a->enter($__internal_bbd0b28757b82ef15c646f6818f3c013740f43b664fab2143480dc6a55daf87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t<center>
\t\t\t<h1></h1>
\t\t</center>
\t\t";
        // line 13
        if (array_key_exists("err", $context)) {
            // line 14
            echo "\t\t\t<div class=\"alert alter-danger\">
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\"
\t\t\t\t\t\t\t";
        // line 24
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
        // line 27
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
        // line 30
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
        // line 32
        echo twig_escape_filter($this->env, (isset($context["attr2"]) ? $context["attr2"] : $this->getContext($context, "attr2")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 1))) {
            echo "selected";
        }
        echo ">A1</option>
\t\t\t\t\t\t\t\t<option value=\"2\"";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 2))) {
            echo "selected";
        }
        echo ">A2</option>
\t\t\t\t\t\t\t\t<option value=\"3\"";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 3))) {
            echo "selected";
        }
        echo ">A3</option>
\t\t\t\t\t\t\t\t<option value=\"4\"";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 4))) {
            echo "selected";
        }
        echo ">A4</option>
\t\t\t\t\t\t\t\t<option value=\"5\"";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoUser", array(), "any", false, true), "idPromo", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoUser", array()), "idPromo", array()) == 5))) {
            echo "selected";
        }
        echo ">A5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t";
        // line 40
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array(), "any", true, true)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "chemin", array()), "html", null, true);
            echo "\" alt=\"\" />";
        }
        // line 41
        echo "\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"Avatar\" ";
        echo twig_escape_filter($this->env, (isset($context["attr2"]) ? $context["attr2"] : $this->getContext($context, "attr2")), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\"
\t\t\t\t\t\t\t";
        // line 44
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
        // line 47
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
        // line 49
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
        
        $__internal_bbd0b28757b82ef15c646f6818f3c013740f43b664fab2143480dc6a55daf87a->leave($__internal_bbd0b28757b82ef15c646f6818f3c013740f43b664fab2143480dc6a55daf87a_prof);

        
        $__internal_75f32a61e3113c9e64618baf9b957253fb65a0785d254aa742c3bdce7059935a->leave($__internal_75f32a61e3113c9e64618baf9b957253fb65a0785d254aa742c3bdce7059935a_prof);

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
        return array (  220 => 49,  209 => 47,  197 => 44,  190 => 41,  184 => 40,  176 => 37,  170 => 36,  164 => 35,  158 => 34,  152 => 33,  148 => 32,  137 => 30,  125 => 27,  113 => 24,  105 => 18,  99 => 15,  96 => 14,  94 => 13,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Inscription/Connexion{% endblock %}

{% block navProfil %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t<center>
\t\t\t<h1></h1>
\t\t</center>
\t\t{% if err is defined %}
\t\t\t<div class=\"alert alter-danger\">
\t\t\t\t{{err}}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
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
\t\t\t\t\t\t\t{% if user.avatar is defined %}<img src=\"{{user.avatar.chemin}}\" alt=\"\" />{% endif %}
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"Avatar\" {{attr2}}>
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
