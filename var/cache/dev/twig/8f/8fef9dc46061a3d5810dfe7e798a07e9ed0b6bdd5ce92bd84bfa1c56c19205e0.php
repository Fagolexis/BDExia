<?php

/* MainBundle:Connexion:connexion.html.twig */
class __TwigTemplate_202f42df0507e7cc0f8ce26b0d2039ed857e632de189d881fd8ad4f5251ff485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Connexion:connexion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1a78a8115015799a329379999189aac302dec732284abe2bb3508e00bd5595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1a78a8115015799a329379999189aac302dec732284abe2bb3508e00bd5595->enter($__internal_ec1a78a8115015799a329379999189aac302dec732284abe2bb3508e00bd5595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_dac1ed4cd4eb5a2482598813d49e159798db8164b18db86625d288dc052fee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac1ed4cd4eb5a2482598813d49e159798db8164b18db86625d288dc052fee06->enter($__internal_dac1ed4cd4eb5a2482598813d49e159798db8164b18db86625d288dc052fee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1a78a8115015799a329379999189aac302dec732284abe2bb3508e00bd5595->leave($__internal_ec1a78a8115015799a329379999189aac302dec732284abe2bb3508e00bd5595_prof);

        
        $__internal_dac1ed4cd4eb5a2482598813d49e159798db8164b18db86625d288dc052fee06->leave($__internal_dac1ed4cd4eb5a2482598813d49e159798db8164b18db86625d288dc052fee06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0ba02f6143ad46a78fddf34d90ed7bbcfe5e7521a8b7188586f016e4b42f7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ba02f6143ad46a78fddf34d90ed7bbcfe5e7521a8b7188586f016e4b42f7e8->enter($__internal_b0ba02f6143ad46a78fddf34d90ed7bbcfe5e7521a8b7188586f016e4b42f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d639b3e9f08ac44cd7eb3028c0999b21dd03646db4ea4f50bcd639527d1044d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d639b3e9f08ac44cd7eb3028c0999b21dd03646db4ea4f50bcd639527d1044d5->enter($__internal_d639b3e9f08ac44cd7eb3028c0999b21dd03646db4ea4f50bcd639527d1044d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Connexion:Connexion";
        
        $__internal_d639b3e9f08ac44cd7eb3028c0999b21dd03646db4ea4f50bcd639527d1044d5->leave($__internal_d639b3e9f08ac44cd7eb3028c0999b21dd03646db4ea4f50bcd639527d1044d5_prof);

        
        $__internal_b0ba02f6143ad46a78fddf34d90ed7bbcfe5e7521a8b7188586f016e4b42f7e8->leave($__internal_b0ba02f6143ad46a78fddf34d90ed7bbcfe5e7521a8b7188586f016e4b42f7e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_195671d74d8882d00484febc1e5dea84ff253b1d6f59174d4ce87e068b0d41be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195671d74d8882d00484febc1e5dea84ff253b1d6f59174d4ce87e068b0d41be->enter($__internal_195671d74d8882d00484febc1e5dea84ff253b1d6f59174d4ce87e068b0d41be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ca1b20781d4a2227e3d9467e22e49bfbbd7971b2e96bd1736e68ebce1208ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca1b20781d4a2227e3d9467e22e49bfbbd7971b2e96bd1736e68ebce1208ff9->enter($__internal_9ca1b20781d4a2227e3d9467e22e49bfbbd7971b2e96bd1736e68ebce1208ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Page de connexion du site du BDE CESI eXia</h1>
<form method=\"post\" action=\"\" id=\"connexion\">
\t<span>Email</span>
\t<input type=\"Email\" name=\"mail\" placeholder=\"mail\" required>
\t<span>Password</span>
\t<input type=\"password\" name=\"password\" placeholder=\"password\" required>
\t<button type=\"submit\" name=\"submitConnexion\">connexion</button>
</form>
<h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["errormessage"]) ? $context["errormessage"] : $this->getContext($context, "errormessage")), "html", null, true);
        echo "</h3>
<form method=\"post\" action=\"\" id=\"inscription\">
\t<span>Nom</span>
\t<input type=\"input\" name=\"Nom\" placeholder=\"Nom\" required>
\t<span>Prenom</span>
\t<input type=\"input\" name=\"Prenom\" placeholder=\"Prenom\" required>
\t<span>Email</span>
\t<input type=\"Email\" name=\"Email\" placeholder=\"Email\" required>
\t<span>Mot de passe</span>
\t<input type=\"password\" name=\"Password\" placeholder=\"Password\" required>
\t<span>Date de naissance</span>
\t<input type=\"date\" name=\"Naissance\">
\t<span>Promotion</span>
\t<SELECT name=\"Promotion\">
\t\t<option value=\"A1\">A1</option>
\t\t<option value=\"A2\">A2</option>
\t\t<option value=\"A3\">A3</option>
\t\t<option value=\"A4\">A4</option>
\t\t<option value=\"A5\">A5</option>
\t</SELECT>
\t<span>Avatar</span>
\t<input type=\"file\" name=\"Avatar\">
\t<span>Numréo de telephone</span>
\t<input type=\"tel\" name=\"Telephone\" placeholder=\"Telephone\">
\t<input type=\"reset\" name=\"Reset\">
\t<input type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
</form>
";
        
        $__internal_9ca1b20781d4a2227e3d9467e22e49bfbbd7971b2e96bd1736e68ebce1208ff9->leave($__internal_9ca1b20781d4a2227e3d9467e22e49bfbbd7971b2e96bd1736e68ebce1208ff9_prof);

        
        $__internal_195671d74d8882d00484febc1e5dea84ff253b1d6f59174d4ce87e068b0d41be->leave($__internal_195671d74d8882d00484febc1e5dea84ff253b1d6f59174d4ce87e068b0d41be_prof);

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
        return array (  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MainBundle:Connexion:Connexion{% endblock %}

{% block body %}
<h1>Page de connexion du site du BDE CESI eXia</h1>
<form method=\"post\" action=\"\" id=\"connexion\">
\t<span>Email</span>
\t<input type=\"Email\" name=\"mail\" placeholder=\"mail\" required>
\t<span>Password</span>
\t<input type=\"password\" name=\"password\" placeholder=\"password\" required>
\t<button type=\"submit\" name=\"submitConnexion\">connexion</button>
</form>
<h3>{{errormessage}}</h3>
<form method=\"post\" action=\"\" id=\"inscription\">
\t<span>Nom</span>
\t<input type=\"input\" name=\"Nom\" placeholder=\"Nom\" required>
\t<span>Prenom</span>
\t<input type=\"input\" name=\"Prenom\" placeholder=\"Prenom\" required>
\t<span>Email</span>
\t<input type=\"Email\" name=\"Email\" placeholder=\"Email\" required>
\t<span>Mot de passe</span>
\t<input type=\"password\" name=\"Password\" placeholder=\"Password\" required>
\t<span>Date de naissance</span>
\t<input type=\"date\" name=\"Naissance\">
\t<span>Promotion</span>
\t<SELECT name=\"Promotion\">
\t\t<option value=\"A1\">A1</option>
\t\t<option value=\"A2\">A2</option>
\t\t<option value=\"A3\">A3</option>
\t\t<option value=\"A4\">A4</option>
\t\t<option value=\"A5\">A5</option>
\t</SELECT>
\t<span>Avatar</span>
\t<input type=\"file\" name=\"Avatar\">
\t<span>Numréo de telephone</span>
\t<input type=\"tel\" name=\"Telephone\" placeholder=\"Telephone\">
\t<input type=\"reset\" name=\"Reset\">
\t<input type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
</form>
{% endblock %}", "MainBundle:Connexion:connexion.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Connexion/connexion.html.twig");
    }
}
