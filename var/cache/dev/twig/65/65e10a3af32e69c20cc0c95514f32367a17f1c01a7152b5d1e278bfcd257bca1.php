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
        $__internal_48fcd85a8ff31ca1c915ccbcc586f57364c495d9bd7c83e961ca3a0ceeb997e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fcd85a8ff31ca1c915ccbcc586f57364c495d9bd7c83e961ca3a0ceeb997e3->enter($__internal_48fcd85a8ff31ca1c915ccbcc586f57364c495d9bd7c83e961ca3a0ceeb997e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $__internal_1702a4b5d8954b22a8070352aa54aaa086f533f11821db9fc6c4a4319243552c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1702a4b5d8954b22a8070352aa54aaa086f533f11821db9fc6c4a4319243552c->enter($__internal_1702a4b5d8954b22a8070352aa54aaa086f533f11821db9fc6c4a4319243552c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48fcd85a8ff31ca1c915ccbcc586f57364c495d9bd7c83e961ca3a0ceeb997e3->leave($__internal_48fcd85a8ff31ca1c915ccbcc586f57364c495d9bd7c83e961ca3a0ceeb997e3_prof);

        
        $__internal_1702a4b5d8954b22a8070352aa54aaa086f533f11821db9fc6c4a4319243552c->leave($__internal_1702a4b5d8954b22a8070352aa54aaa086f533f11821db9fc6c4a4319243552c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_176b3b044e8fdedf26c67d0d44f34be48aa3c14165e3faa1e51206e49183cd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176b3b044e8fdedf26c67d0d44f34be48aa3c14165e3faa1e51206e49183cd67->enter($__internal_176b3b044e8fdedf26c67d0d44f34be48aa3c14165e3faa1e51206e49183cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4372b6436375f8c6cb908e168c35569b636d96cba802c35fb4baaec156544b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4372b6436375f8c6cb908e168c35569b636d96cba802c35fb4baaec156544b1b->enter($__internal_4372b6436375f8c6cb908e168c35569b636d96cba802c35fb4baaec156544b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_4372b6436375f8c6cb908e168c35569b636d96cba802c35fb4baaec156544b1b->leave($__internal_4372b6436375f8c6cb908e168c35569b636d96cba802c35fb4baaec156544b1b_prof);

        
        $__internal_176b3b044e8fdedf26c67d0d44f34be48aa3c14165e3faa1e51206e49183cd67->leave($__internal_176b3b044e8fdedf26c67d0d44f34be48aa3c14165e3faa1e51206e49183cd67_prof);

    }

    // line 5
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_4ee0ce9d3d7aff1eba6e52d5aec47223a8770c15fd80fdad965ddf4b944f0841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee0ce9d3d7aff1eba6e52d5aec47223a8770c15fd80fdad965ddf4b944f0841->enter($__internal_4ee0ce9d3d7aff1eba6e52d5aec47223a8770c15fd80fdad965ddf4b944f0841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_84870a6fdf8c1ae38c5e06b842b28381c1bf1390be57f87142f9aa76f840bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84870a6fdf8c1ae38c5e06b842b28381c1bf1390be57f87142f9aa76f840bb1e->enter($__internal_84870a6fdf8c1ae38c5e06b842b28381c1bf1390be57f87142f9aa76f840bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        echo "class=\"active\"";
        
        $__internal_84870a6fdf8c1ae38c5e06b842b28381c1bf1390be57f87142f9aa76f840bb1e->leave($__internal_84870a6fdf8c1ae38c5e06b842b28381c1bf1390be57f87142f9aa76f840bb1e_prof);

        
        $__internal_4ee0ce9d3d7aff1eba6e52d5aec47223a8770c15fd80fdad965ddf4b944f0841->leave($__internal_4ee0ce9d3d7aff1eba6e52d5aec47223a8770c15fd80fdad965ddf4b944f0841_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4bb65d855a5d4189ba75ab4cbf8c4b59de235dd10b9cf976a4c20e3ca9714ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bb65d855a5d4189ba75ab4cbf8c4b59de235dd10b9cf976a4c20e3ca9714ee->enter($__internal_e4bb65d855a5d4189ba75ab4cbf8c4b59de235dd10b9cf976a4c20e3ca9714ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a4413b2d7050071431d2076dd6a167ef2f6f46ab2ba94c2e87a7fe7a522f295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4413b2d7050071431d2076dd6a167ef2f6f46ab2ba94c2e87a7fe7a522f295->enter($__internal_0a4413b2d7050071431d2076dd6a167ef2f6f46ab2ba94c2e87a7fe7a522f295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "imgAct", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if (($this->getAttribute($this->getAttribute($context["img"], "typeImg", array()), "idType", array()) == 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\" alt=\"\" class=\"imgAct\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h2>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["act"], "idDateAct", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                if (($this->getAttribute($this->getAttribute($context["date"], "typeDate", array()), "idType", array()) == 1)) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<p>(";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["date"], "date", array()), "d/m/Y"), "html", null, true);
                    echo ")</p>
\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "descriptionActivite", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_0a4413b2d7050071431d2076dd6a167ef2f6f46ab2ba94c2e87a7fe7a522f295->leave($__internal_0a4413b2d7050071431d2076dd6a167ef2f6f46ab2ba94c2e87a7fe7a522f295_prof);

        
        $__internal_e4bb65d855a5d4189ba75ab4cbf8c4b59de235dd10b9cf976a4c20e3ca9714ee->leave($__internal_e4bb65d855a5d4189ba75ab4cbf8c4b59de235dd10b9cf976a4c20e3ca9714ee_prof);

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
        return array (  257 => 64,  246 => 60,  236 => 58,  231 => 57,  227 => 56,  211 => 53,  207 => 51,  203 => 50,  187 => 36,  181 => 35,  179 => 34,  174 => 31,  164 => 29,  159 => 28,  155 => 27,  151 => 26,  148 => 25,  142 => 24,  135 => 22,  132 => 21,  128 => 20,  121 => 19,  116 => 18,  114 => 17,  110 => 15,  97 => 13,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"{{asset('img/')}}{% for img in act.imgAct if img.typeImg.idType == 1 %}{{img.chemin}}{% endfor %}\" alt=\"\" class=\"imgAct\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h2>{{act.nomActivite}}</h2>
\t\t\t\t\t\t{% for date in act.idDateAct if date.typeDate.idType == 1 %}
\t\t\t\t\t\t\t<p>({{date.date|date(\"d/m/Y\")}})</p>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<p>{{act.descriptionActivite}}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\src\\MainBundle/Resources/views/Accueil/index.html.twig");
    }
}
