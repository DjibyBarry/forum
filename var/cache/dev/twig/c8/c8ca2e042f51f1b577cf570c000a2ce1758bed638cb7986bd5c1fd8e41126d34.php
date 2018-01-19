<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_923012ffa921db6e3fb1526e669d46b3aa8908088616cac4f1971ab15320036d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5c06ab963dd8d3efea679dd9e042d23b5ad1e5d9df22b356bd41ddb671f61dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c06ab963dd8d3efea679dd9e042d23b5ad1e5d9df22b356bd41ddb671f61dfe->enter($__internal_5c06ab963dd8d3efea679dd9e042d23b5ad1e5d9df22b356bd41ddb671f61dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f3e9150708725b6d8c326efe7bbf9651d952156f3a43f120598e5de19b4c1877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e9150708725b6d8c326efe7bbf9651d952156f3a43f120598e5de19b4c1877->enter($__internal_f3e9150708725b6d8c326efe7bbf9651d952156f3a43f120598e5de19b4c1877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c06ab963dd8d3efea679dd9e042d23b5ad1e5d9df22b356bd41ddb671f61dfe->leave($__internal_5c06ab963dd8d3efea679dd9e042d23b5ad1e5d9df22b356bd41ddb671f61dfe_prof);

        
        $__internal_f3e9150708725b6d8c326efe7bbf9651d952156f3a43f120598e5de19b4c1877->leave($__internal_f3e9150708725b6d8c326efe7bbf9651d952156f3a43f120598e5de19b4c1877_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4094e52247cd02d6ee28c67d6e2563152e9f093f2ea2cbc32404d82a2bd8478f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4094e52247cd02d6ee28c67d6e2563152e9f093f2ea2cbc32404d82a2bd8478f->enter($__internal_4094e52247cd02d6ee28c67d6e2563152e9f093f2ea2cbc32404d82a2bd8478f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c64aabacf80b039e5bdd35630f1c5099f5e2224d1b9713343e390b9e65173ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64aabacf80b039e5bdd35630f1c5099f5e2224d1b9713343e390b9e65173ed1->enter($__internal_c64aabacf80b039e5bdd35630f1c5099f5e2224d1b9713343e390b9e65173ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c64aabacf80b039e5bdd35630f1c5099f5e2224d1b9713343e390b9e65173ed1->leave($__internal_c64aabacf80b039e5bdd35630f1c5099f5e2224d1b9713343e390b9e65173ed1_prof);

        
        $__internal_4094e52247cd02d6ee28c67d6e2563152e9f093f2ea2cbc32404d82a2bd8478f->leave($__internal_4094e52247cd02d6ee28c67d6e2563152e9f093f2ea2cbc32404d82a2bd8478f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc59311f2944cf10036e99604ac6348edf1e9c8092d2c6c22160b9b1c2d9ada0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc59311f2944cf10036e99604ac6348edf1e9c8092d2c6c22160b9b1c2d9ada0->enter($__internal_fc59311f2944cf10036e99604ac6348edf1e9c8092d2c6c22160b9b1c2d9ada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e114a393d98f5cd268da2e7e72b3cf8b695cbc56e8414d93697808d736da9aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e114a393d98f5cd268da2e7e72b3cf8b695cbc56e8414d93697808d736da9aec->enter($__internal_e114a393d98f5cd268da2e7e72b3cf8b695cbc56e8414d93697808d736da9aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e114a393d98f5cd268da2e7e72b3cf8b695cbc56e8414d93697808d736da9aec->leave($__internal_e114a393d98f5cd268da2e7e72b3cf8b695cbc56e8414d93697808d736da9aec_prof);

        
        $__internal_fc59311f2944cf10036e99604ac6348edf1e9c8092d2c6c22160b9b1c2d9ada0->leave($__internal_fc59311f2944cf10036e99604ac6348edf1e9c8092d2c6c22160b9b1c2d9ada0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2736a6e87cc70b476337dad25ac966174df236264ed4aaec9e0b32e6fa305b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2736a6e87cc70b476337dad25ac966174df236264ed4aaec9e0b32e6fa305b36->enter($__internal_2736a6e87cc70b476337dad25ac966174df236264ed4aaec9e0b32e6fa305b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dcbcd9adce1aa983e6e527ef9531ac7b1720aa0bc6e30f6555ff76416b7fd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcbcd9adce1aa983e6e527ef9531ac7b1720aa0bc6e30f6555ff76416b7fd02->enter($__internal_4dcbcd9adce1aa983e6e527ef9531ac7b1720aa0bc6e30f6555ff76416b7fd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_4dcbcd9adce1aa983e6e527ef9531ac7b1720aa0bc6e30f6555ff76416b7fd02->leave($__internal_4dcbcd9adce1aa983e6e527ef9531ac7b1720aa0bc6e30f6555ff76416b7fd02_prof);

        
        $__internal_2736a6e87cc70b476337dad25ac966174df236264ed4aaec9e0b32e6fa305b36->leave($__internal_2736a6e87cc70b476337dad25ac966174df236264ed4aaec9e0b32e6fa305b36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
