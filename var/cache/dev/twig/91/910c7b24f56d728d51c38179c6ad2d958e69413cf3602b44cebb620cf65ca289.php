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
        $__internal_63ee6b2ee4e09fd4e6f2b5980826a09cd651461ccd0230f01c4188724db186f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ee6b2ee4e09fd4e6f2b5980826a09cd651461ccd0230f01c4188724db186f7->enter($__internal_63ee6b2ee4e09fd4e6f2b5980826a09cd651461ccd0230f01c4188724db186f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_be2b95431c3b86a494442412e703cadf6ffd99f1a1c063ccd0bb35a586aaee5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2b95431c3b86a494442412e703cadf6ffd99f1a1c063ccd0bb35a586aaee5c->enter($__internal_be2b95431c3b86a494442412e703cadf6ffd99f1a1c063ccd0bb35a586aaee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ee6b2ee4e09fd4e6f2b5980826a09cd651461ccd0230f01c4188724db186f7->leave($__internal_63ee6b2ee4e09fd4e6f2b5980826a09cd651461ccd0230f01c4188724db186f7_prof);

        
        $__internal_be2b95431c3b86a494442412e703cadf6ffd99f1a1c063ccd0bb35a586aaee5c->leave($__internal_be2b95431c3b86a494442412e703cadf6ffd99f1a1c063ccd0bb35a586aaee5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf6bdf88b18d96b3efbeaa563ccbc2c07e6eb44bc1960d2a7f88e319bbdd9ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6bdf88b18d96b3efbeaa563ccbc2c07e6eb44bc1960d2a7f88e319bbdd9ff6->enter($__internal_cf6bdf88b18d96b3efbeaa563ccbc2c07e6eb44bc1960d2a7f88e319bbdd9ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21da17f168bf91313fa36182e0ce721c4d24605814c6b6c90f2c6c8686a4a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21da17f168bf91313fa36182e0ce721c4d24605814c6b6c90f2c6c8686a4a1f7->enter($__internal_21da17f168bf91313fa36182e0ce721c4d24605814c6b6c90f2c6c8686a4a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_21da17f168bf91313fa36182e0ce721c4d24605814c6b6c90f2c6c8686a4a1f7->leave($__internal_21da17f168bf91313fa36182e0ce721c4d24605814c6b6c90f2c6c8686a4a1f7_prof);

        
        $__internal_cf6bdf88b18d96b3efbeaa563ccbc2c07e6eb44bc1960d2a7f88e319bbdd9ff6->leave($__internal_cf6bdf88b18d96b3efbeaa563ccbc2c07e6eb44bc1960d2a7f88e319bbdd9ff6_prof);

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
