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
        $__internal_5ab23db9b8981fbdb949551bc1b9fda0b66f9475fbdd35283d5d595c4b89c0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab23db9b8981fbdb949551bc1b9fda0b66f9475fbdd35283d5d595c4b89c0a7->enter($__internal_5ab23db9b8981fbdb949551bc1b9fda0b66f9475fbdd35283d5d595c4b89c0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_81523ca4317b622958f8904d5447a9c8be1696dfc7d115345ad96f704a156566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81523ca4317b622958f8904d5447a9c8be1696dfc7d115345ad96f704a156566->enter($__internal_81523ca4317b622958f8904d5447a9c8be1696dfc7d115345ad96f704a156566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab23db9b8981fbdb949551bc1b9fda0b66f9475fbdd35283d5d595c4b89c0a7->leave($__internal_5ab23db9b8981fbdb949551bc1b9fda0b66f9475fbdd35283d5d595c4b89c0a7_prof);

        
        $__internal_81523ca4317b622958f8904d5447a9c8be1696dfc7d115345ad96f704a156566->leave($__internal_81523ca4317b622958f8904d5447a9c8be1696dfc7d115345ad96f704a156566_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9fddc28e8a009db62e87d21dd2a9a531a21a591bc5bcca105d84f6861cd7e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fddc28e8a009db62e87d21dd2a9a531a21a591bc5bcca105d84f6861cd7e35->enter($__internal_a9fddc28e8a009db62e87d21dd2a9a531a21a591bc5bcca105d84f6861cd7e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0cc96f6d26e5947a893a95c3f6ad2ced7ab8aa4721e5e658162c17db414e0c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc96f6d26e5947a893a95c3f6ad2ced7ab8aa4721e5e658162c17db414e0c85->enter($__internal_0cc96f6d26e5947a893a95c3f6ad2ced7ab8aa4721e5e658162c17db414e0c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0cc96f6d26e5947a893a95c3f6ad2ced7ab8aa4721e5e658162c17db414e0c85->leave($__internal_0cc96f6d26e5947a893a95c3f6ad2ced7ab8aa4721e5e658162c17db414e0c85_prof);

        
        $__internal_a9fddc28e8a009db62e87d21dd2a9a531a21a591bc5bcca105d84f6861cd7e35->leave($__internal_a9fddc28e8a009db62e87d21dd2a9a531a21a591bc5bcca105d84f6861cd7e35_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17462531c930b1a24745039106398f6153db6f9cd2609912b1e630e6e1614f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17462531c930b1a24745039106398f6153db6f9cd2609912b1e630e6e1614f4e->enter($__internal_17462531c930b1a24745039106398f6153db6f9cd2609912b1e630e6e1614f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3440c2fd8c760c666bbb35fe83c4412ea6f5d3c2b01d9ad4101f88f6755eaf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3440c2fd8c760c666bbb35fe83c4412ea6f5d3c2b01d9ad4101f88f6755eaf96->enter($__internal_3440c2fd8c760c666bbb35fe83c4412ea6f5d3c2b01d9ad4101f88f6755eaf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3440c2fd8c760c666bbb35fe83c4412ea6f5d3c2b01d9ad4101f88f6755eaf96->leave($__internal_3440c2fd8c760c666bbb35fe83c4412ea6f5d3c2b01d9ad4101f88f6755eaf96_prof);

        
        $__internal_17462531c930b1a24745039106398f6153db6f9cd2609912b1e630e6e1614f4e->leave($__internal_17462531c930b1a24745039106398f6153db6f9cd2609912b1e630e6e1614f4e_prof);

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
