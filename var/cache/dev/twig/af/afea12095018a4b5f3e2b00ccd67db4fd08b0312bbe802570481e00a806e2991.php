<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_4d8b42427a325c815b6ddcf3356aa50098c3db74b9931297d7d8d4fa4ec97458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8b42427a325c815b6ddcf3356aa50098c3db74b9931297d7d8d4fa4ec97458->enter($__internal_4d8b42427a325c815b6ddcf3356aa50098c3db74b9931297d7d8d4fa4ec97458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c8d0a5ccde9eb5e55c6d7df297c53feccc7caa21e530b57d5f89ab04bf7dafe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d0a5ccde9eb5e55c6d7df297c53feccc7caa21e530b57d5f89ab04bf7dafe5->enter($__internal_c8d0a5ccde9eb5e55c6d7df297c53feccc7caa21e530b57d5f89ab04bf7dafe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4d8b42427a325c815b6ddcf3356aa50098c3db74b9931297d7d8d4fa4ec97458->leave($__internal_4d8b42427a325c815b6ddcf3356aa50098c3db74b9931297d7d8d4fa4ec97458_prof);

        
        $__internal_c8d0a5ccde9eb5e55c6d7df297c53feccc7caa21e530b57d5f89ab04bf7dafe5->leave($__internal_c8d0a5ccde9eb5e55c6d7df297c53feccc7caa21e530b57d5f89ab04bf7dafe5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
