<?php

/* MainBundle:Activites:liste_activites.html.twig */
class __TwigTemplate_ee46780139dbcd1e78bff72600065744eeb4a331aede600dc22863f604b28219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:liste_activites.html.twig", 1);
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
        $__internal_97437fe5aca3dff38d7cd5d811bb35720b3a67dbef26460f1f81f04031f895c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97437fe5aca3dff38d7cd5d811bb35720b3a67dbef26460f1f81f04031f895c5->enter($__internal_97437fe5aca3dff38d7cd5d811bb35720b3a67dbef26460f1f81f04031f895c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_activites.html.twig"));

        $__internal_cdeb0b38a9407934a533075012be9685228d24bdd89a7119150699c48af3c20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeb0b38a9407934a533075012be9685228d24bdd89a7119150699c48af3c20f->enter($__internal_cdeb0b38a9407934a533075012be9685228d24bdd89a7119150699c48af3c20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste_activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97437fe5aca3dff38d7cd5d811bb35720b3a67dbef26460f1f81f04031f895c5->leave($__internal_97437fe5aca3dff38d7cd5d811bb35720b3a67dbef26460f1f81f04031f895c5_prof);

        
        $__internal_cdeb0b38a9407934a533075012be9685228d24bdd89a7119150699c48af3c20f->leave($__internal_cdeb0b38a9407934a533075012be9685228d24bdd89a7119150699c48af3c20f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adc59fd782d1aad0f7e3fe14e81c7acbc665dd0f9a91937808e2949d9a8076e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc59fd782d1aad0f7e3fe14e81c7acbc665dd0f9a91937808e2949d9a8076e8->enter($__internal_adc59fd782d1aad0f7e3fe14e81c7acbc665dd0f9a91937808e2949d9a8076e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_821071f59fa4962f395179c7d35965396993baa98db64bb140699e4ebe6f0b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821071f59fa4962f395179c7d35965396993baa98db64bb140699e4ebe6f0b26->enter($__internal_821071f59fa4962f395179c7d35965396993baa98db64bb140699e4ebe6f0b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:listeActivites";
        
        $__internal_821071f59fa4962f395179c7d35965396993baa98db64bb140699e4ebe6f0b26->leave($__internal_821071f59fa4962f395179c7d35965396993baa98db64bb140699e4ebe6f0b26_prof);

        
        $__internal_adc59fd782d1aad0f7e3fe14e81c7acbc665dd0f9a91937808e2949d9a8076e8->leave($__internal_adc59fd782d1aad0f7e3fe14e81c7acbc665dd0f9a91937808e2949d9a8076e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8503e38d8c623b634da6046000ad551e265399d29bfd0c7671a2cc0f6f72625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8503e38d8c623b634da6046000ad551e265399d29bfd0c7671a2cc0f6f72625->enter($__internal_b8503e38d8c623b634da6046000ad551e265399d29bfd0c7671a2cc0f6f72625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_774e5b6caa3cb0609749bca2ce57763777f4fdaa73161145a920204dda326dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774e5b6caa3cb0609749bca2ce57763777f4fdaa73161145a920204dda326dfb->enter($__internal_774e5b6caa3cb0609749bca2ce57763777f4fdaa73161145a920204dda326dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:listeActivites page</h1>
";
        
        $__internal_774e5b6caa3cb0609749bca2ce57763777f4fdaa73161145a920204dda326dfb->leave($__internal_774e5b6caa3cb0609749bca2ce57763777f4fdaa73161145a920204dda326dfb_prof);

        
        $__internal_b8503e38d8c623b634da6046000ad551e265399d29bfd0c7671a2cc0f6f72625->leave($__internal_b8503e38d8c623b634da6046000ad551e265399d29bfd0c7671a2cc0f6f72625_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste_activites.html.twig";
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

{% block title %}MainBundle:Activites:listeActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:listeActivites page</h1>
{% endblock %}
", "MainBundle:Activites:liste_activites.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste_activites.html.twig");
    }
}
