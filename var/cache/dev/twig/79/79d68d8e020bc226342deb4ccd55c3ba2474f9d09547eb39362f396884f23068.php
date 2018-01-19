<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_387e645a970594736521306ef8f0eefc2007d5bbdeeeeec72a9ad869aef29477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4dca1dfd0470ebf6dc9a1c93d7002d6f9c953ccc80af3bca728e9768243e272d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dca1dfd0470ebf6dc9a1c93d7002d6f9c953ccc80af3bca728e9768243e272d->enter($__internal_4dca1dfd0470ebf6dc9a1c93d7002d6f9c953ccc80af3bca728e9768243e272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8abb84343a148b93855cd4d75448a464dc6c502024a977c4b3c53815e3ce36dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abb84343a148b93855cd4d75448a464dc6c502024a977c4b3c53815e3ce36dc->enter($__internal_8abb84343a148b93855cd4d75448a464dc6c502024a977c4b3c53815e3ce36dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dca1dfd0470ebf6dc9a1c93d7002d6f9c953ccc80af3bca728e9768243e272d->leave($__internal_4dca1dfd0470ebf6dc9a1c93d7002d6f9c953ccc80af3bca728e9768243e272d_prof);

        
        $__internal_8abb84343a148b93855cd4d75448a464dc6c502024a977c4b3c53815e3ce36dc->leave($__internal_8abb84343a148b93855cd4d75448a464dc6c502024a977c4b3c53815e3ce36dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e9f137da4e46e522c628734cb540164267c770cd364fc786ffdaecad9f56048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9f137da4e46e522c628734cb540164267c770cd364fc786ffdaecad9f56048->enter($__internal_1e9f137da4e46e522c628734cb540164267c770cd364fc786ffdaecad9f56048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b7004f8f1b4c2e82ff1d809f1bc7de7b585ebc0b96be839051c380dd524283a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7004f8f1b4c2e82ff1d809f1bc7de7b585ebc0b96be839051c380dd524283a->enter($__internal_8b7004f8f1b4c2e82ff1d809f1bc7de7b585ebc0b96be839051c380dd524283a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8b7004f8f1b4c2e82ff1d809f1bc7de7b585ebc0b96be839051c380dd524283a->leave($__internal_8b7004f8f1b4c2e82ff1d809f1bc7de7b585ebc0b96be839051c380dd524283a_prof);

        
        $__internal_1e9f137da4e46e522c628734cb540164267c770cd364fc786ffdaecad9f56048->leave($__internal_1e9f137da4e46e522c628734cb540164267c770cd364fc786ffdaecad9f56048_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
