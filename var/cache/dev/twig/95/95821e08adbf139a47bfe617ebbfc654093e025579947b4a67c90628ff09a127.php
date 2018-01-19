<?php

/* UserBundle:Posts:posts.html.twig */
class __TwigTemplate_82232cc9769fb7a3080062b4eb1f556605f2c80cb47d06c1fea6601da446a301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:Posts:posts.html.twig", 1);
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
        $__internal_f0fedef1bcc3903e464fee5882c55f8c6df1b0223c93d7cbd24f1fcba157f0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fedef1bcc3903e464fee5882c55f8c6df1b0223c93d7cbd24f1fcba157f0b1->enter($__internal_f0fedef1bcc3903e464fee5882c55f8c6df1b0223c93d7cbd24f1fcba157f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Posts:posts.html.twig"));

        $__internal_da8ce0a44bd9f3f1e60b24436cf33ffca30b3cd6c4e7174299ca4590c809dc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8ce0a44bd9f3f1e60b24436cf33ffca30b3cd6c4e7174299ca4590c809dc42->enter($__internal_da8ce0a44bd9f3f1e60b24436cf33ffca30b3cd6c4e7174299ca4590c809dc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Posts:posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fedef1bcc3903e464fee5882c55f8c6df1b0223c93d7cbd24f1fcba157f0b1->leave($__internal_f0fedef1bcc3903e464fee5882c55f8c6df1b0223c93d7cbd24f1fcba157f0b1_prof);

        
        $__internal_da8ce0a44bd9f3f1e60b24436cf33ffca30b3cd6c4e7174299ca4590c809dc42->leave($__internal_da8ce0a44bd9f3f1e60b24436cf33ffca30b3cd6c4e7174299ca4590c809dc42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc55a347f14967584cb87e460a5eecab7439c104a1be0759d1f957bbb63fcb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc55a347f14967584cb87e460a5eecab7439c104a1be0759d1f957bbb63fcb8->enter($__internal_fdc55a347f14967584cb87e460a5eecab7439c104a1be0759d1f957bbb63fcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9348b1b48b001c036cdd07e0a58e0ef1f088666052ab736fdc6eeb9011506026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9348b1b48b001c036cdd07e0a58e0ef1f088666052ab736fdc6eeb9011506026->enter($__internal_9348b1b48b001c036cdd07e0a58e0ef1f088666052ab736fdc6eeb9011506026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Catégories ";
        
        $__internal_9348b1b48b001c036cdd07e0a58e0ef1f088666052ab736fdc6eeb9011506026->leave($__internal_9348b1b48b001c036cdd07e0a58e0ef1f088666052ab736fdc6eeb9011506026_prof);

        
        $__internal_fdc55a347f14967584cb87e460a5eecab7439c104a1be0759d1f957bbb63fcb8->leave($__internal_fdc55a347f14967584cb87e460a5eecab7439c104a1be0759d1f957bbb63fcb8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2adde9992a5b8c76e80ca713d62cc10d25ec4823a47ef065d289458f3a1e4844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adde9992a5b8c76e80ca713d62cc10d25ec4823a47ef065d289458f3a1e4844->enter($__internal_2adde9992a5b8c76e80ca713d62cc10d25ec4823a47ef065d289458f3a1e4844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8eb21dce345f30f08af9f394ccf06a980f95d2eb4f7b239180d472d20c9cda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8eb21dce345f30f08af9f394ccf06a980f95d2eb4f7b239180d472d20c9cda2->enter($__internal_b8eb21dce345f30f08af9f394ccf06a980f95d2eb4f7b239180d472d20c9cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8eb21dce345f30f08af9f394ccf06a980f95d2eb4f7b239180d472d20c9cda2->leave($__internal_b8eb21dce345f30f08af9f394ccf06a980f95d2eb4f7b239180d472d20c9cda2_prof);

        
        $__internal_2adde9992a5b8c76e80ca713d62cc10d25ec4823a47ef065d289458f3a1e4844->leave($__internal_2adde9992a5b8c76e80ca713d62cc10d25ec4823a47ef065d289458f3a1e4844_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Posts:posts.html.twig";
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
", "UserBundle:Posts:posts.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/Posts/posts.html.twig");
    }
}
