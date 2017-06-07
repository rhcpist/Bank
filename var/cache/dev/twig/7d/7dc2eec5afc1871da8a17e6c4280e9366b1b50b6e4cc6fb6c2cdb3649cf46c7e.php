<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3e330d3db0112fa62aeac952812e83378c8afc5e0b1a947b0db889ade0558a00 extends Twig_Template
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
        $__internal_908c2d611f5f049f17d261a6b37280da73335f9e5fc3a31a631eec5c7b19c059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908c2d611f5f049f17d261a6b37280da73335f9e5fc3a31a631eec5c7b19c059->enter($__internal_908c2d611f5f049f17d261a6b37280da73335f9e5fc3a31a631eec5c7b19c059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f4435334bd5071fd471c0a3246693593e483976d1d2b3b81bfbc0cbaf96e887d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4435334bd5071fd471c0a3246693593e483976d1d2b3b81bfbc0cbaf96e887d->enter($__internal_f4435334bd5071fd471c0a3246693593e483976d1d2b3b81bfbc0cbaf96e887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908c2d611f5f049f17d261a6b37280da73335f9e5fc3a31a631eec5c7b19c059->leave($__internal_908c2d611f5f049f17d261a6b37280da73335f9e5fc3a31a631eec5c7b19c059_prof);

        
        $__internal_f4435334bd5071fd471c0a3246693593e483976d1d2b3b81bfbc0cbaf96e887d->leave($__internal_f4435334bd5071fd471c0a3246693593e483976d1d2b3b81bfbc0cbaf96e887d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5819823035c7c605b9a5558b23856ce3423bd3972fe4497714af0a070bfc8ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5819823035c7c605b9a5558b23856ce3423bd3972fe4497714af0a070bfc8ddf->enter($__internal_5819823035c7c605b9a5558b23856ce3423bd3972fe4497714af0a070bfc8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccef3b8499a7ffffc4cffcf1232533f0a6dda263d5f36f655fdf8aeb8492928a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccef3b8499a7ffffc4cffcf1232533f0a6dda263d5f36f655fdf8aeb8492928a->enter($__internal_ccef3b8499a7ffffc4cffcf1232533f0a6dda263d5f36f655fdf8aeb8492928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ccef3b8499a7ffffc4cffcf1232533f0a6dda263d5f36f655fdf8aeb8492928a->leave($__internal_ccef3b8499a7ffffc4cffcf1232533f0a6dda263d5f36f655fdf8aeb8492928a_prof);

        
        $__internal_5819823035c7c605b9a5558b23856ce3423bd3972fe4497714af0a070bfc8ddf->leave($__internal_5819823035c7c605b9a5558b23856ce3423bd3972fe4497714af0a070bfc8ddf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b9017e23c6ef3cfa423e7eac18f0a15aeaaba54c1dd0be5ed46219d8c2708ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9017e23c6ef3cfa423e7eac18f0a15aeaaba54c1dd0be5ed46219d8c2708ea->enter($__internal_3b9017e23c6ef3cfa423e7eac18f0a15aeaaba54c1dd0be5ed46219d8c2708ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0b5f71a2dc2aabe80d083409d5a5a9b2b5682598ad6d4b370ab397853086861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b5f71a2dc2aabe80d083409d5a5a9b2b5682598ad6d4b370ab397853086861->enter($__internal_e0b5f71a2dc2aabe80d083409d5a5a9b2b5682598ad6d4b370ab397853086861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e0b5f71a2dc2aabe80d083409d5a5a9b2b5682598ad6d4b370ab397853086861->leave($__internal_e0b5f71a2dc2aabe80d083409d5a5a9b2b5682598ad6d4b370ab397853086861_prof);

        
        $__internal_3b9017e23c6ef3cfa423e7eac18f0a15aeaaba54c1dd0be5ed46219d8c2708ea->leave($__internal_3b9017e23c6ef3cfa423e7eac18f0a15aeaaba54c1dd0be5ed46219d8c2708ea_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
