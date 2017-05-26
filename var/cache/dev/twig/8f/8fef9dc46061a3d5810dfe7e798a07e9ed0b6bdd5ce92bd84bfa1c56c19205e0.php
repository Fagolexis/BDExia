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
        $__internal_b5cb7a0dd50f5a67b1aa0870d99e79aea65fc10e4bec3eb7b0ffef9f795e5b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cb7a0dd50f5a67b1aa0870d99e79aea65fc10e4bec3eb7b0ffef9f795e5b94->enter($__internal_b5cb7a0dd50f5a67b1aa0870d99e79aea65fc10e4bec3eb7b0ffef9f795e5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_d82fb6859e8ded31f3dd18d05de3511ce831598420aa82f7cd47fee73600a7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82fb6859e8ded31f3dd18d05de3511ce831598420aa82f7cd47fee73600a7a5->enter($__internal_d82fb6859e8ded31f3dd18d05de3511ce831598420aa82f7cd47fee73600a7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cb7a0dd50f5a67b1aa0870d99e79aea65fc10e4bec3eb7b0ffef9f795e5b94->leave($__internal_b5cb7a0dd50f5a67b1aa0870d99e79aea65fc10e4bec3eb7b0ffef9f795e5b94_prof);

        
        $__internal_d82fb6859e8ded31f3dd18d05de3511ce831598420aa82f7cd47fee73600a7a5->leave($__internal_d82fb6859e8ded31f3dd18d05de3511ce831598420aa82f7cd47fee73600a7a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ffbd91ed21a5911afbd5314232a96bbda9f9a1ae52e4ebf86d72e3c010e84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ffbd91ed21a5911afbd5314232a96bbda9f9a1ae52e4ebf86d72e3c010e84d->enter($__internal_a9ffbd91ed21a5911afbd5314232a96bbda9f9a1ae52e4ebf86d72e3c010e84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_823bb2a4fe958b497059d3392110f26fae4f1a4061ac242364cabf93f8a3dd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823bb2a4fe958b497059d3392110f26fae4f1a4061ac242364cabf93f8a3dd50->enter($__internal_823bb2a4fe958b497059d3392110f26fae4f1a4061ac242364cabf93f8a3dd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription/Connexion";
        
        $__internal_823bb2a4fe958b497059d3392110f26fae4f1a4061ac242364cabf93f8a3dd50->leave($__internal_823bb2a4fe958b497059d3392110f26fae4f1a4061ac242364cabf93f8a3dd50_prof);

        
        $__internal_a9ffbd91ed21a5911afbd5314232a96bbda9f9a1ae52e4ebf86d72e3c010e84d->leave($__internal_a9ffbd91ed21a5911afbd5314232a96bbda9f9a1ae52e4ebf86d72e3c010e84d_prof);

    }

    // line 5
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_5004a0941d2e3e4fd70eee5dae4e179c033498cf418f782074ab117aa48c0197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5004a0941d2e3e4fd70eee5dae4e179c033498cf418f782074ab117aa48c0197->enter($__internal_5004a0941d2e3e4fd70eee5dae4e179c033498cf418f782074ab117aa48c0197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_0aceb23a497171ccf5231d1a54b119be50b2111e1a90c444a16b5195b214513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aceb23a497171ccf5231d1a54b119be50b2111e1a90c444a16b5195b214513e->enter($__internal_0aceb23a497171ccf5231d1a54b119be50b2111e1a90c444a16b5195b214513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        echo "class=\"active\"";
        
        $__internal_0aceb23a497171ccf5231d1a54b119be50b2111e1a90c444a16b5195b214513e->leave($__internal_0aceb23a497171ccf5231d1a54b119be50b2111e1a90c444a16b5195b214513e_prof);

        
        $__internal_5004a0941d2e3e4fd70eee5dae4e179c033498cf418f782074ab117aa48c0197->leave($__internal_5004a0941d2e3e4fd70eee5dae4e179c033498cf418f782074ab117aa48c0197_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a0e7524ee3c7b54bc8aa2d394d839dcedf9bb92b0289fe8e1994877d2d48582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0e7524ee3c7b54bc8aa2d394d839dcedf9bb92b0289fe8e1994877d2d48582->enter($__internal_7a0e7524ee3c7b54bc8aa2d394d839dcedf9bb92b0289fe8e1994877d2d48582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46b0c683fecd9b6d599cae1427e367d8a2a5e359d2df8b0cf1b307ed7897ec07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b0c683fecd9b6d599cae1427e367d8a2a5e359d2df8b0cf1b307ed7897ec07->enter($__internal_46b0c683fecd9b6d599cae1427e367d8a2a5e359d2df8b0cf1b307ed7897ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_46b0c683fecd9b6d599cae1427e367d8a2a5e359d2df8b0cf1b307ed7897ec07->leave($__internal_46b0c683fecd9b6d599cae1427e367d8a2a5e359d2df8b0cf1b307ed7897ec07_prof);

        
        $__internal_7a0e7524ee3c7b54bc8aa2d394d839dcedf9bb92b0289fe8e1994877d2d48582->leave($__internal_7a0e7524ee3c7b54bc8aa2d394d839dcedf9bb92b0289fe8e1994877d2d48582_prof);

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
