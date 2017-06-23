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
        $__internal_dbf6fcc593555b3f502b1d4ca148a2693ee7d8e44cd59b4c67b8268eda54dc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf6fcc593555b3f502b1d4ca148a2693ee7d8e44cd59b4c67b8268eda54dc6b->enter($__internal_dbf6fcc593555b3f502b1d4ca148a2693ee7d8e44cd59b4c67b8268eda54dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_200003083b3075e450fdaf1eb4ef256f0d96b66bc0346720476cdf481095959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200003083b3075e450fdaf1eb4ef256f0d96b66bc0346720476cdf481095959c->enter($__internal_200003083b3075e450fdaf1eb4ef256f0d96b66bc0346720476cdf481095959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf6fcc593555b3f502b1d4ca148a2693ee7d8e44cd59b4c67b8268eda54dc6b->leave($__internal_dbf6fcc593555b3f502b1d4ca148a2693ee7d8e44cd59b4c67b8268eda54dc6b_prof);

        
        $__internal_200003083b3075e450fdaf1eb4ef256f0d96b66bc0346720476cdf481095959c->leave($__internal_200003083b3075e450fdaf1eb4ef256f0d96b66bc0346720476cdf481095959c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6caa013ca28f47264d478239fdf758e495651f6cea0e87f7e17cd4d826e26f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6caa013ca28f47264d478239fdf758e495651f6cea0e87f7e17cd4d826e26f80->enter($__internal_6caa013ca28f47264d478239fdf758e495651f6cea0e87f7e17cd4d826e26f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60a45bc2816304ee3eb561d9af8abb9b088ae4b2c8933223f370eb7969de4866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a45bc2816304ee3eb561d9af8abb9b088ae4b2c8933223f370eb7969de4866->enter($__internal_60a45bc2816304ee3eb561d9af8abb9b088ae4b2c8933223f370eb7969de4866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_60a45bc2816304ee3eb561d9af8abb9b088ae4b2c8933223f370eb7969de4866->leave($__internal_60a45bc2816304ee3eb561d9af8abb9b088ae4b2c8933223f370eb7969de4866_prof);

        
        $__internal_6caa013ca28f47264d478239fdf758e495651f6cea0e87f7e17cd4d826e26f80->leave($__internal_6caa013ca28f47264d478239fdf758e495651f6cea0e87f7e17cd4d826e26f80_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c79058a07836e067f2d5080e96b6fb6d7b8b77fb24bf8d9b86b6fe92dbba205d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79058a07836e067f2d5080e96b6fb6d7b8b77fb24bf8d9b86b6fe92dbba205d->enter($__internal_c79058a07836e067f2d5080e96b6fb6d7b8b77fb24bf8d9b86b6fe92dbba205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae92614c375ba66544a4f0486a44c19b46edfcd02d8103c44ca975a54c2ac04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae92614c375ba66544a4f0486a44c19b46edfcd02d8103c44ca975a54c2ac04e->enter($__internal_ae92614c375ba66544a4f0486a44c19b46edfcd02d8103c44ca975a54c2ac04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ae92614c375ba66544a4f0486a44c19b46edfcd02d8103c44ca975a54c2ac04e->leave($__internal_ae92614c375ba66544a4f0486a44c19b46edfcd02d8103c44ca975a54c2ac04e_prof);

        
        $__internal_c79058a07836e067f2d5080e96b6fb6d7b8b77fb24bf8d9b86b6fe92dbba205d->leave($__internal_c79058a07836e067f2d5080e96b6fb6d7b8b77fb24bf8d9b86b6fe92dbba205d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fbda719b5b61d81668221a9b1b77e83978283b1682e287924ef6bb0d3bc3861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbda719b5b61d81668221a9b1b77e83978283b1682e287924ef6bb0d3bc3861->enter($__internal_6fbda719b5b61d81668221a9b1b77e83978283b1682e287924ef6bb0d3bc3861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f4d809e41f87bd2e9f128d93e728e579aefdd6b1c420148a54c2ec24e4d7704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4d809e41f87bd2e9f128d93e728e579aefdd6b1c420148a54c2ec24e4d7704->enter($__internal_5f4d809e41f87bd2e9f128d93e728e579aefdd6b1c420148a54c2ec24e4d7704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5f4d809e41f87bd2e9f128d93e728e579aefdd6b1c420148a54c2ec24e4d7704->leave($__internal_5f4d809e41f87bd2e9f128d93e728e579aefdd6b1c420148a54c2ec24e4d7704_prof);

        
        $__internal_6fbda719b5b61d81668221a9b1b77e83978283b1682e287924ef6bb0d3bc3861->leave($__internal_6fbda719b5b61d81668221a9b1b77e83978283b1682e287924ef6bb0d3bc3861_prof);

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
