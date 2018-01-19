<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_05227e2a43edeffc2bf1e3fdb95325991d44d364e443bf5181252fa969e5fb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05227e2a43edeffc2bf1e3fdb95325991d44d364e443bf5181252fa969e5fb2a->enter($__internal_05227e2a43edeffc2bf1e3fdb95325991d44d364e443bf5181252fa969e5fb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9c85820a2ada5de97601360a50daee7c19727ca550fa3c5b9ae31613b6c60049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c85820a2ada5de97601360a50daee7c19727ca550fa3c5b9ae31613b6c60049->enter($__internal_9c85820a2ada5de97601360a50daee7c19727ca550fa3c5b9ae31613b6c60049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_05227e2a43edeffc2bf1e3fdb95325991d44d364e443bf5181252fa969e5fb2a->leave($__internal_05227e2a43edeffc2bf1e3fdb95325991d44d364e443bf5181252fa969e5fb2a_prof);

        
        $__internal_9c85820a2ada5de97601360a50daee7c19727ca550fa3c5b9ae31613b6c60049->leave($__internal_9c85820a2ada5de97601360a50daee7c19727ca550fa3c5b9ae31613b6c60049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
