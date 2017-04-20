<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db75448252cf77a8449f9444a5a0317e17498d281b5d42abe14482fc68689848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db75448252cf77a8449f9444a5a0317e17498d281b5d42abe14482fc68689848->enter($__internal_db75448252cf77a8449f9444a5a0317e17498d281b5d42abe14482fc68689848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2f2ab2c7588687a68037155ab379fab16b603c937a71d57a611f5ec68a3c3f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ab2c7588687a68037155ab379fab16b603c937a71d57a611f5ec68a3c3f39->enter($__internal_2f2ab2c7588687a68037155ab379fab16b603c937a71d57a611f5ec68a3c3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db75448252cf77a8449f9444a5a0317e17498d281b5d42abe14482fc68689848->leave($__internal_db75448252cf77a8449f9444a5a0317e17498d281b5d42abe14482fc68689848_prof);

        
        $__internal_2f2ab2c7588687a68037155ab379fab16b603c937a71d57a611f5ec68a3c3f39->leave($__internal_2f2ab2c7588687a68037155ab379fab16b603c937a71d57a611f5ec68a3c3f39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd75dfcfb9656cab31457ba001297fb627109de2ffed718548ead28494fee21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd75dfcfb9656cab31457ba001297fb627109de2ffed718548ead28494fee21e->enter($__internal_cd75dfcfb9656cab31457ba001297fb627109de2ffed718548ead28494fee21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be2aa44506bd7285385282ca5c06006321040552f06bee1dfc4d00c1a5d5fe49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2aa44506bd7285385282ca5c06006321040552f06bee1dfc4d00c1a5d5fe49->enter($__internal_be2aa44506bd7285385282ca5c06006321040552f06bee1dfc4d00c1a5d5fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_be2aa44506bd7285385282ca5c06006321040552f06bee1dfc4d00c1a5d5fe49->leave($__internal_be2aa44506bd7285385282ca5c06006321040552f06bee1dfc4d00c1a5d5fe49_prof);

        
        $__internal_cd75dfcfb9656cab31457ba001297fb627109de2ffed718548ead28494fee21e->leave($__internal_cd75dfcfb9656cab31457ba001297fb627109de2ffed718548ead28494fee21e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8aff9138a2ef993df24984a7bfbb8ff6099da2791d71c62a278ac67e10289d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aff9138a2ef993df24984a7bfbb8ff6099da2791d71c62a278ac67e10289d17->enter($__internal_8aff9138a2ef993df24984a7bfbb8ff6099da2791d71c62a278ac67e10289d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35ed76fc86bab34c6b5942713522685bf0f62e4b14183090ed5626873358b563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ed76fc86bab34c6b5942713522685bf0f62e4b14183090ed5626873358b563->enter($__internal_35ed76fc86bab34c6b5942713522685bf0f62e4b14183090ed5626873358b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_35ed76fc86bab34c6b5942713522685bf0f62e4b14183090ed5626873358b563->leave($__internal_35ed76fc86bab34c6b5942713522685bf0f62e4b14183090ed5626873358b563_prof);

        
        $__internal_8aff9138a2ef993df24984a7bfbb8ff6099da2791d71c62a278ac67e10289d17->leave($__internal_8aff9138a2ef993df24984a7bfbb8ff6099da2791d71c62a278ac67e10289d17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c608147da8ecf969d4786e5c31cb3a6eb3f6b592bd9c9ebdeebc928123a94ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c608147da8ecf969d4786e5c31cb3a6eb3f6b592bd9c9ebdeebc928123a94ffa->enter($__internal_c608147da8ecf969d4786e5c31cb3a6eb3f6b592bd9c9ebdeebc928123a94ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_473a4d4a9c2f1a15fb4fb43e6d9669b93fd49d25b26e357e270a7975d6a6fc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473a4d4a9c2f1a15fb4fb43e6d9669b93fd49d25b26e357e270a7975d6a6fc86->enter($__internal_473a4d4a9c2f1a15fb4fb43e6d9669b93fd49d25b26e357e270a7975d6a6fc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_473a4d4a9c2f1a15fb4fb43e6d9669b93fd49d25b26e357e270a7975d6a6fc86->leave($__internal_473a4d4a9c2f1a15fb4fb43e6d9669b93fd49d25b26e357e270a7975d6a6fc86_prof);

        
        $__internal_c608147da8ecf969d4786e5c31cb3a6eb3f6b592bd9c9ebdeebc928123a94ffa->leave($__internal_c608147da8ecf969d4786e5c31cb3a6eb3f6b592bd9c9ebdeebc928123a94ffa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\bdexia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
