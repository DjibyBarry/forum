<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_09470b55fecec64e262f8615ffc52b8b34bc014948ff5ae9ab1678c52455a790 extends Twig_Template
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
        $__internal_fb1732562351761d792b79726223adf10e0ee83af31264a428b7789eb176b04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1732562351761d792b79726223adf10e0ee83af31264a428b7789eb176b04d->enter($__internal_fb1732562351761d792b79726223adf10e0ee83af31264a428b7789eb176b04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ff2f208fe788cbf96d8f875a6e4886049b389981dd9bfb983e3d2959be6fb607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2f208fe788cbf96d8f875a6e4886049b389981dd9bfb983e3d2959be6fb607->enter($__internal_ff2f208fe788cbf96d8f875a6e4886049b389981dd9bfb983e3d2959be6fb607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fb1732562351761d792b79726223adf10e0ee83af31264a428b7789eb176b04d->leave($__internal_fb1732562351761d792b79726223adf10e0ee83af31264a428b7789eb176b04d_prof);

        
        $__internal_ff2f208fe788cbf96d8f875a6e4886049b389981dd9bfb983e3d2959be6fb607->leave($__internal_ff2f208fe788cbf96d8f875a6e4886049b389981dd9bfb983e3d2959be6fb607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
