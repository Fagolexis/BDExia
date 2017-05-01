<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35400d4b9d81f8d8002898324c3a6b7ae389918c37a64551043fe0ff0fa0927b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd21b9eff67cb58250d46ce14db9f5c7684c4cdb9f68696c0e3cdfd748898fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd21b9eff67cb58250d46ce14db9f5c7684c4cdb9f68696c0e3cdfd748898fb->enter($__internal_9fd21b9eff67cb58250d46ce14db9f5c7684c4cdb9f68696c0e3cdfd748898fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_22b4e22a854b333c23238eda70b19f341ade697774285c4a5902147fb6788af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b4e22a854b333c23238eda70b19f341ade697774285c4a5902147fb6788af5->enter($__internal_22b4e22a854b333c23238eda70b19f341ade697774285c4a5902147fb6788af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd21b9eff67cb58250d46ce14db9f5c7684c4cdb9f68696c0e3cdfd748898fb->leave($__internal_9fd21b9eff67cb58250d46ce14db9f5c7684c4cdb9f68696c0e3cdfd748898fb_prof);

        
        $__internal_22b4e22a854b333c23238eda70b19f341ade697774285c4a5902147fb6788af5->leave($__internal_22b4e22a854b333c23238eda70b19f341ade697774285c4a5902147fb6788af5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2067e5433e3d696c31da6e72152d0d820195148befd3fc5febd03f1256223b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2067e5433e3d696c31da6e72152d0d820195148befd3fc5febd03f1256223b55->enter($__internal_2067e5433e3d696c31da6e72152d0d820195148befd3fc5febd03f1256223b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a34d42811fcf71bb8bd9d645f0c5e70a3c0c6af7c4a076295da1d0d2302ef1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a34d42811fcf71bb8bd9d645f0c5e70a3c0c6af7c4a076295da1d0d2302ef1b->enter($__internal_4a34d42811fcf71bb8bd9d645f0c5e70a3c0c6af7c4a076295da1d0d2302ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4a34d42811fcf71bb8bd9d645f0c5e70a3c0c6af7c4a076295da1d0d2302ef1b->leave($__internal_4a34d42811fcf71bb8bd9d645f0c5e70a3c0c6af7c4a076295da1d0d2302ef1b_prof);

        
        $__internal_2067e5433e3d696c31da6e72152d0d820195148befd3fc5febd03f1256223b55->leave($__internal_2067e5433e3d696c31da6e72152d0d820195148befd3fc5febd03f1256223b55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\bdexia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
