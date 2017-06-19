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
        $__internal_fd2de27a1051653af867eeae686ed70302968e77d2a17d5ca47d19f4c47ca04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2de27a1051653af867eeae686ed70302968e77d2a17d5ca47d19f4c47ca04b->enter($__internal_fd2de27a1051653af867eeae686ed70302968e77d2a17d5ca47d19f4c47ca04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_af751f4f26101a6257b135f58a15212475312a61b805aff889a55050045be416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af751f4f26101a6257b135f58a15212475312a61b805aff889a55050045be416->enter($__internal_af751f4f26101a6257b135f58a15212475312a61b805aff889a55050045be416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2de27a1051653af867eeae686ed70302968e77d2a17d5ca47d19f4c47ca04b->leave($__internal_fd2de27a1051653af867eeae686ed70302968e77d2a17d5ca47d19f4c47ca04b_prof);

        
        $__internal_af751f4f26101a6257b135f58a15212475312a61b805aff889a55050045be416->leave($__internal_af751f4f26101a6257b135f58a15212475312a61b805aff889a55050045be416_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d959224724095affe9bc763b80a58da11393f01755967b127ddd52a33836a310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d959224724095affe9bc763b80a58da11393f01755967b127ddd52a33836a310->enter($__internal_d959224724095affe9bc763b80a58da11393f01755967b127ddd52a33836a310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb7b7ddc8d2423e2591bd81927e20a60aba9b154bf8207f9ef64bb379b7538dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7b7ddc8d2423e2591bd81927e20a60aba9b154bf8207f9ef64bb379b7538dd->enter($__internal_bb7b7ddc8d2423e2591bd81927e20a60aba9b154bf8207f9ef64bb379b7538dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bb7b7ddc8d2423e2591bd81927e20a60aba9b154bf8207f9ef64bb379b7538dd->leave($__internal_bb7b7ddc8d2423e2591bd81927e20a60aba9b154bf8207f9ef64bb379b7538dd_prof);

        
        $__internal_d959224724095affe9bc763b80a58da11393f01755967b127ddd52a33836a310->leave($__internal_d959224724095affe9bc763b80a58da11393f01755967b127ddd52a33836a310_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac65ed98fc100d60b120ba36acdaf7a7a60e6ef476cc1c6932a6894decf69d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac65ed98fc100d60b120ba36acdaf7a7a60e6ef476cc1c6932a6894decf69d81->enter($__internal_ac65ed98fc100d60b120ba36acdaf7a7a60e6ef476cc1c6932a6894decf69d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f5af025849141c1bd539837ba6e6d8c1b2691120bc281ab944fc060ca9db117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5af025849141c1bd539837ba6e6d8c1b2691120bc281ab944fc060ca9db117->enter($__internal_6f5af025849141c1bd539837ba6e6d8c1b2691120bc281ab944fc060ca9db117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f5af025849141c1bd539837ba6e6d8c1b2691120bc281ab944fc060ca9db117->leave($__internal_6f5af025849141c1bd539837ba6e6d8c1b2691120bc281ab944fc060ca9db117_prof);

        
        $__internal_ac65ed98fc100d60b120ba36acdaf7a7a60e6ef476cc1c6932a6894decf69d81->leave($__internal_ac65ed98fc100d60b120ba36acdaf7a7a60e6ef476cc1c6932a6894decf69d81_prof);

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
