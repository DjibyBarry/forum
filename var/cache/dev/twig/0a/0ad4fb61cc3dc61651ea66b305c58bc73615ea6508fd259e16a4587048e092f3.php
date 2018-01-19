<?php

/* @User/Posts/posts.html.twig */
class __TwigTemplate_ba4be1651079a3df06c5932e5e8bd07d665805eee800dee3573d6976f9b88963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Posts/posts.html.twig", 1);
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
        $__internal_931de94724c481d7b262897a0419d9810d94207f1e55e806e8f87394af5da456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931de94724c481d7b262897a0419d9810d94207f1e55e806e8f87394af5da456->enter($__internal_931de94724c481d7b262897a0419d9810d94207f1e55e806e8f87394af5da456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/posts.html.twig"));

        $__internal_d169ef1ecd614f713c295bf519bff8f644874057b2265654ecd4434257136177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d169ef1ecd614f713c295bf519bff8f644874057b2265654ecd4434257136177->enter($__internal_d169ef1ecd614f713c295bf519bff8f644874057b2265654ecd4434257136177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931de94724c481d7b262897a0419d9810d94207f1e55e806e8f87394af5da456->leave($__internal_931de94724c481d7b262897a0419d9810d94207f1e55e806e8f87394af5da456_prof);

        
        $__internal_d169ef1ecd614f713c295bf519bff8f644874057b2265654ecd4434257136177->leave($__internal_d169ef1ecd614f713c295bf519bff8f644874057b2265654ecd4434257136177_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b8f1330eaa69f39bedfb94b2837d724110bfa91480f472557d5d3e5f49c99ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8f1330eaa69f39bedfb94b2837d724110bfa91480f472557d5d3e5f49c99ae->enter($__internal_9b8f1330eaa69f39bedfb94b2837d724110bfa91480f472557d5d3e5f49c99ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_779cb4b86e741a6e1ca9ba0cf8b7756d4bdc8a71db855fda140b9f9fac77e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779cb4b86e741a6e1ca9ba0cf8b7756d4bdc8a71db855fda140b9f9fac77e040->enter($__internal_779cb4b86e741a6e1ca9ba0cf8b7756d4bdc8a71db855fda140b9f9fac77e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Catégories ";
        
        $__internal_779cb4b86e741a6e1ca9ba0cf8b7756d4bdc8a71db855fda140b9f9fac77e040->leave($__internal_779cb4b86e741a6e1ca9ba0cf8b7756d4bdc8a71db855fda140b9f9fac77e040_prof);

        
        $__internal_9b8f1330eaa69f39bedfb94b2837d724110bfa91480f472557d5d3e5f49c99ae->leave($__internal_9b8f1330eaa69f39bedfb94b2837d724110bfa91480f472557d5d3e5f49c99ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f50ca80eaa03cc85b7e2d2a41d9ed9b7c64635e0e92c05c8ebbbe4aec2a2f280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50ca80eaa03cc85b7e2d2a41d9ed9b7c64635e0e92c05c8ebbbe4aec2a2f280->enter($__internal_f50ca80eaa03cc85b7e2d2a41d9ed9b7c64635e0e92c05c8ebbbe4aec2a2f280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36722dcadaa2bbe7fe8778fc7b64eb577fe6ae5627a86b8d681dfbc5a66dcc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36722dcadaa2bbe7fe8778fc7b64eb577fe6ae5627a86b8d681dfbc5a66dcc80->enter($__internal_36722dcadaa2bbe7fe8778fc7b64eb577fe6ae5627a86b8d681dfbc5a66dcc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "
       <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newpost");
            echo "\"> <button class=\"btn btn-success\"> + Nouveau Sujet </button> </a>

    ";
        }
        // line 12
        echo "
    <table class=\"table table-striped\" style=\"margin-top: 40px;\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\"> Sujet </th>
          <th scope=\"col\"> Auteur </th>
          <th scope=\"col\"> Date </th>
        </tr>
      </thead>
      <tbody>

            ";
        // line 24
        $context["number"] = 1;
        // line 25
        echo "
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPosts"]) || array_key_exists("listPosts", $context) ? $context["listPosts"] : (function () { throw new Twig_Error_Runtime('Variable "listPosts" does not exist.', 26, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "
                <tr>
                  <th scope=\"row\"> ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo " </th>
                  <td> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "titre", array()), "html", null, true);
            echo "  </a> </td>
                  <td> <a href=\"#\"> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "auteur", array()), "html", null, true);
            echo "  </a> </td>
                  <td> <a href=\"#\"> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "date", array()), "d-m-Y"), "html", null, true);
            echo "  </a> </td>
                </tr>

            ";
            // line 35
            $context["number"] = ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 35, $this->getSourceContext()); })()) + 1);
            // line 36
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "
             <tr> <td> Il n'y a pas encore de sujet dans cette catégorie </td> </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "               

      </tbody>
    </table>


";
        
        $__internal_36722dcadaa2bbe7fe8778fc7b64eb577fe6ae5627a86b8d681dfbc5a66dcc80->leave($__internal_36722dcadaa2bbe7fe8778fc7b64eb577fe6ae5627a86b8d681dfbc5a66dcc80_prof);

        
        $__internal_f50ca80eaa03cc85b7e2d2a41d9ed9b7c64635e0e92c05c8ebbbe4aec2a2f280->leave($__internal_f50ca80eaa03cc85b7e2d2a41d9ed9b7c64635e0e92c05c8ebbbe4aec2a2f280_prof);

    }

    public function getTemplateName()
    {
        return "@User/Posts/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  137 => 37,  132 => 36,  130 => 35,  124 => 32,  120 => 31,  114 => 30,  110 => 29,  106 => 27,  101 => 26,  98 => 25,  96 => 24,  82 => 12,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Catégories {% endblock %}

{% block body %}

    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

       <a href=\"{{ path('newpost') }}\"> <button class=\"btn btn-success\"> + Nouveau Sujet </button> </a>

    {% endif %}

    <table class=\"table table-striped\" style=\"margin-top: 40px;\">
      <thead>
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\"> Sujet </th>
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
                  <td> <a href=\"#\"> {{ post.auteur }}  </a> </td>
                  <td> <a href=\"#\"> {{ post.date|date('d-m-Y') }}  </a> </td>
                </tr>

            {% set number = number + 1 %}
            {% else %}

             <tr> <td> Il n'y a pas encore de sujet dans cette catégorie </td> </tr>

            {% endfor %}               

      </tbody>
    </table>


{% endblock %}
", "@User/Posts/posts.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\Posts\\posts.html.twig");
    }
}
