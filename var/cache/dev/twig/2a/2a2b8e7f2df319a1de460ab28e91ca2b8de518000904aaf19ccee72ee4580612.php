<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e8ba458b2ab13b2035258dc4aeb5bfa95cfaa5f594abb5bf52eccf4d34f0c75f extends Twig_Template
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
        $__internal_2af94dab87824e0f1e7bb0372a566c4bdbd79094e45135c77826fedb1b9a7cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af94dab87824e0f1e7bb0372a566c4bdbd79094e45135c77826fedb1b9a7cc0->enter($__internal_2af94dab87824e0f1e7bb0372a566c4bdbd79094e45135c77826fedb1b9a7cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_54fc1cb11d7a04e6e40e64738ffd726d75082fe73c9d4aa3617a7bf6d727e2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fc1cb11d7a04e6e40e64738ffd726d75082fe73c9d4aa3617a7bf6d727e2d7->enter($__internal_54fc1cb11d7a04e6e40e64738ffd726d75082fe73c9d4aa3617a7bf6d727e2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af94dab87824e0f1e7bb0372a566c4bdbd79094e45135c77826fedb1b9a7cc0->leave($__internal_2af94dab87824e0f1e7bb0372a566c4bdbd79094e45135c77826fedb1b9a7cc0_prof);

        
        $__internal_54fc1cb11d7a04e6e40e64738ffd726d75082fe73c9d4aa3617a7bf6d727e2d7->leave($__internal_54fc1cb11d7a04e6e40e64738ffd726d75082fe73c9d4aa3617a7bf6d727e2d7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2071803330e93355b5196f8c2c136f7a7ba12608f7d4c77deb8492bc22823fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2071803330e93355b5196f8c2c136f7a7ba12608f7d4c77deb8492bc22823fc->enter($__internal_b2071803330e93355b5196f8c2c136f7a7ba12608f7d4c77deb8492bc22823fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02d3ec41a935b95e14e1d8a7931f1d313ada440b7af753f0800bbf6a6859ec51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d3ec41a935b95e14e1d8a7931f1d313ada440b7af753f0800bbf6a6859ec51->enter($__internal_02d3ec41a935b95e14e1d8a7931f1d313ada440b7af753f0800bbf6a6859ec51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_02d3ec41a935b95e14e1d8a7931f1d313ada440b7af753f0800bbf6a6859ec51->leave($__internal_02d3ec41a935b95e14e1d8a7931f1d313ada440b7af753f0800bbf6a6859ec51_prof);

        
        $__internal_b2071803330e93355b5196f8c2c136f7a7ba12608f7d4c77deb8492bc22823fc->leave($__internal_b2071803330e93355b5196f8c2c136f7a7ba12608f7d4c77deb8492bc22823fc_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
