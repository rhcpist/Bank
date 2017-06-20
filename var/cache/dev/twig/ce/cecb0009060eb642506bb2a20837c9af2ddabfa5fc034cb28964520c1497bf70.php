<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_aa3334ea39ca1541be2c57000d27e380a05d9982efe931ca9dc67e9b9787b2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9eac280b6612cbaebae433393d0a32471769142d2952932966e0aff2b79df0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9eac280b6612cbaebae433393d0a32471769142d2952932966e0aff2b79df0d->enter($__internal_c9eac280b6612cbaebae433393d0a32471769142d2952932966e0aff2b79df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_5f54d11845ccc688727625588eaddaf57f8ae797f947f17d168856a752f40661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f54d11845ccc688727625588eaddaf57f8ae797f947f17d168856a752f40661->enter($__internal_5f54d11845ccc688727625588eaddaf57f8ae797f947f17d168856a752f40661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9eac280b6612cbaebae433393d0a32471769142d2952932966e0aff2b79df0d->leave($__internal_c9eac280b6612cbaebae433393d0a32471769142d2952932966e0aff2b79df0d_prof);

        
        $__internal_5f54d11845ccc688727625588eaddaf57f8ae797f947f17d168856a752f40661->leave($__internal_5f54d11845ccc688727625588eaddaf57f8ae797f947f17d168856a752f40661_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_88e4b19a35d9f98fa7af1a6c104c3b2fdf7e23c7570f59246293b47cc934f34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e4b19a35d9f98fa7af1a6c104c3b2fdf7e23c7570f59246293b47cc934f34a->enter($__internal_88e4b19a35d9f98fa7af1a6c104c3b2fdf7e23c7570f59246293b47cc934f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9e0be4bdcecb05c20ce78cfac4041d4862a6ea49ee49e116a3daf3b48b0fab58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0be4bdcecb05c20ce78cfac4041d4862a6ea49ee49e116a3daf3b48b0fab58->enter($__internal_9e0be4bdcecb05c20ce78cfac4041d4862a6ea49ee49e116a3daf3b48b0fab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_9e0be4bdcecb05c20ce78cfac4041d4862a6ea49ee49e116a3daf3b48b0fab58->leave($__internal_9e0be4bdcecb05c20ce78cfac4041d4862a6ea49ee49e116a3daf3b48b0fab58_prof);

        
        $__internal_88e4b19a35d9f98fa7af1a6c104c3b2fdf7e23c7570f59246293b47cc934f34a->leave($__internal_88e4b19a35d9f98fa7af1a6c104c3b2fdf7e23c7570f59246293b47cc934f34a_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
