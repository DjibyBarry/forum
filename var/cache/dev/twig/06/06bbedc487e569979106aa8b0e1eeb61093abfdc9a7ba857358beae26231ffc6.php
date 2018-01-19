<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_d8723a716a746c6bd40af14de13afdbe473d51cac376b32f59d5eabaf46e9993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8723a716a746c6bd40af14de13afdbe473d51cac376b32f59d5eabaf46e9993->enter($__internal_d8723a716a746c6bd40af14de13afdbe473d51cac376b32f59d5eabaf46e9993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_83914bbaa326745f2d899259d3231848e52b6b50d1e4dabc4ea5e05101e0d2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83914bbaa326745f2d899259d3231848e52b6b50d1e4dabc4ea5e05101e0d2dd->enter($__internal_83914bbaa326745f2d899259d3231848e52b6b50d1e4dabc4ea5e05101e0d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d8723a716a746c6bd40af14de13afdbe473d51cac376b32f59d5eabaf46e9993->leave($__internal_d8723a716a746c6bd40af14de13afdbe473d51cac376b32f59d5eabaf46e9993_prof);

        
        $__internal_83914bbaa326745f2d899259d3231848e52b6b50d1e4dabc4ea5e05101e0d2dd->leave($__internal_83914bbaa326745f2d899259d3231848e52b6b50d1e4dabc4ea5e05101e0d2dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
