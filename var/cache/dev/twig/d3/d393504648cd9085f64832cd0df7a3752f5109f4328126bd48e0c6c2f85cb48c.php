<?php

/* @User/categoriesAdmin/show.html.twig */
class __TwigTemplate_f442836190f8f372ebaacef78e3dbf9e4f439e73b7e98f298f94ecbbaf1d24c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/categoriesAdmin/show.html.twig", 1);
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
        $__internal_31adb130dfc0485c6c3b6f6b5d31d001b5e6d1c09e55ebbc6b6958aa78bfb6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31adb130dfc0485c6c3b6f6b5d31d001b5e6d1c09e55ebbc6b6958aa78bfb6c0->enter($__internal_31adb130dfc0485c6c3b6f6b5d31d001b5e6d1c09e55ebbc6b6958aa78bfb6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/show.html.twig"));

        $__internal_1f51825a9077c75a049861fb7350ed8396c75708ef18afcea840117e0b7ed9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f51825a9077c75a049861fb7350ed8396c75708ef18afcea840117e0b7ed9e2->enter($__internal_1f51825a9077c75a049861fb7350ed8396c75708ef18afcea840117e0b7ed9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/categoriesAdmin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31adb130dfc0485c6c3b6f6b5d31d001b5e6d1c09e55ebbc6b6958aa78bfb6c0->leave($__internal_31adb130dfc0485c6c3b6f6b5d31d001b5e6d1c09e55ebbc6b6958aa78bfb6c0_prof);

        
        $__internal_1f51825a9077c75a049861fb7350ed8396c75708ef18afcea840117e0b7ed9e2->leave($__internal_1f51825a9077c75a049861fb7350ed8396c75708ef18afcea840117e0b7ed9e2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b6f065009eeec75013fdf4f3ed0296f2b1d19fdafc34cc572c9c87faf02c0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6f065009eeec75013fdf4f3ed0296f2b1d19fdafc34cc572c9c87faf02c0c4->enter($__internal_2b6f065009eeec75013fdf4f3ed0296f2b1d19fdafc34cc572c9c87faf02c0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32785d13758ecbd48663a47053b39196af48d769d61cb8a6beafa303c9928794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32785d13758ecbd48663a47053b39196af48d769d61cb8a6beafa303c9928794->enter($__internal_32785d13758ecbd48663a47053b39196af48d769d61cb8a6beafa303c9928794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32785d13758ecbd48663a47053b39196af48d769d61cb8a6beafa303c9928794->leave($__internal_32785d13758ecbd48663a47053b39196af48d769d61cb8a6beafa303c9928794_prof);

        
        $__internal_2b6f065009eeec75013fdf4f3ed0296f2b1d19fdafc34cc572c9c87faf02c0c4->leave($__internal_2b6f065009eeec75013fdf4f3ed0296f2b1d19fdafc34cc572c9c87faf02c0c4_prof);

    }

    public function getTemplateName()
    {
        return "@User/categoriesAdmin/show.html.twig";
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
", "@User/categoriesAdmin/show.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\categoriesAdmin\\show.html.twig");
    }
}
