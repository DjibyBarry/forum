<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_30b6a3426c26b6524ac2b6c7279d62ea10b8a968c8e04dd7849dea81b7a71252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f7f78965f9198aa1c92e0b6c3e4b740f6d22cf7660c677926108f715261a83c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f78965f9198aa1c92e0b6c3e4b740f6d22cf7660c677926108f715261a83c0->enter($__internal_f7f78965f9198aa1c92e0b6c3e4b740f6d22cf7660c677926108f715261a83c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_35290b4433a70aba109e4f94fc47729183f058b762baf4c9c15059e8c39a3403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35290b4433a70aba109e4f94fc47729183f058b762baf4c9c15059e8c39a3403->enter($__internal_35290b4433a70aba109e4f94fc47729183f058b762baf4c9c15059e8c39a3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f78965f9198aa1c92e0b6c3e4b740f6d22cf7660c677926108f715261a83c0->leave($__internal_f7f78965f9198aa1c92e0b6c3e4b740f6d22cf7660c677926108f715261a83c0_prof);

        
        $__internal_35290b4433a70aba109e4f94fc47729183f058b762baf4c9c15059e8c39a3403->leave($__internal_35290b4433a70aba109e4f94fc47729183f058b762baf4c9c15059e8c39a3403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fadd7a4913cf3d9aa031f28a200122d4b1b1a1bb312754670e5969125666ee64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadd7a4913cf3d9aa031f28a200122d4b1b1a1bb312754670e5969125666ee64->enter($__internal_fadd7a4913cf3d9aa031f28a200122d4b1b1a1bb312754670e5969125666ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4132aadab2defc78be707f78f80ffdb9be8c67de560808cefba500efc8128ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4132aadab2defc78be707f78f80ffdb9be8c67de560808cefba500efc8128ac3->enter($__internal_4132aadab2defc78be707f78f80ffdb9be8c67de560808cefba500efc8128ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4132aadab2defc78be707f78f80ffdb9be8c67de560808cefba500efc8128ac3->leave($__internal_4132aadab2defc78be707f78f80ffdb9be8c67de560808cefba500efc8128ac3_prof);

        
        $__internal_fadd7a4913cf3d9aa031f28a200122d4b1b1a1bb312754670e5969125666ee64->leave($__internal_fadd7a4913cf3d9aa031f28a200122d4b1b1a1bb312754670e5969125666ee64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
