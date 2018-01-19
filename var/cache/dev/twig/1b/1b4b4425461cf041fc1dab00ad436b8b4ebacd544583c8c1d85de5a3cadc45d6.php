<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_524663740ad6582594cb9f9929de5b3678f9f7b94a4de5450129edd63d0ddbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524663740ad6582594cb9f9929de5b3678f9f7b94a4de5450129edd63d0ddbb3->enter($__internal_524663740ad6582594cb9f9929de5b3678f9f7b94a4de5450129edd63d0ddbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5dab4ebb2cb4310a69d05612ace9c06a64a452ca41e538f98e2a746958ecf8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dab4ebb2cb4310a69d05612ace9c06a64a452ca41e538f98e2a746958ecf8f6->enter($__internal_5dab4ebb2cb4310a69d05612ace9c06a64a452ca41e538f98e2a746958ecf8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524663740ad6582594cb9f9929de5b3678f9f7b94a4de5450129edd63d0ddbb3->leave($__internal_524663740ad6582594cb9f9929de5b3678f9f7b94a4de5450129edd63d0ddbb3_prof);

        
        $__internal_5dab4ebb2cb4310a69d05612ace9c06a64a452ca41e538f98e2a746958ecf8f6->leave($__internal_5dab4ebb2cb4310a69d05612ace9c06a64a452ca41e538f98e2a746958ecf8f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09bb5b668ed1c12bcd1afe8286b945044867110cc72940b0448b62a7528014b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bb5b668ed1c12bcd1afe8286b945044867110cc72940b0448b62a7528014b7->enter($__internal_09bb5b668ed1c12bcd1afe8286b945044867110cc72940b0448b62a7528014b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41e6167407eb1bcd69bbbadcac53132507ef3f1c62341e0bc94707c11b873fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e6167407eb1bcd69bbbadcac53132507ef3f1c62341e0bc94707c11b873fb5->enter($__internal_41e6167407eb1bcd69bbbadcac53132507ef3f1c62341e0bc94707c11b873fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41e6167407eb1bcd69bbbadcac53132507ef3f1c62341e0bc94707c11b873fb5->leave($__internal_41e6167407eb1bcd69bbbadcac53132507ef3f1c62341e0bc94707c11b873fb5_prof);

        
        $__internal_09bb5b668ed1c12bcd1afe8286b945044867110cc72940b0448b62a7528014b7->leave($__internal_09bb5b668ed1c12bcd1afe8286b945044867110cc72940b0448b62a7528014b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb8c03ad67b5e5d2ef9b18abb82367d872ed9b0bd31d2dc35be59915a6283986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8c03ad67b5e5d2ef9b18abb82367d872ed9b0bd31d2dc35be59915a6283986->enter($__internal_eb8c03ad67b5e5d2ef9b18abb82367d872ed9b0bd31d2dc35be59915a6283986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be63686b4d91e11748c6b1715ff7f3d3f41f4abf922acf30a4d6bb31a52080bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be63686b4d91e11748c6b1715ff7f3d3f41f4abf922acf30a4d6bb31a52080bf->enter($__internal_be63686b4d91e11748c6b1715ff7f3d3f41f4abf922acf30a4d6bb31a52080bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be63686b4d91e11748c6b1715ff7f3d3f41f4abf922acf30a4d6bb31a52080bf->leave($__internal_be63686b4d91e11748c6b1715ff7f3d3f41f4abf922acf30a4d6bb31a52080bf_prof);

        
        $__internal_eb8c03ad67b5e5d2ef9b18abb82367d872ed9b0bd31d2dc35be59915a6283986->leave($__internal_eb8c03ad67b5e5d2ef9b18abb82367d872ed9b0bd31d2dc35be59915a6283986_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00a1fae3cd8a299de04303940c92dcc9bc604b8ad44cb767971177b3ff15d0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a1fae3cd8a299de04303940c92dcc9bc604b8ad44cb767971177b3ff15d0e3->enter($__internal_00a1fae3cd8a299de04303940c92dcc9bc604b8ad44cb767971177b3ff15d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f900903003b2131897f66dc9f3a87e3b7ccbfe832101c1e0e8fb256eec0de33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f900903003b2131897f66dc9f3a87e3b7ccbfe832101c1e0e8fb256eec0de33->enter($__internal_4f900903003b2131897f66dc9f3a87e3b7ccbfe832101c1e0e8fb256eec0de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4f900903003b2131897f66dc9f3a87e3b7ccbfe832101c1e0e8fb256eec0de33->leave($__internal_4f900903003b2131897f66dc9f3a87e3b7ccbfe832101c1e0e8fb256eec0de33_prof);

        
        $__internal_00a1fae3cd8a299de04303940c92dcc9bc604b8ad44cb767971177b3ff15d0e3->leave($__internal_00a1fae3cd8a299de04303940c92dcc9bc604b8ad44cb767971177b3ff15d0e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
