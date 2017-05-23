<?php

/* MainBundle:Connexion:connexion.html.twig */
class __TwigTemplate_202f42df0507e7cc0f8ce26b0d2039ed857e632de189d881fd8ad4f5251ff485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Connexion:connexion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navCnx' => array($this, 'block_navCnx'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b705f66bcc2ff12adaa6251d1b2582106ab7ad0be2eefb1d385038ab24a11fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b705f66bcc2ff12adaa6251d1b2582106ab7ad0be2eefb1d385038ab24a11fe9->enter($__internal_b705f66bcc2ff12adaa6251d1b2582106ab7ad0be2eefb1d385038ab24a11fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_ffb5a2ad360fe0e46eac24a5b0ede927fbc380b2d9f776420daaf6d57a03d029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb5a2ad360fe0e46eac24a5b0ede927fbc380b2d9f776420daaf6d57a03d029->enter($__internal_ffb5a2ad360fe0e46eac24a5b0ede927fbc380b2d9f776420daaf6d57a03d029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b705f66bcc2ff12adaa6251d1b2582106ab7ad0be2eefb1d385038ab24a11fe9->leave($__internal_b705f66bcc2ff12adaa6251d1b2582106ab7ad0be2eefb1d385038ab24a11fe9_prof);

        
        $__internal_ffb5a2ad360fe0e46eac24a5b0ede927fbc380b2d9f776420daaf6d57a03d029->leave($__internal_ffb5a2ad360fe0e46eac24a5b0ede927fbc380b2d9f776420daaf6d57a03d029_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_436d418fe66181e34410b427183fe53032e4acf88997a4ca5a16a97a8a4047f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436d418fe66181e34410b427183fe53032e4acf88997a4ca5a16a97a8a4047f6->enter($__internal_436d418fe66181e34410b427183fe53032e4acf88997a4ca5a16a97a8a4047f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_968724a5093007c98d08ce470bc8bf09cc472e360e6ef324432b3069577aa0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968724a5093007c98d08ce470bc8bf09cc472e360e6ef324432b3069577aa0ad->enter($__internal_968724a5093007c98d08ce470bc8bf09cc472e360e6ef324432b3069577aa0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_968724a5093007c98d08ce470bc8bf09cc472e360e6ef324432b3069577aa0ad->leave($__internal_968724a5093007c98d08ce470bc8bf09cc472e360e6ef324432b3069577aa0ad_prof);

        
        $__internal_436d418fe66181e34410b427183fe53032e4acf88997a4ca5a16a97a8a4047f6->leave($__internal_436d418fe66181e34410b427183fe53032e4acf88997a4ca5a16a97a8a4047f6_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_86d8a23d99b1184e807fc0aac31e7fdffee0a7d25a92a2183e579d1266c5d48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d8a23d99b1184e807fc0aac31e7fdffee0a7d25a92a2183e579d1266c5d48b->enter($__internal_86d8a23d99b1184e807fc0aac31e7fdffee0a7d25a92a2183e579d1266c5d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_d3264940a629d2000919ab9a15a5f75f4be8a1e05e098fd8e17fc0c764697833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3264940a629d2000919ab9a15a5f75f4be8a1e05e098fd8e17fc0c764697833->enter($__internal_d3264940a629d2000919ab9a15a5f75f4be8a1e05e098fd8e17fc0c764697833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_d3264940a629d2000919ab9a15a5f75f4be8a1e05e098fd8e17fc0c764697833->leave($__internal_d3264940a629d2000919ab9a15a5f75f4be8a1e05e098fd8e17fc0c764697833_prof);

        
        $__internal_86d8a23d99b1184e807fc0aac31e7fdffee0a7d25a92a2183e579d1266c5d48b->leave($__internal_86d8a23d99b1184e807fc0aac31e7fdffee0a7d25a92a2183e579d1266c5d48b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdad2a664852b5b9c01f36b73ff3c4db1c624783de54b5f73770f7de07f9ff0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdad2a664852b5b9c01f36b73ff3c4db1c624783de54b5f73770f7de07f9ff0e->enter($__internal_cdad2a664852b5b9c01f36b73ff3c4db1c624783de54b5f73770f7de07f9ff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adb49037bf258baf3090ce7a4d9902f281883aad6d43aaa794b93e11463b6294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb49037bf258baf3090ce7a4d9902f281883aad6d43aaa794b93e11463b6294->enter($__internal_adb49037bf258baf3090ce7a4d9902f281883aad6d43aaa794b93e11463b6294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t<center>
\t\t<h1>Page de connexion du site du BDE CESI eXia</h1>
\t\t<h3>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["errormessage"]) ? $context["errormessage"] : $this->getContext($context, "errormessage")), "html", null, true);
        echo "</h3>
\t\t</center>
\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-4 col-md-8\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form class=\"cnxForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\" size=\"30\" required>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t\t<input type=\"date\" name=\"Naissance\" placeholder=\"JJ\" required>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<label for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t<select name=\"Promo\">
\t\t\t\t\t\t\t\t<option value=\"1\">A1</option>
\t\t\t\t\t\t\t\t<option value=\"2\">A2</option>
\t\t\t\t\t\t\t\t<option value=\"3\">A3</option>
\t\t\t\t\t\t\t\t<option value=\"4\">A4</option>
\t\t\t\t\t\t\t\t<option value=\"5\">A5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t<input type=\"file\" name=\"Avatar\">
\t\t\t\t\t\t\t<label for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t<input type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\" size=\"30\">
\t\t\t\t\t\t\t<label for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t<input type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Mdp\">Mot de passe :</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"Mdp\" placeholder=\"Entrer un mot de passe sécurisé\" size=\"30\" required>
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane active\" id=\"cnxTab\">
\t\t\t\t\t\t<form class=\"cnxForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label for=\"Email\">Mail : </label>
\t\t\t\t\t\t\t<input name= \"Email\" type=\"email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Mdp\">Mot de passe : </label>
\t\t\t\t\t\t\t<input name= \"Mdp\" type=\"password\" placeholder=\"Entrer votre mot de passe\" size=\"30\" required>
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submitConnexion\" value=\"Se connecter\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
</main>
";
        
        $__internal_adb49037bf258baf3090ce7a4d9902f281883aad6d43aaa794b93e11463b6294->leave($__internal_adb49037bf258baf3090ce7a4d9902f281883aad6d43aaa794b93e11463b6294_prof);

        
        $__internal_cdad2a664852b5b9c01f36b73ff3c4db1c624783de54b5f73770f7de07f9ff0e->leave($__internal_cdad2a664852b5b9c01f36b73ff3c4db1c624783de54b5f73770f7de07f9ff0e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Connexion:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block navCnx %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t<center>
\t\t<h1>Page de connexion du site du BDE CESI eXia</h1>
\t\t<h3>{{errormessage}}</h3>
\t\t</center>
\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-4 col-md-8\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form class=\"cnxForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\" size=\"30\" required>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<label for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t\t<input type=\"date\" name=\"Naissance\" placeholder=\"JJ\" required>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<label for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t<select name=\"Promo\">
\t\t\t\t\t\t\t\t<option value=\"1\">A1</option>
\t\t\t\t\t\t\t\t<option value=\"2\">A2</option>
\t\t\t\t\t\t\t\t<option value=\"3\">A3</option>
\t\t\t\t\t\t\t\t<option value=\"4\">A4</option>
\t\t\t\t\t\t\t\t<option value=\"5\">A5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t<input type=\"file\" name=\"Avatar\">
\t\t\t\t\t\t\t<label for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t<input type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\" size=\"30\">
\t\t\t\t\t\t\t<label for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t<input type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Mdp\">Mot de passe :</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"Mdp\" placeholder=\"Entrer un mot de passe sécurisé\" size=\"30\" required>
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane active\" id=\"cnxTab\">
\t\t\t\t\t\t<form class=\"cnxForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label for=\"Email\">Mail : </label>
\t\t\t\t\t\t\t<input name= \"Email\" type=\"email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label for=\"Mdp\">Mot de passe : </label>
\t\t\t\t\t\t\t<input name= \"Mdp\" type=\"password\" placeholder=\"Entrer votre mot de passe\" size=\"30\" required>
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submitConnexion\" value=\"Se connecter\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
</main>
{% endblock %}
", "MainBundle:Connexion:connexion.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Connexion/connexion.html.twig");
    }
}
