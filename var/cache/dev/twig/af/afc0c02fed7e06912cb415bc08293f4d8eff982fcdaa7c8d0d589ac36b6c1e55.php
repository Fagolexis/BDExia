<?php

/* MainBundle:Accueil:accueil.html.twig */
class __TwigTemplate_d915f5a56137aa48f625ac53a8184bc6270d32609d3e74a39f191cf327b9bbf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Accueil:accueil.html.twig", 1);
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
        $__internal_c1fec11e1b9c22414c8bcd6a0f379034cae99b0df745d17e2795d248929557b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fec11e1b9c22414c8bcd6a0f379034cae99b0df745d17e2795d248929557b0->enter($__internal_c1fec11e1b9c22414c8bcd6a0f379034cae99b0df745d17e2795d248929557b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:accueil.html.twig"));

        $__internal_92565886b4a1435b126287e4c855cfbe4401c93ae124d11d5dcc55872cb834ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92565886b4a1435b126287e4c855cfbe4401c93ae124d11d5dcc55872cb834ed->enter($__internal_92565886b4a1435b126287e4c855cfbe4401c93ae124d11d5dcc55872cb834ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1fec11e1b9c22414c8bcd6a0f379034cae99b0df745d17e2795d248929557b0->leave($__internal_c1fec11e1b9c22414c8bcd6a0f379034cae99b0df745d17e2795d248929557b0_prof);

        
        $__internal_92565886b4a1435b126287e4c855cfbe4401c93ae124d11d5dcc55872cb834ed->leave($__internal_92565886b4a1435b126287e4c855cfbe4401c93ae124d11d5dcc55872cb834ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a69f92464c824e0ec6a5dc3c94b1c0ab28ee181e22a673850c81d8f32ca2f60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69f92464c824e0ec6a5dc3c94b1c0ab28ee181e22a673850c81d8f32ca2f60b->enter($__internal_a69f92464c824e0ec6a5dc3c94b1c0ab28ee181e22a673850c81d8f32ca2f60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe5a19973366e2707d280ff745bfb2ab5dab1bef42f121df0b7c7df2fb8edb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5a19973366e2707d280ff745bfb2ab5dab1bef42f121df0b7c7df2fb8edb7d->enter($__internal_fe5a19973366e2707d280ff745bfb2ab5dab1bef42f121df0b7c7df2fb8edb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Accueil:accueil";
        
        $__internal_fe5a19973366e2707d280ff745bfb2ab5dab1bef42f121df0b7c7df2fb8edb7d->leave($__internal_fe5a19973366e2707d280ff745bfb2ab5dab1bef42f121df0b7c7df2fb8edb7d_prof);

        
        $__internal_a69f92464c824e0ec6a5dc3c94b1c0ab28ee181e22a673850c81d8f32ca2f60b->leave($__internal_a69f92464c824e0ec6a5dc3c94b1c0ab28ee181e22a673850c81d8f32ca2f60b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_83ded96bccb6566a83bc0ac812fd619ef09584fcbae4ecbb70ad13e1658d0e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ded96bccb6566a83bc0ac812fd619ef09584fcbae4ecbb70ad13e1658d0e45->enter($__internal_83ded96bccb6566a83bc0ac812fd619ef09584fcbae4ecbb70ad13e1658d0e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9073aebdf7df2d6e2484826aa25a998afcfc32ff77fedf2b6d4c48c448e1bcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9073aebdf7df2d6e2484826aa25a998afcfc32ff77fedf2b6d4c48c448e1bcb9->enter($__internal_9073aebdf7df2d6e2484826aa25a998afcfc32ff77fedf2b6d4c48c448e1bcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Accueil:accueil page</h1>
<span>CECI EST LA PAGE D'ACCUEIL DE NOTRE SITE!!!!!</span>
";
        
        $__internal_9073aebdf7df2d6e2484826aa25a998afcfc32ff77fedf2b6d4c48c448e1bcb9->leave($__internal_9073aebdf7df2d6e2484826aa25a998afcfc32ff77fedf2b6d4c48c448e1bcb9_prof);

        
        $__internal_83ded96bccb6566a83bc0ac812fd619ef09584fcbae4ecbb70ad13e1658d0e45->leave($__internal_83ded96bccb6566a83bc0ac812fd619ef09584fcbae4ecbb70ad13e1658d0e45_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Accueil:accueil.html.twig";
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

{% block title %}MainBundle:Accueil:accueil{% endblock %}

{% block body %}
<h1>Welcome to the Accueil:accueil page</h1>
<span>CECI EST LA PAGE D'ACCUEIL DE NOTRE SITE!!!!!</span>
{% endblock %}
", "MainBundle:Accueil:accueil.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Accueil/accueil.html.twig");
    }
}
