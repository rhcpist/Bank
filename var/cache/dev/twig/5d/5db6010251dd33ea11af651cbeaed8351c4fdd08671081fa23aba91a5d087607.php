<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bb67f339617a371b4c0c93a2fd197512923376a360d31ba62e9e02ff2001512a extends Twig_Template
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
        $__internal_564401ad710324fad78770b806e1b97697c9e8ce642e1bea177d070900ba9fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564401ad710324fad78770b806e1b97697c9e8ce642e1bea177d070900ba9fc3->enter($__internal_564401ad710324fad78770b806e1b97697c9e8ce642e1bea177d070900ba9fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_20777f218fcd500f21c170881a933ffb011afdd60087e06416b47d8b020ab1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20777f218fcd500f21c170881a933ffb011afdd60087e06416b47d8b020ab1a3->enter($__internal_20777f218fcd500f21c170881a933ffb011afdd60087e06416b47d8b020ab1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564401ad710324fad78770b806e1b97697c9e8ce642e1bea177d070900ba9fc3->leave($__internal_564401ad710324fad78770b806e1b97697c9e8ce642e1bea177d070900ba9fc3_prof);

        
        $__internal_20777f218fcd500f21c170881a933ffb011afdd60087e06416b47d8b020ab1a3->leave($__internal_20777f218fcd500f21c170881a933ffb011afdd60087e06416b47d8b020ab1a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_077856c79ab1cbeb06ac9158eb894597264a58bd68d5766b384418c53b5f9ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077856c79ab1cbeb06ac9158eb894597264a58bd68d5766b384418c53b5f9ba7->enter($__internal_077856c79ab1cbeb06ac9158eb894597264a58bd68d5766b384418c53b5f9ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac7d13214206b20732879e3f7cb8d645ac261d52fc052e57b0efacea3fee2a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7d13214206b20732879e3f7cb8d645ac261d52fc052e57b0efacea3fee2a39->enter($__internal_ac7d13214206b20732879e3f7cb8d645ac261d52fc052e57b0efacea3fee2a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac7d13214206b20732879e3f7cb8d645ac261d52fc052e57b0efacea3fee2a39->leave($__internal_ac7d13214206b20732879e3f7cb8d645ac261d52fc052e57b0efacea3fee2a39_prof);

        
        $__internal_077856c79ab1cbeb06ac9158eb894597264a58bd68d5766b384418c53b5f9ba7->leave($__internal_077856c79ab1cbeb06ac9158eb894597264a58bd68d5766b384418c53b5f9ba7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_956b248a5b8ffcef2deae5b6f96572a73d16536b4a0fa6622f4e575c8985f15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956b248a5b8ffcef2deae5b6f96572a73d16536b4a0fa6622f4e575c8985f15b->enter($__internal_956b248a5b8ffcef2deae5b6f96572a73d16536b4a0fa6622f4e575c8985f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9e5fd5fc43ab2d36233767b8fa20b80ff7ae012b2c8104b98325be9210bb1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e5fd5fc43ab2d36233767b8fa20b80ff7ae012b2c8104b98325be9210bb1d1->enter($__internal_f9e5fd5fc43ab2d36233767b8fa20b80ff7ae012b2c8104b98325be9210bb1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9e5fd5fc43ab2d36233767b8fa20b80ff7ae012b2c8104b98325be9210bb1d1->leave($__internal_f9e5fd5fc43ab2d36233767b8fa20b80ff7ae012b2c8104b98325be9210bb1d1_prof);

        
        $__internal_956b248a5b8ffcef2deae5b6f96572a73d16536b4a0fa6622f4e575c8985f15b->leave($__internal_956b248a5b8ffcef2deae5b6f96572a73d16536b4a0fa6622f4e575c8985f15b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_57036761e53c16f321d8c9da656386d0c8d4f7a203bae05fb9a6692f9c95bbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57036761e53c16f321d8c9da656386d0c8d4f7a203bae05fb9a6692f9c95bbbe->enter($__internal_57036761e53c16f321d8c9da656386d0c8d4f7a203bae05fb9a6692f9c95bbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35b8c11eb36db43f10af18e8b7767133f17067c5989adaf44be027a9f5e33dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b8c11eb36db43f10af18e8b7767133f17067c5989adaf44be027a9f5e33dfe->enter($__internal_35b8c11eb36db43f10af18e8b7767133f17067c5989adaf44be027a9f5e33dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_35b8c11eb36db43f10af18e8b7767133f17067c5989adaf44be027a9f5e33dfe->leave($__internal_35b8c11eb36db43f10af18e8b7767133f17067c5989adaf44be027a9f5e33dfe_prof);

        
        $__internal_57036761e53c16f321d8c9da656386d0c8d4f7a203bae05fb9a6692f9c95bbbe->leave($__internal_57036761e53c16f321d8c9da656386d0c8d4f7a203bae05fb9a6692f9c95bbbe_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
