<?php

/* :user:new.html.twig */
class __TwigTemplate_bc85d85d9196cdc965a356df6bd30a359c79c1029a0284c172cd2bd032adbd91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3238245338402d49a64ca59858eeb94ba8d4c024fd2ed79989d9e0bd3bedc704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3238245338402d49a64ca59858eeb94ba8d4c024fd2ed79989d9e0bd3bedc704->enter($__internal_3238245338402d49a64ca59858eeb94ba8d4c024fd2ed79989d9e0bd3bedc704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_2e04d054185643df3ed8f6dc58fdd2e88edab25067175b6fbf0b3c8d87537a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e04d054185643df3ed8f6dc58fdd2e88edab25067175b6fbf0b3c8d87537a23->enter($__internal_2e04d054185643df3ed8f6dc58fdd2e88edab25067175b6fbf0b3c8d87537a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3238245338402d49a64ca59858eeb94ba8d4c024fd2ed79989d9e0bd3bedc704->leave($__internal_3238245338402d49a64ca59858eeb94ba8d4c024fd2ed79989d9e0bd3bedc704_prof);

        
        $__internal_2e04d054185643df3ed8f6dc58fdd2e88edab25067175b6fbf0b3c8d87537a23->leave($__internal_2e04d054185643df3ed8f6dc58fdd2e88edab25067175b6fbf0b3c8d87537a23_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4e13b60c4e2e7fa212422a1e2a75ebbfbc7ecaefecdb03281a4d6dd2e52603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4e13b60c4e2e7fa212422a1e2a75ebbfbc7ecaefecdb03281a4d6dd2e52603->enter($__internal_1a4e13b60c4e2e7fa212422a1e2a75ebbfbc7ecaefecdb03281a4d6dd2e52603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78c6b92d44cac5e58f72ccbda6d533941b79ee2dcdd68b58bcb7f685ecf14e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c6b92d44cac5e58f72ccbda6d533941b79ee2dcdd68b58bcb7f685ecf14e49->enter($__internal_78c6b92d44cac5e58f72ccbda6d533941b79ee2dcdd68b58bcb7f685ecf14e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User creation</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
";
        
        $__internal_78c6b92d44cac5e58f72ccbda6d533941b79ee2dcdd68b58bcb7f685ecf14e49->leave($__internal_78c6b92d44cac5e58f72ccbda6d533941b79ee2dcdd68b58bcb7f685ecf14e49_prof);

        
        $__internal_1a4e13b60c4e2e7fa212422a1e2a75ebbfbc7ecaefecdb03281a4d6dd2e52603->leave($__internal_1a4e13b60c4e2e7fa212422a1e2a75ebbfbc7ecaefecdb03281a4d6dd2e52603_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  62 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_user_index') }}\">Retour à la liste</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources\\views/user/new.html.twig");
    }
}
