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
        $__internal_29acdd9367c7799a8d931fa0c37df38d3fd50cfd6ae965977d93136d0877d188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29acdd9367c7799a8d931fa0c37df38d3fd50cfd6ae965977d93136d0877d188->enter($__internal_29acdd9367c7799a8d931fa0c37df38d3fd50cfd6ae965977d93136d0877d188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_302f2346df4d6cbbd0dedd1bd667cca9559b5fa7dcb8ab4f804ffcb55f350998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302f2346df4d6cbbd0dedd1bd667cca9559b5fa7dcb8ab4f804ffcb55f350998->enter($__internal_302f2346df4d6cbbd0dedd1bd667cca9559b5fa7dcb8ab4f804ffcb55f350998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29acdd9367c7799a8d931fa0c37df38d3fd50cfd6ae965977d93136d0877d188->leave($__internal_29acdd9367c7799a8d931fa0c37df38d3fd50cfd6ae965977d93136d0877d188_prof);

        
        $__internal_302f2346df4d6cbbd0dedd1bd667cca9559b5fa7dcb8ab4f804ffcb55f350998->leave($__internal_302f2346df4d6cbbd0dedd1bd667cca9559b5fa7dcb8ab4f804ffcb55f350998_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f0364875abcd987e3663a20d2b1e0aa2dc89594f8d4a8862195f47c71cb9186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0364875abcd987e3663a20d2b1e0aa2dc89594f8d4a8862195f47c71cb9186->enter($__internal_6f0364875abcd987e3663a20d2b1e0aa2dc89594f8d4a8862195f47c71cb9186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e49cded9bdbdcb152b7d11baa900ea1740f47f0a60bd028d5c965039bfb21851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49cded9bdbdcb152b7d11baa900ea1740f47f0a60bd028d5c965039bfb21851->enter($__internal_e49cded9bdbdcb152b7d11baa900ea1740f47f0a60bd028d5c965039bfb21851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e49cded9bdbdcb152b7d11baa900ea1740f47f0a60bd028d5c965039bfb21851->leave($__internal_e49cded9bdbdcb152b7d11baa900ea1740f47f0a60bd028d5c965039bfb21851_prof);

        
        $__internal_6f0364875abcd987e3663a20d2b1e0aa2dc89594f8d4a8862195f47c71cb9186->leave($__internal_6f0364875abcd987e3663a20d2b1e0aa2dc89594f8d4a8862195f47c71cb9186_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_824f00da967135de0bc59d27145c4d2ff8fc0b8247789e964e68607b672a627d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824f00da967135de0bc59d27145c4d2ff8fc0b8247789e964e68607b672a627d->enter($__internal_824f00da967135de0bc59d27145c4d2ff8fc0b8247789e964e68607b672a627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb690bc0c3f640a0a17a8032083c7daa7b5218ddc79efa7786f306596850d1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb690bc0c3f640a0a17a8032083c7daa7b5218ddc79efa7786f306596850d1eb->enter($__internal_eb690bc0c3f640a0a17a8032083c7daa7b5218ddc79efa7786f306596850d1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eb690bc0c3f640a0a17a8032083c7daa7b5218ddc79efa7786f306596850d1eb->leave($__internal_eb690bc0c3f640a0a17a8032083c7daa7b5218ddc79efa7786f306596850d1eb_prof);

        
        $__internal_824f00da967135de0bc59d27145c4d2ff8fc0b8247789e964e68607b672a627d->leave($__internal_824f00da967135de0bc59d27145c4d2ff8fc0b8247789e964e68607b672a627d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d92f8be421d1037902e870bc3403c495f0509f6e1d4af6fda398c78d8e07b9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f8be421d1037902e870bc3403c495f0509f6e1d4af6fda398c78d8e07b9c9->enter($__internal_d92f8be421d1037902e870bc3403c495f0509f6e1d4af6fda398c78d8e07b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3210816bd0172eb830b22fa7ce455f5fe974fbe0a3dda3299348a1a9b876050e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3210816bd0172eb830b22fa7ce455f5fe974fbe0a3dda3299348a1a9b876050e->enter($__internal_3210816bd0172eb830b22fa7ce455f5fe974fbe0a3dda3299348a1a9b876050e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3210816bd0172eb830b22fa7ce455f5fe974fbe0a3dda3299348a1a9b876050e->leave($__internal_3210816bd0172eb830b22fa7ce455f5fe974fbe0a3dda3299348a1a9b876050e_prof);

        
        $__internal_d92f8be421d1037902e870bc3403c495f0509f6e1d4af6fda398c78d8e07b9c9->leave($__internal_d92f8be421d1037902e870bc3403c495f0509f6e1d4af6fda398c78d8e07b9c9_prof);

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
