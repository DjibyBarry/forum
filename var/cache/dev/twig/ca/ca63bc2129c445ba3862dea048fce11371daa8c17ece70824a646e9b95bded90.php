<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_debb4a32eda87ed59642271099117732ecbba832acad3c3a63a4161c8bf477d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6bc7e4b96dcf8981a6beabf8b2849f156884583df435df8e4860f9e5b3a61daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc7e4b96dcf8981a6beabf8b2849f156884583df435df8e4860f9e5b3a61daf->enter($__internal_6bc7e4b96dcf8981a6beabf8b2849f156884583df435df8e4860f9e5b3a61daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_8bb68768613e5ef2d36e74f58b984013cbbdc2708f3564ead158b38fd0aa7b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb68768613e5ef2d36e74f58b984013cbbdc2708f3564ead158b38fd0aa7b69->enter($__internal_8bb68768613e5ef2d36e74f58b984013cbbdc2708f3564ead158b38fd0aa7b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bc7e4b96dcf8981a6beabf8b2849f156884583df435df8e4860f9e5b3a61daf->leave($__internal_6bc7e4b96dcf8981a6beabf8b2849f156884583df435df8e4860f9e5b3a61daf_prof);

        
        $__internal_8bb68768613e5ef2d36e74f58b984013cbbdc2708f3564ead158b38fd0aa7b69->leave($__internal_8bb68768613e5ef2d36e74f58b984013cbbdc2708f3564ead158b38fd0aa7b69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2005015e6323e4b35821cf554cf5462f01ea8bb98a0eea9aab9fd8a60e310ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2005015e6323e4b35821cf554cf5462f01ea8bb98a0eea9aab9fd8a60e310ee2->enter($__internal_2005015e6323e4b35821cf554cf5462f01ea8bb98a0eea9aab9fd8a60e310ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2fff9a6ec1d03b880eb10ab30925db7d5a46b254aee1c4169cc9f34c3730165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fff9a6ec1d03b880eb10ab30925db7d5a46b254aee1c4169cc9f34c3730165->enter($__internal_c2fff9a6ec1d03b880eb10ab30925db7d5a46b254aee1c4169cc9f34c3730165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c2fff9a6ec1d03b880eb10ab30925db7d5a46b254aee1c4169cc9f34c3730165->leave($__internal_c2fff9a6ec1d03b880eb10ab30925db7d5a46b254aee1c4169cc9f34c3730165_prof);

        
        $__internal_2005015e6323e4b35821cf554cf5462f01ea8bb98a0eea9aab9fd8a60e310ee2->leave($__internal_2005015e6323e4b35821cf554cf5462f01ea8bb98a0eea9aab9fd8a60e310ee2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
