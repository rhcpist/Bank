<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_07cefad9c8777c154eb58d300795ce928d85f904e6d98fcbf7fddb4789ae8586 extends Twig_Template
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
        $__internal_04bdc8bf25a91a9120fc651b54d57f044bf4f623047e96fedb3480e665160184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bdc8bf25a91a9120fc651b54d57f044bf4f623047e96fedb3480e665160184->enter($__internal_04bdc8bf25a91a9120fc651b54d57f044bf4f623047e96fedb3480e665160184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2ae2eeea085c4b7008a9d32b13369528fbbddfedb70defb979d0ff4675dd24c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae2eeea085c4b7008a9d32b13369528fbbddfedb70defb979d0ff4675dd24c3->enter($__internal_2ae2eeea085c4b7008a9d32b13369528fbbddfedb70defb979d0ff4675dd24c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bdc8bf25a91a9120fc651b54d57f044bf4f623047e96fedb3480e665160184->leave($__internal_04bdc8bf25a91a9120fc651b54d57f044bf4f623047e96fedb3480e665160184_prof);

        
        $__internal_2ae2eeea085c4b7008a9d32b13369528fbbddfedb70defb979d0ff4675dd24c3->leave($__internal_2ae2eeea085c4b7008a9d32b13369528fbbddfedb70defb979d0ff4675dd24c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3871225fdfb8fa2f0761ab76e9bc88bf3daf8a45324237f61e703c4f6a939c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3871225fdfb8fa2f0761ab76e9bc88bf3daf8a45324237f61e703c4f6a939c63->enter($__internal_3871225fdfb8fa2f0761ab76e9bc88bf3daf8a45324237f61e703c4f6a939c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e038e927b92fb9604fbbbb36aaefb13f1874dd6a814560bb4fa85161a91e2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e038e927b92fb9604fbbbb36aaefb13f1874dd6a814560bb4fa85161a91e2875->enter($__internal_e038e927b92fb9604fbbbb36aaefb13f1874dd6a814560bb4fa85161a91e2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e038e927b92fb9604fbbbb36aaefb13f1874dd6a814560bb4fa85161a91e2875->leave($__internal_e038e927b92fb9604fbbbb36aaefb13f1874dd6a814560bb4fa85161a91e2875_prof);

        
        $__internal_3871225fdfb8fa2f0761ab76e9bc88bf3daf8a45324237f61e703c4f6a939c63->leave($__internal_3871225fdfb8fa2f0761ab76e9bc88bf3daf8a45324237f61e703c4f6a939c63_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
