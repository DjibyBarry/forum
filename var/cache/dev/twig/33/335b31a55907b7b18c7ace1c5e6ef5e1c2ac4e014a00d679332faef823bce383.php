<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b55ba1aec3f18cb53fbb155c0fece24e000215d002b94cd52275594f2bd15144 extends Twig_Template
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
        $__internal_dea89732e6ff2a0021614f5bfc02eb62aec9acc2459ad9754d5233ef9788b795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea89732e6ff2a0021614f5bfc02eb62aec9acc2459ad9754d5233ef9788b795->enter($__internal_dea89732e6ff2a0021614f5bfc02eb62aec9acc2459ad9754d5233ef9788b795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f3044556ff3a2823125057554dfc60249939b2f6e09f7ed945d4af7a1e076bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3044556ff3a2823125057554dfc60249939b2f6e09f7ed945d4af7a1e076bf2->enter($__internal_f3044556ff3a2823125057554dfc60249939b2f6e09f7ed945d4af7a1e076bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dea89732e6ff2a0021614f5bfc02eb62aec9acc2459ad9754d5233ef9788b795->leave($__internal_dea89732e6ff2a0021614f5bfc02eb62aec9acc2459ad9754d5233ef9788b795_prof);

        
        $__internal_f3044556ff3a2823125057554dfc60249939b2f6e09f7ed945d4af7a1e076bf2->leave($__internal_f3044556ff3a2823125057554dfc60249939b2f6e09f7ed945d4af7a1e076bf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
