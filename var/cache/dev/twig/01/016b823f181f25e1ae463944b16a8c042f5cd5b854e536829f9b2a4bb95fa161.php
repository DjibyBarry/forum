<?php

/* :user:index.html.twig */
class __TwigTemplate_ed000deeed32dcc4bea52369b049ae0afe4e1c782860076ec73340a9806e3aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_10ba9bb9c67c4c435e54782706818e9d7cb3e72ea0c48c49bc229e3e218848b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ba9bb9c67c4c435e54782706818e9d7cb3e72ea0c48c49bc229e3e218848b3->enter($__internal_10ba9bb9c67c4c435e54782706818e9d7cb3e72ea0c48c49bc229e3e218848b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_8716c1cc1c5a00758d0d48a0613a7eda6aac336a10ebb1c8e55279572c70fd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8716c1cc1c5a00758d0d48a0613a7eda6aac336a10ebb1c8e55279572c70fd7c->enter($__internal_8716c1cc1c5a00758d0d48a0613a7eda6aac336a10ebb1c8e55279572c70fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ba9bb9c67c4c435e54782706818e9d7cb3e72ea0c48c49bc229e3e218848b3->leave($__internal_10ba9bb9c67c4c435e54782706818e9d7cb3e72ea0c48c49bc229e3e218848b3_prof);

        
        $__internal_8716c1cc1c5a00758d0d48a0613a7eda6aac336a10ebb1c8e55279572c70fd7c->leave($__internal_8716c1cc1c5a00758d0d48a0613a7eda6aac336a10ebb1c8e55279572c70fd7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc16f31d0e8206983afff28457fb03a55e1f83b811591d7dc9f97f56bce7791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc16f31d0e8206983afff28457fb03a55e1f83b811591d7dc9f97f56bce7791->enter($__internal_cfc16f31d0e8206983afff28457fb03a55e1f83b811591d7dc9f97f56bce7791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11054af5b437948a6c04f1b73485daafa67db5ac8d21abb963d4f42553195f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11054af5b437948a6c04f1b73485daafa67db5ac8d21abb963d4f42553195f62->enter($__internal_11054af5b437948a6c04f1b73485daafa67db5ac8d21abb963d4f42553195f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1> Liste des utilisateurs </h1>
<ul>
      <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_new");
        echo "\"><button type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\"></i> Ajouter un utilisateur </button></a>

    </ul>

    <table class=\"table\">
         <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Pseudo</th>
                <th scope=\"col\">email</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>


";
        
        $__internal_11054af5b437948a6c04f1b73485daafa67db5ac8d21abb963d4f42553195f62->leave($__internal_11054af5b437948a6c04f1b73485daafa67db5ac8d21abb963d4f42553195f62_prof);

        
        $__internal_cfc16f31d0e8206983afff28457fb03a55e1f83b811591d7dc9f97f56bce7791->leave($__internal_cfc16f31d0e8206983afff28457fb03a55e1f83b811591d7dc9f97f56bce7791_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  110 => 35,  104 => 32,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  79 => 24,  76 => 23,  72 => 22,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block body %}
    <h1> Liste des utilisateurs </h1>
<ul>
      <a href=\"{{ path('admin_user_new') }}\"><button type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\"></i> Ajouter un utilisateur </button></a>

    </ul>

    <table class=\"table\">
         <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Pseudo</th>
                <th scope=\"col\">email</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.email}}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">Voir</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\">Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", ":user:index.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources\\views/user/index.html.twig");
    }
}
