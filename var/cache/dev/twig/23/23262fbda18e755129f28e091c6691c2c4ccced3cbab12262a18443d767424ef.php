<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d0dc759aea48760fb6b6be4311268470ad37aaa6786608f0051874069e236605 extends Twig_Template
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
        $__internal_ea56f3551e3cc9848e4282b2657a917a7d4a6961be985a8be0679b3f696246bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea56f3551e3cc9848e4282b2657a917a7d4a6961be985a8be0679b3f696246bb->enter($__internal_ea56f3551e3cc9848e4282b2657a917a7d4a6961be985a8be0679b3f696246bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_1fb0a14beefe6c42ed1b83b923af1a80c48b1d58cff99cb501e684354d372470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb0a14beefe6c42ed1b83b923af1a80c48b1d58cff99cb501e684354d372470->enter($__internal_1fb0a14beefe6c42ed1b83b923af1a80c48b1d58cff99cb501e684354d372470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ea56f3551e3cc9848e4282b2657a917a7d4a6961be985a8be0679b3f696246bb->leave($__internal_ea56f3551e3cc9848e4282b2657a917a7d4a6961be985a8be0679b3f696246bb_prof);

        
        $__internal_1fb0a14beefe6c42ed1b83b923af1a80c48b1d58cff99cb501e684354d372470->leave($__internal_1fb0a14beefe6c42ed1b83b923af1a80c48b1d58cff99cb501e684354d372470_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
