<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7eccb48954b0631b3c684ce5b7bf58546b6c16056b61032ab6e278944ccd2f0e extends Twig_Template
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
        $__internal_b8192b80bd02a16ab7b3956a2b401cc9555b2fc9b7c2887ea4bb823313b79349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8192b80bd02a16ab7b3956a2b401cc9555b2fc9b7c2887ea4bb823313b79349->enter($__internal_b8192b80bd02a16ab7b3956a2b401cc9555b2fc9b7c2887ea4bb823313b79349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9cd4d9dd5cd0968931731f602b712ceb4f6b8b78d2f4c64a665dd02d2ec5a818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd4d9dd5cd0968931731f602b712ceb4f6b8b78d2f4c64a665dd02d2ec5a818->enter($__internal_9cd4d9dd5cd0968931731f602b712ceb4f6b8b78d2f4c64a665dd02d2ec5a818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b8192b80bd02a16ab7b3956a2b401cc9555b2fc9b7c2887ea4bb823313b79349->leave($__internal_b8192b80bd02a16ab7b3956a2b401cc9555b2fc9b7c2887ea4bb823313b79349_prof);

        
        $__internal_9cd4d9dd5cd0968931731f602b712ceb4f6b8b78d2f4c64a665dd02d2ec5a818->leave($__internal_9cd4d9dd5cd0968931731f602b712ceb4f6b8b78d2f4c64a665dd02d2ec5a818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
