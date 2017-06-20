<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d147f2412b292057079e67460174e9a72eeadc96f4167401473c2bff2a7ceaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_8ee810dc49beca62c7d58735cd5756d23de50375cf02291bb55a5d1968944cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee810dc49beca62c7d58735cd5756d23de50375cf02291bb55a5d1968944cae->enter($__internal_8ee810dc49beca62c7d58735cd5756d23de50375cf02291bb55a5d1968944cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_0445a746cb466398ccc059b2680e984b4775ddd4a043d7362efeeb8b3f85ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0445a746cb466398ccc059b2680e984b4775ddd4a043d7362efeeb8b3f85ac07->enter($__internal_0445a746cb466398ccc059b2680e984b4775ddd4a043d7362efeeb8b3f85ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee810dc49beca62c7d58735cd5756d23de50375cf02291bb55a5d1968944cae->leave($__internal_8ee810dc49beca62c7d58735cd5756d23de50375cf02291bb55a5d1968944cae_prof);

        
        $__internal_0445a746cb466398ccc059b2680e984b4775ddd4a043d7362efeeb8b3f85ac07->leave($__internal_0445a746cb466398ccc059b2680e984b4775ddd4a043d7362efeeb8b3f85ac07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de0aa89fb13280fe6a6743062eeaf75a67fa5e5edcdb4330254c72bfa09aa5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0aa89fb13280fe6a6743062eeaf75a67fa5e5edcdb4330254c72bfa09aa5f2->enter($__internal_de0aa89fb13280fe6a6743062eeaf75a67fa5e5edcdb4330254c72bfa09aa5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0fadc8d9dc2ef004c7fbce0bf790dbf63efec250326bfe6319f8671d7521e443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fadc8d9dc2ef004c7fbce0bf790dbf63efec250326bfe6319f8671d7521e443->enter($__internal_0fadc8d9dc2ef004c7fbce0bf790dbf63efec250326bfe6319f8671d7521e443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0fadc8d9dc2ef004c7fbce0bf790dbf63efec250326bfe6319f8671d7521e443->leave($__internal_0fadc8d9dc2ef004c7fbce0bf790dbf63efec250326bfe6319f8671d7521e443_prof);

        
        $__internal_de0aa89fb13280fe6a6743062eeaf75a67fa5e5edcdb4330254c72bfa09aa5f2->leave($__internal_de0aa89fb13280fe6a6743062eeaf75a67fa5e5edcdb4330254c72bfa09aa5f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
