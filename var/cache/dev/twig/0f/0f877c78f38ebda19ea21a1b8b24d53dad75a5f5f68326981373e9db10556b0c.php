<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_afb3eeb3c1d8df88f47a71cb3bb393bc932697c97af9e32712f9432e1821b6f2 extends Twig_Template
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
        $__internal_f0b76b3aa81bec78d7267fa153246f8fd13419e70535430a26b096b3b099dfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b76b3aa81bec78d7267fa153246f8fd13419e70535430a26b096b3b099dfd8->enter($__internal_f0b76b3aa81bec78d7267fa153246f8fd13419e70535430a26b096b3b099dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6f9bbce9322026e851917ee5504ac28099d99e945d1555d338b8c12af93f4f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9bbce9322026e851917ee5504ac28099d99e945d1555d338b8c12af93f4f6f->enter($__internal_6f9bbce9322026e851917ee5504ac28099d99e945d1555d338b8c12af93f4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f0b76b3aa81bec78d7267fa153246f8fd13419e70535430a26b096b3b099dfd8->leave($__internal_f0b76b3aa81bec78d7267fa153246f8fd13419e70535430a26b096b3b099dfd8_prof);

        
        $__internal_6f9bbce9322026e851917ee5504ac28099d99e945d1555d338b8c12af93f4f6f->leave($__internal_6f9bbce9322026e851917ee5504ac28099d99e945d1555d338b8c12af93f4f6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
