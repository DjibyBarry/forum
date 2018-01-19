<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_65feb15e4fbcbc7f1144020b583864235f54d84b2c5797a744897ddfc7b5ba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65feb15e4fbcbc7f1144020b583864235f54d84b2c5797a744897ddfc7b5ba71->enter($__internal_65feb15e4fbcbc7f1144020b583864235f54d84b2c5797a744897ddfc7b5ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8a1d5dbb6c687d2b371cfc29e8bd11fc65c6a582f1d68958dc0ae9effb695abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1d5dbb6c687d2b371cfc29e8bd11fc65c6a582f1d68958dc0ae9effb695abf->enter($__internal_8a1d5dbb6c687d2b371cfc29e8bd11fc65c6a582f1d68958dc0ae9effb695abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_65feb15e4fbcbc7f1144020b583864235f54d84b2c5797a744897ddfc7b5ba71->leave($__internal_65feb15e4fbcbc7f1144020b583864235f54d84b2c5797a744897ddfc7b5ba71_prof);

        
        $__internal_8a1d5dbb6c687d2b371cfc29e8bd11fc65c6a582f1d68958dc0ae9effb695abf->leave($__internal_8a1d5dbb6c687d2b371cfc29e8bd11fc65c6a582f1d68958dc0ae9effb695abf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
