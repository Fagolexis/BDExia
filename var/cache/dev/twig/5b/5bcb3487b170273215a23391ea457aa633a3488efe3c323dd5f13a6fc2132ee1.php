<?php

/* MainBundle:Test:show_test.html.twig */
class __TwigTemplate_cb505c49266d6e8d0c1c3fe7b38edf7905962fea790cb902b2a3ed9f85398cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Test:show_test.html.twig", 1);
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
        $__internal_bb95dc426cf0b1d128b377552a64162545406ab774e1426ca9147e719008df87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb95dc426cf0b1d128b377552a64162545406ab774e1426ca9147e719008df87->enter($__internal_bb95dc426cf0b1d128b377552a64162545406ab774e1426ca9147e719008df87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Test:show_test.html.twig"));

        $__internal_2ca0cd03e79caae9dd0c537dd879c54c6b616d6cb53fc8253d5501592da1a00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca0cd03e79caae9dd0c537dd879c54c6b616d6cb53fc8253d5501592da1a00f->enter($__internal_2ca0cd03e79caae9dd0c537dd879c54c6b616d6cb53fc8253d5501592da1a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Test:show_test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb95dc426cf0b1d128b377552a64162545406ab774e1426ca9147e719008df87->leave($__internal_bb95dc426cf0b1d128b377552a64162545406ab774e1426ca9147e719008df87_prof);

        
        $__internal_2ca0cd03e79caae9dd0c537dd879c54c6b616d6cb53fc8253d5501592da1a00f->leave($__internal_2ca0cd03e79caae9dd0c537dd879c54c6b616d6cb53fc8253d5501592da1a00f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12e34979c1a79eb00e8a1d3d1985d7ab9390f95d0c71859303646236aa2a430f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e34979c1a79eb00e8a1d3d1985d7ab9390f95d0c71859303646236aa2a430f->enter($__internal_12e34979c1a79eb00e8a1d3d1985d7ab9390f95d0c71859303646236aa2a430f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5738c80856bf6c5e2ed65ae4d266d9b05d4f1016edb46f6580cd16cf53d55019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5738c80856bf6c5e2ed65ae4d266d9b05d4f1016edb46f6580cd16cf53d55019->enter($__internal_5738c80856bf6c5e2ed65ae4d266d9b05d4f1016edb46f6580cd16cf53d55019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Test:showTest";
        
        $__internal_5738c80856bf6c5e2ed65ae4d266d9b05d4f1016edb46f6580cd16cf53d55019->leave($__internal_5738c80856bf6c5e2ed65ae4d266d9b05d4f1016edb46f6580cd16cf53d55019_prof);

        
        $__internal_12e34979c1a79eb00e8a1d3d1985d7ab9390f95d0c71859303646236aa2a430f->leave($__internal_12e34979c1a79eb00e8a1d3d1985d7ab9390f95d0c71859303646236aa2a430f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b249fd43714d5e4a3f93a5df814fce73da83208dab978b381006f54cce69b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b249fd43714d5e4a3f93a5df814fce73da83208dab978b381006f54cce69b29->enter($__internal_7b249fd43714d5e4a3f93a5df814fce73da83208dab978b381006f54cce69b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d606694e0957d195afc4b57dbb3f99638daf3f72eaa5e48986ef5da62172d1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d606694e0957d195afc4b57dbb3f99638daf3f72eaa5e48986ef5da62172d1b1->enter($__internal_d606694e0957d195afc4b57dbb3f99638daf3f72eaa5e48986ef5da62172d1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Test:showTest page</h1>
<h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
        echo "</h2>
";
        
        $__internal_d606694e0957d195afc4b57dbb3f99638daf3f72eaa5e48986ef5da62172d1b1->leave($__internal_d606694e0957d195afc4b57dbb3f99638daf3f72eaa5e48986ef5da62172d1b1_prof);

        
        $__internal_7b249fd43714d5e4a3f93a5df814fce73da83208dab978b381006f54cce69b29->leave($__internal_7b249fd43714d5e4a3f93a5df814fce73da83208dab978b381006f54cce69b29_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Test:show_test.html.twig";
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

{% block title %}MainBundle:Test:showTest{% endblock %}

{% block body %}
<h1>Welcome to the Test:showTest page</h1>
<h2>{{test}}</h2>
{% endblock %}
", "MainBundle:Test:show_test.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Test/show_test.html.twig");
    }
}
