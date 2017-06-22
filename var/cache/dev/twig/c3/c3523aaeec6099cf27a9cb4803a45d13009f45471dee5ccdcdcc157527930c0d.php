<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3fd0284339c33991cb124e31c57275999388799e0e2edf775716aa0764d2e67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_64430e9dcf6d69a669814fc89e691536069edad48d8a198ac4d9e447ad7f67c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64430e9dcf6d69a669814fc89e691536069edad48d8a198ac4d9e447ad7f67c7->enter($__internal_64430e9dcf6d69a669814fc89e691536069edad48d8a198ac4d9e447ad7f67c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_3742f0c1ce935a6a7145ca55b295f26bd348abadcd4df9b0b8334df241411d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3742f0c1ce935a6a7145ca55b295f26bd348abadcd4df9b0b8334df241411d71->enter($__internal_3742f0c1ce935a6a7145ca55b295f26bd348abadcd4df9b0b8334df241411d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64430e9dcf6d69a669814fc89e691536069edad48d8a198ac4d9e447ad7f67c7->leave($__internal_64430e9dcf6d69a669814fc89e691536069edad48d8a198ac4d9e447ad7f67c7_prof);

        
        $__internal_3742f0c1ce935a6a7145ca55b295f26bd348abadcd4df9b0b8334df241411d71->leave($__internal_3742f0c1ce935a6a7145ca55b295f26bd348abadcd4df9b0b8334df241411d71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e4212f014f723ce1f3c7a2f64c8284c8c34ed6e410deb06c02ee7870ca6de0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4212f014f723ce1f3c7a2f64c8284c8c34ed6e410deb06c02ee7870ca6de0a->enter($__internal_7e4212f014f723ce1f3c7a2f64c8284c8c34ed6e410deb06c02ee7870ca6de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0207274e3120bbc5734b03a853bb400687327d8ebc0dd09f86fb36b42e24c39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0207274e3120bbc5734b03a853bb400687327d8ebc0dd09f86fb36b42e24c39d->enter($__internal_0207274e3120bbc5734b03a853bb400687327d8ebc0dd09f86fb36b42e24c39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0207274e3120bbc5734b03a853bb400687327d8ebc0dd09f86fb36b42e24c39d->leave($__internal_0207274e3120bbc5734b03a853bb400687327d8ebc0dd09f86fb36b42e24c39d_prof);

        
        $__internal_7e4212f014f723ce1f3c7a2f64c8284c8c34ed6e410deb06c02ee7870ca6de0a->leave($__internal_7e4212f014f723ce1f3c7a2f64c8284c8c34ed6e410deb06c02ee7870ca6de0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
