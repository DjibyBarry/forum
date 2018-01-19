<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_fa91b46f860a0e1fa16a7ae80a28270b5db6b844e12100ff15cb6208a3c33b49 extends Twig_Template
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
        $__internal_aacc0b830e8ae9484cc490cc65fd44389a19d562ae84897f2e3f68f51ee683b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacc0b830e8ae9484cc490cc65fd44389a19d562ae84897f2e3f68f51ee683b2->enter($__internal_aacc0b830e8ae9484cc490cc65fd44389a19d562ae84897f2e3f68f51ee683b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_2269890d9a4c2122cb8af6cab8aae78b449b562c0c46b1c1db34b294f3921a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2269890d9a4c2122cb8af6cab8aae78b449b562c0c46b1c1db34b294f3921a5d->enter($__internal_2269890d9a4c2122cb8af6cab8aae78b449b562c0c46b1c1db34b294f3921a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_aacc0b830e8ae9484cc490cc65fd44389a19d562ae84897f2e3f68f51ee683b2->leave($__internal_aacc0b830e8ae9484cc490cc65fd44389a19d562ae84897f2e3f68f51ee683b2_prof);

        
        $__internal_2269890d9a4c2122cb8af6cab8aae78b449b562c0c46b1c1db34b294f3921a5d->leave($__internal_2269890d9a4c2122cb8af6cab8aae78b449b562c0c46b1c1db34b294f3921a5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\new_content.html.twig");
    }
}
