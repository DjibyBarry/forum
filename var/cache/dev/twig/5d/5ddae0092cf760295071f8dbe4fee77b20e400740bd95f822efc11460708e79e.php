<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a7ba78300f2d384d1a8293a933612a7c4886972b819864d4c080f9e47f5f52d9 extends Twig_Template
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
        $__internal_c7fedcd46c6611a00ff26f95e383bcadabe8b96dd1d71cc55cc5e6b8d7c62fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fedcd46c6611a00ff26f95e383bcadabe8b96dd1d71cc55cc5e6b8d7c62fbc->enter($__internal_c7fedcd46c6611a00ff26f95e383bcadabe8b96dd1d71cc55cc5e6b8d7c62fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6cf92195593aeab39c0ba7c6f4b7efde12fc4fadb77b84841a768e6fa69c56d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf92195593aeab39c0ba7c6f4b7efde12fc4fadb77b84841a768e6fa69c56d3->enter($__internal_6cf92195593aeab39c0ba7c6f4b7efde12fc4fadb77b84841a768e6fa69c56d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c7fedcd46c6611a00ff26f95e383bcadabe8b96dd1d71cc55cc5e6b8d7c62fbc->leave($__internal_c7fedcd46c6611a00ff26f95e383bcadabe8b96dd1d71cc55cc5e6b8d7c62fbc_prof);

        
        $__internal_6cf92195593aeab39c0ba7c6f4b7efde12fc4fadb77b84841a768e6fa69c56d3->leave($__internal_6cf92195593aeab39c0ba7c6f4b7efde12fc4fadb77b84841a768e6fa69c56d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
