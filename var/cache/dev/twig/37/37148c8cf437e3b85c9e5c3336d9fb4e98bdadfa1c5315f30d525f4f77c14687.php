<?php

/* UserBundle:categoriesAdmin:newCat.html.twig */
class __TwigTemplate_41780474917e477e2b3504396cbc02d27194fc77976f92ee3bb6278556f0c614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:categoriesAdmin:newCat.html.twig", 1);
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
        $__internal_26dd3af8c375f2fee379e645de197c29a0ce1739ae9c8548a74dd15166bed5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26dd3af8c375f2fee379e645de197c29a0ce1739ae9c8548a74dd15166bed5f8->enter($__internal_26dd3af8c375f2fee379e645de197c29a0ce1739ae9c8548a74dd15166bed5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:newCat.html.twig"));

        $__internal_93b6e96960287cfa30374a710cdfc605d26e2509a3b8dc3d37ff9cdc1f8b9672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b6e96960287cfa30374a710cdfc605d26e2509a3b8dc3d37ff9cdc1f8b9672->enter($__internal_93b6e96960287cfa30374a710cdfc605d26e2509a3b8dc3d37ff9cdc1f8b9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:newCat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26dd3af8c375f2fee379e645de197c29a0ce1739ae9c8548a74dd15166bed5f8->leave($__internal_26dd3af8c375f2fee379e645de197c29a0ce1739ae9c8548a74dd15166bed5f8_prof);

        
        $__internal_93b6e96960287cfa30374a710cdfc605d26e2509a3b8dc3d37ff9cdc1f8b9672->leave($__internal_93b6e96960287cfa30374a710cdfc605d26e2509a3b8dc3d37ff9cdc1f8b9672_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_743bf4f75ab17e3444b8542c0f2beb30c514674a6a3a976834aaa544f8eb1e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743bf4f75ab17e3444b8542c0f2beb30c514674a6a3a976834aaa544f8eb1e0c->enter($__internal_743bf4f75ab17e3444b8542c0f2beb30c514674a6a3a976834aaa544f8eb1e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_152b76c40408d2b6b1c06dfbe4db55d56a8564ecc8ec72bf353462207670bec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152b76c40408d2b6b1c06dfbe4db55d56a8564ecc8ec72bf353462207670bec7->enter($__internal_152b76c40408d2b6b1c06dfbe4db55d56a8564ecc8ec72bf353462207670bec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouvelle Catégorie ";
        
        $__internal_152b76c40408d2b6b1c06dfbe4db55d56a8564ecc8ec72bf353462207670bec7->leave($__internal_152b76c40408d2b6b1c06dfbe4db55d56a8564ecc8ec72bf353462207670bec7_prof);

        
        $__internal_743bf4f75ab17e3444b8542c0f2beb30c514674a6a3a976834aaa544f8eb1e0c->leave($__internal_743bf4f75ab17e3444b8542c0f2beb30c514674a6a3a976834aaa544f8eb1e0c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_412be20dad122ef7021f344a4c82ef36d6d65bd7940b1244adedf59dff2ce58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412be20dad122ef7021f344a4c82ef36d6d65bd7940b1244adedf59dff2ce58d->enter($__internal_412be20dad122ef7021f344a4c82ef36d6d65bd7940b1244adedf59dff2ce58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89f0734d100a5b6987a3c09f37963b8bfb9739f4db94da72b91a86ff3f4ed86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f0734d100a5b6987a3c09f37963b8bfb9739f4db94da72b91a86ff3f4ed86e->enter($__internal_89f0734d100a5b6987a3c09f37963b8bfb9739f4db94da72b91a86ff3f4ed86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"col-md-12\" style=\"background-color: #efefef; padding-top: 25px; padding-bottom: 25px;\">
    
<div class=\"row\">

    <div class=\"col-md-12\">
        
        <h2 style=\"text-align: center;\"> Ajouter une catégorie </h2>
    
    </div>
    
</div>
    
<div class=\"row\">
    
    <div class=\"col-md-6 offset-md-3\">
    
        <div class=\"well\">

          ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form');
        echo "

        </div>
    
    </div>
    
</div>

    </div>

";
        
        $__internal_89f0734d100a5b6987a3c09f37963b8bfb9739f4db94da72b91a86ff3f4ed86e->leave($__internal_89f0734d100a5b6987a3c09f37963b8bfb9739f4db94da72b91a86ff3f4ed86e_prof);

        
        $__internal_412be20dad122ef7021f344a4c82ef36d6d65bd7940b1244adedf59dff2ce58d->leave($__internal_412be20dad122ef7021f344a4c82ef36d6d65bd7940b1244adedf59dff2ce58d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:categoriesAdmin:newCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Nouvelle Catégorie {% endblock %}


{% block body %}

<div class=\"col-md-12\" style=\"background-color: #efefef; padding-top: 25px; padding-bottom: 25px;\">
    
<div class=\"row\">

    <div class=\"col-md-12\">
        
        <h2 style=\"text-align: center;\"> Ajouter une catégorie </h2>
    
    </div>
    
</div>
    
<div class=\"row\">
    
    <div class=\"col-md-6 offset-md-3\">
    
        <div class=\"well\">

          {{ form(form) }}

        </div>
    
    </div>
    
</div>

    </div>

{% endblock %}", "UserBundle:categoriesAdmin:newCat.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/categoriesAdmin/newCat.html.twig");
    }
}
