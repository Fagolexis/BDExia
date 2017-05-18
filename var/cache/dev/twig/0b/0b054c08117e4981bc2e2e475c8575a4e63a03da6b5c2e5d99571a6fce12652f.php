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
        $__internal_142568ba3f346aa8c5ce8161daa4810435f2102f315c09c10352e9927264a3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142568ba3f346aa8c5ce8161daa4810435f2102f315c09c10352e9927264a3cf->enter($__internal_142568ba3f346aa8c5ce8161daa4810435f2102f315c09c10352e9927264a3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab08f8bee1cd867b06792f8c1318e3be1e966a823fafd6441956ac596f9310bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab08f8bee1cd867b06792f8c1318e3be1e966a823fafd6441956ac596f9310bc->enter($__internal_ab08f8bee1cd867b06792f8c1318e3be1e966a823fafd6441956ac596f9310bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142568ba3f346aa8c5ce8161daa4810435f2102f315c09c10352e9927264a3cf->leave($__internal_142568ba3f346aa8c5ce8161daa4810435f2102f315c09c10352e9927264a3cf_prof);

        
        $__internal_ab08f8bee1cd867b06792f8c1318e3be1e966a823fafd6441956ac596f9310bc->leave($__internal_ab08f8bee1cd867b06792f8c1318e3be1e966a823fafd6441956ac596f9310bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e5e844b16d4242b2de255a31360bec5145ba483966ff8aa603ca3183c64027d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5e844b16d4242b2de255a31360bec5145ba483966ff8aa603ca3183c64027d->enter($__internal_4e5e844b16d4242b2de255a31360bec5145ba483966ff8aa603ca3183c64027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db00921765f9e7bb371ee3eca0927ad87854feacc5f91760255dd48f2bf9505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db00921765f9e7bb371ee3eca0927ad87854feacc5f91760255dd48f2bf9505b->enter($__internal_db00921765f9e7bb371ee3eca0927ad87854feacc5f91760255dd48f2bf9505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db00921765f9e7bb371ee3eca0927ad87854feacc5f91760255dd48f2bf9505b->leave($__internal_db00921765f9e7bb371ee3eca0927ad87854feacc5f91760255dd48f2bf9505b_prof);

        
        $__internal_4e5e844b16d4242b2de255a31360bec5145ba483966ff8aa603ca3183c64027d->leave($__internal_4e5e844b16d4242b2de255a31360bec5145ba483966ff8aa603ca3183c64027d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abc11196fbf923915ec819429fad002ed8d924ec2954fd8cc8c93417f63e5875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc11196fbf923915ec819429fad002ed8d924ec2954fd8cc8c93417f63e5875->enter($__internal_abc11196fbf923915ec819429fad002ed8d924ec2954fd8cc8c93417f63e5875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de2fc104652bc267db32fbeff3977d531438b3173d0a10bcfac710d91001cda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2fc104652bc267db32fbeff3977d531438b3173d0a10bcfac710d91001cda8->enter($__internal_de2fc104652bc267db32fbeff3977d531438b3173d0a10bcfac710d91001cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de2fc104652bc267db32fbeff3977d531438b3173d0a10bcfac710d91001cda8->leave($__internal_de2fc104652bc267db32fbeff3977d531438b3173d0a10bcfac710d91001cda8_prof);

        
        $__internal_abc11196fbf923915ec819429fad002ed8d924ec2954fd8cc8c93417f63e5875->leave($__internal_abc11196fbf923915ec819429fad002ed8d924ec2954fd8cc8c93417f63e5875_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f586c7e8cfef71cc48d9c8fe1877d81099b08240d1b427aa3352064f537cafe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f586c7e8cfef71cc48d9c8fe1877d81099b08240d1b427aa3352064f537cafe7->enter($__internal_f586c7e8cfef71cc48d9c8fe1877d81099b08240d1b427aa3352064f537cafe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f03f2341f5f5024422cfbf02c306951f105d6b89bd3845eb878ca6aa7589675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f03f2341f5f5024422cfbf02c306951f105d6b89bd3845eb878ca6aa7589675->enter($__internal_6f03f2341f5f5024422cfbf02c306951f105d6b89bd3845eb878ca6aa7589675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f03f2341f5f5024422cfbf02c306951f105d6b89bd3845eb878ca6aa7589675->leave($__internal_6f03f2341f5f5024422cfbf02c306951f105d6b89bd3845eb878ca6aa7589675_prof);

        
        $__internal_f586c7e8cfef71cc48d9c8fe1877d81099b08240d1b427aa3352064f537cafe7->leave($__internal_f586c7e8cfef71cc48d9c8fe1877d81099b08240d1b427aa3352064f537cafe7_prof);

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
