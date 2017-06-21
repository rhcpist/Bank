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
        $__internal_d2041c2517e622a51de57af9f0c9edd13b811b64fa689fc17b9b3434f7c896f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2041c2517e622a51de57af9f0c9edd13b811b64fa689fc17b9b3434f7c896f9->enter($__internal_d2041c2517e622a51de57af9f0c9edd13b811b64fa689fc17b9b3434f7c896f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bbed08d79c893055b8cf3e2a77f3585fb27db1421227521590cd66eb3e37db82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbed08d79c893055b8cf3e2a77f3585fb27db1421227521590cd66eb3e37db82->enter($__internal_bbed08d79c893055b8cf3e2a77f3585fb27db1421227521590cd66eb3e37db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2041c2517e622a51de57af9f0c9edd13b811b64fa689fc17b9b3434f7c896f9->leave($__internal_d2041c2517e622a51de57af9f0c9edd13b811b64fa689fc17b9b3434f7c896f9_prof);

        
        $__internal_bbed08d79c893055b8cf3e2a77f3585fb27db1421227521590cd66eb3e37db82->leave($__internal_bbed08d79c893055b8cf3e2a77f3585fb27db1421227521590cd66eb3e37db82_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_83e9025ad654907d443b2d1c02cb8c18b034e9c27a8a014bd285399d3c567ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e9025ad654907d443b2d1c02cb8c18b034e9c27a8a014bd285399d3c567ef5->enter($__internal_83e9025ad654907d443b2d1c02cb8c18b034e9c27a8a014bd285399d3c567ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dfd3f7fb004fdead55c57770b3ec798ef6eae7a775926a083773da034dddd25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd3f7fb004fdead55c57770b3ec798ef6eae7a775926a083773da034dddd25f->enter($__internal_dfd3f7fb004fdead55c57770b3ec798ef6eae7a775926a083773da034dddd25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dfd3f7fb004fdead55c57770b3ec798ef6eae7a775926a083773da034dddd25f->leave($__internal_dfd3f7fb004fdead55c57770b3ec798ef6eae7a775926a083773da034dddd25f_prof);

        
        $__internal_83e9025ad654907d443b2d1c02cb8c18b034e9c27a8a014bd285399d3c567ef5->leave($__internal_83e9025ad654907d443b2d1c02cb8c18b034e9c27a8a014bd285399d3c567ef5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff6d639af4f7f3de71a1fe2bb9243d287300532565a21684734aba97e6affd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6d639af4f7f3de71a1fe2bb9243d287300532565a21684734aba97e6affd97->enter($__internal_ff6d639af4f7f3de71a1fe2bb9243d287300532565a21684734aba97e6affd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_588a84c9920a927b13ebb7dd73f3c6bf848979db1e6fddcdfaf79ffcccc57e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588a84c9920a927b13ebb7dd73f3c6bf848979db1e6fddcdfaf79ffcccc57e9f->enter($__internal_588a84c9920a927b13ebb7dd73f3c6bf848979db1e6fddcdfaf79ffcccc57e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_588a84c9920a927b13ebb7dd73f3c6bf848979db1e6fddcdfaf79ffcccc57e9f->leave($__internal_588a84c9920a927b13ebb7dd73f3c6bf848979db1e6fddcdfaf79ffcccc57e9f_prof);

        
        $__internal_ff6d639af4f7f3de71a1fe2bb9243d287300532565a21684734aba97e6affd97->leave($__internal_ff6d639af4f7f3de71a1fe2bb9243d287300532565a21684734aba97e6affd97_prof);

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
