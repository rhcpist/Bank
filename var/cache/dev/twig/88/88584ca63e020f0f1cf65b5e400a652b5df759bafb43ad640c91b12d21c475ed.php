<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c9f5e892261986d3d310d39dea39d4b60f3850e6c5e003bd9bc5628705d247c9 extends Twig_Template
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
        $__internal_a2629ef48b590d9a20bbc3af21a0803cbb2313aac2c826ce83bdcab9e8400bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2629ef48b590d9a20bbc3af21a0803cbb2313aac2c826ce83bdcab9e8400bce->enter($__internal_a2629ef48b590d9a20bbc3af21a0803cbb2313aac2c826ce83bdcab9e8400bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d424548b7524403f497a0148ba8f33ba506808619a142a76ee08a9716792a0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d424548b7524403f497a0148ba8f33ba506808619a142a76ee08a9716792a0ac->enter($__internal_d424548b7524403f497a0148ba8f33ba506808619a142a76ee08a9716792a0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2629ef48b590d9a20bbc3af21a0803cbb2313aac2c826ce83bdcab9e8400bce->leave($__internal_a2629ef48b590d9a20bbc3af21a0803cbb2313aac2c826ce83bdcab9e8400bce_prof);

        
        $__internal_d424548b7524403f497a0148ba8f33ba506808619a142a76ee08a9716792a0ac->leave($__internal_d424548b7524403f497a0148ba8f33ba506808619a142a76ee08a9716792a0ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2200612fb46b8cf8272be2e3644dbf64c65743d038048b0e575497f408be5e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2200612fb46b8cf8272be2e3644dbf64c65743d038048b0e575497f408be5e70->enter($__internal_2200612fb46b8cf8272be2e3644dbf64c65743d038048b0e575497f408be5e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad32eebcbc897e73c999110df3fbb55d8723641206a5cd313aa9ba96a45ba239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad32eebcbc897e73c999110df3fbb55d8723641206a5cd313aa9ba96a45ba239->enter($__internal_ad32eebcbc897e73c999110df3fbb55d8723641206a5cd313aa9ba96a45ba239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ad32eebcbc897e73c999110df3fbb55d8723641206a5cd313aa9ba96a45ba239->leave($__internal_ad32eebcbc897e73c999110df3fbb55d8723641206a5cd313aa9ba96a45ba239_prof);

        
        $__internal_2200612fb46b8cf8272be2e3644dbf64c65743d038048b0e575497f408be5e70->leave($__internal_2200612fb46b8cf8272be2e3644dbf64c65743d038048b0e575497f408be5e70_prof);

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
