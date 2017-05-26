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
        $__internal_29fc3bd82e4bcee6e88edc973071604e24de7ec0dc6572488141f1d35ddcd26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fc3bd82e4bcee6e88edc973071604e24de7ec0dc6572488141f1d35ddcd26b->enter($__internal_29fc3bd82e4bcee6e88edc973071604e24de7ec0dc6572488141f1d35ddcd26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

        $__internal_83729e2f2820ae91739a91b7e0cdf21dd3ccf0818b1b3c4cf71cc89c5d5f84b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83729e2f2820ae91739a91b7e0cdf21dd3ccf0818b1b3c4cf71cc89c5d5f84b8->enter($__internal_83729e2f2820ae91739a91b7e0cdf21dd3ccf0818b1b3c4cf71cc89c5d5f84b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::base.html.twig"));

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
        <script type=\"text/javascript\">
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
        </script>
        ";
        // line 79
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
        
        $__internal_29fc3bd82e4bcee6e88edc973071604e24de7ec0dc6572488141f1d35ddcd26b->leave($__internal_29fc3bd82e4bcee6e88edc973071604e24de7ec0dc6572488141f1d35ddcd26b_prof);

        
        $__internal_83729e2f2820ae91739a91b7e0cdf21dd3ccf0818b1b3c4cf71cc89c5d5f84b8->leave($__internal_83729e2f2820ae91739a91b7e0cdf21dd3ccf0818b1b3c4cf71cc89c5d5f84b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f03d80d583b69c374f975d0776cc0a51487bc3a1d15f2319bd4222e3514ddec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f03d80d583b69c374f975d0776cc0a51487bc3a1d15f2319bd4222e3514ddec->enter($__internal_1f03d80d583b69c374f975d0776cc0a51487bc3a1d15f2319bd4222e3514ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bc7b36498176f0344ca198b9036b12f7a99cc8eecc76c1bf9c0869ad9bd38fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc7b36498176f0344ca198b9036b12f7a99cc8eecc76c1bf9c0869ad9bd38fd->enter($__internal_7bc7b36498176f0344ca198b9036b12f7a99cc8eecc76c1bf9c0869ad9bd38fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7bc7b36498176f0344ca198b9036b12f7a99cc8eecc76c1bf9c0869ad9bd38fd->leave($__internal_7bc7b36498176f0344ca198b9036b12f7a99cc8eecc76c1bf9c0869ad9bd38fd_prof);

        
        $__internal_1f03d80d583b69c374f975d0776cc0a51487bc3a1d15f2319bd4222e3514ddec->leave($__internal_1f03d80d583b69c374f975d0776cc0a51487bc3a1d15f2319bd4222e3514ddec_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e2f7158288bd40a71cd27c9c15078b908b8ebc25ef3b00ee5a7b49fe8a993e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2f7158288bd40a71cd27c9c15078b908b8ebc25ef3b00ee5a7b49fe8a993e5->enter($__internal_0e2f7158288bd40a71cd27c9c15078b908b8ebc25ef3b00ee5a7b49fe8a993e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_688ba9bb3bb8b117356d47d4ca4004a5fb07be3d7ffc09a6f9369be4027617ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688ba9bb3bb8b117356d47d4ca4004a5fb07be3d7ffc09a6f9369be4027617ff->enter($__internal_688ba9bb3bb8b117356d47d4ca4004a5fb07be3d7ffc09a6f9369be4027617ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_688ba9bb3bb8b117356d47d4ca4004a5fb07be3d7ffc09a6f9369be4027617ff->leave($__internal_688ba9bb3bb8b117356d47d4ca4004a5fb07be3d7ffc09a6f9369be4027617ff_prof);

        
        $__internal_0e2f7158288bd40a71cd27c9c15078b908b8ebc25ef3b00ee5a7b49fe8a993e5->leave($__internal_0e2f7158288bd40a71cd27c9c15078b908b8ebc25ef3b00ee5a7b49fe8a993e5_prof);

    }

    // line 27
    public function block_navAccueil($context, array $blocks = array())
    {
        $__internal_711a0e3427bf40a79e35da1824a98ca372a1b2cff0bbd67bd529d27aaf72cdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711a0e3427bf40a79e35da1824a98ca372a1b2cff0bbd67bd529d27aaf72cdbe->enter($__internal_711a0e3427bf40a79e35da1824a98ca372a1b2cff0bbd67bd529d27aaf72cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        $__internal_18ef55f4258691560584bb442e15a4db47649946ea665ccaee985cf6b0de43fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ef55f4258691560584bb442e15a4db47649946ea665ccaee985cf6b0de43fd->enter($__internal_18ef55f4258691560584bb442e15a4db47649946ea665ccaee985cf6b0de43fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAccueil"));

        
        $__internal_18ef55f4258691560584bb442e15a4db47649946ea665ccaee985cf6b0de43fd->leave($__internal_18ef55f4258691560584bb442e15a4db47649946ea665ccaee985cf6b0de43fd_prof);

        
        $__internal_711a0e3427bf40a79e35da1824a98ca372a1b2cff0bbd67bd529d27aaf72cdbe->leave($__internal_711a0e3427bf40a79e35da1824a98ca372a1b2cff0bbd67bd529d27aaf72cdbe_prof);

    }

    // line 28
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_c5523e9f8f6309ab349ed64be80570e7eac3075cbe7f5f86abd82f1294863612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5523e9f8f6309ab349ed64be80570e7eac3075cbe7f5f86abd82f1294863612->enter($__internal_c5523e9f8f6309ab349ed64be80570e7eac3075cbe7f5f86abd82f1294863612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_389d7fd5510b4c8b8d500017c1d29fc2226bf6e6ab66bbae209621eb7835ec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389d7fd5510b4c8b8d500017c1d29fc2226bf6e6ab66bbae209621eb7835ec75->enter($__internal_389d7fd5510b4c8b8d500017c1d29fc2226bf6e6ab66bbae209621eb7835ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        
        $__internal_389d7fd5510b4c8b8d500017c1d29fc2226bf6e6ab66bbae209621eb7835ec75->leave($__internal_389d7fd5510b4c8b8d500017c1d29fc2226bf6e6ab66bbae209621eb7835ec75_prof);

        
        $__internal_c5523e9f8f6309ab349ed64be80570e7eac3075cbe7f5f86abd82f1294863612->leave($__internal_c5523e9f8f6309ab349ed64be80570e7eac3075cbe7f5f86abd82f1294863612_prof);

    }

    // line 29
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_a1560200f8ad36185d3368840fa2c0027439e8d08ce712431761a016b160491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1560200f8ad36185d3368840fa2c0027439e8d08ce712431761a016b160491c->enter($__internal_a1560200f8ad36185d3368840fa2c0027439e8d08ce712431761a016b160491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_bb3fb4f0011f0a42a1497fab368a08312e9dd76803a4e44fdfa062d55902a02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3fb4f0011f0a42a1497fab368a08312e9dd76803a4e44fdfa062d55902a02d->enter($__internal_bb3fb4f0011f0a42a1497fab368a08312e9dd76803a4e44fdfa062d55902a02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        
        $__internal_bb3fb4f0011f0a42a1497fab368a08312e9dd76803a4e44fdfa062d55902a02d->leave($__internal_bb3fb4f0011f0a42a1497fab368a08312e9dd76803a4e44fdfa062d55902a02d_prof);

        
        $__internal_a1560200f8ad36185d3368840fa2c0027439e8d08ce712431761a016b160491c->leave($__internal_a1560200f8ad36185d3368840fa2c0027439e8d08ce712431761a016b160491c_prof);

    }

    // line 31
    public function block_navProfil($context, array $blocks = array())
    {
        $__internal_a1037aa4e3d68d4cc779f6204c7c4ce3fd2f16c181aa3ce78890005eab47250c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1037aa4e3d68d4cc779f6204c7c4ce3fd2f16c181aa3ce78890005eab47250c->enter($__internal_a1037aa4e3d68d4cc779f6204c7c4ce3fd2f16c181aa3ce78890005eab47250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        $__internal_2a3ff44152a881707acbdb47383a5922c3a2f8e892a64e61f001a2cb70de5cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3ff44152a881707acbdb47383a5922c3a2f8e892a64e61f001a2cb70de5cf6->enter($__internal_2a3ff44152a881707acbdb47383a5922c3a2f8e892a64e61f001a2cb70de5cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navProfil"));

        
        $__internal_2a3ff44152a881707acbdb47383a5922c3a2f8e892a64e61f001a2cb70de5cf6->leave($__internal_2a3ff44152a881707acbdb47383a5922c3a2f8e892a64e61f001a2cb70de5cf6_prof);

        
        $__internal_a1037aa4e3d68d4cc779f6204c7c4ce3fd2f16c181aa3ce78890005eab47250c->leave($__internal_a1037aa4e3d68d4cc779f6204c7c4ce3fd2f16c181aa3ce78890005eab47250c_prof);

    }

    // line 33
    public function block_navAdmin($context, array $blocks = array())
    {
        $__internal_086ad570f205bc960336ee75ca4945c7f458c6bf574deaed30ccefa200ab5a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086ad570f205bc960336ee75ca4945c7f458c6bf574deaed30ccefa200ab5a91->enter($__internal_086ad570f205bc960336ee75ca4945c7f458c6bf574deaed30ccefa200ab5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        $__internal_ee61a0773ad2ccc27515432b35b6ae804210987c8a53af522dfc11f80972bda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee61a0773ad2ccc27515432b35b6ae804210987c8a53af522dfc11f80972bda0->enter($__internal_ee61a0773ad2ccc27515432b35b6ae804210987c8a53af522dfc11f80972bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navAdmin"));

        
        $__internal_ee61a0773ad2ccc27515432b35b6ae804210987c8a53af522dfc11f80972bda0->leave($__internal_ee61a0773ad2ccc27515432b35b6ae804210987c8a53af522dfc11f80972bda0_prof);

        
        $__internal_086ad570f205bc960336ee75ca4945c7f458c6bf574deaed30ccefa200ab5a91->leave($__internal_086ad570f205bc960336ee75ca4945c7f458c6bf574deaed30ccefa200ab5a91_prof);

    }

    // line 35
    public function block_navDeco($context, array $blocks = array())
    {
        $__internal_146e6110efb17cef8d65627eca0d4cb60f4c9333f84e98192fcbe426c084d74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146e6110efb17cef8d65627eca0d4cb60f4c9333f84e98192fcbe426c084d74c->enter($__internal_146e6110efb17cef8d65627eca0d4cb60f4c9333f84e98192fcbe426c084d74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        $__internal_1dd4e9e41f918d8ca66d6b2fe54bceec293e87e8aa5f9ea71d923b667d995d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd4e9e41f918d8ca66d6b2fe54bceec293e87e8aa5f9ea71d923b667d995d2c->enter($__internal_1dd4e9e41f918d8ca66d6b2fe54bceec293e87e8aa5f9ea71d923b667d995d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navDeco"));

        
        $__internal_1dd4e9e41f918d8ca66d6b2fe54bceec293e87e8aa5f9ea71d923b667d995d2c->leave($__internal_1dd4e9e41f918d8ca66d6b2fe54bceec293e87e8aa5f9ea71d923b667d995d2c_prof);

        
        $__internal_146e6110efb17cef8d65627eca0d4cb60f4c9333f84e98192fcbe426c084d74c->leave($__internal_146e6110efb17cef8d65627eca0d4cb60f4c9333f84e98192fcbe426c084d74c_prof);

    }

    // line 37
    public function block_navCnx($context, array $blocks = array())
    {
        $__internal_512d25010b459a9e7b8262ed9135cd7b3347babe8ab117c29b8ff8f823d407e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512d25010b459a9e7b8262ed9135cd7b3347babe8ab117c29b8ff8f823d407e9->enter($__internal_512d25010b459a9e7b8262ed9135cd7b3347babe8ab117c29b8ff8f823d407e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        $__internal_c588cc789eed76ccedb5e08645f4e5c5dba825e051224355689253b2197cfc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c588cc789eed76ccedb5e08645f4e5c5dba825e051224355689253b2197cfc7c->enter($__internal_c588cc789eed76ccedb5e08645f4e5c5dba825e051224355689253b2197cfc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navCnx"));

        
        $__internal_c588cc789eed76ccedb5e08645f4e5c5dba825e051224355689253b2197cfc7c->leave($__internal_c588cc789eed76ccedb5e08645f4e5c5dba825e051224355689253b2197cfc7c_prof);

        
        $__internal_512d25010b459a9e7b8262ed9135cd7b3347babe8ab117c29b8ff8f823d407e9->leave($__internal_512d25010b459a9e7b8262ed9135cd7b3347babe8ab117c29b8ff8f823d407e9_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffadd244f563e60f666de6976506b13aca5b6935142c5c2e99d6b6b8597b5109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffadd244f563e60f666de6976506b13aca5b6935142c5c2e99d6b6b8597b5109->enter($__internal_ffadd244f563e60f666de6976506b13aca5b6935142c5c2e99d6b6b8597b5109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_910e24600ef25c10e4373e4eb85c7777549999e7cd9258f30d7723cd9372e750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910e24600ef25c10e4373e4eb85c7777549999e7cd9258f30d7723cd9372e750->enter($__internal_910e24600ef25c10e4373e4eb85c7777549999e7cd9258f30d7723cd9372e750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_910e24600ef25c10e4373e4eb85c7777549999e7cd9258f30d7723cd9372e750->leave($__internal_910e24600ef25c10e4373e4eb85c7777549999e7cd9258f30d7723cd9372e750_prof);

        
        $__internal_ffadd244f563e60f666de6976506b13aca5b6935142c5c2e99d6b6b8597b5109->leave($__internal_ffadd244f563e60f666de6976506b13aca5b6935142c5c2e99d6b6b8597b5109_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_151079c51cdec215159c53239059ddd6da25cd0c4a419d6344904b3d43d03cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151079c51cdec215159c53239059ddd6da25cd0c4a419d6344904b3d43d03cd5->enter($__internal_151079c51cdec215159c53239059ddd6da25cd0c4a419d6344904b3d43d03cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_021436bec5d7fa782ed271d0e201c1b6212a589ef190e1e770215478b1a59b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021436bec5d7fa782ed271d0e201c1b6212a589ef190e1e770215478b1a59b4b->enter($__internal_021436bec5d7fa782ed271d0e201c1b6212a589ef190e1e770215478b1a59b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_021436bec5d7fa782ed271d0e201c1b6212a589ef190e1e770215478b1a59b4b->leave($__internal_021436bec5d7fa782ed271d0e201c1b6212a589ef190e1e770215478b1a59b4b_prof);

        
        $__internal_151079c51cdec215159c53239059ddd6da25cd0c4a419d6344904b3d43d03cd5->leave($__internal_151079c51cdec215159c53239059ddd6da25cd0c4a419d6344904b3d43d03cd5_prof);

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
        return array (  371 => 79,  354 => 44,  337 => 37,  320 => 35,  303 => 33,  286 => 31,  269 => 29,  252 => 28,  235 => 27,  218 => 15,  200 => 5,  185 => 82,  181 => 80,  179 => 79,  143 => 45,  141 => 44,  134 => 39,  126 => 37,  118 => 35,  110 => 33,  108 => 32,  101 => 31,  99 => 30,  93 => 29,  87 => 28,  81 => 27,  72 => 23,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  42 => 5,  36 => 1,);
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
        <script type=\"text/javascript\">
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
