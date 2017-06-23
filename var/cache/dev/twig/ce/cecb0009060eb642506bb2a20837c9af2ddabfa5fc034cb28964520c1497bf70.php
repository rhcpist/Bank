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
        $__internal_8b0a4c7fa79d6cebdebdd580bffafcb656119a56438531854fead77cd9fa49fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0a4c7fa79d6cebdebdd580bffafcb656119a56438531854fead77cd9fa49fe->enter($__internal_8b0a4c7fa79d6cebdebdd580bffafcb656119a56438531854fead77cd9fa49fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_d8c077ae7703a26a67bd59411ba877dd33337a2c2269d789d26ac6079f5fd410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c077ae7703a26a67bd59411ba877dd33337a2c2269d789d26ac6079f5fd410->enter($__internal_d8c077ae7703a26a67bd59411ba877dd33337a2c2269d789d26ac6079f5fd410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b0a4c7fa79d6cebdebdd580bffafcb656119a56438531854fead77cd9fa49fe->leave($__internal_8b0a4c7fa79d6cebdebdd580bffafcb656119a56438531854fead77cd9fa49fe_prof);

        
        $__internal_d8c077ae7703a26a67bd59411ba877dd33337a2c2269d789d26ac6079f5fd410->leave($__internal_d8c077ae7703a26a67bd59411ba877dd33337a2c2269d789d26ac6079f5fd410_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fabc40d711b8b01e5dcedff7e765cdf7072624bae02521aac078effe7e8ce02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabc40d711b8b01e5dcedff7e765cdf7072624bae02521aac078effe7e8ce02c->enter($__internal_fabc40d711b8b01e5dcedff7e765cdf7072624bae02521aac078effe7e8ce02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e382995a09bb529f2ca496bfa85dedf1dc4a6b09b2ae8992ed20e1a9bbb912d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e382995a09bb529f2ca496bfa85dedf1dc4a6b09b2ae8992ed20e1a9bbb912d6->enter($__internal_e382995a09bb529f2ca496bfa85dedf1dc4a6b09b2ae8992ed20e1a9bbb912d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e382995a09bb529f2ca496bfa85dedf1dc4a6b09b2ae8992ed20e1a9bbb912d6->leave($__internal_e382995a09bb529f2ca496bfa85dedf1dc4a6b09b2ae8992ed20e1a9bbb912d6_prof);

        
        $__internal_fabc40d711b8b01e5dcedff7e765cdf7072624bae02521aac078effe7e8ce02c->leave($__internal_fabc40d711b8b01e5dcedff7e765cdf7072624bae02521aac078effe7e8ce02c_prof);

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
