<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9f6588ab938828fd0d015ddebc9c70318f11dfede6949f85c6a3b4942e0c523a extends Twig_Template
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
        $__internal_a9194e092284f97f4100daddfd350cdc4018088b28c1f870fc1c3b0d9597b35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9194e092284f97f4100daddfd350cdc4018088b28c1f870fc1c3b0d9597b35d->enter($__internal_a9194e092284f97f4100daddfd350cdc4018088b28c1f870fc1c3b0d9597b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4d854bbce7396a7c64c383cebe44f939b1baa1ac7309f92ba21b38e4bfc1f1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d854bbce7396a7c64c383cebe44f939b1baa1ac7309f92ba21b38e4bfc1f1d4->enter($__internal_4d854bbce7396a7c64c383cebe44f939b1baa1ac7309f92ba21b38e4bfc1f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a9194e092284f97f4100daddfd350cdc4018088b28c1f870fc1c3b0d9597b35d->leave($__internal_a9194e092284f97f4100daddfd350cdc4018088b28c1f870fc1c3b0d9597b35d_prof);

        
        $__internal_4d854bbce7396a7c64c383cebe44f939b1baa1ac7309f92ba21b38e4bfc1f1d4->leave($__internal_4d854bbce7396a7c64c383cebe44f939b1baa1ac7309f92ba21b38e4bfc1f1d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
