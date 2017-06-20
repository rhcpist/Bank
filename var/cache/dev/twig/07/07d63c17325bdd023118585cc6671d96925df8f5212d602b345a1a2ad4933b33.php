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
        $__internal_845d01dd638d8a092447987ddf65ac1fc050f7ef7ca2b8949726900aaef3d1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845d01dd638d8a092447987ddf65ac1fc050f7ef7ca2b8949726900aaef3d1cc->enter($__internal_845d01dd638d8a092447987ddf65ac1fc050f7ef7ca2b8949726900aaef3d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e050bf010019d2a195b909ff5dd7b41be078d047b3099b1d7af2f0e06dee7db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e050bf010019d2a195b909ff5dd7b41be078d047b3099b1d7af2f0e06dee7db0->enter($__internal_e050bf010019d2a195b909ff5dd7b41be078d047b3099b1d7af2f0e06dee7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_845d01dd638d8a092447987ddf65ac1fc050f7ef7ca2b8949726900aaef3d1cc->leave($__internal_845d01dd638d8a092447987ddf65ac1fc050f7ef7ca2b8949726900aaef3d1cc_prof);

        
        $__internal_e050bf010019d2a195b909ff5dd7b41be078d047b3099b1d7af2f0e06dee7db0->leave($__internal_e050bf010019d2a195b909ff5dd7b41be078d047b3099b1d7af2f0e06dee7db0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_46e9c6b25009c3fe9917ffbed8e42ea95d3987cd007277955f7a879d6446f26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e9c6b25009c3fe9917ffbed8e42ea95d3987cd007277955f7a879d6446f26c->enter($__internal_46e9c6b25009c3fe9917ffbed8e42ea95d3987cd007277955f7a879d6446f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_124fdd809b10c3d168e36986ecb32e2c6f594f95169bf639d701be66eebb1a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124fdd809b10c3d168e36986ecb32e2c6f594f95169bf639d701be66eebb1a05->enter($__internal_124fdd809b10c3d168e36986ecb32e2c6f594f95169bf639d701be66eebb1a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_124fdd809b10c3d168e36986ecb32e2c6f594f95169bf639d701be66eebb1a05->leave($__internal_124fdd809b10c3d168e36986ecb32e2c6f594f95169bf639d701be66eebb1a05_prof);

        
        $__internal_46e9c6b25009c3fe9917ffbed8e42ea95d3987cd007277955f7a879d6446f26c->leave($__internal_46e9c6b25009c3fe9917ffbed8e42ea95d3987cd007277955f7a879d6446f26c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ee80aa889c1011a78e12e344387d82cf4a7b64d8624ccefd27f8cdbba93eb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee80aa889c1011a78e12e344387d82cf4a7b64d8624ccefd27f8cdbba93eb94->enter($__internal_9ee80aa889c1011a78e12e344387d82cf4a7b64d8624ccefd27f8cdbba93eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7273ba9695303dba288673be98184baaa6dc90de5d9eadf2a8ce3788b85f7318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7273ba9695303dba288673be98184baaa6dc90de5d9eadf2a8ce3788b85f7318->enter($__internal_7273ba9695303dba288673be98184baaa6dc90de5d9eadf2a8ce3788b85f7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7273ba9695303dba288673be98184baaa6dc90de5d9eadf2a8ce3788b85f7318->leave($__internal_7273ba9695303dba288673be98184baaa6dc90de5d9eadf2a8ce3788b85f7318_prof);

        
        $__internal_9ee80aa889c1011a78e12e344387d82cf4a7b64d8624ccefd27f8cdbba93eb94->leave($__internal_9ee80aa889c1011a78e12e344387d82cf4a7b64d8624ccefd27f8cdbba93eb94_prof);

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
