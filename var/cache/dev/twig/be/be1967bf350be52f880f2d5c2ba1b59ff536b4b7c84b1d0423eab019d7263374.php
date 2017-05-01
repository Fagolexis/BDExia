<?php

/* MainBundle:Activites:inscrits.html.twig */
class __TwigTemplate_e030a353c27047b3227c61a21128c099e1fbd786a55700b0ea19a6467a5d90df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:inscrits.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71aa5271b9d1d1719fe42aea1512af6cec4ccab60665fa01a5b52a76e713b85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71aa5271b9d1d1719fe42aea1512af6cec4ccab60665fa01a5b52a76e713b85c->enter($__internal_71aa5271b9d1d1719fe42aea1512af6cec4ccab60665fa01a5b52a76e713b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $__internal_8c9b8cbefed6464cf126bb307f9d63bebef81e2f52b1c5459bf4f92d70bb68d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9b8cbefed6464cf126bb307f9d63bebef81e2f52b1c5459bf4f92d70bb68d9->enter($__internal_8c9b8cbefed6464cf126bb307f9d63bebef81e2f52b1c5459bf4f92d70bb68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71aa5271b9d1d1719fe42aea1512af6cec4ccab60665fa01a5b52a76e713b85c->leave($__internal_71aa5271b9d1d1719fe42aea1512af6cec4ccab60665fa01a5b52a76e713b85c_prof);

        
        $__internal_8c9b8cbefed6464cf126bb307f9d63bebef81e2f52b1c5459bf4f92d70bb68d9->leave($__internal_8c9b8cbefed6464cf126bb307f9d63bebef81e2f52b1c5459bf4f92d70bb68d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7262e2e8bbb97e66623074e0bf0b93a0726af62b811e6c58f2dbc9efbb5e1375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7262e2e8bbb97e66623074e0bf0b93a0726af62b811e6c58f2dbc9efbb5e1375->enter($__internal_7262e2e8bbb97e66623074e0bf0b93a0726af62b811e6c58f2dbc9efbb5e1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbb9b08e969fb4df322c75cd3006699c7606d238897a59dd73d3ca66f831591c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb9b08e969fb4df322c75cd3006699c7606d238897a59dd73d3ca66f831591c->enter($__internal_dbb9b08e969fb4df322c75cd3006699c7606d238897a59dd73d3ca66f831591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des inscrits";
        
        $__internal_dbb9b08e969fb4df322c75cd3006699c7606d238897a59dd73d3ca66f831591c->leave($__internal_dbb9b08e969fb4df322c75cd3006699c7606d238897a59dd73d3ca66f831591c_prof);

        
        $__internal_7262e2e8bbb97e66623074e0bf0b93a0726af62b811e6c58f2dbc9efbb5e1375->leave($__internal_7262e2e8bbb97e66623074e0bf0b93a0726af62b811e6c58f2dbc9efbb5e1375_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1731dad51ba7bf3c908602e33e4e0733006822e3eca9cb4f3e08ee37e5c809c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1731dad51ba7bf3c908602e33e4e0733006822e3eca9cb4f3e08ee37e5c809c4->enter($__internal_1731dad51ba7bf3c908602e33e4e0733006822e3eca9cb4f3e08ee37e5c809c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_678986f716b54e2df938343144fa70cb3c4f7e4c3bd1d058954c9da3b7a482b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678986f716b54e2df938343144fa70cb3c4f7e4c3bd1d058954c9da3b7a482b4->enter($__internal_678986f716b54e2df938343144fa70cb3c4f7e4c3bd1d058954c9da3b7a482b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>
\t<div class=\"container\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 9
            echo "\t\t<div class=\"subs blank\">
\t\t\t<h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "nom", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "informations", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t\t<hr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</div>
</main>
";
        
        $__internal_678986f716b54e2df938343144fa70cb3c4f7e4c3bd1d058954c9da3b7a482b4->leave($__internal_678986f716b54e2df938343144fa70cb3c4f7e4c3bd1d058954c9da3b7a482b4_prof);

        
        $__internal_1731dad51ba7bf3c908602e33e4e0733006822e3eca9cb4f3e08ee37e5c809c4->leave($__internal_1731dad51ba7bf3c908602e33e4e0733006822e3eca9cb4f3e08ee37e5c809c4_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 15,  85 => 11,  79 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle::base.html.twig\" %}

{% block title %}Liste des inscrits{% endblock %}

{% block body %}
<main>
\t<div class=\"container\">
\t\t{% for sub in list %}
\t\t<div class=\"subs blank\">
\t\t\t<h3>{{sub.idInscrit.prenom}} {{sub.idInscrit.nom}}</h3>
\t\t\t<p>{{sub.informations}}</p>
\t\t</div>
\t\t<hr>
\t\t{% endfor %}
\t</div>
</main>
{% endblock %}
", "MainBundle:Activites:inscrits.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/inscrits.html.twig");
    }
}
