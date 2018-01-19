<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b8ca61ba94646e175b5aa25725ad3c3c4e14d63f1943c7722d8c716c77fe4655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5b5ee0dcb1801de014c91fd0d269801cd5076d070ec095ecc6054cfb0797f4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5ee0dcb1801de014c91fd0d269801cd5076d070ec095ecc6054cfb0797f4ad->enter($__internal_5b5ee0dcb1801de014c91fd0d269801cd5076d070ec095ecc6054cfb0797f4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_b96da66dd31d035663c94917133ea9733ced478b55e37950ca233047c34c6057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96da66dd31d035663c94917133ea9733ced478b55e37950ca233047c34c6057->enter($__internal_b96da66dd31d035663c94917133ea9733ced478b55e37950ca233047c34c6057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5ee0dcb1801de014c91fd0d269801cd5076d070ec095ecc6054cfb0797f4ad->leave($__internal_5b5ee0dcb1801de014c91fd0d269801cd5076d070ec095ecc6054cfb0797f4ad_prof);

        
        $__internal_b96da66dd31d035663c94917133ea9733ced478b55e37950ca233047c34c6057->leave($__internal_b96da66dd31d035663c94917133ea9733ced478b55e37950ca233047c34c6057_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da0a237d0d9ed818695bd8ac246915e9b00b8c3229a7be348f9f6dd2f3f10754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0a237d0d9ed818695bd8ac246915e9b00b8c3229a7be348f9f6dd2f3f10754->enter($__internal_da0a237d0d9ed818695bd8ac246915e9b00b8c3229a7be348f9f6dd2f3f10754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3cc3fa3774cd734d2b7186d681072c8480b7564414e8117206564266d1aa9647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc3fa3774cd734d2b7186d681072c8480b7564414e8117206564266d1aa9647->enter($__internal_3cc3fa3774cd734d2b7186d681072c8480b7564414e8117206564266d1aa9647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3cc3fa3774cd734d2b7186d681072c8480b7564414e8117206564266d1aa9647->leave($__internal_3cc3fa3774cd734d2b7186d681072c8480b7564414e8117206564266d1aa9647_prof);

        
        $__internal_da0a237d0d9ed818695bd8ac246915e9b00b8c3229a7be348f9f6dd2f3f10754->leave($__internal_da0a237d0d9ed818695bd8ac246915e9b00b8c3229a7be348f9f6dd2f3f10754_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
