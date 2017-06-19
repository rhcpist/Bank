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
        $__internal_66b4ee84fd66f69f2d41e26677c82d34baba1578c1eea5ac6837c4abab0b8f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b4ee84fd66f69f2d41e26677c82d34baba1578c1eea5ac6837c4abab0b8f1e->enter($__internal_66b4ee84fd66f69f2d41e26677c82d34baba1578c1eea5ac6837c4abab0b8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_67d8dda763470c9695a91dc993a69a3e32b74e148e1f46363473e3c45d2a3eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d8dda763470c9695a91dc993a69a3e32b74e148e1f46363473e3c45d2a3eec->enter($__internal_67d8dda763470c9695a91dc993a69a3e32b74e148e1f46363473e3c45d2a3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b4ee84fd66f69f2d41e26677c82d34baba1578c1eea5ac6837c4abab0b8f1e->leave($__internal_66b4ee84fd66f69f2d41e26677c82d34baba1578c1eea5ac6837c4abab0b8f1e_prof);

        
        $__internal_67d8dda763470c9695a91dc993a69a3e32b74e148e1f46363473e3c45d2a3eec->leave($__internal_67d8dda763470c9695a91dc993a69a3e32b74e148e1f46363473e3c45d2a3eec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b62eec57255e10a901b89cfff70925de78c5734ac8e72e34e2d1a020c147d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b62eec57255e10a901b89cfff70925de78c5734ac8e72e34e2d1a020c147d7f->enter($__internal_7b62eec57255e10a901b89cfff70925de78c5734ac8e72e34e2d1a020c147d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16b41232c1bcff99114910dc20b0f2d554879f6c2cbb8656b2c955dd8a5ede45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b41232c1bcff99114910dc20b0f2d554879f6c2cbb8656b2c955dd8a5ede45->enter($__internal_16b41232c1bcff99114910dc20b0f2d554879f6c2cbb8656b2c955dd8a5ede45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_16b41232c1bcff99114910dc20b0f2d554879f6c2cbb8656b2c955dd8a5ede45->leave($__internal_16b41232c1bcff99114910dc20b0f2d554879f6c2cbb8656b2c955dd8a5ede45_prof);

        
        $__internal_7b62eec57255e10a901b89cfff70925de78c5734ac8e72e34e2d1a020c147d7f->leave($__internal_7b62eec57255e10a901b89cfff70925de78c5734ac8e72e34e2d1a020c147d7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e9fe47da361750039e7c1b2ae578794bad236e63228033aa6258a7ce9aadbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9fe47da361750039e7c1b2ae578794bad236e63228033aa6258a7ce9aadbd5->enter($__internal_6e9fe47da361750039e7c1b2ae578794bad236e63228033aa6258a7ce9aadbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60636b94329335f8c0a42fb3c5039b8080b660dc1dbe13aa6ac7593ebea5c3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60636b94329335f8c0a42fb3c5039b8080b660dc1dbe13aa6ac7593ebea5c3cc->enter($__internal_60636b94329335f8c0a42fb3c5039b8080b660dc1dbe13aa6ac7593ebea5c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60636b94329335f8c0a42fb3c5039b8080b660dc1dbe13aa6ac7593ebea5c3cc->leave($__internal_60636b94329335f8c0a42fb3c5039b8080b660dc1dbe13aa6ac7593ebea5c3cc_prof);

        
        $__internal_6e9fe47da361750039e7c1b2ae578794bad236e63228033aa6258a7ce9aadbd5->leave($__internal_6e9fe47da361750039e7c1b2ae578794bad236e63228033aa6258a7ce9aadbd5_prof);

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
