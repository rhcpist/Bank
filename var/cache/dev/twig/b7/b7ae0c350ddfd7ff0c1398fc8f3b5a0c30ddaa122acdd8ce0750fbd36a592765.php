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
        $__internal_006655129c80f98497a97b34ef07d30bdcff18a56ae09f70ac6dcbaa9a4c238b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006655129c80f98497a97b34ef07d30bdcff18a56ae09f70ac6dcbaa9a4c238b->enter($__internal_006655129c80f98497a97b34ef07d30bdcff18a56ae09f70ac6dcbaa9a4c238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_76fdcd7e88b577937ac9bf4834ba6f7ce7a0204d01c66c2064587f042fecc16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fdcd7e88b577937ac9bf4834ba6f7ce7a0204d01c66c2064587f042fecc16f->enter($__internal_76fdcd7e88b577937ac9bf4834ba6f7ce7a0204d01c66c2064587f042fecc16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006655129c80f98497a97b34ef07d30bdcff18a56ae09f70ac6dcbaa9a4c238b->leave($__internal_006655129c80f98497a97b34ef07d30bdcff18a56ae09f70ac6dcbaa9a4c238b_prof);

        
        $__internal_76fdcd7e88b577937ac9bf4834ba6f7ce7a0204d01c66c2064587f042fecc16f->leave($__internal_76fdcd7e88b577937ac9bf4834ba6f7ce7a0204d01c66c2064587f042fecc16f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c17979cee06e0cd55c3370b7738a0bce1fe8d8770e02518d03962617621b5fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17979cee06e0cd55c3370b7738a0bce1fe8d8770e02518d03962617621b5fb2->enter($__internal_c17979cee06e0cd55c3370b7738a0bce1fe8d8770e02518d03962617621b5fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_320c6cf9b95103788fc47dc83dea532db451c89c66a616a6bd732ca4bedac2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320c6cf9b95103788fc47dc83dea532db451c89c66a616a6bd732ca4bedac2d6->enter($__internal_320c6cf9b95103788fc47dc83dea532db451c89c66a616a6bd732ca4bedac2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_320c6cf9b95103788fc47dc83dea532db451c89c66a616a6bd732ca4bedac2d6->leave($__internal_320c6cf9b95103788fc47dc83dea532db451c89c66a616a6bd732ca4bedac2d6_prof);

        
        $__internal_c17979cee06e0cd55c3370b7738a0bce1fe8d8770e02518d03962617621b5fb2->leave($__internal_c17979cee06e0cd55c3370b7738a0bce1fe8d8770e02518d03962617621b5fb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_862a26d5e1a431a827b1e12b45673044700889bace0138834fc2c979e6d85b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862a26d5e1a431a827b1e12b45673044700889bace0138834fc2c979e6d85b79->enter($__internal_862a26d5e1a431a827b1e12b45673044700889bace0138834fc2c979e6d85b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6fb1b30d2bea2e3ed225449d8c010f78ca44e5b998f9f8e9b8be2b6149d06d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb1b30d2bea2e3ed225449d8c010f78ca44e5b998f9f8e9b8be2b6149d06d6a->enter($__internal_6fb1b30d2bea2e3ed225449d8c010f78ca44e5b998f9f8e9b8be2b6149d06d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6fb1b30d2bea2e3ed225449d8c010f78ca44e5b998f9f8e9b8be2b6149d06d6a->leave($__internal_6fb1b30d2bea2e3ed225449d8c010f78ca44e5b998f9f8e9b8be2b6149d06d6a_prof);

        
        $__internal_862a26d5e1a431a827b1e12b45673044700889bace0138834fc2c979e6d85b79->leave($__internal_862a26d5e1a431a827b1e12b45673044700889bace0138834fc2c979e6d85b79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_676edadaeb9368112bd129584f6a0fa7ea8badf094af6be18668b9c2e3f2e95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676edadaeb9368112bd129584f6a0fa7ea8badf094af6be18668b9c2e3f2e95f->enter($__internal_676edadaeb9368112bd129584f6a0fa7ea8badf094af6be18668b9c2e3f2e95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20ccb5d1bea91d93966cb87ba80576adf7505a890b85c2b0745c27fa1f1facb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ccb5d1bea91d93966cb87ba80576adf7505a890b85c2b0745c27fa1f1facb5->enter($__internal_20ccb5d1bea91d93966cb87ba80576adf7505a890b85c2b0745c27fa1f1facb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_20ccb5d1bea91d93966cb87ba80576adf7505a890b85c2b0745c27fa1f1facb5->leave($__internal_20ccb5d1bea91d93966cb87ba80576adf7505a890b85c2b0745c27fa1f1facb5_prof);

        
        $__internal_676edadaeb9368112bd129584f6a0fa7ea8badf094af6be18668b9c2e3f2e95f->leave($__internal_676edadaeb9368112bd129584f6a0fa7ea8badf094af6be18668b9c2e3f2e95f_prof);

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
