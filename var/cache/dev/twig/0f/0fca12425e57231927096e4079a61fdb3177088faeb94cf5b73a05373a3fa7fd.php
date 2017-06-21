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
        $__internal_e3e8db75e2a27caebca4e1505bc145e0d45ba4bfd2113973337d13c945a67389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e8db75e2a27caebca4e1505bc145e0d45ba4bfd2113973337d13c945a67389->enter($__internal_e3e8db75e2a27caebca4e1505bc145e0d45ba4bfd2113973337d13c945a67389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_003f4fb0698d514475f267da95e7a392a80465c934e531ba706157fee384fe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003f4fb0698d514475f267da95e7a392a80465c934e531ba706157fee384fe12->enter($__internal_003f4fb0698d514475f267da95e7a392a80465c934e531ba706157fee384fe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e8db75e2a27caebca4e1505bc145e0d45ba4bfd2113973337d13c945a67389->leave($__internal_e3e8db75e2a27caebca4e1505bc145e0d45ba4bfd2113973337d13c945a67389_prof);

        
        $__internal_003f4fb0698d514475f267da95e7a392a80465c934e531ba706157fee384fe12->leave($__internal_003f4fb0698d514475f267da95e7a392a80465c934e531ba706157fee384fe12_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc8432a324bea12bdedcb197e775a2f8a1114e85e3e65bce9355d18e59a4a17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8432a324bea12bdedcb197e775a2f8a1114e85e3e65bce9355d18e59a4a17f->enter($__internal_dc8432a324bea12bdedcb197e775a2f8a1114e85e3e65bce9355d18e59a4a17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08d28bc29eec44e2cb89893b47b8efcd36b3b0d527f2117af5070cd70ff63b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d28bc29eec44e2cb89893b47b8efcd36b3b0d527f2117af5070cd70ff63b6f->enter($__internal_08d28bc29eec44e2cb89893b47b8efcd36b3b0d527f2117af5070cd70ff63b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_08d28bc29eec44e2cb89893b47b8efcd36b3b0d527f2117af5070cd70ff63b6f->leave($__internal_08d28bc29eec44e2cb89893b47b8efcd36b3b0d527f2117af5070cd70ff63b6f_prof);

        
        $__internal_dc8432a324bea12bdedcb197e775a2f8a1114e85e3e65bce9355d18e59a4a17f->leave($__internal_dc8432a324bea12bdedcb197e775a2f8a1114e85e3e65bce9355d18e59a4a17f_prof);

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
