<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d147f2412b292057079e67460174e9a72eeadc96f4167401473c2bff2a7ceaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_94f8ad1ddcaad472ed16c55076c63476cd26d1fac299aaca496beb912ac81c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f8ad1ddcaad472ed16c55076c63476cd26d1fac299aaca496beb912ac81c59->enter($__internal_94f8ad1ddcaad472ed16c55076c63476cd26d1fac299aaca496beb912ac81c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7384be15406c0c754a61aef91c60b052c9d78875ab04553df382c11c862eb0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7384be15406c0c754a61aef91c60b052c9d78875ab04553df382c11c862eb0a7->enter($__internal_7384be15406c0c754a61aef91c60b052c9d78875ab04553df382c11c862eb0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f8ad1ddcaad472ed16c55076c63476cd26d1fac299aaca496beb912ac81c59->leave($__internal_94f8ad1ddcaad472ed16c55076c63476cd26d1fac299aaca496beb912ac81c59_prof);

        
        $__internal_7384be15406c0c754a61aef91c60b052c9d78875ab04553df382c11c862eb0a7->leave($__internal_7384be15406c0c754a61aef91c60b052c9d78875ab04553df382c11c862eb0a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b413a08dcec7d925b60d6ceee18336dc2370bcda5e6cab14bb8ccfea4ac4620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b413a08dcec7d925b60d6ceee18336dc2370bcda5e6cab14bb8ccfea4ac4620->enter($__internal_1b413a08dcec7d925b60d6ceee18336dc2370bcda5e6cab14bb8ccfea4ac4620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27caf2209a8d195038ac84b91fdd2890e692a07ca9994ee19208d1d7ba892f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27caf2209a8d195038ac84b91fdd2890e692a07ca9994ee19208d1d7ba892f31->enter($__internal_27caf2209a8d195038ac84b91fdd2890e692a07ca9994ee19208d1d7ba892f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_27caf2209a8d195038ac84b91fdd2890e692a07ca9994ee19208d1d7ba892f31->leave($__internal_27caf2209a8d195038ac84b91fdd2890e692a07ca9994ee19208d1d7ba892f31_prof);

        
        $__internal_1b413a08dcec7d925b60d6ceee18336dc2370bcda5e6cab14bb8ccfea4ac4620->leave($__internal_1b413a08dcec7d925b60d6ceee18336dc2370bcda5e6cab14bb8ccfea4ac4620_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
