<?php

/* MainBundle:Activites:details.html.twig */
class __TwigTemplate_813b907beeca6e3685f29ff13b9b2a883aecb1e3991f5735b65afe0db89cc5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:details.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navActivites' => array($this, 'block_navActivites'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78041a6b15fcd98f05c822a897402d0089f09a0f6a4acb5fbfac67858d5c7ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78041a6b15fcd98f05c822a897402d0089f09a0f6a4acb5fbfac67858d5c7ba9->enter($__internal_78041a6b15fcd98f05c822a897402d0089f09a0f6a4acb5fbfac67858d5c7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $__internal_c7202d03a2f1389a422b4a856f2f169389720024358cae91573b3955e6f505d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7202d03a2f1389a422b4a856f2f169389720024358cae91573b3955e6f505d4->enter($__internal_c7202d03a2f1389a422b4a856f2f169389720024358cae91573b3955e6f505d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78041a6b15fcd98f05c822a897402d0089f09a0f6a4acb5fbfac67858d5c7ba9->leave($__internal_78041a6b15fcd98f05c822a897402d0089f09a0f6a4acb5fbfac67858d5c7ba9_prof);

        
        $__internal_c7202d03a2f1389a422b4a856f2f169389720024358cae91573b3955e6f505d4->leave($__internal_c7202d03a2f1389a422b4a856f2f169389720024358cae91573b3955e6f505d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0127e1dcddef7531059434be8b85441874d8ffaaca829586ff50d0f029467b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0127e1dcddef7531059434be8b85441874d8ffaaca829586ff50d0f029467b2->enter($__internal_e0127e1dcddef7531059434be8b85441874d8ffaaca829586ff50d0f029467b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a41789b110a28da726a6f535d937ead43c786dc6e16ab4eb609ca75e154a3a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41789b110a28da726a6f535d937ead43c786dc6e16ab4eb609ca75e154a3a1d->enter($__internal_a41789b110a28da726a6f535d937ead43c786dc6e16ab4eb609ca75e154a3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_a41789b110a28da726a6f535d937ead43c786dc6e16ab4eb609ca75e154a3a1d->leave($__internal_a41789b110a28da726a6f535d937ead43c786dc6e16ab4eb609ca75e154a3a1d_prof);

        
        $__internal_e0127e1dcddef7531059434be8b85441874d8ffaaca829586ff50d0f029467b2->leave($__internal_e0127e1dcddef7531059434be8b85441874d8ffaaca829586ff50d0f029467b2_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_e2b4f021a2ec215afdb8acf7eaf0cd331b86208815edc061f075201bbd8f85e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b4f021a2ec215afdb8acf7eaf0cd331b86208815edc061f075201bbd8f85e9->enter($__internal_e2b4f021a2ec215afdb8acf7eaf0cd331b86208815edc061f075201bbd8f85e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_f98f8434f150d4cf1d0007633e9d2a3f5679eea7d96d7638ef8df378a9054eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98f8434f150d4cf1d0007633e9d2a3f5679eea7d96d7638ef8df378a9054eff->enter($__internal_f98f8434f150d4cf1d0007633e9d2a3f5679eea7d96d7638ef8df378a9054eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_f98f8434f150d4cf1d0007633e9d2a3f5679eea7d96d7638ef8df378a9054eff->leave($__internal_f98f8434f150d4cf1d0007633e9d2a3f5679eea7d96d7638ef8df378a9054eff_prof);

        
        $__internal_e2b4f021a2ec215afdb8acf7eaf0cd331b86208815edc061f075201bbd8f85e9->leave($__internal_e2b4f021a2ec215afdb8acf7eaf0cd331b86208815edc061f075201bbd8f85e9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee3055cc2f463c48f434f1a75dae575ba2f9bb964de2e392ab98d671b153fb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3055cc2f463c48f434f1a75dae575ba2f9bb964de2e392ab98d671b153fb08->enter($__internal_ee3055cc2f463c48f434f1a75dae575ba2f9bb964de2e392ab98d671b153fb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e669d8dd881f4ee71bce39b2306ca088246dc456d0df276262eacec256ba631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e669d8dd881f4ee71bce39b2306ca088246dc456d0df276262eacec256ba631->enter($__internal_5e669d8dd881f4ee71bce39b2306ca088246dc456d0df276262eacec256ba631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main>
    <div class=\"container blank\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<img class=\"imgAct\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couv"]) ? $context["couv"] : $this->getContext($context, "couv")), "chemin", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "descriptionActivite", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Où ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "lieu", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Quand ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Combien ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "prixActivite", array()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-2\">
\t\t\t\t\t\t\t<h4>Pour combien de personnes ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "inscritsMax", array()), "html", null, true);
        echo " personnes Max.</p>
\t\t\t\t\t\t\t<p>Places restantes : ";
        // line 41
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "inscritsMax", array()) - twig_length_filter($this->env, (isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Pour qui ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "ageMin", array()), "html", null, true);
        echo " ans Min.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"btn-group col-md-4 col-md-offset-5 text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photosAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t<h4>Photos</h4>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 1)) {
            // line 55
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                if (($this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h4>Voté</h4>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 58
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h4>Inscrit</h4>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 67
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 75
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><h4>Votes</h4></a>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 77
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><h4>Inscrits</h4></a>
\t\t\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_5e669d8dd881f4ee71bce39b2306ca088246dc456d0df276262eacec256ba631->leave($__internal_5e669d8dd881f4ee71bce39b2306ca088246dc456d0df276262eacec256ba631_prof);

        
        $__internal_ee3055cc2f463c48f434f1a75dae575ba2f9bb964de2e392ab98d671b153fb08->leave($__internal_ee3055cc2f463c48f434f1a75dae575ba2f9bb964de2e392ab98d671b153fb08_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 81,  236 => 80,  230 => 78,  228 => 77,  223 => 76,  220 => 75,  217 => 74,  211 => 73,  204 => 68,  202 => 67,  196 => 63,  193 => 62,  187 => 61,  183 => 59,  181 => 58,  178 => 57,  175 => 56,  168 => 55,  166 => 54,  160 => 51,  151 => 45,  144 => 41,  140 => 40,  131 => 34,  124 => 30,  117 => 26,  106 => 18,  99 => 15,  94 => 13,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Activité{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}

<main>
    <div class=\"container blank\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h2>{{act.nomActivite}}</h2>
\t\t\t\t</div>
\t\t\t\t<img class=\"imgAct\" src=\"{{asset('img/')}}{{couv.chemin}}\" alt=\"\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<h4>{{act.descriptionActivite}}</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Où ?</h4>
\t\t\t\t\t\t\t<p>{{act.lieu}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Quand ?</h4>
\t\t\t\t\t\t\t<p>{{date.date|date(\"d/m/Y\")}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Combien ?</h4>
\t\t\t\t\t\t\t<p>{{act.prixActivite}}€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-2\">
\t\t\t\t\t\t\t<h4>Pour combien de personnes ?</h4>
\t\t\t\t\t\t\t<p>{{act.inscritsMax}} personnes Max.</p>
\t\t\t\t\t\t\t<p>Places restantes : {{act.inscritsMax - subs|length}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Pour qui ?</h4>
\t\t\t\t\t\t\t<p>{{act.ageMin}} ans Min.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"btn-group col-md-4 col-md-offset-5 text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href={{path('photosAct', {'id':act.idActivite})}}>
\t\t\t\t\t\t\t\t<h4>Photos</h4>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if app.session.get('roleUser') == 1 %}
\t\t\t\t\t\t\t\t{% for sub in subs if sub.idInscrit.idUser == app.session.get('idUser') %}
\t\t\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t\t\t<h4>Voté</h4>
\t\t\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t\t\t<h4>Inscrit</h4>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% elseif app.session.get('roleUser') == 2 %}
\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"{{path('subAct', {'id' : act.idActivite})}}\"><h4>Votes</h4></a>
\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"{{path('subAct', {'id' : act.idActivite})}}\"><h4>Inscrits</h4></a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:details.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details.html.twig");
    }
}
