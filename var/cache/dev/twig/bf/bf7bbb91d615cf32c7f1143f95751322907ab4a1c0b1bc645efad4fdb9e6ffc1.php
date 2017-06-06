<?php

/* MainBundle::base.html.twig */
class __TwigTemplate_54bf2107d53a341d6c4f878abc06f7de66b43563aeb01eda158eb2818ca84d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navAccueil' => array($this, 'block_navAccueil'),
            'navActivites' => array($this, 'block_navActivites'),
            'navBoutique' => array($this, 'block_navBoutique'),
            'navProfil' => array($this, 'block_navProfil'),
            'navAdmin' => array($this, 'block_navAdmin'),
            'navDeco' => array($this, 'block_navDeco'),
            'navCnx' => array($this, 'block_navCnx'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d4bab0193acfadd759786f51877562af5a1ab93fe52451421d2f44965642cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4bab0193acfadd759786f51877562af5a1ab93fe52451421d2f44965642cfe->enter($__internal_9d4bab0193acfadd759786f51877562af5a1ab93fe52451421d2f44965642cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_f58e6ed18b7be38b6ae4c2da958d1d7d3fd043dbc1444fe9c2f5d47dc87fb186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58e6ed18b7be38b6ae4c2da958d1d7d3fd043dbc1444fe9c2f5d47dc87fb186->enter($__internal_f58e6ed18b7be38b6ae4c2da958d1d7d3fd043dbc1444fe9c2f5d47dc87fb186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/7a06b04bbf.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/a3669a9617.js\"></script>
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"red\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Accueil");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-header.png"), "html", null, true);
        echo "\" alt=\"Logo Exia\"/></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a ";
        // line 27
        $this->displayBlock('navAccueil', $context, $blocks);
        echo " href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Accueil");
        echo ">Accueil</a></li>
                        <li><a ";
        // line 28
        $this->displayBlock('navActivites', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAct");
        echo "\">Activités</a></li>
                        <li><a ";
        // line 29
        $this->displayBlock('navBoutique', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutique");
        echo "\">Boutique</a></li>
                        ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method")) {
            // line 31
            echo "                            <li><a ";
            $this->displayBlock('navProfil', $context, $blocks);
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))), "html", null, true);
            echo "\">Profil</a></li>
                            ";
            // line 32
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "roleUser"), "method") == 3)) {
                // line 33
                echo "                                <li><a ";
                $this->displayBlock('navAdmin', $context, $blocks);
                echo " href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">Administration</a></li>
                            ";
            }
            // line 35
            echo "                            <li><a ";
            $this->displayBlock('navDeco', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deco");
            echo "\">Déconnexion</a></li>
                        ";
        } else {
            // line 37
            echo "                            <li><a ";
            $this->displayBlock('navCnx', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnx");
            echo "\">Connexion</a></li>
                        ";
        }
        // line 39
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('[data-toggle=\"tooltip\"]').tooltip();
            })
        </script>
        ";
        // line 79
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>";
        
        $__internal_9d4bab0193acfadd759786f51877562af5a1ab93fe52451421d2f44965642cfe->leave($__internal_9d4bab0193acfadd759786f51877562af5a1ab93fe52451421d2f44965642cfe_prof);

        
        $__internal_f58e6ed18b7be38b6ae4c2da958d1d7d3fd043dbc1444fe9c2f5d47dc87fb186->leave($__internal_f58e6ed18b7be38b6ae4c2da958d1d7d3fd043dbc1444fe9c2f5d47dc87fb186_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06ac4a98f56a76d481e276c617106e66e5b984a0ec5db827a230a7b01a9088a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ac4a98f56a76d481e276c617106e66e5b984a0ec5db827a230a7b01a9088a6->enter($__internal_06ac4a98f56a76d481e276c617106e66e5b984a0ec5db827a230a7b01a9088a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3d414f75ed8adef442a4b6bd2909b48fbf78709053a4de964ef11c11e0627aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d414f75ed8adef442a4b6bd2909b48fbf78709053a4de964ef11c11e0627aa->enter($__internal_d3d414f75ed8adef442a4b6bd2909b48fbf78709053a4de964ef11c11e0627aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3d414f75ed8adef442a4b6bd2909b48fbf78709053a4de964ef11c11e0627aa->leave($__internal_d3d414f75ed8adef442a4b6bd2909b48fbf78709053a4de964ef11c11e0627aa_prof);

        
        $__internal_06ac4a98f56a76d481e276c617106e66e5b984a0ec5db827a230a7b01a9088a6->leave($__internal_06ac4a98f56a76d481e276c617106e66e5b984a0ec5db827a230a7b01a9088a6_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e925e47b82e44ad5642a4579ada285d45830053f0b3350e96e3d446afe83f447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e925e47b82e44ad5642a4579ada285d45830053f0b3350e96e3d446afe83f447->enter($__internal_e925e47b82e44ad5642a4579ada285d45830053f0b3350e96e3d446afe83f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f0838f009e0ce2849de6ce467ba0f4d2ccb9ea404f5518f08fbc674cdf8fa472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0838f009e0ce2849de6ce467ba0f4d2ccb9ea404f5518f08fbc674cdf8fa472->enter($__internal_f0838f009e0ce2849de6ce467ba0f4d2ccb9ea404f5518f08fbc674cdf8fa472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0838f009e0ce2849de6ce467ba0f4d2ccb9ea404f5518f08fbc674cdf8fa472->leave($__internal_f0838f009e0ce2849de6ce467ba0f4d2ccb9ea404f5518f08fbc674cdf8fa472_prof);

        
        $__internal_e925e47b82e44ad5642a4579ada285d45830053f0b3350e96e3d446afe83f447->leave($__internal_e925e47b82e44ad5642a4579ada285d45830053f0b3350e96e3d446afe83f447_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_2cebd2f564606ad70bddfb28f69cb016d48875b0095922c3779b00cf42fe7edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cebd2f564606ad70bddfb28f69cb016d48875b0095922c3779b00cf42fe7edd->enter($__internal_2cebd2f564606ad70bddfb28f69cb016d48875b0095922c3779b00cf42fe7edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_e1e6dd75ef69ed402a249b9acc53aefcf51aaa04966c922e7f6fdbf472649488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e6dd75ef69ed402a249b9acc53aefcf51aaa04966c922e7f6fdbf472649488->enter($__internal_e1e6dd75ef69ed402a249b9acc53aefcf51aaa04966c922e7f6fdbf472649488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_e1e6dd75ef69ed402a249b9acc53aefcf51aaa04966c922e7f6fdbf472649488->leave($__internal_e1e6dd75ef69ed402a249b9acc53aefcf51aaa04966c922e7f6fdbf472649488_prof);

        
        $__internal_2cebd2f564606ad70bddfb28f69cb016d48875b0095922c3779b00cf42fe7edd->leave($__internal_2cebd2f564606ad70bddfb28f69cb016d48875b0095922c3779b00cf42fe7edd_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_341bc079e772e5652c46c4d9b8203b392f15efc7f35febe6c586a0081b973992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341bc079e772e5652c46c4d9b8203b392f15efc7f35febe6c586a0081b973992->enter($__internal_341bc079e772e5652c46c4d9b8203b392f15efc7f35febe6c586a0081b973992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_50e0936a5ad2a832875bacfb3bbb727c6b11e20cd4437874f66a6f1ef87106fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e0936a5ad2a832875bacfb3bbb727c6b11e20cd4437874f66a6f1ef87106fd->enter($__internal_50e0936a5ad2a832875bacfb3bbb727c6b11e20cd4437874f66a6f1ef87106fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_50e0936a5ad2a832875bacfb3bbb727c6b11e20cd4437874f66a6f1ef87106fd->leave($__internal_50e0936a5ad2a832875bacfb3bbb727c6b11e20cd4437874f66a6f1ef87106fd_prof);

        
        $__internal_341bc079e772e5652c46c4d9b8203b392f15efc7f35febe6c586a0081b973992->leave($__internal_341bc079e772e5652c46c4d9b8203b392f15efc7f35febe6c586a0081b973992_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_5ed8b3c96a5671fbc08fbcb8c541c2dcc0d8cccc57aa9aeb23d26f621d631336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed8b3c96a5671fbc08fbcb8c541c2dcc0d8cccc57aa9aeb23d26f621d631336->enter($__internal_5ed8b3c96a5671fbc08fbcb8c541c2dcc0d8cccc57aa9aeb23d26f621d631336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_d5d318a88d47c90297764ec74e3159d9bff7cb7467604a9876d06bad10ebc682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d318a88d47c90297764ec74e3159d9bff7cb7467604a9876d06bad10ebc682->enter($__internal_d5d318a88d47c90297764ec74e3159d9bff7cb7467604a9876d06bad10ebc682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_d5d318a88d47c90297764ec74e3159d9bff7cb7467604a9876d06bad10ebc682->leave($__internal_d5d318a88d47c90297764ec74e3159d9bff7cb7467604a9876d06bad10ebc682_prof);

        
        $__internal_5ed8b3c96a5671fbc08fbcb8c541c2dcc0d8cccc57aa9aeb23d26f621d631336->leave($__internal_5ed8b3c96a5671fbc08fbcb8c541c2dcc0d8cccc57aa9aeb23d26f621d631336_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_b8c2bb59214067c1b260fae7316894c746c904a4402fd7e398b3ddea195c8602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c2bb59214067c1b260fae7316894c746c904a4402fd7e398b3ddea195c8602->enter($__internal_b8c2bb59214067c1b260fae7316894c746c904a4402fd7e398b3ddea195c8602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_33ff4e0562d855dc8fb3f9b446ffa87fea8bef5593a6c326eb1a4cbd3e62a50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ff4e0562d855dc8fb3f9b446ffa87fea8bef5593a6c326eb1a4cbd3e62a50b->enter($__internal_33ff4e0562d855dc8fb3f9b446ffa87fea8bef5593a6c326eb1a4cbd3e62a50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_33ff4e0562d855dc8fb3f9b446ffa87fea8bef5593a6c326eb1a4cbd3e62a50b->leave($__internal_33ff4e0562d855dc8fb3f9b446ffa87fea8bef5593a6c326eb1a4cbd3e62a50b_prof);

        
        $__internal_b8c2bb59214067c1b260fae7316894c746c904a4402fd7e398b3ddea195c8602->leave($__internal_b8c2bb59214067c1b260fae7316894c746c904a4402fd7e398b3ddea195c8602_prof);

    }

    // line 33
    public function block_navAdmin($context, array $blocks = array())
    {
        $__internal_bf0f93050ef95deb94cc4032b40d3acb1138f67ce10703569331b8f129ffa09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0f93050ef95deb94cc4032b40d3acb1138f67ce10703569331b8f129ffa09b->enter($__internal_bf0f93050ef95deb94cc4032b40d3acb1138f67ce10703569331b8f129ffa09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        $__internal_84285421db5cea6f7065627a8f928ebc28d1f4c60efd0f02c9da9e8f76a97888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84285421db5cea6f7065627a8f928ebc28d1f4c60efd0f02c9da9e8f76a97888->enter($__internal_84285421db5cea6f7065627a8f928ebc28d1f4c60efd0f02c9da9e8f76a97888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        
        $__internal_84285421db5cea6f7065627a8f928ebc28d1f4c60efd0f02c9da9e8f76a97888->leave($__internal_84285421db5cea6f7065627a8f928ebc28d1f4c60efd0f02c9da9e8f76a97888_prof);

        
        $__internal_bf0f93050ef95deb94cc4032b40d3acb1138f67ce10703569331b8f129ffa09b->leave($__internal_bf0f93050ef95deb94cc4032b40d3acb1138f67ce10703569331b8f129ffa09b_prof);

    }

    // line 35
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_49add0a231999812b1d9746cde801ba65f798405c37f09130c042c374595d147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49add0a231999812b1d9746cde801ba65f798405c37f09130c042c374595d147->enter($__internal_49add0a231999812b1d9746cde801ba65f798405c37f09130c042c374595d147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_fcc3b16bd4f60572326824440ef27daabc40936a28ca3eabf27a2be92d594962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc3b16bd4f60572326824440ef27daabc40936a28ca3eabf27a2be92d594962->enter($__internal_fcc3b16bd4f60572326824440ef27daabc40936a28ca3eabf27a2be92d594962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_fcc3b16bd4f60572326824440ef27daabc40936a28ca3eabf27a2be92d594962->leave($__internal_fcc3b16bd4f60572326824440ef27daabc40936a28ca3eabf27a2be92d594962_prof);

        
        $__internal_49add0a231999812b1d9746cde801ba65f798405c37f09130c042c374595d147->leave($__internal_49add0a231999812b1d9746cde801ba65f798405c37f09130c042c374595d147_prof);

    }

    // line 37
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_21a1488ac95b63d88c8ef51f572bb0ed913e0c9dff7ab329d152017a4a6fe8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a1488ac95b63d88c8ef51f572bb0ed913e0c9dff7ab329d152017a4a6fe8d3->enter($__internal_21a1488ac95b63d88c8ef51f572bb0ed913e0c9dff7ab329d152017a4a6fe8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_dfd745a417c63b8b53ad0fa4c1044be12f1351000bf7abc91b0687ab8186f4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd745a417c63b8b53ad0fa4c1044be12f1351000bf7abc91b0687ab8186f4f5->enter($__internal_dfd745a417c63b8b53ad0fa4c1044be12f1351000bf7abc91b0687ab8186f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_dfd745a417c63b8b53ad0fa4c1044be12f1351000bf7abc91b0687ab8186f4f5->leave($__internal_dfd745a417c63b8b53ad0fa4c1044be12f1351000bf7abc91b0687ab8186f4f5_prof);

        
        $__internal_21a1488ac95b63d88c8ef51f572bb0ed913e0c9dff7ab329d152017a4a6fe8d3->leave($__internal_21a1488ac95b63d88c8ef51f572bb0ed913e0c9dff7ab329d152017a4a6fe8d3_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a250f1677809d905374e44a0faa619235de6918f7f07ec4c9c596bee513190f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a250f1677809d905374e44a0faa619235de6918f7f07ec4c9c596bee513190f->enter($__internal_9a250f1677809d905374e44a0faa619235de6918f7f07ec4c9c596bee513190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b259253e2b3ecb7e8d6f2f8daa21d8e21814306e04e12ec86ce5f4584aa1f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b259253e2b3ecb7e8d6f2f8daa21d8e21814306e04e12ec86ce5f4584aa1f6b->enter($__internal_2b259253e2b3ecb7e8d6f2f8daa21d8e21814306e04e12ec86ce5f4584aa1f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b259253e2b3ecb7e8d6f2f8daa21d8e21814306e04e12ec86ce5f4584aa1f6b->leave($__internal_2b259253e2b3ecb7e8d6f2f8daa21d8e21814306e04e12ec86ce5f4584aa1f6b_prof);

        
        $__internal_9a250f1677809d905374e44a0faa619235de6918f7f07ec4c9c596bee513190f->leave($__internal_9a250f1677809d905374e44a0faa619235de6918f7f07ec4c9c596bee513190f_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3276ae873caae4dd7f346b57fb98a231f2f68f068abad798174d235256885bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3276ae873caae4dd7f346b57fb98a231f2f68f068abad798174d235256885bb->enter($__internal_e3276ae873caae4dd7f346b57fb98a231f2f68f068abad798174d235256885bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_700fc3425fbb32929c7b180c5d6ea49f4c6f0d2d5aae6c1951622d931435df43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700fc3425fbb32929c7b180c5d6ea49f4c6f0d2d5aae6c1951622d931435df43->enter($__internal_700fc3425fbb32929c7b180c5d6ea49f4c6f0d2d5aae6c1951622d931435df43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_700fc3425fbb32929c7b180c5d6ea49f4c6f0d2d5aae6c1951622d931435df43->leave($__internal_700fc3425fbb32929c7b180c5d6ea49f4c6f0d2d5aae6c1951622d931435df43_prof);

        
        $__internal_e3276ae873caae4dd7f346b57fb98a231f2f68f068abad798174d235256885bb->leave($__internal_e3276ae873caae4dd7f346b57fb98a231f2f68f068abad798174d235256885bb_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 79,  326 => 44,  309 => 37,  292 => 35,  275 => 33,  258 => 31,  241 => 29,  224 => 28,  207 => 27,  190 => 15,  172 => 5,  157 => 82,  153 => 80,  150 => 79,  143 => 45,  141 => 44,  134 => 39,  126 => 37,  118 => 35,  110 => 33,  108 => 32,  101 => 31,  99 => 30,  93 => 29,  87 => 28,  81 => 27,  72 => 23,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/7a06b04bbf.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script src=\"https://use.fontawesome.com/a3669a9617.js\"></script>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"red\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{path('Accueil')}}\"><img class=\"logo\" src=\"{{ asset('img/logo-header.png') }}\" alt=\"Logo Exia\"/></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a {% block navAccueil %}{% endblock %} href={{path('Accueil')}}>Accueil</a></li>
                        <li><a {% block navActivites %}{% endblock %} href=\"{{path('listAct')}}\">Activités</a></li>
                        <li><a {% block navBoutique %}{% endblock %} href=\"{{path('boutique')}}\">Boutique</a></li>
                        {% if app.session.get('idUser') %}
                            <li><a {% block navProfil %}{% endblock %} href=\"{{path('profil', {'id':app.session.get('idUser')})}}\">Profil</a></li>
                            {% if app.session.get('roleUser') == 3 %}
                                <li><a {% block navAdmin %}{% endblock %} href=\"{{path('admin')}}\">Administration</a></li>
                            {% endif %}
                            <li><a {% block navDeco %}{% endblock %} href=\"{{path('deco')}}\">Déconnexion</a></li>
                        {% else %}
                            <li><a {% block navCnx %}{% endblock %} href=\"{{path('cnx')}}\">Connexion</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        {% block body %}{% endblock %}
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('[data-toggle=\"tooltip\"]').tooltip();
            })
        </script>
        {# <script type=\"text/javascript\">
            \$(function() {

              // We can attach the `fileselect` event to all file inputs on the page
              \$(document).on('change', ':file', function() {
                var input = \$(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\\\/g, '/').replace(/.*\\//, '');
                input.trigger('fileselect', [numFiles, label]);
              });

              // We can watch for our custom `fileselect` event like this
              \$(document).ready( function() {
                  \$(':file').on('fileselect', function(event, numFiles, label) {

                      var input = \$(this).parents('.input-group').find(':text'),
                          log = numFiles > 1 ? numFiles + ' files selected' : label;

                      if( input.length ) {
                          input.val(log);
                      } else {
                          if( log ) alert(log);
                      }

                  });
              });
              
            });
        </script> #}
        {% block javascripts %}{% endblock %}
    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"{{asset('mention.html.twig')}}\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>", "MainBundle::base.html.twig", "C:\\wamp64\\www\\exia\\BDExia\\src\\MainBundle/Resources/views/base.html.twig");
    }
}
