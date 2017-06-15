<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bfd9770bfa6bb368e088d6b8a2005628fb8e854548fde2f999fa79427087a555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a5479d11ae717fa06532ebe3ace8653f5d82e8f105f99fda70b0f5f1716bc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5479d11ae717fa06532ebe3ace8653f5d82e8f105f99fda70b0f5f1716bc31->enter($__internal_1a5479d11ae717fa06532ebe3ace8653f5d82e8f105f99fda70b0f5f1716bc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_295aed0dfe5e648f991ab541fc71a7e7a803f21a75866ba75297c0baba8e2ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295aed0dfe5e648f991ab541fc71a7e7a803f21a75866ba75297c0baba8e2ac4->enter($__internal_295aed0dfe5e648f991ab541fc71a7e7a803f21a75866ba75297c0baba8e2ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5479d11ae717fa06532ebe3ace8653f5d82e8f105f99fda70b0f5f1716bc31->leave($__internal_1a5479d11ae717fa06532ebe3ace8653f5d82e8f105f99fda70b0f5f1716bc31_prof);

        
        $__internal_295aed0dfe5e648f991ab541fc71a7e7a803f21a75866ba75297c0baba8e2ac4->leave($__internal_295aed0dfe5e648f991ab541fc71a7e7a803f21a75866ba75297c0baba8e2ac4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e4594ad8e1b45754212a979edaf4d1b4559458e91c8797c822cd12dfebea13f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4594ad8e1b45754212a979edaf4d1b4559458e91c8797c822cd12dfebea13f0->enter($__internal_e4594ad8e1b45754212a979edaf4d1b4559458e91c8797c822cd12dfebea13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c1abccf29e48d2d23dc1559b32178ba455fde77721f8b16d3d2b6d39f4fb3785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1abccf29e48d2d23dc1559b32178ba455fde77721f8b16d3d2b6d39f4fb3785->enter($__internal_c1abccf29e48d2d23dc1559b32178ba455fde77721f8b16d3d2b6d39f4fb3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c1abccf29e48d2d23dc1559b32178ba455fde77721f8b16d3d2b6d39f4fb3785->leave($__internal_c1abccf29e48d2d23dc1559b32178ba455fde77721f8b16d3d2b6d39f4fb3785_prof);

        
        $__internal_e4594ad8e1b45754212a979edaf4d1b4559458e91c8797c822cd12dfebea13f0->leave($__internal_e4594ad8e1b45754212a979edaf4d1b4559458e91c8797c822cd12dfebea13f0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a9d72912301138fb01974e520062401d22205692cb37d96c0f023c9356825ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9d72912301138fb01974e520062401d22205692cb37d96c0f023c9356825ae->enter($__internal_0a9d72912301138fb01974e520062401d22205692cb37d96c0f023c9356825ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5694cd327c45703daa83a49c44673b5741dd9838bacb0cefbca16090612e42e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5694cd327c45703daa83a49c44673b5741dd9838bacb0cefbca16090612e42e6->enter($__internal_5694cd327c45703daa83a49c44673b5741dd9838bacb0cefbca16090612e42e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5694cd327c45703daa83a49c44673b5741dd9838bacb0cefbca16090612e42e6->leave($__internal_5694cd327c45703daa83a49c44673b5741dd9838bacb0cefbca16090612e42e6_prof);

        
        $__internal_0a9d72912301138fb01974e520062401d22205692cb37d96c0f023c9356825ae->leave($__internal_0a9d72912301138fb01974e520062401d22205692cb37d96c0f023c9356825ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
