<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_9e3b858047c60e853631e159296359ca9a2b83d75ee5f76909465b56e85bad3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_e7e10aa0948d87d9f35e6d1e750f6b9bd5e2ab08ec5e37624e57c1f3733ec1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e10aa0948d87d9f35e6d1e750f6b9bd5e2ab08ec5e37624e57c1f3733ec1c6->enter($__internal_e7e10aa0948d87d9f35e6d1e750f6b9bd5e2ab08ec5e37624e57c1f3733ec1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_ce0f54f9ffaf180726e9b534a000ec67df79b32978659f84db71a6839e854052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0f54f9ffaf180726e9b534a000ec67df79b32978659f84db71a6839e854052->enter($__internal_ce0f54f9ffaf180726e9b534a000ec67df79b32978659f84db71a6839e854052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e10aa0948d87d9f35e6d1e750f6b9bd5e2ab08ec5e37624e57c1f3733ec1c6->leave($__internal_e7e10aa0948d87d9f35e6d1e750f6b9bd5e2ab08ec5e37624e57c1f3733ec1c6_prof);

        
        $__internal_ce0f54f9ffaf180726e9b534a000ec67df79b32978659f84db71a6839e854052->leave($__internal_ce0f54f9ffaf180726e9b534a000ec67df79b32978659f84db71a6839e854052_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b93ebaf54aef704846b1a38a70ffb734534a91006944aea43e9f1b4bc377f81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93ebaf54aef704846b1a38a70ffb734534a91006944aea43e9f1b4bc377f81e->enter($__internal_b93ebaf54aef704846b1a38a70ffb734534a91006944aea43e9f1b4bc377f81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83ff393df638c25e595f75f239b8196084aa6bbce9de2c8afed3e3f65bee1407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ff393df638c25e595f75f239b8196084aa6bbce9de2c8afed3e3f65bee1407->enter($__internal_83ff393df638c25e595f75f239b8196084aa6bbce9de2c8afed3e3f65bee1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_83ff393df638c25e595f75f239b8196084aa6bbce9de2c8afed3e3f65bee1407->leave($__internal_83ff393df638c25e595f75f239b8196084aa6bbce9de2c8afed3e3f65bee1407_prof);

        
        $__internal_b93ebaf54aef704846b1a38a70ffb734534a91006944aea43e9f1b4bc377f81e->leave($__internal_b93ebaf54aef704846b1a38a70ffb734534a91006944aea43e9f1b4bc377f81e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
