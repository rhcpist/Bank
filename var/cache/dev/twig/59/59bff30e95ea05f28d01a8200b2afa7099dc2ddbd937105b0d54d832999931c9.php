<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_17b85ea572dda0118d98cdf3f24e02b23898a02e846ffa472dd161b067a7a48e extends Twig_Template
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
        $__internal_4a48f698644ede1e426c2d583901b56f924e50230ee4188ee8712310ad205ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a48f698644ede1e426c2d583901b56f924e50230ee4188ee8712310ad205ae7->enter($__internal_4a48f698644ede1e426c2d583901b56f924e50230ee4188ee8712310ad205ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_852d756f3a1b4a09ea6b14503dba99320ea07f877065eacd7c9f1c7eebb7bca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852d756f3a1b4a09ea6b14503dba99320ea07f877065eacd7c9f1c7eebb7bca4->enter($__internal_852d756f3a1b4a09ea6b14503dba99320ea07f877065eacd7c9f1c7eebb7bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a48f698644ede1e426c2d583901b56f924e50230ee4188ee8712310ad205ae7->leave($__internal_4a48f698644ede1e426c2d583901b56f924e50230ee4188ee8712310ad205ae7_prof);

        
        $__internal_852d756f3a1b4a09ea6b14503dba99320ea07f877065eacd7c9f1c7eebb7bca4->leave($__internal_852d756f3a1b4a09ea6b14503dba99320ea07f877065eacd7c9f1c7eebb7bca4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_468d382c1697cc7fecf8b95519c73d930a4bedd631c557bdc0f5292ce76f4569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468d382c1697cc7fecf8b95519c73d930a4bedd631c557bdc0f5292ce76f4569->enter($__internal_468d382c1697cc7fecf8b95519c73d930a4bedd631c557bdc0f5292ce76f4569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e2570b50bc27dde4cae2722bd6a6855e789d9e24091360585c9cba3c8b378e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2570b50bc27dde4cae2722bd6a6855e789d9e24091360585c9cba3c8b378e4f->enter($__internal_e2570b50bc27dde4cae2722bd6a6855e789d9e24091360585c9cba3c8b378e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e2570b50bc27dde4cae2722bd6a6855e789d9e24091360585c9cba3c8b378e4f->leave($__internal_e2570b50bc27dde4cae2722bd6a6855e789d9e24091360585c9cba3c8b378e4f_prof);

        
        $__internal_468d382c1697cc7fecf8b95519c73d930a4bedd631c557bdc0f5292ce76f4569->leave($__internal_468d382c1697cc7fecf8b95519c73d930a4bedd631c557bdc0f5292ce76f4569_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
