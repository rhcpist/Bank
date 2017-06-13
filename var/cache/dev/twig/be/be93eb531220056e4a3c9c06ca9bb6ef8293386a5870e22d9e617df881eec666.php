<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_769cc6d2f704c155482f8604df1fec71e997fa1f9e5f73c13ff7020591694881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f1d27cf1a83e8c9b3450e0978d092d1f789b836709714b7d093e391d8ef7c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1d27cf1a83e8c9b3450e0978d092d1f789b836709714b7d093e391d8ef7c20->enter($__internal_5f1d27cf1a83e8c9b3450e0978d092d1f789b836709714b7d093e391d8ef7c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d5da320dcffcaf0b22646d3490e9848f5fc8b2ac4083ca96ed0faf327930d148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5da320dcffcaf0b22646d3490e9848f5fc8b2ac4083ca96ed0faf327930d148->enter($__internal_d5da320dcffcaf0b22646d3490e9848f5fc8b2ac4083ca96ed0faf327930d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1d27cf1a83e8c9b3450e0978d092d1f789b836709714b7d093e391d8ef7c20->leave($__internal_5f1d27cf1a83e8c9b3450e0978d092d1f789b836709714b7d093e391d8ef7c20_prof);

        
        $__internal_d5da320dcffcaf0b22646d3490e9848f5fc8b2ac4083ca96ed0faf327930d148->leave($__internal_d5da320dcffcaf0b22646d3490e9848f5fc8b2ac4083ca96ed0faf327930d148_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e0192654b055a3f5a299eca9aa51103682e516a2b3deeb3c7da355ab2aee449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0192654b055a3f5a299eca9aa51103682e516a2b3deeb3c7da355ab2aee449->enter($__internal_2e0192654b055a3f5a299eca9aa51103682e516a2b3deeb3c7da355ab2aee449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e74b3def9de425143bae37a93961bb4d03937992d69b870738853735e1c9f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e74b3def9de425143bae37a93961bb4d03937992d69b870738853735e1c9f2e->enter($__internal_0e74b3def9de425143bae37a93961bb4d03937992d69b870738853735e1c9f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e74b3def9de425143bae37a93961bb4d03937992d69b870738853735e1c9f2e->leave($__internal_0e74b3def9de425143bae37a93961bb4d03937992d69b870738853735e1c9f2e_prof);

        
        $__internal_2e0192654b055a3f5a299eca9aa51103682e516a2b3deeb3c7da355ab2aee449->leave($__internal_2e0192654b055a3f5a299eca9aa51103682e516a2b3deeb3c7da355ab2aee449_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f0845005bdb0c8a79526ccefae7ed6eb02987d6f1c2da364f10d0be16e0d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f0845005bdb0c8a79526ccefae7ed6eb02987d6f1c2da364f10d0be16e0d68->enter($__internal_22f0845005bdb0c8a79526ccefae7ed6eb02987d6f1c2da364f10d0be16e0d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d99064f51b5d1ab67460828d76dcaab6cd118ad7ca921c156af3e60c69fc2360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99064f51b5d1ab67460828d76dcaab6cd118ad7ca921c156af3e60c69fc2360->enter($__internal_d99064f51b5d1ab67460828d76dcaab6cd118ad7ca921c156af3e60c69fc2360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d99064f51b5d1ab67460828d76dcaab6cd118ad7ca921c156af3e60c69fc2360->leave($__internal_d99064f51b5d1ab67460828d76dcaab6cd118ad7ca921c156af3e60c69fc2360_prof);

        
        $__internal_22f0845005bdb0c8a79526ccefae7ed6eb02987d6f1c2da364f10d0be16e0d68->leave($__internal_22f0845005bdb0c8a79526ccefae7ed6eb02987d6f1c2da364f10d0be16e0d68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
