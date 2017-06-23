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
        $__internal_096baf4ce0522c660846dd6ca809ce7c5b689d02bd4e3bab0db1b489110d740f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096baf4ce0522c660846dd6ca809ce7c5b689d02bd4e3bab0db1b489110d740f->enter($__internal_096baf4ce0522c660846dd6ca809ce7c5b689d02bd4e3bab0db1b489110d740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_41c30bea4eb44fbd659522ddd0c6033ea291469d53a621a85e81f7d86861cad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c30bea4eb44fbd659522ddd0c6033ea291469d53a621a85e81f7d86861cad6->enter($__internal_41c30bea4eb44fbd659522ddd0c6033ea291469d53a621a85e81f7d86861cad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096baf4ce0522c660846dd6ca809ce7c5b689d02bd4e3bab0db1b489110d740f->leave($__internal_096baf4ce0522c660846dd6ca809ce7c5b689d02bd4e3bab0db1b489110d740f_prof);

        
        $__internal_41c30bea4eb44fbd659522ddd0c6033ea291469d53a621a85e81f7d86861cad6->leave($__internal_41c30bea4eb44fbd659522ddd0c6033ea291469d53a621a85e81f7d86861cad6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_090e722770e2565cc1915150442fd205169c9419c8b5848b42e026ff1812f9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090e722770e2565cc1915150442fd205169c9419c8b5848b42e026ff1812f9b2->enter($__internal_090e722770e2565cc1915150442fd205169c9419c8b5848b42e026ff1812f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_155119445c04be64585f67f753f7a8535bee61937d959d3673dd5e34e8e64912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155119445c04be64585f67f753f7a8535bee61937d959d3673dd5e34e8e64912->enter($__internal_155119445c04be64585f67f753f7a8535bee61937d959d3673dd5e34e8e64912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_155119445c04be64585f67f753f7a8535bee61937d959d3673dd5e34e8e64912->leave($__internal_155119445c04be64585f67f753f7a8535bee61937d959d3673dd5e34e8e64912_prof);

        
        $__internal_090e722770e2565cc1915150442fd205169c9419c8b5848b42e026ff1812f9b2->leave($__internal_090e722770e2565cc1915150442fd205169c9419c8b5848b42e026ff1812f9b2_prof);

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
