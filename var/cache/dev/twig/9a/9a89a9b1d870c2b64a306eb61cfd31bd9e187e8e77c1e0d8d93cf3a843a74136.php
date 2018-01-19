<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bbc2269b62c4d5914b24c6452c7da5e970db8983f5c8141c24b8436de899b234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9d2d626613ae80862ca36b6f37405f5e15b46347d1bd7a5518be83183764d1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2d626613ae80862ca36b6f37405f5e15b46347d1bd7a5518be83183764d1de->enter($__internal_9d2d626613ae80862ca36b6f37405f5e15b46347d1bd7a5518be83183764d1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0a71212877b0d8aa8d73b76c06bc2eddafefbf505ece946f52acc973c45a11f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a71212877b0d8aa8d73b76c06bc2eddafefbf505ece946f52acc973c45a11f2->enter($__internal_0a71212877b0d8aa8d73b76c06bc2eddafefbf505ece946f52acc973c45a11f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2d626613ae80862ca36b6f37405f5e15b46347d1bd7a5518be83183764d1de->leave($__internal_9d2d626613ae80862ca36b6f37405f5e15b46347d1bd7a5518be83183764d1de_prof);

        
        $__internal_0a71212877b0d8aa8d73b76c06bc2eddafefbf505ece946f52acc973c45a11f2->leave($__internal_0a71212877b0d8aa8d73b76c06bc2eddafefbf505ece946f52acc973c45a11f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6571be8166c8af7f338a4abc56bd38e726a15ae06c78372d0e9c92254b6d32c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6571be8166c8af7f338a4abc56bd38e726a15ae06c78372d0e9c92254b6d32c7->enter($__internal_6571be8166c8af7f338a4abc56bd38e726a15ae06c78372d0e9c92254b6d32c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d2fac68a649060f3cd222b86525260a3e3d47676a156da642ce8b442334cccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2fac68a649060f3cd222b86525260a3e3d47676a156da642ce8b442334cccd->enter($__internal_6d2fac68a649060f3cd222b86525260a3e3d47676a156da642ce8b442334cccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6d2fac68a649060f3cd222b86525260a3e3d47676a156da642ce8b442334cccd->leave($__internal_6d2fac68a649060f3cd222b86525260a3e3d47676a156da642ce8b442334cccd_prof);

        
        $__internal_6571be8166c8af7f338a4abc56bd38e726a15ae06c78372d0e9c92254b6d32c7->leave($__internal_6571be8166c8af7f338a4abc56bd38e726a15ae06c78372d0e9c92254b6d32c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
