<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0d76113f15b8033c60734e18cd14fb2140f39b49b849fdcf27843165b54b909a extends Twig_Template
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
        $__internal_3cafdbc7998aee17f3b0e24141130b7753b3e19b2e8d0dd12bf7b7821975c5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cafdbc7998aee17f3b0e24141130b7753b3e19b2e8d0dd12bf7b7821975c5dc->enter($__internal_3cafdbc7998aee17f3b0e24141130b7753b3e19b2e8d0dd12bf7b7821975c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8635e39b748f8cf73c42d40708b265c58551bdad4478d42072cf9e52da4fc1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8635e39b748f8cf73c42d40708b265c58551bdad4478d42072cf9e52da4fc1d2->enter($__internal_8635e39b748f8cf73c42d40708b265c58551bdad4478d42072cf9e52da4fc1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3cafdbc7998aee17f3b0e24141130b7753b3e19b2e8d0dd12bf7b7821975c5dc->leave($__internal_3cafdbc7998aee17f3b0e24141130b7753b3e19b2e8d0dd12bf7b7821975c5dc_prof);

        
        $__internal_8635e39b748f8cf73c42d40708b265c58551bdad4478d42072cf9e52da4fc1d2->leave($__internal_8635e39b748f8cf73c42d40708b265c58551bdad4478d42072cf9e52da4fc1d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
