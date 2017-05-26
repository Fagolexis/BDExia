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
            'navActivites' => array($this, 'block_navActivites'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2d9b3394a952ef2bcee2f7e601b17fb855cb0ad74b3ca049c0eb9bbe812d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2d9b3394a952ef2bcee2f7e601b17fb855cb0ad74b3ca049c0eb9bbe812d8f->enter($__internal_8d2d9b3394a952ef2bcee2f7e601b17fb855cb0ad74b3ca049c0eb9bbe812d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $__internal_8ec31471cbcac081521232f7273a83f7b5048844a9b8feb3e8648395273416b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec31471cbcac081521232f7273a83f7b5048844a9b8feb3e8648395273416b8->enter($__internal_8ec31471cbcac081521232f7273a83f7b5048844a9b8feb3e8648395273416b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2d9b3394a952ef2bcee2f7e601b17fb855cb0ad74b3ca049c0eb9bbe812d8f->leave($__internal_8d2d9b3394a952ef2bcee2f7e601b17fb855cb0ad74b3ca049c0eb9bbe812d8f_prof);

        
        $__internal_8ec31471cbcac081521232f7273a83f7b5048844a9b8feb3e8648395273416b8->leave($__internal_8ec31471cbcac081521232f7273a83f7b5048844a9b8feb3e8648395273416b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05f16be61d1d162627a4cdd5351fa62f30cbbf138363d97d9e09d8c514644ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f16be61d1d162627a4cdd5351fa62f30cbbf138363d97d9e09d8c514644ae6->enter($__internal_05f16be61d1d162627a4cdd5351fa62f30cbbf138363d97d9e09d8c514644ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb64210165e13f79b75d92df33760b1ba3df4278dc3220b918802f1c0fca5430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb64210165e13f79b75d92df33760b1ba3df4278dc3220b918802f1c0fca5430->enter($__internal_fb64210165e13f79b75d92df33760b1ba3df4278dc3220b918802f1c0fca5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des inscrits";
        
        $__internal_fb64210165e13f79b75d92df33760b1ba3df4278dc3220b918802f1c0fca5430->leave($__internal_fb64210165e13f79b75d92df33760b1ba3df4278dc3220b918802f1c0fca5430_prof);

        
        $__internal_05f16be61d1d162627a4cdd5351fa62f30cbbf138363d97d9e09d8c514644ae6->leave($__internal_05f16be61d1d162627a4cdd5351fa62f30cbbf138363d97d9e09d8c514644ae6_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_71da40ec30bb27b83a1d84c3daf2779b74234731c82ded50a527af46bb5ada6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71da40ec30bb27b83a1d84c3daf2779b74234731c82ded50a527af46bb5ada6b->enter($__internal_71da40ec30bb27b83a1d84c3daf2779b74234731c82ded50a527af46bb5ada6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_57feb9ae8c34b9277e8cbbeb4d1da4f5b181be5843ec648ab2faf6f15c76fc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57feb9ae8c34b9277e8cbbeb4d1da4f5b181be5843ec648ab2faf6f15c76fc71->enter($__internal_57feb9ae8c34b9277e8cbbeb4d1da4f5b181be5843ec648ab2faf6f15c76fc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_57feb9ae8c34b9277e8cbbeb4d1da4f5b181be5843ec648ab2faf6f15c76fc71->leave($__internal_57feb9ae8c34b9277e8cbbeb4d1da4f5b181be5843ec648ab2faf6f15c76fc71_prof);

        
        $__internal_71da40ec30bb27b83a1d84c3daf2779b74234731c82ded50a527af46bb5ada6b->leave($__internal_71da40ec30bb27b83a1d84c3daf2779b74234731c82ded50a527af46bb5ada6b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b889880d9a74d4f3a32240e84d4b282521dba0851eaa976f1272eb4ed7b5ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b889880d9a74d4f3a32240e84d4b282521dba0851eaa976f1272eb4ed7b5ec1->enter($__internal_7b889880d9a74d4f3a32240e84d4b282521dba0851eaa976f1272eb4ed7b5ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cfb6d60626abe119590815fc6618c02f2ab764d2e27c0f2b80af802f47fa11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfb6d60626abe119590815fc6618c02f2ab764d2e27c0f2b80af802f47fa11e->enter($__internal_7cfb6d60626abe119590815fc6618c02f2ab764d2e27c0f2b80af802f47fa11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<center>
\t\t<h1>Liste des inscrits pour</h1>
\t\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</h2>
\t</center>
\t<div class=\"container\">
\t\t";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 16
            echo "\t\t<div class=\"subs blank\">
\t\t\t<h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "nom", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "informations", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t\t";
            // line 20
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < (twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list"))) - 1))) {
                // line 21
                echo "\t\t<hr>
\t\t";
            }
            // line 23
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 24
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</div>
</main>
";
        
        $__internal_7cfb6d60626abe119590815fc6618c02f2ab764d2e27c0f2b80af802f47fa11e->leave($__internal_7cfb6d60626abe119590815fc6618c02f2ab764d2e27c0f2b80af802f47fa11e_prof);

        
        $__internal_7b889880d9a74d4f3a32240e84d4b282521dba0851eaa976f1272eb4ed7b5ec1->leave($__internal_7b889880d9a74d4f3a32240e84d4b282521dba0851eaa976f1272eb4ed7b5ec1_prof);

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
        return array (  134 => 25,  128 => 24,  125 => 23,  121 => 21,  119 => 20,  114 => 18,  108 => 17,  105 => 16,  100 => 15,  98 => 14,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<center>
\t\t<h1>Liste des inscrits pour</h1>
\t\t<h2>{{act.nomActivite}}</h2>
\t</center>
\t<div class=\"container\">
\t\t{% set i = 0 %}
\t\t{% for sub in list %}
\t\t<div class=\"subs blank\">
\t\t\t<h3>{{sub.idInscrit.prenom}} {{sub.idInscrit.nom}}</h3>
\t\t\t<p>{{sub.informations}}</p>
\t\t</div>
\t\t{% if i < list|length -1 %}
\t\t<hr>
\t\t{% endif %}
\t\t{% set i = i + 1 %}
\t\t{% endfor %}
\t</div>
</main>
{% endblock %}
", "MainBundle:Activites:inscrits.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/inscrits.html.twig");
    }
}
