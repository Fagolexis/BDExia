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
        $__internal_4d46ee6caa562bad5d66ae4f61f4af615a8a61285b2831f7663046a553d1c6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d46ee6caa562bad5d66ae4f61f4af615a8a61285b2831f7663046a553d1c6aa->enter($__internal_4d46ee6caa562bad5d66ae4f61f4af615a8a61285b2831f7663046a553d1c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $__internal_47c32640ad83d9e3758062152512f63aea33da09fc62dbeb4ba018a44ae21b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c32640ad83d9e3758062152512f63aea33da09fc62dbeb4ba018a44ae21b17->enter($__internal_47c32640ad83d9e3758062152512f63aea33da09fc62dbeb4ba018a44ae21b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d46ee6caa562bad5d66ae4f61f4af615a8a61285b2831f7663046a553d1c6aa->leave($__internal_4d46ee6caa562bad5d66ae4f61f4af615a8a61285b2831f7663046a553d1c6aa_prof);

        
        $__internal_47c32640ad83d9e3758062152512f63aea33da09fc62dbeb4ba018a44ae21b17->leave($__internal_47c32640ad83d9e3758062152512f63aea33da09fc62dbeb4ba018a44ae21b17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d58676992612fdfdf3ed857afe878f8c3f1f676f9c0446dcb8368044db01f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d58676992612fdfdf3ed857afe878f8c3f1f676f9c0446dcb8368044db01f7d->enter($__internal_3d58676992612fdfdf3ed857afe878f8c3f1f676f9c0446dcb8368044db01f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0304138a6c7e2a68ddb10203af3bd8785ef660b051c1ee2cd9fb70379a2a00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0304138a6c7e2a68ddb10203af3bd8785ef660b051c1ee2cd9fb70379a2a00a->enter($__internal_c0304138a6c7e2a68ddb10203af3bd8785ef660b051c1ee2cd9fb70379a2a00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_c0304138a6c7e2a68ddb10203af3bd8785ef660b051c1ee2cd9fb70379a2a00a->leave($__internal_c0304138a6c7e2a68ddb10203af3bd8785ef660b051c1ee2cd9fb70379a2a00a_prof);

        
        $__internal_3d58676992612fdfdf3ed857afe878f8c3f1f676f9c0446dcb8368044db01f7d->leave($__internal_3d58676992612fdfdf3ed857afe878f8c3f1f676f9c0446dcb8368044db01f7d_prof);

    }

    // line 5
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_03e696ef7bc32180615b389b4d52244d47df1a3b7460a9ab45839567682454c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e696ef7bc32180615b389b4d52244d47df1a3b7460a9ab45839567682454c0->enter($__internal_03e696ef7bc32180615b389b4d52244d47df1a3b7460a9ab45839567682454c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_50d755cc4cc8d4f97b7e99027984235711ab6a5f94e273821c8cd721eed2d3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d755cc4cc8d4f97b7e99027984235711ab6a5f94e273821c8cd721eed2d3f4->enter($__internal_50d755cc4cc8d4f97b7e99027984235711ab6a5f94e273821c8cd721eed2d3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        echo "class=\"active\"";
        
        $__internal_50d755cc4cc8d4f97b7e99027984235711ab6a5f94e273821c8cd721eed2d3f4->leave($__internal_50d755cc4cc8d4f97b7e99027984235711ab6a5f94e273821c8cd721eed2d3f4_prof);

        
        $__internal_03e696ef7bc32180615b389b4d52244d47df1a3b7460a9ab45839567682454c0->leave($__internal_03e696ef7bc32180615b389b4d52244d47df1a3b7460a9ab45839567682454c0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b9ab4a4f3b81110b5f77e5cc281202ab86df341027d061f096088b6054d3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b9ab4a4f3b81110b5f77e5cc281202ab86df341027d061f096088b6054d3ba->enter($__internal_37b9ab4a4f3b81110b5f77e5cc281202ab86df341027d061f096088b6054d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2e804f10783ab7b2170104e90bb03479fd625bc21cb6a703961fbfd6bc6d887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e804f10783ab7b2170104e90bb03479fd625bc21cb6a703961fbfd6bc6d887->enter($__internal_a2e804f10783ab7b2170104e90bb03479fd625bc21cb6a703961fbfd6bc6d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2e804f10783ab7b2170104e90bb03479fd625bc21cb6a703961fbfd6bc6d887->leave($__internal_a2e804f10783ab7b2170104e90bb03479fd625bc21cb6a703961fbfd6bc6d887_prof);

        
        $__internal_37b9ab4a4f3b81110b5f77e5cc281202ab86df341027d061f096088b6054d3ba->leave($__internal_37b9ab4a4f3b81110b5f77e5cc281202ab86df341027d061f096088b6054d3ba_prof);

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
