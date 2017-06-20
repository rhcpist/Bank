<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_af793209593c9a11efe96b7bcc37ebc32138717aad3239250611894c7f7f898e extends Twig_Template
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
        $__internal_40f3fea326fe57e96ef21a3900727f41a03cc234e46268b4a51d36eab78fb79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f3fea326fe57e96ef21a3900727f41a03cc234e46268b4a51d36eab78fb79c->enter($__internal_40f3fea326fe57e96ef21a3900727f41a03cc234e46268b4a51d36eab78fb79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_238fa3add16ff36a2d591f5314749fe813e679df922ed1c157b253b7f30fff7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238fa3add16ff36a2d591f5314749fe813e679df922ed1c157b253b7f30fff7e->enter($__internal_238fa3add16ff36a2d591f5314749fe813e679df922ed1c157b253b7f30fff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f3fea326fe57e96ef21a3900727f41a03cc234e46268b4a51d36eab78fb79c->leave($__internal_40f3fea326fe57e96ef21a3900727f41a03cc234e46268b4a51d36eab78fb79c_prof);

        
        $__internal_238fa3add16ff36a2d591f5314749fe813e679df922ed1c157b253b7f30fff7e->leave($__internal_238fa3add16ff36a2d591f5314749fe813e679df922ed1c157b253b7f30fff7e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d98df407aae8aec66031e7af50dfea83e8fe0be5b509608db0855a0eaa04eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d98df407aae8aec66031e7af50dfea83e8fe0be5b509608db0855a0eaa04eb5->enter($__internal_0d98df407aae8aec66031e7af50dfea83e8fe0be5b509608db0855a0eaa04eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d825e9320a4f24a4d51f6cd68b9754eab029a9a09c6ba2fef8e6f95f43e9217c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d825e9320a4f24a4d51f6cd68b9754eab029a9a09c6ba2fef8e6f95f43e9217c->enter($__internal_d825e9320a4f24a4d51f6cd68b9754eab029a9a09c6ba2fef8e6f95f43e9217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d825e9320a4f24a4d51f6cd68b9754eab029a9a09c6ba2fef8e6f95f43e9217c->leave($__internal_d825e9320a4f24a4d51f6cd68b9754eab029a9a09c6ba2fef8e6f95f43e9217c_prof);

        
        $__internal_0d98df407aae8aec66031e7af50dfea83e8fe0be5b509608db0855a0eaa04eb5->leave($__internal_0d98df407aae8aec66031e7af50dfea83e8fe0be5b509608db0855a0eaa04eb5_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
