<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_99c254f846844d4884ac68b3943b877298000ba30923321cae70f001332696de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba3941c32f562d56aa2d4ac7c8d97984736172cc5567cb9a1b545c1426b2d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba3941c32f562d56aa2d4ac7c8d97984736172cc5567cb9a1b545c1426b2d38->enter($__internal_eba3941c32f562d56aa2d4ac7c8d97984736172cc5567cb9a1b545c1426b2d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bde2314b27fa1d471d16d160bdd4c5c1c39a9d9ddc5724b4d576b01a66c5ea26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde2314b27fa1d471d16d160bdd4c5c1c39a9d9ddc5724b4d576b01a66c5ea26->enter($__internal_bde2314b27fa1d471d16d160bdd4c5c1c39a9d9ddc5724b4d576b01a66c5ea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba3941c32f562d56aa2d4ac7c8d97984736172cc5567cb9a1b545c1426b2d38->leave($__internal_eba3941c32f562d56aa2d4ac7c8d97984736172cc5567cb9a1b545c1426b2d38_prof);

        
        $__internal_bde2314b27fa1d471d16d160bdd4c5c1c39a9d9ddc5724b4d576b01a66c5ea26->leave($__internal_bde2314b27fa1d471d16d160bdd4c5c1c39a9d9ddc5724b4d576b01a66c5ea26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aedcd2fb74713dbfda19ce904a6d92616446d886b8f94bfbcbc5f00e90b311f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedcd2fb74713dbfda19ce904a6d92616446d886b8f94bfbcbc5f00e90b311f8->enter($__internal_aedcd2fb74713dbfda19ce904a6d92616446d886b8f94bfbcbc5f00e90b311f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_842644a9c17cf23252193a8381721b751ef858f696238dd4537b537450db0407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842644a9c17cf23252193a8381721b751ef858f696238dd4537b537450db0407->enter($__internal_842644a9c17cf23252193a8381721b751ef858f696238dd4537b537450db0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_842644a9c17cf23252193a8381721b751ef858f696238dd4537b537450db0407->leave($__internal_842644a9c17cf23252193a8381721b751ef858f696238dd4537b537450db0407_prof);

        
        $__internal_aedcd2fb74713dbfda19ce904a6d92616446d886b8f94bfbcbc5f00e90b311f8->leave($__internal_aedcd2fb74713dbfda19ce904a6d92616446d886b8f94bfbcbc5f00e90b311f8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_63b94c0da9c96304acf42d749bbae942bf1a7add132150832089797b45806d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b94c0da9c96304acf42d749bbae942bf1a7add132150832089797b45806d47->enter($__internal_63b94c0da9c96304acf42d749bbae942bf1a7add132150832089797b45806d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27f49f8003316110ded4402baff6a0109bcaa420bc7a7799d229a4a60c30cf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f49f8003316110ded4402baff6a0109bcaa420bc7a7799d229a4a60c30cf68->enter($__internal_27f49f8003316110ded4402baff6a0109bcaa420bc7a7799d229a4a60c30cf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_27f49f8003316110ded4402baff6a0109bcaa420bc7a7799d229a4a60c30cf68->leave($__internal_27f49f8003316110ded4402baff6a0109bcaa420bc7a7799d229a4a60c30cf68_prof);

        
        $__internal_63b94c0da9c96304acf42d749bbae942bf1a7add132150832089797b45806d47->leave($__internal_63b94c0da9c96304acf42d749bbae942bf1a7add132150832089797b45806d47_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
