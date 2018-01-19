<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1680dd061a058fb299f0a187bafa7963a4019ef1447caa7231fd9d04326427aa extends Twig_Template
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
        $__internal_f2e6daea1162fdc7bc439943d3ff86796958448068346853d2ead233d6c5a9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e6daea1162fdc7bc439943d3ff86796958448068346853d2ead233d6c5a9ce->enter($__internal_f2e6daea1162fdc7bc439943d3ff86796958448068346853d2ead233d6c5a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4c84cd2739480290458dce242bca7309bbc0ad6487951295b757bf8842f6e1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c84cd2739480290458dce242bca7309bbc0ad6487951295b757bf8842f6e1af->enter($__internal_4c84cd2739480290458dce242bca7309bbc0ad6487951295b757bf8842f6e1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f2e6daea1162fdc7bc439943d3ff86796958448068346853d2ead233d6c5a9ce->leave($__internal_f2e6daea1162fdc7bc439943d3ff86796958448068346853d2ead233d6c5a9ce_prof);

        
        $__internal_4c84cd2739480290458dce242bca7309bbc0ad6487951295b757bf8842f6e1af->leave($__internal_4c84cd2739480290458dce242bca7309bbc0ad6487951295b757bf8842f6e1af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
