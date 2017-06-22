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
        $__internal_e98754ed3eeaae1411c5a0b995df0dd096e09665e1a0d5447cd405d323cb2b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98754ed3eeaae1411c5a0b995df0dd096e09665e1a0d5447cd405d323cb2b4a->enter($__internal_e98754ed3eeaae1411c5a0b995df0dd096e09665e1a0d5447cd405d323cb2b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_07e92a897899881dbd1f02c6f93f7335efb2ca2ba1ca047bcbffbbdc9de0c408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e92a897899881dbd1f02c6f93f7335efb2ca2ba1ca047bcbffbbdc9de0c408->enter($__internal_07e92a897899881dbd1f02c6f93f7335efb2ca2ba1ca047bcbffbbdc9de0c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98754ed3eeaae1411c5a0b995df0dd096e09665e1a0d5447cd405d323cb2b4a->leave($__internal_e98754ed3eeaae1411c5a0b995df0dd096e09665e1a0d5447cd405d323cb2b4a_prof);

        
        $__internal_07e92a897899881dbd1f02c6f93f7335efb2ca2ba1ca047bcbffbbdc9de0c408->leave($__internal_07e92a897899881dbd1f02c6f93f7335efb2ca2ba1ca047bcbffbbdc9de0c408_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6029b6785104912f8b3dedecec327249222bead5fc1cf4a0faf312b4bd2b0db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6029b6785104912f8b3dedecec327249222bead5fc1cf4a0faf312b4bd2b0db7->enter($__internal_6029b6785104912f8b3dedecec327249222bead5fc1cf4a0faf312b4bd2b0db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_efc5c5a8e66f5a76e88eea245dab0a7aa26df750dd7164447f65efb0dbe6fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc5c5a8e66f5a76e88eea245dab0a7aa26df750dd7164447f65efb0dbe6fa41->enter($__internal_efc5c5a8e66f5a76e88eea245dab0a7aa26df750dd7164447f65efb0dbe6fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_efc5c5a8e66f5a76e88eea245dab0a7aa26df750dd7164447f65efb0dbe6fa41->leave($__internal_efc5c5a8e66f5a76e88eea245dab0a7aa26df750dd7164447f65efb0dbe6fa41_prof);

        
        $__internal_6029b6785104912f8b3dedecec327249222bead5fc1cf4a0faf312b4bd2b0db7->leave($__internal_6029b6785104912f8b3dedecec327249222bead5fc1cf4a0faf312b4bd2b0db7_prof);

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
