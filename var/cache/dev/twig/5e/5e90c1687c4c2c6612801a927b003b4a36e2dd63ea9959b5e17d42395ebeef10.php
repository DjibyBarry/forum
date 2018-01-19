<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_01e0093f37fd621968a3a88b78e07cfdede904f534997cf2ef8dcbcf9d76fd5e extends Twig_Template
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
        $__internal_983b65273b16603712f1b9eb37898b657ed96fb1e0fe8a00b7e354840aaf78b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983b65273b16603712f1b9eb37898b657ed96fb1e0fe8a00b7e354840aaf78b2->enter($__internal_983b65273b16603712f1b9eb37898b657ed96fb1e0fe8a00b7e354840aaf78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_6578ee5fdfc6b5dba4fe032736eb2db1e1736279d771b36013d91c0f69aecb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6578ee5fdfc6b5dba4fe032736eb2db1e1736279d771b36013d91c0f69aecb93->enter($__internal_6578ee5fdfc6b5dba4fe032736eb2db1e1736279d771b36013d91c0f69aecb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_983b65273b16603712f1b9eb37898b657ed96fb1e0fe8a00b7e354840aaf78b2->leave($__internal_983b65273b16603712f1b9eb37898b657ed96fb1e0fe8a00b7e354840aaf78b2_prof);

        
        $__internal_6578ee5fdfc6b5dba4fe032736eb2db1e1736279d771b36013d91c0f69aecb93->leave($__internal_6578ee5fdfc6b5dba4fe032736eb2db1e1736279d771b36013d91c0f69aecb93_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
