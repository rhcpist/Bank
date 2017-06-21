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
        $__internal_b63a50a4034ee9cf3b23b68cc2de23ee9b7d1b0e2e09af42aaef05c26db7b9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63a50a4034ee9cf3b23b68cc2de23ee9b7d1b0e2e09af42aaef05c26db7b9f4->enter($__internal_b63a50a4034ee9cf3b23b68cc2de23ee9b7d1b0e2e09af42aaef05c26db7b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_956c590da0b6f9fb62d2dd5a71c10d7abeb3a2d3bd6c58216cd3371a4f4c6121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956c590da0b6f9fb62d2dd5a71c10d7abeb3a2d3bd6c58216cd3371a4f4c6121->enter($__internal_956c590da0b6f9fb62d2dd5a71c10d7abeb3a2d3bd6c58216cd3371a4f4c6121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b63a50a4034ee9cf3b23b68cc2de23ee9b7d1b0e2e09af42aaef05c26db7b9f4->leave($__internal_b63a50a4034ee9cf3b23b68cc2de23ee9b7d1b0e2e09af42aaef05c26db7b9f4_prof);

        
        $__internal_956c590da0b6f9fb62d2dd5a71c10d7abeb3a2d3bd6c58216cd3371a4f4c6121->leave($__internal_956c590da0b6f9fb62d2dd5a71c10d7abeb3a2d3bd6c58216cd3371a4f4c6121_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05619c52fe86e953cb425779af33be3be2804404aa2b72849ae47f598c09761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05619c52fe86e953cb425779af33be3be2804404aa2b72849ae47f598c09761e->enter($__internal_05619c52fe86e953cb425779af33be3be2804404aa2b72849ae47f598c09761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1f2dd1a859adb89c45aebabea3fa5caabc8a34d91b9f3169ed1e4bb492c44282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2dd1a859adb89c45aebabea3fa5caabc8a34d91b9f3169ed1e4bb492c44282->enter($__internal_1f2dd1a859adb89c45aebabea3fa5caabc8a34d91b9f3169ed1e4bb492c44282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_1f2dd1a859adb89c45aebabea3fa5caabc8a34d91b9f3169ed1e4bb492c44282->leave($__internal_1f2dd1a859adb89c45aebabea3fa5caabc8a34d91b9f3169ed1e4bb492c44282_prof);

        
        $__internal_05619c52fe86e953cb425779af33be3be2804404aa2b72849ae47f598c09761e->leave($__internal_05619c52fe86e953cb425779af33be3be2804404aa2b72849ae47f598c09761e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab1f330142661832479da710649aa6eaf5b2a63c2f4bbaad2970c230cdc2226e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1f330142661832479da710649aa6eaf5b2a63c2f4bbaad2970c230cdc2226e->enter($__internal_ab1f330142661832479da710649aa6eaf5b2a63c2f4bbaad2970c230cdc2226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d2e2f9644f6c351b0d5fdebdd3a90d8d26c9442e4e070e82191748fcef087f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e2f9644f6c351b0d5fdebdd3a90d8d26c9442e4e070e82191748fcef087f75->enter($__internal_d2e2f9644f6c351b0d5fdebdd3a90d8d26c9442e4e070e82191748fcef087f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_d2e2f9644f6c351b0d5fdebdd3a90d8d26c9442e4e070e82191748fcef087f75->leave($__internal_d2e2f9644f6c351b0d5fdebdd3a90d8d26c9442e4e070e82191748fcef087f75_prof);

        
        $__internal_ab1f330142661832479da710649aa6eaf5b2a63c2f4bbaad2970c230cdc2226e->leave($__internal_ab1f330142661832479da710649aa6eaf5b2a63c2f4bbaad2970c230cdc2226e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16ada161efa95b7b316c210e72e31dad6f6771d5f173d0580e8ea6b7984e6840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ada161efa95b7b316c210e72e31dad6f6771d5f173d0580e8ea6b7984e6840->enter($__internal_16ada161efa95b7b316c210e72e31dad6f6771d5f173d0580e8ea6b7984e6840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5d7e1c0f9b741aa0334e5016f6c901a6837ccd25360477da89539a25057f2717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7e1c0f9b741aa0334e5016f6c901a6837ccd25360477da89539a25057f2717->enter($__internal_5d7e1c0f9b741aa0334e5016f6c901a6837ccd25360477da89539a25057f2717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5d7e1c0f9b741aa0334e5016f6c901a6837ccd25360477da89539a25057f2717->leave($__internal_5d7e1c0f9b741aa0334e5016f6c901a6837ccd25360477da89539a25057f2717_prof);

        
        $__internal_16ada161efa95b7b316c210e72e31dad6f6771d5f173d0580e8ea6b7984e6840->leave($__internal_16ada161efa95b7b316c210e72e31dad6f6771d5f173d0580e8ea6b7984e6840_prof);

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
