<?php

/* UserBundle:Annonces:categories.html.twig */
class __TwigTemplate_af6ad877a510b16c779390d69d989b2afdf3df1da0ebf93c0269792ee64d5822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "UserBundle:Annonces:categories.html.twig", 1);
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
        $__internal_e2634cfa33d77132ae4a364b694c69aee3dc5d8c4f4887dd00bfa9d513ce0c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2634cfa33d77132ae4a364b694c69aee3dc5d8c4f4887dd00bfa9d513ce0c8c->enter($__internal_e2634cfa33d77132ae4a364b694c69aee3dc5d8c4f4887dd00bfa9d513ce0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Annonces:categories.html.twig"));

        $__internal_2506ccc8ee49108f774394673fd4d433eaa2025c950fbdeab22e93fc2ab022ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2506ccc8ee49108f774394673fd4d433eaa2025c950fbdeab22e93fc2ab022ac->enter($__internal_2506ccc8ee49108f774394673fd4d433eaa2025c950fbdeab22e93fc2ab022ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Annonces:categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2634cfa33d77132ae4a364b694c69aee3dc5d8c4f4887dd00bfa9d513ce0c8c->leave($__internal_e2634cfa33d77132ae4a364b694c69aee3dc5d8c4f4887dd00bfa9d513ce0c8c_prof);

        
        $__internal_2506ccc8ee49108f774394673fd4d433eaa2025c950fbdeab22e93fc2ab022ac->leave($__internal_2506ccc8ee49108f774394673fd4d433eaa2025c950fbdeab22e93fc2ab022ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f480241711d9ed6ef3cbd430116f186499e6ceb3f20562bb8621d7e236dc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f480241711d9ed6ef3cbd430116f186499e6ceb3f20562bb8621d7e236dc60->enter($__internal_75f480241711d9ed6ef3cbd430116f186499e6ceb3f20562bb8621d7e236dc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8417034937a7b02e35c6dce6b3592d66f1b9440e035bbe02c856d130857fc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8417034937a7b02e35c6dce6b3592d66f1b9440e035bbe02c856d130857fc65->enter($__internal_a8417034937a7b02e35c6dce6b3592d66f1b9440e035bbe02c856d130857fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Catégories ";
        
        $__internal_a8417034937a7b02e35c6dce6b3592d66f1b9440e035bbe02c856d130857fc65->leave($__internal_a8417034937a7b02e35c6dce6b3592d66f1b9440e035bbe02c856d130857fc65_prof);

        
        $__internal_75f480241711d9ed6ef3cbd430116f186499e6ceb3f20562bb8621d7e236dc60->leave($__internal_75f480241711d9ed6ef3cbd430116f186499e6ceb3f20562bb8621d7e236dc60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80ba8d2e6c4c01bede538a35a2ed8bf67d1bcb502ce5c49b4d0194868af89f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ba8d2e6c4c01bede538a35a2ed8bf67d1bcb502ce5c49b4d0194868af89f06->enter($__internal_80ba8d2e6c4c01bede538a35a2ed8bf67d1bcb502ce5c49b4d0194868af89f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bacd50c6dd92321084747516c413ef8a1273cdb134950ff853fcf15f52bdac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bacd50c6dd92321084747516c413ef8a1273cdb134950ff853fcf15f52bdac9->enter($__internal_3bacd50c6dd92321084747516c413ef8a1273cdb134950ff853fcf15f52bdac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

            <div class=\"col-md-12\">
                
                <div class=\"row\">

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) || array_key_exists("listCategories", $context) ? $context["listCategories"] : (function () { throw new Twig_Error_Runtime('Variable "listCategories" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            echo "                    
                    <div class=\"col-md-4\">
                            
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()))), "html", null, true);
            echo "\">
                        
                        <div class=\"card\" style=\"border: none;\">
                            
                        <img class=\"card-img-top\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/user/css/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "url", array()))), "html", null, true);
            echo "\" alt=\"Card image cap\" />
                        
                            <div class=\"card-block\">
                                
                                <h4 class=\"card-title\" style=\"text-align: center; margin-top: 10px;\"><a style=\"color: #8b8b8b; text-decoration: none; \" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts", array("nomCategorie" => twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categorie"], "nom", array()), "html", null, true);
            echo "  </a> </h4>


                            </div>
                            
                        </div>
                        
                    </a>

                    </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    
                </div>
                    
            </div>
                




";
        
        $__internal_3bacd50c6dd92321084747516c413ef8a1273cdb134950ff853fcf15f52bdac9->leave($__internal_3bacd50c6dd92321084747516c413ef8a1273cdb134950ff853fcf15f52bdac9_prof);

        
        $__internal_80ba8d2e6c4c01bede538a35a2ed8bf67d1bcb502ce5c49b4d0194868af89f06->leave($__internal_80ba8d2e6c4c01bede538a35a2ed8bf67d1bcb502ce5c49b4d0194868af89f06_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Annonces:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  99 => 24,  92 => 20,  85 => 16,  80 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'UserBundle::base.html.twig' %}

{% block title %} Catégories {% endblock %}

{% block body %}


            <div class=\"col-md-12\">
                
                <div class=\"row\">

            {% for categorie in listCategories %}
                    
                    <div class=\"col-md-4\">
                            
                    <a href=\"{{ path('posts', {'nomCategorie' : categorie.nom}) }}\">
                        
                        <div class=\"card\" style=\"border: none;\">
                            
                        <img class=\"card-img-top\" src=\"{{ asset('bundles/user/css/images/'~ categorie.url) }}\" alt=\"Card image cap\" />
                        
                            <div class=\"card-block\">
                                
                                <h4 class=\"card-title\" style=\"text-align: center; margin-top: 10px;\"><a style=\"color: #8b8b8b; text-decoration: none; \" href=\"{{ path('posts', {'nomCategorie' : categorie.nom}) }}\"> {{ categorie.nom }}  </a> </h4>


                            </div>
                            
                        </div>
                        
                    </a>

                    </div>
                
            {% endfor %}
                    
                </div>
                    
            </div>
                




{% endblock %}
", "UserBundle:Annonces:categories.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/Annonces/categories.html.twig");
    }
}
