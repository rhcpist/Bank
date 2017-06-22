<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4e760b62dcc6956e5b94a4e9a7267d087861b2e21214a43ad44e85c7b0b80e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_2b19270ef07a0c7afb378065a2be57cee6703301ab7afdaa62d086fa8ed263ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b19270ef07a0c7afb378065a2be57cee6703301ab7afdaa62d086fa8ed263ab->enter($__internal_2b19270ef07a0c7afb378065a2be57cee6703301ab7afdaa62d086fa8ed263ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_cffc1d964e7044e390c8b53fa7eb3f8315d7b0a7551ee06225a629e796fba1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffc1d964e7044e390c8b53fa7eb3f8315d7b0a7551ee06225a629e796fba1b3->enter($__internal_cffc1d964e7044e390c8b53fa7eb3f8315d7b0a7551ee06225a629e796fba1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b19270ef07a0c7afb378065a2be57cee6703301ab7afdaa62d086fa8ed263ab->leave($__internal_2b19270ef07a0c7afb378065a2be57cee6703301ab7afdaa62d086fa8ed263ab_prof);

        
        $__internal_cffc1d964e7044e390c8b53fa7eb3f8315d7b0a7551ee06225a629e796fba1b3->leave($__internal_cffc1d964e7044e390c8b53fa7eb3f8315d7b0a7551ee06225a629e796fba1b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44bb8bceac4b6eb049ef4c6b2d419b194a75dd2a6170344c88ad1d67f64bab70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bb8bceac4b6eb049ef4c6b2d419b194a75dd2a6170344c88ad1d67f64bab70->enter($__internal_44bb8bceac4b6eb049ef4c6b2d419b194a75dd2a6170344c88ad1d67f64bab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35018292783f3b7b200e02c0b82a42009e6c476acfc042f8db9dcd31567bb84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35018292783f3b7b200e02c0b82a42009e6c476acfc042f8db9dcd31567bb84d->enter($__internal_35018292783f3b7b200e02c0b82a42009e6c476acfc042f8db9dcd31567bb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_35018292783f3b7b200e02c0b82a42009e6c476acfc042f8db9dcd31567bb84d->leave($__internal_35018292783f3b7b200e02c0b82a42009e6c476acfc042f8db9dcd31567bb84d_prof);

        
        $__internal_44bb8bceac4b6eb049ef4c6b2d419b194a75dd2a6170344c88ad1d67f64bab70->leave($__internal_44bb8bceac4b6eb049ef4c6b2d419b194a75dd2a6170344c88ad1d67f64bab70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
