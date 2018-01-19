<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_d22741aec2c445e1bf6434e5b46e910cf898b0d24383dcc32f30b779884cf044 extends Twig_Template
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
        $__internal_5d7695263cf9935c2f669b04b644b30fac64f2dc9df34037ea8f681ec8b6b7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7695263cf9935c2f669b04b644b30fac64f2dc9df34037ea8f681ec8b6b7a5->enter($__internal_5d7695263cf9935c2f669b04b644b30fac64f2dc9df34037ea8f681ec8b6b7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_97c1b9407a9871afa6951c143c5cabbe2a4e2767b9d494c0c4b6cdcd3c345bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c1b9407a9871afa6951c143c5cabbe2a4e2767b9d494c0c4b6cdcd3c345bb2->enter($__internal_97c1b9407a9871afa6951c143c5cabbe2a4e2767b9d494c0c4b6cdcd3c345bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_5d7695263cf9935c2f669b04b644b30fac64f2dc9df34037ea8f681ec8b6b7a5->leave($__internal_5d7695263cf9935c2f669b04b644b30fac64f2dc9df34037ea8f681ec8b6b7a5_prof);

        
        $__internal_97c1b9407a9871afa6951c143c5cabbe2a4e2767b9d494c0c4b6cdcd3c345bb2->leave($__internal_97c1b9407a9871afa6951c143c5cabbe2a4e2767b9d494c0c4b6cdcd3c345bb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
