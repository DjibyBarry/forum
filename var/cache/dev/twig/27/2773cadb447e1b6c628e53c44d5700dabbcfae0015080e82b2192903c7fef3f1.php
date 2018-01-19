<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_380f4d66dac59a0e831acced3a6c6e2db625d9da492a92fd0bb1783b70fda9b2 extends Twig_Template
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
        $__internal_858c0720c5256b348d32bd418429be44b6cb31599efc8f90f46c28e7644ef3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858c0720c5256b348d32bd418429be44b6cb31599efc8f90f46c28e7644ef3cb->enter($__internal_858c0720c5256b348d32bd418429be44b6cb31599efc8f90f46c28e7644ef3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_7f88760039c00c3e5507376fc7e9dc186478ebb2aabad275818a0a2a89d903b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f88760039c00c3e5507376fc7e9dc186478ebb2aabad275818a0a2a89d903b5->enter($__internal_7f88760039c00c3e5507376fc7e9dc186478ebb2aabad275818a0a2a89d903b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_858c0720c5256b348d32bd418429be44b6cb31599efc8f90f46c28e7644ef3cb->leave($__internal_858c0720c5256b348d32bd418429be44b6cb31599efc8f90f46c28e7644ef3cb_prof);

        
        $__internal_7f88760039c00c3e5507376fc7e9dc186478ebb2aabad275818a0a2a89d903b5->leave($__internal_7f88760039c00c3e5507376fc7e9dc186478ebb2aabad275818a0a2a89d903b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
