<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d3b05c5963201c9e56e99730e6389dd766089796f54a34af144dfc9e775820d5 extends Twig_Template
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
        $__internal_4002a15819f484857d7467489043caa82ab40698127a0fc0e813292e89fd231d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4002a15819f484857d7467489043caa82ab40698127a0fc0e813292e89fd231d->enter($__internal_4002a15819f484857d7467489043caa82ab40698127a0fc0e813292e89fd231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_734904804f6fd7bb977863b6f355a0b204515c34e2f2d8538b3cd4dfcad44b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734904804f6fd7bb977863b6f355a0b204515c34e2f2d8538b3cd4dfcad44b20->enter($__internal_734904804f6fd7bb977863b6f355a0b204515c34e2f2d8538b3cd4dfcad44b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_4002a15819f484857d7467489043caa82ab40698127a0fc0e813292e89fd231d->leave($__internal_4002a15819f484857d7467489043caa82ab40698127a0fc0e813292e89fd231d_prof);

        
        $__internal_734904804f6fd7bb977863b6f355a0b204515c34e2f2d8538b3cd4dfcad44b20->leave($__internal_734904804f6fd7bb977863b6f355a0b204515c34e2f2d8538b3cd4dfcad44b20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
