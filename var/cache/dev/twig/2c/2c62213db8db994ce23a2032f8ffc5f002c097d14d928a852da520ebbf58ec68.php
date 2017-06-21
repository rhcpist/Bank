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
        $__internal_4881e40178fe15e447fbec2037e1d66b1499838a66a08c61ffc2465de956d449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4881e40178fe15e447fbec2037e1d66b1499838a66a08c61ffc2465de956d449->enter($__internal_4881e40178fe15e447fbec2037e1d66b1499838a66a08c61ffc2465de956d449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_935cd6528f1597f963fc1730c01fc57d371f14961d9f2311eac46c69d534cfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935cd6528f1597f963fc1730c01fc57d371f14961d9f2311eac46c69d534cfda->enter($__internal_935cd6528f1597f963fc1730c01fc57d371f14961d9f2311eac46c69d534cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4881e40178fe15e447fbec2037e1d66b1499838a66a08c61ffc2465de956d449->leave($__internal_4881e40178fe15e447fbec2037e1d66b1499838a66a08c61ffc2465de956d449_prof);

        
        $__internal_935cd6528f1597f963fc1730c01fc57d371f14961d9f2311eac46c69d534cfda->leave($__internal_935cd6528f1597f963fc1730c01fc57d371f14961d9f2311eac46c69d534cfda_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eabb10c7040a0732fa3c1bdf8d25a3e48a9095893a967c4a210319e1c1d4b49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabb10c7040a0732fa3c1bdf8d25a3e48a9095893a967c4a210319e1c1d4b49b->enter($__internal_eabb10c7040a0732fa3c1bdf8d25a3e48a9095893a967c4a210319e1c1d4b49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c46c2c6f9e3b0a30377e40985ed865a4e82aececee5a74a271b0fb4bbddce707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46c2c6f9e3b0a30377e40985ed865a4e82aececee5a74a271b0fb4bbddce707->enter($__internal_c46c2c6f9e3b0a30377e40985ed865a4e82aececee5a74a271b0fb4bbddce707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c46c2c6f9e3b0a30377e40985ed865a4e82aececee5a74a271b0fb4bbddce707->leave($__internal_c46c2c6f9e3b0a30377e40985ed865a4e82aececee5a74a271b0fb4bbddce707_prof);

        
        $__internal_eabb10c7040a0732fa3c1bdf8d25a3e48a9095893a967c4a210319e1c1d4b49b->leave($__internal_eabb10c7040a0732fa3c1bdf8d25a3e48a9095893a967c4a210319e1c1d4b49b_prof);

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
