<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_567329e5426171255dd4fea8a1095917a90e0fad03f828879e3452b709a89664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_522a8e624109755ee6878daccc67f366bcf4aa27c7c9483718cf23bb4c6fe287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522a8e624109755ee6878daccc67f366bcf4aa27c7c9483718cf23bb4c6fe287->enter($__internal_522a8e624109755ee6878daccc67f366bcf4aa27c7c9483718cf23bb4c6fe287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ac33028e3e29d3569843eb7e70e9fded7858a8acfec001c22d5edc08389aa90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac33028e3e29d3569843eb7e70e9fded7858a8acfec001c22d5edc08389aa90d->enter($__internal_ac33028e3e29d3569843eb7e70e9fded7858a8acfec001c22d5edc08389aa90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522a8e624109755ee6878daccc67f366bcf4aa27c7c9483718cf23bb4c6fe287->leave($__internal_522a8e624109755ee6878daccc67f366bcf4aa27c7c9483718cf23bb4c6fe287_prof);

        
        $__internal_ac33028e3e29d3569843eb7e70e9fded7858a8acfec001c22d5edc08389aa90d->leave($__internal_ac33028e3e29d3569843eb7e70e9fded7858a8acfec001c22d5edc08389aa90d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec45df96dd958b88fba6f7502aaa289b267e001979b4b3c602770ae432cfe2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec45df96dd958b88fba6f7502aaa289b267e001979b4b3c602770ae432cfe2b0->enter($__internal_ec45df96dd958b88fba6f7502aaa289b267e001979b4b3c602770ae432cfe2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c479c0235bca18aeb5b511c061cc9d5a721030f49f02e72ed240570f9d01864e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c479c0235bca18aeb5b511c061cc9d5a721030f49f02e72ed240570f9d01864e->enter($__internal_c479c0235bca18aeb5b511c061cc9d5a721030f49f02e72ed240570f9d01864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c479c0235bca18aeb5b511c061cc9d5a721030f49f02e72ed240570f9d01864e->leave($__internal_c479c0235bca18aeb5b511c061cc9d5a721030f49f02e72ed240570f9d01864e_prof);

        
        $__internal_ec45df96dd958b88fba6f7502aaa289b267e001979b4b3c602770ae432cfe2b0->leave($__internal_ec45df96dd958b88fba6f7502aaa289b267e001979b4b3c602770ae432cfe2b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
