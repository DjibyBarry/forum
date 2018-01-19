<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9a00e552cbe82adc1b08bd62404d6445cf1b5052e58c6099061e72fead6c5a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015ffba1984864851d891621f6a1c0054e892d3ba776501d342599c81b00b626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015ffba1984864851d891621f6a1c0054e892d3ba776501d342599c81b00b626->enter($__internal_015ffba1984864851d891621f6a1c0054e892d3ba776501d342599c81b00b626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5f0e752e01e6bf78be01b069dfa3e0060f014198329b2962fee213536338b9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0e752e01e6bf78be01b069dfa3e0060f014198329b2962fee213536338b9f2->enter($__internal_5f0e752e01e6bf78be01b069dfa3e0060f014198329b2962fee213536338b9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015ffba1984864851d891621f6a1c0054e892d3ba776501d342599c81b00b626->leave($__internal_015ffba1984864851d891621f6a1c0054e892d3ba776501d342599c81b00b626_prof);

        
        $__internal_5f0e752e01e6bf78be01b069dfa3e0060f014198329b2962fee213536338b9f2->leave($__internal_5f0e752e01e6bf78be01b069dfa3e0060f014198329b2962fee213536338b9f2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0accc91740e2df670f4c044e50a639f823051aea0bbf7a0b53aefcb8543ca0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0accc91740e2df670f4c044e50a639f823051aea0bbf7a0b53aefcb8543ca0fb->enter($__internal_0accc91740e2df670f4c044e50a639f823051aea0bbf7a0b53aefcb8543ca0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0cbd8bb88f5182aad0662215eef4696621c71f4f5390e1d868322825a629c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cbd8bb88f5182aad0662215eef4696621c71f4f5390e1d868322825a629c61->enter($__internal_a0cbd8bb88f5182aad0662215eef4696621c71f4f5390e1d868322825a629c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        // line 13
        echo "
        <div>
            ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "        </div>
";
        
        $__internal_a0cbd8bb88f5182aad0662215eef4696621c71f4f5390e1d868322825a629c61->leave($__internal_a0cbd8bb88f5182aad0662215eef4696621c71f4f5390e1d868322825a629c61_prof);

        
        $__internal_0accc91740e2df670f4c044e50a639f823051aea0bbf7a0b53aefcb8543ca0fb->leave($__internal_0accc91740e2df670f4c044e50a639f823051aea0bbf7a0b53aefcb8543ca0fb_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e96ef2d4efaf173fd8bffb7015cf83c3e7fed2d249a7221177de2a05eebbd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e96ef2d4efaf173fd8bffb7015cf83c3e7fed2d249a7221177de2a05eebbd3b->enter($__internal_4e96ef2d4efaf173fd8bffb7015cf83c3e7fed2d249a7221177de2a05eebbd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a6384cef00303e4a7c0ae8a6dd80b9e9ee29363fa6fa95616b3db8cc08518bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6384cef00303e4a7c0ae8a6dd80b9e9ee29363fa6fa95616b3db8cc08518bd->enter($__internal_0a6384cef00303e4a7c0ae8a6dd80b9e9ee29363fa6fa95616b3db8cc08518bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_0a6384cef00303e4a7c0ae8a6dd80b9e9ee29363fa6fa95616b3db8cc08518bd->leave($__internal_0a6384cef00303e4a7c0ae8a6dd80b9e9ee29363fa6fa95616b3db8cc08518bd_prof);

        
        $__internal_4e96ef2d4efaf173fd8bffb7015cf83c3e7fed2d249a7221177de2a05eebbd3b->leave($__internal_4e96ef2d4efaf173fd8bffb7015cf83c3e7fed2d249a7221177de2a05eebbd3b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  105 => 15,  94 => 17,  92 => 15,  88 => 13,  85 => 12,  79 => 11,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}
  {% block body%}

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{%endblock%}
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
