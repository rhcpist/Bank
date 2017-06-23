<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5d4fe5469bbda887a59f2e74c127b7bf9e7c2898fb981e0ce63d3763cae45ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_80216edc2e630611942d626a429b4c36e70a2408de3bef70c9c5b6a92a6c0c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80216edc2e630611942d626a429b4c36e70a2408de3bef70c9c5b6a92a6c0c06->enter($__internal_80216edc2e630611942d626a429b4c36e70a2408de3bef70c9c5b6a92a6c0c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1f08216fec22f878b2e2c2f34eb29c7c3f7cc485237ed143d102e5edb1ddabdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f08216fec22f878b2e2c2f34eb29c7c3f7cc485237ed143d102e5edb1ddabdb->enter($__internal_1f08216fec22f878b2e2c2f34eb29c7c3f7cc485237ed143d102e5edb1ddabdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80216edc2e630611942d626a429b4c36e70a2408de3bef70c9c5b6a92a6c0c06->leave($__internal_80216edc2e630611942d626a429b4c36e70a2408de3bef70c9c5b6a92a6c0c06_prof);

        
        $__internal_1f08216fec22f878b2e2c2f34eb29c7c3f7cc485237ed143d102e5edb1ddabdb->leave($__internal_1f08216fec22f878b2e2c2f34eb29c7c3f7cc485237ed143d102e5edb1ddabdb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37f5a907fbd91d46e3f0d87ecf82d71b64cda9f23142fb7c3623b1859175e44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f5a907fbd91d46e3f0d87ecf82d71b64cda9f23142fb7c3623b1859175e44a->enter($__internal_37f5a907fbd91d46e3f0d87ecf82d71b64cda9f23142fb7c3623b1859175e44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b24170fae2936c52561ae3beb93828952fe8ad0ece76b0204b208aa9c677916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b24170fae2936c52561ae3beb93828952fe8ad0ece76b0204b208aa9c677916->enter($__internal_5b24170fae2936c52561ae3beb93828952fe8ad0ece76b0204b208aa9c677916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5b24170fae2936c52561ae3beb93828952fe8ad0ece76b0204b208aa9c677916->leave($__internal_5b24170fae2936c52561ae3beb93828952fe8ad0ece76b0204b208aa9c677916_prof);

        
        $__internal_37f5a907fbd91d46e3f0d87ecf82d71b64cda9f23142fb7c3623b1859175e44a->leave($__internal_37f5a907fbd91d46e3f0d87ecf82d71b64cda9f23142fb7c3623b1859175e44a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
