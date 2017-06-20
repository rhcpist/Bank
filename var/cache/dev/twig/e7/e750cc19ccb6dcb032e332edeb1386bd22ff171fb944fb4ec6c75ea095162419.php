<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7b9fa1e42ebaff7c204d50bc383f560001c8d8b440f890615d71e311c328d2aa extends Twig_Template
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
        $__internal_33c4477662eec66c89591ba0a1d46a5b6a21e9c5cf44f5c833e6d08311fbe52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c4477662eec66c89591ba0a1d46a5b6a21e9c5cf44f5c833e6d08311fbe52b->enter($__internal_33c4477662eec66c89591ba0a1d46a5b6a21e9c5cf44f5c833e6d08311fbe52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_8159478d8fce75064ae2326d47430949bf0e7c32c3231dc042eead05fac42003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8159478d8fce75064ae2326d47430949bf0e7c32c3231dc042eead05fac42003->enter($__internal_8159478d8fce75064ae2326d47430949bf0e7c32c3231dc042eead05fac42003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_33c4477662eec66c89591ba0a1d46a5b6a21e9c5cf44f5c833e6d08311fbe52b->leave($__internal_33c4477662eec66c89591ba0a1d46a5b6a21e9c5cf44f5c833e6d08311fbe52b_prof);

        
        $__internal_8159478d8fce75064ae2326d47430949bf0e7c32c3231dc042eead05fac42003->leave($__internal_8159478d8fce75064ae2326d47430949bf0e7c32c3231dc042eead05fac42003_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
