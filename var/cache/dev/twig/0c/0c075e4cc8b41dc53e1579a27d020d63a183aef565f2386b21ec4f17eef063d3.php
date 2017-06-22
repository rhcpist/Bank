<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_494c3b42d5e9ce51a97157f132d62739ce9a5daeb7c62c271e41417e62803020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343e9cdec76f9b48f0f56737f61bf1f770e66a628abc5951c0d4657769c6eee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343e9cdec76f9b48f0f56737f61bf1f770e66a628abc5951c0d4657769c6eee2->enter($__internal_343e9cdec76f9b48f0f56737f61bf1f770e66a628abc5951c0d4657769c6eee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9092cd44b52ae1e7f023ad94b8ba5adce52ce334632b82dd9c6f842507c363eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9092cd44b52ae1e7f023ad94b8ba5adce52ce334632b82dd9c6f842507c363eb->enter($__internal_9092cd44b52ae1e7f023ad94b8ba5adce52ce334632b82dd9c6f842507c363eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343e9cdec76f9b48f0f56737f61bf1f770e66a628abc5951c0d4657769c6eee2->leave($__internal_343e9cdec76f9b48f0f56737f61bf1f770e66a628abc5951c0d4657769c6eee2_prof);

        
        $__internal_9092cd44b52ae1e7f023ad94b8ba5adce52ce334632b82dd9c6f842507c363eb->leave($__internal_9092cd44b52ae1e7f023ad94b8ba5adce52ce334632b82dd9c6f842507c363eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bfa1af2336c78743f29cb187495995fbb09e5d413c3326cfbbf6aaf569aa7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfa1af2336c78743f29cb187495995fbb09e5d413c3326cfbbf6aaf569aa7bb->enter($__internal_2bfa1af2336c78743f29cb187495995fbb09e5d413c3326cfbbf6aaf569aa7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1fff338897931b261b6597624e2e8f68549d8ad93f60c6075548e11a77448d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fff338897931b261b6597624e2e8f68549d8ad93f60c6075548e11a77448d3->enter($__internal_b1fff338897931b261b6597624e2e8f68549d8ad93f60c6075548e11a77448d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b1fff338897931b261b6597624e2e8f68549d8ad93f60c6075548e11a77448d3->leave($__internal_b1fff338897931b261b6597624e2e8f68549d8ad93f60c6075548e11a77448d3_prof);

        
        $__internal_2bfa1af2336c78743f29cb187495995fbb09e5d413c3326cfbbf6aaf569aa7bb->leave($__internal_2bfa1af2336c78743f29cb187495995fbb09e5d413c3326cfbbf6aaf569aa7bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c0bee9bb3f8445ab699adcb7a6f295687cfc692127cf84b733195132f0d2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c0bee9bb3f8445ab699adcb7a6f295687cfc692127cf84b733195132f0d2e8->enter($__internal_18c0bee9bb3f8445ab699adcb7a6f295687cfc692127cf84b733195132f0d2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2ddf37198daa636f95e1a404aeaf2d69b81a35199b0927c0694c591862a75e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ddf37198daa636f95e1a404aeaf2d69b81a35199b0927c0694c591862a75e2->enter($__internal_c2ddf37198daa636f95e1a404aeaf2d69b81a35199b0927c0694c591862a75e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_c2ddf37198daa636f95e1a404aeaf2d69b81a35199b0927c0694c591862a75e2->leave($__internal_c2ddf37198daa636f95e1a404aeaf2d69b81a35199b0927c0694c591862a75e2_prof);

        
        $__internal_18c0bee9bb3f8445ab699adcb7a6f295687cfc692127cf84b733195132f0d2e8->leave($__internal_18c0bee9bb3f8445ab699adcb7a6f295687cfc692127cf84b733195132f0d2e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
