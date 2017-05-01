<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_378e82aa9e62b3b5381bb77521ef792268c16ad9ee6b0af4f226bf9605d25793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378e82aa9e62b3b5381bb77521ef792268c16ad9ee6b0af4f226bf9605d25793->enter($__internal_378e82aa9e62b3b5381bb77521ef792268c16ad9ee6b0af4f226bf9605d25793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f4e7cc3ce37c8198156663bfeb7ed5009abafcd37a0b488b6155aaa1a61814df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e7cc3ce37c8198156663bfeb7ed5009abafcd37a0b488b6155aaa1a61814df->enter($__internal_f4e7cc3ce37c8198156663bfeb7ed5009abafcd37a0b488b6155aaa1a61814df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_378e82aa9e62b3b5381bb77521ef792268c16ad9ee6b0af4f226bf9605d25793->leave($__internal_378e82aa9e62b3b5381bb77521ef792268c16ad9ee6b0af4f226bf9605d25793_prof);

        
        $__internal_f4e7cc3ce37c8198156663bfeb7ed5009abafcd37a0b488b6155aaa1a61814df->leave($__internal_f4e7cc3ce37c8198156663bfeb7ed5009abafcd37a0b488b6155aaa1a61814df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5e1a6f43108a6192c4fdca69d8c0b683eb5e06b0b62f1d268794d31d157f7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e1a6f43108a6192c4fdca69d8c0b683eb5e06b0b62f1d268794d31d157f7d1->enter($__internal_f5e1a6f43108a6192c4fdca69d8c0b683eb5e06b0b62f1d268794d31d157f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32ffda491056ebd248e0b78a027e78f38245187945a78aafff9890a603197919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ffda491056ebd248e0b78a027e78f38245187945a78aafff9890a603197919->enter($__internal_32ffda491056ebd248e0b78a027e78f38245187945a78aafff9890a603197919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_32ffda491056ebd248e0b78a027e78f38245187945a78aafff9890a603197919->leave($__internal_32ffda491056ebd248e0b78a027e78f38245187945a78aafff9890a603197919_prof);

        
        $__internal_f5e1a6f43108a6192c4fdca69d8c0b683eb5e06b0b62f1d268794d31d157f7d1->leave($__internal_f5e1a6f43108a6192c4fdca69d8c0b683eb5e06b0b62f1d268794d31d157f7d1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f341d64794ae9e750603d749ce53516cb1a17380b0c14e98d6af7cf3a4ac52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f341d64794ae9e750603d749ce53516cb1a17380b0c14e98d6af7cf3a4ac52->enter($__internal_f9f341d64794ae9e750603d749ce53516cb1a17380b0c14e98d6af7cf3a4ac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dccb0c4d66c67f5567669f841b14f100a42ef2720f5ab98785b5f9300a89e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dccb0c4d66c67f5567669f841b14f100a42ef2720f5ab98785b5f9300a89e9e->enter($__internal_0dccb0c4d66c67f5567669f841b14f100a42ef2720f5ab98785b5f9300a89e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0dccb0c4d66c67f5567669f841b14f100a42ef2720f5ab98785b5f9300a89e9e->leave($__internal_0dccb0c4d66c67f5567669f841b14f100a42ef2720f5ab98785b5f9300a89e9e_prof);

        
        $__internal_f9f341d64794ae9e750603d749ce53516cb1a17380b0c14e98d6af7cf3a4ac52->leave($__internal_f9f341d64794ae9e750603d749ce53516cb1a17380b0c14e98d6af7cf3a4ac52_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9125b3a24967f7a21a0630d273c46c519fcefe744f5014f680cb7505b65866f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9125b3a24967f7a21a0630d273c46c519fcefe744f5014f680cb7505b65866f->enter($__internal_c9125b3a24967f7a21a0630d273c46c519fcefe744f5014f680cb7505b65866f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bc6c762ddb37a589952a156bc04dc89b6759d81415a373fb2ce285bcc115cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc6c762ddb37a589952a156bc04dc89b6759d81415a373fb2ce285bcc115cbc->enter($__internal_9bc6c762ddb37a589952a156bc04dc89b6759d81415a373fb2ce285bcc115cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9bc6c762ddb37a589952a156bc04dc89b6759d81415a373fb2ce285bcc115cbc->leave($__internal_9bc6c762ddb37a589952a156bc04dc89b6759d81415a373fb2ce285bcc115cbc_prof);

        
        $__internal_c9125b3a24967f7a21a0630d273c46c519fcefe744f5014f680cb7505b65866f->leave($__internal_c9125b3a24967f7a21a0630d273c46c519fcefe744f5014f680cb7505b65866f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\bdexia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
