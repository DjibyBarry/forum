<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_fc5ca5b1679b548bf79772c2a496ca63582d06866b423e74b93f4155ddf71c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4046e7197ad5e8ad96a548d41e64725a6968a3dcc18885a707c49fba5dff429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4046e7197ad5e8ad96a548d41e64725a6968a3dcc18885a707c49fba5dff429->enter($__internal_a4046e7197ad5e8ad96a548d41e64725a6968a3dcc18885a707c49fba5dff429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_96ee25db8a7a3bae4589ee63cfdf8610090765b64e894ee32d316ec12ad4f7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ee25db8a7a3bae4589ee63cfdf8610090765b64e894ee32d316ec12ad4f7f5->enter($__internal_96ee25db8a7a3bae4589ee63cfdf8610090765b64e894ee32d316ec12ad4f7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a4046e7197ad5e8ad96a548d41e64725a6968a3dcc18885a707c49fba5dff429->leave($__internal_a4046e7197ad5e8ad96a548d41e64725a6968a3dcc18885a707c49fba5dff429_prof);

        
        $__internal_96ee25db8a7a3bae4589ee63cfdf8610090765b64e894ee32d316ec12ad4f7f5->leave($__internal_96ee25db8a7a3bae4589ee63cfdf8610090765b64e894ee32d316ec12ad4f7f5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b9557302c058be64cb23296ad2980f9ffc3bdff917e13ca493247cd60b8d2cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9557302c058be64cb23296ad2980f9ffc3bdff917e13ca493247cd60b8d2cee->enter($__internal_b9557302c058be64cb23296ad2980f9ffc3bdff917e13ca493247cd60b8d2cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_aaf8e7e1053c6f70c90bf0abd0e28419cb17f29ecce629a67b4b996624e3a95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf8e7e1053c6f70c90bf0abd0e28419cb17f29ecce629a67b4b996624e3a95c->enter($__internal_aaf8e7e1053c6f70c90bf0abd0e28419cb17f29ecce629a67b4b996624e3a95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aaf8e7e1053c6f70c90bf0abd0e28419cb17f29ecce629a67b4b996624e3a95c->leave($__internal_aaf8e7e1053c6f70c90bf0abd0e28419cb17f29ecce629a67b4b996624e3a95c_prof);

        
        $__internal_b9557302c058be64cb23296ad2980f9ffc3bdff917e13ca493247cd60b8d2cee->leave($__internal_b9557302c058be64cb23296ad2980f9ffc3bdff917e13ca493247cd60b8d2cee_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d84fc16d741a7417a5afb223b56ff41669275784e96f037b5c2603a032100849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84fc16d741a7417a5afb223b56ff41669275784e96f037b5c2603a032100849->enter($__internal_d84fc16d741a7417a5afb223b56ff41669275784e96f037b5c2603a032100849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_53a40c67924f85bf96fa9e751f5e49c2b15542e2c5c5a72f6ac657d27f92f161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a40c67924f85bf96fa9e751f5e49c2b15542e2c5c5a72f6ac657d27f92f161->enter($__internal_53a40c67924f85bf96fa9e751f5e49c2b15542e2c5c5a72f6ac657d27f92f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_53a40c67924f85bf96fa9e751f5e49c2b15542e2c5c5a72f6ac657d27f92f161->leave($__internal_53a40c67924f85bf96fa9e751f5e49c2b15542e2c5c5a72f6ac657d27f92f161_prof);

        
        $__internal_d84fc16d741a7417a5afb223b56ff41669275784e96f037b5c2603a032100849->leave($__internal_d84fc16d741a7417a5afb223b56ff41669275784e96f037b5c2603a032100849_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9e8b7054a9d886a381fadeced8894a3af16dd02d6b46320fd9edeafe33981158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8b7054a9d886a381fadeced8894a3af16dd02d6b46320fd9edeafe33981158->enter($__internal_9e8b7054a9d886a381fadeced8894a3af16dd02d6b46320fd9edeafe33981158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8d2c8908c3ae6d8736feb81d4d48400a92169a362c95abb5300a05eab5f6f67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2c8908c3ae6d8736feb81d4d48400a92169a362c95abb5300a05eab5f6f67a->enter($__internal_8d2c8908c3ae6d8736feb81d4d48400a92169a362c95abb5300a05eab5f6f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8d2c8908c3ae6d8736feb81d4d48400a92169a362c95abb5300a05eab5f6f67a->leave($__internal_8d2c8908c3ae6d8736feb81d4d48400a92169a362c95abb5300a05eab5f6f67a_prof);

        
        $__internal_9e8b7054a9d886a381fadeced8894a3af16dd02d6b46320fd9edeafe33981158->leave($__internal_9e8b7054a9d886a381fadeced8894a3af16dd02d6b46320fd9edeafe33981158_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_be3b241c3d32b8bb4803f5f43662d3c252e00c899b7609fd5deda9080cb4963f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3b241c3d32b8bb4803f5f43662d3c252e00c899b7609fd5deda9080cb4963f->enter($__internal_be3b241c3d32b8bb4803f5f43662d3c252e00c899b7609fd5deda9080cb4963f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1e01fac98429887bf5a9494b3be833e362719812565c0d1f24fea85978118629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e01fac98429887bf5a9494b3be833e362719812565c0d1f24fea85978118629->enter($__internal_1e01fac98429887bf5a9494b3be833e362719812565c0d1f24fea85978118629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_74c346601953cc5c2e0acbe8a4d0098b5598fff1068486619ebbb75941472972 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 23, $this->getSourceContext()); })())) && is_string($__internal_b16edfcc230e405a4e2b7c0de532344806ed15f11dc1d716ba51677801eff811 = "{{") && ('' === $__internal_b16edfcc230e405a4e2b7c0de532344806ed15f11dc1d716ba51677801eff811 || 0 === strpos($__internal_74c346601953cc5c2e0acbe8a4d0098b5598fff1068486619ebbb75941472972, $__internal_b16edfcc230e405a4e2b7c0de532344806ed15f11dc1d716ba51677801eff811)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_435af9f742c6bce8daca80b0c7d56fb459764f3ba5ee8cce0a36fb277a1933fc = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })())) && is_string($__internal_e2eff93265810524d3231fe9e1ffc87d205491130fd37dbc566f89e1e87d78a1 = "}}") && ('' === $__internal_e2eff93265810524d3231fe9e1ffc87d205491130fd37dbc566f89e1e87d78a1 || $__internal_e2eff93265810524d3231fe9e1ffc87d205491130fd37dbc566f89e1e87d78a1 === substr($__internal_435af9f742c6bce8daca80b0c7d56fb459764f3ba5ee8cce0a36fb277a1933fc, -strlen($__internal_e2eff93265810524d3231fe9e1ffc87d205491130fd37dbc566f89e1e87d78a1))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 25, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 25, $this->getSourceContext()); })()))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 27, $this->getSourceContext()); })())) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 28, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 31, $this->getSourceContext()); })())) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 32, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_1e01fac98429887bf5a9494b3be833e362719812565c0d1f24fea85978118629->leave($__internal_1e01fac98429887bf5a9494b3be833e362719812565c0d1f24fea85978118629_prof);

        
        $__internal_be3b241c3d32b8bb4803f5f43662d3c252e00c899b7609fd5deda9080cb4963f->leave($__internal_be3b241c3d32b8bb4803f5f43662d3c252e00c899b7609fd5deda9080cb4963f_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9fbe7772c36a02eb17e1616f64acd7eb7df6e995d9bdd003dd4f674cfae1c08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbe7772c36a02eb17e1616f64acd7eb7df6e995d9bdd003dd4f674cfae1c08a->enter($__internal_9fbe7772c36a02eb17e1616f64acd7eb7df6e995d9bdd003dd4f674cfae1c08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7750e725c53791e7e3c409949486ccab6099bf48a8fb2f77f39d1de7dcf7fe00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7750e725c53791e7e3c409949486ccab6099bf48a8fb2f77f39d1de7dcf7fe00->enter($__internal_7750e725c53791e7e3c409949486ccab6099bf48a8fb2f77f39d1de7dcf7fe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7750e725c53791e7e3c409949486ccab6099bf48a8fb2f77f39d1de7dcf7fe00->leave($__internal_7750e725c53791e7e3c409949486ccab6099bf48a8fb2f77f39d1de7dcf7fe00_prof);

        
        $__internal_9fbe7772c36a02eb17e1616f64acd7eb7df6e995d9bdd003dd4f674cfae1c08a->leave($__internal_9fbe7772c36a02eb17e1616f64acd7eb7df6e995d9bdd003dd4f674cfae1c08a_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2f64285d3ad59ef763dddb5ee3b17d63b86b0065fa2ab870546d8cfe511e1469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f64285d3ad59ef763dddb5ee3b17d63b86b0065fa2ab870546d8cfe511e1469->enter($__internal_2f64285d3ad59ef763dddb5ee3b17d63b86b0065fa2ab870546d8cfe511e1469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_17565a313df5423211fdc294e80e7e30b7f6818a341ea7e33fc82d0af9849283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17565a313df5423211fdc294e80e7e30b7f6818a341ea7e33fc82d0af9849283->enter($__internal_17565a313df5423211fdc294e80e7e30b7f6818a341ea7e33fc82d0af9849283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->getSourceContext()); })()) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_17565a313df5423211fdc294e80e7e30b7f6818a341ea7e33fc82d0af9849283->leave($__internal_17565a313df5423211fdc294e80e7e30b7f6818a341ea7e33fc82d0af9849283_prof);

        
        $__internal_2f64285d3ad59ef763dddb5ee3b17d63b86b0065fa2ab870546d8cfe511e1469->leave($__internal_2f64285d3ad59ef763dddb5ee3b17d63b86b0065fa2ab870546d8cfe511e1469_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e1d50437fdb5bf54e4db4c7b1086a14c3439fdbdc962f6404de0b8b6e7be4885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d50437fdb5bf54e4db4c7b1086a14c3439fdbdc962f6404de0b8b6e7be4885->enter($__internal_e1d50437fdb5bf54e4db4c7b1086a14c3439fdbdc962f6404de0b8b6e7be4885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b8156c53c2007f577773bae8983e7e5235722de86edac9c5cbe0e4876d908925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8156c53c2007f577773bae8983e7e5235722de86edac9c5cbe0e4876d908925->enter($__internal_b8156c53c2007f577773bae8983e7e5235722de86edac9c5cbe0e4876d908925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 62, $this->getSourceContext()); })()) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 65, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 66, $this->getSourceContext()); })()))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 69, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 74, $this->getSourceContext()); })()))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_b8156c53c2007f577773bae8983e7e5235722de86edac9c5cbe0e4876d908925->leave($__internal_b8156c53c2007f577773bae8983e7e5235722de86edac9c5cbe0e4876d908925_prof);

        
        $__internal_e1d50437fdb5bf54e4db4c7b1086a14c3439fdbdc962f6404de0b8b6e7be4885->leave($__internal_e1d50437fdb5bf54e4db4c7b1086a14c3439fdbdc962f6404de0b8b6e7be4885_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2287dd9068071ee4a2d353ce31dab6f459f699a047dbc7a90f92fda74e53dbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2287dd9068071ee4a2d353ce31dab6f459f699a047dbc7a90f92fda74e53dbd0->enter($__internal_2287dd9068071ee4a2d353ce31dab6f459f699a047dbc7a90f92fda74e53dbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8f863cd58f32e809119638cd46f93e3ecb6e3734c489426d36465abe9af1e11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f863cd58f32e809119638cd46f93e3ecb6e3734c489426d36465abe9af1e11b->enter($__internal_8f863cd58f32e809119638cd46f93e3ecb6e3734c489426d36465abe9af1e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 81, $this->getSourceContext()); })()) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 84, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 85, $this->getSourceContext()); })())))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 89, $this->getSourceContext()); })())))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_8f863cd58f32e809119638cd46f93e3ecb6e3734c489426d36465abe9af1e11b->leave($__internal_8f863cd58f32e809119638cd46f93e3ecb6e3734c489426d36465abe9af1e11b_prof);

        
        $__internal_2287dd9068071ee4a2d353ce31dab6f459f699a047dbc7a90f92fda74e53dbd0->leave($__internal_2287dd9068071ee4a2d353ce31dab6f459f699a047dbc7a90f92fda74e53dbd0_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_df7d45ac45002f2acb6eddf7e2f695d7710c94d8a731d58244b4c32dced7d504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7d45ac45002f2acb6eddf7e2f695d7710c94d8a731d58244b4c32dced7d504->enter($__internal_df7d45ac45002f2acb6eddf7e2f695d7710c94d8a731d58244b4c32dced7d504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_af8b9b5236229a5dab0db7f369264d2103d8c5997f6c958282f8bee556289b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8b9b5236229a5dab0db7f369264d2103d8c5997f6c958282f8bee556289b25->enter($__internal_af8b9b5236229a5dab0db7f369264d2103d8c5997f6c958282f8bee556289b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 99, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 103, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 108, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 109, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 110, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 111, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 112, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 117, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 118, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 119, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 120, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 121, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 122, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 123, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 128, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_af8b9b5236229a5dab0db7f369264d2103d8c5997f6c958282f8bee556289b25->leave($__internal_af8b9b5236229a5dab0db7f369264d2103d8c5997f6c958282f8bee556289b25_prof);

        
        $__internal_df7d45ac45002f2acb6eddf7e2f695d7710c94d8a731d58244b4c32dced7d504->leave($__internal_df7d45ac45002f2acb6eddf7e2f695d7710c94d8a731d58244b4c32dced7d504_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_890a5d43c779fe18932265b4c12be1897b6a1264583ea954eb219b3da9ff1d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890a5d43c779fe18932265b4c12be1897b6a1264583ea954eb219b3da9ff1d8f->enter($__internal_890a5d43c779fe18932265b4c12be1897b6a1264583ea954eb219b3da9ff1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5c47af2a36edb7942eb62b569d072c47ca56895d3eb7331fa56ad853d83b3e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c47af2a36edb7942eb62b569d072c47ca56895d3eb7331fa56ad853d83b3e45->enter($__internal_5c47af2a36edb7942eb62b569d072c47ca56895d3eb7331fa56ad853d83b3e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 134, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5c47af2a36edb7942eb62b569d072c47ca56895d3eb7331fa56ad853d83b3e45->leave($__internal_5c47af2a36edb7942eb62b569d072c47ca56895d3eb7331fa56ad853d83b3e45_prof);

        
        $__internal_890a5d43c779fe18932265b4c12be1897b6a1264583ea954eb219b3da9ff1d8f->leave($__internal_890a5d43c779fe18932265b4c12be1897b6a1264583ea954eb219b3da9ff1d8f_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4914ced5aa46ed89e98622c09070eb6105731c0108365c87be125a29acf3af81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4914ced5aa46ed89e98622c09070eb6105731c0108365c87be125a29acf3af81->enter($__internal_4914ced5aa46ed89e98622c09070eb6105731c0108365c87be125a29acf3af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_936cd6b2885975488d9e43787592413d3fc661fff05bb46279773564f35fc491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936cd6b2885975488d9e43787592413d3fc661fff05bb46279773564f35fc491->enter($__internal_936cd6b2885975488d9e43787592413d3fc661fff05bb46279773564f35fc491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 143, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 151, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_936cd6b2885975488d9e43787592413d3fc661fff05bb46279773564f35fc491->leave($__internal_936cd6b2885975488d9e43787592413d3fc661fff05bb46279773564f35fc491_prof);

        
        $__internal_4914ced5aa46ed89e98622c09070eb6105731c0108365c87be125a29acf3af81->leave($__internal_4914ced5aa46ed89e98622c09070eb6105731c0108365c87be125a29acf3af81_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a1f4839283e6ce82c102b8ea70aa2ea6a8c5d5d8382214ffb520aa16a4710c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f4839283e6ce82c102b8ea70aa2ea6a8c5d5d8382214ffb520aa16a4710c7f->enter($__internal_a1f4839283e6ce82c102b8ea70aa2ea6a8c5d5d8382214ffb520aa16a4710c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c05f63a6848f9d2caedeb175c9e93ec0a4b2b5b0dbc4a87abfb8d5191e99c800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05f63a6848f9d2caedeb175c9e93ec0a4b2b5b0dbc4a87abfb8d5191e99c800->enter($__internal_c05f63a6848f9d2caedeb175c9e93ec0a4b2b5b0dbc4a87abfb8d5191e99c800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 159, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 160, $this->getSourceContext()); })()))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 161, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 164, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_c05f63a6848f9d2caedeb175c9e93ec0a4b2b5b0dbc4a87abfb8d5191e99c800->leave($__internal_c05f63a6848f9d2caedeb175c9e93ec0a4b2b5b0dbc4a87abfb8d5191e99c800_prof);

        
        $__internal_a1f4839283e6ce82c102b8ea70aa2ea6a8c5d5d8382214ffb520aa16a4710c7f->leave($__internal_a1f4839283e6ce82c102b8ea70aa2ea6a8c5d5d8382214ffb520aa16a4710c7f_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_86346a2cae4975a06ee513c8ab12d3930bb86a7e97df31820971fe2b85b5ac3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86346a2cae4975a06ee513c8ab12d3930bb86a7e97df31820971fe2b85b5ac3f->enter($__internal_86346a2cae4975a06ee513c8ab12d3930bb86a7e97df31820971fe2b85b5ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cc5f9779957d2df4b90ff12abc20c0dfdadfd358a20087fda5d013ef827bd339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5f9779957d2df4b90ff12abc20c0dfdadfd358a20087fda5d013ef827bd339->enter($__internal_cc5f9779957d2df4b90ff12abc20c0dfdadfd358a20087fda5d013ef827bd339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 170, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 171, $this->getSourceContext()); })()))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_cc5f9779957d2df4b90ff12abc20c0dfdadfd358a20087fda5d013ef827bd339->leave($__internal_cc5f9779957d2df4b90ff12abc20c0dfdadfd358a20087fda5d013ef827bd339_prof);

        
        $__internal_86346a2cae4975a06ee513c8ab12d3930bb86a7e97df31820971fe2b85b5ac3f->leave($__internal_86346a2cae4975a06ee513c8ab12d3930bb86a7e97df31820971fe2b85b5ac3f_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82a084b9f67a2592d687db6227d9a2cff7754a1e963e877e6927003e0ede7d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a084b9f67a2592d687db6227d9a2cff7754a1e963e877e6927003e0ede7d0e->enter($__internal_82a084b9f67a2592d687db6227d9a2cff7754a1e963e877e6927003e0ede7d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a543d2231587cca404754ad3f933c3053ddd3e75cbd25b2a0de03b00b4484b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a543d2231587cca404754ad3f933c3053ddd3e75cbd25b2a0de03b00b4484b07->enter($__internal_a543d2231587cca404754ad3f933c3053ddd3e75cbd25b2a0de03b00b4484b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 183, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a543d2231587cca404754ad3f933c3053ddd3e75cbd25b2a0de03b00b4484b07->leave($__internal_a543d2231587cca404754ad3f933c3053ddd3e75cbd25b2a0de03b00b4484b07_prof);

        
        $__internal_82a084b9f67a2592d687db6227d9a2cff7754a1e963e877e6927003e0ede7d0e->leave($__internal_82a084b9f67a2592d687db6227d9a2cff7754a1e963e877e6927003e0ede7d0e_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_88da44ac0f8a76b0af2167f66dc73152bf3616e55d66626a2d87da047b7870cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88da44ac0f8a76b0af2167f66dc73152bf3616e55d66626a2d87da047b7870cc->enter($__internal_88da44ac0f8a76b0af2167f66dc73152bf3616e55d66626a2d87da047b7870cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2f70dd85d9fcdecef07dd7d96b05a9a064a7050e6e2df9199f7973460bfc3bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f70dd85d9fcdecef07dd7d96b05a9a064a7050e6e2df9199f7973460bfc3bd1->enter($__internal_2f70dd85d9fcdecef07dd7d96b05a9a064a7050e6e2df9199f7973460bfc3bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 189, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2f70dd85d9fcdecef07dd7d96b05a9a064a7050e6e2df9199f7973460bfc3bd1->leave($__internal_2f70dd85d9fcdecef07dd7d96b05a9a064a7050e6e2df9199f7973460bfc3bd1_prof);

        
        $__internal_88da44ac0f8a76b0af2167f66dc73152bf3616e55d66626a2d87da047b7870cc->leave($__internal_88da44ac0f8a76b0af2167f66dc73152bf3616e55d66626a2d87da047b7870cc_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fb8928c0ae88a5242bdf7e22fdff28c2a90c02f1b60b4df75adadc533e672204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8928c0ae88a5242bdf7e22fdff28c2a90c02f1b60b4df75adadc533e672204->enter($__internal_fb8928c0ae88a5242bdf7e22fdff28c2a90c02f1b60b4df75adadc533e672204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_f40803218412b20b761ee35cd673927e49859c432c0eb3eddf3a8aa057d12047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40803218412b20b761ee35cd673927e49859c432c0eb3eddf3a8aa057d12047->enter($__internal_f40803218412b20b761ee35cd673927e49859c432c0eb3eddf3a8aa057d12047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 194, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 194, $this->getSourceContext()); })())));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f40803218412b20b761ee35cd673927e49859c432c0eb3eddf3a8aa057d12047->leave($__internal_f40803218412b20b761ee35cd673927e49859c432c0eb3eddf3a8aa057d12047_prof);

        
        $__internal_fb8928c0ae88a5242bdf7e22fdff28c2a90c02f1b60b4df75adadc533e672204->leave($__internal_fb8928c0ae88a5242bdf7e22fdff28c2a90c02f1b60b4df75adadc533e672204_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_78b8340bfbf74db1b7e510e09c32c7e5ff017fcf583ca1c42362e3987efce676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b8340bfbf74db1b7e510e09c32c7e5ff017fcf583ca1c42362e3987efce676->enter($__internal_78b8340bfbf74db1b7e510e09c32c7e5ff017fcf583ca1c42362e3987efce676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5e355699a1cbb1daba7fc66093cfb3fa22e5827b47a25b6df0bb69ec90d506f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e355699a1cbb1daba7fc66093cfb3fa22e5827b47a25b6df0bb69ec90d506f0->enter($__internal_5e355699a1cbb1daba7fc66093cfb3fa22e5827b47a25b6df0bb69ec90d506f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 200, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->getSourceContext()); })())));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5e355699a1cbb1daba7fc66093cfb3fa22e5827b47a25b6df0bb69ec90d506f0->leave($__internal_5e355699a1cbb1daba7fc66093cfb3fa22e5827b47a25b6df0bb69ec90d506f0_prof);

        
        $__internal_78b8340bfbf74db1b7e510e09c32c7e5ff017fcf583ca1c42362e3987efce676->leave($__internal_78b8340bfbf74db1b7e510e09c32c7e5ff017fcf583ca1c42362e3987efce676_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_061d8dfc4317eafe9606576ec892292c63fc5f66d513d5d78dd2952380617876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061d8dfc4317eafe9606576ec892292c63fc5f66d513d5d78dd2952380617876->enter($__internal_061d8dfc4317eafe9606576ec892292c63fc5f66d513d5d78dd2952380617876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_10a267083bbe594200cb73050c06fe4d22af364f07e1166aac927eafe2ace149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a267083bbe594200cb73050c06fe4d22af364f07e1166aac927eafe2ace149->enter($__internal_10a267083bbe594200cb73050c06fe4d22af364f07e1166aac927eafe2ace149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 208, $this->getSourceContext()); })())) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 209, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 212, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 212, $this->getSourceContext()); })())))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 214, $this->getSourceContext()); })())))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 215, $this->getSourceContext()); })()))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 216, $this->getSourceContext()); })()), array("%name%" =>                     // line 217
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 217, $this->getSourceContext()); })()), "%id%" =>                     // line 218
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })())));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 221, $this->getSourceContext()); })()));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 224, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 225, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 225, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_10a267083bbe594200cb73050c06fe4d22af364f07e1166aac927eafe2ace149->leave($__internal_10a267083bbe594200cb73050c06fe4d22af364f07e1166aac927eafe2ace149_prof);

        
        $__internal_061d8dfc4317eafe9606576ec892292c63fc5f66d513d5d78dd2952380617876->leave($__internal_061d8dfc4317eafe9606576ec892292c63fc5f66d513d5d78dd2952380617876_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e8dac3db0cb25530257f9e740dd5905fd0635c6eca5417c62398c59849ea0764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dac3db0cb25530257f9e740dd5905fd0635c6eca5417c62398c59849ea0764->enter($__internal_e8dac3db0cb25530257f9e740dd5905fd0635c6eca5417c62398c59849ea0764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_89b6ab1c3ff0d98ec27853a6248aad847d7234b5a79049390be7fb4ff8b85960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b6ab1c3ff0d98ec27853a6248aad847d7234b5a79049390be7fb4ff8b85960->enter($__internal_89b6ab1c3ff0d98ec27853a6248aad847d7234b5a79049390be7fb4ff8b85960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 233, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 233, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 233, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->getSourceContext()); })()), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->getSourceContext()); })()), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_89b6ab1c3ff0d98ec27853a6248aad847d7234b5a79049390be7fb4ff8b85960->leave($__internal_89b6ab1c3ff0d98ec27853a6248aad847d7234b5a79049390be7fb4ff8b85960_prof);

        
        $__internal_e8dac3db0cb25530257f9e740dd5905fd0635c6eca5417c62398c59849ea0764->leave($__internal_e8dac3db0cb25530257f9e740dd5905fd0635c6eca5417c62398c59849ea0764_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d51039e69cf7e8c64031467567136b7092d5c0e812e561e37339690c70de7fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51039e69cf7e8c64031467567136b7092d5c0e812e561e37339690c70de7fd8->enter($__internal_d51039e69cf7e8c64031467567136b7092d5c0e812e561e37339690c70de7fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_143a9eaf1e45380d2b137df824e143252a92f7458a90ddf8b88782e07ba2c523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143a9eaf1e45380d2b137df824e143252a92f7458a90ddf8b88782e07ba2c523->enter($__internal_143a9eaf1e45380d2b137df824e143252a92f7458a90ddf8b88782e07ba2c523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->getSourceContext()); })()), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_143a9eaf1e45380d2b137df824e143252a92f7458a90ddf8b88782e07ba2c523->leave($__internal_143a9eaf1e45380d2b137df824e143252a92f7458a90ddf8b88782e07ba2c523_prof);

        
        $__internal_d51039e69cf7e8c64031467567136b7092d5c0e812e561e37339690c70de7fd8->leave($__internal_d51039e69cf7e8c64031467567136b7092d5c0e812e561e37339690c70de7fd8_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c8c97c683a5460732d9c98493bcd88e98bb0b4a940d4702ba8f6ec72a7cda0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c97c683a5460732d9c98493bcd88e98bb0b4a940d4702ba8f6ec72a7cda0ed->enter($__internal_c8c97c683a5460732d9c98493bcd88e98bb0b4a940d4702ba8f6ec72a7cda0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0f5d1aa8a0a5ac907577e7b85b2edd58f8de19d6ac583762366be4a8a0c69ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5d1aa8a0a5ac907577e7b85b2edd58f8de19d6ac583762366be4a8a0c69ef9->enter($__internal_0f5d1aa8a0a5ac907577e7b85b2edd58f8de19d6ac583762366be4a8a0c69ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0f5d1aa8a0a5ac907577e7b85b2edd58f8de19d6ac583762366be4a8a0c69ef9->leave($__internal_0f5d1aa8a0a5ac907577e7b85b2edd58f8de19d6ac583762366be4a8a0c69ef9_prof);

        
        $__internal_c8c97c683a5460732d9c98493bcd88e98bb0b4a940d4702ba8f6ec72a7cda0ed->leave($__internal_c8c97c683a5460732d9c98493bcd88e98bb0b4a940d4702ba8f6ec72a7cda0ed_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_301ad258df5eb73878461c9f318cc16ff78cce91179e74f2ceda8ed33bca84e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301ad258df5eb73878461c9f318cc16ff78cce91179e74f2ceda8ed33bca84e0->enter($__internal_301ad258df5eb73878461c9f318cc16ff78cce91179e74f2ceda8ed33bca84e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_39c712a83fb05025f44b316ac05cb9dc0a5c91abdd5365b4c66853792c3d9f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c712a83fb05025f44b316ac05cb9dc0a5c91abdd5365b4c66853792c3d9f8e->enter($__internal_39c712a83fb05025f44b316ac05cb9dc0a5c91abdd5365b4c66853792c3d9f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_39c712a83fb05025f44b316ac05cb9dc0a5c91abdd5365b4c66853792c3d9f8e->leave($__internal_39c712a83fb05025f44b316ac05cb9dc0a5c91abdd5365b4c66853792c3d9f8e_prof);

        
        $__internal_301ad258df5eb73878461c9f318cc16ff78cce91179e74f2ceda8ed33bca84e0->leave($__internal_301ad258df5eb73878461c9f318cc16ff78cce91179e74f2ceda8ed33bca84e0_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cf253263b23a58905cf456aca0e7f2b69d7c1c0eaf7d4968e0105ef3dd5fb81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf253263b23a58905cf456aca0e7f2b69d7c1c0eaf7d4968e0105ef3dd5fb81e->enter($__internal_cf253263b23a58905cf456aca0e7f2b69d7c1c0eaf7d4968e0105ef3dd5fb81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_cfc8fe431891343350144656175a9cc44ab1e8d9a6531b85b849b334286a714d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc8fe431891343350144656175a9cc44ab1e8d9a6531b85b849b334286a714d->enter($__internal_cfc8fe431891343350144656175a9cc44ab1e8d9a6531b85b849b334286a714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cfc8fe431891343350144656175a9cc44ab1e8d9a6531b85b849b334286a714d->leave($__internal_cfc8fe431891343350144656175a9cc44ab1e8d9a6531b85b849b334286a714d_prof);

        
        $__internal_cf253263b23a58905cf456aca0e7f2b69d7c1c0eaf7d4968e0105ef3dd5fb81e->leave($__internal_cf253263b23a58905cf456aca0e7f2b69d7c1c0eaf7d4968e0105ef3dd5fb81e_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2d14e219a8641d6dbd2eb840d1908b502e0b08aee2827bb615d2d0c8955640f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d14e219a8641d6dbd2eb840d1908b502e0b08aee2827bb615d2d0c8955640f6->enter($__internal_2d14e219a8641d6dbd2eb840d1908b502e0b08aee2827bb615d2d0c8955640f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6fe503c131fa598a371cfca0460173e98ad14e7a739fce32824c836b26e19bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe503c131fa598a371cfca0460173e98ad14e7a739fce32824c836b26e19bbf->enter($__internal_6fe503c131fa598a371cfca0460173e98ad14e7a739fce32824c836b26e19bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6fe503c131fa598a371cfca0460173e98ad14e7a739fce32824c836b26e19bbf->leave($__internal_6fe503c131fa598a371cfca0460173e98ad14e7a739fce32824c836b26e19bbf_prof);

        
        $__internal_2d14e219a8641d6dbd2eb840d1908b502e0b08aee2827bb615d2d0c8955640f6->leave($__internal_2d14e219a8641d6dbd2eb840d1908b502e0b08aee2827bb615d2d0c8955640f6_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_afc51ff54625db384849ea8c21eba62cb7d467d111d118681401087d6f6fa992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc51ff54625db384849ea8c21eba62cb7d467d111d118681401087d6f6fa992->enter($__internal_afc51ff54625db384849ea8c21eba62cb7d467d111d118681401087d6f6fa992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ea600ab983673969407b54bd148cf1be4d90213862dbfb4c7488dbb272ec4013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea600ab983673969407b54bd148cf1be4d90213862dbfb4c7488dbb272ec4013->enter($__internal_ea600ab983673969407b54bd148cf1be4d90213862dbfb4c7488dbb272ec4013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 267, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 268, $this->getSourceContext()); })()), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 269, $this->getSourceContext()); })()), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_ea600ab983673969407b54bd148cf1be4d90213862dbfb4c7488dbb272ec4013->leave($__internal_ea600ab983673969407b54bd148cf1be4d90213862dbfb4c7488dbb272ec4013_prof);

        
        $__internal_afc51ff54625db384849ea8c21eba62cb7d467d111d118681401087d6f6fa992->leave($__internal_afc51ff54625db384849ea8c21eba62cb7d467d111d118681401087d6f6fa992_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_16e6917e3e89f9cfd8009a3048b6931abb6cd793b4b947ad8138c6a5e081ecf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e6917e3e89f9cfd8009a3048b6931abb6cd793b4b947ad8138c6a5e081ecf9->enter($__internal_16e6917e3e89f9cfd8009a3048b6931abb6cd793b4b947ad8138c6a5e081ecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3a9bdb1ff74f03b6dc0b15c46daa264e9c0967d188c2e47a8b4be7a55fe84a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9bdb1ff74f03b6dc0b15c46daa264e9c0967d188c2e47a8b4be7a55fe84a5c->enter($__internal_3a9bdb1ff74f03b6dc0b15c46daa264e9c0967d188c2e47a8b4be7a55fe84a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 274, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 275, $this->getSourceContext()); })()), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 276, $this->getSourceContext()); })()), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_3a9bdb1ff74f03b6dc0b15c46daa264e9c0967d188c2e47a8b4be7a55fe84a5c->leave($__internal_3a9bdb1ff74f03b6dc0b15c46daa264e9c0967d188c2e47a8b4be7a55fe84a5c_prof);

        
        $__internal_16e6917e3e89f9cfd8009a3048b6931abb6cd793b4b947ad8138c6a5e081ecf9->leave($__internal_16e6917e3e89f9cfd8009a3048b6931abb6cd793b4b947ad8138c6a5e081ecf9_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5a7579842906d181416053dc7591e15b1c0ac0e32180c23f9df5558a9e99e2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7579842906d181416053dc7591e15b1c0ac0e32180c23f9df5558a9e99e2b5->enter($__internal_5a7579842906d181416053dc7591e15b1c0ac0e32180c23f9df5558a9e99e2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_01d020cf7f92354bfc08965778feef499bf779bff9839aa88215ee099141ea88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d020cf7f92354bfc08965778feef499bf779bff9839aa88215ee099141ea88->enter($__internal_01d020cf7f92354bfc08965778feef499bf779bff9839aa88215ee099141ea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 283, $this->getSourceContext()); })())) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 286, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_01d020cf7f92354bfc08965778feef499bf779bff9839aa88215ee099141ea88->leave($__internal_01d020cf7f92354bfc08965778feef499bf779bff9839aa88215ee099141ea88_prof);

        
        $__internal_5a7579842906d181416053dc7591e15b1c0ac0e32180c23f9df5558a9e99e2b5->leave($__internal_5a7579842906d181416053dc7591e15b1c0ac0e32180c23f9df5558a9e99e2b5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
