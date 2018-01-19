<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_a1d7e9b7130fd37076aba18d10397cb91bc5c44c9cef500b9803573e4f5d7030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d7e9b7130fd37076aba18d10397cb91bc5c44c9cef500b9803573e4f5d7030->enter($__internal_a1d7e9b7130fd37076aba18d10397cb91bc5c44c9cef500b9803573e4f5d7030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_28e01c5af29920ec3d372a8fefea9ff4de456f4c832458372f95cf74c5bf5123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e01c5af29920ec3d372a8fefea9ff4de456f4c832458372f95cf74c5bf5123->enter($__internal_28e01c5af29920ec3d372a8fefea9ff4de456f4c832458372f95cf74c5bf5123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a1d7e9b7130fd37076aba18d10397cb91bc5c44c9cef500b9803573e4f5d7030->leave($__internal_a1d7e9b7130fd37076aba18d10397cb91bc5c44c9cef500b9803573e4f5d7030_prof);

        
        $__internal_28e01c5af29920ec3d372a8fefea9ff4de456f4c832458372f95cf74c5bf5123->leave($__internal_28e01c5af29920ec3d372a8fefea9ff4de456f4c832458372f95cf74c5bf5123_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
