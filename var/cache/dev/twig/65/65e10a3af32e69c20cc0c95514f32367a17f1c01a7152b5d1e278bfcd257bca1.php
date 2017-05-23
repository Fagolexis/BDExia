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
        $__internal_09383b85b8df73d1f2f3c358f136ab49d745e373361613f1cad2e475b09fe989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09383b85b8df73d1f2f3c358f136ab49d745e373361613f1cad2e475b09fe989->enter($__internal_09383b85b8df73d1f2f3c358f136ab49d745e373361613f1cad2e475b09fe989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $__internal_0dae3ac3f9eda46ccd28b44db9633dd06c0f422513e881d5d0e195ed914c0935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dae3ac3f9eda46ccd28b44db9633dd06c0f422513e881d5d0e195ed914c0935->enter($__internal_0dae3ac3f9eda46ccd28b44db9633dd06c0f422513e881d5d0e195ed914c0935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09383b85b8df73d1f2f3c358f136ab49d745e373361613f1cad2e475b09fe989->leave($__internal_09383b85b8df73d1f2f3c358f136ab49d745e373361613f1cad2e475b09fe989_prof);

        
        $__internal_0dae3ac3f9eda46ccd28b44db9633dd06c0f422513e881d5d0e195ed914c0935->leave($__internal_0dae3ac3f9eda46ccd28b44db9633dd06c0f422513e881d5d0e195ed914c0935_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a67339cc094613860d098279d494befe419c66411e6c33adb7ddcc173ee5c803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67339cc094613860d098279d494befe419c66411e6c33adb7ddcc173ee5c803->enter($__internal_a67339cc094613860d098279d494befe419c66411e6c33adb7ddcc173ee5c803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b400baf2e71acdbb0456de4a3305f84e3371dd87116362b9808b68f73eeb216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b400baf2e71acdbb0456de4a3305f84e3371dd87116362b9808b68f73eeb216->enter($__internal_9b400baf2e71acdbb0456de4a3305f84e3371dd87116362b9808b68f73eeb216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_9b400baf2e71acdbb0456de4a3305f84e3371dd87116362b9808b68f73eeb216->leave($__internal_9b400baf2e71acdbb0456de4a3305f84e3371dd87116362b9808b68f73eeb216_prof);

        
        $__internal_a67339cc094613860d098279d494befe419c66411e6c33adb7ddcc173ee5c803->leave($__internal_a67339cc094613860d098279d494befe419c66411e6c33adb7ddcc173ee5c803_prof);

    }

    // line 5
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_ff2af2b8288b51ec2e152f0f909fde51e9bffbb41310b53ff873aa5da9bb7731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2af2b8288b51ec2e152f0f909fde51e9bffbb41310b53ff873aa5da9bb7731->enter($__internal_ff2af2b8288b51ec2e152f0f909fde51e9bffbb41310b53ff873aa5da9bb7731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_29e70078352ac96be7d81142c17642d528ab77d6410a5d17a0de41076dcae778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e70078352ac96be7d81142c17642d528ab77d6410a5d17a0de41076dcae778->enter($__internal_29e70078352ac96be7d81142c17642d528ab77d6410a5d17a0de41076dcae778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        echo "class=\"active\"";
        
        $__internal_29e70078352ac96be7d81142c17642d528ab77d6410a5d17a0de41076dcae778->leave($__internal_29e70078352ac96be7d81142c17642d528ab77d6410a5d17a0de41076dcae778_prof);

        
        $__internal_ff2af2b8288b51ec2e152f0f909fde51e9bffbb41310b53ff873aa5da9bb7731->leave($__internal_ff2af2b8288b51ec2e152f0f909fde51e9bffbb41310b53ff873aa5da9bb7731_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d76c571dd75858f23db31ba80de30e79d9e3984e882308cff3a634403b3e5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d76c571dd75858f23db31ba80de30e79d9e3984e882308cff3a634403b3e5db->enter($__internal_6d76c571dd75858f23db31ba80de30e79d9e3984e882308cff3a634403b3e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc4dd14323ee17f12091ab33e64450781ece31ac0ed7287a9e43b7952726cc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4dd14323ee17f12091ab33e64450781ece31ac0ed7287a9e43b7952726cc1a->enter($__internal_cc4dd14323ee17f12091ab33e64450781ece31ac0ed7287a9e43b7952726cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "descriptionActivite", array()), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "idDateAct", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["date"], "typeDate", array()), "idType", array()) == 1)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["date"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 37
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 38
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 54
            echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<img src=\"\" alt=\"\" class=\"imgAct\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<h2>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t<p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "descriptionActivite", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_cc4dd14323ee17f12091ab33e64450781ece31ac0ed7287a9e43b7952726cc1a->leave($__internal_cc4dd14323ee17f12091ab33e64450781ece31ac0ed7287a9e43b7952726cc1a_prof);

        
        $__internal_6d76c571dd75858f23db31ba80de30e79d9e3984e882308cff3a634403b3e5db->leave($__internal_6d76c571dd75858f23db31ba80de30e79d9e3984e882308cff3a634403b3e5db_prof);

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
        return array (  234 => 62,  225 => 59,  221 => 58,  215 => 54,  211 => 53,  195 => 39,  189 => 38,  187 => 37,  182 => 34,  176 => 33,  170 => 31,  167 => 30,  163 => 29,  159 => 28,  155 => 27,  151 => 26,  148 => 25,  142 => 24,  135 => 22,  132 => 21,  128 => 20,  121 => 19,  116 => 18,  114 => 17,  110 => 15,  97 => 13,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Accueil{% endblock %}

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
\t\t\t\t\t\t\t\t{{act.descriptionActivite}} <br>
\t\t\t\t\t\t\t\t{% for date in act.idDateAct %}
\t\t\t\t\t\t\t\t\t{% if date.typeDate.idType == 1 %}
\t\t\t\t\t\t\t\t\t\t{{date.date|date(\"d/m/Y\")}}
\t\t\t\t\t\t\t\t\t{% endif %}
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
\t\t\t\t\t<p>{{act.descriptionActivite}}</p>
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
