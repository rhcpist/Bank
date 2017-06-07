<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9cca5a307719932cb00cbb6e446f08500100715448073c32b43eedf3b9b1dde4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_71d876f10a8a1b766cb6602a9fcea81a6b7e1ddd390724ab83d37ed468c6e3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d876f10a8a1b766cb6602a9fcea81a6b7e1ddd390724ab83d37ed468c6e3e1->enter($__internal_71d876f10a8a1b766cb6602a9fcea81a6b7e1ddd390724ab83d37ed468c6e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9c908a774760562b8867d5c52bc7a93597760b96f4e315b220e367a48e73ee10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c908a774760562b8867d5c52bc7a93597760b96f4e315b220e367a48e73ee10->enter($__internal_9c908a774760562b8867d5c52bc7a93597760b96f4e315b220e367a48e73ee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d876f10a8a1b766cb6602a9fcea81a6b7e1ddd390724ab83d37ed468c6e3e1->leave($__internal_71d876f10a8a1b766cb6602a9fcea81a6b7e1ddd390724ab83d37ed468c6e3e1_prof);

        
        $__internal_9c908a774760562b8867d5c52bc7a93597760b96f4e315b220e367a48e73ee10->leave($__internal_9c908a774760562b8867d5c52bc7a93597760b96f4e315b220e367a48e73ee10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01fe098e6d7a43526a7175f1f85dba207f9576dbfe4fe4d7fd06b53c93f132e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fe098e6d7a43526a7175f1f85dba207f9576dbfe4fe4d7fd06b53c93f132e9->enter($__internal_01fe098e6d7a43526a7175f1f85dba207f9576dbfe4fe4d7fd06b53c93f132e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa27cfccffb1a35d871a07e4481116baa2ab35ef0bc7b4ea13ab10d4bce16edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa27cfccffb1a35d871a07e4481116baa2ab35ef0bc7b4ea13ab10d4bce16edf->enter($__internal_fa27cfccffb1a35d871a07e4481116baa2ab35ef0bc7b4ea13ab10d4bce16edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fa27cfccffb1a35d871a07e4481116baa2ab35ef0bc7b4ea13ab10d4bce16edf->leave($__internal_fa27cfccffb1a35d871a07e4481116baa2ab35ef0bc7b4ea13ab10d4bce16edf_prof);

        
        $__internal_01fe098e6d7a43526a7175f1f85dba207f9576dbfe4fe4d7fd06b53c93f132e9->leave($__internal_01fe098e6d7a43526a7175f1f85dba207f9576dbfe4fe4d7fd06b53c93f132e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e0d5c82dbe29d07c9a1a9544afbf23451a66359b658600e12c13f60295cf676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0d5c82dbe29d07c9a1a9544afbf23451a66359b658600e12c13f60295cf676->enter($__internal_5e0d5c82dbe29d07c9a1a9544afbf23451a66359b658600e12c13f60295cf676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d547b3f599f8e38e45fdd265fc06624b87eb55902cc78505408ccd19fbbf2a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d547b3f599f8e38e45fdd265fc06624b87eb55902cc78505408ccd19fbbf2a20->enter($__internal_d547b3f599f8e38e45fdd265fc06624b87eb55902cc78505408ccd19fbbf2a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d547b3f599f8e38e45fdd265fc06624b87eb55902cc78505408ccd19fbbf2a20->leave($__internal_d547b3f599f8e38e45fdd265fc06624b87eb55902cc78505408ccd19fbbf2a20_prof);

        
        $__internal_5e0d5c82dbe29d07c9a1a9544afbf23451a66359b658600e12c13f60295cf676->leave($__internal_5e0d5c82dbe29d07c9a1a9544afbf23451a66359b658600e12c13f60295cf676_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71195adc96845e03723807f932dd05b8585786f142e5097c914ee71a73fe5133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71195adc96845e03723807f932dd05b8585786f142e5097c914ee71a73fe5133->enter($__internal_71195adc96845e03723807f932dd05b8585786f142e5097c914ee71a73fe5133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62ee97288766bb2a375ae3802a329330a23b22415aaa395137fd90f844757644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ee97288766bb2a375ae3802a329330a23b22415aaa395137fd90f844757644->enter($__internal_62ee97288766bb2a375ae3802a329330a23b22415aaa395137fd90f844757644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_62ee97288766bb2a375ae3802a329330a23b22415aaa395137fd90f844757644->leave($__internal_62ee97288766bb2a375ae3802a329330a23b22415aaa395137fd90f844757644_prof);

        
        $__internal_71195adc96845e03723807f932dd05b8585786f142e5097c914ee71a73fe5133->leave($__internal_71195adc96845e03723807f932dd05b8585786f142e5097c914ee71a73fe5133_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
