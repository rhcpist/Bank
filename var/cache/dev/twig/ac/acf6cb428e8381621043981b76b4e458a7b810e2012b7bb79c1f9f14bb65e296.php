<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4f8863822a99a8828d0b14fba621ba96a2e90676a21b7f5e3a6bebeb9f9c0740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_03729f5e68463c08130a5c7659c51d0d0f067dfbea9d6943b56fb30f942a4b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03729f5e68463c08130a5c7659c51d0d0f067dfbea9d6943b56fb30f942a4b2e->enter($__internal_03729f5e68463c08130a5c7659c51d0d0f067dfbea9d6943b56fb30f942a4b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8040578ce9c128b9eb86e94531e6925862fe0039402434822e29ff34fd8364d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8040578ce9c128b9eb86e94531e6925862fe0039402434822e29ff34fd8364d4->enter($__internal_8040578ce9c128b9eb86e94531e6925862fe0039402434822e29ff34fd8364d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03729f5e68463c08130a5c7659c51d0d0f067dfbea9d6943b56fb30f942a4b2e->leave($__internal_03729f5e68463c08130a5c7659c51d0d0f067dfbea9d6943b56fb30f942a4b2e_prof);

        
        $__internal_8040578ce9c128b9eb86e94531e6925862fe0039402434822e29ff34fd8364d4->leave($__internal_8040578ce9c128b9eb86e94531e6925862fe0039402434822e29ff34fd8364d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3c00303c65cc4b6d6e639189c5e62b9edf2629eb7676f19039c1b913267698d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c00303c65cc4b6d6e639189c5e62b9edf2629eb7676f19039c1b913267698d->enter($__internal_c3c00303c65cc4b6d6e639189c5e62b9edf2629eb7676f19039c1b913267698d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa99bea3bbedffd543c9f99b09ed820c1e8a8aca1aeeb1ecba5e2f84d15e26ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa99bea3bbedffd543c9f99b09ed820c1e8a8aca1aeeb1ecba5e2f84d15e26ea->enter($__internal_fa99bea3bbedffd543c9f99b09ed820c1e8a8aca1aeeb1ecba5e2f84d15e26ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa99bea3bbedffd543c9f99b09ed820c1e8a8aca1aeeb1ecba5e2f84d15e26ea->leave($__internal_fa99bea3bbedffd543c9f99b09ed820c1e8a8aca1aeeb1ecba5e2f84d15e26ea_prof);

        
        $__internal_c3c00303c65cc4b6d6e639189c5e62b9edf2629eb7676f19039c1b913267698d->leave($__internal_c3c00303c65cc4b6d6e639189c5e62b9edf2629eb7676f19039c1b913267698d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
