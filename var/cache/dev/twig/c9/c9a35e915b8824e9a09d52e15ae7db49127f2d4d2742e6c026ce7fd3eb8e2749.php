<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b3b32d1b2b788b015b7bc70a7361df3a07af7e63f4a5fce7f4d0b30753d36baa extends Twig_Template
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
        $__internal_b13723331fd7abd54d375b3ddda9b9e76e6f5b1e1141724669fe7b85480b544a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13723331fd7abd54d375b3ddda9b9e76e6f5b1e1141724669fe7b85480b544a->enter($__internal_b13723331fd7abd54d375b3ddda9b9e76e6f5b1e1141724669fe7b85480b544a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3aa73aa8a33055f2f3a55958694166195d383c83ba424215efe73c633d4b1102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa73aa8a33055f2f3a55958694166195d383c83ba424215efe73c633d4b1102->enter($__internal_3aa73aa8a33055f2f3a55958694166195d383c83ba424215efe73c633d4b1102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_b13723331fd7abd54d375b3ddda9b9e76e6f5b1e1141724669fe7b85480b544a->leave($__internal_b13723331fd7abd54d375b3ddda9b9e76e6f5b1e1141724669fe7b85480b544a_prof);

        
        $__internal_3aa73aa8a33055f2f3a55958694166195d383c83ba424215efe73c633d4b1102->leave($__internal_3aa73aa8a33055f2f3a55958694166195d383c83ba424215efe73c633d4b1102_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
