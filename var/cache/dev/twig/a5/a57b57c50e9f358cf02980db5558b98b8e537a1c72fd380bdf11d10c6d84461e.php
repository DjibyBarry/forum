<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5075d0c93c35ab3d7699cecb35c73e731f2ed9bfcf20828d60a7567aed03f1b1 extends Twig_Template
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
        $__internal_3a73193f065284358fe4913af6ffa0e49e793c1d8a4102c77c7cba127f371b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a73193f065284358fe4913af6ffa0e49e793c1d8a4102c77c7cba127f371b1c->enter($__internal_3a73193f065284358fe4913af6ffa0e49e793c1d8a4102c77c7cba127f371b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_00714500ee3841dfdc1e7dfd795af9cc06e52d6e6ea1cdb4206309b070c2a496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00714500ee3841dfdc1e7dfd795af9cc06e52d6e6ea1cdb4206309b070c2a496->enter($__internal_00714500ee3841dfdc1e7dfd795af9cc06e52d6e6ea1cdb4206309b070c2a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3a73193f065284358fe4913af6ffa0e49e793c1d8a4102c77c7cba127f371b1c->leave($__internal_3a73193f065284358fe4913af6ffa0e49e793c1d8a4102c77c7cba127f371b1c_prof);

        
        $__internal_00714500ee3841dfdc1e7dfd795af9cc06e52d6e6ea1cdb4206309b070c2a496->leave($__internal_00714500ee3841dfdc1e7dfd795af9cc06e52d6e6ea1cdb4206309b070c2a496_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
