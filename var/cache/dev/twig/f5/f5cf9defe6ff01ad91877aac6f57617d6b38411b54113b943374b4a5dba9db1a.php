<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6fcadea0b5a46e8107ab8bfa0fe1d4460646f63fd36389c9e8ebff28b327ffe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6e07eafcbb7f8f1b8ca042858aa11fb2c44a3687ac9f42feb5c9c09bbdc67b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e07eafcbb7f8f1b8ca042858aa11fb2c44a3687ac9f42feb5c9c09bbdc67b5->enter($__internal_b6e07eafcbb7f8f1b8ca042858aa11fb2c44a3687ac9f42feb5c9c09bbdc67b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_de90806888d4f5cd2a1974006c88f96f467f2e925a2e4e9afe0620f6e65e2088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de90806888d4f5cd2a1974006c88f96f467f2e925a2e4e9afe0620f6e65e2088->enter($__internal_de90806888d4f5cd2a1974006c88f96f467f2e925a2e4e9afe0620f6e65e2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e07eafcbb7f8f1b8ca042858aa11fb2c44a3687ac9f42feb5c9c09bbdc67b5->leave($__internal_b6e07eafcbb7f8f1b8ca042858aa11fb2c44a3687ac9f42feb5c9c09bbdc67b5_prof);

        
        $__internal_de90806888d4f5cd2a1974006c88f96f467f2e925a2e4e9afe0620f6e65e2088->leave($__internal_de90806888d4f5cd2a1974006c88f96f467f2e925a2e4e9afe0620f6e65e2088_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa21fb4a4963f38cdd3703a23ed35e67e7a396b12521e1ffe6c394a942757c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa21fb4a4963f38cdd3703a23ed35e67e7a396b12521e1ffe6c394a942757c00->enter($__internal_aa21fb4a4963f38cdd3703a23ed35e67e7a396b12521e1ffe6c394a942757c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e28501bdf95a41245c634b8d8587bcfe25dd25a8e61d156de5a239bf9ef6ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28501bdf95a41245c634b8d8587bcfe25dd25a8e61d156de5a239bf9ef6ffac->enter($__internal_e28501bdf95a41245c634b8d8587bcfe25dd25a8e61d156de5a239bf9ef6ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e28501bdf95a41245c634b8d8587bcfe25dd25a8e61d156de5a239bf9ef6ffac->leave($__internal_e28501bdf95a41245c634b8d8587bcfe25dd25a8e61d156de5a239bf9ef6ffac_prof);

        
        $__internal_aa21fb4a4963f38cdd3703a23ed35e67e7a396b12521e1ffe6c394a942757c00->leave($__internal_aa21fb4a4963f38cdd3703a23ed35e67e7a396b12521e1ffe6c394a942757c00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7650813234e4e301c3cfac9d6d8ea7c69877093949b26594dacd6b65bf5a5248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7650813234e4e301c3cfac9d6d8ea7c69877093949b26594dacd6b65bf5a5248->enter($__internal_7650813234e4e301c3cfac9d6d8ea7c69877093949b26594dacd6b65bf5a5248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_397d0e8c84c2c21d84d40a2223a2a7b32433cefd5299349ebe4523d9da979c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397d0e8c84c2c21d84d40a2223a2a7b32433cefd5299349ebe4523d9da979c19->enter($__internal_397d0e8c84c2c21d84d40a2223a2a7b32433cefd5299349ebe4523d9da979c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_397d0e8c84c2c21d84d40a2223a2a7b32433cefd5299349ebe4523d9da979c19->leave($__internal_397d0e8c84c2c21d84d40a2223a2a7b32433cefd5299349ebe4523d9da979c19_prof);

        
        $__internal_7650813234e4e301c3cfac9d6d8ea7c69877093949b26594dacd6b65bf5a5248->leave($__internal_7650813234e4e301c3cfac9d6d8ea7c69877093949b26594dacd6b65bf5a5248_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
