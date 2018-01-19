<?php

/* @User/Annonces/categories.html.twig */
class __TwigTemplate_fbf8d636a79f9f500177d57f27d7bc1ef91c0fb64f734ddcfc4d6e1379372d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Annonces/categories.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_880122b75a11e49b752222dadc5e92d244a6e94ee34925b689c50c692c44cfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880122b75a11e49b752222dadc5e92d244a6e94ee34925b689c50c692c44cfb2->enter($__internal_880122b75a11e49b752222dadc5e92d244a6e94ee34925b689c50c692c44cfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Annonces/categories.html.twig"));

        $__internal_e0dde9005d16a3d110bc5f6414277578390a504c8dc94154b6354ad4c2e25974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dde9005d16a3d110bc5f6414277578390a504c8dc94154b6354ad4c2e25974->enter($__internal_e0dde9005d16a3d110bc5f6414277578390a504c8dc94154b6354ad4c2e25974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Annonces/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880122b75a11e49b752222dadc5e92d244a6e94ee34925b689c50c692c44cfb2->leave($__internal_880122b75a11e49b752222dadc5e92d244a6e94ee34925b689c50c692c44cfb2_prof);

        
        $__internal_e0dde9005d16a3d110bc5f6414277578390a504c8dc94154b6354ad4c2e25974->leave($__internal_e0dde9005d16a3d110bc5f6414277578390a504c8dc94154b6354ad4c2e25974_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_537c480b89ac9807f1d28eb442bf59974f85fcdd0df78a606e29f58a59dcdd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537c480b89ac9807f1d28eb442bf59974f85fcdd0df78a606e29f58a59dcdd7a->enter($__internal_537c480b89ac9807f1d28eb442bf59974f85fcdd0df78a606e29f58a59dcdd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d3edd3093634f164ae1bb7526d8ad599dba0ff69b7a83d7c5cbc6420e0fdc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3edd3093634f164ae1bb7526d8ad599dba0ff69b7a83d7c5cbc6420e0fdc31->enter($__internal_8d3edd3093634f164ae1bb7526d8ad599dba0ff69b7a83d7c5cbc6420e0fdc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Catégories ";
        
        $__internal_8d3edd3093634f164ae1bb7526d8ad599dba0ff69b7a83d7c5cbc6420e0fdc31->leave($__internal_8d3edd3093634f164ae1bb7526d8ad599dba0ff69b7a83d7c5cbc6420e0fdc31_prof);

        
        $__internal_537c480b89ac9807f1d28eb442bf59974f85fcdd0df78a606e29f58a59dcdd7a->leave($__internal_537c480b89ac9807f1d28eb442bf59974f85fcdd0df78a606e29f58a59dcdd7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24c6157e8d7efee8dd8ccb621f4fb1c3f8339ac37afa7fc47d9aca8ded17acf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c6157e8d7efee8dd8ccb621f4fb1c3f8339ac37afa7fc47d9aca8ded17acf0->enter($__internal_24c6157e8d7efee8dd8ccb621f4fb1c3f8339ac37afa7fc47d9aca8ded17acf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d74a8ace27deb4337dfbf994a3ab1f9a86a6e75ced8c7211e23330be96486520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74a8ace27deb4337dfbf994a3ab1f9a86a6e75ced8c7211e23330be96486520->enter($__internal_d74a8ace27deb4337dfbf994a3ab1f9a86a6e75ced8c7211e23330be96486520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

            <div class=\"col-md-12\">
                
                <div class=\"row\">

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) || array_key_exists("listCategories", $context) ? $context["listCategories"] : (function () { throw new Twig_Error_Runtime('Variable "listCategories" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            echo "                    
                    <div class=\"col-md-4\">
                            
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()))), "html", null, true);
            echo "\">
                        
                        <div class=\"card\" style=\"border: none;\">
                            
                        <img class=\"card-img-top\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/user/css/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "url", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\" />
                        
                            <div class=\"card-block\">
                                
                                <h4 class=\"card-title\" style=\"text-align: center; margin-top: 10px;\"><a style=\"color: #8b8b8b; text-decoration: none; \" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()), "html", null, true);
            echo "  </a> </h4>


                            </div>
                            
                        </div>
                        
                    </a>

                    </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    
                </div>
                    
            </div>
                




";
        
        $__internal_d74a8ace27deb4337dfbf994a3ab1f9a86a6e75ced8c7211e23330be96486520->leave($__internal_d74a8ace27deb4337dfbf994a3ab1f9a86a6e75ced8c7211e23330be96486520_prof);

        
        $__internal_24c6157e8d7efee8dd8ccb621f4fb1c3f8339ac37afa7fc47d9aca8ded17acf0->leave($__internal_24c6157e8d7efee8dd8ccb621f4fb1c3f8339ac37afa7fc47d9aca8ded17acf0_prof);

    }

    public function getTemplateName()
    {
        return "@User/Annonces/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  99 => 24,  92 => 20,  85 => 16,  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Catégories {% endblock %}

{% block body %}


            <div class=\"col-md-12\">
                
                <div class=\"row\">

            {% for categorie in listCategories %}
                    
                    <div class=\"col-md-4\">
                            
                    <a href=\"{{ path('posts', {'nomCategorie' : categorie.nom}) }}\">
                        
                        <div class=\"card\" style=\"border: none;\">
                            
                        <img class=\"card-img-top\" src=\"{{ asset('bundles/user/css/images/'~ categorie.url) }}\" alt=\"Card image cap\" />
                        
                            <div class=\"card-block\">
                                
                                <h4 class=\"card-title\" style=\"text-align: center; margin-top: 10px;\"><a style=\"color: #8b8b8b; text-decoration: none; \" href=\"{{ path('posts', {'nomCategorie' : categorie.nom}) }}\"> {{ categorie.nom }}  </a> </h4>


                            </div>
                            
                        </div>
                        
                    </a>

                    </div>
                
            {% endfor %}
                    
                </div>
                    
            </div>
                




{% endblock %}
", "@User/Annonces/categories.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\Annonces\\categories.html.twig");
    }
}
