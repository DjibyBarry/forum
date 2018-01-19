<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_67eeb8ca49d1ee79eb68a5c517a519d2479ab9f2fe166196f4dfaf00c9b4327f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_dbeae861086d1f4eff725df3450dc90f3129cfc66828c32c4f648098d6e4f412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeae861086d1f4eff725df3450dc90f3129cfc66828c32c4f648098d6e4f412->enter($__internal_dbeae861086d1f4eff725df3450dc90f3129cfc66828c32c4f648098d6e4f412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d7c43949cb05a007ab465ed63c119d46ee94109185158f54ff7ab80607ebb408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c43949cb05a007ab465ed63c119d46ee94109185158f54ff7ab80607ebb408->enter($__internal_d7c43949cb05a007ab465ed63c119d46ee94109185158f54ff7ab80607ebb408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbeae861086d1f4eff725df3450dc90f3129cfc66828c32c4f648098d6e4f412->leave($__internal_dbeae861086d1f4eff725df3450dc90f3129cfc66828c32c4f648098d6e4f412_prof);

        
        $__internal_d7c43949cb05a007ab465ed63c119d46ee94109185158f54ff7ab80607ebb408->leave($__internal_d7c43949cb05a007ab465ed63c119d46ee94109185158f54ff7ab80607ebb408_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_807fca57ff00153cc996f09320db23089f5d399f873e996b425984ed82fa42e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807fca57ff00153cc996f09320db23089f5d399f873e996b425984ed82fa42e8->enter($__internal_807fca57ff00153cc996f09320db23089f5d399f873e996b425984ed82fa42e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ea705e44480326ff85f0940a589097b34afa3f58df1bf3c637e100a54c6208e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea705e44480326ff85f0940a589097b34afa3f58df1bf3c637e100a54c6208e->enter($__internal_3ea705e44480326ff85f0940a589097b34afa3f58df1bf3c637e100a54c6208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3ea705e44480326ff85f0940a589097b34afa3f58df1bf3c637e100a54c6208e->leave($__internal_3ea705e44480326ff85f0940a589097b34afa3f58df1bf3c637e100a54c6208e_prof);

        
        $__internal_807fca57ff00153cc996f09320db23089f5d399f873e996b425984ed82fa42e8->leave($__internal_807fca57ff00153cc996f09320db23089f5d399f873e996b425984ed82fa42e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
