<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0544399e3e26e2e4d59ac93c058d82523fe4e471881607d801ec7dd480b16322 extends Twig_Template
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
        $__internal_0798b3b66155d5e97b43f1b2b0ea396e2c9075da10b2133d5775b109fbe71eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0798b3b66155d5e97b43f1b2b0ea396e2c9075da10b2133d5775b109fbe71eb7->enter($__internal_0798b3b66155d5e97b43f1b2b0ea396e2c9075da10b2133d5775b109fbe71eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a784c7306ed44d76ea57c7065649ffdf85e1a81502cd6f9dc5050044c5367839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a784c7306ed44d76ea57c7065649ffdf85e1a81502cd6f9dc5050044c5367839->enter($__internal_a784c7306ed44d76ea57c7065649ffdf85e1a81502cd6f9dc5050044c5367839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0798b3b66155d5e97b43f1b2b0ea396e2c9075da10b2133d5775b109fbe71eb7->leave($__internal_0798b3b66155d5e97b43f1b2b0ea396e2c9075da10b2133d5775b109fbe71eb7_prof);

        
        $__internal_a784c7306ed44d76ea57c7065649ffdf85e1a81502cd6f9dc5050044c5367839->leave($__internal_a784c7306ed44d76ea57c7065649ffdf85e1a81502cd6f9dc5050044c5367839_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e05e303ebc6e1166b006a13c0bfa9a87f3614aa9d3607ee70186da227fd6f9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05e303ebc6e1166b006a13c0bfa9a87f3614aa9d3607ee70186da227fd6f9f3->enter($__internal_e05e303ebc6e1166b006a13c0bfa9a87f3614aa9d3607ee70186da227fd6f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71e38dbb6e358893def01cc82fc9628f4a62771f477ae2a2477babf58e659149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e38dbb6e358893def01cc82fc9628f4a62771f477ae2a2477babf58e659149->enter($__internal_71e38dbb6e358893def01cc82fc9628f4a62771f477ae2a2477babf58e659149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71e38dbb6e358893def01cc82fc9628f4a62771f477ae2a2477babf58e659149->leave($__internal_71e38dbb6e358893def01cc82fc9628f4a62771f477ae2a2477babf58e659149_prof);

        
        $__internal_e05e303ebc6e1166b006a13c0bfa9a87f3614aa9d3607ee70186da227fd6f9f3->leave($__internal_e05e303ebc6e1166b006a13c0bfa9a87f3614aa9d3607ee70186da227fd6f9f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14c0ca0c443eadea4ead972db397e596c3328b6240feba2718829463be7dbf76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c0ca0c443eadea4ead972db397e596c3328b6240feba2718829463be7dbf76->enter($__internal_14c0ca0c443eadea4ead972db397e596c3328b6240feba2718829463be7dbf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e27d246ff5ac53855d85b012b2e081f5dff0c15672afa79b6a14b344bbf29a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27d246ff5ac53855d85b012b2e081f5dff0c15672afa79b6a14b344bbf29a73->enter($__internal_e27d246ff5ac53855d85b012b2e081f5dff0c15672afa79b6a14b344bbf29a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e27d246ff5ac53855d85b012b2e081f5dff0c15672afa79b6a14b344bbf29a73->leave($__internal_e27d246ff5ac53855d85b012b2e081f5dff0c15672afa79b6a14b344bbf29a73_prof);

        
        $__internal_14c0ca0c443eadea4ead972db397e596c3328b6240feba2718829463be7dbf76->leave($__internal_14c0ca0c443eadea4ead972db397e596c3328b6240feba2718829463be7dbf76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62687ab760b58f9483244309f6d287c1a4a86b9667f669add29b7eebab07c344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62687ab760b58f9483244309f6d287c1a4a86b9667f669add29b7eebab07c344->enter($__internal_62687ab760b58f9483244309f6d287c1a4a86b9667f669add29b7eebab07c344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6eae80619aa74a77bf61db734980578fe5551714aa91da7fd786fedcd77759c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eae80619aa74a77bf61db734980578fe5551714aa91da7fd786fedcd77759c5->enter($__internal_6eae80619aa74a77bf61db734980578fe5551714aa91da7fd786fedcd77759c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6eae80619aa74a77bf61db734980578fe5551714aa91da7fd786fedcd77759c5->leave($__internal_6eae80619aa74a77bf61db734980578fe5551714aa91da7fd786fedcd77759c5_prof);

        
        $__internal_62687ab760b58f9483244309f6d287c1a4a86b9667f669add29b7eebab07c344->leave($__internal_62687ab760b58f9483244309f6d287c1a4a86b9667f669add29b7eebab07c344_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
