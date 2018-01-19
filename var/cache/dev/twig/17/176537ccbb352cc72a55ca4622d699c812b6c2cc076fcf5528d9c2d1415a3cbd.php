<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_cdf228911b7f0163e2b598639d91216abe630b16c851c5e7f6dcc847224bdd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf228911b7f0163e2b598639d91216abe630b16c851c5e7f6dcc847224bdd3e->enter($__internal_cdf228911b7f0163e2b598639d91216abe630b16c851c5e7f6dcc847224bdd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a594a06fdb8f212911a8e3cc1e899b6b4bf59dddedb9f71b539b8f4b7b64cf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a594a06fdb8f212911a8e3cc1e899b6b4bf59dddedb9f71b539b8f4b7b64cf89->enter($__internal_a594a06fdb8f212911a8e3cc1e899b6b4bf59dddedb9f71b539b8f4b7b64cf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_cdf228911b7f0163e2b598639d91216abe630b16c851c5e7f6dcc847224bdd3e->leave($__internal_cdf228911b7f0163e2b598639d91216abe630b16c851c5e7f6dcc847224bdd3e_prof);

        
        $__internal_a594a06fdb8f212911a8e3cc1e899b6b4bf59dddedb9f71b539b8f4b7b64cf89->leave($__internal_a594a06fdb8f212911a8e3cc1e899b6b4bf59dddedb9f71b539b8f4b7b64cf89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
