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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d11d66e03c866fbc2d5efc6b43bf10f7424641e50fd9bde5703db65377840d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d11d66e03c866fbc2d5efc6b43bf10f7424641e50fd9bde5703db65377840d->enter($__internal_a5d11d66e03c866fbc2d5efc6b43bf10f7424641e50fd9bde5703db65377840d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_77b7a5e9ce346bfa8d899fa713ff078a5e1dd7570a12fcc3fb2c6e8fad9b24fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b7a5e9ce346bfa8d899fa713ff078a5e1dd7570a12fcc3fb2c6e8fad9b24fd->enter($__internal_77b7a5e9ce346bfa8d899fa713ff078a5e1dd7570a12fcc3fb2c6e8fad9b24fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"//fonts.googleapis.com/css?family=Alef&subset=latin\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.1/datatables.min.css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.1/datatables.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"red\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo-header.png"), "html", null, true);
        echo "\" alt=\"Logo Exia\"/></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a class=\"active\" href=";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Accueil");
        echo ">Accueil</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAct");
        echo "\">Activités</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutique");
        echo "\">Boutique</a></li>
                        <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idUser"), "method"))), "html", null, true);
        echo "\">Profil</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deco");
        echo "\">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    <footer>
        <div class=\"container\">
            <p>&copy; Groupe 3 | <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mention.html.twig"), "html", null, true);
        echo "\">Mentions légales</a></p>
        </div>
    </footer>
    </body>
</html>
";
        
        $__internal_a5d11d66e03c866fbc2d5efc6b43bf10f7424641e50fd9bde5703db65377840d->leave($__internal_a5d11d66e03c866fbc2d5efc6b43bf10f7424641e50fd9bde5703db65377840d_prof);

        
        $__internal_77b7a5e9ce346bfa8d899fa713ff078a5e1dd7570a12fcc3fb2c6e8fad9b24fd->leave($__internal_77b7a5e9ce346bfa8d899fa713ff078a5e1dd7570a12fcc3fb2c6e8fad9b24fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_270df346038103653985a2557b85bd842f51681b654b9726ae183c7ad35aa7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270df346038103653985a2557b85bd842f51681b654b9726ae183c7ad35aa7af->enter($__internal_270df346038103653985a2557b85bd842f51681b654b9726ae183c7ad35aa7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b69489e6c77f31f2d0f02151f4937015e030be091c7c260373403057c34ef10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69489e6c77f31f2d0f02151f4937015e030be091c7c260373403057c34ef10c->enter($__internal_b69489e6c77f31f2d0f02151f4937015e030be091c7c260373403057c34ef10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b69489e6c77f31f2d0f02151f4937015e030be091c7c260373403057c34ef10c->leave($__internal_b69489e6c77f31f2d0f02151f4937015e030be091c7c260373403057c34ef10c_prof);

        
        $__internal_270df346038103653985a2557b85bd842f51681b654b9726ae183c7ad35aa7af->leave($__internal_270df346038103653985a2557b85bd842f51681b654b9726ae183c7ad35aa7af_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b317fc57311f2562885dd831103fbcfc0f2d5629a37fa1e03c4b101b752799bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b317fc57311f2562885dd831103fbcfc0f2d5629a37fa1e03c4b101b752799bc->enter($__internal_b317fc57311f2562885dd831103fbcfc0f2d5629a37fa1e03c4b101b752799bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00ba058bcb79bcb0f66f3f0bfea85555c9a40ae3cc35c88c341b58eab739e0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ba058bcb79bcb0f66f3f0bfea85555c9a40ae3cc35c88c341b58eab739e0e4->enter($__internal_00ba058bcb79bcb0f66f3f0bfea85555c9a40ae3cc35c88c341b58eab739e0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00ba058bcb79bcb0f66f3f0bfea85555c9a40ae3cc35c88c341b58eab739e0e4->leave($__internal_00ba058bcb79bcb0f66f3f0bfea85555c9a40ae3cc35c88c341b58eab739e0e4_prof);

        
        $__internal_b317fc57311f2562885dd831103fbcfc0f2d5629a37fa1e03c4b101b752799bc->leave($__internal_b317fc57311f2562885dd831103fbcfc0f2d5629a37fa1e03c4b101b752799bc_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a263e89564a8bbb4f1367536a28a22a4249985c5e0eb2efaaa246d9911b8c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a263e89564a8bbb4f1367536a28a22a4249985c5e0eb2efaaa246d9911b8c85->enter($__internal_6a263e89564a8bbb4f1367536a28a22a4249985c5e0eb2efaaa246d9911b8c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f9924bab0a1315400f10c656c30c5ffee3acd618c54f443b50452d0a23f98b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9924bab0a1315400f10c656c30c5ffee3acd618c54f443b50452d0a23f98b6->enter($__internal_2f9924bab0a1315400f10c656c30c5ffee3acd618c54f443b50452d0a23f98b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f9924bab0a1315400f10c656c30c5ffee3acd618c54f443b50452d0a23f98b6->leave($__internal_2f9924bab0a1315400f10c656c30c5ffee3acd618c54f443b50452d0a23f98b6_prof);

        
        $__internal_6a263e89564a8bbb4f1367536a28a22a4249985c5e0eb2efaaa246d9911b8c85->leave($__internal_6a263e89564a8bbb4f1367536a28a22a4249985c5e0eb2efaaa246d9911b8c85_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa1b8c59839c25b7607acfef802a9ff256f1d30e0ee19105733b1e3725bf12f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1b8c59839c25b7607acfef802a9ff256f1d30e0ee19105733b1e3725bf12f1->enter($__internal_fa1b8c59839c25b7607acfef802a9ff256f1d30e0ee19105733b1e3725bf12f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e65c581d17d6624bafe9bbe65bd0e119dd648c5c022a379fc016ef9b90e71d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65c581d17d6624bafe9bbe65bd0e119dd648c5c022a379fc016ef9b90e71d67->enter($__internal_e65c581d17d6624bafe9bbe65bd0e119dd648c5c022a379fc016ef9b90e71d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e65c581d17d6624bafe9bbe65bd0e119dd648c5c022a379fc016ef9b90e71d67->leave($__internal_e65c581d17d6624bafe9bbe65bd0e119dd648c5c022a379fc016ef9b90e71d67_prof);

        
        $__internal_fa1b8c59839c25b7607acfef802a9ff256f1d30e0ee19105733b1e3725bf12f1->leave($__internal_fa1b8c59839c25b7607acfef802a9ff256f1d30e0ee19105733b1e3725bf12f1_prof);

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
        return array (  174 => 38,  157 => 37,  140 => 6,  122 => 5,  106 => 41,  102 => 39,  99 => 38,  97 => 37,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  65 => 23,  50 => 11,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"//fonts.googleapis.com/css?family=Alef&subset=latin\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.1/datatables.min.css\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.1/datatables.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"red\"></div>
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{ asset('img/logo-header.png') }}\" alt=\"Logo Exia\"/></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a class=\"active\" href={{path('Accueil')}}>Accueil</a></li>
                        <li><a href=\"{{path('listAct')}}\">Activités</a></li>
                        <li><a href=\"{{path('boutique')}}\">Boutique</a></li>
                        <li><a href=\"{{path('profil', {'id':app.session.get('idUser')})}}\">Profil</a></li>
                        <li><a href=\"{{path('deco')}}\">Déconnexion</a></li>
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
