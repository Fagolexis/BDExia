<?php

/* MainBundle:Accueil:index.html.twig */
class __TwigTemplate_c343b584dadee0ce6cf8e011d7f2983ff8bbdfdb622dc8d3e8b282ec2ae66c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navAccueil' => array($this, 'block_navAccueil'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_effd5859562263185b98021ec061e8b5d8f9800db86b68594ba80a49773bb673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effd5859562263185b98021ec061e8b5d8f9800db86b68594ba80a49773bb673->enter($__internal_effd5859562263185b98021ec061e8b5d8f9800db86b68594ba80a49773bb673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $__internal_824e8f3ec889631fa2d7aa82af6b05875f402510fcfa93cec03177b05e885c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824e8f3ec889631fa2d7aa82af6b05875f402510fcfa93cec03177b05e885c04->enter($__internal_824e8f3ec889631fa2d7aa82af6b05875f402510fcfa93cec03177b05e885c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_effd5859562263185b98021ec061e8b5d8f9800db86b68594ba80a49773bb673->leave($__internal_effd5859562263185b98021ec061e8b5d8f9800db86b68594ba80a49773bb673_prof);

        
        $__internal_824e8f3ec889631fa2d7aa82af6b05875f402510fcfa93cec03177b05e885c04->leave($__internal_824e8f3ec889631fa2d7aa82af6b05875f402510fcfa93cec03177b05e885c04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab0d80629a49f1fe9237737adb3ebc11356e9a2d6c5e21d53cfea23f37b9326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab0d80629a49f1fe9237737adb3ebc11356e9a2d6c5e21d53cfea23f37b9326->enter($__internal_7ab0d80629a49f1fe9237737adb3ebc11356e9a2d6c5e21d53cfea23f37b9326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e20d739340ece8e89ef366188f5317288b6dcef014a9ad95ce186766bfcda5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20d739340ece8e89ef366188f5317288b6dcef014a9ad95ce186766bfcda5cb->enter($__internal_e20d739340ece8e89ef366188f5317288b6dcef014a9ad95ce186766bfcda5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_e20d739340ece8e89ef366188f5317288b6dcef014a9ad95ce186766bfcda5cb->leave($__internal_e20d739340ece8e89ef366188f5317288b6dcef014a9ad95ce186766bfcda5cb_prof);

        
        $__internal_7ab0d80629a49f1fe9237737adb3ebc11356e9a2d6c5e21d53cfea23f37b9326->leave($__internal_7ab0d80629a49f1fe9237737adb3ebc11356e9a2d6c5e21d53cfea23f37b9326_prof);

    }

    // line 5
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_f5a7babdb534cf7043394050dfa4263c690526203950be3840b9be52d21b518a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a7babdb534cf7043394050dfa4263c690526203950be3840b9be52d21b518a->enter($__internal_f5a7babdb534cf7043394050dfa4263c690526203950be3840b9be52d21b518a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_c063ff94aebf0f29d2addd12c24835fecd0d15d1918aa6c636ef4d55b33e1192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c063ff94aebf0f29d2addd12c24835fecd0d15d1918aa6c636ef4d55b33e1192->enter($__internal_c063ff94aebf0f29d2addd12c24835fecd0d15d1918aa6c636ef4d55b33e1192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        echo "class=\"active\"";
        
        $__internal_c063ff94aebf0f29d2addd12c24835fecd0d15d1918aa6c636ef4d55b33e1192->leave($__internal_c063ff94aebf0f29d2addd12c24835fecd0d15d1918aa6c636ef4d55b33e1192_prof);

        
        $__internal_f5a7babdb534cf7043394050dfa4263c690526203950be3840b9be52d21b518a->leave($__internal_f5a7babdb534cf7043394050dfa4263c690526203950be3840b9be52d21b518a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_870e43d26f04c2d0a590464621443d94739a3c10d563e37af42182ce15c3d024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870e43d26f04c2d0a590464621443d94739a3c10d563e37af42182ce15c3d024->enter($__internal_870e43d26f04c2d0a590464621443d94739a3c10d563e37af42182ce15c3d024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0b3af2f8dcfeab11f9eefc45baafe4200d0be8629102d434ad54f9158598747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b3af2f8dcfeab11f9eefc45baafe4200d0be8629102d434ad54f9158598747->enter($__internal_a0b3af2f8dcfeab11f9eefc45baafe4200d0be8629102d434ad54f9158598747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"container text-center carrousel\">
\t\t<div id=\"actCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 13
            echo "\t\t\t\t\t<li data-target=\"#actCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["slide"], "html", null, true);
            echo "\"";
            if (($context["slide"] == 0)) {
                echo " class=\"active\"";
            }
            echo "></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 19
            echo "\t\t\t\t\t<div class=\"item ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "imgAct", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 21
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "idDateAct", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                if (($this->getAttribute($this->getAttribute($context["date"], "typeDate", array()), "idType", array()) == 1)) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["date"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 34
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 35
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#actCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#actCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<hr/>
\t<div class=\"container\">
\t\t<div class=\"activite blank\">
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 51
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"imgAct\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<h2>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "idDateAct", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                if (($this->getAttribute($this->getAttribute($context["date"], "typeDate", array()), "idType", array()) == 1)) {
                    // line 57
                    echo "\t\t\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["date"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "</p>
\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 59
                echo "\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "descriptionActivite", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_a0b3af2f8dcfeab11f9eefc45baafe4200d0be8629102d434ad54f9158598747->leave($__internal_a0b3af2f8dcfeab11f9eefc45baafe4200d0be8629102d434ad54f9158598747_prof);

        
        $__internal_870e43d26f04c2d0a590464621443d94739a3c10d563e37af42182ce15c3d024->leave($__internal_870e43d26f04c2d0a590464621443d94739a3c10d563e37af42182ce15c3d024_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 63,  241 => 61,  232 => 59,  223 => 57,  217 => 56,  213 => 55,  207 => 51,  203 => 50,  187 => 36,  181 => 35,  179 => 34,  174 => 31,  164 => 29,  159 => 28,  155 => 27,  151 => 26,  148 => 25,  142 => 24,  135 => 22,  132 => 21,  128 => 20,  121 => 19,  116 => 18,  114 => 17,  110 => 15,  97 => 13,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Page d'accueil{% endblock %}

{% block navAccueil %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"container text-center carrousel\">
\t\t<div id=\"actCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t{% for slide in 0..(conf|length)-1 %}
\t\t\t\t\t<li data-target=\"#actCarousel\" data-slide-to=\"{{slide}}\"{% if slide == 0 %} class=\"active\"{% endif %}></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t{% set i = 0 %}
\t\t\t\t{% for act in conf %}
\t\t\t\t\t<div class=\"item {% if i == 0 %}active{% endif %}\">
\t\t\t\t\t\t{% for img in act.imgAct %}
\t\t\t\t\t\t\t{% if img.typeImg.idType == 1 %}
\t\t\t\t\t\t\t\t<img src=\"{{asset('img/')}}{{img.chemin}}\" alt=\"\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<a href=\"{{path('showAct', {'id': act.idActivite})}}\">
\t\t\t\t\t\t\t\t{{act.nomActivite}} <br>
\t\t\t\t\t\t\t\t{% for date in act.idDateAct if date.typeDate.idType == 1 %}
\t\t\t\t\t\t\t\t\t{{date.date|date(\"d/m/Y\")}}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% set i = i+1 %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#actCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#actCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<hr/>
\t<div class=\"container\">
\t\t<div class=\"activite blank\">
\t\t\t{% for act in prop %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"imgAct\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<h2>{{act.nomActivite}}</h2>
\t\t\t\t\t{% for date in act.idDateAct if date.typeDate.idType == 1 %}
\t\t\t\t\t\t<p>{{date.date|date(\"d/m/Y\")}}</p>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>{{act.descriptionActivite}}</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Accueil/index.html.twig");
    }
}
