<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a733472a389ab5c29149c33f1b1e4d6877afcb7afc78d2e752747ca3b8534726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6acc983497e7565e7120ad91c58eecc55e52d143ff4d3249c78e583aaecb7cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acc983497e7565e7120ad91c58eecc55e52d143ff4d3249c78e583aaecb7cf2->enter($__internal_6acc983497e7565e7120ad91c58eecc55e52d143ff4d3249c78e583aaecb7cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_0d15179c54ff8088a82b97dd6595fcfaddc55eab7b045f7edf5aaf8ec75c1ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d15179c54ff8088a82b97dd6595fcfaddc55eab7b045f7edf5aaf8ec75c1ca6->enter($__internal_0d15179c54ff8088a82b97dd6595fcfaddc55eab7b045f7edf5aaf8ec75c1ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acc983497e7565e7120ad91c58eecc55e52d143ff4d3249c78e583aaecb7cf2->leave($__internal_6acc983497e7565e7120ad91c58eecc55e52d143ff4d3249c78e583aaecb7cf2_prof);

        
        $__internal_0d15179c54ff8088a82b97dd6595fcfaddc55eab7b045f7edf5aaf8ec75c1ca6->leave($__internal_0d15179c54ff8088a82b97dd6595fcfaddc55eab7b045f7edf5aaf8ec75c1ca6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c89e040708d3ba5dea34c2abb2fd9ad0f8cb1e6de13f43529a0bcad50233382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c89e040708d3ba5dea34c2abb2fd9ad0f8cb1e6de13f43529a0bcad50233382->enter($__internal_0c89e040708d3ba5dea34c2abb2fd9ad0f8cb1e6de13f43529a0bcad50233382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27d2b299b9e7bf0b50cc5f224ef27b37fc45dfc49eb1e01e40d7a56cda70d394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d2b299b9e7bf0b50cc5f224ef27b37fc45dfc49eb1e01e40d7a56cda70d394->enter($__internal_27d2b299b9e7bf0b50cc5f224ef27b37fc45dfc49eb1e01e40d7a56cda70d394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_27d2b299b9e7bf0b50cc5f224ef27b37fc45dfc49eb1e01e40d7a56cda70d394->leave($__internal_27d2b299b9e7bf0b50cc5f224ef27b37fc45dfc49eb1e01e40d7a56cda70d394_prof);

        
        $__internal_0c89e040708d3ba5dea34c2abb2fd9ad0f8cb1e6de13f43529a0bcad50233382->leave($__internal_0c89e040708d3ba5dea34c2abb2fd9ad0f8cb1e6de13f43529a0bcad50233382_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
