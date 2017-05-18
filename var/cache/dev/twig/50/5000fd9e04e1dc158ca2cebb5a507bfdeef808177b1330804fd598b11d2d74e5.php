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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c3a904e74a30caecc39fa0cf37b875377ef9451aa0f910807f669da6ac6c142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3a904e74a30caecc39fa0cf37b875377ef9451aa0f910807f669da6ac6c142->enter($__internal_5c3a904e74a30caecc39fa0cf37b875377ef9451aa0f910807f669da6ac6c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $__internal_54fedf384eec8dd9d28ceea433a1a5395524fbd74e6aa9dde4e586cc06f69c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fedf384eec8dd9d28ceea433a1a5395524fbd74e6aa9dde4e586cc06f69c2f->enter($__internal_54fedf384eec8dd9d28ceea433a1a5395524fbd74e6aa9dde4e586cc06f69c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3a904e74a30caecc39fa0cf37b875377ef9451aa0f910807f669da6ac6c142->leave($__internal_5c3a904e74a30caecc39fa0cf37b875377ef9451aa0f910807f669da6ac6c142_prof);

        
        $__internal_54fedf384eec8dd9d28ceea433a1a5395524fbd74e6aa9dde4e586cc06f69c2f->leave($__internal_54fedf384eec8dd9d28ceea433a1a5395524fbd74e6aa9dde4e586cc06f69c2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e33e3e39ecef3898d2a68247f7c362780f50ce49bc580d51d1fcc74c7334221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e33e3e39ecef3898d2a68247f7c362780f50ce49bc580d51d1fcc74c7334221->enter($__internal_5e33e3e39ecef3898d2a68247f7c362780f50ce49bc580d51d1fcc74c7334221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de0008a3c743d97b61a3a3c35b0098dab4436d93fd2d2fbb8646aa8c837f770c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0008a3c743d97b61a3a3c35b0098dab4436d93fd2d2fbb8646aa8c837f770c->enter($__internal_de0008a3c743d97b61a3a3c35b0098dab4436d93fd2d2fbb8646aa8c837f770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_de0008a3c743d97b61a3a3c35b0098dab4436d93fd2d2fbb8646aa8c837f770c->leave($__internal_de0008a3c743d97b61a3a3c35b0098dab4436d93fd2d2fbb8646aa8c837f770c_prof);

        
        $__internal_5e33e3e39ecef3898d2a68247f7c362780f50ce49bc580d51d1fcc74c7334221->leave($__internal_5e33e3e39ecef3898d2a68247f7c362780f50ce49bc580d51d1fcc74c7334221_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57792666bcf6c9621081d5281d325f2b0b518afe054e8d9d906be82474fa9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57792666bcf6c9621081d5281d325f2b0b518afe054e8d9d906be82474fa9a5->enter($__internal_a57792666bcf6c9621081d5281d325f2b0b518afe054e8d9d906be82474fa9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adc5c68123e5d44919a2f45feff529dce4e84a3d1f3e86792a1b7888de37e976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc5c68123e5d44919a2f45feff529dce4e84a3d1f3e86792a1b7888de37e976->enter($__internal_adc5c68123e5d44919a2f45feff529dce4e84a3d1f3e86792a1b7888de37e976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main>
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-8 col-md-offset-2 info\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h3><span class=\"nomActivity col-md-12\">
\t\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "
\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<img class=\"imgAct\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couv"]) ? $context["couv"] : $this->getContext($context, "couv")), "chemin", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<span class=\"description col-md-12\">
\t\t\t\t\t\t<br><p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "descriptionActivite", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Lieu :</h3><br>
\t\t\t\t\t\t<p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "lieu", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Horaire :</h3><br>
\t\t\t\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 \">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Prix :</h3><br>
\t\t\t\t\t\t<p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "prixActivite", array()), "html", null, true);
        echo "€</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<a href=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photosAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
        echo "><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-8 text-center\">
\t\t\t\t\t\t";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 1)) {
            // line 47
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Voté</button>
\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 51
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Inscrit</button>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 61
                echo "\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 62
                echo "\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 68
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Votes</button></a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 70
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Inscrits</button></a>
\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_adc5c68123e5d44919a2f45feff529dce4e84a3d1f3e86792a1b7888de37e976->leave($__internal_adc5c68123e5d44919a2f45feff529dce4e84a3d1f3e86792a1b7888de37e976_prof);

        
        $__internal_a57792666bcf6c9621081d5281d325f2b0b518afe054e8d9d906be82474fa9a5->leave($__internal_a57792666bcf6c9621081d5281d325f2b0b518afe054e8d9d906be82474fa9a5_prof);

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
        return array (  198 => 74,  195 => 73,  189 => 71,  187 => 70,  182 => 69,  179 => 68,  176 => 67,  169 => 62,  166 => 61,  163 => 56,  157 => 55,  154 => 54,  150 => 52,  148 => 51,  145 => 50,  142 => 49,  139 => 48,  134 => 47,  132 => 46,  126 => 43,  118 => 38,  110 => 33,  102 => 28,  94 => 23,  85 => 18,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block body %}

<main>
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-8 col-md-offset-2 info\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h3><span class=\"nomActivity col-md-12\">
\t\t\t\t\t\t{{act.nomActivite}}
\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<img class=\"imgAct\" src=\"{{asset('img/')}}{{couv.chemin}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<span class=\"description col-md-12\">
\t\t\t\t\t\t<br><p>{{act.descriptionActivite}}</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Lieu :</h3><br>
\t\t\t\t\t\t<p>{{act.lieu}}</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Horaire :</h3><br>
\t\t\t\t\t\t<p>{{date.date|date(\"d/m/Y\")}}</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 \">
\t\t\t\t\t<span class=\"lieu col-md-12\"><h3>Prix :</h3><br>
\t\t\t\t\t\t<p>{{act.prixActivite}}€</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<a href={{path('photosAct', {'id':act.idActivite})}}><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-8 text-center\">
\t\t\t\t\t\t{% if app.session.get('roleUser') == 1 %}
\t\t\t\t\t\t\t{% for sub in subs %}
\t\t\t\t\t\t\t\t{% if sub.idInscrit.idUser == app.session.get('idUser') %}
\t\t\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Voté</button>
\t\t\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Inscrit</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}{# 
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t</form> #}
\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% elseif app.session.get('roleUser') == 2 %}
\t\t\t\t\t\t\t{% if act.etatAct.idEtat == 2 %}
\t\t\t\t\t\t\t\t<a href=\"{{path('subAct', {'id' : act.idActivite})}}\"><button class=\"inscription\">Votes</button></a>
\t\t\t\t\t\t\t{% elseif act.etatAct.idEtat == 3 %}
\t\t\t\t\t\t\t\t<a href=\"{{path('subAct', {'id' : act.idActivite})}}\"><button class=\"inscription\">Inscrits</button></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:details.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details.html.twig");
    }
}
