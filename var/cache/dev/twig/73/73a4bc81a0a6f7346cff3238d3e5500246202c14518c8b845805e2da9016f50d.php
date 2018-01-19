<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a1278650c05506634c3c4de2f22add4c021c2d2193b992ba8674a98b0a1b7938 extends Twig_Template
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
        $__internal_5a95a40c5333fdca5bcc44bb0a9f6153ef03465cf7cd0d0caaabd981dae616c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a95a40c5333fdca5bcc44bb0a9f6153ef03465cf7cd0d0caaabd981dae616c0->enter($__internal_5a95a40c5333fdca5bcc44bb0a9f6153ef03465cf7cd0d0caaabd981dae616c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6fc3138934e6ad7bcdafbf1d3ef47681c7307622818392e0abf8a6da64d55c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc3138934e6ad7bcdafbf1d3ef47681c7307622818392e0abf8a6da64d55c6d->enter($__internal_6fc3138934e6ad7bcdafbf1d3ef47681c7307622818392e0abf8a6da64d55c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5a95a40c5333fdca5bcc44bb0a9f6153ef03465cf7cd0d0caaabd981dae616c0->leave($__internal_5a95a40c5333fdca5bcc44bb0a9f6153ef03465cf7cd0d0caaabd981dae616c0_prof);

        
        $__internal_6fc3138934e6ad7bcdafbf1d3ef47681c7307622818392e0abf8a6da64d55c6d->leave($__internal_6fc3138934e6ad7bcdafbf1d3ef47681c7307622818392e0abf8a6da64d55c6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
