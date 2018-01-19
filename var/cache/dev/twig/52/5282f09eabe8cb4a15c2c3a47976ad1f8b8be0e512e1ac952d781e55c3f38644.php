<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a4fae4aef90fdd2708ae59143dd820e276cba814802c95d802ffafd794e62530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d59c1ee8a52ef06b119887ef8f30ad8be189c69ec9596b2d2bd6cf111b311a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d59c1ee8a52ef06b119887ef8f30ad8be189c69ec9596b2d2bd6cf111b311a->enter($__internal_09d59c1ee8a52ef06b119887ef8f30ad8be189c69ec9596b2d2bd6cf111b311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ac5f8d5b56c852b8b2b25d83ee43f76acda96f21cfd0e024657afffe320b5246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5f8d5b56c852b8b2b25d83ee43f76acda96f21cfd0e024657afffe320b5246->enter($__internal_ac5f8d5b56c852b8b2b25d83ee43f76acda96f21cfd0e024657afffe320b5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d59c1ee8a52ef06b119887ef8f30ad8be189c69ec9596b2d2bd6cf111b311a->leave($__internal_09d59c1ee8a52ef06b119887ef8f30ad8be189c69ec9596b2d2bd6cf111b311a_prof);

        
        $__internal_ac5f8d5b56c852b8b2b25d83ee43f76acda96f21cfd0e024657afffe320b5246->leave($__internal_ac5f8d5b56c852b8b2b25d83ee43f76acda96f21cfd0e024657afffe320b5246_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9b05e4c2d29e9170e353018b2ff6f749456aa3f1a2a1e8d5de6a304c68e14b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b05e4c2d29e9170e353018b2ff6f749456aa3f1a2a1e8d5de6a304c68e14b1b->enter($__internal_9b05e4c2d29e9170e353018b2ff6f749456aa3f1a2a1e8d5de6a304c68e14b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_da2389a7584115cc0185b2bb782b11c4a16b562bf6c83c1ff4c0cf479fd032e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2389a7584115cc0185b2bb782b11c4a16b562bf6c83c1ff4c0cf479fd032e7->enter($__internal_da2389a7584115cc0185b2bb782b11c4a16b562bf6c83c1ff4c0cf479fd032e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_da2389a7584115cc0185b2bb782b11c4a16b562bf6c83c1ff4c0cf479fd032e7->leave($__internal_da2389a7584115cc0185b2bb782b11c4a16b562bf6c83c1ff4c0cf479fd032e7_prof);

        
        $__internal_9b05e4c2d29e9170e353018b2ff6f749456aa3f1a2a1e8d5de6a304c68e14b1b->leave($__internal_9b05e4c2d29e9170e353018b2ff6f749456aa3f1a2a1e8d5de6a304c68e14b1b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_131fd7d00290b5f04cb3a3815542e430052cb3ac46ef93022da8513ae8621b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131fd7d00290b5f04cb3a3815542e430052cb3ac46ef93022da8513ae8621b3c->enter($__internal_131fd7d00290b5f04cb3a3815542e430052cb3ac46ef93022da8513ae8621b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_991b9cb7d7b99d50c47fbc11e038c11d82d7834a2003569bb26508310938512d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991b9cb7d7b99d50c47fbc11e038c11d82d7834a2003569bb26508310938512d->enter($__internal_991b9cb7d7b99d50c47fbc11e038c11d82d7834a2003569bb26508310938512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_991b9cb7d7b99d50c47fbc11e038c11d82d7834a2003569bb26508310938512d->leave($__internal_991b9cb7d7b99d50c47fbc11e038c11d82d7834a2003569bb26508310938512d_prof);

        
        $__internal_131fd7d00290b5f04cb3a3815542e430052cb3ac46ef93022da8513ae8621b3c->leave($__internal_131fd7d00290b5f04cb3a3815542e430052cb3ac46ef93022da8513ae8621b3c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
