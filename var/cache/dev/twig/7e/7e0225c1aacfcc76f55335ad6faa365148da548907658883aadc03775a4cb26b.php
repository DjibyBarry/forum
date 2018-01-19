<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_14af130ee6a1d0efb7224b6d90c084ec5eff9f145367b832b975ed7513c5a71d extends Twig_Template
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
        $__internal_8e5ba254243864a3e91bdeecf9ccd548ad1da920ee60c0499ba6b70e9711d924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5ba254243864a3e91bdeecf9ccd548ad1da920ee60c0499ba6b70e9711d924->enter($__internal_8e5ba254243864a3e91bdeecf9ccd548ad1da920ee60c0499ba6b70e9711d924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_83242b9b264bfeea605e35b6ce521610a43840d494228e487592caede05aff53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83242b9b264bfeea605e35b6ce521610a43840d494228e487592caede05aff53->enter($__internal_83242b9b264bfeea605e35b6ce521610a43840d494228e487592caede05aff53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8e5ba254243864a3e91bdeecf9ccd548ad1da920ee60c0499ba6b70e9711d924->leave($__internal_8e5ba254243864a3e91bdeecf9ccd548ad1da920ee60c0499ba6b70e9711d924_prof);

        
        $__internal_83242b9b264bfeea605e35b6ce521610a43840d494228e487592caede05aff53->leave($__internal_83242b9b264bfeea605e35b6ce521610a43840d494228e487592caede05aff53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
