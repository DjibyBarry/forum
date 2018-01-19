<?php

/* @User/Default/index.html.twig */
class __TwigTemplate_e02f21f2ccdd3d33e31e5ce207f389c77eed0c963e838d10e1f67b994b0af8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Default/index.html.twig", 1);
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
        $__internal_b5c343d31a76118220d06d398d65594fc61f28499dfc63717997effae435aac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c343d31a76118220d06d398d65594fc61f28499dfc63717997effae435aac2->enter($__internal_b5c343d31a76118220d06d398d65594fc61f28499dfc63717997effae435aac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig"));

        $__internal_d3fb2947026815e0d93f58e787ee190b24192094244fd4ed95b5d5948c005afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fb2947026815e0d93f58e787ee190b24192094244fd4ed95b5d5948c005afb->enter($__internal_d3fb2947026815e0d93f58e787ee190b24192094244fd4ed95b5d5948c005afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c343d31a76118220d06d398d65594fc61f28499dfc63717997effae435aac2->leave($__internal_b5c343d31a76118220d06d398d65594fc61f28499dfc63717997effae435aac2_prof);

        
        $__internal_d3fb2947026815e0d93f58e787ee190b24192094244fd4ed95b5d5948c005afb->leave($__internal_d3fb2947026815e0d93f58e787ee190b24192094244fd4ed95b5d5948c005afb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b12be00ebbaa82d43a092957037068f9ee0ad71af8bc566df06e7addc962fdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12be00ebbaa82d43a092957037068f9ee0ad71af8bc566df06e7addc962fdc0->enter($__internal_b12be00ebbaa82d43a092957037068f9ee0ad71af8bc566df06e7addc962fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e8fa6a07778fc8f03c52f7c5a965eaa74625341285db77a9bb9e9161162cee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8fa6a07778fc8f03c52f7c5a965eaa74625341285db77a9bb9e9161162cee0->enter($__internal_0e8fa6a07778fc8f03c52f7c5a965eaa74625341285db77a9bb9e9161162cee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_0e8fa6a07778fc8f03c52f7c5a965eaa74625341285db77a9bb9e9161162cee0->leave($__internal_0e8fa6a07778fc8f03c52f7c5a965eaa74625341285db77a9bb9e9161162cee0_prof);

        
        $__internal_b12be00ebbaa82d43a092957037068f9ee0ad71af8bc566df06e7addc962fdc0->leave($__internal_b12be00ebbaa82d43a092957037068f9ee0ad71af8bc566df06e7addc962fdc0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb12cffb7fb715f649f3ccc7d4bb4036fb6f2a7997662ab03d95544b24d2d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb12cffb7fb715f649f3ccc7d4bb4036fb6f2a7997662ab03d95544b24d2d0e->enter($__internal_0eb12cffb7fb715f649f3ccc7d4bb4036fb6f2a7997662ab03d95544b24d2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_300898461189333af27257ea12406ab6476d4e29f2addf15b9e97afbe063747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300898461189333af27257ea12406ab6476d4e29f2addf15b9e97afbe063747a->enter($__internal_300898461189333af27257ea12406ab6476d4e29f2addf15b9e97afbe063747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_300898461189333af27257ea12406ab6476d4e29f2addf15b9e97afbe063747a->leave($__internal_300898461189333af27257ea12406ab6476d4e29f2addf15b9e97afbe063747a_prof);

        
        $__internal_0eb12cffb7fb715f649f3ccc7d4bb4036fb6f2a7997662ab03d95544b24d2d0e->leave($__internal_0eb12cffb7fb715f649f3ccc7d4bb4036fb6f2a7997662ab03d95544b24d2d0e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig";
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
", "@User/Default/index.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
