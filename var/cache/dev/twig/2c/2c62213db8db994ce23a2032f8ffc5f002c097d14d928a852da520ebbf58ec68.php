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
        $__internal_6014a7c66e871361a3c21f399938dea183ff9c2ce596d7fabb7950fabd16b8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6014a7c66e871361a3c21f399938dea183ff9c2ce596d7fabb7950fabd16b8dc->enter($__internal_6014a7c66e871361a3c21f399938dea183ff9c2ce596d7fabb7950fabd16b8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6c6587a742e10f99e155cf852697b9aabc97823fb02a193d72ffd0f9d0de8836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6587a742e10f99e155cf852697b9aabc97823fb02a193d72ffd0f9d0de8836->enter($__internal_6c6587a742e10f99e155cf852697b9aabc97823fb02a193d72ffd0f9d0de8836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6014a7c66e871361a3c21f399938dea183ff9c2ce596d7fabb7950fabd16b8dc->leave($__internal_6014a7c66e871361a3c21f399938dea183ff9c2ce596d7fabb7950fabd16b8dc_prof);

        
        $__internal_6c6587a742e10f99e155cf852697b9aabc97823fb02a193d72ffd0f9d0de8836->leave($__internal_6c6587a742e10f99e155cf852697b9aabc97823fb02a193d72ffd0f9d0de8836_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ff495fd83d8c51bb5c2c2a765d28123bc961e29c995b5348d0ecc943cd2e22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff495fd83d8c51bb5c2c2a765d28123bc961e29c995b5348d0ecc943cd2e22e->enter($__internal_8ff495fd83d8c51bb5c2c2a765d28123bc961e29c995b5348d0ecc943cd2e22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_161d0d22deacd15a8766a0883f6e28f68b8b6fe31e44b992586afa2ec1ccefdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161d0d22deacd15a8766a0883f6e28f68b8b6fe31e44b992586afa2ec1ccefdd->enter($__internal_161d0d22deacd15a8766a0883f6e28f68b8b6fe31e44b992586afa2ec1ccefdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_161d0d22deacd15a8766a0883f6e28f68b8b6fe31e44b992586afa2ec1ccefdd->leave($__internal_161d0d22deacd15a8766a0883f6e28f68b8b6fe31e44b992586afa2ec1ccefdd_prof);

        
        $__internal_8ff495fd83d8c51bb5c2c2a765d28123bc961e29c995b5348d0ecc943cd2e22e->leave($__internal_8ff495fd83d8c51bb5c2c2a765d28123bc961e29c995b5348d0ecc943cd2e22e_prof);

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
