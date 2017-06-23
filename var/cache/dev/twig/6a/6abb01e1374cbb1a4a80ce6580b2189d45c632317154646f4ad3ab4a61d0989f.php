<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_598762c24cc76a3a80534d16b6145263d4559fb421d84df1e9c48e2877751823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bbe08744bffef0f74db69242e7da663a893c0692791c296d423a3774e38d34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbe08744bffef0f74db69242e7da663a893c0692791c296d423a3774e38d34e->enter($__internal_5bbe08744bffef0f74db69242e7da663a893c0692791c296d423a3774e38d34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c8abff74ab71bf708165f0df8557b550d65d410bc48a08dbeb662b769261b449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8abff74ab71bf708165f0df8557b550d65d410bc48a08dbeb662b769261b449->enter($__internal_c8abff74ab71bf708165f0df8557b550d65d410bc48a08dbeb662b769261b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5bbe08744bffef0f74db69242e7da663a893c0692791c296d423a3774e38d34e->leave($__internal_5bbe08744bffef0f74db69242e7da663a893c0692791c296d423a3774e38d34e_prof);

        
        $__internal_c8abff74ab71bf708165f0df8557b550d65d410bc48a08dbeb662b769261b449->leave($__internal_c8abff74ab71bf708165f0df8557b550d65d410bc48a08dbeb662b769261b449_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d7b817fa58dc90fabc396673b2f676db7cdd4bb5db15a2a61483009ffe285e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b817fa58dc90fabc396673b2f676db7cdd4bb5db15a2a61483009ffe285e40->enter($__internal_d7b817fa58dc90fabc396673b2f676db7cdd4bb5db15a2a61483009ffe285e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7c4db9d30eb230959ae35d3bd1ad50663d8e21b6069831e809338c9f558a2b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4db9d30eb230959ae35d3bd1ad50663d8e21b6069831e809338c9f558a2b60->enter($__internal_7c4db9d30eb230959ae35d3bd1ad50663d8e21b6069831e809338c9f558a2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_7c4db9d30eb230959ae35d3bd1ad50663d8e21b6069831e809338c9f558a2b60->leave($__internal_7c4db9d30eb230959ae35d3bd1ad50663d8e21b6069831e809338c9f558a2b60_prof);

        
        $__internal_d7b817fa58dc90fabc396673b2f676db7cdd4bb5db15a2a61483009ffe285e40->leave($__internal_d7b817fa58dc90fabc396673b2f676db7cdd4bb5db15a2a61483009ffe285e40_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e1d01034524dbcfa11ccfc92ec0f21c62bcec14ef0df1f8f4a9eec143a2048de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d01034524dbcfa11ccfc92ec0f21c62bcec14ef0df1f8f4a9eec143a2048de->enter($__internal_e1d01034524dbcfa11ccfc92ec0f21c62bcec14ef0df1f8f4a9eec143a2048de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5dac390afb3d33d8340612edd34876f66f2644b65ccc723453643d512415781c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dac390afb3d33d8340612edd34876f66f2644b65ccc723453643d512415781c->enter($__internal_5dac390afb3d33d8340612edd34876f66f2644b65ccc723453643d512415781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5dac390afb3d33d8340612edd34876f66f2644b65ccc723453643d512415781c->leave($__internal_5dac390afb3d33d8340612edd34876f66f2644b65ccc723453643d512415781c_prof);

        
        $__internal_e1d01034524dbcfa11ccfc92ec0f21c62bcec14ef0df1f8f4a9eec143a2048de->leave($__internal_e1d01034524dbcfa11ccfc92ec0f21c62bcec14ef0df1f8f4a9eec143a2048de_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac8ad05948e8ca375b6f2c5280d5ed1578866a4566534fd033bb5268f5e5c78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8ad05948e8ca375b6f2c5280d5ed1578866a4566534fd033bb5268f5e5c78b->enter($__internal_ac8ad05948e8ca375b6f2c5280d5ed1578866a4566534fd033bb5268f5e5c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_abccccc6cd2b5a962e77cd73901fe3a2a637951936b75081b06928ed978ce3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abccccc6cd2b5a962e77cd73901fe3a2a637951936b75081b06928ed978ce3cd->enter($__internal_abccccc6cd2b5a962e77cd73901fe3a2a637951936b75081b06928ed978ce3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_abccccc6cd2b5a962e77cd73901fe3a2a637951936b75081b06928ed978ce3cd->leave($__internal_abccccc6cd2b5a962e77cd73901fe3a2a637951936b75081b06928ed978ce3cd_prof);

        
        $__internal_ac8ad05948e8ca375b6f2c5280d5ed1578866a4566534fd033bb5268f5e5c78b->leave($__internal_ac8ad05948e8ca375b6f2c5280d5ed1578866a4566534fd033bb5268f5e5c78b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
