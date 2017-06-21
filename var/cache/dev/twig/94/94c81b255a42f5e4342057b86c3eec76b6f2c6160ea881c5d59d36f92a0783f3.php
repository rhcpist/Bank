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
        $__internal_609f96741137cf732fbd6dc1d3a92b5f67476d6569b7a130d93ee4b4a8d2aff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609f96741137cf732fbd6dc1d3a92b5f67476d6569b7a130d93ee4b4a8d2aff3->enter($__internal_609f96741137cf732fbd6dc1d3a92b5f67476d6569b7a130d93ee4b4a8d2aff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ae2490193a7a312f7fdc848655cfee5fba0f60b7b7b5d841867beb08c7495cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2490193a7a312f7fdc848655cfee5fba0f60b7b7b5d841867beb08c7495cf7->enter($__internal_ae2490193a7a312f7fdc848655cfee5fba0f60b7b7b5d841867beb08c7495cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609f96741137cf732fbd6dc1d3a92b5f67476d6569b7a130d93ee4b4a8d2aff3->leave($__internal_609f96741137cf732fbd6dc1d3a92b5f67476d6569b7a130d93ee4b4a8d2aff3_prof);

        
        $__internal_ae2490193a7a312f7fdc848655cfee5fba0f60b7b7b5d841867beb08c7495cf7->leave($__internal_ae2490193a7a312f7fdc848655cfee5fba0f60b7b7b5d841867beb08c7495cf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f80bfeb1366646c01f20f8a0583b895564246a99bd3367ce7513df0d2f205169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80bfeb1366646c01f20f8a0583b895564246a99bd3367ce7513df0d2f205169->enter($__internal_f80bfeb1366646c01f20f8a0583b895564246a99bd3367ce7513df0d2f205169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46a093ce6ba7ea1ef202470a42ebdc9544091e18fc57606ccb1e3d7890d1291c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a093ce6ba7ea1ef202470a42ebdc9544091e18fc57606ccb1e3d7890d1291c->enter($__internal_46a093ce6ba7ea1ef202470a42ebdc9544091e18fc57606ccb1e3d7890d1291c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46a093ce6ba7ea1ef202470a42ebdc9544091e18fc57606ccb1e3d7890d1291c->leave($__internal_46a093ce6ba7ea1ef202470a42ebdc9544091e18fc57606ccb1e3d7890d1291c_prof);

        
        $__internal_f80bfeb1366646c01f20f8a0583b895564246a99bd3367ce7513df0d2f205169->leave($__internal_f80bfeb1366646c01f20f8a0583b895564246a99bd3367ce7513df0d2f205169_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02656a7f3aeee0855ec38e5950819e15b4efc0d292ec36dac1750587d5124284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02656a7f3aeee0855ec38e5950819e15b4efc0d292ec36dac1750587d5124284->enter($__internal_02656a7f3aeee0855ec38e5950819e15b4efc0d292ec36dac1750587d5124284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6074961893216af8dac9542f2cb7a1af9a8487bc339137c159a6558b1132edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6074961893216af8dac9542f2cb7a1af9a8487bc339137c159a6558b1132edf->enter($__internal_f6074961893216af8dac9542f2cb7a1af9a8487bc339137c159a6558b1132edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6074961893216af8dac9542f2cb7a1af9a8487bc339137c159a6558b1132edf->leave($__internal_f6074961893216af8dac9542f2cb7a1af9a8487bc339137c159a6558b1132edf_prof);

        
        $__internal_02656a7f3aeee0855ec38e5950819e15b4efc0d292ec36dac1750587d5124284->leave($__internal_02656a7f3aeee0855ec38e5950819e15b4efc0d292ec36dac1750587d5124284_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ad48de4b460fa6f4c5d8626aa45ca4f2f6f3254034dc6c19e264449abba7b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad48de4b460fa6f4c5d8626aa45ca4f2f6f3254034dc6c19e264449abba7b27->enter($__internal_6ad48de4b460fa6f4c5d8626aa45ca4f2f6f3254034dc6c19e264449abba7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7fedbe69fbd5947d87e24af2d02dba858b0270315aed4b6116781a089f8ada9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fedbe69fbd5947d87e24af2d02dba858b0270315aed4b6116781a089f8ada9->enter($__internal_f7fedbe69fbd5947d87e24af2d02dba858b0270315aed4b6116781a089f8ada9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f7fedbe69fbd5947d87e24af2d02dba858b0270315aed4b6116781a089f8ada9->leave($__internal_f7fedbe69fbd5947d87e24af2d02dba858b0270315aed4b6116781a089f8ada9_prof);

        
        $__internal_6ad48de4b460fa6f4c5d8626aa45ca4f2f6f3254034dc6c19e264449abba7b27->leave($__internal_6ad48de4b460fa6f4c5d8626aa45ca4f2f6f3254034dc6c19e264449abba7b27_prof);

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
