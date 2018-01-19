<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
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
        $__internal_b08810911ceecc4e8fe351d9450ac00a58fd33af270bc1dd7c26d4139f85cd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08810911ceecc4e8fe351d9450ac00a58fd33af270bc1dd7c26d4139f85cd35->enter($__internal_b08810911ceecc4e8fe351d9450ac00a58fd33af270bc1dd7c26d4139f85cd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b75021ed5095bfdcdeb4f978b0c8dd8eebd7575d4a718d6f14dcdb9c5ef022e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75021ed5095bfdcdeb4f978b0c8dd8eebd7575d4a718d6f14dcdb9c5ef022e8->enter($__internal_b75021ed5095bfdcdeb4f978b0c8dd8eebd7575d4a718d6f14dcdb9c5ef022e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b08810911ceecc4e8fe351d9450ac00a58fd33af270bc1dd7c26d4139f85cd35->leave($__internal_b08810911ceecc4e8fe351d9450ac00a58fd33af270bc1dd7c26d4139f85cd35_prof);

        
        $__internal_b75021ed5095bfdcdeb4f978b0c8dd8eebd7575d4a718d6f14dcdb9c5ef022e8->leave($__internal_b75021ed5095bfdcdeb4f978b0c8dd8eebd7575d4a718d6f14dcdb9c5ef022e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
