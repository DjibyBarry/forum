<?php

/* @Twig/Exception/exception.xml.twig */
class __TwigTemplate_f6e7fc821048a540b2d361dd5d5b8a369b6f63dde0a550ff155f5f71df709f73 extends Twig_Template
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
        $__internal_750c0f9fb56968d42aedeb07b7f2cf5c163df5ed561bea8e40d89bb88e8b4c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750c0f9fb56968d42aedeb07b7f2cf5c163df5ed561bea8e40d89bb88e8b4c11->enter($__internal_750c0f9fb56968d42aedeb07b7f2cf5c163df5ed561bea8e40d89bb88e8b4c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        $__internal_0cad8eb514644c510e76f26bbb5c197ea52d539ce85c0ddd1ae343eaead88235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cad8eb514644c510e76f26bbb5c197ea52d539ce85c0ddd1ae343eaead88235->enter($__internal_0cad8eb514644c510e76f26bbb5c197ea52d539ce85c0ddd1ae343eaead88235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 4, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            echo twig_include($this->env, $context, "@Twig/Exception/traces.xml.twig", array("exception" => $context["e"]), false);
            echo "
    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_750c0f9fb56968d42aedeb07b7f2cf5c163df5ed561bea8e40d89bb88e8b4c11->leave($__internal_750c0f9fb56968d42aedeb07b7f2cf5c163df5ed561bea8e40d89bb88e8b4c11_prof);

        
        $__internal_0cad8eb514644c510e76f26bbb5c197ea52d539ce85c0ddd1ae343eaead88235->leave($__internal_0cad8eb514644c510e76f26bbb5c197ea52d539ce85c0ddd1ae343eaead88235_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{{ include('@Twig/Exception/traces.xml.twig', { exception: e }, with_context = false) }}
    </exception>
{% endfor %}
</error>
", "@Twig/Exception/exception.xml.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.xml.twig");
    }
}
