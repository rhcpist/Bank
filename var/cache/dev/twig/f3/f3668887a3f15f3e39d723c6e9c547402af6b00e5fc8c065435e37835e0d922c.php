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
        $__internal_58a24069863a36c80affff44e57ef3cc6bd9c160c29ef195d41876ac1d6a11ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a24069863a36c80affff44e57ef3cc6bd9c160c29ef195d41876ac1d6a11ca->enter($__internal_58a24069863a36c80affff44e57ef3cc6bd9c160c29ef195d41876ac1d6a11ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0f42e4817365517b57e95385952818d69b94c51e29bf689361b1803a8b843904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f42e4817365517b57e95385952818d69b94c51e29bf689361b1803a8b843904->enter($__internal_0f42e4817365517b57e95385952818d69b94c51e29bf689361b1803a8b843904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a24069863a36c80affff44e57ef3cc6bd9c160c29ef195d41876ac1d6a11ca->leave($__internal_58a24069863a36c80affff44e57ef3cc6bd9c160c29ef195d41876ac1d6a11ca_prof);

        
        $__internal_0f42e4817365517b57e95385952818d69b94c51e29bf689361b1803a8b843904->leave($__internal_0f42e4817365517b57e95385952818d69b94c51e29bf689361b1803a8b843904_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c62d91c8b145727e270d7a78783b28afb774c79d3c10d1e6ce51700b7bfcd98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62d91c8b145727e270d7a78783b28afb774c79d3c10d1e6ce51700b7bfcd98c->enter($__internal_c62d91c8b145727e270d7a78783b28afb774c79d3c10d1e6ce51700b7bfcd98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa62c72bedf4828bed0e6193d3a6142fd108f2825d43cce0ca04d548e09eb273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa62c72bedf4828bed0e6193d3a6142fd108f2825d43cce0ca04d548e09eb273->enter($__internal_aa62c72bedf4828bed0e6193d3a6142fd108f2825d43cce0ca04d548e09eb273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_aa62c72bedf4828bed0e6193d3a6142fd108f2825d43cce0ca04d548e09eb273->leave($__internal_aa62c72bedf4828bed0e6193d3a6142fd108f2825d43cce0ca04d548e09eb273_prof);

        
        $__internal_c62d91c8b145727e270d7a78783b28afb774c79d3c10d1e6ce51700b7bfcd98c->leave($__internal_c62d91c8b145727e270d7a78783b28afb774c79d3c10d1e6ce51700b7bfcd98c_prof);

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
