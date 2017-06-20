<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_07cefad9c8777c154eb58d300795ce928d85f904e6d98fcbf7fddb4789ae8586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac4d50142c4cf1e07297941b6e1071209bed8313c17e9dc7f531a742bc47e2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4d50142c4cf1e07297941b6e1071209bed8313c17e9dc7f531a742bc47e2db->enter($__internal_ac4d50142c4cf1e07297941b6e1071209bed8313c17e9dc7f531a742bc47e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2bb2bfefa87f4d36fc6e747d1795db7cabc9af0af213e6a9abf0a8e7c46cee30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb2bfefa87f4d36fc6e747d1795db7cabc9af0af213e6a9abf0a8e7c46cee30->enter($__internal_2bb2bfefa87f4d36fc6e747d1795db7cabc9af0af213e6a9abf0a8e7c46cee30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4d50142c4cf1e07297941b6e1071209bed8313c17e9dc7f531a742bc47e2db->leave($__internal_ac4d50142c4cf1e07297941b6e1071209bed8313c17e9dc7f531a742bc47e2db_prof);

        
        $__internal_2bb2bfefa87f4d36fc6e747d1795db7cabc9af0af213e6a9abf0a8e7c46cee30->leave($__internal_2bb2bfefa87f4d36fc6e747d1795db7cabc9af0af213e6a9abf0a8e7c46cee30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20b236162955c5664c405741baca6e496e522bafde760a4712c9e6c6fd5baf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b236162955c5664c405741baca6e496e522bafde760a4712c9e6c6fd5baf77->enter($__internal_20b236162955c5664c405741baca6e496e522bafde760a4712c9e6c6fd5baf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f7ca09bdfee621f3182f11a6fefc34acc7bea0f8369f76c77bba7ea14272e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7ca09bdfee621f3182f11a6fefc34acc7bea0f8369f76c77bba7ea14272e60->enter($__internal_7f7ca09bdfee621f3182f11a6fefc34acc7bea0f8369f76c77bba7ea14272e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7f7ca09bdfee621f3182f11a6fefc34acc7bea0f8369f76c77bba7ea14272e60->leave($__internal_7f7ca09bdfee621f3182f11a6fefc34acc7bea0f8369f76c77bba7ea14272e60_prof);

        
        $__internal_20b236162955c5664c405741baca6e496e522bafde760a4712c9e6c6fd5baf77->leave($__internal_20b236162955c5664c405741baca6e496e522bafde760a4712c9e6c6fd5baf77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
