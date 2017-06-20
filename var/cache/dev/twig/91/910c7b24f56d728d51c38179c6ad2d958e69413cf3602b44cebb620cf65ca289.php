<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_23a572525e34402b822458be78b44f7c7a4c5e635ccaf32258fab23658098e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_48c76cf8780d7a4f91a43edb53bdd3810ad4c1461e003c51ade508691ce08e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c76cf8780d7a4f91a43edb53bdd3810ad4c1461e003c51ade508691ce08e40->enter($__internal_48c76cf8780d7a4f91a43edb53bdd3810ad4c1461e003c51ade508691ce08e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_dbe1cf7efe4d478a87649a79296b4aea903351326f4582bbe5353d540ae37550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe1cf7efe4d478a87649a79296b4aea903351326f4582bbe5353d540ae37550->enter($__internal_dbe1cf7efe4d478a87649a79296b4aea903351326f4582bbe5353d540ae37550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c76cf8780d7a4f91a43edb53bdd3810ad4c1461e003c51ade508691ce08e40->leave($__internal_48c76cf8780d7a4f91a43edb53bdd3810ad4c1461e003c51ade508691ce08e40_prof);

        
        $__internal_dbe1cf7efe4d478a87649a79296b4aea903351326f4582bbe5353d540ae37550->leave($__internal_dbe1cf7efe4d478a87649a79296b4aea903351326f4582bbe5353d540ae37550_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ee97b01c71634a2a1263df4e3229e2fa3e555b6dc2d1e90fabe38a04ec34731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee97b01c71634a2a1263df4e3229e2fa3e555b6dc2d1e90fabe38a04ec34731->enter($__internal_1ee97b01c71634a2a1263df4e3229e2fa3e555b6dc2d1e90fabe38a04ec34731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_975b03f5ed6f487e723ba489925474883e986f4f7f318fa482a05ef05c1f24f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975b03f5ed6f487e723ba489925474883e986f4f7f318fa482a05ef05c1f24f1->enter($__internal_975b03f5ed6f487e723ba489925474883e986f4f7f318fa482a05ef05c1f24f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_975b03f5ed6f487e723ba489925474883e986f4f7f318fa482a05ef05c1f24f1->leave($__internal_975b03f5ed6f487e723ba489925474883e986f4f7f318fa482a05ef05c1f24f1_prof);

        
        $__internal_1ee97b01c71634a2a1263df4e3229e2fa3e555b6dc2d1e90fabe38a04ec34731->leave($__internal_1ee97b01c71634a2a1263df4e3229e2fa3e555b6dc2d1e90fabe38a04ec34731_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
