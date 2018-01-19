<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_12043ec54efd099d92edf7c35c9ab953807504d41043d3084c657bd03ec565a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d6ab9a4ccb5438d75918f7b5d548807b6dac3e16d3eb4b481fe184fb15b95965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ab9a4ccb5438d75918f7b5d548807b6dac3e16d3eb4b481fe184fb15b95965->enter($__internal_d6ab9a4ccb5438d75918f7b5d548807b6dac3e16d3eb4b481fe184fb15b95965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7733ff8cba49966047e644eef4a33c4c58e3b0d6a82e906f0a0b265cddac897e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7733ff8cba49966047e644eef4a33c4c58e3b0d6a82e906f0a0b265cddac897e->enter($__internal_7733ff8cba49966047e644eef4a33c4c58e3b0d6a82e906f0a0b265cddac897e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ab9a4ccb5438d75918f7b5d548807b6dac3e16d3eb4b481fe184fb15b95965->leave($__internal_d6ab9a4ccb5438d75918f7b5d548807b6dac3e16d3eb4b481fe184fb15b95965_prof);

        
        $__internal_7733ff8cba49966047e644eef4a33c4c58e3b0d6a82e906f0a0b265cddac897e->leave($__internal_7733ff8cba49966047e644eef4a33c4c58e3b0d6a82e906f0a0b265cddac897e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0c8bf15f7d48e9bdbc2591d0365d5eabe147ce5c077753ea37440a98db03669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c8bf15f7d48e9bdbc2591d0365d5eabe147ce5c077753ea37440a98db03669->enter($__internal_d0c8bf15f7d48e9bdbc2591d0365d5eabe147ce5c077753ea37440a98db03669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb47d06052d1ecbad0d9ad6140bb9aacc1e29e74bd7ab727719fedd5ffa6fd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47d06052d1ecbad0d9ad6140bb9aacc1e29e74bd7ab727719fedd5ffa6fd34->enter($__internal_bb47d06052d1ecbad0d9ad6140bb9aacc1e29e74bd7ab727719fedd5ffa6fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bb47d06052d1ecbad0d9ad6140bb9aacc1e29e74bd7ab727719fedd5ffa6fd34->leave($__internal_bb47d06052d1ecbad0d9ad6140bb9aacc1e29e74bd7ab727719fedd5ffa6fd34_prof);

        
        $__internal_d0c8bf15f7d48e9bdbc2591d0365d5eabe147ce5c077753ea37440a98db03669->leave($__internal_d0c8bf15f7d48e9bdbc2591d0365d5eabe147ce5c077753ea37440a98db03669_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
