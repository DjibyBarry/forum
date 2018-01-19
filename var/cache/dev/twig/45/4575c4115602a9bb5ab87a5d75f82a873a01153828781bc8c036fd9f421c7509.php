<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_36c706ebb21258fe8edba032cb398aca77cfe66ddfd75cc16e7e5c3ce218fb91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6703bc9c01d52e4426ee809d374ce211cfd4dc3ad7ae4c9435d8765eea7d5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6703bc9c01d52e4426ee809d374ce211cfd4dc3ad7ae4c9435d8765eea7d5fd->enter($__internal_f6703bc9c01d52e4426ee809d374ce211cfd4dc3ad7ae4c9435d8765eea7d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_345b704a7d764a1592874a0345570ee83b01031bc162995728b3e78ab7bcf6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345b704a7d764a1592874a0345570ee83b01031bc162995728b3e78ab7bcf6fe->enter($__internal_345b704a7d764a1592874a0345570ee83b01031bc162995728b3e78ab7bcf6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6703bc9c01d52e4426ee809d374ce211cfd4dc3ad7ae4c9435d8765eea7d5fd->leave($__internal_f6703bc9c01d52e4426ee809d374ce211cfd4dc3ad7ae4c9435d8765eea7d5fd_prof);

        
        $__internal_345b704a7d764a1592874a0345570ee83b01031bc162995728b3e78ab7bcf6fe->leave($__internal_345b704a7d764a1592874a0345570ee83b01031bc162995728b3e78ab7bcf6fe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05a9ac2c48a948e689d9ca1bf11b188d395c1c4410ec238fbfb9b9c9afbe8daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a9ac2c48a948e689d9ca1bf11b188d395c1c4410ec238fbfb9b9c9afbe8daf->enter($__internal_05a9ac2c48a948e689d9ca1bf11b188d395c1c4410ec238fbfb9b9c9afbe8daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a6bc82beb8d07af78a441c2de6df7eaef486dcee7517a0911463ddc186f90aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bc82beb8d07af78a441c2de6df7eaef486dcee7517a0911463ddc186f90aba->enter($__internal_a6bc82beb8d07af78a441c2de6df7eaef486dcee7517a0911463ddc186f90aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a6bc82beb8d07af78a441c2de6df7eaef486dcee7517a0911463ddc186f90aba->leave($__internal_a6bc82beb8d07af78a441c2de6df7eaef486dcee7517a0911463ddc186f90aba_prof);

        
        $__internal_05a9ac2c48a948e689d9ca1bf11b188d395c1c4410ec238fbfb9b9c9afbe8daf->leave($__internal_05a9ac2c48a948e689d9ca1bf11b188d395c1c4410ec238fbfb9b9c9afbe8daf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
