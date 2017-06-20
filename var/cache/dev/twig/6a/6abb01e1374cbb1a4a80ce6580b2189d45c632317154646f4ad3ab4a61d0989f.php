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
        $__internal_5c0755abc59da2e04d45335d6be3552737d678fdcdd2c8499f992930282d1b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0755abc59da2e04d45335d6be3552737d678fdcdd2c8499f992930282d1b76->enter($__internal_5c0755abc59da2e04d45335d6be3552737d678fdcdd2c8499f992930282d1b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_a5b12c0922f0f7d6e52349c17ff997ef750b1e7ab5dc67d7283cff45d4666902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b12c0922f0f7d6e52349c17ff997ef750b1e7ab5dc67d7283cff45d4666902->enter($__internal_a5b12c0922f0f7d6e52349c17ff997ef750b1e7ab5dc67d7283cff45d4666902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5c0755abc59da2e04d45335d6be3552737d678fdcdd2c8499f992930282d1b76->leave($__internal_5c0755abc59da2e04d45335d6be3552737d678fdcdd2c8499f992930282d1b76_prof);

        
        $__internal_a5b12c0922f0f7d6e52349c17ff997ef750b1e7ab5dc67d7283cff45d4666902->leave($__internal_a5b12c0922f0f7d6e52349c17ff997ef750b1e7ab5dc67d7283cff45d4666902_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f50d498f8d6a927797627ed5fe91b01d612673cb37ceeea13e20beddf4c741c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50d498f8d6a927797627ed5fe91b01d612673cb37ceeea13e20beddf4c741c9->enter($__internal_f50d498f8d6a927797627ed5fe91b01d612673cb37ceeea13e20beddf4c741c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6d365e3385619a7587da041cd48baf53ce36077e18c0410fb69fde76954f5e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d365e3385619a7587da041cd48baf53ce36077e18c0410fb69fde76954f5e3a->enter($__internal_6d365e3385619a7587da041cd48baf53ce36077e18c0410fb69fde76954f5e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_6d365e3385619a7587da041cd48baf53ce36077e18c0410fb69fde76954f5e3a->leave($__internal_6d365e3385619a7587da041cd48baf53ce36077e18c0410fb69fde76954f5e3a_prof);

        
        $__internal_f50d498f8d6a927797627ed5fe91b01d612673cb37ceeea13e20beddf4c741c9->leave($__internal_f50d498f8d6a927797627ed5fe91b01d612673cb37ceeea13e20beddf4c741c9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a0833fcbbbd769e4aa0eb3d2c742f9cac7dfa9d07ba8248b426d878cde54950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0833fcbbbd769e4aa0eb3d2c742f9cac7dfa9d07ba8248b426d878cde54950->enter($__internal_7a0833fcbbbd769e4aa0eb3d2c742f9cac7dfa9d07ba8248b426d878cde54950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_82e13217dae6806ed8e2a2931b6b48c0043620a8d33766d1cae8ccf4bb585bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e13217dae6806ed8e2a2931b6b48c0043620a8d33766d1cae8ccf4bb585bde->enter($__internal_82e13217dae6806ed8e2a2931b6b48c0043620a8d33766d1cae8ccf4bb585bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_82e13217dae6806ed8e2a2931b6b48c0043620a8d33766d1cae8ccf4bb585bde->leave($__internal_82e13217dae6806ed8e2a2931b6b48c0043620a8d33766d1cae8ccf4bb585bde_prof);

        
        $__internal_7a0833fcbbbd769e4aa0eb3d2c742f9cac7dfa9d07ba8248b426d878cde54950->leave($__internal_7a0833fcbbbd769e4aa0eb3d2c742f9cac7dfa9d07ba8248b426d878cde54950_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c2936fe9b814f11ebf889d555122c30232633b477fdc89f944451f68d9651f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2936fe9b814f11ebf889d555122c30232633b477fdc89f944451f68d9651f7a->enter($__internal_c2936fe9b814f11ebf889d555122c30232633b477fdc89f944451f68d9651f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_31076f9ea2e8493ebf4ba32b0e39d41a67dd4a44375a6520de4dfd387a8fa270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31076f9ea2e8493ebf4ba32b0e39d41a67dd4a44375a6520de4dfd387a8fa270->enter($__internal_31076f9ea2e8493ebf4ba32b0e39d41a67dd4a44375a6520de4dfd387a8fa270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_31076f9ea2e8493ebf4ba32b0e39d41a67dd4a44375a6520de4dfd387a8fa270->leave($__internal_31076f9ea2e8493ebf4ba32b0e39d41a67dd4a44375a6520de4dfd387a8fa270_prof);

        
        $__internal_c2936fe9b814f11ebf889d555122c30232633b477fdc89f944451f68d9651f7a->leave($__internal_c2936fe9b814f11ebf889d555122c30232633b477fdc89f944451f68d9651f7a_prof);

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
