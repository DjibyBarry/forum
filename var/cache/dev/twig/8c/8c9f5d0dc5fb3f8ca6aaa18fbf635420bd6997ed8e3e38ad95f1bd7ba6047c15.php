<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01d3cbe0799be5a27f0f271a1fd9be0af9cc36a123902ddc970ef2d85d2bb98c extends Twig_Template
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
        $__internal_a766631267bb01e10301ba87ad38b74366eef524af708112b43472251d3f1726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a766631267bb01e10301ba87ad38b74366eef524af708112b43472251d3f1726->enter($__internal_a766631267bb01e10301ba87ad38b74366eef524af708112b43472251d3f1726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e5f2261774e9d465c9ade2ebafc9eb411355b47a878eae48df36278323c9b93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f2261774e9d465c9ade2ebafc9eb411355b47a878eae48df36278323c9b93c->enter($__internal_e5f2261774e9d465c9ade2ebafc9eb411355b47a878eae48df36278323c9b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a766631267bb01e10301ba87ad38b74366eef524af708112b43472251d3f1726->leave($__internal_a766631267bb01e10301ba87ad38b74366eef524af708112b43472251d3f1726_prof);

        
        $__internal_e5f2261774e9d465c9ade2ebafc9eb411355b47a878eae48df36278323c9b93c->leave($__internal_e5f2261774e9d465c9ade2ebafc9eb411355b47a878eae48df36278323c9b93c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
