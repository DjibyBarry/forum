<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3c3f980554672e11da03518cfae9330598f803683e603d27fe2c5f5c021b6463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_0ea3843e58c3a3f2c68e2b2382c835a198123b1ef1cf5b8f3682472afaa3337b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea3843e58c3a3f2c68e2b2382c835a198123b1ef1cf5b8f3682472afaa3337b->enter($__internal_0ea3843e58c3a3f2c68e2b2382c835a198123b1ef1cf5b8f3682472afaa3337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_30b2d7af6f8289a027560f1ee24de598b8c8e0536a17dff94652040896c55bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b2d7af6f8289a027560f1ee24de598b8c8e0536a17dff94652040896c55bd3->enter($__internal_30b2d7af6f8289a027560f1ee24de598b8c8e0536a17dff94652040896c55bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea3843e58c3a3f2c68e2b2382c835a198123b1ef1cf5b8f3682472afaa3337b->leave($__internal_0ea3843e58c3a3f2c68e2b2382c835a198123b1ef1cf5b8f3682472afaa3337b_prof);

        
        $__internal_30b2d7af6f8289a027560f1ee24de598b8c8e0536a17dff94652040896c55bd3->leave($__internal_30b2d7af6f8289a027560f1ee24de598b8c8e0536a17dff94652040896c55bd3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5d15c50699fc8e17da1dcbe5792b3831a39746674b259a7645d55559144ddf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d15c50699fc8e17da1dcbe5792b3831a39746674b259a7645d55559144ddf37->enter($__internal_5d15c50699fc8e17da1dcbe5792b3831a39746674b259a7645d55559144ddf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b04c51b1f8cef8eaae7d9943bfdbb43e67d0cb5d972f906418a9c8d61cc3895b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04c51b1f8cef8eaae7d9943bfdbb43e67d0cb5d972f906418a9c8d61cc3895b->enter($__internal_b04c51b1f8cef8eaae7d9943bfdbb43e67d0cb5d972f906418a9c8d61cc3895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b04c51b1f8cef8eaae7d9943bfdbb43e67d0cb5d972f906418a9c8d61cc3895b->leave($__internal_b04c51b1f8cef8eaae7d9943bfdbb43e67d0cb5d972f906418a9c8d61cc3895b_prof);

        
        $__internal_5d15c50699fc8e17da1dcbe5792b3831a39746674b259a7645d55559144ddf37->leave($__internal_5d15c50699fc8e17da1dcbe5792b3831a39746674b259a7645d55559144ddf37_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_802754a14d4ad3f2434d980acfb83d01e4411ea850bb64f89dd4780fe449aaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802754a14d4ad3f2434d980acfb83d01e4411ea850bb64f89dd4780fe449aaa6->enter($__internal_802754a14d4ad3f2434d980acfb83d01e4411ea850bb64f89dd4780fe449aaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ece8aed0dad775e10376b0ec2d6d790ce463c1328158cd537b60a4985318e760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece8aed0dad775e10376b0ec2d6d790ce463c1328158cd537b60a4985318e760->enter($__internal_ece8aed0dad775e10376b0ec2d6d790ce463c1328158cd537b60a4985318e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ece8aed0dad775e10376b0ec2d6d790ce463c1328158cd537b60a4985318e760->leave($__internal_ece8aed0dad775e10376b0ec2d6d790ce463c1328158cd537b60a4985318e760_prof);

        
        $__internal_802754a14d4ad3f2434d980acfb83d01e4411ea850bb64f89dd4780fe449aaa6->leave($__internal_802754a14d4ad3f2434d980acfb83d01e4411ea850bb64f89dd4780fe449aaa6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
