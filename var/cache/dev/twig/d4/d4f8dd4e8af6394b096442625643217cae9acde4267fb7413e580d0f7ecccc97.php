<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_6f86786b1ed925d4548ac4fd75c6e56f0ebe8010816ff349fc1961364554086f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_bf73be3fe25d7d098977fe632fd7ee7ee8bd9d6d68869470850cf1d734ab5e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf73be3fe25d7d098977fe632fd7ee7ee8bd9d6d68869470850cf1d734ab5e12->enter($__internal_bf73be3fe25d7d098977fe632fd7ee7ee8bd9d6d68869470850cf1d734ab5e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_eaf21598d0e1d5f10e2818001983b0c410eede82ad3ca0942930a447af6594dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf21598d0e1d5f10e2818001983b0c410eede82ad3ca0942930a447af6594dc->enter($__internal_eaf21598d0e1d5f10e2818001983b0c410eede82ad3ca0942930a447af6594dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf73be3fe25d7d098977fe632fd7ee7ee8bd9d6d68869470850cf1d734ab5e12->leave($__internal_bf73be3fe25d7d098977fe632fd7ee7ee8bd9d6d68869470850cf1d734ab5e12_prof);

        
        $__internal_eaf21598d0e1d5f10e2818001983b0c410eede82ad3ca0942930a447af6594dc->leave($__internal_eaf21598d0e1d5f10e2818001983b0c410eede82ad3ca0942930a447af6594dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96503353185138e4d66b23aadf09ef77d64700a26ab38ef5dc0c0fc822dc1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96503353185138e4d66b23aadf09ef77d64700a26ab38ef5dc0c0fc822dc1ed->enter($__internal_a96503353185138e4d66b23aadf09ef77d64700a26ab38ef5dc0c0fc822dc1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d52315582f567ac1c86cfdbcb3ea3771a2a6ff7a8efecc2cdb75a0923923965c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52315582f567ac1c86cfdbcb3ea3771a2a6ff7a8efecc2cdb75a0923923965c->enter($__internal_d52315582f567ac1c86cfdbcb3ea3771a2a6ff7a8efecc2cdb75a0923923965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d52315582f567ac1c86cfdbcb3ea3771a2a6ff7a8efecc2cdb75a0923923965c->leave($__internal_d52315582f567ac1c86cfdbcb3ea3771a2a6ff7a8efecc2cdb75a0923923965c_prof);

        
        $__internal_a96503353185138e4d66b23aadf09ef77d64700a26ab38ef5dc0c0fc822dc1ed->leave($__internal_a96503353185138e4d66b23aadf09ef77d64700a26ab38ef5dc0c0fc822dc1ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
