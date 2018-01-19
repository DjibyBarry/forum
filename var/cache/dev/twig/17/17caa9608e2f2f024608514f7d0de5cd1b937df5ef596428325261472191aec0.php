<?php

/* :user:show.html.twig */
class __TwigTemplate_9da5c1df5004444b02f669d4c2c4ef3af140122acb562d1bc24c863fee23cfa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_5d61d12441c3d65bdf4760fa10be3c129ed153c4e18f89480d9fc15721acd8f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d61d12441c3d65bdf4760fa10be3c129ed153c4e18f89480d9fc15721acd8f0->enter($__internal_5d61d12441c3d65bdf4760fa10be3c129ed153c4e18f89480d9fc15721acd8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_087a5e85741d22f6d360d770ef91278491f3416fa02e496b417d83a7468d5811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087a5e85741d22f6d360d770ef91278491f3416fa02e496b417d83a7468d5811->enter($__internal_087a5e85741d22f6d360d770ef91278491f3416fa02e496b417d83a7468d5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d61d12441c3d65bdf4760fa10be3c129ed153c4e18f89480d9fc15721acd8f0->leave($__internal_5d61d12441c3d65bdf4760fa10be3c129ed153c4e18f89480d9fc15721acd8f0_prof);

        
        $__internal_087a5e85741d22f6d360d770ef91278491f3416fa02e496b417d83a7468d5811->leave($__internal_087a5e85741d22f6d360d770ef91278491f3416fa02e496b417d83a7468d5811_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbaeff7421ff34452df5322ab843d8542435a256c89abcbe01773d468ba58942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaeff7421ff34452df5322ab843d8542435a256c89abcbe01773d468ba58942->enter($__internal_fbaeff7421ff34452df5322ab843d8542435a256c89abcbe01773d468ba58942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c36d53507842d2a4f738799754617d85ca12cf65c3f37968ec87d29d3a1a6a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36d53507842d2a4f738799754617d85ca12cf65c3f37968ec87d29d3a1a6a2f->enter($__internal_c36d53507842d2a4f738799754617d85ca12cf65c3f37968ec87d29d3a1a6a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c36d53507842d2a4f738799754617d85ca12cf65c3f37968ec87d29d3a1a6a2f->leave($__internal_c36d53507842d2a4f738799754617d85ca12cf65c3f37968ec87d29d3a1a6a2f_prof);

        
        $__internal_fbaeff7421ff34452df5322ab843d8542435a256c89abcbe01773d468ba58942->leave($__internal_fbaeff7421ff34452df5322ab843d8542435a256c89abcbe01773d468ba58942_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
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
", ":user:show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources\\views/user/show.html.twig");
    }
}
