<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b9781c0f213beff2a78b860e07049836d68c42b297cf29ecc2407e83e1a6a712 extends Twig_Template
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
        $__internal_1a622f0dc5509ac73ac26b8656e335ff1f5f557013d22e950934995215a340da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a622f0dc5509ac73ac26b8656e335ff1f5f557013d22e950934995215a340da->enter($__internal_1a622f0dc5509ac73ac26b8656e335ff1f5f557013d22e950934995215a340da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8edcb1aa05dc7dc640698ba3f97c8ed1374ab218b2a5440c0c59ee476b33847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edcb1aa05dc7dc640698ba3f97c8ed1374ab218b2a5440c0c59ee476b33847f->enter($__internal_8edcb1aa05dc7dc640698ba3f97c8ed1374ab218b2a5440c0c59ee476b33847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1a622f0dc5509ac73ac26b8656e335ff1f5f557013d22e950934995215a340da->leave($__internal_1a622f0dc5509ac73ac26b8656e335ff1f5f557013d22e950934995215a340da_prof);

        
        $__internal_8edcb1aa05dc7dc640698ba3f97c8ed1374ab218b2a5440c0c59ee476b33847f->leave($__internal_8edcb1aa05dc7dc640698ba3f97c8ed1374ab218b2a5440c0c59ee476b33847f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
