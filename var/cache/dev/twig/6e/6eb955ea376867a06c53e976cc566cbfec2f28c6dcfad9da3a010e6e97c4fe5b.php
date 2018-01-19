<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_14f9ccedbf74cb165f3b78ae2d2c1599792c31d6cd6bb961c9d0e4934277b44b extends Twig_Template
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
        $__internal_df5dce80f5509354d45898996b778b5955e3375242226afdc51e58eff72f9d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5dce80f5509354d45898996b778b5955e3375242226afdc51e58eff72f9d14->enter($__internal_df5dce80f5509354d45898996b778b5955e3375242226afdc51e58eff72f9d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_179a591b2382cc06b9392adee23edc512b5fb5a20bad8f47fe6ddef5a675b0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179a591b2382cc06b9392adee23edc512b5fb5a20bad8f47fe6ddef5a675b0fa->enter($__internal_179a591b2382cc06b9392adee23edc512b5fb5a20bad8f47fe6ddef5a675b0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_df5dce80f5509354d45898996b778b5955e3375242226afdc51e58eff72f9d14->leave($__internal_df5dce80f5509354d45898996b778b5955e3375242226afdc51e58eff72f9d14_prof);

        
        $__internal_179a591b2382cc06b9392adee23edc512b5fb5a20bad8f47fe6ddef5a675b0fa->leave($__internal_179a591b2382cc06b9392adee23edc512b5fb5a20bad8f47fe6ddef5a675b0fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
