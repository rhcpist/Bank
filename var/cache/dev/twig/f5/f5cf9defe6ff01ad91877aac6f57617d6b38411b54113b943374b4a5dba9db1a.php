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
        $__internal_8c9abe4fa8e256145673c0b331b3a9cfd386853ff04fcdce3de3ca9050f8b60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9abe4fa8e256145673c0b331b3a9cfd386853ff04fcdce3de3ca9050f8b60f->enter($__internal_8c9abe4fa8e256145673c0b331b3a9cfd386853ff04fcdce3de3ca9050f8b60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a800f8ca8e10268f33757042a2c69797272afdc9c71e1a04a840ca765d5e1b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a800f8ca8e10268f33757042a2c69797272afdc9c71e1a04a840ca765d5e1b8b->enter($__internal_a800f8ca8e10268f33757042a2c69797272afdc9c71e1a04a840ca765d5e1b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9abe4fa8e256145673c0b331b3a9cfd386853ff04fcdce3de3ca9050f8b60f->leave($__internal_8c9abe4fa8e256145673c0b331b3a9cfd386853ff04fcdce3de3ca9050f8b60f_prof);

        
        $__internal_a800f8ca8e10268f33757042a2c69797272afdc9c71e1a04a840ca765d5e1b8b->leave($__internal_a800f8ca8e10268f33757042a2c69797272afdc9c71e1a04a840ca765d5e1b8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da7551ae716ad4a63cec188ce573a3f200ec60c32ef22280cc2f45ffd280caea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7551ae716ad4a63cec188ce573a3f200ec60c32ef22280cc2f45ffd280caea->enter($__internal_da7551ae716ad4a63cec188ce573a3f200ec60c32ef22280cc2f45ffd280caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d30d8c8731c7c13216b1472726073135b3e59d1ae75d492d4300ef04bbe1ab33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30d8c8731c7c13216b1472726073135b3e59d1ae75d492d4300ef04bbe1ab33->enter($__internal_d30d8c8731c7c13216b1472726073135b3e59d1ae75d492d4300ef04bbe1ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d30d8c8731c7c13216b1472726073135b3e59d1ae75d492d4300ef04bbe1ab33->leave($__internal_d30d8c8731c7c13216b1472726073135b3e59d1ae75d492d4300ef04bbe1ab33_prof);

        
        $__internal_da7551ae716ad4a63cec188ce573a3f200ec60c32ef22280cc2f45ffd280caea->leave($__internal_da7551ae716ad4a63cec188ce573a3f200ec60c32ef22280cc2f45ffd280caea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a41ee99228d6996245474ef3c434d784828220f1fb21a3208c2f43b2f04ba40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41ee99228d6996245474ef3c434d784828220f1fb21a3208c2f43b2f04ba40f->enter($__internal_a41ee99228d6996245474ef3c434d784828220f1fb21a3208c2f43b2f04ba40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7580ca5170de49973394c20b900483ef7826813ea5e76893b9fcf6e2c047dffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7580ca5170de49973394c20b900483ef7826813ea5e76893b9fcf6e2c047dffe->enter($__internal_7580ca5170de49973394c20b900483ef7826813ea5e76893b9fcf6e2c047dffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7580ca5170de49973394c20b900483ef7826813ea5e76893b9fcf6e2c047dffe->leave($__internal_7580ca5170de49973394c20b900483ef7826813ea5e76893b9fcf6e2c047dffe_prof);

        
        $__internal_a41ee99228d6996245474ef3c434d784828220f1fb21a3208c2f43b2f04ba40f->leave($__internal_a41ee99228d6996245474ef3c434d784828220f1fb21a3208c2f43b2f04ba40f_prof);

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
