<?php

/* MainBundle:Activites:create_activite.html.twig */
class __TwigTemplate_44d4894dd4315d9ffbee95ef3361ba1a729c3345cce953f8f1ae85de8ea66745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:create_activite.html.twig", 1);
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
        $__internal_90aaf12fe7be7f6e3aa49b17a2ea1ad3a1424e08d6d337c27aa8d091dc22333a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90aaf12fe7be7f6e3aa49b17a2ea1ad3a1424e08d6d337c27aa8d091dc22333a->enter($__internal_90aaf12fe7be7f6e3aa49b17a2ea1ad3a1424e08d6d337c27aa8d091dc22333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:create_activite.html.twig"));

        $__internal_a3ec6e729a1d3e764e1d3c81d21cfdabb93bcee7fb3f68bb0f1ede5c376ae654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec6e729a1d3e764e1d3c81d21cfdabb93bcee7fb3f68bb0f1ede5c376ae654->enter($__internal_a3ec6e729a1d3e764e1d3c81d21cfdabb93bcee7fb3f68bb0f1ede5c376ae654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:create_activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90aaf12fe7be7f6e3aa49b17a2ea1ad3a1424e08d6d337c27aa8d091dc22333a->leave($__internal_90aaf12fe7be7f6e3aa49b17a2ea1ad3a1424e08d6d337c27aa8d091dc22333a_prof);

        
        $__internal_a3ec6e729a1d3e764e1d3c81d21cfdabb93bcee7fb3f68bb0f1ede5c376ae654->leave($__internal_a3ec6e729a1d3e764e1d3c81d21cfdabb93bcee7fb3f68bb0f1ede5c376ae654_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d6863333af2ef0995345d1b305faaaf2e664e53ef0fb265f9ee4d948acc849f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6863333af2ef0995345d1b305faaaf2e664e53ef0fb265f9ee4d948acc849f->enter($__internal_3d6863333af2ef0995345d1b305faaaf2e664e53ef0fb265f9ee4d948acc849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bd94a470028d89455f40b3cb5c1645745dfca16b1bce5224c20c74b2ea74046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd94a470028d89455f40b3cb5c1645745dfca16b1bce5224c20c74b2ea74046->enter($__internal_8bd94a470028d89455f40b3cb5c1645745dfca16b1bce5224c20c74b2ea74046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:modificationActivites";
        
        $__internal_8bd94a470028d89455f40b3cb5c1645745dfca16b1bce5224c20c74b2ea74046->leave($__internal_8bd94a470028d89455f40b3cb5c1645745dfca16b1bce5224c20c74b2ea74046_prof);

        
        $__internal_3d6863333af2ef0995345d1b305faaaf2e664e53ef0fb265f9ee4d948acc849f->leave($__internal_3d6863333af2ef0995345d1b305faaaf2e664e53ef0fb265f9ee4d948acc849f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cfa997e0fe59edd37b4b81bdff9bb7b05a63b4613f4a69e877afc4f6d08c696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfa997e0fe59edd37b4b81bdff9bb7b05a63b4613f4a69e877afc4f6d08c696->enter($__internal_3cfa997e0fe59edd37b4b81bdff9bb7b05a63b4613f4a69e877afc4f6d08c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_836c82243b73dc3b8619b17445db6f90bf23e83592d6e20d98adf484836a5a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836c82243b73dc3b8619b17445db6f90bf23e83592d6e20d98adf484836a5a5c->enter($__internal_836c82243b73dc3b8619b17445db6f90bf23e83592d6e20d98adf484836a5a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:modificationActivites page</h1>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t<label for=\"\">Titre de l'activité :</label><br>
\t<input type=\"text\" name=\"titre\"><br><br>
\t<label for=\"\">Description de l'activité :</label><br>
\t<input type=\"text\" name=\"desc\"><br><br>
\t<label for=\"\">Image de couverture :</label><br>
\t<input type=\"file\" name=\"imgActCouv\"><br><br>
\t<label for=\"\">Lieu de l'activité :</label><br>
\t<input type=\"text\" name=\"lieu\"><br><br>
\t<label for=\"\">Date et horaire de l'activité :</label><br>
\t<input type=\"date\" name=\"date\"><input type=\"time\" name=\"time\"><br><br>
\t<label for=\"\">Prix de l'activité :</label><br>
\t<input type=\"number\" step=\"0.01\" name\"prix\" size=\"4\">€<br><br>
\t<label for=\"\">Nombre de personnes maximum :</label><br>
\t<input type=\"number\" name\"sub\"><br><br>
\t<label for=\"\">Age minimum :</label><br>
\t<input type=\"number\" name=\"age\"><br><br>
\t<input type=\"submit\" name=\"addActForm\" value=\"Créer l'activité\">
</form>
";
        
        $__internal_836c82243b73dc3b8619b17445db6f90bf23e83592d6e20d98adf484836a5a5c->leave($__internal_836c82243b73dc3b8619b17445db6f90bf23e83592d6e20d98adf484836a5a5c_prof);

        
        $__internal_3cfa997e0fe59edd37b4b81bdff9bb7b05a63b4613f4a69e877afc4f6d08c696->leave($__internal_3cfa997e0fe59edd37b4b81bdff9bb7b05a63b4613f4a69e877afc4f6d08c696_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:create_activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:modificationActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:modificationActivites page</h1>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
\t<label for=\"\">Titre de l'activité :</label><br>
\t<input type=\"text\" name=\"titre\"><br><br>
\t<label for=\"\">Description de l'activité :</label><br>
\t<input type=\"text\" name=\"desc\"><br><br>
\t<label for=\"\">Image de couverture :</label><br>
\t<input type=\"file\" name=\"imgActCouv\"><br><br>
\t<label for=\"\">Lieu de l'activité :</label><br>
\t<input type=\"text\" name=\"lieu\"><br><br>
\t<label for=\"\">Date et horaire de l'activité :</label><br>
\t<input type=\"date\" name=\"date\"><input type=\"time\" name=\"time\"><br><br>
\t<label for=\"\">Prix de l'activité :</label><br>
\t<input type=\"number\" step=\"0.01\" name\"prix\" size=\"4\">€<br><br>
\t<label for=\"\">Nombre de personnes maximum :</label><br>
\t<input type=\"number\" name\"sub\"><br><br>
\t<label for=\"\">Age minimum :</label><br>
\t<input type=\"number\" name=\"age\"><br><br>
\t<input type=\"submit\" name=\"addActForm\" value=\"Créer l'activité\">
</form>
{% endblock %}
", "MainBundle:Activites:create_activite.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/create_activite.html.twig");
    }
}
