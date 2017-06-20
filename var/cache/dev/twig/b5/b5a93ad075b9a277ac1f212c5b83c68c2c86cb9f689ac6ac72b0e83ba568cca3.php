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
        $__internal_d6ed43edbf75d4e04d1e1fafa00db619c55c54cb0bdd5a114585b62d2ddbbee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ed43edbf75d4e04d1e1fafa00db619c55c54cb0bdd5a114585b62d2ddbbee6->enter($__internal_d6ed43edbf75d4e04d1e1fafa00db619c55c54cb0bdd5a114585b62d2ddbbee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f7a3a68f14ec91a5b2b40dd08a19158ab67e19c48b842f4b19f00fa0f1d1d6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a3a68f14ec91a5b2b40dd08a19158ab67e19c48b842f4b19f00fa0f1d1d6e9->enter($__internal_f7a3a68f14ec91a5b2b40dd08a19158ab67e19c48b842f4b19f00fa0f1d1d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ed43edbf75d4e04d1e1fafa00db619c55c54cb0bdd5a114585b62d2ddbbee6->leave($__internal_d6ed43edbf75d4e04d1e1fafa00db619c55c54cb0bdd5a114585b62d2ddbbee6_prof);

        
        $__internal_f7a3a68f14ec91a5b2b40dd08a19158ab67e19c48b842f4b19f00fa0f1d1d6e9->leave($__internal_f7a3a68f14ec91a5b2b40dd08a19158ab67e19c48b842f4b19f00fa0f1d1d6e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c20e68629198ae9cdc9f5fc6917ce17545bb80aa059256cded597dcbd3b92dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20e68629198ae9cdc9f5fc6917ce17545bb80aa059256cded597dcbd3b92dc3->enter($__internal_c20e68629198ae9cdc9f5fc6917ce17545bb80aa059256cded597dcbd3b92dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa9cd85254bb863613200e87a7c4de2ce908d0bed5ac1eae70e2a98162045568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9cd85254bb863613200e87a7c4de2ce908d0bed5ac1eae70e2a98162045568->enter($__internal_aa9cd85254bb863613200e87a7c4de2ce908d0bed5ac1eae70e2a98162045568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_aa9cd85254bb863613200e87a7c4de2ce908d0bed5ac1eae70e2a98162045568->leave($__internal_aa9cd85254bb863613200e87a7c4de2ce908d0bed5ac1eae70e2a98162045568_prof);

        
        $__internal_c20e68629198ae9cdc9f5fc6917ce17545bb80aa059256cded597dcbd3b92dc3->leave($__internal_c20e68629198ae9cdc9f5fc6917ce17545bb80aa059256cded597dcbd3b92dc3_prof);

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
