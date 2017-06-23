<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_51dac5e686caeee664aa8179676a817704bc67171636a645680e7a6cb6f418f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e43b4cf33fda28d04d351f628592319f4cb87677105f1bbb06cd285dbb63ac33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43b4cf33fda28d04d351f628592319f4cb87677105f1bbb06cd285dbb63ac33->enter($__internal_e43b4cf33fda28d04d351f628592319f4cb87677105f1bbb06cd285dbb63ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_f6bfb4bcb8959cd3c7910fb1d5f687ea422059a8fe77a04b65fa257c0042e305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bfb4bcb8959cd3c7910fb1d5f687ea422059a8fe77a04b65fa257c0042e305->enter($__internal_f6bfb4bcb8959cd3c7910fb1d5f687ea422059a8fe77a04b65fa257c0042e305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43b4cf33fda28d04d351f628592319f4cb87677105f1bbb06cd285dbb63ac33->leave($__internal_e43b4cf33fda28d04d351f628592319f4cb87677105f1bbb06cd285dbb63ac33_prof);

        
        $__internal_f6bfb4bcb8959cd3c7910fb1d5f687ea422059a8fe77a04b65fa257c0042e305->leave($__internal_f6bfb4bcb8959cd3c7910fb1d5f687ea422059a8fe77a04b65fa257c0042e305_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1e337aff9e6cc538d4d9c006f2984e7f80f6b18939f41743f34d74029c92254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e337aff9e6cc538d4d9c006f2984e7f80f6b18939f41743f34d74029c92254->enter($__internal_e1e337aff9e6cc538d4d9c006f2984e7f80f6b18939f41743f34d74029c92254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbbfcbf49c64ba68df3da89573ea264b80f2c690f4dfba1feee43ef1d319e2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbfcbf49c64ba68df3da89573ea264b80f2c690f4dfba1feee43ef1d319e2e9->enter($__internal_cbbfcbf49c64ba68df3da89573ea264b80f2c690f4dfba1feee43ef1d319e2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cbbfcbf49c64ba68df3da89573ea264b80f2c690f4dfba1feee43ef1d319e2e9->leave($__internal_cbbfcbf49c64ba68df3da89573ea264b80f2c690f4dfba1feee43ef1d319e2e9_prof);

        
        $__internal_e1e337aff9e6cc538d4d9c006f2984e7f80f6b18939f41743f34d74029c92254->leave($__internal_e1e337aff9e6cc538d4d9c006f2984e7f80f6b18939f41743f34d74029c92254_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
