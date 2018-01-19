<?php

/* @User/categoriesAdmin/edit.html.twig */
class __TwigTemplate_0724936efc29d8e50f697ff0d642562540da5940f41c7df921380e6b83180a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/categoriesAdmin/edit.html.twig", 1);
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
        $__internal_0972b9910d0b20f8ca01f214964b21e4a4ee99eacbdd6da8df91952c2e1804ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0972b9910d0b20f8ca01f214964b21e4a4ee99eacbdd6da8df91952c2e1804ad->enter($__internal_0972b9910d0b20f8ca01f214964b21e4a4ee99eacbdd6da8df91952c2e1804ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/edit.html.twig"));

        $__internal_29561b50295874ff5317756299e4216a439f2471f78710b764d3838c7d3f7193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29561b50295874ff5317756299e4216a439f2471f78710b764d3838c7d3f7193->enter($__internal_29561b50295874ff5317756299e4216a439f2471f78710b764d3838c7d3f7193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0972b9910d0b20f8ca01f214964b21e4a4ee99eacbdd6da8df91952c2e1804ad->leave($__internal_0972b9910d0b20f8ca01f214964b21e4a4ee99eacbdd6da8df91952c2e1804ad_prof);

        
        $__internal_29561b50295874ff5317756299e4216a439f2471f78710b764d3838c7d3f7193->leave($__internal_29561b50295874ff5317756299e4216a439f2471f78710b764d3838c7d3f7193_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c131f26300ef7813a220b5941712a76b2fb4fa847126fc9cf06e000baf267e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c131f26300ef7813a220b5941712a76b2fb4fa847126fc9cf06e000baf267e->enter($__internal_22c131f26300ef7813a220b5941712a76b2fb4fa847126fc9cf06e000baf267e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_987a70f3fd395f55ace0cb8531db0d1fec1e809eaaa3fbd21e56771417711d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987a70f3fd395f55ace0cb8531db0d1fec1e809eaaa3fbd21e56771417711d8e->enter($__internal_987a70f3fd395f55ace0cb8531db0d1fec1e809eaaa3fbd21e56771417711d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Modifier la catégorie : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 5, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_index");
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
        
        $__internal_987a70f3fd395f55ace0cb8531db0d1fec1e809eaaa3fbd21e56771417711d8e->leave($__internal_987a70f3fd395f55ace0cb8531db0d1fec1e809eaaa3fbd21e56771417711d8e_prof);

        
        $__internal_22c131f26300ef7813a220b5941712a76b2fb4fa847126fc9cf06e000baf267e->leave($__internal_22c131f26300ef7813a220b5941712a76b2fb4fa847126fc9cf06e000baf267e_prof);

    }

    public function getTemplateName()
    {
        return "@User/categoriesAdmin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  71 => 14,  64 => 10,  59 => 8,  55 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1>Modifier la catégorie : {{cat.nom}}</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminCat_index') }}\">Retour à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@User/categoriesAdmin/edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\categoriesAdmin\\edit.html.twig");
    }
}
