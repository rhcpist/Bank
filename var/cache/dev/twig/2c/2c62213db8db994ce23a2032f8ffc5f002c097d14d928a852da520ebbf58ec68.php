<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_880e024ad36eb19144b941a1f613872236d59db28d28bc89f02b418af3cee210 extends Twig_Template
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
        $__internal_e1d24fdb0b02a2599761fab6e69f6c912617e73e852963c3cb84f3d31c97cbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d24fdb0b02a2599761fab6e69f6c912617e73e852963c3cb84f3d31c97cbd2->enter($__internal_e1d24fdb0b02a2599761fab6e69f6c912617e73e852963c3cb84f3d31c97cbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f4a6ea6f08d61263f163cbb6ed70f074d451806e7cabd627afedd5952896b097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a6ea6f08d61263f163cbb6ed70f074d451806e7cabd627afedd5952896b097->enter($__internal_f4a6ea6f08d61263f163cbb6ed70f074d451806e7cabd627afedd5952896b097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d24fdb0b02a2599761fab6e69f6c912617e73e852963c3cb84f3d31c97cbd2->leave($__internal_e1d24fdb0b02a2599761fab6e69f6c912617e73e852963c3cb84f3d31c97cbd2_prof);

        
        $__internal_f4a6ea6f08d61263f163cbb6ed70f074d451806e7cabd627afedd5952896b097->leave($__internal_f4a6ea6f08d61263f163cbb6ed70f074d451806e7cabd627afedd5952896b097_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d3763ed4b696728638e201a5a6ec4bfecab5bdc907337508be0b5cf3997966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d3763ed4b696728638e201a5a6ec4bfecab5bdc907337508be0b5cf3997966->enter($__internal_a7d3763ed4b696728638e201a5a6ec4bfecab5bdc907337508be0b5cf3997966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41ec0c8978884d972d682132fa69ad84db207f35f77c9ba085da1cb4257bc4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ec0c8978884d972d682132fa69ad84db207f35f77c9ba085da1cb4257bc4b1->enter($__internal_41ec0c8978884d972d682132fa69ad84db207f35f77c9ba085da1cb4257bc4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_41ec0c8978884d972d682132fa69ad84db207f35f77c9ba085da1cb4257bc4b1->leave($__internal_41ec0c8978884d972d682132fa69ad84db207f35f77c9ba085da1cb4257bc4b1_prof);

        
        $__internal_a7d3763ed4b696728638e201a5a6ec4bfecab5bdc907337508be0b5cf3997966->leave($__internal_a7d3763ed4b696728638e201a5a6ec4bfecab5bdc907337508be0b5cf3997966_prof);

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
