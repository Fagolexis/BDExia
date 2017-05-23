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
        $__internal_39d505932e532661e2257102aecec113d93fa7c1472cd3e6cc53636322bbfb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d505932e532661e2257102aecec113d93fa7c1472cd3e6cc53636322bbfb39->enter($__internal_39d505932e532661e2257102aecec113d93fa7c1472cd3e6cc53636322bbfb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_ade3bed3d456807b6ee01f42b0d1264b908819ef54e350595926180528527b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade3bed3d456807b6ee01f42b0d1264b908819ef54e350595926180528527b9c->enter($__internal_ade3bed3d456807b6ee01f42b0d1264b908819ef54e350595926180528527b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d505932e532661e2257102aecec113d93fa7c1472cd3e6cc53636322bbfb39->leave($__internal_39d505932e532661e2257102aecec113d93fa7c1472cd3e6cc53636322bbfb39_prof);

        
        $__internal_ade3bed3d456807b6ee01f42b0d1264b908819ef54e350595926180528527b9c->leave($__internal_ade3bed3d456807b6ee01f42b0d1264b908819ef54e350595926180528527b9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e7aa0290252543e4f648771ae00ea6c10e435e7b76aa9f5d99489422d9bc82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7aa0290252543e4f648771ae00ea6c10e435e7b76aa9f5d99489422d9bc82a->enter($__internal_0e7aa0290252543e4f648771ae00ea6c10e435e7b76aa9f5d99489422d9bc82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea9322400d21b2f79633770f33e13e54e29792b5ecc005bc0dfc2af816592eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9322400d21b2f79633770f33e13e54e29792b5ecc005bc0dfc2af816592eaa->enter($__internal_ea9322400d21b2f79633770f33e13e54e29792b5ecc005bc0dfc2af816592eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_ea9322400d21b2f79633770f33e13e54e29792b5ecc005bc0dfc2af816592eaa->leave($__internal_ea9322400d21b2f79633770f33e13e54e29792b5ecc005bc0dfc2af816592eaa_prof);

        
        $__internal_0e7aa0290252543e4f648771ae00ea6c10e435e7b76aa9f5d99489422d9bc82a->leave($__internal_0e7aa0290252543e4f648771ae00ea6c10e435e7b76aa9f5d99489422d9bc82a_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_89048cc5b1e2796cab7decc6e7686b58c749b1a08184785b813ebea08e3a1c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89048cc5b1e2796cab7decc6e7686b58c749b1a08184785b813ebea08e3a1c4d->enter($__internal_89048cc5b1e2796cab7decc6e7686b58c749b1a08184785b813ebea08e3a1c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_f67ee381d4c166fceee700b55e6facec9e27c527907414befde338d7e2cd6a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67ee381d4c166fceee700b55e6facec9e27c527907414befde338d7e2cd6a29->enter($__internal_f67ee381d4c166fceee700b55e6facec9e27c527907414befde338d7e2cd6a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_f67ee381d4c166fceee700b55e6facec9e27c527907414befde338d7e2cd6a29->leave($__internal_f67ee381d4c166fceee700b55e6facec9e27c527907414befde338d7e2cd6a29_prof);

        
        $__internal_89048cc5b1e2796cab7decc6e7686b58c749b1a08184785b813ebea08e3a1c4d->leave($__internal_89048cc5b1e2796cab7decc6e7686b58c749b1a08184785b813ebea08e3a1c4d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0035e645376df586cd237508aa9e5520e3632fde33704674042d066b04a6ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0035e645376df586cd237508aa9e5520e3632fde33704674042d066b04a6ab5->enter($__internal_c0035e645376df586cd237508aa9e5520e3632fde33704674042d066b04a6ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ded73e2ef9f7249491ac5f9953056a2bcaecdc2b0ff9850125baf4097af5c66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded73e2ef9f7249491ac5f9953056a2bcaecdc2b0ff9850125baf4097af5c66f->enter($__internal_ded73e2ef9f7249491ac5f9953056a2bcaecdc2b0ff9850125baf4097af5c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $this->getAttribute($context["img"], "idImg", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
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
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            <div>
                                <form action=\"\" method=\"post\">
                                    <textarea name=\"Commentaire\" cols=\"30\" rows=\"2\"></textarea>
                                    <input type=\"submit\" name=\"submitComm\" value=\">\">
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
        // line 37
        echo "    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_ded73e2ef9f7249491ac5f9953056a2bcaecdc2b0ff9850125baf4097af5c66f->leave($__internal_ded73e2ef9f7249491ac5f9953056a2bcaecdc2b0ff9850125baf4097af5c66f_prof);

        
        $__internal_c0035e645376df586cd237508aa9e5520e3632fde33704674042d066b04a6ab5->leave($__internal_c0035e645376df586cd237508aa9e5520e3632fde33704674042d066b04a6ab5_prof);

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
        return array (  174 => 37,  159 => 27,  150 => 24,  144 => 23,  134 => 22,  131 => 21,  127 => 20,  119 => 17,  109 => 16,  99 => 13,  96 => 12,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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
        {% for img in list %}
            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"{{ asset('img/') ~ img.chemin}}\" alt=\"photo_{{act.idActivite}}_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"{% if img.auteurImg.avatarUser != NULL %}{{ asset('img/') ~ img.auteurImg.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                            <h2>{{img.auteurImg.prenom}} {{img.auteurImg.nom}}</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        {% for com in coms[img.idImg] %}
                            <div>
                                <img class=\"avatar-comm\" src=\"{% if com.auteurComm.avatarUser != NULL %}{{ asset('img/') ~ com.auteurComm.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{com.auteurComm.prenom ~ com.auteurComm.nom}}\">
                                {{com.auteurComm.prenom}} {{com.auteurComm.nom}}<br>
                                <p class=\"text-comm\">{{com.commentaire}}</p>
                            </div>
                        {% endfor %}
                            <div>
                                <form action=\"\" method=\"post\">
                                    <textarea name=\"Commentaire\" cols=\"30\" rows=\"2\"></textarea>
                                    <input type=\"submit\" name=\"submitComm\" value=\">\">
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
