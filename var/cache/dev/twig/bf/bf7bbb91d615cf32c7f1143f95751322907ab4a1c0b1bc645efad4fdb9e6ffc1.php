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
        $__internal_ae72c957f87d4863f3f5b64761652084df8d8ad581f869720fbd19461c01489d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae72c957f87d4863f3f5b64761652084df8d8ad581f869720fbd19461c01489d->enter($__internal_ae72c957f87d4863f3f5b64761652084df8d8ad581f869720fbd19461c01489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_c3f60e9674a02a854e9510870f99ff763c8ed8a0c97177598d6ab0fc7f8a7e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f60e9674a02a854e9510870f99ff763c8ed8a0c97177598d6ab0fc7f8a7e64->enter($__internal_c3f60e9674a02a854e9510870f99ff763c8ed8a0c97177598d6ab0fc7f8a7e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
        echo "        <script>
            \$(document).ready(function() {
                \$('[data-toggle=\"tooltip\"]').tooltip();
            })
        </script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>";
        
        $__internal_ae72c957f87d4863f3f5b64761652084df8d8ad581f869720fbd19461c01489d->leave($__internal_ae72c957f87d4863f3f5b64761652084df8d8ad581f869720fbd19461c01489d_prof);

        
        $__internal_c3f60e9674a02a854e9510870f99ff763c8ed8a0c97177598d6ab0fc7f8a7e64->leave($__internal_c3f60e9674a02a854e9510870f99ff763c8ed8a0c97177598d6ab0fc7f8a7e64_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67d8604e83fb2e899bb61474e97743ef9959a0b0ad6232e8d3a3fe83de56dd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d8604e83fb2e899bb61474e97743ef9959a0b0ad6232e8d3a3fe83de56dd47->enter($__internal_67d8604e83fb2e899bb61474e97743ef9959a0b0ad6232e8d3a3fe83de56dd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5381a225e5a920362b17e495048717c0f9dc4cf963f3e7f67627f51696ac16ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5381a225e5a920362b17e495048717c0f9dc4cf963f3e7f67627f51696ac16ec->enter($__internal_5381a225e5a920362b17e495048717c0f9dc4cf963f3e7f67627f51696ac16ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5381a225e5a920362b17e495048717c0f9dc4cf963f3e7f67627f51696ac16ec->leave($__internal_5381a225e5a920362b17e495048717c0f9dc4cf963f3e7f67627f51696ac16ec_prof);

        
        $__internal_67d8604e83fb2e899bb61474e97743ef9959a0b0ad6232e8d3a3fe83de56dd47->leave($__internal_67d8604e83fb2e899bb61474e97743ef9959a0b0ad6232e8d3a3fe83de56dd47_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c035000b22534cbccfc47c315efbcdff54094ec35011f24370fd0ccbac67845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c035000b22534cbccfc47c315efbcdff54094ec35011f24370fd0ccbac67845->enter($__internal_2c035000b22534cbccfc47c315efbcdff54094ec35011f24370fd0ccbac67845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5e1d52fb86abccddbb691cf6c0ef02eb610132a5337f055321214b610cac7fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1d52fb86abccddbb691cf6c0ef02eb610132a5337f055321214b610cac7fa7->enter($__internal_5e1d52fb86abccddbb691cf6c0ef02eb610132a5337f055321214b610cac7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5e1d52fb86abccddbb691cf6c0ef02eb610132a5337f055321214b610cac7fa7->leave($__internal_5e1d52fb86abccddbb691cf6c0ef02eb610132a5337f055321214b610cac7fa7_prof);

        
        $__internal_2c035000b22534cbccfc47c315efbcdff54094ec35011f24370fd0ccbac67845->leave($__internal_2c035000b22534cbccfc47c315efbcdff54094ec35011f24370fd0ccbac67845_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_305362865fdfb1790212923334483931689226ebd51421f464a6923540284ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305362865fdfb1790212923334483931689226ebd51421f464a6923540284ec2->enter($__internal_305362865fdfb1790212923334483931689226ebd51421f464a6923540284ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_d106bf96950646ac128286923f5a0a974bd972169903701ce90788fdccb8de91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d106bf96950646ac128286923f5a0a974bd972169903701ce90788fdccb8de91->enter($__internal_d106bf96950646ac128286923f5a0a974bd972169903701ce90788fdccb8de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_d106bf96950646ac128286923f5a0a974bd972169903701ce90788fdccb8de91->leave($__internal_d106bf96950646ac128286923f5a0a974bd972169903701ce90788fdccb8de91_prof);

        
        $__internal_305362865fdfb1790212923334483931689226ebd51421f464a6923540284ec2->leave($__internal_305362865fdfb1790212923334483931689226ebd51421f464a6923540284ec2_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_9ed90b077ad95fb613ed40c141138b65432cb9c18ace4a8eebff169b9942a9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed90b077ad95fb613ed40c141138b65432cb9c18ace4a8eebff169b9942a9fd->enter($__internal_9ed90b077ad95fb613ed40c141138b65432cb9c18ace4a8eebff169b9942a9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_68db8873835428a4922fac39c67005c87b55c9825ae09f3924ad28cb5f74299a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68db8873835428a4922fac39c67005c87b55c9825ae09f3924ad28cb5f74299a->enter($__internal_68db8873835428a4922fac39c67005c87b55c9825ae09f3924ad28cb5f74299a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_68db8873835428a4922fac39c67005c87b55c9825ae09f3924ad28cb5f74299a->leave($__internal_68db8873835428a4922fac39c67005c87b55c9825ae09f3924ad28cb5f74299a_prof);

        
        $__internal_9ed90b077ad95fb613ed40c141138b65432cb9c18ace4a8eebff169b9942a9fd->leave($__internal_9ed90b077ad95fb613ed40c141138b65432cb9c18ace4a8eebff169b9942a9fd_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_aa4537da1966cf8ba8e011351871208b1db3e620d6825bcfbd99f8bcdd00fa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4537da1966cf8ba8e011351871208b1db3e620d6825bcfbd99f8bcdd00fa67->enter($__internal_aa4537da1966cf8ba8e011351871208b1db3e620d6825bcfbd99f8bcdd00fa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_dd9365e987a5e7ca302175fa004b07f241c59d5efa1e2377f1844ae43c1668ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9365e987a5e7ca302175fa004b07f241c59d5efa1e2377f1844ae43c1668ba->enter($__internal_dd9365e987a5e7ca302175fa004b07f241c59d5efa1e2377f1844ae43c1668ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_dd9365e987a5e7ca302175fa004b07f241c59d5efa1e2377f1844ae43c1668ba->leave($__internal_dd9365e987a5e7ca302175fa004b07f241c59d5efa1e2377f1844ae43c1668ba_prof);

        
        $__internal_aa4537da1966cf8ba8e011351871208b1db3e620d6825bcfbd99f8bcdd00fa67->leave($__internal_aa4537da1966cf8ba8e011351871208b1db3e620d6825bcfbd99f8bcdd00fa67_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_4297b3098df19b47497cde3f0bc778e7e2e35df45db6656e71b2a3446f7b2d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4297b3098df19b47497cde3f0bc778e7e2e35df45db6656e71b2a3446f7b2d53->enter($__internal_4297b3098df19b47497cde3f0bc778e7e2e35df45db6656e71b2a3446f7b2d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_14cb6f9acd8c5f3b37e988d3f5e8d97bacf81c9e93de9257a247cb68f7b60b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cb6f9acd8c5f3b37e988d3f5e8d97bacf81c9e93de9257a247cb68f7b60b5f->enter($__internal_14cb6f9acd8c5f3b37e988d3f5e8d97bacf81c9e93de9257a247cb68f7b60b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_14cb6f9acd8c5f3b37e988d3f5e8d97bacf81c9e93de9257a247cb68f7b60b5f->leave($__internal_14cb6f9acd8c5f3b37e988d3f5e8d97bacf81c9e93de9257a247cb68f7b60b5f_prof);

        
        $__internal_4297b3098df19b47497cde3f0bc778e7e2e35df45db6656e71b2a3446f7b2d53->leave($__internal_4297b3098df19b47497cde3f0bc778e7e2e35df45db6656e71b2a3446f7b2d53_prof);

    }

    // line 33
    public function block_navAdmin($context, array $blocks = array())
    {
        $__internal_ae44bc4f58b03a03f1a160fed978a512860137f75d2bcd0a1591f4b7f0bc6f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae44bc4f58b03a03f1a160fed978a512860137f75d2bcd0a1591f4b7f0bc6f14->enter($__internal_ae44bc4f58b03a03f1a160fed978a512860137f75d2bcd0a1591f4b7f0bc6f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        $__internal_52af74633f9bdec020d04bed86c7ef692d6c9fa80cb812307882d9d66c9feb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52af74633f9bdec020d04bed86c7ef692d6c9fa80cb812307882d9d66c9feb4c->enter($__internal_52af74633f9bdec020d04bed86c7ef692d6c9fa80cb812307882d9d66c9feb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        
        $__internal_52af74633f9bdec020d04bed86c7ef692d6c9fa80cb812307882d9d66c9feb4c->leave($__internal_52af74633f9bdec020d04bed86c7ef692d6c9fa80cb812307882d9d66c9feb4c_prof);

        
        $__internal_ae44bc4f58b03a03f1a160fed978a512860137f75d2bcd0a1591f4b7f0bc6f14->leave($__internal_ae44bc4f58b03a03f1a160fed978a512860137f75d2bcd0a1591f4b7f0bc6f14_prof);

    }

    // line 35
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_b34c2f66a572a0ee943977d0839f2db9b9bf59048e3a10b6f2bb7756c90cdeb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34c2f66a572a0ee943977d0839f2db9b9bf59048e3a10b6f2bb7756c90cdeb2->enter($__internal_b34c2f66a572a0ee943977d0839f2db9b9bf59048e3a10b6f2bb7756c90cdeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_0ebf203b7e85584bf1481db111f73a3b3b6a80c2858987c5b25a019dcd39a555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebf203b7e85584bf1481db111f73a3b3b6a80c2858987c5b25a019dcd39a555->enter($__internal_0ebf203b7e85584bf1481db111f73a3b3b6a80c2858987c5b25a019dcd39a555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_0ebf203b7e85584bf1481db111f73a3b3b6a80c2858987c5b25a019dcd39a555->leave($__internal_0ebf203b7e85584bf1481db111f73a3b3b6a80c2858987c5b25a019dcd39a555_prof);

        
        $__internal_b34c2f66a572a0ee943977d0839f2db9b9bf59048e3a10b6f2bb7756c90cdeb2->leave($__internal_b34c2f66a572a0ee943977d0839f2db9b9bf59048e3a10b6f2bb7756c90cdeb2_prof);

    }

    // line 37
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_b18e19b495c161daed6216bc82d37ac582af3d06a5529a7aa5f36607cfd44a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18e19b495c161daed6216bc82d37ac582af3d06a5529a7aa5f36607cfd44a98->enter($__internal_b18e19b495c161daed6216bc82d37ac582af3d06a5529a7aa5f36607cfd44a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_82f16f08561a1da81b1630296a9ea4f2a8aabadabab9da77571511019664b111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f16f08561a1da81b1630296a9ea4f2a8aabadabab9da77571511019664b111->enter($__internal_82f16f08561a1da81b1630296a9ea4f2a8aabadabab9da77571511019664b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_82f16f08561a1da81b1630296a9ea4f2a8aabadabab9da77571511019664b111->leave($__internal_82f16f08561a1da81b1630296a9ea4f2a8aabadabab9da77571511019664b111_prof);

        
        $__internal_b18e19b495c161daed6216bc82d37ac582af3d06a5529a7aa5f36607cfd44a98->leave($__internal_b18e19b495c161daed6216bc82d37ac582af3d06a5529a7aa5f36607cfd44a98_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e012ed53516dadc83ad1022bce803cdf1044d401767889ef8eef2d1b3c0102f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e012ed53516dadc83ad1022bce803cdf1044d401767889ef8eef2d1b3c0102f->enter($__internal_2e012ed53516dadc83ad1022bce803cdf1044d401767889ef8eef2d1b3c0102f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e820703808c913108a63f5b3ac4dd2e3a239d84c838557be286ace03f152b685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e820703808c913108a63f5b3ac4dd2e3a239d84c838557be286ace03f152b685->enter($__internal_e820703808c913108a63f5b3ac4dd2e3a239d84c838557be286ace03f152b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e820703808c913108a63f5b3ac4dd2e3a239d84c838557be286ace03f152b685->leave($__internal_e820703808c913108a63f5b3ac4dd2e3a239d84c838557be286ace03f152b685_prof);

        
        $__internal_2e012ed53516dadc83ad1022bce803cdf1044d401767889ef8eef2d1b3c0102f->leave($__internal_2e012ed53516dadc83ad1022bce803cdf1044d401767889ef8eef2d1b3c0102f_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_689905d60d12b6bcb99eba0f2b17dc53b85f315665a42992831515753985500b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689905d60d12b6bcb99eba0f2b17dc53b85f315665a42992831515753985500b->enter($__internal_689905d60d12b6bcb99eba0f2b17dc53b85f315665a42992831515753985500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_543107f8b705215b38e48590ea6d36be522884af408fb712299cf8c09ce30754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543107f8b705215b38e48590ea6d36be522884af408fb712299cf8c09ce30754->enter($__internal_543107f8b705215b38e48590ea6d36be522884af408fb712299cf8c09ce30754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_543107f8b705215b38e48590ea6d36be522884af408fb712299cf8c09ce30754->leave($__internal_543107f8b705215b38e48590ea6d36be522884af408fb712299cf8c09ce30754_prof);

        
        $__internal_689905d60d12b6bcb99eba0f2b17dc53b85f315665a42992831515753985500b->leave($__internal_689905d60d12b6bcb99eba0f2b17dc53b85f315665a42992831515753985500b_prof);

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
        return array (  342 => 50,  325 => 44,  308 => 37,  291 => 35,  274 => 33,  257 => 31,  240 => 29,  223 => 28,  206 => 27,  189 => 15,  171 => 5,  156 => 53,  152 => 51,  150 => 50,  143 => 45,  141 => 44,  134 => 39,  126 => 37,  118 => 35,  110 => 33,  108 => 32,  101 => 31,  99 => 30,  93 => 29,  87 => 28,  81 => 27,  72 => 23,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  42 => 5,  36 => 1,);
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
        <script>
            \$(document).ready(function() {
                \$('[data-toggle=\"tooltip\"]').tooltip();
            })
        </script>
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
