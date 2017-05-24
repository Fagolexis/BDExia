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
        $__internal_d1cd8b147704749520381eab78ac610bb1d22605d89dd0bf7f29e5e433438f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cd8b147704749520381eab78ac610bb1d22605d89dd0bf7f29e5e433438f62->enter($__internal_d1cd8b147704749520381eab78ac610bb1d22605d89dd0bf7f29e5e433438f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_644180f415138860b2c8d222ae22fb707f4d226da0ba54c1983913b6cfd57622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644180f415138860b2c8d222ae22fb707f4d226da0ba54c1983913b6cfd57622->enter($__internal_644180f415138860b2c8d222ae22fb707f4d226da0ba54c1983913b6cfd57622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
                            <li><a ";
            // line 32
            $this->displayBlock('navDeco', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deco");
            echo "\">Déconnexion</a></li>
                        ";
        } else {
            // line 34
            echo "                            <li><a ";
            $this->displayBlock('navCnx', $context, $blocks);
            echo " href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cnx");
            echo "\">Connexion</a></li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </div>
            </div>
        </nav>
    </header>
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>";
        
        $__internal_d1cd8b147704749520381eab78ac610bb1d22605d89dd0bf7f29e5e433438f62->leave($__internal_d1cd8b147704749520381eab78ac610bb1d22605d89dd0bf7f29e5e433438f62_prof);

        
        $__internal_644180f415138860b2c8d222ae22fb707f4d226da0ba54c1983913b6cfd57622->leave($__internal_644180f415138860b2c8d222ae22fb707f4d226da0ba54c1983913b6cfd57622_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7308c690a074a44a6896c1db6c4f01d205fe1e6ccd11811bc560ef4827b91023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7308c690a074a44a6896c1db6c4f01d205fe1e6ccd11811bc560ef4827b91023->enter($__internal_7308c690a074a44a6896c1db6c4f01d205fe1e6ccd11811bc560ef4827b91023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b02fbda5e6f1de940dbd7ced06a17f6e4ddad42fd73d625d8708529455994193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02fbda5e6f1de940dbd7ced06a17f6e4ddad42fd73d625d8708529455994193->enter($__internal_b02fbda5e6f1de940dbd7ced06a17f6e4ddad42fd73d625d8708529455994193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b02fbda5e6f1de940dbd7ced06a17f6e4ddad42fd73d625d8708529455994193->leave($__internal_b02fbda5e6f1de940dbd7ced06a17f6e4ddad42fd73d625d8708529455994193_prof);

        
        $__internal_7308c690a074a44a6896c1db6c4f01d205fe1e6ccd11811bc560ef4827b91023->leave($__internal_7308c690a074a44a6896c1db6c4f01d205fe1e6ccd11811bc560ef4827b91023_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c4f689bbd1ee27da798aa614932acf3ef62f868aca04ded89b8345b8932f93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4f689bbd1ee27da798aa614932acf3ef62f868aca04ded89b8345b8932f93f->enter($__internal_2c4f689bbd1ee27da798aa614932acf3ef62f868aca04ded89b8345b8932f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_daeb5f4b328353ad7b5f5971bd9356031e8a94f27a93497c702df9f737a0e08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeb5f4b328353ad7b5f5971bd9356031e8a94f27a93497c702df9f737a0e08a->enter($__internal_daeb5f4b328353ad7b5f5971bd9356031e8a94f27a93497c702df9f737a0e08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_daeb5f4b328353ad7b5f5971bd9356031e8a94f27a93497c702df9f737a0e08a->leave($__internal_daeb5f4b328353ad7b5f5971bd9356031e8a94f27a93497c702df9f737a0e08a_prof);

        
        $__internal_2c4f689bbd1ee27da798aa614932acf3ef62f868aca04ded89b8345b8932f93f->leave($__internal_2c4f689bbd1ee27da798aa614932acf3ef62f868aca04ded89b8345b8932f93f_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_0ad3d8151452732a43e4f4502da218a5a53c42318e54b30876950b5463c0fdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad3d8151452732a43e4f4502da218a5a53c42318e54b30876950b5463c0fdc3->enter($__internal_0ad3d8151452732a43e4f4502da218a5a53c42318e54b30876950b5463c0fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_2ca9e6902db00adc09c577bec47f1068e30278e0e5c7198d7f63e8199ab9d9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca9e6902db00adc09c577bec47f1068e30278e0e5c7198d7f63e8199ab9d9cb->enter($__internal_2ca9e6902db00adc09c577bec47f1068e30278e0e5c7198d7f63e8199ab9d9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_2ca9e6902db00adc09c577bec47f1068e30278e0e5c7198d7f63e8199ab9d9cb->leave($__internal_2ca9e6902db00adc09c577bec47f1068e30278e0e5c7198d7f63e8199ab9d9cb_prof);

        
        $__internal_0ad3d8151452732a43e4f4502da218a5a53c42318e54b30876950b5463c0fdc3->leave($__internal_0ad3d8151452732a43e4f4502da218a5a53c42318e54b30876950b5463c0fdc3_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_552ae4ee243c55b54e9cdab825f65f7daa3b4a1c03f623ff3fd80572ecb1b194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552ae4ee243c55b54e9cdab825f65f7daa3b4a1c03f623ff3fd80572ecb1b194->enter($__internal_552ae4ee243c55b54e9cdab825f65f7daa3b4a1c03f623ff3fd80572ecb1b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_f3e4ad7bda03b0d65820cc22f6140140c6234d42c6e661df42ac70d16044f6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e4ad7bda03b0d65820cc22f6140140c6234d42c6e661df42ac70d16044f6ac->enter($__internal_f3e4ad7bda03b0d65820cc22f6140140c6234d42c6e661df42ac70d16044f6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_f3e4ad7bda03b0d65820cc22f6140140c6234d42c6e661df42ac70d16044f6ac->leave($__internal_f3e4ad7bda03b0d65820cc22f6140140c6234d42c6e661df42ac70d16044f6ac_prof);

        
        $__internal_552ae4ee243c55b54e9cdab825f65f7daa3b4a1c03f623ff3fd80572ecb1b194->leave($__internal_552ae4ee243c55b54e9cdab825f65f7daa3b4a1c03f623ff3fd80572ecb1b194_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_17641c572bc28a384885e504bcb294506139b35f53446287bd4c5fbcfd14b943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17641c572bc28a384885e504bcb294506139b35f53446287bd4c5fbcfd14b943->enter($__internal_17641c572bc28a384885e504bcb294506139b35f53446287bd4c5fbcfd14b943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_40167360a9193b4be95b2445cf8a290228bcab111f4fb8cdfc550fca9332bd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40167360a9193b4be95b2445cf8a290228bcab111f4fb8cdfc550fca9332bd1d->enter($__internal_40167360a9193b4be95b2445cf8a290228bcab111f4fb8cdfc550fca9332bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_40167360a9193b4be95b2445cf8a290228bcab111f4fb8cdfc550fca9332bd1d->leave($__internal_40167360a9193b4be95b2445cf8a290228bcab111f4fb8cdfc550fca9332bd1d_prof);

        
        $__internal_17641c572bc28a384885e504bcb294506139b35f53446287bd4c5fbcfd14b943->leave($__internal_17641c572bc28a384885e504bcb294506139b35f53446287bd4c5fbcfd14b943_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_38f55538791935335a88516c05f219c26259d220dd13b2b5a8ddcc5b2fbe9826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f55538791935335a88516c05f219c26259d220dd13b2b5a8ddcc5b2fbe9826->enter($__internal_38f55538791935335a88516c05f219c26259d220dd13b2b5a8ddcc5b2fbe9826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_61917901a3586f19afe17e7e3ed75d172e0579ee14ab26a14031c6c942e8538f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61917901a3586f19afe17e7e3ed75d172e0579ee14ab26a14031c6c942e8538f->enter($__internal_61917901a3586f19afe17e7e3ed75d172e0579ee14ab26a14031c6c942e8538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_61917901a3586f19afe17e7e3ed75d172e0579ee14ab26a14031c6c942e8538f->leave($__internal_61917901a3586f19afe17e7e3ed75d172e0579ee14ab26a14031c6c942e8538f_prof);

        
        $__internal_38f55538791935335a88516c05f219c26259d220dd13b2b5a8ddcc5b2fbe9826->leave($__internal_38f55538791935335a88516c05f219c26259d220dd13b2b5a8ddcc5b2fbe9826_prof);

    }

    // line 32
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_18b5b476b91604acde3e45110534711946b885411b8ad0592df6e879cd3957c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b5b476b91604acde3e45110534711946b885411b8ad0592df6e879cd3957c4->enter($__internal_18b5b476b91604acde3e45110534711946b885411b8ad0592df6e879cd3957c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_98233b6fcbfd5880d4bc3fe8532ad6bf1b8e6b57da9ae7a02aa807b909e3639c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98233b6fcbfd5880d4bc3fe8532ad6bf1b8e6b57da9ae7a02aa807b909e3639c->enter($__internal_98233b6fcbfd5880d4bc3fe8532ad6bf1b8e6b57da9ae7a02aa807b909e3639c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_98233b6fcbfd5880d4bc3fe8532ad6bf1b8e6b57da9ae7a02aa807b909e3639c->leave($__internal_98233b6fcbfd5880d4bc3fe8532ad6bf1b8e6b57da9ae7a02aa807b909e3639c_prof);

        
        $__internal_18b5b476b91604acde3e45110534711946b885411b8ad0592df6e879cd3957c4->leave($__internal_18b5b476b91604acde3e45110534711946b885411b8ad0592df6e879cd3957c4_prof);

    }

    // line 34
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_5b5cf1ae73f1e31dc20a885442312e356949209ce2cc27c6bd8bc451e4ed242f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5cf1ae73f1e31dc20a885442312e356949209ce2cc27c6bd8bc451e4ed242f->enter($__internal_5b5cf1ae73f1e31dc20a885442312e356949209ce2cc27c6bd8bc451e4ed242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_45dfa3e14a29bf88bd9995eaecabfccab11da5e0444576a8b42a097a3a987534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dfa3e14a29bf88bd9995eaecabfccab11da5e0444576a8b42a097a3a987534->enter($__internal_45dfa3e14a29bf88bd9995eaecabfccab11da5e0444576a8b42a097a3a987534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_45dfa3e14a29bf88bd9995eaecabfccab11da5e0444576a8b42a097a3a987534->leave($__internal_45dfa3e14a29bf88bd9995eaecabfccab11da5e0444576a8b42a097a3a987534_prof);

        
        $__internal_5b5cf1ae73f1e31dc20a885442312e356949209ce2cc27c6bd8bc451e4ed242f->leave($__internal_5b5cf1ae73f1e31dc20a885442312e356949209ce2cc27c6bd8bc451e4ed242f_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_22b1daf728c5c62d5db8dc4b55d6a591e1cc04a51f71142c60910562f3b6b151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b1daf728c5c62d5db8dc4b55d6a591e1cc04a51f71142c60910562f3b6b151->enter($__internal_22b1daf728c5c62d5db8dc4b55d6a591e1cc04a51f71142c60910562f3b6b151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c5cc5bbb972d19b0b0189e9a7e21a58d3c57faa9ace42cfeb128ceb57f55a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5cc5bbb972d19b0b0189e9a7e21a58d3c57faa9ace42cfeb128ceb57f55a62->enter($__internal_8c5cc5bbb972d19b0b0189e9a7e21a58d3c57faa9ace42cfeb128ceb57f55a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c5cc5bbb972d19b0b0189e9a7e21a58d3c57faa9ace42cfeb128ceb57f55a62->leave($__internal_8c5cc5bbb972d19b0b0189e9a7e21a58d3c57faa9ace42cfeb128ceb57f55a62_prof);

        
        $__internal_22b1daf728c5c62d5db8dc4b55d6a591e1cc04a51f71142c60910562f3b6b151->leave($__internal_22b1daf728c5c62d5db8dc4b55d6a591e1cc04a51f71142c60910562f3b6b151_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23af0f457d7854a6d527a720164abebba2deb71ff59fb9007f094f4e4936c9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23af0f457d7854a6d527a720164abebba2deb71ff59fb9007f094f4e4936c9e3->enter($__internal_23af0f457d7854a6d527a720164abebba2deb71ff59fb9007f094f4e4936c9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0450dcaedee05f7678fe8d7a55e2fbde9587a544a93a04ea59ac7b5049974c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0450dcaedee05f7678fe8d7a55e2fbde9587a544a93a04ea59ac7b5049974c52->enter($__internal_0450dcaedee05f7678fe8d7a55e2fbde9587a544a93a04ea59ac7b5049974c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0450dcaedee05f7678fe8d7a55e2fbde9587a544a93a04ea59ac7b5049974c52->leave($__internal_0450dcaedee05f7678fe8d7a55e2fbde9587a544a93a04ea59ac7b5049974c52_prof);

        
        $__internal_23af0f457d7854a6d527a720164abebba2deb71ff59fb9007f094f4e4936c9e3->leave($__internal_23af0f457d7854a6d527a720164abebba2deb71ff59fb9007f094f4e4936c9e3_prof);

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
        return array (  307 => 42,  290 => 41,  273 => 34,  256 => 32,  239 => 31,  222 => 29,  205 => 28,  188 => 27,  171 => 15,  153 => 5,  138 => 45,  134 => 43,  131 => 42,  129 => 41,  122 => 36,  114 => 34,  107 => 32,  100 => 31,  98 => 30,  92 => 29,  86 => 28,  80 => 27,  71 => 23,  62 => 16,  60 => 15,  52 => 10,  48 => 9,  41 => 5,  35 => 1,);
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
