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
        $__internal_67301678745643bd3b4508ec5cc2b76827abd0c246d8e67cfbd4f53ef43f81a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67301678745643bd3b4508ec5cc2b76827abd0c246d8e67cfbd4f53ef43f81a7->enter($__internal_67301678745643bd3b4508ec5cc2b76827abd0c246d8e67cfbd4f53ef43f81a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_364ce09673003934d4a712a0367d9d60333f7430c438fd12e408aee36b6a2070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ce09673003934d4a712a0367d9d60333f7430c438fd12e408aee36b6a2070->enter($__internal_364ce09673003934d4a712a0367d9d60333f7430c438fd12e408aee36b6a2070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67301678745643bd3b4508ec5cc2b76827abd0c246d8e67cfbd4f53ef43f81a7->leave($__internal_67301678745643bd3b4508ec5cc2b76827abd0c246d8e67cfbd4f53ef43f81a7_prof);

        
        $__internal_364ce09673003934d4a712a0367d9d60333f7430c438fd12e408aee36b6a2070->leave($__internal_364ce09673003934d4a712a0367d9d60333f7430c438fd12e408aee36b6a2070_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9987cb249291b1face31073d135dc6102f6edac2d1925fb529b1c40e83801ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9987cb249291b1face31073d135dc6102f6edac2d1925fb529b1c40e83801ba6->enter($__internal_9987cb249291b1face31073d135dc6102f6edac2d1925fb529b1c40e83801ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8148b48ae5bc88dbdb6adeac3ca7e25059c2c7b58feb5a0e2f95750ab8b4a9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8148b48ae5bc88dbdb6adeac3ca7e25059c2c7b58feb5a0e2f95750ab8b4a9ee->enter($__internal_8148b48ae5bc88dbdb6adeac3ca7e25059c2c7b58feb5a0e2f95750ab8b4a9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8148b48ae5bc88dbdb6adeac3ca7e25059c2c7b58feb5a0e2f95750ab8b4a9ee->leave($__internal_8148b48ae5bc88dbdb6adeac3ca7e25059c2c7b58feb5a0e2f95750ab8b4a9ee_prof);

        
        $__internal_9987cb249291b1face31073d135dc6102f6edac2d1925fb529b1c40e83801ba6->leave($__internal_9987cb249291b1face31073d135dc6102f6edac2d1925fb529b1c40e83801ba6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da24ac10cc6439b2ff4dc09715ea40f84262666789cedf99653a2529aca3f933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da24ac10cc6439b2ff4dc09715ea40f84262666789cedf99653a2529aca3f933->enter($__internal_da24ac10cc6439b2ff4dc09715ea40f84262666789cedf99653a2529aca3f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_727221a18153ed1e652c99c2d122b2ea08f5978f34c0262370e9eb357bd4d7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727221a18153ed1e652c99c2d122b2ea08f5978f34c0262370e9eb357bd4d7c4->enter($__internal_727221a18153ed1e652c99c2d122b2ea08f5978f34c0262370e9eb357bd4d7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_727221a18153ed1e652c99c2d122b2ea08f5978f34c0262370e9eb357bd4d7c4->leave($__internal_727221a18153ed1e652c99c2d122b2ea08f5978f34c0262370e9eb357bd4d7c4_prof);

        
        $__internal_da24ac10cc6439b2ff4dc09715ea40f84262666789cedf99653a2529aca3f933->leave($__internal_da24ac10cc6439b2ff4dc09715ea40f84262666789cedf99653a2529aca3f933_prof);

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
