<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8d8f854469161a5b24e7e7f196f055f28ca81e9f5237ddf91453879fef3e06a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7e6eb840089b7e09b6137996db3629a425bc2aaefcdc17de028358450e7d0ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6eb840089b7e09b6137996db3629a425bc2aaefcdc17de028358450e7d0ead->enter($__internal_7e6eb840089b7e09b6137996db3629a425bc2aaefcdc17de028358450e7d0ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f1041d27dc47bea938c1ee76d70d19fdd43007fe0c24fc098707a5c88fb17d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1041d27dc47bea938c1ee76d70d19fdd43007fe0c24fc098707a5c88fb17d05->enter($__internal_f1041d27dc47bea938c1ee76d70d19fdd43007fe0c24fc098707a5c88fb17d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e6eb840089b7e09b6137996db3629a425bc2aaefcdc17de028358450e7d0ead->leave($__internal_7e6eb840089b7e09b6137996db3629a425bc2aaefcdc17de028358450e7d0ead_prof);

        
        $__internal_f1041d27dc47bea938c1ee76d70d19fdd43007fe0c24fc098707a5c88fb17d05->leave($__internal_f1041d27dc47bea938c1ee76d70d19fdd43007fe0c24fc098707a5c88fb17d05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46f667f400efaaf7df0d949a46b2e55721b27b6d48344cb6b033ba1cfa52eb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f667f400efaaf7df0d949a46b2e55721b27b6d48344cb6b033ba1cfa52eb1b->enter($__internal_46f667f400efaaf7df0d949a46b2e55721b27b6d48344cb6b033ba1cfa52eb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_489054744ddd5ea642a8758c43b8a8868d1036aa4ab845afbb115f01bb1a430d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489054744ddd5ea642a8758c43b8a8868d1036aa4ab845afbb115f01bb1a430d->enter($__internal_489054744ddd5ea642a8758c43b8a8868d1036aa4ab845afbb115f01bb1a430d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_489054744ddd5ea642a8758c43b8a8868d1036aa4ab845afbb115f01bb1a430d->leave($__internal_489054744ddd5ea642a8758c43b8a8868d1036aa4ab845afbb115f01bb1a430d_prof);

        
        $__internal_46f667f400efaaf7df0d949a46b2e55721b27b6d48344cb6b033ba1cfa52eb1b->leave($__internal_46f667f400efaaf7df0d949a46b2e55721b27b6d48344cb6b033ba1cfa52eb1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
