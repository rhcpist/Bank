<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b48f7d6bed29620f885ea2e80001353162e7ee617ab5a8b1cc2bf9692841ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_09db4dd25ffe0addeab500fdca6ad0a03e900ad77d46dfd57c129b288083700d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09db4dd25ffe0addeab500fdca6ad0a03e900ad77d46dfd57c129b288083700d->enter($__internal_09db4dd25ffe0addeab500fdca6ad0a03e900ad77d46dfd57c129b288083700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_637e06c1fb44101ac3faccef57387f5b515e2780b577e2107297e9476fe49219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637e06c1fb44101ac3faccef57387f5b515e2780b577e2107297e9476fe49219->enter($__internal_637e06c1fb44101ac3faccef57387f5b515e2780b577e2107297e9476fe49219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09db4dd25ffe0addeab500fdca6ad0a03e900ad77d46dfd57c129b288083700d->leave($__internal_09db4dd25ffe0addeab500fdca6ad0a03e900ad77d46dfd57c129b288083700d_prof);

        
        $__internal_637e06c1fb44101ac3faccef57387f5b515e2780b577e2107297e9476fe49219->leave($__internal_637e06c1fb44101ac3faccef57387f5b515e2780b577e2107297e9476fe49219_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d8a89e2bf62c6d3db09401dcc413f02ffb03bfe51ede4d723f148612f32416b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8a89e2bf62c6d3db09401dcc413f02ffb03bfe51ede4d723f148612f32416b->enter($__internal_4d8a89e2bf62c6d3db09401dcc413f02ffb03bfe51ede4d723f148612f32416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b291eac19e72868569ca5b49df6a6c76c126e1ac0f3916320953b8018deaf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b291eac19e72868569ca5b49df6a6c76c126e1ac0f3916320953b8018deaf24->enter($__internal_6b291eac19e72868569ca5b49df6a6c76c126e1ac0f3916320953b8018deaf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b291eac19e72868569ca5b49df6a6c76c126e1ac0f3916320953b8018deaf24->leave($__internal_6b291eac19e72868569ca5b49df6a6c76c126e1ac0f3916320953b8018deaf24_prof);

        
        $__internal_4d8a89e2bf62c6d3db09401dcc413f02ffb03bfe51ede4d723f148612f32416b->leave($__internal_4d8a89e2bf62c6d3db09401dcc413f02ffb03bfe51ede4d723f148612f32416b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edc9cd6b2a8e495bbb6382ace92cd3dd94a55618bc8e28f5ed921da222cadbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc9cd6b2a8e495bbb6382ace92cd3dd94a55618bc8e28f5ed921da222cadbf8->enter($__internal_edc9cd6b2a8e495bbb6382ace92cd3dd94a55618bc8e28f5ed921da222cadbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d904d91d54fe6f67f19bad5782ae468ceb0c0098ddfcbd4155ef32420543e906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d904d91d54fe6f67f19bad5782ae468ceb0c0098ddfcbd4155ef32420543e906->enter($__internal_d904d91d54fe6f67f19bad5782ae468ceb0c0098ddfcbd4155ef32420543e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d904d91d54fe6f67f19bad5782ae468ceb0c0098ddfcbd4155ef32420543e906->leave($__internal_d904d91d54fe6f67f19bad5782ae468ceb0c0098ddfcbd4155ef32420543e906_prof);

        
        $__internal_edc9cd6b2a8e495bbb6382ace92cd3dd94a55618bc8e28f5ed921da222cadbf8->leave($__internal_edc9cd6b2a8e495bbb6382ace92cd3dd94a55618bc8e28f5ed921da222cadbf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e8d3925dd0dade4f602bb403caedb2cd2b4b7be5d9776665b3da988bc1f41cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8d3925dd0dade4f602bb403caedb2cd2b4b7be5d9776665b3da988bc1f41cd->enter($__internal_7e8d3925dd0dade4f602bb403caedb2cd2b4b7be5d9776665b3da988bc1f41cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_829da3e9280e9ea74e8b5195a385ab267613a4409b646155ee4fd016d82ded65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829da3e9280e9ea74e8b5195a385ab267613a4409b646155ee4fd016d82ded65->enter($__internal_829da3e9280e9ea74e8b5195a385ab267613a4409b646155ee4fd016d82ded65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_829da3e9280e9ea74e8b5195a385ab267613a4409b646155ee4fd016d82ded65->leave($__internal_829da3e9280e9ea74e8b5195a385ab267613a4409b646155ee4fd016d82ded65_prof);

        
        $__internal_7e8d3925dd0dade4f602bb403caedb2cd2b4b7be5d9776665b3da988bc1f41cd->leave($__internal_7e8d3925dd0dade4f602bb403caedb2cd2b4b7be5d9776665b3da988bc1f41cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
