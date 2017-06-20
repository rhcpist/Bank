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
        $__internal_be26b422adb8e53eb85cd9c1486a3d3bf0eaa2c97897c6d932151d630db7d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be26b422adb8e53eb85cd9c1486a3d3bf0eaa2c97897c6d932151d630db7d9a1->enter($__internal_be26b422adb8e53eb85cd9c1486a3d3bf0eaa2c97897c6d932151d630db7d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_423bd6c3ba76525379665a0fd4268fd09e73c6dd2b9e1e3e4497891d30fd9383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423bd6c3ba76525379665a0fd4268fd09e73c6dd2b9e1e3e4497891d30fd9383->enter($__internal_423bd6c3ba76525379665a0fd4268fd09e73c6dd2b9e1e3e4497891d30fd9383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be26b422adb8e53eb85cd9c1486a3d3bf0eaa2c97897c6d932151d630db7d9a1->leave($__internal_be26b422adb8e53eb85cd9c1486a3d3bf0eaa2c97897c6d932151d630db7d9a1_prof);

        
        $__internal_423bd6c3ba76525379665a0fd4268fd09e73c6dd2b9e1e3e4497891d30fd9383->leave($__internal_423bd6c3ba76525379665a0fd4268fd09e73c6dd2b9e1e3e4497891d30fd9383_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e32b62f4f9124b8ffa5e6307aa63634549e3b2b43b55d2c581031e0fa04c8a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32b62f4f9124b8ffa5e6307aa63634549e3b2b43b55d2c581031e0fa04c8a71->enter($__internal_e32b62f4f9124b8ffa5e6307aa63634549e3b2b43b55d2c581031e0fa04c8a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0cd2d753899c415e1368584abae308d13ff5a6c4e5b488a5011c791889b90358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd2d753899c415e1368584abae308d13ff5a6c4e5b488a5011c791889b90358->enter($__internal_0cd2d753899c415e1368584abae308d13ff5a6c4e5b488a5011c791889b90358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0cd2d753899c415e1368584abae308d13ff5a6c4e5b488a5011c791889b90358->leave($__internal_0cd2d753899c415e1368584abae308d13ff5a6c4e5b488a5011c791889b90358_prof);

        
        $__internal_e32b62f4f9124b8ffa5e6307aa63634549e3b2b43b55d2c581031e0fa04c8a71->leave($__internal_e32b62f4f9124b8ffa5e6307aa63634549e3b2b43b55d2c581031e0fa04c8a71_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_957e651097d97bf5278515f7fde4f28ea14cfbb509814baa82f951f8911263ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957e651097d97bf5278515f7fde4f28ea14cfbb509814baa82f951f8911263ce->enter($__internal_957e651097d97bf5278515f7fde4f28ea14cfbb509814baa82f951f8911263ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51fdd598bcc16c5e26d38fb1d665b9d96c1968d66aa6bf26786dfa4fca989059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fdd598bcc16c5e26d38fb1d665b9d96c1968d66aa6bf26786dfa4fca989059->enter($__internal_51fdd598bcc16c5e26d38fb1d665b9d96c1968d66aa6bf26786dfa4fca989059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51fdd598bcc16c5e26d38fb1d665b9d96c1968d66aa6bf26786dfa4fca989059->leave($__internal_51fdd598bcc16c5e26d38fb1d665b9d96c1968d66aa6bf26786dfa4fca989059_prof);

        
        $__internal_957e651097d97bf5278515f7fde4f28ea14cfbb509814baa82f951f8911263ce->leave($__internal_957e651097d97bf5278515f7fde4f28ea14cfbb509814baa82f951f8911263ce_prof);

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
