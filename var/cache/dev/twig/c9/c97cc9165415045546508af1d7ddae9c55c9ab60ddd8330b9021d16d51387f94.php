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
        $__internal_00270b4e2c866c36e7ec2360e8d37748494168da776ce20beee7cdfc61061ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00270b4e2c866c36e7ec2360e8d37748494168da776ce20beee7cdfc61061ab1->enter($__internal_00270b4e2c866c36e7ec2360e8d37748494168da776ce20beee7cdfc61061ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_f613a292eafe2661da69e9c14f1912b248b50f9be2937771b6826e17353c1813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f613a292eafe2661da69e9c14f1912b248b50f9be2937771b6826e17353c1813->enter($__internal_f613a292eafe2661da69e9c14f1912b248b50f9be2937771b6826e17353c1813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00270b4e2c866c36e7ec2360e8d37748494168da776ce20beee7cdfc61061ab1->leave($__internal_00270b4e2c866c36e7ec2360e8d37748494168da776ce20beee7cdfc61061ab1_prof);

        
        $__internal_f613a292eafe2661da69e9c14f1912b248b50f9be2937771b6826e17353c1813->leave($__internal_f613a292eafe2661da69e9c14f1912b248b50f9be2937771b6826e17353c1813_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad21beb9eb5a64a3643157168b262148fac870850ee9c345836774e9bf27ada5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad21beb9eb5a64a3643157168b262148fac870850ee9c345836774e9bf27ada5->enter($__internal_ad21beb9eb5a64a3643157168b262148fac870850ee9c345836774e9bf27ada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4745b97a8dc3ce97dc66e3a401c8822eca287a74d1437c9d3f541943c19cfe2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4745b97a8dc3ce97dc66e3a401c8822eca287a74d1437c9d3f541943c19cfe2e->enter($__internal_4745b97a8dc3ce97dc66e3a401c8822eca287a74d1437c9d3f541943c19cfe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_4745b97a8dc3ce97dc66e3a401c8822eca287a74d1437c9d3f541943c19cfe2e->leave($__internal_4745b97a8dc3ce97dc66e3a401c8822eca287a74d1437c9d3f541943c19cfe2e_prof);

        
        $__internal_ad21beb9eb5a64a3643157168b262148fac870850ee9c345836774e9bf27ada5->leave($__internal_ad21beb9eb5a64a3643157168b262148fac870850ee9c345836774e9bf27ada5_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_6b396530833bf2846f5b2c573663397b2a07fa207da21c70863c0501bfe6f551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b396530833bf2846f5b2c573663397b2a07fa207da21c70863c0501bfe6f551->enter($__internal_6b396530833bf2846f5b2c573663397b2a07fa207da21c70863c0501bfe6f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_cc4cc8899c545695be61910c0793c4bdf1454d7c08ba75f8982cf474ab7d030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4cc8899c545695be61910c0793c4bdf1454d7c08ba75f8982cf474ab7d030a->enter($__internal_cc4cc8899c545695be61910c0793c4bdf1454d7c08ba75f8982cf474ab7d030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_cc4cc8899c545695be61910c0793c4bdf1454d7c08ba75f8982cf474ab7d030a->leave($__internal_cc4cc8899c545695be61910c0793c4bdf1454d7c08ba75f8982cf474ab7d030a_prof);

        
        $__internal_6b396530833bf2846f5b2c573663397b2a07fa207da21c70863c0501bfe6f551->leave($__internal_6b396530833bf2846f5b2c573663397b2a07fa207da21c70863c0501bfe6f551_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_92123fb30ae54664e416173ab7183923275ef0b3cfff072ae2942807cfe04edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92123fb30ae54664e416173ab7183923275ef0b3cfff072ae2942807cfe04edf->enter($__internal_92123fb30ae54664e416173ab7183923275ef0b3cfff072ae2942807cfe04edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6516190d6ba992f16b78f15569e575fde51ef68e523c9c316ae08acc6c052f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6516190d6ba992f16b78f15569e575fde51ef68e523c9c316ae08acc6c052f27->enter($__internal_6516190d6ba992f16b78f15569e575fde51ef68e523c9c316ae08acc6c052f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((array_key_exists("err", $context) && ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")) != ""))) {
            // line 16
            echo "            <div class=\"alert alert-danger\">
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
                        <input type=\"file\" accept=\".png, .jpg\" name=\"imgFile\" required>
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"addPhoto\">
                    </form>
                </div>
            </div>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 30
            echo "            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($context["img"], "chemin", array())), "html", null, true);
            echo "\" alt=\"photo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"";
            // line 34
            if (($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()) != null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
            }
            echo "\" alt=\"avatar_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                            <h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array()), "html", null, true);
            echo "</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                if (($this->getAttribute($this->getAttribute($context["com"], "imgComm", array()), "idImg", array()) == $this->getAttribute($context["img"], "idImg", array()))) {
                    // line 39
                    echo "                            <div>
                                <img class=\"avatar-comm\" src=\"";
                    // line 40
                    if (($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()) != null)) {
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    }
                    echo "\" alt=\"avatar_";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array())), "html", null, true);
                    echo "\">
                                ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array()), "html", null, true);
                    echo "<br>
                                <p class=\"text-comm\">";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
                    echo "</p>
                            </div>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img"], "likesUser", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                // line 55
                echo "                                                ";
                if (($this->getAttribute($context["like"], "idUser", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))) {
                    // line 56
                    echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimée\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                    <i class=\"fa fa-heart-o\"></i>
                                                </button>
                                                ";
                }
                // line 60
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 61
                echo "                                                <button class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Aimer\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                                </button>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['like'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
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
        // line 73
        echo "    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_6516190d6ba992f16b78f15569e575fde51ef68e523c9c316ae08acc6c052f27->leave($__internal_6516190d6ba992f16b78f15569e575fde51ef68e523c9c316ae08acc6c052f27_prof);

        
        $__internal_92123fb30ae54664e416173ab7183923275ef0b3cfff072ae2942807cfe04edf->leave($__internal_92123fb30ae54664e416173ab7183923275ef0b3cfff072ae2942807cfe04edf_prof);

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
        return array (  245 => 73,  232 => 65,  223 => 61,  218 => 60,  212 => 56,  209 => 55,  204 => 54,  195 => 48,  190 => 45,  180 => 42,  174 => 41,  164 => 40,  161 => 39,  156 => 38,  148 => 35,  138 => 34,  128 => 31,  125 => 30,  121 => 29,  110 => 20,  104 => 17,  101 => 16,  99 => 15,  93 => 12,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
        {% if err is defined and err != \"\" %}
            <div class=\"alert alert-danger\">
                {{err}}
            </div>
        {% endif %}
        <div class=\"row barShop\">
                <div class=\"col-md-4 col-md-offset-4 text-center\">
                    <form enctype=\"multipart/form-data\" action=\"\" method=\"post\">
                        <h4>Ajouter une nouvelle photo</h4>
                        <input type=\"file\" accept=\".png, .jpg\" name=\"imgFile\" required>
                        <input class=\"btn btn-primary\" type=\"submit\" name=\"addPhoto\">
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
