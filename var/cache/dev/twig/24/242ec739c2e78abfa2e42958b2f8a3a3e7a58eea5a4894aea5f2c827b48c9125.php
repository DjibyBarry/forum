<?php

/* @User/Posts/add.html.twig */
class __TwigTemplate_8d227b68f6b4f5c1ba5f0ee0d1e214017c2f831131f1325471d600fcdb51478e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Posts/add.html.twig", 1);
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
        $__internal_91fbde73e4eebbd89b6565599f0eeac393f324ff9a86d522aa0344dbdb95809b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fbde73e4eebbd89b6565599f0eeac393f324ff9a86d522aa0344dbdb95809b->enter($__internal_91fbde73e4eebbd89b6565599f0eeac393f324ff9a86d522aa0344dbdb95809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/add.html.twig"));

        $__internal_858a606dec18ed81bcc84d39aebba4917bf679f16798c1b3989f58b3b38f3707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858a606dec18ed81bcc84d39aebba4917bf679f16798c1b3989f58b3b38f3707->enter($__internal_858a606dec18ed81bcc84d39aebba4917bf679f16798c1b3989f58b3b38f3707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fbde73e4eebbd89b6565599f0eeac393f324ff9a86d522aa0344dbdb95809b->leave($__internal_91fbde73e4eebbd89b6565599f0eeac393f324ff9a86d522aa0344dbdb95809b_prof);

        
        $__internal_858a606dec18ed81bcc84d39aebba4917bf679f16798c1b3989f58b3b38f3707->leave($__internal_858a606dec18ed81bcc84d39aebba4917bf679f16798c1b3989f58b3b38f3707_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6064e9e3a3fc7b0459124455bfb798f9aa44c766056391f6733a1d273caed376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6064e9e3a3fc7b0459124455bfb798f9aa44c766056391f6733a1d273caed376->enter($__internal_6064e9e3a3fc7b0459124455bfb798f9aa44c766056391f6733a1d273caed376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03066b6fc2bc080ec987981dc1077cbb2a2035a821255e8efcb7df04e20c494e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03066b6fc2bc080ec987981dc1077cbb2a2035a821255e8efcb7df04e20c494e->enter($__internal_03066b6fc2bc080ec987981dc1077cbb2a2035a821255e8efcb7df04e20c494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau Post ";
        
        $__internal_03066b6fc2bc080ec987981dc1077cbb2a2035a821255e8efcb7df04e20c494e->leave($__internal_03066b6fc2bc080ec987981dc1077cbb2a2035a821255e8efcb7df04e20c494e_prof);

        
        $__internal_6064e9e3a3fc7b0459124455bfb798f9aa44c766056391f6733a1d273caed376->leave($__internal_6064e9e3a3fc7b0459124455bfb798f9aa44c766056391f6733a1d273caed376_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b3e7e066f33140f9951c52386541407ddf2362ec0b16dbc59b01efe6c593f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b3e7e066f33140f9951c52386541407ddf2362ec0b16dbc59b01efe6c593f2->enter($__internal_27b3e7e066f33140f9951c52386541407ddf2362ec0b16dbc59b01efe6c593f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74a2dc414b4cb8c1938c093b7c0a6364b8b47eddf7ff6a2c16a3509ae02b623f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a2dc414b4cb8c1938c093b7c0a6364b8b47eddf7ff6a2c16a3509ae02b623f->enter($__internal_74a2dc414b4cb8c1938c093b7c0a6364b8b47eddf7ff6a2c16a3509ae02b623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74a2dc414b4cb8c1938c093b7c0a6364b8b47eddf7ff6a2c16a3509ae02b623f->leave($__internal_74a2dc414b4cb8c1938c093b7c0a6364b8b47eddf7ff6a2c16a3509ae02b623f_prof);

        
        $__internal_27b3e7e066f33140f9951c52386541407ddf2362ec0b16dbc59b01efe6c593f2->leave($__internal_27b3e7e066f33140f9951c52386541407ddf2362ec0b16dbc59b01efe6c593f2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Posts/add.html.twig";
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
{% endblock %}", "@User/Posts/add.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\Posts\\add.html.twig");
    }
}
