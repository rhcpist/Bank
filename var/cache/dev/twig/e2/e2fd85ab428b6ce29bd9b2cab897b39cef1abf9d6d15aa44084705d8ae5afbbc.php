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
        $__internal_0bd55cb0ece743bceb9e0e2cf8142517c0a62f5ca960e545546a8d77a8f0a390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd55cb0ece743bceb9e0e2cf8142517c0a62f5ca960e545546a8d77a8f0a390->enter($__internal_0bd55cb0ece743bceb9e0e2cf8142517c0a62f5ca960e545546a8d77a8f0a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d3b7d25f4d25c35455d9f573578c9a8a788b41a5e9dbdacebe1ada27c07927a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b7d25f4d25c35455d9f573578c9a8a788b41a5e9dbdacebe1ada27c07927a1->enter($__internal_d3b7d25f4d25c35455d9f573578c9a8a788b41a5e9dbdacebe1ada27c07927a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_0bd55cb0ece743bceb9e0e2cf8142517c0a62f5ca960e545546a8d77a8f0a390->leave($__internal_0bd55cb0ece743bceb9e0e2cf8142517c0a62f5ca960e545546a8d77a8f0a390_prof);

        
        $__internal_d3b7d25f4d25c35455d9f573578c9a8a788b41a5e9dbdacebe1ada27c07927a1->leave($__internal_d3b7d25f4d25c35455d9f573578c9a8a788b41a5e9dbdacebe1ada27c07927a1_prof);

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
