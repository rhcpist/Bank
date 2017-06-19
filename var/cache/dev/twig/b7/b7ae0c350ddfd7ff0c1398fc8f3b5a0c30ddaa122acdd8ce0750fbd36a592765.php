<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1a83d9ac5910bcd4889105414487468a2f361aaf4133e33220a209ee818acb4a extends Twig_Template
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
        $__internal_8393612b6d3f9fa38e14cac5afbf3f45952c437ff6e85b71f903008ae6bf6393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8393612b6d3f9fa38e14cac5afbf3f45952c437ff6e85b71f903008ae6bf6393->enter($__internal_8393612b6d3f9fa38e14cac5afbf3f45952c437ff6e85b71f903008ae6bf6393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_34666cdcae76833a42c7d9d8f468174a0f290cc321dd32c0e5e0902f87348ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34666cdcae76833a42c7d9d8f468174a0f290cc321dd32c0e5e0902f87348ffe->enter($__internal_34666cdcae76833a42c7d9d8f468174a0f290cc321dd32c0e5e0902f87348ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8393612b6d3f9fa38e14cac5afbf3f45952c437ff6e85b71f903008ae6bf6393->leave($__internal_8393612b6d3f9fa38e14cac5afbf3f45952c437ff6e85b71f903008ae6bf6393_prof);

        
        $__internal_34666cdcae76833a42c7d9d8f468174a0f290cc321dd32c0e5e0902f87348ffe->leave($__internal_34666cdcae76833a42c7d9d8f468174a0f290cc321dd32c0e5e0902f87348ffe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5643822ed0489b3444d5ab8dfc3fa10d53895490a3a67387f31cdf6d614d4fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5643822ed0489b3444d5ab8dfc3fa10d53895490a3a67387f31cdf6d614d4fc0->enter($__internal_5643822ed0489b3444d5ab8dfc3fa10d53895490a3a67387f31cdf6d614d4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5110d410620de3e0dbee923c00f8461a19ed34fcbfc9af8fafce25ff40de607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5110d410620de3e0dbee923c00f8461a19ed34fcbfc9af8fafce25ff40de607->enter($__internal_d5110d410620de3e0dbee923c00f8461a19ed34fcbfc9af8fafce25ff40de607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d5110d410620de3e0dbee923c00f8461a19ed34fcbfc9af8fafce25ff40de607->leave($__internal_d5110d410620de3e0dbee923c00f8461a19ed34fcbfc9af8fafce25ff40de607_prof);

        
        $__internal_5643822ed0489b3444d5ab8dfc3fa10d53895490a3a67387f31cdf6d614d4fc0->leave($__internal_5643822ed0489b3444d5ab8dfc3fa10d53895490a3a67387f31cdf6d614d4fc0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec6df47ff27d0173b6ec2c6bea175522ca3b65d97ec129a7e6d99ef88e857767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6df47ff27d0173b6ec2c6bea175522ca3b65d97ec129a7e6d99ef88e857767->enter($__internal_ec6df47ff27d0173b6ec2c6bea175522ca3b65d97ec129a7e6d99ef88e857767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee7fa233b3177a98da50da37542f6a802e48cf6962feb8eaf5fdcbf70e66b0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7fa233b3177a98da50da37542f6a802e48cf6962feb8eaf5fdcbf70e66b0d9->enter($__internal_ee7fa233b3177a98da50da37542f6a802e48cf6962feb8eaf5fdcbf70e66b0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ee7fa233b3177a98da50da37542f6a802e48cf6962feb8eaf5fdcbf70e66b0d9->leave($__internal_ee7fa233b3177a98da50da37542f6a802e48cf6962feb8eaf5fdcbf70e66b0d9_prof);

        
        $__internal_ec6df47ff27d0173b6ec2c6bea175522ca3b65d97ec129a7e6d99ef88e857767->leave($__internal_ec6df47ff27d0173b6ec2c6bea175522ca3b65d97ec129a7e6d99ef88e857767_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ccaaa4cda5bcb61bb1c77550afc0e927e0e9e2405d886469793eb1b20e6a0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccaaa4cda5bcb61bb1c77550afc0e927e0e9e2405d886469793eb1b20e6a0d8->enter($__internal_9ccaaa4cda5bcb61bb1c77550afc0e927e0e9e2405d886469793eb1b20e6a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32df90c9b717c8095127a1f954ccca56c29c189a94af89d77e3d93b1d4f24286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32df90c9b717c8095127a1f954ccca56c29c189a94af89d77e3d93b1d4f24286->enter($__internal_32df90c9b717c8095127a1f954ccca56c29c189a94af89d77e3d93b1d4f24286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_32df90c9b717c8095127a1f954ccca56c29c189a94af89d77e3d93b1d4f24286->leave($__internal_32df90c9b717c8095127a1f954ccca56c29c189a94af89d77e3d93b1d4f24286_prof);

        
        $__internal_9ccaaa4cda5bcb61bb1c77550afc0e927e0e9e2405d886469793eb1b20e6a0d8->leave($__internal_9ccaaa4cda5bcb61bb1c77550afc0e927e0e9e2405d886469793eb1b20e6a0d8_prof);

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
