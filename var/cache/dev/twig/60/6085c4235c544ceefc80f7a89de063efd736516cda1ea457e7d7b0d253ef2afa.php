<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_f796c064f4831e7c05ba6031af1f37e8acab760e47ec62663fb503d5fc6ac155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f796c064f4831e7c05ba6031af1f37e8acab760e47ec62663fb503d5fc6ac155->enter($__internal_f796c064f4831e7c05ba6031af1f37e8acab760e47ec62663fb503d5fc6ac155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1ac8a4da9a1a43d3d15b32ee200069740bb64fa43c7e9ccfa03938510b55584f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac8a4da9a1a43d3d15b32ee200069740bb64fa43c7e9ccfa03938510b55584f->enter($__internal_1ac8a4da9a1a43d3d15b32ee200069740bb64fa43c7e9ccfa03938510b55584f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f796c064f4831e7c05ba6031af1f37e8acab760e47ec62663fb503d5fc6ac155->leave($__internal_f796c064f4831e7c05ba6031af1f37e8acab760e47ec62663fb503d5fc6ac155_prof);

        
        $__internal_1ac8a4da9a1a43d3d15b32ee200069740bb64fa43c7e9ccfa03938510b55584f->leave($__internal_1ac8a4da9a1a43d3d15b32ee200069740bb64fa43c7e9ccfa03938510b55584f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
