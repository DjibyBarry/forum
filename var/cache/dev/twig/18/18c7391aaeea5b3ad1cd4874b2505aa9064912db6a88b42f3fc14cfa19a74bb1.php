<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_edd4f42be52bce9ef062555dccbaff0c12af8e8d52c87a6e36b4e526b298f0ce extends Twig_Template
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
        $__internal_3b7a23ae85ac96add5c0cfa45eddb3f7180c496013add438043df4a67e8d259a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7a23ae85ac96add5c0cfa45eddb3f7180c496013add438043df4a67e8d259a->enter($__internal_3b7a23ae85ac96add5c0cfa45eddb3f7180c496013add438043df4a67e8d259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c5da4ad86a49387876c96ef1ae7c65883e77d1c9f2792a7028fbf996dc682b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5da4ad86a49387876c96ef1ae7c65883e77d1c9f2792a7028fbf996dc682b30->enter($__internal_c5da4ad86a49387876c96ef1ae7c65883e77d1c9f2792a7028fbf996dc682b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_3b7a23ae85ac96add5c0cfa45eddb3f7180c496013add438043df4a67e8d259a->leave($__internal_3b7a23ae85ac96add5c0cfa45eddb3f7180c496013add438043df4a67e8d259a_prof);

        
        $__internal_c5da4ad86a49387876c96ef1ae7c65883e77d1c9f2792a7028fbf996dc682b30->leave($__internal_c5da4ad86a49387876c96ef1ae7c65883e77d1c9f2792a7028fbf996dc682b30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
