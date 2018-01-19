<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_27eb3c7fe25c64a0d83a13686efe5d8fcaa90207f739fbae6a7df44aff780ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca0ce5eb05a27de2ca651aa178bf38522d034492424984d8f53ccf8934427774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0ce5eb05a27de2ca651aa178bf38522d034492424984d8f53ccf8934427774->enter($__internal_ca0ce5eb05a27de2ca651aa178bf38522d034492424984d8f53ccf8934427774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_6356813fb2e5f4b31d2b2e8c80b371a07c7ca9c3675f147980022cb8eac98fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6356813fb2e5f4b31d2b2e8c80b371a07c7ca9c3675f147980022cb8eac98fc5->enter($__internal_6356813fb2e5f4b31d2b2e8c80b371a07c7ca9c3675f147980022cb8eac98fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_ca0ce5eb05a27de2ca651aa178bf38522d034492424984d8f53ccf8934427774->leave($__internal_ca0ce5eb05a27de2ca651aa178bf38522d034492424984d8f53ccf8934427774_prof);

        
        $__internal_6356813fb2e5f4b31d2b2e8c80b371a07c7ca9c3675f147980022cb8eac98fc5->leave($__internal_6356813fb2e5f4b31d2b2e8c80b371a07c7ca9c3675f147980022cb8eac98fc5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app\\Resources\\FOSUserBundle\\views\\Group\\list_content.html.twig");
    }
}
