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
        $__internal_9f0576bfd01aa988a60db257c875ec72e529daa29a5b8fec866c1c7875c0e3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0576bfd01aa988a60db257c875ec72e529daa29a5b8fec866c1c7875c0e3cd->enter($__internal_9f0576bfd01aa988a60db257c875ec72e529daa29a5b8fec866c1c7875c0e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e2ac3f08b969b8258bd260d5a58cdf354c52712977c269ece5c965426516690b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ac3f08b969b8258bd260d5a58cdf354c52712977c269ece5c965426516690b->enter($__internal_e2ac3f08b969b8258bd260d5a58cdf354c52712977c269ece5c965426516690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0576bfd01aa988a60db257c875ec72e529daa29a5b8fec866c1c7875c0e3cd->leave($__internal_9f0576bfd01aa988a60db257c875ec72e529daa29a5b8fec866c1c7875c0e3cd_prof);

        
        $__internal_e2ac3f08b969b8258bd260d5a58cdf354c52712977c269ece5c965426516690b->leave($__internal_e2ac3f08b969b8258bd260d5a58cdf354c52712977c269ece5c965426516690b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e51e05f3371f879f997cad4aabe109f20162a0c396c0ee41a9de663f44c4b811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51e05f3371f879f997cad4aabe109f20162a0c396c0ee41a9de663f44c4b811->enter($__internal_e51e05f3371f879f997cad4aabe109f20162a0c396c0ee41a9de663f44c4b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eae30496ac97069f55013195d97a9e7ada2cf664e41de80ef75a1aa52c3049dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae30496ac97069f55013195d97a9e7ada2cf664e41de80ef75a1aa52c3049dc->enter($__internal_eae30496ac97069f55013195d97a9e7ada2cf664e41de80ef75a1aa52c3049dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eae30496ac97069f55013195d97a9e7ada2cf664e41de80ef75a1aa52c3049dc->leave($__internal_eae30496ac97069f55013195d97a9e7ada2cf664e41de80ef75a1aa52c3049dc_prof);

        
        $__internal_e51e05f3371f879f997cad4aabe109f20162a0c396c0ee41a9de663f44c4b811->leave($__internal_e51e05f3371f879f997cad4aabe109f20162a0c396c0ee41a9de663f44c4b811_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a4dbea224da03f6394fba054fb677ab2ace299ab8eaa7d013718a930a44184e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4dbea224da03f6394fba054fb677ab2ace299ab8eaa7d013718a930a44184e->enter($__internal_3a4dbea224da03f6394fba054fb677ab2ace299ab8eaa7d013718a930a44184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_564d787a73ff37c9de859055000073e4abbc5ac22b24a2eb8a894d976a09423c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564d787a73ff37c9de859055000073e4abbc5ac22b24a2eb8a894d976a09423c->enter($__internal_564d787a73ff37c9de859055000073e4abbc5ac22b24a2eb8a894d976a09423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_564d787a73ff37c9de859055000073e4abbc5ac22b24a2eb8a894d976a09423c->leave($__internal_564d787a73ff37c9de859055000073e4abbc5ac22b24a2eb8a894d976a09423c_prof);

        
        $__internal_3a4dbea224da03f6394fba054fb677ab2ace299ab8eaa7d013718a930a44184e->leave($__internal_3a4dbea224da03f6394fba054fb677ab2ace299ab8eaa7d013718a930a44184e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_87fb910c58b2e43c0355e602dcb0f40f89536385123591fb9eb97870bd607af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fb910c58b2e43c0355e602dcb0f40f89536385123591fb9eb97870bd607af5->enter($__internal_87fb910c58b2e43c0355e602dcb0f40f89536385123591fb9eb97870bd607af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7653145b26507a36764486345247f58dabd0d4fb264aa3628d46bcafd0a0d383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7653145b26507a36764486345247f58dabd0d4fb264aa3628d46bcafd0a0d383->enter($__internal_7653145b26507a36764486345247f58dabd0d4fb264aa3628d46bcafd0a0d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_7653145b26507a36764486345247f58dabd0d4fb264aa3628d46bcafd0a0d383->leave($__internal_7653145b26507a36764486345247f58dabd0d4fb264aa3628d46bcafd0a0d383_prof);

        
        $__internal_87fb910c58b2e43c0355e602dcb0f40f89536385123591fb9eb97870bd607af5->leave($__internal_87fb910c58b2e43c0355e602dcb0f40f89536385123591fb9eb97870bd607af5_prof);

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
