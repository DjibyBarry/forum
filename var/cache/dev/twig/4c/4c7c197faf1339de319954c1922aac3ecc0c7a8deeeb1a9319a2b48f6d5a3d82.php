<?php

/* UserBundle:Posts:add.html.twig */
class __TwigTemplate_bf60f77f5c125afed614f57faabd3bf8e4a541a323daf9be9cfaeb4a30a6282c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:Posts:add.html.twig", 1);
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
        $__internal_4dc28a7d680dd546d3801c5d9f5f35b138a9a9bd44caf554a82ad4f8cb6177e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc28a7d680dd546d3801c5d9f5f35b138a9a9bd44caf554a82ad4f8cb6177e5->enter($__internal_4dc28a7d680dd546d3801c5d9f5f35b138a9a9bd44caf554a82ad4f8cb6177e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Posts:add.html.twig"));

        $__internal_42bccdc22035a4bd286141a6c3abbdefa9da9c7899d8beb12f219c7ca1c1b32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bccdc22035a4bd286141a6c3abbdefa9da9c7899d8beb12f219c7ca1c1b32a->enter($__internal_42bccdc22035a4bd286141a6c3abbdefa9da9c7899d8beb12f219c7ca1c1b32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Posts:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc28a7d680dd546d3801c5d9f5f35b138a9a9bd44caf554a82ad4f8cb6177e5->leave($__internal_4dc28a7d680dd546d3801c5d9f5f35b138a9a9bd44caf554a82ad4f8cb6177e5_prof);

        
        $__internal_42bccdc22035a4bd286141a6c3abbdefa9da9c7899d8beb12f219c7ca1c1b32a->leave($__internal_42bccdc22035a4bd286141a6c3abbdefa9da9c7899d8beb12f219c7ca1c1b32a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0977cf0d2b54c5c38da8e7f24d51dc68eb0830d071e1c3f969d52800dd7e9414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0977cf0d2b54c5c38da8e7f24d51dc68eb0830d071e1c3f969d52800dd7e9414->enter($__internal_0977cf0d2b54c5c38da8e7f24d51dc68eb0830d071e1c3f969d52800dd7e9414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bab5c54efe41db4275cb08bb10a6e9901f48a5b0e017c33f3179a327329b31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bab5c54efe41db4275cb08bb10a6e9901f48a5b0e017c33f3179a327329b31c->enter($__internal_6bab5c54efe41db4275cb08bb10a6e9901f48a5b0e017c33f3179a327329b31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau Post ";
        
        $__internal_6bab5c54efe41db4275cb08bb10a6e9901f48a5b0e017c33f3179a327329b31c->leave($__internal_6bab5c54efe41db4275cb08bb10a6e9901f48a5b0e017c33f3179a327329b31c_prof);

        
        $__internal_0977cf0d2b54c5c38da8e7f24d51dc68eb0830d071e1c3f969d52800dd7e9414->leave($__internal_0977cf0d2b54c5c38da8e7f24d51dc68eb0830d071e1c3f969d52800dd7e9414_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1dabf79953bbf2af6dc70a4214f1a03adb24fb59d0e1d5ba2760aba86caa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1dabf79953bbf2af6dc70a4214f1a03adb24fb59d0e1d5ba2760aba86caa2d->enter($__internal_8f1dabf79953bbf2af6dc70a4214f1a03adb24fb59d0e1d5ba2760aba86caa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34533a40fa34b5875d4cc61adeba2619a13ca965fdf511d851df26c5a09abdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34533a40fa34b5875d4cc61adeba2619a13ca965fdf511d851df26c5a09abdcf->enter($__internal_34533a40fa34b5875d4cc61adeba2619a13ca965fdf511d851df26c5a09abdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"col-md-12\" style=\"background-color: #efefef; padding-top: 25px; padding-bottom: 25px;\">
    
<div class=\"row\">

    <div class=\"col-md-12\">
        
        <h2 style=\"text-align: center;\"> Ajouter un nouveau sujet </h2>
    
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
        
        $__internal_34533a40fa34b5875d4cc61adeba2619a13ca965fdf511d851df26c5a09abdcf->leave($__internal_34533a40fa34b5875d4cc61adeba2619a13ca965fdf511d851df26c5a09abdcf_prof);

        
        $__internal_8f1dabf79953bbf2af6dc70a4214f1a03adb24fb59d0e1d5ba2760aba86caa2d->leave($__internal_8f1dabf79953bbf2af6dc70a4214f1a03adb24fb59d0e1d5ba2760aba86caa2d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Posts:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Nouveau Post {% endblock %}

{% block body %}


<div class=\"col-md-12\" style=\"background-color: #efefef; padding-top: 25px; padding-bottom: 25px;\">
    
<div class=\"row\">

    <div class=\"col-md-12\">
        
        <h2 style=\"text-align: center;\"> Ajouter un nouveau sujet </h2>
    
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
{% endblock %}", "UserBundle:Posts:add.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/Posts/add.html.twig");
    }
}
