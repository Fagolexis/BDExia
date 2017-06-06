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
        $__internal_3a119aa7f5dd0f6f864e20f62732468064c7c3742cf88033fd57b947f0105c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a119aa7f5dd0f6f864e20f62732468064c7c3742cf88033fd57b947f0105c01->enter($__internal_3a119aa7f5dd0f6f864e20f62732468064c7c3742cf88033fd57b947f0105c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3a92a297d254c9be31742093458b4d0d07a2448806da14c08823256b7b1f7fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a92a297d254c9be31742093458b4d0d07a2448806da14c08823256b7b1f7fff->enter($__internal_3a92a297d254c9be31742093458b4d0d07a2448806da14c08823256b7b1f7fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a119aa7f5dd0f6f864e20f62732468064c7c3742cf88033fd57b947f0105c01->leave($__internal_3a119aa7f5dd0f6f864e20f62732468064c7c3742cf88033fd57b947f0105c01_prof);

        
        $__internal_3a92a297d254c9be31742093458b4d0d07a2448806da14c08823256b7b1f7fff->leave($__internal_3a92a297d254c9be31742093458b4d0d07a2448806da14c08823256b7b1f7fff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_030ee2f1570233764b64fa82d2ea4ec304a296c48ee05eaf73637343434ae120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030ee2f1570233764b64fa82d2ea4ec304a296c48ee05eaf73637343434ae120->enter($__internal_030ee2f1570233764b64fa82d2ea4ec304a296c48ee05eaf73637343434ae120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb6c0cad0cabb132c1a96905d6e2a33aced005e75dfda01b92dfb96937168d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6c0cad0cabb132c1a96905d6e2a33aced005e75dfda01b92dfb96937168d3a->enter($__internal_eb6c0cad0cabb132c1a96905d6e2a33aced005e75dfda01b92dfb96937168d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb6c0cad0cabb132c1a96905d6e2a33aced005e75dfda01b92dfb96937168d3a->leave($__internal_eb6c0cad0cabb132c1a96905d6e2a33aced005e75dfda01b92dfb96937168d3a_prof);

        
        $__internal_030ee2f1570233764b64fa82d2ea4ec304a296c48ee05eaf73637343434ae120->leave($__internal_030ee2f1570233764b64fa82d2ea4ec304a296c48ee05eaf73637343434ae120_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f0a346d0e0a795ca6cd10af91f6b12007d23922a45c08243c23491447043791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0a346d0e0a795ca6cd10af91f6b12007d23922a45c08243c23491447043791->enter($__internal_6f0a346d0e0a795ca6cd10af91f6b12007d23922a45c08243c23491447043791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e6b613a968db783d8a3af3c43f5febaa4da0f2648e038803e3447e08d139eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6b613a968db783d8a3af3c43f5febaa4da0f2648e038803e3447e08d139eb8->enter($__internal_2e6b613a968db783d8a3af3c43f5febaa4da0f2648e038803e3447e08d139eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e6b613a968db783d8a3af3c43f5febaa4da0f2648e038803e3447e08d139eb8->leave($__internal_2e6b613a968db783d8a3af3c43f5febaa4da0f2648e038803e3447e08d139eb8_prof);

        
        $__internal_6f0a346d0e0a795ca6cd10af91f6b12007d23922a45c08243c23491447043791->leave($__internal_6f0a346d0e0a795ca6cd10af91f6b12007d23922a45c08243c23491447043791_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f19f7d7aba4c5167d6b95d483ae56209f02d7bfdf3f840ad77f8676a1bde8602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19f7d7aba4c5167d6b95d483ae56209f02d7bfdf3f840ad77f8676a1bde8602->enter($__internal_f19f7d7aba4c5167d6b95d483ae56209f02d7bfdf3f840ad77f8676a1bde8602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61ff179e7accd4c6009155b59425a0795c4426e13a12c29b61f11f1ea7129d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ff179e7accd4c6009155b59425a0795c4426e13a12c29b61f11f1ea7129d31->enter($__internal_61ff179e7accd4c6009155b59425a0795c4426e13a12c29b61f11f1ea7129d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61ff179e7accd4c6009155b59425a0795c4426e13a12c29b61f11f1ea7129d31->leave($__internal_61ff179e7accd4c6009155b59425a0795c4426e13a12c29b61f11f1ea7129d31_prof);

        
        $__internal_f19f7d7aba4c5167d6b95d483ae56209f02d7bfdf3f840ad77f8676a1bde8602->leave($__internal_f19f7d7aba4c5167d6b95d483ae56209f02d7bfdf3f840ad77f8676a1bde8602_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
