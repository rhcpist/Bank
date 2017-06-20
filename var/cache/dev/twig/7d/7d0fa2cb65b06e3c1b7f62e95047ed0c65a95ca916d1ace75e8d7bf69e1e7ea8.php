<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7ed190ff35acd7ea36d84cbc3d019164a92799372ddd48344a2defa2213f37de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_037ee072cc12b9c37da0be5955b7b71bc4acf10510f6aac2cb248ce507b89470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037ee072cc12b9c37da0be5955b7b71bc4acf10510f6aac2cb248ce507b89470->enter($__internal_037ee072cc12b9c37da0be5955b7b71bc4acf10510f6aac2cb248ce507b89470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_96dd8a1f02df4648d012e15aad41d5c2fd8e9c009d41695aa93684a533b960e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dd8a1f02df4648d012e15aad41d5c2fd8e9c009d41695aa93684a533b960e0->enter($__internal_96dd8a1f02df4648d012e15aad41d5c2fd8e9c009d41695aa93684a533b960e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037ee072cc12b9c37da0be5955b7b71bc4acf10510f6aac2cb248ce507b89470->leave($__internal_037ee072cc12b9c37da0be5955b7b71bc4acf10510f6aac2cb248ce507b89470_prof);

        
        $__internal_96dd8a1f02df4648d012e15aad41d5c2fd8e9c009d41695aa93684a533b960e0->leave($__internal_96dd8a1f02df4648d012e15aad41d5c2fd8e9c009d41695aa93684a533b960e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12b8d4c528ce03729ca71a80a4f82cf65a5930917918c7bc3d7277639bbfcfdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b8d4c528ce03729ca71a80a4f82cf65a5930917918c7bc3d7277639bbfcfdf->enter($__internal_12b8d4c528ce03729ca71a80a4f82cf65a5930917918c7bc3d7277639bbfcfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8789e826058ca788ab6f15525aeb69c3752b0b38e3148e88d3cca61d858ccce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8789e826058ca788ab6f15525aeb69c3752b0b38e3148e88d3cca61d858ccce9->enter($__internal_8789e826058ca788ab6f15525aeb69c3752b0b38e3148e88d3cca61d858ccce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8789e826058ca788ab6f15525aeb69c3752b0b38e3148e88d3cca61d858ccce9->leave($__internal_8789e826058ca788ab6f15525aeb69c3752b0b38e3148e88d3cca61d858ccce9_prof);

        
        $__internal_12b8d4c528ce03729ca71a80a4f82cf65a5930917918c7bc3d7277639bbfcfdf->leave($__internal_12b8d4c528ce03729ca71a80a4f82cf65a5930917918c7bc3d7277639bbfcfdf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
