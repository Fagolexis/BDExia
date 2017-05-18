<?php

/* MainBundle:Activites:liste.html.twig */
class __TwigTemplate_4c286c3a5bccf5c6b2a78c06726ff6fe2b46d4c141df9cc7c69b762c1e126d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:liste.html.twig", 1);
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
        $__internal_dfe429ae6ae28d85781a06c890662b47b2a6b195e82eb685841b5a089f7287cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe429ae6ae28d85781a06c890662b47b2a6b195e82eb685841b5a089f7287cf->enter($__internal_dfe429ae6ae28d85781a06c890662b47b2a6b195e82eb685841b5a089f7287cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $__internal_8826902fcd0231f7360ef12fbaf753a9c0e86b92afba910cfd70c01f34733f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8826902fcd0231f7360ef12fbaf753a9c0e86b92afba910cfd70c01f34733f5e->enter($__internal_8826902fcd0231f7360ef12fbaf753a9c0e86b92afba910cfd70c01f34733f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe429ae6ae28d85781a06c890662b47b2a6b195e82eb685841b5a089f7287cf->leave($__internal_dfe429ae6ae28d85781a06c890662b47b2a6b195e82eb685841b5a089f7287cf_prof);

        
        $__internal_8826902fcd0231f7360ef12fbaf753a9c0e86b92afba910cfd70c01f34733f5e->leave($__internal_8826902fcd0231f7360ef12fbaf753a9c0e86b92afba910cfd70c01f34733f5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b95aa86a5b90637548fa6a86f3243919beb766eae5d05d6a316ea3e18a2164b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b95aa86a5b90637548fa6a86f3243919beb766eae5d05d6a316ea3e18a2164b->enter($__internal_9b95aa86a5b90637548fa6a86f3243919beb766eae5d05d6a316ea3e18a2164b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fa43b841e1748e27fe596fccd77c5731255812fc84c9dda9817838542180623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa43b841e1748e27fe596fccd77c5731255812fc84c9dda9817838542180623->enter($__internal_4fa43b841e1748e27fe596fccd77c5731255812fc84c9dda9817838542180623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités";
        
        $__internal_4fa43b841e1748e27fe596fccd77c5731255812fc84c9dda9817838542180623->leave($__internal_4fa43b841e1748e27fe596fccd77c5731255812fc84c9dda9817838542180623_prof);

        
        $__internal_9b95aa86a5b90637548fa6a86f3243919beb766eae5d05d6a316ea3e18a2164b->leave($__internal_9b95aa86a5b90637548fa6a86f3243919beb766eae5d05d6a316ea3e18a2164b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeeddafff80c949457964920eb02efd5988d3e2cbd78f07112962d617980b39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeddafff80c949457964920eb02efd5988d3e2cbd78f07112962d617980b39a->enter($__internal_eeeddafff80c949457964920eb02efd5988d3e2cbd78f07112962d617980b39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6086b847b02f84802b3ff7ecb85e660d978307648b0b8f2773021a58aa97d56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6086b847b02f84802b3ff7ecb85e660d978307648b0b8f2773021a58aa97d56a->enter($__internal_6086b847b02f84802b3ff7ecb85e660d978307648b0b8f2773021a58aa97d56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>
    <div class=\"container text-center blank\">
        <div class=\"row\">
            <div class=\"col col-md-9 col-md-offset-1 \">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 11
            echo "                    <a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
            echo ">
                        <div class=\"";
            // line 12
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 1)) {
                echo "submited";
            } elseif (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 2)) {
                echo "proposed";
            } elseif (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 3)) {
                echo "confirmed";
            } elseif (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 4)) {
                echo "completed";
            }
            echo " col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                            <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
            echo "</p>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>
        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_6086b847b02f84802b3ff7ecb85e660d978307648b0b8f2773021a58aa97d56a->leave($__internal_6086b847b02f84802b3ff7ecb85e660d978307648b0b8f2773021a58aa97d56a_prof);

        
        $__internal_eeeddafff80c949457964920eb02efd5988d3e2cbd78f07112962d617980b39a->leave($__internal_eeeddafff80c949457964920eb02efd5988d3e2cbd78f07112962d617980b39a_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  95 => 13,  83 => 12,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <div class=\"container text-center blank\">
        <div class=\"row\">
            <div class=\"col col-md-9 col-md-offset-1 \">
                {% for act in list %}
                    <a href={{path('showAct', {'id':act.idActivite})}}>
                        <div class=\"{% if act.etatAct.idEtat == 1 %}submited{% elseif act.etatAct.idEtat == 2 %}proposed{% elseif act.etatAct.idEtat == 3 %}confirmed{% elseif act.etatAct.idEtat == 4 %}completed{% endif %} col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                            <p>{{act.nomActivite}}</p>
                        </div>
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
{% endblock %}
", "MainBundle:Activites:liste.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste.html.twig");
    }
}
