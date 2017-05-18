<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3f5b7a13441abc3cf36de54e79db87bf6bcfb5e6898bebf79390f79819468494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d6afd6322390cc2f9ff8108a5b3b03b5141b14e3b45c9411e8254946cfc5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d6afd6322390cc2f9ff8108a5b3b03b5141b14e3b45c9411e8254946cfc5e2->enter($__internal_28d6afd6322390cc2f9ff8108a5b3b03b5141b14e3b45c9411e8254946cfc5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a94bdf19639b130a9a89f9de4785af0ef9acbe2002004e0b8b62b5f9b712b23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94bdf19639b130a9a89f9de4785af0ef9acbe2002004e0b8b62b5f9b712b23b->enter($__internal_a94bdf19639b130a9a89f9de4785af0ef9acbe2002004e0b8b62b5f9b712b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_28d6afd6322390cc2f9ff8108a5b3b03b5141b14e3b45c9411e8254946cfc5e2->leave($__internal_28d6afd6322390cc2f9ff8108a5b3b03b5141b14e3b45c9411e8254946cfc5e2_prof);

        
        $__internal_a94bdf19639b130a9a89f9de4785af0ef9acbe2002004e0b8b62b5f9b712b23b->leave($__internal_a94bdf19639b130a9a89f9de4785af0ef9acbe2002004e0b8b62b5f9b712b23b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\bdexia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
