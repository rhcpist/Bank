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
        $__internal_aaa57f9cf79aa20941d7c29a97d0ddbf8e29d242d71a1c1a2b722617a6fdf7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa57f9cf79aa20941d7c29a97d0ddbf8e29d242d71a1c1a2b722617a6fdf7dd->enter($__internal_aaa57f9cf79aa20941d7c29a97d0ddbf8e29d242d71a1c1a2b722617a6fdf7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d8049a2d6ca1ac3249902ef7054b8d89053e8e1f3f4dcde60ddac3e523686344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8049a2d6ca1ac3249902ef7054b8d89053e8e1f3f4dcde60ddac3e523686344->enter($__internal_d8049a2d6ca1ac3249902ef7054b8d89053e8e1f3f4dcde60ddac3e523686344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa57f9cf79aa20941d7c29a97d0ddbf8e29d242d71a1c1a2b722617a6fdf7dd->leave($__internal_aaa57f9cf79aa20941d7c29a97d0ddbf8e29d242d71a1c1a2b722617a6fdf7dd_prof);

        
        $__internal_d8049a2d6ca1ac3249902ef7054b8d89053e8e1f3f4dcde60ddac3e523686344->leave($__internal_d8049a2d6ca1ac3249902ef7054b8d89053e8e1f3f4dcde60ddac3e523686344_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b45b00a8e05d45512885fd97ed0a5b81f9ab21fbd1564d84d04431f4347f326c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45b00a8e05d45512885fd97ed0a5b81f9ab21fbd1564d84d04431f4347f326c->enter($__internal_b45b00a8e05d45512885fd97ed0a5b81f9ab21fbd1564d84d04431f4347f326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f390dbec0b1fbdade22943eda9aecbc6132bafa59489456a8a8b70d14f904863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f390dbec0b1fbdade22943eda9aecbc6132bafa59489456a8a8b70d14f904863->enter($__internal_f390dbec0b1fbdade22943eda9aecbc6132bafa59489456a8a8b70d14f904863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f390dbec0b1fbdade22943eda9aecbc6132bafa59489456a8a8b70d14f904863->leave($__internal_f390dbec0b1fbdade22943eda9aecbc6132bafa59489456a8a8b70d14f904863_prof);

        
        $__internal_b45b00a8e05d45512885fd97ed0a5b81f9ab21fbd1564d84d04431f4347f326c->leave($__internal_b45b00a8e05d45512885fd97ed0a5b81f9ab21fbd1564d84d04431f4347f326c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b83b47b1795779322e6d8cfb81a38b75a85c7c8ec73e3cd1ab48af675ec41369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83b47b1795779322e6d8cfb81a38b75a85c7c8ec73e3cd1ab48af675ec41369->enter($__internal_b83b47b1795779322e6d8cfb81a38b75a85c7c8ec73e3cd1ab48af675ec41369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f8afe1a7348e61855924f9eae41112e8fe9dc7b1f1a6079abaf7ce4b6ba916d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8afe1a7348e61855924f9eae41112e8fe9dc7b1f1a6079abaf7ce4b6ba916d->enter($__internal_2f8afe1a7348e61855924f9eae41112e8fe9dc7b1f1a6079abaf7ce4b6ba916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2f8afe1a7348e61855924f9eae41112e8fe9dc7b1f1a6079abaf7ce4b6ba916d->leave($__internal_2f8afe1a7348e61855924f9eae41112e8fe9dc7b1f1a6079abaf7ce4b6ba916d_prof);

        
        $__internal_b83b47b1795779322e6d8cfb81a38b75a85c7c8ec73e3cd1ab48af675ec41369->leave($__internal_b83b47b1795779322e6d8cfb81a38b75a85c7c8ec73e3cd1ab48af675ec41369_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1baca2b2f35a4f7ce77c5b1943227ef5eee3e284a94cde2c4e45f7395548a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1baca2b2f35a4f7ce77c5b1943227ef5eee3e284a94cde2c4e45f7395548a86->enter($__internal_f1baca2b2f35a4f7ce77c5b1943227ef5eee3e284a94cde2c4e45f7395548a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef97139f700b7512a53460ec772c707e91bb2686a58fc29a07e192ecb8dd5c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97139f700b7512a53460ec772c707e91bb2686a58fc29a07e192ecb8dd5c16->enter($__internal_ef97139f700b7512a53460ec772c707e91bb2686a58fc29a07e192ecb8dd5c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ef97139f700b7512a53460ec772c707e91bb2686a58fc29a07e192ecb8dd5c16->leave($__internal_ef97139f700b7512a53460ec772c707e91bb2686a58fc29a07e192ecb8dd5c16_prof);

        
        $__internal_f1baca2b2f35a4f7ce77c5b1943227ef5eee3e284a94cde2c4e45f7395548a86->leave($__internal_f1baca2b2f35a4f7ce77c5b1943227ef5eee3e284a94cde2c4e45f7395548a86_prof);

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
