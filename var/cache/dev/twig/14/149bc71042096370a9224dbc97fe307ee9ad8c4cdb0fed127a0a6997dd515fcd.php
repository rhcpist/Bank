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
        $__internal_92062fb0e4139d960c2ac552744a042008362a98788ad7c1145627027331d245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92062fb0e4139d960c2ac552744a042008362a98788ad7c1145627027331d245->enter($__internal_92062fb0e4139d960c2ac552744a042008362a98788ad7c1145627027331d245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_049f3052e4ea5d4f190761eada31db1536f0a3cc55f27a9e157509098cda0e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049f3052e4ea5d4f190761eada31db1536f0a3cc55f27a9e157509098cda0e2d->enter($__internal_049f3052e4ea5d4f190761eada31db1536f0a3cc55f27a9e157509098cda0e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92062fb0e4139d960c2ac552744a042008362a98788ad7c1145627027331d245->leave($__internal_92062fb0e4139d960c2ac552744a042008362a98788ad7c1145627027331d245_prof);

        
        $__internal_049f3052e4ea5d4f190761eada31db1536f0a3cc55f27a9e157509098cda0e2d->leave($__internal_049f3052e4ea5d4f190761eada31db1536f0a3cc55f27a9e157509098cda0e2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0c4314e0e335044e2960a43ecb6d43be5f61b3ba32bf365eb4fdbf20ac5e7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c4314e0e335044e2960a43ecb6d43be5f61b3ba32bf365eb4fdbf20ac5e7c6->enter($__internal_f0c4314e0e335044e2960a43ecb6d43be5f61b3ba32bf365eb4fdbf20ac5e7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ff1b42ba91cec7f0c82522bb7dc159f4bcb044d59c5d5843c4484a6701b9ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff1b42ba91cec7f0c82522bb7dc159f4bcb044d59c5d5843c4484a6701b9ed6->enter($__internal_8ff1b42ba91cec7f0c82522bb7dc159f4bcb044d59c5d5843c4484a6701b9ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8ff1b42ba91cec7f0c82522bb7dc159f4bcb044d59c5d5843c4484a6701b9ed6->leave($__internal_8ff1b42ba91cec7f0c82522bb7dc159f4bcb044d59c5d5843c4484a6701b9ed6_prof);

        
        $__internal_f0c4314e0e335044e2960a43ecb6d43be5f61b3ba32bf365eb4fdbf20ac5e7c6->leave($__internal_f0c4314e0e335044e2960a43ecb6d43be5f61b3ba32bf365eb4fdbf20ac5e7c6_prof);

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
