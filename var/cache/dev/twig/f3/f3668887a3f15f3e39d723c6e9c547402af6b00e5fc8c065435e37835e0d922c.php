<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_24ef5875ab9380cf100cf3f7ea460ae4018b737be65a024e46a2fd248bd134a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_27089bd6dc7628f74d484b251c58aae3c540ed696a9928e7c4ed4fa2c9757135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27089bd6dc7628f74d484b251c58aae3c540ed696a9928e7c4ed4fa2c9757135->enter($__internal_27089bd6dc7628f74d484b251c58aae3c540ed696a9928e7c4ed4fa2c9757135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_705bd039a9b78958cb8f19e75d2dcba45b753825c44c9e2725251eba01032818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705bd039a9b78958cb8f19e75d2dcba45b753825c44c9e2725251eba01032818->enter($__internal_705bd039a9b78958cb8f19e75d2dcba45b753825c44c9e2725251eba01032818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27089bd6dc7628f74d484b251c58aae3c540ed696a9928e7c4ed4fa2c9757135->leave($__internal_27089bd6dc7628f74d484b251c58aae3c540ed696a9928e7c4ed4fa2c9757135_prof);

        
        $__internal_705bd039a9b78958cb8f19e75d2dcba45b753825c44c9e2725251eba01032818->leave($__internal_705bd039a9b78958cb8f19e75d2dcba45b753825c44c9e2725251eba01032818_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0e7457733d28e66156694d501acc2a5c81f12fa2e15af42bd1d211265bb3657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e7457733d28e66156694d501acc2a5c81f12fa2e15af42bd1d211265bb3657->enter($__internal_e0e7457733d28e66156694d501acc2a5c81f12fa2e15af42bd1d211265bb3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb8be0b7f7c2f6e7e6aacaa0ca358704c9aca4d6798bcd20b015328dbca406c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8be0b7f7c2f6e7e6aacaa0ca358704c9aca4d6798bcd20b015328dbca406c5->enter($__internal_cb8be0b7f7c2f6e7e6aacaa0ca358704c9aca4d6798bcd20b015328dbca406c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cb8be0b7f7c2f6e7e6aacaa0ca358704c9aca4d6798bcd20b015328dbca406c5->leave($__internal_cb8be0b7f7c2f6e7e6aacaa0ca358704c9aca4d6798bcd20b015328dbca406c5_prof);

        
        $__internal_e0e7457733d28e66156694d501acc2a5c81f12fa2e15af42bd1d211265bb3657->leave($__internal_e0e7457733d28e66156694d501acc2a5c81f12fa2e15af42bd1d211265bb3657_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
