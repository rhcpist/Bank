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
        $__internal_337f5c08b765bff08299a7342f5204444df4e3d9848f4273ba9a84401b013ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337f5c08b765bff08299a7342f5204444df4e3d9848f4273ba9a84401b013ab1->enter($__internal_337f5c08b765bff08299a7342f5204444df4e3d9848f4273ba9a84401b013ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a4ecefd24e4519a3f33632dc76fbfa57f6487ce471863b80495474eecb57b07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ecefd24e4519a3f33632dc76fbfa57f6487ce471863b80495474eecb57b07a->enter($__internal_a4ecefd24e4519a3f33632dc76fbfa57f6487ce471863b80495474eecb57b07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337f5c08b765bff08299a7342f5204444df4e3d9848f4273ba9a84401b013ab1->leave($__internal_337f5c08b765bff08299a7342f5204444df4e3d9848f4273ba9a84401b013ab1_prof);

        
        $__internal_a4ecefd24e4519a3f33632dc76fbfa57f6487ce471863b80495474eecb57b07a->leave($__internal_a4ecefd24e4519a3f33632dc76fbfa57f6487ce471863b80495474eecb57b07a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a58779333f812931a08d0a1be2adfc830ddcd900203b54480bfdf285915ae3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a58779333f812931a08d0a1be2adfc830ddcd900203b54480bfdf285915ae3e->enter($__internal_2a58779333f812931a08d0a1be2adfc830ddcd900203b54480bfdf285915ae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e04964a7fa3b6dd3dac6fc619ae0701e84fb69d1c4ac519c7bf4d7d6f9a2b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e04964a7fa3b6dd3dac6fc619ae0701e84fb69d1c4ac519c7bf4d7d6f9a2b45->enter($__internal_8e04964a7fa3b6dd3dac6fc619ae0701e84fb69d1c4ac519c7bf4d7d6f9a2b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8e04964a7fa3b6dd3dac6fc619ae0701e84fb69d1c4ac519c7bf4d7d6f9a2b45->leave($__internal_8e04964a7fa3b6dd3dac6fc619ae0701e84fb69d1c4ac519c7bf4d7d6f9a2b45_prof);

        
        $__internal_2a58779333f812931a08d0a1be2adfc830ddcd900203b54480bfdf285915ae3e->leave($__internal_2a58779333f812931a08d0a1be2adfc830ddcd900203b54480bfdf285915ae3e_prof);

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
