<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c4742f508b70a82640af77738255ca3bc001f7dbccd741d7b4613d3fedfb39ea extends Twig_Template
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
        $__internal_f7fcf9639725ed580e2988c1cacd5f5eb8130994079761fc63a4ece7056cbb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fcf9639725ed580e2988c1cacd5f5eb8130994079761fc63a4ece7056cbb75->enter($__internal_f7fcf9639725ed580e2988c1cacd5f5eb8130994079761fc63a4ece7056cbb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f9e969f7edf0428e875e2d4d99dc0eb8e103670a67f5faddf6c3249bd0cef180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e969f7edf0428e875e2d4d99dc0eb8e103670a67f5faddf6c3249bd0cef180->enter($__internal_f9e969f7edf0428e875e2d4d99dc0eb8e103670a67f5faddf6c3249bd0cef180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fcf9639725ed580e2988c1cacd5f5eb8130994079761fc63a4ece7056cbb75->leave($__internal_f7fcf9639725ed580e2988c1cacd5f5eb8130994079761fc63a4ece7056cbb75_prof);

        
        $__internal_f9e969f7edf0428e875e2d4d99dc0eb8e103670a67f5faddf6c3249bd0cef180->leave($__internal_f9e969f7edf0428e875e2d4d99dc0eb8e103670a67f5faddf6c3249bd0cef180_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb6f53769f95d7355d8fff47ab61fed6f8d715ead950611ffadb437452d8b9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6f53769f95d7355d8fff47ab61fed6f8d715ead950611ffadb437452d8b9d3->enter($__internal_cb6f53769f95d7355d8fff47ab61fed6f8d715ead950611ffadb437452d8b9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48629dd23f0e2678ac6c4d66497b37ad5b4098af633e4c10fb26ff5515a05113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48629dd23f0e2678ac6c4d66497b37ad5b4098af633e4c10fb26ff5515a05113->enter($__internal_48629dd23f0e2678ac6c4d66497b37ad5b4098af633e4c10fb26ff5515a05113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_48629dd23f0e2678ac6c4d66497b37ad5b4098af633e4c10fb26ff5515a05113->leave($__internal_48629dd23f0e2678ac6c4d66497b37ad5b4098af633e4c10fb26ff5515a05113_prof);

        
        $__internal_cb6f53769f95d7355d8fff47ab61fed6f8d715ead950611ffadb437452d8b9d3->leave($__internal_cb6f53769f95d7355d8fff47ab61fed6f8d715ead950611ffadb437452d8b9d3_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
