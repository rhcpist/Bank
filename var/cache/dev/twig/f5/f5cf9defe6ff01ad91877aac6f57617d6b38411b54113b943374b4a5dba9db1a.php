<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6fcadea0b5a46e8107ab8bfa0fe1d4460646f63fd36389c9e8ebff28b327ffe0 extends Twig_Template
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
        $__internal_3be543dbd46c9dd3c5dbe42259fc8d38b487ce729f55f97e0680b3c29b47cd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be543dbd46c9dd3c5dbe42259fc8d38b487ce729f55f97e0680b3c29b47cd97->enter($__internal_3be543dbd46c9dd3c5dbe42259fc8d38b487ce729f55f97e0680b3c29b47cd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0d4e5b3c7f73c20f8a1ebb21b317afb52c32facbcfbf22147e4d8c2ea222cde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4e5b3c7f73c20f8a1ebb21b317afb52c32facbcfbf22147e4d8c2ea222cde7->enter($__internal_0d4e5b3c7f73c20f8a1ebb21b317afb52c32facbcfbf22147e4d8c2ea222cde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be543dbd46c9dd3c5dbe42259fc8d38b487ce729f55f97e0680b3c29b47cd97->leave($__internal_3be543dbd46c9dd3c5dbe42259fc8d38b487ce729f55f97e0680b3c29b47cd97_prof);

        
        $__internal_0d4e5b3c7f73c20f8a1ebb21b317afb52c32facbcfbf22147e4d8c2ea222cde7->leave($__internal_0d4e5b3c7f73c20f8a1ebb21b317afb52c32facbcfbf22147e4d8c2ea222cde7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e247f6ad7bd2766dbf3ef72a99727bf1672490623c24b68e6e28fe27a35755c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e247f6ad7bd2766dbf3ef72a99727bf1672490623c24b68e6e28fe27a35755c->enter($__internal_9e247f6ad7bd2766dbf3ef72a99727bf1672490623c24b68e6e28fe27a35755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b7d3af1fdb442c8b34caa299ec5d395aa3e8efd224a13c7311abac473b54eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7d3af1fdb442c8b34caa299ec5d395aa3e8efd224a13c7311abac473b54eb3->enter($__internal_9b7d3af1fdb442c8b34caa299ec5d395aa3e8efd224a13c7311abac473b54eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b7d3af1fdb442c8b34caa299ec5d395aa3e8efd224a13c7311abac473b54eb3->leave($__internal_9b7d3af1fdb442c8b34caa299ec5d395aa3e8efd224a13c7311abac473b54eb3_prof);

        
        $__internal_9e247f6ad7bd2766dbf3ef72a99727bf1672490623c24b68e6e28fe27a35755c->leave($__internal_9e247f6ad7bd2766dbf3ef72a99727bf1672490623c24b68e6e28fe27a35755c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b368193996d527310802f6b400557bdb6256a5d58c266fa7525dad40957ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b368193996d527310802f6b400557bdb6256a5d58c266fa7525dad40957ab7->enter($__internal_a6b368193996d527310802f6b400557bdb6256a5d58c266fa7525dad40957ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ce2fe55b9eb9123d9d10551eb079fde1ab0baf688ce82ce063e7bbff267ba90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce2fe55b9eb9123d9d10551eb079fde1ab0baf688ce82ce063e7bbff267ba90->enter($__internal_7ce2fe55b9eb9123d9d10551eb079fde1ab0baf688ce82ce063e7bbff267ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ce2fe55b9eb9123d9d10551eb079fde1ab0baf688ce82ce063e7bbff267ba90->leave($__internal_7ce2fe55b9eb9123d9d10551eb079fde1ab0baf688ce82ce063e7bbff267ba90_prof);

        
        $__internal_a6b368193996d527310802f6b400557bdb6256a5d58c266fa7525dad40957ab7->leave($__internal_a6b368193996d527310802f6b400557bdb6256a5d58c266fa7525dad40957ab7_prof);

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
