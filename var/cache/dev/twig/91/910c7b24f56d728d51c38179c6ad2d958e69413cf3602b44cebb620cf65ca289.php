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
        $__internal_67be6d1eae194a919087e49b33d39af41b6be2c374b63d9a3ac7ed411a7a22ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67be6d1eae194a919087e49b33d39af41b6be2c374b63d9a3ac7ed411a7a22ab->enter($__internal_67be6d1eae194a919087e49b33d39af41b6be2c374b63d9a3ac7ed411a7a22ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_f481af12198478d0a06f5bc822991ecf212bb45f307080ff691ad4457ef7b222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f481af12198478d0a06f5bc822991ecf212bb45f307080ff691ad4457ef7b222->enter($__internal_f481af12198478d0a06f5bc822991ecf212bb45f307080ff691ad4457ef7b222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67be6d1eae194a919087e49b33d39af41b6be2c374b63d9a3ac7ed411a7a22ab->leave($__internal_67be6d1eae194a919087e49b33d39af41b6be2c374b63d9a3ac7ed411a7a22ab_prof);

        
        $__internal_f481af12198478d0a06f5bc822991ecf212bb45f307080ff691ad4457ef7b222->leave($__internal_f481af12198478d0a06f5bc822991ecf212bb45f307080ff691ad4457ef7b222_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f321c12a65a041091683804597b7d0b1655b3c46c544e90295a4c5ec320a7990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f321c12a65a041091683804597b7d0b1655b3c46c544e90295a4c5ec320a7990->enter($__internal_f321c12a65a041091683804597b7d0b1655b3c46c544e90295a4c5ec320a7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_602de24da9b0199aefdb365df605751b7590d0ac5035cec6481723670742c8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602de24da9b0199aefdb365df605751b7590d0ac5035cec6481723670742c8f3->enter($__internal_602de24da9b0199aefdb365df605751b7590d0ac5035cec6481723670742c8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_602de24da9b0199aefdb365df605751b7590d0ac5035cec6481723670742c8f3->leave($__internal_602de24da9b0199aefdb365df605751b7590d0ac5035cec6481723670742c8f3_prof);

        
        $__internal_f321c12a65a041091683804597b7d0b1655b3c46c544e90295a4c5ec320a7990->leave($__internal_f321c12a65a041091683804597b7d0b1655b3c46c544e90295a4c5ec320a7990_prof);

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
