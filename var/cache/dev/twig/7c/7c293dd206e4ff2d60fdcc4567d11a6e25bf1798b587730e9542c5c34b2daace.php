<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_470c80ead6e850c7423cea9f7deb079feca303988a77197e6db68c230f12672d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3fa70ac2630d75276f46780c2dbeb21d2956f6707560a64cbb2bb6b5dd04bb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa70ac2630d75276f46780c2dbeb21d2956f6707560a64cbb2bb6b5dd04bb68->enter($__internal_3fa70ac2630d75276f46780c2dbeb21d2956f6707560a64cbb2bb6b5dd04bb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_3558ef6d3f4d10251ff0aff1b365443b186299f56d9827b999319f18675c9c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3558ef6d3f4d10251ff0aff1b365443b186299f56d9827b999319f18675c9c62->enter($__internal_3558ef6d3f4d10251ff0aff1b365443b186299f56d9827b999319f18675c9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa70ac2630d75276f46780c2dbeb21d2956f6707560a64cbb2bb6b5dd04bb68->leave($__internal_3fa70ac2630d75276f46780c2dbeb21d2956f6707560a64cbb2bb6b5dd04bb68_prof);

        
        $__internal_3558ef6d3f4d10251ff0aff1b365443b186299f56d9827b999319f18675c9c62->leave($__internal_3558ef6d3f4d10251ff0aff1b365443b186299f56d9827b999319f18675c9c62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b827d5c57c332c6ec2bbbcaa7b2ad5a05c275d3f6e74bd94c592e966b15bb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b827d5c57c332c6ec2bbbcaa7b2ad5a05c275d3f6e74bd94c592e966b15bb61->enter($__internal_6b827d5c57c332c6ec2bbbcaa7b2ad5a05c275d3f6e74bd94c592e966b15bb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2be08827e5defd77ddd0c5c521b961e019bf39745c505071ad47e19c24715cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be08827e5defd77ddd0c5c521b961e019bf39745c505071ad47e19c24715cb9->enter($__internal_2be08827e5defd77ddd0c5c521b961e019bf39745c505071ad47e19c24715cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2be08827e5defd77ddd0c5c521b961e019bf39745c505071ad47e19c24715cb9->leave($__internal_2be08827e5defd77ddd0c5c521b961e019bf39745c505071ad47e19c24715cb9_prof);

        
        $__internal_6b827d5c57c332c6ec2bbbcaa7b2ad5a05c275d3f6e74bd94c592e966b15bb61->leave($__internal_6b827d5c57c332c6ec2bbbcaa7b2ad5a05c275d3f6e74bd94c592e966b15bb61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
