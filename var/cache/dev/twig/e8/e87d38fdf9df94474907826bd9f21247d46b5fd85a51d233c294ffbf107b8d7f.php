<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_f255dea18e3aa7412c9ad41131ebd535909dad09f1e945c31913172fde59ff7c extends Twig_Template
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
        $__internal_041c3e29e1c3149da3fdd31539db122bcc445fe8e9d8286f31de8abb83d540d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041c3e29e1c3149da3fdd31539db122bcc445fe8e9d8286f31de8abb83d540d4->enter($__internal_041c3e29e1c3149da3fdd31539db122bcc445fe8e9d8286f31de8abb83d540d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_8b566589ebf1aa56ab80e5b542b983c6717ea32497aeb45e229f995716a37334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b566589ebf1aa56ab80e5b542b983c6717ea32497aeb45e229f995716a37334->enter($__internal_8b566589ebf1aa56ab80e5b542b983c6717ea32497aeb45e229f995716a37334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_041c3e29e1c3149da3fdd31539db122bcc445fe8e9d8286f31de8abb83d540d4->leave($__internal_041c3e29e1c3149da3fdd31539db122bcc445fe8e9d8286f31de8abb83d540d4_prof);

        
        $__internal_8b566589ebf1aa56ab80e5b542b983c6717ea32497aeb45e229f995716a37334->leave($__internal_8b566589ebf1aa56ab80e5b542b983c6717ea32497aeb45e229f995716a37334_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
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
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\djiby2\\forum\\app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
