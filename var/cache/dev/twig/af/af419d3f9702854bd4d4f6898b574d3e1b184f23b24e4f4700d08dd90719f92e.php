<?php

/* user/new.html.twig */
class __TwigTemplate_314c4322a4399f6e17f5dfa624979904205afd710483497996dd678873b667dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "user/new.html.twig", 1);
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
        $__internal_c30897d14416f2d61df9529efa687a36ec06ba5a652ffc8140b653b061f85aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30897d14416f2d61df9529efa687a36ec06ba5a652ffc8140b653b061f85aad->enter($__internal_c30897d14416f2d61df9529efa687a36ec06ba5a652ffc8140b653b061f85aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_5d36fc4ad0f97947f92e1221ba7c15831829e1d965c79b511d7f6a75893ae3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d36fc4ad0f97947f92e1221ba7c15831829e1d965c79b511d7f6a75893ae3d8->enter($__internal_5d36fc4ad0f97947f92e1221ba7c15831829e1d965c79b511d7f6a75893ae3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30897d14416f2d61df9529efa687a36ec06ba5a652ffc8140b653b061f85aad->leave($__internal_c30897d14416f2d61df9529efa687a36ec06ba5a652ffc8140b653b061f85aad_prof);

        
        $__internal_5d36fc4ad0f97947f92e1221ba7c15831829e1d965c79b511d7f6a75893ae3d8->leave($__internal_5d36fc4ad0f97947f92e1221ba7c15831829e1d965c79b511d7f6a75893ae3d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d6d4aa5d3a112da7570327cb4adba1c2006a327894c7f491bbbf81db6359498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6d4aa5d3a112da7570327cb4adba1c2006a327894c7f491bbbf81db6359498->enter($__internal_5d6d4aa5d3a112da7570327cb4adba1c2006a327894c7f491bbbf81db6359498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eccb5afe3a55b7f7827efe7920954a4d5711de9f7498b01ca39da3f53f39bd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccb5afe3a55b7f7827efe7920954a4d5711de9f7498b01ca39da3f53f39bd97->enter($__internal_eccb5afe3a55b7f7827efe7920954a4d5711de9f7498b01ca39da3f53f39bd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eccb5afe3a55b7f7827efe7920954a4d5711de9f7498b01ca39da3f53f39bd97->leave($__internal_eccb5afe3a55b7f7827efe7920954a4d5711de9f7498b01ca39da3f53f39bd97_prof);

        
        $__internal_5d6d4aa5d3a112da7570327cb4adba1c2006a327894c7f491bbbf81db6359498->leave($__internal_5d6d4aa5d3a112da7570327cb4adba1c2006a327894c7f491bbbf81db6359498_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
", "user/new.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\views\\user\\new.html.twig");
    }
}
