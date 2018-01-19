<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_112a54ddf69eb8ec24f8bccd50fa4ec126e2cb3e407a6cf2e7cdf410a96f5291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_62fb1c7b5ee8b6f6785d7c3ca0938463949493c6d5146e2ce1837c90136b5ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fb1c7b5ee8b6f6785d7c3ca0938463949493c6d5146e2ce1837c90136b5ada->enter($__internal_62fb1c7b5ee8b6f6785d7c3ca0938463949493c6d5146e2ce1837c90136b5ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f18d50c66b8b02a174922086d2621c447ea002dac3eac29fc385fa2ee4c5ca1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18d50c66b8b02a174922086d2621c447ea002dac3eac29fc385fa2ee4c5ca1e->enter($__internal_f18d50c66b8b02a174922086d2621c447ea002dac3eac29fc385fa2ee4c5ca1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62fb1c7b5ee8b6f6785d7c3ca0938463949493c6d5146e2ce1837c90136b5ada->leave($__internal_62fb1c7b5ee8b6f6785d7c3ca0938463949493c6d5146e2ce1837c90136b5ada_prof);

        
        $__internal_f18d50c66b8b02a174922086d2621c447ea002dac3eac29fc385fa2ee4c5ca1e->leave($__internal_f18d50c66b8b02a174922086d2621c447ea002dac3eac29fc385fa2ee4c5ca1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5e80b9049b66e712b8f08f5489c183bdb3c5583ef82992565850ed30f01c095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e80b9049b66e712b8f08f5489c183bdb3c5583ef82992565850ed30f01c095->enter($__internal_b5e80b9049b66e712b8f08f5489c183bdb3c5583ef82992565850ed30f01c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa5e03e09408f5c6d2cf5f82b94e923de4de53954ed7a5f6b6650f9f4ab9ad7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5e03e09408f5c6d2cf5f82b94e923de4de53954ed7a5f6b6650f9f4ab9ad7e->enter($__internal_aa5e03e09408f5c6d2cf5f82b94e923de4de53954ed7a5f6b6650f9f4ab9ad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_aa5e03e09408f5c6d2cf5f82b94e923de4de53954ed7a5f6b6650f9f4ab9ad7e->leave($__internal_aa5e03e09408f5c6d2cf5f82b94e923de4de53954ed7a5f6b6650f9f4ab9ad7e_prof);

        
        $__internal_b5e80b9049b66e712b8f08f5489c183bdb3c5583ef82992565850ed30f01c095->leave($__internal_b5e80b9049b66e712b8f08f5489c183bdb3c5583ef82992565850ed30f01c095_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
