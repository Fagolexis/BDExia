<?php

/* MainBundle:Activites:liste_inscrits.html.twig */
class __TwigTemplate_ef33f637e5f6e027a283ab85564ca77b12b3157218473a4d28b50cea640a17e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:liste_inscrits.html.twig", 1);
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
        $__internal_f316cb912f764f533c282a04cd3c0a94f9223734d1873f16986e4f31bc68be54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f316cb912f764f533c282a04cd3c0a94f9223734d1873f16986e4f31bc68be54->enter($__internal_f316cb912f764f533c282a04cd3c0a94f9223734d1873f16986e4f31bc68be54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_inscrits.html.twig"));

        $__internal_15f0fe140d8c9094404b7cf6a29ea88702dd8ebecae1ee6675d2fc56de73465f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f0fe140d8c9094404b7cf6a29ea88702dd8ebecae1ee6675d2fc56de73465f->enter($__internal_15f0fe140d8c9094404b7cf6a29ea88702dd8ebecae1ee6675d2fc56de73465f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f316cb912f764f533c282a04cd3c0a94f9223734d1873f16986e4f31bc68be54->leave($__internal_f316cb912f764f533c282a04cd3c0a94f9223734d1873f16986e4f31bc68be54_prof);

        
        $__internal_15f0fe140d8c9094404b7cf6a29ea88702dd8ebecae1ee6675d2fc56de73465f->leave($__internal_15f0fe140d8c9094404b7cf6a29ea88702dd8ebecae1ee6675d2fc56de73465f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e887ee1f5522441e1737ef557d1795e5f7750c989044b76dfb25f139a84b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e887ee1f5522441e1737ef557d1795e5f7750c989044b76dfb25f139a84b74->enter($__internal_72e887ee1f5522441e1737ef557d1795e5f7750c989044b76dfb25f139a84b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3118c90284e9f5b85a8c6ce5e1607e6b39b6f8f62c0ac5a7acbfe58b023fb2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3118c90284e9f5b85a8c6ce5e1607e6b39b6f8f62c0ac5a7acbfe58b023fb2d2->enter($__internal_3118c90284e9f5b85a8c6ce5e1607e6b39b6f8f62c0ac5a7acbfe58b023fb2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:listeInscrits";
        
        $__internal_3118c90284e9f5b85a8c6ce5e1607e6b39b6f8f62c0ac5a7acbfe58b023fb2d2->leave($__internal_3118c90284e9f5b85a8c6ce5e1607e6b39b6f8f62c0ac5a7acbfe58b023fb2d2_prof);

        
        $__internal_72e887ee1f5522441e1737ef557d1795e5f7750c989044b76dfb25f139a84b74->leave($__internal_72e887ee1f5522441e1737ef557d1795e5f7750c989044b76dfb25f139a84b74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_892bcc63a7fa92aa7b8030df13e76171cc764cbbd6e9f92551bb5b7d49a0eed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892bcc63a7fa92aa7b8030df13e76171cc764cbbd6e9f92551bb5b7d49a0eed5->enter($__internal_892bcc63a7fa92aa7b8030df13e76171cc764cbbd6e9f92551bb5b7d49a0eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5911fe4794cbba274681d118c42f538f09c2aa517b9bf0350259b0ec9795f8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5911fe4794cbba274681d118c42f538f09c2aa517b9bf0350259b0ec9795f8fa->enter($__internal_5911fe4794cbba274681d118c42f538f09c2aa517b9bf0350259b0ec9795f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:listeInscrits page</h1>
";
        
        $__internal_5911fe4794cbba274681d118c42f538f09c2aa517b9bf0350259b0ec9795f8fa->leave($__internal_5911fe4794cbba274681d118c42f538f09c2aa517b9bf0350259b0ec9795f8fa_prof);

        
        $__internal_892bcc63a7fa92aa7b8030df13e76171cc764cbbd6e9f92551bb5b7d49a0eed5->leave($__internal_892bcc63a7fa92aa7b8030df13e76171cc764cbbd6e9f92551bb5b7d49a0eed5_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste_inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:listeInscrits{% endblock %}

{% block body %}
<h1>Welcome to the Activites:listeInscrits page</h1>
{% endblock %}
", "MainBundle:Activites:liste_inscrits.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste_inscrits.html.twig");
    }
}
