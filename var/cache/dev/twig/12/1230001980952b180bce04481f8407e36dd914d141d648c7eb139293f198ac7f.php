<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bafb2d1ec0daad8938ac482e2465c35253a90bfaebdd66995202069010f2e6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_47d27816cef325bbbc2a773886af2dd047600a1465045b980301cab1f248d70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d27816cef325bbbc2a773886af2dd047600a1465045b980301cab1f248d70d->enter($__internal_47d27816cef325bbbc2a773886af2dd047600a1465045b980301cab1f248d70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_aac4d4d3cd39658056feda88e9a125d8053093f9d873882f64060a74f074b08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac4d4d3cd39658056feda88e9a125d8053093f9d873882f64060a74f074b08f->enter($__internal_aac4d4d3cd39658056feda88e9a125d8053093f9d873882f64060a74f074b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d27816cef325bbbc2a773886af2dd047600a1465045b980301cab1f248d70d->leave($__internal_47d27816cef325bbbc2a773886af2dd047600a1465045b980301cab1f248d70d_prof);

        
        $__internal_aac4d4d3cd39658056feda88e9a125d8053093f9d873882f64060a74f074b08f->leave($__internal_aac4d4d3cd39658056feda88e9a125d8053093f9d873882f64060a74f074b08f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97e0eab5279b18ed59257cb29d9e745bfba6c04db7b597bd5b28923aeec9fc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e0eab5279b18ed59257cb29d9e745bfba6c04db7b597bd5b28923aeec9fc9f->enter($__internal_97e0eab5279b18ed59257cb29d9e745bfba6c04db7b597bd5b28923aeec9fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_449a4453f56ca7bea3782f2563eaddf27b0f5def972c467644b22707d7bb9cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449a4453f56ca7bea3782f2563eaddf27b0f5def972c467644b22707d7bb9cb3->enter($__internal_449a4453f56ca7bea3782f2563eaddf27b0f5def972c467644b22707d7bb9cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_449a4453f56ca7bea3782f2563eaddf27b0f5def972c467644b22707d7bb9cb3->leave($__internal_449a4453f56ca7bea3782f2563eaddf27b0f5def972c467644b22707d7bb9cb3_prof);

        
        $__internal_97e0eab5279b18ed59257cb29d9e745bfba6c04db7b597bd5b28923aeec9fc9f->leave($__internal_97e0eab5279b18ed59257cb29d9e745bfba6c04db7b597bd5b28923aeec9fc9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
