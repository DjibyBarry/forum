<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7493a6b978c39c0f545fc24394f63014f01661429df63121e6927bbfe17663a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_364a89ddbf9dce893730fefdd41ee60d54704bcad570a2a1325805796e1da2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364a89ddbf9dce893730fefdd41ee60d54704bcad570a2a1325805796e1da2bd->enter($__internal_364a89ddbf9dce893730fefdd41ee60d54704bcad570a2a1325805796e1da2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5203be5718224e9d45f18dd2a913a18d8fe388a082e9237e11bf8dfb3cc9c786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5203be5718224e9d45f18dd2a913a18d8fe388a082e9237e11bf8dfb3cc9c786->enter($__internal_5203be5718224e9d45f18dd2a913a18d8fe388a082e9237e11bf8dfb3cc9c786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364a89ddbf9dce893730fefdd41ee60d54704bcad570a2a1325805796e1da2bd->leave($__internal_364a89ddbf9dce893730fefdd41ee60d54704bcad570a2a1325805796e1da2bd_prof);

        
        $__internal_5203be5718224e9d45f18dd2a913a18d8fe388a082e9237e11bf8dfb3cc9c786->leave($__internal_5203be5718224e9d45f18dd2a913a18d8fe388a082e9237e11bf8dfb3cc9c786_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07a86f7f12196724aedf65d960192fcbc66a36421710a306542d65446e45ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07a86f7f12196724aedf65d960192fcbc66a36421710a306542d65446e45ecd->enter($__internal_c07a86f7f12196724aedf65d960192fcbc66a36421710a306542d65446e45ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c53721617a8c637e52693ae3e513fc287fbce457c452d15cad1fea15b550b2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53721617a8c637e52693ae3e513fc287fbce457c452d15cad1fea15b550b2e1->enter($__internal_c53721617a8c637e52693ae3e513fc287fbce457c452d15cad1fea15b550b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c53721617a8c637e52693ae3e513fc287fbce457c452d15cad1fea15b550b2e1->leave($__internal_c53721617a8c637e52693ae3e513fc287fbce457c452d15cad1fea15b550b2e1_prof);

        
        $__internal_c07a86f7f12196724aedf65d960192fcbc66a36421710a306542d65446e45ecd->leave($__internal_c07a86f7f12196724aedf65d960192fcbc66a36421710a306542d65446e45ecd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e272ee8a039edd04f5f9fed6e1ecc9887dae99c10fdbdfb501b0dc5d6606b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e272ee8a039edd04f5f9fed6e1ecc9887dae99c10fdbdfb501b0dc5d6606b81->enter($__internal_2e272ee8a039edd04f5f9fed6e1ecc9887dae99c10fdbdfb501b0dc5d6606b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35e5e51daa3135f0b3f4d2a037ebefa2205c69c58c5c941883952cd5574751e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e5e51daa3135f0b3f4d2a037ebefa2205c69c58c5c941883952cd5574751e0->enter($__internal_35e5e51daa3135f0b3f4d2a037ebefa2205c69c58c5c941883952cd5574751e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35e5e51daa3135f0b3f4d2a037ebefa2205c69c58c5c941883952cd5574751e0->leave($__internal_35e5e51daa3135f0b3f4d2a037ebefa2205c69c58c5c941883952cd5574751e0_prof);

        
        $__internal_2e272ee8a039edd04f5f9fed6e1ecc9887dae99c10fdbdfb501b0dc5d6606b81->leave($__internal_2e272ee8a039edd04f5f9fed6e1ecc9887dae99c10fdbdfb501b0dc5d6606b81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
