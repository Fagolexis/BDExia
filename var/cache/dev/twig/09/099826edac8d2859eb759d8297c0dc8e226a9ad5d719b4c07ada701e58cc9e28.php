<?php

/* MainBundle:Activites:details_activite.html.twig */
class __TwigTemplate_c9fe81c9ebad2f9c3049bf4ba66c7c5a650b1b8ab4f11e92d914ea79209333fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Activites:details_activite.html.twig", 1);
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
        $__internal_e5d93b7bba818bbc955b73ac3385ab34a14d6398e8d33b90cd2fa067d3a2ee64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d93b7bba818bbc955b73ac3385ab34a14d6398e8d33b90cd2fa067d3a2ee64->enter($__internal_e5d93b7bba818bbc955b73ac3385ab34a14d6398e8d33b90cd2fa067d3a2ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activite.html.twig"));

        $__internal_a6ddac4e08b6cd08ee50fbfd34f53b932a417d39bfec5e48835082232bef725b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ddac4e08b6cd08ee50fbfd34f53b932a417d39bfec5e48835082232bef725b->enter($__internal_a6ddac4e08b6cd08ee50fbfd34f53b932a417d39bfec5e48835082232bef725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:details_activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d93b7bba818bbc955b73ac3385ab34a14d6398e8d33b90cd2fa067d3a2ee64->leave($__internal_e5d93b7bba818bbc955b73ac3385ab34a14d6398e8d33b90cd2fa067d3a2ee64_prof);

        
        $__internal_a6ddac4e08b6cd08ee50fbfd34f53b932a417d39bfec5e48835082232bef725b->leave($__internal_a6ddac4e08b6cd08ee50fbfd34f53b932a417d39bfec5e48835082232bef725b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f1b5f2de8706847133da46558789ef43aaa2e523fde9847ab5c528f4cee867c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1b5f2de8706847133da46558789ef43aaa2e523fde9847ab5c528f4cee867c->enter($__internal_3f1b5f2de8706847133da46558789ef43aaa2e523fde9847ab5c528f4cee867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_437959ae541758723597c96a113b05a7dd30bff3630b73da6ce02685244353e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437959ae541758723597c96a113b05a7dd30bff3630b73da6ce02685244353e1->enter($__internal_437959ae541758723597c96a113b05a7dd30bff3630b73da6ce02685244353e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MainBundle:Activites:detailsActivites";
        
        $__internal_437959ae541758723597c96a113b05a7dd30bff3630b73da6ce02685244353e1->leave($__internal_437959ae541758723597c96a113b05a7dd30bff3630b73da6ce02685244353e1_prof);

        
        $__internal_3f1b5f2de8706847133da46558789ef43aaa2e523fde9847ab5c528f4cee867c->leave($__internal_3f1b5f2de8706847133da46558789ef43aaa2e523fde9847ab5c528f4cee867c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_21ef92b9013039e2b2130fa8589203bb43f26aeb8d1f5a5c2266fa91089d221a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ef92b9013039e2b2130fa8589203bb43f26aeb8d1f5a5c2266fa91089d221a->enter($__internal_21ef92b9013039e2b2130fa8589203bb43f26aeb8d1f5a5c2266fa91089d221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13aee5e971dcd417ca03ccf87c04b59c80abb23a9c134be02228f677c3b21b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aee5e971dcd417ca03ccf87c04b59c80abb23a9c134be02228f677c3b21b10->enter($__internal_13aee5e971dcd417ca03ccf87c04b59c80abb23a9c134be02228f677c3b21b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
        echo "</dd>
<dt>NOM</dt>
<dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</dd>
<dt>Etat</dt>
<dd>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "etat", array()), "html", null, true);
        echo "</dd>
";
        // line 13
        if ((($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 2) || ($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3))) {
            // line 14
            echo "<br>
";
            // line 15
            $context["isSub"] = 0;
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subs"]) ? $context["subs"] : $this->getContext($context, "subs")));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 17
                echo "\t";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "idUser", array()) == $this->getAttribute($this->getAttribute($context["sub"], "idInscrit", array()), "idUser", array()))) {
                    // line 18
                    echo "\t\t";
                    $context["isSub"] = 1;
                    // line 19
                    echo "\t\t<h4>";
                    if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                        echo "Inscrit";
                    } else {
                        echo "Voté";
                    }
                    echo "</h4>
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            if (((isset($context["isSub"]) ? $context["isSub"] : $this->getContext($context, "isSub")) != 1)) {
                // line 23
                echo "<form action=\"\" method=\"POST\">
\t<label for=\"comm\">Informations pour l'auteur</label><br>
\t<input type=\"text\" name=\"info\"><br><br>
\t<input type=\"submit\" name=\"subAct\" value=";
                // line 26
                if (($this->getAttribute($this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "etatAct", array()), "idEtat", array()) == 3)) {
                    echo "\"S'inscrire\" ";
                } else {
                    echo "\"Voter\"";
                }
                echo ">
</form>
";
            }
        }
        
        $__internal_13aee5e971dcd417ca03ccf87c04b59c80abb23a9c134be02228f677c3b21b10->leave($__internal_13aee5e971dcd417ca03ccf87c04b59c80abb23a9c134be02228f677c3b21b10_prof);

        
        $__internal_21ef92b9013039e2b2130fa8589203bb43f26aeb8d1f5a5c2266fa91089d221a->leave($__internal_21ef92b9013039e2b2130fa8589203bb43f26aeb8d1f5a5c2266fa91089d221a_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:details_activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 26,  119 => 23,  117 => 22,  103 => 19,  100 => 18,  97 => 17,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  82 => 12,  77 => 10,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}MainBundle:Activites:detailsActivites{% endblock %}

{% block body %}
<h1>Welcome to the Activites:detailsActivites page</h1>
<dt>ID</dt>
<dd>{{act.idActivite}}</dd>
<dt>NOM</dt>
<dd>{{act.nomActivite}}</dd>
<dt>Etat</dt>
<dd>{{act.etatAct.etat}}</dd>
{% if act.etatAct.idEtat == 2 or act.etatAct.idEtat == 3 %}
<br>
{% set isSub = 0 %}
{% for sub in subs %}
\t{% if user.idUser == sub.idInscrit.idUser %}
\t\t{% set isSub = 1 %}
\t\t<h4>{% if act.etatAct.idEtat == 3 %}Inscrit{% else %}Voté{% endif %}</h4>
\t{% endif %}
{% endfor %}
{% if isSub != 1 %}
<form action=\"\" method=\"POST\">
\t<label for=\"comm\">Informations pour l'auteur</label><br>
\t<input type=\"text\" name=\"info\"><br><br>
\t<input type=\"submit\" name=\"subAct\" value={% if act.etatAct.idEtat == 3 %}\"S'inscrire\" {% else %}\"Voter\"{% endif %}>
</form>
{% endif %}
{% endif %}
{% endblock %}
", "MainBundle:Activites:details_activite.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/details_activite.html.twig");
    }
}
