<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_00ed75d6b6ebafef0f33ae82425d6d77ba0bc6bcef7b2dfdd3a48bada0626ae2 extends Twig_Template
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
        $__internal_38771c05f0b44e8007a1615961d4cc9348b55934801ecd9fb562406acc860fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38771c05f0b44e8007a1615961d4cc9348b55934801ecd9fb562406acc860fa3->enter($__internal_38771c05f0b44e8007a1615961d4cc9348b55934801ecd9fb562406acc860fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_650c500bd30b316f601e1409d22d79edfd68a466d2b608e09668791725a9798e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650c500bd30b316f601e1409d22d79edfd68a466d2b608e09668791725a9798e->enter($__internal_650c500bd30b316f601e1409d22d79edfd68a466d2b608e09668791725a9798e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_38771c05f0b44e8007a1615961d4cc9348b55934801ecd9fb562406acc860fa3->leave($__internal_38771c05f0b44e8007a1615961d4cc9348b55934801ecd9fb562406acc860fa3_prof);

        
        $__internal_650c500bd30b316f601e1409d22d79edfd68a466d2b608e09668791725a9798e->leave($__internal_650c500bd30b316f601e1409d22d79edfd68a466d2b608e09668791725a9798e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
