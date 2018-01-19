<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fb10407335196a932bff325691d154db9990813425fc19f532b3227c4db42927 extends Twig_Template
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
        $__internal_55fad4bd1f27c3f4495d8148c55b9bdafec5b86c369c53df9e8e0c3194b17f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fad4bd1f27c3f4495d8148c55b9bdafec5b86c369c53df9e8e0c3194b17f82->enter($__internal_55fad4bd1f27c3f4495d8148c55b9bdafec5b86c369c53df9e8e0c3194b17f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a71b1658e9b7ddccab7e2f1845f906d30c7cabf4ae9f1f5124f1a06d32f81363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71b1658e9b7ddccab7e2f1845f906d30c7cabf4ae9f1f5124f1a06d32f81363->enter($__internal_a71b1658e9b7ddccab7e2f1845f906d30c7cabf4ae9f1f5124f1a06d32f81363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_55fad4bd1f27c3f4495d8148c55b9bdafec5b86c369c53df9e8e0c3194b17f82->leave($__internal_55fad4bd1f27c3f4495d8148c55b9bdafec5b86c369c53df9e8e0c3194b17f82_prof);

        
        $__internal_a71b1658e9b7ddccab7e2f1845f906d30c7cabf4ae9f1f5124f1a06d32f81363->leave($__internal_a71b1658e9b7ddccab7e2f1845f906d30c7cabf4ae9f1f5124f1a06d32f81363_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
