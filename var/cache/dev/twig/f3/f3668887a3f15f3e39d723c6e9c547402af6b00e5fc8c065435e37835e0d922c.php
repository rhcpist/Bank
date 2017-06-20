<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_24ef5875ab9380cf100cf3f7ea460ae4018b737be65a024e46a2fd248bd134a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_43f38a0ca02787338bf1c0fc268e983f00344606eae4107c9c4b4ebfa907ede6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f38a0ca02787338bf1c0fc268e983f00344606eae4107c9c4b4ebfa907ede6->enter($__internal_43f38a0ca02787338bf1c0fc268e983f00344606eae4107c9c4b4ebfa907ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_271d344961fe04775463aac2993a2d1349995d84f9b78ea08e4b6fcde2b257b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271d344961fe04775463aac2993a2d1349995d84f9b78ea08e4b6fcde2b257b1->enter($__internal_271d344961fe04775463aac2993a2d1349995d84f9b78ea08e4b6fcde2b257b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f38a0ca02787338bf1c0fc268e983f00344606eae4107c9c4b4ebfa907ede6->leave($__internal_43f38a0ca02787338bf1c0fc268e983f00344606eae4107c9c4b4ebfa907ede6_prof);

        
        $__internal_271d344961fe04775463aac2993a2d1349995d84f9b78ea08e4b6fcde2b257b1->leave($__internal_271d344961fe04775463aac2993a2d1349995d84f9b78ea08e4b6fcde2b257b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c190d4496a0a24a647338ac30420dd1d7697301dbcd27a69fd0f78a159916f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c190d4496a0a24a647338ac30420dd1d7697301dbcd27a69fd0f78a159916f9b->enter($__internal_c190d4496a0a24a647338ac30420dd1d7697301dbcd27a69fd0f78a159916f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2f8eeb93a18ad1473a7ee1d1cdf166c417c22f3cbabf9047a8f3be2fcc3a2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f8eeb93a18ad1473a7ee1d1cdf166c417c22f3cbabf9047a8f3be2fcc3a2ce->enter($__internal_f2f8eeb93a18ad1473a7ee1d1cdf166c417c22f3cbabf9047a8f3be2fcc3a2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f2f8eeb93a18ad1473a7ee1d1cdf166c417c22f3cbabf9047a8f3be2fcc3a2ce->leave($__internal_f2f8eeb93a18ad1473a7ee1d1cdf166c417c22f3cbabf9047a8f3be2fcc3a2ce_prof);

        
        $__internal_c190d4496a0a24a647338ac30420dd1d7697301dbcd27a69fd0f78a159916f9b->leave($__internal_c190d4496a0a24a647338ac30420dd1d7697301dbcd27a69fd0f78a159916f9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
