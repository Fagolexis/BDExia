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
        $__internal_75ebfafaaa72ea450949f2d64e774a0fb0d5124bd7d16ba449203ff5a60bac93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ebfafaaa72ea450949f2d64e774a0fb0d5124bd7d16ba449203ff5a60bac93->enter($__internal_75ebfafaaa72ea450949f2d64e774a0fb0d5124bd7d16ba449203ff5a60bac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_191e2e4076c11f5f7f6935ad6b6d8a6ca56433613d37eae5dd181c032ff0d512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191e2e4076c11f5f7f6935ad6b6d8a6ca56433613d37eae5dd181c032ff0d512->enter($__internal_191e2e4076c11f5f7f6935ad6b6d8a6ca56433613d37eae5dd181c032ff0d512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75ebfafaaa72ea450949f2d64e774a0fb0d5124bd7d16ba449203ff5a60bac93->leave($__internal_75ebfafaaa72ea450949f2d64e774a0fb0d5124bd7d16ba449203ff5a60bac93_prof);

        
        $__internal_191e2e4076c11f5f7f6935ad6b6d8a6ca56433613d37eae5dd181c032ff0d512->leave($__internal_191e2e4076c11f5f7f6935ad6b6d8a6ca56433613d37eae5dd181c032ff0d512_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b12600e58229995bdc81d45dd72c366781f91b2bdd9bf8a6862863483c3eff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b12600e58229995bdc81d45dd72c366781f91b2bdd9bf8a6862863483c3eff2->enter($__internal_4b12600e58229995bdc81d45dd72c366781f91b2bdd9bf8a6862863483c3eff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0746378fd6547a9bc76985bba9928c902e8db156c09644d79f4b86eaf8df72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0746378fd6547a9bc76985bba9928c902e8db156c09644d79f4b86eaf8df72b->enter($__internal_a0746378fd6547a9bc76985bba9928c902e8db156c09644d79f4b86eaf8df72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_a0746378fd6547a9bc76985bba9928c902e8db156c09644d79f4b86eaf8df72b->leave($__internal_a0746378fd6547a9bc76985bba9928c902e8db156c09644d79f4b86eaf8df72b_prof);

        
        $__internal_4b12600e58229995bdc81d45dd72c366781f91b2bdd9bf8a6862863483c3eff2->leave($__internal_4b12600e58229995bdc81d45dd72c366781f91b2bdd9bf8a6862863483c3eff2_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_2b50182f320179cdb82895cf4efe9d9eeee69ad4b4c416581f183fc617ba1a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b50182f320179cdb82895cf4efe9d9eeee69ad4b4c416581f183fc617ba1a9c->enter($__internal_2b50182f320179cdb82895cf4efe9d9eeee69ad4b4c416581f183fc617ba1a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_114f7fbe55b319a0c7eddccc57df5b5c12d55f5f3e0bc5fcf855dc02609db030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114f7fbe55b319a0c7eddccc57df5b5c12d55f5f3e0bc5fcf855dc02609db030->enter($__internal_114f7fbe55b319a0c7eddccc57df5b5c12d55f5f3e0bc5fcf855dc02609db030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_114f7fbe55b319a0c7eddccc57df5b5c12d55f5f3e0bc5fcf855dc02609db030->leave($__internal_114f7fbe55b319a0c7eddccc57df5b5c12d55f5f3e0bc5fcf855dc02609db030_prof);

        
        $__internal_2b50182f320179cdb82895cf4efe9d9eeee69ad4b4c416581f183fc617ba1a9c->leave($__internal_2b50182f320179cdb82895cf4efe9d9eeee69ad4b4c416581f183fc617ba1a9c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_110ea991448b5d470b555735c477f41427dcc84d60d2851b80f25c47621830b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110ea991448b5d470b555735c477f41427dcc84d60d2851b80f25c47621830b4->enter($__internal_110ea991448b5d470b555735c477f41427dcc84d60d2851b80f25c47621830b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f23c35516f3fee0e5f855a9dfd9f27206a3e27ea5691599cdaf79c886c940f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23c35516f3fee0e5f855a9dfd9f27206a3e27ea5691599cdaf79c886c940f23->enter($__internal_f23c35516f3fee0e5f855a9dfd9f27206a3e27ea5691599cdaf79c886c940f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main>
    <div class=\"container-fluid text-center header-title\">
        <h2>Les photos de</h2>
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "nomActivite", array()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"container\">
        ";
        // line 15
        if (array_key_exists("err", $context)) {
            // line 16
            echo "            <div class=\"alert alter-danger\">
                ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 20
        echo "        <div class=\"row barShop\">
                <div class=\"col-md-4 col-md-offset-4 text-center\">
                    <form enctype=\"multipart/form-data\" action=\"\" method=\"post\">
                        <h4>Ajouter une nouvelle photo</h4>
                        <div class=\"input-group\">
                            <label class=\"input-group-btn\">
                                <span class=\"btn btn-default\">
                                    Parcourir &hellip; <input type=\"file\" style=\"display: none;\" name=\"imgFile\" accept=\".png, .jpg\">
                                </span>
                            </label>
                            <input type=\"text\" class=\"form-control\" readonly>
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\" type=\"submit\" name=\"addPhoto\">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 39
            echo "            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($context["img"], "chemin", array())), "html", null, true);
            echo "\" alt=\"photo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"";
            // line 43
            if (($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()) != null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
            }
            echo "\" alt=\"avatar_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                            <h2>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array()), "html", null, true);
            echo "</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                if (($this->getAttribute($this->getAttribute($context["com"], "imgComm", array()), "idImg", array()) == $this->getAttribute($context["img"], "idImg", array()))) {
                    // line 48
                    echo "                            <div>
                                <img class=\"avatar-comm\" src=\"";
                    // line 49
                    if (($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()) != null)) {
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    }
                    echo "\" alt=\"avatar_";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array())), "html", null, true);
                    echo "\">
                                ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array()), "html", null, true);
                    echo "<br>
                                <p class=\"text-comm\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
                    echo "</p>
                            </div>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img"], "likesUser", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                // line 64
                echo "                                                ";
                if (($this->getAttribute($context["like"], "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 65
                    echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimée\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                    <i class=\"fa fa-heart-o\"></i>
                                                </button>
                                                ";
                }
                // line 69
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 70
                echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimer\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                                </button>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
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
        // line 82
        echo "    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_f23c35516f3fee0e5f855a9dfd9f27206a3e27ea5691599cdaf79c886c940f23->leave($__internal_f23c35516f3fee0e5f855a9dfd9f27206a3e27ea5691599cdaf79c886c940f23_prof);

        
        $__internal_110ea991448b5d470b555735c477f41427dcc84d60d2851b80f25c47621830b4->leave($__internal_110ea991448b5d470b555735c477f41427dcc84d60d2851b80f25c47621830b4_prof);

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
        return array (  254 => 82,  241 => 74,  232 => 70,  227 => 69,  221 => 65,  218 => 64,  213 => 63,  204 => 57,  199 => 54,  189 => 51,  183 => 50,  173 => 49,  170 => 48,  165 => 47,  157 => 44,  147 => 43,  137 => 40,  134 => 39,  130 => 38,  110 => 20,  104 => 17,  101 => 16,  99 => 15,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
    <div class=\"container-fluid text-center header-title\">
        <h2>Les photos de</h2>
        <h1>{{act.nomActivite}}</h1>
    </div>
    <div class=\"container\">
        {% if err is defined %}
            <div class=\"alert alter-danger\">
                {{err}}
            </div>
        {% endif %}
        <div class=\"row barShop\">
                <div class=\"col-md-4 col-md-offset-4 text-center\">
                    <form enctype=\"multipart/form-data\" action=\"\" method=\"post\">
                        <h4>Ajouter une nouvelle photo</h4>
                        <div class=\"input-group\">
                            <label class=\"input-group-btn\">
                                <span class=\"btn btn-default\">
                                    Parcourir &hellip; <input type=\"file\" style=\"display: none;\" name=\"imgFile\" accept=\".png, .jpg\">
                                </span>
                            </label>
                            <input type=\"text\" class=\"form-control\" readonly>
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\" type=\"submit\" name=\"addPhoto\">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
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
