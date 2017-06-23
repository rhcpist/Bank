<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4b8240c10d391b308ce6363be697eb6c018fde22bdf04f8eb1577601d149bc6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fef84c3b286d8b0b484e1a5d2695a6c3579818ed9eb2cd9160b2c24ba55a43cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef84c3b286d8b0b484e1a5d2695a6c3579818ed9eb2cd9160b2c24ba55a43cd->enter($__internal_fef84c3b286d8b0b484e1a5d2695a6c3579818ed9eb2cd9160b2c24ba55a43cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_90267d97ae328235ce1a94e30c22597b5119cf372e895df4c4a24e8f1be1adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90267d97ae328235ce1a94e30c22597b5119cf372e895df4c4a24e8f1be1adec->enter($__internal_90267d97ae328235ce1a94e30c22597b5119cf372e895df4c4a24e8f1be1adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef84c3b286d8b0b484e1a5d2695a6c3579818ed9eb2cd9160b2c24ba55a43cd->leave($__internal_fef84c3b286d8b0b484e1a5d2695a6c3579818ed9eb2cd9160b2c24ba55a43cd_prof);

        
        $__internal_90267d97ae328235ce1a94e30c22597b5119cf372e895df4c4a24e8f1be1adec->leave($__internal_90267d97ae328235ce1a94e30c22597b5119cf372e895df4c4a24e8f1be1adec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef241da505b85f34f3ad9797118230a4fbb44d8f36d0c4ee2967c7b907dbcca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef241da505b85f34f3ad9797118230a4fbb44d8f36d0c4ee2967c7b907dbcca2->enter($__internal_ef241da505b85f34f3ad9797118230a4fbb44d8f36d0c4ee2967c7b907dbcca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1ee0de730f53234b9f1b43f5e53b073728ce1bb428239e6d0a206c12abbabd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ee0de730f53234b9f1b43f5e53b073728ce1bb428239e6d0a206c12abbabd4->enter($__internal_e1ee0de730f53234b9f1b43f5e53b073728ce1bb428239e6d0a206c12abbabd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e1ee0de730f53234b9f1b43f5e53b073728ce1bb428239e6d0a206c12abbabd4->leave($__internal_e1ee0de730f53234b9f1b43f5e53b073728ce1bb428239e6d0a206c12abbabd4_prof);

        
        $__internal_ef241da505b85f34f3ad9797118230a4fbb44d8f36d0c4ee2967c7b907dbcca2->leave($__internal_ef241da505b85f34f3ad9797118230a4fbb44d8f36d0c4ee2967c7b907dbcca2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
