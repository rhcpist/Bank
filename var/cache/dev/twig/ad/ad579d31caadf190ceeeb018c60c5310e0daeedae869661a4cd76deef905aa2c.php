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
        $__internal_3e13d31f89832db3b8fdfa171159c8f7956c0818e1d8eb6f10676193cf905ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e13d31f89832db3b8fdfa171159c8f7956c0818e1d8eb6f10676193cf905ac2->enter($__internal_3e13d31f89832db3b8fdfa171159c8f7956c0818e1d8eb6f10676193cf905ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_41cda6db77a7f2267026fb798e07fa65a95eec0d8c6fd37df454816cafa4f22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cda6db77a7f2267026fb798e07fa65a95eec0d8c6fd37df454816cafa4f22a->enter($__internal_41cda6db77a7f2267026fb798e07fa65a95eec0d8c6fd37df454816cafa4f22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e13d31f89832db3b8fdfa171159c8f7956c0818e1d8eb6f10676193cf905ac2->leave($__internal_3e13d31f89832db3b8fdfa171159c8f7956c0818e1d8eb6f10676193cf905ac2_prof);

        
        $__internal_41cda6db77a7f2267026fb798e07fa65a95eec0d8c6fd37df454816cafa4f22a->leave($__internal_41cda6db77a7f2267026fb798e07fa65a95eec0d8c6fd37df454816cafa4f22a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cc9cbfa48387eca45d71d146042f858ed399f8520891c56ddd957cc06c8c2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc9cbfa48387eca45d71d146042f858ed399f8520891c56ddd957cc06c8c2a2->enter($__internal_5cc9cbfa48387eca45d71d146042f858ed399f8520891c56ddd957cc06c8c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75f0ade559e505228183db701b78430c267de1b1a195b97c97f9255e0bd44091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f0ade559e505228183db701b78430c267de1b1a195b97c97f9255e0bd44091->enter($__internal_75f0ade559e505228183db701b78430c267de1b1a195b97c97f9255e0bd44091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_75f0ade559e505228183db701b78430c267de1b1a195b97c97f9255e0bd44091->leave($__internal_75f0ade559e505228183db701b78430c267de1b1a195b97c97f9255e0bd44091_prof);

        
        $__internal_5cc9cbfa48387eca45d71d146042f858ed399f8520891c56ddd957cc06c8c2a2->leave($__internal_5cc9cbfa48387eca45d71d146042f858ed399f8520891c56ddd957cc06c8c2a2_prof);

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
