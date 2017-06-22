<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_07cefad9c8777c154eb58d300795ce928d85f904e6d98fcbf7fddb4789ae8586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8d47d988cbcc261e83ec0439144b4a9ea3dbfa05fc3c830672a7698e6c7745b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d47d988cbcc261e83ec0439144b4a9ea3dbfa05fc3c830672a7698e6c7745b5->enter($__internal_8d47d988cbcc261e83ec0439144b4a9ea3dbfa05fc3c830672a7698e6c7745b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b3a9a34006e183b2075ada20808f1a8ad3e73d138d031fe69e21e529d7a0786d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a9a34006e183b2075ada20808f1a8ad3e73d138d031fe69e21e529d7a0786d->enter($__internal_b3a9a34006e183b2075ada20808f1a8ad3e73d138d031fe69e21e529d7a0786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d47d988cbcc261e83ec0439144b4a9ea3dbfa05fc3c830672a7698e6c7745b5->leave($__internal_8d47d988cbcc261e83ec0439144b4a9ea3dbfa05fc3c830672a7698e6c7745b5_prof);

        
        $__internal_b3a9a34006e183b2075ada20808f1a8ad3e73d138d031fe69e21e529d7a0786d->leave($__internal_b3a9a34006e183b2075ada20808f1a8ad3e73d138d031fe69e21e529d7a0786d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38ab5f3370da4ab533b2a824898fd89f0492379b7a466003c3f2725ed2c680d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ab5f3370da4ab533b2a824898fd89f0492379b7a466003c3f2725ed2c680d4->enter($__internal_38ab5f3370da4ab533b2a824898fd89f0492379b7a466003c3f2725ed2c680d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0cef85313e9f1b924c0cb95727c3cc930677e107f402fc9d5c46efa036e73e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cef85313e9f1b924c0cb95727c3cc930677e107f402fc9d5c46efa036e73e7->enter($__internal_f0cef85313e9f1b924c0cb95727c3cc930677e107f402fc9d5c46efa036e73e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f0cef85313e9f1b924c0cb95727c3cc930677e107f402fc9d5c46efa036e73e7->leave($__internal_f0cef85313e9f1b924c0cb95727c3cc930677e107f402fc9d5c46efa036e73e7_prof);

        
        $__internal_38ab5f3370da4ab533b2a824898fd89f0492379b7a466003c3f2725ed2c680d4->leave($__internal_38ab5f3370da4ab533b2a824898fd89f0492379b7a466003c3f2725ed2c680d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
