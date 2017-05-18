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
        $__internal_65c9ccaf51e8e1d423686b0edb4c5631aed8dc6272d7304cb4a9ee1a0782338c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c9ccaf51e8e1d423686b0edb4c5631aed8dc6272d7304cb4a9ee1a0782338c->enter($__internal_65c9ccaf51e8e1d423686b0edb4c5631aed8dc6272d7304cb4a9ee1a0782338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_822d7015db81d2369aaf268ee0e6c5e45aa7bd03b1bd3d2226182559fc20e8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822d7015db81d2369aaf268ee0e6c5e45aa7bd03b1bd3d2226182559fc20e8c6->enter($__internal_822d7015db81d2369aaf268ee0e6c5e45aa7bd03b1bd3d2226182559fc20e8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_65c9ccaf51e8e1d423686b0edb4c5631aed8dc6272d7304cb4a9ee1a0782338c->leave($__internal_65c9ccaf51e8e1d423686b0edb4c5631aed8dc6272d7304cb4a9ee1a0782338c_prof);

        
        $__internal_822d7015db81d2369aaf268ee0e6c5e45aa7bd03b1bd3d2226182559fc20e8c6->leave($__internal_822d7015db81d2369aaf268ee0e6c5e45aa7bd03b1bd3d2226182559fc20e8c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cb068256d7bd185c793532ac131897c47b1ab1f9368a329c86bc525b121736a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb068256d7bd185c793532ac131897c47b1ab1f9368a329c86bc525b121736a->enter($__internal_3cb068256d7bd185c793532ac131897c47b1ab1f9368a329c86bc525b121736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13a432b5711384605c6244b44c9f935388bc54386d548cc58efc8dd7da8172c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a432b5711384605c6244b44c9f935388bc54386d548cc58efc8dd7da8172c6->enter($__internal_13a432b5711384605c6244b44c9f935388bc54386d548cc58efc8dd7da8172c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_13a432b5711384605c6244b44c9f935388bc54386d548cc58efc8dd7da8172c6->leave($__internal_13a432b5711384605c6244b44c9f935388bc54386d548cc58efc8dd7da8172c6_prof);

        
        $__internal_3cb068256d7bd185c793532ac131897c47b1ab1f9368a329c86bc525b121736a->leave($__internal_3cb068256d7bd185c793532ac131897c47b1ab1f9368a329c86bc525b121736a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4381445648b08a9585a7bc20e154703ea496e64b23e5d4f9461853b640bf13ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4381445648b08a9585a7bc20e154703ea496e64b23e5d4f9461853b640bf13ff->enter($__internal_4381445648b08a9585a7bc20e154703ea496e64b23e5d4f9461853b640bf13ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b0f1af86cd77fbf9a803462d49347497850bcf5bf100c71155ed2a33dfc6b77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f1af86cd77fbf9a803462d49347497850bcf5bf100c71155ed2a33dfc6b77d->enter($__internal_b0f1af86cd77fbf9a803462d49347497850bcf5bf100c71155ed2a33dfc6b77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0f1af86cd77fbf9a803462d49347497850bcf5bf100c71155ed2a33dfc6b77d->leave($__internal_b0f1af86cd77fbf9a803462d49347497850bcf5bf100c71155ed2a33dfc6b77d_prof);

        
        $__internal_4381445648b08a9585a7bc20e154703ea496e64b23e5d4f9461853b640bf13ff->leave($__internal_4381445648b08a9585a7bc20e154703ea496e64b23e5d4f9461853b640bf13ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a580df7cf0186a5729c9e42f6cae1a99717e0ca86b04f4805c70348fbcacbbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a580df7cf0186a5729c9e42f6cae1a99717e0ca86b04f4805c70348fbcacbbd2->enter($__internal_a580df7cf0186a5729c9e42f6cae1a99717e0ca86b04f4805c70348fbcacbbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7cb4f7b685a6249a2b0c8a7ed70f8bba3cc28c7b92ba6698c0a900409c7201b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cb4f7b685a6249a2b0c8a7ed70f8bba3cc28c7b92ba6698c0a900409c7201b->enter($__internal_a7cb4f7b685a6249a2b0c8a7ed70f8bba3cc28c7b92ba6698c0a900409c7201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7cb4f7b685a6249a2b0c8a7ed70f8bba3cc28c7b92ba6698c0a900409c7201b->leave($__internal_a7cb4f7b685a6249a2b0c8a7ed70f8bba3cc28c7b92ba6698c0a900409c7201b_prof);

        
        $__internal_a580df7cf0186a5729c9e42f6cae1a99717e0ca86b04f4805c70348fbcacbbd2->leave($__internal_a580df7cf0186a5729c9e42f6cae1a99717e0ca86b04f4805c70348fbcacbbd2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8609864145e60b77e38b9efa2cc5cd182e34fc0a9e53d4eea8a9881bc61a92c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8609864145e60b77e38b9efa2cc5cd182e34fc0a9e53d4eea8a9881bc61a92c2->enter($__internal_8609864145e60b77e38b9efa2cc5cd182e34fc0a9e53d4eea8a9881bc61a92c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e96a172de9bfce034570e5e6bb5ce8cd9b51b5c1d0d51c10ee486d13a7970301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96a172de9bfce034570e5e6bb5ce8cd9b51b5c1d0d51c10ee486d13a7970301->enter($__internal_e96a172de9bfce034570e5e6bb5ce8cd9b51b5c1d0d51c10ee486d13a7970301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e96a172de9bfce034570e5e6bb5ce8cd9b51b5c1d0d51c10ee486d13a7970301->leave($__internal_e96a172de9bfce034570e5e6bb5ce8cd9b51b5c1d0d51c10ee486d13a7970301_prof);

        
        $__internal_8609864145e60b77e38b9efa2cc5cd182e34fc0a9e53d4eea8a9881bc61a92c2->leave($__internal_8609864145e60b77e38b9efa2cc5cd182e34fc0a9e53d4eea8a9881bc61a92c2_prof);

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
