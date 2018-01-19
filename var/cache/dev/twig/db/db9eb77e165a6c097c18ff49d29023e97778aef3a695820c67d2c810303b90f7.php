<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e1183cda63b39d96bca720ebe76957e5c27196ba315146fd1c4f9bf2baaf0bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5b0876eda53f6c766b0dc825671d8217e79a8d6c033f69d135c5d9c160cdf023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0876eda53f6c766b0dc825671d8217e79a8d6c033f69d135c5d9c160cdf023->enter($__internal_5b0876eda53f6c766b0dc825671d8217e79a8d6c033f69d135c5d9c160cdf023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_92393d2b8af4463efbc6f858238eb340ca17c38354521253ef8b4ebfde1ad1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92393d2b8af4463efbc6f858238eb340ca17c38354521253ef8b4ebfde1ad1ee->enter($__internal_92393d2b8af4463efbc6f858238eb340ca17c38354521253ef8b4ebfde1ad1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b0876eda53f6c766b0dc825671d8217e79a8d6c033f69d135c5d9c160cdf023->leave($__internal_5b0876eda53f6c766b0dc825671d8217e79a8d6c033f69d135c5d9c160cdf023_prof);

        
        $__internal_92393d2b8af4463efbc6f858238eb340ca17c38354521253ef8b4ebfde1ad1ee->leave($__internal_92393d2b8af4463efbc6f858238eb340ca17c38354521253ef8b4ebfde1ad1ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afe7458ee44ba303c77b6cbb0a0d6a8e6aa77f19586e80081f35aec87b279c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe7458ee44ba303c77b6cbb0a0d6a8e6aa77f19586e80081f35aec87b279c81->enter($__internal_afe7458ee44ba303c77b6cbb0a0d6a8e6aa77f19586e80081f35aec87b279c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aac56a09d7b76f8b98bb6ef1a20028df36f3932bbae5869907d9f6f9e177457e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac56a09d7b76f8b98bb6ef1a20028df36f3932bbae5869907d9f6f9e177457e->enter($__internal_aac56a09d7b76f8b98bb6ef1a20028df36f3932bbae5869907d9f6f9e177457e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_aac56a09d7b76f8b98bb6ef1a20028df36f3932bbae5869907d9f6f9e177457e->leave($__internal_aac56a09d7b76f8b98bb6ef1a20028df36f3932bbae5869907d9f6f9e177457e_prof);

        
        $__internal_afe7458ee44ba303c77b6cbb0a0d6a8e6aa77f19586e80081f35aec87b279c81->leave($__internal_afe7458ee44ba303c77b6cbb0a0d6a8e6aa77f19586e80081f35aec87b279c81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
