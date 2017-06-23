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
        $__internal_9800728ba8ee84d8754741f0cd68a397f0c9de46e8dc40d804491b1d9603280b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9800728ba8ee84d8754741f0cd68a397f0c9de46e8dc40d804491b1d9603280b->enter($__internal_9800728ba8ee84d8754741f0cd68a397f0c9de46e8dc40d804491b1d9603280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_89954fb5a137fa32e624109f1706db320e1a786db3c3d9e406a98eaa8ded1456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89954fb5a137fa32e624109f1706db320e1a786db3c3d9e406a98eaa8ded1456->enter($__internal_89954fb5a137fa32e624109f1706db320e1a786db3c3d9e406a98eaa8ded1456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9800728ba8ee84d8754741f0cd68a397f0c9de46e8dc40d804491b1d9603280b->leave($__internal_9800728ba8ee84d8754741f0cd68a397f0c9de46e8dc40d804491b1d9603280b_prof);

        
        $__internal_89954fb5a137fa32e624109f1706db320e1a786db3c3d9e406a98eaa8ded1456->leave($__internal_89954fb5a137fa32e624109f1706db320e1a786db3c3d9e406a98eaa8ded1456_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09a3ee657d02b7f7addc617a993b5d77638bcb16df0fc550f8e130cfe3e1e714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a3ee657d02b7f7addc617a993b5d77638bcb16df0fc550f8e130cfe3e1e714->enter($__internal_09a3ee657d02b7f7addc617a993b5d77638bcb16df0fc550f8e130cfe3e1e714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81016386645f7319f28495c4f2585981247c8c5e81c2579936462ce49990fd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81016386645f7319f28495c4f2585981247c8c5e81c2579936462ce49990fd7e->enter($__internal_81016386645f7319f28495c4f2585981247c8c5e81c2579936462ce49990fd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_81016386645f7319f28495c4f2585981247c8c5e81c2579936462ce49990fd7e->leave($__internal_81016386645f7319f28495c4f2585981247c8c5e81c2579936462ce49990fd7e_prof);

        
        $__internal_09a3ee657d02b7f7addc617a993b5d77638bcb16df0fc550f8e130cfe3e1e714->leave($__internal_09a3ee657d02b7f7addc617a993b5d77638bcb16df0fc550f8e130cfe3e1e714_prof);

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
