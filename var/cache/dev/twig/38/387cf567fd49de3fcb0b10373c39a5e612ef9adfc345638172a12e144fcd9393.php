<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02db58d116f7cc91d5be4c93dcb49ed34ac4708344ed14c444b6bae990123fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02db58d116f7cc91d5be4c93dcb49ed34ac4708344ed14c444b6bae990123fba->enter($__internal_02db58d116f7cc91d5be4c93dcb49ed34ac4708344ed14c444b6bae990123fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c7b4b5cb61d5c65ebe3a55daba909b2a4ffa00ca3f0d41297246aa9bbef5c8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b4b5cb61d5c65ebe3a55daba909b2a4ffa00ca3f0d41297246aa9bbef5c8f2->enter($__internal_c7b4b5cb61d5c65ebe3a55daba909b2a4ffa00ca3f0d41297246aa9bbef5c8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02db58d116f7cc91d5be4c93dcb49ed34ac4708344ed14c444b6bae990123fba->leave($__internal_02db58d116f7cc91d5be4c93dcb49ed34ac4708344ed14c444b6bae990123fba_prof);

        
        $__internal_c7b4b5cb61d5c65ebe3a55daba909b2a4ffa00ca3f0d41297246aa9bbef5c8f2->leave($__internal_c7b4b5cb61d5c65ebe3a55daba909b2a4ffa00ca3f0d41297246aa9bbef5c8f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5dcea27a850788f180c0573e7328948dd12f40d0a6d042f7cd0fbc43090f2bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcea27a850788f180c0573e7328948dd12f40d0a6d042f7cd0fbc43090f2bdc->enter($__internal_5dcea27a850788f180c0573e7328948dd12f40d0a6d042f7cd0fbc43090f2bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8def9167a6908bd3c2308b5b01a05fcf80759156e8cb043e85d180fdcfadcc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8def9167a6908bd3c2308b5b01a05fcf80759156e8cb043e85d180fdcfadcc31->enter($__internal_8def9167a6908bd3c2308b5b01a05fcf80759156e8cb043e85d180fdcfadcc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8def9167a6908bd3c2308b5b01a05fcf80759156e8cb043e85d180fdcfadcc31->leave($__internal_8def9167a6908bd3c2308b5b01a05fcf80759156e8cb043e85d180fdcfadcc31_prof);

        
        $__internal_5dcea27a850788f180c0573e7328948dd12f40d0a6d042f7cd0fbc43090f2bdc->leave($__internal_5dcea27a850788f180c0573e7328948dd12f40d0a6d042f7cd0fbc43090f2bdc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e15d04bc5bd2ecd9a011efc70273b8e277b790046407a46b476ee931aee74bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15d04bc5bd2ecd9a011efc70273b8e277b790046407a46b476ee931aee74bd5->enter($__internal_e15d04bc5bd2ecd9a011efc70273b8e277b790046407a46b476ee931aee74bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f68cafd4ab3b554bba5401a0f8fd2f47f013af921ddeaff52831fc0d56b4012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f68cafd4ab3b554bba5401a0f8fd2f47f013af921ddeaff52831fc0d56b4012->enter($__internal_6f68cafd4ab3b554bba5401a0f8fd2f47f013af921ddeaff52831fc0d56b4012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6f68cafd4ab3b554bba5401a0f8fd2f47f013af921ddeaff52831fc0d56b4012->leave($__internal_6f68cafd4ab3b554bba5401a0f8fd2f47f013af921ddeaff52831fc0d56b4012_prof);

        
        $__internal_e15d04bc5bd2ecd9a011efc70273b8e277b790046407a46b476ee931aee74bd5->leave($__internal_e15d04bc5bd2ecd9a011efc70273b8e277b790046407a46b476ee931aee74bd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59d065f291bc15a8226f5589d5837f9a33bae36864fb1a8efa4a1eeb72bf9e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d065f291bc15a8226f5589d5837f9a33bae36864fb1a8efa4a1eeb72bf9e15->enter($__internal_59d065f291bc15a8226f5589d5837f9a33bae36864fb1a8efa4a1eeb72bf9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_604eb6ea0d273ace7c87f9581764818673f3e865314e95633eef901d20237df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604eb6ea0d273ace7c87f9581764818673f3e865314e95633eef901d20237df7->enter($__internal_604eb6ea0d273ace7c87f9581764818673f3e865314e95633eef901d20237df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_604eb6ea0d273ace7c87f9581764818673f3e865314e95633eef901d20237df7->leave($__internal_604eb6ea0d273ace7c87f9581764818673f3e865314e95633eef901d20237df7_prof);

        
        $__internal_59d065f291bc15a8226f5589d5837f9a33bae36864fb1a8efa4a1eeb72bf9e15->leave($__internal_59d065f291bc15a8226f5589d5837f9a33bae36864fb1a8efa4a1eeb72bf9e15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
