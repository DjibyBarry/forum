<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_be8443993c1fe034132e0962d1811bfd89a2d678ac4179cd7aef60eba4b5179d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_554554a0ae04d00043f4afeeb72cdebbf631a1c98702d0dfbc39ae3d21cb9494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554554a0ae04d00043f4afeeb72cdebbf631a1c98702d0dfbc39ae3d21cb9494->enter($__internal_554554a0ae04d00043f4afeeb72cdebbf631a1c98702d0dfbc39ae3d21cb9494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_dcc96a359ec493ebaa74a45a598081918c619e612f13d057854f6e5455158d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc96a359ec493ebaa74a45a598081918c619e612f13d057854f6e5455158d46->enter($__internal_dcc96a359ec493ebaa74a45a598081918c619e612f13d057854f6e5455158d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554554a0ae04d00043f4afeeb72cdebbf631a1c98702d0dfbc39ae3d21cb9494->leave($__internal_554554a0ae04d00043f4afeeb72cdebbf631a1c98702d0dfbc39ae3d21cb9494_prof);

        
        $__internal_dcc96a359ec493ebaa74a45a598081918c619e612f13d057854f6e5455158d46->leave($__internal_dcc96a359ec493ebaa74a45a598081918c619e612f13d057854f6e5455158d46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ce355cc047856bfd4661f7a054037fa5f021fcd637bc4fd38fb473f5e716c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce355cc047856bfd4661f7a054037fa5f021fcd637bc4fd38fb473f5e716c54->enter($__internal_5ce355cc047856bfd4661f7a054037fa5f021fcd637bc4fd38fb473f5e716c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee11c053896f3a60ed8f0cdfaebe85bed5a5ce33c7d0a72ce27e21345b1ced13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee11c053896f3a60ed8f0cdfaebe85bed5a5ce33c7d0a72ce27e21345b1ced13->enter($__internal_ee11c053896f3a60ed8f0cdfaebe85bed5a5ce33c7d0a72ce27e21345b1ced13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ee11c053896f3a60ed8f0cdfaebe85bed5a5ce33c7d0a72ce27e21345b1ced13->leave($__internal_ee11c053896f3a60ed8f0cdfaebe85bed5a5ce33c7d0a72ce27e21345b1ced13_prof);

        
        $__internal_5ce355cc047856bfd4661f7a054037fa5f021fcd637bc4fd38fb473f5e716c54->leave($__internal_5ce355cc047856bfd4661f7a054037fa5f021fcd637bc4fd38fb473f5e716c54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
