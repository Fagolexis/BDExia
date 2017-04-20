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
        $__internal_6e1cd448a4dcc9b01be5134581a0a53664a6eeb6d85c84798988eaa82a740d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1cd448a4dcc9b01be5134581a0a53664a6eeb6d85c84798988eaa82a740d47->enter($__internal_6e1cd448a4dcc9b01be5134581a0a53664a6eeb6d85c84798988eaa82a740d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0d7ac3e6844a00246b54298656cf716d7d6dbb1c04c1217cbfac78fe289a96a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7ac3e6844a00246b54298656cf716d7d6dbb1c04c1217cbfac78fe289a96a5->enter($__internal_0d7ac3e6844a00246b54298656cf716d7d6dbb1c04c1217cbfac78fe289a96a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1cd448a4dcc9b01be5134581a0a53664a6eeb6d85c84798988eaa82a740d47->leave($__internal_6e1cd448a4dcc9b01be5134581a0a53664a6eeb6d85c84798988eaa82a740d47_prof);

        
        $__internal_0d7ac3e6844a00246b54298656cf716d7d6dbb1c04c1217cbfac78fe289a96a5->leave($__internal_0d7ac3e6844a00246b54298656cf716d7d6dbb1c04c1217cbfac78fe289a96a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34137976c25c968edc00ea441962668ea5eb10ec0d1e8e7232a38ae687de6f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34137976c25c968edc00ea441962668ea5eb10ec0d1e8e7232a38ae687de6f5c->enter($__internal_34137976c25c968edc00ea441962668ea5eb10ec0d1e8e7232a38ae687de6f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_309515d0695ace598a835b0aa2de09dd55f90eeb3d12ab0467f9fef35d029d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309515d0695ace598a835b0aa2de09dd55f90eeb3d12ab0467f9fef35d029d0b->enter($__internal_309515d0695ace598a835b0aa2de09dd55f90eeb3d12ab0467f9fef35d029d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_309515d0695ace598a835b0aa2de09dd55f90eeb3d12ab0467f9fef35d029d0b->leave($__internal_309515d0695ace598a835b0aa2de09dd55f90eeb3d12ab0467f9fef35d029d0b_prof);

        
        $__internal_34137976c25c968edc00ea441962668ea5eb10ec0d1e8e7232a38ae687de6f5c->leave($__internal_34137976c25c968edc00ea441962668ea5eb10ec0d1e8e7232a38ae687de6f5c_prof);

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
