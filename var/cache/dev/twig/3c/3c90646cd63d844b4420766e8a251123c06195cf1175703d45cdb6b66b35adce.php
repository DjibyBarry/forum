<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4a90312766969371fae4e1a4d9c69224d88cbcc21c3e5bb8b48569c1c8840a7b extends Twig_Template
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
        $__internal_b3661a7641cac7af94144cc0b87e3d8bfc0a20d136a576c859fe3bed0628d439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3661a7641cac7af94144cc0b87e3d8bfc0a20d136a576c859fe3bed0628d439->enter($__internal_b3661a7641cac7af94144cc0b87e3d8bfc0a20d136a576c859fe3bed0628d439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_3fbe315d2652be6207b797186c2ac03d2954d70542d3627026c173fccb0b1abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbe315d2652be6207b797186c2ac03d2954d70542d3627026c173fccb0b1abc->enter($__internal_3fbe315d2652be6207b797186c2ac03d2954d70542d3627026c173fccb0b1abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b3661a7641cac7af94144cc0b87e3d8bfc0a20d136a576c859fe3bed0628d439->leave($__internal_b3661a7641cac7af94144cc0b87e3d8bfc0a20d136a576c859fe3bed0628d439_prof);

        
        $__internal_3fbe315d2652be6207b797186c2ac03d2954d70542d3627026c173fccb0b1abc->leave($__internal_3fbe315d2652be6207b797186c2ac03d2954d70542d3627026c173fccb0b1abc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
