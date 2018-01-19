<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_73e63b9267a385b723ce06ba75a68ccba6e68238e6a2c7fef16911bf0fc8d2d0 extends Twig_Template
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
        $__internal_0bc3fb1499f5988ad42ab5e9d48cc2634726bbbf0907f364cf98793189e5fb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc3fb1499f5988ad42ab5e9d48cc2634726bbbf0907f364cf98793189e5fb39->enter($__internal_0bc3fb1499f5988ad42ab5e9d48cc2634726bbbf0907f364cf98793189e5fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7ae311a6bb4de777477a4849dff48206085ff26d3a6f263d59b99459fee53993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae311a6bb4de777477a4849dff48206085ff26d3a6f263d59b99459fee53993->enter($__internal_7ae311a6bb4de777477a4849dff48206085ff26d3a6f263d59b99459fee53993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0bc3fb1499f5988ad42ab5e9d48cc2634726bbbf0907f364cf98793189e5fb39->leave($__internal_0bc3fb1499f5988ad42ab5e9d48cc2634726bbbf0907f364cf98793189e5fb39_prof);

        
        $__internal_7ae311a6bb4de777477a4849dff48206085ff26d3a6f263d59b99459fee53993->leave($__internal_7ae311a6bb4de777477a4849dff48206085ff26d3a6f263d59b99459fee53993_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
