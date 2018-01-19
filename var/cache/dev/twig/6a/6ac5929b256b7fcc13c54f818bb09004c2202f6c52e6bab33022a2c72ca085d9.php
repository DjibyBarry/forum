<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_d6d8bf321a7b87591a33bc98efee3737c3f1a5dbb11b9a4d4bb9c894567d6ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53821e56e8197844115abfa92c6624ee050b9613c2c4f0c058e3b059c5496a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53821e56e8197844115abfa92c6624ee050b9613c2c4f0c058e3b059c5496a88->enter($__internal_53821e56e8197844115abfa92c6624ee050b9613c2c4f0c058e3b059c5496a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_27151c5889d1fdf84a67c5d9ca4cc6a44b41980ffb6f347f31fb11a9bc39e130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27151c5889d1fdf84a67c5d9ca4cc6a44b41980ffb6f347f31fb11a9bc39e130->enter($__internal_27151c5889d1fdf84a67c5d9ca4cc6a44b41980ffb6f347f31fb11a9bc39e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_53821e56e8197844115abfa92c6624ee050b9613c2c4f0c058e3b059c5496a88->leave($__internal_53821e56e8197844115abfa92c6624ee050b9613c2c4f0c058e3b059c5496a88_prof);

        
        $__internal_27151c5889d1fdf84a67c5d9ca4cc6a44b41980ffb6f347f31fb11a9bc39e130->leave($__internal_27151c5889d1fdf84a67c5d9ca4cc6a44b41980ffb6f347f31fb11a9bc39e130_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb07d1514ecfdb20724eca0308de325815d904f50f90af051235143fc523b7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb07d1514ecfdb20724eca0308de325815d904f50f90af051235143fc523b7bc->enter($__internal_fb07d1514ecfdb20724eca0308de325815d904f50f90af051235143fc523b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bfadbd3e95c8b29ba2bfe609fe1c6ea1492e95c57d1c28c1303ee1955886d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfadbd3e95c8b29ba2bfe609fe1c6ea1492e95c57d1c28c1303ee1955886d27->enter($__internal_6bfadbd3e95c8b29ba2bfe609fe1c6ea1492e95c57d1c28c1303ee1955886d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6bfadbd3e95c8b29ba2bfe609fe1c6ea1492e95c57d1c28c1303ee1955886d27->leave($__internal_6bfadbd3e95c8b29ba2bfe609fe1c6ea1492e95c57d1c28c1303ee1955886d27_prof);

        
        $__internal_fb07d1514ecfdb20724eca0308de325815d904f50f90af051235143fc523b7bc->leave($__internal_fb07d1514ecfdb20724eca0308de325815d904f50f90af051235143fc523b7bc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7af6b84b340799dfb9ea2fdc868c8350160c5764784b9a34f0379289bd0fb3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af6b84b340799dfb9ea2fdc868c8350160c5764784b9a34f0379289bd0fb3d2->enter($__internal_7af6b84b340799dfb9ea2fdc868c8350160c5764784b9a34f0379289bd0fb3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd24a750688899f8a2a03eb85fa581fdb2bfdfc68314b1b2c21185fb6fd1438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd24a750688899f8a2a03eb85fa581fdb2bfdfc68314b1b2c21185fb6fd1438e->enter($__internal_dd24a750688899f8a2a03eb85fa581fdb2bfdfc68314b1b2c21185fb6fd1438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dd24a750688899f8a2a03eb85fa581fdb2bfdfc68314b1b2c21185fb6fd1438e->leave($__internal_dd24a750688899f8a2a03eb85fa581fdb2bfdfc68314b1b2c21185fb6fd1438e_prof);

        
        $__internal_7af6b84b340799dfb9ea2fdc868c8350160c5764784b9a34f0379289bd0fb3d2->leave($__internal_7af6b84b340799dfb9ea2fdc868c8350160c5764784b9a34f0379289bd0fb3d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_924daaaed6824c3a20fe3718c16163b6bba1985b8c408ed8f36fca6581ad5413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924daaaed6824c3a20fe3718c16163b6bba1985b8c408ed8f36fca6581ad5413->enter($__internal_924daaaed6824c3a20fe3718c16163b6bba1985b8c408ed8f36fca6581ad5413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cf254c71008478543d9e61d5a91c703dc06884994af49d867784e1c216bdc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf254c71008478543d9e61d5a91c703dc06884994af49d867784e1c216bdc3f->enter($__internal_5cf254c71008478543d9e61d5a91c703dc06884994af49d867784e1c216bdc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5cf254c71008478543d9e61d5a91c703dc06884994af49d867784e1c216bdc3f->leave($__internal_5cf254c71008478543d9e61d5a91c703dc06884994af49d867784e1c216bdc3f_prof);

        
        $__internal_924daaaed6824c3a20fe3718c16163b6bba1985b8c408ed8f36fca6581ad5413->leave($__internal_924daaaed6824c3a20fe3718c16163b6bba1985b8c408ed8f36fca6581ad5413_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
