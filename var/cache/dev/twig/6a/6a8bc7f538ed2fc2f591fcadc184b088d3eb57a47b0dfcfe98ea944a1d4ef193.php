<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_49b33517a6d56ae2eba8a629dacf1d6134400ed2158de32c8ead6b469e51f416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_9fd4347814daea3b61ffd60b147d8c2aeec40d78b2c858e6d50d66835f33e08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd4347814daea3b61ffd60b147d8c2aeec40d78b2c858e6d50d66835f33e08d->enter($__internal_9fd4347814daea3b61ffd60b147d8c2aeec40d78b2c858e6d50d66835f33e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_c4b0a2b56124511db48ba07aa7539d28672cabe7b0974294c51fccf1e1a89e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b0a2b56124511db48ba07aa7539d28672cabe7b0974294c51fccf1e1a89e87->enter($__internal_c4b0a2b56124511db48ba07aa7539d28672cabe7b0974294c51fccf1e1a89e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd4347814daea3b61ffd60b147d8c2aeec40d78b2c858e6d50d66835f33e08d->leave($__internal_9fd4347814daea3b61ffd60b147d8c2aeec40d78b2c858e6d50d66835f33e08d_prof);

        
        $__internal_c4b0a2b56124511db48ba07aa7539d28672cabe7b0974294c51fccf1e1a89e87->leave($__internal_c4b0a2b56124511db48ba07aa7539d28672cabe7b0974294c51fccf1e1a89e87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4a2335cdc4701f078f7e89620a0fa3aa907b27989fb6c3185bf3ca0e1dd0d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a2335cdc4701f078f7e89620a0fa3aa907b27989fb6c3185bf3ca0e1dd0d14->enter($__internal_e4a2335cdc4701f078f7e89620a0fa3aa907b27989fb6c3185bf3ca0e1dd0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9cc16672fd0e0da05f3cc0ee7a9769e18876dc83831f3617ff0705ba8046525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc16672fd0e0da05f3cc0ee7a9769e18876dc83831f3617ff0705ba8046525->enter($__internal_e9cc16672fd0e0da05f3cc0ee7a9769e18876dc83831f3617ff0705ba8046525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e9cc16672fd0e0da05f3cc0ee7a9769e18876dc83831f3617ff0705ba8046525->leave($__internal_e9cc16672fd0e0da05f3cc0ee7a9769e18876dc83831f3617ff0705ba8046525_prof);

        
        $__internal_e4a2335cdc4701f078f7e89620a0fa3aa907b27989fb6c3185bf3ca0e1dd0d14->leave($__internal_e4a2335cdc4701f078f7e89620a0fa3aa907b27989fb6c3185bf3ca0e1dd0d14_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
