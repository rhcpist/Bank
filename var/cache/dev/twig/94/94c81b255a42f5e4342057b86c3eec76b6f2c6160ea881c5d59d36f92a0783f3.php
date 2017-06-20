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
        $__internal_eaa109e294747b60d0599f26997b1320064ed7e068d0e1926ff3ce0d7b298cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa109e294747b60d0599f26997b1320064ed7e068d0e1926ff3ce0d7b298cd0->enter($__internal_eaa109e294747b60d0599f26997b1320064ed7e068d0e1926ff3ce0d7b298cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ebae8cf4ca340b3ca7e59ad7660678a88aeaa6902dbfd3bc08a4e1f66fb73767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebae8cf4ca340b3ca7e59ad7660678a88aeaa6902dbfd3bc08a4e1f66fb73767->enter($__internal_ebae8cf4ca340b3ca7e59ad7660678a88aeaa6902dbfd3bc08a4e1f66fb73767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa109e294747b60d0599f26997b1320064ed7e068d0e1926ff3ce0d7b298cd0->leave($__internal_eaa109e294747b60d0599f26997b1320064ed7e068d0e1926ff3ce0d7b298cd0_prof);

        
        $__internal_ebae8cf4ca340b3ca7e59ad7660678a88aeaa6902dbfd3bc08a4e1f66fb73767->leave($__internal_ebae8cf4ca340b3ca7e59ad7660678a88aeaa6902dbfd3bc08a4e1f66fb73767_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8767edae9924c14361fe4eee171b8d4260dd54fe3f3a1675956170313367c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8767edae9924c14361fe4eee171b8d4260dd54fe3f3a1675956170313367c99->enter($__internal_c8767edae9924c14361fe4eee171b8d4260dd54fe3f3a1675956170313367c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ac723c2c1ff8eefc439430ad5e82dd99f332c9c8503f01636f512afd380645b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac723c2c1ff8eefc439430ad5e82dd99f332c9c8503f01636f512afd380645b->enter($__internal_5ac723c2c1ff8eefc439430ad5e82dd99f332c9c8503f01636f512afd380645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ac723c2c1ff8eefc439430ad5e82dd99f332c9c8503f01636f512afd380645b->leave($__internal_5ac723c2c1ff8eefc439430ad5e82dd99f332c9c8503f01636f512afd380645b_prof);

        
        $__internal_c8767edae9924c14361fe4eee171b8d4260dd54fe3f3a1675956170313367c99->leave($__internal_c8767edae9924c14361fe4eee171b8d4260dd54fe3f3a1675956170313367c99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28375070846b36a2f91fbcfc505ff5fe7f0e1ec9350cccca232861314b21db7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28375070846b36a2f91fbcfc505ff5fe7f0e1ec9350cccca232861314b21db7b->enter($__internal_28375070846b36a2f91fbcfc505ff5fe7f0e1ec9350cccca232861314b21db7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb404175f0b18f5de8f5539cd3f3923e69358d7269141759f98e2f8111e9d9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb404175f0b18f5de8f5539cd3f3923e69358d7269141759f98e2f8111e9d9f0->enter($__internal_fb404175f0b18f5de8f5539cd3f3923e69358d7269141759f98e2f8111e9d9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb404175f0b18f5de8f5539cd3f3923e69358d7269141759f98e2f8111e9d9f0->leave($__internal_fb404175f0b18f5de8f5539cd3f3923e69358d7269141759f98e2f8111e9d9f0_prof);

        
        $__internal_28375070846b36a2f91fbcfc505ff5fe7f0e1ec9350cccca232861314b21db7b->leave($__internal_28375070846b36a2f91fbcfc505ff5fe7f0e1ec9350cccca232861314b21db7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14d357a2c14efe9b8d2064cc1188a5c044af9941fe787c4dfd72a7f0d9517394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d357a2c14efe9b8d2064cc1188a5c044af9941fe787c4dfd72a7f0d9517394->enter($__internal_14d357a2c14efe9b8d2064cc1188a5c044af9941fe787c4dfd72a7f0d9517394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_487a30c82515076f95ddeb6c15bd4e80f9a9eea9c3e123f2ce5e792364b1f03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487a30c82515076f95ddeb6c15bd4e80f9a9eea9c3e123f2ce5e792364b1f03b->enter($__internal_487a30c82515076f95ddeb6c15bd4e80f9a9eea9c3e123f2ce5e792364b1f03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_487a30c82515076f95ddeb6c15bd4e80f9a9eea9c3e123f2ce5e792364b1f03b->leave($__internal_487a30c82515076f95ddeb6c15bd4e80f9a9eea9c3e123f2ce5e792364b1f03b_prof);

        
        $__internal_14d357a2c14efe9b8d2064cc1188a5c044af9941fe787c4dfd72a7f0d9517394->leave($__internal_14d357a2c14efe9b8d2064cc1188a5c044af9941fe787c4dfd72a7f0d9517394_prof);

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
