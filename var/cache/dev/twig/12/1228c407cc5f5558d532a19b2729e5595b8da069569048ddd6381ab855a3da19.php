<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ad25e4e008bfaf7d716cab14e1f42eb67fe05ebf2e28e7032bb5f9f646e86552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a03e1cd7828f6a17488081c54a79ca40e283b7dd27e5db9db007f3a39521c3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03e1cd7828f6a17488081c54a79ca40e283b7dd27e5db9db007f3a39521c3ca->enter($__internal_a03e1cd7828f6a17488081c54a79ca40e283b7dd27e5db9db007f3a39521c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_15ce50040a9e82dad6c72e401b6d09365a277142b09393be923962d8663d1a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ce50040a9e82dad6c72e401b6d09365a277142b09393be923962d8663d1a22->enter($__internal_15ce50040a9e82dad6c72e401b6d09365a277142b09393be923962d8663d1a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a03e1cd7828f6a17488081c54a79ca40e283b7dd27e5db9db007f3a39521c3ca->leave($__internal_a03e1cd7828f6a17488081c54a79ca40e283b7dd27e5db9db007f3a39521c3ca_prof);

        
        $__internal_15ce50040a9e82dad6c72e401b6d09365a277142b09393be923962d8663d1a22->leave($__internal_15ce50040a9e82dad6c72e401b6d09365a277142b09393be923962d8663d1a22_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a2b25f305e226a7eb867da2fd64ffdd809d545904dc00fc81cf366a9e4e6dc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b25f305e226a7eb867da2fd64ffdd809d545904dc00fc81cf366a9e4e6dc33->enter($__internal_a2b25f305e226a7eb867da2fd64ffdd809d545904dc00fc81cf366a9e4e6dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9b6fccc0d67bb7dab2587410aab23d30f47004485f3a1a5e0072a35572bb40c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6fccc0d67bb7dab2587410aab23d30f47004485f3a1a5e0072a35572bb40c1->enter($__internal_9b6fccc0d67bb7dab2587410aab23d30f47004485f3a1a5e0072a35572bb40c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9b6fccc0d67bb7dab2587410aab23d30f47004485f3a1a5e0072a35572bb40c1->leave($__internal_9b6fccc0d67bb7dab2587410aab23d30f47004485f3a1a5e0072a35572bb40c1_prof);

        
        $__internal_a2b25f305e226a7eb867da2fd64ffdd809d545904dc00fc81cf366a9e4e6dc33->leave($__internal_a2b25f305e226a7eb867da2fd64ffdd809d545904dc00fc81cf366a9e4e6dc33_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f683f58a5f9d9bfab7199e0c866ea26fdbec694237f60db38b2c55cbc58b969f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f683f58a5f9d9bfab7199e0c866ea26fdbec694237f60db38b2c55cbc58b969f->enter($__internal_f683f58a5f9d9bfab7199e0c866ea26fdbec694237f60db38b2c55cbc58b969f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bd2bf5f2164a7da52d278dea004d25bf5e73c8bad59fb57cf8583531d27fbee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2bf5f2164a7da52d278dea004d25bf5e73c8bad59fb57cf8583531d27fbee6->enter($__internal_bd2bf5f2164a7da52d278dea004d25bf5e73c8bad59fb57cf8583531d27fbee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd2bf5f2164a7da52d278dea004d25bf5e73c8bad59fb57cf8583531d27fbee6->leave($__internal_bd2bf5f2164a7da52d278dea004d25bf5e73c8bad59fb57cf8583531d27fbee6_prof);

        
        $__internal_f683f58a5f9d9bfab7199e0c866ea26fdbec694237f60db38b2c55cbc58b969f->leave($__internal_f683f58a5f9d9bfab7199e0c866ea26fdbec694237f60db38b2c55cbc58b969f_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cc82a14e01bcb8c5a46a2c0faba41c4ddb2f414a0bc655afd78887f6d54c91eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc82a14e01bcb8c5a46a2c0faba41c4ddb2f414a0bc655afd78887f6d54c91eb->enter($__internal_cc82a14e01bcb8c5a46a2c0faba41c4ddb2f414a0bc655afd78887f6d54c91eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e6b1dc86fd7a1475e029e532b4624191d7cbb022bc55aac5b9fe7eba69a1b965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1dc86fd7a1475e029e532b4624191d7cbb022bc55aac5b9fe7eba69a1b965->enter($__internal_e6b1dc86fd7a1475e029e532b4624191d7cbb022bc55aac5b9fe7eba69a1b965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_e6b1dc86fd7a1475e029e532b4624191d7cbb022bc55aac5b9fe7eba69a1b965->leave($__internal_e6b1dc86fd7a1475e029e532b4624191d7cbb022bc55aac5b9fe7eba69a1b965_prof);

        
        $__internal_cc82a14e01bcb8c5a46a2c0faba41c4ddb2f414a0bc655afd78887f6d54c91eb->leave($__internal_cc82a14e01bcb8c5a46a2c0faba41c4ddb2f414a0bc655afd78887f6d54c91eb_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e50894cfae9912c0c66cb9c8d42b3cdce387cb5660ce453960ccd311c67bab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e50894cfae9912c0c66cb9c8d42b3cdce387cb5660ce453960ccd311c67bab5->enter($__internal_7e50894cfae9912c0c66cb9c8d42b3cdce387cb5660ce453960ccd311c67bab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_082baf14c7ea194acda1018c0d869bfe8c54f859dd2fef939456aae341c79754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082baf14c7ea194acda1018c0d869bfe8c54f859dd2fef939456aae341c79754->enter($__internal_082baf14c7ea194acda1018c0d869bfe8c54f859dd2fef939456aae341c79754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_082baf14c7ea194acda1018c0d869bfe8c54f859dd2fef939456aae341c79754->leave($__internal_082baf14c7ea194acda1018c0d869bfe8c54f859dd2fef939456aae341c79754_prof);

        
        $__internal_7e50894cfae9912c0c66cb9c8d42b3cdce387cb5660ce453960ccd311c67bab5->leave($__internal_7e50894cfae9912c0c66cb9c8d42b3cdce387cb5660ce453960ccd311c67bab5_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1f059ec0108f22fe398be41632aba8c1061ae12d86847cc8d1f08d6875c50e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f059ec0108f22fe398be41632aba8c1061ae12d86847cc8d1f08d6875c50e5b->enter($__internal_1f059ec0108f22fe398be41632aba8c1061ae12d86847cc8d1f08d6875c50e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_039115853b6e4d6b3304606ef16065eab072e42e0b650db1f5836f38121a97e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039115853b6e4d6b3304606ef16065eab072e42e0b650db1f5836f38121a97e7->enter($__internal_039115853b6e4d6b3304606ef16065eab072e42e0b650db1f5836f38121a97e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_039115853b6e4d6b3304606ef16065eab072e42e0b650db1f5836f38121a97e7->leave($__internal_039115853b6e4d6b3304606ef16065eab072e42e0b650db1f5836f38121a97e7_prof);

        
        $__internal_1f059ec0108f22fe398be41632aba8c1061ae12d86847cc8d1f08d6875c50e5b->leave($__internal_1f059ec0108f22fe398be41632aba8c1061ae12d86847cc8d1f08d6875c50e5b_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2ffdea76d1bac58f5a6bb95749b705cb7f66482131d1ca6c6e786f7dce78950c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffdea76d1bac58f5a6bb95749b705cb7f66482131d1ca6c6e786f7dce78950c->enter($__internal_2ffdea76d1bac58f5a6bb95749b705cb7f66482131d1ca6c6e786f7dce78950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_85f8f69777c51fad6cf23370343cf3042eac67a782dacd79aa21d3d728ae5e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f8f69777c51fad6cf23370343cf3042eac67a782dacd79aa21d3d728ae5e96->enter($__internal_85f8f69777c51fad6cf23370343cf3042eac67a782dacd79aa21d3d728ae5e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_85f8f69777c51fad6cf23370343cf3042eac67a782dacd79aa21d3d728ae5e96->leave($__internal_85f8f69777c51fad6cf23370343cf3042eac67a782dacd79aa21d3d728ae5e96_prof);

        
        $__internal_2ffdea76d1bac58f5a6bb95749b705cb7f66482131d1ca6c6e786f7dce78950c->leave($__internal_2ffdea76d1bac58f5a6bb95749b705cb7f66482131d1ca6c6e786f7dce78950c_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_8bffbce4e425a1c52de92980eaa2010c7675fd74834c125ebef9d3ce951011cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bffbce4e425a1c52de92980eaa2010c7675fd74834c125ebef9d3ce951011cb->enter($__internal_8bffbce4e425a1c52de92980eaa2010c7675fd74834c125ebef9d3ce951011cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_24136f7c1da9d5a6c38f5cb87af90eb847dd9578883cb1d0479cf9dd2a4b30ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24136f7c1da9d5a6c38f5cb87af90eb847dd9578883cb1d0479cf9dd2a4b30ce->enter($__internal_24136f7c1da9d5a6c38f5cb87af90eb847dd9578883cb1d0479cf9dd2a4b30ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_24136f7c1da9d5a6c38f5cb87af90eb847dd9578883cb1d0479cf9dd2a4b30ce->leave($__internal_24136f7c1da9d5a6c38f5cb87af90eb847dd9578883cb1d0479cf9dd2a4b30ce_prof);

        
        $__internal_8bffbce4e425a1c52de92980eaa2010c7675fd74834c125ebef9d3ce951011cb->leave($__internal_8bffbce4e425a1c52de92980eaa2010c7675fd74834c125ebef9d3ce951011cb_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9737aaf20eea77e38d3feba060c9dd49fe29a5726835e4e8bbfe19377706fc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9737aaf20eea77e38d3feba060c9dd49fe29a5726835e4e8bbfe19377706fc01->enter($__internal_9737aaf20eea77e38d3feba060c9dd49fe29a5726835e4e8bbfe19377706fc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_03b756c412d163d42de17f091b23b496a30e5988eb1845c41bb11f173372f8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b756c412d163d42de17f091b23b496a30e5988eb1845c41bb11f173372f8a8->enter($__internal_03b756c412d163d42de17f091b23b496a30e5988eb1845c41bb11f173372f8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03b756c412d163d42de17f091b23b496a30e5988eb1845c41bb11f173372f8a8->leave($__internal_03b756c412d163d42de17f091b23b496a30e5988eb1845c41bb11f173372f8a8_prof);

        
        $__internal_9737aaf20eea77e38d3feba060c9dd49fe29a5726835e4e8bbfe19377706fc01->leave($__internal_9737aaf20eea77e38d3feba060c9dd49fe29a5726835e4e8bbfe19377706fc01_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_22e1443efa0fded560635e5149228581fadba04ffe3492871c01b3142fff442c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e1443efa0fded560635e5149228581fadba04ffe3492871c01b3142fff442c->enter($__internal_22e1443efa0fded560635e5149228581fadba04ffe3492871c01b3142fff442c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4a007a40f348a809d95fe9b578a5424237305cbe1089c6b26e7451633ce63b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a007a40f348a809d95fe9b578a5424237305cbe1089c6b26e7451633ce63b49->enter($__internal_4a007a40f348a809d95fe9b578a5424237305cbe1089c6b26e7451633ce63b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4a007a40f348a809d95fe9b578a5424237305cbe1089c6b26e7451633ce63b49->leave($__internal_4a007a40f348a809d95fe9b578a5424237305cbe1089c6b26e7451633ce63b49_prof);

        
        $__internal_22e1443efa0fded560635e5149228581fadba04ffe3492871c01b3142fff442c->leave($__internal_22e1443efa0fded560635e5149228581fadba04ffe3492871c01b3142fff442c_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7e4ebfb1959c7049e73d3b796e85aabac6cd68acd16359b5289c040137966811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4ebfb1959c7049e73d3b796e85aabac6cd68acd16359b5289c040137966811->enter($__internal_7e4ebfb1959c7049e73d3b796e85aabac6cd68acd16359b5289c040137966811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_389fed2e90182f97f910ea9d409a573a56bb35b2425be7ce9ca03f7475d7195e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389fed2e90182f97f910ea9d409a573a56bb35b2425be7ce9ca03f7475d7195e->enter($__internal_389fed2e90182f97f910ea9d409a573a56bb35b2425be7ce9ca03f7475d7195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_389fed2e90182f97f910ea9d409a573a56bb35b2425be7ce9ca03f7475d7195e->leave($__internal_389fed2e90182f97f910ea9d409a573a56bb35b2425be7ce9ca03f7475d7195e_prof);

        
        $__internal_7e4ebfb1959c7049e73d3b796e85aabac6cd68acd16359b5289c040137966811->leave($__internal_7e4ebfb1959c7049e73d3b796e85aabac6cd68acd16359b5289c040137966811_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
