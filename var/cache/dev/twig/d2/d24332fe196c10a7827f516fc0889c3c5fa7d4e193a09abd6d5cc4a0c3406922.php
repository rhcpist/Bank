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
        $__internal_bcef8fdf8a690e0bfe9801746b59cd3a58b30f380c75420bd4586b7d94f4d6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcef8fdf8a690e0bfe9801746b59cd3a58b30f380c75420bd4586b7d94f4d6e2->enter($__internal_bcef8fdf8a690e0bfe9801746b59cd3a58b30f380c75420bd4586b7d94f4d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_537f6f1a80c923462db9ae1559b5d71efc3f53cee8a627bd801867b50abf56cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537f6f1a80c923462db9ae1559b5d71efc3f53cee8a627bd801867b50abf56cf->enter($__internal_537f6f1a80c923462db9ae1559b5d71efc3f53cee8a627bd801867b50abf56cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcef8fdf8a690e0bfe9801746b59cd3a58b30f380c75420bd4586b7d94f4d6e2->leave($__internal_bcef8fdf8a690e0bfe9801746b59cd3a58b30f380c75420bd4586b7d94f4d6e2_prof);

        
        $__internal_537f6f1a80c923462db9ae1559b5d71efc3f53cee8a627bd801867b50abf56cf->leave($__internal_537f6f1a80c923462db9ae1559b5d71efc3f53cee8a627bd801867b50abf56cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32435aa996cceef9718c99db4e496bd4d56bc339c5f8c84c45a594c91d8449ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32435aa996cceef9718c99db4e496bd4d56bc339c5f8c84c45a594c91d8449ae->enter($__internal_32435aa996cceef9718c99db4e496bd4d56bc339c5f8c84c45a594c91d8449ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f784dced2ef4fd736de8e6903f607a297be1ab0d2957c2114c1cf2fdc4bf473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f784dced2ef4fd736de8e6903f607a297be1ab0d2957c2114c1cf2fdc4bf473a->enter($__internal_f784dced2ef4fd736de8e6903f607a297be1ab0d2957c2114c1cf2fdc4bf473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f784dced2ef4fd736de8e6903f607a297be1ab0d2957c2114c1cf2fdc4bf473a->leave($__internal_f784dced2ef4fd736de8e6903f607a297be1ab0d2957c2114c1cf2fdc4bf473a_prof);

        
        $__internal_32435aa996cceef9718c99db4e496bd4d56bc339c5f8c84c45a594c91d8449ae->leave($__internal_32435aa996cceef9718c99db4e496bd4d56bc339c5f8c84c45a594c91d8449ae_prof);

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
