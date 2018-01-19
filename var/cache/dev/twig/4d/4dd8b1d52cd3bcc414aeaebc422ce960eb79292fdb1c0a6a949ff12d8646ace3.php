<?php

/* form_table_layout.html.twig */
class __TwigTemplate_dc58db71459f313049b174f0f04f296ddc23df9088ccf72dd2bbb273a22def82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a503ab04c58926b93be558dc020ebb28cfcada30f0f18c2effe08e6c3e830e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a503ab04c58926b93be558dc020ebb28cfcada30f0f18c2effe08e6c3e830e56->enter($__internal_a503ab04c58926b93be558dc020ebb28cfcada30f0f18c2effe08e6c3e830e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_dd9c24b78254d11e53312e7c7e0f567ecc670219009afe425652e3e635c202df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9c24b78254d11e53312e7c7e0f567ecc670219009afe425652e3e635c202df->enter($__internal_dd9c24b78254d11e53312e7c7e0f567ecc670219009afe425652e3e635c202df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_a503ab04c58926b93be558dc020ebb28cfcada30f0f18c2effe08e6c3e830e56->leave($__internal_a503ab04c58926b93be558dc020ebb28cfcada30f0f18c2effe08e6c3e830e56_prof);

        
        $__internal_dd9c24b78254d11e53312e7c7e0f567ecc670219009afe425652e3e635c202df->leave($__internal_dd9c24b78254d11e53312e7c7e0f567ecc670219009afe425652e3e635c202df_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_614b8f6e620634ab4fa56ac5c6f085c0d3c80eb03c4982df9a00b85f2e31e7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614b8f6e620634ab4fa56ac5c6f085c0d3c80eb03c4982df9a00b85f2e31e7a1->enter($__internal_614b8f6e620634ab4fa56ac5c6f085c0d3c80eb03c4982df9a00b85f2e31e7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_162a727e20ba014291d6937497ec9ab76176e87b220c3043865128c347343b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162a727e20ba014291d6937497ec9ab76176e87b220c3043865128c347343b29->enter($__internal_162a727e20ba014291d6937497ec9ab76176e87b220c3043865128c347343b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_162a727e20ba014291d6937497ec9ab76176e87b220c3043865128c347343b29->leave($__internal_162a727e20ba014291d6937497ec9ab76176e87b220c3043865128c347343b29_prof);

        
        $__internal_614b8f6e620634ab4fa56ac5c6f085c0d3c80eb03c4982df9a00b85f2e31e7a1->leave($__internal_614b8f6e620634ab4fa56ac5c6f085c0d3c80eb03c4982df9a00b85f2e31e7a1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_836e21d9c47b051d087987c69e8c58f8a5a68e990603ba35c7f07fbc29aa53e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836e21d9c47b051d087987c69e8c58f8a5a68e990603ba35c7f07fbc29aa53e0->enter($__internal_836e21d9c47b051d087987c69e8c58f8a5a68e990603ba35c7f07fbc29aa53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b34027b22f866bd96fab4de56221765db4357ee6d29fc36ab58d4e2da481cb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34027b22f866bd96fab4de56221765db4357ee6d29fc36ab58d4e2da481cb14->enter($__internal_b34027b22f866bd96fab4de56221765db4357ee6d29fc36ab58d4e2da481cb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b34027b22f866bd96fab4de56221765db4357ee6d29fc36ab58d4e2da481cb14->leave($__internal_b34027b22f866bd96fab4de56221765db4357ee6d29fc36ab58d4e2da481cb14_prof);

        
        $__internal_836e21d9c47b051d087987c69e8c58f8a5a68e990603ba35c7f07fbc29aa53e0->leave($__internal_836e21d9c47b051d087987c69e8c58f8a5a68e990603ba35c7f07fbc29aa53e0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e00b3a68dfae6b9037266a1b71977348ee9737a663cc0fb366e43c422f6dfc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00b3a68dfae6b9037266a1b71977348ee9737a663cc0fb366e43c422f6dfc9a->enter($__internal_e00b3a68dfae6b9037266a1b71977348ee9737a663cc0fb366e43c422f6dfc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_13ce509d8ad6656d406222ca00d5fb4fe52cca281f10bcfd7a18204208cab489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ce509d8ad6656d406222ca00d5fb4fe52cca281f10bcfd7a18204208cab489->enter($__internal_13ce509d8ad6656d406222ca00d5fb4fe52cca281f10bcfd7a18204208cab489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_13ce509d8ad6656d406222ca00d5fb4fe52cca281f10bcfd7a18204208cab489->leave($__internal_13ce509d8ad6656d406222ca00d5fb4fe52cca281f10bcfd7a18204208cab489_prof);

        
        $__internal_e00b3a68dfae6b9037266a1b71977348ee9737a663cc0fb366e43c422f6dfc9a->leave($__internal_e00b3a68dfae6b9037266a1b71977348ee9737a663cc0fb366e43c422f6dfc9a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_82fb5d5c0ec4620a6fce97b09fc3e9ba8d62a0e70e1448d480d5e69a78538867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fb5d5c0ec4620a6fce97b09fc3e9ba8d62a0e70e1448d480d5e69a78538867->enter($__internal_82fb5d5c0ec4620a6fce97b09fc3e9ba8d62a0e70e1448d480d5e69a78538867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5017e8c0d768bdcf35d4c5681d81e4d84c1058b9e7826f633522ef606048f818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5017e8c0d768bdcf35d4c5681d81e4d84c1058b9e7826f633522ef606048f818->enter($__internal_5017e8c0d768bdcf35d4c5681d81e4d84c1058b9e7826f633522ef606048f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_5017e8c0d768bdcf35d4c5681d81e4d84c1058b9e7826f633522ef606048f818->leave($__internal_5017e8c0d768bdcf35d4c5681d81e4d84c1058b9e7826f633522ef606048f818_prof);

        
        $__internal_82fb5d5c0ec4620a6fce97b09fc3e9ba8d62a0e70e1448d480d5e69a78538867->leave($__internal_82fb5d5c0ec4620a6fce97b09fc3e9ba8d62a0e70e1448d480d5e69a78538867_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
