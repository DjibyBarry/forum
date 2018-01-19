<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_505ebef2d229e8b8bdaeb31d78a9ba2bc0be5238ce4d8b1d55540115818cb37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dc1bbee584430ca0c3f390a333605669207afc335902280e40b88d512d95633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc1bbee584430ca0c3f390a333605669207afc335902280e40b88d512d95633->enter($__internal_9dc1bbee584430ca0c3f390a333605669207afc335902280e40b88d512d95633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_79b6bce5a816c64a54dcbb59957a53c756f86845b3d147b12a50873b1d1e354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b6bce5a816c64a54dcbb59957a53c756f86845b3d147b12a50873b1d1e354e->enter($__internal_79b6bce5a816c64a54dcbb59957a53c756f86845b3d147b12a50873b1d1e354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc1bbee584430ca0c3f390a333605669207afc335902280e40b88d512d95633->leave($__internal_9dc1bbee584430ca0c3f390a333605669207afc335902280e40b88d512d95633_prof);

        
        $__internal_79b6bce5a816c64a54dcbb59957a53c756f86845b3d147b12a50873b1d1e354e->leave($__internal_79b6bce5a816c64a54dcbb59957a53c756f86845b3d147b12a50873b1d1e354e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbdd7f59fdca674d010b1e6da7c73eb81a42b3301fe1382e0a459cf80aeaa364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdd7f59fdca674d010b1e6da7c73eb81a42b3301fe1382e0a459cf80aeaa364->enter($__internal_fbdd7f59fdca674d010b1e6da7c73eb81a42b3301fe1382e0a459cf80aeaa364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b21b657a85fe157325777032740cd8684c9177ab6058fac9ba0642cd83f30c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b21b657a85fe157325777032740cd8684c9177ab6058fac9ba0642cd83f30c6->enter($__internal_1b21b657a85fe157325777032740cd8684c9177ab6058fac9ba0642cd83f30c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_1b21b657a85fe157325777032740cd8684c9177ab6058fac9ba0642cd83f30c6->leave($__internal_1b21b657a85fe157325777032740cd8684c9177ab6058fac9ba0642cd83f30c6_prof);

        
        $__internal_fbdd7f59fdca674d010b1e6da7c73eb81a42b3301fe1382e0a459cf80aeaa364->leave($__internal_fbdd7f59fdca674d010b1e6da7c73eb81a42b3301fe1382e0a459cf80aeaa364_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
