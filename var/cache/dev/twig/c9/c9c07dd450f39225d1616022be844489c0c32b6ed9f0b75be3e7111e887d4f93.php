<?php

/* MainBundle:Test:index_test.html.twig */
class __TwigTemplate_91e8ce29b9decf7842cb87e27a331686bc739817b54edb51090d2147fd73297b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Test:index_test.html.twig", 1);
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
        $__internal_11bafb39128f56319106dab721c343c954b1ca7bd8a197d581c6107ed240d420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bafb39128f56319106dab721c343c954b1ca7bd8a197d581c6107ed240d420->enter($__internal_11bafb39128f56319106dab721c343c954b1ca7bd8a197d581c6107ed240d420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Test:index_test.html.twig"));

        $__internal_aa34dd977b242a0bc88a32209db2d1f2037be1f0736279eaa74c8c9436199934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa34dd977b242a0bc88a32209db2d1f2037be1f0736279eaa74c8c9436199934->enter($__internal_aa34dd977b242a0bc88a32209db2d1f2037be1f0736279eaa74c8c9436199934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Test:index_test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11bafb39128f56319106dab721c343c954b1ca7bd8a197d581c6107ed240d420->leave($__internal_11bafb39128f56319106dab721c343c954b1ca7bd8a197d581c6107ed240d420_prof);

        
        $__internal_aa34dd977b242a0bc88a32209db2d1f2037be1f0736279eaa74c8c9436199934->leave($__internal_aa34dd977b242a0bc88a32209db2d1f2037be1f0736279eaa74c8c9436199934_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6c32600bc83f3294a96948a3880bfc56fd81962d325569eb8291c857ecd0267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c32600bc83f3294a96948a3880bfc56fd81962d325569eb8291c857ecd0267->enter($__internal_d6c32600bc83f3294a96948a3880bfc56fd81962d325569eb8291c857ecd0267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ac2abd8f4b8f476989f29f91366bb69136dbded25c9ebc8042d76bcc64ef70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac2abd8f4b8f476989f29f91366bb69136dbded25c9ebc8042d76bcc64ef70d->enter($__internal_7ac2abd8f4b8f476989f29f91366bb69136dbded25c9ebc8042d76bcc64ef70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Test:indexTest";
        
        $__internal_7ac2abd8f4b8f476989f29f91366bb69136dbded25c9ebc8042d76bcc64ef70d->leave($__internal_7ac2abd8f4b8f476989f29f91366bb69136dbded25c9ebc8042d76bcc64ef70d_prof);

        
        $__internal_d6c32600bc83f3294a96948a3880bfc56fd81962d325569eb8291c857ecd0267->leave($__internal_d6c32600bc83f3294a96948a3880bfc56fd81962d325569eb8291c857ecd0267_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee523f1dff1f2bfc188fd10f427160dff9449d7e1aaec8420493d4ffd0f1f430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee523f1dff1f2bfc188fd10f427160dff9449d7e1aaec8420493d4ffd0f1f430->enter($__internal_ee523f1dff1f2bfc188fd10f427160dff9449d7e1aaec8420493d4ffd0f1f430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cd7d9eea7ccd0f1ee0e318a3c8477752b6d13697fb55698639b4593ce114f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd7d9eea7ccd0f1ee0e318a3c8477752b6d13697fb55698639b4593ce114f37->enter($__internal_2cd7d9eea7ccd0f1ee0e318a3c8477752b6d13697fb55698639b4593ce114f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Test:indexTest page</h1>
<form action=\"\" method=\"post\">
\t<input type=\"text\" name=\"name\">
\t<input type=\"submit\" value=\"OK\">
</form>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "\t<dt>ID</dt>
\t<dd>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "idUser", array()), "html", null, true);
            echo "</dd>
\t<dt>Nom</dt>
\t<dd>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</dd>
\t<dt>Role</dt>
\t<dd>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roleUser", array()), "role", array()), "html", null, true);
            echo "</dd>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2cd7d9eea7ccd0f1ee0e318a3c8477752b6d13697fb55698639b4593ce114f37->leave($__internal_2cd7d9eea7ccd0f1ee0e318a3c8477752b6d13697fb55698639b4593ce114f37_prof);

        
        $__internal_ee523f1dff1f2bfc188fd10f427160dff9449d7e1aaec8420493d4ffd0f1f430->leave($__internal_ee523f1dff1f2bfc188fd10f427160dff9449d7e1aaec8420493d4ffd0f1f430_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Test:index_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  87 => 15,  82 => 13,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Test:indexTest{% endblock %}

{% block body %}
<h1>Welcome to the Test:indexTest page</h1>
<form action=\"\" method=\"post\">
\t<input type=\"text\" name=\"name\">
\t<input type=\"submit\" value=\"OK\">
</form>
{% for user in users %}
\t<dt>ID</dt>
\t<dd>{{user.idUser}}</dd>
\t<dt>Nom</dt>
\t<dd>{{user.nom}}</dd>
\t<dt>Role</dt>
\t<dd>{{user.roleUser.role}}</dd>
{% endfor %}
{% endblock %}
", "MainBundle:Test:index_test.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Test/index_test.html.twig");
    }
}
