<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_48bd7fb0db2eb14bc42188bf7d840fa7c3ff2e5cc9c9ceed73afb7ecda6225c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_219571a7bd7b4f04f5b41dbd979ae7d4f53126102a65884003b93b8b46518ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219571a7bd7b4f04f5b41dbd979ae7d4f53126102a65884003b93b8b46518ecb->enter($__internal_219571a7bd7b4f04f5b41dbd979ae7d4f53126102a65884003b93b8b46518ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b7767b645176dff65dbf26b5416cf813857156e2a3a26fef66436982269488a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7767b645176dff65dbf26b5416cf813857156e2a3a26fef66436982269488a8->enter($__internal_b7767b645176dff65dbf26b5416cf813857156e2a3a26fef66436982269488a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219571a7bd7b4f04f5b41dbd979ae7d4f53126102a65884003b93b8b46518ecb->leave($__internal_219571a7bd7b4f04f5b41dbd979ae7d4f53126102a65884003b93b8b46518ecb_prof);

        
        $__internal_b7767b645176dff65dbf26b5416cf813857156e2a3a26fef66436982269488a8->leave($__internal_b7767b645176dff65dbf26b5416cf813857156e2a3a26fef66436982269488a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2ec2b0d9855cf95453a3fe47ebc595f04d3cbd219b16b54ebe6273b325fce9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ec2b0d9855cf95453a3fe47ebc595f04d3cbd219b16b54ebe6273b325fce9a->enter($__internal_d2ec2b0d9855cf95453a3fe47ebc595f04d3cbd219b16b54ebe6273b325fce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a07efcc56c764beac62158ccab77137c09778b2ab66ddaaec4fa223b2016c257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07efcc56c764beac62158ccab77137c09778b2ab66ddaaec4fa223b2016c257->enter($__internal_a07efcc56c764beac62158ccab77137c09778b2ab66ddaaec4fa223b2016c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a07efcc56c764beac62158ccab77137c09778b2ab66ddaaec4fa223b2016c257->leave($__internal_a07efcc56c764beac62158ccab77137c09778b2ab66ddaaec4fa223b2016c257_prof);

        
        $__internal_d2ec2b0d9855cf95453a3fe47ebc595f04d3cbd219b16b54ebe6273b325fce9a->leave($__internal_d2ec2b0d9855cf95453a3fe47ebc595f04d3cbd219b16b54ebe6273b325fce9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
