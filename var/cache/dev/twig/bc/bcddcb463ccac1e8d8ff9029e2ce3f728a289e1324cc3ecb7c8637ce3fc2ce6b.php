<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_4c912036898010e31f7467d64981c69669b6bbbed8e6f6655a8fdfbdf3be927e extends Twig_Template
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
        $__internal_74fc66243a4b49f85937e1fa601286f239b6d57bd4e405f8a335961ee867fa64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fc66243a4b49f85937e1fa601286f239b6d57bd4e405f8a335961ee867fa64->enter($__internal_74fc66243a4b49f85937e1fa601286f239b6d57bd4e405f8a335961ee867fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_8e5f5ea7a38899009bbf3abe98cbc53f8418ac1b747083c072b80ad7179f2c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5f5ea7a38899009bbf3abe98cbc53f8418ac1b747083c072b80ad7179f2c0e->enter($__internal_8e5f5ea7a38899009bbf3abe98cbc53f8418ac1b747083c072b80ad7179f2c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fc66243a4b49f85937e1fa601286f239b6d57bd4e405f8a335961ee867fa64->leave($__internal_74fc66243a4b49f85937e1fa601286f239b6d57bd4e405f8a335961ee867fa64_prof);

        
        $__internal_8e5f5ea7a38899009bbf3abe98cbc53f8418ac1b747083c072b80ad7179f2c0e->leave($__internal_8e5f5ea7a38899009bbf3abe98cbc53f8418ac1b747083c072b80ad7179f2c0e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9719f2a40c675849630f477fc809405492fb84f21d7e1bc0b1322c057ff09f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9719f2a40c675849630f477fc809405492fb84f21d7e1bc0b1322c057ff09f43->enter($__internal_9719f2a40c675849630f477fc809405492fb84f21d7e1bc0b1322c057ff09f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a6d38fce71db7a175e60b1944f2c05ceae0aa6e9a5dc1d38bde7379d81dde64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d38fce71db7a175e60b1944f2c05ceae0aa6e9a5dc1d38bde7379d81dde64c->enter($__internal_a6d38fce71db7a175e60b1944f2c05ceae0aa6e9a5dc1d38bde7379d81dde64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a6d38fce71db7a175e60b1944f2c05ceae0aa6e9a5dc1d38bde7379d81dde64c->leave($__internal_a6d38fce71db7a175e60b1944f2c05ceae0aa6e9a5dc1d38bde7379d81dde64c_prof);

        
        $__internal_9719f2a40c675849630f477fc809405492fb84f21d7e1bc0b1322c057ff09f43->leave($__internal_9719f2a40c675849630f477fc809405492fb84f21d7e1bc0b1322c057ff09f43_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
