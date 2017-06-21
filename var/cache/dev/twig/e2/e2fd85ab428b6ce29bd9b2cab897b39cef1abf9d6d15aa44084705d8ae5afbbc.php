<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_69d2176650d8df4559494a44102b9ab2532e10479fa3689ead9d30d719f10561 extends Twig_Template
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
        $__internal_e6205a365aea16a40f6a2532b759e38c2e22840e3f15ce5f3c6de3ad82345b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6205a365aea16a40f6a2532b759e38c2e22840e3f15ce5f3c6de3ad82345b18->enter($__internal_e6205a365aea16a40f6a2532b759e38c2e22840e3f15ce5f3c6de3ad82345b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a419660470bc289af1a3290f9846613ff7e7c36c1f2787db2f4b3351889a549a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a419660470bc289af1a3290f9846613ff7e7c36c1f2787db2f4b3351889a549a->enter($__internal_a419660470bc289af1a3290f9846613ff7e7c36c1f2787db2f4b3351889a549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_e6205a365aea16a40f6a2532b759e38c2e22840e3f15ce5f3c6de3ad82345b18->leave($__internal_e6205a365aea16a40f6a2532b759e38c2e22840e3f15ce5f3c6de3ad82345b18_prof);

        
        $__internal_a419660470bc289af1a3290f9846613ff7e7c36c1f2787db2f4b3351889a549a->leave($__internal_a419660470bc289af1a3290f9846613ff7e7c36c1f2787db2f4b3351889a549a_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
