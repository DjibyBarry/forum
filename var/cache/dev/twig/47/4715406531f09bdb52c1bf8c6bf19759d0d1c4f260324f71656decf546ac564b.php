<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_7e30a25fa6daaa63e4520779985ff45798c3c7caecc48a1a7a7ce1eb8cd26a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e30a25fa6daaa63e4520779985ff45798c3c7caecc48a1a7a7ce1eb8cd26a1d->enter($__internal_7e30a25fa6daaa63e4520779985ff45798c3c7caecc48a1a7a7ce1eb8cd26a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a3755ba9ee4148c4e79158f0147d2d1f3848e1aa360d45c878cca6a52d4ef442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3755ba9ee4148c4e79158f0147d2d1f3848e1aa360d45c878cca6a52d4ef442->enter($__internal_a3755ba9ee4148c4e79158f0147d2d1f3848e1aa360d45c878cca6a52d4ef442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e30a25fa6daaa63e4520779985ff45798c3c7caecc48a1a7a7ce1eb8cd26a1d->leave($__internal_7e30a25fa6daaa63e4520779985ff45798c3c7caecc48a1a7a7ce1eb8cd26a1d_prof);

        
        $__internal_a3755ba9ee4148c4e79158f0147d2d1f3848e1aa360d45c878cca6a52d4ef442->leave($__internal_a3755ba9ee4148c4e79158f0147d2d1f3848e1aa360d45c878cca6a52d4ef442_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2188071b48bbcd07176a8ca2689fbd3a3942861dd6e1c71da695150500b55f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2188071b48bbcd07176a8ca2689fbd3a3942861dd6e1c71da695150500b55f33->enter($__internal_2188071b48bbcd07176a8ca2689fbd3a3942861dd6e1c71da695150500b55f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4c2fae4670410695519b23c5bf52e9f932be751da3e20cfa64f679a36481785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c2fae4670410695519b23c5bf52e9f932be751da3e20cfa64f679a36481785->enter($__internal_a4c2fae4670410695519b23c5bf52e9f932be751da3e20cfa64f679a36481785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a4c2fae4670410695519b23c5bf52e9f932be751da3e20cfa64f679a36481785->leave($__internal_a4c2fae4670410695519b23c5bf52e9f932be751da3e20cfa64f679a36481785_prof);

        
        $__internal_2188071b48bbcd07176a8ca2689fbd3a3942861dd6e1c71da695150500b55f33->leave($__internal_2188071b48bbcd07176a8ca2689fbd3a3942861dd6e1c71da695150500b55f33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a0760d8eb3cee0749481fed7efe64bbeaf43efa851a28c0e663067ce14ceacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0760d8eb3cee0749481fed7efe64bbeaf43efa851a28c0e663067ce14ceacb->enter($__internal_8a0760d8eb3cee0749481fed7efe64bbeaf43efa851a28c0e663067ce14ceacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0bff3925d2f12b0ee0c7d67d48fef49bd9875bd782ff6089011e98e7cd9c567b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bff3925d2f12b0ee0c7d67d48fef49bd9875bd782ff6089011e98e7cd9c567b->enter($__internal_0bff3925d2f12b0ee0c7d67d48fef49bd9875bd782ff6089011e98e7cd9c567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0bff3925d2f12b0ee0c7d67d48fef49bd9875bd782ff6089011e98e7cd9c567b->leave($__internal_0bff3925d2f12b0ee0c7d67d48fef49bd9875bd782ff6089011e98e7cd9c567b_prof);

        
        $__internal_8a0760d8eb3cee0749481fed7efe64bbeaf43efa851a28c0e663067ce14ceacb->leave($__internal_8a0760d8eb3cee0749481fed7efe64bbeaf43efa851a28c0e663067ce14ceacb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0386066fa313f40c2cf7b81781d0fcd994892840f5a33f63a93294a431b94823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0386066fa313f40c2cf7b81781d0fcd994892840f5a33f63a93294a431b94823->enter($__internal_0386066fa313f40c2cf7b81781d0fcd994892840f5a33f63a93294a431b94823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62234e9c0abb6a8acccd4861290b6856e79671cc41b949af7daba9594fa89f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62234e9c0abb6a8acccd4861290b6856e79671cc41b949af7daba9594fa89f00->enter($__internal_62234e9c0abb6a8acccd4861290b6856e79671cc41b949af7daba9594fa89f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_62234e9c0abb6a8acccd4861290b6856e79671cc41b949af7daba9594fa89f00->leave($__internal_62234e9c0abb6a8acccd4861290b6856e79671cc41b949af7daba9594fa89f00_prof);

        
        $__internal_0386066fa313f40c2cf7b81781d0fcd994892840f5a33f63a93294a431b94823->leave($__internal_0386066fa313f40c2cf7b81781d0fcd994892840f5a33f63a93294a431b94823_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
