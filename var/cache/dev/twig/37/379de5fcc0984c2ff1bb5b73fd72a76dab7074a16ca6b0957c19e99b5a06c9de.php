<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_83052f55dc0a5dca7367c098ddd0c0607437718f1257f64d82119a4bd3c3f7ff extends Twig_Template
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
        $__internal_4d50a205d366e1f504d5a1e5f2bcb353f83c2aacbc2c4fe9fa6430faf27dd6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d50a205d366e1f504d5a1e5f2bcb353f83c2aacbc2c4fe9fa6430faf27dd6c1->enter($__internal_4d50a205d366e1f504d5a1e5f2bcb353f83c2aacbc2c4fe9fa6430faf27dd6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_93da4987711ec965e641d5f560c2fc135b177e479ee0d798fea844ef83fe8f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93da4987711ec965e641d5f560c2fc135b177e479ee0d798fea844ef83fe8f4d->enter($__internal_93da4987711ec965e641d5f560c2fc135b177e479ee0d798fea844ef83fe8f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

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
        
        $__internal_4d50a205d366e1f504d5a1e5f2bcb353f83c2aacbc2c4fe9fa6430faf27dd6c1->leave($__internal_4d50a205d366e1f504d5a1e5f2bcb353f83c2aacbc2c4fe9fa6430faf27dd6c1_prof);

        
        $__internal_93da4987711ec965e641d5f560c2fc135b177e479ee0d798fea844ef83fe8f4d->leave($__internal_93da4987711ec965e641d5f560c2fc135b177e479ee0d798fea844ef83fe8f4d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
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
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
