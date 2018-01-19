<?php

/* :user:edit.html.twig */
class __TwigTemplate_341ab6eca950358ca849467e4d4e75a51e440923bc2f8478551a42693777d50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_b506f7570cb9d442447b928f43dd1c09380a26b93b914b4d3da136c6d17a77d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b506f7570cb9d442447b928f43dd1c09380a26b93b914b4d3da136c6d17a77d5->enter($__internal_b506f7570cb9d442447b928f43dd1c09380a26b93b914b4d3da136c6d17a77d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_7f42d486907f71cc377c132b11d3eb4a68f11fa89d65b2e2a163c3a67d30251a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f42d486907f71cc377c132b11d3eb4a68f11fa89d65b2e2a163c3a67d30251a->enter($__internal_7f42d486907f71cc377c132b11d3eb4a68f11fa89d65b2e2a163c3a67d30251a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b506f7570cb9d442447b928f43dd1c09380a26b93b914b4d3da136c6d17a77d5->leave($__internal_b506f7570cb9d442447b928f43dd1c09380a26b93b914b4d3da136c6d17a77d5_prof);

        
        $__internal_7f42d486907f71cc377c132b11d3eb4a68f11fa89d65b2e2a163c3a67d30251a->leave($__internal_7f42d486907f71cc377c132b11d3eb4a68f11fa89d65b2e2a163c3a67d30251a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_03c2a4da007487e43d6bc36e4ccc5c1b44ad7692aa57f42f60cd4eb46493b97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c2a4da007487e43d6bc36e4ccc5c1b44ad7692aa57f42f60cd4eb46493b97f->enter($__internal_03c2a4da007487e43d6bc36e4ccc5c1b44ad7692aa57f42f60cd4eb46493b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15756b10a0bb35753a4d1c555233741c873647b7ea837adee034a827fc19a854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15756b10a0bb35753a4d1c555233741c873647b7ea837adee034a827fc19a854->enter($__internal_15756b10a0bb35753a4d1c555233741c873647b7ea837adee034a827fc19a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>User edit</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_15756b10a0bb35753a4d1c555233741c873647b7ea837adee034a827fc19a854->leave($__internal_15756b10a0bb35753a4d1c555233741c873647b7ea837adee034a827fc19a854_prof);

        
        $__internal_03c2a4da007487e43d6bc36e4ccc5c1b44ad7692aa57f42f60cd4eb46493b97f->leave($__internal_03c2a4da007487e43d6bc36e4ccc5c1b44ad7692aa57f42f60cd4eb46493b97f_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  75 => 17,  69 => 14,  62 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}


{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_user_index') }}\">Retour à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources\\views/user/edit.html.twig");
    }
}
