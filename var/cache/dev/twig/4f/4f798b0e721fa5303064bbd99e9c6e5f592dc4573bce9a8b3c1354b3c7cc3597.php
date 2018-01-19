<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_aed538842a391c4c6fafba07f44399040e8d74788965be95267ff5a49a2a5169 extends Twig_Template
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
        $__internal_bbf2ce781998e97f152c89b1e6ca41f72eeea144acd104e439323925c5979b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf2ce781998e97f152c89b1e6ca41f72eeea144acd104e439323925c5979b04->enter($__internal_bbf2ce781998e97f152c89b1e6ca41f72eeea144acd104e439323925c5979b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8f4776ad6a6bb0d0bddbc24a82dbbaf4827903beb9f0603426e1256892a53905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4776ad6a6bb0d0bddbc24a82dbbaf4827903beb9f0603426e1256892a53905->enter($__internal_8f4776ad6a6bb0d0bddbc24a82dbbaf4827903beb9f0603426e1256892a53905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_bbf2ce781998e97f152c89b1e6ca41f72eeea144acd104e439323925c5979b04->leave($__internal_bbf2ce781998e97f152c89b1e6ca41f72eeea144acd104e439323925c5979b04_prof);

        
        $__internal_8f4776ad6a6bb0d0bddbc24a82dbbaf4827903beb9f0603426e1256892a53905->leave($__internal_8f4776ad6a6bb0d0bddbc24a82dbbaf4827903beb9f0603426e1256892a53905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
