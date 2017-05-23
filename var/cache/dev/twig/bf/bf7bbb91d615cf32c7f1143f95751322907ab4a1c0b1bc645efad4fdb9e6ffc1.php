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
            'navDeco' => array($this, 'block_navDeco'),
            'navCnx' => array($this, 'block_navCnx'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b17e0d137821abffe47ccd070e28b96b8aa6eeb631a6dfc731190fab8a50543c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17e0d137821abffe47ccd070e28b96b8aa6eeb631a6dfc731190fab8a50543c->enter($__internal_b17e0d137821abffe47ccd070e28b96b8aa6eeb631a6dfc731190fab8a50543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_3b7378569101587ed902ee05bf2cace53490f5b8ab2855f2e93fd0c417376178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7378569101587ed902ee05bf2cace53490f5b8ab2855f2e93fd0c417376178->enter($__internal_3b7378569101587ed902ee05bf2cace53490f5b8ab2855f2e93fd0c417376178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"red\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Accueil");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-header.png"), "html", null, true);
        echo "\" alt=\"Logo Exia\"/></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a ";
        // line 25
        $this->displayBlock('navAccueil', $context, $blocks);
        echo " href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Accueil");
        echo ">Accueil</a></li>
                        <li><a ";
        // line 26
        $this->displayBlock('navActivites', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAct");
        echo "\">Activités</a></li>
                        <li><a ";
        // line 27
        $this->displayBlock('navBoutique', $context, $blocks);
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutique");
        echo "\">Boutique</a></li>
                        ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method")) {
            // line 29
            echo "                            <li><a ";
            $this->displayBlock('navProfil', $context, $blocks);
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))), "html", null, true);
            echo "\">Profil</a></li>
                            <li><a ";
            // line 30
            $this->displayBlock('navDeco', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deco");
            echo "\">Déconnexion</a></li>
                        ";
        } else {
            // line 32
            echo "                            <li><a ";
            $this->displayBlock('navCnx', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnx");
            echo "\">Connexion</a></li>
                        ";
        }
        // line 34
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>
";
        
        $__internal_b17e0d137821abffe47ccd070e28b96b8aa6eeb631a6dfc731190fab8a50543c->leave($__internal_b17e0d137821abffe47ccd070e28b96b8aa6eeb631a6dfc731190fab8a50543c_prof);

        
        $__internal_3b7378569101587ed902ee05bf2cace53490f5b8ab2855f2e93fd0c417376178->leave($__internal_3b7378569101587ed902ee05bf2cace53490f5b8ab2855f2e93fd0c417376178_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fe87cc3bdbda159bad59a53b4c8a40ebbd583bea2d39b86c1d39923d451827e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe87cc3bdbda159bad59a53b4c8a40ebbd583bea2d39b86c1d39923d451827e->enter($__internal_4fe87cc3bdbda159bad59a53b4c8a40ebbd583bea2d39b86c1d39923d451827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b198bf36bbb4efd661832690166d34489cbef1beb9012039ff569d036aad7fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b198bf36bbb4efd661832690166d34489cbef1beb9012039ff569d036aad7fdd->enter($__internal_b198bf36bbb4efd661832690166d34489cbef1beb9012039ff569d036aad7fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b198bf36bbb4efd661832690166d34489cbef1beb9012039ff569d036aad7fdd->leave($__internal_b198bf36bbb4efd661832690166d34489cbef1beb9012039ff569d036aad7fdd_prof);

        
        $__internal_4fe87cc3bdbda159bad59a53b4c8a40ebbd583bea2d39b86c1d39923d451827e->leave($__internal_4fe87cc3bdbda159bad59a53b4c8a40ebbd583bea2d39b86c1d39923d451827e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac5951564eef45c2917669f75c8a91519f2f113c493ff9242012914abd48ef2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5951564eef45c2917669f75c8a91519f2f113c493ff9242012914abd48ef2f->enter($__internal_ac5951564eef45c2917669f75c8a91519f2f113c493ff9242012914abd48ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e79d4974c43e441a9a33edb1ed1c14f5119a8aff165de8ea009ad76a672c0878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79d4974c43e441a9a33edb1ed1c14f5119a8aff165de8ea009ad76a672c0878->enter($__internal_e79d4974c43e441a9a33edb1ed1c14f5119a8aff165de8ea009ad76a672c0878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e79d4974c43e441a9a33edb1ed1c14f5119a8aff165de8ea009ad76a672c0878->leave($__internal_e79d4974c43e441a9a33edb1ed1c14f5119a8aff165de8ea009ad76a672c0878_prof);

        
        $__internal_ac5951564eef45c2917669f75c8a91519f2f113c493ff9242012914abd48ef2f->leave($__internal_ac5951564eef45c2917669f75c8a91519f2f113c493ff9242012914abd48ef2f_prof);

    }

    // line 25
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_d0a75f992b680402d79475c08320abe9e812db0e9691d5f1b8e00435c18212e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a75f992b680402d79475c08320abe9e812db0e9691d5f1b8e00435c18212e2->enter($__internal_d0a75f992b680402d79475c08320abe9e812db0e9691d5f1b8e00435c18212e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_ec7705cd1a51576dab0c797ca61d3783e919b5d00a1118b53ba8576ff96e9fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7705cd1a51576dab0c797ca61d3783e919b5d00a1118b53ba8576ff96e9fb6->enter($__internal_ec7705cd1a51576dab0c797ca61d3783e919b5d00a1118b53ba8576ff96e9fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_ec7705cd1a51576dab0c797ca61d3783e919b5d00a1118b53ba8576ff96e9fb6->leave($__internal_ec7705cd1a51576dab0c797ca61d3783e919b5d00a1118b53ba8576ff96e9fb6_prof);

        
        $__internal_d0a75f992b680402d79475c08320abe9e812db0e9691d5f1b8e00435c18212e2->leave($__internal_d0a75f992b680402d79475c08320abe9e812db0e9691d5f1b8e00435c18212e2_prof);

    }

    // line 26
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_918041aed20b0096e9b33e513629ee8428948a7365d64256790c6a6842b53349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918041aed20b0096e9b33e513629ee8428948a7365d64256790c6a6842b53349->enter($__internal_918041aed20b0096e9b33e513629ee8428948a7365d64256790c6a6842b53349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_448430337f9fca8e25f8ab7885e2aa7fb62e26a25b7c0d32fd9c54c7bc3df310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448430337f9fca8e25f8ab7885e2aa7fb62e26a25b7c0d32fd9c54c7bc3df310->enter($__internal_448430337f9fca8e25f8ab7885e2aa7fb62e26a25b7c0d32fd9c54c7bc3df310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_448430337f9fca8e25f8ab7885e2aa7fb62e26a25b7c0d32fd9c54c7bc3df310->leave($__internal_448430337f9fca8e25f8ab7885e2aa7fb62e26a25b7c0d32fd9c54c7bc3df310_prof);

        
        $__internal_918041aed20b0096e9b33e513629ee8428948a7365d64256790c6a6842b53349->leave($__internal_918041aed20b0096e9b33e513629ee8428948a7365d64256790c6a6842b53349_prof);

    }

    // line 27
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_324fff180f8993344d4b56979375c2bef942d983849916d18ef9925b3e8d97ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324fff180f8993344d4b56979375c2bef942d983849916d18ef9925b3e8d97ea->enter($__internal_324fff180f8993344d4b56979375c2bef942d983849916d18ef9925b3e8d97ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_45ad042bfc32353b993eccfdbee08457b1b1fbf3bb907eb8d1b3721013dd1143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ad042bfc32353b993eccfdbee08457b1b1fbf3bb907eb8d1b3721013dd1143->enter($__internal_45ad042bfc32353b993eccfdbee08457b1b1fbf3bb907eb8d1b3721013dd1143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_45ad042bfc32353b993eccfdbee08457b1b1fbf3bb907eb8d1b3721013dd1143->leave($__internal_45ad042bfc32353b993eccfdbee08457b1b1fbf3bb907eb8d1b3721013dd1143_prof);

        
        $__internal_324fff180f8993344d4b56979375c2bef942d983849916d18ef9925b3e8d97ea->leave($__internal_324fff180f8993344d4b56979375c2bef942d983849916d18ef9925b3e8d97ea_prof);

    }

    // line 29
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_5e3c46a52848caf7bd0f14e030ce201bc1de809a18eb8fdc3dc2014e2d0b80eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3c46a52848caf7bd0f14e030ce201bc1de809a18eb8fdc3dc2014e2d0b80eb->enter($__internal_5e3c46a52848caf7bd0f14e030ce201bc1de809a18eb8fdc3dc2014e2d0b80eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_44fc17111c8055e0305434ab5d83a29dea5bd93a2c988d00f06f6dce8ffbc78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc17111c8055e0305434ab5d83a29dea5bd93a2c988d00f06f6dce8ffbc78a->enter($__internal_44fc17111c8055e0305434ab5d83a29dea5bd93a2c988d00f06f6dce8ffbc78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_44fc17111c8055e0305434ab5d83a29dea5bd93a2c988d00f06f6dce8ffbc78a->leave($__internal_44fc17111c8055e0305434ab5d83a29dea5bd93a2c988d00f06f6dce8ffbc78a_prof);

        
        $__internal_5e3c46a52848caf7bd0f14e030ce201bc1de809a18eb8fdc3dc2014e2d0b80eb->leave($__internal_5e3c46a52848caf7bd0f14e030ce201bc1de809a18eb8fdc3dc2014e2d0b80eb_prof);

    }

    // line 30
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_6f31a9481bb7182460f343bf9f75693fb49305dc04760136f23c2150a11fd8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f31a9481bb7182460f343bf9f75693fb49305dc04760136f23c2150a11fd8a3->enter($__internal_6f31a9481bb7182460f343bf9f75693fb49305dc04760136f23c2150a11fd8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_b14dcb2d52e792f5e16ad85c347594b1d98fbf07518503afac3d31ed48f3aeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14dcb2d52e792f5e16ad85c347594b1d98fbf07518503afac3d31ed48f3aeac->enter($__internal_b14dcb2d52e792f5e16ad85c347594b1d98fbf07518503afac3d31ed48f3aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_b14dcb2d52e792f5e16ad85c347594b1d98fbf07518503afac3d31ed48f3aeac->leave($__internal_b14dcb2d52e792f5e16ad85c347594b1d98fbf07518503afac3d31ed48f3aeac_prof);

        
        $__internal_6f31a9481bb7182460f343bf9f75693fb49305dc04760136f23c2150a11fd8a3->leave($__internal_6f31a9481bb7182460f343bf9f75693fb49305dc04760136f23c2150a11fd8a3_prof);

    }

    // line 32
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_487138c92a4cf00cb72db58bc8468c8305b98f6f3d69753dc6bbcfb7e0fac53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487138c92a4cf00cb72db58bc8468c8305b98f6f3d69753dc6bbcfb7e0fac53d->enter($__internal_487138c92a4cf00cb72db58bc8468c8305b98f6f3d69753dc6bbcfb7e0fac53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_0fdf8e3312a0de16dd275088656fbb32bc2995a6a6300e95dc9eb117d4b0f946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdf8e3312a0de16dd275088656fbb32bc2995a6a6300e95dc9eb117d4b0f946->enter($__internal_0fdf8e3312a0de16dd275088656fbb32bc2995a6a6300e95dc9eb117d4b0f946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_0fdf8e3312a0de16dd275088656fbb32bc2995a6a6300e95dc9eb117d4b0f946->leave($__internal_0fdf8e3312a0de16dd275088656fbb32bc2995a6a6300e95dc9eb117d4b0f946_prof);

        
        $__internal_487138c92a4cf00cb72db58bc8468c8305b98f6f3d69753dc6bbcfb7e0fac53d->leave($__internal_487138c92a4cf00cb72db58bc8468c8305b98f6f3d69753dc6bbcfb7e0fac53d_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_93e9db6192c9b293e0d04c25b1527b9bfdb4a008fe1494f6be2f8b02197571ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e9db6192c9b293e0d04c25b1527b9bfdb4a008fe1494f6be2f8b02197571ac->enter($__internal_93e9db6192c9b293e0d04c25b1527b9bfdb4a008fe1494f6be2f8b02197571ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5b6fce97624c3dd79fd5435754e77ae1de8917fe814073d421d475b25249bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b6fce97624c3dd79fd5435754e77ae1de8917fe814073d421d475b25249bb5->enter($__internal_a5b6fce97624c3dd79fd5435754e77ae1de8917fe814073d421d475b25249bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5b6fce97624c3dd79fd5435754e77ae1de8917fe814073d421d475b25249bb5->leave($__internal_a5b6fce97624c3dd79fd5435754e77ae1de8917fe814073d421d475b25249bb5_prof);

        
        $__internal_93e9db6192c9b293e0d04c25b1527b9bfdb4a008fe1494f6be2f8b02197571ac->leave($__internal_93e9db6192c9b293e0d04c25b1527b9bfdb4a008fe1494f6be2f8b02197571ac_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6425139ea6c722e59b3d8b0de46dda0164e9e3c5ac47e50201d926a7a311f95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6425139ea6c722e59b3d8b0de46dda0164e9e3c5ac47e50201d926a7a311f95e->enter($__internal_6425139ea6c722e59b3d8b0de46dda0164e9e3c5ac47e50201d926a7a311f95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b670f203306690c5027f90ceacbb74435551200991200d9571d8c08d65f73b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b670f203306690c5027f90ceacbb74435551200991200d9571d8c08d65f73b9->enter($__internal_7b670f203306690c5027f90ceacbb74435551200991200d9571d8c08d65f73b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7b670f203306690c5027f90ceacbb74435551200991200d9571d8c08d65f73b9->leave($__internal_7b670f203306690c5027f90ceacbb74435551200991200d9571d8c08d65f73b9_prof);

        
        $__internal_6425139ea6c722e59b3d8b0de46dda0164e9e3c5ac47e50201d926a7a311f95e->leave($__internal_6425139ea6c722e59b3d8b0de46dda0164e9e3c5ac47e50201d926a7a311f95e_prof);

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
        return array (  306 => 40,  289 => 39,  272 => 32,  255 => 30,  238 => 29,  221 => 27,  204 => 26,  187 => 25,  170 => 13,  152 => 5,  136 => 43,  132 => 41,  129 => 40,  127 => 39,  120 => 34,  112 => 32,  105 => 30,  98 => 29,  96 => 28,  90 => 27,  84 => 26,  78 => 25,  69 => 21,  60 => 14,  58 => 13,  51 => 9,  47 => 8,  41 => 5,  35 => 1,);
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
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
        {% block javascripts %}{% endblock %}
    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"{{asset('mention.html.twig')}}\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>
", "MainBundle::base.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/base.html.twig");
    }
}
