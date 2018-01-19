<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b4058bacedb8aab3abd740a863a908ee8e0e3234d7dee1dc299077c948081f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d809189062b4ddf315b65518e9d7c60fd9e4ac558bd2b0f14cfd959738829416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d809189062b4ddf315b65518e9d7c60fd9e4ac558bd2b0f14cfd959738829416->enter($__internal_d809189062b4ddf315b65518e9d7c60fd9e4ac558bd2b0f14cfd959738829416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_edfd194346534377b62a0c3d0cd10cf1384e41d7e8302ce1d27c054aef2a3a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfd194346534377b62a0c3d0cd10cf1384e41d7e8302ce1d27c054aef2a3a77->enter($__internal_edfd194346534377b62a0c3d0cd10cf1384e41d7e8302ce1d27c054aef2a3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d809189062b4ddf315b65518e9d7c60fd9e4ac558bd2b0f14cfd959738829416->leave($__internal_d809189062b4ddf315b65518e9d7c60fd9e4ac558bd2b0f14cfd959738829416_prof);

        
        $__internal_edfd194346534377b62a0c3d0cd10cf1384e41d7e8302ce1d27c054aef2a3a77->leave($__internal_edfd194346534377b62a0c3d0cd10cf1384e41d7e8302ce1d27c054aef2a3a77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c54cc46f60bd48d6b7c4a5df926689a230ca9f7a8d260e57baefc3418361f9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54cc46f60bd48d6b7c4a5df926689a230ca9f7a8d260e57baefc3418361f9fc->enter($__internal_c54cc46f60bd48d6b7c4a5df926689a230ca9f7a8d260e57baefc3418361f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fef5816e08d409c00087ea80afe43b9cb963e981866339aa248bdc3c5b33293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef5816e08d409c00087ea80afe43b9cb963e981866339aa248bdc3c5b33293d->enter($__internal_fef5816e08d409c00087ea80afe43b9cb963e981866339aa248bdc3c5b33293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fef5816e08d409c00087ea80afe43b9cb963e981866339aa248bdc3c5b33293d->leave($__internal_fef5816e08d409c00087ea80afe43b9cb963e981866339aa248bdc3c5b33293d_prof);

        
        $__internal_c54cc46f60bd48d6b7c4a5df926689a230ca9f7a8d260e57baefc3418361f9fc->leave($__internal_c54cc46f60bd48d6b7c4a5df926689a230ca9f7a8d260e57baefc3418361f9fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a465aa487621e1483215ff757a4eafd598c57300d9d8cad02894e8c528c236b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a465aa487621e1483215ff757a4eafd598c57300d9d8cad02894e8c528c236b3->enter($__internal_a465aa487621e1483215ff757a4eafd598c57300d9d8cad02894e8c528c236b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a761d6beb59a611468f513f309d86f6c3d71836500b8c6e7d020a6f287b80356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a761d6beb59a611468f513f309d86f6c3d71836500b8c6e7d020a6f287b80356->enter($__internal_a761d6beb59a611468f513f309d86f6c3d71836500b8c6e7d020a6f287b80356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a761d6beb59a611468f513f309d86f6c3d71836500b8c6e7d020a6f287b80356->leave($__internal_a761d6beb59a611468f513f309d86f6c3d71836500b8c6e7d020a6f287b80356_prof);

        
        $__internal_a465aa487621e1483215ff757a4eafd598c57300d9d8cad02894e8c528c236b3->leave($__internal_a465aa487621e1483215ff757a4eafd598c57300d9d8cad02894e8c528c236b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
