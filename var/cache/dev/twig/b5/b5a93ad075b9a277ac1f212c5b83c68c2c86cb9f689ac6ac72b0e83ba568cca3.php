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
        $__internal_99a9212d9b215d7b9edf5fea4688679bf3db02cafb3e522860b23c7179f4aba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a9212d9b215d7b9edf5fea4688679bf3db02cafb3e522860b23c7179f4aba9->enter($__internal_99a9212d9b215d7b9edf5fea4688679bf3db02cafb3e522860b23c7179f4aba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_90c3950b6a6f81529083c7d22ece52abd4a6172baec999c9ce058128e2cde844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c3950b6a6f81529083c7d22ece52abd4a6172baec999c9ce058128e2cde844->enter($__internal_90c3950b6a6f81529083c7d22ece52abd4a6172baec999c9ce058128e2cde844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99a9212d9b215d7b9edf5fea4688679bf3db02cafb3e522860b23c7179f4aba9->leave($__internal_99a9212d9b215d7b9edf5fea4688679bf3db02cafb3e522860b23c7179f4aba9_prof);

        
        $__internal_90c3950b6a6f81529083c7d22ece52abd4a6172baec999c9ce058128e2cde844->leave($__internal_90c3950b6a6f81529083c7d22ece52abd4a6172baec999c9ce058128e2cde844_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1c816196ece6a020344b26dae2861ac81a49b6bcb8621fce3a1ca6dffcd611d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c816196ece6a020344b26dae2861ac81a49b6bcb8621fce3a1ca6dffcd611d->enter($__internal_f1c816196ece6a020344b26dae2861ac81a49b6bcb8621fce3a1ca6dffcd611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7957a02a825801661752083b7f3943f2579c9d66ee56b4b897c69db6a512e69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7957a02a825801661752083b7f3943f2579c9d66ee56b4b897c69db6a512e69c->enter($__internal_7957a02a825801661752083b7f3943f2579c9d66ee56b4b897c69db6a512e69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7957a02a825801661752083b7f3943f2579c9d66ee56b4b897c69db6a512e69c->leave($__internal_7957a02a825801661752083b7f3943f2579c9d66ee56b4b897c69db6a512e69c_prof);

        
        $__internal_f1c816196ece6a020344b26dae2861ac81a49b6bcb8621fce3a1ca6dffcd611d->leave($__internal_f1c816196ece6a020344b26dae2861ac81a49b6bcb8621fce3a1ca6dffcd611d_prof);

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
