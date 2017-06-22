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
        $__internal_f4641aaa2754d6b8af83a83de8c6bb20110c203e2b38f5093bc154b8b75e4fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4641aaa2754d6b8af83a83de8c6bb20110c203e2b38f5093bc154b8b75e4fde->enter($__internal_f4641aaa2754d6b8af83a83de8c6bb20110c203e2b38f5093bc154b8b75e4fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6e8d982065913127c4fb6d931b76f484668bdeac8d36a65c763c757a1c23d5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8d982065913127c4fb6d931b76f484668bdeac8d36a65c763c757a1c23d5b7->enter($__internal_6e8d982065913127c4fb6d931b76f484668bdeac8d36a65c763c757a1c23d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4641aaa2754d6b8af83a83de8c6bb20110c203e2b38f5093bc154b8b75e4fde->leave($__internal_f4641aaa2754d6b8af83a83de8c6bb20110c203e2b38f5093bc154b8b75e4fde_prof);

        
        $__internal_6e8d982065913127c4fb6d931b76f484668bdeac8d36a65c763c757a1c23d5b7->leave($__internal_6e8d982065913127c4fb6d931b76f484668bdeac8d36a65c763c757a1c23d5b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea55f0b15248164c1b3fc6cdbcfd25cf94b911a2181736d5bf965d62900f2911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea55f0b15248164c1b3fc6cdbcfd25cf94b911a2181736d5bf965d62900f2911->enter($__internal_ea55f0b15248164c1b3fc6cdbcfd25cf94b911a2181736d5bf965d62900f2911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_afc2873fa759609d4b9b280329790efa7a138f66c96f0f4442020cbceb187e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc2873fa759609d4b9b280329790efa7a138f66c96f0f4442020cbceb187e9a->enter($__internal_afc2873fa759609d4b9b280329790efa7a138f66c96f0f4442020cbceb187e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_afc2873fa759609d4b9b280329790efa7a138f66c96f0f4442020cbceb187e9a->leave($__internal_afc2873fa759609d4b9b280329790efa7a138f66c96f0f4442020cbceb187e9a_prof);

        
        $__internal_ea55f0b15248164c1b3fc6cdbcfd25cf94b911a2181736d5bf965d62900f2911->leave($__internal_ea55f0b15248164c1b3fc6cdbcfd25cf94b911a2181736d5bf965d62900f2911_prof);

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
