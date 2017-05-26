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
        $__internal_f623eebc298dd5ded081b695d6be3efe793a862905f31c9a5d553d93ae6e35f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f623eebc298dd5ded081b695d6be3efe793a862905f31c9a5d553d93ae6e35f7->enter($__internal_f623eebc298dd5ded081b695d6be3efe793a862905f31c9a5d553d93ae6e35f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $__internal_a8c2fa7eb4220b3edba4ec845fe62293fa829d93c6a30b7fff422d99d336923b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c2fa7eb4220b3edba4ec845fe62293fa829d93c6a30b7fff422d99d336923b->enter($__internal_a8c2fa7eb4220b3edba4ec845fe62293fa829d93c6a30b7fff422d99d336923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f623eebc298dd5ded081b695d6be3efe793a862905f31c9a5d553d93ae6e35f7->leave($__internal_f623eebc298dd5ded081b695d6be3efe793a862905f31c9a5d553d93ae6e35f7_prof);

        
        $__internal_a8c2fa7eb4220b3edba4ec845fe62293fa829d93c6a30b7fff422d99d336923b->leave($__internal_a8c2fa7eb4220b3edba4ec845fe62293fa829d93c6a30b7fff422d99d336923b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91abaa74234facc987cc93bb8d24303620f7b7ff740f5be02a43b745dd77a8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91abaa74234facc987cc93bb8d24303620f7b7ff740f5be02a43b745dd77a8fb->enter($__internal_91abaa74234facc987cc93bb8d24303620f7b7ff740f5be02a43b745dd77a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ce2d1d52b36e1f3c51449b096a5b111cde555e3e6eb976efc5f149808cdf593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce2d1d52b36e1f3c51449b096a5b111cde555e3e6eb976efc5f149808cdf593->enter($__internal_4ce2d1d52b36e1f3c51449b096a5b111cde555e3e6eb976efc5f149808cdf593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des activités";
        
        $__internal_4ce2d1d52b36e1f3c51449b096a5b111cde555e3e6eb976efc5f149808cdf593->leave($__internal_4ce2d1d52b36e1f3c51449b096a5b111cde555e3e6eb976efc5f149808cdf593_prof);

        
        $__internal_91abaa74234facc987cc93bb8d24303620f7b7ff740f5be02a43b745dd77a8fb->leave($__internal_91abaa74234facc987cc93bb8d24303620f7b7ff740f5be02a43b745dd77a8fb_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_a8d7a2374804ce1f09ceeed32e2ecb9b688543acf2bfac54841e0a969bc384e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d7a2374804ce1f09ceeed32e2ecb9b688543acf2bfac54841e0a969bc384e7->enter($__internal_a8d7a2374804ce1f09ceeed32e2ecb9b688543acf2bfac54841e0a969bc384e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_c1752aaea7e513c8e3a99aa309b5ba3167466119b3c4460039aace7094d94d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1752aaea7e513c8e3a99aa309b5ba3167466119b3c4460039aace7094d94d48->enter($__internal_c1752aaea7e513c8e3a99aa309b5ba3167466119b3c4460039aace7094d94d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_c1752aaea7e513c8e3a99aa309b5ba3167466119b3c4460039aace7094d94d48->leave($__internal_c1752aaea7e513c8e3a99aa309b5ba3167466119b3c4460039aace7094d94d48_prof);

        
        $__internal_a8d7a2374804ce1f09ceeed32e2ecb9b688543acf2bfac54841e0a969bc384e7->leave($__internal_a8d7a2374804ce1f09ceeed32e2ecb9b688543acf2bfac54841e0a969bc384e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_827b4ee0ad58d2a71fd70e9ef1c31e474a5cac63fd988edf24ea8847ad8c0e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827b4ee0ad58d2a71fd70e9ef1c31e474a5cac63fd988edf24ea8847ad8c0e9a->enter($__internal_827b4ee0ad58d2a71fd70e9ef1c31e474a5cac63fd988edf24ea8847ad8c0e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6b2dd33e72dea071193ebcbb3a48879abe6684db41b14964306779b40799ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b2dd33e72dea071193ebcbb3a48879abe6684db41b14964306779b40799ac8->enter($__internal_b6b2dd33e72dea071193ebcbb3a48879abe6684db41b14964306779b40799ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div class=\"container-fluid text-center header-title\">
        <h1>Liste des activités</h1>
    </div>
    <div class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\"><a href=\"#subTab\" data-toggle=\"tab\">Soumises</a></li>
            <li><a href=\"#propTab\" data-toggle=\"tab\">Proposées</a></li>
            <li><a href=\"#confTab\" data-toggle=\"tab\">Confirmées</a></li>
            <li><a href=\"#compTab\" data-toggle=\"tab\">Effectuées</a></li>
            ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 2)) {
            // line 19
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAct");
            echo "\">Créer</a></li>
            ";
        }
        // line 21
        echo "        </ul>
        <div class=\"text-center blank\">
            <div class=\"tab-content clearfix\">
                <div class=\"tab-pane active\" id=\"subTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 1)) {
                // line 28
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"submited col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 30
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
        // line 33
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"propTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 2)) {
                // line 41
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"proposed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 43
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
        // line 46
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"confTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 3)) {
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"confirmed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 56
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
        // line 59
        echo "                    
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"compTab\">
                    <div class=\"row\">
                        <div class=\"col col-md-9 col-md-offset-1\">
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            if (($this->getAttribute($this->getAttribute($context["act"], "etatAct", array()), "idEtat", array()) == 4)) {
                // line 67
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAct", array("id" => $this->getAttribute($context["act"], "idActivite", array()))), "html", null, true);
                echo "\">
                                <div class=\"completed col col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 activity\">
                                    <p>";
                // line 69
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
        // line 72
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
        
        $__internal_b6b2dd33e72dea071193ebcbb3a48879abe6684db41b14964306779b40799ac8->leave($__internal_b6b2dd33e72dea071193ebcbb3a48879abe6684db41b14964306779b40799ac8_prof);

        
        $__internal_827b4ee0ad58d2a71fd70e9ef1c31e474a5cac63fd988edf24ea8847ad8c0e9a->leave($__internal_827b4ee0ad58d2a71fd70e9ef1c31e474a5cac63fd988edf24ea8847ad8c0e9a_prof);

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
        return array (  230 => 72,  219 => 69,  213 => 67,  208 => 66,  199 => 59,  188 => 56,  182 => 54,  177 => 53,  168 => 46,  157 => 43,  151 => 41,  146 => 40,  137 => 33,  126 => 30,  120 => 28,  115 => 27,  107 => 21,  101 => 19,  99 => 18,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Liste des activités{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}
<main>
    <div class=\"container-fluid text-center header-title\">
        <h1>Liste des activités</h1>
    </div>
    <div class=\"container\">
        <ul class=\"nav nav-pills\">
            <li class=\"active\"><a href=\"#subTab\" data-toggle=\"tab\">Soumises</a></li>
            <li><a href=\"#propTab\" data-toggle=\"tab\">Proposées</a></li>
            <li><a href=\"#confTab\" data-toggle=\"tab\">Confirmées</a></li>
            <li><a href=\"#compTab\" data-toggle=\"tab\">Effectuées</a></li>
            {% if app.session.get('roleUser') == 2 %}
                <li><a href=\"{{path('addAct')}}\">Créer</a></li>
            {% endif %}
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
