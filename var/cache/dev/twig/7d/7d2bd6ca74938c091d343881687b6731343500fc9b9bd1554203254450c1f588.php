<?php

/* UserBundle:categoriesAdmin:show.html.twig */
class __TwigTemplate_5ab90cd9576b75e911fe570f2c39c9f48366201277c53246e68e8470c9778bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:categoriesAdmin:show.html.twig", 1);
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
        $__internal_790d9232c6faf20a88f36e6ec8adbd18bade3fa29abc46969c383dc38484a5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790d9232c6faf20a88f36e6ec8adbd18bade3fa29abc46969c383dc38484a5e9->enter($__internal_790d9232c6faf20a88f36e6ec8adbd18bade3fa29abc46969c383dc38484a5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:show.html.twig"));

        $__internal_f1f1b76f5c8c98670ab2ad24309d75454592068dd30cd3895082376cc46ce9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f1b76f5c8c98670ab2ad24309d75454592068dd30cd3895082376cc46ce9ee->enter($__internal_f1f1b76f5c8c98670ab2ad24309d75454592068dd30cd3895082376cc46ce9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:categoriesAdmin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790d9232c6faf20a88f36e6ec8adbd18bade3fa29abc46969c383dc38484a5e9->leave($__internal_790d9232c6faf20a88f36e6ec8adbd18bade3fa29abc46969c383dc38484a5e9_prof);

        
        $__internal_f1f1b76f5c8c98670ab2ad24309d75454592068dd30cd3895082376cc46ce9ee->leave($__internal_f1f1b76f5c8c98670ab2ad24309d75454592068dd30cd3895082376cc46ce9ee_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2d64a9d6216ac5ecfadd15bbefcdf395854263680bc4e43e02b02034e5ca06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2d64a9d6216ac5ecfadd15bbefcdf395854263680bc4e43e02b02034e5ca06->enter($__internal_6d2d64a9d6216ac5ecfadd15bbefcdf395854263680bc4e43e02b02034e5ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eba495d9947d8cb613a735f8e99ddafe83017f6c68c23dd0a4febf81e00d157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba495d9947d8cb613a735f8e99ddafe83017f6c68c23dd0a4febf81e00d157a->enter($__internal_eba495d9947d8cb613a735f8e99ddafe83017f6c68c23dd0a4febf81e00d157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1> Catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 5, $this->getSourceContext()); })()), "nom", array()), "html", null, true);
        echo " </h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
              <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCat_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 22, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 25, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\">
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eba495d9947d8cb613a735f8e99ddafe83017f6c68c23dd0a4febf81e00d157a->leave($__internal_eba495d9947d8cb613a735f8e99ddafe83017f6c68c23dd0a4febf81e00d157a_prof);

        
        $__internal_6d2d64a9d6216ac5ecfadd15bbefcdf395854263680bc4e43e02b02034e5ca06->leave($__internal_6d2d64a9d6216ac5ecfadd15bbefcdf395854263680bc4e43e02b02034e5ca06_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:categoriesAdmin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  82 => 25,  76 => 22,  70 => 19,  59 => 11,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1> Catégorie {{ cat.nom }} </h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ cat.id }}</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminCat_index') }}\">Retour à la liste</a>
        </li>
        <li>
              <a href=\"{{ path('adminCat_edit', { 'id': cat.id }) }}\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "UserBundle:categoriesAdmin:show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/categoriesAdmin/show.html.twig");
    }
}
