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
        $__internal_a34f11a22cf5fc38f160983f07931e22163f06c70f2f190c99d256e5a7ba89ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34f11a22cf5fc38f160983f07931e22163f06c70f2f190c99d256e5a7ba89ce->enter($__internal_a34f11a22cf5fc38f160983f07931e22163f06c70f2f190c99d256e5a7ba89ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_aa051eec1be6241669d54c201687e68d11b9d4b61579a0e0325375ffb9281d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa051eec1be6241669d54c201687e68d11b9d4b61579a0e0325375ffb9281d32->enter($__internal_aa051eec1be6241669d54c201687e68d11b9d4b61579a0e0325375ffb9281d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a34f11a22cf5fc38f160983f07931e22163f06c70f2f190c99d256e5a7ba89ce->leave($__internal_a34f11a22cf5fc38f160983f07931e22163f06c70f2f190c99d256e5a7ba89ce_prof);

        
        $__internal_aa051eec1be6241669d54c201687e68d11b9d4b61579a0e0325375ffb9281d32->leave($__internal_aa051eec1be6241669d54c201687e68d11b9d4b61579a0e0325375ffb9281d32_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2f70274c39e3ed6be49cefd5668e83ea350bb36ce8fad50ae7a6acb0baa93349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f70274c39e3ed6be49cefd5668e83ea350bb36ce8fad50ae7a6acb0baa93349->enter($__internal_2f70274c39e3ed6be49cefd5668e83ea350bb36ce8fad50ae7a6acb0baa93349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e2916c2d077b2851a3edc81b64c085e610a1d5a743bb71617f4c501830650a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2916c2d077b2851a3edc81b64c085e610a1d5a743bb71617f4c501830650a40->enter($__internal_e2916c2d077b2851a3edc81b64c085e610a1d5a743bb71617f4c501830650a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_e2916c2d077b2851a3edc81b64c085e610a1d5a743bb71617f4c501830650a40->leave($__internal_e2916c2d077b2851a3edc81b64c085e610a1d5a743bb71617f4c501830650a40_prof);

        
        $__internal_2f70274c39e3ed6be49cefd5668e83ea350bb36ce8fad50ae7a6acb0baa93349->leave($__internal_2f70274c39e3ed6be49cefd5668e83ea350bb36ce8fad50ae7a6acb0baa93349_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_488f72d1ff6d51027cb5c6035c54b93058c2dc38a3954c1e55c74c601c5c15b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488f72d1ff6d51027cb5c6035c54b93058c2dc38a3954c1e55c74c601c5c15b5->enter($__internal_488f72d1ff6d51027cb5c6035c54b93058c2dc38a3954c1e55c74c601c5c15b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_00760cc1b15eb2055461871f397f84245d6dec457f6123f9092515d12ee3be9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00760cc1b15eb2055461871f397f84245d6dec457f6123f9092515d12ee3be9a->enter($__internal_00760cc1b15eb2055461871f397f84245d6dec457f6123f9092515d12ee3be9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_00760cc1b15eb2055461871f397f84245d6dec457f6123f9092515d12ee3be9a->leave($__internal_00760cc1b15eb2055461871f397f84245d6dec457f6123f9092515d12ee3be9a_prof);

        
        $__internal_488f72d1ff6d51027cb5c6035c54b93058c2dc38a3954c1e55c74c601c5c15b5->leave($__internal_488f72d1ff6d51027cb5c6035c54b93058c2dc38a3954c1e55c74c601c5c15b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5d9d02e014368c9ab766bcb2d1907851d98e8130e868bda8761896703f3bed65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9d02e014368c9ab766bcb2d1907851d98e8130e868bda8761896703f3bed65->enter($__internal_5d9d02e014368c9ab766bcb2d1907851d98e8130e868bda8761896703f3bed65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dfdf450bf20de057a146c0c8bc46a9636b73b5ef9ce6694fe9757518ecbad538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdf450bf20de057a146c0c8bc46a9636b73b5ef9ce6694fe9757518ecbad538->enter($__internal_dfdf450bf20de057a146c0c8bc46a9636b73b5ef9ce6694fe9757518ecbad538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfdf450bf20de057a146c0c8bc46a9636b73b5ef9ce6694fe9757518ecbad538->leave($__internal_dfdf450bf20de057a146c0c8bc46a9636b73b5ef9ce6694fe9757518ecbad538_prof);

        
        $__internal_5d9d02e014368c9ab766bcb2d1907851d98e8130e868bda8761896703f3bed65->leave($__internal_5d9d02e014368c9ab766bcb2d1907851d98e8130e868bda8761896703f3bed65_prof);

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
