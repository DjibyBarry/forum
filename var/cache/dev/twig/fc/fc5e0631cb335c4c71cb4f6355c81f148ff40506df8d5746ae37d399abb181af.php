<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8e55104425ac4768b0f4a197a915138c03f4cc805841fdbc6b03de8a4ee9fa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb974130395aad86d1161b9a4d873074396b39fd2cd66a61ee7e3a5587cd1ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb974130395aad86d1161b9a4d873074396b39fd2cd66a61ee7e3a5587cd1ab8->enter($__internal_cb974130395aad86d1161b9a4d873074396b39fd2cd66a61ee7e3a5587cd1ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fd61c33c4c740c1b696ddb0dd5e070aa8ab5fdce9d219fa30d18e46b9ca6261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd61c33c4c740c1b696ddb0dd5e070aa8ab5fdce9d219fa30d18e46b9ca6261c->enter($__internal_fd61c33c4c740c1b696ddb0dd5e070aa8ab5fdce9d219fa30d18e46b9ca6261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cb974130395aad86d1161b9a4d873074396b39fd2cd66a61ee7e3a5587cd1ab8->leave($__internal_cb974130395aad86d1161b9a4d873074396b39fd2cd66a61ee7e3a5587cd1ab8_prof);

        
        $__internal_fd61c33c4c740c1b696ddb0dd5e070aa8ab5fdce9d219fa30d18e46b9ca6261c->leave($__internal_fd61c33c4c740c1b696ddb0dd5e070aa8ab5fdce9d219fa30d18e46b9ca6261c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_657537f4efc915dcd14afa5900b3d9eff0c1436a096834c0dd7fab055ab7f22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657537f4efc915dcd14afa5900b3d9eff0c1436a096834c0dd7fab055ab7f22a->enter($__internal_657537f4efc915dcd14afa5900b3d9eff0c1436a096834c0dd7fab055ab7f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2f1e99d39638c712ac386a6a8f18975000e78a49fb312e1d111a04925e4edef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f1e99d39638c712ac386a6a8f18975000e78a49fb312e1d111a04925e4edef->enter($__internal_d2f1e99d39638c712ac386a6a8f18975000e78a49fb312e1d111a04925e4edef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d2f1e99d39638c712ac386a6a8f18975000e78a49fb312e1d111a04925e4edef->leave($__internal_d2f1e99d39638c712ac386a6a8f18975000e78a49fb312e1d111a04925e4edef_prof);

        
        $__internal_657537f4efc915dcd14afa5900b3d9eff0c1436a096834c0dd7fab055ab7f22a->leave($__internal_657537f4efc915dcd14afa5900b3d9eff0c1436a096834c0dd7fab055ab7f22a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_837424db69e0cdcdd384eb0e6851f2061adcd19850111670a18d9cd5ca78f529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837424db69e0cdcdd384eb0e6851f2061adcd19850111670a18d9cd5ca78f529->enter($__internal_837424db69e0cdcdd384eb0e6851f2061adcd19850111670a18d9cd5ca78f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce55e3219c8d43361fc617799cf151db94d1c5c301d972e1e36500b6116d0f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce55e3219c8d43361fc617799cf151db94d1c5c301d972e1e36500b6116d0f83->enter($__internal_ce55e3219c8d43361fc617799cf151db94d1c5c301d972e1e36500b6116d0f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ce55e3219c8d43361fc617799cf151db94d1c5c301d972e1e36500b6116d0f83->leave($__internal_ce55e3219c8d43361fc617799cf151db94d1c5c301d972e1e36500b6116d0f83_prof);

        
        $__internal_837424db69e0cdcdd384eb0e6851f2061adcd19850111670a18d9cd5ca78f529->leave($__internal_837424db69e0cdcdd384eb0e6851f2061adcd19850111670a18d9cd5ca78f529_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6156c13a09d5a0a017673487d1e8690ceba40f718937b79a436805dbbff5961f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6156c13a09d5a0a017673487d1e8690ceba40f718937b79a436805dbbff5961f->enter($__internal_6156c13a09d5a0a017673487d1e8690ceba40f718937b79a436805dbbff5961f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f74bfc67060d58f5fb713d61224866bbfc593583abfec959acedb6cb73feb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f74bfc67060d58f5fb713d61224866bbfc593583abfec959acedb6cb73feb5c->enter($__internal_1f74bfc67060d58f5fb713d61224866bbfc593583abfec959acedb6cb73feb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f74bfc67060d58f5fb713d61224866bbfc593583abfec959acedb6cb73feb5c->leave($__internal_1f74bfc67060d58f5fb713d61224866bbfc593583abfec959acedb6cb73feb5c_prof);

        
        $__internal_6156c13a09d5a0a017673487d1e8690ceba40f718937b79a436805dbbff5961f->leave($__internal_6156c13a09d5a0a017673487d1e8690ceba40f718937b79a436805dbbff5961f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
