<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_c6722c325ba34f14169b0380795117b4d43aed47fbdaf5fcb88f9eab23569219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6722c325ba34f14169b0380795117b4d43aed47fbdaf5fcb88f9eab23569219->enter($__internal_c6722c325ba34f14169b0380795117b4d43aed47fbdaf5fcb88f9eab23569219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f51930f5a3d4be0795e2e60a490e3085c3fc3714943f4dd3799fc4e1224904e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51930f5a3d4be0795e2e60a490e3085c3fc3714943f4dd3799fc4e1224904e2->enter($__internal_f51930f5a3d4be0795e2e60a490e3085c3fc3714943f4dd3799fc4e1224904e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c6722c325ba34f14169b0380795117b4d43aed47fbdaf5fcb88f9eab23569219->leave($__internal_c6722c325ba34f14169b0380795117b4d43aed47fbdaf5fcb88f9eab23569219_prof);

        
        $__internal_f51930f5a3d4be0795e2e60a490e3085c3fc3714943f4dd3799fc4e1224904e2->leave($__internal_f51930f5a3d4be0795e2e60a490e3085c3fc3714943f4dd3799fc4e1224904e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
