<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
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
        $__internal_0afd082c0241b51404b809bc14cf11a595f70f4ee4ef1144dbb7f22372897d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afd082c0241b51404b809bc14cf11a595f70f4ee4ef1144dbb7f22372897d30->enter($__internal_0afd082c0241b51404b809bc14cf11a595f70f4ee4ef1144dbb7f22372897d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c6708d352a1e26e1520d87e7254de045b9f2f20c4fbf54f17eaa5fd6c10ed5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6708d352a1e26e1520d87e7254de045b9f2f20c4fbf54f17eaa5fd6c10ed5ed->enter($__internal_c6708d352a1e26e1520d87e7254de045b9f2f20c4fbf54f17eaa5fd6c10ed5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0afd082c0241b51404b809bc14cf11a595f70f4ee4ef1144dbb7f22372897d30->leave($__internal_0afd082c0241b51404b809bc14cf11a595f70f4ee4ef1144dbb7f22372897d30_prof);

        
        $__internal_c6708d352a1e26e1520d87e7254de045b9f2f20c4fbf54f17eaa5fd6c10ed5ed->leave($__internal_c6708d352a1e26e1520d87e7254de045b9f2f20c4fbf54f17eaa5fd6c10ed5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
