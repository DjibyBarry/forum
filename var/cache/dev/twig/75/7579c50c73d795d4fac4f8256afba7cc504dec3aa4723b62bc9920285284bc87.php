<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bf1debdfeb08199f8cf1a62734dd133f0bc43719da1892ec53c1fa157385deea extends Twig_Template
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
        $__internal_737ba9c65353957f8468a43bc04c54c45374dfaf02aee86242aeedae6b97d060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737ba9c65353957f8468a43bc04c54c45374dfaf02aee86242aeedae6b97d060->enter($__internal_737ba9c65353957f8468a43bc04c54c45374dfaf02aee86242aeedae6b97d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_4d7c3467d8a2209459efb36b7d887990affe9c7d8496567393bc8da4d25c6d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7c3467d8a2209459efb36b7d887990affe9c7d8496567393bc8da4d25c6d9b->enter($__internal_4d7c3467d8a2209459efb36b7d887990affe9c7d8496567393bc8da4d25c6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_737ba9c65353957f8468a43bc04c54c45374dfaf02aee86242aeedae6b97d060->leave($__internal_737ba9c65353957f8468a43bc04c54c45374dfaf02aee86242aeedae6b97d060_prof);

        
        $__internal_4d7c3467d8a2209459efb36b7d887990affe9c7d8496567393bc8da4d25c6d9b->leave($__internal_4d7c3467d8a2209459efb36b7d887990affe9c7d8496567393bc8da4d25c6d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
