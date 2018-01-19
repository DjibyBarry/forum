<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49659a44992dc1813fc9f7de6dbc22911e8f0c8a4a1d5fda0b4b82b9877a5285 extends Twig_Template
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
        $__internal_e438fda48c010422722b4fb176631637931ed647e11de53632bca1026bd6c264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e438fda48c010422722b4fb176631637931ed647e11de53632bca1026bd6c264->enter($__internal_e438fda48c010422722b4fb176631637931ed647e11de53632bca1026bd6c264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4b2e3136d6ecf29bdfec4c12f020ced6266b30b94156e4e5480dceb7276c6bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2e3136d6ecf29bdfec4c12f020ced6266b30b94156e4e5480dceb7276c6bc1->enter($__internal_4b2e3136d6ecf29bdfec4c12f020ced6266b30b94156e4e5480dceb7276c6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e438fda48c010422722b4fb176631637931ed647e11de53632bca1026bd6c264->leave($__internal_e438fda48c010422722b4fb176631637931ed647e11de53632bca1026bd6c264_prof);

        
        $__internal_4b2e3136d6ecf29bdfec4c12f020ced6266b30b94156e4e5480dceb7276c6bc1->leave($__internal_4b2e3136d6ecf29bdfec4c12f020ced6266b30b94156e4e5480dceb7276c6bc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
