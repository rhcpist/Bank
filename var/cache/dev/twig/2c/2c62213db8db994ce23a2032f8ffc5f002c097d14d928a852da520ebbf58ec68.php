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
        $__internal_90f472166fef4911c4242673faa4f529ce031a34f0fc0a9baabc5710477dcb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f472166fef4911c4242673faa4f529ce031a34f0fc0a9baabc5710477dcb97->enter($__internal_90f472166fef4911c4242673faa4f529ce031a34f0fc0a9baabc5710477dcb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c30dfffa6d07a280a154cd2cfe16ca78fe5dfc0b6d3035e02a36d9eaae8e2621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30dfffa6d07a280a154cd2cfe16ca78fe5dfc0b6d3035e02a36d9eaae8e2621->enter($__internal_c30dfffa6d07a280a154cd2cfe16ca78fe5dfc0b6d3035e02a36d9eaae8e2621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f472166fef4911c4242673faa4f529ce031a34f0fc0a9baabc5710477dcb97->leave($__internal_90f472166fef4911c4242673faa4f529ce031a34f0fc0a9baabc5710477dcb97_prof);

        
        $__internal_c30dfffa6d07a280a154cd2cfe16ca78fe5dfc0b6d3035e02a36d9eaae8e2621->leave($__internal_c30dfffa6d07a280a154cd2cfe16ca78fe5dfc0b6d3035e02a36d9eaae8e2621_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319c95f2e9ff3523e575bb30ca1a83ac06a93d50f5ed6a53052f7126bf4ed3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319c95f2e9ff3523e575bb30ca1a83ac06a93d50f5ed6a53052f7126bf4ed3e0->enter($__internal_319c95f2e9ff3523e575bb30ca1a83ac06a93d50f5ed6a53052f7126bf4ed3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9fefbb9b04ae9c859bf1b180f23ac3008473ac4a5278b161f9c10c00379878e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fefbb9b04ae9c859bf1b180f23ac3008473ac4a5278b161f9c10c00379878e7->enter($__internal_9fefbb9b04ae9c859bf1b180f23ac3008473ac4a5278b161f9c10c00379878e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9fefbb9b04ae9c859bf1b180f23ac3008473ac4a5278b161f9c10c00379878e7->leave($__internal_9fefbb9b04ae9c859bf1b180f23ac3008473ac4a5278b161f9c10c00379878e7_prof);

        
        $__internal_319c95f2e9ff3523e575bb30ca1a83ac06a93d50f5ed6a53052f7126bf4ed3e0->leave($__internal_319c95f2e9ff3523e575bb30ca1a83ac06a93d50f5ed6a53052f7126bf4ed3e0_prof);

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
