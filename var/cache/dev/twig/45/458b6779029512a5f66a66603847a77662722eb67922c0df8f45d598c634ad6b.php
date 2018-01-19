<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf647899f9efc140250e532bcf129181422c0ed6f4574bcad55e9abb8ccd05ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf647899f9efc140250e532bcf129181422c0ed6f4574bcad55e9abb8ccd05ed->enter($__internal_bf647899f9efc140250e532bcf129181422c0ed6f4574bcad55e9abb8ccd05ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a408f2229174ea8e086dd333216dc1d2192111c7798f45da64c606f682b3fc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a408f2229174ea8e086dd333216dc1d2192111c7798f45da64c606f682b3fc53->enter($__internal_a408f2229174ea8e086dd333216dc1d2192111c7798f45da64c606f682b3fc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf647899f9efc140250e532bcf129181422c0ed6f4574bcad55e9abb8ccd05ed->leave($__internal_bf647899f9efc140250e532bcf129181422c0ed6f4574bcad55e9abb8ccd05ed_prof);

        
        $__internal_a408f2229174ea8e086dd333216dc1d2192111c7798f45da64c606f682b3fc53->leave($__internal_a408f2229174ea8e086dd333216dc1d2192111c7798f45da64c606f682b3fc53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_342400fbc64f4a167082f7e299e43320b0667c41f15a15437efee54ce85728d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342400fbc64f4a167082f7e299e43320b0667c41f15a15437efee54ce85728d3->enter($__internal_342400fbc64f4a167082f7e299e43320b0667c41f15a15437efee54ce85728d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_000a8f803513ca77c4cf2dcb4ca324221778e44dbb5d6ad3de9321cb544a6f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000a8f803513ca77c4cf2dcb4ca324221778e44dbb5d6ad3de9321cb544a6f50->enter($__internal_000a8f803513ca77c4cf2dcb4ca324221778e44dbb5d6ad3de9321cb544a6f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_000a8f803513ca77c4cf2dcb4ca324221778e44dbb5d6ad3de9321cb544a6f50->leave($__internal_000a8f803513ca77c4cf2dcb4ca324221778e44dbb5d6ad3de9321cb544a6f50_prof);

        
        $__internal_342400fbc64f4a167082f7e299e43320b0667c41f15a15437efee54ce85728d3->leave($__internal_342400fbc64f4a167082f7e299e43320b0667c41f15a15437efee54ce85728d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
