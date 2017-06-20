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
        $__internal_6ae059df6390a8e5071934d9f06eeecb2d151a7c809fb1b7ba1bbe2c4f418fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae059df6390a8e5071934d9f06eeecb2d151a7c809fb1b7ba1bbe2c4f418fe7->enter($__internal_6ae059df6390a8e5071934d9f06eeecb2d151a7c809fb1b7ba1bbe2c4f418fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_cb4919fb8e3fea4884425895f311db6996a8319a7ff6c01533d3f2a78ec52c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4919fb8e3fea4884425895f311db6996a8319a7ff6c01533d3f2a78ec52c61->enter($__internal_cb4919fb8e3fea4884425895f311db6996a8319a7ff6c01533d3f2a78ec52c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae059df6390a8e5071934d9f06eeecb2d151a7c809fb1b7ba1bbe2c4f418fe7->leave($__internal_6ae059df6390a8e5071934d9f06eeecb2d151a7c809fb1b7ba1bbe2c4f418fe7_prof);

        
        $__internal_cb4919fb8e3fea4884425895f311db6996a8319a7ff6c01533d3f2a78ec52c61->leave($__internal_cb4919fb8e3fea4884425895f311db6996a8319a7ff6c01533d3f2a78ec52c61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_025c202fe5f56a42535c5889a61f5130d6344c948bf176509a2161c27fdf34a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025c202fe5f56a42535c5889a61f5130d6344c948bf176509a2161c27fdf34a5->enter($__internal_025c202fe5f56a42535c5889a61f5130d6344c948bf176509a2161c27fdf34a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3b04f3d0025ed3204ac36bac416186c19ee22e4edc0b732b17ae0cb6d464926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b04f3d0025ed3204ac36bac416186c19ee22e4edc0b732b17ae0cb6d464926->enter($__internal_f3b04f3d0025ed3204ac36bac416186c19ee22e4edc0b732b17ae0cb6d464926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f3b04f3d0025ed3204ac36bac416186c19ee22e4edc0b732b17ae0cb6d464926->leave($__internal_f3b04f3d0025ed3204ac36bac416186c19ee22e4edc0b732b17ae0cb6d464926_prof);

        
        $__internal_025c202fe5f56a42535c5889a61f5130d6344c948bf176509a2161c27fdf34a5->leave($__internal_025c202fe5f56a42535c5889a61f5130d6344c948bf176509a2161c27fdf34a5_prof);

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
