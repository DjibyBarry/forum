<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_03d7bf07736b5d8297918feef103bf7c2660b6c270fb731561b53f48873ef394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_cfc6ceff5ada81929f33eb915277835c87937ae3c27e604115c94db9e44014cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc6ceff5ada81929f33eb915277835c87937ae3c27e604115c94db9e44014cc->enter($__internal_cfc6ceff5ada81929f33eb915277835c87937ae3c27e604115c94db9e44014cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_be4ba0f9667aa51e95500f12ed18c3f4f08265bd20e9be687b16e804a836df8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4ba0f9667aa51e95500f12ed18c3f4f08265bd20e9be687b16e804a836df8e->enter($__internal_be4ba0f9667aa51e95500f12ed18c3f4f08265bd20e9be687b16e804a836df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc6ceff5ada81929f33eb915277835c87937ae3c27e604115c94db9e44014cc->leave($__internal_cfc6ceff5ada81929f33eb915277835c87937ae3c27e604115c94db9e44014cc_prof);

        
        $__internal_be4ba0f9667aa51e95500f12ed18c3f4f08265bd20e9be687b16e804a836df8e->leave($__internal_be4ba0f9667aa51e95500f12ed18c3f4f08265bd20e9be687b16e804a836df8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2a6172949157fd559f2aa443b2f31ddd4811f6ebf320a768356c5e5433d3f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a6172949157fd559f2aa443b2f31ddd4811f6ebf320a768356c5e5433d3f2d->enter($__internal_b2a6172949157fd559f2aa443b2f31ddd4811f6ebf320a768356c5e5433d3f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_063fcda7efb29ef3ebc7d9db88c52d54ad44da7f5b3e37f405cdc88c2e837d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063fcda7efb29ef3ebc7d9db88c52d54ad44da7f5b3e37f405cdc88c2e837d23->enter($__internal_063fcda7efb29ef3ebc7d9db88c52d54ad44da7f5b3e37f405cdc88c2e837d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_063fcda7efb29ef3ebc7d9db88c52d54ad44da7f5b3e37f405cdc88c2e837d23->leave($__internal_063fcda7efb29ef3ebc7d9db88c52d54ad44da7f5b3e37f405cdc88c2e837d23_prof);

        
        $__internal_b2a6172949157fd559f2aa443b2f31ddd4811f6ebf320a768356c5e5433d3f2d->leave($__internal_b2a6172949157fd559f2aa443b2f31ddd4811f6ebf320a768356c5e5433d3f2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
