<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_51dac5e686caeee664aa8179676a817704bc67171636a645680e7a6cb6f418f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f8b42b12fcf3ea571067911c270476a1695bbb5e86c4cf2bb82e99edf4e3bc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b42b12fcf3ea571067911c270476a1695bbb5e86c4cf2bb82e99edf4e3bc2e->enter($__internal_f8b42b12fcf3ea571067911c270476a1695bbb5e86c4cf2bb82e99edf4e3bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_c7759fbf465034773bd1be285646672ca211695cca45a140df9bac4a0efb172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7759fbf465034773bd1be285646672ca211695cca45a140df9bac4a0efb172f->enter($__internal_c7759fbf465034773bd1be285646672ca211695cca45a140df9bac4a0efb172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b42b12fcf3ea571067911c270476a1695bbb5e86c4cf2bb82e99edf4e3bc2e->leave($__internal_f8b42b12fcf3ea571067911c270476a1695bbb5e86c4cf2bb82e99edf4e3bc2e_prof);

        
        $__internal_c7759fbf465034773bd1be285646672ca211695cca45a140df9bac4a0efb172f->leave($__internal_c7759fbf465034773bd1be285646672ca211695cca45a140df9bac4a0efb172f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_200461cb958c1e169749fb3a13076bd3d70148e81b61a2215c6edf59ecdbb232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200461cb958c1e169749fb3a13076bd3d70148e81b61a2215c6edf59ecdbb232->enter($__internal_200461cb958c1e169749fb3a13076bd3d70148e81b61a2215c6edf59ecdbb232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b53067722b733b283ee2f884e25df48e4863fec9040c25bd02213359e838858e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53067722b733b283ee2f884e25df48e4863fec9040c25bd02213359e838858e->enter($__internal_b53067722b733b283ee2f884e25df48e4863fec9040c25bd02213359e838858e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b53067722b733b283ee2f884e25df48e4863fec9040c25bd02213359e838858e->leave($__internal_b53067722b733b283ee2f884e25df48e4863fec9040c25bd02213359e838858e_prof);

        
        $__internal_200461cb958c1e169749fb3a13076bd3d70148e81b61a2215c6edf59ecdbb232->leave($__internal_200461cb958c1e169749fb3a13076bd3d70148e81b61a2215c6edf59ecdbb232_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
