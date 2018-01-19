<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_84df81e35abd74689c0d93e4721c9d43c5fa66293d905fe6dd0a7328fbe9bfb7 extends Twig_Template
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
        $__internal_eaa52070a8b0b138dd0f0698f0e895451f9d5273e64fa2ad70755ba0599b149a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa52070a8b0b138dd0f0698f0e895451f9d5273e64fa2ad70755ba0599b149a->enter($__internal_eaa52070a8b0b138dd0f0698f0e895451f9d5273e64fa2ad70755ba0599b149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_489aa9feafd8871c36c59da4be2a39d8f657896d53248f3cf5d8022d8bdb7018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489aa9feafd8871c36c59da4be2a39d8f657896d53248f3cf5d8022d8bdb7018->enter($__internal_489aa9feafd8871c36c59da4be2a39d8f657896d53248f3cf5d8022d8bdb7018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_eaa52070a8b0b138dd0f0698f0e895451f9d5273e64fa2ad70755ba0599b149a->leave($__internal_eaa52070a8b0b138dd0f0698f0e895451f9d5273e64fa2ad70755ba0599b149a_prof);

        
        $__internal_489aa9feafd8871c36c59da4be2a39d8f657896d53248f3cf5d8022d8bdb7018->leave($__internal_489aa9feafd8871c36c59da4be2a39d8f657896d53248f3cf5d8022d8bdb7018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
