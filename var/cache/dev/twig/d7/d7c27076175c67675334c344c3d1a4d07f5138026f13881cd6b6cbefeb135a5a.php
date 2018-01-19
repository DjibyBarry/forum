<?php

/* user/show.html.twig */
class __TwigTemplate_d20da0d7839f2e8e6925b01a2b81dd9d325627cdb50bce30941be930f9f124af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2019de37002a10c413565ffa123957020326ead0f41fb92c66469172cc97610d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2019de37002a10c413565ffa123957020326ead0f41fb92c66469172cc97610d->enter($__internal_2019de37002a10c413565ffa123957020326ead0f41fb92c66469172cc97610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_cb49de0a3a1faa726e773051b8fbf084e4e6050b3164aa0b36a46127ebffc791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb49de0a3a1faa726e773051b8fbf084e4e6050b3164aa0b36a46127ebffc791->enter($__internal_cb49de0a3a1faa726e773051b8fbf084e4e6050b3164aa0b36a46127ebffc791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2019de37002a10c413565ffa123957020326ead0f41fb92c66469172cc97610d->leave($__internal_2019de37002a10c413565ffa123957020326ead0f41fb92c66469172cc97610d_prof);

        
        $__internal_cb49de0a3a1faa726e773051b8fbf084e4e6050b3164aa0b36a46127ebffc791->leave($__internal_cb49de0a3a1faa726e773051b8fbf084e4e6050b3164aa0b36a46127ebffc791_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeaafcd42b71b1d194a4c2b889b209751a49543936400c0f01de9fe3e815f50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeaafcd42b71b1d194a4c2b889b209751a49543936400c0f01de9fe3e815f50c->enter($__internal_eeaafcd42b71b1d194a4c2b889b209751a49543936400c0f01de9fe3e815f50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6389d6ec373eef4fb4791819ebd86f8d18299950f2d989e9c87ac958e9028824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6389d6ec373eef4fb4791819ebd86f8d18299950f2d989e9c87ac958e9028824->enter($__internal_6389d6ec373eef4fb4791819ebd86f8d18299950f2d989e9c87ac958e9028824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6389d6ec373eef4fb4791819ebd86f8d18299950f2d989e9c87ac958e9028824->leave($__internal_6389d6ec373eef4fb4791819ebd86f8d18299950f2d989e9c87ac958e9028824_prof);

        
        $__internal_eeaafcd42b71b1d194a4c2b889b209751a49543936400c0f01de9fe3e815f50c->leave($__internal_eeaafcd42b71b1d194a4c2b889b209751a49543936400c0f01de9fe3e815f50c_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  93 => 32,  87 => 29,  81 => 26,  71 => 19,  64 => 15,  57 => 11,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ user.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ user.prenom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_user_index') }}\">Retour à la liste</a>
        </li>
        <li>
            <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\views\\user\\show.html.twig");
    }
}
