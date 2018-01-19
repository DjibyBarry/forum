<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_1b48066ccdfb79319ac052662d92295c536bbf7b05a9f3b6d8265cf0b1dcda18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b48066ccdfb79319ac052662d92295c536bbf7b05a9f3b6d8265cf0b1dcda18->enter($__internal_1b48066ccdfb79319ac052662d92295c536bbf7b05a9f3b6d8265cf0b1dcda18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9ebfe0bc38a1dbdeae9ad7394b2cabdb9f9561304a2a9921de8bd88fdefa6174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebfe0bc38a1dbdeae9ad7394b2cabdb9f9561304a2a9921de8bd88fdefa6174->enter($__internal_9ebfe0bc38a1dbdeae9ad7394b2cabdb9f9561304a2a9921de8bd88fdefa6174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1b48066ccdfb79319ac052662d92295c536bbf7b05a9f3b6d8265cf0b1dcda18->leave($__internal_1b48066ccdfb79319ac052662d92295c536bbf7b05a9f3b6d8265cf0b1dcda18_prof);

        
        $__internal_9ebfe0bc38a1dbdeae9ad7394b2cabdb9f9561304a2a9921de8bd88fdefa6174->leave($__internal_9ebfe0bc38a1dbdeae9ad7394b2cabdb9f9561304a2a9921de8bd88fdefa6174_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
