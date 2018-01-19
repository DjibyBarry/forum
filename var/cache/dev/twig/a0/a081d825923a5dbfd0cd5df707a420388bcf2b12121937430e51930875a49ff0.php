<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3e61a6a5fb695bbd27be7ca8bf9e45d81dd6fcefc2d32be227706c152f63d762 extends Twig_Template
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
        $__internal_056d951656bde8bb99da563c3114ef3ebf12af30d081f42be9d805451f5a3465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056d951656bde8bb99da563c3114ef3ebf12af30d081f42be9d805451f5a3465->enter($__internal_056d951656bde8bb99da563c3114ef3ebf12af30d081f42be9d805451f5a3465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_714fee14645a952497098d4470aae5aac96b08a8864d6e7f149b260b7acf8e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714fee14645a952497098d4470aae5aac96b08a8864d6e7f149b260b7acf8e01->enter($__internal_714fee14645a952497098d4470aae5aac96b08a8864d6e7f149b260b7acf8e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_056d951656bde8bb99da563c3114ef3ebf12af30d081f42be9d805451f5a3465->leave($__internal_056d951656bde8bb99da563c3114ef3ebf12af30d081f42be9d805451f5a3465_prof);

        
        $__internal_714fee14645a952497098d4470aae5aac96b08a8864d6e7f149b260b7acf8e01->leave($__internal_714fee14645a952497098d4470aae5aac96b08a8864d6e7f149b260b7acf8e01_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_834f9478e034d4e74332b57e7602ebc6767b131af5e18d2f26148ce50a81da36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834f9478e034d4e74332b57e7602ebc6767b131af5e18d2f26148ce50a81da36->enter($__internal_834f9478e034d4e74332b57e7602ebc6767b131af5e18d2f26148ce50a81da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a72a89eba3dfe966cfcd125db84908e5d76d343fe6422a67a494db2fe0581e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72a89eba3dfe966cfcd125db84908e5d76d343fe6422a67a494db2fe0581e53->enter($__internal_a72a89eba3dfe966cfcd125db84908e5d76d343fe6422a67a494db2fe0581e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_a72a89eba3dfe966cfcd125db84908e5d76d343fe6422a67a494db2fe0581e53->leave($__internal_a72a89eba3dfe966cfcd125db84908e5d76d343fe6422a67a494db2fe0581e53_prof);

        
        $__internal_834f9478e034d4e74332b57e7602ebc6767b131af5e18d2f26148ce50a81da36->leave($__internal_834f9478e034d4e74332b57e7602ebc6767b131af5e18d2f26148ce50a81da36_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f7fa2fbd53773ba533b4857c7cd8ec86ea814575e7fabc0a0b08c8623d45ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7fa2fbd53773ba533b4857c7cd8ec86ea814575e7fabc0a0b08c8623d45ae3->enter($__internal_7f7fa2fbd53773ba533b4857c7cd8ec86ea814575e7fabc0a0b08c8623d45ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5d443559c24026e557bcc4aef08c055535ca96487a06a45b18fe654912f8244e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d443559c24026e557bcc4aef08c055535ca96487a06a45b18fe654912f8244e->enter($__internal_5d443559c24026e557bcc4aef08c055535ca96487a06a45b18fe654912f8244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5d443559c24026e557bcc4aef08c055535ca96487a06a45b18fe654912f8244e->leave($__internal_5d443559c24026e557bcc4aef08c055535ca96487a06a45b18fe654912f8244e_prof);

        
        $__internal_7f7fa2fbd53773ba533b4857c7cd8ec86ea814575e7fabc0a0b08c8623d45ae3->leave($__internal_7f7fa2fbd53773ba533b4857c7cd8ec86ea814575e7fabc0a0b08c8623d45ae3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3b8b7837ae6bec2d998b95a978412f2c62093de71011a9808cd580cf6ae16f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8b7837ae6bec2d998b95a978412f2c62093de71011a9808cd580cf6ae16f8a->enter($__internal_3b8b7837ae6bec2d998b95a978412f2c62093de71011a9808cd580cf6ae16f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dbb67cee2f0352fc499c2fbf3682131ac28642df38e7b18b674d60cce42723c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb67cee2f0352fc499c2fbf3682131ac28642df38e7b18b674d60cce42723c9->enter($__internal_dbb67cee2f0352fc499c2fbf3682131ac28642df38e7b18b674d60cce42723c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dbb67cee2f0352fc499c2fbf3682131ac28642df38e7b18b674d60cce42723c9->leave($__internal_dbb67cee2f0352fc499c2fbf3682131ac28642df38e7b18b674d60cce42723c9_prof);

        
        $__internal_3b8b7837ae6bec2d998b95a978412f2c62093de71011a9808cd580cf6ae16f8a->leave($__internal_3b8b7837ae6bec2d998b95a978412f2c62093de71011a9808cd580cf6ae16f8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
