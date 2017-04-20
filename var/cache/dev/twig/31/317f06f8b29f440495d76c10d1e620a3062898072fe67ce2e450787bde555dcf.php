<?php

/* MainBundle:Activites:photo_activite.html.twig */
class __TwigTemplate_862af69fd2452c326072c66e7810563a64fb6f0e1091718a26bf26228c0bae83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:photo_activite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09e855811f3989bb9d8e4811735e8753c663d667fad3c6550e35902acdaf5652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e855811f3989bb9d8e4811735e8753c663d667fad3c6550e35902acdaf5652->enter($__internal_09e855811f3989bb9d8e4811735e8753c663d667fad3c6550e35902acdaf5652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activite.html.twig"));

        $__internal_7b64ca3183d06c75becaa2e6f03c4b2554c714de7eb73829c3b21248b1ee19ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b64ca3183d06c75becaa2e6f03c4b2554c714de7eb73829c3b21248b1ee19ee->enter($__internal_7b64ca3183d06c75becaa2e6f03c4b2554c714de7eb73829c3b21248b1ee19ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e855811f3989bb9d8e4811735e8753c663d667fad3c6550e35902acdaf5652->leave($__internal_09e855811f3989bb9d8e4811735e8753c663d667fad3c6550e35902acdaf5652_prof);

        
        $__internal_7b64ca3183d06c75becaa2e6f03c4b2554c714de7eb73829c3b21248b1ee19ee->leave($__internal_7b64ca3183d06c75becaa2e6f03c4b2554c714de7eb73829c3b21248b1ee19ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f062136966a8a1cccf0f41d23818b5ab588e883eee2ae6937d6fed8aecb94e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f062136966a8a1cccf0f41d23818b5ab588e883eee2ae6937d6fed8aecb94e7->enter($__internal_3f062136966a8a1cccf0f41d23818b5ab588e883eee2ae6937d6fed8aecb94e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51f2f9bcc65d00831fcdddaf175eba19e9374855ed2ca7d54b2c44f2572ce8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f2f9bcc65d00831fcdddaf175eba19e9374855ed2ca7d54b2c44f2572ce8fc->enter($__internal_51f2f9bcc65d00831fcdddaf175eba19e9374855ed2ca7d54b2c44f2572ce8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:photoActivites";
        
        $__internal_51f2f9bcc65d00831fcdddaf175eba19e9374855ed2ca7d54b2c44f2572ce8fc->leave($__internal_51f2f9bcc65d00831fcdddaf175eba19e9374855ed2ca7d54b2c44f2572ce8fc_prof);

        
        $__internal_3f062136966a8a1cccf0f41d23818b5ab588e883eee2ae6937d6fed8aecb94e7->leave($__internal_3f062136966a8a1cccf0f41d23818b5ab588e883eee2ae6937d6fed8aecb94e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e076f85980a082e487d9aa4082d5003d3b988c27cd12d0cef89d47eb70f6273e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e076f85980a082e487d9aa4082d5003d3b988c27cd12d0cef89d47eb70f6273e->enter($__internal_e076f85980a082e487d9aa4082d5003d3b988c27cd12d0cef89d47eb70f6273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_745048d79f5b8a09f1fcef6d85baffa094450da73d1507974ea1049325dac41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745048d79f5b8a09f1fcef6d85baffa094450da73d1507974ea1049325dac41f->enter($__internal_745048d79f5b8a09f1fcef6d85baffa094450da73d1507974ea1049325dac41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:photoActivites page</h1>
<form action=\"\" method=\"POST\">
\t<label for=\"imgAct\">Ajouter une image à l'activité</label><br>
\t<input type=\"file\" name=\"imgAct\"><br><br>
\t<input type=\"submit\" name=\"addImgAct\" value=\"Envoyer\"><br><br>
</form>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>CHEMIN</th>
\t\t<th>DATE</th>
\t\t<th>LIKE</th>
\t\t<th>COMMENT</th>
\t\t<th>Sub(JS)</th>
\t</thead>
\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "dateImg", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t<td><input type=\"button\" name=\"like\" value=\"like\"></td>
\t\t\t\t<td><input type=\"text\" name=\"com\" placeholder=\"Comment\"></td>
\t\t\t\t<td><input type=\"submit\" name=\"comLikeSubmit\" value=\"OK\"></td>
\t\t\t</form>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
";
        
        $__internal_745048d79f5b8a09f1fcef6d85baffa094450da73d1507974ea1049325dac41f->leave($__internal_745048d79f5b8a09f1fcef6d85baffa094450da73d1507974ea1049325dac41f_prof);

        
        $__internal_e076f85980a082e487d9aa4082d5003d3b988c27cd12d0cef89d47eb70f6273e->leave($__internal_e076f85980a082e487d9aa4082d5003d3b988c27cd12d0cef89d47eb70f6273e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:photo_activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  100 => 25,  96 => 24,  92 => 23,  89 => 22,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MainBundle:Activites:photoActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:photoActivites page</h1>
<form action=\"\" method=\"POST\">
\t<label for=\"imgAct\">Ajouter une image à l'activité</label><br>
\t<input type=\"file\" name=\"imgAct\"><br><br>
\t<input type=\"submit\" name=\"addImgAct\" value=\"Envoyer\"><br><br>
</form>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>CHEMIN</th>
\t\t<th>DATE</th>
\t\t<th>LIKE</th>
\t\t<th>COMMENT</th>
\t\t<th>Sub(JS)</th>
\t</thead>
\t{% for img in photos %}
\t\t<tr>
\t\t\t<td>{{img.idImg}}</td>
\t\t\t<td>{{img.chemin}}</td>
\t\t\t<td>{{img.dateImg.date|date(\"m/d/Y\")}}</td>
\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t<td><input type=\"button\" name=\"like\" value=\"like\"></td>
\t\t\t\t<td><input type=\"text\" name=\"com\" placeholder=\"Comment\"></td>
\t\t\t\t<td><input type=\"submit\" name=\"comLikeSubmit\" value=\"OK\"></td>
\t\t\t</form>
\t\t</tr>
\t{% endfor %}
</table>
{% endblock %}
", "MainBundle:Activites:photo_activite.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photo_activite.html.twig");
    }
}
