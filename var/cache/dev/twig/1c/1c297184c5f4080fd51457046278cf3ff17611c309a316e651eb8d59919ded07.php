<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0195bfd9c6541239c13675e7c93889c77e151121d481f3c826e821ce961f1eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c9b677c8e269349acdec9c5e868a627a06730f2095e3405089ec0b312f6781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c9b677c8e269349acdec9c5e868a627a06730f2095e3405089ec0b312f6781->enter($__internal_a5c9b677c8e269349acdec9c5e868a627a06730f2095e3405089ec0b312f6781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_0cc99fff6e360bfd809447f3f64b5fb77d115460b9f7feae4e9468038cbe9de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc99fff6e360bfd809447f3f64b5fb77d115460b9f7feae4e9468038cbe9de0->enter($__internal_0cc99fff6e360bfd809447f3f64b5fb77d115460b9f7feae4e9468038cbe9de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c9b677c8e269349acdec9c5e868a627a06730f2095e3405089ec0b312f6781->leave($__internal_a5c9b677c8e269349acdec9c5e868a627a06730f2095e3405089ec0b312f6781_prof);

        
        $__internal_0cc99fff6e360bfd809447f3f64b5fb77d115460b9f7feae4e9468038cbe9de0->leave($__internal_0cc99fff6e360bfd809447f3f64b5fb77d115460b9f7feae4e9468038cbe9de0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66e4d0c5626c081d552642fb08870d5634b64569131632d9b7006ccb92364f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e4d0c5626c081d552642fb08870d5634b64569131632d9b7006ccb92364f03->enter($__internal_66e4d0c5626c081d552642fb08870d5634b64569131632d9b7006ccb92364f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_479fce2dba510ec94db6fd986d1033ae64a8400b199a7934958df8d4c430d297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479fce2dba510ec94db6fd986d1033ae64a8400b199a7934958df8d4c430d297->enter($__internal_479fce2dba510ec94db6fd986d1033ae64a8400b199a7934958df8d4c430d297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_479fce2dba510ec94db6fd986d1033ae64a8400b199a7934958df8d4c430d297->leave($__internal_479fce2dba510ec94db6fd986d1033ae64a8400b199a7934958df8d4c430d297_prof);

        
        $__internal_66e4d0c5626c081d552642fb08870d5634b64569131632d9b7006ccb92364f03->leave($__internal_66e4d0c5626c081d552642fb08870d5634b64569131632d9b7006ccb92364f03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
