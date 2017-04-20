<?php

/* MainBundle:Activites:details_activite.html.twig */
class __TwigTemplate_c9fe81c9ebad2f9c3049bf4ba66c7c5a650b1b8ab4f11e92d914ea79209333fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:details_activite.html.twig", 1);
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
        $__internal_d87fb73a71afe3dae2cf290b87378a725a42906106e4b311c260f8c1d457e043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87fb73a71afe3dae2cf290b87378a725a42906106e4b311c260f8c1d457e043->enter($__internal_d87fb73a71afe3dae2cf290b87378a725a42906106e4b311c260f8c1d457e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activite.html.twig"));

        $__internal_9d19d8b56203703550fd60ac25ddd63523ebb7a633b8ad361d085a1a8e20bd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d19d8b56203703550fd60ac25ddd63523ebb7a633b8ad361d085a1a8e20bd1a->enter($__internal_9d19d8b56203703550fd60ac25ddd63523ebb7a633b8ad361d085a1a8e20bd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d87fb73a71afe3dae2cf290b87378a725a42906106e4b311c260f8c1d457e043->leave($__internal_d87fb73a71afe3dae2cf290b87378a725a42906106e4b311c260f8c1d457e043_prof);

        
        $__internal_9d19d8b56203703550fd60ac25ddd63523ebb7a633b8ad361d085a1a8e20bd1a->leave($__internal_9d19d8b56203703550fd60ac25ddd63523ebb7a633b8ad361d085a1a8e20bd1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdbd4c4a3e6cfab57ab34e32ed88aed409701f97c3a5cfea53fec4af2ccbf9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbd4c4a3e6cfab57ab34e32ed88aed409701f97c3a5cfea53fec4af2ccbf9e6->enter($__internal_cdbd4c4a3e6cfab57ab34e32ed88aed409701f97c3a5cfea53fec4af2ccbf9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e7fc558707a2cc15be11cad67bd960c8827f9e53f0122e4ab6908b318d7f50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7fc558707a2cc15be11cad67bd960c8827f9e53f0122e4ab6908b318d7f50c->enter($__internal_7e7fc558707a2cc15be11cad67bd960c8827f9e53f0122e4ab6908b318d7f50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:detailsActivites";
        
        $__internal_7e7fc558707a2cc15be11cad67bd960c8827f9e53f0122e4ab6908b318d7f50c->leave($__internal_7e7fc558707a2cc15be11cad67bd960c8827f9e53f0122e4ab6908b318d7f50c_prof);

        
        $__internal_cdbd4c4a3e6cfab57ab34e32ed88aed409701f97c3a5cfea53fec4af2ccbf9e6->leave($__internal_cdbd4c4a3e6cfab57ab34e32ed88aed409701f97c3a5cfea53fec4af2ccbf9e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b85aad752f129b8f5a9733d9f183117270b40e9efd5b7a679cf5f4004e2beecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85aad752f129b8f5a9733d9f183117270b40e9efd5b7a679cf5f4004e2beecc->enter($__internal_b85aad752f129b8f5a9733d9f183117270b40e9efd5b7a679cf5f4004e2beecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9a7959e092187dec01579e4df945c8100c51d00c23ece386e32553a097d79b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a7959e092187dec01579e4df945c8100c51d00c23ece386e32553a097d79b3->enter($__internal_f9a7959e092187dec01579e4df945c8100c51d00c23ece386e32553a097d79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
        echo "</dd>
<dt>NOM</dt>
<dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</dd>
<dt>Etat</dt>
<dd>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "etat", array()), "html", null, true);
        echo "</dd>
";
        // line 13
        if ((($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2) || ($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3))) {
            // line 14
            echo "<br>
";
            // line 15
            $context["isSub"] = 0;
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 17
                echo "\t";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idUser", array()) == $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()))) {
                    // line 18
                    echo "\t\t";
                    $context["isSub"] = 1;
                    // line 19
                    echo "\t\t<h4>";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        echo "Inscrit";
                    } else {
                        echo "Voté";
                    }
                    echo "</h4>
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            if (((isset($context["isSub"]) ? $context["isSub"] : $this->getContext($context, "isSub")) != 1)) {
                // line 23
                echo "<form action=\"\" method=\"POST\">
\t<label for=\"comm\">Informations pour l'auteur</label><br>
\t<input type=\"text\" name=\"info\"><br><br>
\t<input type=\"submit\" name=\"subAct\" value=";
                // line 26
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    echo "\"S'inscrire\" ";
                } else {
                    echo "\"Voter\"";
                }
                echo ">
</form>
";
            }
        }
        
        $__internal_f9a7959e092187dec01579e4df945c8100c51d00c23ece386e32553a097d79b3->leave($__internal_f9a7959e092187dec01579e4df945c8100c51d00c23ece386e32553a097d79b3_prof);

        
        $__internal_b85aad752f129b8f5a9733d9f183117270b40e9efd5b7a679cf5f4004e2beecc->leave($__internal_b85aad752f129b8f5a9733d9f183117270b40e9efd5b7a679cf5f4004e2beecc_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:details_activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 26,  119 => 23,  117 => 22,  103 => 19,  100 => 18,  97 => 17,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  82 => 12,  77 => 10,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:detailsActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>{{act.idActivite}}</dd>
<dt>NOM</dt>
<dd>{{act.nomActivite}}</dd>
<dt>Etat</dt>
<dd>{{act.etatAct.etat}}</dd>
{% if act.etatAct.idEtat == 2 or act.etatAct.idEtat == 3 %}
<br>
{% set isSub = 0 %}
{% for sub in subs %}
\t{% if user.idUser == sub.idInscrit.idUser %}
\t\t{% set isSub = 1 %}
\t\t<h4>{% if act.etatAct.idEtat == 3 %}Inscrit{% else %}Voté{% endif %}</h4>
\t{% endif %}
{% endfor %}
{% if isSub != 1 %}
<form action=\"\" method=\"POST\">
\t<label for=\"comm\">Informations pour l'auteur</label><br>
\t<input type=\"text\" name=\"info\"><br><br>
\t<input type=\"submit\" name=\"subAct\" value={% if act.etatAct.idEtat == 3 %}\"S'inscrire\" {% else %}\"Voter\"{% endif %}>
</form>
{% endif %}
{% endif %}
{% endblock %}
", "MainBundle:Activites:details_activite.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details_activite.html.twig");
    }
}
