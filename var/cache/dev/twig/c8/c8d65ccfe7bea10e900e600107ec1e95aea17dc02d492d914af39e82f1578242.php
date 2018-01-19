<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_7cb7a7e83555ba5485478bbde2beca95e7c4d1978d12143e78d2649194c01244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb7a7e83555ba5485478bbde2beca95e7c4d1978d12143e78d2649194c01244->enter($__internal_7cb7a7e83555ba5485478bbde2beca95e7c4d1978d12143e78d2649194c01244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8930b2a213c466c4323a3d54b244689f49632b3643131a0392d0fe712eae223b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8930b2a213c466c4323a3d54b244689f49632b3643131a0392d0fe712eae223b->enter($__internal_8930b2a213c466c4323a3d54b244689f49632b3643131a0392d0fe712eae223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7cb7a7e83555ba5485478bbde2beca95e7c4d1978d12143e78d2649194c01244->leave($__internal_7cb7a7e83555ba5485478bbde2beca95e7c4d1978d12143e78d2649194c01244_prof);

        
        $__internal_8930b2a213c466c4323a3d54b244689f49632b3643131a0392d0fe712eae223b->leave($__internal_8930b2a213c466c4323a3d54b244689f49632b3643131a0392d0fe712eae223b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
