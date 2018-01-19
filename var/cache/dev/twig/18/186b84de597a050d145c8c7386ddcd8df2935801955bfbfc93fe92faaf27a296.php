<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2298376ca530357c4d991fd4c0af6657e3b20345e3eb9058b20888450262094 extends Twig_Template
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
        $__internal_7accaf8bb7d7d6290761cc26f8cb17bf5eac526f0822fa6ab7c6b2d0f765165e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7accaf8bb7d7d6290761cc26f8cb17bf5eac526f0822fa6ab7c6b2d0f765165e->enter($__internal_7accaf8bb7d7d6290761cc26f8cb17bf5eac526f0822fa6ab7c6b2d0f765165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c607c5b33aeaf67edd7d10745b3d8358728725137395e57a78b74c0a625e7120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c607c5b33aeaf67edd7d10745b3d8358728725137395e57a78b74c0a625e7120->enter($__internal_c607c5b33aeaf67edd7d10745b3d8358728725137395e57a78b74c0a625e7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7accaf8bb7d7d6290761cc26f8cb17bf5eac526f0822fa6ab7c6b2d0f765165e->leave($__internal_7accaf8bb7d7d6290761cc26f8cb17bf5eac526f0822fa6ab7c6b2d0f765165e_prof);

        
        $__internal_c607c5b33aeaf67edd7d10745b3d8358728725137395e57a78b74c0a625e7120->leave($__internal_c607c5b33aeaf67edd7d10745b3d8358728725137395e57a78b74c0a625e7120_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
