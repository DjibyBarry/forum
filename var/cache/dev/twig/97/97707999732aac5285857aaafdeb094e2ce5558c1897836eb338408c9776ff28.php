<?php

/* user/edit.html.twig */
class __TwigTemplate_59b87fdf43de83be81e38c58c1f1eea6b0cd6a209ae390529d33fc858fd2439f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_374a4e8165b2d660463f67a4ef07a5a3b48c61d2dc5155fea620af5ae50f5026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374a4e8165b2d660463f67a4ef07a5a3b48c61d2dc5155fea620af5ae50f5026->enter($__internal_374a4e8165b2d660463f67a4ef07a5a3b48c61d2dc5155fea620af5ae50f5026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_2f144c72f9eaaeea2f1791378329b5de6eec0ce93a63bd35252866fe2154a569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f144c72f9eaaeea2f1791378329b5de6eec0ce93a63bd35252866fe2154a569->enter($__internal_2f144c72f9eaaeea2f1791378329b5de6eec0ce93a63bd35252866fe2154a569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_374a4e8165b2d660463f67a4ef07a5a3b48c61d2dc5155fea620af5ae50f5026->leave($__internal_374a4e8165b2d660463f67a4ef07a5a3b48c61d2dc5155fea620af5ae50f5026_prof);

        
        $__internal_2f144c72f9eaaeea2f1791378329b5de6eec0ce93a63bd35252866fe2154a569->leave($__internal_2f144c72f9eaaeea2f1791378329b5de6eec0ce93a63bd35252866fe2154a569_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44706f052efa6f68736e269aa4d0260627d98f3d80f05dea5bcb157599ff498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44706f052efa6f68736e269aa4d0260627d98f3d80f05dea5bcb157599ff498->enter($__internal_e44706f052efa6f68736e269aa4d0260627d98f3d80f05dea5bcb157599ff498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe40dcfa01030ec05ec7c13f7f05ecbfeaec8eb0b55f34aa609a6b1475d20112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe40dcfa01030ec05ec7c13f7f05ecbfeaec8eb0b55f34aa609a6b1475d20112->enter($__internal_fe40dcfa01030ec05ec7c13f7f05ecbfeaec8eb0b55f34aa609a6b1475d20112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User edit</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fe40dcfa01030ec05ec7c13f7f05ecbfeaec8eb0b55f34aa609a6b1475d20112->leave($__internal_fe40dcfa01030ec05ec7c13f7f05ecbfeaec8eb0b55f34aa609a6b1475d20112_prof);

        
        $__internal_e44706f052efa6f68736e269aa4d0260627d98f3d80f05dea5bcb157599ff498->leave($__internal_e44706f052efa6f68736e269aa4d0260627d98f3d80f05dea5bcb157599ff498_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  75 => 17,  69 => 14,  62 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_user_index') }}\">Retour à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\views\\user\\edit.html.twig");
    }
}
