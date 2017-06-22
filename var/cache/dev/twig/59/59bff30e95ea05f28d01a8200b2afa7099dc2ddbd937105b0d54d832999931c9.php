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
        $__internal_23ef508331fd41bcb392662417150d64e6c0c4af8fbf7fe7a0044d0037294970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ef508331fd41bcb392662417150d64e6c0c4af8fbf7fe7a0044d0037294970->enter($__internal_23ef508331fd41bcb392662417150d64e6c0c4af8fbf7fe7a0044d0037294970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4ff142482daeb62dca4ee301109928e2ed2dd248c805148a2eb79caff249df52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff142482daeb62dca4ee301109928e2ed2dd248c805148a2eb79caff249df52->enter($__internal_4ff142482daeb62dca4ee301109928e2ed2dd248c805148a2eb79caff249df52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ef508331fd41bcb392662417150d64e6c0c4af8fbf7fe7a0044d0037294970->leave($__internal_23ef508331fd41bcb392662417150d64e6c0c4af8fbf7fe7a0044d0037294970_prof);

        
        $__internal_4ff142482daeb62dca4ee301109928e2ed2dd248c805148a2eb79caff249df52->leave($__internal_4ff142482daeb62dca4ee301109928e2ed2dd248c805148a2eb79caff249df52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fff673b5740258590807b50b8c7fe377228526a9513c0a5c81f9402b835c8c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff673b5740258590807b50b8c7fe377228526a9513c0a5c81f9402b835c8c00->enter($__internal_fff673b5740258590807b50b8c7fe377228526a9513c0a5c81f9402b835c8c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60b8af68a5c4005b224100073561e5f863ffbc1ab0a71d3c9dfbdc79f9086f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b8af68a5c4005b224100073561e5f863ffbc1ab0a71d3c9dfbdc79f9086f8d->enter($__internal_60b8af68a5c4005b224100073561e5f863ffbc1ab0a71d3c9dfbdc79f9086f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_60b8af68a5c4005b224100073561e5f863ffbc1ab0a71d3c9dfbdc79f9086f8d->leave($__internal_60b8af68a5c4005b224100073561e5f863ffbc1ab0a71d3c9dfbdc79f9086f8d_prof);

        
        $__internal_fff673b5740258590807b50b8c7fe377228526a9513c0a5c81f9402b835c8c00->leave($__internal_fff673b5740258590807b50b8c7fe377228526a9513c0a5c81f9402b835c8c00_prof);

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
