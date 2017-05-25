<?php

/* MainBundle:Activites:photos.html.twig */
class __TwigTemplate_eb7e6a2b8b2b843c79d0d22cac8029ace72c878c919ef30a241410722fdd9a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:photos.html.twig", 1);
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
        $__internal_dfc944b6258fc743c276e5a2dd00ac3b3cc0ad6c6bfcbb5f0d33028b99eb84e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc944b6258fc743c276e5a2dd00ac3b3cc0ad6c6bfcbb5f0d33028b99eb84e9->enter($__internal_dfc944b6258fc743c276e5a2dd00ac3b3cc0ad6c6bfcbb5f0d33028b99eb84e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_5729c8feb9f1595c70966f5d6818780babb54b27af0542f199fb1cf94a301586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5729c8feb9f1595c70966f5d6818780babb54b27af0542f199fb1cf94a301586->enter($__internal_5729c8feb9f1595c70966f5d6818780babb54b27af0542f199fb1cf94a301586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfc944b6258fc743c276e5a2dd00ac3b3cc0ad6c6bfcbb5f0d33028b99eb84e9->leave($__internal_dfc944b6258fc743c276e5a2dd00ac3b3cc0ad6c6bfcbb5f0d33028b99eb84e9_prof);

        
        $__internal_5729c8feb9f1595c70966f5d6818780babb54b27af0542f199fb1cf94a301586->leave($__internal_5729c8feb9f1595c70966f5d6818780babb54b27af0542f199fb1cf94a301586_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46e8303082367a97926b0c012dc22069c57f6522147632cae46e20f3855c9c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e8303082367a97926b0c012dc22069c57f6522147632cae46e20f3855c9c79->enter($__internal_46e8303082367a97926b0c012dc22069c57f6522147632cae46e20f3855c9c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33c92612145b36cbacaebaca061f9abbe9fc37c4d44ee5d7b5698b4ad3c013f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c92612145b36cbacaebaca061f9abbe9fc37c4d44ee5d7b5698b4ad3c013f4->enter($__internal_33c92612145b36cbacaebaca061f9abbe9fc37c4d44ee5d7b5698b4ad3c013f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_33c92612145b36cbacaebaca061f9abbe9fc37c4d44ee5d7b5698b4ad3c013f4->leave($__internal_33c92612145b36cbacaebaca061f9abbe9fc37c4d44ee5d7b5698b4ad3c013f4_prof);

        
        $__internal_46e8303082367a97926b0c012dc22069c57f6522147632cae46e20f3855c9c79->leave($__internal_46e8303082367a97926b0c012dc22069c57f6522147632cae46e20f3855c9c79_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_bb453f8ec0c11d25f68295aac20708906fb194a4cf4eb1e39d4702e1b1ba71c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb453f8ec0c11d25f68295aac20708906fb194a4cf4eb1e39d4702e1b1ba71c4->enter($__internal_bb453f8ec0c11d25f68295aac20708906fb194a4cf4eb1e39d4702e1b1ba71c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_042fc62f7735485bb3d5eb4f00ef895e612ccd4f1c6ae2f8ccfd0e1cc1ed2b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042fc62f7735485bb3d5eb4f00ef895e612ccd4f1c6ae2f8ccfd0e1cc1ed2b52->enter($__internal_042fc62f7735485bb3d5eb4f00ef895e612ccd4f1c6ae2f8ccfd0e1cc1ed2b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_042fc62f7735485bb3d5eb4f00ef895e612ccd4f1c6ae2f8ccfd0e1cc1ed2b52->leave($__internal_042fc62f7735485bb3d5eb4f00ef895e612ccd4f1c6ae2f8ccfd0e1cc1ed2b52_prof);

        
        $__internal_bb453f8ec0c11d25f68295aac20708906fb194a4cf4eb1e39d4702e1b1ba71c4->leave($__internal_bb453f8ec0c11d25f68295aac20708906fb194a4cf4eb1e39d4702e1b1ba71c4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6640f28429a70fa6b4d665ffe87a94bf44b490aec77970914ecf8e140fbf2396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6640f28429a70fa6b4d665ffe87a94bf44b490aec77970914ecf8e140fbf2396->enter($__internal_6640f28429a70fa6b4d665ffe87a94bf44b490aec77970914ecf8e140fbf2396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74844b621b085068b5f378056e7e10b7f4f12a673123ff0b2b069669b03c8699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74844b621b085068b5f378056e7e10b7f4f12a673123ff0b2b069669b03c8699->enter($__internal_74844b621b085068b5f378056e7e10b7f4f12a673123ff0b2b069669b03c8699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main>
    <div class=\"container\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 12
            echo "            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($context["img"], "chemin", array())), "html", null, true);
            echo "\" alt=\"photo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"";
            // line 16
            if (($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()) != null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
            }
            echo "\" alt=\"avatar_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                            <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array()), "html", null, true);
            echo "</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                if (($this->getAttribute($this->getAttribute($context["com"], "imgComm", array()), "idImg", array()) == $this->getAttribute($context["img"], "idImg", array()))) {
                    // line 21
                    echo "                            <div>
                                <img class=\"avatar-comm\" src=\"";
                    // line 22
                    if (($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()) != null)) {
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    }
                    echo "\" alt=\"avatar_";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array())), "html", null, true);
                    echo "\">
                                ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array()), "html", null, true);
                    echo "<br>
                                <p class=\"text-comm\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
                    echo "</p>
                            </div>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img"], "likesUser", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                // line 37
                echo "                                                ";
                if (($this->getAttribute($context["like"], "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 38
                    echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimée\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                    <i class=\"fa fa-heart-o\"></i>
                                                </button>
                                                ";
                }
                // line 42
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 43
                echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimer\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                                </button>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_74844b621b085068b5f378056e7e10b7f4f12a673123ff0b2b069669b03c8699->leave($__internal_74844b621b085068b5f378056e7e10b7f4f12a673123ff0b2b069669b03c8699_prof);

        
        $__internal_6640f28429a70fa6b4d665ffe87a94bf44b490aec77970914ecf8e140fbf2396->leave($__internal_6640f28429a70fa6b4d665ffe87a94bf44b490aec77970914ecf8e140fbf2396_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 55,  203 => 47,  194 => 43,  189 => 42,  183 => 38,  180 => 37,  175 => 36,  166 => 30,  161 => 27,  151 => 24,  145 => 23,  135 => 22,  132 => 21,  127 => 20,  119 => 17,  109 => 16,  99 => 13,  96 => 12,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Activité{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}

<main>
    <div class=\"container\">
        {% for img in list  %}
            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"{{ asset('img/') ~ img.chemin}}\" alt=\"photo_{{act.idActivite}}_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"{% if img.auteurImg.avatarUser != NULL %}{{ asset('img/') ~ img.auteurImg.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                            <h2>{{img.auteurImg.prenom}} {{img.auteurImg.nom}}</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        {% for com in coms if com.imgComm.idImg == img.idImg %}
                            <div>
                                <img class=\"avatar-comm\" src=\"{% if com.auteurComm.avatarUser != NULL %}{{ asset('img/') ~ com.auteurComm.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{com.auteurComm.prenom ~ com.auteurComm.nom}}\">
                                {{com.auteurComm.prenom}} {{com.auteurComm.nom}}<br>
                                <p class=\"text-comm\">{{com.commentaire}}</p>
                            </div>
                        {% endfor %}
                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"{{img.idImg}}\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            {% for like in img.likesUser %}
                                                {% if like.idUser == app.session.get('idUser') %}
                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimée\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                    <i class=\"fa fa-heart-o\"></i>
                                                </button>
                                                {% endif %}
                                            {% else %}
                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimer\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                                </button>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        {% endfor %}
    </div>
    <div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:photos.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photos.html.twig");
    }
}
