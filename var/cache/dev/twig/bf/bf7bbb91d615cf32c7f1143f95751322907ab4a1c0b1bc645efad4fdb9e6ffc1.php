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
        $__internal_079b995f76a8a2fee5c4dc5c6ba64706dbd58f365a23a589a923d6286454c613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079b995f76a8a2fee5c4dc5c6ba64706dbd58f365a23a589a923d6286454c613->enter($__internal_079b995f76a8a2fee5c4dc5c6ba64706dbd58f365a23a589a923d6286454c613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_6fad4ae0bc351d7ed1f8dac288bb64ef12922a10e270ebb9a24ed670cb2d99d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fad4ae0bc351d7ed1f8dac288bb64ef12922a10e270ebb9a24ed670cb2d99d6->enter($__internal_6fad4ae0bc351d7ed1f8dac288bb64ef12922a10e270ebb9a24ed670cb2d99d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>";
        
        $__internal_079b995f76a8a2fee5c4dc5c6ba64706dbd58f365a23a589a923d6286454c613->leave($__internal_079b995f76a8a2fee5c4dc5c6ba64706dbd58f365a23a589a923d6286454c613_prof);

        
        $__internal_6fad4ae0bc351d7ed1f8dac288bb64ef12922a10e270ebb9a24ed670cb2d99d6->leave($__internal_6fad4ae0bc351d7ed1f8dac288bb64ef12922a10e270ebb9a24ed670cb2d99d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1337d8459c576a067bd025cf221509c5f84d0c24f370c66ce0a9815119a54e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1337d8459c576a067bd025cf221509c5f84d0c24f370c66ce0a9815119a54e89->enter($__internal_1337d8459c576a067bd025cf221509c5f84d0c24f370c66ce0a9815119a54e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e03858337349701103e1c46387b97bbd6ab95172a330476ce11405344a72a590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03858337349701103e1c46387b97bbd6ab95172a330476ce11405344a72a590->enter($__internal_e03858337349701103e1c46387b97bbd6ab95172a330476ce11405344a72a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e03858337349701103e1c46387b97bbd6ab95172a330476ce11405344a72a590->leave($__internal_e03858337349701103e1c46387b97bbd6ab95172a330476ce11405344a72a590_prof);

        
        $__internal_1337d8459c576a067bd025cf221509c5f84d0c24f370c66ce0a9815119a54e89->leave($__internal_1337d8459c576a067bd025cf221509c5f84d0c24f370c66ce0a9815119a54e89_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4d5d84ec9bfcf4448886b500a2562fcbc308e1a7bc6f967b965d3139fc6bb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d5d84ec9bfcf4448886b500a2562fcbc308e1a7bc6f967b965d3139fc6bb48->enter($__internal_e4d5d84ec9bfcf4448886b500a2562fcbc308e1a7bc6f967b965d3139fc6bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a66937241aceccfb06856b7978fab80d7a6ede5274112f57643058e5a28c44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a66937241aceccfb06856b7978fab80d7a6ede5274112f57643058e5a28c44a->enter($__internal_2a66937241aceccfb06856b7978fab80d7a6ede5274112f57643058e5a28c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a66937241aceccfb06856b7978fab80d7a6ede5274112f57643058e5a28c44a->leave($__internal_2a66937241aceccfb06856b7978fab80d7a6ede5274112f57643058e5a28c44a_prof);

        
        $__internal_e4d5d84ec9bfcf4448886b500a2562fcbc308e1a7bc6f967b965d3139fc6bb48->leave($__internal_e4d5d84ec9bfcf4448886b500a2562fcbc308e1a7bc6f967b965d3139fc6bb48_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_f17bdec8c5725971dfd8a6266612a0b08457590009cf9c4fd910c36ac45225bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17bdec8c5725971dfd8a6266612a0b08457590009cf9c4fd910c36ac45225bc->enter($__internal_f17bdec8c5725971dfd8a6266612a0b08457590009cf9c4fd910c36ac45225bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_7fab7b5541dcff354e27ba1dd9f39657e99232376cacfa3a23df9802a3691653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fab7b5541dcff354e27ba1dd9f39657e99232376cacfa3a23df9802a3691653->enter($__internal_7fab7b5541dcff354e27ba1dd9f39657e99232376cacfa3a23df9802a3691653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_7fab7b5541dcff354e27ba1dd9f39657e99232376cacfa3a23df9802a3691653->leave($__internal_7fab7b5541dcff354e27ba1dd9f39657e99232376cacfa3a23df9802a3691653_prof);

        
        $__internal_f17bdec8c5725971dfd8a6266612a0b08457590009cf9c4fd910c36ac45225bc->leave($__internal_f17bdec8c5725971dfd8a6266612a0b08457590009cf9c4fd910c36ac45225bc_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_0ccf2e160d9c01dc5f1a21e4a4d0fc53de6479c144a7785538dab10db98d43d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccf2e160d9c01dc5f1a21e4a4d0fc53de6479c144a7785538dab10db98d43d4->enter($__internal_0ccf2e160d9c01dc5f1a21e4a4d0fc53de6479c144a7785538dab10db98d43d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_dd6207bbf5372a56ebdffd63f67bb31059775a519a2a59deee9ca0fa7aaefe1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6207bbf5372a56ebdffd63f67bb31059775a519a2a59deee9ca0fa7aaefe1a->enter($__internal_dd6207bbf5372a56ebdffd63f67bb31059775a519a2a59deee9ca0fa7aaefe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_dd6207bbf5372a56ebdffd63f67bb31059775a519a2a59deee9ca0fa7aaefe1a->leave($__internal_dd6207bbf5372a56ebdffd63f67bb31059775a519a2a59deee9ca0fa7aaefe1a_prof);

        
        $__internal_0ccf2e160d9c01dc5f1a21e4a4d0fc53de6479c144a7785538dab10db98d43d4->leave($__internal_0ccf2e160d9c01dc5f1a21e4a4d0fc53de6479c144a7785538dab10db98d43d4_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_8e8025e04f34cdfe11dc738b08e6a1d27be5cae8872a64b699bf9d5a791a9e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8025e04f34cdfe11dc738b08e6a1d27be5cae8872a64b699bf9d5a791a9e46->enter($__internal_8e8025e04f34cdfe11dc738b08e6a1d27be5cae8872a64b699bf9d5a791a9e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_781a88f30dc264ca9af4fb6654e68a8dc3423f1d48e31ebcba3fa20c16ca0e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a88f30dc264ca9af4fb6654e68a8dc3423f1d48e31ebcba3fa20c16ca0e4d->enter($__internal_781a88f30dc264ca9af4fb6654e68a8dc3423f1d48e31ebcba3fa20c16ca0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_781a88f30dc264ca9af4fb6654e68a8dc3423f1d48e31ebcba3fa20c16ca0e4d->leave($__internal_781a88f30dc264ca9af4fb6654e68a8dc3423f1d48e31ebcba3fa20c16ca0e4d_prof);

        
        $__internal_8e8025e04f34cdfe11dc738b08e6a1d27be5cae8872a64b699bf9d5a791a9e46->leave($__internal_8e8025e04f34cdfe11dc738b08e6a1d27be5cae8872a64b699bf9d5a791a9e46_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_bcdf7f25e3acace1f8af70091e6d139ae044b77f7e07106a82dd8f36df771003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdf7f25e3acace1f8af70091e6d139ae044b77f7e07106a82dd8f36df771003->enter($__internal_bcdf7f25e3acace1f8af70091e6d139ae044b77f7e07106a82dd8f36df771003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_c88051a6b465c55aad03a36de7fbdec37aba8bbc7032f7c52cc0a34db4c0d8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88051a6b465c55aad03a36de7fbdec37aba8bbc7032f7c52cc0a34db4c0d8fd->enter($__internal_c88051a6b465c55aad03a36de7fbdec37aba8bbc7032f7c52cc0a34db4c0d8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_c88051a6b465c55aad03a36de7fbdec37aba8bbc7032f7c52cc0a34db4c0d8fd->leave($__internal_c88051a6b465c55aad03a36de7fbdec37aba8bbc7032f7c52cc0a34db4c0d8fd_prof);

        
        $__internal_bcdf7f25e3acace1f8af70091e6d139ae044b77f7e07106a82dd8f36df771003->leave($__internal_bcdf7f25e3acace1f8af70091e6d139ae044b77f7e07106a82dd8f36df771003_prof);

    }

    // line 33
    public function block_navAdmin($context, array $blocks = array())
    {
        $__internal_e633565b97a03f98be7d563e0808409af5ded087bc76fedd6a50358c9c9b1a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e633565b97a03f98be7d563e0808409af5ded087bc76fedd6a50358c9c9b1a87->enter($__internal_e633565b97a03f98be7d563e0808409af5ded087bc76fedd6a50358c9c9b1a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        $__internal_3b6ea6b405ec93d8e87f6111915dcf79a8dfcc264e9ba6b906dfe15daaf9671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6ea6b405ec93d8e87f6111915dcf79a8dfcc264e9ba6b906dfe15daaf9671a->enter($__internal_3b6ea6b405ec93d8e87f6111915dcf79a8dfcc264e9ba6b906dfe15daaf9671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        
        $__internal_3b6ea6b405ec93d8e87f6111915dcf79a8dfcc264e9ba6b906dfe15daaf9671a->leave($__internal_3b6ea6b405ec93d8e87f6111915dcf79a8dfcc264e9ba6b906dfe15daaf9671a_prof);

        
        $__internal_e633565b97a03f98be7d563e0808409af5ded087bc76fedd6a50358c9c9b1a87->leave($__internal_e633565b97a03f98be7d563e0808409af5ded087bc76fedd6a50358c9c9b1a87_prof);

    }

    // line 35
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_3d72b2961822baea217360cd8aee02fae32398580966584de35aebc769627a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d72b2961822baea217360cd8aee02fae32398580966584de35aebc769627a81->enter($__internal_3d72b2961822baea217360cd8aee02fae32398580966584de35aebc769627a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_cd8ddb5833d1ab5a41c4ae5186ed68b622d1bec3c1dd6a763e34ec7cddf169b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8ddb5833d1ab5a41c4ae5186ed68b622d1bec3c1dd6a763e34ec7cddf169b6->enter($__internal_cd8ddb5833d1ab5a41c4ae5186ed68b622d1bec3c1dd6a763e34ec7cddf169b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_cd8ddb5833d1ab5a41c4ae5186ed68b622d1bec3c1dd6a763e34ec7cddf169b6->leave($__internal_cd8ddb5833d1ab5a41c4ae5186ed68b622d1bec3c1dd6a763e34ec7cddf169b6_prof);

        
        $__internal_3d72b2961822baea217360cd8aee02fae32398580966584de35aebc769627a81->leave($__internal_3d72b2961822baea217360cd8aee02fae32398580966584de35aebc769627a81_prof);

    }

    // line 37
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_898f7dbab8d3ec105fd865009619a7a9284804578bce6e965b8438a4a80a8862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898f7dbab8d3ec105fd865009619a7a9284804578bce6e965b8438a4a80a8862->enter($__internal_898f7dbab8d3ec105fd865009619a7a9284804578bce6e965b8438a4a80a8862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_161974b38b93951a9b6f743bd30dac77ed1015f7b95b81133f2b2247213e42fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161974b38b93951a9b6f743bd30dac77ed1015f7b95b81133f2b2247213e42fc->enter($__internal_161974b38b93951a9b6f743bd30dac77ed1015f7b95b81133f2b2247213e42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_161974b38b93951a9b6f743bd30dac77ed1015f7b95b81133f2b2247213e42fc->leave($__internal_161974b38b93951a9b6f743bd30dac77ed1015f7b95b81133f2b2247213e42fc_prof);

        
        $__internal_898f7dbab8d3ec105fd865009619a7a9284804578bce6e965b8438a4a80a8862->leave($__internal_898f7dbab8d3ec105fd865009619a7a9284804578bce6e965b8438a4a80a8862_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6c9124dc59f52e71ad3dfc16c1037d77d38ca584c394382082a07bec22350ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c9124dc59f52e71ad3dfc16c1037d77d38ca584c394382082a07bec22350ca->enter($__internal_a6c9124dc59f52e71ad3dfc16c1037d77d38ca584c394382082a07bec22350ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_080dc11844b14f8f2b31a8d09cbba1aa4bdbb3ffc50de8969a78a7dbd768ba35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080dc11844b14f8f2b31a8d09cbba1aa4bdbb3ffc50de8969a78a7dbd768ba35->enter($__internal_080dc11844b14f8f2b31a8d09cbba1aa4bdbb3ffc50de8969a78a7dbd768ba35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_080dc11844b14f8f2b31a8d09cbba1aa4bdbb3ffc50de8969a78a7dbd768ba35->leave($__internal_080dc11844b14f8f2b31a8d09cbba1aa4bdbb3ffc50de8969a78a7dbd768ba35_prof);

        
        $__internal_a6c9124dc59f52e71ad3dfc16c1037d77d38ca584c394382082a07bec22350ca->leave($__internal_a6c9124dc59f52e71ad3dfc16c1037d77d38ca584c394382082a07bec22350ca_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b65325e0debb377d55fbc6e58ef6eaa55a817b4108fd654873f9ccaba1c4ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b65325e0debb377d55fbc6e58ef6eaa55a817b4108fd654873f9ccaba1c4ad4->enter($__internal_0b65325e0debb377d55fbc6e58ef6eaa55a817b4108fd654873f9ccaba1c4ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6288847df2260317ded072df53daace1ef4c32a8739113221428b63cff1d5942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6288847df2260317ded072df53daace1ef4c32a8739113221428b63cff1d5942->enter($__internal_6288847df2260317ded072df53daace1ef4c32a8739113221428b63cff1d5942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6288847df2260317ded072df53daace1ef4c32a8739113221428b63cff1d5942->leave($__internal_6288847df2260317ded072df53daace1ef4c32a8739113221428b63cff1d5942_prof);

        
        $__internal_0b65325e0debb377d55fbc6e58ef6eaa55a817b4108fd654873f9ccaba1c4ad4->leave($__internal_0b65325e0debb377d55fbc6e58ef6eaa55a817b4108fd654873f9ccaba1c4ad4_prof);

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
        return array (  336 => 45,  319 => 44,  302 => 37,  285 => 35,  268 => 33,  251 => 31,  234 => 29,  217 => 28,  200 => 27,  183 => 15,  165 => 5,  150 => 48,  146 => 46,  143 => 45,  141 => 44,  134 => 39,  126 => 37,  118 => 35,  110 => 33,  108 => 32,  101 => 31,  99 => 30,  93 => 29,  87 => 28,  81 => 27,  72 => 23,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  42 => 5,  36 => 1,);
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
