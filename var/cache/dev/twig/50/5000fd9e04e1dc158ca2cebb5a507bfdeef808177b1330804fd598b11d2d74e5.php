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
        $__internal_feaf9526f2081ce548bb63f112e820f1274a5e98eced2d4c369f3c4dda89309c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaf9526f2081ce548bb63f112e820f1274a5e98eced2d4c369f3c4dda89309c->enter($__internal_feaf9526f2081ce548bb63f112e820f1274a5e98eced2d4c369f3c4dda89309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $__internal_fda34452d08d89a8ce9dad49c28ce2a614741bd50ee4c6b007e5b2d799af538b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda34452d08d89a8ce9dad49c28ce2a614741bd50ee4c6b007e5b2d799af538b->enter($__internal_fda34452d08d89a8ce9dad49c28ce2a614741bd50ee4c6b007e5b2d799af538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feaf9526f2081ce548bb63f112e820f1274a5e98eced2d4c369f3c4dda89309c->leave($__internal_feaf9526f2081ce548bb63f112e820f1274a5e98eced2d4c369f3c4dda89309c_prof);

        
        $__internal_fda34452d08d89a8ce9dad49c28ce2a614741bd50ee4c6b007e5b2d799af538b->leave($__internal_fda34452d08d89a8ce9dad49c28ce2a614741bd50ee4c6b007e5b2d799af538b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b019350c8443e5ec4fdb6b48b97c8d46c42c652abaac647561c221fa4bab43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b019350c8443e5ec4fdb6b48b97c8d46c42c652abaac647561c221fa4bab43->enter($__internal_b4b019350c8443e5ec4fdb6b48b97c8d46c42c652abaac647561c221fa4bab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4902d88278155e87521a15926b93667b1293f722bfcba5cdd2d8d68f4698aead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4902d88278155e87521a15926b93667b1293f722bfcba5cdd2d8d68f4698aead->enter($__internal_4902d88278155e87521a15926b93667b1293f722bfcba5cdd2d8d68f4698aead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_4902d88278155e87521a15926b93667b1293f722bfcba5cdd2d8d68f4698aead->leave($__internal_4902d88278155e87521a15926b93667b1293f722bfcba5cdd2d8d68f4698aead_prof);

        
        $__internal_b4b019350c8443e5ec4fdb6b48b97c8d46c42c652abaac647561c221fa4bab43->leave($__internal_b4b019350c8443e5ec4fdb6b48b97c8d46c42c652abaac647561c221fa4bab43_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_7cd9e470c5604d1b2b2070d1b42b3b4f700fd9db5a510adb886fbd713a8cf59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd9e470c5604d1b2b2070d1b42b3b4f700fd9db5a510adb886fbd713a8cf59b->enter($__internal_7cd9e470c5604d1b2b2070d1b42b3b4f700fd9db5a510adb886fbd713a8cf59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_feeeabec025edbf3fb4d66abc7b5f79655cc5e936253c95df1c65ab36dc66efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feeeabec025edbf3fb4d66abc7b5f79655cc5e936253c95df1c65ab36dc66efb->enter($__internal_feeeabec025edbf3fb4d66abc7b5f79655cc5e936253c95df1c65ab36dc66efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_feeeabec025edbf3fb4d66abc7b5f79655cc5e936253c95df1c65ab36dc66efb->leave($__internal_feeeabec025edbf3fb4d66abc7b5f79655cc5e936253c95df1c65ab36dc66efb_prof);

        
        $__internal_7cd9e470c5604d1b2b2070d1b42b3b4f700fd9db5a510adb886fbd713a8cf59b->leave($__internal_7cd9e470c5604d1b2b2070d1b42b3b4f700fd9db5a510adb886fbd713a8cf59b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60c8908507a4f7886bbe04cd23e8aa6e5590edf9645fa73461fde75517558cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60c8908507a4f7886bbe04cd23e8aa6e5590edf9645fa73461fde75517558cb->enter($__internal_b60c8908507a4f7886bbe04cd23e8aa6e5590edf9645fa73461fde75517558cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac98ea43cc404f2dfc2b71c32b2f927f28b6d0a81342d214ae9f6faf95492812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac98ea43cc404f2dfc2b71c32b2f927f28b6d0a81342d214ae9f6faf95492812->enter($__internal_ac98ea43cc404f2dfc2b71c32b2f927f28b6d0a81342d214ae9f6faf95492812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<h4>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "descriptionActivite", array()), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Où ?</h4>
\t\t\t\t\t<p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "lieu", array()), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Quand ?</h4>
\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Combien ?</h4>
\t\t\t\t\t<p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "prixActivite", array()), "html", null, true);
        echo "€</p>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-4 text-center\">
\t\t\t\t\t\t<a href=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photosAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
        echo "><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 text-center\">
\t\t\t\t\t\t";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 1)) {
            // line 36
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                if (($this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Voté</button>
\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 39
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Inscrit</button>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 48
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 56
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 57
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Votes</button></a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 58
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Inscrits</button></a>
\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_ac98ea43cc404f2dfc2b71c32b2f927f28b6d0a81342d214ae9f6faf95492812->leave($__internal_ac98ea43cc404f2dfc2b71c32b2f927f28b6d0a81342d214ae9f6faf95492812_prof);

        
        $__internal_b60c8908507a4f7886bbe04cd23e8aa6e5590edf9645fa73461fde75517558cb->leave($__internal_b60c8908507a4f7886bbe04cd23e8aa6e5590edf9645fa73461fde75517558cb_prof);

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
        return array (  211 => 62,  208 => 61,  202 => 59,  200 => 58,  195 => 57,  192 => 56,  189 => 55,  183 => 54,  176 => 49,  174 => 48,  168 => 44,  165 => 43,  159 => 42,  155 => 40,  153 => 39,  150 => 38,  147 => 37,  140 => 36,  138 => 35,  132 => 32,  126 => 29,  119 => 25,  112 => 21,  105 => 17,  99 => 15,  94 => 13,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<h4>{{act.descriptionActivite}}</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Où ?</h4>
\t\t\t\t\t<p>{{act.lieu}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Quand ?</h4>
\t\t\t\t\t<p>{{date.date|date(\"d/m/Y\")}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t<h4>Combien ?</h4>
\t\t\t\t\t<p>{{act.prixActivite}}€</p>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-4 text-center\">
\t\t\t\t\t\t<a href={{path('photosAct', {'id':act.idActivite})}}><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 text-center\">
\t\t\t\t\t\t{% if app.session.get('roleUser') == 1 %}
\t\t\t\t\t\t\t{% for sub in subs if sub.idInscrit.idUser == app.session.get('idUser') %}
\t\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Voté</button>
\t\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Inscrit</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% elseif app.session.get('roleUser') == 2 %}
\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t<a href=\"{{path('subAct', {'id' : act.idActivite})}}\"><button class=\"inscription\">Votes</button></a>
\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t<a href=\"{{path('subAct', {'id' : act.idActivite})}}\"><button class=\"inscription\">Inscrits</button></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:details.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details.html.twig");
    }
}
