<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_dc40d1d1ef84f5be507ebd16c2d8bcc210e0c49a1ce73da0369a01b9e427c2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc40d1d1ef84f5be507ebd16c2d8bcc210e0c49a1ce73da0369a01b9e427c2d7->enter($__internal_dc40d1d1ef84f5be507ebd16c2d8bcc210e0c49a1ce73da0369a01b9e427c2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9db6f0ac82cddb550e6f93a364f511c7aca4ba2e44bb718923471619d0fad5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db6f0ac82cddb550e6f93a364f511c7aca4ba2e44bb718923471619d0fad5ad->enter($__internal_9db6f0ac82cddb550e6f93a364f511c7aca4ba2e44bb718923471619d0fad5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc40d1d1ef84f5be507ebd16c2d8bcc210e0c49a1ce73da0369a01b9e427c2d7->leave($__internal_dc40d1d1ef84f5be507ebd16c2d8bcc210e0c49a1ce73da0369a01b9e427c2d7_prof);

        
        $__internal_9db6f0ac82cddb550e6f93a364f511c7aca4ba2e44bb718923471619d0fad5ad->leave($__internal_9db6f0ac82cddb550e6f93a364f511c7aca4ba2e44bb718923471619d0fad5ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68fa5298ae866080771af8f89515c68a0de40612a7e5b6c81a763a68efaaee9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fa5298ae866080771af8f89515c68a0de40612a7e5b6c81a763a68efaaee9a->enter($__internal_68fa5298ae866080771af8f89515c68a0de40612a7e5b6c81a763a68efaaee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d67d8e55e3c283fbbc6a0713e38937b7343e2e9c463c46498f7213035f6f1dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67d8e55e3c283fbbc6a0713e38937b7343e2e9c463c46498f7213035f6f1dcf->enter($__internal_d67d8e55e3c283fbbc6a0713e38937b7343e2e9c463c46498f7213035f6f1dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d67d8e55e3c283fbbc6a0713e38937b7343e2e9c463c46498f7213035f6f1dcf->leave($__internal_d67d8e55e3c283fbbc6a0713e38937b7343e2e9c463c46498f7213035f6f1dcf_prof);

        
        $__internal_68fa5298ae866080771af8f89515c68a0de40612a7e5b6c81a763a68efaaee9a->leave($__internal_68fa5298ae866080771af8f89515c68a0de40612a7e5b6c81a763a68efaaee9a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f2aca3ae6931274aa42726916801507b1737f4d928e2a73e4058576f3221fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f2aca3ae6931274aa42726916801507b1737f4d928e2a73e4058576f3221fc->enter($__internal_38f2aca3ae6931274aa42726916801507b1737f4d928e2a73e4058576f3221fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63928735b6f9c7223986467df1e014c772fb458931719f4bdda85c9ec27ad5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63928735b6f9c7223986467df1e014c772fb458931719f4bdda85c9ec27ad5c6->enter($__internal_63928735b6f9c7223986467df1e014c772fb458931719f4bdda85c9ec27ad5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63928735b6f9c7223986467df1e014c772fb458931719f4bdda85c9ec27ad5c6->leave($__internal_63928735b6f9c7223986467df1e014c772fb458931719f4bdda85c9ec27ad5c6_prof);

        
        $__internal_38f2aca3ae6931274aa42726916801507b1737f4d928e2a73e4058576f3221fc->leave($__internal_38f2aca3ae6931274aa42726916801507b1737f4d928e2a73e4058576f3221fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
