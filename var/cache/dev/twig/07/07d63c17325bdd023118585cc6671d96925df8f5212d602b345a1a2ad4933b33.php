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
        $__internal_11571a4f8f2338312a50cbb58be606f414fc4fdba6b3884b2df6966ffdee7adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11571a4f8f2338312a50cbb58be606f414fc4fdba6b3884b2df6966ffdee7adc->enter($__internal_11571a4f8f2338312a50cbb58be606f414fc4fdba6b3884b2df6966ffdee7adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e0b7ea5b32409c097f4040bc056185dac20e323086a68c1243248206d6be169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b7ea5b32409c097f4040bc056185dac20e323086a68c1243248206d6be169d->enter($__internal_e0b7ea5b32409c097f4040bc056185dac20e323086a68c1243248206d6be169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11571a4f8f2338312a50cbb58be606f414fc4fdba6b3884b2df6966ffdee7adc->leave($__internal_11571a4f8f2338312a50cbb58be606f414fc4fdba6b3884b2df6966ffdee7adc_prof);

        
        $__internal_e0b7ea5b32409c097f4040bc056185dac20e323086a68c1243248206d6be169d->leave($__internal_e0b7ea5b32409c097f4040bc056185dac20e323086a68c1243248206d6be169d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d1ae97018f5b0e8167019fa725b77d1764400f78a65b917a2e053b322404eb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ae97018f5b0e8167019fa725b77d1764400f78a65b917a2e053b322404eb77->enter($__internal_d1ae97018f5b0e8167019fa725b77d1764400f78a65b917a2e053b322404eb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_01714e409a49843a85971318e6306e00830d1d748974eea273dc7a16709ff792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01714e409a49843a85971318e6306e00830d1d748974eea273dc7a16709ff792->enter($__internal_01714e409a49843a85971318e6306e00830d1d748974eea273dc7a16709ff792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_01714e409a49843a85971318e6306e00830d1d748974eea273dc7a16709ff792->leave($__internal_01714e409a49843a85971318e6306e00830d1d748974eea273dc7a16709ff792_prof);

        
        $__internal_d1ae97018f5b0e8167019fa725b77d1764400f78a65b917a2e053b322404eb77->leave($__internal_d1ae97018f5b0e8167019fa725b77d1764400f78a65b917a2e053b322404eb77_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5b48ecd013ff347b74229ee931e1ba8ea163eb48e4eb46f5d62b66c747e9dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b48ecd013ff347b74229ee931e1ba8ea163eb48e4eb46f5d62b66c747e9dbe->enter($__internal_c5b48ecd013ff347b74229ee931e1ba8ea163eb48e4eb46f5d62b66c747e9dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5531ebaecb462f638e6385e0904dd1d9749b896e200a103b9698919ef82a285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5531ebaecb462f638e6385e0904dd1d9749b896e200a103b9698919ef82a285->enter($__internal_b5531ebaecb462f638e6385e0904dd1d9749b896e200a103b9698919ef82a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b5531ebaecb462f638e6385e0904dd1d9749b896e200a103b9698919ef82a285->leave($__internal_b5531ebaecb462f638e6385e0904dd1d9749b896e200a103b9698919ef82a285_prof);

        
        $__internal_c5b48ecd013ff347b74229ee931e1ba8ea163eb48e4eb46f5d62b66c747e9dbe->leave($__internal_c5b48ecd013ff347b74229ee931e1ba8ea163eb48e4eb46f5d62b66c747e9dbe_prof);

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
