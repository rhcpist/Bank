<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b48f7d6bed29620f885ea2e80001353162e7ee617ab5a8b1cc2bf9692841ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_086fd7eb9177ec05f8b05485053d8669a9cd0b6558299ff324cae9ff8c09256a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086fd7eb9177ec05f8b05485053d8669a9cd0b6558299ff324cae9ff8c09256a->enter($__internal_086fd7eb9177ec05f8b05485053d8669a9cd0b6558299ff324cae9ff8c09256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8240187861769eaeab18f6ab6ec982d62dc991c69fe6a458a0211ec2c37d731f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8240187861769eaeab18f6ab6ec982d62dc991c69fe6a458a0211ec2c37d731f->enter($__internal_8240187861769eaeab18f6ab6ec982d62dc991c69fe6a458a0211ec2c37d731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086fd7eb9177ec05f8b05485053d8669a9cd0b6558299ff324cae9ff8c09256a->leave($__internal_086fd7eb9177ec05f8b05485053d8669a9cd0b6558299ff324cae9ff8c09256a_prof);

        
        $__internal_8240187861769eaeab18f6ab6ec982d62dc991c69fe6a458a0211ec2c37d731f->leave($__internal_8240187861769eaeab18f6ab6ec982d62dc991c69fe6a458a0211ec2c37d731f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_862ababd3ebefefc8152d3d40e39fcc807ad32e4c4b0c7c2f0d9852fb4138bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862ababd3ebefefc8152d3d40e39fcc807ad32e4c4b0c7c2f0d9852fb4138bce->enter($__internal_862ababd3ebefefc8152d3d40e39fcc807ad32e4c4b0c7c2f0d9852fb4138bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f42ab5ec6374fbffb9f0e3c0a2c63afca0bbb59c215b9ce1b56578b82dcb9b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42ab5ec6374fbffb9f0e3c0a2c63afca0bbb59c215b9ce1b56578b82dcb9b79->enter($__internal_f42ab5ec6374fbffb9f0e3c0a2c63afca0bbb59c215b9ce1b56578b82dcb9b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f42ab5ec6374fbffb9f0e3c0a2c63afca0bbb59c215b9ce1b56578b82dcb9b79->leave($__internal_f42ab5ec6374fbffb9f0e3c0a2c63afca0bbb59c215b9ce1b56578b82dcb9b79_prof);

        
        $__internal_862ababd3ebefefc8152d3d40e39fcc807ad32e4c4b0c7c2f0d9852fb4138bce->leave($__internal_862ababd3ebefefc8152d3d40e39fcc807ad32e4c4b0c7c2f0d9852fb4138bce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cde10be668c743f7609a1de2c30ebd8f18497f8eccd1abe55338c7ba2ee7416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cde10be668c743f7609a1de2c30ebd8f18497f8eccd1abe55338c7ba2ee7416->enter($__internal_5cde10be668c743f7609a1de2c30ebd8f18497f8eccd1abe55338c7ba2ee7416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9eae865cea0a07cde8eae55f8cf17081669aed08c3a80e5f216b14ef1a0e9a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eae865cea0a07cde8eae55f8cf17081669aed08c3a80e5f216b14ef1a0e9a8f->enter($__internal_9eae865cea0a07cde8eae55f8cf17081669aed08c3a80e5f216b14ef1a0e9a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9eae865cea0a07cde8eae55f8cf17081669aed08c3a80e5f216b14ef1a0e9a8f->leave($__internal_9eae865cea0a07cde8eae55f8cf17081669aed08c3a80e5f216b14ef1a0e9a8f_prof);

        
        $__internal_5cde10be668c743f7609a1de2c30ebd8f18497f8eccd1abe55338c7ba2ee7416->leave($__internal_5cde10be668c743f7609a1de2c30ebd8f18497f8eccd1abe55338c7ba2ee7416_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7896077824c8bf08f795e1b93754cf18b0ed98c14f283e85ecd70b1382c79084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7896077824c8bf08f795e1b93754cf18b0ed98c14f283e85ecd70b1382c79084->enter($__internal_7896077824c8bf08f795e1b93754cf18b0ed98c14f283e85ecd70b1382c79084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97015d3dbf4ea97d862a5187d3cf1dd4236aee5f1b17607463644be2b34e7eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97015d3dbf4ea97d862a5187d3cf1dd4236aee5f1b17607463644be2b34e7eb6->enter($__internal_97015d3dbf4ea97d862a5187d3cf1dd4236aee5f1b17607463644be2b34e7eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_97015d3dbf4ea97d862a5187d3cf1dd4236aee5f1b17607463644be2b34e7eb6->leave($__internal_97015d3dbf4ea97d862a5187d3cf1dd4236aee5f1b17607463644be2b34e7eb6_prof);

        
        $__internal_7896077824c8bf08f795e1b93754cf18b0ed98c14f283e85ecd70b1382c79084->leave($__internal_7896077824c8bf08f795e1b93754cf18b0ed98c14f283e85ecd70b1382c79084_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
