<?php

/* @User/categoriesAdmin/newCat.html.twig */
class __TwigTemplate_3927da50d91a2287f5e65134dd8fd989fe6466112f64ec57e33f8f26176d201a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/categoriesAdmin/newCat.html.twig", 1);
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
        $__internal_ba6483fe87c93e677507d71062fdc215b1aa664481859a1576222c6ebfcba449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6483fe87c93e677507d71062fdc215b1aa664481859a1576222c6ebfcba449->enter($__internal_ba6483fe87c93e677507d71062fdc215b1aa664481859a1576222c6ebfcba449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/newCat.html.twig"));

        $__internal_0f4c0e11b591cf2af62641f1f206cdba23ba020e388bb0d95cc991a6030aebb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4c0e11b591cf2af62641f1f206cdba23ba020e388bb0d95cc991a6030aebb2->enter($__internal_0f4c0e11b591cf2af62641f1f206cdba23ba020e388bb0d95cc991a6030aebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/newCat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6483fe87c93e677507d71062fdc215b1aa664481859a1576222c6ebfcba449->leave($__internal_ba6483fe87c93e677507d71062fdc215b1aa664481859a1576222c6ebfcba449_prof);

        
        $__internal_0f4c0e11b591cf2af62641f1f206cdba23ba020e388bb0d95cc991a6030aebb2->leave($__internal_0f4c0e11b591cf2af62641f1f206cdba23ba020e388bb0d95cc991a6030aebb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c7d8365c5f5cbf8e4877944d9615d2b6e9fb59fafc97631f91b3ffda5ae1941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7d8365c5f5cbf8e4877944d9615d2b6e9fb59fafc97631f91b3ffda5ae1941->enter($__internal_0c7d8365c5f5cbf8e4877944d9615d2b6e9fb59fafc97631f91b3ffda5ae1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bfcb5055a1a6cc1eb92157722935b889264df61a6653e3d516a744a7c1d94e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfcb5055a1a6cc1eb92157722935b889264df61a6653e3d516a744a7c1d94e4->enter($__internal_6bfcb5055a1a6cc1eb92157722935b889264df61a6653e3d516a744a7c1d94e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouvelle Catégorie ";
        
        $__internal_6bfcb5055a1a6cc1eb92157722935b889264df61a6653e3d516a744a7c1d94e4->leave($__internal_6bfcb5055a1a6cc1eb92157722935b889264df61a6653e3d516a744a7c1d94e4_prof);

        
        $__internal_0c7d8365c5f5cbf8e4877944d9615d2b6e9fb59fafc97631f91b3ffda5ae1941->leave($__internal_0c7d8365c5f5cbf8e4877944d9615d2b6e9fb59fafc97631f91b3ffda5ae1941_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_15212157aa2ea79ae4816f1ec9408e8f1f3e2762db215428c81684861c90850b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15212157aa2ea79ae4816f1ec9408e8f1f3e2762db215428c81684861c90850b->enter($__internal_15212157aa2ea79ae4816f1ec9408e8f1f3e2762db215428c81684861c90850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9125c4310ba1190df72b0954dfc0e41748899d792f7c3c47624769f46233fef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9125c4310ba1190df72b0954dfc0e41748899d792f7c3c47624769f46233fef3->enter($__internal_9125c4310ba1190df72b0954dfc0e41748899d792f7c3c47624769f46233fef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9125c4310ba1190df72b0954dfc0e41748899d792f7c3c47624769f46233fef3->leave($__internal_9125c4310ba1190df72b0954dfc0e41748899d792f7c3c47624769f46233fef3_prof);

        
        $__internal_15212157aa2ea79ae4816f1ec9408e8f1f3e2762db215428c81684861c90850b->leave($__internal_15212157aa2ea79ae4816f1ec9408e8f1f3e2762db215428c81684861c90850b_prof);

    }

    public function getTemplateName()
    {
        return "@User/categoriesAdmin/newCat.html.twig";
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

{% endblock %}", "@User/categoriesAdmin/newCat.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\categoriesAdmin\\newCat.html.twig");
    }
}
