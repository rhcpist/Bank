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
        $__internal_6d50e947a8a6da547bf2f6594700bc0740bf90c09625e99474f4cb1e56944f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d50e947a8a6da547bf2f6594700bc0740bf90c09625e99474f4cb1e56944f1d->enter($__internal_6d50e947a8a6da547bf2f6594700bc0740bf90c09625e99474f4cb1e56944f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_47604e76c467f7b9704741ff3ca0eb38269e88919ec12f55c57da8eef43c04fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47604e76c467f7b9704741ff3ca0eb38269e88919ec12f55c57da8eef43c04fa->enter($__internal_47604e76c467f7b9704741ff3ca0eb38269e88919ec12f55c57da8eef43c04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d50e947a8a6da547bf2f6594700bc0740bf90c09625e99474f4cb1e56944f1d->leave($__internal_6d50e947a8a6da547bf2f6594700bc0740bf90c09625e99474f4cb1e56944f1d_prof);

        
        $__internal_47604e76c467f7b9704741ff3ca0eb38269e88919ec12f55c57da8eef43c04fa->leave($__internal_47604e76c467f7b9704741ff3ca0eb38269e88919ec12f55c57da8eef43c04fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f943a818d442afb238622a9a9832201a69a6e546c9b4f3d26727823b170eac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f943a818d442afb238622a9a9832201a69a6e546c9b4f3d26727823b170eac8->enter($__internal_0f943a818d442afb238622a9a9832201a69a6e546c9b4f3d26727823b170eac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_958c55ccad1f12bc85ca3d0427a47f4aaf39f686da044fd0e244b3b6690c2e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958c55ccad1f12bc85ca3d0427a47f4aaf39f686da044fd0e244b3b6690c2e66->enter($__internal_958c55ccad1f12bc85ca3d0427a47f4aaf39f686da044fd0e244b3b6690c2e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_958c55ccad1f12bc85ca3d0427a47f4aaf39f686da044fd0e244b3b6690c2e66->leave($__internal_958c55ccad1f12bc85ca3d0427a47f4aaf39f686da044fd0e244b3b6690c2e66_prof);

        
        $__internal_0f943a818d442afb238622a9a9832201a69a6e546c9b4f3d26727823b170eac8->leave($__internal_0f943a818d442afb238622a9a9832201a69a6e546c9b4f3d26727823b170eac8_prof);

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
