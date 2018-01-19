<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a931d656b4bd09b170a9e84b587ed964ed84eca50ca63f6de90325b26425152d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5b19e73401bc188ebf9aa00966e5e9a61f4a17b59e66d58fec09546ffd1e0fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b19e73401bc188ebf9aa00966e5e9a61f4a17b59e66d58fec09546ffd1e0fb2->enter($__internal_5b19e73401bc188ebf9aa00966e5e9a61f4a17b59e66d58fec09546ffd1e0fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4cd0021c3767eab0fe386223120737457ecd515828e11778068d9558488751ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd0021c3767eab0fe386223120737457ecd515828e11778068d9558488751ab->enter($__internal_4cd0021c3767eab0fe386223120737457ecd515828e11778068d9558488751ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b19e73401bc188ebf9aa00966e5e9a61f4a17b59e66d58fec09546ffd1e0fb2->leave($__internal_5b19e73401bc188ebf9aa00966e5e9a61f4a17b59e66d58fec09546ffd1e0fb2_prof);

        
        $__internal_4cd0021c3767eab0fe386223120737457ecd515828e11778068d9558488751ab->leave($__internal_4cd0021c3767eab0fe386223120737457ecd515828e11778068d9558488751ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b5380da5e32706f6c0f8d8117e7576c2d0f653d524c4707a71ce48a916aed4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5380da5e32706f6c0f8d8117e7576c2d0f653d524c4707a71ce48a916aed4b->enter($__internal_6b5380da5e32706f6c0f8d8117e7576c2d0f653d524c4707a71ce48a916aed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e14f588e89f27d79b837670a3a0ad4e801ae1e5ae1eeadddcbfcb23c2bdf1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e14f588e89f27d79b837670a3a0ad4e801ae1e5ae1eeadddcbfcb23c2bdf1db->enter($__internal_2e14f588e89f27d79b837670a3a0ad4e801ae1e5ae1eeadddcbfcb23c2bdf1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2e14f588e89f27d79b837670a3a0ad4e801ae1e5ae1eeadddcbfcb23c2bdf1db->leave($__internal_2e14f588e89f27d79b837670a3a0ad4e801ae1e5ae1eeadddcbfcb23c2bdf1db_prof);

        
        $__internal_6b5380da5e32706f6c0f8d8117e7576c2d0f653d524c4707a71ce48a916aed4b->leave($__internal_6b5380da5e32706f6c0f8d8117e7576c2d0f653d524c4707a71ce48a916aed4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
