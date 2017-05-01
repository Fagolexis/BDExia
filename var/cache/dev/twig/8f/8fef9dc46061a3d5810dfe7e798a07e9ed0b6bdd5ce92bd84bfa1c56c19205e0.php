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
        $__internal_08721e03fe19df1b3c01a74807c57c402b556a79a01fd7b480a7324df38da7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08721e03fe19df1b3c01a74807c57c402b556a79a01fd7b480a7324df38da7c1->enter($__internal_08721e03fe19df1b3c01a74807c57c402b556a79a01fd7b480a7324df38da7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $__internal_bc8c788a6e6eeae397b84cc5691e607fa63b8e92228c191b70385c89a1d120e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8c788a6e6eeae397b84cc5691e607fa63b8e92228c191b70385c89a1d120e2->enter($__internal_bc8c788a6e6eeae397b84cc5691e607fa63b8e92228c191b70385c89a1d120e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Connexion:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08721e03fe19df1b3c01a74807c57c402b556a79a01fd7b480a7324df38da7c1->leave($__internal_08721e03fe19df1b3c01a74807c57c402b556a79a01fd7b480a7324df38da7c1_prof);

        
        $__internal_bc8c788a6e6eeae397b84cc5691e607fa63b8e92228c191b70385c89a1d120e2->leave($__internal_bc8c788a6e6eeae397b84cc5691e607fa63b8e92228c191b70385c89a1d120e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b561a993d5541aea9f215349d9d44cc007eadcc57bbc3061ff8875790f92e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b561a993d5541aea9f215349d9d44cc007eadcc57bbc3061ff8875790f92e0b->enter($__internal_1b561a993d5541aea9f215349d9d44cc007eadcc57bbc3061ff8875790f92e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6160ee86ee0a7e4b6b060c48bdc3d9d8f948d62b3f9c7408bebaf344f9c382a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6160ee86ee0a7e4b6b060c48bdc3d9d8f948d62b3f9c7408bebaf344f9c382a2->enter($__internal_6160ee86ee0a7e4b6b060c48bdc3d9d8f948d62b3f9c7408bebaf344f9c382a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Connexion:Connexion";
        
        $__internal_6160ee86ee0a7e4b6b060c48bdc3d9d8f948d62b3f9c7408bebaf344f9c382a2->leave($__internal_6160ee86ee0a7e4b6b060c48bdc3d9d8f948d62b3f9c7408bebaf344f9c382a2_prof);

        
        $__internal_1b561a993d5541aea9f215349d9d44cc007eadcc57bbc3061ff8875790f92e0b->leave($__internal_1b561a993d5541aea9f215349d9d44cc007eadcc57bbc3061ff8875790f92e0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52369212f099bbc221a93375e66fe67ebf17700e4c77994a5d1c8959bd3ccaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52369212f099bbc221a93375e66fe67ebf17700e4c77994a5d1c8959bd3ccaae->enter($__internal_52369212f099bbc221a93375e66fe67ebf17700e4c77994a5d1c8959bd3ccaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f36e578500cd2ec9669ff79810f5eed95429ebcecee48b07995963fadc74b1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36e578500cd2ec9669ff79810f5eed95429ebcecee48b07995963fadc74b1ba->enter($__internal_f36e578500cd2ec9669ff79810f5eed95429ebcecee48b07995963fadc74b1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Page de connexion du site du BDE CESI eXia</h1>
<p>Id : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"), "html", null, true);
        echo "</p>
<p>Role : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method"), "html", null, true);
        echo "</p>
<form method=\"post\" action=\"\" id=\"connexion\">
\t<span>Email</span>
\t<input type=\"Email\" name=\"mail\" placeholder=\"mail\" required>
\t<span>Password</span>
\t<input type=\"password\" name=\"password\" placeholder=\"password\" required>
\t<input type=\"submit\" name=\"submitConnexion\" value=\"Connexion\">
</form>
<h3>";
        // line 16
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
\t<input type=\"date\" name=\"Naissance\" required>
\t<span>Promotion</span>
\t<SELECT name=\"Promotion\">
\t\t<option value=\"1\">A1</option>
\t\t<option value=\"2\">A2</option>
\t\t<option value=\"3\">A3</option>
\t\t<option value=\"4\">A4</option>
\t\t<option value=\"5\">A5</option>
\t</SELECT>
\t<span>Avatar</span>
\t<input type=\"file\" name=\"Avatar\">
\t<span>Numréo de telephone</span>
\t<input type=\"tel\" name=\"Telephone\" placeholder=\"Telephone\">
\t<input type=\"reset\" name=\"Reset\">
\t<input type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
</form>
";
        
        $__internal_f36e578500cd2ec9669ff79810f5eed95429ebcecee48b07995963fadc74b1ba->leave($__internal_f36e578500cd2ec9669ff79810f5eed95429ebcecee48b07995963fadc74b1ba_prof);

        
        $__internal_52369212f099bbc221a93375e66fe67ebf17700e4c77994a5d1c8959bd3ccaae->leave($__internal_52369212f099bbc221a93375e66fe67ebf17700e4c77994a5d1c8959bd3ccaae_prof);

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
        return array (  86 => 16,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<p>Id : {{app.session.get('idUser')}}</p>
<p>Role : {{app.session.get('roleUser')}}</p>
<form method=\"post\" action=\"\" id=\"connexion\">
\t<span>Email</span>
\t<input type=\"Email\" name=\"mail\" placeholder=\"mail\" required>
\t<span>Password</span>
\t<input type=\"password\" name=\"password\" placeholder=\"password\" required>
\t<input type=\"submit\" name=\"submitConnexion\" value=\"Connexion\">
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
\t<input type=\"date\" name=\"Naissance\" required>
\t<span>Promotion</span>
\t<SELECT name=\"Promotion\">
\t\t<option value=\"1\">A1</option>
\t\t<option value=\"2\">A2</option>
\t\t<option value=\"3\">A3</option>
\t\t<option value=\"4\">A4</option>
\t\t<option value=\"5\">A5</option>
\t</SELECT>
\t<span>Avatar</span>
\t<input type=\"file\" name=\"Avatar\">
\t<span>Numréo de telephone</span>
\t<input type=\"tel\" name=\"Telephone\" placeholder=\"Telephone\">
\t<input type=\"reset\" name=\"Reset\">
\t<input type=\"submit\" name=\"submitInscription\" value=\"S'inscrire\">
</form>
{% endblock %}
", "MainBundle:Connexion:connexion.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Connexion/connexion.html.twig");
    }
}
