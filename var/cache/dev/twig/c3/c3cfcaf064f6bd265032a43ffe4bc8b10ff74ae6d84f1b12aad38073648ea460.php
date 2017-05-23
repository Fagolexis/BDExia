<?php

/* MainBundle:Boutique:show.html.twig */
class __TwigTemplate_e60e4bda6d381807643f63c59188ec764ba1a9a091dd17881704521f046b0c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Boutique:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navBoutique' => array($this, 'block_navBoutique'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bdb440debe104d4a5cf208674d94f2c2ad32d4450cd528e3cac1635af8c1fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdb440debe104d4a5cf208674d94f2c2ad32d4450cd528e3cac1635af8c1fc9->enter($__internal_8bdb440debe104d4a5cf208674d94f2c2ad32d4450cd528e3cac1635af8c1fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $__internal_20190ba2b31a932162c79570ff27bc5b85406b8032bdb3afe88690ac8cdc810f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20190ba2b31a932162c79570ff27bc5b85406b8032bdb3afe88690ac8cdc810f->enter($__internal_20190ba2b31a932162c79570ff27bc5b85406b8032bdb3afe88690ac8cdc810f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdb440debe104d4a5cf208674d94f2c2ad32d4450cd528e3cac1635af8c1fc9->leave($__internal_8bdb440debe104d4a5cf208674d94f2c2ad32d4450cd528e3cac1635af8c1fc9_prof);

        
        $__internal_20190ba2b31a932162c79570ff27bc5b85406b8032bdb3afe88690ac8cdc810f->leave($__internal_20190ba2b31a932162c79570ff27bc5b85406b8032bdb3afe88690ac8cdc810f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70168f9c7d094507ab76057ca05491447df3ca910fd7121e77948d33710bdc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70168f9c7d094507ab76057ca05491447df3ca910fd7121e77948d33710bdc29->enter($__internal_70168f9c7d094507ab76057ca05491447df3ca910fd7121e77948d33710bdc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_518d25c2c044bc1a74ea6d73052efe26c701404bbb659db19d2e03b6fc602b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518d25c2c044bc1a74ea6d73052efe26c701404bbb659db19d2e03b6fc602b6a->enter($__internal_518d25c2c044bc1a74ea6d73052efe26c701404bbb659db19d2e03b6fc602b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_518d25c2c044bc1a74ea6d73052efe26c701404bbb659db19d2e03b6fc602b6a->leave($__internal_518d25c2c044bc1a74ea6d73052efe26c701404bbb659db19d2e03b6fc602b6a_prof);

        
        $__internal_70168f9c7d094507ab76057ca05491447df3ca910fd7121e77948d33710bdc29->leave($__internal_70168f9c7d094507ab76057ca05491447df3ca910fd7121e77948d33710bdc29_prof);

    }

    // line 5
    public function block_navBoutique($context, array $blocks = array())
    {
        $__internal_4bb10f56bb3045870174ce6d6685d32570c004957db3b101b8de6bc6b95ddbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb10f56bb3045870174ce6d6685d32570c004957db3b101b8de6bc6b95ddbfd->enter($__internal_4bb10f56bb3045870174ce6d6685d32570c004957db3b101b8de6bc6b95ddbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        $__internal_8ef704affef606543e66cd3cec2dd3f047174c7a526344eb1f7a83da338dabad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef704affef606543e66cd3cec2dd3f047174c7a526344eb1f7a83da338dabad->enter($__internal_8ef704affef606543e66cd3cec2dd3f047174c7a526344eb1f7a83da338dabad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBoutique"));

        echo "class=\"active\"";
        
        $__internal_8ef704affef606543e66cd3cec2dd3f047174c7a526344eb1f7a83da338dabad->leave($__internal_8ef704affef606543e66cd3cec2dd3f047174c7a526344eb1f7a83da338dabad_prof);

        
        $__internal_4bb10f56bb3045870174ce6d6685d32570c004957db3b101b8de6bc6b95ddbfd->leave($__internal_4bb10f56bb3045870174ce6d6685d32570c004957db3b101b8de6bc6b95ddbfd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3803f92fe2d64703fcd33946ace05b801e2f29ec6be79991012118b2fa8a16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3803f92fe2d64703fcd33946ace05b801e2f29ec6be79991012118b2fa8a16d->enter($__internal_c3803f92fe2d64703fcd33946ace05b801e2f29ec6be79991012118b2fa8a16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63c911b7adaca9e0a4ef6a9eb238dc6410142167d2a60f6acff32d9c76b14a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c911b7adaca9e0a4ef6a9eb238dc6410142167d2a60f6acff32d9c76b14a9f->enter($__internal_63c911b7adaca9e0a4ef6a9eb238dc6410142167d2a60f6acff32d9c76b14a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
\t<div class=\"col-md-offset-9 corpsMargin\">
\t\t<i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i>&nbsp;
\t\t<a href=\"#\">Votre panier</a>&nbsp;
\t\t<span>3</span><!-- nombre de produits dans le panier -->
\t</div>
\t<div class=\"col-md-8 col-md-offset-2 contenuCorps\">
\t\t<div class=\"col-xs-4 col-sm-2 col-md-2 col-lg-2 imgProduit\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lunettes_150x130.png"), "html", null, true);
        echo "\" alt=\"img Produit\" title=\"Produit\">
\t\t</div>
\t\t<table class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t<td>56csdger86vd</td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<td>Lunettes CESI</td><!-- Nom du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<td>12.49&nbsp;€</td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Quantitée</th>
\t\t\t\t\t<td><input type=\"input\" name=\"qttProduct\" value=\"1\"></input></td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2 col-md-offset-1\">
\t\t\t\t<button class=\"inscription\"><h4>acheter</h4></button>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-12 description\">
\t\t\t<span>Descritpion</span>
\t\t\t<!-- texte de description du produit -->
\t\t\t<p>
\t\t\t\tnteger gravida consectetur elit, nec imperdiet ante malesuada vel. Duis sagittis velit non enim tincidunt sagittis a eu ex. In at rhoncus sem. Fusce velit diam, aliquet at nulla vitae, lacinia posuere lorem. Proin malesuada mi quis nunc lobortis commodo. Phasellus nec volutpat magna. Quisque suscipit ex in metus consequat, sit amet ullamcorper arcu laoreet. Fusce consectetur, ligula nec volutpat aliquam, sem metus feugiat justo, eget iaculis felis nibh rhoncus lectus. Mauris mattis massa at pretium mollis. Donec elementum vel orci eget sollicitudin. Nullam faucibus nibh sed posuere mollis. Duis ex erat, porttitor et venenatis sed, fringilla aliquam neque. Integer at varius magna. Aenean scelerisque ornare luctus.
\t\t\t</p>\t\t\t\t
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_63c911b7adaca9e0a4ef6a9eb238dc6410142167d2a60f6acff32d9c76b14a9f->leave($__internal_63c911b7adaca9e0a4ef6a9eb238dc6410142167d2a60f6acff32d9c76b14a9f_prof);

        
        $__internal_c3803f92fe2d64703fcd33946ace05b801e2f29ec6be79991012118b2fa8a16d->leave($__internal_c3803f92fe2d64703fcd33946ace05b801e2f29ec6be79991012118b2fa8a16d_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Boutique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Produit{% endblock %}

{% block navBoutique %}class=\"active\"{% endblock %}

{% block body %}
<main>
\t<div class=\"col-md-offset-9 corpsMargin\">
\t\t<i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i>&nbsp;
\t\t<a href=\"#\">Votre panier</a>&nbsp;
\t\t<span>3</span><!-- nombre de produits dans le panier -->
\t</div>
\t<div class=\"col-md-8 col-md-offset-2 contenuCorps\">
\t\t<div class=\"col-xs-4 col-sm-2 col-md-2 col-lg-2 imgProduit\">
\t\t\t<img src=\"{{ asset('img/lunettes_150x130.png') }}\" alt=\"img Produit\" title=\"Produit\">
\t\t</div>
\t\t<table class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t<td>56csdger86vd</td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<td>Lunettes CESI</td><!-- Nom du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<td>12.49&nbsp;€</td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Quantitée</th>
\t\t\t\t\t<td><input type=\"input\" name=\"qttProduct\" value=\"1\"></input></td><!-- Référence du produit -->
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2 col-md-offset-1\">
\t\t\t\t<button class=\"inscription\"><h4>acheter</h4></button>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-12 description\">
\t\t\t<span>Descritpion</span>
\t\t\t<!-- texte de description du produit -->
\t\t\t<p>
\t\t\t\tnteger gravida consectetur elit, nec imperdiet ante malesuada vel. Duis sagittis velit non enim tincidunt sagittis a eu ex. In at rhoncus sem. Fusce velit diam, aliquet at nulla vitae, lacinia posuere lorem. Proin malesuada mi quis nunc lobortis commodo. Phasellus nec volutpat magna. Quisque suscipit ex in metus consequat, sit amet ullamcorper arcu laoreet. Fusce consectetur, ligula nec volutpat aliquam, sem metus feugiat justo, eget iaculis felis nibh rhoncus lectus. Mauris mattis massa at pretium mollis. Donec elementum vel orci eget sollicitudin. Nullam faucibus nibh sed posuere mollis. Duis ex erat, porttitor et venenatis sed, fringilla aliquam neque. Integer at varius magna. Aenean scelerisque ornare luctus.
\t\t\t</p>\t\t\t\t
\t\t</div>
\t</div>
\t<div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Boutique:show.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Boutique/show.html.twig");
    }
}
