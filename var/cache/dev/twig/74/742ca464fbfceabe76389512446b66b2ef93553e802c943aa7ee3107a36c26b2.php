<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cff1d78ce7fd6925c697c441a039e4eea0dfcc8ffafcf2fdda6c96770ff40d64 extends Twig_Template
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
        $__internal_8564d5dec9b7662c7a08fc3a9c60599a587fa036112e07ca784204c41d11c315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8564d5dec9b7662c7a08fc3a9c60599a587fa036112e07ca784204c41d11c315->enter($__internal_8564d5dec9b7662c7a08fc3a9c60599a587fa036112e07ca784204c41d11c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a65cd32369fe84442a6529286772ab86e43d262992f05e2b5d1285f41b115a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65cd32369fe84442a6529286772ab86e43d262992f05e2b5d1285f41b115a97->enter($__internal_a65cd32369fe84442a6529286772ab86e43d262992f05e2b5d1285f41b115a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8564d5dec9b7662c7a08fc3a9c60599a587fa036112e07ca784204c41d11c315->leave($__internal_8564d5dec9b7662c7a08fc3a9c60599a587fa036112e07ca784204c41d11c315_prof);

        
        $__internal_a65cd32369fe84442a6529286772ab86e43d262992f05e2b5d1285f41b115a97->leave($__internal_a65cd32369fe84442a6529286772ab86e43d262992f05e2b5d1285f41b115a97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
