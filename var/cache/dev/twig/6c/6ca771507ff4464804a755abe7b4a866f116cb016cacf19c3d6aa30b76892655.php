<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_362fa066204f80f44ce40d9e5211707b9fc848a5f74294e4bee8ba57ba7189a2 extends Twig_Template
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
        $__internal_8fed3539fc219b7811b7b1689d2eabece959e6704fb6f9c2ef02d03db2ee33a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fed3539fc219b7811b7b1689d2eabece959e6704fb6f9c2ef02d03db2ee33a6->enter($__internal_8fed3539fc219b7811b7b1689d2eabece959e6704fb6f9c2ef02d03db2ee33a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e091022830a8b533f1086b826324ac925f9a1567c1b167e9d3d55371a18a08d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e091022830a8b533f1086b826324ac925f9a1567c1b167e9d3d55371a18a08d6->enter($__internal_e091022830a8b533f1086b826324ac925f9a1567c1b167e9d3d55371a18a08d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fed3539fc219b7811b7b1689d2eabece959e6704fb6f9c2ef02d03db2ee33a6->leave($__internal_8fed3539fc219b7811b7b1689d2eabece959e6704fb6f9c2ef02d03db2ee33a6_prof);

        
        $__internal_e091022830a8b533f1086b826324ac925f9a1567c1b167e9d3d55371a18a08d6->leave($__internal_e091022830a8b533f1086b826324ac925f9a1567c1b167e9d3d55371a18a08d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30054b04b100240ffd360bfc43dbe2853a91820000292247beb5f7c890beb2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30054b04b100240ffd360bfc43dbe2853a91820000292247beb5f7c890beb2f3->enter($__internal_30054b04b100240ffd360bfc43dbe2853a91820000292247beb5f7c890beb2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b00ab37e0ca6cf9ad1c6eef49c7d4e224607bf048f010cba91bfdabccbd0ac9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00ab37e0ca6cf9ad1c6eef49c7d4e224607bf048f010cba91bfdabccbd0ac9d->enter($__internal_b00ab37e0ca6cf9ad1c6eef49c7d4e224607bf048f010cba91bfdabccbd0ac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b00ab37e0ca6cf9ad1c6eef49c7d4e224607bf048f010cba91bfdabccbd0ac9d->leave($__internal_b00ab37e0ca6cf9ad1c6eef49c7d4e224607bf048f010cba91bfdabccbd0ac9d_prof);

        
        $__internal_30054b04b100240ffd360bfc43dbe2853a91820000292247beb5f7c890beb2f3->leave($__internal_30054b04b100240ffd360bfc43dbe2853a91820000292247beb5f7c890beb2f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5db5858e4ba4292c116ac5b9671907b4f69e8c3573ed2d2b352d3567e5f3b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5db5858e4ba4292c116ac5b9671907b4f69e8c3573ed2d2b352d3567e5f3b2c->enter($__internal_c5db5858e4ba4292c116ac5b9671907b4f69e8c3573ed2d2b352d3567e5f3b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b53229be87960e504444cf96fedf244332e65758f699eb3a90abba1ef9ca26a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53229be87960e504444cf96fedf244332e65758f699eb3a90abba1ef9ca26a6->enter($__internal_b53229be87960e504444cf96fedf244332e65758f699eb3a90abba1ef9ca26a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b53229be87960e504444cf96fedf244332e65758f699eb3a90abba1ef9ca26a6->leave($__internal_b53229be87960e504444cf96fedf244332e65758f699eb3a90abba1ef9ca26a6_prof);

        
        $__internal_c5db5858e4ba4292c116ac5b9671907b4f69e8c3573ed2d2b352d3567e5f3b2c->leave($__internal_c5db5858e4ba4292c116ac5b9671907b4f69e8c3573ed2d2b352d3567e5f3b2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64251899d14bf36cad8e5120eec2311731e50e5e5f99779715bbd7e5b5a6ee53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64251899d14bf36cad8e5120eec2311731e50e5e5f99779715bbd7e5b5a6ee53->enter($__internal_64251899d14bf36cad8e5120eec2311731e50e5e5f99779715bbd7e5b5a6ee53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6da27287e859441e49733653417c325a9d8cc55a4618a343a04a07e2784f949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6da27287e859441e49733653417c325a9d8cc55a4618a343a04a07e2784f949->enter($__internal_c6da27287e859441e49733653417c325a9d8cc55a4618a343a04a07e2784f949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6da27287e859441e49733653417c325a9d8cc55a4618a343a04a07e2784f949->leave($__internal_c6da27287e859441e49733653417c325a9d8cc55a4618a343a04a07e2784f949_prof);

        
        $__internal_64251899d14bf36cad8e5120eec2311731e50e5e5f99779715bbd7e5b5a6ee53->leave($__internal_64251899d14bf36cad8e5120eec2311731e50e5e5f99779715bbd7e5b5a6ee53_prof);

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
