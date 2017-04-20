<?php

/* MainBundle:Activites:liste_activites.html.twig */
class __TwigTemplate_ee46780139dbcd1e78bff72600065744eeb4a331aede600dc22863f604b28219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:liste_activites.html.twig", 1);
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
        $__internal_cfa8f1e9c6d5df89def08aa5a9b5015bfdc8e01c406cb6e06decea43a6a7dc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa8f1e9c6d5df89def08aa5a9b5015bfdc8e01c406cb6e06decea43a6a7dc06->enter($__internal_cfa8f1e9c6d5df89def08aa5a9b5015bfdc8e01c406cb6e06decea43a6a7dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_activites.html.twig"));

        $__internal_aa0973ce5aa1ebd1fbec451ebadfe5cce649f05c341e2673ab2c38946030ef5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0973ce5aa1ebd1fbec451ebadfe5cce649f05c341e2673ab2c38946030ef5d->enter($__internal_aa0973ce5aa1ebd1fbec451ebadfe5cce649f05c341e2673ab2c38946030ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa8f1e9c6d5df89def08aa5a9b5015bfdc8e01c406cb6e06decea43a6a7dc06->leave($__internal_cfa8f1e9c6d5df89def08aa5a9b5015bfdc8e01c406cb6e06decea43a6a7dc06_prof);

        
        $__internal_aa0973ce5aa1ebd1fbec451ebadfe5cce649f05c341e2673ab2c38946030ef5d->leave($__internal_aa0973ce5aa1ebd1fbec451ebadfe5cce649f05c341e2673ab2c38946030ef5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_207eb9cc30005712356098f0d6e64e56fdabe49ae2b215f3f718318d7ddd4681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207eb9cc30005712356098f0d6e64e56fdabe49ae2b215f3f718318d7ddd4681->enter($__internal_207eb9cc30005712356098f0d6e64e56fdabe49ae2b215f3f718318d7ddd4681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb3241a5d937da551522a1cde88c2cecd3f9b8712cb6951f4275b3ff1ee29e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3241a5d937da551522a1cde88c2cecd3f9b8712cb6951f4275b3ff1ee29e6f->enter($__internal_eb3241a5d937da551522a1cde88c2cecd3f9b8712cb6951f4275b3ff1ee29e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:listeActivites";
        
        $__internal_eb3241a5d937da551522a1cde88c2cecd3f9b8712cb6951f4275b3ff1ee29e6f->leave($__internal_eb3241a5d937da551522a1cde88c2cecd3f9b8712cb6951f4275b3ff1ee29e6f_prof);

        
        $__internal_207eb9cc30005712356098f0d6e64e56fdabe49ae2b215f3f718318d7ddd4681->leave($__internal_207eb9cc30005712356098f0d6e64e56fdabe49ae2b215f3f718318d7ddd4681_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14b545134474333991925ad06f598ae6741e8031604bdd47fcf42a358edb39c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b545134474333991925ad06f598ae6741e8031604bdd47fcf42a358edb39c2->enter($__internal_14b545134474333991925ad06f598ae6741e8031604bdd47fcf42a358edb39c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb5496128735825f4b78c3e0b49aa3dd57ab9955ec83fddc2e12be7cd4335e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5496128735825f4b78c3e0b49aa3dd57ab9955ec83fddc2e12be7cd4335e16->enter($__internal_cb5496128735825f4b78c3e0b49aa3dd57ab9955ec83fddc2e12be7cd4335e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:listeActivites page</h1>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>NOM</th>
\t\t<th>ETAT</th>
\t\t<th>DETAILS</th>
\t</thead>
\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 15
            echo "\t\t<tr>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "idActivite", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "etat", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
            echo "\">Voir</a></td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
";
        
        $__internal_cb5496128735825f4b78c3e0b49aa3dd57ab9955ec83fddc2e12be7cd4335e16->leave($__internal_cb5496128735825f4b78c3e0b49aa3dd57ab9955ec83fddc2e12be7cd4335e16_prof);

        
        $__internal_14b545134474333991925ad06f598ae6741e8031604bdd47fcf42a358edb39c2->leave($__internal_14b545134474333991925ad06f598ae6741e8031604bdd47fcf42a358edb39c2_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste_activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  82 => 15,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:listeActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:listeActivites page</h1>
<table>
\t<thead>
\t\t<th>ID</th>
\t\t<th>NOM</th>
\t\t<th>ETAT</th>
\t\t<th>DETAILS</th>
\t</thead>
\t{% for act in list %}
\t\t<tr>
\t\t\t<td>{{act.idActivite}}</td>
\t\t\t<td>{{act.nomActivite}}</td>
\t\t\t<td>{{act.etatAct.etat}}</td>
\t\t\t<td><a href=\"{{path(\"showAct\", {'id' : act.idActivite})}}\">Voir</a></td>
\t\t</tr>
\t{% endfor %}
</table>
{% endblock %}
", "MainBundle:Activites:liste_activites.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste_activites.html.twig");
    }
}
