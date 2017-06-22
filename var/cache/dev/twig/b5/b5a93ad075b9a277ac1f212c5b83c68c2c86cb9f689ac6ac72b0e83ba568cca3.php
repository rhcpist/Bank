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
        $__internal_5dc5c883a3739ce8d91c8943ef1b891740c73c7aed41c1cac8443eceab0fe823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc5c883a3739ce8d91c8943ef1b891740c73c7aed41c1cac8443eceab0fe823->enter($__internal_5dc5c883a3739ce8d91c8943ef1b891740c73c7aed41c1cac8443eceab0fe823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4638876c52f1fa65615fc2e49aa7c3b79640f4112c77b19be3675c358cb15d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4638876c52f1fa65615fc2e49aa7c3b79640f4112c77b19be3675c358cb15d9d->enter($__internal_4638876c52f1fa65615fc2e49aa7c3b79640f4112c77b19be3675c358cb15d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dc5c883a3739ce8d91c8943ef1b891740c73c7aed41c1cac8443eceab0fe823->leave($__internal_5dc5c883a3739ce8d91c8943ef1b891740c73c7aed41c1cac8443eceab0fe823_prof);

        
        $__internal_4638876c52f1fa65615fc2e49aa7c3b79640f4112c77b19be3675c358cb15d9d->leave($__internal_4638876c52f1fa65615fc2e49aa7c3b79640f4112c77b19be3675c358cb15d9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c3af887f0f17d7fb26768c4c473f65a448112a7351df13f5b2e31648b8edeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3af887f0f17d7fb26768c4c473f65a448112a7351df13f5b2e31648b8edeac->enter($__internal_9c3af887f0f17d7fb26768c4c473f65a448112a7351df13f5b2e31648b8edeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2402ab614c68d7e9bdc480698158be1c550f3e4c1aa87de0dd84caa776c1f180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2402ab614c68d7e9bdc480698158be1c550f3e4c1aa87de0dd84caa776c1f180->enter($__internal_2402ab614c68d7e9bdc480698158be1c550f3e4c1aa87de0dd84caa776c1f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2402ab614c68d7e9bdc480698158be1c550f3e4c1aa87de0dd84caa776c1f180->leave($__internal_2402ab614c68d7e9bdc480698158be1c550f3e4c1aa87de0dd84caa776c1f180_prof);

        
        $__internal_9c3af887f0f17d7fb26768c4c473f65a448112a7351df13f5b2e31648b8edeac->leave($__internal_9c3af887f0f17d7fb26768c4c473f65a448112a7351df13f5b2e31648b8edeac_prof);

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
