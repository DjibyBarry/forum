<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b29e3d43fd43f588738104651b85de657cc4007bd80aec3a0cb61e74dca26891 extends Twig_Template
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
        $__internal_74749c5515a949fb68023e608d88fd9d2606c28bdfbef5f827d2bcf71845c4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74749c5515a949fb68023e608d88fd9d2606c28bdfbef5f827d2bcf71845c4d2->enter($__internal_74749c5515a949fb68023e608d88fd9d2606c28bdfbef5f827d2bcf71845c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bb7731a2b2c34b639d2cf89c592f3fc98b5fe5cf6c39b861b5d32d9022bc1f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7731a2b2c34b639d2cf89c592f3fc98b5fe5cf6c39b861b5d32d9022bc1f3b->enter($__internal_bb7731a2b2c34b639d2cf89c592f3fc98b5fe5cf6c39b861b5d32d9022bc1f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_74749c5515a949fb68023e608d88fd9d2606c28bdfbef5f827d2bcf71845c4d2->leave($__internal_74749c5515a949fb68023e608d88fd9d2606c28bdfbef5f827d2bcf71845c4d2_prof);

        
        $__internal_bb7731a2b2c34b639d2cf89c592f3fc98b5fe5cf6c39b861b5d32d9022bc1f3b->leave($__internal_bb7731a2b2c34b639d2cf89c592f3fc98b5fe5cf6c39b861b5d32d9022bc1f3b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
