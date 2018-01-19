<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1ca95745e06deb981a4559269947b95545b6dbbbd8235e962a3c353f16851ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_bd1ca5e7221ee2ce402535d4b8442bffec65e6240f3faf2694721a8a34a87e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1ca5e7221ee2ce402535d4b8442bffec65e6240f3faf2694721a8a34a87e74->enter($__internal_bd1ca5e7221ee2ce402535d4b8442bffec65e6240f3faf2694721a8a34a87e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e831139f3b98e5ff4c1aa47a21f2b8486f890fbbc646453641c4cdf1518ca38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e831139f3b98e5ff4c1aa47a21f2b8486f890fbbc646453641c4cdf1518ca38e->enter($__internal_e831139f3b98e5ff4c1aa47a21f2b8486f890fbbc646453641c4cdf1518ca38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1ca5e7221ee2ce402535d4b8442bffec65e6240f3faf2694721a8a34a87e74->leave($__internal_bd1ca5e7221ee2ce402535d4b8442bffec65e6240f3faf2694721a8a34a87e74_prof);

        
        $__internal_e831139f3b98e5ff4c1aa47a21f2b8486f890fbbc646453641c4cdf1518ca38e->leave($__internal_e831139f3b98e5ff4c1aa47a21f2b8486f890fbbc646453641c4cdf1518ca38e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f79d6c79df705925eb1dd5b3b83b8790a2136e53d59aaaedaba5891b2ff05e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79d6c79df705925eb1dd5b3b83b8790a2136e53d59aaaedaba5891b2ff05e05->enter($__internal_f79d6c79df705925eb1dd5b3b83b8790a2136e53d59aaaedaba5891b2ff05e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d48b13973c380c5d703655b088eecb6ce82b9c2aec6180bc6f3ae9488319685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d48b13973c380c5d703655b088eecb6ce82b9c2aec6180bc6f3ae9488319685->enter($__internal_4d48b13973c380c5d703655b088eecb6ce82b9c2aec6180bc6f3ae9488319685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4d48b13973c380c5d703655b088eecb6ce82b9c2aec6180bc6f3ae9488319685->leave($__internal_4d48b13973c380c5d703655b088eecb6ce82b9c2aec6180bc6f3ae9488319685_prof);

        
        $__internal_f79d6c79df705925eb1dd5b3b83b8790a2136e53d59aaaedaba5891b2ff05e05->leave($__internal_f79d6c79df705925eb1dd5b3b83b8790a2136e53d59aaaedaba5891b2ff05e05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
