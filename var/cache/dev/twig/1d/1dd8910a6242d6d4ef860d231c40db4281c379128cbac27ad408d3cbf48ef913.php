<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_4188363fd2c29476d6d94ccf7753d217d531514f510fc384dccbffd05c6d8ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_87cd8e9503111d0956065d1cbb96aff03fcc2336772243dc078cb2d0b81baedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cd8e9503111d0956065d1cbb96aff03fcc2336772243dc078cb2d0b81baedf->enter($__internal_87cd8e9503111d0956065d1cbb96aff03fcc2336772243dc078cb2d0b81baedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_8c5ad8909299746a9144a03cfcdec8340c879f26d3c8d59bc23b69442b8c486a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5ad8909299746a9144a03cfcdec8340c879f26d3c8d59bc23b69442b8c486a->enter($__internal_8c5ad8909299746a9144a03cfcdec8340c879f26d3c8d59bc23b69442b8c486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87cd8e9503111d0956065d1cbb96aff03fcc2336772243dc078cb2d0b81baedf->leave($__internal_87cd8e9503111d0956065d1cbb96aff03fcc2336772243dc078cb2d0b81baedf_prof);

        
        $__internal_8c5ad8909299746a9144a03cfcdec8340c879f26d3c8d59bc23b69442b8c486a->leave($__internal_8c5ad8909299746a9144a03cfcdec8340c879f26d3c8d59bc23b69442b8c486a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eee43e8daa9b6b6e465a3743c03fbb292550a8f08edbe84c4987a9557ddab2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee43e8daa9b6b6e465a3743c03fbb292550a8f08edbe84c4987a9557ddab2e0->enter($__internal_eee43e8daa9b6b6e465a3743c03fbb292550a8f08edbe84c4987a9557ddab2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59ed626b35aeece767809d9169b44206cabcf5bfcc6c8b96206e503e2e8a2941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ed626b35aeece767809d9169b44206cabcf5bfcc6c8b96206e503e2e8a2941->enter($__internal_59ed626b35aeece767809d9169b44206cabcf5bfcc6c8b96206e503e2e8a2941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_59ed626b35aeece767809d9169b44206cabcf5bfcc6c8b96206e503e2e8a2941->leave($__internal_59ed626b35aeece767809d9169b44206cabcf5bfcc6c8b96206e503e2e8a2941_prof);

        
        $__internal_eee43e8daa9b6b6e465a3743c03fbb292550a8f08edbe84c4987a9557ddab2e0->leave($__internal_eee43e8daa9b6b6e465a3743c03fbb292550a8f08edbe84c4987a9557ddab2e0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
