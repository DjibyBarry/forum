<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_1b4e33bb1ced59959245bde7aee94d7a303056c76337ecfaa171fe9ab728d50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4e33bb1ced59959245bde7aee94d7a303056c76337ecfaa171fe9ab728d50a->enter($__internal_1b4e33bb1ced59959245bde7aee94d7a303056c76337ecfaa171fe9ab728d50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5c7f0e48830dbd4ea34f161fcbbce699620a5172d790484026510805a1005ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7f0e48830dbd4ea34f161fcbbce699620a5172d790484026510805a1005ccb->enter($__internal_5c7f0e48830dbd4ea34f161fcbbce699620a5172d790484026510805a1005ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1b4e33bb1ced59959245bde7aee94d7a303056c76337ecfaa171fe9ab728d50a->leave($__internal_1b4e33bb1ced59959245bde7aee94d7a303056c76337ecfaa171fe9ab728d50a_prof);

        
        $__internal_5c7f0e48830dbd4ea34f161fcbbce699620a5172d790484026510805a1005ccb->leave($__internal_5c7f0e48830dbd4ea34f161fcbbce699620a5172d790484026510805a1005ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
