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
        $__internal_4bdb78032af1d34fecea5b1d1f600dd94eb57312bff862edb6d6628f9aa3f2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdb78032af1d34fecea5b1d1f600dd94eb57312bff862edb6d6628f9aa3f2c1->enter($__internal_4bdb78032af1d34fecea5b1d1f600dd94eb57312bff862edb6d6628f9aa3f2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_2b6380a0ed1d827a54d622d87630bccc69d90ed02dc08bf7f07d5d294ce56bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6380a0ed1d827a54d622d87630bccc69d90ed02dc08bf7f07d5d294ce56bd0->enter($__internal_2b6380a0ed1d827a54d622d87630bccc69d90ed02dc08bf7f07d5d294ce56bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
        
        $__internal_4bdb78032af1d34fecea5b1d1f600dd94eb57312bff862edb6d6628f9aa3f2c1->leave($__internal_4bdb78032af1d34fecea5b1d1f600dd94eb57312bff862edb6d6628f9aa3f2c1_prof);

        
        $__internal_2b6380a0ed1d827a54d622d87630bccc69d90ed02dc08bf7f07d5d294ce56bd0->leave($__internal_2b6380a0ed1d827a54d622d87630bccc69d90ed02dc08bf7f07d5d294ce56bd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16f3136a13b3ccde4770c3275076a500fdaa2d17c8d04b56172bd49328e33fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f3136a13b3ccde4770c3275076a500fdaa2d17c8d04b56172bd49328e33fc2->enter($__internal_16f3136a13b3ccde4770c3275076a500fdaa2d17c8d04b56172bd49328e33fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_317b7afb9cd94380a3b5eb46bc9598371ecac1262106ac56d5ef91ea097e67a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317b7afb9cd94380a3b5eb46bc9598371ecac1262106ac56d5ef91ea097e67a9->enter($__internal_317b7afb9cd94380a3b5eb46bc9598371ecac1262106ac56d5ef91ea097e67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_317b7afb9cd94380a3b5eb46bc9598371ecac1262106ac56d5ef91ea097e67a9->leave($__internal_317b7afb9cd94380a3b5eb46bc9598371ecac1262106ac56d5ef91ea097e67a9_prof);

        
        $__internal_16f3136a13b3ccde4770c3275076a500fdaa2d17c8d04b56172bd49328e33fc2->leave($__internal_16f3136a13b3ccde4770c3275076a500fdaa2d17c8d04b56172bd49328e33fc2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e043d081bef500343adf38a358795bb7b7b744c50f155b5b9bf6b32a569c9f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e043d081bef500343adf38a358795bb7b7b744c50f155b5b9bf6b32a569c9f63->enter($__internal_e043d081bef500343adf38a358795bb7b7b744c50f155b5b9bf6b32a569c9f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3616fbae854b0906e219ca9dd0d7e1e2525435ee7595705b226a3cfb2b5aa438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3616fbae854b0906e219ca9dd0d7e1e2525435ee7595705b226a3cfb2b5aa438->enter($__internal_3616fbae854b0906e219ca9dd0d7e1e2525435ee7595705b226a3cfb2b5aa438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3616fbae854b0906e219ca9dd0d7e1e2525435ee7595705b226a3cfb2b5aa438->leave($__internal_3616fbae854b0906e219ca9dd0d7e1e2525435ee7595705b226a3cfb2b5aa438_prof);

        
        $__internal_e043d081bef500343adf38a358795bb7b7b744c50f155b5b9bf6b32a569c9f63->leave($__internal_e043d081bef500343adf38a358795bb7b7b744c50f155b5b9bf6b32a569c9f63_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_2b7e7f4c21ba2a8c384e8b617a2c6fb23b0052001ce097aabffaef8ba5b5adc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7e7f4c21ba2a8c384e8b617a2c6fb23b0052001ce097aabffaef8ba5b5adc4->enter($__internal_2b7e7f4c21ba2a8c384e8b617a2c6fb23b0052001ce097aabffaef8ba5b5adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_e67c36b88f9ea3c610903f374829ef1b3f3af1a4b05430d27db7e4ee8947d615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67c36b88f9ea3c610903f374829ef1b3f3af1a4b05430d27db7e4ee8947d615->enter($__internal_e67c36b88f9ea3c610903f374829ef1b3f3af1a4b05430d27db7e4ee8947d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_e67c36b88f9ea3c610903f374829ef1b3f3af1a4b05430d27db7e4ee8947d615->leave($__internal_e67c36b88f9ea3c610903f374829ef1b3f3af1a4b05430d27db7e4ee8947d615_prof);

        
        $__internal_2b7e7f4c21ba2a8c384e8b617a2c6fb23b0052001ce097aabffaef8ba5b5adc4->leave($__internal_2b7e7f4c21ba2a8c384e8b617a2c6fb23b0052001ce097aabffaef8ba5b5adc4_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_39c54420ccc25ab78310593a323843f1acfdeee87b4f99400128ec8871fcb47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c54420ccc25ab78310593a323843f1acfdeee87b4f99400128ec8871fcb47a->enter($__internal_39c54420ccc25ab78310593a323843f1acfdeee87b4f99400128ec8871fcb47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_174f78f58d6746acc23c1cf4135c36f595e3e2aa012d47991f0c7e8b5f44105e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174f78f58d6746acc23c1cf4135c36f595e3e2aa012d47991f0c7e8b5f44105e->enter($__internal_174f78f58d6746acc23c1cf4135c36f595e3e2aa012d47991f0c7e8b5f44105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_174f78f58d6746acc23c1cf4135c36f595e3e2aa012d47991f0c7e8b5f44105e->leave($__internal_174f78f58d6746acc23c1cf4135c36f595e3e2aa012d47991f0c7e8b5f44105e_prof);

        
        $__internal_39c54420ccc25ab78310593a323843f1acfdeee87b4f99400128ec8871fcb47a->leave($__internal_39c54420ccc25ab78310593a323843f1acfdeee87b4f99400128ec8871fcb47a_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_5ff2ab74bcf7abd51ce08e131bddde263a3b5604f1918c157b78d47c37f858a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff2ab74bcf7abd51ce08e131bddde263a3b5604f1918c157b78d47c37f858a0->enter($__internal_5ff2ab74bcf7abd51ce08e131bddde263a3b5604f1918c157b78d47c37f858a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_bb09b31d8f4debb30643230ee77b337d3c63492b20ca20c2c925ff778ee570d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb09b31d8f4debb30643230ee77b337d3c63492b20ca20c2c925ff778ee570d4->enter($__internal_bb09b31d8f4debb30643230ee77b337d3c63492b20ca20c2c925ff778ee570d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_bb09b31d8f4debb30643230ee77b337d3c63492b20ca20c2c925ff778ee570d4->leave($__internal_bb09b31d8f4debb30643230ee77b337d3c63492b20ca20c2c925ff778ee570d4_prof);

        
        $__internal_5ff2ab74bcf7abd51ce08e131bddde263a3b5604f1918c157b78d47c37f858a0->leave($__internal_5ff2ab74bcf7abd51ce08e131bddde263a3b5604f1918c157b78d47c37f858a0_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_5b499d876aec1d7119da92179270bf89cb1e82a7f631f4b3886fb2265d69f319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b499d876aec1d7119da92179270bf89cb1e82a7f631f4b3886fb2265d69f319->enter($__internal_5b499d876aec1d7119da92179270bf89cb1e82a7f631f4b3886fb2265d69f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_76314fac9126ec320eb1a8bbb35a8e7724a5fadad19778496015ed370fc5f61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76314fac9126ec320eb1a8bbb35a8e7724a5fadad19778496015ed370fc5f61f->enter($__internal_76314fac9126ec320eb1a8bbb35a8e7724a5fadad19778496015ed370fc5f61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_76314fac9126ec320eb1a8bbb35a8e7724a5fadad19778496015ed370fc5f61f->leave($__internal_76314fac9126ec320eb1a8bbb35a8e7724a5fadad19778496015ed370fc5f61f_prof);

        
        $__internal_5b499d876aec1d7119da92179270bf89cb1e82a7f631f4b3886fb2265d69f319->leave($__internal_5b499d876aec1d7119da92179270bf89cb1e82a7f631f4b3886fb2265d69f319_prof);

    }

    // line 33
    public function block_navAdmin($context, array $blocks = array())
    {
        $__internal_4b52e827f9db631a01c9742a4a52ce5c9f4899eeb9a0ca079d87687e20daab13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b52e827f9db631a01c9742a4a52ce5c9f4899eeb9a0ca079d87687e20daab13->enter($__internal_4b52e827f9db631a01c9742a4a52ce5c9f4899eeb9a0ca079d87687e20daab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        $__internal_31955ec34dcd9e60821048e76b5edbc6fa6c1d0f1320a56f920e53de29a458d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31955ec34dcd9e60821048e76b5edbc6fa6c1d0f1320a56f920e53de29a458d6->enter($__internal_31955ec34dcd9e60821048e76b5edbc6fa6c1d0f1320a56f920e53de29a458d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        
        $__internal_31955ec34dcd9e60821048e76b5edbc6fa6c1d0f1320a56f920e53de29a458d6->leave($__internal_31955ec34dcd9e60821048e76b5edbc6fa6c1d0f1320a56f920e53de29a458d6_prof);

        
        $__internal_4b52e827f9db631a01c9742a4a52ce5c9f4899eeb9a0ca079d87687e20daab13->leave($__internal_4b52e827f9db631a01c9742a4a52ce5c9f4899eeb9a0ca079d87687e20daab13_prof);

    }

    // line 35
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_d9aa2110b87a17d5c6e88292f4e9a7d9b187d975999988e71d62a8d78d825411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9aa2110b87a17d5c6e88292f4e9a7d9b187d975999988e71d62a8d78d825411->enter($__internal_d9aa2110b87a17d5c6e88292f4e9a7d9b187d975999988e71d62a8d78d825411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_2beeb512d1cfd5e90632719059349a552445bc69790ae0247299cc80201a728a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2beeb512d1cfd5e90632719059349a552445bc69790ae0247299cc80201a728a->enter($__internal_2beeb512d1cfd5e90632719059349a552445bc69790ae0247299cc80201a728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_2beeb512d1cfd5e90632719059349a552445bc69790ae0247299cc80201a728a->leave($__internal_2beeb512d1cfd5e90632719059349a552445bc69790ae0247299cc80201a728a_prof);

        
        $__internal_d9aa2110b87a17d5c6e88292f4e9a7d9b187d975999988e71d62a8d78d825411->leave($__internal_d9aa2110b87a17d5c6e88292f4e9a7d9b187d975999988e71d62a8d78d825411_prof);

    }

    // line 37
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_d1b723111637647eefb24c41bc0de6e08d02c1e337d767f6a3e208869db49561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b723111637647eefb24c41bc0de6e08d02c1e337d767f6a3e208869db49561->enter($__internal_d1b723111637647eefb24c41bc0de6e08d02c1e337d767f6a3e208869db49561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_271755167dfb29408d30e46e28da050f6a7b50dc75de9d7cc49ce3744e130718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271755167dfb29408d30e46e28da050f6a7b50dc75de9d7cc49ce3744e130718->enter($__internal_271755167dfb29408d30e46e28da050f6a7b50dc75de9d7cc49ce3744e130718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_271755167dfb29408d30e46e28da050f6a7b50dc75de9d7cc49ce3744e130718->leave($__internal_271755167dfb29408d30e46e28da050f6a7b50dc75de9d7cc49ce3744e130718_prof);

        
        $__internal_d1b723111637647eefb24c41bc0de6e08d02c1e337d767f6a3e208869db49561->leave($__internal_d1b723111637647eefb24c41bc0de6e08d02c1e337d767f6a3e208869db49561_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e676b7572a1beff454f8f29daf8915cd177aa6bdc687a81ea5f00f68f80c5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e676b7572a1beff454f8f29daf8915cd177aa6bdc687a81ea5f00f68f80c5d8->enter($__internal_3e676b7572a1beff454f8f29daf8915cd177aa6bdc687a81ea5f00f68f80c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3221310709765fea10e0eede81df745a7dce6282c74b2cb682b43c35e57eee17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3221310709765fea10e0eede81df745a7dce6282c74b2cb682b43c35e57eee17->enter($__internal_3221310709765fea10e0eede81df745a7dce6282c74b2cb682b43c35e57eee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3221310709765fea10e0eede81df745a7dce6282c74b2cb682b43c35e57eee17->leave($__internal_3221310709765fea10e0eede81df745a7dce6282c74b2cb682b43c35e57eee17_prof);

        
        $__internal_3e676b7572a1beff454f8f29daf8915cd177aa6bdc687a81ea5f00f68f80c5d8->leave($__internal_3e676b7572a1beff454f8f29daf8915cd177aa6bdc687a81ea5f00f68f80c5d8_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a22f6b6895a232b80ef541ff89b56cfbaf5d2ec13baf719912098ec91ce1f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a22f6b6895a232b80ef541ff89b56cfbaf5d2ec13baf719912098ec91ce1f4a->enter($__internal_9a22f6b6895a232b80ef541ff89b56cfbaf5d2ec13baf719912098ec91ce1f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b4b78c08ab147196e44ff71e6c75044730cb5ea1e5a99d8a6721bcd4f217322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4b78c08ab147196e44ff71e6c75044730cb5ea1e5a99d8a6721bcd4f217322->enter($__internal_9b4b78c08ab147196e44ff71e6c75044730cb5ea1e5a99d8a6721bcd4f217322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b4b78c08ab147196e44ff71e6c75044730cb5ea1e5a99d8a6721bcd4f217322->leave($__internal_9b4b78c08ab147196e44ff71e6c75044730cb5ea1e5a99d8a6721bcd4f217322_prof);

        
        $__internal_9a22f6b6895a232b80ef541ff89b56cfbaf5d2ec13baf719912098ec91ce1f4a->leave($__internal_9a22f6b6895a232b80ef541ff89b56cfbaf5d2ec13baf719912098ec91ce1f4a_prof);

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
</html>", "MainBundle::base.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/base.html.twig");
    }
}
