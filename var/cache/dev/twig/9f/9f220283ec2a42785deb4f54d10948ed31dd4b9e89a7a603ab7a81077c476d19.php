<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_4937368de1ada6399f53115f296db7180bdde69b15394b7db596699c4e2dc571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eb8cfd14bc87ca0b977d2c9a4bbfda8ea67771c03bbae5a7a994f5dbf0f9b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb8cfd14bc87ca0b977d2c9a4bbfda8ea67771c03bbae5a7a994f5dbf0f9b54->enter($__internal_0eb8cfd14bc87ca0b977d2c9a4bbfda8ea67771c03bbae5a7a994f5dbf0f9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_a072f48f16c802bacbebf8c50273d95b01f2343b6d8aca554a6a341f923fd32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a072f48f16c802bacbebf8c50273d95b01f2343b6d8aca554a6a341f923fd32a->enter($__internal_a072f48f16c802bacbebf8c50273d95b01f2343b6d8aca554a6a341f923fd32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0eb8cfd14bc87ca0b977d2c9a4bbfda8ea67771c03bbae5a7a994f5dbf0f9b54->leave($__internal_0eb8cfd14bc87ca0b977d2c9a4bbfda8ea67771c03bbae5a7a994f5dbf0f9b54_prof);

        
        $__internal_a072f48f16c802bacbebf8c50273d95b01f2343b6d8aca554a6a341f923fd32a->leave($__internal_a072f48f16c802bacbebf8c50273d95b01f2343b6d8aca554a6a341f923fd32a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
