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
        $__internal_da7b3fb78e15aa4f0a76571c20fc0a8e2db58434f8bef00df093e261a0626747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7b3fb78e15aa4f0a76571c20fc0a8e2db58434f8bef00df093e261a0626747->enter($__internal_da7b3fb78e15aa4f0a76571c20fc0a8e2db58434f8bef00df093e261a0626747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_8bc13f9dea6626d0ac85f704ba41460acf04e7cbb541b3769b59deea571bc677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc13f9dea6626d0ac85f704ba41460acf04e7cbb541b3769b59deea571bc677->enter($__internal_8bc13f9dea6626d0ac85f704ba41460acf04e7cbb541b3769b59deea571bc677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7b3fb78e15aa4f0a76571c20fc0a8e2db58434f8bef00df093e261a0626747->leave($__internal_da7b3fb78e15aa4f0a76571c20fc0a8e2db58434f8bef00df093e261a0626747_prof);

        
        $__internal_8bc13f9dea6626d0ac85f704ba41460acf04e7cbb541b3769b59deea571bc677->leave($__internal_8bc13f9dea6626d0ac85f704ba41460acf04e7cbb541b3769b59deea571bc677_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2ceb9aeb3eb48a694d5a95d1e6a409e178e6a88bb8b5108b3719b85c8d24925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ceb9aeb3eb48a694d5a95d1e6a409e178e6a88bb8b5108b3719b85c8d24925->enter($__internal_c2ceb9aeb3eb48a694d5a95d1e6a409e178e6a88bb8b5108b3719b85c8d24925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5123850975164d67ca05b0255c7accdce53579f38fa70219cc76ea6600ac94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5123850975164d67ca05b0255c7accdce53579f38fa70219cc76ea6600ac94b->enter($__internal_b5123850975164d67ca05b0255c7accdce53579f38fa70219cc76ea6600ac94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_b5123850975164d67ca05b0255c7accdce53579f38fa70219cc76ea6600ac94b->leave($__internal_b5123850975164d67ca05b0255c7accdce53579f38fa70219cc76ea6600ac94b_prof);

        
        $__internal_c2ceb9aeb3eb48a694d5a95d1e6a409e178e6a88bb8b5108b3719b85c8d24925->leave($__internal_c2ceb9aeb3eb48a694d5a95d1e6a409e178e6a88bb8b5108b3719b85c8d24925_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_32fb727e03dad6a02733c20e4f596c885b9b736d234f1ffe4c832344ae3704ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fb727e03dad6a02733c20e4f596c885b9b736d234f1ffe4c832344ae3704ea->enter($__internal_32fb727e03dad6a02733c20e4f596c885b9b736d234f1ffe4c832344ae3704ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_ebfc795d8a20fc0f178a7463d5537e80f0e5c174beb12995c8e94d81aad68c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfc795d8a20fc0f178a7463d5537e80f0e5c174beb12995c8e94d81aad68c12->enter($__internal_ebfc795d8a20fc0f178a7463d5537e80f0e5c174beb12995c8e94d81aad68c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_ebfc795d8a20fc0f178a7463d5537e80f0e5c174beb12995c8e94d81aad68c12->leave($__internal_ebfc795d8a20fc0f178a7463d5537e80f0e5c174beb12995c8e94d81aad68c12_prof);

        
        $__internal_32fb727e03dad6a02733c20e4f596c885b9b736d234f1ffe4c832344ae3704ea->leave($__internal_32fb727e03dad6a02733c20e4f596c885b9b736d234f1ffe4c832344ae3704ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80918ad3f2f14e99482d6fa333a3ab99f9a903332d9363d1898a8928433302d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80918ad3f2f14e99482d6fa333a3ab99f9a903332d9363d1898a8928433302d->enter($__internal_b80918ad3f2f14e99482d6fa333a3ab99f9a903332d9363d1898a8928433302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0d504901fc58186cdb5265052b4ca8be711df572e6f94e34fa9d7fb8a653f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d504901fc58186cdb5265052b4ca8be711df572e6f94e34fa9d7fb8a653f66->enter($__internal_e0d504901fc58186cdb5265052b4ca8be711df572e6f94e34fa9d7fb8a653f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"header-title container-fluid text-center\">
\t\t<h1>Bienvenue sur la page d'Inscription/Connexion</h1>
    </div>
\t<div class=\"container\">
\t\t";
        // line 13
        if ((array_key_exists("err", $context) && ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) != ""))) {
            // line 14
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
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
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"cnxForm\" class=\"usefulForm\" action=\"\" method=\"post\">
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
        
        $__internal_e0d504901fc58186cdb5265052b4ca8be711df572e6f94e34fa9d7fb8a653f66->leave($__internal_e0d504901fc58186cdb5265052b4ca8be711df572e6f94e34fa9d7fb8a653f66_prof);

        
        $__internal_b80918ad3f2f14e99482d6fa333a3ab99f9a903332d9363d1898a8928433302d->leave($__internal_b80918ad3f2f14e99482d6fa333a3ab99f9a903332d9363d1898a8928433302d_prof);

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
        return array (  105 => 18,  99 => 15,  96 => 14,  94 => 13,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
\t<div class=\"header-title container-fluid text-center\">
\t\t<h1>Bienvenue sur la page d'Inscription/Connexion</h1>
    </div>
\t<div class=\"container\">
\t\t{% if err is defined and err != \"\" %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{err}}
\t\t\t</div>
\t\t{% endif %}
\t\t<ul class=\"nav nav-pills\">
\t\t\t<li class=\"active\"><a href=\"#cnxTab\" data-toggle=\"tab\">Connexion</a></li>
\t\t\t<li><a href=\"#insTab\" data-toggle=\"tab\">Inscription</a></li>
\t\t</ul>
\t\t<div class=\"blank formulaire\">
\t\t\t<div class=\"col-md-offset-3 col-md-6\">
\t\t\t\t<div class=\"tab-content clearfix\">
\t\t\t\t\t<div class=\"tab-pane\" id=\"insTab\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"insForm\" class=\"usefulForm\" action=\"\" method=\"post\">
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
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"cnxForm\" class=\"usefulForm\" action=\"\" method=\"post\">
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
", "MainBundle:Connexion:connexion.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\src\\MainBundle/Resources/views/Connexion/connexion.html.twig");
    }
}
