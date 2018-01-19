<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab3509d84a76c90eadc8b484daa778bdf8e0f276954dab8bda9183ef9666e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0db6c2ab47d13d0f17e07ac3e252d1a845d100edbeb5a1cfd9559826c15d5860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db6c2ab47d13d0f17e07ac3e252d1a845d100edbeb5a1cfd9559826c15d5860->enter($__internal_0db6c2ab47d13d0f17e07ac3e252d1a845d100edbeb5a1cfd9559826c15d5860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9ec5608d2b1049214f7135f48ddd9c896f5c6423233120ca263ec155573d68c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec5608d2b1049214f7135f48ddd9c896f5c6423233120ca263ec155573d68c7->enter($__internal_9ec5608d2b1049214f7135f48ddd9c896f5c6423233120ca263ec155573d68c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db6c2ab47d13d0f17e07ac3e252d1a845d100edbeb5a1cfd9559826c15d5860->leave($__internal_0db6c2ab47d13d0f17e07ac3e252d1a845d100edbeb5a1cfd9559826c15d5860_prof);

        
        $__internal_9ec5608d2b1049214f7135f48ddd9c896f5c6423233120ca263ec155573d68c7->leave($__internal_9ec5608d2b1049214f7135f48ddd9c896f5c6423233120ca263ec155573d68c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbeaa8b91cec972bb1c4770e8e43030cf7bd72332c6ce4364f8825bca2564c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeaa8b91cec972bb1c4770e8e43030cf7bd72332c6ce4364f8825bca2564c70->enter($__internal_bbeaa8b91cec972bb1c4770e8e43030cf7bd72332c6ce4364f8825bca2564c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0bb5a8c89cf7056e6b568d2f10793585cbb13e508f38fcc16ef77a87a9cba2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bb5a8c89cf7056e6b568d2f10793585cbb13e508f38fcc16ef77a87a9cba2f->enter($__internal_c0bb5a8c89cf7056e6b568d2f10793585cbb13e508f38fcc16ef77a87a9cba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c0bb5a8c89cf7056e6b568d2f10793585cbb13e508f38fcc16ef77a87a9cba2f->leave($__internal_c0bb5a8c89cf7056e6b568d2f10793585cbb13e508f38fcc16ef77a87a9cba2f_prof);

        
        $__internal_bbeaa8b91cec972bb1c4770e8e43030cf7bd72332c6ce4364f8825bca2564c70->leave($__internal_bbeaa8b91cec972bb1c4770e8e43030cf7bd72332c6ce4364f8825bca2564c70_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bbf9fbb04561d6f7dda771934f96116ae3f7b01f15f13b1aa42f5be38066116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbf9fbb04561d6f7dda771934f96116ae3f7b01f15f13b1aa42f5be38066116->enter($__internal_4bbf9fbb04561d6f7dda771934f96116ae3f7b01f15f13b1aa42f5be38066116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef213e765caccb6698f4abc84fb810931bd9d2737008f8468bf6973ecd5523be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef213e765caccb6698f4abc84fb810931bd9d2737008f8468bf6973ecd5523be->enter($__internal_ef213e765caccb6698f4abc84fb810931bd9d2737008f8468bf6973ecd5523be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ef213e765caccb6698f4abc84fb810931bd9d2737008f8468bf6973ecd5523be->leave($__internal_ef213e765caccb6698f4abc84fb810931bd9d2737008f8468bf6973ecd5523be_prof);

        
        $__internal_4bbf9fbb04561d6f7dda771934f96116ae3f7b01f15f13b1aa42f5be38066116->leave($__internal_4bbf9fbb04561d6f7dda771934f96116ae3f7b01f15f13b1aa42f5be38066116_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9368b148c53c31ab027f92bed5ad5b51f1cdd5e75639b60442c602f7d41edd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9368b148c53c31ab027f92bed5ad5b51f1cdd5e75639b60442c602f7d41edd52->enter($__internal_9368b148c53c31ab027f92bed5ad5b51f1cdd5e75639b60442c602f7d41edd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5d3c3550b282afdddd6b591e1a2b5db381d9614a0b25758e6e17ba5744957ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d3c3550b282afdddd6b591e1a2b5db381d9614a0b25758e6e17ba5744957ba->enter($__internal_c5d3c3550b282afdddd6b591e1a2b5db381d9614a0b25758e6e17ba5744957ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c5d3c3550b282afdddd6b591e1a2b5db381d9614a0b25758e6e17ba5744957ba->leave($__internal_c5d3c3550b282afdddd6b591e1a2b5db381d9614a0b25758e6e17ba5744957ba_prof);

        
        $__internal_9368b148c53c31ab027f92bed5ad5b51f1cdd5e75639b60442c602f7d41edd52->leave($__internal_9368b148c53c31ab027f92bed5ad5b51f1cdd5e75639b60442c602f7d41edd52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
