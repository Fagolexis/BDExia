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
        $__internal_cf054c3ed0d7530a2f6099577e8173ca1d36f20297d626cf14c0c640df6b24f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf054c3ed0d7530a2f6099577e8173ca1d36f20297d626cf14c0c640df6b24f4->enter($__internal_cf054c3ed0d7530a2f6099577e8173ca1d36f20297d626cf14c0c640df6b24f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_371394d0911152791c4b22013020e62eb4c53e5974ed54265b6f08092a1ea62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371394d0911152791c4b22013020e62eb4c53e5974ed54265b6f08092a1ea62c->enter($__internal_371394d0911152791c4b22013020e62eb4c53e5974ed54265b6f08092a1ea62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf054c3ed0d7530a2f6099577e8173ca1d36f20297d626cf14c0c640df6b24f4->leave($__internal_cf054c3ed0d7530a2f6099577e8173ca1d36f20297d626cf14c0c640df6b24f4_prof);

        
        $__internal_371394d0911152791c4b22013020e62eb4c53e5974ed54265b6f08092a1ea62c->leave($__internal_371394d0911152791c4b22013020e62eb4c53e5974ed54265b6f08092a1ea62c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e5d7c06e757d7b718f2e9ed21ff7f8dc3854d3b0b7ce9d74b45431cf69bb8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5d7c06e757d7b718f2e9ed21ff7f8dc3854d3b0b7ce9d74b45431cf69bb8cf->enter($__internal_5e5d7c06e757d7b718f2e9ed21ff7f8dc3854d3b0b7ce9d74b45431cf69bb8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7241a4a8d2db08ba9f23e22ff6875771f62bfdb9a1801c86dcd8da9fb11f004c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7241a4a8d2db08ba9f23e22ff6875771f62bfdb9a1801c86dcd8da9fb11f004c->enter($__internal_7241a4a8d2db08ba9f23e22ff6875771f62bfdb9a1801c86dcd8da9fb11f004c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_7241a4a8d2db08ba9f23e22ff6875771f62bfdb9a1801c86dcd8da9fb11f004c->leave($__internal_7241a4a8d2db08ba9f23e22ff6875771f62bfdb9a1801c86dcd8da9fb11f004c_prof);

        
        $__internal_5e5d7c06e757d7b718f2e9ed21ff7f8dc3854d3b0b7ce9d74b45431cf69bb8cf->leave($__internal_5e5d7c06e757d7b718f2e9ed21ff7f8dc3854d3b0b7ce9d74b45431cf69bb8cf_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_daed94460dce1cf632acbe61ea026e85db09a4e6e974a9e01938a2d97834372a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daed94460dce1cf632acbe61ea026e85db09a4e6e974a9e01938a2d97834372a->enter($__internal_daed94460dce1cf632acbe61ea026e85db09a4e6e974a9e01938a2d97834372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_70bed4a4f3b3c2ee4b67aba472a1987a5d71c037a284759d75995057c25ee7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bed4a4f3b3c2ee4b67aba472a1987a5d71c037a284759d75995057c25ee7c0->enter($__internal_70bed4a4f3b3c2ee4b67aba472a1987a5d71c037a284759d75995057c25ee7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_70bed4a4f3b3c2ee4b67aba472a1987a5d71c037a284759d75995057c25ee7c0->leave($__internal_70bed4a4f3b3c2ee4b67aba472a1987a5d71c037a284759d75995057c25ee7c0_prof);

        
        $__internal_daed94460dce1cf632acbe61ea026e85db09a4e6e974a9e01938a2d97834372a->leave($__internal_daed94460dce1cf632acbe61ea026e85db09a4e6e974a9e01938a2d97834372a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9436fd42af1636cd16ef41e544cdc236eb8f97a1995d6cab4f5d1082a5a9d147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9436fd42af1636cd16ef41e544cdc236eb8f97a1995d6cab4f5d1082a5a9d147->enter($__internal_9436fd42af1636cd16ef41e544cdc236eb8f97a1995d6cab4f5d1082a5a9d147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41e95051664fee33e36c5c15cc2b56f89760e23a4420a3d58df542f25efc5ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e95051664fee33e36c5c15cc2b56f89760e23a4420a3d58df542f25efc5ad1->enter($__internal_41e95051664fee33e36c5c15cc2b56f89760e23a4420a3d58df542f25efc5ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container\">
\t\t";
        // line 10
        if (array_key_exists("err", $context)) {
            // line 11
            echo "\t\t\t<div class=\"alert alter-danger\">
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 15
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
        
        $__internal_41e95051664fee33e36c5c15cc2b56f89760e23a4420a3d58df542f25efc5ad1->leave($__internal_41e95051664fee33e36c5c15cc2b56f89760e23a4420a3d58df542f25efc5ad1_prof);

        
        $__internal_9436fd42af1636cd16ef41e544cdc236eb8f97a1995d6cab4f5d1082a5a9d147->leave($__internal_9436fd42af1636cd16ef41e544cdc236eb8f97a1995d6cab4f5d1082a5a9d147_prof);

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
        return array (  102 => 15,  96 => 12,  93 => 11,  91 => 10,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
