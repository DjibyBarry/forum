<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_433cb35566819d362d9e9aa58945b2def44e6afa16cef0335990934740121fe5 extends Twig_Template
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
        $__internal_e9adea3b8018fefd64560cb0a64ef83ce5df6d511b738b4f2f37ecf51c2f5b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9adea3b8018fefd64560cb0a64ef83ce5df6d511b738b4f2f37ecf51c2f5b10->enter($__internal_e9adea3b8018fefd64560cb0a64ef83ce5df6d511b738b4f2f37ecf51c2f5b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5fd61c66e7b8da82e6d0595d3be2d9dda4f23925417275d671bcf4ed82a02b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd61c66e7b8da82e6d0595d3be2d9dda4f23925417275d671bcf4ed82a02b9b->enter($__internal_5fd61c66e7b8da82e6d0595d3be2d9dda4f23925417275d671bcf4ed82a02b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_e9adea3b8018fefd64560cb0a64ef83ce5df6d511b738b4f2f37ecf51c2f5b10->leave($__internal_e9adea3b8018fefd64560cb0a64ef83ce5df6d511b738b4f2f37ecf51c2f5b10_prof);

        
        $__internal_5fd61c66e7b8da82e6d0595d3be2d9dda4f23925417275d671bcf4ed82a02b9b->leave($__internal_5fd61c66e7b8da82e6d0595d3be2d9dda4f23925417275d671bcf4ed82a02b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
