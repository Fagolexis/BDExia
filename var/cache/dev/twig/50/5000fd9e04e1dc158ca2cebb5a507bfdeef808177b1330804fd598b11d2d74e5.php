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
        $__internal_71ec288ecaf954aa039518287259916fb6b3df023b02bec188b8904b98be7a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ec288ecaf954aa039518287259916fb6b3df023b02bec188b8904b98be7a38->enter($__internal_71ec288ecaf954aa039518287259916fb6b3df023b02bec188b8904b98be7a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $__internal_fc859bcc36b99b574ec89151edbf5b7b1cc3a007e5f4d8bb790295e4cf7349fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc859bcc36b99b574ec89151edbf5b7b1cc3a007e5f4d8bb790295e4cf7349fe->enter($__internal_fc859bcc36b99b574ec89151edbf5b7b1cc3a007e5f4d8bb790295e4cf7349fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ec288ecaf954aa039518287259916fb6b3df023b02bec188b8904b98be7a38->leave($__internal_71ec288ecaf954aa039518287259916fb6b3df023b02bec188b8904b98be7a38_prof);

        
        $__internal_fc859bcc36b99b574ec89151edbf5b7b1cc3a007e5f4d8bb790295e4cf7349fe->leave($__internal_fc859bcc36b99b574ec89151edbf5b7b1cc3a007e5f4d8bb790295e4cf7349fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94d9b8f680aa73cfa4ea4a0108a4253cc1ad03e8c1f7f4b39ef645a3233523e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d9b8f680aa73cfa4ea4a0108a4253cc1ad03e8c1f7f4b39ef645a3233523e0->enter($__internal_94d9b8f680aa73cfa4ea4a0108a4253cc1ad03e8c1f7f4b39ef645a3233523e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b639abce997296b315dd3b07330cd1a916243675f3b3a3cda8a76e21fb78a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b639abce997296b315dd3b07330cd1a916243675f3b3a3cda8a76e21fb78a04->enter($__internal_0b639abce997296b315dd3b07330cd1a916243675f3b3a3cda8a76e21fb78a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        
        $__internal_0b639abce997296b315dd3b07330cd1a916243675f3b3a3cda8a76e21fb78a04->leave($__internal_0b639abce997296b315dd3b07330cd1a916243675f3b3a3cda8a76e21fb78a04_prof);

        
        $__internal_94d9b8f680aa73cfa4ea4a0108a4253cc1ad03e8c1f7f4b39ef645a3233523e0->leave($__internal_94d9b8f680aa73cfa4ea4a0108a4253cc1ad03e8c1f7f4b39ef645a3233523e0_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_c38e2c078d8d31901d75489c0afc68089332533292bdfbcd4ab1eb40c06dab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38e2c078d8d31901d75489c0afc68089332533292bdfbcd4ab1eb40c06dab0d->enter($__internal_c38e2c078d8d31901d75489c0afc68089332533292bdfbcd4ab1eb40c06dab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_adbf5e0aa47d8c6b31716578bde5f8379a7e82dae496e4d8c0356bdd0f06ce8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbf5e0aa47d8c6b31716578bde5f8379a7e82dae496e4d8c0356bdd0f06ce8e->enter($__internal_adbf5e0aa47d8c6b31716578bde5f8379a7e82dae496e4d8c0356bdd0f06ce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_adbf5e0aa47d8c6b31716578bde5f8379a7e82dae496e4d8c0356bdd0f06ce8e->leave($__internal_adbf5e0aa47d8c6b31716578bde5f8379a7e82dae496e4d8c0356bdd0f06ce8e_prof);

        
        $__internal_c38e2c078d8d31901d75489c0afc68089332533292bdfbcd4ab1eb40c06dab0d->leave($__internal_c38e2c078d8d31901d75489c0afc68089332533292bdfbcd4ab1eb40c06dab0d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef01442e8aff84be169c39f088cf6c9314c60bde254751809eb89dfc9c34877d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef01442e8aff84be169c39f088cf6c9314c60bde254751809eb89dfc9c34877d->enter($__internal_ef01442e8aff84be169c39f088cf6c9314c60bde254751809eb89dfc9c34877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2a0fd9d37138c76840f52614bb68a5ac42746eadad349f59416c37f38500e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a0fd9d37138c76840f52614bb68a5ac42746eadad349f59416c37f38500e50->enter($__internal_d2a0fd9d37138c76840f52614bb68a5ac42746eadad349f59416c37f38500e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h6>";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idDateAct", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            if (($this->getAttribute($this->getAttribute($context["date"], "typeDate", array()), "idType", array()) == 1)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["date"], "date", array()), "d/m/Y"), "html", null, true);
                echo ")";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<img class=\"imgAct\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couv"]) ? $context["couv"] : $this->getContext($context, "couv")), "chemin", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<h4>";
        // line 21
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
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "lieu", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Quand ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Combien ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "prixActivite", array()), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-2\">
\t\t\t\t\t\t\t<h4>Pour combien de personnes ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "inscritsMax", array()), "html", null, true);
        echo " personnes Max.</p>
\t\t\t\t\t\t\t<p>Places restantes : ";
        // line 44
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "inscritsMax", array()) - twig_length_filter($this->env, (isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<h4>Pour qui ?</h4>
\t\t\t\t\t\t\t<p>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "ageMin", array()), "html", null, true);
        echo " ans Min.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"btn-group col-md-4 col-md-offset-5 text-center\">
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photosAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
        echo ">
\t\t\t\t\t\t\t\t<h4>Photos</h4>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 1)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                if (($this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h4>Voté</h4>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 61
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h4>Inscrit</h4>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 64
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 70
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 78
            echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
            echo "\"><h4>Modifier</h4></a>
\t\t\t\t\t\t\t\t";
            // line 79
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><h4>Votes</h4></a>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 81
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><h4>Inscrits</h4></a>
\t\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_d2a0fd9d37138c76840f52614bb68a5ac42746eadad349f59416c37f38500e50->leave($__internal_d2a0fd9d37138c76840f52614bb68a5ac42746eadad349f59416c37f38500e50_prof);

        
        $__internal_ef01442e8aff84be169c39f088cf6c9314c60bde254751809eb89dfc9c34877d->leave($__internal_ef01442e8aff84be169c39f088cf6c9314c60bde254751809eb89dfc9c34877d_prof);

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
        return array (  260 => 85,  257 => 84,  251 => 82,  249 => 81,  244 => 80,  242 => 79,  237 => 78,  234 => 77,  228 => 76,  221 => 71,  219 => 70,  213 => 66,  210 => 65,  204 => 64,  200 => 62,  198 => 61,  195 => 60,  192 => 59,  185 => 58,  183 => 57,  177 => 54,  168 => 48,  161 => 44,  157 => 43,  148 => 37,  141 => 33,  134 => 29,  123 => 21,  116 => 18,  100 => 16,  94 => 13,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{{act.nomActivite}}{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}

<main>
    <div class=\"container blank\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h2>{{act.nomActivite}}</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h6>{% for date in act.idDateAct if date.typeDate.idType == 1 %}({{date.date|date(\"d/m/Y\")}}){% endfor %}</h2>
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
\t\t\t\t\t\t\t<p>{{date.date|date(\"d/m/Y H:i:s\")}}</p>
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
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"{{path('modAct', {'id' : act.idActivite})}}\"><h4>Modifier</h4></a>
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
