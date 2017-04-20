<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f87d9cc63c77f150b6d9580d1dc4f006e8d27eeda0e4d022da9a9b87d4415f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87d9cc63c77f150b6d9580d1dc4f006e8d27eeda0e4d022da9a9b87d4415f45->enter($__internal_f87d9cc63c77f150b6d9580d1dc4f006e8d27eeda0e4d022da9a9b87d4415f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_67127e167bd11c261c76333fd57c7783d36e98dc3df4e930b8d2c9bc01df1532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67127e167bd11c261c76333fd57c7783d36e98dc3df4e930b8d2c9bc01df1532->enter($__internal_67127e167bd11c261c76333fd57c7783d36e98dc3df4e930b8d2c9bc01df1532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87d9cc63c77f150b6d9580d1dc4f006e8d27eeda0e4d022da9a9b87d4415f45->leave($__internal_f87d9cc63c77f150b6d9580d1dc4f006e8d27eeda0e4d022da9a9b87d4415f45_prof);

        
        $__internal_67127e167bd11c261c76333fd57c7783d36e98dc3df4e930b8d2c9bc01df1532->leave($__internal_67127e167bd11c261c76333fd57c7783d36e98dc3df4e930b8d2c9bc01df1532_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88f7ea4c1feb21ce893842bd43c78b27c66885b409d8696cf692900c421bab07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f7ea4c1feb21ce893842bd43c78b27c66885b409d8696cf692900c421bab07->enter($__internal_88f7ea4c1feb21ce893842bd43c78b27c66885b409d8696cf692900c421bab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_151e9ffa50fe4a3eaae7806556e60f59c7cc32eb907579452274db75d9c7ad1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151e9ffa50fe4a3eaae7806556e60f59c7cc32eb907579452274db75d9c7ad1b->enter($__internal_151e9ffa50fe4a3eaae7806556e60f59c7cc32eb907579452274db75d9c7ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_151e9ffa50fe4a3eaae7806556e60f59c7cc32eb907579452274db75d9c7ad1b->leave($__internal_151e9ffa50fe4a3eaae7806556e60f59c7cc32eb907579452274db75d9c7ad1b_prof);

        
        $__internal_88f7ea4c1feb21ce893842bd43c78b27c66885b409d8696cf692900c421bab07->leave($__internal_88f7ea4c1feb21ce893842bd43c78b27c66885b409d8696cf692900c421bab07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd048217747b6efb2e633583c0614941c4afa157c55cface9e7d12f8e9c955a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd048217747b6efb2e633583c0614941c4afa157c55cface9e7d12f8e9c955a0->enter($__internal_bd048217747b6efb2e633583c0614941c4afa157c55cface9e7d12f8e9c955a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c24bdb9831f1a135733df087e005ebf08fc356013480edf45019f8ec1f43873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c24bdb9831f1a135733df087e005ebf08fc356013480edf45019f8ec1f43873->enter($__internal_5c24bdb9831f1a135733df087e005ebf08fc356013480edf45019f8ec1f43873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c24bdb9831f1a135733df087e005ebf08fc356013480edf45019f8ec1f43873->leave($__internal_5c24bdb9831f1a135733df087e005ebf08fc356013480edf45019f8ec1f43873_prof);

        
        $__internal_bd048217747b6efb2e633583c0614941c4afa157c55cface9e7d12f8e9c955a0->leave($__internal_bd048217747b6efb2e633583c0614941c4afa157c55cface9e7d12f8e9c955a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9fb2a0f6fdcb62e601fe35e535ec84716c678f7a7ef0a57eb1b6215334fe4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fb2a0f6fdcb62e601fe35e535ec84716c678f7a7ef0a57eb1b6215334fe4c7->enter($__internal_b9fb2a0f6fdcb62e601fe35e535ec84716c678f7a7ef0a57eb1b6215334fe4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c58b6691ce76fc48b6d52cd662fa51a95faeccf6d3e08050f9943d09e1fedc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58b6691ce76fc48b6d52cd662fa51a95faeccf6d3e08050f9943d09e1fedc3a->enter($__internal_c58b6691ce76fc48b6d52cd662fa51a95faeccf6d3e08050f9943d09e1fedc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c58b6691ce76fc48b6d52cd662fa51a95faeccf6d3e08050f9943d09e1fedc3a->leave($__internal_c58b6691ce76fc48b6d52cd662fa51a95faeccf6d3e08050f9943d09e1fedc3a_prof);

        
        $__internal_b9fb2a0f6fdcb62e601fe35e535ec84716c678f7a7ef0a57eb1b6215334fe4c7->leave($__internal_b9fb2a0f6fdcb62e601fe35e535ec84716c678f7a7ef0a57eb1b6215334fe4c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\bdexia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
