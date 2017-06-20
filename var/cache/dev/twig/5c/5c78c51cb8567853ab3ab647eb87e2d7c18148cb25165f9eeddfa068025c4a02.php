<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7c90b29185e1a4dd0122ceef256f29e8c9e15f2a5b2134067676046b6281259d extends Twig_Template
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
        $__internal_7394abd1d097bcc1de1bcacc827fe03d6b7051dec073e6bf88f2e5cecc7ca3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7394abd1d097bcc1de1bcacc827fe03d6b7051dec073e6bf88f2e5cecc7ca3b7->enter($__internal_7394abd1d097bcc1de1bcacc827fe03d6b7051dec073e6bf88f2e5cecc7ca3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_64015e85701f3f2f9e0a6e17cae7411f8336b0788853ef868922673b2dfae83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64015e85701f3f2f9e0a6e17cae7411f8336b0788853ef868922673b2dfae83f->enter($__internal_64015e85701f3f2f9e0a6e17cae7411f8336b0788853ef868922673b2dfae83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7394abd1d097bcc1de1bcacc827fe03d6b7051dec073e6bf88f2e5cecc7ca3b7->leave($__internal_7394abd1d097bcc1de1bcacc827fe03d6b7051dec073e6bf88f2e5cecc7ca3b7_prof);

        
        $__internal_64015e85701f3f2f9e0a6e17cae7411f8336b0788853ef868922673b2dfae83f->leave($__internal_64015e85701f3f2f9e0a6e17cae7411f8336b0788853ef868922673b2dfae83f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b84b101d15f47cd79bbc8d15def8df45bde6b669fa9ed8890507169aeec69987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84b101d15f47cd79bbc8d15def8df45bde6b669fa9ed8890507169aeec69987->enter($__internal_b84b101d15f47cd79bbc8d15def8df45bde6b669fa9ed8890507169aeec69987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d66edfb1437e2a5140dd6fc617c16aff1d65f7f90c9caedec752c7637a75c0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66edfb1437e2a5140dd6fc617c16aff1d65f7f90c9caedec752c7637a75c0ce->enter($__internal_d66edfb1437e2a5140dd6fc617c16aff1d65f7f90c9caedec752c7637a75c0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d66edfb1437e2a5140dd6fc617c16aff1d65f7f90c9caedec752c7637a75c0ce->leave($__internal_d66edfb1437e2a5140dd6fc617c16aff1d65f7f90c9caedec752c7637a75c0ce_prof);

        
        $__internal_b84b101d15f47cd79bbc8d15def8df45bde6b669fa9ed8890507169aeec69987->leave($__internal_b84b101d15f47cd79bbc8d15def8df45bde6b669fa9ed8890507169aeec69987_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
