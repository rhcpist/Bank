<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_567329e5426171255dd4fea8a1095917a90e0fad03f828879e3452b709a89664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_27b5141b16fdc16855dca4330e293d7eb5c21c7a939225c3f06d7f20609e2c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b5141b16fdc16855dca4330e293d7eb5c21c7a939225c3f06d7f20609e2c5e->enter($__internal_27b5141b16fdc16855dca4330e293d7eb5c21c7a939225c3f06d7f20609e2c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_57d3613040ddb709c980704957d52aae7a67544029df064270c5a27fee104050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d3613040ddb709c980704957d52aae7a67544029df064270c5a27fee104050->enter($__internal_57d3613040ddb709c980704957d52aae7a67544029df064270c5a27fee104050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b5141b16fdc16855dca4330e293d7eb5c21c7a939225c3f06d7f20609e2c5e->leave($__internal_27b5141b16fdc16855dca4330e293d7eb5c21c7a939225c3f06d7f20609e2c5e_prof);

        
        $__internal_57d3613040ddb709c980704957d52aae7a67544029df064270c5a27fee104050->leave($__internal_57d3613040ddb709c980704957d52aae7a67544029df064270c5a27fee104050_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b03663d9a1abfb3adf1dc23d2c30b00f9641f9029bb0263e0e5b7bd5b24f9e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03663d9a1abfb3adf1dc23d2c30b00f9641f9029bb0263e0e5b7bd5b24f9e88->enter($__internal_b03663d9a1abfb3adf1dc23d2c30b00f9641f9029bb0263e0e5b7bd5b24f9e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa0cda243639696a95080e27e7222030359386bdabb968213176aeeeb97a40f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0cda243639696a95080e27e7222030359386bdabb968213176aeeeb97a40f2->enter($__internal_fa0cda243639696a95080e27e7222030359386bdabb968213176aeeeb97a40f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fa0cda243639696a95080e27e7222030359386bdabb968213176aeeeb97a40f2->leave($__internal_fa0cda243639696a95080e27e7222030359386bdabb968213176aeeeb97a40f2_prof);

        
        $__internal_b03663d9a1abfb3adf1dc23d2c30b00f9641f9029bb0263e0e5b7bd5b24f9e88->leave($__internal_b03663d9a1abfb3adf1dc23d2c30b00f9641f9029bb0263e0e5b7bd5b24f9e88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
