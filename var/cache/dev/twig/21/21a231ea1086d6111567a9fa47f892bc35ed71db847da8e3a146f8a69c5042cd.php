<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d30ab9ddc827030801d4de385c063d5e2e8c56e6deccf81680dd13666debf464 extends Twig_Template
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
        $__internal_d2b621c99b0976606c2d552f8522c50b9e97d4338fd1746902f6204e6342490a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b621c99b0976606c2d552f8522c50b9e97d4338fd1746902f6204e6342490a->enter($__internal_d2b621c99b0976606c2d552f8522c50b9e97d4338fd1746902f6204e6342490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_246b0615517d2cd6b7b67c305377e081e28ad83d1ad9c57e57fe8ed4f6de565b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246b0615517d2cd6b7b67c305377e081e28ad83d1ad9c57e57fe8ed4f6de565b->enter($__internal_246b0615517d2cd6b7b67c305377e081e28ad83d1ad9c57e57fe8ed4f6de565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b621c99b0976606c2d552f8522c50b9e97d4338fd1746902f6204e6342490a->leave($__internal_d2b621c99b0976606c2d552f8522c50b9e97d4338fd1746902f6204e6342490a_prof);

        
        $__internal_246b0615517d2cd6b7b67c305377e081e28ad83d1ad9c57e57fe8ed4f6de565b->leave($__internal_246b0615517d2cd6b7b67c305377e081e28ad83d1ad9c57e57fe8ed4f6de565b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6517b50dcbf56b309b3734a1ebb1ca1c234d5468132d6dd202d5e0918bc2021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6517b50dcbf56b309b3734a1ebb1ca1c234d5468132d6dd202d5e0918bc2021->enter($__internal_d6517b50dcbf56b309b3734a1ebb1ca1c234d5468132d6dd202d5e0918bc2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a1d24f9e7f409252a99ac8023abd7e2b82535f02d50e79f9a548667c694cf63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1d24f9e7f409252a99ac8023abd7e2b82535f02d50e79f9a548667c694cf63->enter($__internal_2a1d24f9e7f409252a99ac8023abd7e2b82535f02d50e79f9a548667c694cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2a1d24f9e7f409252a99ac8023abd7e2b82535f02d50e79f9a548667c694cf63->leave($__internal_2a1d24f9e7f409252a99ac8023abd7e2b82535f02d50e79f9a548667c694cf63_prof);

        
        $__internal_d6517b50dcbf56b309b3734a1ebb1ca1c234d5468132d6dd202d5e0918bc2021->leave($__internal_d6517b50dcbf56b309b3734a1ebb1ca1c234d5468132d6dd202d5e0918bc2021_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a8c76a289e0c72a1593a11ae5e180d72dfd032240e8e0d7600de7340f541771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c76a289e0c72a1593a11ae5e180d72dfd032240e8e0d7600de7340f541771->enter($__internal_4a8c76a289e0c72a1593a11ae5e180d72dfd032240e8e0d7600de7340f541771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c115e5905f479a8489220c08817dfada1c3e38dedddd0d107b8d946105bc144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c115e5905f479a8489220c08817dfada1c3e38dedddd0d107b8d946105bc144a->enter($__internal_c115e5905f479a8489220c08817dfada1c3e38dedddd0d107b8d946105bc144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c115e5905f479a8489220c08817dfada1c3e38dedddd0d107b8d946105bc144a->leave($__internal_c115e5905f479a8489220c08817dfada1c3e38dedddd0d107b8d946105bc144a_prof);

        
        $__internal_4a8c76a289e0c72a1593a11ae5e180d72dfd032240e8e0d7600de7340f541771->leave($__internal_4a8c76a289e0c72a1593a11ae5e180d72dfd032240e8e0d7600de7340f541771_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96546e886b1cdd0f4f410b18d34debf02f6fcae5960ea948af4d0afa7f7217f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96546e886b1cdd0f4f410b18d34debf02f6fcae5960ea948af4d0afa7f7217f6->enter($__internal_96546e886b1cdd0f4f410b18d34debf02f6fcae5960ea948af4d0afa7f7217f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32d147da1ee36730ce794ce4920b03aaeb2a77a1460a13b5e13aacf4baa1204c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d147da1ee36730ce794ce4920b03aaeb2a77a1460a13b5e13aacf4baa1204c->enter($__internal_32d147da1ee36730ce794ce4920b03aaeb2a77a1460a13b5e13aacf4baa1204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_32d147da1ee36730ce794ce4920b03aaeb2a77a1460a13b5e13aacf4baa1204c->leave($__internal_32d147da1ee36730ce794ce4920b03aaeb2a77a1460a13b5e13aacf4baa1204c_prof);

        
        $__internal_96546e886b1cdd0f4f410b18d34debf02f6fcae5960ea948af4d0afa7f7217f6->leave($__internal_96546e886b1cdd0f4f410b18d34debf02f6fcae5960ea948af4d0afa7f7217f6_prof);

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
