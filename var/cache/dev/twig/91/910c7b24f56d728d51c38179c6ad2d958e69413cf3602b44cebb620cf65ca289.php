<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_23a572525e34402b822458be78b44f7c7a4c5e635ccaf32258fab23658098e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d2f87fa1367183e3ef1e91d595430f7499cd5d4db7e6ac2483c67950a3a51a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f87fa1367183e3ef1e91d595430f7499cd5d4db7e6ac2483c67950a3a51a37->enter($__internal_d2f87fa1367183e3ef1e91d595430f7499cd5d4db7e6ac2483c67950a3a51a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_f7574270d520f0b91456d2d270356d403623125fe108895d8cb343ea38b1c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7574270d520f0b91456d2d270356d403623125fe108895d8cb343ea38b1c8b1->enter($__internal_f7574270d520f0b91456d2d270356d403623125fe108895d8cb343ea38b1c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f87fa1367183e3ef1e91d595430f7499cd5d4db7e6ac2483c67950a3a51a37->leave($__internal_d2f87fa1367183e3ef1e91d595430f7499cd5d4db7e6ac2483c67950a3a51a37_prof);

        
        $__internal_f7574270d520f0b91456d2d270356d403623125fe108895d8cb343ea38b1c8b1->leave($__internal_f7574270d520f0b91456d2d270356d403623125fe108895d8cb343ea38b1c8b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d941294521ef3d6ac22cef35d27a617bdcd0b238cc7caed41382f7a0d3dd5ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d941294521ef3d6ac22cef35d27a617bdcd0b238cc7caed41382f7a0d3dd5ffa->enter($__internal_d941294521ef3d6ac22cef35d27a617bdcd0b238cc7caed41382f7a0d3dd5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_898fd5a60d18f3239e8d51a3ee7f187a576ac99e2fe2d1949b0a5aa0a7f57d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898fd5a60d18f3239e8d51a3ee7f187a576ac99e2fe2d1949b0a5aa0a7f57d2d->enter($__internal_898fd5a60d18f3239e8d51a3ee7f187a576ac99e2fe2d1949b0a5aa0a7f57d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_898fd5a60d18f3239e8d51a3ee7f187a576ac99e2fe2d1949b0a5aa0a7f57d2d->leave($__internal_898fd5a60d18f3239e8d51a3ee7f187a576ac99e2fe2d1949b0a5aa0a7f57d2d_prof);

        
        $__internal_d941294521ef3d6ac22cef35d27a617bdcd0b238cc7caed41382f7a0d3dd5ffa->leave($__internal_d941294521ef3d6ac22cef35d27a617bdcd0b238cc7caed41382f7a0d3dd5ffa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
