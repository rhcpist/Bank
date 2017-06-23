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
        $__internal_5194694ed1aa2d005ff98e14e23a8ff45824113aef18b7ec255c630d57b764c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5194694ed1aa2d005ff98e14e23a8ff45824113aef18b7ec255c630d57b764c7->enter($__internal_5194694ed1aa2d005ff98e14e23a8ff45824113aef18b7ec255c630d57b764c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8b1a2c23bf1715745c2cbc6dcc6cab0df6ccd391adf1ce1ec670cb10e67a9acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1a2c23bf1715745c2cbc6dcc6cab0df6ccd391adf1ce1ec670cb10e67a9acf->enter($__internal_8b1a2c23bf1715745c2cbc6dcc6cab0df6ccd391adf1ce1ec670cb10e67a9acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5194694ed1aa2d005ff98e14e23a8ff45824113aef18b7ec255c630d57b764c7->leave($__internal_5194694ed1aa2d005ff98e14e23a8ff45824113aef18b7ec255c630d57b764c7_prof);

        
        $__internal_8b1a2c23bf1715745c2cbc6dcc6cab0df6ccd391adf1ce1ec670cb10e67a9acf->leave($__internal_8b1a2c23bf1715745c2cbc6dcc6cab0df6ccd391adf1ce1ec670cb10e67a9acf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_21b351f156c91721fc808cad9b9ed73c531ccbfc536ad74df148feb11a48437f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b351f156c91721fc808cad9b9ed73c531ccbfc536ad74df148feb11a48437f->enter($__internal_21b351f156c91721fc808cad9b9ed73c531ccbfc536ad74df148feb11a48437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f3bcfc222342c981bd34084c78616e55a59f48cad5e36b1345119f0000e61282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bcfc222342c981bd34084c78616e55a59f48cad5e36b1345119f0000e61282->enter($__internal_f3bcfc222342c981bd34084c78616e55a59f48cad5e36b1345119f0000e61282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_f3bcfc222342c981bd34084c78616e55a59f48cad5e36b1345119f0000e61282->leave($__internal_f3bcfc222342c981bd34084c78616e55a59f48cad5e36b1345119f0000e61282_prof);

        
        $__internal_21b351f156c91721fc808cad9b9ed73c531ccbfc536ad74df148feb11a48437f->leave($__internal_21b351f156c91721fc808cad9b9ed73c531ccbfc536ad74df148feb11a48437f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46d6455434147698845e5cfa0ded46c59f8d1f6c2893983c51ad9a080812bfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d6455434147698845e5cfa0ded46c59f8d1f6c2893983c51ad9a080812bfaa->enter($__internal_46d6455434147698845e5cfa0ded46c59f8d1f6c2893983c51ad9a080812bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_285c35215e357c85649e779f4c1a6d541673918ab44ee399c9254ebf4339fe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285c35215e357c85649e779f4c1a6d541673918ab44ee399c9254ebf4339fe43->enter($__internal_285c35215e357c85649e779f4c1a6d541673918ab44ee399c9254ebf4339fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_285c35215e357c85649e779f4c1a6d541673918ab44ee399c9254ebf4339fe43->leave($__internal_285c35215e357c85649e779f4c1a6d541673918ab44ee399c9254ebf4339fe43_prof);

        
        $__internal_46d6455434147698845e5cfa0ded46c59f8d1f6c2893983c51ad9a080812bfaa->leave($__internal_46d6455434147698845e5cfa0ded46c59f8d1f6c2893983c51ad9a080812bfaa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22af1f6d43334f4a240407122719d2c3b5ccf5b827512e3a5d61a516a6c4b55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22af1f6d43334f4a240407122719d2c3b5ccf5b827512e3a5d61a516a6c4b55b->enter($__internal_22af1f6d43334f4a240407122719d2c3b5ccf5b827512e3a5d61a516a6c4b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a631534ffb1b47a051ac2418fb56d91857ec4d02bb0a087d4f0da5d6046509d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a631534ffb1b47a051ac2418fb56d91857ec4d02bb0a087d4f0da5d6046509d3->enter($__internal_a631534ffb1b47a051ac2418fb56d91857ec4d02bb0a087d4f0da5d6046509d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a631534ffb1b47a051ac2418fb56d91857ec4d02bb0a087d4f0da5d6046509d3->leave($__internal_a631534ffb1b47a051ac2418fb56d91857ec4d02bb0a087d4f0da5d6046509d3_prof);

        
        $__internal_22af1f6d43334f4a240407122719d2c3b5ccf5b827512e3a5d61a516a6c4b55b->leave($__internal_22af1f6d43334f4a240407122719d2c3b5ccf5b827512e3a5d61a516a6c4b55b_prof);

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
