<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0a38fbaab782557d44abc9b73f4b228c3460a330568c7187897a064db3479b40 extends Twig_Template
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
        $__internal_e5cbb847722bf30f10b249e8327faee86063c2f0e3c0d67b2f690b8c681fb1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cbb847722bf30f10b249e8327faee86063c2f0e3c0d67b2f690b8c681fb1f6->enter($__internal_e5cbb847722bf30f10b249e8327faee86063c2f0e3c0d67b2f690b8c681fb1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_835913b5859fb34830383d5a0d406bd3d705b0020a24356986f5fb61d684cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835913b5859fb34830383d5a0d406bd3d705b0020a24356986f5fb61d684cbe0->enter($__internal_835913b5859fb34830383d5a0d406bd3d705b0020a24356986f5fb61d684cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5cbb847722bf30f10b249e8327faee86063c2f0e3c0d67b2f690b8c681fb1f6->leave($__internal_e5cbb847722bf30f10b249e8327faee86063c2f0e3c0d67b2f690b8c681fb1f6_prof);

        
        $__internal_835913b5859fb34830383d5a0d406bd3d705b0020a24356986f5fb61d684cbe0->leave($__internal_835913b5859fb34830383d5a0d406bd3d705b0020a24356986f5fb61d684cbe0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0bee58cfc679c9dc2611badc3fa793ebab346493ed8fda3fb2b6e659438a9e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bee58cfc679c9dc2611badc3fa793ebab346493ed8fda3fb2b6e659438a9e39->enter($__internal_0bee58cfc679c9dc2611badc3fa793ebab346493ed8fda3fb2b6e659438a9e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e90932d3e26c993ebcfdd4c5fec222cc338224424007344937748199bce7c243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90932d3e26c993ebcfdd4c5fec222cc338224424007344937748199bce7c243->enter($__internal_e90932d3e26c993ebcfdd4c5fec222cc338224424007344937748199bce7c243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_e90932d3e26c993ebcfdd4c5fec222cc338224424007344937748199bce7c243->leave($__internal_e90932d3e26c993ebcfdd4c5fec222cc338224424007344937748199bce7c243_prof);

        
        $__internal_0bee58cfc679c9dc2611badc3fa793ebab346493ed8fda3fb2b6e659438a9e39->leave($__internal_0bee58cfc679c9dc2611badc3fa793ebab346493ed8fda3fb2b6e659438a9e39_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3e0d61bb725bc8164465bc4bf4c68198f032eff007ea11940ceed3c6ba1e30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e0d61bb725bc8164465bc4bf4c68198f032eff007ea11940ceed3c6ba1e30d->enter($__internal_b3e0d61bb725bc8164465bc4bf4c68198f032eff007ea11940ceed3c6ba1e30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_070c1dd41967a056d93a8e940627fe03b583b35926510487a559b8f7037bda85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070c1dd41967a056d93a8e940627fe03b583b35926510487a559b8f7037bda85->enter($__internal_070c1dd41967a056d93a8e940627fe03b583b35926510487a559b8f7037bda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_070c1dd41967a056d93a8e940627fe03b583b35926510487a559b8f7037bda85->leave($__internal_070c1dd41967a056d93a8e940627fe03b583b35926510487a559b8f7037bda85_prof);

        
        $__internal_b3e0d61bb725bc8164465bc4bf4c68198f032eff007ea11940ceed3c6ba1e30d->leave($__internal_b3e0d61bb725bc8164465bc4bf4c68198f032eff007ea11940ceed3c6ba1e30d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0f07c9695d10d4292b3777861483de0022a31a2199372378ed0e974a65bf8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f07c9695d10d4292b3777861483de0022a31a2199372378ed0e974a65bf8c6->enter($__internal_a0f07c9695d10d4292b3777861483de0022a31a2199372378ed0e974a65bf8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7cbb1fb8beceab2826e3020d78843424a9b86e748b487507f63d1f92c1d6fb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb1fb8beceab2826e3020d78843424a9b86e748b487507f63d1f92c1d6fb6f->enter($__internal_7cbb1fb8beceab2826e3020d78843424a9b86e748b487507f63d1f92c1d6fb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7cbb1fb8beceab2826e3020d78843424a9b86e748b487507f63d1f92c1d6fb6f->leave($__internal_7cbb1fb8beceab2826e3020d78843424a9b86e748b487507f63d1f92c1d6fb6f_prof);

        
        $__internal_a0f07c9695d10d4292b3777861483de0022a31a2199372378ed0e974a65bf8c6->leave($__internal_a0f07c9695d10d4292b3777861483de0022a31a2199372378ed0e974a65bf8c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
