<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_376d51f341d7cd0021b270073405300c306146eb6cc88893cf5864ce62e65ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3359d323b76a674db89b6a7554835bad041da33b0a31b063b0497b43487208bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3359d323b76a674db89b6a7554835bad041da33b0a31b063b0497b43487208bc->enter($__internal_3359d323b76a674db89b6a7554835bad041da33b0a31b063b0497b43487208bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_bfd11b820bbef98766e9f75f34307b25180e94b474c858e583e37dcb85eebfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd11b820bbef98766e9f75f34307b25180e94b474c858e583e37dcb85eebfc5->enter($__internal_bfd11b820bbef98766e9f75f34307b25180e94b474c858e583e37dcb85eebfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3359d323b76a674db89b6a7554835bad041da33b0a31b063b0497b43487208bc->leave($__internal_3359d323b76a674db89b6a7554835bad041da33b0a31b063b0497b43487208bc_prof);

        
        $__internal_bfd11b820bbef98766e9f75f34307b25180e94b474c858e583e37dcb85eebfc5->leave($__internal_bfd11b820bbef98766e9f75f34307b25180e94b474c858e583e37dcb85eebfc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_978b1a8a54cf407f69a14f81333f6342e764aa7ed1c0b7072d5348e30567038c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978b1a8a54cf407f69a14f81333f6342e764aa7ed1c0b7072d5348e30567038c->enter($__internal_978b1a8a54cf407f69a14f81333f6342e764aa7ed1c0b7072d5348e30567038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2fc9e505e0923822a901dd1a03a30fbb2e52e030d18f0d88a4188f13f59ed62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fc9e505e0923822a901dd1a03a30fbb2e52e030d18f0d88a4188f13f59ed62->enter($__internal_c2fc9e505e0923822a901dd1a03a30fbb2e52e030d18f0d88a4188f13f59ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c2fc9e505e0923822a901dd1a03a30fbb2e52e030d18f0d88a4188f13f59ed62->leave($__internal_c2fc9e505e0923822a901dd1a03a30fbb2e52e030d18f0d88a4188f13f59ed62_prof);

        
        $__internal_978b1a8a54cf407f69a14f81333f6342e764aa7ed1c0b7072d5348e30567038c->leave($__internal_978b1a8a54cf407f69a14f81333f6342e764aa7ed1c0b7072d5348e30567038c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
