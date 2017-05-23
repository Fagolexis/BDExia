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
        $__internal_2c04694b344452e539c12f1c3e6a6a6f2c0ea8986cb236ee7a9d7ace12cf47c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c04694b344452e539c12f1c3e6a6a6f2c0ea8986cb236ee7a9d7ace12cf47c5->enter($__internal_2c04694b344452e539c12f1c3e6a6a6f2c0ea8986cb236ee7a9d7ace12cf47c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $__internal_d038c7df55ec1b71fb32f32fc1cc25ffa939dc50b2c95af17f3a8febb226e241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d038c7df55ec1b71fb32f32fc1cc25ffa939dc50b2c95af17f3a8febb226e241->enter($__internal_d038c7df55ec1b71fb32f32fc1cc25ffa939dc50b2c95af17f3a8febb226e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c04694b344452e539c12f1c3e6a6a6f2c0ea8986cb236ee7a9d7ace12cf47c5->leave($__internal_2c04694b344452e539c12f1c3e6a6a6f2c0ea8986cb236ee7a9d7ace12cf47c5_prof);

        
        $__internal_d038c7df55ec1b71fb32f32fc1cc25ffa939dc50b2c95af17f3a8febb226e241->leave($__internal_d038c7df55ec1b71fb32f32fc1cc25ffa939dc50b2c95af17f3a8febb226e241_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67abb7483e5b6793eb9901d551e221355b069c4e610a0adc47f909a91ef7ce13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67abb7483e5b6793eb9901d551e221355b069c4e610a0adc47f909a91ef7ce13->enter($__internal_67abb7483e5b6793eb9901d551e221355b069c4e610a0adc47f909a91ef7ce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c0063aef7fc54d23b49c06a59bf78107f7beef53fe05c36e0a4ce5921d7a9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0063aef7fc54d23b49c06a59bf78107f7beef53fe05c36e0a4ce5921d7a9e4->enter($__internal_1c0063aef7fc54d23b49c06a59bf78107f7beef53fe05c36e0a4ce5921d7a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_1c0063aef7fc54d23b49c06a59bf78107f7beef53fe05c36e0a4ce5921d7a9e4->leave($__internal_1c0063aef7fc54d23b49c06a59bf78107f7beef53fe05c36e0a4ce5921d7a9e4_prof);

        
        $__internal_67abb7483e5b6793eb9901d551e221355b069c4e610a0adc47f909a91ef7ce13->leave($__internal_67abb7483e5b6793eb9901d551e221355b069c4e610a0adc47f909a91ef7ce13_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_e8dc70d3263d7a6afa83445f0a047ae8d7fe4e426f1e25cc52e6102a28f8b230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dc70d3263d7a6afa83445f0a047ae8d7fe4e426f1e25cc52e6102a28f8b230->enter($__internal_e8dc70d3263d7a6afa83445f0a047ae8d7fe4e426f1e25cc52e6102a28f8b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_7bd4faec4404a66bd9c8a9af98b00b9afa0c8eef182e29663df1b8a9131f4d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd4faec4404a66bd9c8a9af98b00b9afa0c8eef182e29663df1b8a9131f4d58->enter($__internal_7bd4faec4404a66bd9c8a9af98b00b9afa0c8eef182e29663df1b8a9131f4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_7bd4faec4404a66bd9c8a9af98b00b9afa0c8eef182e29663df1b8a9131f4d58->leave($__internal_7bd4faec4404a66bd9c8a9af98b00b9afa0c8eef182e29663df1b8a9131f4d58_prof);

        
        $__internal_e8dc70d3263d7a6afa83445f0a047ae8d7fe4e426f1e25cc52e6102a28f8b230->leave($__internal_e8dc70d3263d7a6afa83445f0a047ae8d7fe4e426f1e25cc52e6102a28f8b230_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_201a99be4cb361c5e121247761ed45353d83d15c54d573ea8bddfd6c800f9151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201a99be4cb361c5e121247761ed45353d83d15c54d573ea8bddfd6c800f9151->enter($__internal_201a99be4cb361c5e121247761ed45353d83d15c54d573ea8bddfd6c800f9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50c9614b4e36fcce381def77ac4ae8d77787b372a9b3f2473d707f31705223b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c9614b4e36fcce381def77ac4ae8d77787b372a9b3f2473d707f31705223b4->enter($__internal_50c9614b4e36fcce381def77ac4ae8d77787b372a9b3f2473d707f31705223b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main>
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-8 col-md-offset-2 info\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h3><span class=\"nomActivity col-md-12\">
\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "
\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<img class=\"imgAct\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couv"]) ? $context["couv"] : $this->getContext($context, "couv")), "chemin", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "descriptionActivite", array()), "html", null, true);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h4>Lieu :</h4>
\t\t\t\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "lieu", array()), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<h4>Horaire :</h4>
\t\t\t\t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 \">
\t\t\t\t\t<h4>Prix :</h4>
\t\t\t\t\t<p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "prixActivite", array()), "html", null, true);
        echo "€</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<a href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photosAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
        echo "><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-8 text-center\">
\t\t\t\t\t\t";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 1)) {
            // line 42
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                if (($this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Voté</button>
\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 45
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"inscription\">Inscrit</button>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"Voter\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 54
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t<input class=\"inscription\" type=\"submit\" name=\"subAct\" value=\"S'inscrire\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"info\" placeholder=\"Informations supplémentaires\" size=\"25\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 62
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2)) {
                // line 63
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Votes</button></a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 64
(isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subAct", array("id" => $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()))), "html", null, true);
                echo "\"><button class=\"inscription\">Inscrits</button></a>
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_50c9614b4e36fcce381def77ac4ae8d77787b372a9b3f2473d707f31705223b4->leave($__internal_50c9614b4e36fcce381def77ac4ae8d77787b372a9b3f2473d707f31705223b4_prof);

        
        $__internal_201a99be4cb361c5e121247761ed45353d83d15c54d573ea8bddfd6c800f9151->leave($__internal_201a99be4cb361c5e121247761ed45353d83d15c54d573ea8bddfd6c800f9151_prof);

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
        return array (  217 => 68,  214 => 67,  208 => 65,  206 => 64,  201 => 63,  198 => 62,  195 => 61,  189 => 60,  182 => 55,  180 => 54,  174 => 50,  171 => 49,  165 => 48,  161 => 46,  159 => 45,  156 => 44,  153 => 43,  146 => 42,  144 => 41,  138 => 38,  131 => 34,  124 => 30,  117 => 26,  110 => 22,  103 => 19,  96 => 15,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
    <div clas=\"container text-center carrousel blank\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-8 col-md-offset-2 info\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h3><span class=\"nomActivity col-md-12\">
\t\t\t\t\t\t{{act.nomActivite}}
\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<img class=\"imgAct\" src=\"{{asset('img/')}}{{couv.chemin}}\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>{{act.descriptionActivite}}</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<h4>Lieu :</h4>
\t\t\t\t\t<p>{{act.lieu}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<h4>Horaire :</h4>
\t\t\t\t\t<p>{{date.date|date(\"d/m/Y\")}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 \">
\t\t\t\t\t<h4>Prix :</h4>
\t\t\t\t\t<p>{{act.prixActivite}}€</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<a href={{path('photosAct', {'id':act.idActivite})}}><div class=\"inscription\"><h4>Photos</h4></div></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-md-offset-8 text-center\">
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
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:details.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details.html.twig");
    }
}
