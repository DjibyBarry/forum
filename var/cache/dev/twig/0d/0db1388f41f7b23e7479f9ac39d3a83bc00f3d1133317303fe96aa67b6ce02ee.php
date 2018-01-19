<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d30d6cfdeb9426039466a33c6a4d8fa265ee5379aac5dd08ce26690038b3d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af22e470ffb07c8ad45da0d11c4fbd48bfd2fac8dab6aee503169e7cf18769aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af22e470ffb07c8ad45da0d11c4fbd48bfd2fac8dab6aee503169e7cf18769aa->enter($__internal_af22e470ffb07c8ad45da0d11c4fbd48bfd2fac8dab6aee503169e7cf18769aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bcb5a43b8b05c4b482fae4919a11f1ed973f0b6bcbe95a4f69cbea2f9ec19e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb5a43b8b05c4b482fae4919a11f1ed973f0b6bcbe95a4f69cbea2f9ec19e4e->enter($__internal_bcb5a43b8b05c4b482fae4919a11f1ed973f0b6bcbe95a4f69cbea2f9ec19e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af22e470ffb07c8ad45da0d11c4fbd48bfd2fac8dab6aee503169e7cf18769aa->leave($__internal_af22e470ffb07c8ad45da0d11c4fbd48bfd2fac8dab6aee503169e7cf18769aa_prof);

        
        $__internal_bcb5a43b8b05c4b482fae4919a11f1ed973f0b6bcbe95a4f69cbea2f9ec19e4e->leave($__internal_bcb5a43b8b05c4b482fae4919a11f1ed973f0b6bcbe95a4f69cbea2f9ec19e4e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c288de11bb83cb135d3524cbd1f938d1005f567e96623c41299a04a75e5317f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c288de11bb83cb135d3524cbd1f938d1005f567e96623c41299a04a75e5317f->enter($__internal_5c288de11bb83cb135d3524cbd1f938d1005f567e96623c41299a04a75e5317f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90bbf146cdfa05267a4e706602775cdb7d71c535a12ccf2642a107ea5f8abdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bbf146cdfa05267a4e706602775cdb7d71c535a12ccf2642a107ea5f8abdc2->enter($__internal_90bbf146cdfa05267a4e706602775cdb7d71c535a12ccf2642a107ea5f8abdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90bbf146cdfa05267a4e706602775cdb7d71c535a12ccf2642a107ea5f8abdc2->leave($__internal_90bbf146cdfa05267a4e706602775cdb7d71c535a12ccf2642a107ea5f8abdc2_prof);

        
        $__internal_5c288de11bb83cb135d3524cbd1f938d1005f567e96623c41299a04a75e5317f->leave($__internal_5c288de11bb83cb135d3524cbd1f938d1005f567e96623c41299a04a75e5317f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
