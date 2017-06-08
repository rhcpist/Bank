<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_769cc6d2f704c155482f8604df1fec71e997fa1f9e5f73c13ff7020591694881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6dd91d81287187446de15d6842a639fb49f3193bed964a190420ed689b212d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6dd91d81287187446de15d6842a639fb49f3193bed964a190420ed689b212d->enter($__internal_2c6dd91d81287187446de15d6842a639fb49f3193bed964a190420ed689b212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4acefb5636b0c37d70f3ad06176cd94560c1afcc25dbfc2c9bedd48273d83f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acefb5636b0c37d70f3ad06176cd94560c1afcc25dbfc2c9bedd48273d83f0a->enter($__internal_4acefb5636b0c37d70f3ad06176cd94560c1afcc25dbfc2c9bedd48273d83f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6dd91d81287187446de15d6842a639fb49f3193bed964a190420ed689b212d->leave($__internal_2c6dd91d81287187446de15d6842a639fb49f3193bed964a190420ed689b212d_prof);

        
        $__internal_4acefb5636b0c37d70f3ad06176cd94560c1afcc25dbfc2c9bedd48273d83f0a->leave($__internal_4acefb5636b0c37d70f3ad06176cd94560c1afcc25dbfc2c9bedd48273d83f0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7074ee961d537d96d660bef213f4c237617c3df329e218c01be948344d86ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7074ee961d537d96d660bef213f4c237617c3df329e218c01be948344d86ad->enter($__internal_0b7074ee961d537d96d660bef213f4c237617c3df329e218c01be948344d86ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e3f5ac27ecd11d80153d00164234188d5971791a7b313f82cc2ac4bbed7ed61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3f5ac27ecd11d80153d00164234188d5971791a7b313f82cc2ac4bbed7ed61->enter($__internal_4e3f5ac27ecd11d80153d00164234188d5971791a7b313f82cc2ac4bbed7ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4e3f5ac27ecd11d80153d00164234188d5971791a7b313f82cc2ac4bbed7ed61->leave($__internal_4e3f5ac27ecd11d80153d00164234188d5971791a7b313f82cc2ac4bbed7ed61_prof);

        
        $__internal_0b7074ee961d537d96d660bef213f4c237617c3df329e218c01be948344d86ad->leave($__internal_0b7074ee961d537d96d660bef213f4c237617c3df329e218c01be948344d86ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3b8ad2a596f2235401a14f91440112125a840324ff95f7cf5e5ba80ec881edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b8ad2a596f2235401a14f91440112125a840324ff95f7cf5e5ba80ec881edc->enter($__internal_e3b8ad2a596f2235401a14f91440112125a840324ff95f7cf5e5ba80ec881edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb7d0590f4e54067e094879f7b8cbeab169414938b2ed19e34d19bc208a8abe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7d0590f4e54067e094879f7b8cbeab169414938b2ed19e34d19bc208a8abe5->enter($__internal_eb7d0590f4e54067e094879f7b8cbeab169414938b2ed19e34d19bc208a8abe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb7d0590f4e54067e094879f7b8cbeab169414938b2ed19e34d19bc208a8abe5->leave($__internal_eb7d0590f4e54067e094879f7b8cbeab169414938b2ed19e34d19bc208a8abe5_prof);

        
        $__internal_e3b8ad2a596f2235401a14f91440112125a840324ff95f7cf5e5ba80ec881edc->leave($__internal_e3b8ad2a596f2235401a14f91440112125a840324ff95f7cf5e5ba80ec881edc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
