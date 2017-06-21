<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3fd0284339c33991cb124e31c57275999388799e0e2edf775716aa0764d2e67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_73c9d3ab892d044ca079516b2d1c574c5a909bb38a0fcfac1def1e20961c10a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c9d3ab892d044ca079516b2d1c574c5a909bb38a0fcfac1def1e20961c10a5->enter($__internal_73c9d3ab892d044ca079516b2d1c574c5a909bb38a0fcfac1def1e20961c10a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_c15ba8561000d0fc9b6f66ca08978a28337cfb5483c5e59a3bde5487f8784dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15ba8561000d0fc9b6f66ca08978a28337cfb5483c5e59a3bde5487f8784dc9->enter($__internal_c15ba8561000d0fc9b6f66ca08978a28337cfb5483c5e59a3bde5487f8784dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c9d3ab892d044ca079516b2d1c574c5a909bb38a0fcfac1def1e20961c10a5->leave($__internal_73c9d3ab892d044ca079516b2d1c574c5a909bb38a0fcfac1def1e20961c10a5_prof);

        
        $__internal_c15ba8561000d0fc9b6f66ca08978a28337cfb5483c5e59a3bde5487f8784dc9->leave($__internal_c15ba8561000d0fc9b6f66ca08978a28337cfb5483c5e59a3bde5487f8784dc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dba4ae08af36464513d7b5346b8caa7e2a46eb2cebbbf2244dbb1df34d2b8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dba4ae08af36464513d7b5346b8caa7e2a46eb2cebbbf2244dbb1df34d2b8f1->enter($__internal_5dba4ae08af36464513d7b5346b8caa7e2a46eb2cebbbf2244dbb1df34d2b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b602b3f495b69832be09243aa05adcf8f3887e0ef4485d072a3612fda76e1de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b602b3f495b69832be09243aa05adcf8f3887e0ef4485d072a3612fda76e1de6->enter($__internal_b602b3f495b69832be09243aa05adcf8f3887e0ef4485d072a3612fda76e1de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b602b3f495b69832be09243aa05adcf8f3887e0ef4485d072a3612fda76e1de6->leave($__internal_b602b3f495b69832be09243aa05adcf8f3887e0ef4485d072a3612fda76e1de6_prof);

        
        $__internal_5dba4ae08af36464513d7b5346b8caa7e2a46eb2cebbbf2244dbb1df34d2b8f1->leave($__internal_5dba4ae08af36464513d7b5346b8caa7e2a46eb2cebbbf2244dbb1df34d2b8f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
