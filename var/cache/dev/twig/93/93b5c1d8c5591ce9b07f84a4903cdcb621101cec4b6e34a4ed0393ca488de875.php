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
        $__internal_0f9df9a9e31de616ccb2371f9fb28b7c8a13f6be048961cbf89a2cbbad1289ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9df9a9e31de616ccb2371f9fb28b7c8a13f6be048961cbf89a2cbbad1289ea->enter($__internal_0f9df9a9e31de616ccb2371f9fb28b7c8a13f6be048961cbf89a2cbbad1289ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e7b557f71628bed82aab440b17b591a451603839c203b968ceb27c3e63cc0d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b557f71628bed82aab440b17b591a451603839c203b968ceb27c3e63cc0d6f->enter($__internal_e7b557f71628bed82aab440b17b591a451603839c203b968ceb27c3e63cc0d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9df9a9e31de616ccb2371f9fb28b7c8a13f6be048961cbf89a2cbbad1289ea->leave($__internal_0f9df9a9e31de616ccb2371f9fb28b7c8a13f6be048961cbf89a2cbbad1289ea_prof);

        
        $__internal_e7b557f71628bed82aab440b17b591a451603839c203b968ceb27c3e63cc0d6f->leave($__internal_e7b557f71628bed82aab440b17b591a451603839c203b968ceb27c3e63cc0d6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_802693b734c79e1c99d2609ff7a925fe25a58a4ee56a79dd66c0b9a2e909601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802693b734c79e1c99d2609ff7a925fe25a58a4ee56a79dd66c0b9a2e909601e->enter($__internal_802693b734c79e1c99d2609ff7a925fe25a58a4ee56a79dd66c0b9a2e909601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b3f7db0de6e24b317f6c17764c70661923bf8cf88de73569c9dc7cada4b1765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3f7db0de6e24b317f6c17764c70661923bf8cf88de73569c9dc7cada4b1765->enter($__internal_0b3f7db0de6e24b317f6c17764c70661923bf8cf88de73569c9dc7cada4b1765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0b3f7db0de6e24b317f6c17764c70661923bf8cf88de73569c9dc7cada4b1765->leave($__internal_0b3f7db0de6e24b317f6c17764c70661923bf8cf88de73569c9dc7cada4b1765_prof);

        
        $__internal_802693b734c79e1c99d2609ff7a925fe25a58a4ee56a79dd66c0b9a2e909601e->leave($__internal_802693b734c79e1c99d2609ff7a925fe25a58a4ee56a79dd66c0b9a2e909601e_prof);

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
