<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_45df2c359a0d53f63e0151ddc4db7d3036a5606da70cc1be47e8b9a55c079d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_de931ef04ccebaffe6b915dc676f750c76d35fce52b60f5de4e086f395dbf5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de931ef04ccebaffe6b915dc676f750c76d35fce52b60f5de4e086f395dbf5ff->enter($__internal_de931ef04ccebaffe6b915dc676f750c76d35fce52b60f5de4e086f395dbf5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_eaaa1e0aee6e76c1defe1a1ebda98057d5fdd14946b621a187f194d273f4d12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaa1e0aee6e76c1defe1a1ebda98057d5fdd14946b621a187f194d273f4d12b->enter($__internal_eaaa1e0aee6e76c1defe1a1ebda98057d5fdd14946b621a187f194d273f4d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de931ef04ccebaffe6b915dc676f750c76d35fce52b60f5de4e086f395dbf5ff->leave($__internal_de931ef04ccebaffe6b915dc676f750c76d35fce52b60f5de4e086f395dbf5ff_prof);

        
        $__internal_eaaa1e0aee6e76c1defe1a1ebda98057d5fdd14946b621a187f194d273f4d12b->leave($__internal_eaaa1e0aee6e76c1defe1a1ebda98057d5fdd14946b621a187f194d273f4d12b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_216d3a35cfc282dd473436afb9bfcf038ec921763a5446a4cc93b0da64f0344e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216d3a35cfc282dd473436afb9bfcf038ec921763a5446a4cc93b0da64f0344e->enter($__internal_216d3a35cfc282dd473436afb9bfcf038ec921763a5446a4cc93b0da64f0344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a3cff6e6e020ca422ae0a17a5b04d11b1210e9ea37603eed6856864d6849aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3cff6e6e020ca422ae0a17a5b04d11b1210e9ea37603eed6856864d6849aaf->enter($__internal_8a3cff6e6e020ca422ae0a17a5b04d11b1210e9ea37603eed6856864d6849aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8a3cff6e6e020ca422ae0a17a5b04d11b1210e9ea37603eed6856864d6849aaf->leave($__internal_8a3cff6e6e020ca422ae0a17a5b04d11b1210e9ea37603eed6856864d6849aaf_prof);

        
        $__internal_216d3a35cfc282dd473436afb9bfcf038ec921763a5446a4cc93b0da64f0344e->leave($__internal_216d3a35cfc282dd473436afb9bfcf038ec921763a5446a4cc93b0da64f0344e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
