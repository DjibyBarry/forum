<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_3d3f6c1684dc3c25a7b58314b90c63424ec6aa124f3b48956ca45834374086fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3f6c1684dc3c25a7b58314b90c63424ec6aa124f3b48956ca45834374086fc->enter($__internal_3d3f6c1684dc3c25a7b58314b90c63424ec6aa124f3b48956ca45834374086fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b2edd956af7c80b51f06881dfff9a88d68ebf0e4bd47592b7979a827bf77fa38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2edd956af7c80b51f06881dfff9a88d68ebf0e4bd47592b7979a827bf77fa38->enter($__internal_b2edd956af7c80b51f06881dfff9a88d68ebf0e4bd47592b7979a827bf77fa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3d3f6c1684dc3c25a7b58314b90c63424ec6aa124f3b48956ca45834374086fc->leave($__internal_3d3f6c1684dc3c25a7b58314b90c63424ec6aa124f3b48956ca45834374086fc_prof);

        
        $__internal_b2edd956af7c80b51f06881dfff9a88d68ebf0e4bd47592b7979a827bf77fa38->leave($__internal_b2edd956af7c80b51f06881dfff9a88d68ebf0e4bd47592b7979a827bf77fa38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
