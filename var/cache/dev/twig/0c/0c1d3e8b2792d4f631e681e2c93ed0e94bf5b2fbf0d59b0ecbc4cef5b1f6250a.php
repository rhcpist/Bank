<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4b786d0bf6a16b54f4b2e364f1e3c1689d4940cb52d4d443166d705897208be4 extends Twig_Template
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
        $__internal_5e2c7668296a6b5803f51f4e712794dae4908780e22c3c1e6911c7ed336780e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2c7668296a6b5803f51f4e712794dae4908780e22c3c1e6911c7ed336780e9->enter($__internal_5e2c7668296a6b5803f51f4e712794dae4908780e22c3c1e6911c7ed336780e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a0d77f290c16fe3cd28ae41ff84f6402b3b215edb14b8828f3c1614acc1f46b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d77f290c16fe3cd28ae41ff84f6402b3b215edb14b8828f3c1614acc1f46b8->enter($__internal_a0d77f290c16fe3cd28ae41ff84f6402b3b215edb14b8828f3c1614acc1f46b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5e2c7668296a6b5803f51f4e712794dae4908780e22c3c1e6911c7ed336780e9->leave($__internal_5e2c7668296a6b5803f51f4e712794dae4908780e22c3c1e6911c7ed336780e9_prof);

        
        $__internal_a0d77f290c16fe3cd28ae41ff84f6402b3b215edb14b8828f3c1614acc1f46b8->leave($__internal_a0d77f290c16fe3cd28ae41ff84f6402b3b215edb14b8828f3c1614acc1f46b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_846e3b1f573ff024e10ccde56ebe6e2f4840f601bf2b3844f8bda78613504f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846e3b1f573ff024e10ccde56ebe6e2f4840f601bf2b3844f8bda78613504f8b->enter($__internal_846e3b1f573ff024e10ccde56ebe6e2f4840f601bf2b3844f8bda78613504f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b04bc00f0ae15982143e64b6c77144f72c83dbff12cc5cf3806ef1cf99fd0fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04bc00f0ae15982143e64b6c77144f72c83dbff12cc5cf3806ef1cf99fd0fa6->enter($__internal_b04bc00f0ae15982143e64b6c77144f72c83dbff12cc5cf3806ef1cf99fd0fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_b04bc00f0ae15982143e64b6c77144f72c83dbff12cc5cf3806ef1cf99fd0fa6->leave($__internal_b04bc00f0ae15982143e64b6c77144f72c83dbff12cc5cf3806ef1cf99fd0fa6_prof);

        
        $__internal_846e3b1f573ff024e10ccde56ebe6e2f4840f601bf2b3844f8bda78613504f8b->leave($__internal_846e3b1f573ff024e10ccde56ebe6e2f4840f601bf2b3844f8bda78613504f8b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ed574e21581abb5a281e159183a67587d680d8aed7b0156d0b82e5e70b56957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed574e21581abb5a281e159183a67587d680d8aed7b0156d0b82e5e70b56957->enter($__internal_6ed574e21581abb5a281e159183a67587d680d8aed7b0156d0b82e5e70b56957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5eaac3deeb27b5bd43464dc2d22a950e8687d8f9e62a80f639eb36ab10818057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaac3deeb27b5bd43464dc2d22a950e8687d8f9e62a80f639eb36ab10818057->enter($__internal_5eaac3deeb27b5bd43464dc2d22a950e8687d8f9e62a80f639eb36ab10818057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5eaac3deeb27b5bd43464dc2d22a950e8687d8f9e62a80f639eb36ab10818057->leave($__internal_5eaac3deeb27b5bd43464dc2d22a950e8687d8f9e62a80f639eb36ab10818057_prof);

        
        $__internal_6ed574e21581abb5a281e159183a67587d680d8aed7b0156d0b82e5e70b56957->leave($__internal_6ed574e21581abb5a281e159183a67587d680d8aed7b0156d0b82e5e70b56957_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ae071895ac503f9534d599b5f0cbc2580c252388c48e6645a66ebf244d49450c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae071895ac503f9534d599b5f0cbc2580c252388c48e6645a66ebf244d49450c->enter($__internal_ae071895ac503f9534d599b5f0cbc2580c252388c48e6645a66ebf244d49450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f69069ecac9d7f05bfd2ab0b7241f7aad51d058c7d5a923a3c5aefa9f770a527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69069ecac9d7f05bfd2ab0b7241f7aad51d058c7d5a923a3c5aefa9f770a527->enter($__internal_f69069ecac9d7f05bfd2ab0b7241f7aad51d058c7d5a923a3c5aefa9f770a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f69069ecac9d7f05bfd2ab0b7241f7aad51d058c7d5a923a3c5aefa9f770a527->leave($__internal_f69069ecac9d7f05bfd2ab0b7241f7aad51d058c7d5a923a3c5aefa9f770a527_prof);

        
        $__internal_ae071895ac503f9534d599b5f0cbc2580c252388c48e6645a66ebf244d49450c->leave($__internal_ae071895ac503f9534d599b5f0cbc2580c252388c48e6645a66ebf244d49450c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
