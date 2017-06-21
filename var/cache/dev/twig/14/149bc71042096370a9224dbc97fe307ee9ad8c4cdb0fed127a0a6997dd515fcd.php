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
        $__internal_018c9e2df673e624536140e9fae576aa9127f6d2c9c06d03ba955bec013e11d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018c9e2df673e624536140e9fae576aa9127f6d2c9c06d03ba955bec013e11d8->enter($__internal_018c9e2df673e624536140e9fae576aa9127f6d2c9c06d03ba955bec013e11d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4cd6d98267581ae42ccdb92b79462a0ae32ebe01051ea04d569c1a3cec280cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd6d98267581ae42ccdb92b79462a0ae32ebe01051ea04d569c1a3cec280cc1->enter($__internal_4cd6d98267581ae42ccdb92b79462a0ae32ebe01051ea04d569c1a3cec280cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018c9e2df673e624536140e9fae576aa9127f6d2c9c06d03ba955bec013e11d8->leave($__internal_018c9e2df673e624536140e9fae576aa9127f6d2c9c06d03ba955bec013e11d8_prof);

        
        $__internal_4cd6d98267581ae42ccdb92b79462a0ae32ebe01051ea04d569c1a3cec280cc1->leave($__internal_4cd6d98267581ae42ccdb92b79462a0ae32ebe01051ea04d569c1a3cec280cc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a0c8e94db64a125ddff646ea57ab382a22bc6b1b7ecc48dc706e2274f7762a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0c8e94db64a125ddff646ea57ab382a22bc6b1b7ecc48dc706e2274f7762a3->enter($__internal_0a0c8e94db64a125ddff646ea57ab382a22bc6b1b7ecc48dc706e2274f7762a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0763b474408914affca01f18463b46ac65f582a225aebc67b8495280af0ba91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0763b474408914affca01f18463b46ac65f582a225aebc67b8495280af0ba91c->enter($__internal_0763b474408914affca01f18463b46ac65f582a225aebc67b8495280af0ba91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0763b474408914affca01f18463b46ac65f582a225aebc67b8495280af0ba91c->leave($__internal_0763b474408914affca01f18463b46ac65f582a225aebc67b8495280af0ba91c_prof);

        
        $__internal_0a0c8e94db64a125ddff646ea57ab382a22bc6b1b7ecc48dc706e2274f7762a3->leave($__internal_0a0c8e94db64a125ddff646ea57ab382a22bc6b1b7ecc48dc706e2274f7762a3_prof);

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
