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
        $__internal_bf9c9d000f24201c3c1be1b42c58a13f1569305cdaec9eccc542b1e606f2f07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9c9d000f24201c3c1be1b42c58a13f1569305cdaec9eccc542b1e606f2f07b->enter($__internal_bf9c9d000f24201c3c1be1b42c58a13f1569305cdaec9eccc542b1e606f2f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_7c989a415b65946e0f22aecc59012c836cc0b59280caa6fc08bd37e08ff4e37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c989a415b65946e0f22aecc59012c836cc0b59280caa6fc08bd37e08ff4e37f->enter($__internal_7c989a415b65946e0f22aecc59012c836cc0b59280caa6fc08bd37e08ff4e37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9c9d000f24201c3c1be1b42c58a13f1569305cdaec9eccc542b1e606f2f07b->leave($__internal_bf9c9d000f24201c3c1be1b42c58a13f1569305cdaec9eccc542b1e606f2f07b_prof);

        
        $__internal_7c989a415b65946e0f22aecc59012c836cc0b59280caa6fc08bd37e08ff4e37f->leave($__internal_7c989a415b65946e0f22aecc59012c836cc0b59280caa6fc08bd37e08ff4e37f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac76447a716cfed8de1843b33e72647c939aa2dd93e10b001d44984ca7f91ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac76447a716cfed8de1843b33e72647c939aa2dd93e10b001d44984ca7f91ed3->enter($__internal_ac76447a716cfed8de1843b33e72647c939aa2dd93e10b001d44984ca7f91ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aea4a176fc33d00c32bf854ce70298fffea9f66f8fad94f3bb995f8aa984e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea4a176fc33d00c32bf854ce70298fffea9f66f8fad94f3bb995f8aa984e995->enter($__internal_aea4a176fc33d00c32bf854ce70298fffea9f66f8fad94f3bb995f8aa984e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_aea4a176fc33d00c32bf854ce70298fffea9f66f8fad94f3bb995f8aa984e995->leave($__internal_aea4a176fc33d00c32bf854ce70298fffea9f66f8fad94f3bb995f8aa984e995_prof);

        
        $__internal_ac76447a716cfed8de1843b33e72647c939aa2dd93e10b001d44984ca7f91ed3->leave($__internal_ac76447a716cfed8de1843b33e72647c939aa2dd93e10b001d44984ca7f91ed3_prof);

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
