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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2221522ff6723f2e0968d73ffe45de99bb3e76550dc8f5971fbe569a39c3e3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2221522ff6723f2e0968d73ffe45de99bb3e76550dc8f5971fbe569a39c3e3cb->enter($__internal_2221522ff6723f2e0968d73ffe45de99bb3e76550dc8f5971fbe569a39c3e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_fe535e5f4f40e86a4f2ee2155688b4ad381507f1cae4715ffcd0861ef3a14d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe535e5f4f40e86a4f2ee2155688b4ad381507f1cae4715ffcd0861ef3a14d32->enter($__internal_fe535e5f4f40e86a4f2ee2155688b4ad381507f1cae4715ffcd0861ef3a14d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2221522ff6723f2e0968d73ffe45de99bb3e76550dc8f5971fbe569a39c3e3cb->leave($__internal_2221522ff6723f2e0968d73ffe45de99bb3e76550dc8f5971fbe569a39c3e3cb_prof);

        
        $__internal_fe535e5f4f40e86a4f2ee2155688b4ad381507f1cae4715ffcd0861ef3a14d32->leave($__internal_fe535e5f4f40e86a4f2ee2155688b4ad381507f1cae4715ffcd0861ef3a14d32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bc202cfbfea2385c88e8824e42d81f2829b0a59d739537c3863de7767f81226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc202cfbfea2385c88e8824e42d81f2829b0a59d739537c3863de7767f81226->enter($__internal_4bc202cfbfea2385c88e8824e42d81f2829b0a59d739537c3863de7767f81226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7479567c06174d1968caf1d89a6c80f838295ef1b4338962f0d192d88a9b8e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7479567c06174d1968caf1d89a6c80f838295ef1b4338962f0d192d88a9b8e0a->enter($__internal_7479567c06174d1968caf1d89a6c80f838295ef1b4338962f0d192d88a9b8e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_7479567c06174d1968caf1d89a6c80f838295ef1b4338962f0d192d88a9b8e0a->leave($__internal_7479567c06174d1968caf1d89a6c80f838295ef1b4338962f0d192d88a9b8e0a_prof);

        
        $__internal_4bc202cfbfea2385c88e8824e42d81f2829b0a59d739537c3863de7767f81226->leave($__internal_4bc202cfbfea2385c88e8824e42d81f2829b0a59d739537c3863de7767f81226_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dac95ce7de84e071dabedfa6cc71e77d16c85611adab6d1d190cd315700eece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dac95ce7de84e071dabedfa6cc71e77d16c85611adab6d1d190cd315700eece->enter($__internal_1dac95ce7de84e071dabedfa6cc71e77d16c85611adab6d1d190cd315700eece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b135de3d891fa200e76cb2ce51daedccf3fab32567151493a01781db2ec48c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b135de3d891fa200e76cb2ce51daedccf3fab32567151493a01781db2ec48c4->enter($__internal_0b135de3d891fa200e76cb2ce51daedccf3fab32567151493a01781db2ec48c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main>
    <div clas=\"container text-center carrousel blank\">
        <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 11
            echo "            <div class=\"col col-md-8 col-md-offset-2 col col-sm-8 col-sm-offset-2 information\">
                <div class=\"row\">
                    <img class=\"col col-md-7 photo-act-sec\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($context["img"], "chemin", array())), "html", null, true);
            echo "\" alt=\"photo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                    <span class=\"photo-details col-md-5\">
                        <div class=\"photo-information\">
                            <div class=\"description-photo\">
                                <img class=\"avatar-comm\" src=\"";
            // line 17
            if (($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()) != null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
            }
            echo "\" alt=\"avatar_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                        <div class=\"photo-commentaire pre-scrollable\">
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")), $this->getAttribute($context["img"], "idImg", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                // line 23
                echo "                            <div>
                                <img class=\"avatar-comm\" src=\"";
                // line 24
                if (($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()) != null)) {
                    echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                }
                echo "\" alt=\"avatar_";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array())), "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array()), "html", null, true);
                echo "<br>
                                ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
                echo "
                            </div>
                            <hr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </div>
                    </span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_0b135de3d891fa200e76cb2ce51daedccf3fab32567151493a01781db2ec48c4->leave($__internal_0b135de3d891fa200e76cb2ce51daedccf3fab32567151493a01781db2ec48c4_prof);

        
        $__internal_1dac95ce7de84e071dabedfa6cc71e77d16c85611adab6d1d190cd315700eece->leave($__internal_1dac95ce7de84e071dabedfa6cc71e77d16c85611adab6d1d190cd315700eece_prof);

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
        return array (  155 => 35,  145 => 30,  135 => 26,  129 => 25,  119 => 24,  116 => 23,  112 => 22,  103 => 18,  93 => 17,  82 => 13,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block body %}

<main>
    <div clas=\"container text-center carrousel blank\">
        <div class=\"row\">
        {% for img in list %}
            <div class=\"col col-md-8 col-md-offset-2 col col-sm-8 col-sm-offset-2 information\">
                <div class=\"row\">
                    <img class=\"col col-md-7 photo-act-sec\" src=\"{{ asset('img/') ~ img.chemin}}\" alt=\"photo_{{act.idActivite}}_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                    <span class=\"photo-details col-md-5\">
                        <div class=\"photo-information\">
                            <div class=\"description-photo\">
                                <img class=\"avatar-comm\" src=\"{% if img.auteurImg.avatarUser != NULL %}{{ asset('img/') ~ img.auteurImg.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                                {{img.auteurImg.prenom}} {{img.auteurImg.nom}}
                            </div>
                        </div>
                        <div class=\"photo-commentaire pre-scrollable\">
                        {% for com in coms[img.idImg] %}
                            <div>
                                <img class=\"avatar-comm\" src=\"{% if com.auteurComm.avatarUser != NULL %}{{ asset('img/') ~ com.auteurComm.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{com.auteurComm.prenom ~ com.auteurComm.nom}}\">
                                {{com.auteurComm.prenom}} {{com.auteurComm.nom}}<br>
                                {{com.commentaire}}
                            </div>
                            <hr>
                        {% endfor %}
                        </div>
                    </span>
                </div>
            </div>
        {% endfor %}
        </div>
    </div>
    <div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:photos.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photos.html.twig");
    }
}
