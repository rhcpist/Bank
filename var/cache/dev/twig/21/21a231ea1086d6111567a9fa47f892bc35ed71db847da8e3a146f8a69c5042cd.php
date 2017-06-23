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
        $__internal_206a5f2f426e43b336e0b0b1627d244a605437f6be6284b1c982a44565fae4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206a5f2f426e43b336e0b0b1627d244a605437f6be6284b1c982a44565fae4d7->enter($__internal_206a5f2f426e43b336e0b0b1627d244a605437f6be6284b1c982a44565fae4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1af4f47ee57017bad69f8bdf3b7cb06802975ba90bb8739c88b8aad394b78c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af4f47ee57017bad69f8bdf3b7cb06802975ba90bb8739c88b8aad394b78c7e->enter($__internal_1af4f47ee57017bad69f8bdf3b7cb06802975ba90bb8739c88b8aad394b78c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206a5f2f426e43b336e0b0b1627d244a605437f6be6284b1c982a44565fae4d7->leave($__internal_206a5f2f426e43b336e0b0b1627d244a605437f6be6284b1c982a44565fae4d7_prof);

        
        $__internal_1af4f47ee57017bad69f8bdf3b7cb06802975ba90bb8739c88b8aad394b78c7e->leave($__internal_1af4f47ee57017bad69f8bdf3b7cb06802975ba90bb8739c88b8aad394b78c7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0364b5347fd9d6eaa9493446e5f3c95712366c6d1da7808fa8faf7576a98b070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0364b5347fd9d6eaa9493446e5f3c95712366c6d1da7808fa8faf7576a98b070->enter($__internal_0364b5347fd9d6eaa9493446e5f3c95712366c6d1da7808fa8faf7576a98b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfab38245983208afc2a27cc3d77a9b9ead3ae3666cee22f662d9585ec7b4897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfab38245983208afc2a27cc3d77a9b9ead3ae3666cee22f662d9585ec7b4897->enter($__internal_bfab38245983208afc2a27cc3d77a9b9ead3ae3666cee22f662d9585ec7b4897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bfab38245983208afc2a27cc3d77a9b9ead3ae3666cee22f662d9585ec7b4897->leave($__internal_bfab38245983208afc2a27cc3d77a9b9ead3ae3666cee22f662d9585ec7b4897_prof);

        
        $__internal_0364b5347fd9d6eaa9493446e5f3c95712366c6d1da7808fa8faf7576a98b070->leave($__internal_0364b5347fd9d6eaa9493446e5f3c95712366c6d1da7808fa8faf7576a98b070_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9985a1878a544983b1278bf561cf0addabd2168628d936d1bc5a8554bac630fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9985a1878a544983b1278bf561cf0addabd2168628d936d1bc5a8554bac630fc->enter($__internal_9985a1878a544983b1278bf561cf0addabd2168628d936d1bc5a8554bac630fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3103e2b5b8afa0841bb00783e5af8989b876065967009ff028f0919ba37c881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3103e2b5b8afa0841bb00783e5af8989b876065967009ff028f0919ba37c881->enter($__internal_d3103e2b5b8afa0841bb00783e5af8989b876065967009ff028f0919ba37c881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d3103e2b5b8afa0841bb00783e5af8989b876065967009ff028f0919ba37c881->leave($__internal_d3103e2b5b8afa0841bb00783e5af8989b876065967009ff028f0919ba37c881_prof);

        
        $__internal_9985a1878a544983b1278bf561cf0addabd2168628d936d1bc5a8554bac630fc->leave($__internal_9985a1878a544983b1278bf561cf0addabd2168628d936d1bc5a8554bac630fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_913bf9ee09f125ffe338bcba47cb459a29dcc7d3f5ce644b08f3afd8f0528d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913bf9ee09f125ffe338bcba47cb459a29dcc7d3f5ce644b08f3afd8f0528d02->enter($__internal_913bf9ee09f125ffe338bcba47cb459a29dcc7d3f5ce644b08f3afd8f0528d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d889d955612a9678f678a271dc9a781ad08b1c08e9119641d1893721319edc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d889d955612a9678f678a271dc9a781ad08b1c08e9119641d1893721319edc1f->enter($__internal_d889d955612a9678f678a271dc9a781ad08b1c08e9119641d1893721319edc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d889d955612a9678f678a271dc9a781ad08b1c08e9119641d1893721319edc1f->leave($__internal_d889d955612a9678f678a271dc9a781ad08b1c08e9119641d1893721319edc1f_prof);

        
        $__internal_913bf9ee09f125ffe338bcba47cb459a29dcc7d3f5ce644b08f3afd8f0528d02->leave($__internal_913bf9ee09f125ffe338bcba47cb459a29dcc7d3f5ce644b08f3afd8f0528d02_prof);

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
