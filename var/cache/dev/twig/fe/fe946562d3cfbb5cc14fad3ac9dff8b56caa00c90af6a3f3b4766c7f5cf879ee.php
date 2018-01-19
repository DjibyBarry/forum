<?php

/* @User/categoriesAdmin/index.html.twig */
class __TwigTemplate_edd3d1f28730fb85bc67a94fbc8b5a5a31ccf36a21fd4e06f67703e3773254a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/categoriesAdmin/index.html.twig", 1);
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
        $__internal_31260f22bff11dbda9562ceeb860622eb5d47fc7b5ccf4b4e6f7dffc6afb22c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31260f22bff11dbda9562ceeb860622eb5d47fc7b5ccf4b4e6f7dffc6afb22c3->enter($__internal_31260f22bff11dbda9562ceeb860622eb5d47fc7b5ccf4b4e6f7dffc6afb22c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/index.html.twig"));

        $__internal_b61bb23e439ce521c8d783c47bdc0caa2d5a018dd5f98cc106571c9a35489a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61bb23e439ce521c8d783c47bdc0caa2d5a018dd5f98cc106571c9a35489a56->enter($__internal_b61bb23e439ce521c8d783c47bdc0caa2d5a018dd5f98cc106571c9a35489a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31260f22bff11dbda9562ceeb860622eb5d47fc7b5ccf4b4e6f7dffc6afb22c3->leave($__internal_31260f22bff11dbda9562ceeb860622eb5d47fc7b5ccf4b4e6f7dffc6afb22c3_prof);

        
        $__internal_b61bb23e439ce521c8d783c47bdc0caa2d5a018dd5f98cc106571c9a35489a56->leave($__internal_b61bb23e439ce521c8d783c47bdc0caa2d5a018dd5f98cc106571c9a35489a56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbc3740f838f4d1f49c7f83a0e2507d8db1c62300abe063b306c718eabf07c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbc3740f838f4d1f49c7f83a0e2507d8db1c62300abe063b306c718eabf07c9->enter($__internal_1cbc3740f838f4d1f49c7f83a0e2507d8db1c62300abe063b306c718eabf07c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9109a0a0e4bcf5420658eab89726538dcc3901a008ecc07223e27101c8cba53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9109a0a0e4bcf5420658eab89726538dcc3901a008ecc07223e27101c8cba53->enter($__internal_d9109a0a0e4bcf5420658eab89726538dcc3901a008ecc07223e27101c8cba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Les Categories </h1>
<ul>
      <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_New");
        echo "\"><button type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\"></i> Ajouter une catégorie </button></a>

    </ul>

    <table class=\"table\">
         <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Actions</th>
                <th scope=\"col\"> Exporter en XML </th>
                <th scope=\"col\"> Exporter en JSON </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 22
            echo "            <tr>

                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "nom", array()), "html", null, true);
            echo "</td>

                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
                </td>
                <td><a class=\"btn btn-info\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newxml", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "nom", array()))), "html", null, true);
            echo "\">Exporter en XML</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newjson", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "nom", array()))), "html", null, true);
            echo "\">Exporter en JSON</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>


";
        
        $__internal_d9109a0a0e4bcf5420658eab89726538dcc3901a008ecc07223e27101c8cba53->leave($__internal_d9109a0a0e4bcf5420658eab89726538dcc3901a008ecc07223e27101c8cba53_prof);

        
        $__internal_1cbc3740f838f4d1f49c7f83a0e2507d8db1c62300abe063b306c718eabf07c9->leave($__internal_1cbc3740f838f4d1f49c7f83a0e2507d8db1c62300abe063b306c718eabf07c9_prof);

    }

    public function getTemplateName()
    {
        return "@User/categoriesAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  108 => 38,  104 => 37,  97 => 33,  91 => 30,  83 => 25,  79 => 24,  75 => 22,  71 => 21,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block body %}
    <h1>Les Categories </h1>
<ul>
      <a href=\"{{ path('adminCat_New') }}\"><button type=\"button\" class=\"btn btn-info\"><i class=\"fa fa-plus\"></i> Ajouter une catégorie </button></a>

    </ul>

    <table class=\"table\">
         <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Actions</th>
                <th scope=\"col\"> Exporter en XML </th>
                <th scope=\"col\"> Exporter en JSON </th>
            </tr>
        </thead>
        <tbody>
        {% for cat in categories %}
            <tr>

                <td>{{ cat.id }}</td>
                <td>{{ cat.nom }}</td>

                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('adminCat_show', { 'id': cat.id }) }}\">Voir</a>
                    </li>
                    <li>
                        <a href=\"{{ path('adminCat_edit', { 'id': cat.id }) }}\">Modifier</a>
                    </li>
                </ul>
                </td>
                <td><a class=\"btn btn-info\" href=\"{{ path('newxml', { 'nomCategorie': cat.nom }) }}\">Exporter en XML</a></td>
                <td><a class=\"btn btn-danger\" href=\"{{ path('newjson', { 'nomCategorie': cat.nom }) }}\">Exporter en JSON</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "@User/categoriesAdmin/index.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\categoriesAdmin\\index.html.twig");
    }
}
