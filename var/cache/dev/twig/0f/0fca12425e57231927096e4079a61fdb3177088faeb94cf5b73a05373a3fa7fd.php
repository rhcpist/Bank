<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5d4fe5469bbda887a59f2e74c127b7bf9e7c2898fb981e0ce63d3763cae45ca7 extends Twig_Template
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
        $__internal_5ec98518253b339cf2f071ae061ee6bbfe2f77feecdcaa261444ceccd90b4b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec98518253b339cf2f071ae061ee6bbfe2f77feecdcaa261444ceccd90b4b0c->enter($__internal_5ec98518253b339cf2f071ae061ee6bbfe2f77feecdcaa261444ceccd90b4b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_b474733af17070a38d1f9a38e84338ba9e4508971addc2431ed626048f8ca0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b474733af17070a38d1f9a38e84338ba9e4508971addc2431ed626048f8ca0ca->enter($__internal_b474733af17070a38d1f9a38e84338ba9e4508971addc2431ed626048f8ca0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec98518253b339cf2f071ae061ee6bbfe2f77feecdcaa261444ceccd90b4b0c->leave($__internal_5ec98518253b339cf2f071ae061ee6bbfe2f77feecdcaa261444ceccd90b4b0c_prof);

        
        $__internal_b474733af17070a38d1f9a38e84338ba9e4508971addc2431ed626048f8ca0ca->leave($__internal_b474733af17070a38d1f9a38e84338ba9e4508971addc2431ed626048f8ca0ca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20219361d8a148b64ebf6bb9b3c14eb95fd834099ac8b969f387b77e1041c977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20219361d8a148b64ebf6bb9b3c14eb95fd834099ac8b969f387b77e1041c977->enter($__internal_20219361d8a148b64ebf6bb9b3c14eb95fd834099ac8b969f387b77e1041c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_480ab3ca5ce4ee7b4bfcd1cca009233544acfad64e9126b2047743fc9dc4ffe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480ab3ca5ce4ee7b4bfcd1cca009233544acfad64e9126b2047743fc9dc4ffe0->enter($__internal_480ab3ca5ce4ee7b4bfcd1cca009233544acfad64e9126b2047743fc9dc4ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_480ab3ca5ce4ee7b4bfcd1cca009233544acfad64e9126b2047743fc9dc4ffe0->leave($__internal_480ab3ca5ce4ee7b4bfcd1cca009233544acfad64e9126b2047743fc9dc4ffe0_prof);

        
        $__internal_20219361d8a148b64ebf6bb9b3c14eb95fd834099ac8b969f387b77e1041c977->leave($__internal_20219361d8a148b64ebf6bb9b3c14eb95fd834099ac8b969f387b77e1041c977_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
