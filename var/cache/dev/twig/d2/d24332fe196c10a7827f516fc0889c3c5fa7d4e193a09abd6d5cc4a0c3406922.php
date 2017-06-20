<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5918dc8c36ae954b73c9a1cdc7bf2b3f7a0bb3152aee65a7ccf40638e06beed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1d53b42f8b1f0da733d8aa4dd26a30c111dfc0b08ff07bc656256eac16c74f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d53b42f8b1f0da733d8aa4dd26a30c111dfc0b08ff07bc656256eac16c74f27->enter($__internal_1d53b42f8b1f0da733d8aa4dd26a30c111dfc0b08ff07bc656256eac16c74f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5233e5e6a0144d932b8233817e164e80980810463c707a07a850a021a2320ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5233e5e6a0144d932b8233817e164e80980810463c707a07a850a021a2320ea4->enter($__internal_5233e5e6a0144d932b8233817e164e80980810463c707a07a850a021a2320ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d53b42f8b1f0da733d8aa4dd26a30c111dfc0b08ff07bc656256eac16c74f27->leave($__internal_1d53b42f8b1f0da733d8aa4dd26a30c111dfc0b08ff07bc656256eac16c74f27_prof);

        
        $__internal_5233e5e6a0144d932b8233817e164e80980810463c707a07a850a021a2320ea4->leave($__internal_5233e5e6a0144d932b8233817e164e80980810463c707a07a850a021a2320ea4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb37c64ad813bbc3ff86334c2a670b737cab507044f204ef98dd599e49e38a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb37c64ad813bbc3ff86334c2a670b737cab507044f204ef98dd599e49e38a10->enter($__internal_fb37c64ad813bbc3ff86334c2a670b737cab507044f204ef98dd599e49e38a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fd98f8c23bab100fe752f9f3c080ac1747c01d16ed889f5398a7f3609d8dc190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd98f8c23bab100fe752f9f3c080ac1747c01d16ed889f5398a7f3609d8dc190->enter($__internal_fd98f8c23bab100fe752f9f3c080ac1747c01d16ed889f5398a7f3609d8dc190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fd98f8c23bab100fe752f9f3c080ac1747c01d16ed889f5398a7f3609d8dc190->leave($__internal_fd98f8c23bab100fe752f9f3c080ac1747c01d16ed889f5398a7f3609d8dc190_prof);

        
        $__internal_fb37c64ad813bbc3ff86334c2a670b737cab507044f204ef98dd599e49e38a10->leave($__internal_fb37c64ad813bbc3ff86334c2a670b737cab507044f204ef98dd599e49e38a10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
