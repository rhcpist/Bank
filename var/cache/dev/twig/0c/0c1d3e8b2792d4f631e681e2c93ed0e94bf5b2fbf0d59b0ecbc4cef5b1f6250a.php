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
        $__internal_ca0d724d251ee78c30724ec4dd6619ee1523aa2dd835d99d36772ff988588120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0d724d251ee78c30724ec4dd6619ee1523aa2dd835d99d36772ff988588120->enter($__internal_ca0d724d251ee78c30724ec4dd6619ee1523aa2dd835d99d36772ff988588120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_36c1f24d1aadf434c2c6e91d2b7b8b9da02adda91cdcc9d23c3bbb8f6f58a69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c1f24d1aadf434c2c6e91d2b7b8b9da02adda91cdcc9d23c3bbb8f6f58a69a->enter($__internal_36c1f24d1aadf434c2c6e91d2b7b8b9da02adda91cdcc9d23c3bbb8f6f58a69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ca0d724d251ee78c30724ec4dd6619ee1523aa2dd835d99d36772ff988588120->leave($__internal_ca0d724d251ee78c30724ec4dd6619ee1523aa2dd835d99d36772ff988588120_prof);

        
        $__internal_36c1f24d1aadf434c2c6e91d2b7b8b9da02adda91cdcc9d23c3bbb8f6f58a69a->leave($__internal_36c1f24d1aadf434c2c6e91d2b7b8b9da02adda91cdcc9d23c3bbb8f6f58a69a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d352610f6edc2f438dc4eec3241716b81dccbfa5fbdf86014a6cc161c778ba0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d352610f6edc2f438dc4eec3241716b81dccbfa5fbdf86014a6cc161c778ba0a->enter($__internal_d352610f6edc2f438dc4eec3241716b81dccbfa5fbdf86014a6cc161c778ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c29f7a8fc9a168095df20b4a5cdae48d062f6be664302089b496aca6911dae85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f7a8fc9a168095df20b4a5cdae48d062f6be664302089b496aca6911dae85->enter($__internal_c29f7a8fc9a168095df20b4a5cdae48d062f6be664302089b496aca6911dae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_c29f7a8fc9a168095df20b4a5cdae48d062f6be664302089b496aca6911dae85->leave($__internal_c29f7a8fc9a168095df20b4a5cdae48d062f6be664302089b496aca6911dae85_prof);

        
        $__internal_d352610f6edc2f438dc4eec3241716b81dccbfa5fbdf86014a6cc161c778ba0a->leave($__internal_d352610f6edc2f438dc4eec3241716b81dccbfa5fbdf86014a6cc161c778ba0a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8661c71ee4424c903a1dae67347928290d44bb5052356842ddb8b601f43b8edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8661c71ee4424c903a1dae67347928290d44bb5052356842ddb8b601f43b8edc->enter($__internal_8661c71ee4424c903a1dae67347928290d44bb5052356842ddb8b601f43b8edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_870b36397d869039e0547dec8c85796fa577560ae26dabf5012ee2fbdf689e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870b36397d869039e0547dec8c85796fa577560ae26dabf5012ee2fbdf689e30->enter($__internal_870b36397d869039e0547dec8c85796fa577560ae26dabf5012ee2fbdf689e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_870b36397d869039e0547dec8c85796fa577560ae26dabf5012ee2fbdf689e30->leave($__internal_870b36397d869039e0547dec8c85796fa577560ae26dabf5012ee2fbdf689e30_prof);

        
        $__internal_8661c71ee4424c903a1dae67347928290d44bb5052356842ddb8b601f43b8edc->leave($__internal_8661c71ee4424c903a1dae67347928290d44bb5052356842ddb8b601f43b8edc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ee836acf52d1500c725e00a03bc40c030ba1316e58312931bff05fe13d613f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee836acf52d1500c725e00a03bc40c030ba1316e58312931bff05fe13d613f9c->enter($__internal_ee836acf52d1500c725e00a03bc40c030ba1316e58312931bff05fe13d613f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cf727e4512db96a61e3519ac3749f127d5c3e9b3944e6b0430fd85849d73ca86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf727e4512db96a61e3519ac3749f127d5c3e9b3944e6b0430fd85849d73ca86->enter($__internal_cf727e4512db96a61e3519ac3749f127d5c3e9b3944e6b0430fd85849d73ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf727e4512db96a61e3519ac3749f127d5c3e9b3944e6b0430fd85849d73ca86->leave($__internal_cf727e4512db96a61e3519ac3749f127d5c3e9b3944e6b0430fd85849d73ca86_prof);

        
        $__internal_ee836acf52d1500c725e00a03bc40c030ba1316e58312931bff05fe13d613f9c->leave($__internal_ee836acf52d1500c725e00a03bc40c030ba1316e58312931bff05fe13d613f9c_prof);

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
