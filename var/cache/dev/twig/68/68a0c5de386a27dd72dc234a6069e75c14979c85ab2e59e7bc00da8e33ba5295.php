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
        $__internal_7a7f39d73ae4d4edb460c70439fb837b59befd45c92ef05314fc04eb95804b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7f39d73ae4d4edb460c70439fb837b59befd45c92ef05314fc04eb95804b21->enter($__internal_7a7f39d73ae4d4edb460c70439fb837b59befd45c92ef05314fc04eb95804b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_20d8714f588ce399b234fc9684c71aacda6b39f915bdb603d3a1b49c8680c901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d8714f588ce399b234fc9684c71aacda6b39f915bdb603d3a1b49c8680c901->enter($__internal_20d8714f588ce399b234fc9684c71aacda6b39f915bdb603d3a1b49c8680c901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7f39d73ae4d4edb460c70439fb837b59befd45c92ef05314fc04eb95804b21->leave($__internal_7a7f39d73ae4d4edb460c70439fb837b59befd45c92ef05314fc04eb95804b21_prof);

        
        $__internal_20d8714f588ce399b234fc9684c71aacda6b39f915bdb603d3a1b49c8680c901->leave($__internal_20d8714f588ce399b234fc9684c71aacda6b39f915bdb603d3a1b49c8680c901_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f64c4a4875e39038b4c3b2468c42ffb651b7c6519bd2427daa7b3e5193bb93a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64c4a4875e39038b4c3b2468c42ffb651b7c6519bd2427daa7b3e5193bb93a6->enter($__internal_f64c4a4875e39038b4c3b2468c42ffb651b7c6519bd2427daa7b3e5193bb93a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca69103befa0d308545eb71c12fa1d459674d3f642d37ee98385ff889fe580cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca69103befa0d308545eb71c12fa1d459674d3f642d37ee98385ff889fe580cb->enter($__internal_ca69103befa0d308545eb71c12fa1d459674d3f642d37ee98385ff889fe580cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ca69103befa0d308545eb71c12fa1d459674d3f642d37ee98385ff889fe580cb->leave($__internal_ca69103befa0d308545eb71c12fa1d459674d3f642d37ee98385ff889fe580cb_prof);

        
        $__internal_f64c4a4875e39038b4c3b2468c42ffb651b7c6519bd2427daa7b3e5193bb93a6->leave($__internal_f64c4a4875e39038b4c3b2468c42ffb651b7c6519bd2427daa7b3e5193bb93a6_prof);

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
