<?php

/* MainBundle:Activites:liste.html.twig */
class __TwigTemplate_4c286c3a5bccf5c6b2a78c06726ff6fe2b46d4c141df9cc7c69b762c1e126d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:liste.html.twig", 1);
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
        $__internal_37720deb30afa222e19f2f1bb565e32d892c8b8619ba3a15f9336c05ae3fd6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37720deb30afa222e19f2f1bb565e32d892c8b8619ba3a15f9336c05ae3fd6e4->enter($__internal_37720deb30afa222e19f2f1bb565e32d892c8b8619ba3a15f9336c05ae3fd6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $__internal_65c333396e4f05e35213c0d8c5199f405e045a453974516e3fb9f18fb4018e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c333396e4f05e35213c0d8c5199f405e045a453974516e3fb9f18fb4018e30->enter($__internal_65c333396e4f05e35213c0d8c5199f405e045a453974516e3fb9f18fb4018e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37720deb30afa222e19f2f1bb565e32d892c8b8619ba3a15f9336c05ae3fd6e4->leave($__internal_37720deb30afa222e19f2f1bb565e32d892c8b8619ba3a15f9336c05ae3fd6e4_prof);

        
        $__internal_65c333396e4f05e35213c0d8c5199f405e045a453974516e3fb9f18fb4018e30->leave($__internal_65c333396e4f05e35213c0d8c5199f405e045a453974516e3fb9f18fb4018e30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5c43551cc33ef10fc13c2a9477a6cd2b17c541c717b6eb1ca548589d97e3acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c43551cc33ef10fc13c2a9477a6cd2b17c541c717b6eb1ca548589d97e3acb->enter($__internal_d5c43551cc33ef10fc13c2a9477a6cd2b17c541c717b6eb1ca548589d97e3acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e543c84a89f4145412e100d78b5d1b6483acb94f77264fbcfc7c4054a441f140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e543c84a89f4145412e100d78b5d1b6483acb94f77264fbcfc7c4054a441f140->enter($__internal_e543c84a89f4145412e100d78b5d1b6483acb94f77264fbcfc7c4054a441f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités";
        
        $__internal_e543c84a89f4145412e100d78b5d1b6483acb94f77264fbcfc7c4054a441f140->leave($__internal_e543c84a89f4145412e100d78b5d1b6483acb94f77264fbcfc7c4054a441f140_prof);

        
        $__internal_d5c43551cc33ef10fc13c2a9477a6cd2b17c541c717b6eb1ca548589d97e3acb->leave($__internal_d5c43551cc33ef10fc13c2a9477a6cd2b17c541c717b6eb1ca548589d97e3acb_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_6cabb9ea0ecbe6a148574e346242ca242b6eaa22c97e027bf11c58423f5ef97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cabb9ea0ecbe6a148574e346242ca242b6eaa22c97e027bf11c58423f5ef97d->enter($__internal_6cabb9ea0ecbe6a148574e346242ca242b6eaa22c97e027bf11c58423f5ef97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_4a51fae100bd177dd107d044a5c5dbd40e2da8043e460e1eff2de948d8c4c2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a51fae100bd177dd107d044a5c5dbd40e2da8043e460e1eff2de948d8c4c2c3->enter($__internal_4a51fae100bd177dd107d044a5c5dbd40e2da8043e460e1eff2de948d8c4c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_4a51fae100bd177dd107d044a5c5dbd40e2da8043e460e1eff2de948d8c4c2c3->leave($__internal_4a51fae100bd177dd107d044a5c5dbd40e2da8043e460e1eff2de948d8c4c2c3_prof);

        
        $__internal_6cabb9ea0ecbe6a148574e346242ca242b6eaa22c97e027bf11c58423f5ef97d->leave($__internal_6cabb9ea0ecbe6a148574e346242ca242b6eaa22c97e027bf11c58423f5ef97d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_73a466467a9abedfc1ce46b0b51f534c543296235fc73a005ba8cde58621b94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a466467a9abedfc1ce46b0b51f534c543296235fc73a005ba8cde58621b94a->enter($__internal_73a466467a9abedfc1ce46b0b51f534c543296235fc73a005ba8cde58621b94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36bf980aefd76f41fe87a14b7570501ceed608092c21ae95d8d6141058fdb602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bf980aefd76f41fe87a14b7570501ceed608092c21ae95d8d6141058fdb602->enter($__internal_36bf980aefd76f41fe87a14b7570501ceed608092c21ae95d8d6141058fdb602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\"><a href=\"#subTab\" data-toggle=\"tab\">Soumises</a></li>
            <li><a href=\"#propTab\" data-toggle=\"tab\">Proposées</a></li>
            <li><a href=\"#confTab\" data-toggle=\"tab\">Confirmées</a></li>
            <li><a href=\"#compTab\" data-toggle=\"tab\">Effectuées</a></li>
        </ul>
        <div class=\"text-center blank\">
            <div class=\"tab-content clearfix\">
                <div class=\"tab-pane active\" id=\"subTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 1)) {
                // line 22
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"submited col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
                echo "</p>
                                </div>
                            </a>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"propTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 2)) {
                // line 35
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"proposed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
                echo "</p>
                                </div>
                            </a>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"confTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 3)) {
                // line 48
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"confirmed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
                echo "</p>
                                </div>
                            </a>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"compTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 4)) {
                // line 61
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"completed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "nomActivite", array()), "html", null, true);
                echo "</p>
                                </div>
                            </a>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_36bf980aefd76f41fe87a14b7570501ceed608092c21ae95d8d6141058fdb602->leave($__internal_36bf980aefd76f41fe87a14b7570501ceed608092c21ae95d8d6141058fdb602_prof);

        
        $__internal_73a466467a9abedfc1ce46b0b51f534c543296235fc73a005ba8cde58621b94a->leave($__internal_73a466467a9abedfc1ce46b0b51f534c543296235fc73a005ba8cde58621b94a_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 66,  206 => 63,  200 => 61,  195 => 60,  186 => 53,  175 => 50,  169 => 48,  164 => 47,  155 => 40,  144 => 37,  138 => 35,  133 => 34,  124 => 27,  113 => 24,  107 => 22,  102 => 21,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Activités{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}
<main>
    <div class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\"><a href=\"#subTab\" data-toggle=\"tab\">Soumises</a></li>
            <li><a href=\"#propTab\" data-toggle=\"tab\">Proposées</a></li>
            <li><a href=\"#confTab\" data-toggle=\"tab\">Confirmées</a></li>
            <li><a href=\"#compTab\" data-toggle=\"tab\">Effectuées</a></li>
        </ul>
        <div class=\"text-center blank\">
            <div class=\"tab-content clearfix\">
                <div class=\"tab-pane active\" id=\"subTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        {% for act in list if act.etatAct.idEtat == 1 %}
                            <a href=\"{{path('showAct', {'id':act.idActivite})}}\">
                                <div class=\"submited col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>{{act.nomActivite}}</p>
                                </div>
                            </a>
                        {% endfor %}                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"propTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        {% for act in list if act.etatAct.idEtat == 2 %}
                            <a href=\"{{path('showAct', {'id':act.idActivite})}}\">
                                <div class=\"proposed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>{{act.nomActivite}}</p>
                                </div>
                            </a>
                        {% endfor %}                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"confTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        {% for act in list if act.etatAct.idEtat == 3 %}
                            <a href=\"{{path('showAct', {'id':act.idActivite})}}\">
                                <div class=\"confirmed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>{{act.nomActivite}}</p>
                                </div>
                            </a>
                        {% endfor %}                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"compTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        {% for act in list if act.etatAct.idEtat == 4 %}
                            <a href=\"{{path('showAct', {'id':act.idActivite})}}\">
                                <div class=\"completed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>{{act.nomActivite}}</p>
                                </div>
                            </a>
                        {% endfor %}                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:liste.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/liste.html.twig");
    }
}
