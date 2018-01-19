<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_5b14be5c81b787b86640686492e54def98d95435c3d2231ae123368b44e18e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b345d461bfca728ced14a760ec194edfba9ca5f6ea9b5becba3dbe5cfc08840a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b345d461bfca728ced14a760ec194edfba9ca5f6ea9b5becba3dbe5cfc08840a->enter($__internal_b345d461bfca728ced14a760ec194edfba9ca5f6ea9b5becba3dbe5cfc08840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_1dfd8b38e3766ba39f262aad792fe011b8eedfee673534a5a26a1ee94ac755c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfd8b38e3766ba39f262aad792fe011b8eedfee673534a5a26a1ee94ac755c1->enter($__internal_1dfd8b38e3766ba39f262aad792fe011b8eedfee673534a5a26a1ee94ac755c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b345d461bfca728ced14a760ec194edfba9ca5f6ea9b5becba3dbe5cfc08840a->leave($__internal_b345d461bfca728ced14a760ec194edfba9ca5f6ea9b5becba3dbe5cfc08840a_prof);

        
        $__internal_1dfd8b38e3766ba39f262aad792fe011b8eedfee673534a5a26a1ee94ac755c1->leave($__internal_1dfd8b38e3766ba39f262aad792fe011b8eedfee673534a5a26a1ee94ac755c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e8027cc99e08d3d601b6a7b8ce4f9e53a3efceb7c33d2ee2148b189bd8582b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8027cc99e08d3d601b6a7b8ce4f9e53a3efceb7c33d2ee2148b189bd8582b9->enter($__internal_6e8027cc99e08d3d601b6a7b8ce4f9e53a3efceb7c33d2ee2148b189bd8582b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce0134f41030d0d8f43a30a4a7fac80aee029dc587971715f9877e24b19ea124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0134f41030d0d8f43a30a4a7fac80aee029dc587971715f9877e24b19ea124->enter($__internal_ce0134f41030d0d8f43a30a4a7fac80aee029dc587971715f9877e24b19ea124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_ce0134f41030d0d8f43a30a4a7fac80aee029dc587971715f9877e24b19ea124->leave($__internal_ce0134f41030d0d8f43a30a4a7fac80aee029dc587971715f9877e24b19ea124_prof);

        
        $__internal_6e8027cc99e08d3d601b6a7b8ce4f9e53a3efceb7c33d2ee2148b189bd8582b9->leave($__internal_6e8027cc99e08d3d601b6a7b8ce4f9e53a3efceb7c33d2ee2148b189bd8582b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3ff84d1f8efc40f101e559cac4205f1005fe08dc0201e9a6d3dbaa5c8044e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ff84d1f8efc40f101e559cac4205f1005fe08dc0201e9a6d3dbaa5c8044e25->enter($__internal_a3ff84d1f8efc40f101e559cac4205f1005fe08dc0201e9a6d3dbaa5c8044e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e5c3cfbb8f51bf451f5c0a87fe3ec0faf3f3886037e31d70c67388f080fa7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5c3cfbb8f51bf451f5c0a87fe3ec0faf3f3886037e31d70c67388f080fa7cb->enter($__internal_0e5c3cfbb8f51bf451f5c0a87fe3ec0faf3f3886037e31d70c67388f080fa7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 8
        echo "
";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "
<div class=\"alert alert-success\" role=\"alert\">
  Vous êtes connecté en administrateur!
</div>


<div class=\"jumbotron jumbotron-fluid\">

  <div class=\"container\">
    <h1 class=\"display-4\">Espace Administrateur</h1>
    <p class=\"lead\">Vous pouvez:
    <ul>
    <li>Consulter </li>
    <li>Modifier </li>
    <li>Supprimer </li>
    </ul></p>

<div class=\"dropdown show\">
  <a class=\"btn btn-warning dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Voir
  </a>

  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
    <a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
            echo "\">Utilisateurs</a>
    <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_index");
            echo "\">Catégories</a>
  </div>
</div>

</div>
</div>

</div>
</div>


";
        } else {
            // line 46
            echo "


    <table class=\"table table-striped\" style=\"margin-top: 40px;\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\"> Sujet </th>
          <th scope=\"col\"> Catégorie </th>
          <th scope=\"col\"> Auteur </th>
          <th scope=\"col\"> Date </th>
        </tr>
      </thead>
      <tbody>

            ";
            // line 61
            $context["number"] = 1;
            // line 62
            echo "
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listPosts"]) || array_key_exists("listPosts", $context) ? $context["listPosts"] : (function () { throw new Twig_Error_Runtime('Variable "listPosts" does not exist.', 63, $this->getSourceContext()); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 64
                echo "
                <tr>
                  <th scope=\"row\"> ";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo " </th>
                  <td> <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "titre", array()), "html", null, true);
                echo "  </a> </td>
                  <td> <a href=\"#\"> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categorie", array()), "html", null, true);
                echo "  </a> </td>
                  <td> <a href=\"#\"> ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "auteur", array()), "html", null, true);
                echo "  </a> </td>
                  <td> <a href=\"#\"> ";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "date", array()), "d-m-Y"), "html", null, true);
                echo "  </a> </td>
                </tr>

            ";
                // line 73
                $context["number"] = ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 73, $this->getSourceContext()); })()) + 1);
                // line 74
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 75
                echo "
             <tr> <td> Il n'y a pas encore de sujet dans cette catégorie </td> </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "               

      </tbody>
    </table>


";
        }
        // line 85
        echo "
";
        
        $__internal_0e5c3cfbb8f51bf451f5c0a87fe3ec0faf3f3886037e31d70c67388f080fa7cb->leave($__internal_0e5c3cfbb8f51bf451f5c0a87fe3ec0faf3f3886037e31d70c67388f080fa7cb_prof);

        
        $__internal_a3ff84d1f8efc40f101e559cac4205f1005fe08dc0201e9a6d3dbaa5c8044e25->leave($__internal_a3ff84d1f8efc40f101e559cac4205f1005fe08dc0201e9a6d3dbaa5c8044e25_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 85,  191 => 78,  182 => 75,  177 => 74,  175 => 73,  169 => 70,  165 => 69,  161 => 68,  155 => 67,  151 => 66,  147 => 64,  142 => 63,  139 => 62,  137 => 61,  120 => 46,  105 => 34,  101 => 33,  76 => 10,  74 => 9,  71 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Accueil {% endblock %}

{% block body %}

{# si l'utilisateur est connecté en admin interface admin affiché sinon message de bienvenue seul!#}

{% if is_granted('ROLE_ADMIN') %}

<div class=\"alert alert-success\" role=\"alert\">
  Vous êtes connecté en administrateur!
</div>


<div class=\"jumbotron jumbotron-fluid\">

  <div class=\"container\">
    <h1 class=\"display-4\">Espace Administrateur</h1>
    <p class=\"lead\">Vous pouvez:
    <ul>
    <li>Consulter </li>
    <li>Modifier </li>
    <li>Supprimer </li>
    </ul></p>

<div class=\"dropdown show\">
  <a class=\"btn btn-warning dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Voir
  </a>

  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
    <a class=\"dropdown-item\" href=\"{{ path('admin_user_index') }}\">Utilisateurs</a>
    <a class=\"dropdown-item\" href=\"{{ path('adminCat_index') }}\">Catégories</a>
  </div>
</div>

</div>
</div>

</div>
</div>


{% else %}



    <table class=\"table table-striped\" style=\"margin-top: 40px;\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\"> Sujet </th>
          <th scope=\"col\"> Catégorie </th>
          <th scope=\"col\"> Auteur </th>
          <th scope=\"col\"> Date </th>
        </tr>
      </thead>
      <tbody>

            {% set number = 1 %}

            {% for post in listPosts %}

                <tr>
                  <th scope=\"row\"> {{ number }} </th>
                  <td> <a href=\"{{ path('post', {'id' : post.id}) }}\"> {{ post.titre }}  </a> </td>
                  <td> <a href=\"#\"> {{ post.categorie }}  </a> </td>
                  <td> <a href=\"#\"> {{ post.auteur }}  </a> </td>
                  <td> <a href=\"#\"> {{ post.date|date('d-m-Y') }}  </a> </td>
                </tr>

            {% set number = number + 1 %}
            {% else %}

             <tr> <td> Il n'y a pas encore de sujet dans cette catégorie </td> </tr>

            {% endfor %}               

      </tbody>
    </table>


{% endif %}

{% endblock %}
", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
