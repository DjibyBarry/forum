<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_469d5132eed9d8a52881c0bfd7e315fc6942caa85e6c1bcee73353d600ffbf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6d0794dd6c63633ced80e2870cb091ef2e22233b6fc310fff1226ee119a271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6d0794dd6c63633ced80e2870cb091ef2e22233b6fc310fff1226ee119a271->enter($__internal_2c6d0794dd6c63633ced80e2870cb091ef2e22233b6fc310fff1226ee119a271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_fb8341588dd68cbc5355e3f6c29a593cf0db2932a0a7f541c9c7b7607f1e9364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8341588dd68cbc5355e3f6c29a593cf0db2932a0a7f541c9c7b7607f1e9364->enter($__internal_fb8341588dd68cbc5355e3f6c29a593cf0db2932a0a7f541c9c7b7607f1e9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2c6d0794dd6c63633ced80e2870cb091ef2e22233b6fc310fff1226ee119a271->leave($__internal_2c6d0794dd6c63633ced80e2870cb091ef2e22233b6fc310fff1226ee119a271_prof);

        
        $__internal_fb8341588dd68cbc5355e3f6c29a593cf0db2932a0a7f541c9c7b7607f1e9364->leave($__internal_fb8341588dd68cbc5355e3f6c29a593cf0db2932a0a7f541c9c7b7607f1e9364_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
