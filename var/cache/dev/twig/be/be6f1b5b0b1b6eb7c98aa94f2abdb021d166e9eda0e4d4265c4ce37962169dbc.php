<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_75173cca7348b0f53398bf8df7ea4e011d98df74b62c11c890ac8d64bf5d5487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_986b621bd3f2ac3a2050930f83b29dcd76c91114777b96617c15124d991945b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986b621bd3f2ac3a2050930f83b29dcd76c91114777b96617c15124d991945b9->enter($__internal_986b621bd3f2ac3a2050930f83b29dcd76c91114777b96617c15124d991945b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_28f7089ce3f28437bc01e56f0da47ef3c0919aff5caf67cc8c785bed501a5382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f7089ce3f28437bc01e56f0da47ef3c0919aff5caf67cc8c785bed501a5382->enter($__internal_28f7089ce3f28437bc01e56f0da47ef3c0919aff5caf67cc8c785bed501a5382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986b621bd3f2ac3a2050930f83b29dcd76c91114777b96617c15124d991945b9->leave($__internal_986b621bd3f2ac3a2050930f83b29dcd76c91114777b96617c15124d991945b9_prof);

        
        $__internal_28f7089ce3f28437bc01e56f0da47ef3c0919aff5caf67cc8c785bed501a5382->leave($__internal_28f7089ce3f28437bc01e56f0da47ef3c0919aff5caf67cc8c785bed501a5382_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a62a48d751d905501051e7eaa30ae9112f0a673f532e1d006527d55968e9b400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62a48d751d905501051e7eaa30ae9112f0a673f532e1d006527d55968e9b400->enter($__internal_a62a48d751d905501051e7eaa30ae9112f0a673f532e1d006527d55968e9b400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c26e96a7ce4df787fad6f7d7ecdd739d9154c88c27fb559284e83c02283a8d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26e96a7ce4df787fad6f7d7ecdd739d9154c88c27fb559284e83c02283a8d85->enter($__internal_c26e96a7ce4df787fad6f7d7ecdd739d9154c88c27fb559284e83c02283a8d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c26e96a7ce4df787fad6f7d7ecdd739d9154c88c27fb559284e83c02283a8d85->leave($__internal_c26e96a7ce4df787fad6f7d7ecdd739d9154c88c27fb559284e83c02283a8d85_prof);

        
        $__internal_a62a48d751d905501051e7eaa30ae9112f0a673f532e1d006527d55968e9b400->leave($__internal_a62a48d751d905501051e7eaa30ae9112f0a673f532e1d006527d55968e9b400_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1afbb97a8b482a021a564ad742556e8ca7b23ea27b3b953004fe3c411ad44e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afbb97a8b482a021a564ad742556e8ca7b23ea27b3b953004fe3c411ad44e61->enter($__internal_1afbb97a8b482a021a564ad742556e8ca7b23ea27b3b953004fe3c411ad44e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10fa4782a80400b6f43b6d82f0872799c35b1fafc1df635586b9be9961f91d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fa4782a80400b6f43b6d82f0872799c35b1fafc1df635586b9be9961f91d26->enter($__internal_10fa4782a80400b6f43b6d82f0872799c35b1fafc1df635586b9be9961f91d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10fa4782a80400b6f43b6d82f0872799c35b1fafc1df635586b9be9961f91d26->leave($__internal_10fa4782a80400b6f43b6d82f0872799c35b1fafc1df635586b9be9961f91d26_prof);

        
        $__internal_1afbb97a8b482a021a564ad742556e8ca7b23ea27b3b953004fe3c411ad44e61->leave($__internal_1afbb97a8b482a021a564ad742556e8ca7b23ea27b3b953004fe3c411ad44e61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_355135e1b65d158ded0ed674b9440d5d59985846e2d76536aefe91ea58aa2672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355135e1b65d158ded0ed674b9440d5d59985846e2d76536aefe91ea58aa2672->enter($__internal_355135e1b65d158ded0ed674b9440d5d59985846e2d76536aefe91ea58aa2672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97f1cf0054daaff5fd3ee2eaa9a6c35d1f2adeb3b5076870550cd9c14f66961e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1cf0054daaff5fd3ee2eaa9a6c35d1f2adeb3b5076870550cd9c14f66961e->enter($__internal_97f1cf0054daaff5fd3ee2eaa9a6c35d1f2adeb3b5076870550cd9c14f66961e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_97f1cf0054daaff5fd3ee2eaa9a6c35d1f2adeb3b5076870550cd9c14f66961e->leave($__internal_97f1cf0054daaff5fd3ee2eaa9a6c35d1f2adeb3b5076870550cd9c14f66961e_prof);

        
        $__internal_355135e1b65d158ded0ed674b9440d5d59985846e2d76536aefe91ea58aa2672->leave($__internal_355135e1b65d158ded0ed674b9440d5d59985846e2d76536aefe91ea58aa2672_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
