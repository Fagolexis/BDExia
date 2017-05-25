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
        $__internal_f65d5912f5a410be8557263cbedc0a9b0969b6ba240dca4ebd6e3457b2d1ceff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65d5912f5a410be8557263cbedc0a9b0969b6ba240dca4ebd6e3457b2d1ceff->enter($__internal_f65d5912f5a410be8557263cbedc0a9b0969b6ba240dca4ebd6e3457b2d1ceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_11cd2234ec5751a1255de7a4c2ce0a134236ef96d23572174a4b9dfe1691bbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cd2234ec5751a1255de7a4c2ce0a134236ef96d23572174a4b9dfe1691bbd3->enter($__internal_11cd2234ec5751a1255de7a4c2ce0a134236ef96d23572174a4b9dfe1691bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65d5912f5a410be8557263cbedc0a9b0969b6ba240dca4ebd6e3457b2d1ceff->leave($__internal_f65d5912f5a410be8557263cbedc0a9b0969b6ba240dca4ebd6e3457b2d1ceff_prof);

        
        $__internal_11cd2234ec5751a1255de7a4c2ce0a134236ef96d23572174a4b9dfe1691bbd3->leave($__internal_11cd2234ec5751a1255de7a4c2ce0a134236ef96d23572174a4b9dfe1691bbd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e1119dc58e0b6039bf16998e467734bd1ed6186e5d31b08ea5c1fd02b395c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1119dc58e0b6039bf16998e467734bd1ed6186e5d31b08ea5c1fd02b395c1e->enter($__internal_6e1119dc58e0b6039bf16998e467734bd1ed6186e5d31b08ea5c1fd02b395c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0662979dc273af00b0e7133e7fed00deeaf5d7468be42a3041b4d0e2389cf18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0662979dc273af00b0e7133e7fed00deeaf5d7468be42a3041b4d0e2389cf18c->enter($__internal_0662979dc273af00b0e7133e7fed00deeaf5d7468be42a3041b4d0e2389cf18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_0662979dc273af00b0e7133e7fed00deeaf5d7468be42a3041b4d0e2389cf18c->leave($__internal_0662979dc273af00b0e7133e7fed00deeaf5d7468be42a3041b4d0e2389cf18c_prof);

        
        $__internal_6e1119dc58e0b6039bf16998e467734bd1ed6186e5d31b08ea5c1fd02b395c1e->leave($__internal_6e1119dc58e0b6039bf16998e467734bd1ed6186e5d31b08ea5c1fd02b395c1e_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_480ff2985fbb1caf5a071a2332a6bea6dbb29623aa3be30ac7db81181e7e4338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480ff2985fbb1caf5a071a2332a6bea6dbb29623aa3be30ac7db81181e7e4338->enter($__internal_480ff2985fbb1caf5a071a2332a6bea6dbb29623aa3be30ac7db81181e7e4338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_5817a23810230fc1fb11b5a1970ea3aa31dfe08d2a08b5d83fb245b5dd0e500b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5817a23810230fc1fb11b5a1970ea3aa31dfe08d2a08b5d83fb245b5dd0e500b->enter($__internal_5817a23810230fc1fb11b5a1970ea3aa31dfe08d2a08b5d83fb245b5dd0e500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_5817a23810230fc1fb11b5a1970ea3aa31dfe08d2a08b5d83fb245b5dd0e500b->leave($__internal_5817a23810230fc1fb11b5a1970ea3aa31dfe08d2a08b5d83fb245b5dd0e500b_prof);

        
        $__internal_480ff2985fbb1caf5a071a2332a6bea6dbb29623aa3be30ac7db81181e7e4338->leave($__internal_480ff2985fbb1caf5a071a2332a6bea6dbb29623aa3be30ac7db81181e7e4338_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c550d9e0d64ef5147d243f24f708d74d390f107d1573fea716e0f901dc37d5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c550d9e0d64ef5147d243f24f708d74d390f107d1573fea716e0f901dc37d5e3->enter($__internal_c550d9e0d64ef5147d243f24f708d74d390f107d1573fea716e0f901dc37d5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61f37b63bfe89021004659586d162b8c20de99582e947217b78c5955b6edd3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f37b63bfe89021004659586d162b8c20de99582e947217b78c5955b6edd3db->enter($__internal_61f37b63bfe89021004659586d162b8c20de99582e947217b78c5955b6edd3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t<center>
\t\t<h3>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["errormessage"]) ? $context["errormessage"] : $this->getContext($context, "errormessage")), "html", null, true);
        echo "</h3>
\t\t</center>
\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"Naissance\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"Promo\">
\t\t\t\t\t\t\t\t\t<option value=\"1\">A1</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">A2</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">A3</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">A4</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">A5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"Avatar\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\" size=\"30\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"Mdp\" placeholder=\"Entrer un mot de passe sécurisé\" size=\"30\" required>
\t\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane active\" id=\"cnxTab\">
\t\t\t\t\t\t<form id=\"cnxForm\" class=\"usefulForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail : </label>
\t\t\t\t\t\t\t<input class=\"form-control\" name= \"Email\" type=\"email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe : </label>
\t\t\t\t\t\t\t<input class=\"form-control\" name= \"Mdp\" type=\"password\" placeholder=\"Entrer votre mot de passe\" size=\"30\" required>
\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"submitConnexion\" value=\"Se connecter\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
  <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_61f37b63bfe89021004659586d162b8c20de99582e947217b78c5955b6edd3db->leave($__internal_61f37b63bfe89021004659586d162b8c20de99582e947217b78c5955b6edd3db_prof);

        
        $__internal_c550d9e0d64ef5147d243f24f708d74d390f107d1573fea716e0f901dc37d5e3->leave($__internal_c550d9e0d64ef5147d243f24f708d74d390f107d1573fea716e0f901dc37d5e3_prof);

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
        return array (  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t<h3>{{errormessage}}</h3>
\t\t</center>
\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Nom\">Nom :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Nom\" placeholder=\"Entrer votre nom de famille\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Prenom\">Prénom :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"Prenom\" placeholder=\"Entrer votre prénom\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Date\">Date de naissance :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"date\" name=\"Naissance\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Promo\">Promotion :</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"Promo\">
\t\t\t\t\t\t\t\t\t<option value=\"1\">A1</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">A2</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">A3</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">A4</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">A5</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Avatar\">Avatar :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" name=\"Avatar\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Telephone\">Numéro de téléphone :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"tel\" name=\"Telephone\" maxlength=\"10\" placeholder=\"Entrer votre numéro de téléphone\" size=\"30\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"Email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe :</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"Mdp\" placeholder=\"Entrer un mot de passe sécurisé\" size=\"30\" required>
\t\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane active\" id=\"cnxTab\">
\t\t\t\t\t\t<form id=\"cnxForm\" class=\"usefulForm\" action=\"\" method=\"post\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Email\">Mail : </label>
\t\t\t\t\t\t\t<input class=\"form-control\" name= \"Email\" type=\"email\" placeholder=\"Entrer votre adresse mail\" size=\"30\" required>
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"Mdp\">Mot de passe : </label>
\t\t\t\t\t\t\t<input class=\"form-control\" name= \"Mdp\" type=\"password\" placeholder=\"Entrer votre mot de passe\" size=\"30\" required>
\t\t\t\t\t\t\t<div class=\"btn-group col-md-6 col-md-offset-4\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"submitConnexion\" value=\"Se connecter\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  </div>
  <div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Connexion:connexion.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Connexion/connexion.html.twig");
    }
}
