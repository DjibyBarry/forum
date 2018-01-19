<?php

/* UserBundle:categoriesAdmin:edit.html.twig */
class __TwigTemplate_50d378b678cee6dd1add54b768ccc768b65abb47490b801a778f841fa180e89d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:categoriesAdmin:edit.html.twig", 1);
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
        $__internal_98a576b3f636b69d2c38b15abba49c8787621b0691cf08e4391ec4630a05c49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a576b3f636b69d2c38b15abba49c8787621b0691cf08e4391ec4630a05c49c->enter($__internal_98a576b3f636b69d2c38b15abba49c8787621b0691cf08e4391ec4630a05c49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:edit.html.twig"));

        $__internal_ecced62907c217eac74f6f5f644bcb45311af773acbdbe0903039af4fba061c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecced62907c217eac74f6f5f644bcb45311af773acbdbe0903039af4fba061c9->enter($__internal_ecced62907c217eac74f6f5f644bcb45311af773acbdbe0903039af4fba061c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a576b3f636b69d2c38b15abba49c8787621b0691cf08e4391ec4630a05c49c->leave($__internal_98a576b3f636b69d2c38b15abba49c8787621b0691cf08e4391ec4630a05c49c_prof);

        
        $__internal_ecced62907c217eac74f6f5f644bcb45311af773acbdbe0903039af4fba061c9->leave($__internal_ecced62907c217eac74f6f5f644bcb45311af773acbdbe0903039af4fba061c9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_02a923b6c5e94e67a5d3617e9b9f610df5e9f7fa8606839c5fbda25f453f3029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a923b6c5e94e67a5d3617e9b9f610df5e9f7fa8606839c5fbda25f453f3029->enter($__internal_02a923b6c5e94e67a5d3617e9b9f610df5e9f7fa8606839c5fbda25f453f3029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c69e7dde5e2be55509769a264fff4eba96e6f4e63314207be757701060922cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c69e7dde5e2be55509769a264fff4eba96e6f4e63314207be757701060922cb->enter($__internal_6c69e7dde5e2be55509769a264fff4eba96e6f4e63314207be757701060922cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c69e7dde5e2be55509769a264fff4eba96e6f4e63314207be757701060922cb->leave($__internal_6c69e7dde5e2be55509769a264fff4eba96e6f4e63314207be757701060922cb_prof);

        
        $__internal_02a923b6c5e94e67a5d3617e9b9f610df5e9f7fa8606839c5fbda25f453f3029->leave($__internal_02a923b6c5e94e67a5d3617e9b9f610df5e9f7fa8606839c5fbda25f453f3029_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:categoriesAdmin:edit.html.twig";
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
", "UserBundle:categoriesAdmin:edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/categoriesAdmin/edit.html.twig");
    }
}
