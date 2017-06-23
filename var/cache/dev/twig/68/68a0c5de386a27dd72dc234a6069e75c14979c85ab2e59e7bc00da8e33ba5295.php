<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dcc5353928a54c4d4a1afbdaa380989fbe919bcf0bbcedd3b8ea74bfc9e076f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a75379ccf388b2e519f1180e35798cae77f714a41f714428b3a6da8ae9151c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75379ccf388b2e519f1180e35798cae77f714a41f714428b3a6da8ae9151c25->enter($__internal_a75379ccf388b2e519f1180e35798cae77f714a41f714428b3a6da8ae9151c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6f957cbe76105d1eaed78e906407a304db2d8ae1e0cf5ea36b48db9bb8174ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f957cbe76105d1eaed78e906407a304db2d8ae1e0cf5ea36b48db9bb8174ff6->enter($__internal_6f957cbe76105d1eaed78e906407a304db2d8ae1e0cf5ea36b48db9bb8174ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75379ccf388b2e519f1180e35798cae77f714a41f714428b3a6da8ae9151c25->leave($__internal_a75379ccf388b2e519f1180e35798cae77f714a41f714428b3a6da8ae9151c25_prof);

        
        $__internal_6f957cbe76105d1eaed78e906407a304db2d8ae1e0cf5ea36b48db9bb8174ff6->leave($__internal_6f957cbe76105d1eaed78e906407a304db2d8ae1e0cf5ea36b48db9bb8174ff6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_219acc5d3dba5d9fadab3be767d2873f85f3cc656a97fe25ed1721565bb13473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219acc5d3dba5d9fadab3be767d2873f85f3cc656a97fe25ed1721565bb13473->enter($__internal_219acc5d3dba5d9fadab3be767d2873f85f3cc656a97fe25ed1721565bb13473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e7b150d4bc6a84241aeb3875a17570e5a81cd9185fe5927043e291662fee112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7b150d4bc6a84241aeb3875a17570e5a81cd9185fe5927043e291662fee112->enter($__internal_6e7b150d4bc6a84241aeb3875a17570e5a81cd9185fe5927043e291662fee112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6e7b150d4bc6a84241aeb3875a17570e5a81cd9185fe5927043e291662fee112->leave($__internal_6e7b150d4bc6a84241aeb3875a17570e5a81cd9185fe5927043e291662fee112_prof);

        
        $__internal_219acc5d3dba5d9fadab3be767d2873f85f3cc656a97fe25ed1721565bb13473->leave($__internal_219acc5d3dba5d9fadab3be767d2873f85f3cc656a97fe25ed1721565bb13473_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
