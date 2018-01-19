<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
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
        $__internal_153200e7322ceb68f269ec5f18d9cc8b314b21b194d0f40c6ad397ab359b9fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153200e7322ceb68f269ec5f18d9cc8b314b21b194d0f40c6ad397ab359b9fb3->enter($__internal_153200e7322ceb68f269ec5f18d9cc8b314b21b194d0f40c6ad397ab359b9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1a48c7992b11ca0129d0fa03f8aa116bcfeff3eb73f0451225a9e9f7ce29a282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a48c7992b11ca0129d0fa03f8aa116bcfeff3eb73f0451225a9e9f7ce29a282->enter($__internal_1a48c7992b11ca0129d0fa03f8aa116bcfeff3eb73f0451225a9e9f7ce29a282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_153200e7322ceb68f269ec5f18d9cc8b314b21b194d0f40c6ad397ab359b9fb3->leave($__internal_153200e7322ceb68f269ec5f18d9cc8b314b21b194d0f40c6ad397ab359b9fb3_prof);

        
        $__internal_1a48c7992b11ca0129d0fa03f8aa116bcfeff3eb73f0451225a9e9f7ce29a282->leave($__internal_1a48c7992b11ca0129d0fa03f8aa116bcfeff3eb73f0451225a9e9f7ce29a282_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
