<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c6a5e94f44c7b09bbbe5518699c774d3e4df0cb9b3b8c9ba487f7940b050d59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_30d5713f4a844fb266fee40aefae15a43e57c52e55ae039ba7a36ed4ace7acad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d5713f4a844fb266fee40aefae15a43e57c52e55ae039ba7a36ed4ace7acad->enter($__internal_30d5713f4a844fb266fee40aefae15a43e57c52e55ae039ba7a36ed4ace7acad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ef4221a106fdd82dbc86d3b5b949d11dcb75781537618d05bf986f176dfbf61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4221a106fdd82dbc86d3b5b949d11dcb75781537618d05bf986f176dfbf61d->enter($__internal_ef4221a106fdd82dbc86d3b5b949d11dcb75781537618d05bf986f176dfbf61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d5713f4a844fb266fee40aefae15a43e57c52e55ae039ba7a36ed4ace7acad->leave($__internal_30d5713f4a844fb266fee40aefae15a43e57c52e55ae039ba7a36ed4ace7acad_prof);

        
        $__internal_ef4221a106fdd82dbc86d3b5b949d11dcb75781537618d05bf986f176dfbf61d->leave($__internal_ef4221a106fdd82dbc86d3b5b949d11dcb75781537618d05bf986f176dfbf61d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_559be8879aa7c8399bd8498d55e7dc9b556988a02b6826f80c384b9051ddd273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559be8879aa7c8399bd8498d55e7dc9b556988a02b6826f80c384b9051ddd273->enter($__internal_559be8879aa7c8399bd8498d55e7dc9b556988a02b6826f80c384b9051ddd273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72281d3d7cd6c08c4ce9bde3f72a65d8f427f04e12571fd3ef076c3e7235bf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72281d3d7cd6c08c4ce9bde3f72a65d8f427f04e12571fd3ef076c3e7235bf56->enter($__internal_72281d3d7cd6c08c4ce9bde3f72a65d8f427f04e12571fd3ef076c3e7235bf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_72281d3d7cd6c08c4ce9bde3f72a65d8f427f04e12571fd3ef076c3e7235bf56->leave($__internal_72281d3d7cd6c08c4ce9bde3f72a65d8f427f04e12571fd3ef076c3e7235bf56_prof);

        
        $__internal_559be8879aa7c8399bd8498d55e7dc9b556988a02b6826f80c384b9051ddd273->leave($__internal_559be8879aa7c8399bd8498d55e7dc9b556988a02b6826f80c384b9051ddd273_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_afda76ff05427809b798562c2d5770b906f948c913182106e1f0920e9980de1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afda76ff05427809b798562c2d5770b906f948c913182106e1f0920e9980de1c->enter($__internal_afda76ff05427809b798562c2d5770b906f948c913182106e1f0920e9980de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19ade0fd9fb6168435a5cbe17a49b34b1a1f4b670f57941620c03ddf2a2d3a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ade0fd9fb6168435a5cbe17a49b34b1a1f4b670f57941620c03ddf2a2d3a1a->enter($__internal_19ade0fd9fb6168435a5cbe17a49b34b1a1f4b670f57941620c03ddf2a2d3a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_19ade0fd9fb6168435a5cbe17a49b34b1a1f4b670f57941620c03ddf2a2d3a1a->leave($__internal_19ade0fd9fb6168435a5cbe17a49b34b1a1f4b670f57941620c03ddf2a2d3a1a_prof);

        
        $__internal_afda76ff05427809b798562c2d5770b906f948c913182106e1f0920e9980de1c->leave($__internal_afda76ff05427809b798562c2d5770b906f948c913182106e1f0920e9980de1c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ed1dbe8fe30b7dbd03e8e0c9cfe08f28a2e64ce5783a9004f069d84a796bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ed1dbe8fe30b7dbd03e8e0c9cfe08f28a2e64ce5783a9004f069d84a796bed->enter($__internal_d2ed1dbe8fe30b7dbd03e8e0c9cfe08f28a2e64ce5783a9004f069d84a796bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_307bd99c10fdbb49b1e83f1679650be839eaef891c85ef19e6acdea4d358fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307bd99c10fdbb49b1e83f1679650be839eaef891c85ef19e6acdea4d358fb36->enter($__internal_307bd99c10fdbb49b1e83f1679650be839eaef891c85ef19e6acdea4d358fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_307bd99c10fdbb49b1e83f1679650be839eaef891c85ef19e6acdea4d358fb36->leave($__internal_307bd99c10fdbb49b1e83f1679650be839eaef891c85ef19e6acdea4d358fb36_prof);

        
        $__internal_d2ed1dbe8fe30b7dbd03e8e0c9cfe08f28a2e64ce5783a9004f069d84a796bed->leave($__internal_d2ed1dbe8fe30b7dbd03e8e0c9cfe08f28a2e64ce5783a9004f069d84a796bed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
