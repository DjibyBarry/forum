<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ffa83697e287d54cdb2daa33028b6ed3a98e2f44a2ddfba0f60dde1f14a821f8 extends Twig_Template
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
        $__internal_1df45118e791d4d2aaf5cadf0a8d26d0b5c55ed9dcbbc9010714eee8b34e2530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df45118e791d4d2aaf5cadf0a8d26d0b5c55ed9dcbbc9010714eee8b34e2530->enter($__internal_1df45118e791d4d2aaf5cadf0a8d26d0b5c55ed9dcbbc9010714eee8b34e2530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_97cf5bec4aaa9c8fff8af0016f7a46f5c43038611cc7ea9bdd9d9224c4d5aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cf5bec4aaa9c8fff8af0016f7a46f5c43038611cc7ea9bdd9d9224c4d5aaf2->enter($__internal_97cf5bec4aaa9c8fff8af0016f7a46f5c43038611cc7ea9bdd9d9224c4d5aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1df45118e791d4d2aaf5cadf0a8d26d0b5c55ed9dcbbc9010714eee8b34e2530->leave($__internal_1df45118e791d4d2aaf5cadf0a8d26d0b5c55ed9dcbbc9010714eee8b34e2530_prof);

        
        $__internal_97cf5bec4aaa9c8fff8af0016f7a46f5c43038611cc7ea9bdd9d9224c4d5aaf2->leave($__internal_97cf5bec4aaa9c8fff8af0016f7a46f5c43038611cc7ea9bdd9d9224c4d5aaf2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6539e755310ded83e6175afead8eba070d603601f0b3406b2cabbfce1928fe18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6539e755310ded83e6175afead8eba070d603601f0b3406b2cabbfce1928fe18->enter($__internal_6539e755310ded83e6175afead8eba070d603601f0b3406b2cabbfce1928fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8d43062c02ca1c53ec8e8c29679fb06140e509a094ec76e07763943926c32554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d43062c02ca1c53ec8e8c29679fb06140e509a094ec76e07763943926c32554->enter($__internal_8d43062c02ca1c53ec8e8c29679fb06140e509a094ec76e07763943926c32554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8d43062c02ca1c53ec8e8c29679fb06140e509a094ec76e07763943926c32554->leave($__internal_8d43062c02ca1c53ec8e8c29679fb06140e509a094ec76e07763943926c32554_prof);

        
        $__internal_6539e755310ded83e6175afead8eba070d603601f0b3406b2cabbfce1928fe18->leave($__internal_6539e755310ded83e6175afead8eba070d603601f0b3406b2cabbfce1928fe18_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8c447a249ef3dc115cff9ea132a99e057f7d2d3bbc4b44b755327434a99e0785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c447a249ef3dc115cff9ea132a99e057f7d2d3bbc4b44b755327434a99e0785->enter($__internal_8c447a249ef3dc115cff9ea132a99e057f7d2d3bbc4b44b755327434a99e0785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ad4663cbc0fc9f27502f54480ee14de0f21075dd79dc6e8cd6aac1d2025cf977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4663cbc0fc9f27502f54480ee14de0f21075dd79dc6e8cd6aac1d2025cf977->enter($__internal_ad4663cbc0fc9f27502f54480ee14de0f21075dd79dc6e8cd6aac1d2025cf977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_ad4663cbc0fc9f27502f54480ee14de0f21075dd79dc6e8cd6aac1d2025cf977->leave($__internal_ad4663cbc0fc9f27502f54480ee14de0f21075dd79dc6e8cd6aac1d2025cf977_prof);

        
        $__internal_8c447a249ef3dc115cff9ea132a99e057f7d2d3bbc4b44b755327434a99e0785->leave($__internal_8c447a249ef3dc115cff9ea132a99e057f7d2d3bbc4b44b755327434a99e0785_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c0fc0fe6b738071a4ad67079f1321bd787b547e1ab1cf064f257b5a8785ee58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fc0fe6b738071a4ad67079f1321bd787b547e1ab1cf064f257b5a8785ee58b->enter($__internal_c0fc0fe6b738071a4ad67079f1321bd787b547e1ab1cf064f257b5a8785ee58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9a2b7ce21937fb7051969923b2191e24f8872427b8414594f394a77e9705cff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2b7ce21937fb7051969923b2191e24f8872427b8414594f394a77e9705cff6->enter($__internal_9a2b7ce21937fb7051969923b2191e24f8872427b8414594f394a77e9705cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a2b7ce21937fb7051969923b2191e24f8872427b8414594f394a77e9705cff6->leave($__internal_9a2b7ce21937fb7051969923b2191e24f8872427b8414594f394a77e9705cff6_prof);

        
        $__internal_c0fc0fe6b738071a4ad67079f1321bd787b547e1ab1cf064f257b5a8785ee58b->leave($__internal_c0fc0fe6b738071a4ad67079f1321bd787b547e1ab1cf064f257b5a8785ee58b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
