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
        $__internal_627096754606b5f5533a5af9a38745d032ead422a703d458f0c8b80a7f5cd078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627096754606b5f5533a5af9a38745d032ead422a703d458f0c8b80a7f5cd078->enter($__internal_627096754606b5f5533a5af9a38745d032ead422a703d458f0c8b80a7f5cd078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9519ed67a2b470aaa1e3abbb8b6c1f611a2dbbf50cd2554a55256f14e4b6efc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9519ed67a2b470aaa1e3abbb8b6c1f611a2dbbf50cd2554a55256f14e4b6efc2->enter($__internal_9519ed67a2b470aaa1e3abbb8b6c1f611a2dbbf50cd2554a55256f14e4b6efc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627096754606b5f5533a5af9a38745d032ead422a703d458f0c8b80a7f5cd078->leave($__internal_627096754606b5f5533a5af9a38745d032ead422a703d458f0c8b80a7f5cd078_prof);

        
        $__internal_9519ed67a2b470aaa1e3abbb8b6c1f611a2dbbf50cd2554a55256f14e4b6efc2->leave($__internal_9519ed67a2b470aaa1e3abbb8b6c1f611a2dbbf50cd2554a55256f14e4b6efc2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_becd15ebf82603260102b2b04e616330ee59adf435706584c28d0c0737170987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becd15ebf82603260102b2b04e616330ee59adf435706584c28d0c0737170987->enter($__internal_becd15ebf82603260102b2b04e616330ee59adf435706584c28d0c0737170987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f092fb010491124a8e09b3878061685a6fd647c46380a908b3caa5fcba00430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f092fb010491124a8e09b3878061685a6fd647c46380a908b3caa5fcba00430->enter($__internal_1f092fb010491124a8e09b3878061685a6fd647c46380a908b3caa5fcba00430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1f092fb010491124a8e09b3878061685a6fd647c46380a908b3caa5fcba00430->leave($__internal_1f092fb010491124a8e09b3878061685a6fd647c46380a908b3caa5fcba00430_prof);

        
        $__internal_becd15ebf82603260102b2b04e616330ee59adf435706584c28d0c0737170987->leave($__internal_becd15ebf82603260102b2b04e616330ee59adf435706584c28d0c0737170987_prof);

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
