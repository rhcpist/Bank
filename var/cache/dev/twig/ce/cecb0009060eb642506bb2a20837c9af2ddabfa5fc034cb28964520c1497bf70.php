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
        $__internal_2eabbeca3acca3013040ac7bcc9631d5efdcf21d1b9738b99b74cfa178eaf120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eabbeca3acca3013040ac7bcc9631d5efdcf21d1b9738b99b74cfa178eaf120->enter($__internal_2eabbeca3acca3013040ac7bcc9631d5efdcf21d1b9738b99b74cfa178eaf120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_ea3703a5588cfe4481ec410a949a0b971ff68969f4504053254fced09086f21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3703a5588cfe4481ec410a949a0b971ff68969f4504053254fced09086f21a->enter($__internal_ea3703a5588cfe4481ec410a949a0b971ff68969f4504053254fced09086f21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eabbeca3acca3013040ac7bcc9631d5efdcf21d1b9738b99b74cfa178eaf120->leave($__internal_2eabbeca3acca3013040ac7bcc9631d5efdcf21d1b9738b99b74cfa178eaf120_prof);

        
        $__internal_ea3703a5588cfe4481ec410a949a0b971ff68969f4504053254fced09086f21a->leave($__internal_ea3703a5588cfe4481ec410a949a0b971ff68969f4504053254fced09086f21a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d78b43bb39ecd4defd8580902a9a04a198d75548f9cdda760dc2298aa61c1c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78b43bb39ecd4defd8580902a9a04a198d75548f9cdda760dc2298aa61c1c13->enter($__internal_d78b43bb39ecd4defd8580902a9a04a198d75548f9cdda760dc2298aa61c1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6bb72dcd86b88ed82250aa6d76222b1219dd94aa91ebfb9bfd6275cd2c91069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bb72dcd86b88ed82250aa6d76222b1219dd94aa91ebfb9bfd6275cd2c91069->enter($__internal_e6bb72dcd86b88ed82250aa6d76222b1219dd94aa91ebfb9bfd6275cd2c91069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e6bb72dcd86b88ed82250aa6d76222b1219dd94aa91ebfb9bfd6275cd2c91069->leave($__internal_e6bb72dcd86b88ed82250aa6d76222b1219dd94aa91ebfb9bfd6275cd2c91069_prof);

        
        $__internal_d78b43bb39ecd4defd8580902a9a04a198d75548f9cdda760dc2298aa61c1c13->leave($__internal_d78b43bb39ecd4defd8580902a9a04a198d75548f9cdda760dc2298aa61c1c13_prof);

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
