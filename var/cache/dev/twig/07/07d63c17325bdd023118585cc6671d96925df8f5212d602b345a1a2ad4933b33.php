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
        $__internal_6db19510a44a67c63b418aa3d623f94d7612cf09336e7847b58c2dd55ac79425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db19510a44a67c63b418aa3d623f94d7612cf09336e7847b58c2dd55ac79425->enter($__internal_6db19510a44a67c63b418aa3d623f94d7612cf09336e7847b58c2dd55ac79425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_df15371276c5a889d854025fddc2a8986163fc820f7661a444217ed0a2d54722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df15371276c5a889d854025fddc2a8986163fc820f7661a444217ed0a2d54722->enter($__internal_df15371276c5a889d854025fddc2a8986163fc820f7661a444217ed0a2d54722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db19510a44a67c63b418aa3d623f94d7612cf09336e7847b58c2dd55ac79425->leave($__internal_6db19510a44a67c63b418aa3d623f94d7612cf09336e7847b58c2dd55ac79425_prof);

        
        $__internal_df15371276c5a889d854025fddc2a8986163fc820f7661a444217ed0a2d54722->leave($__internal_df15371276c5a889d854025fddc2a8986163fc820f7661a444217ed0a2d54722_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_868d1ac73df5d520db744a6689287e8548a3fffa8a54e247d45f9c14523afdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868d1ac73df5d520db744a6689287e8548a3fffa8a54e247d45f9c14523afdf0->enter($__internal_868d1ac73df5d520db744a6689287e8548a3fffa8a54e247d45f9c14523afdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6ae76ef3989ea382f1a4fee3da728d1b0851f4838d97acdc65d3f8a83874cc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae76ef3989ea382f1a4fee3da728d1b0851f4838d97acdc65d3f8a83874cc50->enter($__internal_6ae76ef3989ea382f1a4fee3da728d1b0851f4838d97acdc65d3f8a83874cc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6ae76ef3989ea382f1a4fee3da728d1b0851f4838d97acdc65d3f8a83874cc50->leave($__internal_6ae76ef3989ea382f1a4fee3da728d1b0851f4838d97acdc65d3f8a83874cc50_prof);

        
        $__internal_868d1ac73df5d520db744a6689287e8548a3fffa8a54e247d45f9c14523afdf0->leave($__internal_868d1ac73df5d520db744a6689287e8548a3fffa8a54e247d45f9c14523afdf0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e92752a6ecca3ec479903ab2f9c7a420c6c12dbfa08cfa78f38dd3d444bdd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e92752a6ecca3ec479903ab2f9c7a420c6c12dbfa08cfa78f38dd3d444bdd16->enter($__internal_6e92752a6ecca3ec479903ab2f9c7a420c6c12dbfa08cfa78f38dd3d444bdd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66e99a99d899ffd8c8c823e7bd9258641eaf528c0af25ef702f6e05a13a54fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e99a99d899ffd8c8c823e7bd9258641eaf528c0af25ef702f6e05a13a54fa4->enter($__internal_66e99a99d899ffd8c8c823e7bd9258641eaf528c0af25ef702f6e05a13a54fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_66e99a99d899ffd8c8c823e7bd9258641eaf528c0af25ef702f6e05a13a54fa4->leave($__internal_66e99a99d899ffd8c8c823e7bd9258641eaf528c0af25ef702f6e05a13a54fa4_prof);

        
        $__internal_6e92752a6ecca3ec479903ab2f9c7a420c6c12dbfa08cfa78f38dd3d444bdd16->leave($__internal_6e92752a6ecca3ec479903ab2f9c7a420c6c12dbfa08cfa78f38dd3d444bdd16_prof);

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
