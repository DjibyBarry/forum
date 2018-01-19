<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2cdccea3b08b6eb9690ae8964c4604991c6691ef6cbc6e705f188b2767c9b98a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c25e4495f8bb9f90d60d925e799954f4a93713daa1ce7331c56f6e76ddc309b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c25e4495f8bb9f90d60d925e799954f4a93713daa1ce7331c56f6e76ddc309b->enter($__internal_9c25e4495f8bb9f90d60d925e799954f4a93713daa1ce7331c56f6e76ddc309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_212cae03aaa4768082600c201d1a199ddb4f9ebc5dbea0a818d6cc2d9a55650b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212cae03aaa4768082600c201d1a199ddb4f9ebc5dbea0a818d6cc2d9a55650b->enter($__internal_212cae03aaa4768082600c201d1a199ddb4f9ebc5dbea0a818d6cc2d9a55650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9c25e4495f8bb9f90d60d925e799954f4a93713daa1ce7331c56f6e76ddc309b->leave($__internal_9c25e4495f8bb9f90d60d925e799954f4a93713daa1ce7331c56f6e76ddc309b_prof);

        
        $__internal_212cae03aaa4768082600c201d1a199ddb4f9ebc5dbea0a818d6cc2d9a55650b->leave($__internal_212cae03aaa4768082600c201d1a199ddb4f9ebc5dbea0a818d6cc2d9a55650b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2539ab27e69fcd01221257d8e6246f21acef4608a6ce87438fd13d69113bc968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2539ab27e69fcd01221257d8e6246f21acef4608a6ce87438fd13d69113bc968->enter($__internal_2539ab27e69fcd01221257d8e6246f21acef4608a6ce87438fd13d69113bc968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2c06f7d489264a9be5e2b124e9748781e1c463cf06ecccab3ebb0b8aee18309f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c06f7d489264a9be5e2b124e9748781e1c463cf06ecccab3ebb0b8aee18309f->enter($__internal_2c06f7d489264a9be5e2b124e9748781e1c463cf06ecccab3ebb0b8aee18309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_2c06f7d489264a9be5e2b124e9748781e1c463cf06ecccab3ebb0b8aee18309f->leave($__internal_2c06f7d489264a9be5e2b124e9748781e1c463cf06ecccab3ebb0b8aee18309f_prof);

        
        $__internal_2539ab27e69fcd01221257d8e6246f21acef4608a6ce87438fd13d69113bc968->leave($__internal_2539ab27e69fcd01221257d8e6246f21acef4608a6ce87438fd13d69113bc968_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d07d6b7bb3de6a8830686cd7ac1db9aaa2eba42a2677a14a52c259d334df97b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07d6b7bb3de6a8830686cd7ac1db9aaa2eba42a2677a14a52c259d334df97b2->enter($__internal_d07d6b7bb3de6a8830686cd7ac1db9aaa2eba42a2677a14a52c259d334df97b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8037c53841e3fa230b3951999f400bc8a57cb435cc7320c002c9035e7767b15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8037c53841e3fa230b3951999f400bc8a57cb435cc7320c002c9035e7767b15d->enter($__internal_8037c53841e3fa230b3951999f400bc8a57cb435cc7320c002c9035e7767b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_8037c53841e3fa230b3951999f400bc8a57cb435cc7320c002c9035e7767b15d->leave($__internal_8037c53841e3fa230b3951999f400bc8a57cb435cc7320c002c9035e7767b15d_prof);

        
        $__internal_d07d6b7bb3de6a8830686cd7ac1db9aaa2eba42a2677a14a52c259d334df97b2->leave($__internal_d07d6b7bb3de6a8830686cd7ac1db9aaa2eba42a2677a14a52c259d334df97b2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_63af464ca022339ca88e1f93795e8e03650d5236c0e63a659a100466fb9a4337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63af464ca022339ca88e1f93795e8e03650d5236c0e63a659a100466fb9a4337->enter($__internal_63af464ca022339ca88e1f93795e8e03650d5236c0e63a659a100466fb9a4337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_09a66c874fc7e5b37dbfa22e1402b9456cb1a3c136839e943d1e4fd5c823f12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a66c874fc7e5b37dbfa22e1402b9456cb1a3c136839e943d1e4fd5c823f12a->enter($__internal_09a66c874fc7e5b37dbfa22e1402b9456cb1a3c136839e943d1e4fd5c823f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09a66c874fc7e5b37dbfa22e1402b9456cb1a3c136839e943d1e4fd5c823f12a->leave($__internal_09a66c874fc7e5b37dbfa22e1402b9456cb1a3c136839e943d1e4fd5c823f12a_prof);

        
        $__internal_63af464ca022339ca88e1f93795e8e03650d5236c0e63a659a100466fb9a4337->leave($__internal_63af464ca022339ca88e1f93795e8e03650d5236c0e63a659a100466fb9a4337_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
