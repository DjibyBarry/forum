<?php

/* UserBundle::base.html.twig */
class __TwigTemplate_cd1d64094b2ed44ee0621befe358ee1e780d40660184dc6f86efaf50c1ab455d extends Twig_Template
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
        $__internal_9285cb902336a4e3be656041e10e66ff2aa1215786be08a4cb190448ef12cbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9285cb902336a4e3be656041e10e66ff2aa1215786be08a4cb190448ef12cbc5->enter($__internal_9285cb902336a4e3be656041e10e66ff2aa1215786be08a4cb190448ef12cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

        $__internal_acc3984bf7a5a9ea5e6973fc5aee2c339534d35bfb5ffe676bd168532a26b718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc3984bf7a5a9ea5e6973fc5aee2c339534d35bfb5ffe676bd168532a26b718->enter($__internal_acc3984bf7a5a9ea5e6973fc5aee2c339534d35bfb5ffe676bd168532a26b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

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
        
        $__internal_9285cb902336a4e3be656041e10e66ff2aa1215786be08a4cb190448ef12cbc5->leave($__internal_9285cb902336a4e3be656041e10e66ff2aa1215786be08a4cb190448ef12cbc5_prof);

        
        $__internal_acc3984bf7a5a9ea5e6973fc5aee2c339534d35bfb5ffe676bd168532a26b718->leave($__internal_acc3984bf7a5a9ea5e6973fc5aee2c339534d35bfb5ffe676bd168532a26b718_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fd10e4864c6e4081641cebd63126f751845200364d853e52bfbeea34e8b0c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd10e4864c6e4081641cebd63126f751845200364d853e52bfbeea34e8b0c4d->enter($__internal_2fd10e4864c6e4081641cebd63126f751845200364d853e52bfbeea34e8b0c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9d31717940f72ad7deae3b75dc574ce5c03c03000a3b39b1cc7e99607ab9da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d31717940f72ad7deae3b75dc574ce5c03c03000a3b39b1cc7e99607ab9da6->enter($__internal_f9d31717940f72ad7deae3b75dc574ce5c03c03000a3b39b1cc7e99607ab9da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Forum ";
        
        $__internal_f9d31717940f72ad7deae3b75dc574ce5c03c03000a3b39b1cc7e99607ab9da6->leave($__internal_f9d31717940f72ad7deae3b75dc574ce5c03c03000a3b39b1cc7e99607ab9da6_prof);

        
        $__internal_2fd10e4864c6e4081641cebd63126f751845200364d853e52bfbeea34e8b0c4d->leave($__internal_2fd10e4864c6e4081641cebd63126f751845200364d853e52bfbeea34e8b0c4d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d75c0da931e1894bba0b6ee8771f322fe585e1d85839605d60c6f83cf1e2f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d75c0da931e1894bba0b6ee8771f322fe585e1d85839605d60c6f83cf1e2f0e->enter($__internal_2d75c0da931e1894bba0b6ee8771f322fe585e1d85839605d60c6f83cf1e2f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59a253a7be5c2e30b03ce470489cb7625a2596ac66c09a3567f3e13e1e89d872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a253a7be5c2e30b03ce470489cb7625a2596ac66c09a3567f3e13e1e89d872->enter($__internal_59a253a7be5c2e30b03ce470489cb7625a2596ac66c09a3567f3e13e1e89d872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
      <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        ";
        
        $__internal_59a253a7be5c2e30b03ce470489cb7625a2596ac66c09a3567f3e13e1e89d872->leave($__internal_59a253a7be5c2e30b03ce470489cb7625a2596ac66c09a3567f3e13e1e89d872_prof);

        
        $__internal_2d75c0da931e1894bba0b6ee8771f322fe585e1d85839605d60c6f83cf1e2f0e->leave($__internal_2d75c0da931e1894bba0b6ee8771f322fe585e1d85839605d60c6f83cf1e2f0e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d1bc5bbf322d1de1e71bc5d1ddea22a13d4534ed992e986ba200b61615aff0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1bc5bbf322d1de1e71bc5d1ddea22a13d4534ed992e986ba200b61615aff0c->enter($__internal_3d1bc5bbf322d1de1e71bc5d1ddea22a13d4534ed992e986ba200b61615aff0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e41271500a9ebf3a186f3fc0d225350699b2a0c1ebfc209d65aa32e8563cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e41271500a9ebf3a186f3fc0d225350699b2a0c1ebfc209d65aa32e8563cc54->enter($__internal_2e41271500a9ebf3a186f3fc0d225350699b2a0c1ebfc209d65aa32e8563cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        

            ";
        
        $__internal_2e41271500a9ebf3a186f3fc0d225350699b2a0c1ebfc209d65aa32e8563cc54->leave($__internal_2e41271500a9ebf3a186f3fc0d225350699b2a0c1ebfc209d65aa32e8563cc54_prof);

        
        $__internal_3d1bc5bbf322d1de1e71bc5d1ddea22a13d4534ed992e986ba200b61615aff0c->leave($__internal_3d1bc5bbf322d1de1e71bc5d1ddea22a13d4534ed992e986ba200b61615aff0c_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fd95f2aebfc0bbc10dbb62e82aabb4b998348f1bbe8f657857c4de6469b2f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd95f2aebfc0bbc10dbb62e82aabb4b998348f1bbe8f657857c4de6469b2f00->enter($__internal_2fd95f2aebfc0bbc10dbb62e82aabb4b998348f1bbe8f657857c4de6469b2f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_371e013c8c44032d423e3c278c9fa12923382726a016c51ad0ca1f076e8b2210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371e013c8c44032d423e3c278c9fa12923382726a016c51ad0ca1f076e8b2210->enter($__internal_371e013c8c44032d423e3c278c9fa12923382726a016c51ad0ca1f076e8b2210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "        
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
        
    ";
        
        $__internal_371e013c8c44032d423e3c278c9fa12923382726a016c51ad0ca1f076e8b2210->leave($__internal_371e013c8c44032d423e3c278c9fa12923382726a016c51ad0ca1f076e8b2210_prof);

        
        $__internal_2fd95f2aebfc0bbc10dbb62e82aabb4b998348f1bbe8f657857c4de6469b2f00->leave($__internal_2fd95f2aebfc0bbc10dbb62e82aabb4b998348f1bbe8f657857c4de6469b2f00_prof);

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
    <link href=\"{{ asset('bundles/user/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
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
", "UserBundle::base.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\src\\UserBundle/Resources/views/base.html.twig");
    }
}
