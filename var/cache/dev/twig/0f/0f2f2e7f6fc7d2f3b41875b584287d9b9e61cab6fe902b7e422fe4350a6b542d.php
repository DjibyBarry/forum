<?php

/* @User/Posts/affichePost.html.twig */
class __TwigTemplate_15e6c861a39653806099b98cfa61aac4de45ccb3e01d6ae43c5a0142c29d5504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Posts/affichePost.html.twig", 1);
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
        $__internal_a6fe557e4895c8ee1d513868e3434be5c22df42a2c1073fc397724115eb51839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fe557e4895c8ee1d513868e3434be5c22df42a2c1073fc397724115eb51839->enter($__internal_a6fe557e4895c8ee1d513868e3434be5c22df42a2c1073fc397724115eb51839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/affichePost.html.twig"));

        $__internal_148b19e280fa488055ec0e43fb21c3a19fbc5b2f59fafe8d79e601daa730d194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148b19e280fa488055ec0e43fb21c3a19fbc5b2f59fafe8d79e601daa730d194->enter($__internal_148b19e280fa488055ec0e43fb21c3a19fbc5b2f59fafe8d79e601daa730d194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Posts/affichePost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fe557e4895c8ee1d513868e3434be5c22df42a2c1073fc397724115eb51839->leave($__internal_a6fe557e4895c8ee1d513868e3434be5c22df42a2c1073fc397724115eb51839_prof);

        
        $__internal_148b19e280fa488055ec0e43fb21c3a19fbc5b2f59fafe8d79e601daa730d194->leave($__internal_148b19e280fa488055ec0e43fb21c3a19fbc5b2f59fafe8d79e601daa730d194_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d2a845029f69a23daa8e4d25b81b50210bca72a0113297abf9bf8ee2d5317eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2a845029f69a23daa8e4d25b81b50210bca72a0113297abf9bf8ee2d5317eb->enter($__internal_1d2a845029f69a23daa8e4d25b81b50210bca72a0113297abf9bf8ee2d5317eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_292c2d9594d098723b545b2eb228344b11422b85415163a19bcf7aed237eb021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292c2d9594d098723b545b2eb228344b11422b85415163a19bcf7aed237eb021->enter($__internal_292c2d9594d098723b545b2eb228344b11422b85415163a19bcf7aed237eb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lePost"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "titre", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lePost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        
        $__internal_292c2d9594d098723b545b2eb228344b11422b85415163a19bcf7aed237eb021->leave($__internal_292c2d9594d098723b545b2eb228344b11422b85415163a19bcf7aed237eb021_prof);

        
        $__internal_1d2a845029f69a23daa8e4d25b81b50210bca72a0113297abf9bf8ee2d5317eb->leave($__internal_1d2a845029f69a23daa8e4d25b81b50210bca72a0113297abf9bf8ee2d5317eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d31d7f48d023c764854888c715f66d0fd6f45c6edc4a92445e1a6021bfe30481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31d7f48d023c764854888c715f66d0fd6f45c6edc4a92445e1a6021bfe30481->enter($__internal_d31d7f48d023c764854888c715f66d0fd6f45c6edc4a92445e1a6021bfe30481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60a86939a9776740291f241538920948b39bd3a58f99ab0465636f4eb591dcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a86939a9776740291f241538920948b39bd3a58f99ab0465636f4eb591dcc4->enter($__internal_60a86939a9776740291f241538920948b39bd3a58f99ab0465636f4eb591dcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
 ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lePost"]) {
            echo " <i class=\"fa fa-home\"></i> > Accueil > Catégorie > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "categorie", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lePost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<br><br>

<h5> Sujet :  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lePost"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "titre", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lePost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </h5>  
<br>

     ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lePost"]) {
            // line 16
            echo "
    ";
            // line 17
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 18
                echo "
        <a href=\"";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newpost");
                echo "\"> <button class=\"btn btn-info\"> + Nouveau Sujet </button> </a>
        <a href=\"#repondre\" style=\"margin-left: 10px;\"> <button class=\"btn btn-danger\"> Répondre </button> </a>

    ";
            }
            // line 23
            echo "
    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "categorie", array()))), "html", null, true);
            echo "\" style=\"margin-left: 10px;\"> <button class=\"btn btn-success\"> Liste des sujets </button> </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lePost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
<br><br>


<div class=\"col-12\" style=\"padding-bottom: 40px;\">


        <div class=\"row\" style=\"margin-top: 10px;\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lePost"]) {
            // line 36
            echo "            
                        
        <div class=\"col-12 com_div\">
            
            <div class=\"row\">
                
                <div class=\"col-2\" style=\"border-right: 1px silver solid;\"> <p style=\"text-align: center;\"> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "auteur", array()), "html", null, true);
            echo " <i class=\"fa fa-envelope\" style=\"color: silver;\"></i> </p> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/img/avatar.jpg"), "html", null, true);
            echo "\" class=\"avatar_user\" /> </div>
        
                
                <div class=\"col-10\">
                
                <p>
                    <span style=\"color: blue;font-size: 12px;\"> ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "date", array()), "d M y à h:m:s"), "html", null, true);
            echo " </span></p>

                <hr>

                <p> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lePost"], "message", array()), "html", null, true);
            echo " </p>
                
            </div>
                
            </div>
            
        </div>
            
            

            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listCommentaires"]) || array_key_exists("listCommentaires", $context) ? $context["listCommentaires"] : (function () { throw new Twig_Error_Runtime('Variable "listCommentaires" does not exist.', 62, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 63
                echo "                    
                <div class=\"col-12 com_div\">

            <div class=\"row\">
                
                <div class=\"col-2\" style=\"border-right: 1px silver solid;\"> <p style=\"text-align: center;\"> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], "auteur", array()), "html", null, true);
                echo " <i class=\"fa fa-envelope\" style=\"color: silver;\"></i> </p> <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/img/avatar.jpg"), "html", null, true);
                echo "\" class=\"avatar_user\" /> </div>
        
                
                <div class=\"col-10\">
                
                <p>
                    <span style=\"color: blue;font-size: 12px;\"> ";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], "date", array()), "d M y à h:m:s"), "html", null, true);
                echo " </span></p>

                <hr>

                <p> ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentaire"], "commentaire", array()), "html", null, true);
                echo " </p>
                
            </div>
                
            </div>

                </div>
            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lePost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </div>
    
    
    ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "    
        <div id=\"repondre\" class=\"well\">

          ";
            // line 96
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), 'form');
            echo "

        </div>
    
    ";
        }
        // line 101
        echo "    
</div>

";
        
        $__internal_60a86939a9776740291f241538920948b39bd3a58f99ab0465636f4eb591dcc4->leave($__internal_60a86939a9776740291f241538920948b39bd3a58f99ab0465636f4eb591dcc4_prof);

        
        $__internal_d31d7f48d023c764854888c715f66d0fd6f45c6edc4a92445e1a6021bfe30481->leave($__internal_d31d7f48d023c764854888c715f66d0fd6f45c6edc4a92445e1a6021bfe30481_prof);

    }

    public function getTemplateName()
    {
        return "@User/Posts/affichePost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 101,  260 => 96,  255 => 93,  253 => 92,  248 => 89,  241 => 87,  226 => 78,  219 => 74,  208 => 68,  201 => 63,  197 => 62,  184 => 52,  177 => 48,  166 => 42,  158 => 36,  154 => 35,  144 => 27,  135 => 24,  132 => 23,  125 => 19,  122 => 18,  120 => 17,  117 => 16,  113 => 15,  98 => 12,  93 => 9,  82 => 8,  79 => 7,  70 => 6,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} {% for lePost in post %} {{ lePost.titre }} {% endfor %} {% endblock %}


{% block body %}

 {% for lePost in post %} <i class=\"fa fa-home\"></i> > Accueil > Catégorie > {{ lePost.categorie }} {% endfor %}

<br><br>

<h5> Sujet :  {% for lePost in post %} {{ lePost.titre }} {% endfor %} </h5>  
<br>

     {% for lePost in post %}

    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

        <a href=\"{{ path('newpost') }}\"> <button class=\"btn btn-info\"> + Nouveau Sujet </button> </a>
        <a href=\"#repondre\" style=\"margin-left: 10px;\"> <button class=\"btn btn-danger\"> Répondre </button> </a>

    {% endif %}

    <a href=\"{{ path('posts', {'nomCategorie' : lePost.categorie}) }}\" style=\"margin-left: 10px;\"> <button class=\"btn btn-success\"> Liste des sujets </button> </a>

    {% endfor %}

<br><br>


<div class=\"col-12\" style=\"padding-bottom: 40px;\">


        <div class=\"row\" style=\"margin-top: 10px;\">
        {% for lePost in post %}
            
                        
        <div class=\"col-12 com_div\">
            
            <div class=\"row\">
                
                <div class=\"col-2\" style=\"border-right: 1px silver solid;\"> <p style=\"text-align: center;\"> {{ lePost.auteur }} <i class=\"fa fa-envelope\" style=\"color: silver;\"></i> </p> <img src=\"{{ asset('bundles/user/img/avatar.jpg') }}\" class=\"avatar_user\" /> </div>
        
                
                <div class=\"col-10\">
                
                <p>
                    <span style=\"color: blue;font-size: 12px;\"> {{ lePost.date|date('d M y à h:m:s') }} </span></p>

                <hr>

                <p> {{ lePost.message }} </p>
                
            </div>
                
            </div>
            
        </div>
            
            

            {% for commentaire in listCommentaires %}
                    
                <div class=\"col-12 com_div\">

            <div class=\"row\">
                
                <div class=\"col-2\" style=\"border-right: 1px silver solid;\"> <p style=\"text-align: center;\"> {{ commentaire.auteur }} <i class=\"fa fa-envelope\" style=\"color: silver;\"></i> </p> <img src=\"{{ asset('bundles/user/img/avatar.jpg') }}\" class=\"avatar_user\" /> </div>
        
                
                <div class=\"col-10\">
                
                <p>
                    <span style=\"color: blue;font-size: 12px;\"> {{ commentaire.date|date('d M y à h:m:s') }} </span></p>

                <hr>

                <p> {{ commentaire.commentaire }} </p>
                
            </div>
                
            </div>

                </div>
            
            {% endfor %}
        
         {% endfor %}
    </div>
    
    
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    
        <div id=\"repondre\" class=\"well\">

          {{ form(form) }}

        </div>
    
    {% endif %}
    
</div>

{% endblock %}
", "@User/Posts/affichePost.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\Posts\\affichePost.html.twig");
    }
}
