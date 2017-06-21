<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_17b85ea572dda0118d98cdf3f24e02b23898a02e846ffa472dd161b067a7a48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3259a5f4a470dc06804a302f29c46c54b00a14f0e24ff065f644d2116963b660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3259a5f4a470dc06804a302f29c46c54b00a14f0e24ff065f644d2116963b660->enter($__internal_3259a5f4a470dc06804a302f29c46c54b00a14f0e24ff065f644d2116963b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b94594fb3beea61efe9e329a7ca34df7fc9aa8560d3b0ffafe3485bddbdd521a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94594fb3beea61efe9e329a7ca34df7fc9aa8560d3b0ffafe3485bddbdd521a->enter($__internal_b94594fb3beea61efe9e329a7ca34df7fc9aa8560d3b0ffafe3485bddbdd521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3259a5f4a470dc06804a302f29c46c54b00a14f0e24ff065f644d2116963b660->leave($__internal_3259a5f4a470dc06804a302f29c46c54b00a14f0e24ff065f644d2116963b660_prof);

        
        $__internal_b94594fb3beea61efe9e329a7ca34df7fc9aa8560d3b0ffafe3485bddbdd521a->leave($__internal_b94594fb3beea61efe9e329a7ca34df7fc9aa8560d3b0ffafe3485bddbdd521a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9111b016ff3f837ed243f78fb0d967604bdb98daccceb2a63684de0ab3e3ad3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9111b016ff3f837ed243f78fb0d967604bdb98daccceb2a63684de0ab3e3ad3c->enter($__internal_9111b016ff3f837ed243f78fb0d967604bdb98daccceb2a63684de0ab3e3ad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5b4a76f11f6a201d4457bd6d0ff35d6d4cfa741e25a374a6c2b9b528a1ab5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b4a76f11f6a201d4457bd6d0ff35d6d4cfa741e25a374a6c2b9b528a1ab5c6->enter($__internal_d5b4a76f11f6a201d4457bd6d0ff35d6d4cfa741e25a374a6c2b9b528a1ab5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d5b4a76f11f6a201d4457bd6d0ff35d6d4cfa741e25a374a6c2b9b528a1ab5c6->leave($__internal_d5b4a76f11f6a201d4457bd6d0ff35d6d4cfa741e25a374a6c2b9b528a1ab5c6_prof);

        
        $__internal_9111b016ff3f837ed243f78fb0d967604bdb98daccceb2a63684de0ab3e3ad3c->leave($__internal_9111b016ff3f837ed243f78fb0d967604bdb98daccceb2a63684de0ab3e3ad3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
