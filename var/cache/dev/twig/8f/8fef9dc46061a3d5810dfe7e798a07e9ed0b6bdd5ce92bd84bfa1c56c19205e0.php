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
        $__internal_13a75817523c1e0467f8ea5344d6eed74c7896e75d7bcf9e9401742cd9b85ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a75817523c1e0467f8ea5344d6eed74c7896e75d7bcf9e9401742cd9b85ced->enter($__internal_13a75817523c1e0467f8ea5344d6eed74c7896e75d7bcf9e9401742cd9b85ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_67c20b5b1d0cb1fcd460a3921a4d642eed2263e6b40e9d012ec54f0bdd95c5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c20b5b1d0cb1fcd460a3921a4d642eed2263e6b40e9d012ec54f0bdd95c5b7->enter($__internal_67c20b5b1d0cb1fcd460a3921a4d642eed2263e6b40e9d012ec54f0bdd95c5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a75817523c1e0467f8ea5344d6eed74c7896e75d7bcf9e9401742cd9b85ced->leave($__internal_13a75817523c1e0467f8ea5344d6eed74c7896e75d7bcf9e9401742cd9b85ced_prof);

        
        $__internal_67c20b5b1d0cb1fcd460a3921a4d642eed2263e6b40e9d012ec54f0bdd95c5b7->leave($__internal_67c20b5b1d0cb1fcd460a3921a4d642eed2263e6b40e9d012ec54f0bdd95c5b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a887d49587665b2710f0726505b0d7611b94a606585b1faa15e7b9ac654a927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a887d49587665b2710f0726505b0d7611b94a606585b1faa15e7b9ac654a927->enter($__internal_4a887d49587665b2710f0726505b0d7611b94a606585b1faa15e7b9ac654a927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_163d975545812ce8942c676baa26c8c3a64e9f89c3714db43a4e76ed156027d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163d975545812ce8942c676baa26c8c3a64e9f89c3714db43a4e76ed156027d0->enter($__internal_163d975545812ce8942c676baa26c8c3a64e9f89c3714db43a4e76ed156027d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_163d975545812ce8942c676baa26c8c3a64e9f89c3714db43a4e76ed156027d0->leave($__internal_163d975545812ce8942c676baa26c8c3a64e9f89c3714db43a4e76ed156027d0_prof);

        
        $__internal_4a887d49587665b2710f0726505b0d7611b94a606585b1faa15e7b9ac654a927->leave($__internal_4a887d49587665b2710f0726505b0d7611b94a606585b1faa15e7b9ac654a927_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_179fef0f4f8c589646fc91a87c2e35d1e4665f493e5d90335467c979a29c49cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179fef0f4f8c589646fc91a87c2e35d1e4665f493e5d90335467c979a29c49cd->enter($__internal_179fef0f4f8c589646fc91a87c2e35d1e4665f493e5d90335467c979a29c49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_7ea8741b865ff0e986d02e8bc8f1d6712c804d50ac0fb9302927eec28a1ba418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea8741b865ff0e986d02e8bc8f1d6712c804d50ac0fb9302927eec28a1ba418->enter($__internal_7ea8741b865ff0e986d02e8bc8f1d6712c804d50ac0fb9302927eec28a1ba418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_7ea8741b865ff0e986d02e8bc8f1d6712c804d50ac0fb9302927eec28a1ba418->leave($__internal_7ea8741b865ff0e986d02e8bc8f1d6712c804d50ac0fb9302927eec28a1ba418_prof);

        
        $__internal_179fef0f4f8c589646fc91a87c2e35d1e4665f493e5d90335467c979a29c49cd->leave($__internal_179fef0f4f8c589646fc91a87c2e35d1e4665f493e5d90335467c979a29c49cd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2c266e19a3cbfb1e06246698b7c2cac2d208b18274667de577ae647fd47d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2c266e19a3cbfb1e06246698b7c2cac2d208b18274667de577ae647fd47d8e->enter($__internal_cf2c266e19a3cbfb1e06246698b7c2cac2d208b18274667de577ae647fd47d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33510b24097ed2359863d1b5f7824d83de0f7675b777db71dae391a9cb0bf002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33510b24097ed2359863d1b5f7824d83de0f7675b777db71dae391a9cb0bf002->enter($__internal_33510b24097ed2359863d1b5f7824d83de0f7675b777db71dae391a9cb0bf002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"header-title container-fluid text-center\">
\t\t<h1>Bienvenue sur la page d'Inscription/Connexion</h1>
    </div>
\t<div class=\"container\">
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
        echo "\t\t<ul class=\"nav nav-pills\">
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
        
        $__internal_33510b24097ed2359863d1b5f7824d83de0f7675b777db71dae391a9cb0bf002->leave($__internal_33510b24097ed2359863d1b5f7824d83de0f7675b777db71dae391a9cb0bf002_prof);

        
        $__internal_cf2c266e19a3cbfb1e06246698b7c2cac2d208b18274667de577ae647fd47d8e->leave($__internal_cf2c266e19a3cbfb1e06246698b7c2cac2d208b18274667de577ae647fd47d8e_prof);

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
\t\t{% if err is defined %}
\t\t\t<div class=\"alert alter-danger\">
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
