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
        $__internal_2368216a015e1682f549fa6035b72c6ed6252ce0645db0ca86629317b9cb4afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2368216a015e1682f549fa6035b72c6ed6252ce0645db0ca86629317b9cb4afd->enter($__internal_2368216a015e1682f549fa6035b72c6ed6252ce0645db0ca86629317b9cb4afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_5743c639dce70dc7d1b57a82291aa5ed43ef2ea6d2274904e078067a18fc2033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5743c639dce70dc7d1b57a82291aa5ed43ef2ea6d2274904e078067a18fc2033->enter($__internal_5743c639dce70dc7d1b57a82291aa5ed43ef2ea6d2274904e078067a18fc2033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2368216a015e1682f549fa6035b72c6ed6252ce0645db0ca86629317b9cb4afd->leave($__internal_2368216a015e1682f549fa6035b72c6ed6252ce0645db0ca86629317b9cb4afd_prof);

        
        $__internal_5743c639dce70dc7d1b57a82291aa5ed43ef2ea6d2274904e078067a18fc2033->leave($__internal_5743c639dce70dc7d1b57a82291aa5ed43ef2ea6d2274904e078067a18fc2033_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb8bea2c5c68ead599f57a1e53d1d2b5f0cacca45a9b199ea4fa187a4b355b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8bea2c5c68ead599f57a1e53d1d2b5f0cacca45a9b199ea4fa187a4b355b2a->enter($__internal_cb8bea2c5c68ead599f57a1e53d1d2b5f0cacca45a9b199ea4fa187a4b355b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_530444af7a70653d1130f9520ae2d6da9c7db9dd293eee93a9620c5bf45264c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530444af7a70653d1130f9520ae2d6da9c7db9dd293eee93a9620c5bf45264c5->enter($__internal_530444af7a70653d1130f9520ae2d6da9c7db9dd293eee93a9620c5bf45264c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_530444af7a70653d1130f9520ae2d6da9c7db9dd293eee93a9620c5bf45264c5->leave($__internal_530444af7a70653d1130f9520ae2d6da9c7db9dd293eee93a9620c5bf45264c5_prof);

        
        $__internal_cb8bea2c5c68ead599f57a1e53d1d2b5f0cacca45a9b199ea4fa187a4b355b2a->leave($__internal_cb8bea2c5c68ead599f57a1e53d1d2b5f0cacca45a9b199ea4fa187a4b355b2a_prof);

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
