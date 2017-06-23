<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9b40d42b8c9c4546e184bacc4459e1471e8747b48831411dfb9459ee7fb1fda8 extends Twig_Template
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
        $__internal_955fa7afbdf94240c039df59b9aabeb1b2dae9692c692679766254b8de6fbdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955fa7afbdf94240c039df59b9aabeb1b2dae9692c692679766254b8de6fbdb7->enter($__internal_955fa7afbdf94240c039df59b9aabeb1b2dae9692c692679766254b8de6fbdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c5a4718beae11abcfc38727b9aca872a494c0f84a23351c1646751a5168b2849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4718beae11abcfc38727b9aca872a494c0f84a23351c1646751a5168b2849->enter($__internal_c5a4718beae11abcfc38727b9aca872a494c0f84a23351c1646751a5168b2849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955fa7afbdf94240c039df59b9aabeb1b2dae9692c692679766254b8de6fbdb7->leave($__internal_955fa7afbdf94240c039df59b9aabeb1b2dae9692c692679766254b8de6fbdb7_prof);

        
        $__internal_c5a4718beae11abcfc38727b9aca872a494c0f84a23351c1646751a5168b2849->leave($__internal_c5a4718beae11abcfc38727b9aca872a494c0f84a23351c1646751a5168b2849_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_85c1086d4c0278004f22fe1cb71781fe70dc5ec31c00f64dc42efd70a63d463b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c1086d4c0278004f22fe1cb71781fe70dc5ec31c00f64dc42efd70a63d463b->enter($__internal_85c1086d4c0278004f22fe1cb71781fe70dc5ec31c00f64dc42efd70a63d463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_51e4f8b9e4a8e30446dd2ea95b4c551969633c3e17e39a64c43a70ae8b99b498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e4f8b9e4a8e30446dd2ea95b4c551969633c3e17e39a64c43a70ae8b99b498->enter($__internal_51e4f8b9e4a8e30446dd2ea95b4c551969633c3e17e39a64c43a70ae8b99b498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_51e4f8b9e4a8e30446dd2ea95b4c551969633c3e17e39a64c43a70ae8b99b498->leave($__internal_51e4f8b9e4a8e30446dd2ea95b4c551969633c3e17e39a64c43a70ae8b99b498_prof);

        
        $__internal_85c1086d4c0278004f22fe1cb71781fe70dc5ec31c00f64dc42efd70a63d463b->leave($__internal_85c1086d4c0278004f22fe1cb71781fe70dc5ec31c00f64dc42efd70a63d463b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0421882afa1ad0887056942c558cdd3e56d8da89c769e35b99e67072bb1e7581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0421882afa1ad0887056942c558cdd3e56d8da89c769e35b99e67072bb1e7581->enter($__internal_0421882afa1ad0887056942c558cdd3e56d8da89c769e35b99e67072bb1e7581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fef42d598064ca48fe7c6d78872cf7dc7ff8df9ca01f18ceafc0aec6aa0639d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fef42d598064ca48fe7c6d78872cf7dc7ff8df9ca01f18ceafc0aec6aa0639d->enter($__internal_4fef42d598064ca48fe7c6d78872cf7dc7ff8df9ca01f18ceafc0aec6aa0639d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4fef42d598064ca48fe7c6d78872cf7dc7ff8df9ca01f18ceafc0aec6aa0639d->leave($__internal_4fef42d598064ca48fe7c6d78872cf7dc7ff8df9ca01f18ceafc0aec6aa0639d_prof);

        
        $__internal_0421882afa1ad0887056942c558cdd3e56d8da89c769e35b99e67072bb1e7581->leave($__internal_0421882afa1ad0887056942c558cdd3e56d8da89c769e35b99e67072bb1e7581_prof);

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
