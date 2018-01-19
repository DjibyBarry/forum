<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_a059e30ebc5c7a39a59e04a228c6a1de63507d0f974e565d2d06eec1c264da3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a059e30ebc5c7a39a59e04a228c6a1de63507d0f974e565d2d06eec1c264da3d->enter($__internal_a059e30ebc5c7a39a59e04a228c6a1de63507d0f974e565d2d06eec1c264da3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_562ed7e7504c1a23130d58b2523cab2a467f87827cf1bd3aa785a5e92b5229b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562ed7e7504c1a23130d58b2523cab2a467f87827cf1bd3aa785a5e92b5229b8->enter($__internal_562ed7e7504c1a23130d58b2523cab2a467f87827cf1bd3aa785a5e92b5229b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a059e30ebc5c7a39a59e04a228c6a1de63507d0f974e565d2d06eec1c264da3d->leave($__internal_a059e30ebc5c7a39a59e04a228c6a1de63507d0f974e565d2d06eec1c264da3d_prof);

        
        $__internal_562ed7e7504c1a23130d58b2523cab2a467f87827cf1bd3aa785a5e92b5229b8->leave($__internal_562ed7e7504c1a23130d58b2523cab2a467f87827cf1bd3aa785a5e92b5229b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
