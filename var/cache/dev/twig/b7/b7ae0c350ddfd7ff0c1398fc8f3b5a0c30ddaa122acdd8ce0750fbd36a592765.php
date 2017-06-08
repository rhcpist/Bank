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
        $__internal_7a79a7e612c63ae68a651dc70ffe9279f8e851a14aaea97ad9d2e3eb167aa64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a79a7e612c63ae68a651dc70ffe9279f8e851a14aaea97ad9d2e3eb167aa64a->enter($__internal_7a79a7e612c63ae68a651dc70ffe9279f8e851a14aaea97ad9d2e3eb167aa64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1f91a841745643c841985d383cd9b71890afbc2e7f3d9134ca01bae94f2dd146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f91a841745643c841985d383cd9b71890afbc2e7f3d9134ca01bae94f2dd146->enter($__internal_1f91a841745643c841985d383cd9b71890afbc2e7f3d9134ca01bae94f2dd146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a79a7e612c63ae68a651dc70ffe9279f8e851a14aaea97ad9d2e3eb167aa64a->leave($__internal_7a79a7e612c63ae68a651dc70ffe9279f8e851a14aaea97ad9d2e3eb167aa64a_prof);

        
        $__internal_1f91a841745643c841985d383cd9b71890afbc2e7f3d9134ca01bae94f2dd146->leave($__internal_1f91a841745643c841985d383cd9b71890afbc2e7f3d9134ca01bae94f2dd146_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69d3dc11ff549a4050db7bfba59ad59a65a23663c7d15696190e34b16141cdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d3dc11ff549a4050db7bfba59ad59a65a23663c7d15696190e34b16141cdbf->enter($__internal_69d3dc11ff549a4050db7bfba59ad59a65a23663c7d15696190e34b16141cdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71b74623c5fed7da1dd57213db196ebf6199fbeee955293e045f098f1538b38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b74623c5fed7da1dd57213db196ebf6199fbeee955293e045f098f1538b38e->enter($__internal_71b74623c5fed7da1dd57213db196ebf6199fbeee955293e045f098f1538b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_71b74623c5fed7da1dd57213db196ebf6199fbeee955293e045f098f1538b38e->leave($__internal_71b74623c5fed7da1dd57213db196ebf6199fbeee955293e045f098f1538b38e_prof);

        
        $__internal_69d3dc11ff549a4050db7bfba59ad59a65a23663c7d15696190e34b16141cdbf->leave($__internal_69d3dc11ff549a4050db7bfba59ad59a65a23663c7d15696190e34b16141cdbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43736ae0c92d6cffff4dac6fac60c9f207192e4c752ecb9ce2f919e01e15217f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43736ae0c92d6cffff4dac6fac60c9f207192e4c752ecb9ce2f919e01e15217f->enter($__internal_43736ae0c92d6cffff4dac6fac60c9f207192e4c752ecb9ce2f919e01e15217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0ce6944bdf5b80788bd8df2796ead1830d067c4a58d17cee4a09a889f304cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ce6944bdf5b80788bd8df2796ead1830d067c4a58d17cee4a09a889f304cbe->enter($__internal_a0ce6944bdf5b80788bd8df2796ead1830d067c4a58d17cee4a09a889f304cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a0ce6944bdf5b80788bd8df2796ead1830d067c4a58d17cee4a09a889f304cbe->leave($__internal_a0ce6944bdf5b80788bd8df2796ead1830d067c4a58d17cee4a09a889f304cbe_prof);

        
        $__internal_43736ae0c92d6cffff4dac6fac60c9f207192e4c752ecb9ce2f919e01e15217f->leave($__internal_43736ae0c92d6cffff4dac6fac60c9f207192e4c752ecb9ce2f919e01e15217f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21132a907e50341f2ad72809c5ba46803cd9e440819c63eb0028c538ac63b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21132a907e50341f2ad72809c5ba46803cd9e440819c63eb0028c538ac63b26e->enter($__internal_21132a907e50341f2ad72809c5ba46803cd9e440819c63eb0028c538ac63b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b50f1a965d82ef2a0323e5e24019ff54cec7090a791692c7917cfc5ee955f3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50f1a965d82ef2a0323e5e24019ff54cec7090a791692c7917cfc5ee955f3ca->enter($__internal_b50f1a965d82ef2a0323e5e24019ff54cec7090a791692c7917cfc5ee955f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b50f1a965d82ef2a0323e5e24019ff54cec7090a791692c7917cfc5ee955f3ca->leave($__internal_b50f1a965d82ef2a0323e5e24019ff54cec7090a791692c7917cfc5ee955f3ca_prof);

        
        $__internal_21132a907e50341f2ad72809c5ba46803cd9e440819c63eb0028c538ac63b26e->leave($__internal_21132a907e50341f2ad72809c5ba46803cd9e440819c63eb0028c538ac63b26e_prof);

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
