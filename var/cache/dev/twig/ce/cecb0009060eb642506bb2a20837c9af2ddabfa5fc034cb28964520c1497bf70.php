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
        $__internal_251a5070597575177f0ad30fc74daa0807275a4f35dba5b46c1706a7732880b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251a5070597575177f0ad30fc74daa0807275a4f35dba5b46c1706a7732880b2->enter($__internal_251a5070597575177f0ad30fc74daa0807275a4f35dba5b46c1706a7732880b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_a4be9cd698b3981072980bb2f087f153daec4a502413d52a7d2fbc7137871135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4be9cd698b3981072980bb2f087f153daec4a502413d52a7d2fbc7137871135->enter($__internal_a4be9cd698b3981072980bb2f087f153daec4a502413d52a7d2fbc7137871135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251a5070597575177f0ad30fc74daa0807275a4f35dba5b46c1706a7732880b2->leave($__internal_251a5070597575177f0ad30fc74daa0807275a4f35dba5b46c1706a7732880b2_prof);

        
        $__internal_a4be9cd698b3981072980bb2f087f153daec4a502413d52a7d2fbc7137871135->leave($__internal_a4be9cd698b3981072980bb2f087f153daec4a502413d52a7d2fbc7137871135_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f4fd7c42a1aef555704ab7073ac7ec43717ed98319cd2a0426af9cd2a85bf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4fd7c42a1aef555704ab7073ac7ec43717ed98319cd2a0426af9cd2a85bf00->enter($__internal_0f4fd7c42a1aef555704ab7073ac7ec43717ed98319cd2a0426af9cd2a85bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_353437d9847f4c25631ee606a01c4e61c8182bb6fd7c465a8ea982724fdc0b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353437d9847f4c25631ee606a01c4e61c8182bb6fd7c465a8ea982724fdc0b83->enter($__internal_353437d9847f4c25631ee606a01c4e61c8182bb6fd7c465a8ea982724fdc0b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_353437d9847f4c25631ee606a01c4e61c8182bb6fd7c465a8ea982724fdc0b83->leave($__internal_353437d9847f4c25631ee606a01c4e61c8182bb6fd7c465a8ea982724fdc0b83_prof);

        
        $__internal_0f4fd7c42a1aef555704ab7073ac7ec43717ed98319cd2a0426af9cd2a85bf00->leave($__internal_0f4fd7c42a1aef555704ab7073ac7ec43717ed98319cd2a0426af9cd2a85bf00_prof);

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
