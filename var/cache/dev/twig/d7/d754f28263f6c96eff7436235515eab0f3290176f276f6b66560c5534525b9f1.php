<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_7e95618b093d0190958125b137325d6f8c99a374dd1d218587ba4835c9830432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e95618b093d0190958125b137325d6f8c99a374dd1d218587ba4835c9830432->enter($__internal_7e95618b093d0190958125b137325d6f8c99a374dd1d218587ba4835c9830432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_68b3e6aa29d16b6ff190ce699947beeac5a79a563e9bfbb684b9de30a7dc7921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b3e6aa29d16b6ff190ce699947beeac5a79a563e9bfbb684b9de30a7dc7921->enter($__internal_68b3e6aa29d16b6ff190ce699947beeac5a79a563e9bfbb684b9de30a7dc7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e95618b093d0190958125b137325d6f8c99a374dd1d218587ba4835c9830432->leave($__internal_7e95618b093d0190958125b137325d6f8c99a374dd1d218587ba4835c9830432_prof);

        
        $__internal_68b3e6aa29d16b6ff190ce699947beeac5a79a563e9bfbb684b9de30a7dc7921->leave($__internal_68b3e6aa29d16b6ff190ce699947beeac5a79a563e9bfbb684b9de30a7dc7921_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a81e78778d2642c5cfab84daffda8d7392d8307feccb83b63664a0a3fee71f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81e78778d2642c5cfab84daffda8d7392d8307feccb83b63664a0a3fee71f34->enter($__internal_a81e78778d2642c5cfab84daffda8d7392d8307feccb83b63664a0a3fee71f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdd427ddde1f6c944da4b8141daa4abbe2de69c477062a5555d845b47c4a3987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd427ddde1f6c944da4b8141daa4abbe2de69c477062a5555d845b47c4a3987->enter($__internal_cdd427ddde1f6c944da4b8141daa4abbe2de69c477062a5555d845b47c4a3987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cdd427ddde1f6c944da4b8141daa4abbe2de69c477062a5555d845b47c4a3987->leave($__internal_cdd427ddde1f6c944da4b8141daa4abbe2de69c477062a5555d845b47c4a3987_prof);

        
        $__internal_a81e78778d2642c5cfab84daffda8d7392d8307feccb83b63664a0a3fee71f34->leave($__internal_a81e78778d2642c5cfab84daffda8d7392d8307feccb83b63664a0a3fee71f34_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72ea69b54aaecb1424b4a8503ee1099d49163b2b4af2f5b4c62f5a1fd1884574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ea69b54aaecb1424b4a8503ee1099d49163b2b4af2f5b4c62f5a1fd1884574->enter($__internal_72ea69b54aaecb1424b4a8503ee1099d49163b2b4af2f5b4c62f5a1fd1884574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d12852de94316cd05dc951c3c94bf387c9414fda32dba93d41a6aa49fac0de5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12852de94316cd05dc951c3c94bf387c9414fda32dba93d41a6aa49fac0de5c->enter($__internal_d12852de94316cd05dc951c3c94bf387c9414fda32dba93d41a6aa49fac0de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            ";
        
        $__internal_d12852de94316cd05dc951c3c94bf387c9414fda32dba93d41a6aa49fac0de5c->leave($__internal_d12852de94316cd05dc951c3c94bf387c9414fda32dba93d41a6aa49fac0de5c_prof);

        
        $__internal_72ea69b54aaecb1424b4a8503ee1099d49163b2b4af2f5b4c62f5a1fd1884574->leave($__internal_72ea69b54aaecb1424b4a8503ee1099d49163b2b4af2f5b4c62f5a1fd1884574_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
