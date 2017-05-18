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
        $__internal_475c61235d4368c318115e7564c3d143771a7845a87de3d6ffd2a43753ee7fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475c61235d4368c318115e7564c3d143771a7845a87de3d6ffd2a43753ee7fcf->enter($__internal_475c61235d4368c318115e7564c3d143771a7845a87de3d6ffd2a43753ee7fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $__internal_67d24592483cf17f65cbf77fb9489a989e3730e87f9d8dd0e35325f0b51d1ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d24592483cf17f65cbf77fb9489a989e3730e87f9d8dd0e35325f0b51d1ba9->enter($__internal_67d24592483cf17f65cbf77fb9489a989e3730e87f9d8dd0e35325f0b51d1ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Gestion:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475c61235d4368c318115e7564c3d143771a7845a87de3d6ffd2a43753ee7fcf->leave($__internal_475c61235d4368c318115e7564c3d143771a7845a87de3d6ffd2a43753ee7fcf_prof);

        
        $__internal_67d24592483cf17f65cbf77fb9489a989e3730e87f9d8dd0e35325f0b51d1ba9->leave($__internal_67d24592483cf17f65cbf77fb9489a989e3730e87f9d8dd0e35325f0b51d1ba9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e9497febe6b204528a75dee8b02f42425ffe2473b90b41cfbc095623a669fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9497febe6b204528a75dee8b02f42425ffe2473b90b41cfbc095623a669fd0->enter($__internal_6e9497febe6b204528a75dee8b02f42425ffe2473b90b41cfbc095623a669fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9b4a3b4e8814cc98baa07170f67eb35cf59f15c2282989039dd8e73bc17f369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b4a3b4e8814cc98baa07170f67eb35cf59f15c2282989039dd8e73bc17f369->enter($__internal_f9b4a3b4e8814cc98baa07170f67eb35cf59f15c2282989039dd8e73bc17f369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Connexion:profil";
        
        $__internal_f9b4a3b4e8814cc98baa07170f67eb35cf59f15c2282989039dd8e73bc17f369->leave($__internal_f9b4a3b4e8814cc98baa07170f67eb35cf59f15c2282989039dd8e73bc17f369_prof);

        
        $__internal_6e9497febe6b204528a75dee8b02f42425ffe2473b90b41cfbc095623a669fd0->leave($__internal_6e9497febe6b204528a75dee8b02f42425ffe2473b90b41cfbc095623a669fd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c11a964703a86d95267601910661839ac68bc323eef5fc7801e6a957514c850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c11a964703a86d95267601910661839ac68bc323eef5fc7801e6a957514c850->enter($__internal_8c11a964703a86d95267601910661839ac68bc323eef5fc7801e6a957514c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634c81313729ced1d364c93c2ebaacb338b26f5c68d5f2038eb571b7adcfdddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634c81313729ced1d364c93c2ebaacb338b26f5c68d5f2038eb571b7adcfdddf->enter($__internal_634c81313729ced1d364c93c2ebaacb338b26f5c68d5f2038eb571b7adcfdddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Connexion:profil page</h1>
<span>votre identifiant d'utilisateur est ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</span>
";
        
        $__internal_634c81313729ced1d364c93c2ebaacb338b26f5c68d5f2038eb571b7adcfdddf->leave($__internal_634c81313729ced1d364c93c2ebaacb338b26f5c68d5f2038eb571b7adcfdddf_prof);

        
        $__internal_8c11a964703a86d95267601910661839ac68bc323eef5fc7801e6a957514c850->leave($__internal_8c11a964703a86d95267601910661839ac68bc323eef5fc7801e6a957514c850_prof);

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
<span>votre identifiant d'utilisateur est {{user}}</span>
{% endblock %}
", "MainBundle:Gestion:profil.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Gestion/profil.html.twig");
    }
}
