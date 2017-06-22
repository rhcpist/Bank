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
        $__internal_f29a4d5cff7e14018eca25a7e8eca4aad4d5fa6ac7b7fe931cb5616d75faf761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29a4d5cff7e14018eca25a7e8eca4aad4d5fa6ac7b7fe931cb5616d75faf761->enter($__internal_f29a4d5cff7e14018eca25a7e8eca4aad4d5fa6ac7b7fe931cb5616d75faf761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_70d19ae32d8b532a63ce2a4665e93d623dd38bcd4816ec6e7f83703450d40680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d19ae32d8b532a63ce2a4665e93d623dd38bcd4816ec6e7f83703450d40680->enter($__internal_70d19ae32d8b532a63ce2a4665e93d623dd38bcd4816ec6e7f83703450d40680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29a4d5cff7e14018eca25a7e8eca4aad4d5fa6ac7b7fe931cb5616d75faf761->leave($__internal_f29a4d5cff7e14018eca25a7e8eca4aad4d5fa6ac7b7fe931cb5616d75faf761_prof);

        
        $__internal_70d19ae32d8b532a63ce2a4665e93d623dd38bcd4816ec6e7f83703450d40680->leave($__internal_70d19ae32d8b532a63ce2a4665e93d623dd38bcd4816ec6e7f83703450d40680_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c21663a5230e98865c37d01a942cf5cccd1180afb967ad727096001632bc3323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21663a5230e98865c37d01a942cf5cccd1180afb967ad727096001632bc3323->enter($__internal_c21663a5230e98865c37d01a942cf5cccd1180afb967ad727096001632bc3323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6797118f0680af128eea1df779091aa63afcd3063cb58a893528714c8e7549f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6797118f0680af128eea1df779091aa63afcd3063cb58a893528714c8e7549f->enter($__internal_a6797118f0680af128eea1df779091aa63afcd3063cb58a893528714c8e7549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a6797118f0680af128eea1df779091aa63afcd3063cb58a893528714c8e7549f->leave($__internal_a6797118f0680af128eea1df779091aa63afcd3063cb58a893528714c8e7549f_prof);

        
        $__internal_c21663a5230e98865c37d01a942cf5cccd1180afb967ad727096001632bc3323->leave($__internal_c21663a5230e98865c37d01a942cf5cccd1180afb967ad727096001632bc3323_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6165b2e71cd14a42690ed7c3e289c0588fe0fe7aa930b84304b98e2914c8c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6165b2e71cd14a42690ed7c3e289c0588fe0fe7aa930b84304b98e2914c8c32->enter($__internal_c6165b2e71cd14a42690ed7c3e289c0588fe0fe7aa930b84304b98e2914c8c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_107991c96dbbbdb7c8ddbf7ea69b10c8a347d860f8911de15fade23ebb8b5ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107991c96dbbbdb7c8ddbf7ea69b10c8a347d860f8911de15fade23ebb8b5ad5->enter($__internal_107991c96dbbbdb7c8ddbf7ea69b10c8a347d860f8911de15fade23ebb8b5ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_107991c96dbbbdb7c8ddbf7ea69b10c8a347d860f8911de15fade23ebb8b5ad5->leave($__internal_107991c96dbbbdb7c8ddbf7ea69b10c8a347d860f8911de15fade23ebb8b5ad5_prof);

        
        $__internal_c6165b2e71cd14a42690ed7c3e289c0588fe0fe7aa930b84304b98e2914c8c32->leave($__internal_c6165b2e71cd14a42690ed7c3e289c0588fe0fe7aa930b84304b98e2914c8c32_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e81207a78365a1dfc40dcc537bcc7c75feee571c9fce545f29571f36e841293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e81207a78365a1dfc40dcc537bcc7c75feee571c9fce545f29571f36e841293->enter($__internal_4e81207a78365a1dfc40dcc537bcc7c75feee571c9fce545f29571f36e841293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90523a1c2d0ab225ac0d406cfaa541bd99f43be22aeba661d3cb8642dbdcffa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90523a1c2d0ab225ac0d406cfaa541bd99f43be22aeba661d3cb8642dbdcffa0->enter($__internal_90523a1c2d0ab225ac0d406cfaa541bd99f43be22aeba661d3cb8642dbdcffa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_90523a1c2d0ab225ac0d406cfaa541bd99f43be22aeba661d3cb8642dbdcffa0->leave($__internal_90523a1c2d0ab225ac0d406cfaa541bd99f43be22aeba661d3cb8642dbdcffa0_prof);

        
        $__internal_4e81207a78365a1dfc40dcc537bcc7c75feee571c9fce545f29571f36e841293->leave($__internal_4e81207a78365a1dfc40dcc537bcc7c75feee571c9fce545f29571f36e841293_prof);

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
