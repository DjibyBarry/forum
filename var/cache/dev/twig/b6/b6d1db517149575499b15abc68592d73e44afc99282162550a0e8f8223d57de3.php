<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_3c55135647227f8619448d7a4fdad2fe12f7a5c69622dd0bc167af98fe55dd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c55135647227f8619448d7a4fdad2fe12f7a5c69622dd0bc167af98fe55dd34->enter($__internal_3c55135647227f8619448d7a4fdad2fe12f7a5c69622dd0bc167af98fe55dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b51556f6a36efa3876bbf665e6110be71674a59b9705aecc5b6c71c2a033bc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51556f6a36efa3876bbf665e6110be71674a59b9705aecc5b6c71c2a033bc84->enter($__internal_b51556f6a36efa3876bbf665e6110be71674a59b9705aecc5b6c71c2a033bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3c55135647227f8619448d7a4fdad2fe12f7a5c69622dd0bc167af98fe55dd34->leave($__internal_3c55135647227f8619448d7a4fdad2fe12f7a5c69622dd0bc167af98fe55dd34_prof);

        
        $__internal_b51556f6a36efa3876bbf665e6110be71674a59b9705aecc5b6c71c2a033bc84->leave($__internal_b51556f6a36efa3876bbf665e6110be71674a59b9705aecc5b6c71c2a033bc84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
