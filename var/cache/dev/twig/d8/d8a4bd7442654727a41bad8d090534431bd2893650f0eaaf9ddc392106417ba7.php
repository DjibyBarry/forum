<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6b0369e2627f4955a0abeb0ed33cf3256266a0a8037c9639f01c3a8e4fe3e967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_7f278b0371362ec058ca309810a428f97e343a41ed4e4cc2dde6ac86490dfd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f278b0371362ec058ca309810a428f97e343a41ed4e4cc2dde6ac86490dfd0c->enter($__internal_7f278b0371362ec058ca309810a428f97e343a41ed4e4cc2dde6ac86490dfd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6f5e140ef930f6a52609c771cba75f74757421b7af2e3f896387820d5c5cad09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5e140ef930f6a52609c771cba75f74757421b7af2e3f896387820d5c5cad09->enter($__internal_6f5e140ef930f6a52609c771cba75f74757421b7af2e3f896387820d5c5cad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f278b0371362ec058ca309810a428f97e343a41ed4e4cc2dde6ac86490dfd0c->leave($__internal_7f278b0371362ec058ca309810a428f97e343a41ed4e4cc2dde6ac86490dfd0c_prof);

        
        $__internal_6f5e140ef930f6a52609c771cba75f74757421b7af2e3f896387820d5c5cad09->leave($__internal_6f5e140ef930f6a52609c771cba75f74757421b7af2e3f896387820d5c5cad09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c85a6eb8ad2a3a1c911aded9b21984049d982edb832ad7f1813747e2d139c712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85a6eb8ad2a3a1c911aded9b21984049d982edb832ad7f1813747e2d139c712->enter($__internal_c85a6eb8ad2a3a1c911aded9b21984049d982edb832ad7f1813747e2d139c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_712a546a3839ec7917cf4b33a5031f8ee53b981c5e1eb2d94400ff4817884eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712a546a3839ec7917cf4b33a5031f8ee53b981c5e1eb2d94400ff4817884eff->enter($__internal_712a546a3839ec7917cf4b33a5031f8ee53b981c5e1eb2d94400ff4817884eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_712a546a3839ec7917cf4b33a5031f8ee53b981c5e1eb2d94400ff4817884eff->leave($__internal_712a546a3839ec7917cf4b33a5031f8ee53b981c5e1eb2d94400ff4817884eff_prof);

        
        $__internal_c85a6eb8ad2a3a1c911aded9b21984049d982edb832ad7f1813747e2d139c712->leave($__internal_c85a6eb8ad2a3a1c911aded9b21984049d982edb832ad7f1813747e2d139c712_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
