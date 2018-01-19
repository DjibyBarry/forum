<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cee24180d96e954455d43bb839e8a18febedb66b3aaa641dd8bd3cb0e89dca33 extends Twig_Template
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
        $__internal_3237424ea1ab2943ebb1c7df5c2b4a00b7b3fea5d62c25b8156b5c2c37240b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3237424ea1ab2943ebb1c7df5c2b4a00b7b3fea5d62c25b8156b5c2c37240b8b->enter($__internal_3237424ea1ab2943ebb1c7df5c2b4a00b7b3fea5d62c25b8156b5c2c37240b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7f200ddfb15aeea398a2f2269699c8fa426edd835f5fad35be0b08c053ab3a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f200ddfb15aeea398a2f2269699c8fa426edd835f5fad35be0b08c053ab3a1d->enter($__internal_7f200ddfb15aeea398a2f2269699c8fa426edd835f5fad35be0b08c053ab3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_3237424ea1ab2943ebb1c7df5c2b4a00b7b3fea5d62c25b8156b5c2c37240b8b->leave($__internal_3237424ea1ab2943ebb1c7df5c2b4a00b7b3fea5d62c25b8156b5c2c37240b8b_prof);

        
        $__internal_7f200ddfb15aeea398a2f2269699c8fa426edd835f5fad35be0b08c053ab3a1d->leave($__internal_7f200ddfb15aeea398a2f2269699c8fa426edd835f5fad35be0b08c053ab3a1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
