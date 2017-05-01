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
        $__internal_a80e8f2765fe0222fe01001563049c7f5669ab6f915fe975a1dbd53104695c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80e8f2765fe0222fe01001563049c7f5669ab6f915fe975a1dbd53104695c3c->enter($__internal_a80e8f2765fe0222fe01001563049c7f5669ab6f915fe975a1dbd53104695c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activite.html.twig"));

        $__internal_1974210addcb5c4288ac4e13d6595f7faf122dfaac2a53836280e8db7ca345f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1974210addcb5c4288ac4e13d6595f7faf122dfaac2a53836280e8db7ca345f4->enter($__internal_1974210addcb5c4288ac4e13d6595f7faf122dfaac2a53836280e8db7ca345f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80e8f2765fe0222fe01001563049c7f5669ab6f915fe975a1dbd53104695c3c->leave($__internal_a80e8f2765fe0222fe01001563049c7f5669ab6f915fe975a1dbd53104695c3c_prof);

        
        $__internal_1974210addcb5c4288ac4e13d6595f7faf122dfaac2a53836280e8db7ca345f4->leave($__internal_1974210addcb5c4288ac4e13d6595f7faf122dfaac2a53836280e8db7ca345f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a2ee3321bdb7bee397b6e10a064ba35443b8070831c5bab3ce46592751281c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a2ee3321bdb7bee397b6e10a064ba35443b8070831c5bab3ce46592751281c->enter($__internal_24a2ee3321bdb7bee397b6e10a064ba35443b8070831c5bab3ce46592751281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a71ff5c4298b5e6b0ac4cd89578f3169250e4104470c7d580e892f5f37edb843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71ff5c4298b5e6b0ac4cd89578f3169250e4104470c7d580e892f5f37edb843->enter($__internal_a71ff5c4298b5e6b0ac4cd89578f3169250e4104470c7d580e892f5f37edb843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:photoActivites";
        
        $__internal_a71ff5c4298b5e6b0ac4cd89578f3169250e4104470c7d580e892f5f37edb843->leave($__internal_a71ff5c4298b5e6b0ac4cd89578f3169250e4104470c7d580e892f5f37edb843_prof);

        
        $__internal_24a2ee3321bdb7bee397b6e10a064ba35443b8070831c5bab3ce46592751281c->leave($__internal_24a2ee3321bdb7bee397b6e10a064ba35443b8070831c5bab3ce46592751281c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa4e62c14728795dd4fa9a4dcd2746055185d6125b8557f4d494ff67f04212f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa4e62c14728795dd4fa9a4dcd2746055185d6125b8557f4d494ff67f04212f->enter($__internal_afa4e62c14728795dd4fa9a4dcd2746055185d6125b8557f4d494ff67f04212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eae72f150433fccdda22228f0784e2f31dfe0809e3a583ee2619d83a6ad963c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eae72f150433fccdda22228f0784e2f31dfe0809e3a583ee2619d83a6ad963c->enter($__internal_8eae72f150433fccdda22228f0784e2f31dfe0809e3a583ee2619d83a6ad963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t<td><input type=\"submit\" name=\"submitLite\" value=\"like\"></td>
\t\t\t</form>
\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t<td><input type=\"text\" name=\"com\" placeholder=\"Comment\"></td>
\t\t\t\t<td><input type=\"submit\" name=\"submitComment\" value=\"OK\"></td>
\t\t\t</form>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>
";
        
        $__internal_8eae72f150433fccdda22228f0784e2f31dfe0809e3a583ee2619d83a6ad963c->leave($__internal_8eae72f150433fccdda22228f0784e2f31dfe0809e3a583ee2619d83a6ad963c_prof);

        
        $__internal_afa4e62c14728795dd4fa9a4dcd2746055185d6125b8557f4d494ff67f04212f->leave($__internal_afa4e62c14728795dd4fa9a4dcd2746055185d6125b8557f4d494ff67f04212f_prof);

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
        return array (  116 => 35,  100 => 25,  96 => 24,  92 => 23,  89 => 22,  85 => 21,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
\t\t\t\t<td><input type=\"submit\" name=\"submitLite\" value=\"like\"></td>
\t\t\t</form>
\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t<td><input type=\"text\" name=\"com\" placeholder=\"Comment\"></td>
\t\t\t\t<td><input type=\"submit\" name=\"submitComment\" value=\"OK\"></td>
\t\t\t</form>
\t\t</tr>
\t{% endfor %}
</table>
{% endblock %}
", "MainBundle:Activites:photo_activite.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photo_activite.html.twig");
    }
}
