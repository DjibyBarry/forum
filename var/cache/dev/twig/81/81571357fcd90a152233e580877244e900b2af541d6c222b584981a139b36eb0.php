<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_941cdb0a4e50f923bd7b2744454317b38598ba2d267835439a8d60a19aff1404 extends Twig_Template
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
        $__internal_51637e16a6ebe0943163b2558b690c3af231b714e02184df2ea644d1149d216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51637e16a6ebe0943163b2558b690c3af231b714e02184df2ea644d1149d216d->enter($__internal_51637e16a6ebe0943163b2558b690c3af231b714e02184df2ea644d1149d216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_801a2aa5ba41622f0cd88f4c8b339ef5d67fe3a62c94c8fc32fd6f46e73492ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801a2aa5ba41622f0cd88f4c8b339ef5d67fe3a62c94c8fc32fd6f46e73492ca->enter($__internal_801a2aa5ba41622f0cd88f4c8b339ef5d67fe3a62c94c8fc32fd6f46e73492ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_51637e16a6ebe0943163b2558b690c3af231b714e02184df2ea644d1149d216d->leave($__internal_51637e16a6ebe0943163b2558b690c3af231b714e02184df2ea644d1149d216d_prof);

        
        $__internal_801a2aa5ba41622f0cd88f4c8b339ef5d67fe3a62c94c8fc32fd6f46e73492ca->leave($__internal_801a2aa5ba41622f0cd88f4c8b339ef5d67fe3a62c94c8fc32fd6f46e73492ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
