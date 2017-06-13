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
        $__internal_8685dd56c3c7c1ac13334415c1c9924773af4d3a91bd0f8ca3623c7b48501da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8685dd56c3c7c1ac13334415c1c9924773af4d3a91bd0f8ca3623c7b48501da6->enter($__internal_8685dd56c3c7c1ac13334415c1c9924773af4d3a91bd0f8ca3623c7b48501da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2bbb5e1ff2fa83ff6430ac14511c42f5756084416d090319710a31dfe1630861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbb5e1ff2fa83ff6430ac14511c42f5756084416d090319710a31dfe1630861->enter($__internal_2bbb5e1ff2fa83ff6430ac14511c42f5756084416d090319710a31dfe1630861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8685dd56c3c7c1ac13334415c1c9924773af4d3a91bd0f8ca3623c7b48501da6->leave($__internal_8685dd56c3c7c1ac13334415c1c9924773af4d3a91bd0f8ca3623c7b48501da6_prof);

        
        $__internal_2bbb5e1ff2fa83ff6430ac14511c42f5756084416d090319710a31dfe1630861->leave($__internal_2bbb5e1ff2fa83ff6430ac14511c42f5756084416d090319710a31dfe1630861_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e30db17b5784b8d06feca49af64dccabe1a898a0d550503196009a7299ef2d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30db17b5784b8d06feca49af64dccabe1a898a0d550503196009a7299ef2d2b->enter($__internal_e30db17b5784b8d06feca49af64dccabe1a898a0d550503196009a7299ef2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eb868d3718c4b448c66d9091bfd5d3bed33049c0b67916670d3cb14648ea504a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb868d3718c4b448c66d9091bfd5d3bed33049c0b67916670d3cb14648ea504a->enter($__internal_eb868d3718c4b448c66d9091bfd5d3bed33049c0b67916670d3cb14648ea504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_eb868d3718c4b448c66d9091bfd5d3bed33049c0b67916670d3cb14648ea504a->leave($__internal_eb868d3718c4b448c66d9091bfd5d3bed33049c0b67916670d3cb14648ea504a_prof);

        
        $__internal_e30db17b5784b8d06feca49af64dccabe1a898a0d550503196009a7299ef2d2b->leave($__internal_e30db17b5784b8d06feca49af64dccabe1a898a0d550503196009a7299ef2d2b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1e35e112f445b280af3f6ef3bcdc42870a4797c803852c3dfb5976503b0c63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e35e112f445b280af3f6ef3bcdc42870a4797c803852c3dfb5976503b0c63c->enter($__internal_b1e35e112f445b280af3f6ef3bcdc42870a4797c803852c3dfb5976503b0c63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc1e7eb02187c93cc08ddf32bf2c94a51cb8e15342d036872c1046ecf1ba5558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1e7eb02187c93cc08ddf32bf2c94a51cb8e15342d036872c1046ecf1ba5558->enter($__internal_dc1e7eb02187c93cc08ddf32bf2c94a51cb8e15342d036872c1046ecf1ba5558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dc1e7eb02187c93cc08ddf32bf2c94a51cb8e15342d036872c1046ecf1ba5558->leave($__internal_dc1e7eb02187c93cc08ddf32bf2c94a51cb8e15342d036872c1046ecf1ba5558_prof);

        
        $__internal_b1e35e112f445b280af3f6ef3bcdc42870a4797c803852c3dfb5976503b0c63c->leave($__internal_b1e35e112f445b280af3f6ef3bcdc42870a4797c803852c3dfb5976503b0c63c_prof);

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
