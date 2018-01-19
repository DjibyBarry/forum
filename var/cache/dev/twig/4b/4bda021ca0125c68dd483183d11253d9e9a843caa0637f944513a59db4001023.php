<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4820f21454d21758bc93ecedc1d6bc5adbf91415d167399e9284ed635dc4fd51 extends Twig_Template
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
        $__internal_4cf552a54cdfe17fbae37ba4320829f8ad931f8bb5cce41112a56d60c4ca1153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf552a54cdfe17fbae37ba4320829f8ad931f8bb5cce41112a56d60c4ca1153->enter($__internal_4cf552a54cdfe17fbae37ba4320829f8ad931f8bb5cce41112a56d60c4ca1153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9cd2509f98ae4af85ba9af77e5ee4bba961f090c724564ffc4db23a0a04660da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd2509f98ae4af85ba9af77e5ee4bba961f090c724564ffc4db23a0a04660da->enter($__internal_9cd2509f98ae4af85ba9af77e5ee4bba961f090c724564ffc4db23a0a04660da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_4cf552a54cdfe17fbae37ba4320829f8ad931f8bb5cce41112a56d60c4ca1153->leave($__internal_4cf552a54cdfe17fbae37ba4320829f8ad931f8bb5cce41112a56d60c4ca1153_prof);

        
        $__internal_9cd2509f98ae4af85ba9af77e5ee4bba961f090c724564ffc4db23a0a04660da->leave($__internal_9cd2509f98ae4af85ba9af77e5ee4bba961f090c724564ffc4db23a0a04660da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
