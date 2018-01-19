<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bda0b5406108b67042ba9cb6bfad9c33f2a5f1e4fa53ec7c9742fafb457fb532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3af52e824647c8732c207c571f7dc193b6b9e677cb0c5aaf15ffd3b0a4eb811d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af52e824647c8732c207c571f7dc193b6b9e677cb0c5aaf15ffd3b0a4eb811d->enter($__internal_3af52e824647c8732c207c571f7dc193b6b9e677cb0c5aaf15ffd3b0a4eb811d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_6ccaed71e6e56f3eb08de9dc5a0d3316cc7ca957dab94cfecb4e450b8cc304ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccaed71e6e56f3eb08de9dc5a0d3316cc7ca957dab94cfecb4e450b8cc304ea->enter($__internal_6ccaed71e6e56f3eb08de9dc5a0d3316cc7ca957dab94cfecb4e450b8cc304ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af52e824647c8732c207c571f7dc193b6b9e677cb0c5aaf15ffd3b0a4eb811d->leave($__internal_3af52e824647c8732c207c571f7dc193b6b9e677cb0c5aaf15ffd3b0a4eb811d_prof);

        
        $__internal_6ccaed71e6e56f3eb08de9dc5a0d3316cc7ca957dab94cfecb4e450b8cc304ea->leave($__internal_6ccaed71e6e56f3eb08de9dc5a0d3316cc7ca957dab94cfecb4e450b8cc304ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8651bf91957e933282390e5464e084251acb5ec35a514d5435497f6c203f4553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8651bf91957e933282390e5464e084251acb5ec35a514d5435497f6c203f4553->enter($__internal_8651bf91957e933282390e5464e084251acb5ec35a514d5435497f6c203f4553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ccc0861d4d5a2dfb1a10bbb2de6083b955ef62d148b90a60afd0295846e1b8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc0861d4d5a2dfb1a10bbb2de6083b955ef62d148b90a60afd0295846e1b8b7->enter($__internal_ccc0861d4d5a2dfb1a10bbb2de6083b955ef62d148b90a60afd0295846e1b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ccc0861d4d5a2dfb1a10bbb2de6083b955ef62d148b90a60afd0295846e1b8b7->leave($__internal_ccc0861d4d5a2dfb1a10bbb2de6083b955ef62d148b90a60afd0295846e1b8b7_prof);

        
        $__internal_8651bf91957e933282390e5464e084251acb5ec35a514d5435497f6c203f4553->leave($__internal_8651bf91957e933282390e5464e084251acb5ec35a514d5435497f6c203f4553_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
