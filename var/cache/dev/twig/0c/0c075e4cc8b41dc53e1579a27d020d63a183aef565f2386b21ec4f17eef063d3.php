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
        $__internal_c94b3a784caffa857e2604264b2009ecb14ac6653ac54c4c119a7a112206acc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94b3a784caffa857e2604264b2009ecb14ac6653ac54c4c119a7a112206acc1->enter($__internal_c94b3a784caffa857e2604264b2009ecb14ac6653ac54c4c119a7a112206acc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9bf2c9d9a8c45e8deef01065d637efb3b5febce4eb965f7cbab0416859894dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf2c9d9a8c45e8deef01065d637efb3b5febce4eb965f7cbab0416859894dce->enter($__internal_9bf2c9d9a8c45e8deef01065d637efb3b5febce4eb965f7cbab0416859894dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c94b3a784caffa857e2604264b2009ecb14ac6653ac54c4c119a7a112206acc1->leave($__internal_c94b3a784caffa857e2604264b2009ecb14ac6653ac54c4c119a7a112206acc1_prof);

        
        $__internal_9bf2c9d9a8c45e8deef01065d637efb3b5febce4eb965f7cbab0416859894dce->leave($__internal_9bf2c9d9a8c45e8deef01065d637efb3b5febce4eb965f7cbab0416859894dce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fd29ce5fecb5768745008491b1a749f486d1f32f159583bf4f358858b4c0397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd29ce5fecb5768745008491b1a749f486d1f32f159583bf4f358858b4c0397->enter($__internal_2fd29ce5fecb5768745008491b1a749f486d1f32f159583bf4f358858b4c0397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04d4e48f413f454123fd3c75a0c0d953ec9b7e381e756c6721a7fe836d87f474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d4e48f413f454123fd3c75a0c0d953ec9b7e381e756c6721a7fe836d87f474->enter($__internal_04d4e48f413f454123fd3c75a0c0d953ec9b7e381e756c6721a7fe836d87f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_04d4e48f413f454123fd3c75a0c0d953ec9b7e381e756c6721a7fe836d87f474->leave($__internal_04d4e48f413f454123fd3c75a0c0d953ec9b7e381e756c6721a7fe836d87f474_prof);

        
        $__internal_2fd29ce5fecb5768745008491b1a749f486d1f32f159583bf4f358858b4c0397->leave($__internal_2fd29ce5fecb5768745008491b1a749f486d1f32f159583bf4f358858b4c0397_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d00e6c5fbfd8c7edf005b212db1eb0610ee2fa4aa0a38049df46f2988d4d3c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00e6c5fbfd8c7edf005b212db1eb0610ee2fa4aa0a38049df46f2988d4d3c95->enter($__internal_d00e6c5fbfd8c7edf005b212db1eb0610ee2fa4aa0a38049df46f2988d4d3c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18cbd5ce4ea3d7d1a806c073183124819c4c0c20acc91eed57a5a38c04c549b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cbd5ce4ea3d7d1a806c073183124819c4c0c20acc91eed57a5a38c04c549b4->enter($__internal_18cbd5ce4ea3d7d1a806c073183124819c4c0c20acc91eed57a5a38c04c549b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18cbd5ce4ea3d7d1a806c073183124819c4c0c20acc91eed57a5a38c04c549b4->leave($__internal_18cbd5ce4ea3d7d1a806c073183124819c4c0c20acc91eed57a5a38c04c549b4_prof);

        
        $__internal_d00e6c5fbfd8c7edf005b212db1eb0610ee2fa4aa0a38049df46f2988d4d3c95->leave($__internal_d00e6c5fbfd8c7edf005b212db1eb0610ee2fa4aa0a38049df46f2988d4d3c95_prof);

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
