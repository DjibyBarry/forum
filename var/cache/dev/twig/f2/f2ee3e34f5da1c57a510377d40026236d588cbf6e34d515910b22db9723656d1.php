<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1a84f16e3de3808452642d359b5261813dac2892c62e85af69daf5d47c1c0e5 extends Twig_Template
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
        $__internal_7074beae59e2d3eab5a9180a16ca4e00181075a68a2f102d357a991d5ff9b868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7074beae59e2d3eab5a9180a16ca4e00181075a68a2f102d357a991d5ff9b868->enter($__internal_7074beae59e2d3eab5a9180a16ca4e00181075a68a2f102d357a991d5ff9b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_1bcfaab9a980fc620d8beb61474bdb34248793734f7729a7e399f4bb7cb30e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcfaab9a980fc620d8beb61474bdb34248793734f7729a7e399f4bb7cb30e4a->enter($__internal_1bcfaab9a980fc620d8beb61474bdb34248793734f7729a7e399f4bb7cb30e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_7074beae59e2d3eab5a9180a16ca4e00181075a68a2f102d357a991d5ff9b868->leave($__internal_7074beae59e2d3eab5a9180a16ca4e00181075a68a2f102d357a991d5ff9b868_prof);

        
        $__internal_1bcfaab9a980fc620d8beb61474bdb34248793734f7729a7e399f4bb7cb30e4a->leave($__internal_1bcfaab9a980fc620d8beb61474bdb34248793734f7729a7e399f4bb7cb30e4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
