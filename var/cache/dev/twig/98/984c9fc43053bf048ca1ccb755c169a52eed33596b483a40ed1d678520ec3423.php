<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_d4cc2bacf705273703dd14f7d0fe5f039e322772954aa202bd1ca3a5804fa70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cc2bacf705273703dd14f7d0fe5f039e322772954aa202bd1ca3a5804fa70c->enter($__internal_d4cc2bacf705273703dd14f7d0fe5f039e322772954aa202bd1ca3a5804fa70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8981bf753582a3608cf43759611620629fcaacb48a390eb693e8c0b48f42a246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8981bf753582a3608cf43759611620629fcaacb48a390eb693e8c0b48f42a246->enter($__internal_8981bf753582a3608cf43759611620629fcaacb48a390eb693e8c0b48f42a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d4cc2bacf705273703dd14f7d0fe5f039e322772954aa202bd1ca3a5804fa70c->leave($__internal_d4cc2bacf705273703dd14f7d0fe5f039e322772954aa202bd1ca3a5804fa70c_prof);

        
        $__internal_8981bf753582a3608cf43759611620629fcaacb48a390eb693e8c0b48f42a246->leave($__internal_8981bf753582a3608cf43759611620629fcaacb48a390eb693e8c0b48f42a246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
