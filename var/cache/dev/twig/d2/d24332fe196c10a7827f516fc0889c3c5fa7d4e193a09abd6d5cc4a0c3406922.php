<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5918dc8c36ae954b73c9a1cdc7bf2b3f7a0bb3152aee65a7ccf40638e06beed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1745cac47009c64000ce93db179def395efbd31702bff63fa69566f71657e13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1745cac47009c64000ce93db179def395efbd31702bff63fa69566f71657e13c->enter($__internal_1745cac47009c64000ce93db179def395efbd31702bff63fa69566f71657e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_36881b0eac999cc5d3d0ebef3a7ec8e524413527dbb25bba29ee7f00069751b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36881b0eac999cc5d3d0ebef3a7ec8e524413527dbb25bba29ee7f00069751b2->enter($__internal_36881b0eac999cc5d3d0ebef3a7ec8e524413527dbb25bba29ee7f00069751b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1745cac47009c64000ce93db179def395efbd31702bff63fa69566f71657e13c->leave($__internal_1745cac47009c64000ce93db179def395efbd31702bff63fa69566f71657e13c_prof);

        
        $__internal_36881b0eac999cc5d3d0ebef3a7ec8e524413527dbb25bba29ee7f00069751b2->leave($__internal_36881b0eac999cc5d3d0ebef3a7ec8e524413527dbb25bba29ee7f00069751b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db3966fdc2c9dd638517fc278aeeacc6f51bea752ee4f2dcc8163ebfd469f0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3966fdc2c9dd638517fc278aeeacc6f51bea752ee4f2dcc8163ebfd469f0de->enter($__internal_db3966fdc2c9dd638517fc278aeeacc6f51bea752ee4f2dcc8163ebfd469f0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5354db4cdce0e4c163688292411d9711f44125dc74c9957e2ee9ba3b9f04cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5354db4cdce0e4c163688292411d9711f44125dc74c9957e2ee9ba3b9f04cb7->enter($__internal_d5354db4cdce0e4c163688292411d9711f44125dc74c9957e2ee9ba3b9f04cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d5354db4cdce0e4c163688292411d9711f44125dc74c9957e2ee9ba3b9f04cb7->leave($__internal_d5354db4cdce0e4c163688292411d9711f44125dc74c9957e2ee9ba3b9f04cb7_prof);

        
        $__internal_db3966fdc2c9dd638517fc278aeeacc6f51bea752ee4f2dcc8163ebfd469f0de->leave($__internal_db3966fdc2c9dd638517fc278aeeacc6f51bea752ee4f2dcc8163ebfd469f0de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
