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
        $__internal_f002670fa3a52fec9ff20e2145ed48cf2e9700a02472195433794b0aee93c77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f002670fa3a52fec9ff20e2145ed48cf2e9700a02472195433794b0aee93c77e->enter($__internal_f002670fa3a52fec9ff20e2145ed48cf2e9700a02472195433794b0aee93c77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_be77f0c6bf881fd9d326b9770b8fa645d9b84279af3790b3200c21099e356e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be77f0c6bf881fd9d326b9770b8fa645d9b84279af3790b3200c21099e356e16->enter($__internal_be77f0c6bf881fd9d326b9770b8fa645d9b84279af3790b3200c21099e356e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f002670fa3a52fec9ff20e2145ed48cf2e9700a02472195433794b0aee93c77e->leave($__internal_f002670fa3a52fec9ff20e2145ed48cf2e9700a02472195433794b0aee93c77e_prof);

        
        $__internal_be77f0c6bf881fd9d326b9770b8fa645d9b84279af3790b3200c21099e356e16->leave($__internal_be77f0c6bf881fd9d326b9770b8fa645d9b84279af3790b3200c21099e356e16_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_65c116f8f04c6a1fd323c566b40aaf69f8a94ffcfb745c0c5b3ebb62452afc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c116f8f04c6a1fd323c566b40aaf69f8a94ffcfb745c0c5b3ebb62452afc66->enter($__internal_65c116f8f04c6a1fd323c566b40aaf69f8a94ffcfb745c0c5b3ebb62452afc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_aa6ef438d292287d945f9249db43643bc277ec76dc6addcd2a985f146baa7eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6ef438d292287d945f9249db43643bc277ec76dc6addcd2a985f146baa7eca->enter($__internal_aa6ef438d292287d945f9249db43643bc277ec76dc6addcd2a985f146baa7eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_aa6ef438d292287d945f9249db43643bc277ec76dc6addcd2a985f146baa7eca->leave($__internal_aa6ef438d292287d945f9249db43643bc277ec76dc6addcd2a985f146baa7eca_prof);

        
        $__internal_65c116f8f04c6a1fd323c566b40aaf69f8a94ffcfb745c0c5b3ebb62452afc66->leave($__internal_65c116f8f04c6a1fd323c566b40aaf69f8a94ffcfb745c0c5b3ebb62452afc66_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e86c14abeb9f36939c28bd0ecdebe613326a3c7a0fa95b51263e37508307ed33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86c14abeb9f36939c28bd0ecdebe613326a3c7a0fa95b51263e37508307ed33->enter($__internal_e86c14abeb9f36939c28bd0ecdebe613326a3c7a0fa95b51263e37508307ed33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fa3dff948b33fc9f5698ba79d234567ef6767bcbe4e171e9890fa69e348ba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa3dff948b33fc9f5698ba79d234567ef6767bcbe4e171e9890fa69e348ba3f->enter($__internal_3fa3dff948b33fc9f5698ba79d234567ef6767bcbe4e171e9890fa69e348ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3fa3dff948b33fc9f5698ba79d234567ef6767bcbe4e171e9890fa69e348ba3f->leave($__internal_3fa3dff948b33fc9f5698ba79d234567ef6767bcbe4e171e9890fa69e348ba3f_prof);

        
        $__internal_e86c14abeb9f36939c28bd0ecdebe613326a3c7a0fa95b51263e37508307ed33->leave($__internal_e86c14abeb9f36939c28bd0ecdebe613326a3c7a0fa95b51263e37508307ed33_prof);

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
