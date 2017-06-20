<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b409c2afd82a8a2582182c30826e03c7f33fce709990bd022b199d943b67f25b extends Twig_Template
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
        $__internal_0b940b56cbcb8354c2438bafa5a52db8a4623a082d778ccb9592b407f9e34785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b940b56cbcb8354c2438bafa5a52db8a4623a082d778ccb9592b407f9e34785->enter($__internal_0b940b56cbcb8354c2438bafa5a52db8a4623a082d778ccb9592b407f9e34785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2ed7ed2dce80f0507f43f21ff25895fcd143598ee33d0288df8460b7cc11784d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed7ed2dce80f0507f43f21ff25895fcd143598ee33d0288df8460b7cc11784d->enter($__internal_2ed7ed2dce80f0507f43f21ff25895fcd143598ee33d0288df8460b7cc11784d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b940b56cbcb8354c2438bafa5a52db8a4623a082d778ccb9592b407f9e34785->leave($__internal_0b940b56cbcb8354c2438bafa5a52db8a4623a082d778ccb9592b407f9e34785_prof);

        
        $__internal_2ed7ed2dce80f0507f43f21ff25895fcd143598ee33d0288df8460b7cc11784d->leave($__internal_2ed7ed2dce80f0507f43f21ff25895fcd143598ee33d0288df8460b7cc11784d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_02963e2a81ef6694b9f85a1b25f78247ea76539491486e769c9e1eb7197dd152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02963e2a81ef6694b9f85a1b25f78247ea76539491486e769c9e1eb7197dd152->enter($__internal_02963e2a81ef6694b9f85a1b25f78247ea76539491486e769c9e1eb7197dd152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_43bcdd41e30724a38fe6d9b6706a0e5d1238ad1575f2a20e9ddcc90c50344695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bcdd41e30724a38fe6d9b6706a0e5d1238ad1575f2a20e9ddcc90c50344695->enter($__internal_43bcdd41e30724a38fe6d9b6706a0e5d1238ad1575f2a20e9ddcc90c50344695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_43bcdd41e30724a38fe6d9b6706a0e5d1238ad1575f2a20e9ddcc90c50344695->leave($__internal_43bcdd41e30724a38fe6d9b6706a0e5d1238ad1575f2a20e9ddcc90c50344695_prof);

        
        $__internal_02963e2a81ef6694b9f85a1b25f78247ea76539491486e769c9e1eb7197dd152->leave($__internal_02963e2a81ef6694b9f85a1b25f78247ea76539491486e769c9e1eb7197dd152_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b524bf3eacc0aeb9d8866fc0a2e50eb18f67c22d12128c79d843e7b8193841cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b524bf3eacc0aeb9d8866fc0a2e50eb18f67c22d12128c79d843e7b8193841cb->enter($__internal_b524bf3eacc0aeb9d8866fc0a2e50eb18f67c22d12128c79d843e7b8193841cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_388821780b2c520a07fceaa8c123dc85baa3ef8cbacafca13d2c1376f346ff8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388821780b2c520a07fceaa8c123dc85baa3ef8cbacafca13d2c1376f346ff8a->enter($__internal_388821780b2c520a07fceaa8c123dc85baa3ef8cbacafca13d2c1376f346ff8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_388821780b2c520a07fceaa8c123dc85baa3ef8cbacafca13d2c1376f346ff8a->leave($__internal_388821780b2c520a07fceaa8c123dc85baa3ef8cbacafca13d2c1376f346ff8a_prof);

        
        $__internal_b524bf3eacc0aeb9d8866fc0a2e50eb18f67c22d12128c79d843e7b8193841cb->leave($__internal_b524bf3eacc0aeb9d8866fc0a2e50eb18f67c22d12128c79d843e7b8193841cb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d3a47ca0f37fcdbde7e1bbfe62baa6554cb39eacf0a290f8a753a9055930c232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a47ca0f37fcdbde7e1bbfe62baa6554cb39eacf0a290f8a753a9055930c232->enter($__internal_d3a47ca0f37fcdbde7e1bbfe62baa6554cb39eacf0a290f8a753a9055930c232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_fb450bce0f401e69cbd8311d1d17025a68584730fa2619a2ac61225848396064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb450bce0f401e69cbd8311d1d17025a68584730fa2619a2ac61225848396064->enter($__internal_fb450bce0f401e69cbd8311d1d17025a68584730fa2619a2ac61225848396064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fb450bce0f401e69cbd8311d1d17025a68584730fa2619a2ac61225848396064->leave($__internal_fb450bce0f401e69cbd8311d1d17025a68584730fa2619a2ac61225848396064_prof);

        
        $__internal_d3a47ca0f37fcdbde7e1bbfe62baa6554cb39eacf0a290f8a753a9055930c232->leave($__internal_d3a47ca0f37fcdbde7e1bbfe62baa6554cb39eacf0a290f8a753a9055930c232_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
