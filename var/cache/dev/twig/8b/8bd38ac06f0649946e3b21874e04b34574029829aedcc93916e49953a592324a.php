<?php

/* UserBundle::base.html.twig */
class __TwigTemplate_245e142aabb49dac6093e6a59135da0a7fd822a910fe928cf44fcbf4b3aac8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22d3e96e5c03a668e1dc8f79022f47d7eb893fa75c909c015ddc40c27d7bee3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d3e96e5c03a668e1dc8f79022f47d7eb893fa75c909c015ddc40c27d7bee3b->enter($__internal_22d3e96e5c03a668e1dc8f79022f47d7eb893fa75c909c015ddc40c27d7bee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

        $__internal_4121e083fc706e66b616fbe3dbf6c3603a8b77cbc9a441f5ac295524d7afcf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4121e083fc706e66b616fbe3dbf6c3603a8b77cbc9a441f5ac295524d7afcf1c->enter($__internal_4121e083fc706e66b616fbe3dbf6c3603a8b77cbc9a441f5ac295524d7afcf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>

    <body style=\"padding-top: 70px;\">

      <div class=\"container\">

        <div class=\"row\">

        <!-- Navigation -->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">

              <div class=\"container\">

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\"> Accueil </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories");
        echo "\"> Catégories </a></li>

                    </ul>
                  <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        
                        <!--partie connexion et deconnexion (surcharge du layout.html.twig de FOS) -->
                        ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                            <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                <button class=\"btn btn-info\"> ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo " </button>
                            </a>
                        ";
        } else {
            // line 44
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> <button class=\"btn btn-info\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " </button> </a>
                        ";
        }
        // line 46
        echo "                    </li>
                    ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "                      
                    ";
        } else {
            // line 50
            echo "                      
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><button class=\"btn btn-info\"> Inscription </button></a>
                    </li>
                    
                    ";
        }
        // line 56
        echo "                    
                    
                  </ul>
                </div>

              </div>

            </nav>

        </div>
          
          
        <div class=\"row\" style=\"margin-top: 40px; display: none;\">
            
            ";
        // line 70
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 71
            echo "                            
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " 
            
            ";
        }
        // line 75
        echo "          
          
        </div>
          
        <div style=\"margin-top: 40px;\">
          
            ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "  
          
        </div>
          
          
      </div>

        
        
        
    ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "        
        
  </body>
</html>
";
        
        $__internal_22d3e96e5c03a668e1dc8f79022f47d7eb893fa75c909c015ddc40c27d7bee3b->leave($__internal_22d3e96e5c03a668e1dc8f79022f47d7eb893fa75c909c015ddc40c27d7bee3b_prof);

        
        $__internal_4121e083fc706e66b616fbe3dbf6c3603a8b77cbc9a441f5ac295524d7afcf1c->leave($__internal_4121e083fc706e66b616fbe3dbf6c3603a8b77cbc9a441f5ac295524d7afcf1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77ec513111eae9473020e6cfeb07eb6679f535c0ff6eb166163dc9568ba9f222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ec513111eae9473020e6cfeb07eb6679f535c0ff6eb166163dc9568ba9f222->enter($__internal_77ec513111eae9473020e6cfeb07eb6679f535c0ff6eb166163dc9568ba9f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb85968b28381fb3533e40795f9766ac1e63fae3fd15cb05de5fcb8e8a222ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb85968b28381fb3533e40795f9766ac1e63fae3fd15cb05de5fcb8e8a222ce8->enter($__internal_bb85968b28381fb3533e40795f9766ac1e63fae3fd15cb05de5fcb8e8a222ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Forum ";
        
        $__internal_bb85968b28381fb3533e40795f9766ac1e63fae3fd15cb05de5fcb8e8a222ce8->leave($__internal_bb85968b28381fb3533e40795f9766ac1e63fae3fd15cb05de5fcb8e8a222ce8_prof);

        
        $__internal_77ec513111eae9473020e6cfeb07eb6679f535c0ff6eb166163dc9568ba9f222->leave($__internal_77ec513111eae9473020e6cfeb07eb6679f535c0ff6eb166163dc9568ba9f222_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb69c53c3f60abe9139283f8a40eb1e8f4808a6177659c1a9435be445d85febd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb69c53c3f60abe9139283f8a40eb1e8f4808a6177659c1a9435be445d85febd->enter($__internal_eb69c53c3f60abe9139283f8a40eb1e8f4808a6177659c1a9435be445d85febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c98c9028775f6b28079135eb866338ae5a06d3f313d40c12269199e84106ffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98c9028775f6b28079135eb866338ae5a06d3f313d40c12269199e84106ffbb->enter($__internal_c98c9028775f6b28079135eb866338ae5a06d3f313d40c12269199e84106ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../src/UserBundle/Resources/public/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        ";
        
        $__internal_c98c9028775f6b28079135eb866338ae5a06d3f313d40c12269199e84106ffbb->leave($__internal_c98c9028775f6b28079135eb866338ae5a06d3f313d40c12269199e84106ffbb_prof);

        
        $__internal_eb69c53c3f60abe9139283f8a40eb1e8f4808a6177659c1a9435be445d85febd->leave($__internal_eb69c53c3f60abe9139283f8a40eb1e8f4808a6177659c1a9435be445d85febd_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_14413c2e14028d375cab0fb78205264c36c75a128e5d842f6c8724842b044687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14413c2e14028d375cab0fb78205264c36c75a128e5d842f6c8724842b044687->enter($__internal_14413c2e14028d375cab0fb78205264c36c75a128e5d842f6c8724842b044687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_769b4bbd9364e57f1f3c2cc5a89fae208fad874cfb86c6880df5357dede18185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769b4bbd9364e57f1f3c2cc5a89fae208fad874cfb86c6880df5357dede18185->enter($__internal_769b4bbd9364e57f1f3c2cc5a89fae208fad874cfb86c6880df5357dede18185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        

            ";
        
        $__internal_769b4bbd9364e57f1f3c2cc5a89fae208fad874cfb86c6880df5357dede18185->leave($__internal_769b4bbd9364e57f1f3c2cc5a89fae208fad874cfb86c6880df5357dede18185_prof);

        
        $__internal_14413c2e14028d375cab0fb78205264c36c75a128e5d842f6c8724842b044687->leave($__internal_14413c2e14028d375cab0fb78205264c36c75a128e5d842f6c8724842b044687_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c78bda03e3037c380ff79872d38ea44c580b7bb394dceaf7dd214eb46c1789ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78bda03e3037c380ff79872d38ea44c580b7bb394dceaf7dd214eb46c1789ee->enter($__internal_c78bda03e3037c380ff79872d38ea44c580b7bb394dceaf7dd214eb46c1789ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_582e3ef0af8d78b9360ccfabc7bd53f40d79eddd14c5c89f74c8b0ebf88372a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582e3ef0af8d78b9360ccfabc7bd53f40d79eddd14c5c89f74c8b0ebf88372a0->enter($__internal_582e3ef0af8d78b9360ccfabc7bd53f40d79eddd14c5c89f74c8b0ebf88372a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "        
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
        
    ";
        
        $__internal_582e3ef0af8d78b9360ccfabc7bd53f40d79eddd14c5c89f74c8b0ebf88372a0->leave($__internal_582e3ef0af8d78b9360ccfabc7bd53f40d79eddd14c5c89f74c8b0ebf88372a0_prof);

        
        $__internal_c78bda03e3037c380ff79872d38ea44c580b7bb394dceaf7dd214eb46c1789ee->leave($__internal_c78bda03e3037c380ff79872d38ea44c580b7bb394dceaf7dd214eb46c1789ee_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 95,  250 => 94,  238 => 82,  229 => 81,  216 => 10,  211 => 8,  208 => 7,  199 => 6,  181 => 5,  167 => 101,  165 => 94,  153 => 84,  151 => 81,  143 => 75,  137 => 72,  134 => 71,  132 => 70,  116 => 56,  109 => 52,  105 => 50,  101 => 48,  99 => 47,  96 => 46,  88 => 44,  82 => 41,  77 => 40,  75 => 39,  65 => 32,  61 => 31,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} Forum {% endblock %}</title>
        {% block stylesheets %}

      <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
    <link href=\"{{ asset('../src/UserBundle/Resources/public/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        {% endblock %}
    </head>

    <body style=\"padding-top: 70px;\">

      <div class=\"container\">

        <div class=\"row\">

        <!-- Navigation -->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">

              <div class=\"container\">

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('_index') }}\"> Accueil </a></li>
                        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('categories') }}\"> Catégories </a></li>

                    </ul>
                  <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        
                        <!--partie connexion et deconnexion (surcharge du layout.html.twig de FOS) -->
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">
                                <button class=\"btn btn-info\"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }} </button>
                            </a>
                        {% else %}
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\"> <button class=\"btn btn-info\"> {{ 'layout.login'|trans({}, 'FOSUserBundle') }} </button> </a>
                        {% endif %}
                    </li>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                      
                    {% else %}
                      
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\"><button class=\"btn btn-info\"> Inscription </button></a>
                    </li>
                    
                    {% endif %}
                    
                    
                  </ul>
                </div>

              </div>

            </nav>

        </div>
          
          
        <div class=\"row\" style=\"margin-top: 40px; display: none;\">
            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} 
            
            {% endif %}
          
          
        </div>
          
        <div style=\"margin-top: 40px;\">
          
            {% block body %}
        

            {% endblock %}  
          
        </div>
          
          
      </div>

        
        
        
    {% block javascripts %}
        
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
        
    {% endblock %}
        
        
  </body>
</html>
", "UserBundle::base.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle\\Resources\\views\\base.html.twig");
    }
}
