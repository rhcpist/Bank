<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b152d7880225eafa56cc9510e0974d7b468cf7ce9a97e924717ef1ca99145917 extends Twig_Template
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
        $__internal_4b14cf70abed7ea3aca7233f5a8a40e0143f1714de8da569d441aa89ec376556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b14cf70abed7ea3aca7233f5a8a40e0143f1714de8da569d441aa89ec376556->enter($__internal_4b14cf70abed7ea3aca7233f5a8a40e0143f1714de8da569d441aa89ec376556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e16e4c9189ffa1d0a4206818f9cac3fb862da3d058922b2e9c970f84e1e54e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16e4c9189ffa1d0a4206818f9cac3fb862da3d058922b2e9c970f84e1e54e41->enter($__internal_e16e4c9189ffa1d0a4206818f9cac3fb862da3d058922b2e9c970f84e1e54e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4b14cf70abed7ea3aca7233f5a8a40e0143f1714de8da569d441aa89ec376556->leave($__internal_4b14cf70abed7ea3aca7233f5a8a40e0143f1714de8da569d441aa89ec376556_prof);

        
        $__internal_e16e4c9189ffa1d0a4206818f9cac3fb862da3d058922b2e9c970f84e1e54e41->leave($__internal_e16e4c9189ffa1d0a4206818f9cac3fb862da3d058922b2e9c970f84e1e54e41_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0ddd223a937a3669ed637a4b3cff4a9187ab50594a7df135777d84dc1bf276d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddd223a937a3669ed637a4b3cff4a9187ab50594a7df135777d84dc1bf276d3->enter($__internal_0ddd223a937a3669ed637a4b3cff4a9187ab50594a7df135777d84dc1bf276d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7c3fc0bb821b35e4c86c0f396c7c833e043efc84d3f3309cb2cf16b9208eb159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3fc0bb821b35e4c86c0f396c7c833e043efc84d3f3309cb2cf16b9208eb159->enter($__internal_7c3fc0bb821b35e4c86c0f396c7c833e043efc84d3f3309cb2cf16b9208eb159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_7c3fc0bb821b35e4c86c0f396c7c833e043efc84d3f3309cb2cf16b9208eb159->leave($__internal_7c3fc0bb821b35e4c86c0f396c7c833e043efc84d3f3309cb2cf16b9208eb159_prof);

        
        $__internal_0ddd223a937a3669ed637a4b3cff4a9187ab50594a7df135777d84dc1bf276d3->leave($__internal_0ddd223a937a3669ed637a4b3cff4a9187ab50594a7df135777d84dc1bf276d3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_24a97e063b142f089b6483c643952a9ce00863630ef55ba8b0d4b4ba8fa6381e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a97e063b142f089b6483c643952a9ce00863630ef55ba8b0d4b4ba8fa6381e->enter($__internal_24a97e063b142f089b6483c643952a9ce00863630ef55ba8b0d4b4ba8fa6381e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7fad8f78e6ec5140acae8c0300616062bedfcce55faf9310fcd9fe2756786a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fad8f78e6ec5140acae8c0300616062bedfcce55faf9310fcd9fe2756786a91->enter($__internal_7fad8f78e6ec5140acae8c0300616062bedfcce55faf9310fcd9fe2756786a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7fad8f78e6ec5140acae8c0300616062bedfcce55faf9310fcd9fe2756786a91->leave($__internal_7fad8f78e6ec5140acae8c0300616062bedfcce55faf9310fcd9fe2756786a91_prof);

        
        $__internal_24a97e063b142f089b6483c643952a9ce00863630ef55ba8b0d4b4ba8fa6381e->leave($__internal_24a97e063b142f089b6483c643952a9ce00863630ef55ba8b0d4b4ba8fa6381e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e4b68ee2a9176642b2172b3274beb7eacfca79a530693f01713b9c1d2071b68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b68ee2a9176642b2172b3274beb7eacfca79a530693f01713b9c1d2071b68a->enter($__internal_e4b68ee2a9176642b2172b3274beb7eacfca79a530693f01713b9c1d2071b68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dd28096aa124e686d294c32c124b51bb86e5a36ddd318180d5c679857ede0feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd28096aa124e686d294c32c124b51bb86e5a36ddd318180d5c679857ede0feb->enter($__internal_dd28096aa124e686d294c32c124b51bb86e5a36ddd318180d5c679857ede0feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd28096aa124e686d294c32c124b51bb86e5a36ddd318180d5c679857ede0feb->leave($__internal_dd28096aa124e686d294c32c124b51bb86e5a36ddd318180d5c679857ede0feb_prof);

        
        $__internal_e4b68ee2a9176642b2172b3274beb7eacfca79a530693f01713b9c1d2071b68a->leave($__internal_e4b68ee2a9176642b2172b3274beb7eacfca79a530693f01713b9c1d2071b68a_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
