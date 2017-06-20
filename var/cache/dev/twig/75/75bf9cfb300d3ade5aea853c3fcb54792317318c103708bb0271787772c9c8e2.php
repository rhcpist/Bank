<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7d4364e403a9c081722cdd52d844e2c6fcfbaa57c3bf3b87f1223a856387991b extends Twig_Template
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
        $__internal_c408c5c4331f09972b62a29b0a71223391de1c343cf457c571bc26aa80df2f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c408c5c4331f09972b62a29b0a71223391de1c343cf457c571bc26aa80df2f62->enter($__internal_c408c5c4331f09972b62a29b0a71223391de1c343cf457c571bc26aa80df2f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_5269b8a04e5829d10a0d85715232e31c0e60a02392c1356788e793f3064694bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5269b8a04e5829d10a0d85715232e31c0e60a02392c1356788e793f3064694bd->enter($__internal_5269b8a04e5829d10a0d85715232e31c0e60a02392c1356788e793f3064694bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c408c5c4331f09972b62a29b0a71223391de1c343cf457c571bc26aa80df2f62->leave($__internal_c408c5c4331f09972b62a29b0a71223391de1c343cf457c571bc26aa80df2f62_prof);

        
        $__internal_5269b8a04e5829d10a0d85715232e31c0e60a02392c1356788e793f3064694bd->leave($__internal_5269b8a04e5829d10a0d85715232e31c0e60a02392c1356788e793f3064694bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
