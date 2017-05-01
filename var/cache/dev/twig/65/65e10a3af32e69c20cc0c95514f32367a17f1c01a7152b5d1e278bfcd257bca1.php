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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2728b9106c223aa26cbbeb8774bcb0788f31ecb9134ce9896d08ed0b0288f2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2728b9106c223aa26cbbeb8774bcb0788f31ecb9134ce9896d08ed0b0288f2fd->enter($__internal_2728b9106c223aa26cbbeb8774bcb0788f31ecb9134ce9896d08ed0b0288f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $__internal_3bba7794a7b3c516ef0666c5051271ebf5b99b60180a5236b9c35145d870bdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bba7794a7b3c516ef0666c5051271ebf5b99b60180a5236b9c35145d870bdf1->enter($__internal_3bba7794a7b3c516ef0666c5051271ebf5b99b60180a5236b9c35145d870bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2728b9106c223aa26cbbeb8774bcb0788f31ecb9134ce9896d08ed0b0288f2fd->leave($__internal_2728b9106c223aa26cbbeb8774bcb0788f31ecb9134ce9896d08ed0b0288f2fd_prof);

        
        $__internal_3bba7794a7b3c516ef0666c5051271ebf5b99b60180a5236b9c35145d870bdf1->leave($__internal_3bba7794a7b3c516ef0666c5051271ebf5b99b60180a5236b9c35145d870bdf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ebe5d82510ae422b73cd194d03bf2c384f3bc243edab14ed8bb8c644893e4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebe5d82510ae422b73cd194d03bf2c384f3bc243edab14ed8bb8c644893e4e1->enter($__internal_0ebe5d82510ae422b73cd194d03bf2c384f3bc243edab14ed8bb8c644893e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70b325bb0a59cc8bb1caafdf83a8d9fc6f90a29ae1d075bbe3971ddfc547b71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b325bb0a59cc8bb1caafdf83a8d9fc6f90a29ae1d075bbe3971ddfc547b71a->enter($__internal_70b325bb0a59cc8bb1caafdf83a8d9fc6f90a29ae1d075bbe3971ddfc547b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités";
        
        $__internal_70b325bb0a59cc8bb1caafdf83a8d9fc6f90a29ae1d075bbe3971ddfc547b71a->leave($__internal_70b325bb0a59cc8bb1caafdf83a8d9fc6f90a29ae1d075bbe3971ddfc547b71a_prof);

        
        $__internal_0ebe5d82510ae422b73cd194d03bf2c384f3bc243edab14ed8bb8c644893e4e1->leave($__internal_0ebe5d82510ae422b73cd194d03bf2c384f3bc243edab14ed8bb8c644893e4e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0623f2e61d7483f86fe283654b9011f67eb07c2702a8c9ebe085494917eab018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0623f2e61d7483f86fe283654b9011f67eb07c2702a8c9ebe085494917eab018->enter($__internal_0623f2e61d7483f86fe283654b9011f67eb07c2702a8c9ebe085494917eab018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b5d28611b771ecb87463958c777671ed190e7f920a84149b5e09013a2d0451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b5d28611b771ecb87463958c777671ed190e7f920a84149b5e09013a2d0451->enter($__internal_90b5d28611b771ecb87463958c777671ed190e7f920a84149b5e09013a2d0451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>
\t<div class=\"container text-center carrousel blank\">";
        // line 8
        echo "\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
        echo "\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"...\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"...\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t...
\t\t\t</div>

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<hr/>
\t<div class=\"container\">
\t\t<div class=\"activite blank\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img class=\"imgAct\" src=\"img/car1.jpg\" alt=\"Nom de l'activité\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2>Activité N° 9 : Ouverture du site (21/04) </h2>
\t\t\t\t<p class=\"description\">|3!3|\\\\|\\\\/3|\\\\|(_)3 5(_)|2 |_3 |\\\\|0(_)\\\\/34(_) 5!73 |)(_) |3|)3</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_90b5d28611b771ecb87463958c777671ed190e7f920a84149b5e09013a2d0451->leave($__internal_90b5d28611b771ecb87463958c777671ed190e7f920a84149b5e09013a2d0451_prof);

        
        $__internal_0623f2e61d7483f86fe283654b9011f67eb07c2702a8c9ebe085494917eab018->leave($__internal_0623f2e61d7483f86fe283654b9011f67eb07c2702a8c9ebe085494917eab018_prof);

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
        return array (  83 => 18,  71 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Activités{% endblock %}

{% block body %}
<main>
\t<div class=\"container text-center carrousel blank\">{# JS #}
\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<img src=\"{{asset('img/')}}\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"...\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<img src=\"...\" alt=\"...\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t  ...
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t...
\t\t\t</div>

\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<hr/>
\t<div class=\"container\">
\t\t<div class=\"activite blank\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<img class=\"imgAct\" src=\"img/car1.jpg\" alt=\"Nom de l'activité\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2>Activité N° 9 : Ouverture du site (21/04) </h2>
\t\t\t\t<p class=\"description\">|3!3|\\\\|\\\\/3|\\\\|(_)3 5(_)|2 |_3 |\\\\|0(_)\\\\/34(_) 5!73 |)(_) |3|)3</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Accueil/index.html.twig");
    }
}
