<?php

/* MainBundle:Activites:photo_activites.html.twig */
class __TwigTemplate_4ac000cd8fb11bad53880812ec9d4d787d5731a2dfbc6ba4be7c0a5648b409f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:photo_activites.html.twig", 1);
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
        $__internal_1d069189729d11c8d52617b49a7424433de7184f03ea1955a536f0753d926794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d069189729d11c8d52617b49a7424433de7184f03ea1955a536f0753d926794->enter($__internal_1d069189729d11c8d52617b49a7424433de7184f03ea1955a536f0753d926794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activites.html.twig"));

        $__internal_1b5cd6ce9783a59a0591fd317bdc06d78c0db4c0d57fe2c501c7ebf9f57ced8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5cd6ce9783a59a0591fd317bdc06d78c0db4c0d57fe2c501c7ebf9f57ced8e->enter($__internal_1b5cd6ce9783a59a0591fd317bdc06d78c0db4c0d57fe2c501c7ebf9f57ced8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photo_activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d069189729d11c8d52617b49a7424433de7184f03ea1955a536f0753d926794->leave($__internal_1d069189729d11c8d52617b49a7424433de7184f03ea1955a536f0753d926794_prof);

        
        $__internal_1b5cd6ce9783a59a0591fd317bdc06d78c0db4c0d57fe2c501c7ebf9f57ced8e->leave($__internal_1b5cd6ce9783a59a0591fd317bdc06d78c0db4c0d57fe2c501c7ebf9f57ced8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f065d64caab294392ccd3bdcd22c3846658ad9caf4fe2f4f5f4f8f023371755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f065d64caab294392ccd3bdcd22c3846658ad9caf4fe2f4f5f4f8f023371755->enter($__internal_0f065d64caab294392ccd3bdcd22c3846658ad9caf4fe2f4f5f4f8f023371755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fb5d715bce8176e4d80c1c2ff446e3aeee361bcf3bcf384889942511aaa4409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb5d715bce8176e4d80c1c2ff446e3aeee361bcf3bcf384889942511aaa4409->enter($__internal_5fb5d715bce8176e4d80c1c2ff446e3aeee361bcf3bcf384889942511aaa4409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:photoActivites";
        
        $__internal_5fb5d715bce8176e4d80c1c2ff446e3aeee361bcf3bcf384889942511aaa4409->leave($__internal_5fb5d715bce8176e4d80c1c2ff446e3aeee361bcf3bcf384889942511aaa4409_prof);

        
        $__internal_0f065d64caab294392ccd3bdcd22c3846658ad9caf4fe2f4f5f4f8f023371755->leave($__internal_0f065d64caab294392ccd3bdcd22c3846658ad9caf4fe2f4f5f4f8f023371755_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43f3e395de0855f6afac68ca9321584a811425a3e70cfff6c45c33dcfb390287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f3e395de0855f6afac68ca9321584a811425a3e70cfff6c45c33dcfb390287->enter($__internal_43f3e395de0855f6afac68ca9321584a811425a3e70cfff6c45c33dcfb390287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87092d6573b58ca8adfadb1541551c2c12b4c110ab44988836496c8eac9de4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87092d6573b58ca8adfadb1541551c2c12b4c110ab44988836496c8eac9de4dd->enter($__internal_87092d6573b58ca8adfadb1541551c2c12b4c110ab44988836496c8eac9de4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:photoActivites page</h1>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>CHEMIN</th>
\t\t<th>DATE</th>
\t</thead>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 14
            echo "\t\t<tr>
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "chemin", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "dateImg", array()), "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
";
        
        $__internal_87092d6573b58ca8adfadb1541551c2c12b4c110ab44988836496c8eac9de4dd->leave($__internal_87092d6573b58ca8adfadb1541551c2c12b4c110ab44988836496c8eac9de4dd_prof);

        
        $__internal_43f3e395de0855f6afac68ca9321584a811425a3e70cfff6c45c33dcfb390287->leave($__internal_43f3e395de0855f6afac68ca9321584a811425a3e70cfff6c45c33dcfb390287_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:photo_activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  92 => 17,  88 => 16,  84 => 15,  81 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>CHEMIN</th>
\t\t<th>DATE</th>
\t</thead>
\t{% for img in photos %}
\t\t<tr>
\t\t\t<td>{{img.idImg}}</td>
\t\t\t<td>{{img.chemin}}</td>
\t\t\t<td>{{img.dateImg.date|date(\"m/d/Y\")}}</td>
\t\t</tr>
\t{% endfor %}
</table>
{% endblock %}
", "MainBundle:Activites:photo_activites.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photo_activites.html.twig");
    }
}
