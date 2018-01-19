<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c81f1c6b24828e5e3f130cc0a255a0d8b86a5c734d74ea9a9f0203248c8108e8 extends Twig_Template
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
        $__internal_c098aaa788be9008464ed48835400d9cc0eacc3921331c8d6d585d40056690b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c098aaa788be9008464ed48835400d9cc0eacc3921331c8d6d585d40056690b5->enter($__internal_c098aaa788be9008464ed48835400d9cc0eacc3921331c8d6d585d40056690b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fba11bf3a53533dc1698f0ea6f6e5abe4ae062be0d4216bbb281cc59c8db5849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba11bf3a53533dc1698f0ea6f6e5abe4ae062be0d4216bbb281cc59c8db5849->enter($__internal_fba11bf3a53533dc1698f0ea6f6e5abe4ae062be0d4216bbb281cc59c8db5849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c098aaa788be9008464ed48835400d9cc0eacc3921331c8d6d585d40056690b5->leave($__internal_c098aaa788be9008464ed48835400d9cc0eacc3921331c8d6d585d40056690b5_prof);

        
        $__internal_fba11bf3a53533dc1698f0ea6f6e5abe4ae062be0d4216bbb281cc59c8db5849->leave($__internal_fba11bf3a53533dc1698f0ea6f6e5abe4ae062be0d4216bbb281cc59c8db5849_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
