<?php

/* MainBundle:Gestion:profil.html.twig */
class __TwigTemplate_6bdea5ef491fcd51aa19e32108159d398f4465fc5f99873758129e966bb362b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Gestion:profil.html.twig", 1);
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
        $__internal_ed641c230a329e7b57120946865bb9cdf8d889188ee28e0d6e6c2db430d12cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed641c230a329e7b57120946865bb9cdf8d889188ee28e0d6e6c2db430d12cc1->enter($__internal_ed641c230a329e7b57120946865bb9cdf8d889188ee28e0d6e6c2db430d12cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $__internal_779d83e3b8a918aefbe4123a29c74cc477474cf61365fa181071bfc708928ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779d83e3b8a918aefbe4123a29c74cc477474cf61365fa181071bfc708928ca7->enter($__internal_779d83e3b8a918aefbe4123a29c74cc477474cf61365fa181071bfc708928ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed641c230a329e7b57120946865bb9cdf8d889188ee28e0d6e6c2db430d12cc1->leave($__internal_ed641c230a329e7b57120946865bb9cdf8d889188ee28e0d6e6c2db430d12cc1_prof);

        
        $__internal_779d83e3b8a918aefbe4123a29c74cc477474cf61365fa181071bfc708928ca7->leave($__internal_779d83e3b8a918aefbe4123a29c74cc477474cf61365fa181071bfc708928ca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d07f8a7741a0b8723953eb3d7cfa3c1664fb0dd6fe4d52e59f495d1bde603b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d07f8a7741a0b8723953eb3d7cfa3c1664fb0dd6fe4d52e59f495d1bde603b3->enter($__internal_5d07f8a7741a0b8723953eb3d7cfa3c1664fb0dd6fe4d52e59f495d1bde603b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_843b084a6e8916f0087c7af8375cd0d0e56fd04da84524f0cefd9633ed779f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843b084a6e8916f0087c7af8375cd0d0e56fd04da84524f0cefd9633ed779f60->enter($__internal_843b084a6e8916f0087c7af8375cd0d0e56fd04da84524f0cefd9633ed779f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Connexion:profil";
        
        $__internal_843b084a6e8916f0087c7af8375cd0d0e56fd04da84524f0cefd9633ed779f60->leave($__internal_843b084a6e8916f0087c7af8375cd0d0e56fd04da84524f0cefd9633ed779f60_prof);

        
        $__internal_5d07f8a7741a0b8723953eb3d7cfa3c1664fb0dd6fe4d52e59f495d1bde603b3->leave($__internal_5d07f8a7741a0b8723953eb3d7cfa3c1664fb0dd6fe4d52e59f495d1bde603b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71a811194540811ccc4653231c6284843e5596cbb30cfd1ec0e1a8981c1a0faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a811194540811ccc4653231c6284843e5596cbb30cfd1ec0e1a8981c1a0faf->enter($__internal_71a811194540811ccc4653231c6284843e5596cbb30cfd1ec0e1a8981c1a0faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e60601c70ddf1e55fae9b7a3eb7af649d11ab615a6c096521d34d15c540dca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60601c70ddf1e55fae9b7a3eb7af649d11ab615a6c096521d34d15c540dca49->enter($__internal_e60601c70ddf1e55fae9b7a3eb7af649d11ab615a6c096521d34d15c540dca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Connexion:profil page</h1>
<span>votre identifiant d'utilisateur est ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idUser", array()), "html", null, true);
        echo "</span>
";
        
        $__internal_e60601c70ddf1e55fae9b7a3eb7af649d11ab615a6c096521d34d15c540dca49->leave($__internal_e60601c70ddf1e55fae9b7a3eb7af649d11ab615a6c096521d34d15c540dca49_prof);

        
        $__internal_71a811194540811ccc4653231c6284843e5596cbb30cfd1ec0e1a8981c1a0faf->leave($__internal_71a811194540811ccc4653231c6284843e5596cbb30cfd1ec0e1a8981c1a0faf_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Gestion:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Connexion:profil{% endblock %}

{% block body %}
<h1>Welcome to the Connexion:profil page</h1>
<span>votre identifiant d'utilisateur est {{user.idUser}}</span>
{% endblock %}
", "MainBundle:Gestion:profil.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Gestion/profil.html.twig");
    }
}
