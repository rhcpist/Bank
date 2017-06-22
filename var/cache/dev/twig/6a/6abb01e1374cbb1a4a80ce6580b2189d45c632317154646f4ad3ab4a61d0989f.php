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
        $__internal_c5f250a144ab0756b51d49ba56566d55bbcad42529295bcfaac05de1f6fd8204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f250a144ab0756b51d49ba56566d55bbcad42529295bcfaac05de1f6fd8204->enter($__internal_c5f250a144ab0756b51d49ba56566d55bbcad42529295bcfaac05de1f6fd8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_640d97464b8e1f023ff74fccbaac18a4fae36d99925ff5491f4fe4ea15551ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640d97464b8e1f023ff74fccbaac18a4fae36d99925ff5491f4fe4ea15551ace->enter($__internal_640d97464b8e1f023ff74fccbaac18a4fae36d99925ff5491f4fe4ea15551ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c5f250a144ab0756b51d49ba56566d55bbcad42529295bcfaac05de1f6fd8204->leave($__internal_c5f250a144ab0756b51d49ba56566d55bbcad42529295bcfaac05de1f6fd8204_prof);

        
        $__internal_640d97464b8e1f023ff74fccbaac18a4fae36d99925ff5491f4fe4ea15551ace->leave($__internal_640d97464b8e1f023ff74fccbaac18a4fae36d99925ff5491f4fe4ea15551ace_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_12855f18af4f93a93c64e0c0657bbcc6d78be981df348fcbd42781005cc4f0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12855f18af4f93a93c64e0c0657bbcc6d78be981df348fcbd42781005cc4f0c3->enter($__internal_12855f18af4f93a93c64e0c0657bbcc6d78be981df348fcbd42781005cc4f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2bb8c0f9b70bc5b35c552e264dfac9b7e071569341b9d75684c8e929e4a1f096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb8c0f9b70bc5b35c552e264dfac9b7e071569341b9d75684c8e929e4a1f096->enter($__internal_2bb8c0f9b70bc5b35c552e264dfac9b7e071569341b9d75684c8e929e4a1f096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_2bb8c0f9b70bc5b35c552e264dfac9b7e071569341b9d75684c8e929e4a1f096->leave($__internal_2bb8c0f9b70bc5b35c552e264dfac9b7e071569341b9d75684c8e929e4a1f096_prof);

        
        $__internal_12855f18af4f93a93c64e0c0657bbcc6d78be981df348fcbd42781005cc4f0c3->leave($__internal_12855f18af4f93a93c64e0c0657bbcc6d78be981df348fcbd42781005cc4f0c3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_589fd7106ce7c2f90ab70020b8c1d4c702e285d0ffb23e8b97206a007b4f9996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589fd7106ce7c2f90ab70020b8c1d4c702e285d0ffb23e8b97206a007b4f9996->enter($__internal_589fd7106ce7c2f90ab70020b8c1d4c702e285d0ffb23e8b97206a007b4f9996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e0b8e4989230d664023415c042f12836735aacb72fcfe45f35c032952109ecd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b8e4989230d664023415c042f12836735aacb72fcfe45f35c032952109ecd8->enter($__internal_e0b8e4989230d664023415c042f12836735aacb72fcfe45f35c032952109ecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e0b8e4989230d664023415c042f12836735aacb72fcfe45f35c032952109ecd8->leave($__internal_e0b8e4989230d664023415c042f12836735aacb72fcfe45f35c032952109ecd8_prof);

        
        $__internal_589fd7106ce7c2f90ab70020b8c1d4c702e285d0ffb23e8b97206a007b4f9996->leave($__internal_589fd7106ce7c2f90ab70020b8c1d4c702e285d0ffb23e8b97206a007b4f9996_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e418aff98b3eca992b37e9590432fab20ae0f6ca91239b3e2fbff115141a589b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e418aff98b3eca992b37e9590432fab20ae0f6ca91239b3e2fbff115141a589b->enter($__internal_e418aff98b3eca992b37e9590432fab20ae0f6ca91239b3e2fbff115141a589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_13f882fbab376a38fb7a3075c2d9df78f70b630ebc09a12d4694e9f34542803b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f882fbab376a38fb7a3075c2d9df78f70b630ebc09a12d4694e9f34542803b->enter($__internal_13f882fbab376a38fb7a3075c2d9df78f70b630ebc09a12d4694e9f34542803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_13f882fbab376a38fb7a3075c2d9df78f70b630ebc09a12d4694e9f34542803b->leave($__internal_13f882fbab376a38fb7a3075c2d9df78f70b630ebc09a12d4694e9f34542803b_prof);

        
        $__internal_e418aff98b3eca992b37e9590432fab20ae0f6ca91239b3e2fbff115141a589b->leave($__internal_e418aff98b3eca992b37e9590432fab20ae0f6ca91239b3e2fbff115141a589b_prof);

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
