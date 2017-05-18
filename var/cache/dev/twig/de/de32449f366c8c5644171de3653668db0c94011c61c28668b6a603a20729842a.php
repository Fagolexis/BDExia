<?php

/* MainBundle:Boutique:boutique.html.twig */
class __TwigTemplate_ff72d8da1aecc19fc2c309a7ee36992ff9c702b55224497f745799825ad52969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Boutique:boutique.html.twig", 1);
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
        $__internal_2790cd79a31d46899f0a639b888c1ce2607755d42f7a11176d41772640b2508b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2790cd79a31d46899f0a639b888c1ce2607755d42f7a11176d41772640b2508b->enter($__internal_2790cd79a31d46899f0a639b888c1ce2607755d42f7a11176d41772640b2508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:boutique.html.twig"));

        $__internal_f57fae78c999e3adaeb821a1d55fb82cdba37b9689718647dce6a93cb757d6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57fae78c999e3adaeb821a1d55fb82cdba37b9689718647dce6a93cb757d6d8->enter($__internal_f57fae78c999e3adaeb821a1d55fb82cdba37b9689718647dce6a93cb757d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:boutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2790cd79a31d46899f0a639b888c1ce2607755d42f7a11176d41772640b2508b->leave($__internal_2790cd79a31d46899f0a639b888c1ce2607755d42f7a11176d41772640b2508b_prof);

        
        $__internal_f57fae78c999e3adaeb821a1d55fb82cdba37b9689718647dce6a93cb757d6d8->leave($__internal_f57fae78c999e3adaeb821a1d55fb82cdba37b9689718647dce6a93cb757d6d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0dec5e35a2dc4ea20d66447ab805c39386390d763df39bacde28bd5b5508b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dec5e35a2dc4ea20d66447ab805c39386390d763df39bacde28bd5b5508b2f->enter($__internal_b0dec5e35a2dc4ea20d66447ab805c39386390d763df39bacde28bd5b5508b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_366d5ae36a7d2bbccadcd036346bcc30a4b78261796f9a2b6a82fc721be02c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366d5ae36a7d2bbccadcd036346bcc30a4b78261796f9a2b6a82fc721be02c6d->enter($__internal_366d5ae36a7d2bbccadcd036346bcc30a4b78261796f9a2b6a82fc721be02c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Boutique:boutique";
        
        $__internal_366d5ae36a7d2bbccadcd036346bcc30a4b78261796f9a2b6a82fc721be02c6d->leave($__internal_366d5ae36a7d2bbccadcd036346bcc30a4b78261796f9a2b6a82fc721be02c6d_prof);

        
        $__internal_b0dec5e35a2dc4ea20d66447ab805c39386390d763df39bacde28bd5b5508b2f->leave($__internal_b0dec5e35a2dc4ea20d66447ab805c39386390d763df39bacde28bd5b5508b2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a41f6f0c1108b6e9122844294dd554548a69984439af378456b77ea5d033c77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41f6f0c1108b6e9122844294dd554548a69984439af378456b77ea5d033c77b->enter($__internal_a41f6f0c1108b6e9122844294dd554548a69984439af378456b77ea5d033c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55d689cc4e5be82d496acc9a2671b39dc46b024119dc9d6c1d71017d03855bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d689cc4e5be82d496acc9a2671b39dc46b024119dc9d6c1d71017d03855bae->enter($__internal_55d689cc4e5be82d496acc9a2671b39dc46b024119dc9d6c1d71017d03855bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Boutique:boutique page</h1>
";
        
        $__internal_55d689cc4e5be82d496acc9a2671b39dc46b024119dc9d6c1d71017d03855bae->leave($__internal_55d689cc4e5be82d496acc9a2671b39dc46b024119dc9d6c1d71017d03855bae_prof);

        
        $__internal_a41f6f0c1108b6e9122844294dd554548a69984439af378456b77ea5d033c77b->leave($__internal_a41f6f0c1108b6e9122844294dd554548a69984439af378456b77ea5d033c77b_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:boutique.html.twig";
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

{% block title %}MainBundle:Boutique:boutique{% endblock %}

{% block body %}
<h1>Welcome to the Boutique:boutique page</h1>
{% endblock %}
", "MainBundle:Boutique:boutique.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/boutique.html.twig");
    }
}
