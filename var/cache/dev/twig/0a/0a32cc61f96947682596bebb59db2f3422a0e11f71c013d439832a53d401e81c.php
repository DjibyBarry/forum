<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_ff17e658335a1bc5e9b5e6f933ae912cd2e1a1d2545f74f4623909382c9c084f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dc23c59098bf271c58a55e8d8effb88b2abd45c2025356f5c760e7094f7b523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc23c59098bf271c58a55e8d8effb88b2abd45c2025356f5c760e7094f7b523->enter($__internal_4dc23c59098bf271c58a55e8d8effb88b2abd45c2025356f5c760e7094f7b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_94851c7feaea430183f374747e2a93b35a11cac0d1243c7a290c5d3db44fc381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94851c7feaea430183f374747e2a93b35a11cac0d1243c7a290c5d3db44fc381->enter($__internal_94851c7feaea430183f374747e2a93b35a11cac0d1243c7a290c5d3db44fc381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc23c59098bf271c58a55e8d8effb88b2abd45c2025356f5c760e7094f7b523->leave($__internal_4dc23c59098bf271c58a55e8d8effb88b2abd45c2025356f5c760e7094f7b523_prof);

        
        $__internal_94851c7feaea430183f374747e2a93b35a11cac0d1243c7a290c5d3db44fc381->leave($__internal_94851c7feaea430183f374747e2a93b35a11cac0d1243c7a290c5d3db44fc381_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c59a7795338359af360a622c401627b053ef589c935b4a8b8a5a0b751dcc06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c59a7795338359af360a622c401627b053ef589c935b4a8b8a5a0b751dcc06a->enter($__internal_6c59a7795338359af360a622c401627b053ef589c935b4a8b8a5a0b751dcc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf516452f260d50fbd9810b00ea35afdca0bb9f7370a724ae0822f76aa2800b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf516452f260d50fbd9810b00ea35afdca0bb9f7370a724ae0822f76aa2800b0->enter($__internal_bf516452f260d50fbd9810b00ea35afdca0bb9f7370a724ae0822f76aa2800b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bf516452f260d50fbd9810b00ea35afdca0bb9f7370a724ae0822f76aa2800b0->leave($__internal_bf516452f260d50fbd9810b00ea35afdca0bb9f7370a724ae0822f76aa2800b0_prof);

        
        $__internal_6c59a7795338359af360a622c401627b053ef589c935b4a8b8a5a0b751dcc06a->leave($__internal_6c59a7795338359af360a622c401627b053ef589c935b4a8b8a5a0b751dcc06a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
