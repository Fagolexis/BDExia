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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7f193b69705c6f88abbb4faad099f56de5728e0dd22c5ff20f7bada1a117b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7f193b69705c6f88abbb4faad099f56de5728e0dd22c5ff20f7bada1a117b9->enter($__internal_2e7f193b69705c6f88abbb4faad099f56de5728e0dd22c5ff20f7bada1a117b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $__internal_1c874ade897e988f7c67638f3e0149d48a45cad986aba9c75bb623c56ef92db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c874ade897e988f7c67638f3e0149d48a45cad986aba9c75bb623c56ef92db8->enter($__internal_1c874ade897e988f7c67638f3e0149d48a45cad986aba9c75bb623c56ef92db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7f193b69705c6f88abbb4faad099f56de5728e0dd22c5ff20f7bada1a117b9->leave($__internal_2e7f193b69705c6f88abbb4faad099f56de5728e0dd22c5ff20f7bada1a117b9_prof);

        
        $__internal_1c874ade897e988f7c67638f3e0149d48a45cad986aba9c75bb623c56ef92db8->leave($__internal_1c874ade897e988f7c67638f3e0149d48a45cad986aba9c75bb623c56ef92db8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ef21268563bed0853278672faa1dbb2dc382cf8e52654cbd4c0c4a4daef936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ef21268563bed0853278672faa1dbb2dc382cf8e52654cbd4c0c4a4daef936->enter($__internal_00ef21268563bed0853278672faa1dbb2dc382cf8e52654cbd4c0c4a4daef936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8d050610a1293eb67fa985fae3e9ca70f848e131154e53470de8c937e099e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d050610a1293eb67fa985fae3e9ca70f848e131154e53470de8c937e099e97->enter($__internal_d8d050610a1293eb67fa985fae3e9ca70f848e131154e53470de8c937e099e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit";
        
        $__internal_d8d050610a1293eb67fa985fae3e9ca70f848e131154e53470de8c937e099e97->leave($__internal_d8d050610a1293eb67fa985fae3e9ca70f848e131154e53470de8c937e099e97_prof);

        
        $__internal_00ef21268563bed0853278672faa1dbb2dc382cf8e52654cbd4c0c4a4daef936->leave($__internal_00ef21268563bed0853278672faa1dbb2dc382cf8e52654cbd4c0c4a4daef936_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66292e89a74e3ec61731e40cbddb658762e14323ab6d921fca858696e24d7eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66292e89a74e3ec61731e40cbddb658762e14323ab6d921fca858696e24d7eb5->enter($__internal_66292e89a74e3ec61731e40cbddb658762e14323ab6d921fca858696e24d7eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_001fa62218066a1ee8d42caf29361724e4827afc261b29596a7a9690c491916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001fa62218066a1ee8d42caf29361724e4827afc261b29596a7a9690c491916e->enter($__internal_001fa62218066a1ee8d42caf29361724e4827afc261b29596a7a9690c491916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>
\t<div class=\"col-md-offset-9 corpsMargin\">
\t\t<i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i>&nbsp;
\t\t<a href=\"#\">Votre panier</a>&nbsp;
\t\t<span>3</span><!-- nombre de produits dans le panier -->
\t</div>
\t<div class=\"col-md-8 col-md-offset-2 contenuCorps\">
\t\t<div class=\"col-xs-4 col-sm-2 col-md-2 col-lg-2 imgProduit\">
\t\t\t<img src=\"";
        // line 14
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
        
        $__internal_001fa62218066a1ee8d42caf29361724e4827afc261b29596a7a9690c491916e->leave($__internal_001fa62218066a1ee8d42caf29361724e4827afc261b29596a7a9690c491916e_prof);

        
        $__internal_66292e89a74e3ec61731e40cbddb658762e14323ab6d921fca858696e24d7eb5->leave($__internal_66292e89a74e3ec61731e40cbddb658762e14323ab6d921fca858696e24d7eb5_prof);

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
        return array (  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
