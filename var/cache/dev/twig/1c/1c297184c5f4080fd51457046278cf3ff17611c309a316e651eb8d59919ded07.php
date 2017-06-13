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
        $__internal_04dfe1ef7eab2db5b3c0852866fbb71d2f88b36e6063c90c266ceaedf7ae48e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dfe1ef7eab2db5b3c0852866fbb71d2f88b36e6063c90c266ceaedf7ae48e2->enter($__internal_04dfe1ef7eab2db5b3c0852866fbb71d2f88b36e6063c90c266ceaedf7ae48e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d585b93b8dbfc246c44f8198ede6300ee6a361d1c30002b0b7a68e2130446b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d585b93b8dbfc246c44f8198ede6300ee6a361d1c30002b0b7a68e2130446b21->enter($__internal_d585b93b8dbfc246c44f8198ede6300ee6a361d1c30002b0b7a68e2130446b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04dfe1ef7eab2db5b3c0852866fbb71d2f88b36e6063c90c266ceaedf7ae48e2->leave($__internal_04dfe1ef7eab2db5b3c0852866fbb71d2f88b36e6063c90c266ceaedf7ae48e2_prof);

        
        $__internal_d585b93b8dbfc246c44f8198ede6300ee6a361d1c30002b0b7a68e2130446b21->leave($__internal_d585b93b8dbfc246c44f8198ede6300ee6a361d1c30002b0b7a68e2130446b21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a24a4506f7ec5c7053ecc5b34714cfdcfa5b0d09c7ad140410521b29121c04f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24a4506f7ec5c7053ecc5b34714cfdcfa5b0d09c7ad140410521b29121c04f8->enter($__internal_a24a4506f7ec5c7053ecc5b34714cfdcfa5b0d09c7ad140410521b29121c04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58440712933694edcca4f1a84d2b44c6999cb932301b5a9aba0268a3fe0ad28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58440712933694edcca4f1a84d2b44c6999cb932301b5a9aba0268a3fe0ad28d->enter($__internal_58440712933694edcca4f1a84d2b44c6999cb932301b5a9aba0268a3fe0ad28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_58440712933694edcca4f1a84d2b44c6999cb932301b5a9aba0268a3fe0ad28d->leave($__internal_58440712933694edcca4f1a84d2b44c6999cb932301b5a9aba0268a3fe0ad28d_prof);

        
        $__internal_a24a4506f7ec5c7053ecc5b34714cfdcfa5b0d09c7ad140410521b29121c04f8->leave($__internal_a24a4506f7ec5c7053ecc5b34714cfdcfa5b0d09c7ad140410521b29121c04f8_prof);

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
