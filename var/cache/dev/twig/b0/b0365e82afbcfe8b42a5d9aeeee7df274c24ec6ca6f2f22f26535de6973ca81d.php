<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f95fde7fc24ead1f369b58737aa7017ca99beb05227c03ffe0836b823c0a1819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8e4a4888e7e992a758bdd8768c293a52505a913634fdc79677ca033093d34d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4a4888e7e992a758bdd8768c293a52505a913634fdc79677ca033093d34d4e->enter($__internal_8e4a4888e7e992a758bdd8768c293a52505a913634fdc79677ca033093d34d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_86551a04a099155a040b4c7f0a8dc8bc4eb37932e8263aca87df066471601ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86551a04a099155a040b4c7f0a8dc8bc4eb37932e8263aca87df066471601ac7->enter($__internal_86551a04a099155a040b4c7f0a8dc8bc4eb37932e8263aca87df066471601ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4a4888e7e992a758bdd8768c293a52505a913634fdc79677ca033093d34d4e->leave($__internal_8e4a4888e7e992a758bdd8768c293a52505a913634fdc79677ca033093d34d4e_prof);

        
        $__internal_86551a04a099155a040b4c7f0a8dc8bc4eb37932e8263aca87df066471601ac7->leave($__internal_86551a04a099155a040b4c7f0a8dc8bc4eb37932e8263aca87df066471601ac7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61b11ccb8c71d6c1ad95c3294368606c831ecb97a16aafafb9ed79e14c0dbc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b11ccb8c71d6c1ad95c3294368606c831ecb97a16aafafb9ed79e14c0dbc3f->enter($__internal_61b11ccb8c71d6c1ad95c3294368606c831ecb97a16aafafb9ed79e14c0dbc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13302c12a6a7e210fa90f31e1f6f3be4cd9e7dcb0a2f38b4ffbaaf08d16b2c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13302c12a6a7e210fa90f31e1f6f3be4cd9e7dcb0a2f38b4ffbaaf08d16b2c2c->enter($__internal_13302c12a6a7e210fa90f31e1f6f3be4cd9e7dcb0a2f38b4ffbaaf08d16b2c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_13302c12a6a7e210fa90f31e1f6f3be4cd9e7dcb0a2f38b4ffbaaf08d16b2c2c->leave($__internal_13302c12a6a7e210fa90f31e1f6f3be4cd9e7dcb0a2f38b4ffbaaf08d16b2c2c_prof);

        
        $__internal_61b11ccb8c71d6c1ad95c3294368606c831ecb97a16aafafb9ed79e14c0dbc3f->leave($__internal_61b11ccb8c71d6c1ad95c3294368606c831ecb97a16aafafb9ed79e14c0dbc3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
