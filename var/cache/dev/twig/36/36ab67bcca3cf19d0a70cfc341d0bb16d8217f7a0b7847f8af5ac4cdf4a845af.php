<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_07cefad9c8777c154eb58d300795ce928d85f904e6d98fcbf7fddb4789ae8586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_27698d7bfd4ab3b0c27da1694b27e666cd7f3ffb7c947359761eb7d2f79a86c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27698d7bfd4ab3b0c27da1694b27e666cd7f3ffb7c947359761eb7d2f79a86c4->enter($__internal_27698d7bfd4ab3b0c27da1694b27e666cd7f3ffb7c947359761eb7d2f79a86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f7fab5abbbded4f3a0307da1b01ca575394634d5c86469241b91e89321dd08eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fab5abbbded4f3a0307da1b01ca575394634d5c86469241b91e89321dd08eb->enter($__internal_f7fab5abbbded4f3a0307da1b01ca575394634d5c86469241b91e89321dd08eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27698d7bfd4ab3b0c27da1694b27e666cd7f3ffb7c947359761eb7d2f79a86c4->leave($__internal_27698d7bfd4ab3b0c27da1694b27e666cd7f3ffb7c947359761eb7d2f79a86c4_prof);

        
        $__internal_f7fab5abbbded4f3a0307da1b01ca575394634d5c86469241b91e89321dd08eb->leave($__internal_f7fab5abbbded4f3a0307da1b01ca575394634d5c86469241b91e89321dd08eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2b04bfeb152731cf2d6a146fe23d1dece88d9f89e3a2a9183af556ad52643a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b04bfeb152731cf2d6a146fe23d1dece88d9f89e3a2a9183af556ad52643a5->enter($__internal_a2b04bfeb152731cf2d6a146fe23d1dece88d9f89e3a2a9183af556ad52643a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59b25608374b3ed08e6f66c3f09adb8b5d8cdcccb3f975074f5453c0f30c368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b25608374b3ed08e6f66c3f09adb8b5d8cdcccb3f975074f5453c0f30c368b->enter($__internal_59b25608374b3ed08e6f66c3f09adb8b5d8cdcccb3f975074f5453c0f30c368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_59b25608374b3ed08e6f66c3f09adb8b5d8cdcccb3f975074f5453c0f30c368b->leave($__internal_59b25608374b3ed08e6f66c3f09adb8b5d8cdcccb3f975074f5453c0f30c368b_prof);

        
        $__internal_a2b04bfeb152731cf2d6a146fe23d1dece88d9f89e3a2a9183af556ad52643a5->leave($__internal_a2b04bfeb152731cf2d6a146fe23d1dece88d9f89e3a2a9183af556ad52643a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
