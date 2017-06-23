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
        $__internal_ed427f0ccdc949a656a77bc06532b7e4309905aa7541f5166f70a863a312dc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed427f0ccdc949a656a77bc06532b7e4309905aa7541f5166f70a863a312dc3c->enter($__internal_ed427f0ccdc949a656a77bc06532b7e4309905aa7541f5166f70a863a312dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_3dc57a8367004fb8cef3b119881eb70b991a358311a5805c276eb2ebcc52c231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc57a8367004fb8cef3b119881eb70b991a358311a5805c276eb2ebcc52c231->enter($__internal_3dc57a8367004fb8cef3b119881eb70b991a358311a5805c276eb2ebcc52c231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed427f0ccdc949a656a77bc06532b7e4309905aa7541f5166f70a863a312dc3c->leave($__internal_ed427f0ccdc949a656a77bc06532b7e4309905aa7541f5166f70a863a312dc3c_prof);

        
        $__internal_3dc57a8367004fb8cef3b119881eb70b991a358311a5805c276eb2ebcc52c231->leave($__internal_3dc57a8367004fb8cef3b119881eb70b991a358311a5805c276eb2ebcc52c231_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67e6c3fa9a813d3e594497f228a7baaefeef6593333905a3b0d0260ccaf78b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e6c3fa9a813d3e594497f228a7baaefeef6593333905a3b0d0260ccaf78b1f->enter($__internal_67e6c3fa9a813d3e594497f228a7baaefeef6593333905a3b0d0260ccaf78b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19e54c8bd983e3c7ab639b644ffc06de45054d8ed8d3ae82e2c3cc478d3724c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e54c8bd983e3c7ab639b644ffc06de45054d8ed8d3ae82e2c3cc478d3724c8->enter($__internal_19e54c8bd983e3c7ab639b644ffc06de45054d8ed8d3ae82e2c3cc478d3724c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_19e54c8bd983e3c7ab639b644ffc06de45054d8ed8d3ae82e2c3cc478d3724c8->leave($__internal_19e54c8bd983e3c7ab639b644ffc06de45054d8ed8d3ae82e2c3cc478d3724c8_prof);

        
        $__internal_67e6c3fa9a813d3e594497f228a7baaefeef6593333905a3b0d0260ccaf78b1f->leave($__internal_67e6c3fa9a813d3e594497f228a7baaefeef6593333905a3b0d0260ccaf78b1f_prof);

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
