<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6641423b61dd5aa1670dbbded80679612ee67a6cb5a8836bde4fcb2e105c957b extends Twig_Template
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
        $__internal_d6e2f9479fe361c0f19aa38ef4493fd2692fcb5ec93cbe5bd6812c80ea53a3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e2f9479fe361c0f19aa38ef4493fd2692fcb5ec93cbe5bd6812c80ea53a3da->enter($__internal_d6e2f9479fe361c0f19aa38ef4493fd2692fcb5ec93cbe5bd6812c80ea53a3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ac2c1858b8f5063b9e5d69d843d9455da0cdc53be372f3f502f08272c84e8b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2c1858b8f5063b9e5d69d843d9455da0cdc53be372f3f502f08272c84e8b86->enter($__internal_ac2c1858b8f5063b9e5d69d843d9455da0cdc53be372f3f502f08272c84e8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d6e2f9479fe361c0f19aa38ef4493fd2692fcb5ec93cbe5bd6812c80ea53a3da->leave($__internal_d6e2f9479fe361c0f19aa38ef4493fd2692fcb5ec93cbe5bd6812c80ea53a3da_prof);

        
        $__internal_ac2c1858b8f5063b9e5d69d843d9455da0cdc53be372f3f502f08272c84e8b86->leave($__internal_ac2c1858b8f5063b9e5d69d843d9455da0cdc53be372f3f502f08272c84e8b86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
