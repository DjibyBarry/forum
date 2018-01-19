<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_605113dc16a680cde5e2b104ef63349dfd6bad748ab191d4f45ffbc3a8c3c1ac extends Twig_Template
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
        $__internal_4c5aac71ea70861014c1c0302fbecae68bd3e7f0628518ff34fe23a60e437396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5aac71ea70861014c1c0302fbecae68bd3e7f0628518ff34fe23a60e437396->enter($__internal_4c5aac71ea70861014c1c0302fbecae68bd3e7f0628518ff34fe23a60e437396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_28a791224fa985f1b53127d12226c36852c619d6926d017ecf1be4bda3c346bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a791224fa985f1b53127d12226c36852c619d6926d017ecf1be4bda3c346bf->enter($__internal_28a791224fa985f1b53127d12226c36852c619d6926d017ecf1be4bda3c346bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4c5aac71ea70861014c1c0302fbecae68bd3e7f0628518ff34fe23a60e437396->leave($__internal_4c5aac71ea70861014c1c0302fbecae68bd3e7f0628518ff34fe23a60e437396_prof);

        
        $__internal_28a791224fa985f1b53127d12226c36852c619d6926d017ecf1be4bda3c346bf->leave($__internal_28a791224fa985f1b53127d12226c36852c619d6926d017ecf1be4bda3c346bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
