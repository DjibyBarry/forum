<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_35fc0dd38b010e63b076fec237fec93f81996d5a0155025091a5fb11c719ab54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_fdda2910eb2512d3c7a1a03b837eedd28e064510bfe071961cdc3d58ac81de5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdda2910eb2512d3c7a1a03b837eedd28e064510bfe071961cdc3d58ac81de5c->enter($__internal_fdda2910eb2512d3c7a1a03b837eedd28e064510bfe071961cdc3d58ac81de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_36db7362ac1f7e00b20703aa28bee2dd2f1f5283cfedd04a7e70e711ad0c0603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36db7362ac1f7e00b20703aa28bee2dd2f1f5283cfedd04a7e70e711ad0c0603->enter($__internal_36db7362ac1f7e00b20703aa28bee2dd2f1f5283cfedd04a7e70e711ad0c0603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdda2910eb2512d3c7a1a03b837eedd28e064510bfe071961cdc3d58ac81de5c->leave($__internal_fdda2910eb2512d3c7a1a03b837eedd28e064510bfe071961cdc3d58ac81de5c_prof);

        
        $__internal_36db7362ac1f7e00b20703aa28bee2dd2f1f5283cfedd04a7e70e711ad0c0603->leave($__internal_36db7362ac1f7e00b20703aa28bee2dd2f1f5283cfedd04a7e70e711ad0c0603_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ed6f36c784c194409750557ab925cceb33dcacde514cb857f09321c8b139dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed6f36c784c194409750557ab925cceb33dcacde514cb857f09321c8b139dc3->enter($__internal_1ed6f36c784c194409750557ab925cceb33dcacde514cb857f09321c8b139dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7490c502244061ec7e4c791458341ee8b27385a0cedc0364d755c6a8aa979b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7490c502244061ec7e4c791458341ee8b27385a0cedc0364d755c6a8aa979b2->enter($__internal_b7490c502244061ec7e4c791458341ee8b27385a0cedc0364d755c6a8aa979b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b7490c502244061ec7e4c791458341ee8b27385a0cedc0364d755c6a8aa979b2->leave($__internal_b7490c502244061ec7e4c791458341ee8b27385a0cedc0364d755c6a8aa979b2_prof);

        
        $__internal_1ed6f36c784c194409750557ab925cceb33dcacde514cb857f09321c8b139dc3->leave($__internal_1ed6f36c784c194409750557ab925cceb33dcacde514cb857f09321c8b139dc3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
