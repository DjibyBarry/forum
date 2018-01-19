<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cfdd71e94444c899edef362485c9beedc392f4f3ee66b627195df79810d6cfc extends Twig_Template
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
        $__internal_3cfe24b8de8c78e00673eb6c216a57e1d366b6a3576d2c66226bcdfaf335c550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfe24b8de8c78e00673eb6c216a57e1d366b6a3576d2c66226bcdfaf335c550->enter($__internal_3cfe24b8de8c78e00673eb6c216a57e1d366b6a3576d2c66226bcdfaf335c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e015551363d1a955276315113f18c3182e1ec6d8b4aaf388d14cb2f379f964ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e015551363d1a955276315113f18c3182e1ec6d8b4aaf388d14cb2f379f964ca->enter($__internal_e015551363d1a955276315113f18c3182e1ec6d8b4aaf388d14cb2f379f964ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3cfe24b8de8c78e00673eb6c216a57e1d366b6a3576d2c66226bcdfaf335c550->leave($__internal_3cfe24b8de8c78e00673eb6c216a57e1d366b6a3576d2c66226bcdfaf335c550_prof);

        
        $__internal_e015551363d1a955276315113f18c3182e1ec6d8b4aaf388d14cb2f379f964ca->leave($__internal_e015551363d1a955276315113f18c3182e1ec6d8b4aaf388d14cb2f379f964ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
