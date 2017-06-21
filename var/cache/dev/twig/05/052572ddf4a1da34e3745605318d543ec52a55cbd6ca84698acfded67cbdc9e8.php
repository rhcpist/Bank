<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d542df71440f12a097d90b75c9bb54ff6ab1b246631df7798838c875ccb68b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5cce79b2d0ec4989735f6dc4b40e0be2c275821df010f3475182981c78f023dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cce79b2d0ec4989735f6dc4b40e0be2c275821df010f3475182981c78f023dc->enter($__internal_5cce79b2d0ec4989735f6dc4b40e0be2c275821df010f3475182981c78f023dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d5cda0ff5134ff1d2ce7d0ef3ed7b422ce24f8f37cf811a6a539e937495f55ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cda0ff5134ff1d2ce7d0ef3ed7b422ce24f8f37cf811a6a539e937495f55ad->enter($__internal_d5cda0ff5134ff1d2ce7d0ef3ed7b422ce24f8f37cf811a6a539e937495f55ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cce79b2d0ec4989735f6dc4b40e0be2c275821df010f3475182981c78f023dc->leave($__internal_5cce79b2d0ec4989735f6dc4b40e0be2c275821df010f3475182981c78f023dc_prof);

        
        $__internal_d5cda0ff5134ff1d2ce7d0ef3ed7b422ce24f8f37cf811a6a539e937495f55ad->leave($__internal_d5cda0ff5134ff1d2ce7d0ef3ed7b422ce24f8f37cf811a6a539e937495f55ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f957a5b9c28b7836b503953922392cec65f9c46905379cec3e02f9694ef0aa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f957a5b9c28b7836b503953922392cec65f9c46905379cec3e02f9694ef0aa44->enter($__internal_f957a5b9c28b7836b503953922392cec65f9c46905379cec3e02f9694ef0aa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_825f82fc2836648b598f7f5c4e35f75e1fbe5dae3f464fec90d6f00443d1d793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825f82fc2836648b598f7f5c4e35f75e1fbe5dae3f464fec90d6f00443d1d793->enter($__internal_825f82fc2836648b598f7f5c4e35f75e1fbe5dae3f464fec90d6f00443d1d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_825f82fc2836648b598f7f5c4e35f75e1fbe5dae3f464fec90d6f00443d1d793->leave($__internal_825f82fc2836648b598f7f5c4e35f75e1fbe5dae3f464fec90d6f00443d1d793_prof);

        
        $__internal_f957a5b9c28b7836b503953922392cec65f9c46905379cec3e02f9694ef0aa44->leave($__internal_f957a5b9c28b7836b503953922392cec65f9c46905379cec3e02f9694ef0aa44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
