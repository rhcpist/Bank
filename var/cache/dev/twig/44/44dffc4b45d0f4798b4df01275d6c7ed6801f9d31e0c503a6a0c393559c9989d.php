<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0544399e3e26e2e4d59ac93c058d82523fe4e471881607d801ec7dd480b16322 extends Twig_Template
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
        $__internal_f3bb1ca3f6ed0dd334e3c47db5ac60c0073fab2d67b421a3972e51fcaaea643d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bb1ca3f6ed0dd334e3c47db5ac60c0073fab2d67b421a3972e51fcaaea643d->enter($__internal_f3bb1ca3f6ed0dd334e3c47db5ac60c0073fab2d67b421a3972e51fcaaea643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d1d5c368bfe3b386b3010aebfd893487f3ebb0a9b50c42ccfa6899f443926689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5c368bfe3b386b3010aebfd893487f3ebb0a9b50c42ccfa6899f443926689->enter($__internal_d1d5c368bfe3b386b3010aebfd893487f3ebb0a9b50c42ccfa6899f443926689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bb1ca3f6ed0dd334e3c47db5ac60c0073fab2d67b421a3972e51fcaaea643d->leave($__internal_f3bb1ca3f6ed0dd334e3c47db5ac60c0073fab2d67b421a3972e51fcaaea643d_prof);

        
        $__internal_d1d5c368bfe3b386b3010aebfd893487f3ebb0a9b50c42ccfa6899f443926689->leave($__internal_d1d5c368bfe3b386b3010aebfd893487f3ebb0a9b50c42ccfa6899f443926689_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_420bccdb7aed8bb82e3b592eb05b13884fb14b5db14503daaa332fa81c1a69d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420bccdb7aed8bb82e3b592eb05b13884fb14b5db14503daaa332fa81c1a69d7->enter($__internal_420bccdb7aed8bb82e3b592eb05b13884fb14b5db14503daaa332fa81c1a69d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e548a1cee160564f1633c84b8f3656d3e6ba5116ee7ade1450d8c59179815bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e548a1cee160564f1633c84b8f3656d3e6ba5116ee7ade1450d8c59179815bb8->enter($__internal_e548a1cee160564f1633c84b8f3656d3e6ba5116ee7ade1450d8c59179815bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e548a1cee160564f1633c84b8f3656d3e6ba5116ee7ade1450d8c59179815bb8->leave($__internal_e548a1cee160564f1633c84b8f3656d3e6ba5116ee7ade1450d8c59179815bb8_prof);

        
        $__internal_420bccdb7aed8bb82e3b592eb05b13884fb14b5db14503daaa332fa81c1a69d7->leave($__internal_420bccdb7aed8bb82e3b592eb05b13884fb14b5db14503daaa332fa81c1a69d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45a025fc7b5f110ee0cf7b3dd8a674903fb3614da475a8f5c6fac8da450fe324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a025fc7b5f110ee0cf7b3dd8a674903fb3614da475a8f5c6fac8da450fe324->enter($__internal_45a025fc7b5f110ee0cf7b3dd8a674903fb3614da475a8f5c6fac8da450fe324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6ddf1138f59af0917405ab5c991a7b4205065478d850ae87172ab36132ea4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ddf1138f59af0917405ab5c991a7b4205065478d850ae87172ab36132ea4a9->enter($__internal_c6ddf1138f59af0917405ab5c991a7b4205065478d850ae87172ab36132ea4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6ddf1138f59af0917405ab5c991a7b4205065478d850ae87172ab36132ea4a9->leave($__internal_c6ddf1138f59af0917405ab5c991a7b4205065478d850ae87172ab36132ea4a9_prof);

        
        $__internal_45a025fc7b5f110ee0cf7b3dd8a674903fb3614da475a8f5c6fac8da450fe324->leave($__internal_45a025fc7b5f110ee0cf7b3dd8a674903fb3614da475a8f5c6fac8da450fe324_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e84bda4a5a2d3f00b83b75d32086a44749a26428faf0d596c1d247227d16d92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84bda4a5a2d3f00b83b75d32086a44749a26428faf0d596c1d247227d16d92c->enter($__internal_e84bda4a5a2d3f00b83b75d32086a44749a26428faf0d596c1d247227d16d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b735754ed26821d06f14906d185487cc0412fab6406c8e24f04b18678fb99d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b735754ed26821d06f14906d185487cc0412fab6406c8e24f04b18678fb99d43->enter($__internal_b735754ed26821d06f14906d185487cc0412fab6406c8e24f04b18678fb99d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b735754ed26821d06f14906d185487cc0412fab6406c8e24f04b18678fb99d43->leave($__internal_b735754ed26821d06f14906d185487cc0412fab6406c8e24f04b18678fb99d43_prof);

        
        $__internal_e84bda4a5a2d3f00b83b75d32086a44749a26428faf0d596c1d247227d16d92c->leave($__internal_e84bda4a5a2d3f00b83b75d32086a44749a26428faf0d596c1d247227d16d92c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
