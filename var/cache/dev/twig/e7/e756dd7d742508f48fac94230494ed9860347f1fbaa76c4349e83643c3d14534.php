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
        $__internal_57d9f45025755c63c35d7ce09e650bd6fd8725270704be69ff37b396bf8b8c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d9f45025755c63c35d7ce09e650bd6fd8725270704be69ff37b396bf8b8c01->enter($__internal_57d9f45025755c63c35d7ce09e650bd6fd8725270704be69ff37b396bf8b8c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_98eafd9f26d4f75cba98a6da466d1fe5021570c7b0fed849d23d98da8994db7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98eafd9f26d4f75cba98a6da466d1fe5021570c7b0fed849d23d98da8994db7b->enter($__internal_98eafd9f26d4f75cba98a6da466d1fe5021570c7b0fed849d23d98da8994db7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d9f45025755c63c35d7ce09e650bd6fd8725270704be69ff37b396bf8b8c01->leave($__internal_57d9f45025755c63c35d7ce09e650bd6fd8725270704be69ff37b396bf8b8c01_prof);

        
        $__internal_98eafd9f26d4f75cba98a6da466d1fe5021570c7b0fed849d23d98da8994db7b->leave($__internal_98eafd9f26d4f75cba98a6da466d1fe5021570c7b0fed849d23d98da8994db7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c340e0fc6c279793be5c034f293eadb691059bcfb8b543928bdcc45f87e2fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c340e0fc6c279793be5c034f293eadb691059bcfb8b543928bdcc45f87e2fb4->enter($__internal_2c340e0fc6c279793be5c034f293eadb691059bcfb8b543928bdcc45f87e2fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_398e97eb29ee0c07a62f314901c45b049c2780c24c73e5b5f1ae1b69fd246def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398e97eb29ee0c07a62f314901c45b049c2780c24c73e5b5f1ae1b69fd246def->enter($__internal_398e97eb29ee0c07a62f314901c45b049c2780c24c73e5b5f1ae1b69fd246def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_398e97eb29ee0c07a62f314901c45b049c2780c24c73e5b5f1ae1b69fd246def->leave($__internal_398e97eb29ee0c07a62f314901c45b049c2780c24c73e5b5f1ae1b69fd246def_prof);

        
        $__internal_2c340e0fc6c279793be5c034f293eadb691059bcfb8b543928bdcc45f87e2fb4->leave($__internal_2c340e0fc6c279793be5c034f293eadb691059bcfb8b543928bdcc45f87e2fb4_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
