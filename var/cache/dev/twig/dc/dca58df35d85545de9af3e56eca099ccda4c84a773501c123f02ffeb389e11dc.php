<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5a9333badc484bd217e3a06d41ff5df228e73382f960a32beca2eed80ba85e81 extends Twig_Template
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
        $__internal_f016718fc18e8748c3bea9fa592256227b34807533c3ca54df0aa9f297015123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f016718fc18e8748c3bea9fa592256227b34807533c3ca54df0aa9f297015123->enter($__internal_f016718fc18e8748c3bea9fa592256227b34807533c3ca54df0aa9f297015123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_01395a35c94defa48476d270e438186eed09983c21fcdbe94133ccd42a802c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01395a35c94defa48476d270e438186eed09983c21fcdbe94133ccd42a802c77->enter($__internal_01395a35c94defa48476d270e438186eed09983c21fcdbe94133ccd42a802c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f016718fc18e8748c3bea9fa592256227b34807533c3ca54df0aa9f297015123->leave($__internal_f016718fc18e8748c3bea9fa592256227b34807533c3ca54df0aa9f297015123_prof);

        
        $__internal_01395a35c94defa48476d270e438186eed09983c21fcdbe94133ccd42a802c77->leave($__internal_01395a35c94defa48476d270e438186eed09983c21fcdbe94133ccd42a802c77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
