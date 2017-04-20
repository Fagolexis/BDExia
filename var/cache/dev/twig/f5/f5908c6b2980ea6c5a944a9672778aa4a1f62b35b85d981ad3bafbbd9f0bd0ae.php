<?php

/* ::base.html.twig */
class __TwigTemplate_dcbdaf93735b5bc8de218ea0d068d55f653223179d8a8ba7f91fb80474077e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2267bb3eb3ce25976b6d8138440e25ed3bae54f6d9987e4b73e2f47378855876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2267bb3eb3ce25976b6d8138440e25ed3bae54f6d9987e4b73e2f47378855876->enter($__internal_2267bb3eb3ce25976b6d8138440e25ed3bae54f6d9987e4b73e2f47378855876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_21bdbe754d6c7ee82040bd60f6e6486d4f509b7542d4bfcc173b9d142beadfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bdbe754d6c7ee82040bd60f6e6486d4f509b7542d4bfcc173b9d142beadfc8->enter($__internal_21bdbe754d6c7ee82040bd60f6e6486d4f509b7542d4bfcc173b9d142beadfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2267bb3eb3ce25976b6d8138440e25ed3bae54f6d9987e4b73e2f47378855876->leave($__internal_2267bb3eb3ce25976b6d8138440e25ed3bae54f6d9987e4b73e2f47378855876_prof);

        
        $__internal_21bdbe754d6c7ee82040bd60f6e6486d4f509b7542d4bfcc173b9d142beadfc8->leave($__internal_21bdbe754d6c7ee82040bd60f6e6486d4f509b7542d4bfcc173b9d142beadfc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7f6f2ae1356c2a609fc1d7522bd661cfb8470c44df2bd4f9eae9cff7055fbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f6f2ae1356c2a609fc1d7522bd661cfb8470c44df2bd4f9eae9cff7055fbd2->enter($__internal_e7f6f2ae1356c2a609fc1d7522bd661cfb8470c44df2bd4f9eae9cff7055fbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31cf622cbcfec1ff44e09c122a618c4b5f42c3de6233f231b2c9c83860728dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cf622cbcfec1ff44e09c122a618c4b5f42c3de6233f231b2c9c83860728dc6->enter($__internal_31cf622cbcfec1ff44e09c122a618c4b5f42c3de6233f231b2c9c83860728dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31cf622cbcfec1ff44e09c122a618c4b5f42c3de6233f231b2c9c83860728dc6->leave($__internal_31cf622cbcfec1ff44e09c122a618c4b5f42c3de6233f231b2c9c83860728dc6_prof);

        
        $__internal_e7f6f2ae1356c2a609fc1d7522bd661cfb8470c44df2bd4f9eae9cff7055fbd2->leave($__internal_e7f6f2ae1356c2a609fc1d7522bd661cfb8470c44df2bd4f9eae9cff7055fbd2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07919cc1fa71a1beae9192f7b70884491adcc986c09c4d578007c2ece5ade45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07919cc1fa71a1beae9192f7b70884491adcc986c09c4d578007c2ece5ade45e->enter($__internal_07919cc1fa71a1beae9192f7b70884491adcc986c09c4d578007c2ece5ade45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac83b60d6039cdbe2d34ab6ed851b284499d6124b62d066104d10ce8fa4215fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac83b60d6039cdbe2d34ab6ed851b284499d6124b62d066104d10ce8fa4215fd->enter($__internal_ac83b60d6039cdbe2d34ab6ed851b284499d6124b62d066104d10ce8fa4215fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac83b60d6039cdbe2d34ab6ed851b284499d6124b62d066104d10ce8fa4215fd->leave($__internal_ac83b60d6039cdbe2d34ab6ed851b284499d6124b62d066104d10ce8fa4215fd_prof);

        
        $__internal_07919cc1fa71a1beae9192f7b70884491adcc986c09c4d578007c2ece5ade45e->leave($__internal_07919cc1fa71a1beae9192f7b70884491adcc986c09c4d578007c2ece5ade45e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_28fc5cd6b3bcfd3c40ab8d1d160e1c9e85dc57b59ecc721e051e2ea37cf2bff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc5cd6b3bcfd3c40ab8d1d160e1c9e85dc57b59ecc721e051e2ea37cf2bff9->enter($__internal_28fc5cd6b3bcfd3c40ab8d1d160e1c9e85dc57b59ecc721e051e2ea37cf2bff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e4c21035becad6f0089f851049fab6de2e4096dff1145845b9aca53f7e7d760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4c21035becad6f0089f851049fab6de2e4096dff1145845b9aca53f7e7d760->enter($__internal_9e4c21035becad6f0089f851049fab6de2e4096dff1145845b9aca53f7e7d760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e4c21035becad6f0089f851049fab6de2e4096dff1145845b9aca53f7e7d760->leave($__internal_9e4c21035becad6f0089f851049fab6de2e4096dff1145845b9aca53f7e7d760_prof);

        
        $__internal_28fc5cd6b3bcfd3c40ab8d1d160e1c9e85dc57b59ecc721e051e2ea37cf2bff9->leave($__internal_28fc5cd6b3bcfd3c40ab8d1d160e1c9e85dc57b59ecc721e051e2ea37cf2bff9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3640677d50291931cb94a2d6bba1323e32ffc49feb2cb649954a38815856719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3640677d50291931cb94a2d6bba1323e32ffc49feb2cb649954a38815856719->enter($__internal_a3640677d50291931cb94a2d6bba1323e32ffc49feb2cb649954a38815856719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91cf3ed68393dafdb6f5e11291eeaf46bdb73569764e23a0560298c5bce624f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cf3ed68393dafdb6f5e11291eeaf46bdb73569764e23a0560298c5bce624f9->enter($__internal_91cf3ed68393dafdb6f5e11291eeaf46bdb73569764e23a0560298c5bce624f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91cf3ed68393dafdb6f5e11291eeaf46bdb73569764e23a0560298c5bce624f9->leave($__internal_91cf3ed68393dafdb6f5e11291eeaf46bdb73569764e23a0560298c5bce624f9_prof);

        
        $__internal_a3640677d50291931cb94a2d6bba1323e32ffc49feb2cb649954a38815856719->leave($__internal_a3640677d50291931cb94a2d6bba1323e32ffc49feb2cb649954a38815856719_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\bdexia\\app/Resources\\views/base.html.twig");
    }
}
