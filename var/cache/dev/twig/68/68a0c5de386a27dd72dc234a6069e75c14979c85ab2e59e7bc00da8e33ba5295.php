<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dcc5353928a54c4d4a1afbdaa380989fbe919bcf0bbcedd3b8ea74bfc9e076f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fe7b47f9be823d71383b4531597294e8bbdc5ca355ecf0b8cbeaee3049e090f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7b47f9be823d71383b4531597294e8bbdc5ca355ecf0b8cbeaee3049e090f9->enter($__internal_fe7b47f9be823d71383b4531597294e8bbdc5ca355ecf0b8cbeaee3049e090f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_cb309fedcb482f831c0154f7c2d072780047c10328400cf540836cef394619b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb309fedcb482f831c0154f7c2d072780047c10328400cf540836cef394619b7->enter($__internal_cb309fedcb482f831c0154f7c2d072780047c10328400cf540836cef394619b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7b47f9be823d71383b4531597294e8bbdc5ca355ecf0b8cbeaee3049e090f9->leave($__internal_fe7b47f9be823d71383b4531597294e8bbdc5ca355ecf0b8cbeaee3049e090f9_prof);

        
        $__internal_cb309fedcb482f831c0154f7c2d072780047c10328400cf540836cef394619b7->leave($__internal_cb309fedcb482f831c0154f7c2d072780047c10328400cf540836cef394619b7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4b598df25c1086fceb6647f979544f09a6d47d4e9c4ce24bfbe681a4eddc4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b598df25c1086fceb6647f979544f09a6d47d4e9c4ce24bfbe681a4eddc4f4->enter($__internal_c4b598df25c1086fceb6647f979544f09a6d47d4e9c4ce24bfbe681a4eddc4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91a781b615607adf558b140f01f50e73401388254dd709cabb60dd3232ad7220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a781b615607adf558b140f01f50e73401388254dd709cabb60dd3232ad7220->enter($__internal_91a781b615607adf558b140f01f50e73401388254dd709cabb60dd3232ad7220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_91a781b615607adf558b140f01f50e73401388254dd709cabb60dd3232ad7220->leave($__internal_91a781b615607adf558b140f01f50e73401388254dd709cabb60dd3232ad7220_prof);

        
        $__internal_c4b598df25c1086fceb6647f979544f09a6d47d4e9c4ce24bfbe681a4eddc4f4->leave($__internal_c4b598df25c1086fceb6647f979544f09a6d47d4e9c4ce24bfbe681a4eddc4f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
