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
        $__internal_7224a7102b00f73ce3ff2ffef64a4683f53a4f0d142f3613b3d4dd0c738ebac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7224a7102b00f73ce3ff2ffef64a4683f53a4f0d142f3613b3d4dd0c738ebac6->enter($__internal_7224a7102b00f73ce3ff2ffef64a4683f53a4f0d142f3613b3d4dd0c738ebac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7d0e791eb61ff559bf0740f251de45c8ffc25a18c83263947066b627d801a302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0e791eb61ff559bf0740f251de45c8ffc25a18c83263947066b627d801a302->enter($__internal_7d0e791eb61ff559bf0740f251de45c8ffc25a18c83263947066b627d801a302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7224a7102b00f73ce3ff2ffef64a4683f53a4f0d142f3613b3d4dd0c738ebac6->leave($__internal_7224a7102b00f73ce3ff2ffef64a4683f53a4f0d142f3613b3d4dd0c738ebac6_prof);

        
        $__internal_7d0e791eb61ff559bf0740f251de45c8ffc25a18c83263947066b627d801a302->leave($__internal_7d0e791eb61ff559bf0740f251de45c8ffc25a18c83263947066b627d801a302_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_492bc624960fb0d27c13fb4fae26bdeaa305edbc7b95509579d2a45aa575bd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492bc624960fb0d27c13fb4fae26bdeaa305edbc7b95509579d2a45aa575bd46->enter($__internal_492bc624960fb0d27c13fb4fae26bdeaa305edbc7b95509579d2a45aa575bd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b32d5a3bc3713e3f7cf441074a6f2ed8607ebb77208a58732ab3e0cd582cb94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32d5a3bc3713e3f7cf441074a6f2ed8607ebb77208a58732ab3e0cd582cb94c->enter($__internal_b32d5a3bc3713e3f7cf441074a6f2ed8607ebb77208a58732ab3e0cd582cb94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b32d5a3bc3713e3f7cf441074a6f2ed8607ebb77208a58732ab3e0cd582cb94c->leave($__internal_b32d5a3bc3713e3f7cf441074a6f2ed8607ebb77208a58732ab3e0cd582cb94c_prof);

        
        $__internal_492bc624960fb0d27c13fb4fae26bdeaa305edbc7b95509579d2a45aa575bd46->leave($__internal_492bc624960fb0d27c13fb4fae26bdeaa305edbc7b95509579d2a45aa575bd46_prof);

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
