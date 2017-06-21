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
        $__internal_3391f25aa53911bc4d075f204a7609c70a036d88a80f0457809b0d1298b19a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3391f25aa53911bc4d075f204a7609c70a036d88a80f0457809b0d1298b19a1f->enter($__internal_3391f25aa53911bc4d075f204a7609c70a036d88a80f0457809b0d1298b19a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8e492f9a42ed322935794131ca0a6a09b534bcfe2bc0dc482d770c1159163649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e492f9a42ed322935794131ca0a6a09b534bcfe2bc0dc482d770c1159163649->enter($__internal_8e492f9a42ed322935794131ca0a6a09b534bcfe2bc0dc482d770c1159163649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3391f25aa53911bc4d075f204a7609c70a036d88a80f0457809b0d1298b19a1f->leave($__internal_3391f25aa53911bc4d075f204a7609c70a036d88a80f0457809b0d1298b19a1f_prof);

        
        $__internal_8e492f9a42ed322935794131ca0a6a09b534bcfe2bc0dc482d770c1159163649->leave($__internal_8e492f9a42ed322935794131ca0a6a09b534bcfe2bc0dc482d770c1159163649_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d42e8ced9f42f8f050b126aa8d0266cbc6427539d1342c3a002be9d8a81e328c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42e8ced9f42f8f050b126aa8d0266cbc6427539d1342c3a002be9d8a81e328c->enter($__internal_d42e8ced9f42f8f050b126aa8d0266cbc6427539d1342c3a002be9d8a81e328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a334198aec082a1fdc009ea3e3b210d8e0ad403d9bedfe8a675b306a9d9d169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a334198aec082a1fdc009ea3e3b210d8e0ad403d9bedfe8a675b306a9d9d169b->enter($__internal_a334198aec082a1fdc009ea3e3b210d8e0ad403d9bedfe8a675b306a9d9d169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a334198aec082a1fdc009ea3e3b210d8e0ad403d9bedfe8a675b306a9d9d169b->leave($__internal_a334198aec082a1fdc009ea3e3b210d8e0ad403d9bedfe8a675b306a9d9d169b_prof);

        
        $__internal_d42e8ced9f42f8f050b126aa8d0266cbc6427539d1342c3a002be9d8a81e328c->leave($__internal_d42e8ced9f42f8f050b126aa8d0266cbc6427539d1342c3a002be9d8a81e328c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bc5ea5be9eb31909b7ee4fcb832dcf9b5f4d3f1b00a496b9a55142d813a9062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc5ea5be9eb31909b7ee4fcb832dcf9b5f4d3f1b00a496b9a55142d813a9062->enter($__internal_8bc5ea5be9eb31909b7ee4fcb832dcf9b5f4d3f1b00a496b9a55142d813a9062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_082c6ee38ebb45976c57c8774d46006c10b6490c656a51c2a8426a17a1a23333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082c6ee38ebb45976c57c8774d46006c10b6490c656a51c2a8426a17a1a23333->enter($__internal_082c6ee38ebb45976c57c8774d46006c10b6490c656a51c2a8426a17a1a23333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_082c6ee38ebb45976c57c8774d46006c10b6490c656a51c2a8426a17a1a23333->leave($__internal_082c6ee38ebb45976c57c8774d46006c10b6490c656a51c2a8426a17a1a23333_prof);

        
        $__internal_8bc5ea5be9eb31909b7ee4fcb832dcf9b5f4d3f1b00a496b9a55142d813a9062->leave($__internal_8bc5ea5be9eb31909b7ee4fcb832dcf9b5f4d3f1b00a496b9a55142d813a9062_prof);

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
