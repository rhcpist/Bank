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
        $__internal_be83e5d6f17367031f95664d6c4abbcc3344f711fddf0f7d14185e5119b96fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be83e5d6f17367031f95664d6c4abbcc3344f711fddf0f7d14185e5119b96fcb->enter($__internal_be83e5d6f17367031f95664d6c4abbcc3344f711fddf0f7d14185e5119b96fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ea913496d1cf6368984b95c02d6108ab2cb87eea8f98d77c7da16207d236f006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea913496d1cf6368984b95c02d6108ab2cb87eea8f98d77c7da16207d236f006->enter($__internal_ea913496d1cf6368984b95c02d6108ab2cb87eea8f98d77c7da16207d236f006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be83e5d6f17367031f95664d6c4abbcc3344f711fddf0f7d14185e5119b96fcb->leave($__internal_be83e5d6f17367031f95664d6c4abbcc3344f711fddf0f7d14185e5119b96fcb_prof);

        
        $__internal_ea913496d1cf6368984b95c02d6108ab2cb87eea8f98d77c7da16207d236f006->leave($__internal_ea913496d1cf6368984b95c02d6108ab2cb87eea8f98d77c7da16207d236f006_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba8b5dc25a99cdf21cad36544fe65417a4d4d2160fc0b15c8a637f70a44f6f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8b5dc25a99cdf21cad36544fe65417a4d4d2160fc0b15c8a637f70a44f6f76->enter($__internal_ba8b5dc25a99cdf21cad36544fe65417a4d4d2160fc0b15c8a637f70a44f6f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c608b10cc3b3e7916cdc069ebbc73d36c2cb83255f109229d193c4b7ae8d92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c608b10cc3b3e7916cdc069ebbc73d36c2cb83255f109229d193c4b7ae8d92a->enter($__internal_0c608b10cc3b3e7916cdc069ebbc73d36c2cb83255f109229d193c4b7ae8d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c608b10cc3b3e7916cdc069ebbc73d36c2cb83255f109229d193c4b7ae8d92a->leave($__internal_0c608b10cc3b3e7916cdc069ebbc73d36c2cb83255f109229d193c4b7ae8d92a_prof);

        
        $__internal_ba8b5dc25a99cdf21cad36544fe65417a4d4d2160fc0b15c8a637f70a44f6f76->leave($__internal_ba8b5dc25a99cdf21cad36544fe65417a4d4d2160fc0b15c8a637f70a44f6f76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5adaad8570ad3ac06ad3261bc849324f612018a5abb6b2133cf1694e945aea55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adaad8570ad3ac06ad3261bc849324f612018a5abb6b2133cf1694e945aea55->enter($__internal_5adaad8570ad3ac06ad3261bc849324f612018a5abb6b2133cf1694e945aea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab371ff373d972053ba3b6100c3ac92928facaacf7c9619fe484e297e0d1a77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab371ff373d972053ba3b6100c3ac92928facaacf7c9619fe484e297e0d1a77e->enter($__internal_ab371ff373d972053ba3b6100c3ac92928facaacf7c9619fe484e297e0d1a77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab371ff373d972053ba3b6100c3ac92928facaacf7c9619fe484e297e0d1a77e->leave($__internal_ab371ff373d972053ba3b6100c3ac92928facaacf7c9619fe484e297e0d1a77e_prof);

        
        $__internal_5adaad8570ad3ac06ad3261bc849324f612018a5abb6b2133cf1694e945aea55->leave($__internal_5adaad8570ad3ac06ad3261bc849324f612018a5abb6b2133cf1694e945aea55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46dfc181a1b147743d5a6928e70d3843b0ad9ef502a41eb5f02b25836fec7fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dfc181a1b147743d5a6928e70d3843b0ad9ef502a41eb5f02b25836fec7fac->enter($__internal_46dfc181a1b147743d5a6928e70d3843b0ad9ef502a41eb5f02b25836fec7fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a6e704140e5c8f8bea3320f7d8a54ab7b0305e68497af2afbc3129d09f37635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6e704140e5c8f8bea3320f7d8a54ab7b0305e68497af2afbc3129d09f37635->enter($__internal_8a6e704140e5c8f8bea3320f7d8a54ab7b0305e68497af2afbc3129d09f37635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8a6e704140e5c8f8bea3320f7d8a54ab7b0305e68497af2afbc3129d09f37635->leave($__internal_8a6e704140e5c8f8bea3320f7d8a54ab7b0305e68497af2afbc3129d09f37635_prof);

        
        $__internal_46dfc181a1b147743d5a6928e70d3843b0ad9ef502a41eb5f02b25836fec7fac->leave($__internal_46dfc181a1b147743d5a6928e70d3843b0ad9ef502a41eb5f02b25836fec7fac_prof);

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
