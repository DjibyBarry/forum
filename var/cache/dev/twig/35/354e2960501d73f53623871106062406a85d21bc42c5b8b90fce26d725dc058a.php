<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d0f0bbd89a157445d378809eb1a98f1bf7985e504a291af157b2a29c3c5abdfa extends Twig_Template
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
        $__internal_351e488f2e319d2bf00f1e1135d48cfcbab5f14d284ad81eb81ee4e9e5831479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351e488f2e319d2bf00f1e1135d48cfcbab5f14d284ad81eb81ee4e9e5831479->enter($__internal_351e488f2e319d2bf00f1e1135d48cfcbab5f14d284ad81eb81ee4e9e5831479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c151a683af29ce255d3519a2e8b5b52a36cdbeb23f56605688cbd7e66710dea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c151a683af29ce255d3519a2e8b5b52a36cdbeb23f56605688cbd7e66710dea3->enter($__internal_c151a683af29ce255d3519a2e8b5b52a36cdbeb23f56605688cbd7e66710dea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_351e488f2e319d2bf00f1e1135d48cfcbab5f14d284ad81eb81ee4e9e5831479->leave($__internal_351e488f2e319d2bf00f1e1135d48cfcbab5f14d284ad81eb81ee4e9e5831479_prof);

        
        $__internal_c151a683af29ce255d3519a2e8b5b52a36cdbeb23f56605688cbd7e66710dea3->leave($__internal_c151a683af29ce255d3519a2e8b5b52a36cdbeb23f56605688cbd7e66710dea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
