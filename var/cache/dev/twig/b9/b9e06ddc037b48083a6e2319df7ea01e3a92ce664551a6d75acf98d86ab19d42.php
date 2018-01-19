<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_0b3b895131a52eb3d8878f71fa704f927738b873f3a1678911bb196bc98d236a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce7e38efc8e7c9543b0efc99fa68a8d20379150fb2e7ee1a4cd6ad9ba23faeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7e38efc8e7c9543b0efc99fa68a8d20379150fb2e7ee1a4cd6ad9ba23faeb1->enter($__internal_ce7e38efc8e7c9543b0efc99fa68a8d20379150fb2e7ee1a4cd6ad9ba23faeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_1ec77686200923e659fd352d65eef1e6a464a4870ad4d147c4cff2b4d04ca6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec77686200923e659fd352d65eef1e6a464a4870ad4d147c4cff2b4d04ca6c4->enter($__internal_1ec77686200923e659fd352d65eef1e6a464a4870ad4d147c4cff2b4d04ca6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ce7e38efc8e7c9543b0efc99fa68a8d20379150fb2e7ee1a4cd6ad9ba23faeb1->leave($__internal_ce7e38efc8e7c9543b0efc99fa68a8d20379150fb2e7ee1a4cd6ad9ba23faeb1_prof);

        
        $__internal_1ec77686200923e659fd352d65eef1e6a464a4870ad4d147c4cff2b4d04ca6c4->leave($__internal_1ec77686200923e659fd352d65eef1e6a464a4870ad4d147c4cff2b4d04ca6c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
