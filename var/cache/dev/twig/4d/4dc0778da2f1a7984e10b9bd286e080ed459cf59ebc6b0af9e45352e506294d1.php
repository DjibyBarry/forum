<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_050fd7f7fe1eecdedb1f25b19809d449b2f59f1c11c9218dc3af15709d46c53e extends Twig_Template
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
        $__internal_ae18a7dd83d1444a7d9046b4f35d0bde9eaa891ecde342e1c66fda163a6626e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae18a7dd83d1444a7d9046b4f35d0bde9eaa891ecde342e1c66fda163a6626e5->enter($__internal_ae18a7dd83d1444a7d9046b4f35d0bde9eaa891ecde342e1c66fda163a6626e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_90a063eaec87f481cc3ac1e6e72ca847bb8a5082aafd3b1e8cb06b605309666d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a063eaec87f481cc3ac1e6e72ca847bb8a5082aafd3b1e8cb06b605309666d->enter($__internal_90a063eaec87f481cc3ac1e6e72ca847bb8a5082aafd3b1e8cb06b605309666d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ae18a7dd83d1444a7d9046b4f35d0bde9eaa891ecde342e1c66fda163a6626e5->leave($__internal_ae18a7dd83d1444a7d9046b4f35d0bde9eaa891ecde342e1c66fda163a6626e5_prof);

        
        $__internal_90a063eaec87f481cc3ac1e6e72ca847bb8a5082aafd3b1e8cb06b605309666d->leave($__internal_90a063eaec87f481cc3ac1e6e72ca847bb8a5082aafd3b1e8cb06b605309666d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
