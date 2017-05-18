<?php

/* MainBundle:Boutique:produit.html.twig */
class __TwigTemplate_e54acf0301d939f57396fbab56efce887cc9e7a163ab1600c82034ac44186806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Boutique:produit.html.twig", 1);
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
        $__internal_dbfdcae9f9b6f8cb3f1023d59a98a497524f2c80119bdc410832812879beff30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfdcae9f9b6f8cb3f1023d59a98a497524f2c80119bdc410832812879beff30->enter($__internal_dbfdcae9f9b6f8cb3f1023d59a98a497524f2c80119bdc410832812879beff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:produit.html.twig"));

        $__internal_0508a5e9df6ae85c43ced9f269ee20565abed5ac1fe7b26cc2121471f4e7c011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0508a5e9df6ae85c43ced9f269ee20565abed5ac1fe7b26cc2121471f4e7c011->enter($__internal_0508a5e9df6ae85c43ced9f269ee20565abed5ac1fe7b26cc2121471f4e7c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbfdcae9f9b6f8cb3f1023d59a98a497524f2c80119bdc410832812879beff30->leave($__internal_dbfdcae9f9b6f8cb3f1023d59a98a497524f2c80119bdc410832812879beff30_prof);

        
        $__internal_0508a5e9df6ae85c43ced9f269ee20565abed5ac1fe7b26cc2121471f4e7c011->leave($__internal_0508a5e9df6ae85c43ced9f269ee20565abed5ac1fe7b26cc2121471f4e7c011_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e8f20846468c48bd8802c0e8700564104061698dce15e1e9fdce717f3092d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e8f20846468c48bd8802c0e8700564104061698dce15e1e9fdce717f3092d4->enter($__internal_33e8f20846468c48bd8802c0e8700564104061698dce15e1e9fdce717f3092d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d23dc729afe995acfa418b12bba4be09f13c2a2c3c1a87c9828ebda90f780aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23dc729afe995acfa418b12bba4be09f13c2a2c3c1a87c9828ebda90f780aa0->enter($__internal_d23dc729afe995acfa418b12bba4be09f13c2a2c3c1a87c9828ebda90f780aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Boutique:produit";
        
        $__internal_d23dc729afe995acfa418b12bba4be09f13c2a2c3c1a87c9828ebda90f780aa0->leave($__internal_d23dc729afe995acfa418b12bba4be09f13c2a2c3c1a87c9828ebda90f780aa0_prof);

        
        $__internal_33e8f20846468c48bd8802c0e8700564104061698dce15e1e9fdce717f3092d4->leave($__internal_33e8f20846468c48bd8802c0e8700564104061698dce15e1e9fdce717f3092d4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec142604854322a090978f2a51a59e39707d96d35eaf229a5438098518c0236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec142604854322a090978f2a51a59e39707d96d35eaf229a5438098518c0236->enter($__internal_3ec142604854322a090978f2a51a59e39707d96d35eaf229a5438098518c0236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b37570c428abd01d00ef9a5f6a47acf1bb5b5d81427d17273a0e031de730235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b37570c428abd01d00ef9a5f6a47acf1bb5b5d81427d17273a0e031de730235->enter($__internal_4b37570c428abd01d00ef9a5f6a47acf1bb5b5d81427d17273a0e031de730235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Boutique:produit page</h1>
<span>Vous êtes l'utilisateur numéro ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</span>
";
        
        $__internal_4b37570c428abd01d00ef9a5f6a47acf1bb5b5d81427d17273a0e031de730235->leave($__internal_4b37570c428abd01d00ef9a5f6a47acf1bb5b5d81427d17273a0e031de730235_prof);

        
        $__internal_3ec142604854322a090978f2a51a59e39707d96d35eaf229a5438098518c0236->leave($__internal_3ec142604854322a090978f2a51a59e39707d96d35eaf229a5438098518c0236_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:produit.html.twig";
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

{% block title %}MainBundle:Boutique:produit{% endblock %}

{% block body %}
<h1>Welcome to the Boutique:produit page</h1>
<span>Vous êtes l'utilisateur numéro {{user}}</span>
{% endblock %}
", "MainBundle:Boutique:produit.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/produit.html.twig");
    }
}
