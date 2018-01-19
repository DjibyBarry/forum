<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_316d22b0e3178201a79bf30df7f164418cb94ee3324c1ed9bf8e64b8c125b6dc extends Twig_Template
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
        $__internal_229b4f3d595be424313740db52d17681747f7d35551d20d5539d1fbc173a394b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229b4f3d595be424313740db52d17681747f7d35551d20d5539d1fbc173a394b->enter($__internal_229b4f3d595be424313740db52d17681747f7d35551d20d5539d1fbc173a394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4167b5e211f91653143122343513a62967d42dba1f289eb7589b9c6549c470b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4167b5e211f91653143122343513a62967d42dba1f289eb7589b9c6549c470b6->enter($__internal_4167b5e211f91653143122343513a62967d42dba1f289eb7589b9c6549c470b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_229b4f3d595be424313740db52d17681747f7d35551d20d5539d1fbc173a394b->leave($__internal_229b4f3d595be424313740db52d17681747f7d35551d20d5539d1fbc173a394b_prof);

        
        $__internal_4167b5e211f91653143122343513a62967d42dba1f289eb7589b9c6549c470b6->leave($__internal_4167b5e211f91653143122343513a62967d42dba1f289eb7589b9c6549c470b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
