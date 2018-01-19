<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_a6141ec0c4a505ada745fdaaca195ff97490c5d04c8a12047759a7f0600a3c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_1451e6df9213fc36803c784fbb1fe5b0867207e16ce1f756239f2d493bb21635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1451e6df9213fc36803c784fbb1fe5b0867207e16ce1f756239f2d493bb21635->enter($__internal_1451e6df9213fc36803c784fbb1fe5b0867207e16ce1f756239f2d493bb21635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_d9883ee15885adb802c9f4ebf89a6dfeb3adb488c122ccd6c5a0701a77905227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9883ee15885adb802c9f4ebf89a6dfeb3adb488c122ccd6c5a0701a77905227->enter($__internal_d9883ee15885adb802c9f4ebf89a6dfeb3adb488c122ccd6c5a0701a77905227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1451e6df9213fc36803c784fbb1fe5b0867207e16ce1f756239f2d493bb21635->leave($__internal_1451e6df9213fc36803c784fbb1fe5b0867207e16ce1f756239f2d493bb21635_prof);

        
        $__internal_d9883ee15885adb802c9f4ebf89a6dfeb3adb488c122ccd6c5a0701a77905227->leave($__internal_d9883ee15885adb802c9f4ebf89a6dfeb3adb488c122ccd6c5a0701a77905227_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_412ae8a3b793e82c08fd654374bbc12a5b548094679acd63368f6ca012f15985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412ae8a3b793e82c08fd654374bbc12a5b548094679acd63368f6ca012f15985->enter($__internal_412ae8a3b793e82c08fd654374bbc12a5b548094679acd63368f6ca012f15985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7b94df302796c43ffb734b18110d3c4f6f1ef776f39fa1643efde983161ac6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b94df302796c43ffb734b18110d3c4f6f1ef776f39fa1643efde983161ac6c->enter($__internal_c7b94df302796c43ffb734b18110d3c4f6f1ef776f39fa1643efde983161ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_c7b94df302796c43ffb734b18110d3c4f6f1ef776f39fa1643efde983161ac6c->leave($__internal_c7b94df302796c43ffb734b18110d3c4f6f1ef776f39fa1643efde983161ac6c_prof);

        
        $__internal_412ae8a3b793e82c08fd654374bbc12a5b548094679acd63368f6ca012f15985->leave($__internal_412ae8a3b793e82c08fd654374bbc12a5b548094679acd63368f6ca012f15985_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
